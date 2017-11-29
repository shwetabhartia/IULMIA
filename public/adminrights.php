<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/data/db_config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php
  $admin_set = find_all_admins();
?>

<?php include("../includes/templates/header-admin.php"); ?>
<div id="main" style="padding-top: 5%; padding-bottom: 5%;">
	<table align="center">
		<tr>
			<td>
				<div id="page">
					<?php echo message(); ?>
					<h2>Manage Admins</h2>
					<table style="border-collapse: collapse;">
						<tr>
							<th style="text-align: left; width: 200px;">Username</th>
							<th colspan="2" style="text-align: left;">Actions</th>
						</tr>
						<?php while($admin = mysqli_fetch_assoc($admin_set)) { ?>
						<tr>
							<td style="border: 0px;"><?php echo htmlentities($admin["username"]); ?></td>
							<td style="border: 0px;"><a href="editadmin.php?id=<?php echo urlencode($admin["id"]); ?>">Edit</a></td>
							<td style="border: 0px;"><a href="deleteadmin.php?id=<?php echo urlencode($admin["id"]); ?>" onclick="return confirm('Are you sure?');">Delete</a></td>
						</tr>
						<?php } ?>
					</table>
					<br />
					<a href="newadmin.php">Add new admin</a>
				</div>
			</td>
		</tr>
	</table>
</div>
<?php include("../includes/templates/footer.php"); ?>
