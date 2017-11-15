<?php require_once("../includes/data/db_config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
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
					<a href="editmetadata.php"><img src="../public/images/removeMetadata_N.png" alt="Edit Metadata" width="100%"></a>
				</div>
			</td>
			<td width="80%">
				<div id="page">
					<h2>METADATA BASICS</h2>
					<form action="insertmetatadata.php" method="post">
					<p>Barcode: <input type="text" name="Bib_IU_Barcode" value="" /></p>
					<p>Collection: <input type="text" name="Bib_Collect" value="" /></p>
					<p>Type: <input type="text" name="Bib_Media_Type" value="" /></p>
					<p>Series Title: <input type="text" name="Bib_Series_Name" value="" /></p>
					<p>Series Part: <input type="text" name="Bib_Series_Part" value="" /></p>
					<p>Series Production No.: <input type="text" name="Bib_Series_Prod_No" value="" /></p>
					<p>Title: <input type="text" name="Bib_Title" value="" /></p>
					<p>Alternative Title: <input type="text" name="Bib_Alt_Title" value="" /></p>
					<p>Version No.: <input type="text" name="Bib_Version" value="" /></p>
					<p>Reel No.: <input type="text" name="Bib_Reel_No" value="" /></p>
					<p>Summary: <input type="text" name="Bib_Summary" value="" /></p>
					<p>Creator: <input type="text" name="Bib_Creator" value="" /></p>
					<p>Producer: <input type="text" name="Bib_Producer" value="" /></p>
					<p>Genre: <input type="text" name="Bib_Genre" value="" /></p>
					<p>Subject: <input type="text" name="Bib_Subject" value="" /></p>
					<p>Date Created: <input type="text" name="Bib_Date" value="" /></p>
					<p>Location: <input type="text" name="Bib_Location" value="" /></p>
					<p>Title Note: <input type="text" name="Bib_Title_Note" value="" /></p>
					<p>Original Medium: <input type="text" name="Bib_Orig_Med" value="" /></p>
					<p>Format: <input type="text" name="Bib_Orig_Gauge" value="" /></p>
					<p>Generation: <input type="text" name="Bib_Generation" value="" /></p>
					<p>Color: <input type="text" name="Bib_Color" value="" /></p>
					<p>Sound: <input type="text" name="Bib_Sound" value="" /></p>
					<p>Frame Rate: <input type="text" name="Bib_Frame_Rate" value="" /></p>
					<p>Aspect Ratio: <input type="text" name="Bib_Aspect_Ratio" value="" /></p>
					<p>Duration: <input type="text" name="Bib_Dur" value="" /></p>
					<p>Language: <input type="text" name="Bib_Dial_Lang" value="" /></p>

					<br>
					<h2>METADATA IDENTIFICATION</h2>
					<p>Staff ID: <input type="text" name="Per_ID" value="" /></p>
					<p>IUCAT Title No.: <input type="text" name="Bibident_IUCAT_Title_No" value="" /></p>
					<p>Date Record Created: <input type="text" name="Bibident_Date_Created" value="" /></p>
					<p>MDPI Barcode: <input type="text" name="Bibident_MDPI_Barcode" value="" /></p>
					<p>Current Location: <input type="text" name="Bibident_Current_Loc" value="" /></p>
					<p>Alf Shelf Location: <input type="text" name="Bibident_Alf_Shelf_Loc" value="" /></p>
					<p>Original Identification: <input type="text" name="Bibident_Orig_Ident" value="" /></p>
					<p>Accompanying Doc ID: <input type="text" name="Bibident_Accom_Doc_ID" value="" /></p>
					<p>Accompanying Doc Title: <input type="text" name="Bibident_Accom_Doc_Title" value="" /></p>
					<p>Accompanying Doc Location: <input type="text" name="Bibident_Accom_Doc_Loc" value="" /></p>
					
					<br>
					<h2>METADATA TECHNICAL</h2>
					<p>Multi-Item Can: <input type="text" name="BibTech_Multi_Item_Can" value="" /></p>
					<p>Picture Type: <input type="text" name="BibTech_Pic_Type" value="" /></p>
					<p>Sound Form Type: <input type="text" name="BibTech_Snd_Form_Type" value="" /></p>
					<p>Sound Content Type: <input type="text" name="BibTech_Snd_Cont_Type" value="" /></p>
					<p>Original Sound Field: <input type="text" name="BibTech_Orig_Snd_Field" value="" /></p>
					<p>Caption/Subtitle Language: <input type="text" name="BibTech_Capt_Sub_Lang" value="" /></p>
					<p>Caption/Subtitle Note: <input type="text" name="BibTech_Capt_Sub_Note" value="" /></p>
					<p>Base: <input type="text" name="BibTech_Base" value="" /></p>
					<p>Stock: <input type="text" name="BibTech_Stock" value="" /></p>
					<p>Edgecode Date: <input type="text" name="BibTech_Edgecode_Date" value="" /></p>
					<p>Footage: <input type="text" name="BibTech_Footage" value="" /></p>
					<p>Can Size: <input type="text" name="BibTech_Can_Size" value="" /></p>

					<br>
					<h2>METADATA CONDITION</h2>
					<p>Format Note: <input type="text" name="BibCond_Format_Note" value="" /></p>
					<p>AD: <input type="text" name="BibCond_AD" value="" /></p>
					<p>Shrinkage: <input type="text" name="BibCond_Shrinkage" value="" /></p>
					<p>Mold: <input type="text" name="BibCond_Mold" value="" /></p>
					<p>Condition Type: <input type="text" name="BibCond_Cond_Type" value="" /></p>
					<p>Micellaneous Condition Type: <input type="text" name="BibCond_Misc_Cond_Type" value="" /></p>
					<p>Missing Footage: <input type="text" name="BibCond_Miss_Foot" value="" /></p>
					<p>Overall Condition: <input type="text" name="BibCond_Overall_Cond" value="" /></p>
					<p>Overall Condition Note: <input type="text" name="BibCond_Overall_Cond_Note" value="" /></p>
					<p>Research Value: <input type="text" name="BibCond_Research_Val" value="" /></p>
					<p>Research Value Note: <input type="text" name="BibCond_Research_Val_Note" value="" /></p>
					<p>Conservation Action: <input type="text" name="BibCond_Conserv_Act" value="" /></p>

					<input type="submit" name="submit" value="Insert Metadata" />
					<a href="insertmetatadata.php"><img src="../public/images/SubmitN.png" alt="Submit" width="50%"></a>
					</form>
				</div>
			</td>
		</tr>
	</table>
</div>

<?php include("../includes/templates/footer.php"); ?>