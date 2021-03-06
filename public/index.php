<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/data/db_config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/templates/header.php"); ?>

<div id="main">
	<table>
		<tr>
			<td width="20%">
				<div id="navigation">
					<form action="filter.php" method="post">
						<h2 style="color: #df1e35; text-align: right; padding-right: 5% ">Filter Movies</h2>
						<ul style="list-style: none; text-align: right; padding-right: 5%">
							<li><h3 style="color: #df1e35;">COLLECTION</h3> <?php echo fetch_column_values("Bib_Collection"); ?>
							</li>
							<li><h3 style="color: #df1e35;">GENRE</h3></li> <?php echo fetch_column_values("Bib_Genre"); ?>
							<li><h3 style="color: #df1e35;">SUBJECT</h3></li> <?php echo fetch_column_values("Bib_Subject"); ?>
						</ul>
						<button type="submit" name="filter" id="submit-icon" style="padding-bottom: 20%;"><img src="../public/images/Filter_H.png" id="submit-icon" /></button>
					</form>
				</div>
			</td>
			<td width="80%">
				<div id="page">
					<?php echo message(); ?>
					<div id="wrap">
					<form id="searchbox" action="search.php" method="post">
					    <input id="search" type="text" placeholder="Search By Title" name="title"/>
					    <button id="submit" type="submit" name="submit"><i class="fa fa-search"></i></button>
					</form>
					</div>
				</div>
			</td>
		</tr>
	</table>
</div>

<?php include("../includes/templates/footer.php"); ?>