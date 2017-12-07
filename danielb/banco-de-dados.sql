create database danielb;
use danielb;

CREATE TABLE usuarios(
    usua_codi INT UNSIGNED NOT NULL AUTO_INCREMENT,
    usua_nome VARCHAR(50),
    usua_senh VARCHAR(40) NOT NULL,
    PRIMARY KEY(usua_codi)
);
CREATE USER 'danielb'@'localhost' IDENTIFIED BY 'password';
GRANT insert, update, select ON * . * TO 'danielb'@'localhost';