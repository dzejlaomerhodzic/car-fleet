-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`User` (
  `idUser` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NULL,
  `Surname` VARCHAR(45) NULL,
  `Email` VARCHAR(45) NULL,
  `Password` VARCHAR(45) NULL,
  `UserType` VARCHAR(45) NULL,
  PRIMARY KEY (`idUser`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`VehicleType`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`VehicleType` (
  `idVehicleType` INT NOT NULL AUTO_INCREMENT,
  `Type` VARCHAR(45) NULL,
  PRIMARY KEY (`idVehicleType`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Brand`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Brand` (
  `idBrand` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NULL,
  PRIMARY KEY (`idBrand`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Vehicle`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Vehicle` (
  `idVehicle` INT NOT NULL AUTO_INCREMENT,
  `DOP Date` DATE NULL,
  `NotInUseSince` DATE NULL,
  `ImageUrl` VARCHAR(100) NULL,
  `User_idUser` INT NOT NULL,
  `VehicleType_idVehicleType` INT NOT NULL,
  `Brand_idBrand` INT NOT NULL,
  PRIMARY KEY (`idVehicle`),
  CONSTRAINT `fk_Vehicle_User1`
    FOREIGN KEY (`User_idUser`)
    REFERENCES `mydb`.`User` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Vehicle_VehicleType1`
    FOREIGN KEY (`VehicleType_idVehicleType`)
    REFERENCES `mydb`.`VehicleType` (`idVehicleType`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Vehicle_Brand1`
    FOREIGN KEY (`Brand_idBrand`)
    REFERENCES `mydb`.`Brand` (`idBrand`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`TypeOfService`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`TypeOfService` (
  `idTypeOfService` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NULL,
  `Description` VARCHAR(250) NULL,
  PRIMARY KEY (`idTypeOfService`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Service`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Service` (
  `idService` INT NOT NULL AUTO_INCREMENT,
  `Price` DOUBLE NULL,
  `Urgent` TINYINT(1) NULL,
  `Finished` DATE NULL,
  `WarrentyTo` DATE NULL,
  `User_idUser` INT NOT NULL,
  `Vehicle_idVehicle` INT NOT NULL,
  `TypeOfService_idTypeOfService` INT NOT NULL,
  PRIMARY KEY (`idService`),
  CONSTRAINT `fk_Service_User`
    FOREIGN KEY (`User_idUser`)
    REFERENCES `mydb`.`User` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Service_Vehicle1`
    FOREIGN KEY (`Vehicle_idVehicle`)
    REFERENCES `mydb`.`Vehicle` (`idVehicle`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Service_TypeOfService1`
    FOREIGN KEY (`TypeOfService_idTypeOfService`)
    REFERENCES `mydb`.`TypeOfService` (`idTypeOfService`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
