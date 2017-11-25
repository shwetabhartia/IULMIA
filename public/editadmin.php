<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/data/db_config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php
  $admin = find_admin_by_id($_GET["id"]);
  
  if (!$admin) {
    // admin ID was missing or invalid or 
    // admin couldn't be found in database
    redirect_to("adminrights.php");
  }
?>

<?php
if (isset($_POST['editadmin'])) {
  // Process the form
  
  // validations
  $required_fields = array("username", "password");
  validate_presences($required_fields);
  
  $fields_with_max_lengths = array("username" => 30);
  validate_max_lengths($fields_with_max_lengths);
  
  if (empty($errors)) {
    
    // Perform Update

    $id = $admin["id"];
    $username = mysql_prep($_POST["username"]);
    $hashed_password = password_encrypt($_POST["password"]);
  
    $query  = "UPDATE admins SET ";
    $query .= "username = '{$username}', ";
    $query .= "hashed_password = '{$hashed_password}' ";
    $query .= "WHERE id = {$id} ";
    $query .= "LIMIT 1";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_affected_rows($connection) == 1) {
      // Success
      $_SESSION["message"] = "Admin updated.";
      redirect_to("adminrights.php");
    } else {
      // Failure
      $_SESSION["message"] = "Admin update failed.";
    }
  
  }
} else {
  // This is probably a GET request
  
} // end: if (isset($_POST['editadmin']))

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
					<h2>Edit Admin: <?php echo htmlentities($admin["username"]); ?></h2>
					<form action="editadmin.php?id=<?php echo urlencode($admin["id"]); ?>" method="post">
						<p>Username: <input type="text" name="username" value="<?php echo htmlentities($admin["username"]); ?>" /></p>
						<p>Password: <input type="password" name="password" value="" /></p>
						<button type="submit" name="editadmin" id="submit-icon"><img src="../public/images/Edit_Admin_N.png"></button>
					</form>
					<br />
					<a href="adminrights.php">Cancel</a>
				</div>
			</td>
		</tr>
	</table>
</div>
<?php include("../includes/templates/footer.php"); ?>
