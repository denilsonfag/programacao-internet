CREATE DATABASE  IF NOT EXISTS `joaopaulo`;
USE `joaopaulo`;


DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `usua_nome` varchar(100) NOT NULL,
  `usua_id` int(11) NOT NULL AUTO_INCREMENT,
  `usua_login` varchar(40) NOT NULL,
  `usua_senha` varchar(50) NOT NULL,
  `usua_data_cadastro` date NOT NULL,
  PRIMARY KEY (`usua_id`),
  UNIQUE KEY `usua_login` (`usua_login`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

create user 'denilson'@'localhost' identified by 'bandaDjavu';

grant SELECT, INSERT on joaopaulo.usuario to 'denilson'@'localhost';
