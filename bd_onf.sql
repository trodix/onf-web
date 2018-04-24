CREATE DATABASE  IF NOT EXISTS `bd_onf` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `bd_onf`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bd_onf
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.26-MariaDB

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
-- Table structure for table `arbre`
--

DROP TABLE IF EXISTS `arbre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `arbre` (
  `idArbre` int(11) NOT NULL AUTO_INCREMENT,
  `hauteurEnM` int(11) DEFAULT NULL,
  `libelleFrancais` varchar(30) DEFAULT NULL,
  `datePlantation` date DEFAULT NULL,
  `commune` varchar(30) DEFAULT NULL,
  `cp` varchar(5) DEFAULT NULL,
  `lattitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `idDom` int(11) DEFAULT NULL,
  `idEspece` int(11) DEFAULT NULL,
  PRIMARY KEY (`idArbre`),
  KEY `FK_arbre_idDom` (`idDom`),
  KEY `FK_arbre_idEspece` (`idEspece`),
  CONSTRAINT `FK_arbre_idDom` FOREIGN KEY (`idDom`) REFERENCES `domanialite` (`idDom`),
  CONSTRAINT `FK_arbre_idEspece` FOREIGN KEY (`idEspece`) REFERENCES `espece` (`idEspece`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arbre`
--

LOCK TABLES `arbre` WRITE;
/*!40000 ALTER TABLE `arbre` DISABLE KEYS */;
INSERT INTO `arbre` VALUES (1,0,'Erable','2018-02-05','Chevigny Saint Sauveur','21800',NULL,NULL,1,1),(2,0,'Marronnier','2014-02-05','Dijon','21000',NULL,NULL,2,2),(3,0,'Noisetier de Byzance','2018-02-05','Dijon','21000',NULL,NULL,2,3),(4,9,'Cyprès','2014-07-05','Saint-Appolinaire','21850',NULL,NULL,2,4),(5,0,'Hêtre','2018-07-05','Panthiers','21320',NULL,NULL,2,6),(6,21,'Platane','2018-02-05','Quetigny','21800',NULL,NULL,2,8),(7,5,'Erable','2017-02-05','Couternon','21560',NULL,NULL,3,7),(8,5,'Erable','2018-02-05','Varois-et-Chaignot','21490',NULL,NULL,4,7),(9,0,'Platane','2014-07-05','Dijon','21000',NULL,NULL,4,9),(10,0,'Platane','0000-00-00','Dijon','21000',NULL,NULL,4,9),(11,8,'Tilleul','0000-00-00','Belleneuve','21310',NULL,NULL,5,10),(12,15,'Erable','0000-00-00','Dijon','21000',NULL,NULL,5,7),(13,15,'Platane','2017-02-05','Pluvault','21110',NULL,NULL,6,9),(14,10,'Erable','0000-00-00','Dijon','21000',NULL,NULL,6,11),(15,15,'Platane','2018-07-05','Varanges','21110',NULL,NULL,6,9),(16,11,'Platane','2018-07-05','Fauverney','21110',NULL,NULL,6,9),(17,9,'Platane','2018-07-05','Dijon','21000',NULL,NULL,6,9),(18,12,'Platane','2018-07-05','Dijon','21000',NULL,NULL,6,9),(19,15,'Platane','2017-02-05','Chevigny Saint Sauveur','21800',NULL,NULL,6,9),(20,11,'Marronnier','2018-02-05','Dijon','21000',NULL,NULL,6,2),(21,5,'Frêne','2017-02-05','Panthiers','21320',NULL,NULL,6,12),(22,10,'Platane','0000-00-00','Dijon','21000',NULL,NULL,6,9),(23,18,'Marronnier','0000-00-00','Dijon','21000',NULL,NULL,2,2),(24,0,'Marronnier','2018-02-05','Époisses','21110',NULL,NULL,2,2),(25,5,'Erable','2018-02-05','Dijon','21000',NULL,NULL,6,11),(26,3,'Lilas des indes','2018-02-05','Longvic','21600',NULL,NULL,2,13),(27,5,'Charme-Houblon','2014-02-05','Longvic','21600',NULL,NULL,3,14),(28,5,'Erable','0000-00-00','Dijon','21000',NULL,NULL,6,1),(29,8,'Sophora','0000-00-00','Sennecey-lès-Dijon','21800',NULL,NULL,6,15),(30,5,'Tilleul','2014-02-05','Dijon','21000',NULL,NULL,6,10),(31,10,'Tilleul','2018-02-05','Pontailler-sur-Saône','21270',NULL,NULL,6,16),(32,15,'Peuplier','2014-02-05','Dijon','21000',NULL,NULL,6,17),(33,12,'Orme','2018-02-05','Auxonne','21130',NULL,NULL,1,18),(34,10,'Cedrele','0000-00-00','Dijon','21000',NULL,NULL,7,19),(35,13,'Marronnier','2017-02-05','Dijon','21000',NULL,NULL,3,2),(36,13,'Marronnier','2017-02-05','Beaune','21200',NULL,NULL,6,2),(37,10,'Cedrele','2018-02-05','Dijon','21000',NULL,NULL,6,19),(38,8,'Platane','2018-02-05','Dijon','21000',NULL,NULL,6,8),(39,7,'Micocoulier','2017-02-05','Dijon','21000',NULL,NULL,6,20),(40,9,'Poirier à fleurs','2018-02-05','Dijon','21000',NULL,NULL,6,21),(41,12,'Mûrier','0000-00-00','Corgonloin','21700',NULL,NULL,6,22),(42,20,'Peuplier','0000-00-00','Dijon','21000',NULL,NULL,6,23),(43,18,'Tilleul','0000-00-00','Dijon','21000',NULL,NULL,6,16),(44,15,'Tilleul','2016-02-08','Sennecey-lès-Dijon','21800',NULL,NULL,6,16),(45,12,'Tulipier','0206-02-08','Dijon','21000',NULL,NULL,6,24),(46,5,'Marronnier','2016-02-08','Dijon','21000',NULL,NULL,6,2),(47,10,'Erable','2016-02-08','Dijon','21000',NULL,NULL,6,25),(48,0,'Marronnier','2016-02-08','Dijon','21000',NULL,NULL,6,2),(49,7,'Micocoulier','2016-02-08','Dijon','21000',NULL,NULL,6,20),(50,10,'Noisetier de Byzance','2016-02-08','Dijon','21000',NULL,NULL,6,3);
/*!40000 ALTER TABLE `arbre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `domanialite`
--

DROP TABLE IF EXISTS `domanialite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `domanialite` (
  `idDom` int(11) NOT NULL AUTO_INCREMENT,
  `libelleDom` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idDom`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `domanialite`
--

LOCK TABLES `domanialite` WRITE;
/*!40000 ALTER TABLE `domanialite` DISABLE KEYS */;
INSERT INTO `domanialite` VALUES (1,'CIMETIERE'),(2,'JARDIN'),(3,'DASCO'),(4,'PERIPHERIQUE'),(5,'DJS'),(6,'ALIGNEMENT'),(7,'DFPE');
/*!40000 ALTER TABLE `domanialite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `espece`
--

DROP TABLE IF EXISTS `espece`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `espece` (
  `idEspece` int(11) NOT NULL AUTO_INCREMENT,
  `libelleEspece` varchar(30) DEFAULT NULL,
  `idGenre` int(11) DEFAULT NULL,
  PRIMARY KEY (`idEspece`),
  KEY `FK_espece_idGenre` (`idGenre`),
  CONSTRAINT `FK_espece_idGenre` FOREIGN KEY (`idGenre`) REFERENCES `genre` (`idGenre`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `espece`
--

LOCK TABLES `espece` WRITE;
/*!40000 ALTER TABLE `espece` DISABLE KEYS */;
INSERT INTO `espece` VALUES (1,'negundo',1),(2,'hippocastanum',2),(3,'colurna',3),(4,'Cupressus',4),(5,'sempervirens',3),(6,'sylvatica',5),(7,'platanoides',1),(8,'orientalis',6),(9,'x hispanica',6),(10,'x europaea',7),(11,'cappadocicum',1),(12,'excelsior',8),(13,'indica',9),(14,'carpinifolia',10),(15,'japonica',11),(16,'tomentosa',7),(17,'x canadensis',12),(18,'ulmacées',13),(19,'sinensis',14),(20,'australis',15),(21,'calleryana',16),(22,'alba',17),(23,'alba',12),(24,'tulipifera',18),(25,'saccharinum',1);
/*!40000 ALTER TABLE `espece` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genre` (
  `idGenre` int(11) NOT NULL AUTO_INCREMENT,
  `libelleGenre` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idGenre`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genre`
--

LOCK TABLES `genre` WRITE;
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT INTO `genre` VALUES (1,'Acer'),(2,'Aesculus'),(3,'Corylus'),(4,'Cupressus'),(5,'Fagus'),(6,'Platanus'),(7,'Tilia'),(8,'Fraxinus'),(9,'Lagerstroemia'),(10,'Ostrya'),(11,'Sophora'),(12,'Populus'),(13,'Ulmus'),(14,'Toona'),(15,'Celtis'),(16,'Pyrus'),(17,'Morus'),(18,'Liriodendron');
/*!40000 ALTER TABLE `genre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `intervention`
--

DROP TABLE IF EXISTS `intervention`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `intervention` (
  `idIntervention` int(11) NOT NULL AUTO_INCREMENT,
  `dateIntervention` date DEFAULT NULL,
  `heureIntervention` time DEFAULT NULL,
  `observations` varchar(100) DEFAULT NULL,
  `idArbre` int(11) DEFAULT NULL,
  `idType` int(11) DEFAULT NULL,
  PRIMARY KEY (`idIntervention`),
  KEY `FK_intervention_idArbre` (`idArbre`),
  KEY `FK_intervention_idType` (`idType`),
  CONSTRAINT `FK_intervention_idArbre` FOREIGN KEY (`idArbre`) REFERENCES `arbre` (`idArbre`),
  CONSTRAINT `FK_intervention_idType` FOREIGN KEY (`idType`) REFERENCES `typeintervention` (`idType`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `intervention`
--

LOCK TABLES `intervention` WRITE;
/*!40000 ALTER TABLE `intervention` DISABLE KEYS */;
INSERT INTO `intervention` VALUES (1,'2012-11-25','15:00:00',NULL,1,1),(2,'2013-01-10','10:00:00','Croissance convenable, aucune maladie à signaler',1,3);
/*!40000 ALTER TABLE `intervention` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typeintervention`
--

DROP TABLE IF EXISTS `typeintervention`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typeintervention` (
  `idType` int(11) NOT NULL AUTO_INCREMENT,
  `libelleType` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idType`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typeintervention`
--

LOCK TABLES `typeintervention` WRITE;
/*!40000 ALTER TABLE `typeintervention` DISABLE KEYS */;
INSERT INTO `typeintervention` VALUES (1,'Plantation'),(2,'Elagage'),(3,'Diagnostique'),(4,'Remplacement');
/*!40000 ALTER TABLE `typeintervention` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


CREATE USER 'adminBDonf'@'localhost' IDENTIFIED BY 'mdpBDonf';
GRANT ALL PRIVILEGES ON *.* TO 'adminBDonf'@'localhost';

CREATE USER 'adminBDonf'@'%' IDENTIFIED BY 'mdpBDonf';
GRANT ALL PRIVILEGES ON *.* TO 'adminBDonf'@'%';

-- Dump completed on 2018-04-24 16:14:45
