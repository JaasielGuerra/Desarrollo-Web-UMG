CREATE schema `db_alumno`;

USE `db_alumno;

CREATE TABLE `db_alumno`.`alumno` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(150) NULL,
  `carnet` VARCHAR(150) NULL,
  `nombre` VARCHAR(150) NULL,
  `apellidos` VARCHAR(150) NULL,
  `dpi` VARCHAR(150) NULL,
  `nit` VARCHAR(150) NULL,
  `email1` VARCHAR(150) NULL,
  `email2` VARCHAR(150) NULL,
  `tel1` VARCHAR(150) NULL,
  `tel2` VARCHAR(150) NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;
