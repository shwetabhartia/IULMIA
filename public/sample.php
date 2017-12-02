<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/data/db_config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<?php
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
					<table align="center" cellpadding="0" cellspacing="0" width="100%">
						<tbody>
							<tr>
								<td bgcolor="#333333">
									<table class="deviceWidth" align="center" bgcolor="#333333" border="0" cellpadding="0" cellspacing="0" width="300">
										<tbody>
											<tr bgcolor="#333333">
												<td style="padding:20px 10px; color: white" align="center" bgcolor="#333333" valign="top"><b>ADMIN SIGN IN</b></td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
						<tbody>
							<tr>
								<form method="post" action="sample.php">
									<td style="padding:10px" bgcolor="#990000" align="center">
										<table class="deviceWidth" align="center" border="0" cellpadding="0" cellspacing="0" width="300">
											<tbody>
												<tr bgcolor="#990000">
													<td style="color: black; padding:10px" align="center">
														<input type="text" name="username" size="35%" placeholder="Username"> 
													</td>
												</tr>
											</tbody>
										</table>

										<table class="deviceWidth" align="center" border="0" cellpadding="0" cellspacing="0" width="300">
											<tbody>
												<tr bgcolor="#990000">
													<td style="color: black; padding:10px" align="center">
														<input type="password" name="password" size="35%" placeholder="Password"> 
													</td>
												</tr>
											</tbody>
										</table>

										<table class="deviceWidth" align="center" border="0" cellpadding="0" cellspacing="0" width="300">
											<tbody>
												<tr bgcolor="#990000">
													<td style="color: black; padding:10px" align="center">
														<button type="submit" name="submit" id="submit-icon"><img src="../public/images/SubmitN.png"/></button> 
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</form>
							</tr>
						</tbody>
					</table>
				</div>
			</td>
		</tr>
	</table>
</div>
<?php include("../includes/templates/footer.php"); ?>