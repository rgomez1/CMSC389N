CREATE DATABASE cars;

CREATE TABLE cars.specifications (
	year INT,
	manufacturer VARCHAR(50),
	model VARCHAR(50) PRIMARY KEY,
	category ENUM('convertible', 'coupe', 'sedan', 'hatchback', 'suv', 'pickup', 'van'),
	size ENUM('compact', 'midsize', 'fullsize'),
	msrp INT,
	mpg INT,
	stars INT,
	fuel ENUM('gas', 'diesel', 'hybrid', 'electric'),
	image longblob
);

INSERT INTO Cars.specifications
VALUES ('2015', 'Ford', 'F-150', 'pickup', 'fullsize', '30000', '20', '5', 'gas', "C:\xampp\htdocs\projects\group\images");
