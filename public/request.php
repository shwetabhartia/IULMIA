<?php
session_start();
include("../includes/templates/header.php");
require_once("../includes/data/db_config.php");

$user = $_SESSION['user'];

$sql = "SELECT Per_ID from Person where Per_IUUsername = '$user'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$person_id = $row['Per_ID'];



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
