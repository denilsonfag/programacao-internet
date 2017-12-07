create database  if not exists aldir;

use aldir;

Create table usuarios (
ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
login Varchar(30) NOT NULL UNIQUE,
senha Varchar(40),
Primary Key (ID)) ENGINE = MyISAM;

CREATE USER 'aldir'@'localhost' IDENTIFIED BY '111222333';

GRANT SELECT, INSERT ON aldir.usuarios to 'aldir'@'localhost';
