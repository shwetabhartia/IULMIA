<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/data/db_config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php include("../includes/templates/header-admin.php"); ?>

<div id="main">
	<table>
		<tr>
			<td width="20%"><div id="navigation" style="padding-left: 43%; padding-bottom: 95%">
				<br>
				<br>
				<br>
				<a href="ingest.php"><img src="../public/images/NewSearchN.png" alt="New Search" width="100%"></a>
			</div></td>
			<td width="80%"><div id="page">
				<?php
					global $connection; 
					$results_per_page = 3;
					// find out the number of results stored in database
					if (isset($_POST["title"])) {
						$_SESSION["title"] = $_POST["title"];
					}
					$query = search_movie_by_title($_SESSION["title"]); //method returns query
					$search_results = mysqli_query($connection, $query);
					confirm_query($search_results);
					$number_of_results = mysqli_num_rows($search_results);

					if ($number_of_results == 0) {
						$_SESSION["message"] = "No movies found for this search.";
						redirect_to("ingest.php");
					}

					// determine number of total pages available
					$number_of_pages = ceil($number_of_results/$results_per_page);

					// determine which page number visitor is currently on
					if (!isset($_GET['page'])) {
						$page = 1;
					} else {
						$page = $_GET['page'];
					}

					// determine the sql LIMIT starting number for the results on the displaying page
					$this_page_first_result = ($page-1)*$results_per_page;

					// retrieve selected results from database and display them on page
					$queryPagination = $query . ' LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
					$search_results_page = mysqli_query($connection, $queryPagination);
					confirm_query($search_results_page);
					$offset = $this_page_first_result + 1;
					$output = "<h2>Search Results</h2><ol start = \"$offset\">";
					while($movie = mysqli_fetch_array($search_results_page)) {
						$output .= "<li><h3>";
						$output .= "<a href=\"moviepageadmin.php?movieid=";
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
					echo $output;

					// display the links to the pages
					for ($page=1;$page<=$number_of_pages;$page++) {
						echo '<a href="searchadmin.php?page=' . $page . '">' . $page . '</a> ';
					}
				?>
			</div></td>
		</tr>
	</table>
</div>

<?php include("../includes/templates/footer.php"); ?>