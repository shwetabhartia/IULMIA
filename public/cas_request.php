<?php
session_start();
include("../includes/templates/header.php");
require_once("../includes/data/db_config.php");
require_once("../includes/functions.php");
date_default_timezone_set('America/Indiana/Indianapolis');


global $connection;
$user = $_SESSION['user'];
// $user = 'noronham';
echo $user;
$movieid = $_SESSION['movieid'];
// $movieid = '30000149802336';

$fetch_id_sql = "SELECT Per_ID from Person where Per_IUUsername = '$user'";
$fetch_id_result = mysqli_query($connection, $fetch_id_sql);
confirm_query($fetch_id_result);
while($fetch_id_row = mysqli_fetch_assoc($fetch_id_result)){
  $person_id = $fetch_id_row['Per_ID'];
}


$check_film_present = "SELECT Per_ID from Loan where Bib_IU_Barcode = $movieid";
$check_film_result = mysqli_query($connection, $check_film_present);
confirm_query($fetch_id_result);
if(mysqli_num_rows($check_film_result) >= 1){
  echo'<div id="non-iu-form">
    <h3 style="color:#990000; padding-bottom:30px;">REQUEST NOT SUBMITTED</h3>
    </br>
    </br>
    <p>Thank you for requesting a film from the IU Libraries Moving Image Archive.
    </br>
    </br>
    </br>
    However, this film has currently been checked out. You can alternatively search for another film or try again later.</p>
    <a href="movies.php"><img src="../public/images/NewSearchN.png" alt="New Search" width="120" height="30"></a>
  </div>';
}
else{
  // $fetch_id_sql = "SELECT Per_ID from Person where Per_IUUsername = '$user'";
 // $fetch_id_result = mysqli_query($connection, $fetch_id_sql);
 // $fetch_id_row = mysqli_fetch_assoc($fetch_id_result);
 // $person_id = $fetch_id_row['Per_ID'];

 $today_date = date("Y-m-d");
 $return_date = date("Y-m-d", strtotime("+2 Weeks"));
 $purpose_of_loan = 'Screening for media studies';
 $curr_loc = 'ALF';

 $insert_loan_sql = "INSERT INTO Loan(Per_ID, Bib_IU_Barcode, Loan_Date, Loan_Return_Date, Loan_Returned_Date, Loan_Ext_Date, Loan_Purpose, Bibident_Current_Loc) VALUES($person_id, $movieid, $today_date, $return_date, NULL, NULL, $purpose_of_loan, $curr_loc)";
 $result_insert_loan = mysqli_query($connection, $insert_loan_sql);

 echo '<div id="submit-request-container" style="text-align=justify;">
     <h3 style="color:#990000;">REQUEST SUBMITTED</h3>
     </br>
     </br>
     <p>Thank you for requesting a film from the IU Libraries Moving Image Archive.
     </br>
     </br>
     </br>
     Your request has been submitted and an email confirming dates available for viewing will be sent to you shortly.</p>
     <a href="movies.php"><img src="../public/images/NewSearchN.png" alt="New Search" width="120" height="30"></a>
 </div>';

}

?>




<?php include("../includes/templates/footer.php"); ?>
