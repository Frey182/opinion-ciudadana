-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: bgoc
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `barrio`
--

DROP TABLE IF EXISTS `barrio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barrio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_municipio` (`id_municipio`),
  CONSTRAINT `barrio_ibfk_1` FOREIGN KEY (`id_municipio`) REFERENCES `municipio` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barrio`
--

LOCK TABLES `barrio` WRITE;
/*!40000 ALTER TABLE `barrio` DISABLE KEYS */;
INSERT INTO `barrio` VALUES (1,'barrio1',1);
/*!40000 ALTER TABLE `barrio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentario`
--

DROP TABLE IF EXISTS `comentario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(280) NOT NULL,
  `id_usu` int(11) NOT NULL,
  `id_tema` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usu` (`id_usu`),
  KEY `id_tema` (`id_tema`),
  CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_usu`) REFERENCES `usuario` (`dni`) ON UPDATE CASCADE,
  CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_tema`) REFERENCES `tema` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentario`
--

LOCK TABLES `comentario` WRITE;
/*!40000 ALTER TABLE `comentario` DISABLE KEYS */;
INSERT INTO `comentario` VALUES (10,'Cuando llega?',1003315376,11),(11,'Me parece bien',1003315376,10),(14,'Hola',1003315376,19);
/*!40000 ALTER TABLE `comentario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discapacidad`
--

DROP TABLE IF EXISTS `discapacidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discapacidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discapacidad`
--

LOCK TABLES `discapacidad` WRITE;
/*!40000 ALTER TABLE `discapacidad` DISABLE KEYS */;
INSERT INTO `discapacidad` VALUES (1,'discapacidad1');
/*!40000 ALTER TABLE `discapacidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `encuesta`
--

DROP TABLE IF EXISTS `encuesta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encuesta` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `n_votos` int(100) NOT NULL,
  `fecha` int(11) NOT NULL,
  `fkusuario` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encuesta`
--

LOCK TABLES `encuesta` WRITE;
/*!40000 ALTER TABLE `encuesta` DISABLE KEYS */;
INSERT INTO `encuesta` VALUES (1,'test','laladbiausdv','imagen',0,2022,1193594292);
/*!40000 ALTER TABLE `encuesta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `encuesta_usuario`
--

DROP TABLE IF EXISTS `encuesta_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encuesta_usuario` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_encuesta` int(11) NOT NULL,
  `respuestas` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encuesta_usuario`
--

LOCK TABLES `encuesta_usuario` WRITE;
/*!40000 ALTER TABLE `encuesta_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `encuesta_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etnia`
--

DROP TABLE IF EXISTS `etnia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etnia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etnia`
--

LOCK TABLES `etnia` WRITE;
/*!40000 ALTER TABLE `etnia` DISABLE KEYS */;
INSERT INTO `etnia` VALUES (1,'etnia1');
/*!40000 ALTER TABLE `etnia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municipio`
--

DROP TABLE IF EXISTS `municipio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `municipio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipio`
--

LOCK TABLES `municipio` WRITE;
/*!40000 ALTER TABLE `municipio` DISABLE KEYS */;
INSERT INTO `municipio` VALUES (1,'municipio1');
/*!40000 ALTER TABLE `municipio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nivel_educativo`
--

DROP TABLE IF EXISTS `nivel_educativo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nivel_educativo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nivel_educativo`
--

LOCK TABLES `nivel_educativo` WRITE;
/*!40000 ALTER TABLE `nivel_educativo` DISABLE KEYS */;
INSERT INTO `nivel_educativo` VALUES (1,'nivel1');
/*!40000 ALTER TABLE `nivel_educativo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sexo`
--

DROP TABLE IF EXISTS `sexo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sexo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sexo`
--

LOCK TABLES `sexo` WRITE;
/*!40000 ALTER TABLE `sexo` DISABLE KEYS */;
INSERT INTO `sexo` VALUES (1,'sexo1');
/*!40000 ALTER TABLE `sexo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tema`
--

DROP TABLE IF EXISTS `tema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(280) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `fecha` varchar(11) NOT NULL,
  `fkusuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fkusuario` (`fkusuario`),
  CONSTRAINT `tema_ibfk_2` FOREIGN KEY (`fkusuario`) REFERENCES `usuario` (`dni`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tema`
--

LOCK TABLES `tema` WRITE;
/*!40000 ALTER TABLE `tema` DISABLE KEYS */;
INSERT INTO `tema` VALUES (10,'Construcción edificio','¿Qué piensas?','imagen','2022/13/Sep',1003315376),(11,'Senasoft','Llega a Valledupar','imagen','2022/13/Sep',1003315376),(18,'fdsfds','fdsfds','imagen','2022/13/Sep',1193594292),(19,'Duvan','DUVANNNNNNNNNNNNNNNNNNN','imagen','2022/13/Sep',1193594292);
/*!40000 ALTER TABLE `tema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_doc`
--

DROP TABLE IF EXISTS `tipo_doc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_doc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_doc`
--

LOCK TABLES `tipo_doc` WRITE;
/*!40000 ALTER TABLE `tipo_doc` DISABLE KEYS */;
INSERT INTO `tipo_doc` VALUES (1,'documento1'),(2,'documento2');
/*!40000 ALTER TABLE `tipo_doc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_usu`
--

DROP TABLE IF EXISTS `tipo_usu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_usu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_usu`
--

LOCK TABLES `tipo_usu` WRITE;
/*!40000 ALTER TABLE `tipo_usu` DISABLE KEYS */;
INSERT INTO `tipo_usu` VALUES (1,'usuario'),(2,'administrador');
/*!40000 ALTER TABLE `tipo_usu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `dni` int(11) NOT NULL,
  `p_nombre` varchar(50) NOT NULL,
  `s_nombre` varchar(50) NOT NULL,
  `apellido_m` varchar(50) NOT NULL,
  `apellido_p` varchar(50) NOT NULL,
  `nacimiento` varchar(15) NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasenia` varchar(50) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `internet` varchar(2) NOT NULL,
  `acceso_dispositivo` varchar(2) NOT NULL,
  `dispositivo` varchar(100) NOT NULL,
  `estrato` int(11) NOT NULL,
  `regimen` varchar(10) NOT NULL,
  `fkdiscapacidad` int(11) NOT NULL,
  `fktipo_doc` int(11) NOT NULL,
  `fktipo_usu` int(11) NOT NULL,
  `fketnia` int(11) NOT NULL,
  `fksexo` int(11) NOT NULL,
  `fknvledu` int(11) NOT NULL,
  `fkbarrio` int(11) NOT NULL,
  `fkmunicipio` int(11) NOT NULL,
  PRIMARY KEY (`dni`),
  KEY `fktipo_doc` (`fktipo_doc`),
  KEY `fktipo_usu` (`fktipo_usu`),
  KEY `fketnia` (`fketnia`),
  KEY `fksexo` (`fksexo`),
  KEY `fknvledu` (`fknvledu`),
  KEY `fkbarrio` (`fkbarrio`),
  KEY `fkmunicipio` (`fkmunicipio`),
  KEY `fkdiscapacidad` (`fkdiscapacidad`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`fkdiscapacidad`) REFERENCES `discapacidad` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`fktipo_doc`) REFERENCES `tipo_doc` (`id`),
  CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`fktipo_usu`) REFERENCES `tipo_usu` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `usuario_ibfk_4` FOREIGN KEY (`fketnia`) REFERENCES `etnia` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `usuario_ibfk_5` FOREIGN KEY (`fksexo`) REFERENCES `sexo` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `usuario_ibfk_6` FOREIGN KEY (`fknvledu`) REFERENCES `nivel_educativo` (`id`) ON DELETE CASCADE,
  CONSTRAINT `usuario_ibfk_7` FOREIGN KEY (`fkbarrio`) REFERENCES `barrio` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `usuario_ibfk_8` FOREIGN KEY (`fkmunicipio`) REFERENCES `municipio` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (324324523,'luis ','enrique','sanchez','alvarado','2022-09-13',1233453,'fdsfdse@gmail.com','123','y87y8hynbjgfds','SI','SI','Computador',1,'subsidiado',1,1,1,1,1,1,1,1),(1003315376,'Frey ','Alexander','Carreño','Usuga','2022-09-07',1234567,'frey@gmail.com','123','micasa','SI','SI','Computador',1,'subsidiado',1,1,2,1,1,1,1,1),(1193594292,'Duvan ','Javid','Velasquez','Bolaño','2022-09-16',3423432,'Dbolanoo07@gmail.com','123','fdsgfd','SI','SI','Computador',1,'subsidiado',1,1,2,1,1,1,1,1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario_discapacidad`
--

DROP TABLE IF EXISTS `usuario_discapacidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario_discapacidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_discapacidad` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_discapacidad` (`id_discapacidad`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_discapacidad`
--

LOCK TABLES `usuario_discapacidad` WRITE;
/*!40000 ALTER TABLE `usuario_discapacidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario_discapacidad` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-14 14:03:52
