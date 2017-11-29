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
	}

	function filter_movie($movie_collection, $movie_genre, $movie_subject) {
		global $connection;
		$where_clause_array = Array();

		if (count($movie_collection) > 0) {		
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
			array_push($where_clause_array, $collection);
		}

		if (count($movie_genre) > 0) {
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
			array_push($where_clause_array, $genre);
		}

		if (count($movie_subject) > 0) {
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
			array_push($where_clause_array, $subject);
		}
		$where_clause = join(" AND ", $where_clause_array);

		$query = "SELECT Bib_IU_Barcode, Bib_Title, Bib_Creator, Bib_Date_Created, Bib_Summary FROM BIB_BASIC WHERE $where_clause ";
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

	//Find if the movie exists by iu barcode
	function find_movie_by_id($iu_barcode) {
	
		global $connection;
		$safe_iu_barcode = mysqli_real_escape_string($connection, $iu_barcode);
		
		$query = "Select * from BIB_BASIC where Bib_IU_Barcode = {$iu_barcode} ";
		$result = mysqli_query($connection, $query);
			
		if ($result && mysqli_num_rows($result) >= 0) {
			return $result;
		} else {
			return false;
		}
	}

	/*Admin funtions - start*/
	function find_all_admins() {
		global $connection;

		$query  = "SELECT * ";
		$query .= "FROM admins ";
		$query .= "ORDER BY username ASC";
		$admin_set = mysqli_query($connection, $query);
		confirm_query($admin_set);
		return $admin_set;
	}

	function find_admin_by_id($admin_id) {
		global $connection;

		$safe_admin_id = mysqli_real_escape_string($connection, $admin_id);

		$query  = "SELECT * ";
		$query .= "FROM admins ";
		$query .= "WHERE id = {$safe_admin_id} ";
		$query .= "LIMIT 1";
		$admin_set = mysqli_query($connection, $query);
		confirm_query($admin_set);
		if($admin = mysqli_fetch_assoc($admin_set)) {
			return $admin;
		} else {
			return null;
		}
	}

	function find_admin_by_username($username) {
		global $connection;
		
		$safe_username = mysqli_real_escape_string($connection, $username);
		
		$query  = "SELECT * ";
		$query .= "FROM admins ";
		$query .= "WHERE username = '{$safe_username}' ";
		$query .= "LIMIT 1";
		$admin_set = mysqli_query($connection, $query);
		confirm_query($admin_set);
		if($admin = mysqli_fetch_assoc($admin_set)) {
			return $admin;
		} else {
			return null;
		}
	}

	function password_encrypt($password) {
		$hash_format = "$2y$10$";	// Tells PHP to use Blowfish with a "cost" of 10
		$salt_length = 22;			// Blowfish salts should be 22-characters or more
		$salt = generate_salt($salt_length);
		$format_and_salt = $hash_format . $salt;
		$hash = crypt($password, $format_and_salt);
		return $hash;
	}
	
	function generate_salt($length) {
		// Not 100% unique, not 100% random, but good enough for a salt
		// MD5 returns 32 characters
		$unique_random_string = md5(uniqid(mt_rand(), true));

		// Valid characters for a salt are [a-zA-Z0-9./]
		$base64_string = base64_encode($unique_random_string);

		// But not '+' which is valid in base64 encoding
		$modified_base64_string = str_replace('+', '.', $base64_string);

		// Truncate string to the correct length
		$salt = substr($modified_base64_string, 0, $length);

		return $salt;
	}
	
	function password_check($password, $existing_hash) {
		// existing hash contains format and salt at start
		$hash = crypt($password, $existing_hash);
		if ($hash === $existing_hash) {
			return true;
		} else {
			return false;
		}
	}

	function attempt_login($username, $password) {
		$admin = find_admin_by_username($username);
		if ($admin) {
			// found admin, now check password
			if (password_check($password, $admin["hashed_password"])) {
			// password matches
			return $admin;
			} else {
			// password does not match
			return false;
			}
		} else {
			// admin not found
			return false;
		}
	}

	function logged_in() {
		return isset($_SESSION['admin_id']);
	}
	
	function confirm_logged_in() {
		if (!logged_in()) {
			redirect_to("admin.php");
		}
	}

	/*Admin funtions - end*/

?>