-- MySQL Script generated by MySQL Workbench
-- Tue Aug 29 22:00:28 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema hackufrj
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `hackufrj` ;

-- -----------------------------------------------------
-- Schema hackufrj
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `hackufrj` DEFAULT CHARACTER SET utf8 ;
USE `hackufrj` ;

-- -----------------------------------------------------
-- Table `hackufrj`.`Course`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hackufrj`.`Course` ;

CREATE TABLE IF NOT EXISTS `hackufrj`.`Course` (
  `idCourse` INT GENERATED ALWAYS AS () VIRTUAL,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`idCourse`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hackufrj`.`Person`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hackufrj`.`Person` ;

CREATE TABLE IF NOT EXISTS `hackufrj`.`Person` (
  `idPerson` INT GENERATED ALWAYS AS (),
  `id_course` INT NULL,
  `name` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `phone` VARCHAR(15) NULL,
  `role` VARCHAR(15) NULL,
  `id_interests` TEXT(50) NULL,
  PRIMARY KEY (`idPerson`),
  INDEX `id_course_idx` (`id_course` ASC),
  CONSTRAINT `id_course`
    FOREIGN KEY (`id_course`)
    REFERENCES `hackufrj`.`Course` (`idCourse`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hackufrj`.`Interest`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hackufrj`.`Interest` ;

CREATE TABLE IF NOT EXISTS `hackufrj`.`Interest` (
  `idInterest` INT GENERATED ALWAYS AS (),
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`idInterest`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hackufrj`.`Hours`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hackufrj`.`Hours` ;

CREATE TABLE IF NOT EXISTS `hackufrj`.`Hours` (
  `pendent` INT NOT NULL,
  `remaining` INT NULL,
  `completed` INT NULL)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hackufrj`.`Event`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hackufrj`.`Event` ;

CREATE TABLE IF NOT EXISTS `hackufrj`.`Event` (
  `idEvent` INT GENERATED ALWAYS AS () VIRTUAL,
  `description` TEXT NULL,
  `imagePath` VARCHAR(50) NULL,
  `dt_hr` DATETIME NULL,
  `qtdHrs` INT NULL,
  `certified` TINYINT NULL,
  `id_course` INT NULL,
  `id_host` INT NULL,
  PRIMARY KEY (`idEvent`),
  INDEX `id_course_idx` (`id_course` ASC),
  INDEX `id_host_idx` (`id_host` ASC),
  CONSTRAINT `id_course`
    FOREIGN KEY (`id_course`)
    REFERENCES `hackufrj`.`Course` (`idCourse`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_host`
    FOREIGN KEY (`id_host`)
    REFERENCES `hackufrj`.`Person` (`idPerson`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SET SQL_MODE = '';
GRANT USAGE ON *.* TO admin;
 DROP USER admin;
SET SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';
CREATE USER 'admin' IDENTIFIED BY 'hackufrj';

GRANT ALL ON `hackufrj`.* TO 'admin';
GRANT SELECT ON TABLE `hackufrj`.* TO 'admin';
GRANT SELECT, INSERT, TRIGGER ON TABLE `hackufrj`.* TO 'admin';
GRANT SELECT, INSERT, TRIGGER, UPDATE, DELETE ON TABLE `hackufrj`.* TO 'admin';
GRANT EXECUTE ON ROUTINE `hackufrj`.* TO 'admin';

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
