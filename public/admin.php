<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/data/db_config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php");
$username = "";
if (isset($_POST['submit'])) {
  // Process the form

  // validations
  $required_fields = array("username", "password");
  validate_presences($required_fields);

  if (empty($errors)) {
    // Attempt Login
		$username = $_POST["username"];
		$password = $_POST["password"];

		$found_admin = attempt_login($username, $password);
    if ($found_admin) {
      // Success
			// Mark user as logged in
			$_SESSION["admin_id"] = $found_admin["id"];
			$_SESSION["username"] = $found_admin["username"];
      redirect_to("ingest.php");
    } else {
      // Failure
      $_SESSION["message"] = "Username/password not match.";
    }
  }
} else {
  // This is probably a GET request

} // end: if (isset($_POST['submit']))
?>

<?php include("../includes/templates/header.php"); ?>
<div id="main" style="padding-top: 5%; padding-bottom: 5%;">
	<table align="center">
		<tr>
			<td align="center">
				<div id="page">
					<?php echo message(); ?>
					<?php echo form_errors($errors); ?>
					<form action="admin.php" method="post" style="position:relative; display:inline-block; padding:20px; width: 50%; margin:20px; border:2px solid #ccc;">
            <h2 style="text-align:center;">Admin Login</h2>
            <div class = "form-container">
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="firstname" placeholder="First Name" required>

              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="lastname" placeholder="Last Name" required>
						<!-- <p>Username: <input type="text" name="username" value="<?php echo htmlentities($username); ?>" /></p>
						<p>Password: <input type="password" name="password" value="" /></p> -->
						<button type="submit" name="submit" id="submit-icon"><img src="../public/images/SubmitN.png"/></button>
            </div>
					</form>
			</td>
		</tr>
	</table>
</div>
<?php include("../includes/templates/footer.php"); ?>
