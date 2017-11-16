-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: localhost    Database: EDITABORRA
-- ------------------------------------------------------
-- Server version	5.6.28

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
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `idMenu` int(11) NOT NULL AUTO_INCREMENT COMMENT 'width:30,ali:right',
  `androidID` varchar(50) CHARACTER SET latin1 DEFAULT '0' COMMENT 'width:100',
  `texto` varchar(50) CHARACTER SET latin1 DEFAULT '0' COMMENT 'width:200',
  `icono` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT 'tipo:ico,blanco:null',
  `padre` int(11) DEFAULT '0' COMMENT 'tipo:sel,valor:idMenu,texto:texto,where:padre=''0'',blanco:0',
  `activo` char(1) CHARACTER SET latin1 DEFAULT '0' COMMENT 'tipo:bool',
  `orden` char(2) CHARACTER SET latin1 DEFAULT '0' COMMENT 'width:30, ali:right',
  UNIQUE KEY `idMenu` (`idMenu`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,'nav_telefonos','Teléfonos de Interés','@android:drawable/ic_menu_call.png',0,'1','1'),(2,'nav_Fiestas','Fiestas','@drawable/ic_menu_fiestas.png',0,'1','2'),(3,'nav_Fiestas_Mayo','La Ascensión','@drawable/ic_menu_fiestas.png',2,'1','3'),(4,'nav_Fiestas_Agosto','La Virjen y San Roque','@drawable/ic_menu_fiestas.png',2,'1','4'),(5,'nav_Infra','Infraestructuras','@drawable/ic_menu_ayto',0,'1','5'),(6,'nav_Colec','Colectivos','',0,'1','6'),(7,'nav_Colec_AsocDep','Asociaciones Deportivas','@drawable/ic_menu_deportivas.png',6,'1','7'),(8,'nav_Fiestas_Penias','Peñas','@drawable/ic_menu_penia.png',2,'1','8'),(9,'nav_Infra_Educ','Educativas','@drawable/ic_menu_educacion.png',5,'1','1'),(10,'nav_Infra_Ayun','Ayuntamiento','@drawable/ic_menu_ayto.png',5,'1','0'),(11,'nav_Infra_Cult','Culturales','@drawable/ic_menu_cultura.png',5,'1','2'),(12,'nav_Infra_Depor','Deportivas','@drawable/ic_menu_deporte.png',5,'1','3'),(13,'nav_Infra_Soc','Sociales','@drawable/ic_menu_social.png',5,'1','4');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-16 11:18:39
