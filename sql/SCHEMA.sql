-- MySQL Script generated by MySQL Workbench
-- Mon Oct  9 03:01:27 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema aleeagle
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `aleeagle` ;

-- -----------------------------------------------------
-- Schema aleeagle
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `aleeagle` DEFAULT CHARACTER SET utf8 ;
USE `aleeagle` ;

-- -----------------------------------------------------
-- Table `aleeagle`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `aleeagle`.`usuario` ;

CREATE TABLE IF NOT EXISTS `aleeagle`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido_paterno` VARCHAR(45) NOT NULL,
  `apellido_materno` VARCHAR(45) NULL,
  `email` VARCHAR(45) NOT NULL,
  `busquedas` INT NULL,
  `fecha_ultima_busqueda` DATE NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aleeagle`.`tipo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `aleeagle`.`tipo` ;

CREATE TABLE IF NOT EXISTS `aleeagle`.`tipo` (
  `idtipo` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idtipo`, `nombre`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aleeagle`.`marca`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `aleeagle`.`marca` ;

CREATE TABLE IF NOT EXISTS `aleeagle`.`marca` (
  `idmarca` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idmarca`, `nombre`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aleeagle`.`producto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `aleeagle`.`producto` ;

CREATE TABLE IF NOT EXISTS `aleeagle`.`producto` (
  `idproducto` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(150) NOT NULL,
  `tipo_idtipo` INT NOT NULL,
  `marca_idmarca` INT NOT NULL,
  PRIMARY KEY (`idproducto`),
  INDEX `fk_producto_tipo_idx` (`tipo_idtipo` ASC),
  INDEX `fk_producto_marca1_idx` (`marca_idmarca` ASC),
  CONSTRAINT `fk_producto_tipo`
    FOREIGN KEY (`tipo_idtipo`)
    REFERENCES `aleeagle`.`tipo` (`idtipo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_producto_marca1`
    FOREIGN KEY (`marca_idmarca`)
    REFERENCES `aleeagle`.`marca` (`idmarca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;