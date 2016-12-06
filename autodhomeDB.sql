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
isadmin boolean
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
past_data int
);

CREATE TABLE Actuator(
id int primary key,
id_room int,
type_actuator  varchar (255),
actuator_name varchar (255)
);


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


