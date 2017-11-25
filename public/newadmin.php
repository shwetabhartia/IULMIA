<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/data/db_config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php
if (isset($_POST['createadmin'])) {
  // Process the form
  
  // validations
  $required_fields = array("username", "password");
  validate_presences($required_fields);
  
  $fields_with_max_lengths = array("username" => 30);
  validate_max_lengths($fields_with_max_lengths);
  
  if (empty($errors)) {
    // Perform Create

    $username = mysql_prep($_POST["username"]);
    $hashed_password = password_encrypt($_POST["password"]);
    
    $query  = "INSERT INTO admins (";
    $query .= "  username, hashed_password";
    $query .= ") VALUES (";
    $query .= "  '{$username}', '{$hashed_password}'";
    $query .= ")";
    $result = mysqli_query($connection, $query);

    if ($result) {
      // Success
      $_SESSION["message"] = "Admin created.";
      redirect_to("adminrights.php");
    } else {
      // Failure
      $_SESSION["message"] = "Admin creation failed.";
    }
  }
} else {
  // This is probably a GET request
  
} // end: if (isset($_POST['createadmin']))

?>

<?php include("../includes/templates/header-admin.php"); ?>
<div id="main">
	<table>
		<tr>
			<td width="20%">
				<div id="navigation" style="padding-left: 40%;">
					<a href="editadmin.php"><img src="../public/images/removeMetadata_N.png" alt="Edit Admins" width="100%"></a>
					<br>
					<br>
					<br>
					<a href="removeadmin.php"><img src="../public/images/editMetadata_N.png" alt="Remove Admins" width="100%"></a>
				</div>
			</td>
			<td width="80%">
				<div id="page">
					<?php echo message(); ?>
					<?php echo form_errors($errors); ?>
					<h2>Create Admin</h2>
					<form action="newadmin.php" method="post">
						<p>Username: <input type="text" name="username" value="" /></p>
						<p>Password: <input type="password" name="password" value="" /></p>
						<button type="submit" name="createadmin" id="submit-icon"><img src="../public/images/Add_Admin_N.png"></button>
					</form>
					<br />
					<a href="adminrights.php">Cancel</a>
				</div>
			</td>
		</tr>
	</table>
</div>
<?php include("../includes/templates/footer.php"); ?>
