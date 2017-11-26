<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/data/db_config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php
if (isset($_POST['edit'])) {
	// Process the form
	global $connection;
	$IU_Barcode = find_movie_by_id($_POST['Bib_IU_Barcode']); // find if movie exist in database
	if (!$IU_Barcode) {
		// subject ID was missing or invalid or 
		// subject couldn't be found in database
		$_SESSION["message"] = "IU Barcode Invalid. Updation failed.";
		redirect_to("ingest.php");
	}
	
	// validations
	$required_fields = array("Bib_IU_Barcode", "Bib_Collection", "Bib_Title", "Bib_Genre", "Bib_Subject", "Per_ID", "Bibident_Current_Location");
	validate_presences($required_fields);

	$fields_with_max_lengths = array("Bib_Media_Type" => 20);
	validate_max_lengths($fields_with_max_lengths);
	
	if (empty($errors)) {
		
		// Perform Update

		$Bib_IU_Barcode = mysql_prep($_POST["Bib_IU_Barcode"]);
		$Bib_Collection = mysql_prep($_POST["Bib_Collection"]);
		$Bib_Media_Type = mysql_prep($_POST["Bib_Media_Type"]);
		$Bib_Series_Name = mysql_prep($_POST["Bib_Series_Name"]);
		$Bib_Series_Part = mysql_prep($_POST["Bib_Series_Part"]);
		$Bib_Series_Production_No = mysql_prep($_POST["Bib_Series_Production_No"]);
		$Bib_Title = mysql_prep($_POST["Bib_Title"]);
		$Bib_Alternative_Title = mysql_prep($_POST["Bib_Alternative_Title"]);
		$Bib_Version_No = (int) $_POST["Bib_Version_No"];
		$Bib_Reel_No = (int) $_POST["Bib_Reel_No"];
		$Bib_Summary = mysql_prep($_POST["Bib_Summary"]);
		$Bib_Creator = mysql_prep($_POST["Bib_Creator"]);
		$Bib_Producer = mysql_prep($_POST["Bib_Producer"]);
		$Bib_Genre = mysql_prep($_POST["Bib_Genre"]);
		$Bib_Subject = mysql_prep($_POST["Bib_Subject"]);
		$Bib_Date_Created = mysql_prep($_POST["Bib_Date_Created"]);
		$Bib_Location = mysql_prep($_POST["Bib_Location"]);
		$Bib_Title_Note = mysql_prep($_POST["Bib_Title_Note"]);
		$Bib_Original_Medium = mysql_prep($_POST["Bib_Original_Medium"]);
		$Bib_Original_Gauge = mysql_prep($_POST["Bib_Original_Gauge"]);
		$Bib_Generation = mysql_prep($_POST["Bib_Generation"]);
		$Bib_Color = mysql_prep($_POST["Bib_Color"]);
		$Bib_Sound = mysql_prep($_POST["Bib_Sound"]);
		$Bib_Frame_Rate = (int) $_POST["Bib_Frame_Rate"];
		$Bib_Aspect_Ratio = mysql_prep($_POST["Bib_Aspect_Ratio"]);
		$Bib_Duration = mysql_prep($_POST["Bib_Duration"]);
		$Bib_Language = mysql_prep($_POST["Bib_Language"]);
		//Query for BIB_BASIC
		$query_bib_basic = "UPDATE BIB_BASIC SET Bib_Collection = '{$Bib_Collection}' , Bib_Media_Type = '{$Bib_Media_Type}' , Bib_Series_Name = '{$Bib_Series_Name}' , Bib_Series_Part = '{$Bib_Series_Part}', Bib_Series_Production_No = '{$Bib_Series_Production_No}', Bib_Title = '{$Bib_Title}', Bib_Alternative_Title = '{$Bib_Alternative_Title}', Bib_Version_No = {$Bib_Version_No}, Bib_Reel_No = {$Bib_Reel_No}, Bib_Summary = '{$Bib_Summary}', Bib_Creator = '{$Bib_Creator}', Bib_Producer = '{$Bib_Producer}', Bib_Genre = '{$Bib_Genre}', Bib_Subject = '{$Bib_Subject}', Bib_Date_Created = '{$Bib_Date_Created}', Bib_Location = '{$Bib_Location}', Bib_Title_Note = '{$Bib_Title_Note}', Bib_Original_Medium = '{$Bib_Original_Medium}', Bib_Original_Gauge = '{$Bib_Original_Gauge}', Bib_Generation = '{$Bib_Generation}', Bib_Color = '{$Bib_Color}', Bib_Sound = '{$Bib_Sound}', Bib_Frame_Rate = {$Bib_Frame_Rate}, Bib_Aspect_Ratio = '{$Bib_Aspect_Ratio}', Bib_Duration = '{$Bib_Duration}', Bib_Language '{$Bib_Language}' ";
		$query_bib_basic .= "WHERE Bib_IU_Barcode = '{$Bib_IU_Barcode}' ";
		$query_bib_basic .= "LIMIT 1";
		$result_bib_basic = mysqli_query($connection, $query_bib_basic);
		$bib_basic_row = mysqli_affected_rows($connection);
		
		//BIB_IDENT table attribute
		$Bibident_ID = (int) $_POST["Bibident_ID"];
		$Per_ID = mysql_prep($_POST["Per_ID"]);
		$Bibident_IUCAT_Title_No = mysql_prep($_POST["Bibident_IUCAT_Title_No"]);
		$Bibident_Date_Record_Created = mysql_prep($_POST["Bibident_Date_Record_Created"]);
		$Bibident_MDPI_Barcode = (int) $_POST["Bibident_MDPI_Barcode"];
		$Bibident_Current_Location = mysql_prep($_POST["Bibident_Current_Location"]);
		$Bibident_Alf_Shelf_Location = mysql_prep($_POST["Bibident_Alf_Shelf_Location"]);
		$Bibident_Original_Identification = mysql_prep($_POST["Bibident_Original_Identification"]);
		$Bibident_Accompanying_Doc_ID = mysql_prep($_POST["Bibident_Accompanying_Doc_ID"]);
		$Bibident_Accompanying_Doc_Title = mysql_prep($_POST["Bibident_Accompanying_Doc_Title"]);
		$Bibident_Accompanying_Doc_Location = mysql_prep($_POST["Bibident_Accompanying_Doc_Location"]);
		//Query for BIB_IDENT
		$query_bib_ident = "UPDATE BIB_IDENT SET Per_ID = '{$Per_ID}', Bibident_IUCAT_Title_No = '{$Bibident_IUCAT_Title_No}', Bibident_Date_Record_Created = '{$Bibident_Date_Record_Created}', Bibident_MDPI_Barcode = {$Bibident_MDPI_Barcode}, Bibident_Current_Location = '{$Bibident_Current_Location}', Bibident_Alf_Shelf_Location = '{$Bibident_Alf_Shelf_Location}', Bibident_Original_Identification = '{$Bibident_Original_Identification}', Bibident_Accompanying_Doc_ID = '{$Bibident_Accompanying_Doc_ID}', Bibident_Accompanying_Doc_Title = '{$Bibident_Accompanying_Doc_Title}', Bibident_Accompanying_Doc_Location = '{$Bibident_Accompanying_Doc_Location}' ";
		$query_bib_ident .= "WHERE Bib_IU_Barcode = '{$Bib_IU_Barcode}' AND Bibident_ID = $Bibident_ID ";
		$query_bib_ident .= "LIMIT 1";
		$result_bib_ident = mysqli_query($connection, $query_bib_ident);
		$bib_ident_row = mysqli_affected_rows($connection);
		
		//BIB_TECH table attribute
		$BibTech_ID = (int) $_POST["BibTech_ID"];
		$BibTech_Multi_Item_Can = (int) $_POST["BibTech_Multi_Item_Can"];
		$BibTech_Picture_Type = mysql_prep($_POST["BibTech_Picture_Type"]);
		$BibTech_Sound_Form_Type = mysql_prep($_POST["BibTech_Sound_Form_Type"]);
		$BibTech_Sound_Content_Type = mysql_prep($_POST["BibTech_Sound_Content_Type"]);
		$BibTech_Original_Sound_Field = mysql_prep($_POST["BibTech_Original_Sound_Field"]);
		$BibTech_Caption_Subtitle_Language = mysql_prep($_POST["BibTech_Caption_Subtitle_Language"]);
		$BibTech_Caption_Subtitle_Note = mysql_prep($_POST["BibTech_Caption_Subtitle_Note"]);
		$BibTech_Base = mysql_prep($_POST["BibTech_Base"]);
		$BibTech_Stock = mysql_prep($_POST["BibTech_Stock"]);
		$BibTech_Edgecode_Date = mysql_prep($_POST["BibTech_Edgecode_Date"]);
		$BibTech_Footage = (int) $_POST["BibTech_Footage"];
		$BibTech_Can_Size = (int) $_POST["BibTech_Can_Size"];
		//Query for BIB_TECH
		$query_bib_tech = "UPDATE BIB_TECH SET BibTech_Multi_Item_Can = {$BibTech_Multi_Item_Can}, BibTech_Picture_Type = '{$BibTech_Picture_Type}', BibTech_Sound_Form_Type = '{$BibTech_Sound_Form_Type}', BibTech_Sound_Content_Type = '{$BibTech_Sound_Content_Type}', BibTech_Original_Sound_Field = '{$BibTech_Original_Sound_Field}', BibTech_Caption_Subtitle_Language = '{$BibTech_Caption_Subtitle_Language}', BibTech_Caption_Subtitle_Note = '{$BibTech_Caption_Subtitle_Note}', BibTech_Base = '{$BibTech_Base}', BibTech_Stock = '{$BibTech_Stock}', BibTech_Edgecode_Date = '{$BibTech_Edgecode_Date}', BibTech_Footage = {$BibTech_Footage}, BibTech_Can_Size = {$BibTech_Can_Size} ";
		$query_bib_tech .= "WHERE Bib_IU_Barcode = '{$Bib_IU_Barcode}' AND BibTech_ID = $BibTech_ID ";
		$query_bib_tech .= "LIMIT 1";
		$result_bib_tech = mysqli_query($connection, $query_bib_tech);
		$bib_tech_row = mysqli_affected_rows($connection);
		
		//BIB_COND table attribute
		$Bibcond_ID = (int) $_POST["Bibcond_ID"];
		$BibCond_Format_Note = mysql_prep($_POST["BibCond_Format_Note"]);
		$BibCond_AD = (int) $_POST["BibCond_AD"];
		$BibCond_Shrinkage = (float) $_POST["BibCond_Shrinkage"];
		$BibCond_Mold = (int) $_POST["BibCond_Mold"];
		$BibCond_Condition_Type = (int) $_POST["BibCond_Condition_Type"];
		$BibCond_Micellaneous_Condition_Type = mysql_prep($_POST["BibCond_Micellaneous_Condition_Type"]);
		$BibCond_Missing_Footage = (int) $_POST["BibCond_Missing_Footage"];
		$BibCond_Overall_Condition = (int) $_POST["BibCond_Overall_Condition"];
		$BibCond_Overall_Condition_Note = mysql_prep($_POST["BibCond_Overall_Condition_Note"]);
		$BibCond_Research_Value = (int) $_POST["BibCond_Research_Value"];
		$BibCond_Research_Value_Note = mysql_prep($_POST["BibCond_Research_Value_Note"]);
		$BibCond_Conservation_Action = mysql_prep($_POST["BibCond_Conservation_Action"]);
		//Query for BIB_COND
		$query_bib_cond = "UPDATE BIB_COND SET BibCond_Format_Note = '{$BibCond_Format_Note}', BibCond_AD = {$BibCond_AD}, BibCond_Shrinkage = {$BibCond_Shrinkage}, BibCond_Mold = {$BibCond_Mold}, BibCond_Condition_Type = {$BibCond_Condition_Type}, BibCond_Micellaneous_Condition_Type = '{$BibCond_Micellaneous_Condition_Type}', BibCond_Missing_Footage = {$BibCond_Missing_Footage}, BibCond_Overall_Condition = {$BibCond_Overall_Condition}, BibCond_Overall_Condition_Note = '{$BibCond_Overall_Condition_Note}', BibCond_Research_Value = {$BibCond_Research_Value}, BibCond_Research_Value_Note = '{$BibCond_Research_Value_Note}', BibCond_Conservation_Action = '{$BibCond_Conservation_Action}' ";
		$query_bib_cond .= "WHERE Bib_IU_Barcode = '{$Bib_IU_Barcode}' AND Bibcond_ID = $Bibcond_ID ";
		$query_bib_cond .= "LIMIT 1";
		$result_bib_cond = mysqli_query($connection, $query_bib_cond);
		$bib_cond_row = mysqli_affected_rows($connection);
		
		if (($result_bib_basic && $bib_basic_row >= 1) && ($result_bib_ident && $bib_ident_row >= 1) && ($result_bib_tech && $bib_tech_row >= 1) && ($result_bib_cond && $bib_cond_row >= 1)) {
			// Success
			$_SESSION["message"] = "Metadata updated.";
			redirect_to("ingest.php");
		} else {
			// Failure
			$message = "Metadata update failed.";
		}
	
	}

} else {
	// This is probably a GET request
	
} // end: if (isset($_POST['edit']))

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
					<?php // $message is just a variable, doesn't use the SESSION
						if (!empty($message)) {
							echo "<div class=\"message\">" . htmlentities($message) . "</div>";
						}
					?>
					<?php $errors = errors(); ?>
					<?php echo form_errors($errors); ?>
					<h2>METADATA BASICS</h2>
					<form action="insertmetadata.php" method="post">
					<p>IU Barcode: <input type="text" name="Bib_IU_Barcode" value="" /></p>
					<p>Collection: <input type="text" name="Bib_Collection" value="" /></p>
					<p>Media Type: <input type="text" name="Bib_Media_Type" value="" /></p>
					<p>Series Name: <input type="text" name="Bib_Series_Name" value="" /></p>
					<p>Series Part: <input type="text" name="Bib_Series_Part" value="" /></p>
					<p>Series Production No.: <input type="text" name="Bib_Series_Production_No" value="" /></p>
					<p>Title: <input type="text" name="Bib_Title" value="" /></p>
					<p>Alternative Title: <input type="text" name="Bib_Alternative_Title" value="" /></p>
					<p>Version No.: <input type="text" name="Bib_Version_No" value="" /></p>
					<p>Reel No.: <input type="text" name="Bib_Reel_No" value="" /></p>
					<p>Summary: <input type="text" name="Bib_Summary" value="" /></p>
					<p>Creator: <input type="text" name="Bib_Creator" value="" /></p>
					<p>Producer: <input type="text" name="Bib_Producer" value="" /></p>
					<p>Genre: <input type="text" name="Bib_Genre" value="" /></p>
					<p>Subject: <input type="text" name="Bib_Subject" value="" /></p>
					<p>Date Created: <input type="text" name="Bib_Date_Created" value="" /></p>
					<p>Location: <input type="text" name="Bib_Location" value="" /></p>
					<p>Title Note: <input type="text" name="Bib_Title_Note" value="" /></p>
					<p>Original Medium: <input type="text" name="Bib_Original_Medium" value="" /></p>
					<p>Original Gauge: <input type="text" name="Bib_Original_Gauge" value="" /></p>
					<p>Generation: <input type="text" name="Bib_Generation" value="" /></p>
					<p>Color: <input type="text" name="Bib_Color" value="" /></p>
					<p>Sound: <input type="text" name="Bib_Sound" value="" /></p>
					<p>Frame Rate: <input type="text" name="Bib_Frame_Rate" value="" /></p>
					<p>Aspect Ratio: <input type="text" name="Bib_Aspect_Ratio" value="" /></p>
					<p>Duration: <input type="text" name="Bib_Duration" value="" /></p>
					<p>Language: <input type="text" name="Bib_Language" value="" /></p>

					<br>
					<h2>METADATA IDENTIFICATION</h2>
					<p>Bibident ID: <input type="text" name="Bibident_ID" value="" /></p>
					<p>Staff ID: <input type="text" name="Per_ID" value="" /></p>
					<p>IUCAT Title No.: <input type="text" name="Bibident_IUCAT_Title_No" value="" /></p>
					<p>Date Record Created: <input type="text" name="Bibident_Date_Record_Created" value="" /></p>
					<p>MDPI Barcode: <input type="text" name="Bibident_MDPI_Barcode" value="" /></p>
					<p>Current Location: <input type="text" name="Bibident_Current_Location" value="" /></p>
					<p>Alf Shelf Location: <input type="text" name="Bibident_Alf_Shelf_Location" value="" /></p>
					<p>Original Identification: <input type="text" name="Bibident_Original_Identification" value="" /></p>
					<p>Accompanying Doc ID: <input type="text" name="Bibident_Accompanying_Doc_ID" value="" /></p>
					<p>Accompanying Doc Title: <input type="text" name="Bibident_Accompanying_Doc_Title" value="" /></p>
					<p>Accompanying Doc Location: <input type="text" name="Bibident_Accompanying_Doc_Location" value="" /></p>
					
					<br>
					<h2>METADATA TECHNICAL</h2>
					<p>BibTech ID: <input type="text" name="BibTech_ID" value="" /></p>
					<p>Multi Item Can: <input type="text" name="BibTech_Multi_Item_Can" value="" /></p>
					<p>Picture Type: <input type="text" name="BibTech_Picture_Type" value="" /></p>
					<p>Sound Form Type: <input type="text" name="BibTech_Sound_Form_Type" value="" /></p>
					<p>Sound Content Type: <input type="text" name="BibTech_Sound_Content_Type" value="" /></p>
					<p>Original Sound Field: <input type="text" name="BibTech_Original_Sound_Field" value="" /></p>
					<p>Caption Subtitle Language: <input type="text" name="BibTech_Caption_Subtitle_Language" value="" /></p>
					<p>Caption Subtitle Note: <input type="text" name="BibTech_Caption_Subtitle_Note" value="" /></p>
					<p>Base: <input type="text" name="BibTech_Base" value="" /></p>
					<p>Stock: <input type="text" name="BibTech_Stock" value="" /></p>
					<p>Edgecode Date: <input type="text" name="BibTech_Edgecode_Date" value="" /></p>
					<p>Footage: <input type="text" name="BibTech_Footage" value="" /></p>
					<p>Can Size: <input type="text" name="BibTech_Can_Size" value="" /></p>

					<br>
					<h2>METADATA CONDITION</h2>
					<p>Bibcond ID: <input type="text" name="Bibcond_ID" value="" /></p>
					<p>Format Note: <input type="text" name="BibCond_Format_Note" value="" /></p>
					<p>AD: <input type="text" name="BibCond_AD" value="" /></p>
					<p>Shrinkage: <input type="text" name="BibCond_Shrinkage" value="" /></p>
					<p>Mold: <input type="text" name="BibCond_Mold" value="" /></p>
					<p>Condition Type: <input type="text" name="BibCond_Condition_Type" value="" /></p>
					<p>Micellaneous Condition Type: <input type="text" name="BibCond_Micellaneous_Condition_Type" value="" /></p>
					<p>Missing Footage: <input type="text" name="BibCond_Missing_Footage" value="" /></p>
					<p>Overall Condition: <input type="text" name="BibCond_Overall_Condition" value="" /></p>
					<p>Overall Condition Note: <input type="text" name="BibCond_Overall_Condition_Note" value="" /></p>
					<p>Research Value: <input type="text" name="BibCond_Research_Value" value="" /></p>
					<p>Research Value Note: <input type="text" name="BibCond_Research_Value_Note" value="" /></p>
					<p>Conservation Action: <input type="text" name="BibCond_Conservation_Action" value="" /></p>
					<button type="submit" name="edit" id="submit-icon"><img src="../public/images/SubmitN.png" id="submit-icon" /></button>
					</form>
				</div>
			</td>
		</tr>
	</table>
</div>

<?php include("../includes/templates/footer.php"); ?>