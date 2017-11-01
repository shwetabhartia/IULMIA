--Create tables queries

CREATE DATABASE IULMIA;

CREATE TABLE BIB_BASIC (
    Bib_IU_Barcode varchar(14),
    Bib_Collect varchar(200),
    Bib_Media_Type varchar(15),
    Bib_Series_Name varchar(200),
    Bib_Series_Part varchar(2),
    Bib_Title varchar(200),
    Bib_Alt_Title varchar(200),
    Bib_Version varchar(2),
    Bib_Reel_No varchar(3),
    Bib_Summary varchar(200),
    Bib_Creator varchar(25),
    Bib_Producer varchar(25),
    Bib_Genre varchar(25),
    Bib_Subject varchar(50),
    Bib_Date varchar(200),
    Bib_Location varchar(200),
    Bib_Title_Note varchar(200),
    Bib_Orig_Med varchar(15),
    Bib_Orig_Gauge varchar(25),
    Bib_Generation varchar(50),
    Bib_Color varchar(15),
    Bib_Sound varchar(10),
    Bib_Frame_Rate FLOAT(size,d),
    Bib_Aspect_Ratio FLOAT(size,d),
    Bib_Dur FLOAT(size,d),
    Bib_Dial_Lang varchar(50)
);

CREATE TABLE BIB_IDENT (
    Bib_IU_IDENT_ID int,
    Bib_IU_Barcode varchar(14),
    Per_ID varchar(12),
    Bibident_IUCAT_Title_No varchar(7),
    bibident_Date_Created DATE,
    Bibident_MDPI_Barcode varchar(15),
    Bibident_Current_Loc varchar(50),
    Bibident_Alf_Shelf_Loc varchar(20),
    Bibident_Orig_Ident varchar(25),
    Bibident_Accom_Doc_ID varchar(25),
    Bibident_Accom_Doc_Title varchar(200),
    Bibident_Accom_Doc_Loc varchar(25)
);

CREATE TABLE BIB_TECH (
    Bib_IU_TECH_ID int,
    Bib_IU_Barcode varchar(14),
    BibTech_Multi_Item_Can varchar(3),
    BibTech_Pic_Type varchar(50),
    BibTech_Snd_Form_Type varchar(25),
    BibTech_Snd_Cont_Type varchar(200),
    BibTech_Orig_Snd_Field varchar(200),
    BibTech_Capt_Sub_Lang varchar(25),
    BibTech_Capt_Sub_Note varchar(200),
    BibTech_Base varchar(25),
    BibTech_Stock varchar(25),
    BibTech_Edgecode_Date DATE,
    BibTech_Footage varchar(4),
    BibTech_Can_Size smallint
);

CREATE TABLE BIB_COND (
    Bib_IU_COND_ID int,
    Bib_IU_Barcode varchar(14),
    BibCond_Format_Note varchar(200),
    BibCond_AD varchar(1),
    BibCond_Shrinkage float(2,1),
    BibCond_Mold varchar(1),
    BibCond_Cond_Type varchar(1),
    BibCond_Misc_Cond_Type varchar(200),
    BibCond_Miss_Footage float(4,1),
    BibCond_Overall_Cond varchar(1),
    BibCond_Overall_Cond_Note varchar(200),
    BibCond_Research_Val varchar(1),
    BibCond_Research_Val_Note varchar(200),
    BibCond_Conserv_Act varchar(200)
);

CREATE TABLE LOAN (
    LOAN_ID int,
    Per_ID int,
    Bib_IU_Barcode varchar(14),
    Loan_Date DATE,
    Loan_Return_Date DATE,
    Loan_Returned_Date DATE,
    Loan_Ext_Date DATE,
    Loan_Overdue int,
    Loan_Purpose varchar(200),
    Bibident_Current_Loc varchar(50)
);

CREATE TABLE PERSON (
    Per_ID int,
    Per_Last_Name varchar(25),
    Per_First_Name varchar(25),
    Per_Organization varchar(200),
    Per_Area_Code varchar(3),
    Per_Phone_No int,
    Per_Street varchar(100),
    Per_City varchar(25),
    Per_State varchar(2),
    Per_Zip_Code varchar(5),
    Per_Region varchar(25),
    Per_Country varchar(25),
    Per_IUMember varchar(1)
);

--Clean database function

--Intialize database function