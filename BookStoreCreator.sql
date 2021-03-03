CREATE DATABASE project1;

CREATE TABLE books
(id int (10) AUTO_INCREMENT PRIMARY KEY not null,
 bookName varchar(50) not null,
 bookPrice float(10) not null,
 quantity int (20) not null);

 CREATE TABLE `bookinventoryorder`
(
 firstName varchar (100) NOT NULL,
 lastName varchar(100) NOT NULL,
 id int (10) PRIMARY KEY NOT NULL);
