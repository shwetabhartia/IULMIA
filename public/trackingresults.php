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
            $results_per_page = 3;
            // find out the number of results stored in database
            if (isset($_POST["title"])) {
              $_SESSION["title"] = $_POST["title"];
            }

            $query = search_movie_by_loan($_SESSION["title"]); //method returns query
            $search_results = mysqli_query($connection, $query);
            confirm_query($search_results);
            $number_of_results = mysqli_num_rows($search_results);
            if($number_of_results < 1){
              echo '<p style="text-align:center; font-size:16px;">No loan request has been recorded for your search query. Please try again by clicking on the Tracking tab.</p>';
            }
            else{


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

              $output = "<h2 style=\"color:#990000;\">Tracking Results</h2></br><ol start = '$offset'>";
              while($movie = mysqli_fetch_array($search_results_page)) {
                $output .= "<li style=\"text-align:left;\"><h3>";
                $output .= $movie["Bib_Title"];
                $output .= "</h3>";
                $output .= "</a>";
                $output .= "Creator:";
                $output .= $movie["Bib_Creator"];
                $output .=  "<br>";
                $output .= "Loan Date:";
                $output .= $movie["Loan_Date"];
                $output .=  "<br>";
                $output .=  "Loan Location: ";
                $output .= $movie["Bibident_Current_Loc"];
                $output .= "<br></li>";
              }
              $output .= "</ol>";
              echo $output;

              if($number_of_results > 3){
                // display the links to the pages
                for ($page=1;$page<=$number_of_pages;$page++) {
                  echo '<a href="search.php?page=' . $page . '">' . $page . '</a> ';
                }
              }
          }
          ?>
        </div>
      </td>
    </tr>
  </table>
</div>
