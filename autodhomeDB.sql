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
id int primary key,
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

Insert into Client values (1,'Folco','Galiano',1,'rue de la paix','Paris','France',27,'f.g@gmail.com',123,True,'root');
Insert into Client values (2,'Mathieu','Da Silva',2,'rue Blomet','Paris','France',168,'m9.dasilva@gmail.com',345,True,'root');
Insert into Client values (3,'Antoine','Jeannette',3,'rue de la paix','Paris','France',27,'antoine.jeannette@gmail.com',678,True,'root');
Insert into Client values (4,'Leandro','Gasparini',4,'rue de la paix','Paris','France',27,'f.g@gmail.com',2456534543,True,'root');
Insert into Client values (5,'Anthony','Demogues',5,'rue de la paix','Paris','France',27,'f.g@gmail.com',2456534543,True,'root');

Insert into Room values ('Living room floor 1',1,1,'Living room');
Insert into Room values ('Living room floor 2',2,1,'Living room');
Insert into Room values ('Red Kitchen',3,1,'Kitchen');
Insert into Room values ('Bathroom 1 home 1',4,1,'Bathroom');
Insert into Room values ('Room 1',5,1,'Room');
Insert into Room values ('Room 2',6,1,'Room');
Insert into Room values ('kid\'s Room ',7,1,'Room');
Insert into Room values ('Living room home 2',8,2,'Living room');
Insert into Room values ('Kitchen home 2',9,2,'Kitchen');
Insert into Room values ('Room 1 home 2',10,2,'Room');

Insert into sensor values (1,2,'temperature_sensor','thermometer 1',15 , '');






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


