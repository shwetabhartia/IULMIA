--Create tables queries

CREATE DATABASE IULMIA;

CREATE TABLE PERSON (
    Per_ID bigint not null,
    Per_Last_Name varchar(25),
    Per_First_Name varchar(25),
    Per_Organization varchar(200),
    Per_Area_Code int,
    Per_Phone_No varchar(25),
    Per_Street varchar(100),
    Per_City varchar(25),
    Per_State varchar(2),
    Per_Zip_Code bigint,
    Per_Region varchar(25),
    Per_Country varchar(25),
    Per_IUMember tinyint(1),
    primary key (Per_ID)
);

CREATE TABLE BIB_BASIC (
    Bib_IU_Barcode bigint not null,
    Bib_Collect varchar(200) not null,
    Bib_Media_Type varchar(20),
    Bib_Series_Name varchar(200),
    Bib_Series_Part varchar(2),
    Bib_Series_Prod_No bigint,
    Bib_Title varchar(200) not null,
    Bib_Alt_Title varchar(200),
    Bib_Version smallint,
    Bib_Reel_No smallint,
    Bib_Summary varchar(200),
    Bib_Creator varchar(25),
    Bib_Producer varchar(25),
    Bib_Genre varchar(25) not null,
    Bib_Subject varchar(50) not null,
    Bib_Date varchar(200),
    Bib_Location varchar(200),
    Bib_Title_Note varchar(200),
    Bib_Orig_Med varchar(15),
    Bib_Orig_Gauge varchar(25),
    Bib_Generation varchar(50),
    Bib_Color varchar(20),
    Bib_Sound varchar(15),
    Bib_Frame_Rate int,
    Bib_Aspect_Ratio varchar(10),
    Bib_Dur time,
    Bib_Dial_Lang varchar(50),
    primary key (Bib_IU_Barcode)
);

CREATE TABLE BIB_IDENT (
    Bibident_ID bigint not null auto_increment,
    Bib_IU_Barcode bigint not null,
    Per_ID bigint not null,
    Bibident_IUCAT_Title_No bigint,
    bibident_Date_Created DATE,
    Bibident_MDPI_Barcode bigint,
    Bibident_Current_Loc varchar(50) not null,
    Bibident_Alf_Shelf_Loc varchar(30),
    Bibident_Orig_Ident varchar(25),
    Bibident_Accom_Doc_ID varchar(25),
    Bibident_Accom_Doc_Title varchar(200),
    Bibident_Accom_Doc_Loc varchar(25),
    primary key (BBibident_ID), 
    foreign key (Bib_IU_Barcode) references BIB_BASIC on update cascade,
    foreign key (Per_ID) references PERSON on update cascade
);

CREATE TABLE BIB_TECH (
    BibTech_ID bigint not null auto_increment,
    Bib_IU_Barcode bigint not null,
    BibTech_Multi_Item_Can int,
    BibTech_Pic_Type varchar(50),
    BibTech_Snd_Form_Type varchar(25),
    BibTech_Snd_Cont_Type varchar(200),
    BibTech_Orig_Snd_Field varchar(200),
    BibTech_Capt_Sub_Lang varchar(25),
    BibTech_Capt_Sub_Note varchar(200),
    BibTech_Base varchar(25),
    BibTech_Stock varchar(25),
    BibTech_Edgecode_Date year,
    BibTech_Footage int,
    BibTech_Can_Size int,
    primary key (BibTech_ID), 
    foreign key (Bib_IU_Barcode) references BIB_BASIC on update cascade
);

CREATE TABLE BIB_COND (
    Bibcond_ID bigint not null auto_increment,
    Bib_IU_Barcode bigint not null,
    BibCond_Format_Note varchar(200),
    BibCond_AD smallint,
    BibCond_Shrinkage float(1,1),
    BibCond_Mold smallint,
    BibCond_Cond_Type smallint,
    BibCond_Misc_Cond_Type varchar(200),
    BibCond_Miss_Foot float(4,1),
    BibCond_Overall_Cond smallint,
    BibCond_Overall_Cond_Note varchar(200),
    BibCond_Research_Val smallint,
    BibCond_Research_Val_Note varchar(200),
    BibCond_Conserv_Act varchar(200),
    primary key (Bibcond_ID), 
    foreign key (Bib_IU_Barcode) references BIB_BASIC on update cascade
);

CREATE TABLE LOAN (
    LOAN_ID bigint not null auto_increment,
    Per_ID bigint not null,
    Bib_IU_Barcode bigint not null,
    Loan_Date DATE,
    Loan_Return_Date DATE,
    Loan_Returned_Date DATE,
    Loan_Ext_Date DATE,
    Loan_Purpose varchar(200),
    Bibident_Current_Loc varchar(200) not null,
    primary key (LOAN_ID), 
    foreign key (Per_ID) references PERSON on update cascade,
    foreign key (Bib_IU_Barcode) references BIB_BASIC on update cascade,
);



--Clean database function

--Intialize database function