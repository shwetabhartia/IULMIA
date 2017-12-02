<?php require_once("../includes/data/db_config.php"); ?>
<?php include("../includes/templates/header.php");

global $connection;
$query = "select Per_ID from Person";
$result = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($result)){
  echo $row['Per_ID']."</br>";
}


include("../includes/templates/footer.php"); ?>
