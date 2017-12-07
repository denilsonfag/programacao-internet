create database if not exists matheusr;

use matheusr;

Create table usuarios (
ID Int NOT NULL AUTO_INCREMENT,
usuario Varchar(30) NOT NULL UNIQUE,
senha Varchar(40),
Primary Key (ID)) ENGINE = MyISAM;