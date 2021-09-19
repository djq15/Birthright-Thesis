-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: user_privileges
-- ------------------------------------------------------
-- Server version	5.7.28-log

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
-- Table structure for table `masterlist`
--

DROP TABLE IF EXISTS `masterlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `masterlist` (
  `Student_No` int(15) NOT NULL,
  `Status` varchar(45) DEFAULT NULL,
  `Last_name` varchar(45) DEFAULT NULL,
  `First_name` varchar(45) DEFAULT NULL,
  `Middle_initial` varchar(45) DEFAULT NULL,
  `Nickname` varchar(45) DEFAULT NULL,
  `Gender` varchar(45) DEFAULT NULL,
  `Date_of_birth` varchar(45) DEFAULT NULL,
  `Age` varchar(45) DEFAULT NULL,
  `Street` varchar(45) DEFAULT NULL,
  `Province` varchar(45) DEFAULT NULL,
  `Home_contact_No` varchar(45) DEFAULT NULL,
  `Fathers_name` varchar(45) DEFAULT NULL,
  `Fathers_contact_No` varchar(45) DEFAULT NULL,
  `Fathers_email` varchar(45) DEFAULT NULL,
  `Mothers_name` varchar(45) DEFAULT NULL,
  `Mothers_contact_No` varchar(45) DEFAULT NULL,
  `Mothers_email` varchar(45) DEFAULT NULL,
  `Guardians_name` varchar(45) DEFAULT NULL,
  `Relationship_with_student` varchar(45) DEFAULT NULL,
  `Guardians_email` varchar(45) DEFAULT NULL,
  `Guardians_contact_No` varchar(45) DEFAULT NULL,
  `Case` varchar(45) DEFAULT NULL,
  `One_on_one` varchar(45) DEFAULT NULL,
  `RR_class` varchar(45) DEFAULT NULL,
  `ABCs_class` varchar(45) DEFAULT NULL,
  `Beginner_class` varchar(45) DEFAULT NULL,
  `Skill_development_class` varchar(45) DEFAULT NULL,
  `Sight_reading_class` varchar(45) DEFAULT NULL,
  `Pre_Voc_class` varchar(45) DEFAULT NULL,
  `Learning_center` varchar(45) DEFAULT NULL,
  `BLC_class` varchar(45) DEFAULT NULL,
  `Kinder_music_class` varchar(45) DEFAULT NULL,
  `Group_class_SSDS` varchar(45) DEFAULT NULL,
  `SpEd_class_SSDS` varchar(45) DEFAULT NULL,
  `Antipolo_ABCs` varchar(45) DEFAULT NULL,
  `Antipolo_elementary` varchar(45) DEFAULT NULL,
  `Antipolo_high_school` varchar(45) DEFAULT NULL,
  `Supervisor_Teacher_in_charge` varchar(45) DEFAULT NULL,
  `Remarks` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Student_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `masterlist`
--

LOCK TABLES `masterlist` WRITE;
/*!40000 ALTER TABLE `masterlist` DISABLE KEYS */;
INSERT INTO `masterlist` VALUES (1,'single',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39'),(3,'22','2','3','4','10','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39');
/*!40000 ALTER TABLE `masterlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'user_privileges'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-23 22:05:31
