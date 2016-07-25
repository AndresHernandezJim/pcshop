-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema pcshop
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema pcshop
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pcshop` DEFAULT CHARACTER SET utf8 ;
USE `pcshop` ;

-- -----------------------------------------------------
-- Table `pcshop`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pcshop`.`usuario` (
  `id` INT NOT NULL,
  `Nombre` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `fecha_nac` DATE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pcshop`.`Categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pcshop`.`Categoria` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pcshop`.`producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pcshop`.`producto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `categoria` INT NOT NULL,
  `precio` FLOAT NOT NULL,
  `caracteristicas` NVARCHAR(400) NOT NULL,
  `stock` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_producto_1_idx` (`categoria` ASC),
  CONSTRAINT `fk_producto_1`
    FOREIGN KEY (`categoria`)
    REFERENCES `pcshop`.`Categoria` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
