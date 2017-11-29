<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/data/db_config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php include("../includes/templates/header-admin.php"); ?>

<div id="main">
	<table>
		<tr>
			<td width="20%">
				<br>
				<br>
				<div id="navigation" style="padding-left: 43%; padding-bottom: 95%">
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
			<td width="80%"><div id="page">
				<?php echo message(); ?>
				<div id="wrap">
					<form id="searchbox" action="searchadmin.php" method="post">
					    <input id="search" type="text" placeholder="Search By Title" name="title"/>
					    <button id="submit" type="submit" name="submit"><i class="fa fa-search"></i></button>
					</form>
					</div>
			</div></td>
		</tr>
	</table>
</div>

<?php include("../includes/templates/footer.php"); ?>