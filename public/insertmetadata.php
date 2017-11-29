<?php 
require_once("../includes/session.php");
require_once("../includes/data/db_config.php");
require_once("../includes/functions.php");
confirm_logged_in();
require_once("../includes/validation_functions.php");

    if (isset($_POST['submit'])) {

    // validations
    $required_fields = array("Bib_IU_Barcode", "Bib_Collection", "Bib_Title", "Bib_Genre", "Bib_Subject", "Per_ID", "Bibident_Current_Location");
    validate_presences($required_fields);

    $fields_with_max_lengths = array("Bib_Media_Type" => 20);
    validate_max_lengths($fields_with_max_lengths);

    if (!empty($errors)) {
        $_SESSION["errors"] = $errors;
        redirect_to("setmetadata.php");
    }

    // Process the form

    //BIB_BASIC table attribute
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
    $query_bib_basic = "INSERT INTO BIB_BASIC (Bib_IU_Barcode, Bib_Collection, Bib_Media_Type, Bib_Series_Name, Bib_Series_Part, Bib_Series_Production_No, Bib_Title, Bib_Alternative_Title, Bib_Version_No, Bib_Reel_No, Bib_Summary, Bib_Creator, Bib_Producer, Bib_Genre, Bib_Subject, Bib_Date_Created, Bib_Location, Bib_Title_Note, Bib_Original_Medium, Bib_Original_Gauge, Bib_Generation, Bib_Color, Bib_Sound, Bib_Frame_Rate, Bib_Aspect_Ratio, Bib_Duration, Bib_Language ) ";
    $query_bib_basic .= "VALUES (";
    $query_bib_basic .= " '{$Bib_IU_Barcode}', '{$Bib_Collection}', '{$Bib_Media_Type}', '{$Bib_Series_Name}', '{$Bib_Series_Part}', '{$Bib_Series_Production_No}', '{$Bib_Title}', '{$Bib_Alternative_Title}', {$Bib_Version_No}, {$Bib_Reel_No}, '{$Bib_Summary}', '{$Bib_Creator}', '{$Bib_Producer}', '{$Bib_Genre}', '{$Bib_Subject}', '{$Bib_Date_Created}', '{$Bib_Location}', '{$Bib_Title_Note}', '{$Bib_Original_Medium}', '{$Bib_Original_Gauge}', '{$Bib_Generation}', '{$Bib_Color}', '{$Bib_Sound}', {$Bib_Frame_Rate}, '{$Bib_Aspect_Ratio}', '{$Bib_Duration}', '{$Bib_Language}'";
    $query_bib_basic .= ")";
    $result_bib_basic = mysqli_query($connection, $query_bib_basic);

    //BIB_IDENT table attribute
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
    $query_bib_ident = "INSERT INTO BIB_IDENT (Bib_IU_Barcode, Per_ID, Bibident_IUCAT_Title_No, Bibident_Date_Record_Created, Bibident_MDPI_Barcode, Bibident_Current_Location, Bibident_Alf_Shelf_Location, Bibident_Original_Identification, Bibident_Accompanying_Doc_ID, Bibident_Accompanying_Doc_Title, Bibident_Accompanying_Doc_Location ) ";
    $query_bib_ident .= "VALUES (";
    $query_bib_ident .= " '{$Bib_IU_Barcode}', '{$Per_ID}', '{$Bibident_IUCAT_Title_No}', '{$Bibident_Date_Record_Created}', {$Bibident_MDPI_Barcode}, '{$Bibident_Current_Location}', '{$Bibident_Alf_Shelf_Location}', '{$Bibident_Original_Identification}', '{$Bibident_Accompanying_Doc_ID}', '{$Bibident_Accompanying_Doc_Title}', '{$Bibident_Accompanying_Doc_Location}'";
    $query_bib_ident .= ")";
    $result_bib_ident = mysqli_query($connection, $query_bib_ident);

    //BIB_TECH table attribute
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
    $query_bib_tech = "INSERT INTO BIB_TECH (Bib_IU_Barcode, BibTech_Multi_Item_Can, BibTech_Picture_Type, BibTech_Sound_Form_Type, BibTech_Sound_Content_Type, BibTech_Original_Sound_Field, BibTech_Caption_Subtitle_Language, BibTech_Caption_Subtitle_Note, BibTech_Base, BibTech_Stock, BibTech_Edgecode_Date, BibTech_Footage, BibTech_Can_Size ) ";
    $query_bib_tech .= "VALUES (";
    $query_bib_tech .= " '{$Bib_IU_Barcode}', {$BibTech_Multi_Item_Can}, '{$BibTech_Picture_Type}', '{$BibTech_Sound_Form_Type}', '{$BibTech_Sound_Content_Type}', '{$BibTech_Original_Sound_Field}', '{$BibTech_Caption_Subtitle_Language}', '{$BibTech_Caption_Subtitle_Note}', '{$BibTech_Base}', '{$BibTech_Stock}', '{$BibTech_Edgecode_Date}', {$BibTech_Footage}, {$BibTech_Can_Size} ";
    $query_bib_tech .= ")";
    $result_bib_tech = mysqli_query($connection, $query_bib_tech);

    //BIB_COND table attribute
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
    $query_bib_cond = "INSERT INTO BIB_COND (Bib_IU_Barcode, BibCond_Format_Note, BibCond_AD, BibCond_Shrinkage, BibCond_Mold, BibCond_Condition_Type, BibCond_Micellaneous_Condition_Type, BibCond_Missing_Footage, BibCond_Overall_Condition, BibCond_Overall_Condition_Note, BibCond_Research_Value, BibCond_Research_Value_Note, BibCond_Conservation_Action ) ";
    $query_bib_cond .= "VALUES (";
    $query_bib_cond .= " '{$Bib_IU_Barcode}', '{$BibCond_Format_Note}', {$BibCond_AD}, {$BibCond_Shrinkage}, {$BibCond_Mold}, {$BibCond_Condition_Type}, '{$BibCond_Micellaneous_Condition_Type}', {$BibCond_Missing_Footage}, {$BibCond_Overall_Condition}, '{$BibCond_Overall_Condition_Note}', {$BibCond_Research_Value}, '{$BibCond_Research_Value_Note}', '{$BibCond_Conservation_Action}' ";
    $query_bib_cond .= ")";
    $result_bib_cond = mysqli_query($connection, $query_bib_cond);

    if ($result_bib_basic && $result_bib_ident && $result_bib_tech && $result_bib_cond) {
    // Success
        $_SESSION["message"] = "Metadata Inserted.";
        redirect_to("ingest.php");
    } else {
    // Failure
        $_SESSION["message"] = "Metadata Insertion failed.";
        redirect_to("setmetadata.php");
    }

} else {
    // This is probably a GET request
    redirect_to("setmetadata.php");
}

if (isset($connection)) { mysqli_close($connection); }

?>