CREATE DATABASE  IF NOT EXISTS `destinos` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `destinos`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: destinos
-- ------------------------------------------------------
-- Server version	5.6.21-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alojamientohotel`
--

DROP TABLE IF EXISTS `alojamientohotel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alojamientohotel` (
  `CodigoHotel` int(11) NOT NULL,
  `Duracion` int(11) NOT NULL,
  `Precio` decimal(10,4) NOT NULL,
  PRIMARY KEY (`CodigoHotel`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alojamientohotel`
--

LOCK TABLES `alojamientohotel` WRITE;
/*!40000 ALTER TABLE `alojamientohotel` DISABLE KEYS */;
/*!40000 ALTER TABLE `alojamientohotel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contenido`
--

DROP TABLE IF EXISTS `contenido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contenido` (
  `CodigoContenido` int(11) NOT NULL AUTO_INCREMENT,
  `Pagina` bit(1) NOT NULL,
  PRIMARY KEY (`CodigoContenido`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contenido`
--

LOCK TABLES `contenido` WRITE;
/*!40000 ALTER TABLE `contenido` DISABLE KEYS */;
/*!40000 ALTER TABLE `contenido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contenidotranslation`
--

DROP TABLE IF EXISTS `contenidotranslation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contenidotranslation` (
  `CodigoContenido` int(11) NOT NULL,
  `CodigoIdioma` char(2) NOT NULL,
  `TituloContenido` varchar(100) NOT NULL,
  PRIMARY KEY (`CodigoContenido`,`CodigoIdioma`),
  KEY `RefIdioma221` (`CodigoIdioma`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contenidotranslation`
--

LOCK TABLES `contenidotranslation` WRITE;
/*!40000 ALTER TABLE `contenidotranslation` DISABLE KEYS */;
/*!40000 ALTER TABLE `contenidotranslation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hotel` (
  `CodigoHotel` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Telefono` char(10) NOT NULL,
  PRIMARY KEY (`CodigoHotel`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel`
--

LOCK TABLES `hotel` WRITE;
/*!40000 ALTER TABLE `hotel` DISABLE KEYS */;
/*!40000 ALTER TABLE `hotel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hoteltranslation`
--

DROP TABLE IF EXISTS `hoteltranslation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hoteltranslation` (
  `CodigoIdioma` char(2) NOT NULL,
  `CodigoHotel` int(11) NOT NULL,
  `DescripcionHotel` varchar(200) DEFAULT NULL,
  `DireccionHotel` varchar(100) NOT NULL,
  `CiudadHotel` varchar(100) NOT NULL,
  PRIMARY KEY (`CodigoIdioma`,`CodigoHotel`),
  KEY `RefHOTEL251` (`CodigoHotel`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hoteltranslation`
--

LOCK TABLES `hoteltranslation` WRITE;
/*!40000 ALTER TABLE `hoteltranslation` DISABLE KEYS */;
/*!40000 ALTER TABLE `hoteltranslation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `idioma`
--

DROP TABLE IF EXISTS `idioma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `idioma` (
  `CodigoIdioma` char(2) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`CodigoIdioma`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `idioma`
--

LOCK TABLES `idioma` WRITE;
/*!40000 ALTER TABLE `idioma` DISABLE KEYS */;
INSERT INTO `idioma` VALUES ('ES','Español'),('EN','Ingles');
/*!40000 ALTER TABLE `idioma` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `CodigoMenu` int(11) NOT NULL AUTO_INCREMENT,
  `Pagina` varchar(100) DEFAULT NULL,
  `Activo` bit(1) NOT NULL,
  `FechaCreacion` datetime NOT NULL,
  `FechaActualizacion` datetime DEFAULT NULL,
  `Orden` int(11) DEFAULT '1',
  PRIMARY KEY (`CodigoMenu`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,'home.php','','2014-12-11 00:10:05','2014-12-11 00:10:05',1),(2,'Tour.php','','2014-12-11 00:12:42','2014-12-11 00:12:42',1),(3,'Pasajes.php','','2014-12-11 00:12:42','2014-12-11 00:12:42',1),(4,'Hotel.php','','2014-12-11 00:12:42','2014-12-11 00:12:42',1),(5,'Contactenos.php','','2014-12-11 00:12:42','2014-12-11 00:12:42',1);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menucontenido`
--

DROP TABLE IF EXISTS `menucontenido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menucontenido` (
  `CodigoContenido` int(11) NOT NULL,
  `CodigoMenu` int(11) NOT NULL,
  `FechaCreacion` datetime NOT NULL,
  `Activo` bit(1) NOT NULL,
  PRIMARY KEY (`CodigoContenido`,`CodigoMenu`),
  KEY `RefMenu281` (`CodigoMenu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menucontenido`
--

LOCK TABLES `menucontenido` WRITE;
/*!40000 ALTER TABLE `menucontenido` DISABLE KEYS */;
/*!40000 ALTER TABLE `menucontenido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menutranslation`
--

DROP TABLE IF EXISTS `menutranslation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menutranslation` (
  `CodigoIdioma` char(2) NOT NULL,
  `CodigoMenu` int(11) NOT NULL,
  `DescripcionMenu` varchar(100) NOT NULL,
  PRIMARY KEY (`CodigoIdioma`,`CodigoMenu`),
  KEY `RefMenu201` (`CodigoMenu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menutranslation`
--

LOCK TABLES `menutranslation` WRITE;
/*!40000 ALTER TABLE `menutranslation` DISABLE KEYS */;
INSERT INTO `menutranslation` VALUES ('ES',1,'Inicio'),('EN',1,'Home');
/*!40000 ALTER TABLE `menutranslation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notificacion`
--

DROP TABLE IF EXISTS `notificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notificacion` (
  `CodigoNotificacion` int(11) NOT NULL AUTO_INCREMENT,
  `Correo` varchar(100) NOT NULL,
  PRIMARY KEY (`CodigoNotificacion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notificacion`
--

LOCK TABLES `notificacion` WRITE;
/*!40000 ALTER TABLE `notificacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `notificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paquete`
--

DROP TABLE IF EXISTS `paquete`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paquete` (
  `CodigoPaquete` int(11) NOT NULL AUTO_INCREMENT,
  `ImagenPrincipal` varchar(200) NOT NULL,
  `PrecioNormal` decimal(10,4) NOT NULL,
  `Descuento` decimal(10,4) NOT NULL,
  `PrecioFinal` decimal(10,4) NOT NULL,
  `Seccion` char(2) NOT NULL,
  `CodigoTour` int(11) NOT NULL,
  `CodigoPasaje` int(11) NOT NULL,
  `CodigoHotel` int(11) NOT NULL,
  `CodigoTipoPaquete` int(11) NOT NULL,
  PRIMARY KEY (`CodigoPaquete`),
  KEY `RefTour111` (`CodigoTour`),
  KEY `RefPasaje121` (`CodigoPasaje`),
  KEY `RefAlojamientoHotel131` (`CodigoHotel`),
  KEY `RefTipoPaquete141` (`CodigoTipoPaquete`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paquete`
--

LOCK TABLES `paquete` WRITE;
/*!40000 ALTER TABLE `paquete` DISABLE KEYS */;
/*!40000 ALTER TABLE `paquete` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paquetetranslation`
--

DROP TABLE IF EXISTS `paquetetranslation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paquetetranslation` (
  `CodigoPaquete` int(11) NOT NULL,
  `CodigoIdioma` char(2) NOT NULL,
  `TituloPaquete` varchar(100) NOT NULL,
  `DescripcionCortaPaquete` varchar(500) NOT NULL,
  `DescripcionLarga` varchar(2000) NOT NULL,
  PRIMARY KEY (`CodigoPaquete`,`CodigoIdioma`),
  KEY `RefIdioma321` (`CodigoIdioma`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paquetetranslation`
--

LOCK TABLES `paquetetranslation` WRITE;
/*!40000 ALTER TABLE `paquetetranslation` DISABLE KEYS */;
/*!40000 ALTER TABLE `paquetetranslation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pasaje`
--

DROP TABLE IF EXISTS `pasaje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pasaje` (
  `CodigoPasaje` int(11) NOT NULL AUTO_INCREMENT,
  `Precio` decimal(10,4) NOT NULL,
  `IdaVuelta` bit(1) NOT NULL,
  PRIMARY KEY (`CodigoPasaje`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pasaje`
--

LOCK TABLES `pasaje` WRITE;
/*!40000 ALTER TABLE `pasaje` DISABLE KEYS */;
/*!40000 ALTER TABLE `pasaje` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pasajetranslation`
--

DROP TABLE IF EXISTS `pasajetranslation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pasajetranslation` (
  `CodigoPasaje` int(11) NOT NULL,
  `CodigoIdioma` char(2) NOT NULL,
  `OrigenPasaje` varchar(200) NOT NULL,
  `DestinoPasaje` varchar(200) NOT NULL,
  `FechaPartida` datetime NOT NULL,
  `FechaRetorno` date DEFAULT NULL,
  PRIMARY KEY (`CodigoPasaje`,`CodigoIdioma`),
  KEY `RefIdioma361` (`CodigoIdioma`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pasajetranslation`
--

LOCK TABLES `pasajetranslation` WRITE;
/*!40000 ALTER TABLE `pasajetranslation` DISABLE KEYS */;
/*!40000 ALTER TABLE `pasajetranslation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipopaquete`
--

DROP TABLE IF EXISTS `tipopaquete`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipopaquete` (
  `CodigoTipoPaquete` int(11) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`CodigoTipoPaquete`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipopaquete`
--

LOCK TABLES `tipopaquete` WRITE;
/*!40000 ALTER TABLE `tipopaquete` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipopaquete` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tour`
--

DROP TABLE IF EXISTS `tour`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tour` (
  `CodigoTour` int(11) NOT NULL AUTO_INCREMENT,
  `Precio` decimal(10,4) NOT NULL,
  PRIMARY KEY (`CodigoTour`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tour`
--

LOCK TABLES `tour` WRITE;
/*!40000 ALTER TABLE `tour` DISABLE KEYS */;
/*!40000 ALTER TABLE `tour` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tourtranslation`
--

DROP TABLE IF EXISTS `tourtranslation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tourtranslation` (
  `CodigoTour` int(11) NOT NULL,
  `CodigoIdioma` char(2) NOT NULL,
  `ComidaTour` varchar(200) DEFAULT NULL,
  `MovilidadTour` varchar(200) DEFAULT NULL,
  `DuracionTour` varchar(100) DEFAULT NULL,
  `DestinoTour` varchar(200) DEFAULT NULL,
  `OrigenTour` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`CodigoTour`,`CodigoIdioma`),
  KEY `RefIdioma341` (`CodigoIdioma`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tourtranslation`
--

LOCK TABLES `tourtranslation` WRITE;
/*!40000 ALTER TABLE `tourtranslation` DISABLE KEYS */;
/*!40000 ALTER TABLE `tourtranslation` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-20 17:31:37
