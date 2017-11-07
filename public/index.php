<?php include("../includes/templates/header.php"); ?>

<div id="login-container">
	<p>Brief paragraph about IULMIA, maybe an introduction or a concise set of words describing the film collection at IULMIA. Now putting in filler lines to make this a sizeable paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla adipiscing, tortor rutrum adipiscing molestie, mauris purus ullamcorper felis, non tincidunt est lorem a est. Nullam blandit tincidunt pellentesque. Vivamus nisi nunc, tincidunt vel nisl vitae, luctus imperdiet risus. Vestibulum suscipit porta interdum. Proin vitae arcu eu enim feugiat adipiscing id sed justo. Mauris in risus elementum, aliquam orci non, venenatis ligula.</p>
	<h1>Part of Indiana University?</h1>
	<p>Indiana University uses your network username and password to login to IULMIA. Continue to login to IULMIA through your network.</p>
	<button class="button" type="submit" formaction="/login.php">Continue</button>
	<div id="login-other-choices">
		<a href="/form.php">Not a part of Indiana University?</a> <!--This link should redirect to form(IULMIA)-->
	</div>
</div>
<script>console.log('At index.php');</script>
<?php include("../includes/templates/footer.php"); ?>
