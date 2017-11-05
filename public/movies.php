<?php require_once("../includes/data/db_config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/templates/header.php"); ?>

<div id="main">
	<div id="navigation">
		<ul>
			<li><a href="#">nav1</a></li>
			<li><a href="#">nav2</a></li>
			<li><a href="#">nav3</a></li>
		</ul>
	</div>
	<div id="page">
		<div id="wrap">
		<form id="searchbox" action="">
		    <input id="search" type="text" placeholder="Search movies here">
		    <button id="submit" type="submit"><i class="fa fa-search"></i></button>
		</form>
		</div>
	</div>
</div>

<?php include("../includes/templates/footer.php"); ?>