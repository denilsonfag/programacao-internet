CREATE DATABASE login;
USE login;

DROP USER IF EXISTS 'gabriel';

CREATE USER 'gabriel' IDENTIFIED by '0898';

GRANT ALL ON login.* TO gabriel;


CREATE TABLE usuario(

nome VARCHAR(40),

usuario VARCHAR(40),

senha VARCHAR(40)


);


insert into `usuario` (`nome`, `usuario`, `senha`) 

values('Gabriel', 'g_moreschi', '0898');