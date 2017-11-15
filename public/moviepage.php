<?php require_once("../includes/data/db_config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/templates/header.php"); ?>

<?php 
	if(isset($_GET["movieid"])) {
		echo fetch_details_movie($_GET["movieid"]);
	}

?>

<?php include("../includes/templates/footer.php"); ?>