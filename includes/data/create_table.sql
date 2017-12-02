--Create tables queries

CREATE DATABASE IULMIA;

DROP TABLE IF EXISTS PERSON;
CREATE TABLE PERSON (
    Per_ID varchar(15) not null,
    Per_Last_Name varchar(25),
    Per_First_Name varchar(25),
    Per_Organization varchar(200),
    Per_Area_Code int,
    Per_Phone_No varchar(25),
    Per_Street varchar(100),
    Per_City varchar(25),
    Per_State varchar(2),
    Per_Zip_Code int,
    Per_Region varchar(25),
    Per_Country varchar(25),
    Per_IUMember tinyint(1),
    primary key (Per_ID)
);

DROP TABLE IF EXISTS ADMINS;
CREATE TABLE ADMINS (
    id int(11) NOT NULL AUTO_INCREMENT,
    username varchar(50) NOT NULL,
    hashed_password varchar(60) NOT NULL,
    PRIMARY KEY (id)
);

DROP TABLE IF EXISTS BIB_BASIC;
CREATE TABLE BIB_BASIC (
    Bib_IU_Barcode varchar(20) not null,
    Bib_Collection varchar(200) not null,
    Bib_Media_Type varchar(20),
    Bib_Series_Name varchar(200),
    Bib_Series_Part varchar(10),
    Bib_Series_Production_No varchar(25),
    Bib_Title varchar(200) not null,
    Bib_Alternative_Title varchar(200),
    Bib_Version_No smallint,
    Bib_Reel_No smallint,
    Bib_Summary varchar(200),
    Bib_Creator varchar(50),
    Bib_Producer varchar(50),
    Bib_Genre varchar(25) not null,
    Bib_Subject varchar(50) not null,
    Bib_Date_Created varchar(200),
    Bib_Location varchar(200),
    Bib_Title_Note varchar(200),
    Bib_Original_Medium varchar(15),
    Bib_Original_Gauge varchar(25),
    Bib_Generation varchar(50),
    Bib_Color varchar(20),
    Bib_Sound varchar(15),
    Bib_Frame_Rate int,
    Bib_Aspect_Ratio varchar(10),
    Bib_Duration time,
    Bib_Language varchar(50),
    primary key (Bib_IU_Barcode)
);

DROP TABLE IF EXISTS BIB_IDENT;
CREATE TABLE BIB_IDENT (
    Bibident_ID int not null auto_increment,
    Bib_IU_Barcode varchar(20) not null,
    Per_ID varchar(15) not null,
    Bibident_IUCAT_Title_No varchar(50),
    Bibident_Date_Record_Created DATE,
    Bibident_MDPI_Barcode bigint,
    Bibident_Current_Location varchar(50) not null,
    Bibident_Alf_Shelf_Location varchar(30),
    Bibident_Original_Identification varchar(25),
    Bibident_Accompanying_Doc_ID varchar(25),
    Bibident_Accompanying_Doc_Title varchar(200),
    Bibident_Accompanying_Doc_Location varchar(25),
    primary key (Bibident_ID), 
    foreign key (Bib_IU_Barcode) references BIB_BASIC (Bib_IU_Barcode),
    foreign key (Per_ID) references PERSON (Per_ID)
);

DROP TABLE IF EXISTS BIB_TECH;
CREATE TABLE BIB_TECH (
    BibTech_ID int not null auto_increment,
    Bib_IU_Barcode varchar(20) not null,
    BibTech_Multi_Item_Can int,
    BibTech_Picture_Type varchar(50),
    BibTech_Sound_Form_Type varchar(25),
    BibTech_Sound_Content_Type varchar(200),
    BibTech_Original_Sound_Field varchar(200),
    BibTech_Caption_Subtitle_Language varchar(25),
    BibTech_Caption_Subtitle_Note varchar(200),
    BibTech_Base varchar(25),
    BibTech_Stock varchar(25),
    BibTech_Edgecode_Date year,
    BibTech_Footage int,
    BibTech_Can_Size int,
    primary key (BibTech_ID), 
    foreign key (Bib_IU_Barcode) references BIB_BASIC (Bib_IU_Barcode)
);

DROP TABLE IF EXISTS BIB_COND;
CREATE TABLE BIB_COND (
    Bibcond_ID int not null auto_increment,
    Bib_IU_Barcode varchar(20) not null,
    BibCond_Format_Note varchar(200),
    BibCond_AD smallint,
    BibCond_Shrinkage float(2,1),
    BibCond_Mold smallint,
    BibCond_Condition_Type smallint,
    BibCond_Micellaneous_Condition_Type varchar(200),
    BibCond_Missing_Footage int,
    BibCond_Overall_Condition smallint,
    BibCond_Overall_Condition_Note varchar(200),
    BibCond_Research_Value smallint,
    BibCond_Research_Value_Note varchar(200),
    BibCond_Conservation_Action varchar(200),
    primary key (Bibcond_ID), 
    foreign key (Bib_IU_Barcode) references BIB_BASIC (Bib_IU_Barcode)
);

DROP TABLE IF EXISTS LOAN;
CREATE TABLE LOAN (
    LOAN_ID bigint not null auto_increment,
    Per_ID varchar(25) not null,
    Bib_IU_Barcode varchar(25) not null,
    Loan_Date DATE,
    Loan_Return_Date DATE,
    Loan_Returned_Date DATE,
    Loan_Ext_Date DATE,
    Loan_Purpose varchar(200),
    Loan_Screen_Loc varchar(200) not null,
    primary key (LOAN_ID), 
    foreign key (Per_ID) references PERSON (Per_ID),
    foreign key (Bib_IU_Barcode) references BIB_BASIC (Bib_IU_Barcode)
);


--Clean database function

--Intialize database function