--clean database


--initialize database


--Run queries
INSERT INTO BIB_BASIC
    (Bib_IU_Barcode, Bib_Collect, Bib_Media_Type, Bib_Series_Name, Bib_Series_Part, Bib_Series_Prod_No, Bib_Title, Bib_Alt_Title, Bib_Version, Bib_Reel_No, Bib_Summary, Bib_Creator, Bib_Producer, Bib_Genre, Bib_Subject, Bib_Date, Bib_Location, Bib_Title_Note, Bib_Orig_Med, Bib_Orig_Gauge, Bib_Generation, Bib_Color, Bib_Sound, Bib_Frame_Rate, Bib_Aspect_Ratio, Bib_Dur, Bib_Dial_Lang)
VALUES
    ('value1', 'value2', 'value3','value4','value5', 'value6', 'value7', 'value8', 'value9', 'value10', 'value11', 'value12', 'value13', 'value14', 'value15', 'value16', 'value17', 'value18', 'value19', 'value20', 'value21', 'value22', 'value24', 'value25', 'value26', 'value27', 'value28'),
    ('value1' , 'value2', 'value3','value4','value5', 'value6', 'value7', 'value8', 'value9', 'value10', 'value11', 'value12', 'value13', 'value14', 'value15', 'value16', 'value17', 'value18', 'value19', 'value20', 'value21', 'value22', 'value24', 'value25', 'value26', 'value27', 'value28'),
    ('value1' , 'value2', 'value3','value4','value5', 'value6', 'value7', 'value8', 'value9', 'value10', 'value11', 'value12', 'value13', 'value14', 'value15', 'value16', 'value17', 'value18', 'value19', 'value20', 'value21', 'value22', 'value24', 'value25', 'value26', 'value27', 'value28');


INSERT INTO BIB_IDENT
    (Bib_IU_Barcode, Per_ID, Bibident_IUCAT_Title_No, bibident_Date_Created, Bibident_MDPI_Barcode, Bibident_Current_Loc, Bibident_Alf_Shelf_Loc, Bibident_Orig_Ident, Bibident_Accom_Doc_ID, Bibident_Accom_Doc_Title, Bibident_Accom_Doc_Loc)
VALUES
    ('value1' , 'value2', 'value3','value4','value5', 'value6', 'value7', 'value8', 'value9', 'value10', 'value11'),
    ('value1' , 'value2', 'value3','value4','value5', 'value6', 'value7', 'value8', 'value9', 'value10', 'value11'),
    ('value1' , 'value2', 'value3','value4','value5', 'value6', 'value7', 'value8', 'value9', 'value10', 'value11');

INSERT INTO BIB_TECH
    (Bib_IU_Barcode, BibTech_Multi_Item_Can, BibTech_Pic_Type, BibTech_Snd_Form_Type, BibTech_Snd_Cont_Type, BibTech_Orig_Snd_Field, BibTech_Capt_Sub_Lang, BibTech_Capt_Sub_Note, BibTech_Base, BibTech_Stock, BibTech_Edgecode_Date, BibTech_Footage, BibTech_Can_Size)
VALUES
    ('value1' , 'value2', 'value3','value4','value5', 'value6', 'value7', 'value8', 'value9', 'value10', 'value11', 'value12', 'value13'),
    ('value1' , 'value2', 'value3','value4','value5', 'value6', 'value7', 'value8', 'value9', 'value10', 'value11', 'value12', 'value13'),
    ('value1' , 'value2', 'value3','value4','value5', 'value6', 'value7', 'value8', 'value9', 'value10', 'value11', 'value12', 'value13');

INSERT INTO BIB_COND
    (Bib_IU_Barcode, BibCond_Format_Note, BibCond_AD, BibCond_Shrinkage, BibCond_Mold, BibCond_Cond_Type, BibCond_Misc_Cond_Type, BibCond_Miss_Footage, BibCond_Overall_Cond, BibCond_Overall_Cond_Note, BibCond_Research_Val, BibCond_Research_Val_Note, BibCond_Conserv_Act)
VALUES
    ('value1' , 'value2', 'value3','value4','value5', 'value6', 'value7', 'value8', 'value9', 'value10', 'value11', 'value12', 'value13'),
    ('value1' , 'value2', 'value3','value4','value5', 'value6', 'value7', 'value8', 'value9', 'value10', 'value11', 'value12', 'value13'),
    ('value1' , 'value2', 'value3','value4','value5', 'value6', 'value7', 'value8', 'value9', 'value10', 'value11', 'value12', 'value13');


INSERT INTO LOAN 
    (LoanID, Per_ID, Bib_IU_Barcode, Loan_Date, Loan_Return_Date, Loan_Returned_Date, Loan_Ext_Date, Loan_Overdue, Loan_Purpose, Bibident_Current_Loc)
VALUES
    ('value1' , 'value2', 'value3','value4','value5', 'value6', 'value7', 'value8', 'value9', 'value10'),
    ('value1' , 'value2', 'value3','value4','value5', 'value6', 'value7', 'value8', 'value9', 'value10'),
    ('value1' , 'value2', 'value3','value4','value5', 'value6', 'value7', 'value8', 'value9', 'value10');

INSERT INTO PERSON 
    (Per_ID, Per_Last_Name, Per_First_Name, Per_Organization, Per_Area_Code, Per_Phone_No, Per_Street, Per_City, Per_State, Per_Zip_Code, Per_Region, Per_Country, Per_IUMember)
VALUES
    ('value1' , 'value2', 'value3','value4','value5', 'value6', 'value7', 'value8', 'value9', 'value10', 'value11', 'value12', 'value13'),
    ('value1' , 'value2', 'value3','value4','value5', 'value6', 'value7', 'value8', 'value9', 'value10', 'value11', 'value12', 'value13'),
    ('value1' , 'value2', 'value3','value4','value5', 'value6', 'value7', 'value8', 'value9', 'value10', 'value11', 'value12', 'value13');