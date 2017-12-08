-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema wellinton
-- -----------------------------------------------------

CREATE SCHEMA IF NOT EXISTS `wellinton` DEFAULT CHARACTER SET utf8 ;
USE `wellinton` ;

-- -----------------------------------------------------
-- Table `wellinton`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wellinton`.`usuario` (
  `codigo` INT(11) NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(20) NOT NULL,
  `senha` VARCHAR(100) NOT NULL,
  `dataCadastro` DATE NOT NULL,
  PRIMARY KEY (`codigo`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;

INSERT INTO USUARIO VALUES(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2017-12-07');

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
