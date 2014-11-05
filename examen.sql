/*
SQLyog Ultimate v8.61 
MySQL - 5.1.41 : Database - proyecto1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`proyecto1` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `proyecto1`;

/*Table structure for table `alumno_grupo` */

DROP TABLE IF EXISTS `alumno_grupo`;

CREATE TABLE `alumno_grupo` (
  `idag` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `id_grup` int(11) DEFAULT NULL,
  PRIMARY KEY (`idag`),
  KEY `id` (`id`),
  KEY `id_grup` (`id_grup`),
  CONSTRAINT `alumno_grupo_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`),
  CONSTRAINT `alumno_grupo_ibfk_2` FOREIGN KEY (`id_grup`) REFERENCES `grupo` (`id_grup`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `alumno_grupo` */

/*Table structure for table `grupo` */

DROP TABLE IF EXISTS `grupo`;

CREATE TABLE `grupo` (
  `id_grup` int(11) NOT NULL,
  `Nombre` varchar(200) DEFAULT NULL,
  `Avatar` varchar(300) DEFAULT NULL,
  `Orden` varchar(300) DEFAULT NULL,
  `Estatus` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_grup`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `grupo` */

insert  into `grupo`(`id_grup`,`Nombre`,`Avatar`,`Orden`,`Estatus`) values (2,'tic-12','e','e','1'),(3,'tic-42',NULL,NULL,'1'),(4,'tic-22',NULL,NULL,'1'),(5,'tic-34','a','a','1'),(6,'tic-83',NULL,NULL,'1');

/*Table structure for table `maestro_materia` */

DROP TABLE IF EXISTS `maestro_materia`;

CREATE TABLE `maestro_materia` (
  `idmm` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmm`),
  KEY `id` (`id`),
  KEY `id_materia` (`id_materia`),
  CONSTRAINT `maestro_materia_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`),
  CONSTRAINT `maestro_materia_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `maestro_materia` */

insert  into `maestro_materia`(`idmm`,`id`,`id_materia`) values (16,2,3),(17,3,3);

/*Table structure for table `materia` */

DROP TABLE IF EXISTS `materia`;

CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL,
  `Nombrem` varchar(300) DEFAULT NULL,
  `Avatarm` varchar(500) DEFAULT NULL,
  `Ordenm` varchar(200) DEFAULT NULL,
  `Estatusm` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `materia` */

insert  into `materia`(`id_materia`,`Nombrem`,`Avatarm`,`Ordenm`,`Estatusm`) values (1,'Ingles','0','0','1'),(2,'Matematicas',NULL,NULL,'1'),(3,'Historia',NULL,NULL,'1'),(4,'ciencias',NULL,NULL,'1');

/*Table structure for table `preguntas` */

DROP TABLE IF EXISTS `preguntas`;

CREATE TABLE `preguntas` (
  `id_preg` int(11) NOT NULL,
  `pregunta` varchar(300) DEFAULT NULL,
  `respuesta` varchar(100) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_preg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `preguntas` */

insert  into `preguntas`(`id_preg`,`pregunta`,`respuesta`,`estado`) values (1,'cuantos cuatrimestres tiene tsu','4',0),(7,'cuantas materias tiene tsu ','6',0),(3,'a que hora se imparte la ingenieria','5',0),(4,'cuantos digitos contiene un celular','10',0),(5,'cuanto es : 7 x 7','49',0),(6,'cuanto es : 9 x 5','45',0),(8,'cuanto es : 79 - 37','42',0),(9,'qur promedio se nesita para titularse ','9',0),(10,'cuanto es : 236 - 191','45',0),(2,'calificasion minima aprovatoria','8',0);

/*Table structure for table `solucion` */

DROP TABLE IF EXISTS `solucion`;

CREATE TABLE `solucion` (
  `id_solucion` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `ac1` int(11) DEFAULT NULL,
  `ac2` int(11) DEFAULT NULL,
  `ac3` int(11) DEFAULT NULL,
  `ac4` int(11) DEFAULT NULL,
  `ac5` int(11) DEFAULT NULL,
  `ac6` int(11) DEFAULT NULL,
  `ac7` int(11) DEFAULT NULL,
  `ac8` int(11) DEFAULT NULL,
  `ac9` int(11) DEFAULT NULL,
  `ac10` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_solucion`),
  KEY `FK_solucion` (`id`),
  CONSTRAINT `FK_solucion` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

/*Data for the table `solucion` */

insert  into `solucion`(`id_solucion`,`id`,`ac1`,`ac2`,`ac3`,`ac4`,`ac5`,`ac6`,`ac7`,`ac8`,`ac9`,`ac10`) values (58,8,1,0,0,1,0,0,0,0,1,0);

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(250) NOT NULL,
  `ApellidoPaterno` varchar(250) NOT NULL,
  `ApellidoMaterno` varchar(250) NOT NULL,
  `Telefono` varchar(250) NOT NULL,
  `Calle` varchar(250) NOT NULL,
  `NumeroExterior` varchar(250) NOT NULL,
  `NumeroInterior` varchar(250) NOT NULL,
  `Colonia` varchar(250) NOT NULL,
  `Municipio` varchar(250) NOT NULL,
  `Estado` varchar(250) NOT NULL,
  `CP` varchar(250) NOT NULL,
  `Correo` varchar(250) NOT NULL,
  `Usuario` varchar(250) NOT NULL,
  `Contrasena` varchar(250) NOT NULL,
  `Nivel` varchar(250) NOT NULL,
  `Estatus` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`id`,`Nombre`,`ApellidoPaterno`,`ApellidoMaterno`,`Telefono`,`Calle`,`NumeroExterior`,`NumeroInterior`,`Colonia`,`Municipio`,`Estado`,`CP`,`Correo`,`Usuario`,`Contrasena`,`Nivel`,`Estatus`) values (2,'pedro','perez','leon','','','','','','','','','','','','3','1'),(3,'ana','hernandez','morales','','','','','','','','','','','','3','1'),(4,'pedro','jimenez','garcia','','','','','','','','','','','','2','1'),(5,'jose','apolinar','peña','','','','','','','','','','','','2','1'),(6,'raul','granda','morales','','','','','','','','','','','','2','1'),(7,'rosa','hernandez','jimenez','','','','','','','','','','','','2','1'),(8,'daniel','gonzalez','alejo','','','','','','','','','','1','123','1','1'),(9,'sagid','hernandez','lopez','','','','','','','','','','','','2','1'),(10,'','garcia','nava','','','','','','','','','','','','2','1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
