<?php require_once("../includes/data/db_config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/session.php"); ?>
<?php confirm_logged_in(); ?>
<?php include("../includes/templates/header-admin.php"); ?>

<div id="main">
	<table>
		<tr>
			<td width="20%">
				<br>
				<br>
				<div id="navigation" style="padding-left: 43%; padding-bottom: 95%">
					<a href="condition.php"><img src="../public/images/setMetadata_N.png" alt="Condition" width="100%"></a>
					<br>
					<br>
					<br>
					<a href="value.php"><img src="../public/images/removeMetadata_N.png" alt="Value" width="100%"></a>
					<br>
					<br>
					<br>
					<a href="tracking.php"><img src="../public/images/editMetadata_N.png" alt="Tracking" width="100%"></a>
				</div>
			</td>
			<td width="80%">
        <div id="page">
          <?php
            global $connection;
            $retrieve_condition_query = 'SELECT BIB_BASIC.Bib_IU_Barcode, BIB_BASIC.Bib_Title, BIB_BASIC.Bib_Creator, BIB_COND.BibCond_Overall_Condition, BIB_COND.BibCond_Overall_Condition_Note from BIB_BASIC INNER JOIN BIB_COND ON BIB_BASIC.Bib_IU_Barcode = BIB_COND.Bib_IU_Barcode ORDER BY BIB_COND.BibCond_Overall_Condition DESC';
            $results_per_page = 10;
            $retrieve_condition_result = mysqli_query($connection, $retrieve_condition_query);
            confirm_query($retrieve_condition_result);
  					$number_of_results = mysqli_num_rows($retrieve_condition_result);
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
            $queryPagination = $retrieve_condition_query . ' LIMIT ' . $this_page_first_result . ' , ' .$results_per_page;

            $pageresults = mysqli_query($connection, $queryPagination);
            confirm_query($pageresults);

            $offset = $this_page_first_result + 1;
            $output = "<h2 style=\"color:#990000;\">CONDITION</h2></br><ol start = '$offset'>";
  					while($movie = mysqli_fetch_array($pageresults)) {
  						$output .= "<li style=\"text-align:left;\"><h3>";
  						$output .= $movie["Bib_Title"];
  						$output .= "</h3>";
  						$output .= "Creator:";
  						$output .= $movie["Bib_Creator"];
  						$output .=  "<br>";
  						$output .= "Overall Condition:";
  						$output .= $movie["BibCond_Overall_Condition"];
  						$output .=  "<br>";
  						$output .=  "Overall Condition Note: ";
  						$output .= $movie["BibCond_Overall_Condition_Note"];
  						$output .= "<br></li>";
  					}
  					$output .= "</ol>";
  					echo $output;


            // display the links to the pages
  					for ($page=1;$page<=$number_of_pages;$page++) {
  						echo '<a href="condition.php?page=' . $page . '">' . $page . '</a> ';
  					}

           ?>
        </div>
      </td>
		</tr>
	</table>
</div>


<?php include("../includes/templates/footer.php"); ?>
