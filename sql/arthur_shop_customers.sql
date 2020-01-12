-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: server1.crays.ee    Database: arthur
-- ------------------------------------------------------
-- Server version	5.5.64-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `shop_customers`
--

DROP TABLE IF EXISTS `shop_customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shop_customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_type_id` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `address_line1` varchar(255) DEFAULT NULL,
  `address_line2` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `organization_name` varchar(255) DEFAULT NULL,
  `vat_number` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `verified` int(1) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_customers`
--

LOCK TABLES `shop_customers` WRITE;
/*!40000 ALTER TABLE `shop_customers` DISABLE KEYS */;
INSERT INTO `shop_customers` VALUES (1,'1','arthur.benbassat@gmail.com','Arthur','Benbassat','','','','','BE','','','','ae6abdfab29193a62e94d28f93c6cb65',0,NULL),(3,'1','bbb@bbb.bb','bbb@bbb.bb','bbb@bbb.bb','','','','','','','','','b9d4f7cdab705f7fa3e80d223803da87',1,NULL),(5,'1','bbib@bbb.bb','','','','','','','','','','','b9d4f7cdab705f7fa3e80d223803da87',0,NULL),(19,'1','','','','','','','','BE','','','','87a0c84d64fb9442746d2c686c9e4c9a',1,NULL),(20,'1','bepadel203@jancloud.net','Test','Test2','','','','','BE','','','','0d44499798fd92c2693680e47fbc60a6',1,NULL),(21,'1','tikave2275@clsn1.com','Peter','Jans','','','','','BE','','','','53c2f3f49597f3e57ed4b6fbffb57a5b',0,NULL),(23,'1','pixih92327@oncloud.ws','Jan','Peeters','','','','','BE','','','','6584859d0f52dad57cf343668de1bffb',0,NULL),(24,'1','arthur.benbassat@outlook.com','Steven','Boer','','','','','BE','','','','ae6abdfab29193a62e94d28f93c6cb65',0,NULL),(32,'','qsdf','','','','','','','','','','','',0,NULL),(34,'','qsd1f','','','','','','','','','','','',0,NULL),(37,'1','bbb@bbbe.bb','bbb@bbb.bb','bbb@bbb.bb','','','','','','','','','b9d4f7cdab705f7fa3e80d223803da87',0,NULL),(38,'2','pieters.d@gmail.com','Pieter','Dirks','','','','','BE','0498521406','Jansen en Jansen','','ae6abdfab29193a62e94d28f93c6cb65',0,NULL),(41,'2','pieters.d@gmail.comx','alain','jongers','','','','','BE','0498521406','Jansen en Jansen','','adcf1f2f02442dd154c39081a64dd46c',0,NULL),(42,'1','mail@mail.com','aze','rty','','','','','BE','','','','ae6abdfab29193a62e94d28f93c6cb65',0,NULL),(43,'1','m12ail@mail.com','aze','rty','','','','','BE','','','','c053f5274372bd27f6eab71e4e53a290',0,NULL),(44,'1','mijepes491@onmail.top','bbb@bbb.bb','bbb@bbb.bb','','','','','','','','','b9d4f7cdab705f7fa3e80d223803da87',0,'40c0769d1b7c4bae'),(45,'2','nixala1437@clsn1.com','Bob','De ','','','','','BE','','De bouwer','','ca852abdb342c0de26f1e87bf6b8936e',0,'bc6e8174a4a2ac95'),(46,'1','rerix80619@mailon.ws','Dirk','Jan','','','','','BE','','','','8ea7244a11a9d8c58cc5be0a7d9c8a12',1,'a729eac7fe33469b'),(47,'1','felovi8861@clsn1.com','Evel','Benbas','','','','','BE','','','','4b67bd263b889038fb669a286847bc7d',1,'7ed948284b926ab2'),(48,'1','cijer22550@janmail.org','Peter','Evans','','','','','BE','','','','af14b376cf66802ceafdc3e00911deeb',1,'0c641d213ae19f97');
/*!40000 ALTER TABLE `shop_customers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-12 12:39:10
