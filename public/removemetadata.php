<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/data/db_config.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php
	if (isset($_POST['remove'])) {
		global $connection;
		$movie = find_movie_by_id($_POST["Bib_IU_Barcode"]); // find if movie exist in database
		if (!$movie) {
			// Barcode was missing or invalid or 
			// Barcode couldn't be found in database
			$_SESSION["message"] = "IU Barcode Invalid. Deletion failed.";
			redirect_to("ingest.php");
		}
		
		while ($m = mysqli_fetch_assoc($movie)) {
			$IU_Barcode = $m["Bib_IU_Barcode"];

			$query_bib_basic = "DELETE FROM BIB_BASIC WHERE BIB_IU_Barcode = '{$IU_Barcode}' LIMIT 1";
			$result_bib_basic = mysqli_query($connection, $query_bib_basic);
			$bib_basic_row = mysqli_affected_rows($connection);
			
			$query_bib_ident = "DELETE FROM BIB_IDENT WHERE BIB_IU_Barcode = '{$IU_Barcode}' LIMIT 1";
			$result_bib_ident = mysqli_query($connection, $query_bib_ident);
			$bib_ident_row = mysqli_affected_rows($connection);
			
			$query_bib_tech = "DELETE FROM BIB_TECH WHERE BIB_IU_Barcode = '{$IU_Barcode}' LIMIT 1";
			$result_bib_tech = mysqli_query($connection, $query_bib_tech);
			$bib_tech_row = mysqli_affected_rows($connection);
			
			$query_bib_cond = "DELETE FROM BIB_COND WHERE BIB_IU_Barcode = '{$IU_Barcode}' LIMIT 1";
			$result_bib_cond = mysqli_query($connection, $query_bib_cond);
			$bib_cond_row = mysqli_affected_rows($connection);
		
		}
		if (($result_bib_basic && $bib_basic_row >= 1) && ($result_bib_ident && $bib_ident_row >= 1) && ($result_bib_tech && $bib_tech_row >= 1) && ($result_bib_cond && $bib_cond_row >= 1)) {
			// Success
			$_SESSION["message"] = "Metadata deleted.";
			redirect_to("ingest.php");
		} else {
			// Failure
			$_SESSION["message"] = "Metadata deletion failed.";
			redirect_to("ingest.php");
		}
		
	}
	
?>


<?php include("../includes/templates/header-admin.php"); ?>
<div id="main">
	<table>
		<tr>
			<td width="20%">
				<div id="navigation" style="padding-left: 40%;">
					<a href="setmetadata.php"><img src="../public/images/setMetadata_N.png" alt="Set Metadata" width="100%"></a>
					<br>
					<br>
					<br>
					<a href="removemetadata.php"><img src="../public/images/removeMetadata_N.png" alt="Remove Metadata" width="100%"></a>
					<br>
					<br>
					<br>
					<a href="editmetadata.php"><img src="../public/images/editMetadata_N.png" alt="Edit Metadata" width="100%"></a>
				</div>
			</td>
			<td width="80%">
				<div id="page">
					<?php echo message(); ?>
					<?php $errors = errors(); ?>
					<?php echo form_errors($errors); ?>
					<form action="removemetadata.php" method="post">
						<p>Enter IU Barcode for the movie you would like to delete: <input type="text" name="Bib_IU_Barcode" value="" /></p>
						<button type="submit" name="remove" id="submit-icon" onclick="return confirm('Are you sure?');"><img src="../public/images/SubmitN.png" /></button>
					</form>
				</div>
			</td>
		</tr>
	</table>
</div>
<?php include("../includes/templates/footer.php"); ?>