-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: finalproject
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `student_data`
--

DROP TABLE IF EXISTS `student_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student_data` (
  `id` varchar(45) NOT NULL,
  `enrollment` varchar(45) NOT NULL,
  `roll` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `course` varchar(45) DEFAULT NULL,
  `branch` varchar(45) DEFAULT NULL,
  `mode` varchar(45) DEFAULT NULL,
  `application` varchar(45) NOT NULL,
  `year_term` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`enrollment`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  CONSTRAINT `enrollment` FOREIGN KEY (`enrollment`) REFERENCES `students_excel` (`Enroll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_data`
--

LOCK TABLES `student_data` WRITE;
/*!40000 ALTER TABLE `student_data` DISABLE KEYS */;
INSERT INTO `student_data` VALUES ('2','DE13012','19T3241','Prakhar agrawal','BE','MECHENG_FT','Regular','',NULL),('1','DE13155','19T4156','deepesh aswani','BE','CIVIENG_FT','Regular','',NULL),('3','DE13399','19T4231','shakti agarwal','BE','ECTELEG_FT','Regular','',NULL);
/*!40000 ALTER TABLE `student_data` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-30 19:02:33
