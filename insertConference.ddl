
/*Committee Tuples*/
insert into committee values ("QTMA", 3, "Program");
insert into committee values ("QCBT", 3,"Registration");
insert into committee values ("QPPO", 5, "Sponsorship");
/*Committee Members Tuples*/
insert into committeeMember values ("Derick", "Chan", "QTMA");
insert into committeeMember values ("Kevin", "Liu", "QCBT");
insert into committeeMember values ("Andrew", "Yang", "QPPO");
insert into committeeMember values ("Adam", "Doom", "QTMA");
insert into committeeMember values ("Eve", "New", "QCBT");
insert into committeeMember values ("Justin", "Porch", "QPPO");
insert into committeeMember values ("Carrie", "Help", "QTMA");
insert into committeeMember values ("Lorrie", "Legend", "QCBT");
insert into committeeMember values ("Annie", "Red", "QPPO");
insert into committeeMember values ("Doris", "Queen", "QPPO");
insert into committeeMember values ("Alex", "Nyugen", "QPPO");
/*Session Tuples*/
insert into session values('BlockChain Developer Workshop', '9:00:00', '9:50:00', 'Etherington AUD','03/24/2019');
insert into session values ("Systems Engineering Workshop", '9:00:00', '9:40:00', "Mitchell AUD",'03/24/2019');
insert into session values("Mobile APP Workshop", '13:00:00', '13:50:00', "BioSci 1129",'03/24/2019');
insert into session values('Web Front-End Workshop', '9:00:00', '10:00:00', 'Etherington AUD','03/23/2019');
insert into session values ("Web Back-End Workshop", '11:00:00', '12:00:00', "Mitchell AUD",'03/23/2019');
insert into session values("Ice Breaker Workshop", '13:00:00', '14:00:00', "BioSci 1129",'03/28/2019');

/*Hotel Room Tuples*/
insert into hotelRoom values (500,2);
insert into hotelRoom values (501,1);
insert into hotelRoom values (502,3);
insert into hotelRoom values (503,5);
insert into hotelRoom values (504,4);
insert into hotelRoom values (505,2);
/*Student Tuples*/
insert into student values ("20024108","Daniel","Kim","50","16jk1@queensu.ca", 500);
insert into student values ("20024438","Kathy","Du","50","122f1@queensu.ca", 501);
insert into student values ("20244178","Wei","Lee","50","19kd1@queensu.ca",NULL);
/*Professional Tuples*/
insert into professional values ("Jennifer","Lawrence","100","jen@gmail.com","Mobile App Developer","10024108");
insert into professional values ("Harry","Chan","100","harrych@ecobee.com","Data Scientist","10026112");
insert into professional values ("Danny","Loc","100","danloc@hotmail.com","Lead Mobile Developer","10014002");
/*Sponsor Company Tuples*/
insert into sponsorCompany values ("Consensys","Bronze",0);
insert into sponsorCompany values ("ShareTea","Silver",1);
insert into sponsorCompany values ("Ontario Power Generation","Platinum",5);
/*Sponsor Representative Tuples*/
insert into sponsor values ("Mike","Yang",0,"mikesun@gmail.com","Consensys","30024108");
insert into sponsor values ("Bohemien","Rapsody",0,"mikesun2@hotmail.com","ShareTea","30012091");
insert into sponsor values ("Joonsoo","Young",0,"yangsoo@yahoo.com","Ontario Power Generation","3001109");
/*Ad Posting Tuples*/
insert into ads values ("Consensys","BlockChain Internship","Toronto","Ontario",56);
insert into ads values ("ShareTea","Barista","Kingston","Ontario",14);
insert into ads values ("Ontario Power Generation","Component Engineer","Pickering","Ontario",29);
/*Chair*/
insert into chair values ("QCBT","Kevin","Liu");
insert into chair values ("QTMA","Derick","Chan");
insert into chair values ("QPPO","Andrew","Yang");
/*MC*/
insert into MC values ("Derick","Chan","BlockChain Developer Workshop");
/*Professional Speaker*/
insert into ProfessionalSpeaker values ("10026112","BlockChain Developer Workshop");
/*sponsoredspeaker*/
insert into SponsoredSpeaker values ("30024108","BlockChain Developer Workshop");


