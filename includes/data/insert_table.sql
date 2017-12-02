--clean database


--initialize database


--Run queries
INSERT INTO PERSON 
    (Per_ID, Per_Last_Name, Per_First_Name, Per_Organization, Per_Area_Code, Per_Phone_No, Per_Street, Per_City, Per_State, Per_Zip_Code, Per_Region, Per_Country, Per_IUMember)
VALUES
    ('2000010802', 'Shively', 'Vicki', 'IULMIA', 818, '653-7254', '3339 S. Cheekwood Ln.', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000012315', 'Kutnicki', 'Saul', 'IULMIA', 812, '808-1117', '560 Dutch Valley Rd. #2414', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000062254', 'Holschuh', 'Courtney', 'IULMIA', 812, '547-4164', '250 10th St. #3210', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000032154', 'Tater-Lind', 'Katie', 'IULMIA', 812, '547-384-0323', '2137 Panorama Terrace', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000023251', 'Creech', 'Lydia', 'IULMIA', 812, '515-9773', '501 North St.', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000054127', 'Uhrich', 'Andy', 'IULMIA', 812, '494-3118', '3333 E. Florida Avd.', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000056484', 'Stoeltje', 'Rachael', 'IULMIA', 310, '889-4311', '5700 Cortina Circle', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000075481', 'Slavins', 'Cynthia', 'IU', 812, '480-6129', '12 Vickrey St.', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000095348', 'Schneider', 'Paul', 'IU', 812, '588-3499', '1245 Baylor Way', 'Elletsville', 'IN', 47429, 'Monroe', 'USA', 1),
    ('2000012141', 'Klug', 'Daniel', 'IU', 812, '405-7077', '353 Wild Rose Circle.', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000065247', 'Coates', 'Will', 'IU', 812, '225-2270', '91 Fenimore St.', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000065656', 'Hoffer', 'Kristin', 'IU', 812, '493-2243', '755 Thistlewood Dr.', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000021247', 'Smith', 'Robert', 'IU', 812, '592-8849', '10260 Burbank Blvd. #2', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000065374', 'Bonner', 'Mike', 'IU', 812, '205-3587', '2459 Park Oak Dr.', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000024716', 'Dailey', 'Kathy', 'IU', 812, '397-8455', '8263 Elizabeth Ln.', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000065238', 'Anderson', 'Tom', 'IU', 812, '621-1014', '8263 Elizabeth Ln.', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000084571', 'Mattivi', 'Adam', 'IU', 469, '867-6870', '4333 Brunswick Ave.', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('8880099654', 'Hogarth', 'Pam', 'MoMA', 212, '708-9400', '11 W. 53rd. S.', 'New York', 'NY', 10019, 'New York', 'USA', 0),
    ('2000096487', 'Moreland', 'Sheila', 'IU', 812, '791-8570', '216 Sheldon St. #5', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000074146', 'Deckard', 'Phil', 'IU', 812, '753-5211', '92 Caballo Court', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000032698', 'Vadnais', 'Gina', 'IU', 812, '709-8480', '2121 E. 7th Place', 'Indianapolis', 'IN', 46231, 'Marion', 'USA', 1),
    ('2000045176', 'Edwards', 'Mae', 'IU', 812, '259-2848', '1225 N. Cherokee #208', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000043652', 'Gunn', 'Traci', 'IU', 812, '420-9980', '2211 Hastings Shore Ln.', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000001254', 'Elsroad', 'Joyce', 'IU', 812, '354-4124', '2026 Santa Cruz Ave..', 'Indianapolis', 'IN', 46204, 'Marion', 'USA', 1),
    ('2000003218', 'Armon', 'Steve', 'IU', 812, '596-2521', '1120 S. Point View St.', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000025318', 'Kinney', 'Kristin', 'IU', 812, '427-5500', '478 Wynola St.', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000029856', 'Whalen', 'David', 'IU', 812, '788-9409', '2435 5th St. #201', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('2000003812', 'Midgen', 'Wil', 'IU', 812, '563-4255', '376 Walnut #4B', 'Bloomington', 'IN', 47401, 'Monroe', 'USA', 1),
    ('8880008745', 'Langlois', 'Hénri', 'Cinematheque Francaise', 33, '1-71-19-33-33', '51 Rue de Bercy', 'Paris', 'FR', 75012, 'Paris', 'France', 0);

INSERT INTO ADMINS
    (username, hashed_password)
VALUES
    ('rstoeltje','$2y$10$MjA4OTEwNGFmNzU5MzAzZe.sWeXZpDD0fvIFp.St4zEFyeFQjfFY.');

INSERT INTO BIB_BASIC
    (Bib_IU_Barcode, Bib_Collection, Bib_Media_Type, Bib_Series_Name, Bib_Series_Part, Bib_Series_Production_No, Bib_Title, Bib_Alternative_Title, Bib_Version_No, Bib_Reel_No, Bib_Summary, Bib_Creator, Bib_Producer, Bib_Genre, Bib_Subject, Bib_Date_Created, Bib_Location, Bib_Title_Note, Bib_Original_Medium, Bib_Original_Gauge, Bib_Generation, Bib_Color, Bib_Sound, Bib_Frame_Rate, Bib_Aspect_Ratio, Bib_Duration, Bib_Language)
VALUES
    ('30000149802187', 'Uncataloged_AVC', 'Moving Image', Null, Null, '[unknown]', 'The Sunspot Mystery: Sun Weather Connection', Null, Null, 1, 'Documentary on the Sun\'s sunspots.', '[unknown]', 'A United Nations Film', 'Education', 'Science', '[unknown]', '[unknown]', Null, 'Film','16mm', 'Projection Print', 'Color', 'Sound', 24, '1.37:1', '00:19:00', 'English'),
    ('30000149802195', 'Uncataloged_AVC', 'Moving Image', 'The Americans', 5, '[unknown]', 'The Americans: Chief Joseph', Null, Null, 1, 'Series focused on the life of Chief Joseph.', '[unknown]', 'Encylopedia Brittanica Education Corporation', 'Education', 'History', '[unknown]', '[unknown]', 'Note on can: 83653-2, Note on leader- Show No.9', 'Film','16mm', 'Projection Print', 'Color', 'Sound', 24, '1.37:1', '00:22:00', 'English'),
    ('30000149802203', 'Uncataloged_AVC', 'Moving Image', 'The Americans', 5, '[unknown]', 'The Americans: Chief Joseph', Null, Null, 2, 'Series focused on the life of Chief Joseph.', '[unknown]', 'Encylopedia Brittanica Education Corporation', 'Education', 'History', '[unknown]', '[unknown]', 'Note on can: 83653-3 ; Note on leader: Show No.9', 'Film','16mm', 'Projection Print', 'Color', 'Sound', 24, '1.37:1', '00:21:00', 'English'),
    ('30000149802211', 'Uncataloged_AVC', 'Moving Image', 'Between the Wars', 8, '[unknown]', 'Between the Wars (8): America in the Pacific -- The Clash of Two Cultures', Null, Null, 1, 'Clash between the American and Pacific Islander cultures.', '[unknown]', 'Encylopedia Brittanica Education Corporation', 'Education', 'Politics', '[unknown]', '[unknown]', Null, 'Film','16mm', 'Projection Print', 'Color', 'Sound', 24, '1.37:1', '00:19:00', 'English'),
    ('30000149802229', 'Uncataloged_AVC', 'Moving Image', Null, Null, '[unknown]', 'The History of the Motion Picture: Blood and Sand', Null, Null, 1, 'History of motion pictures.', '[unknown]', 'Encylopedia Brittanica Education Corporation', 'Education', 'History', '[unknown]', '[unknown]', 'Note on can: 83602-1', 'Film','16mm', 'Projection Print', 'Black and White', 'Sound', 24, '1.37:1', '00:27:00', 'English'),
    ('30000149802237', 'Uncataloged_AVC', 'Moving Image', 'One Man\'s China', 4, '[unknown]', 'One Man\'s China: One Nation Many People\'s', Null, Null, 1, 'Introspection on China and overpopulation.', '[unknown]', 'Encylopedia Brittanica Education Corporation', 'Education', 'History', '[unknown]', '[unknown]', Null, 'Film','16mm', 'Projection Print', 'Color', 'Sound', 24, '1.37:1', '00:19:00', 'English'),
    ('30000149802245', 'Uncataloged_AVC', 'Moving Image', 'One Man\'s China', 4, '[unknown]', 'One Man\'s China: One Nation Many People\'s', Null, Null, 2, 'Introspeciton on China\'s communist culture.', '[unknown]', 'Encylopedia Brittanica Education Corporation', 'Education', 'History', '[unknown]', '[unknown]', Null, 'Film','16mm', 'Projection Print', 'Color', 'Sound', 24, '1.37:1', '00:19:00', 'English'),
    ('30000149802252', 'Uncataloged_AVC', 'Moving Image', Null, Null, '[unknown]', 'Drifting of the Continents', Null, Null, 1, 'History of the continents and how they became separated.', '[unknown]', 'Sterling Productions Inc.', 'Education', 'Geography', '[unknown]', '[unknown]', 'Note on can: 7004-5-B', 'Film','16mm', 'Projection Print', 'Color', 'Sound', 24, '1.37:1', '00:27:00', 'English'),
    ('30000149802260', 'Uncataloged_AVC', 'Moving Image', Null, Null, '[unknown]', 'Bottle - Babies', Null, Null, 1, 'Comparison between breast and bottle feeding babies.', '[unknown]', 'AIMS Media', 'Education', 'Child Development', '[unknown]', '[unknown]', Null, 'Film','16mm', 'Projection Print', 'Color', 'Sound', 24, '1.37:1', '00:27:00', 'English'),
    ('30000149802278', 'Uncataloged_AVC', 'Moving Image', 'The Americans', 5, '[unknown]', 'The Americans: Chief Black Hawk', Null, Null, 1, 'Series focused on the life of Chief Black Hawk.', '[unknown]', 'AIMS Media', 'Education', 'History', '[unknown]', '[unknown]', 'Note on can: 83651-3', 'Film','16mm', 'Projection Print', 'Color', 'Sound', 24, '1.37:1', '00:19:00', 'English'),
    ('30000157703030', 'Henry Mayer', 'Moving Image', 'Salmon River', Null, '[unknown]', 'Salmon River-Snake River', Null, 1, Null, 'Can top: Snake River, Tetons, 1962, Can side- Salmon River 1961 - Work Print - Content includes rafting trip', 'Mayer, Henry, M.D.', 'Mayer, Henry, M.D.', 'Documentary', 'Environment', '1961-1962', '[unknown]', Null, 'Film','16mm', 'Projection Print', 'Black and White', 'Silent', 24, '1.37:1', '00:23:00', 'English'),
    ('30000157703038', 'Henry Mayer', 'Moving Image', 'Salmon River', Null, '[unknown]', 'Salmon River - Cut Work Print - Mayer', Null, 1, Null, 'Early rough cut of the Salmon River Run with Wildfire.', 'Mayer, Henry, M.D.', 'Mayer, Henry, M.D.', 'Documentary', 'Environment', '1961', 'Ohio', 'Note with film "India w/p" Do not project, single splices', 'Film','16mm', 'Work Print', 'Color', 'Silent', 24, '1.37:1', '00:30:00', 'English'),
    ('30000157703087', 'Henry Mayer', 'Moving Image', 'Tomorrow\'s Children', Null, '[unknown]', 'India W/P', Null, 1, Null, 'Includes daytime shots of the Taj Mahal and shots around bazaar.', 'Mayer, Henry, M.D.', 'Mayer, Henry, M.D.', 'Education', 'Health & Wellness', '1969', 'India', Null, 'Film','16mm', 'Reversal Positive', 'Color', 'Silent', 24, '1.37:1', '00:11:00', 'English'),
    ('30000157703061', 'Henry Mayer', 'Moving Image', 'Tomorrow\'s Children', Null, '[unknown]', '1- New York Skyline, Buildings, Street Scenes, Crowds, Beach Scene', Null, 1, Null, 'NYC skyline from above, buildings, street scenes, crowds, beach scene', 'Mayer, Henry, M.D.', 'Mayer, Henry, M.D.', 'Education', 'Health & Wellness', '1969', 'New York City, NY', Null, 'Film','16mm', 'Reversal Positive', 'Color', 'Silent', 24, '1.37:1', '00:27:00', 'English'),
    ('30000157703079', 'Henry Mayer', 'Moving Image', Null, Null, '[unknown]', '[untitled]', Null, 1, Null, 'City shots', 'Mayer, Henry, M.D.', 'Mayer, Henry, M.D.', 'Education', '[unknown]', '[unknown]', '[unknown]', Null, 'Film','16mm', 'Reversal Positive', 'Color', 'Silent', 24, '1.37:1', '00:11:00', 'English'),
    ('30000157703103', 'Henry Mayer', 'Moving Image', 'Home Movies', Null, '[unknown]', 'Switz Ski', Null, 1, Null, 'Skiing', 'Mayer, Henry, M.D.', 'Mayer, Henry, M.D.', 'Home Movies', 'Recreation', '1969-01-22', 'Switzerland', 'Workprint with film "Australia - N.Z., Switz-ski', 'Film','16mm', 'Reversal Positive', 'Color', 'Silent', 24, '1.37:1', '00:19:00', 'English'),
    ('30000157703095', 'Henry Mayer', 'Moving Image', Null, Null, '[unknown]', '[untitled]', Null, 1, Null, 'Ocean, shipping port cranes, woman with a microphone', 'Mayer, Henry, M.D.', 'Mayer, Henry, M.D.', 'Education', '[unknown]', '[unknown]', '[unknown]', 'In Can', 'Film','16mm', 'Reversal Positive', 'Color', 'Silent', 24, '1.37:1', '00:25:00', 'English'),
    ('30000157703053', 'Henry Mayer', 'Moving Image', 'Salmon River', Null, '[unknown]', 'Down the Salmon in Rubber Boats', Null, 1, Null, 'River, boats, people', 'Mayer, Henry, M.D.', 'Mayer, Henry, M.D.', 'Documentary', 'Environment', '1961', 'Ohio', 'In Can', 'Film','16mm', 'B Roll Postive', 'Color', 'Silent', 24, '1.37:1', '00:25:00', 'English'),
    ('30000157703046', 'Henry Mayer', 'Moving Image', 'Salmon River', Null, '[unknown]', 'Down the Salmon in Rubber Boats', Null, 1, Null, 'River, boats, people', 'Mayer, Henry, M.D.', 'Mayer, Henry, M.D.', 'Documentary', 'Environment', '1961', 'Ohio', 'In Can', 'Film','16mm', 'A Roll Postive', 'Color', 'Silent', 24, '1.37:1', '00:25:00', 'English'),
    ('30000157702899', 'Henry Mayer', 'Moving Image', 'Tomorrow\'s Children', Null, '[unknown]', 'Dr Mayer (1) Africa (2) Japan Country & City Scnes - Train Station (3)Israel [can label]', Null, 1, Null, 'Africa - Killamanjaru, elephants, ostrich, natives', 'Mayer, Henry, M.D.', 'Mayer, Henry, M.D.', 'Education', 'Health & Wellness', '1969', 'Africa, Japan', Null, 'Film','16mm', 'Original', 'Color', 'Silent', 24, '1.37:1', '00:22:00', 'English'),
    ('30000149802336', 'Uncataloged_AVC', 'Moving Image', Null, Null, '[unknown]', 'Antoine Et Colette', Null, Null, 1, 'Following the relationship of Antoine and Colette in Paris.', '[unknown]', 'BBC Television Film', 'Film Short', 'Arts & Science', '1974', '[unknown]', 'Note on can: 83980-2', 'Film','16mm', 'Projection Print', 'Black and White', 'Sound', 24, '2.35:1', '00:27:00', 'French'),
    ('30000149803110', 'Uncataloged_AVC', 'Moving Image', Null, Null, '[unknown]', 'Kyogashi: The Celebrated Cakes and Sweets of Japan', Null, Null, 1, 'Cakes and sweet lessons from Japan\'s best pastry chef.', '[unknown]', 'Babbit Films Specialties', 'Education', 'Arts & Science', '[unknown]', '[unknown]', Null, 'Film','16mm', 'Projection Print', 'Color', 'Sound', 24, '1.37:1', '00:25:00', 'English'),
    ('30000149802583', 'Uncataloged_AVC', 'Moving Image', Null, Null, '[unknown]', 'Innocent Year Part 1 of 2', Null, Null, 1, 'The year before the rise of Axis.', '[unknown]', 'Encylopedia Brittanica Education Corporation', 'Education', 'History', '[unknown]', '[unknown]', Null, 'Film','16mm', 'Projection Print', 'Color', 'Sound', 24, '1.37:1', '00:27:00', 'English'),
    ('30000149802591', 'Uncataloged_AVC', 'Moving Image', Null, Null, '[unknown]', 'Innocent Year Part 2 of 2', Null, Null, 2, 'The year before the rise of Axis.', '[unknown]', 'Encylopedia Brittanica Education Corporation', 'Education', 'History', '[unknown]', '[unknown]', Null, 'Film','16mm', 'Projection Print', 'Color', 'Sound', 24, '1.37:1', '00:27:00', 'English'),
    ('30000149803003', 'Uncataloged_AVC', 'Moving Image', 'Ten Who Dared', 10, '[unknown]', 'Ten Who Dared: Captain James Cook', Null, Null, 1, 'Profile on the life of Captain Cook.', '[unknown]', 'Encylopedia Brittanica Education Corporation', 'Education', 'History', '[unknown]', '[unknown]', Null, 'Film','16mm', 'Projection Print', 'Color', 'Sound', 24, '1.37:1', '00:25:00', 'English'),
    ('30000149803011', 'Uncataloged_AVC', 'Moving Image', 'Ten Who Dared', 10, '[unknown]', 'Ten Who Dared: Francisco Pizarro', Null, Null, 1, 'Profile on the life of Francisco Pizarro.', '[unknown]', 'Encylopedia Brittanica Education Corporation', 'Education', 'History', '[unknown]', '[unknown]', Null, 'Film','16mm', 'Projection Print', 'Color', 'Sound', 24, '1.37:1', '00:19:00', 'English'),
    ('30000149803029', 'Uncataloged_AVC', 'Moving Image', Null, Null, '[unknown]', 'Will the Fishing Have to Stop?', Null, Null, 1, 'How environmental impact affects fishing and streams.', '[unknown]', 'BBC Television Film', 'Education', 'Environment', '[unknown]', '[unknown]', Null, 'Film','16mm', 'Projection Print', 'Color', 'Sound', 24, '1.37:1', '00:25:00', 'English'),
    ('30000149803037', 'Uncataloged_AVC', 'Moving Image', Null, Null, '[unknown]', 'Ten Who Dared: Roald Amundsen', Null, Null, 1, 'Profile on the life of Roald Amundsen.', '[unknown]', 'BBC Films', 'Education', 'History', '[unknown]', '[unknown]', Null, 'Film','16mm', 'Projection Print', 'Color', 'Sound', 24, '1.37:1', '00:25:00', 'English'),
    ('30000149803045', 'Uncataloged_AVC', 'Moving Image', Null, Null, '[unknown]', 'Boxing - The Noble Art', Null, Null, 1, 'The study of the history of boxing.', '[unknown]', 'BBC Television Film', 'Education', 'Sports', '[unknown]', '[unknown]', 'Note on can: 83813-1', 'Film','16mm', 'Projection Print', 'Color', 'Sound', 24, '1.37:1', '00:27:00', 'English'),
    ('30000149803052', 'Uncataloged_AVC', 'Moving Image', Null, Null, '[unknown]', 'Edgar Cayce (1877-1945)', Null, Null, 1, 'The mysticism of Edgar Cayce.', '[unknown]', 'BBC Films', 'Education', 'History', '[unknown]', '[unknown]', 'Note on can: 83813-1', 'Film','16mm', 'Projection Print', 'Color', 'Sound', 24, '1.37:1', '00:22:00', 'English');


INSERT INTO BIB_IDENT
    (Bib_IU_Barcode, Per_ID, Bibident_IUCAT_Title_No, Bibident_Date_Record_Created, Bibident_MDPI_Barcode, Bibident_Current_Location, Bibident_Alf_Shelf_Location, Bibident_Original_Identification, Bibident_Accompanying_Doc_ID, Bibident_Accompanying_Doc_Title, Bibident_Accompanying_Doc_Location)
VALUES
    ('30000149802187', '2000023251', 'B-IULMIA', '2016-01-15', Null, 'In Storage (Awaiting Ingest)', 'Aisle 24 L11-5', '83653-2', '5001.1', 'Movie Script and Optional Reading', 'FileCabinet03'),
    ('30000149802195', '2000023251', 'B-IULMIA', '2016-01-15', Null, 'In Storage (Awaiting Ingest)', 'Aisle 24 L11-6', '83653-3 ', '5002.1', 'Movie Script and Supplementary Reading', 'FileCabinet03'),
    ('30000149802203', '2000023251', 'B-IULMIA', '2016-01-15', Null, 'In Storage (Awaiting Ingest)', 'Aisle 24 L11-6', '[unknown]', '5003.1', 'Movie Script and Supplementary Reading', 'FileCabinet03'),
    ('30000149802211', '2000023251', 'B-IULMIA', '2016-01-15', Null, 'In Storage (Awaiting Ingest)', 'Aisle 24 L11-7', '83602-1', '5004.1', Null, Null),
    ('30000149802229', '2000023251', 'B-IULMIA', '2016-01-15', Null, 'In Storage (Awaiting Ingest)', 'Aisle 24 L11-6', '[unknown]', '5005.1', 'Movie Script and Supplementary Reading', 'FileCabinet03'),
    ('30000149802237', '2000023251', 'B-IULMIA', '2016-01-15', Null, 'In Storage (Awaiting Ingest)', 'Aisle 24 L11-5', '[unknown]', '5006.1', 'Student Guide Book', 'FileCabinet03'),
    ('30000149802245', '2000023251', 'B-IULMIA', '2016-01-15', Null, 'In Storage (Awaiting Ingest)', 'Aisle 24 L11-5', '7004-5-B', Null, Null, Null),
    ('30000149802252', '2000023251', 'B-IULMIA', '2016-01-15', Null, 'In Storage (Awaiting Ingest)', 'Aisle 24 L11-6', '[unknown]', Null, Null, Null),
    ('30000149802260', '2000023251', 'B-IULMIA', '2016-01-15', Null, 'In Storage (Awaiting Ingest)', 'Aisle 24 L11-7', '83651-3', Null, Null, Null),
    ('30000149802278', '2000023251', 'B-IULMIA', '2016-01-15', Null, 'In Storage (Awaiting Ingest)', 'Aisle 24 L11-6', '[unknown]', Null, Null, Null),
    ('30000157703030', '2000010802', Null, '2017-02-17', Null, 'IULMIA A1', Null, Null, Null, Null, Null),
    ('30000157703038', '2000010802', Null, '2017-02-17', Null, 'Mold Bin', Null, Null, Null, Null, Null),
    ('30000157703087', '2000010802', Null, '2017-02-17', Null, 'IULMIA A1', Null, Null, Null, 'Came in can labeled - Dr mayer 1- New York Skyline, Buildings, Street Scenes, Crowds, Beach Scene Orig.', 'Recycle'),  
    ('30000157703061', '2000010802', Null, '2017-02-17', Null, 'IULMIA A1', Null, Null, Null, 'Came in can labeled - Dr mayer 1- New York Skyline, Buildings, Street Scenes, Crowds, Beach Scene Orig.', 'Recycle'),
    ('30000157703079', '2000010802', Null, '2017-02-18', Null, 'IULMIA A1', Null, Null, Null, 'In can labeled "Neg - Hoffmeyer, foot, ladies Koda"', 'Recycle'),
    ('30000157703103', '2000010802', Null, '2017-02-18', Null, 'IULMIA A1', Null, Null, Null, 'In can labeled "Neg - Hoffmeyer, foot, ladies Koda"', 'Recycle'),
    ('30000157703095', '2000010802', Null, '2017-02-18', Null, 'IULMIA A1', Null, Null, Null, Null, Null),
    ('30000157703053', '2000010802', Null, '2017-02-18', Null, 'IULMIA A1', Null, Null, Null, Null, Null),
    ('30000157703046', '2000010802', Null, '2017-02-18', Null, 'IULMIA A1', Null, Null, Null, 'Bag wrapped film that is in original can, writing on bag labeled - Israel Africa', 'FileCabinet02'),
    ('30000157702899', '2000010802', Null, '2017-02-18', Null, 'IULMIA A1', Null, Null, Null, 'Bag wrapped film that is in original can, writing on bag labeled - Japan, country & city scenes, train station', 'FileCabinet02'),
    ('30000149802336', '2000023251', 'B-IULMIA', '2016-01-15', Null, 'ALF', 'Aisle 24 L11-6', '81424-1', Null, Null, Null),
    ('30000149803110', '2000032154', 'B-IULMIA', '2016-01-15', Null, 'MoMa', 'Aisle 24 L11-5', '[unknown]', Null, Null, Null),
    ('30000149802583', '2000012315', 'B-IULMIA', '2016-01-15', Null, 'In Storage (Awaiting Ingest)', 'Aisle 24 L11-7', '85309-1', Null, Null, Null),
    ('30000149802591', '2000012315', 'B-IULMIA', '2016-01-15', Null, 'In Storage (Awaiting Ingest)', 'Aisle 24 L11-7', '85325-1', Null, Null, Null),
    ('30000149803003', '2000032154', 'B-IULMIA', '2016-01-15', Null, 'ALF', 'Aisle 24 L11-7', '[unknown]', Null, Null, Null),
    ('30000149803011', '2000032154', 'B-IULMIA', '2016-01-15', Null, 'ALF', 'Aisle 24 L11-7', '[unknown]', Null, Null, Null),
    ('30000149803029', '2000032154', 'B-IULMIA', '2016-01-15', Null, 'ALF', 'Aisle 24 L11-7', '[unknown]', Null, Null, Null),
    ('30000149803037', '2000032154', 'B-IULMIA', '2016-01-15', Null, 'ALF', 'Aisle 24 L11-7', '[unknown]', Null, Null, Null),
    ('30000149803045', '2000032154', 'B-IULMIA', '2016-01-15', Null, 'IULMIA', 'Aisle 24 L11-6', '[unknown]', Null, Null, Null),
    ('30000149803052', '2000032154', 'B-IULMIA', '2016-01-15', Null, 'ALF', 'Aisle 24 L11-5', '[unknown]', Null, Null, Null);


INSERT INTO BIB_TECH
    (Bib_IU_Barcode, BibTech_Multi_Item_Can, BibTech_Picture_Type, BibTech_Sound_Form_Type, BibTech_Sound_Content_Type, BibTech_Original_Sound_Field, BibTech_Caption_Subtitle_Language, BibTech_Caption_Subtitle_Note, BibTech_Base, BibTech_Stock, BibTech_Edgecode_Date, BibTech_Footage, BibTech_Can_Size)
VALUES
    ('30000149802187', Null, 'Talkie', 'Magnetic', 'SND', 'Variable Area', '[unknown]', '[unknown]', 'Polyester', 'Kodak', '1972', 700, 1000),
    ('30000149802195', Null, 'Talkie', 'Optical', 'SND', 'Variable Area', '[unknown]', '[unknown]', 'Acetate', 'Kodak', '1969', 800, 1200),
    ('30000149802203', Null, 'Talkie', 'Optical', 'SND', 'Variable Area', '[unknown]', '[unknown]', 'Acetate', 'Kodak', '1969', 800, 1200),
    ('30000149802211', Null, 'Talkie', 'Optical', 'SND', 'Variable Area', '[unknown]', '[unknown]', 'Polyester', 'Kodak', '1970', 700, 1100),
    ('30000149802229', Null, 'Talkie', 'Optical', 'SND', 'Single Area', '[unknown]', '[unknown]', 'Polyester', 'Kodak', '1974', 1000, 1200),
    ('30000149802237', Null, 'Talkie', 'Optical', 'SND', 'Variable Area', '[unknown]', '[unknown]', 'Polyester', 'Kodak', '1969', 700, 1000),
    ('30000149802245', Null, 'Talkie', 'Optical', 'SND', 'Variable Area', '[unknown]', '[unknown]', 'Polyester', 'Kodak', '1969', 700, 1000),
    ('30000149802252', Null, 'Talkie', 'Optical', 'SND', 'Variable Area', '[unknown]', '[unknown]', 'Polyester', 'Kodak', '1951', 1000, 1200),
    ('30000149802260', Null, 'Talkie', 'Optical', 'SND', 'Variable Area', '[unknown]', '[unknown]', 'Polyester', 'Kodak', '1967', 1000, 1200),
    ('30000149802278', Null, 'Talkie', 'Optical', 'SND', 'Variable Area', '[unknown]', '[unknown]', 'Polyester', 'Kodak', '1969', 700, 1200),
    ('30000157703030', Null, 'MOS', Null, Null, Null, Null, Null, 'Polyester', 'Ektachrome', '1961', 850, 1000),
    ('30000157703038', Null, 'MOS', Null, Null, Null, Null, Null, 'Polyester', 'Kodachrome', '1959', 1100, 1200),
    ('30000157703087', Null, 'MOS', Null, Null, Null, Null, Null, 'Polyester', 'Ektachrome', Null, 400, 800),
    ('30000157703061', Null, 'MOS', Null, Null, Null, Null, Null, 'Polyester', 'Ektachrome', Null, 1000, 1200),
    ('30000157703079', Null, 'MOS', Null, Null, Null, Null, Null, 'Polyester', 'Ektachrome', '1968', 400, 800),
    ('30000157703103', Null, 'MOS', Null, Null, Null, Null, Null, 'Polyester', 'Ektachrome', '1966', 700, 800),
    ('30000157703095', Null, 'MOS', Null, Null, Null, Null, Null, 'Polyester', 'Ektachrome', '1961', 900, 1000),
    ('30000157703053', Null, 'MOS', Null, Null, Null, Null, Null, 'Polyester', 'Ektachrome', '1961', 900, 1000),
    ('30000157703046', Null, 'MOS', Null, Null, Null, Null, Null, 'Polyester', 'Ektachrome', '1968', 900, 1000),
    ('30000157702899', Null, 'MOS', Null, Null, Null, Null, Null, 'Polyester', 'Ektachrome', '1968', 800, 800),
    ('30000149802336', Null, 'Talkie', 'Optical', 'SND', 'Variable Area', '[unknown]', '[unknown]', 'Polyester', 'Kodak', '1974', 1000, 1200),
    ('30000149803110', Null, 'Talkie', 'Optical', 'SND', 'Variable Area', '[unknown]', '[unknown]', 'Polyester', 'Kodak', '1976', 900, 1200),
    ('30000149802583', Null, 'Talkie', 'Optical', 'SND', 'Variable Area', '[unknown]', '[unknown]', 'Polyester', 'Kodak', '1967', 1000, 1200),
    ('30000149802591', Null, 'Talkie', 'Optical', 'SND', 'Variable Area', '[unknown]', '[unknown]', 'Polyester', 'Kodak', '1967', 1000, 1200),
    ('30000149803003', Null, 'Talkie', 'Optical', 'SND', 'Variable Area', '[unknown]', '[unknown]', 'Polyester', 'Kodak', '1958', 900, 1200),
    ('30000149803011', Null, 'Talkie', 'Optical', 'SND', 'Variable Area', '[unknown]', '[unknown]', 'Polyester', 'Kodak', '1958', 700, 1000),
    ('30000149803029', Null, 'Talkie', 'Optical', 'SND', 'Variable Area', '[unknown]', '[unknown]', 'Polyester', 'Kodak', '1947', 900, 1000),
    ('30000149803037', Null, 'Talkie', 'Optical', 'SND', 'Variable Area', '[unknown]', '[unknown]', 'Polyester', 'Kodak', '1941', 900, 1000),
    ('30000149803045', Null, 'Talkie', 'Optical', 'SND', 'Variable Area', '[unknown]', '[unknown]', 'Polyester', 'Kodak', '1978', 1000, 1200),
    ('30000149803052', Null, 'Talkie', 'Optical', 'SND', 'Variable Area', '[unknown]', '[unknown]', 'Acetate', 'Ecktachrome', '1976', 1000, 1200);


INSERT INTO BIB_COND
    (Bib_IU_Barcode, BibCond_Format_Note, BibCond_AD, BibCond_Shrinkage, BibCond_Mold, BibCond_Condition_Type, BibCond_Micellaneous_Condition_Type, BibCond_Missing_Footage, BibCond_Overall_Condition, BibCond_Overall_Condition_Note, BibCond_Research_Value, BibCond_Research_Value_Note, BibCond_Conservation_Action)
VALUES
    ('30000149802187', Null, 1, Null, 0, 1, 1, Null, 1, 'Moderate to Severe Scratches and broken sprockets. Faded but no warpage.', 3, Null, 'Digitize when time and budget allows.'),
    ('30000149802195', Null, 1, 0.4, 3, 1, 1, Null, 1, 'Few broken sprockets', 3, Null, 'Digitize when time and budget allows.'),
    ('30000149802203', Null, 1, 0.3, 0, 1, 1, Null, 1, '1 flip warpage but otherwise fine on General Inspection', 3, Null, 'Digitize when time and budget allows.'),
    ('30000149802211', Null, 1, Null, 0, 1, 1, Null, 1, 'Moderate to Severe Scratches and broken sprockets. Faded but no warpage.', 3, Null, 'Digitize when time and budget allows.'),
    ('30000149802229', Null, 1, 0.3, 0, 0, 0, Null, 0, 'Fine on General Inspection', 3, Null, 'Digitize when time and budget allows.'),
    ('30000149802237', Null, 1, Null, 0, 1, 1, Null, 1, 'Moderate to Severe Scratches and broken sprockets. Faded but no warpage.', 3, Null, 'Digitize when time and budget allows.'),
    ('30000149802245', Null, 1, Null, 0, 1, 1, Null, 1, 'Moderate to Severe Scratches and broken sprockets. Faded but no warpage.', 3, Null, 'Digitize when time and budget allows.'),
    ('30000149802252', Null, 1, 0.1, 0, 0, 0, Null, 0, 'Fine on General Inspection', 3, Null, 'Digitize when time and budget allows.'),
    ('30000149802260', Null, 1, Null, 0, 1, 1, Null, 1, 'Moderate to Severe Scratches and broken sprockets. Faded but no warpage.', 3, Null, 'Digitize when time and budget allows.'),
    ('30000149802278', Null, 1, 0.4, 0, 1, 1, Null, 1, '1 flip warp otherwise fine on General Inspection', 3, Null, 'Digitize when time and budget allows.'),
    ('30000157703030', 'Should investigate further - may be home movies.', 1, 0, 0, 1, 1, Null, 0, Null, 0, 'Footage excellent for Documentary productions and grant pursuit.', 'Should investigate further - may be home movies.'),
    ('30000157703038', 'Should investigate further - may be home movies.', 1, 0, 3, 1, 1, Null, 0, 'Mold. Slighly yellow.', 0, 'Footage excellent for Documentary productions and grant pursuit.', 'Should investigate further - may be home movies.'),
    ('30000157703087', 'Should investigate further - may be home movies.', 1, 0, 0, 1, 1, Null, 0, 'Slightly yellow.', 0, 'Footage excellent for Documentary productions and grant pursuit.', 'Should investigate further - may be home movies.'),
    ('30000157703061', 'Should investigate further - may be home movies.', 1, 0, 0, 1, 1, Null, 0, 'Slightly yellow.', 0, 'Footage excellent for Documentary productions and grant pursuit.', 'Should investigate further - may be home movies.'),
    ('30000157703079', 'Recommend digitize immediately', 1, 0, 0, 0, 0, Null, 0, 'Slightly yellow.', 0, 'Footage excellent for Documentary productions and grant pursuit.', 'Recommend digitize'),
    ('30000157703103', Null, 1, 1.5, 0, 1, 1, Null, 0, 'Grainy.', 0, 'Footage excellent for Documentary productions and grant pursuit.', Null),
    ('30000157703095', 'Dirty, needs to be recorred and all splices checked for digitization.', 0, 0, 0, 1, 1, Null, 0, 'Grainy. A few deep scratches throughout.', 0, 'Footage excellent for Documentary productions and grant pursuit.', 'Dirty, needs to be recorred and all splices checked for digitization.'),
    ('30000157703053', 'Needs to be recorred. Document and remove all editorial paper tape notes, and check splices.', 0, 0, 0, 0, 0, Null, 0, 'Footage turning Red', 0, 'Footage excellent for Documentary productions and grant pursuit.', 'Film and sprockets torn, short film elments need to be spliced at beginning in order to review the footage'),
    ('30000157703046', 'Film and sprockets torn, short film elments need to be spliced at beginning in order to review the footage', 0, 0, 0, 1, 1, Null, 0, Null, 0, 'Footage excellent for Documentary productions and grant pursuit.', 'Looks like the film hit an edge and the first 100 feet has torn film and sprockets. Will need to be repaired before further inspection can happen.'),
    ('30000157702899', 'Torn sprockets. Will need to be repaired before further inspection can happen.', 1, 0, 0, 1, 1, Null, 0, Null, 0, 'Footage excellent for Documentary productions and grant pursuit.', 'Torn sprockets. Will need to be repaired before further inspection can happen.'),
    ('30000149802336', Null, 0, 0, 0, 1, 1, Null, 1, '50 feet of black before film begins but otherwise fine on General Inspection', 1, 'Rare. Cutdown of famous french art film for film study purposes.', 'Digitize.'),
    ('30000149803110', Null, 1, Null, 0, 0, 0, Null, 0, 'Fine on General Inspection', 3, Null, 'Digitize when time and budget allows.'),
    ('30000149802583', Null, 0, Null, 0, 0, 0, Null, 0, 'Fine on General Inspection', 3, Null, 'Digitize when time and budget allows.'),
    ('30000149802591', Null, 1, Null, 0, 0, 0, Null, 0, 'Fine on General Inspection', 3, Null, 'Digitize when time and budget allows.'),
    ('30000149803003', Null, 1, Null, 0, 1, 1, Null, 1, 'Beginning to warp but otherwise fine on general inspection', 3, Null, 'Digitize when time and budget allows.'),
    ('30000149803011', Null, 1, Null, 0, 1, 1, Null, 1, '1 flip warpage otherwise fine on General Inspection', 3, Null, 'Digitize when time and budget allows.'),
    ('30000149803029', Null, 1, Null, 0, 1, 1, Null, 1, 'Beginning to warp but otherwise fine on general inspection', 3, Null, 'Digitize when time and budget allows.'),
    ('30000149803037', Null, 1, Null, 0, 1, 1, Null, 1, 'Beginning to warp but otherwise fine on general inspection', 3, Null, 'Digitize when time and budget allows.'),
    ('30000149803045', Null, 1, 0.1, 0, 1, 1, Null, 1, 'Beginning to warp but otherwise fine on general inspection', 3, Null, 'Digitize when time and budget allows.'),
    ('30000149803052', Null, 1, Null, 0, 1, 1, Null, 1, '1 flip, moderate scratches, fine on general inspection', 3, Null, 'Digitize when time and budget allows.');


INSERT INTO LOAN 
    (Per_ID, Bib_IU_Barcode, Loan_Date, Loan_Return_Date, Loan_Returned_Date, Loan_Ext_Date, Loan_Purpose, Loan_Screen_Loc)
VALUES
    ('8880008745', '30000149802336', '2017-05-09', '2017-07-09', '2017-07-01', Null, 'Screened for the Cinematheque Francaise Orphan Films Festival.', 'IULMIA Screening Room'),
    ('8880099654', '30000149803110', '2017-08-22', '2017-10-22', Null, Null, 'Screening with film collections on deserts around the world.', 'MoMa'),
    ('2000075481', '30000149802583', '2017-02-03', '2017-02-17', '2017-02-16', Null, 'Screening for class studies on rise of Totaltarianism.', 'IULMIA Screening Room'),
    ('2000075481', '30000149802591', '2017-02-03', '2017-02-17', '2017-02-16', Null, 'Screening for class studies on rise of Totaltarianism.', 'IULMIA Screening Room'),
    ('2000095348', '30000149803003', '2016-11-16', '2016-11-30', '2016-12-05', Null, 'Research on Cook Island', 'IULMIA Screening Room'),
    ('2000012141', '30000149803011', '2016-02-23', '2016-03-08', '2016-03-13', '2016-03-15', 'Research on Francisco Pizarro', 'IULMIA Screening Room'),
    ('2000065247', '30000149803029', '2017-07-06', '2017-07-20', '2017-07-19', Null, 'Environmental Study', 'IULMIA Screening Room'),
    ('2000065656', '30000149803037', '2017-08-24', '2017-09-07', '2017-08-26', Null, 'Undergrad curiosity about 16mm educational films.', 'IULMIA Screening Room'),
    ('2000021247', '30000149803045', '2017-10-23', '2017-11-06', Null, '2017-12-17', 'Screening for media studies', 'IULMIA Screening Room'),
    ('2000065374', '30000149803052', '2017-03-13', '2017-03-27', '2017-03-23', Null, 'Screening for media studies', 'IULMIA Screening Room');