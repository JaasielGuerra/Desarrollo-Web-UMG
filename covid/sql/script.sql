CREATE SCHEMA `db_covid` ;

CREATE TABLE `db_covid`.`paciente` (
  `id_paciente` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `sintomas` VARCHAR(255) NOT NULL,
  `gravedad` VARCHAR(255) NOT NULL,
  `estado` INT NOT NULL,
  PRIMARY KEY (`id_paciente`));
