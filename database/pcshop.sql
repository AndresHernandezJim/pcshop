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
  `id` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `nick` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `fecha_nac` DATE NOT NULL,
  `createdat` VARCHAR(45) NULL,
  `remember_token` VARCHAR(100) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pcshop`.`Categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pcshop`.`Categoria` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `nivel` INT NOT NULL COMMENT '0= categoria principal\n1= subcategoria',
  `pertenece` INT NOT NULL COMMENT 'si es categoria, cual es la categoria superior',
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pcshop`.`producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pcshop`.`producto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `precio` FLOAT NOT NULL,
  `caracteristicas` NVARCHAR(400) NOT NULL,
  `stock` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pcshop`.`mensaje`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pcshop`.`mensaje` (
  `idmensaje` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `mensaje` NVARCHAR(800) NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`idmensaje`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pcshop`.`prod_catego`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pcshop`.`prod_catego` (
  `idprod` INT NOT NULL,
  `idcat` INT NOT NULL,
  INDEX `fk_prod_catego_1_idx` (`idcat` ASC),
  CONSTRAINT `fk_prod_catego_1`
    FOREIGN KEY (`idcat`)
    REFERENCES `pcshop`.`Categoria` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_prod_catego_2`
    FOREIGN KEY (`idprod`)
    REFERENCES `pcshop`.`producto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
