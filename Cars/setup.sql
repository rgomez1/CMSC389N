CREATE DATABASE Cars;

CREATE TABLE Cars.specifications (
	year INT,
	manufacturer VARCHAR(50),
	model VARCHAR(50) PRIMARY KEY,
	category ENUM('Convertible', 'Coupe', 'Sedan', 'Hatchback', 'SUV', 'Pickup Truck', 'Van'),
	size ENUM('Compact', 'Midsize', 'Fullsize'),
	msrp INT,
	mpg INT,
	stars INT,
	fuel ENUM('Gas', 'Diesel', 'Hybrid', 'Electric'),
	image longblob
);

INSERT INTO Cars.specifications
VALUES ('2015', 'Ford', 'F-150', 'Pickup Truck', 'Fullsize', '30000', '20', '5', 'Gas', LOAD_FILE('images/1.png'));
