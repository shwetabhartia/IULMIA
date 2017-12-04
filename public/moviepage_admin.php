<?php
session_start();
 require_once("../includes/data/db_config.php");
 require_once("../includes/functions.php");
 confirm_logged_in();
 include("../includes/templates/header.php");?>

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
			</div></td>
			<td width="80%"><div id="page">
			<?php
				if(isset($_GET["movieid"])) {
					$movie_details = fetch_details_movie($_GET["movieid"]);
					$output = "<h2>";
					$_SESSION['movieid'] = $_GET["movieid"];
					while ($mov = mysqli_fetch_assoc($movie_details)) {
						$output .= $mov["Bib_Title"] . "</h2>";
						$output .= "IU Barcode: " . $mov["Bib_IU_Barcode"] . "<br>";
						$output .= "Collection: " . $mov["Bib_Collection"] . "<br>";
						$output .= "Media Type: " . $mov["Bib_Media_Type"] . "<br>";
						$output .= "Series Name: " . $mov["Bib_Series_Name"] . "<br>";
						$output .= "Series Part: " . $mov["Bib_Series_Part"] . "<br>";
						$output .= "Series Production No: " . $mov["Bib_Series_Production_No"] . "<br>";
						$output .= "Title: " . $mov["Bib_Title"] . "<br>";
						$output .= "Alternative Title: " . $mov["Bib_Alternative_Title"] . "<br>";
						$output .= "Version No: " . $mov["Bib_Version_No"] . "<br>";
						$output .= "Reel No: " . $mov["Bib_Reel_No"] . "<br>";
						$output .= "Summary: " . $mov["Bib_Summary"] . "<br>";
						$output .= "Creator: " . $mov["Bib_Creator"] . "<br>";
						$output .= "Producer: " . $mov["Bib_Producer"] . "<br>";
						$output .= "Genre: " . $mov["Bib_Genre"] . "<br>";
						$output .= "Subject: " . $mov["Bib_Subject"] . "<br>";
						$output .= "Date Created: " . $mov["Bib_Date_Created"] . "<br>";
						$output .= "Location: " . $mov["Bib_Location"] . "<br>";
						$output .= "Title Note: " . $mov["Bib_Title_Note"] . "<br>";
						$output .= "Original Medium: " . $mov["Bib_Original_Medium"] . "<br>";
						$output .= "Original Gauge: " . $mov["Bib_Original_Gauge"] . "<br>";
						$output .= "Generation: " . $mov["Bib_Generation"] . "<br>";
						$output .= "Color: " . $mov["Bib_Color"] . "<br>";
						$output .= "Sound: " . $mov["Bib_Sound"] . "<br>";
						$output .= "Frame Rate: " . $mov["Bib_Frame_Rate"] . "<br>";
						$output .= "Aspect Ratio: " . $mov["Bib_Aspect_Ratio"] . "<br>";
						$output .= "Duration: " . $mov["Bib_Duration"] . "<br>";
						$output .= "Language: " . $mov["Bib_Language"] . "<br>";
					}
					echo "$output";

				}

			?>
			</div></td>
		</tr>
	</table>
</div>

<?php include("../includes/templates/footer.php"); ?>
