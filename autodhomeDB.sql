#CREATE database PROJECT_bestteam;
use autodhome;

CREATE TABLE Client (
id_card int primary key,
first_name varchar (255),
last_name varchar (255),
client_number int,
street varchar (255),
city varchar (255),
country varchar (255),
street_number int,
email_address varchar (255),
bank_number varchar (255),
isadmin boolean,
password varchar (255)
);


CREATE TABLE Home (
id int primary key,
street varchar (255),
city varchar (255),
country varchar (255),
street_number int,
id_client int
);

CREATE TABLE Room (
Name_room varchar (255),
id int primary key,
id_home int,
type_room  varchar (255)
);

CREATE TABLE Sensor(
id int NOT NULL AUTO_INCREMENT primary key,
id_room int,
type_sensor  varchar (255),
sensor_name varchar (255),
current_data float,
target_data float
);

CREATE TABLE Actuator(
id int primary key,
id_room int,
type_actuator  varchar (255),
actuator_name varchar (255)
);

Insert into Client values (1,'Folco','Galiano',1,'rue de la paix','Paris','France',27,'folco.galiano@isep.fr',123,True,'root');
Insert into Client values (2,'Mathieu','Da Silva',2,'rue Blomet','Paris','France',168,'mathieu.dasilva@isep.fr',345,True,'root');
Insert into Client values (3,'Antoine','Jeannette',3,'rue de la paix','Paris','France',27,'antoine.jeannette@isep.fr',678,True,'root');
Insert into Client values (4,'Leandro','Gasparini',4,'rue de la paix','Paris','France',27,'leandro.gasparini@isep.fr',2456534543,True,'root');
Insert into Client values (5,'Anthony','Demogues',5,'rue de la paix','Paris','France',27,'anthony.demogue@isep.fr',2456534543,True,'root');

Insert into Room values ('Living room',1,1,'Living room');
Insert into Room values ('Kitchen',2,1,'Kitchen');
Insert into Room values ('Bedroom 1',3,1,'Bedroom');
Insert into Room values ('Bedroom 2',4,1,'Bedroom');
Insert into Room values ('Bedroom 3',5,1,'Bedroom');
Insert into Room values ('Bedroom 4',6,1,'Bedroom');
Insert into Room values ('Bathroom 1',7,1,'Bathroom');
Insert into Room values ('Bathroom 2',8,1,'Bathroom');


Insert into sensor values (1,2,'temperature_sensor','thermometer 1',15 , '');

Insert into sensor values (2,1,'Luminosity','Luminosity Livingroom',0 , '');
Insert into sensor values (3,1,'Humidity','Humidity Livingroom',43 , '');
Insert into sensor values (4,1,'Camera','Camera Livingroom',1, '');
Insert into sensor values (5,1,'Shutters','Shutters 1',0, '');
Insert into sensor values (6,1,'Shutters','Shutters 2',0, '');
Insert into sensor values (7,1,'Shutters','Shutters 3',0, '');


Insert into sensor values (8,2,'Humidity','Humidity kitchen 1',50 , '');
Insert into sensor values (9,2,'Humidity','Humidity kitchen 2',46 , '');
Insert into sensor values (10,2,'Shutters','Shutters kitchen 2',0 , '');
Insert into sensor values (11,2,'Alarm','Fire Alarm',0 , '');


Insert into sensor values (12,3,'Shutters','Shutters Room1',0 , '');
Insert into sensor values (13,3,'Luminosity','Light Room 1',0 , '');
Insert into sensor values (14,3,'temperature_sensor','Temperature Room 1',23 , '');

Insert into sensor values (15,4,'Shutters','Shutters Room 2',0 , '');
Insert into sensor values (16,4,'Luminosity','Light Room 2',0 , '');
Insert into sensor values (17,4,'temperature_sensor','Temperature Room 2',25 , '');

Insert into sensor values (18,5,'Shutters','Shutters Room 3',0 , '');
Insert into sensor values (19,5,'Luminosity','Light Room 3',0 , '');
Insert into sensor values (20,5,'temperature_sensor','Temperature Room 3',20 , '');


Insert into sensor values (21,6,'Shutters','Shutters Room 4',0 , '');
Insert into sensor values (22,6,'Luminosity','Light Room 4',0 , '');
Insert into sensor values (23,6,'temperature_sensor','Temperature Room 4',20 , '');

Insert into sensor values (24,7,'Luminosity','Light Bathroom 1',0 , '');
Insert into sensor values (25,7,'temperature_sensor','Temperature Bathroom 1',20 , '');

Insert into sensor values (26,8,'Luminosity','Light Bathroom 2',0 , '');
Insert into sensor values (27,8,'temperature_sensor','Temperature Bathroom 2',20 , '');


#Living room id = 3
# Kitchen id = 4
# Room 1 = 5, Room2 = 6, Room3 = 7 Room4= 8
#



# INSERT into table 
# VALUES (list of values)
# UPDATE table 
	# SET column = value
    # WHERE column2 =value
# DELETE table WHERE condition
# SELECT col1,col2 , t2.col2
	#FROM table1,table2 as t2
    #WHERE condition
    #AND condition2
    




#DROP TABLE Client, Home, Room, Sensor, Actuator; 


