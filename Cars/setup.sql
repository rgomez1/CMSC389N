CREATE DATABASE cars;

CREATE TABLE cars.specifications (
	year 			INT,
	manufacturer 	VARCHAR(50),
	model 			VARCHAR(50),
	category 		ENUM('convertible', 'coupe', 'sedan', 'hatchback', 'suv', 'pickup', 'van'),
	size 			ENUM('compact', 'midsize', 'fullsize'),
	msrp 			INT,
	mpg 			INT,
	stars 			INT,
	fuel 			ENUM('gas', 'diesel', 'hybrid', 'electric'),
	image 			LONGBLOB
);

INSERT INTO Cars.specifications
VALUES ('2015', 'Ford', 'F-150', 'pickup', 'fullsize', '30000', '20', '5', 'gas', LOAD_FILE('C:/xampp/htdocs/projects/group/images/1.jpg'));

/* added by rgomez1 */
INSERT INTO Cars.specifications
VALUES ('2014', 'Chevrolet', 'Silverado', 'Pickup Truck', 'Fullsize', '29000', '19', '5', 'Gas', LOAD_FILE('C:/xampp/htdocs/projects/group/images/1.jpg'));

INSERT INTO Cars.specifications
VALUES ('2013', 'Toyota', 'Camry', 'Sedan', 'Midsize', '22000', '28', '5', 'Gas', LOAD_FILE('C:/xampp/htdocs/projects/group/images/2.jpg'));

INSERT INTO Cars.specifications
VALUES ('2012', 'Ram', '1500', 'Pickup Truck', 'Fullsize', '26000', '16', '3', 'Gas', LOAD_FILE('C:/xampp/htdocs/projects/group/images/3.jpg'));

INSERT INTO Cars.specifications
VALUES ('2015', 'Toyota', 'Corolla', 'Sedan', 'Midsize', '17000', '32', '5', 'Gas', LOAD_FILE('C:/xampp/htdocs/projects/group/images/4.jpg'));

INSERT INTO Cars.specifications
VALUES ('2014', 'Nissan', 'Altima', 'Sedan', 'Midsize', '22000', '31', '5', 'Gas', LOAD_FILE('C:/xampp/htdocs/projects/group/images/5.jpg'));

INSERT INTO Cars.specifications
VALUES ('2013', 'Honda', 'Civic', 'Sedan', 'Compact', '18000', '32', '4', 'Gas', LOAD_FILE('C:/xampp/htdocs/projects/group/images/6.jpg'));

INSERT INTO Cars.specifications
VALUES ('2012', 'Honda', 'CR-V', 'SUV', 'Midsize', '22000', '26', '5', 'Gas', LOAD_FILE('C:/xampp/htdocs/projects/group/images/7.jpg'));

INSERT INTO Cars.specifications
VALUES ('2015', 'Honda', 'Accord', 'Sedan', 'Midsize', '22000', '31', '5', 'Gas', LOAD_FILE('C:/xampp/htdocs/projects/group/images/8.jpg'));

INSERT INTO Cars.specifications
VALUES ('2014', 'Hyundai', 'Elantra', 'Sedan', 'Compact', '17000', '32', '5', 'Gas', LOAD_FILE('C:/xampp/htdocs/projects/group/images/9.jpg'));
