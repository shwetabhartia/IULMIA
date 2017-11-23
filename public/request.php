<?php
session_start();
include("../includes/templates/header.php");
require_once("../includes/data/db_config.php");

$user = $_SESSION['user'];

$fetch_id_sql = "SELECT Per_ID from Person where Per_IUUsername = '$user'";
$fetch_id_result = mysqli_query($connection, $fetch_id_sql);
$fetch_id_row = mysqli_fetch_assoc($fetch_id_result);
$person_id = $fetch_id_row['Per_ID'];

// $insert_loan_sql = "INSERT INTO Loan(Per_ID, Bib_IU_Barcode, Loan_Date, Loan_Return_Date, Loan_Returned_Date, Loan_Ext_Date, Loan_Purpose, Bibident_Current_Loc)"
// $insert_loan_sql .= "VALUES('{$person_id}', )";

// $sql = "INSERT INTO LOAN
// VALUES ()";


?>
<!-- <h3>User name is <?php echo $person_id; ?></h3> -->
<div id="submit-request-container">
    <h3 style="color:#990000;">REQUEST SUBMITTED</h3>
    </br>
    </br>
    <p>Thank you for requesting a film from the IU Libraries Moving Image Archive.
    </br>
    </br>
    </br>
    Your request has been submitted and an email confirming dates available for viewing will be sent to you shortly.</p>
</div>

<?php include("../includes/templates/footer.php"); ?>
