<?php
session_start();
include("../includes/templates/header.php"); ?>
<?php require_once("../includes/data/db_config.php"); ?>
<?php require_once("../includes/functions.php");
global $connection;
$per_id = "select cast(Per_ID as unsigned) as Per_ID_int from Person where Per_IUMember = 0";
$per_id_result = mysqli_query($connection, $per_id);
while($row = mysqli_fetch_array($per_id_result)){
  $new_per_id = $row['Per_ID_int'] + 1;
}
$new_per_id = (string) mysql_prep($new_per_id);
$lname = mysql_prep($_POST['lastname']);
$fname = mysql_prep($_POST['firstname']);
$organisation = mysql_prep($_POST['organisation']);
$areacode = (int) ($_POST['area_code']);
$phoneno = mysql_prep($_POST['phone_no']);
$street = mysql_prep($_POST['street']);
$city = mysql_prep($_POST['city']);
$state = mysql_prep($_POST['state']);
$zipcode = (int) ($_POST['zipcode']);
$region = mysql_prep($_POST['region']);
$country = mysql_prep($_POST['country']);
$iumember = 0;
$field = 'NULL';
$Bib_IU_Barcode = (string) $_SESSION["movieid"];
$purpose = (string) $_POST['purpose'];
$curr_loc = "IULMIA Screening Room";
$new_loan_request = "INSERT INTO LOAN(Per_ID, Bib_IU_Barcode, Loan_Date, Loan_Return_Date, Loan_Returned_Date, Loan_Ext_Date, Loan_Purpose, Loan_Screen_Loc) VALUES('$new_per_id', '$Bib_IU_Barcode', NULL, NULL, NULL, NULL, '$purpose', '$curr_loc')";
$enter_new_person_query = "INSERT INTO PERSON(Per_ID, Per_Last_Name, Per_First_Name, Per_Organization, Per_Area_Code, Per_Phone_No, Per_Street, Per_City, Per_State, Per_Zip_Code, Per_Region, Per_Country, Per_IUMember, Per_IUusername)";
$enter_new_person_query .= "VALUES ('{$new_per_id}', '{$lname}','{$fname}', '{$organisation}', {$areacode}, '{$phoneno}', '{$street}', '{$city}', '{$state}', {$zipcode}, '{$region}', '{$country}', {$iumember}, '{$field}')";
$check_film_present = "Select Per_ID from Loan where Bib_IU_Barcode = $Bib_IU_Barcode";
$check_film_result = mysqli_query($connection, $check_film_present);
if(mysqli_num_rows($check_film_result) >= 1){
  echo'<div id="non-iu-form">
    <h3 style="color:#990000;">REQUEST NOT SUBMITTED</h3>
    </br>
    </br>
    <p>Thank you for requesting a film from the IU Libraries Moving Image Archive.
    </br>
    </br>
    </br>
    However, this film has currently been checked out. You can alternatively search for another film or try again later.</p>
    <a href="index.php"><img src="../public/images/NewSearchN.png" alt="New Search" width="120" height="30"></a>
    </br>
    </br>
    </br>
  </div>';
}
//echo $new_per_id;
else{
  $enter_new_person_result = mysqli_query($connection, $enter_new_person_query);
  $new_loan_request_result = mysqli_query($connection, $new_loan_request);
  if($enter_new_person_result and $new_loan_request_result){
    echo'<div id="non-iu-form">
    <h3 style="color:#990000;">REQUEST SUBMITTED</h3>
      </br>
      </br>
      <p>Thank you for requesting a film from the IU Libraries Moving Image Archive.
      </br>
      </br>
      </br>
      Your request has been submitted and an email confirming dates available for viewing will be sent to you shortly.</p>
      <a href="index.php"><img src="../public/images/NewSearchN.png" alt="New Search" width="120" height="30"></a>
      </br>
      </br>
      </br>
    </div>';
  }
  else{
    echo'<div id="non-iu-form">
    <h3 style="color:#990000;">REQUEST NOT SUBMITTED</h3>
      </br>
      </br>
      <p>Thank you for requesting a film from the IU Libraries Moving Image Archive.
      </br>
      </br>
      </br>
      However, your request could not be processed. Try again!</p>
      <a href="index.php"><img src="../public/images/NewSearchN.png" alt="New Search" width="120" height="30"></a>
      </br>
      </br>
      </br>
    </div>';
  }
}?>
<?php include("../includes/templates/footer.php"); ?>