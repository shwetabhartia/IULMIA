<?php
require_once('../includes/data/db_config.php');
require_once("../includes/functions.php");
$perpage = 10;
if(isset($_GET['page']) & !empty($_GET['page'])){
	$curpage = $_GET['page'];
}else{
	$curpage = 1;
}
$start = ($curpage * $perpage) - $perpage;
$PageSql = "SELECT * FROM `BIB_BASIC`";
$pageres = mysqli_query($connection, $PageSql);
$totalres = mysqli_num_rows($pageres);
 
$endpage = ceil($totalres/$perpage);
$startpage = 1;
$nextpage = $curpage + 1;
$previouspage = $curpage - 1;
 
$ReadSql = "SELECT * FROM `BIB_BASIC` LIMIT $start, $perpage";
$res = mysqli_query($connection, $ReadSql);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Simple CRUD Application - READ Operation</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
		<link rel="stylesheet" href="styles.css" >
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 </head>
	<body>
		<div class="container">
			<div class="row">
				<table class="table "> 
					<thead> 
					<tr><?php echo show_columns() ?></tr>
					</thead> 
					<tbody> 
					<?php 
					while($r = mysqli_fetch_assoc($res)){
					?>
					<tr>
						<td><?php echo $r['Bib_IU_Barcode']; ?></td> 
						<td><?php echo $r['Bib_Collect']; ?></td> 
						<td><?php echo $r['Bib_Media_Type']; ?></td> 
						<td><?php echo $r['Bib_Series_Name']; ?></td>
						<td><?php echo $r['Bib_Series_Part']; ?></td>
						<td><?php echo $r['Bib_Title']; ?></td>
						<td><?php echo $r['Bib_Alt_Title']; ?></td>
						<td><?php echo $r['Bib_Version']; ?></td>
						<td><?php echo $r['Bib_Reel_No']; ?></td>
						<td><?php echo $r['Bib_Summary']; ?></td>
						<td><?php echo $r['Bib_Creator']; ?></td>
						<td><?php echo $r['Bib_Producer']; ?></td>
						<td><?php echo $r['Bib_Genre']; ?></td>
						<td><?php echo $r['Bib_Subject']; ?></td>
						<td><?php echo $r['Bib_Date']; ?></td>
						<td><?php echo $r['Bib_Location']; ?></td>
						<td><?php echo $r['Bib_Title_Note']; ?></td>
						<td><?php echo $r['Bib_Orig_Med']; ?></td>
						<td><?php echo $r['Bib_Orig_Gauge']; ?></td>
						<td><?php echo $r['Bib_Generation']; ?></td>
						<td><?php echo $r['Bib_Color']; ?></td>
						<td><?php echo $r['Bib_Sound']; ?></td>
						<td><?php echo $r['Bib_Frame_Rate']; ?></td>
						<td><?php echo $r['Bib_Aspect_Ratio']; ?></td>
						<td><?php echo $r['Bib_Dur']; ?></td>
						<td><?php echo $r['Bib_Dial_Lang']; ?></td>
					</tr> 
					<?php } ?>
					</tbody> 
				</table>
			</div>

			<nav aria-label="Page navigation">
				<ul class="pagination">
					<?php if($curpage != $startpage){ ?>
					<li class="page-item">
					<a class="page-link" href="?page=<?php echo $startpage ?>" tabindex="-1" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
					<span class="sr-only">First</span>
					</a>
					</li>
					<?php } ?>
					<?php if($curpage >= 2){ ?>
					<li class="page-item"><a class="page-link" href="?page=<?php echo $previouspage ?>"><?php echo $previouspage ?></a></li>
					<?php } ?>
					<li class="page-item active"><a class="page-link" href="?page=<?php echo $curpage ?>"><?php echo $curpage ?></a></li>
					<?php if($curpage != $endpage){ ?>
					<li class="page-item"><a class="page-link" href="?page=<?php echo $nextpage ?>"><?php echo $nextpage ?></a></li>
					<li class="page-item">
					<a class="page-link" href="?page=<?php echo $endpage ?>" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
					<span class="sr-only">Last</span>
					</a>
					</li>
					<?php } ?>
				</ul>
			</nav>
		</div>

	</body>
</html>