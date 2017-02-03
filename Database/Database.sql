CREATE DATABASE  IF NOT EXISTS `senior_project` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `senior_project`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: senior_project
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.19-MariaDB

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
-- Table structure for table `data_information`
--

DROP TABLE IF EXISTS `data_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_information` (
  `data_no` int(11) NOT NULL,
  `date_date` date DEFAULT NULL,
  `data_distance` int(11) DEFAULT NULL,
  `data_passanger` int(11) DEFAULT NULL,
  `data_form` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `driver_no` int(11) NOT NULL,
  PRIMARY KEY (`data_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_information`
--

LOCK TABLES `data_information` WRITE;
/*!40000 ALTER TABLE `data_information` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `driver`
--

DROP TABLE IF EXISTS `driver`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `driver` (
  `driver_no` int(11) NOT NULL AUTO_INCREMENT,
  `driver_position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`driver_no`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `driver`
--

LOCK TABLES `driver` WRITE;
/*!40000 ALTER TABLE `driver` DISABLE KEYS */;
INSERT INTO `driver` VALUES (1,'Driver Chief',1),(2,'Driver',3),(3,'Driver',4),(4,'Driver',5),(5,'Driver',6),(6,'Driver',8);
/*!40000 ALTER TABLE `driver` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member_tier` varchar(255) CHARACTER SET utf8 DEFAULT 'Normal User',
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user table';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (0,'Mr. Krissada Kiattahanawit','admin','f25d2ea041b332f0001ed83c2a4b3105','siit@siit.tu.ac.th','Admin'),(1,'Mr. Somnit Phankote','driver_number1','f25d2ea041b332f0001ed83c2a4b3105','siit@siit.tu.ac.th','Driver'),(2,'Mr. Apinat Poungnil','developer_01','f25d2ea041b332f0001ed83c2a4b3105','apinat@siit.tu.ac.th','Normal_User'),(3,'Mr. Somjit Soetirat','driver_number2','f25d2ea041b332f0001ed83c2a4b3105','siit@siit.tu.ac.th','Driver'),(4,'Mr. Jaychoe Owatayakul','driver_number3','f25d2ea041b332f0001ed83c2a4b3105','siit@siit.tu.ac.th','Driver'),(5,'Mr. Delete Print','driver_number4','f25d2ea041b332f0001ed83c2a4b3105','siit@siit.tu.ac.th','Driver');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `request` (
  `request_no` int(11) NOT NULL,
  `request_date` date DEFAULT NULL,
  `request_from` time DEFAULT NULL,
  `request_to` time DEFAULT NULL,
  `request_to_place` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `request_description` longtext COLLATE utf8_unicode_ci,
  `request_approve` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '"Waiting"',
  `request_assign` int(11) DEFAULT NULL,
  `request_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`request_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request`
--

LOCK TABLES `request` WRITE;
/*!40000 ALTER TABLE `request` DISABLE KEYS */;
/*!40000 ALTER TABLE `request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `van`
--

DROP TABLE IF EXISTS `van`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `van` (
  `van_no` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'Rangsit',
  `status` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'Free',
  `driver_no` int(11) NOT NULL COMMENT 'driver_no = memer_no (membr table)',
  `current_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Rangsit',
  `request_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No requested',
  `van_license_plate` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`van_no`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `van`
--

LOCK TABLES `van` WRITE;
/*!40000 ALTER TABLE `van` DISABLE KEYS */;
INSERT INTO `van` VALUES (1,'Rangsit','Free',1,'Rangsit','No requested','AA-9999'),(2,'Bangkadi','Free',2,'Bangkadi','No requested','AA-9998'),(3,'Rangsit','Free',3,'Rangsit','No requested','AA-9997'),(4,'Bangkadi','Free',4,'Rangsit','No requested','AA-9996');
/*!40000 ALTER TABLE `van` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-04  3:58:16
