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
-- Table structure for table `broken_equipment`
--

DROP TABLE IF EXISTS `broken_equipment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `broken_equipment` (
  `equipment_ID` int(11) NOT NULL AUTO_INCREMENT,
  `equipment_name` varchar(255) DEFAULT NULL,
  `equipment_campus` varchar(255) DEFAULT NULL,
  `equipment_building` varchar(255) DEFAULT NULL,
  `equipment_room` varchar(255) DEFAULT NULL,
  `equipment_decription` varchar(255) DEFAULT NULL,
  `equipment_username` varchar(255) DEFAULT NULL,
  `equipment_email` varchar(255) DEFAULT NULL,
  `equipment_latitute` int(11) DEFAULT NULL,
  `equipment_longtitute` int(11) DEFAULT NULL,
  `equipment_photo` varchar(255) DEFAULT NULL,
  `equipment_assign` int(11) DEFAULT NULL,
  `equipment_status` varchar(255) NOT NULL DEFAULT 'Waiting',
  PRIMARY KEY (`equipment_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `data_information`
--

DROP TABLE IF EXISTS `data_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_information` (
  `data_no` int(11) NOT NULL AUTO_INCREMENT,
  `data_date` date NOT NULL,
  `data_distance` int(11) NOT NULL,
  `data_passanger` int(11) NOT NULL,
  `data_from` varchar(255) CHARACTER SET utf8 NOT NULL,
  `data_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `driver_no` int(11) NOT NULL,
  `driver_van_num` int(11) NOT NULL,
  PRIMARY KEY (`data_no`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user table';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `request` (
  `request_no` int(11) NOT NULL AUTO_INCREMENT,
  `request_date` date DEFAULT NULL,
  `request_from` time DEFAULT NULL,
  `request_to` time DEFAULT NULL,
  `request_to_place` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `request_description` longtext COLLATE utf8_unicode_ci,
  `request_approve` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'Waiting',
  `request_assign` int(11) DEFAULT NULL,
  `request_assign_by` int(11) DEFAULT NULL,
  `request_by` int(11) DEFAULT NULL,
  `request_comment` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`request_no`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-09 22:11:15
