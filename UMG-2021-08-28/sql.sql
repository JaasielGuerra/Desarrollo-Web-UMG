CREATE TABLE alumno (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombres varchar(255) DEFAULT NULL,
  apellidos varchar(255) DEFAULT NULL,
  estado varchar(1) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

SELECT * FROM alumno;