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
/* added by rgomez1 */
INSERT INTO Cars.specifications
VALUES ('2014', 'Chevrolet', 'Silverado', 'Pickup Truck', 'Fullsize', '29000', '19', '5', 'Gas', LOAD_FILE('images/2.jpeg'));

INSERT INTO Cars.specifications
VALUES ('2013', 'Toyota', 'Camry', 'Sedan', 'Midsize', '22000', '28', '5', 'Gas', LOAD_FILE('images/3.jpeg'));

INSERT INTO Cars.specifications
VALUES ('2012', 'Ram', '1500', 'Pickup Truck', 'Fullsize', '26000', '16', '3', 'Gas', LOAD_FILE('images/4.jpeg'));

INSERT INTO Cars.specifications
VALUES ('2015', 'Toyota', 'Corolla', 'Sedan', 'Midsize', '17000', '32', '5', 'Gas', LOAD_FILE('images/5.jpeg'));

INSERT INTO Cars.specifications
VALUES ('2014', 'Nissan', 'Altima', 'Sedan', 'Midsize', '22000', '31', '5', 'Gas', LOAD_FILE('images/6.jpeg'));

INSERT INTO Cars.specifications
VALUES ('2013', 'Honda', 'Civic', 'Sedan', 'Compact', '18000', '32', '4', 'Gas', LOAD_FILE('images/7.jpeg'));

INSERT INTO Cars.specifications
VALUES ('2012', 'Honda', 'CR-V', 'SUV', 'Midsize', '22000', '26', '5', 'Gas', LOAD_FILE('images/8.jpeg'));

INSERT INTO Cars.specifications
VALUES ('2015', 'Honda', 'Accord', 'Sedan', 'Midsize', '22000', '31', '5', 'Gas', LOAD_FILE('images/9.jpeg'));

INSERT INTO Cars.specifications
VALUES ('2014', 'Hyundai', 'Elantra', 'Sedan', 'Compact', '17000', '32', '5', 'Gas', LOAD_FILE('images/10.jpeg'));


