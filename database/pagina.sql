-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema pagina
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `pagina` ;

-- -----------------------------------------------------
-- Schema pagina
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pagina` DEFAULT CHARACTER SET utf8 ;
USE `pagina` ;

-- -----------------------------------------------------
-- Table `pagina`.`comercio_listado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pagina`.`comercio_listado` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `direccion` VARCHAR(200) NOT NULL,
  `puntaje` DOUBLE NULL DEFAULT NULL,
  `foto` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pagina`.`lista_productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pagina`.`lista_productos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_comercio` INT NOT NULL,
  `nombre` VARCHAR(100) NOT NULL,
  `cantidad_porciones` INT(11) NOT NULL,
  `precio` DOUBLE NOT NULL,
  `tiempo_produccion` DOUBLE NOT NULL,
  `foto_producto` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `id_comercio`),
  INDEX `fk_lista_productos_comercio_listado_idx` (`id_comercio` ASC),
  CONSTRAINT `fk_lista_productos_comercio_listado`
    FOREIGN KEY (`id_comercio`)
    REFERENCES `pagina`.`comercio_listado` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `pagina`.`comercio_listado`
-- -----------------------------------------------------
START TRANSACTION;
USE `pagina`;
INSERT INTO `pagina`.`comercio_listado` (`id`, `nombre`, `direccion`, `puntaje`, `foto`) VALUES (DEFAULT, 'Melocotonero', 'Pepepepepepep', 0, '1');

COMMIT;


-- -----------------------------------------------------
-- Data for table `pagina`.`lista_productos`
-- -----------------------------------------------------
START TRANSACTION;
USE `pagina`;
INSERT INTO `pagina`.`lista_productos` (`id`, `id_comercio`, `nombre`, `cantidad_porciones`, `precio`, `tiempo_produccion`, `foto_producto`) VALUES (DEFAULT, 3, 'Pizza Gigante', 15, 350, 45, 'fotito');

COMMIT;

