<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/data/db_config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/templates/header.php"); ?>

<div id="main">
	<table>
		<tr>
			<td width="20%"><div id="navigation" style="padding-left: 43%; padding-bottom: 95%"><a href="index.php"><img src="../public/images/NewSearchFilter_N.png" alt="New SF" width="100%"></a></div></td>
			<td width="80%"><div id="page">
				<?php
					
					global $connection;
					$results_per_page = 3;

					if (isset($_GET['page'])) {
						$_SESSION['Bib_Collection'] = isset($_SESSION['Bib_Collection']) ? $_SESSION['Bib_Collection'] : Array();
						$_SESSION['Bib_Genre'] = isset($_SESSION['Bib_Genre']) ? $_SESSION['Bib_Genre'] : Array();
						$_SESSION['Bib_Subject'] = isset($_SESSION['Bib_Subject']) ? $_SESSION['Bib_Subject'] : Array();
					} else {
						$_SESSION['Bib_Collection'] = isset($_POST['Bib_Collection']) ? $_POST['Bib_Collection'] : Array();
						$_SESSION['Bib_Genre'] = isset($_POST['Bib_Genre']) ? $_POST['Bib_Genre'] : Array();
						$_SESSION['Bib_Subject'] = isset($_POST['Bib_Subject']) ? $_POST['Bib_Subject'] : Array();
					}
					
					if (count($_SESSION['Bib_Collection']) == 0 && count($_SESSION['Bib_Genre']) == 0 && count($_SESSION['Bib_Subject']) == 0) {
						$_SESSION["message"] = "Select atleast 1 filter";
						redirect_to("index.php");
					}

					$query = filter_movie($_SESSION["Bib_Collection"], $_SESSION["Bib_Genre"], $_SESSION["Bib_Subject"]);

					$filter_results = mysqli_query($connection, $query);
					confirm_query($filter_results);
					$number_of_results = mysqli_num_rows($filter_results);

					if ($number_of_results == 0) {
						$_SESSION["message"] = "No movies found for this filter.";
						redirect_to("index.php");
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
					$filter_results_page = mysqli_query($connection, $queryPagination);
					confirm_query($filter_results_page);
					$offset = $this_page_first_result + 1;
					$output = "<h2>Filter Results</h2><ol start = '$offset'>";
					while($movie = mysqli_fetch_array($filter_results_page)) {
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
					echo $output;

					// display the links to the pages
					for ($page=1;$page<=$number_of_pages;$page++) {
						echo '<a href="filter.php?page=' . $page . '">' . $page . '</a> ';
					}
					
				?>
			</div></td>
		</tr>
	</table>
</div>

<?php include("../includes/templates/footer.php"); ?>