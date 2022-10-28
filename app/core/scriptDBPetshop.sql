-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema petshop
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema petshop
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `petshop` DEFAULT CHARACTER SET utf8 ;
USE `petshop` ;

-- -----------------------------------------------------
-- Table `petshop`.`raza_producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petshop`.`raza_producto` (
  `idraza_producto` INT NOT NULL,
  `nombre_raza` VARCHAR(45) NULL,
  PRIMARY KEY (`idraza_producto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `petshop`.`categoria_producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petshop`.`categoria_producto` (
  `idcategoria_producto` INT NOT NULL,
  `nombre_categoria` VARCHAR(100) NULL,
  PRIMARY KEY (`idcategoria_producto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `petshop`.`tipo_producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petshop`.`tipo_producto` (
  `idtipo_producto` INT NOT NULL,
  `nombre_tipo` VARCHAR(100) NULL,
  PRIMARY KEY (`idtipo_producto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `petshop`.`producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petshop`.`producto` (
  `idproducto` INT NOT NULL,
  `linea_de_producto` VARCHAR(45) NOT NULL,
  `marca_de_producto` VARCHAR(100) NOT NULL,
  `descripcion` VARCHAR(45) NULL,
  `peso` DECIMAL(2,2) NULL,
  `cantidad_por_unidad` INT NULL,
  `en_oferta` TINYINT NOT NULL,
  `precio_base` DECIMAL(10,2) NOT NULL,
  `imagen` VARCHAR(200) NULL,
  `raza_producto_idraza_producto` INT NOT NULL,
  `categoria_producto_idcategoria_producto` INT NOT NULL,
  `tipo_producto_idtipo_producto` INT NOT NULL,
  PRIMARY KEY (`idproducto`),
  INDEX `fk_producto_raza_producto_idx` (`raza_producto_idraza_producto` ASC) ,
  INDEX `fk_producto_categoria_producto1_idx` (`categoria_producto_idcategoria_producto` ASC) ,
  INDEX `fk_producto_tipo_producto1_idx` (`tipo_producto_idtipo_producto` ASC) ,
  CONSTRAINT `fk_producto_raza_producto`
    FOREIGN KEY (`raza_producto_idraza_producto`)
    REFERENCES `petshop`.`raza_producto` (`idraza_producto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_producto_categoria_producto1`
    FOREIGN KEY (`categoria_producto_idcategoria_producto`)
    REFERENCES `petshop`.`categoria_producto` (`idcategoria_producto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_producto_tipo_producto1`
    FOREIGN KEY (`tipo_producto_idtipo_producto`)
    REFERENCES `petshop`.`tipo_producto` (`idtipo_producto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `petshop`.`direccion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petshop`.`direccion` (
  `iddireccion` INT NOT NULL,
  `calle` VARCHAR(45) NOT NULL,
  `altura` VARCHAR(45) NOT NULL,
  `localidad` VARCHAR(45) NOT NULL,
  `codigo_postal` VARCHAR(45) NOT NULL,
  `pais` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`iddireccion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `petshop`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petshop`.`usuario` (
  `nombre` VARCHAR(45) NULL,
  `apellido` VARCHAR(45) NULL,
  `email` VARCHAR(45) NOT NULL,
  `clave` VARCHAR(45) NOT NULL,
  `direccion_iddireccion` INT NOT NULL,
  `tipo_de_usuario` VARCHAR(45) NULL,
  PRIMARY KEY (`email`),
  INDEX `fk_usuario_direccion1_idx` (`direccion_iddireccion` ASC),
  CONSTRAINT `fk_usuario_direccion1`
    FOREIGN KEY (`direccion_iddireccion`)
    REFERENCES `petshop`.`direccion` (`iddireccion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `petshop`.`carrito_compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petshop`.`carrito_compra` (
  `idcarrito_compra` INT NOT NULL,
  `usuario_email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idcarrito_compra`),
  INDEX `fk_pedido_usuario1_idx` (`usuario_email` ASC) ,
  CONSTRAINT `fk_pedido_usuario1`
    FOREIGN KEY (`usuario_email`)
    REFERENCES `petshop`.`usuario` (`email`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `petshop`.`pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petshop`.`pedido` (
  `producto_idproducto` INT NOT NULL,
  `pedido_idpedido` INT NOT NULL,
  PRIMARY KEY (`producto_idproducto`, `pedido_idpedido`),
  INDEX `fk_producto_has_pedido_pedido1_idx` (`pedido_idpedido` ASC) ,
  INDEX `fk_producto_has_pedido_producto1_idx` (`producto_idproducto` ASC) ,
  CONSTRAINT `fk_producto_has_pedido_producto1`
    FOREIGN KEY (`producto_idproducto`)
    REFERENCES `petshop`.`producto` (`idproducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_producto_has_pedido_pedido1`
    FOREIGN KEY (`pedido_idpedido`)
    REFERENCES `petshop`.`carrito_compra` (`idcarrito_compra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
