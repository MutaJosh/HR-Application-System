-- MySQL dump 10.13  Distrib 8.0.12, for Win64 (x86_64)
--
-- Host: localhost    Database: moh
-- ------------------------------------------------------
-- Server version	8.0.12

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `health_professional`
--

DROP TABLE IF EXISTS `health_professional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `health_professional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT NULL,
  `request_leter` varchar(45) NOT NULL,
  `cv` varchar(45) NOT NULL,
  `degree` varchar(45) NOT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `update_by` varchar(45) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `voided_by` varchar(45) DEFAULT NULL,
  `voided_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_health_professional_user_idx` (`user`),
  CONSTRAINT `fk_health_professional_user` FOREIGN KEY (`user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='To store all request about health professional (e.g. Medical Doctors, Nurse, Pharmacists, ...)';
/*!40101 SET character_set_client = @saved_cs_client */;
/* COLLATE=utf8mb4_0900_ai_ci */
--
-- Dumping data for table `health_professional`
--

LOCK TABLES `health_professional` WRITE;
/*!40000 ALTER TABLE `health_professional` DISABLE KEYS */;
/*!40000 ALTER TABLE `health_professional` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `health_professional_qualification`
--

DROP TABLE IF EXISTS `health_professional_qualification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `health_professional_qualification` (
  `health_professional` int(11) NOT NULL,
  `qualification` int(11) NOT NULL,
  PRIMARY KEY (`health_professional`,`qualification`),
  KEY `fk_qualification_idx` (`qualification`),
  CONSTRAINT `fk_health_professional` FOREIGN KEY (`health_professional`) REFERENCES `health_professional` (`id`),
  CONSTRAINT `fk_qualification` FOREIGN KEY (`qualification`) REFERENCES `qualification` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;
/*  COLLATE=utf8mb4_0900_ai_ci */
--
-- Dumping data for table `health_professional_qualification`
--

LOCK TABLES `health_professional_qualification` WRITE;
/*!40000 ALTER TABLE `health_professional_qualification` DISABLE KEYS */;
/*!40000 ALTER TABLE `health_professional_qualification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opening_posting`
--

DROP TABLE IF EXISTS `opening_posting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `opening_posting` (
  `id` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL,
  `tor` varchar(45) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `update_by` varchar(45) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `voided_by` varchar(45) DEFAULT NULL,
  `voided_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_opening_posting_user_idx` (`user`),
  CONSTRAINT `fk_opening_posting_user` FOREIGN KEY (`user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;
/*  COLLATE=utf8mb4_0900_ai_ci */
--
-- Dumping data for table `opening_posting`
--

LOCK TABLES `opening_posting` WRITE;
/*!40000 ALTER TABLE `opening_posting` DISABLE KEYS */;
/*!40000 ALTER TABLE `opening_posting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opening_posting_qualification`
--

DROP TABLE IF EXISTS `opening_posting_qualification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `opening_posting_qualification` (
  `opening_posting` int(11) NOT NULL,
  `qualification` int(11) NOT NULL,
  PRIMARY KEY (`opening_posting`,`qualification`),
  KEY `fk_opq_qualification_idx` (`qualification`),
  CONSTRAINT `fk_opq_opening_posting` FOREIGN KEY (`opening_posting`) REFERENCES `opening_posting` (`id`),
  CONSTRAINT `fk_opq_qualification` FOREIGN KEY (`qualification`) REFERENCES `qualification` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;
/*  COLLATE=utf8mb4_0900_ai_ci */
--
-- Dumping data for table `opening_posting_qualification`
--

LOCK TABLES `opening_posting_qualification` WRITE;
/*!40000 ALTER TABLE `opening_posting_qualification` DISABLE KEYS */;
/*!40000 ALTER TABLE `opening_posting_qualification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `qualification`
--

DROP TABLE IF EXISTS `qualification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `qualification` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;
/*  COLLATE=utf8mb4_0900_ai_ci */
--
-- Dumping data for table `qualification`
--

LOCK TABLES `qualification` WRITE;
/*!40000 ALTER TABLE `qualification` DISABLE KEYS */;
/*!40000 ALTER TABLE `qualification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `doc_no` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;
/*  COLLATE=utf8mb4_0900_ai_ci */
--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-21 16:45:46
