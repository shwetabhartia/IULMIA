<?php
session_start();
include("../includes/templates/header.php");
require_once("../includes/data/db_config.php");
?>

<div id="login-container">
	<p style="text-align:center; font-size:14px;">As a part of Indiana University, click on Continue to login through IU CAS and complete your loan request.</p>
	</br>
	<button class="button" onclick="location.href='cas.php'">Continue</button>
</div>
	<span style="text-align:justify-content;"><a href="form.php">Not a part of Indiana University?</a></span> <!--This link should redirect to form(IULMIA)-->
</br>
</br>
</br>
<?php include("../includes/templates/footer.php"); ?>