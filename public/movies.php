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
		<h2>PAGE</h1>
		<form class="search_bar larger">
			<div class="search_dropdown" style="width: 16px;">
				<span>All</span>
				<ul>
					<li class="selected">All</li>
					<li>Books</li>
					<li>Articles</li>
				</ul>
			</div>

			<input type="text" placeholder="Search for anything" />

			<button type="submit" value="Search">Search</button>
		</form>
		
	</div>
</div>

<?php include("../includes/templates/footer.php"); ?>