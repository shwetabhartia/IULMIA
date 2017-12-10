# Indiana University Libraries Moving Image Archive Database 

The IULMIA database contains over 70,000 records of educational films purchased or produced by Indiana University from 1930 through 1986.  This database allows access through two portals.  The public portal is accessible to everyone and contains a search and recall of the basic bibliographic information of films currently cataloged.  It also allows the user to request a loan of the resource that is sent to the archives.  The second portal is through the administration side.  This restricted access allows the archivist and staff to determine access rights, search, input, edit, and delete records, as well as use reports to assess the films conservation, value priorities, and tracking of a film over its lifetime. 

## Getting Started 

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.  

### Prerequisites 

#### On Windows: 

* Install WAMP (http://www.wampserver.com/en/)
* Must have any web browser 

#### On MacOS: 

* Install MAMP (https://www.mamp.info/en/)
* Must have any web browser 

### Installation

#### On Windows: 

* After installing WAMP, locate the wamp folder directory where you have installed on your computer. 
* Open command prompt and navigate to wamp folder. Eg:- If you have installed wamp folder in C: drive, follow these steps: 
``` 
cd c:\wamp64 
cd www 
```
* Type into command prompt
```
git clone https://github.com/shwetabhartia/IULMIA.git
``` 
Now you have created the folder that will contain all your web-application code. 

* Open mysql console that was installed with wamp. 
* Copy the create_table.sql script and execute in mysql console. Then copy insert_table.sql and insert_table2.sql script into the console.
create_table.sql, insert_table.sql and insert_table2.sql is in IULMIA/includes/data/ directory.
* Change the mysql password in db_config.php file with your mysql password.
db_config file is in IULMIA/includes/data/ directory. 
```
define("DB_PASS", "ShwetaBhartia"); --> define("DB_PASS", "YOUR_PASSWORD_HERE"); 
```
* Open the web browser and type localhost/IULMIA/public url for regular users. To go to the admin page, typelocalhost/IULMIA/public/admin. 

#### On MacOS: 

* Open Terminal (hold down Command+Space and enter 'Terminal' into the search box) 
* In Terminal, type the following text  ```cd ~/Sites```
This will enter the folder Sites. If Sites does not exist, follow these steps in the terminal: 
```
cd ~ 
mkdir Sites 
cd Sites
```
* Type into Terminal
```
git clone https://github.com/shwetabhartia/IULMIA.git
``` 
Now you have created the folder that will contain all your web-application code. 
* Install MAMP by double-clicking the download from the link mentioned above. 
* Follow the instructions on the installation screens. 
* Launch the MAMP server application. Check the options that say 'Apache Server' and 'MySQL Server'.  
*  To change the Document Root follow these steps - http://ruifeio.com/2014/08/08/mamp-how-to-change-the-root-directory-on-apache-server/  
Our Document Root will be the Sites folder where the web application lives.
* Open mysql console. To open type below command in the terminal.
```
mysql -uroot -proot
```
* Copy the create_table.sql script and execute in mysql console. Then copy insert_table.sql and insert_table2.sql script into the console.
create_table.sql, insert_table.sql and insert_table2.sql is in IULMIA/includes/data/ directory.
* Change the mysql password in db_config.php file with your mysql password.
db_config file is in IULMIA/includes/data/ directory. 
```
define("DB_PASS", "ShwetaBhartia"); --> define("DB_PASS", "YOUR_PASSWORD_HERE"); 
``` 
*  Once these changes are made, open the browser and type in 'localhost/IULMIA/public' and this will take us to the search/filter page. To go to the admin page, type in 'localhost/IULMIA/public/admin.php'. 

## Running the tests from ADMIN 

### Search by Title: 

* Click on the header bar **INGEST**.
* Insert any part of a word from the title you are looking for into the Search by Title **SEARCH BAR**. 
```
Example: American   
For every record available, leave the SEARCH BAR empty and click on the magnifying glass button.   
```

### Ingesting new Records: 

* Use the New Record 01 sample (**Figure 01**) to test.   
* Please follow are cardinalities listed in this document to ensure the validity of the records and reports. 
* Click on the header bar **INGEST**.   
* Select and click on **SET METADATA** on the side bar.   
* Insert valid information into the type fields for each attribute.   
* Once completed click **SUBMIT** at the bottom of the metadata list.   

![alt tag](https://github.com/shwetabhartia/IULMIA/blob/master/public/images/NewRecord-1.jpg)
Figure 01

### Updating Records: 

* Use the Revise New Record 01 sample (**Figure 02**) to test.   
* Please follow are cardinalities listed in this document to ensure the validity of the records and reports. 
* Click on the header bar **INGEST**.   
* Select and click on **EDIT METADATA** on the side bar.   
* Reinsert valid information into the type fields for each attribute including the revised value.   
* Once completed click **SUBMIT** at the bottom of the metadata list.   

![alt tag](https://github.com/shwetabhartia/IULMIA/blob/master/public/images/ReviseRecord-1.jpg)
Figure 02. 

### Remove Metadata: 

* Click on the header bar **INGEST**.   
* Select and click on **REMOVE METADATA** on the side bar.   
* Insert the record barcode to be removed into the type field.   
* Click on **SUBMIT** and the record is immediately removed.  
```
Example: 30000157702931  
(Will remove the Tomorrow's Children record you just revised) 
```

### Reports
#### Condition: 

* Click on the header bar **REPORTS**.   
* Select and click on **CONDITION** on the side bar.   
* All records are sequentially listed from the worst to best overall condition.   

#### Value: 

* Click on the header bar **REPORTS**.   
* Select and click on **VALUE** on the side bar.   
* All records are sequentially listed from the highest to lowest value setting.   

#### Tracking: 

* Click on the header bar **REPORTS**.   
* Select and click on **TRACKING** on the side bar.   
* Insert the title or any part of the title you wish to track into the **SEARCH BAR**.   
* All records returned for that title are sequentially listed by loan dates, as well as lists each loan location.   
```
Example: Switz   
```

### Add New Admin Rights: 

* Click on the header bar **MANAGE ADMINS**.
* Click on **Add NEW ADMIN** link to bring up the **CREATE ADMIN** page.
* Insert a username and password for the individual and then click on the **ADD ADMIN** button. 
* If you decide not to add an individual, click on **CANCEL**.
* The page will automatically take you back to the **MANAGE ADMINS** page.

### Edit Admin Rights: 

* Find the name of the person you wish to edit.
* Click the **EDIT** link to bring up the **EDIT ADMIN** page.  
* Insert a new username or password for the individual and then click on **EDIT ADMIN** button.  
* If you decide not to edit an individual, click on **CANCEL**.   
* The page will automatically take you back to the **MANAGE ADMINS** page. 

### Delete Admin Rights: 

* Find the name of the person you wish to edit.   
* Click the **DELETE**.   
* That individual's admin rights will automatically be removed. 

## Running the tests from PUBLIC 

### Search by Title: 

* Insert any part of a word from the title you are looking for into the Search by Title **SEARCH BAR**. 
```
Example: American   
```
* For every record available, leave the SEARCH BAR empty and click on the **MAGNIFYING GLASS** button. 

### Search by Filters: 

* Leave the **SEARCH BAR** empty. 
* Click on a single or multiple options from the **COLLECTION**, **GENRE**, or **SUBJECT** filters.  
* Click on the **FILTER BUTTON** at the left side of the screen. 
```
Example of a single filter: 
Subject: Science 

Example of two filters: 
Collection: Henry Mayer 
Genre: Documentary 

Example of three filters: 
Collection: Uncataloged_AVC 
Genre: Education 
Subject: History 
```

### Request Film with Valid IU Number: 

* To borrow a film, search and recall records from the **SEARCH BAR** or **FILTER**.   
* Click on the name of one of the records recalled to bring up its bibliographic information.   
* If you do not want to request a film click the **NEW SEARCH/FILTER** button on the left to return to the home page. 
* If you do choose to request a film, click the **REQUEST FILM** button on the left. 
* Once the **REQUEST FILM** has been activated a menu comes up to direct you to the correct loan form.   
* If you have a valid IU number in the CAS system, click the **CONTINUE** button.   
* Your request will automatically be filled out on a form and sent to the IULMIA archivist for approval.  
* A feedback page will come up informing you that your request has been fulfilled and offer you the option to **RETURN TO SEARCH** or **LOG OFF**. 

### Request Film with not a Valid IU Number: 

* If you do not have a valid IU number, click on the **NOT A PART OF INDIANA UNIVERSITY**.   
* It will bring up a **LOAN REQUEST FORM** that must be filled out completely.  
* When completed click on the **SUBMIT** button.  
* A feedback page will come up informing you that your request has been sent and offer you the option to **RETURN TO SEARCH**. 

## Built With 

* HTML CSS JS - client-side language 
* PHP - Server side scripting language
* MySQL - Relational Database Management System 
* Apache Tomcat - Open Source Web Server
* GitHub - Version-control respository

## General Input Guidelines 

It is recommended to follow best practice standards when inputting values to an attribute name.  Although every textual situation cannot be accounted for, general guidelines help the consistency of the spelling, terminology, layout of the fields, and more efficient search and retrieval.   

### Names

Names of people or organizations must follow the Anglo-American Cataloguing Rules (AACR2) standard http://www.oclc.org/bibformats/en/onlinecataloging.html.  This means last names come first, followed by a comma and then first name and middle.     
```
Example: 
Watson, John David 
```
Organizations or institutions should be written out in their full form.  Capitalize the first letter of each word for any organizational name. 
```
Example: 
Indiana University 
```
If a name or organization exists in the Library of Congress Authority File, this vocabulary standard should be used.  Please reference Library of Congress Authority File http://authorities.loc.gov/ 

### Upper/Lowercase Capitalization Rules

Unless specifically noted, capitalize the first letter each word or sentence.  Except for the first letter of a word, words between words that are three letters or smaller may be written in lower case. 
```
Example: 
Covering the life of John Quincy Adams (1767-1848).
```

### Dates

Dates should be listed per the W3C-DTF guideline referenced at https://www.w3.org/TR/NOTE-datetime.  This form follows that YYYY-MM-DD standard. Use a single hypen between the year, month and date. 
```
Example: 
Year (YYYY) 
1945 
Year and Month (YYYY-MM) 
1945-03 
Year, Month, and Day (YYYY-MM-DD) 
1945-03-29 
```

### Diacritics

Unicode is used with this software so it is not necessary to use Diacritics. 

## At-A-Glance: Core Element Set for Metadata  

The following list are all the terms that are recommended standard for the IULMIA collection record element set.  Required elements appear in bold. 

**Bib_IU_Barcode**

**Bib_Collect**

Bib_Media_Type 

Bib_Series_Name 

Bib_Series_Part 

Bib_Series_Prod_No 

**Bib_Title** 

Bib_Alt_Title 

Bib_Version 

Bib_Reel_No 

Bib_Summary 

Bib_Creator 

Bib_Producer 

**Bib_Genre**

**Bib_Subject**

Bib_Date 

Bib_Location 

Bib_Title_Note 

Bib_Orig_Med 

Bib_Orig_Gauge 

Bib_Generation 

Bib_Color 

Bib_Sound 

Bib_Frame_Rate 

Bib_Aspect_Ratio 

Bib_Dur 

Bib_Dial_Lang 

**Per_ID**

Bibident_IUCAT_Title_No 

Bibident_Date_Created 

Bibident_MDPI_Barcode 

**Bibident_Current_Loc**

Bibident_Alf_Shelf_Loc 

Bibident_Orig_Ident 

Bibident_Accom_Doc_ID 

Bibident_Accom_Doc_Title 

Bibident_Accom_Doc_Loc 

BibTech_Multi_Item_Can 

BibTech_Pic_Type 

BibTech_Snd_Form_Type 

BibTech_Snd_Cont_Type 

BibTech_Orig_Snd_Field 

BibTech_Capt_Sub_Lang 

BibTech_Capt_Sub_Note 

BibTech_Base 

BibTech_Stock 

BibTech_Edgecode_Date 

BibTech_Footage 

BibTech_Can_Size 

BibCond_Format_Note 

__BibCond_AD__*** 

__BibCond_Shrinkage__*** 

__BibCond_Mold__*** 

BibCond_Cond_Type 

BibCond_Misc_Cond_Type 

BibCond_Miss_Foot 

__BibCond_Overall_Cond__*** 

__BibCond_Overall_Cond_Note__*** 

__BibCond_Research_Val__*** 

__BibCond_Research_Val_Note__*** 

BibCond_Conserv_Act 

***Because the values of these attributes may need to be input at a later date than the initial entry, the Bib_Cond table does not list them at NOT NULL.  However, the IULMIA staff must insert this information as soon as possible to ensure that the Condition and Value Reports as accurate.  Therefore, they are considered REQUIRED for proper data entry behavior. 

## Cardinalities for Metadata Input 

When inputting metadata into the IULMIA database, there are a few cardinalities that must be followed to ensure validity of the SQL reports and records themselves.  The **REQURIED** attributes listed below must be input into the system or the record will be rejected when trying to save.  The **RECOMMENDED** attributes below may be left blank; however, they will invalidate the conservation and condition records and may cause films that are rapidly deteriorating to not be identified and potentially contaminate other films.     

### Required Attributes: 

#### PERSON TABLE 

Per_ID 

Per_IUMember

#### BIB_BASIC TABLE 

Bib_IU_Barcode

Bib_Collection

Bib_Title 

Bib_Genre 

Bib_Subject  

#### BIB_IDENT TABLE 

Bibident_Current_Location 

#### LOAN TABLE 

Loan_Screen_Loc 

### Recommended Attributes 

#### BIB_COND TABLE 

BibCond_AD 

BibCond_Shrinkage 

BibCond_Mold 

BibCond_Overall_Condition 

BibCond_Overall_Condition_Note 

BibCon_Research_Value 

BidCond_Research_Value_Note 
 
### Controlled Vocabulary 

Certain attributes must use a controlled vocabulary determined by IULMIA to maintain unique and consistent values.  This consistency will allow for more efficient search recall, as well as eliminate value redundancies and misspells.  The following attributes are recommended to follow this cardinality when developing the organizations metadata. 

Bib_Media_Type (Dublin Core) 

Bib_Genre 

Bib_Subject 

Bib_Orig_Gauge 

Bib_Generation 

Bib_Color 

Bib_Sound 

Bib_Base 

Bib_Stock 

For values that are unknown and are not a mandatory but maybe discovered in the future always leave the field blank/null.  For string values that will never be known and are not a mandatory requirement write in the value [unknown]. 
```
Example of value that may eventually be revealed: 
BibTech_Capt_Sub_Lang: Null 
Example of value that will never been known: 
BibTech_Capt_Sub_Lang: [unknown] 
```
The title of a film may or may not be known but it is a mandatory field.  For titles that are unknown they must be labelled [untitled].  This syntax and brackets is standard for audiovisual medium and will allow SQL query recalls for untitled films rather than films that are actually titled 'untitled.' 
```
Example of unknown title value: 
Bib_Title: [untitled] 
```

## At-A-Glance: Digital Dictionary 

![alt tag](https://github.com/shwetabhartia/IULMIA/blob/master/public/images/dic1.png)
![alt tag](https://github.com/shwetabhartia/IULMIA/blob/master/public/images/dic2.png)
![alt tag](https://github.com/shwetabhartia/IULMIA/blob/master/public/images/dic3.png)
![alt tag](https://github.com/shwetabhartia/IULMIA/blob/master/public/images/dic4.png)
![alt tag](https://github.com/shwetabhartia/IULMIA/blob/master/public/images/dic5.png)
![alt tag](https://github.com/shwetabhartia/IULMIA/blob/master/public/images/dic6.png)

## Authors 

* Shweta Bhartia - Initial work, Coding and Testing 
* Mildred Noronha - Initial work, Coding and Testing 
* Vicki Shively - Record Input and Validation  

 
