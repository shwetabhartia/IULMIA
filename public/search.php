<?php require_once("../includes/data/db_config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/templates/header.php"); ?>

<div id="main">
	<table>
		<tr>
			<td width="40%"><div id="navigation" style="padding-left: 43%; padding-bottom: 95%"><a href="movies.php"><img src="../public/images/NewSearchN.png" alt="New Search" width="100%"></a></div></td>
			<td width="60%"><div id="page"><?php echo search_movie_by_title($_POST["title"]); ?></div></td>
		</tr>
	</table>
	<!-- <div id="navigation">
		<p style="padding-top:50%;"><a href="movies.php"><img src="../public/images/NewSearchN.png" alt="New Search" width="160" align="right" ></a></p>
	</div>
	<div id="page">
	</div>-->
</div>

<?php include("../includes/templates/footer.php"); ?>