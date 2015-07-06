# CMSC389N

# Database Information:
 Host: localhost
 User: dbuser
 Password: goodbyeWorld
 Database: cars
 Table: information
 
# Columns:

(Manufacturer, Model, Year (unique)), MPG (City, Highway), Type, Image
Primary Key: ID

#Object Oriented Approach:
Store the column information in a class and use get and set to retrieve/update it.

#Setup script in database, barring pictures - Rainier

show databases;
create database cars;
use cars;
show tables;
create table information((manufacturer varchar(20), model varchar(20), year int (unique))
	citympg int, highmpg int, type varchar(20), image blob, id varchar(10) primary key);
grant all on cars.information to dbuser@localhost identified by "goodbyeWorld";

insert into applicants values("Honda", "Civic", 1995, 39,
	50, "hatchback", null, "10500");
insert into applicants values("Daihatsu", "Charade", 1991, 32,
	38, "supermini", null, "10_3cylman");
insert into applicants values("Panoz", "Roadster", 1993, 13,
	21, "sportscar", null, "10555");
insert into applicants values("Volkswagen", "Cabrio", 1997, 19,
	26, "convertible", null, "10566");
insert into applicants values("Buick", "Park Avenue", 2001, 17,
	27, "executive", null, "10577");

#Commentary - Rainier
I currently have little idea as to how a picture may be loaded / unloaded from an SQL database.
However, I like the final site, but also have little idea how to load that many pictures with such a format.
What library could we use to have a format like that?

Nevertheless, first I would mirror the functionality of the "Applications" part, which involves sending queries via the mysqli library. Second, I would make the script process a query passed on via a post request. The result that is printed is a wide scroll menu detailing the cars. Clicking on one loads the relevant picture, with the PHP generateing an image tag on the bottom.
