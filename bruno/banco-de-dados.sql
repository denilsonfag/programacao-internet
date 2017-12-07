create database  if not exists bruno;

use bruno;

Create table usuarios (
ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
login Varchar(30) NOT NULL UNIQUE,
senha Varchar(40),
Primary Key (ID)) ENGINE = MyISAM;

CREATE USER 'bruno'@'localhost' IDENTIFIED BY '12345';

GRANT SELECT, INSERT ON bruno.usuarios to 'bruno'@'localhost';
