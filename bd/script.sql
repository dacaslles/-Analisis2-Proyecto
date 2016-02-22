SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `StarStores` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `StarStores` ;

-- -----------------------------------------------------
-- Table `StarStores`.`TipoUsuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `StarStores`.`TipoUsuario` ;

CREATE TABLE IF NOT EXISTS `StarStores`.`TipoUsuario` (
  `ID_TipoUsuario` INT NOT NULL,
  `Nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`ID_TipoUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `StarStores`.`Usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `StarStores`.`Usuario` ;

CREATE TABLE IF NOT EXISTS `StarStores`.`Usuario` (
  `ID_Usuario` INT NOT NULL,
  `Nombre` VARCHAR(45) NULL,
  `Apellido` VARCHAR(45) NULL,
  `Correo` VARCHAR(45) NULL,
  `Telefono` VARCHAR(45) NULL,
  `Movil` VARCHAR(45) NULL,
  `Password` VARCHAR(45) NULL,
  `FechaNacimiento` DATETIME NULL,
  `ID_TipoUsuario` INT NULL,
  PRIMARY KEY (`ID_Usuario`),
  INDEX `ID_TipoUsuario_idx` (`ID_TipoUsuario` ASC),
  CONSTRAINT `ID_TipoUsuario`
    FOREIGN KEY (`ID_TipoUsuario`)
    REFERENCES `StarStores`.`TipoUsuario` (`ID_TipoUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `StarStores`.`CategoriaTienda`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `StarStores`.`CategoriaTienda` ;

CREATE TABLE IF NOT EXISTS `StarStores`.`CategoriaTienda` (
  `ID_CategoriaTienda` INT NOT NULL,
  `Nombre` VARCHAR(45) NULL,
  `Descripcion` VARCHAR(100) NULL,
  PRIMARY KEY (`ID_CategoriaTienda`))
ENGINE = InnoDB
COMMENT = '			';


-- -----------------------------------------------------
-- Table `StarStores`.`Tienda`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `StarStores`.`Tienda` ;

CREATE TABLE IF NOT EXISTS `StarStores`.`Tienda` (
  `ID_Tienda` INT NOT NULL,
  `Nombre` VARCHAR(45) NULL,
  `Eslogan` VARCHAR(45) NULL,
  `Mision` VARCHAR(200) NULL,
  `Vision` VARCHAR(200) NULL,
  `AcercaDe` VARCHAR(200) NULL,
  `ImagenLogo` VARCHAR(100) NULL,
  `ImagenPortada` VARCHAR(100) NULL,
  `TipoTienda` INT NULL,
  `Estado` INT NULL,
  `ID_Administrador` INT NULL,
  `ID_CategoriaTienda` INT NULL,
  PRIMARY KEY (`ID_Tienda`),
  INDEX `ID_Usuario_idx` (`ID_Administrador` ASC),
  INDEX `ID_CategoriaTienda_idx` (`ID_CategoriaTienda` ASC),
  CONSTRAINT `ID_Usuario`
    FOREIGN KEY (`ID_Administrador`)
    REFERENCES `StarStores`.`Usuario` (`ID_Usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `ID_CategoriaTienda`
    FOREIGN KEY (`ID_CategoriaTienda`)
    REFERENCES `StarStores`.`CategoriaTienda` (`ID_CategoriaTienda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `StarStores`.`Membresia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `StarStores`.`Membresia` ;

CREATE TABLE IF NOT EXISTS `StarStores`.`Membresia` (
  `ID_Membresia` INT NOT NULL,
  `FechaSuscripcion` DATETIME NULL,
  PRIMARY KEY (`ID_Membresia`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `StarStores`.`MembresiaAnual`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `StarStores`.`MembresiaAnual` ;

CREATE TABLE IF NOT EXISTS `StarStores`.`MembresiaAnual` (
  `ID_Membresia` INT NOT NULL,
  `ID_Tienda` INT NOT NULL,
  `FechaPago` DATETIME NULL,
  `FechaVencimiento` DATETIME NULL,
  PRIMARY KEY (`ID_Membresia`, `ID_Tienda`),
  INDEX `ID_Membresia_idx` (`ID_Membresia` ASC),
  INDEX `ID_Tienda_idx` (`ID_Tienda` ASC),
  CONSTRAINT `ID_Membresia`
    FOREIGN KEY (`ID_Membresia`)
    REFERENCES `StarStores`.`Membresia` (`ID_Membresia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `ID_Tienda_Membresia`
    FOREIGN KEY (`ID_Tienda`)
    REFERENCES `StarStores`.`Tienda` (`ID_Tienda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `StarStores`.`CategoriaProducto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `StarStores`.`CategoriaProducto` ;

CREATE TABLE IF NOT EXISTS `StarStores`.`CategoriaProducto` (
  `ID_Categoria` INT NOT NULL,
  `Nombre` VARCHAR(45) NULL,
  `Descripcion` VARCHAR(45) NULL,
  `Imagen` VARCHAR(100) NULL,
  `ID_Tienda` INT NULL,
  PRIMARY KEY (`ID_Categoria`),
  INDEX `ID_Tienda_idx` (`ID_Tienda` ASC),
  CONSTRAINT `ID_Tienda_CategoriaProducto`
    FOREIGN KEY (`ID_Tienda`)
    REFERENCES `StarStores`.`Tienda` (`ID_Tienda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `StarStores`.`Producto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `StarStores`.`Producto` ;

CREATE TABLE IF NOT EXISTS `StarStores`.`Producto` (
  `ID_Producto` VARCHAR(45) NOT NULL,
  `Imagen` VARCHAR(100) NULL,
  `Descripcion` VARCHAR(45) NULL,
  `Precio` FLOAT NULL,
  `Habilitado` INT NULL,
  `Cantidad` INT NULL,
  `ID_CategoriaProducto` INT NULL,
  `ID_Tienda` INT NULL,
  PRIMARY KEY (`ID_Producto`),
  INDEX `ID_CategoriaProducto_idx` (`ID_CategoriaProducto` ASC),
  INDEX `ID_Tienda_idx` (`ID_Tienda` ASC),
  CONSTRAINT `ID_CategoriaProducto`
    FOREIGN KEY (`ID_CategoriaProducto`)
    REFERENCES `StarStores`.`CategoriaProducto` (`ID_Categoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `ID_Tienda_Producto`
    FOREIGN KEY (`ID_Tienda`)
    REFERENCES `StarStores`.`Tienda` (`ID_Tienda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `StarStores`.`Comentario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `StarStores`.`Comentario` ;

CREATE TABLE IF NOT EXISTS `StarStores`.`Comentario` (
  `ID_Comentario` INT NOT NULL,
  `Fecha` DATETIME NULL,
  `Texto` VARCHAR(500) NULL,
  `Respuesta` VARCHAR(500) NULL,
  `ID_Usuario` INT NULL,
  `ID_Tienda` INT NULL,
  PRIMARY KEY (`ID_Comentario`),
  INDEX `ID_Usuario_idx` (`ID_Usuario` ASC),
  INDEX `ID_Tienda_idx` (`ID_Tienda` ASC),
  CONSTRAINT `ID_Usuario_Comentario`
    FOREIGN KEY (`ID_Usuario`)
    REFERENCES `StarStores`.`Usuario` (`ID_Usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `ID_Tienda_Comentario`
    FOREIGN KEY (`ID_Tienda`)
    REFERENCES `StarStores`.`Tienda` (`ID_Tienda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `StarStores`.`Factura`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `StarStores`.`Factura` ;

CREATE TABLE IF NOT EXISTS `StarStores`.`Factura` (
  `ID_Factura` INT NOT NULL,
  `Fecha` DATETIME NULL,
  `Total` FLOAT NULL,
  `ID_Usuario` INT NULL,
  PRIMARY KEY (`ID_Factura`),
  INDEX `ID_Usuario_idx` (`ID_Usuario` ASC),
  CONSTRAINT `ID_Usuario_Factura`
    FOREIGN KEY (`ID_Usuario`)
    REFERENCES `StarStores`.`Usuario` (`ID_Usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `StarStores`.`DetalleFactura`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `StarStores`.`DetalleFactura` ;

CREATE TABLE IF NOT EXISTS `StarStores`.`DetalleFactura` (
  `ID_Factura` INT NOT NULL,
  `ID_Producto` VARCHAR(45) NOT NULL,
  `Cantidad` INT NULL,
  PRIMARY KEY (`ID_Factura`, `ID_Producto`),
  INDEX `ID_Factura_idx` (`ID_Factura` ASC),
  INDEX `ID_Producto_idx` (`ID_Producto` ASC),
  CONSTRAINT `ID_Factura`
    FOREIGN KEY (`ID_Factura`)
    REFERENCES `StarStores`.`Factura` (`ID_Factura`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `ID_Producto_DetalleFactura`
    FOREIGN KEY (`ID_Producto`)
    REFERENCES `StarStores`.`Producto` (`ID_Producto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `StarStores`.`Carrito`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `StarStores`.`Carrito` ;

CREATE TABLE IF NOT EXISTS `StarStores`.`Carrito` (
  `ID_Carrito` INT NOT NULL,
  `Total` FLOAT NULL,
  `ID_Usuario` INT NULL,
  PRIMARY KEY (`ID_Carrito`),
  INDEX `ID_Usuario_idx` (`ID_Usuario` ASC),
  CONSTRAINT `ID_Usuario_Carrito`
    FOREIGN KEY (`ID_Usuario`)
    REFERENCES `StarStores`.`Usuario` (`ID_Usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `StarStores`.`DetalleCarrito`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `StarStores`.`DetalleCarrito` ;

CREATE TABLE IF NOT EXISTS `StarStores`.`DetalleCarrito` (
  `ID_Producto` VARCHAR(45) NOT NULL,
  `ID_Carrito` INT NOT NULL,
  `Cantidad` INT NULL,
  PRIMARY KEY (`ID_Producto`, `ID_Carrito`),
  INDEX `ID_Producto_idx` (`ID_Producto` ASC),
  INDEX `ID_Carrito_idx` (`ID_Carrito` ASC),
  CONSTRAINT `ID_Producto_DetalleCarrito`
    FOREIGN KEY (`ID_Producto`)
    REFERENCES `StarStores`.`Producto` (`ID_Producto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `ID_Carrito`
    FOREIGN KEY (`ID_Carrito`)
    REFERENCES `StarStores`.`Carrito` (`ID_Carrito`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `StarStores`.`Comercial`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `StarStores`.`Comercial` ;

CREATE TABLE IF NOT EXISTS `StarStores`.`Comercial` (
  `ID_Comercial` INT NOT NULL,
  `Nombre` VARCHAR(45) NULL,
  `Eslogan` VARCHAR(100) NULL,
  `Mision` VARCHAR(200) NULL,
  `Vision` VARCHAR(200) NULL,
  `AcercaDe` VARCHAR(200) NULL,
  `ImagenLogo` VARCHAR(100) NULL,
  `ImagenPortada` VARCHAR(100) NULL,
  PRIMARY KEY (`ID_Comercial`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `StarStores`.`Imagen`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `StarStores`.`Imagen` ;

CREATE TABLE IF NOT EXISTS `StarStores`.`Imagen` (
  `ID_Imagen` INT NOT NULL,
  `Ruta` VARCHAR(100) NULL,
  `ID_Comercial` INT NULL,
  PRIMARY KEY (`ID_Imagen`),
  INDEX `ID_Comercial_idx` (`ID_Comercial` ASC),
  CONSTRAINT `ID_Comercial`
    FOREIGN KEY (`ID_Comercial`)
    REFERENCES `StarStores`.`Comercial` (`ID_Comercial`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

