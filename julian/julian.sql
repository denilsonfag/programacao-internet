create database if not exists julian;

use julian;

Create table usuarios (
ID Int NOT NULL AUTO_INCREMENT,
usuario Varchar(30) NOT NULL UNIQUE,
senha Varchar(40),
Primary Key (ID)) ENGINE = MyISAM;