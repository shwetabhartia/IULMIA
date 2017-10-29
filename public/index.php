<?php include("../includes/templates/header.php"); ?>

<div id="login-container">
	<h1>Part of Indiana University?</h1>
	<p>Indiana University uses your network username and password to login to IULMIA. Continue to login to IULMIA through your network.</p>
	<form method="post" action ="/login">
		<button class="button" type="submit" class="btn btn-primary btn-full-width">Continue</button>
	</form>
	<div id="login-other-choices">
		<a href="#">Not a part of Indiana University?</a>
	</div>
</div>

<?php include("../includes/templates/footer.php"); ?>