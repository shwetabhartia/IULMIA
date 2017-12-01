<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/data/db_config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php include("../includes/templates/header-admin.php"); ?>

<div id="main">
	<table>
		<tr>
			<td width="20%"><div id="navigation" style="padding-left: 40%; padding-bottom: 98%">
				<br>
				<br>
				<br>
				<a href="ingest.php"><img src="../public/images/NewSearchN.png" alt="New Search" width="100%"></a>
			</div></td>
			<td width="80%"><div id="page">
			
			<?php 
				if(isset($_GET["movieid"])) {
					$movie_bib_details = fetch_details_movie($_GET["movieid"]);
					$output = "<h2>";
					$output .= "Movie Title: ";
					while ($mov = mysqli_fetch_assoc($movie_bib_details)) {
						$output .= $mov["Bib_Title"] . "</h2><br>";
						$output .= "<h3>METADATA BASICS</h3>";
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
			<br>
			<h3>METADATA IDENTIFICATION</h3>
			<?php 
				if(isset($_GET["movieid"])) {
					$movie_bib_details = fetch_ident_details_movie($_GET["movieid"]);
					$output = "";
					while ($mov = mysqli_fetch_assoc($movie_bib_details)) {
						$output .= "Staff ID: " . $mov["Per_ID"] . "<br>";
						$output .= "IUCAT Title No.: " . $mov["Bibident_IUCAT_Title_No"] . "<br>";
						$output .= "Date Record Created: " . $mov["Bibident_Date_Record_Created"] . "<br>";
						$output .= "MDPI Barcode: " . $mov["Bibident_MDPI_Barcode"] . "<br>";
						$output .= "Current Location: " . $mov["Bibident_Current_Location"] . "<br>";
						$output .= "Alf_Shelf_Location: " . $mov["Bibident_Alf_Shelf_Location"] . "<br>";
						$output .= "Original Identification: " . $mov["Bibident_Original_Identification"] . "<br>";
						$output .= "Accompanying Doc ID: " . $mov["Bibident_Accompanying_Doc_ID"] . "<br>";
						$output .= "Accompanying Doc Title: " . $mov["Bibident_Accompanying_Doc_Title"] . "<br>";
						$output .= "Accompanying Doc Location: " . $mov["Bibident_Accompanying_Doc_Location"] . "<br>";
					}
					echo "$output";
				}
			?>
			<br>
			<h3>METADATA TECHNICAL</h3>
			<?php 
				if(isset($_GET["movieid"])) {
					$movie_bib_details = fetch_tech_details_movie($_GET["movieid"]);
					$output = "";
					while ($mov = mysqli_fetch_assoc($movie_bib_details)) {
						$output .= "Multi Item Can: " . $mov["BibTech_Multi_Item_Can"] . "<br>";
						$output .= "Picture Type: " . $mov["BibTech_Picture_Type"] . "<br>";
						$output .= "Sound Form Type: " . $mov["BibTech_Sound_Form_Type"] . "<br>";
						$output .= "Sound Content Type: " . $mov["BibTech_Sound_Content_Type"] . "<br>";
						$output .= "Original Sound Field: " . $mov["BibTech_Original_Sound_Field"] . "<br>";
						$output .= "Caption Subtitle Language: " . $mov["BibTech_Caption_Subtitle_Language"] . "<br>";
						$output .= "Caption Subtitle Note: " . $mov["BibTech_Caption_Subtitle_Note"] . "<br>";
						$output .= "Base: " . $mov["BibTech_Base"] . "<br>";
						$output .= "Stock: " . $mov["BibTech_Stock"] . "<br>";
						$output .= "Edgecode Date: " . $mov["BibTech_Edgecode_Date"] . "<br>";
						$output .= "Footage: " . $mov["BibTech_Footage"] . "<br>";
						$output .= "Can Size: " . $mov["BibTech_Can_Size"] . "<br>";
					}
					echo "$output";
				}
			?>
			<br>
			<h3>METADATA CONDITION</h3>
			<?php 
				if(isset($_GET["movieid"])) {
					$movie_bib_details = fetch_cond_details_movie($_GET["movieid"]);
					$output = "";
					while ($mov = mysqli_fetch_assoc($movie_bib_details)) {
						$output .= "Format Note: " . $mov["BibCond_Format_Note"] . "<br>";
						$output .= "AD: " . $mov["BibCond_AD"] . "<br>";
						$output .= "Shrinkage: " . $mov["BibCond_Shrinkage"] . "<br>";
						$output .= "Mold: " . $mov["BibCond_Mold"] . "<br>";
						$output .= "Condition Type: " . $mov["BibCond_Condition_Type"] . "<br>";
						$output .= "Micellaneous Condition Type: " . $mov["BibCond_Micellaneous_Condition_Type"] . "<br>";
						$output .= "Missing Footage: " . $mov["BibCond_Missing_Footage"] . "<br>";
						$output .= "Overall Condition: " . $mov["BibCond_Overall_Condition"] . "<br>";
						$output .= "Overall Condition Note: " . $mov["BibCond_Overall_Condition_Note"] . "<br>";
						$output .= "Research Value: " . $mov["BibCond_Research_Value"] . "<br>";
						$output .= "Research Value Note: " . $mov["BibCond_Research_Value_Note"] . "<br>";
						$output .= "Conservation Action: " . $mov["BibCond_Conservation_Action"] . "<br>";
					}
					echo "$output";
				}
			?>
			</div></td>
		</tr>
	</table>
</div>

<?php include("../includes/templates/footer.php"); ?>