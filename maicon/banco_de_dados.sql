create database  if not exists maicon;

use maicon;

Create table usuarios (
ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
login Varchar(30) NOT NULL UNIQUE,
senha Varchar(40),
Primary Key (ID)) ENGINE = MyISAM;

CREATE USER 'maicon'@'localhost' IDENTIFIED BY '12345';

GRANT SELECT, INSERT ON maicon.usuarios to 'maicon'@'localhost';
