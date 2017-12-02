<?php require_once("../includes/data/db_config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/session.php"); ?>
<?php confirm_logged_in(); ?>
<?php include("../includes/templates/header-admin.php"); ?>

<div id="main">
	<table>
		<tr>
			<td width="20%">
				<br>
				<br>
				<div id="navigation" style="padding-left: 43%; padding-bottom: 95%">
					<a href="condition.php"><img src="../public/images/formsCondition_N.png" alt="Condition" width="100%"></a>
					<br>
					<br>
					<br>
					<a href="value.php"><img src="../public/images/formsValue_N.png" alt="Value" width="100%"></a>
					<br>
					<br>
					<br>
					<a href="tracking.php"><img src="../public/images/formsTracking_N.png" alt="Tracking" width="100%"></a>
				</div>
			</td>
			<td width="80%">
        <div id="page">
          <div id="wrap">
					<form id="searchbox" action="trackingresults.php" method="post">
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