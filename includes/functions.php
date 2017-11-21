<?php

	function redirect_to($new_location) {
		header("Location: " . $new_location);
		exit;
	}

	function mysql_prep($string) {
		global $connection;
		
		$escaped_string = mysqli_real_escape_string($connection, $string);
		return $escaped_string;
	}
	
	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed.");
		}
	}

	function form_errors($errors=array()) {
		$output = "";
		if (!empty($errors)) {
			$output .= "<div class=\"error\">";
			$output .= "Please fix the following errors:";
			$output .= "<ul>";
			foreach ($errors as $key => $error) {
				$output .= "<li>";
				$output .= htmlentities($error);
				$output .= "</li>";
			}
			$output .= "</ul>";
			$output .= "</div>";
		}
		return $output;
	}

	function show_columns() {
		global $connection;

		$query = "SHOW COLUMNS FROM BIB_BASIC";
		$columns_list = mysqli_query($connection, $query);
		confirm_query($columns_list);
		$output = "";
		while($col = mysqli_fetch_assoc($columns_list)) {
			$output .= "<th>";
			$output .= $col["Field"];
			$output .= "</th>";
		}
		return $output;
	}


	function fetch_column_values($column_name) {
		global $connection;
		$query = "Select DISTINCT($column_name) from BIB_BASIC";
		$column_values = mysqli_query($connection, $query);
		confirm_query($column_values);
		$output = "";
		while ($val = mysqli_fetch_assoc($column_values)) {
			$output .= $val[$column_name];
			$output .= "<input type=\"checkbox\" ";
			$output .= "name=\"";
			$output .= $column_name;
			$output .= "[]";
			$output .= "\" value=\"";
			$output .= $val[$column_name];
			$output .= "\"/> <br>" ;
		}
		return $output;

	}


	function search_movie_by_title($movie_title) {
		
		$movie_title = explode(' ', $movie_title);

		$query = 'SELECT Bib_IU_Barcode, Bib_Title, Bib_Creator, Bib_Date_Created, Bib_Summary FROM BIB_BASIC WHERE ';

		$parts = array();
		foreach( $movie_title as $movie_title_word ){
		$parts[] = '`Bib_Title` LIKE "%'.$movie_title_word.'%"';
		}

		$query .= implode(' OR ', $parts);
		return $query;
		/*$search_results = mysqli_query($connection, $query);
		confirm_query($search_results);
		$output = "<h2>Search Results</h2><ol>";
		while ($movie = mysqli_fetch_assoc($search_results)) {
			$output .= "<li><h3>";
			$output .= "<a href=\"moviepage.php?movieid=";
			$output .= urlencode($movie["Bib_IU_Barcode"]);
			$output .= "\">";
			$output .= $movie["Bib_Title"];
			$output .= "</h3>";
			$output .= "</a>";
			$output .= "Creator :";
			$output .= $movie["Bib_Creator"];
			$output .=  "<br>";
			$output .= "Date Created :";
			$output .= $movie["Bib_Date_Created"];
			$output .=  "<br>";
			$output .=  "Summary : ";
			$output .= $movie["Bib_Summary"];
			$output .= "<br></li>";
		}
		$output .= "</ol>";
		return $output;*/
	}

	function filter_movie($movie_collection, $movie_genre, $movie_subject) {
		global $connection;
				
		$collection = "";

		foreach($movie_collection as $index => $c) {
			if ($collection == "") $collection = "Bib_Collection IN ("; //if it's the first detected option, add the IN clause to the string
			$collection .= "'" . $c."',";
		}
		//trim the trailing comma and add the closing bracket of the IN clause instead
		if ($collection != "") {
			$collection = rtrim($collection, ","); 
			$collection .= ")";
		}

		$genre = "";
		foreach($movie_genre as $index => $g) {
			if ($genre == "") $genre = "Bib_Genre IN ("; //if it's the first detected option, add the IN clause to the string
			$genre .= "'" . $g."',";
		}
		//trim the trailing comma and add the closing bracket of the IN clause instead
		if ($genre != "") {
			$genre = rtrim($genre, ","); 
			$genre .= ")";
		}

		$subject = "";
		foreach($movie_subject as $index => $s) {
			if ($subject == "") $subject = "Bib_Subject IN ("; //if it's the first detected option, add the IN clause to the string
			$subject .= "'" . $s."',";
		}
		//trim the trailing comma and add the closing bracket of the IN clause instead
		if ($subject != "") {
			$subject = rtrim($subject, ","); 
			$subject .= ")";
		}

		$query = "SELECT Bib_IU_Barcode, Bib_Title, Bib_Creator, Bib_Date_Created, Bib_Summary FROM BIB_BASIC WHERE $collection AND $genre AND $subject";
		//print $query;
		return $query;
	}

	function fetch_details_movie($movie_id) {
		global $connection;
		$query = "Select * from BIB_BASIC where Bib_IU_Barcode = $movie_id";
		$movie_details = mysqli_query($connection, $query);
		confirm_query($movie_details);
		return $movie_details;
	}

?>