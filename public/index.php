<?php
session_start();
include("../includes/templates/header.php");?>

<div id="login-container">
	<p>As a part of Indiana University, click on Continue to login through IU CAS and complete your loan request.</p>
	</br>
	<button class="button" onclick="location.href='cas.php?movieid=<?php echo $_GET["movieid"];?>'">Continue</button>
</div>
<div id="login-other-choices">
	<a href="form.php">Not a part of Indiana University?</a> <!--This link should redirect to form(IULMIA)-->
</div>

<?php
//print_r($_SESSION);
include("../includes/templates/footer.php"); ?>
