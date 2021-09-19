-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: 2022-2023
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
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `accounts` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `prelim` int(11) DEFAULT NULL,
  `midterm` int(11) DEFAULT NULL,
  `final` int(11) DEFAULT NULL,
  `total_tuition` int(11) DEFAULT '0',
  `downpayment` int(11) DEFAULT '0',
  `month1` int(11) DEFAULT '0',
  `month2` int(11) DEFAULT '0',
  `month3` int(11) DEFAULT '0',
  `month4` int(11) DEFAULT '0',
  `month5` int(11) DEFAULT '0',
  `month6` int(11) DEFAULT '0',
  `month7` int(11) DEFAULT '0',
  `month8` int(11) DEFAULT '0',
  `month9` int(11) DEFAULT '0',
  `balance` decimal(11,2) DEFAULT '0.00',
  `monthly_payment` decimal(11,2) DEFAULT '0.00',
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts`
--

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
INSERT INTO `accounts` VALUES (11,'11',NULL,NULL,NULL,NULL,69,69,0,0,0,0,0,0,0,0,0,621.00,69.00),(22,'22',NULL,NULL,NULL,NULL,100,100,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0.00,0.00),(33,'33',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0.00,0.00),(44,'44',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0.00,0.00),(55,'55',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0.00,0.00),(66,'66',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0.00,0.00),(77,'77',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0.00,0.00),(88,'88',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0.00,0.00),(99,'99',NULL,NULL,NULL,NULL,11000,2000,0,0,0,0,0,0,0,0,0,0.00,0.00),(111,'111',NULL,NULL,NULL,NULL,69000,33000,0,0,0,0,0,0,0,0,0,0.00,0.00),(222,'222',NULL,NULL,NULL,NULL,10000,1000,0,0,0,0,0,0,0,0,0,0.00,0.00),(333,'333',NULL,0,0,0,12000,3000,1000,1000,1000,1000,1000,1000,1000,1000,1000,0.00,0.00),(555,'Danil','Ishutin',0,0,0,8000,4000,0,0,0,0,0,0,0,0,0,4000.00,444.44),(43434,'Manny','Pacquiao',1500,0,0,20000,1500,2000,2000,2000,2000,2000,2000,2000,2000,2500,0.00,0.00),(212923,'Dexer','Quimpo',5000,2500,0,15000,5000,2000,1000,2000,1000,0,0,0,0,0,4000.00,800.00),(212925,'Slim','Shady',NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0.00,0.00);
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eng101`
--

DROP TABLE IF EXISTS `eng101`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `eng101` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `prelim` int(11) DEFAULT NULL,
  `midterm` int(11) DEFAULT NULL,
  `final` int(11) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eng101`
--

LOCK TABLES `eng101` WRITE;
/*!40000 ALTER TABLE `eng101` DISABLE KEYS */;
INSERT INTO `eng101` VALUES (555,'Danil','Ishutin',99,99,98),(662,'ProfessorZ','Zavier',NULL,NULL,NULL),(43434,'Manny','Pacquiao',75,75,85),(212923,'Dexer','Quimpo',80,80,93);
/*!40000 ALTER TABLE `eng101` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grades` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `grade` int(5) DEFAULT '0',
  `prelim` int(5) DEFAULT '0',
  `midterm` int(5) DEFAULT '0',
  `final` int(5) DEFAULT '0',
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grades`
--

LOCK TABLES `grades` WRITE;
/*!40000 ALTER TABLE `grades` DISABLE KEYS */;
INSERT INTO `grades` VALUES (555,'Danil','Ishutin',0,75,75,75),(43434,'Manny','Pacquiao',0,4,4,4),(212923,'Dexer','Quimpo',0,4,4,4);
/*!40000 ALTER TABLE `grades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `it101`
--

DROP TABLE IF EXISTS `it101`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `it101` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `prelim` int(11) DEFAULT NULL,
  `midterm` int(11) DEFAULT NULL,
  `final` int(11) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `it101`
--

LOCK TABLES `it101` WRITE;
/*!40000 ALTER TABLE `it101` DISABLE KEYS */;
INSERT INTO `it101` VALUES (1111,'ProfessorX','Xavier',NULL,NULL,NULL),(43434,'Manny','Pacquiao',80,80,80),(212923,'Dexer','Quimpo',90,90,90);
/*!40000 ALTER TABLE `it101` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `it201`
--

DROP TABLE IF EXISTS `it201`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `it201` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `prelim` int(11) DEFAULT NULL,
  `midterm` int(11) DEFAULT NULL,
  `final` int(11) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `it201`
--

LOCK TABLES `it201` WRITE;
/*!40000 ALTER TABLE `it201` DISABLE KEYS */;
INSERT INTO `it201` VALUES (555,'Danil','Ishutin',0,0,0),(1111,'ProfessorX','Xavier',NULL,NULL,NULL),(212923,'Dexer','Quimpo',0,0,0);
/*!40000 ALTER TABLE `it201` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `login` (
  `user_id` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `tag` varchar(45) DEFAULT NULL,
  `evaluation_submit` varchar(45) DEFAULT 'N',
  `clearance_approve` varchar(45) DEFAULT 'N',
  `existing_folder` varchar(45) DEFAULT 'N',
  `evaluation` varchar(45) DEFAULT 'none',
  `callsign` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `vkey` varchar(45) DEFAULT NULL,
  `verified` tinyint(1) DEFAULT '0',
  `createdate` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=212926 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (11,'11','11','2','N','N','N','none',NULL,'11@gmail.com',NULL,0,NULL),(22,'22','22','2','N','N',NULL,'none',NULL,NULL,NULL,0,NULL),(33,'33','33','2','N','N',NULL,'none',NULL,NULL,NULL,0,NULL),(44,'44','44','2','N','N',NULL,'none',NULL,NULL,NULL,0,NULL),(55,'55','55','2','N','N',NULL,'none',NULL,NULL,NULL,0,NULL),(66,'66','66','2','N','N',NULL,'none',NULL,NULL,NULL,0,NULL),(77,'77','77','2','N','N',NULL,'none',NULL,NULL,NULL,0,NULL),(88,'88','88','2','N','N',NULL,'none',NULL,NULL,NULL,0,NULL),(99,'99','99','2','N','N',NULL,'none',NULL,NULL,NULL,0,NULL),(222,'222','222','2','N','Y','Y','none',NULL,NULL,NULL,0,NULL),(333,'333','333','2','N','N','Y','none',NULL,NULL,NULL,96,NULL),(555,'Danil','af5f7bdba30bd8043ce4a47aaf8887ee','2','Y','Y','Y','1',NULL,NULL,NULL,1,NULL),(1015,'ProfessorX','ae4e20ba64f111a3be58a5d207de27bf','1','N','N',NULL,'10',NULL,'',NULL,1,NULL),(1016,'ProfessorZ','ca17aad9379bc896bd2a9f7bee0b479b','1','N','N',NULL,'none','professorz','blah@gmail.com',NULL,1,NULL),(1017,'Player4','46debe0cee201fca70ca4ff963d8aa4b','4','N','N','','none',NULL,'ss@gmail.com','f5ccfbb2d30cee248701254c53203f78',1,NULL),(1018,'Player3','845e86c189dcfe5942981ea77d86ac50','3','N','N',NULL,'10',NULL,'ss@gmail.com','a44ad07bcee0d8c23b980e8c1088d8d1',1,NULL),(43434,'Manny','Pacquiao','2','Y','Y','N','none',NULL,NULL,NULL,1,NULL),(212923,'Dexer','3b77a28b9cb26c73869d9f4ea97cdc12','2','Y','Y','Y','10',NULL,'dexer.quimpo@gmail.com','',1,'2020-11-13 19:14:36.100475'),(212925,'Slim','725e0e4921887a72af9ed11db74b490e','2','N','Y','Y','none',NULL,'12345@gmail.com','fbb92122d228f31e6e1e37259335381f',1,NULL);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

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
INSERT INTO `masterlist` VALUES (555,'Active','Ishutin','Danil','X','Dendi','Male','1989','31','Lviv','Ukraine','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(43434,'Inactive','Pacquiao','Manny','D','Pacman','Male','1978','42','GS','Mindanao','','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39'),(212923,'Active','Quimpo','Dexer','J','Dikoy','Male','1985','35','San Pedro','Laguna','','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39'),(212925,'Active','Shady','Slim','S','Marshall',NULL,NULL,NULL,NULL,'Detroit',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `masterlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `math101`
--

DROP TABLE IF EXISTS `math101`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `math101` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `prelim` int(11) DEFAULT NULL,
  `midterm` int(11) DEFAULT NULL,
  `final` int(11) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `math101`
--

LOCK TABLES `math101` WRITE;
/*!40000 ALTER TABLE `math101` DISABLE KEYS */;
INSERT INTO `math101` VALUES (555,'Danil','Ishutin',0,0,0),(662,'ProfessorZ','Zavier',NULL,NULL,NULL),(43434,'Manny','Pacquiao',0,0,0);
/*!40000 ALTER TABLE `math101` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject1`
--

DROP TABLE IF EXISTS `subject1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subject1` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `prelim` int(11) DEFAULT NULL,
  `midterm` int(11) DEFAULT NULL,
  `final` int(11) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject1`
--

LOCK TABLES `subject1` WRITE;
/*!40000 ALTER TABLE `subject1` DISABLE KEYS */;
INSERT INTO `subject1` VALUES (555,'Danil','Ishutin',99,99,99),(662,'ProfessorZ','Zavier',NULL,NULL,NULL),(43434,'Manny','Pacquiao',75,75,85),(212923,'Dexer','Quimpo',88,88,89);
/*!40000 ALTER TABLE `subject1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjectname`
--

DROP TABLE IF EXISTS `subjectname`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subjectname` (
  `subjectID` int(11) NOT NULL,
  `subject` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`subjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjectname`
--

LOCK TABLES `subjectname` WRITE;
/*!40000 ALTER TABLE `subjectname` DISABLE KEYS */;
INSERT INTO `subjectname` VALUES (1,'subject1','eng101');
/*!40000 ALTER TABLE `subjectname` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbladmissionstatus`
--

DROP TABLE IF EXISTS `tbladmissionstatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbladmissionstatus` (
  `AdmissionStatusID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`AdmissionStatusID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbladmissionstatus`
--

LOCK TABLES `tbladmissionstatus` WRITE;
/*!40000 ALTER TABLE `tbladmissionstatus` DISABLE KEYS */;
INSERT INTO `tbladmissionstatus` VALUES (1,'New'),(2,'Transferee'),(3,'Old');
/*!40000 ALTER TABLE `tbladmissionstatus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblclasses`
--

DROP TABLE IF EXISTS `tblclasses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblclasses` (
  `ClassID` int(11) NOT NULL AUTO_INCREMENT,
  `STermID` int(11) DEFAULT NULL,
  `HFacultyID` int(11) DEFAULT NULL,
  `TypeID` int(11) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ClassID`),
  KEY `STermID` (`STermID`),
  KEY `HFacultyID` (`HFacultyID`),
  KEY `TypeID` (`TypeID`),
  CONSTRAINT `tblclasses_ibfk_1` FOREIGN KEY (`STermID`) REFERENCES `tblschoolterms` (`STermID`) ON DELETE CASCADE,
  CONSTRAINT `tblclasses_ibfk_2` FOREIGN KEY (`HFacultyID`) REFERENCES `tblhiredfacultymembers` (`HFacultyID`) ON DELETE CASCADE,
  CONSTRAINT `tblclasses_ibfk_3` FOREIGN KEY (`TypeID`) REFERENCES `tblclasstypes` (`TypeID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=613 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblclasses`
--

LOCK TABLES `tblclasses` WRITE;
/*!40000 ALTER TABLE `tblclasses` DISABLE KEYS */;
INSERT INTO `tblclasses` VALUES (1,1,1,2,'Database Management System'),(2,1,2,2,'System Analysis and Design'),(4,1,3,1,'Network Management'),(5,1,1,1,'Free Elective (SAP)'),(7,1,4,1,'Logic Design and Switching Theory'),(8,1,11,1,'Philippine History'),(9,1,6,2,'Group Games'),(10,1,17,2,'Purposive Communication'),(11,1,11,2,'Readings In The Philippines'),(12,1,6,2,'Arts Appreciation'),(13,1,1,1,'Computer Programming 2 (Java)'),(14,1,1,1,'Intro To Human Interaction'),(16,1,6,2,'Rhythmic Activities (Dance)'),(17,1,11,2,'CWTS 2'),(18,1,2,1,'Calculus 2'),(20,1,1,1,'Object Oriented Programming'),(21,1,4,2,'Software Engineering'),(22,1,2,1,'Multimedia System'),(23,1,1,1,'Advance Database Management Systems'),(24,1,3,2,'Technopreneurship'),(25,1,17,2,'Society & Culture w/ HIV Aids Education'),(26,1,3,1,'IT Elective 2 (Network Administration)'),(27,1,3,2,'CISCO 2'),(28,1,2,1,'Microprocessor & Microcontroller Systems'),(29,1,4,1,'Data Communications'),(30,1,2,1,'Computer System Architecture'),(31,1,9,1,'Environmental Engineering'),(32,1,2,2,'Information Technology Design 2 (Thesis 2)'),(33,1,2,2,'IT Elective 4 (IT Project Management)'),(34,1,17,1,'Contact Center'),(35,1,3,2,'CISCO 4'),(36,1,3,2,'Seminars & Field Trip'),(37,1,19,1,'Engineering Management'),(39,1,3,1,'CISCO 3'),(40,1,19,2,'Practicum'),(42,1,1,1,'Data Structure & Algorithm Analysis'),(46,1,17,1,'General Psychology'),(47,2,19,1,'Understanding The Self '),(48,2,19,1,'Mathematics In The Modern World'),(49,2,19,1,'Science, Technology And Society'),(50,2,19,1,'Calculus 1'),(51,2,19,1,'Chemistry For Engineers'),(52,2,19,1,'Computer Engineering As A Discipline '),(53,2,19,1,'Programming Logic And Design'),(54,2,19,1,'Physical Fitness/Gymnastics'),(55,2,19,1,'CWTS 1'),(56,2,19,1,'Computer Concepts And Fundamentals'),(57,2,19,1,'Computer Programming 1 (C++)'),(58,2,19,1,'Introduction To Computing'),(59,2,19,1,'Technical Communications'),(60,2,19,1,'Differential Calculus'),(61,2,19,1,'General Physics 1'),(62,2,19,1,'Economics W/ Land Reform & Taxation'),(63,2,19,1,'Philippine History & Culture'),(64,2,19,1,'Computer Hardware Fundamentals'),(65,2,19,1,'Specialized Athletics'),(66,2,19,1,'Arts Appreciation'),(67,2,19,1,'Masining Na Pagpapahayag'),(68,2,19,1,'Computer System Osrganization'),(69,2,19,1,'Object Oriented Programming (Visual Basic)'),(70,2,19,1,'Data Structures & Algorithm Analysis'),(71,2,19,1,'Fundamentals Of Accounting'),(72,2,19,1,'Engineering Economy '),(73,2,19,1,'Differential Equations'),(74,2,19,1,'Statics Of Rgid Bodies'),(75,2,19,1,'Circuit Analysis 1'),(76,2,19,1,'Electromagnetics'),(77,2,19,1,'Electronics 1'),(78,2,19,1,'Computer Systems Organization W/ Assembly Lang.'),(79,2,19,1,'Discrete Mathematics'),(80,2,19,1,'Web Development'),(81,2,19,1,'Data Communications'),(82,2,19,1,'It Elective 1 (Mis)'),(83,2,19,1,'CISCO 1'),(84,2,19,1,'Rizal\'S Life, Works And Writing'),(85,2,19,1,'Philippine Government & Constitution'),(86,2,19,1,'Philippine Literature'),(87,2,19,1,'Numerical Anaysis W/ Computer Pp.'),(88,2,19,1,'CISCO 2'),(89,2,19,1,'Principles Of Communication '),(90,2,19,1,'Advanced Logic Design & Switching Theory'),(91,2,19,1,'Control Systems'),(92,2,19,1,'Mechanics Deformable Bodies'),(93,2,19,1,'Digital Signal Processing '),(94,2,19,1,'Computer Engineering Drafting And Design'),(95,2,19,1,'Professional Ethics In It'),(96,2,19,1,'Database Administration'),(97,2,19,1,'Computer System Architecture'),(98,2,19,1,'Information Technology Design 1'),(99,2,19,1,'It Elective 3(E-Business)'),(100,2,19,1,'CISCO 3'),(101,2,19,1,'System Analysis & Design'),(102,2,19,1,'Object Orriented Programming'),(103,2,19,1,'Engineering Ethics And Computer Laws'),(104,2,19,1,'Computer Networks'),(105,2,19,1,'Elevtive 2'),(106,2,19,1,'Safety Engineering'),(107,2,19,1,'Eng\'G Design, Research & Dev\'T 1'),(108,2,19,1,'CISCO 4'),(109,3,19,1,'Communication Skills 2'),(110,3,19,1,'Analytic Geometry'),(111,3,19,1,'Gamiting Filipino'),(112,3,19,1,'Advanced Algebra'),(113,3,19,1,'Solid Mensuration'),(114,3,19,1,'Rizal\'S Life, Works And Writing'),(115,3,19,1,'Computer Aided Drafting'),(116,3,19,1,'Rhytmic Activities (Dances)'),(117,3,19,1,'National Service Training Program 2'),(118,3,19,1,'Philosophy Of Man'),(119,3,19,1,'Pagbasa At Pagsulat Tungo Sa Pananaliksik'),(120,3,19,1,'Trigonometry'),(121,3,19,1,'Programming 2 (C++)'),(122,3,19,1,'Applied Operating System'),(123,3,19,1,'Quality, Conciousness, Habits And Processes'),(124,3,19,1,'Philosophy Of Man'),(125,3,19,1,'General Physics 1'),(126,3,19,1,'Statistics And Probabilities'),(127,3,19,1,'Integral Calculus'),(128,3,19,1,'General Physics 2'),(129,3,19,1,'Data Structure & Algorithm Analysis'),(130,3,19,1,'General Psychology'),(131,3,19,1,'Philippine Literature'),(132,3,19,1,'Group Games'),(133,3,19,1,'Database Management System'),(134,3,19,1,'System Analysis And Design'),(135,3,19,1,'Network Management'),(136,3,19,1,'Logic Design & Switching Theory'),(137,3,19,1,'Free Elective (SAP)'),(138,3,19,1,'Philippine History'),(139,3,19,1,'Advance Engineering Mathematics'),(140,3,19,1,'Dynamics Of Rigid Bodies'),(141,3,19,1,'Engineering Materials'),(142,3,19,1,'CISCO 1'),(143,3,19,1,'Electronics 2'),(144,3,19,1,'Circuit Analysis 2'),(145,3,19,1,'Logic Circuit & Switching Theory'),(146,3,19,1,'Operating System'),(147,3,19,1,'Software Enginnering'),(148,3,19,1,'Multimedia Systems'),(149,3,19,1,'Advance Database Management Systems'),(150,3,19,1,'Technopreneurship'),(151,3,19,1,'CISCO 2'),(152,3,19,1,'Society & Culture W/ Hiv Aids Education'),(153,3,19,1,'It Elective 2 (Network Administration)'),(154,3,19,1,'Society & Culture W/ Hiv Aids Education'),(155,3,19,1,'Microprocessor & Microcontroller Systems'),(156,3,19,1,'Data Communications'),(157,3,19,1,'Computer System Architecture'),(158,3,19,1,'Environmental Engineering'),(159,3,19,1,'CISCO 3'),(160,3,19,1,'Elective 1'),(161,3,19,1,'Information Technology Design 2'),(162,3,19,1,'It Elective 4 (It Project Management)'),(163,3,19,1,'Contact Center'),(164,3,19,1,'CISCO 4'),(165,3,19,1,'Seminar And Fieldtrip'),(166,3,19,1,'Engineering Management'),(167,3,19,1,'Software Engineering'),(168,3,19,1,'Entreperneurship'),(169,3,19,1,'Eng\'G Design, Research & Dev\'T'),(170,3,19,1,'Elective 3'),(171,3,19,1,'Seminar & Field Trip'),(172,4,19,1,'Communication Skills 1'),(173,4,19,1,'College Algebra'),(174,4,19,1,'Plane And Sperical Trigonometry'),(175,4,19,1,'General Inorganic Chemistry'),(176,4,19,1,'Engineering Drawing 1'),(177,4,19,1,'Computer Fundamentals & Programming'),(178,4,19,1,'Sining Ng Pakikipagtalastasan'),(179,4,19,1,'Physical Fitness/ Gymnastics'),(180,4,19,1,'National Service Traning Program 1'),(181,4,19,1,'It Fundamentals'),(182,4,19,1,'Programming 1 (C+)'),(183,4,19,1,'Office Productivity'),(184,4,19,1,'General Psychology'),(185,4,19,1,'Technical Communications'),(186,4,19,1,'Differential Calculus'),(187,4,19,1,'General Physics 1'),(188,4,19,1,'Economics W/ Land Reform & Taxation'),(189,4,19,1,'Philippine History & Culture'),(190,4,19,1,'Computer Hardware Fundamentals'),(191,4,19,1,'Specialized Athletics'),(192,4,19,1,'Arts Appreciation'),(193,4,19,1,'Masining Na Pagpapahayag'),(194,4,19,1,'Computer System Osrganization'),(195,4,19,1,'Object Oriented Programming (Visual Basic)'),(196,4,19,1,'Data Structures & Algorithm Analysis'),(197,4,19,1,'Fundamentals Of Accounting'),(198,4,19,1,'Engineering Economy '),(199,4,19,1,'Differential Equations'),(200,4,19,1,'Statics Of Rgid Bodies'),(201,4,19,1,'Circuit Analysis 1'),(202,4,19,1,'Electromagnetics'),(203,4,19,1,'Electronics 1'),(204,4,19,1,'Computer Systems Organization W/ Assembly Lang.'),(205,4,19,1,'Discrete Mathematics'),(206,4,19,1,'Web Development'),(207,4,19,1,'Data Communications'),(208,4,19,1,'It Elective 1 (Mis)'),(209,4,19,1,'CISCO 1'),(210,4,19,1,'Rizal\'S Life, Works And Writing'),(211,4,19,1,'Philippine Government & Constitution'),(212,4,19,1,'Philippine Literature'),(213,4,19,1,'Numerical Anaysis W/ Computer Pp.'),(214,4,19,1,'CISCO 2'),(215,4,19,1,'Principles Of Communication '),(216,4,19,1,'Advanced Logic Design & Switching Theory'),(217,4,19,1,'Control Systems'),(218,4,19,1,'Mechanics Deformable Bodies'),(219,4,19,1,'Digital Signal Processing '),(220,4,19,1,'Computer Engineering Drafting And Design'),(221,4,19,1,'Professional Ethics In It'),(222,4,19,1,'Database Administration'),(223,4,19,1,'Computer System Architecture'),(224,4,19,1,'Information Technology Design 1'),(225,4,19,1,'It Elective 3(E-Business)'),(226,4,19,1,'CISCO 3'),(227,4,19,1,'System Analysis & Design'),(228,4,19,1,'Object Orriented Programming'),(229,4,19,1,'Engineering Ethics And Computer Laws'),(230,4,19,1,'Computer Networks'),(231,4,19,1,'Elective 2'),(232,4,19,1,'Safety Engineering'),(233,4,19,1,'Eng\'G Design, Research & Dev\'T 1'),(234,4,19,1,'CISCO 4'),(235,5,19,1,'Communication Skills 2'),(236,5,19,1,'Analytic Geometry'),(237,5,19,1,'Gamiting Filipino'),(238,5,19,1,'Advanced Algebra'),(239,5,19,1,'Solid Mensuration'),(240,5,19,1,'Rizal\'S Life, Works And Writing'),(241,5,19,1,'Computer Aided Drafting'),(242,5,19,1,'Rhytmic Activities (Dances)'),(243,5,19,1,'National Service Training Program 2'),(244,5,19,1,'Philosophy Of Man'),(245,5,19,1,'Pagbasa At Pagsulat Tungo Sa Pananaliksik'),(246,5,19,1,'Trigonometry'),(247,5,19,1,'Programming 2 (C++)'),(248,5,19,1,'Applied Operating System'),(249,5,19,1,'Quality, Conciousness, Habits And Processes'),(250,5,19,1,'Philosophy Of Man'),(251,5,19,1,'General Physics 1'),(252,5,19,1,'Statistics And Probabilities'),(253,5,19,1,'Integral Calculus'),(254,5,19,1,'General Physics 2'),(255,5,19,1,'Data Structure & Algorithm Analysis'),(256,5,19,1,'General Psychology'),(257,5,19,1,'Philippine Literature'),(258,5,19,1,'Group Games'),(259,5,19,1,'Database Management System'),(260,5,19,1,'System Analysis And Design'),(261,5,19,1,'Network Management'),(262,5,19,1,'Logic Design & Switching Theory'),(263,5,19,1,'Free Elective (SAP)'),(264,5,19,1,'Philippine History'),(265,5,19,1,'Advance Engineering Mathematics'),(266,5,19,1,'Dynamics Of Rigid Bodies'),(267,5,19,1,'Engineering Materials'),(268,5,19,1,'CISCO 1'),(269,5,19,1,'Electronics 2'),(270,5,19,1,'Circuit Analysis 2'),(271,5,19,1,'Logic Circuit & Switching Theory'),(272,5,19,1,'Operating System'),(273,5,19,1,'Software Enginnering'),(274,5,19,1,'Multimedia Systems'),(275,5,19,1,'Advance Database Management Systems'),(276,5,19,1,'Technopreneurship'),(277,5,19,1,'CISCO 2'),(278,5,19,1,'Society & Culture W/ Hiv Aids Education'),(279,5,19,1,'It Elective 2 (Network Administration)'),(280,5,19,1,'Society & Culture W/ Hiv Aids Education'),(281,5,19,1,'Microprocessor & Microcontroller Systems'),(282,5,19,1,'Data Communications'),(283,5,19,1,'Computer System Architecture'),(284,5,19,1,'Environmental Engineering'),(285,5,19,1,'CISCO 3'),(286,5,19,1,'Elective 1'),(287,5,19,1,'Information Technology Design 2'),(288,5,19,1,'It Elective 4 (It Project Management)'),(289,5,19,1,'Contact Center'),(290,5,19,1,'CISCO 4'),(291,5,19,1,'Seminar And Fieldtrip'),(292,5,19,1,'Engineering Management'),(293,5,19,1,'Software Engineering'),(294,5,19,1,'Entreperneurship'),(295,5,19,1,'Eng\'G Design, Research & Dev\'T'),(296,5,19,1,'Elective 3'),(297,5,19,1,'Seminar & Field Trip'),(298,6,19,1,'Communication Skills 1'),(299,6,19,1,'College Algebra'),(300,6,19,1,'Plane And Sperical Trigonometry'),(301,6,19,1,'General Inorganic Chemistry'),(302,6,19,1,'Engineering Drawing 1'),(303,6,19,1,'Computer Fundamentals & Programming'),(304,6,19,1,'Sining Ng Pakikipagtalastasan'),(305,6,19,1,'Physical Fitness/ Gymnastics'),(306,6,19,1,'National Service Traning Program 1'),(307,6,19,1,'It Fundamentals'),(308,6,19,1,'Programming 1 (C+)'),(309,6,19,1,'Office Productivity'),(310,6,19,1,'General Psychology'),(311,6,19,1,'Technical Communications'),(312,6,19,1,'Differential Calculus'),(313,6,19,1,'General Physics 1'),(314,6,19,1,'Economics W/ Land Reform & Taxation'),(315,6,19,1,'Philippine History & Culture'),(316,6,19,1,'Computer Hardware Fundamentals'),(317,6,19,1,'Specialized Athletics'),(318,6,19,1,'Arts Appreciation'),(319,6,19,1,'Masining Na Pagpapahayag'),(320,6,19,1,'Computer System Osrganization'),(321,6,19,1,'Object Oriented Programming (Visual Basic)'),(322,6,19,1,'Data Structures & Algorithm Analysis'),(323,6,19,1,'Fundamentals Of Accounting'),(324,6,19,1,'Engineering Economy '),(325,6,19,1,'Differential Equations'),(326,6,19,1,'Statics Of Rgid Bodies'),(327,6,19,1,'Circuit Analysis 1'),(328,6,19,1,'Electromagnetics'),(329,6,19,1,'Electronics 1'),(330,6,19,1,'Computer Systems Organization W/ Assembly Lang.'),(331,6,19,1,'Discrete Mathematics'),(332,6,19,1,'Web Development'),(333,6,19,1,'Data Communications'),(334,6,19,1,'It Elective 1 (Mis)'),(335,6,19,1,'CISCO 1'),(336,6,19,1,'Rizal\'S Life, Works And Writing'),(337,6,19,1,'Philippine Government & Constitution'),(338,6,19,1,'Philippine Literature'),(339,6,19,1,'Numerical Anaysis W/ Computer Pp.'),(340,6,19,1,'CISCO 2'),(341,6,19,1,'Principles Of Communication '),(342,6,19,1,'Advanced Logic Design & Switching Theory'),(343,6,19,1,'Control Systems'),(344,6,19,1,'Mechanics Deformable Bodies'),(345,6,19,1,'Digital Signal Processing '),(346,6,19,1,'Computer Engineering Drafting And Design'),(347,6,19,1,'Professional Ethics In It'),(348,6,19,1,'Database Administration'),(349,6,19,1,'Computer System Architecture'),(350,6,19,1,'Information Technology Design 1'),(351,6,19,1,'It Elective 3(E-Business)'),(352,6,19,1,'CISCO 3'),(353,6,19,1,'System Analysis & Design'),(354,6,19,1,'Object Orriented Programming'),(355,6,19,1,'Engineering Ethics And Computer Laws'),(356,6,19,1,'Computer Networks'),(357,6,19,1,'Elevtive 2'),(358,6,19,1,'Safety Engineering'),(359,6,19,1,'Eng\'G Design, Research & Dev\'T 1'),(360,6,19,1,'CISCO 4'),(361,7,19,1,'Communication Skills 2'),(362,7,19,1,'Analytic Geometry'),(363,7,19,1,'Gamiting Filipino'),(364,7,19,1,'Advanced Algebra'),(365,7,19,1,'Solid Mensuration'),(366,7,19,1,'Rizal\'S Life, Works And Writing'),(367,7,19,1,'Computer Aided Drafting'),(368,7,19,1,'Rhytmic Activities (Dances)'),(369,7,19,1,'National Service Training Program 2'),(370,7,19,1,'Philosophy Of Man'),(371,7,19,1,'Pagbasa At Pagsulat Tungo Sa Pananaliksik'),(372,7,19,1,'Trigonometry'),(373,7,19,1,'Programming 2 (C++)'),(374,7,19,1,'Applied Operating System'),(375,7,19,1,'Quality, Conciousness, Habits And Processes'),(376,7,19,1,'Philosophy Of Man'),(377,7,19,1,'General Physics 1'),(378,7,19,1,'Statistics And Probabilities'),(379,7,19,1,'Integral Calculus'),(380,7,19,1,'General Physics 2'),(381,7,19,1,'Data Structure & Algorithm Analysis'),(382,7,19,1,'General Psychology'),(383,7,19,1,'Philippine Literature'),(384,7,19,1,'Group Games'),(385,7,19,1,'Database Management System'),(386,7,19,1,'System Analysis And Design'),(387,7,19,1,'Network Management'),(388,7,19,1,'Logic Design & Switching Theory'),(389,7,19,1,'Free Elective (SAP)'),(390,7,19,1,'Philippine History'),(391,7,19,1,'Advance Engineering Mathematics'),(392,7,19,1,'Dynamics Of Rigid Bodies'),(393,7,19,1,'Engineering Materials'),(394,7,19,1,'CISCO 1'),(395,7,19,1,'Electronics 2'),(396,7,19,1,'Circuit Analysis 2'),(397,7,19,1,'Logic Circuit & Switching Theory'),(398,7,19,1,'Operating System'),(399,7,19,1,'Software Enginnering'),(400,7,19,1,'Multimedia Systems'),(401,7,19,1,'Advance Database Management Systems'),(402,7,19,1,'Technopreneurship'),(403,7,19,1,'CISCO 2'),(404,7,19,1,'Society & Culture W/ Hiv Aids Education'),(405,7,19,1,'It Elective 2 (Network Administration)'),(406,7,19,1,'Society & Culture W/ Hiv Aids Education'),(407,7,19,1,'Microprocessor & Microcontroller Systems'),(408,7,19,1,'Data Communications'),(409,7,19,1,'Computer System Architecture'),(410,7,19,1,'Environmental Engineering'),(411,7,19,1,'CISCO 3'),(412,7,19,1,'Elective 1'),(413,7,19,1,'Information Technology Design 2'),(414,7,19,1,'It Elective 4 (It Project Management)'),(415,7,19,1,'Contact Center'),(416,7,19,1,'CISCO 4'),(417,7,19,1,'Seminar And Fieldtrip'),(418,7,19,1,'Engineering Management'),(419,7,19,1,'Software Engineering'),(420,7,19,1,'Entreperneurship'),(421,7,19,1,'Eng\'G Design, Research & Dev\'T'),(422,7,19,1,'Elective 3'),(423,7,19,1,'Seminar & Field Trip'),(424,8,19,1,'Communication Skills 1'),(425,8,19,1,'College Algebra'),(426,8,19,1,'Plane And Sperical Trigonometry'),(427,8,19,1,'General Inorganic Chemistry'),(428,8,19,1,'Engineering Drawing 1'),(429,8,19,1,'Computer Fundamentals & Programming'),(430,8,19,1,'Sining Ng Pakikipagtalastasan'),(431,8,19,1,'Physical Fitness/ Gymnastics'),(432,8,19,1,'National Service Traning Program 1'),(433,8,19,1,'It Fundamentals'),(434,8,19,1,'Programming 1 (C+)'),(435,8,19,1,'Office Productivity'),(436,8,19,1,'General Psychology'),(437,8,19,1,'Technical Communications'),(438,8,19,1,'Differential Calculus'),(439,8,19,1,'General Physics 1'),(440,8,19,1,'Economics W/ Land Reform & Taxation'),(441,8,19,1,'Philippine History & Culture'),(442,8,19,1,'Computer Hardware Fundamentals'),(443,8,19,1,'Specialized Athletics'),(444,8,19,1,'Arts Appreciation'),(445,8,19,1,'Masining Na Pagpapahayag'),(446,8,19,1,'Computer System Osrganization'),(447,8,19,1,'Object Oriented Programming (Visual Basic)'),(448,8,19,1,'Data Structures & Algorithm Analysis'),(449,8,19,1,'Fundamentals Of Accounting'),(450,8,19,1,'Engineering Economy '),(451,8,19,1,'Differential Equations'),(452,8,19,1,'Statics Of Rgid Bodies'),(453,8,19,1,'Circuit Analysis 1'),(454,8,19,1,'Electromagnetics'),(455,8,19,1,'Electronics 1'),(456,8,19,1,'Computer Systems Organization W/ Assembly Lang.'),(457,8,19,1,'Discrete Mathematics'),(458,8,19,1,'Web Development'),(459,8,19,1,'Data Communications'),(460,8,19,1,'It Elective 1 (Mis)'),(461,8,19,1,'CISCO 1'),(462,8,19,1,'Rizal\'S Life, Works And Writing'),(463,8,19,1,'Philippine Government & Constitution'),(464,8,19,1,'Philippine Literature'),(465,8,19,1,'Numerical Anaysis W/ Computer Pp.'),(466,8,19,1,'CISCO 2'),(467,8,19,1,'Principles Of Communication '),(468,8,19,1,'Advanced Logic Design & Switching Theory'),(469,8,19,1,'Control Systems'),(470,8,19,1,'Mechanics Deformable Bodies'),(471,8,19,1,'Digital Signal Processing '),(472,8,19,1,'Computer Engineering Drafting And Design'),(473,8,19,1,'Professional Ethics In It'),(474,8,19,1,'Database Administration'),(475,8,19,1,'Computer System Architecture'),(476,8,19,1,'Information Technology Design 1'),(477,8,19,1,'It Elective 3(E-Business)'),(478,8,19,1,'CISCO 3'),(479,8,19,1,'System Analysis & Design'),(480,8,19,1,'Object Orriented Programming'),(481,8,19,1,'Engineering Ethics And Computer Laws'),(482,8,19,1,'Computer Networks'),(483,8,19,1,'Elevtive 2'),(484,8,19,1,'Safety Engineering'),(485,8,19,1,'Eng\'G Design, Research & Dev\'T 1'),(486,8,19,1,'CISCO 4'),(487,9,19,1,'Communication Skills 2'),(488,9,19,1,'Analytic Geometry'),(489,9,19,1,'Gamiting Filipino'),(490,9,19,1,'Advanced Algebra'),(491,9,19,1,'Solid Mensuration'),(492,9,19,1,'Rizal\'S Life, Works And Writing'),(493,9,19,1,'Computer Aided Drafting'),(494,9,19,1,'Rhytmic Activities (Dances)'),(495,9,19,1,'National Service Training Program 2'),(496,9,19,1,'Philosophy Of Man'),(497,9,19,1,'Pagbasa At Pagsulat Tungo Sa Pananaliksik'),(498,9,19,1,'Trigonometry'),(499,9,19,1,'Programming 2 (C++)'),(500,9,19,1,'Applied Operating System'),(501,9,19,1,'Quality, Conciousness, Habits And Processes'),(502,9,19,1,'Philosophy Of Man'),(503,9,19,1,'General Physics 1'),(504,9,19,1,'Statistics And Probabilities'),(505,9,19,1,'Integral Calculus'),(506,9,19,1,'General Physics 2'),(507,9,19,1,'Data Structure & Algorithm Analysis'),(508,9,19,1,'General Psychology'),(509,9,19,1,'Philippine Literature'),(510,9,19,1,'Group Games'),(511,9,19,1,'Database Management System'),(512,9,19,1,'System Analysis And Design'),(513,9,19,1,'Network Management'),(514,9,19,1,'Logic Design & Switching Theory'),(515,9,19,1,'Free Elective (SAP)'),(516,9,19,1,'Philippine History'),(517,9,19,1,'Advance Engineering Mathematics'),(518,9,19,1,'Dynamics Of Rigid Bodies'),(519,9,19,1,'Engineering Materials'),(520,9,19,1,'CISCO 1'),(521,9,19,1,'Electronics 2'),(522,9,19,1,'Circuit Analysis 2'),(523,9,19,1,'Logic Circuit & Switching Theory'),(524,9,19,1,'Operating System'),(525,9,19,1,'Software Enginnering'),(526,9,19,1,'Multimedia Systems'),(527,9,19,1,'Advance Database Management Systems'),(528,9,19,1,'Technopreneurship'),(529,9,19,1,'CISCO 2'),(530,9,19,1,'Society & Culture W/ Hiv Aids Education'),(531,9,19,1,'It Elective 2 (Network Administration)'),(532,9,19,1,'Society & Culture W/ Hiv Aids Education'),(533,9,19,1,'Microprocessor & Microcontroller Systems'),(534,9,19,1,'Data Communications'),(535,9,19,1,'Computer System Architecture'),(536,9,19,1,'Environmental Engineering'),(537,9,19,1,'CISCO 3'),(538,9,19,1,'Elective 1'),(539,9,19,1,'Information Technology Design 2'),(540,9,19,1,'It Elective 4 (It Project Management)'),(541,9,19,1,'Contact Center'),(542,9,19,1,'CISCO 4'),(543,9,19,1,'Seminar And Fieldtrip'),(544,9,19,1,'Engineering Management'),(545,9,19,1,'Software Engineering'),(546,9,19,1,'Entreperneurship'),(547,9,19,1,'Eng\'G Design, Research & Dev\'T'),(548,9,19,1,'Elective 3'),(549,9,19,1,'Seminar & Field Trip'),(550,10,19,1,'Communication Skills 1'),(551,10,19,1,'College Algebra'),(552,10,19,1,'Plane And Sperical Trigonometry'),(553,10,19,1,'General Inorganic Chemistry'),(554,10,19,1,'Engineering Drawing 1'),(555,10,19,1,'Computer Fundamentals & Programming'),(556,10,19,1,'Sining Ng Pakikipagtalastasan'),(557,10,19,1,'Physical Fitness/ Gymnastics'),(558,10,19,1,'National Service Traning Program 1'),(559,10,19,1,'It Fundamentals'),(560,10,19,1,'Programming 1 (C+)'),(561,10,19,1,'Office Productivity'),(562,10,19,1,'General Psychology'),(563,10,19,1,'Technical Communications'),(564,10,19,1,'Differential Calculus'),(565,10,19,1,'General Physics 1'),(566,10,19,1,'Economics W/ Land Reform & Taxation'),(567,10,19,1,'Philippine History & Culture'),(568,10,19,1,'Computer Hardware Fundamentals'),(569,10,19,1,'Specialized Athletics'),(570,10,19,1,'Arts Appreciation'),(571,10,19,1,'Masining Na Pagpapahayag'),(572,10,19,1,'Computer System Osrganization'),(573,10,19,1,'Object Oriented Programming (Visual Basic)'),(574,10,19,1,'Data Structures & Algorithm Analysis'),(575,10,19,1,'Fundamentals Of Accounting'),(576,10,19,1,'Engineering Economy '),(577,10,19,1,'Differential Equations'),(578,10,19,1,'Statics Of Rgid Bodies'),(579,10,19,1,'Circuit Analysis 1'),(580,10,19,1,'Electromagnetics'),(581,10,19,1,'Electronics 1'),(582,10,19,1,'Computer Systems Organization W/ Assembly Lang.'),(583,10,19,1,'Discrete Mathematics'),(584,10,19,1,'Web Development'),(585,10,19,1,'Data Communications'),(586,10,19,1,'It Elective 1 (Mis)'),(587,10,19,1,'CISCO 1'),(588,10,19,1,'Rizal\'S Life, Works And Writing'),(589,10,19,1,'Philippine Government & Constitution'),(590,10,19,1,'Philippine Literature'),(591,10,19,1,'Numerical Anaysis W/ Computer Pp.'),(592,10,19,1,'CISCO 2'),(593,10,19,1,'Principles Of Communication '),(594,10,19,1,'Advanced Logic Design & Switching Theory'),(595,10,19,1,'Control Systems'),(596,10,19,1,'Mechanics Deformable Bodies'),(597,10,19,1,'Digital Signal Processing '),(598,10,19,1,'Computer Engineering Drafting And Design'),(599,10,19,1,'Professional Ethics In It'),(600,10,19,1,'Database Administration'),(601,10,19,1,'Computer System Architecture'),(602,10,19,1,'Information Technology Design 1'),(603,10,19,1,'It Elective 3(E-Business)'),(604,10,19,1,'CISCO 3'),(605,10,19,1,'System Analysis & Design'),(606,10,19,1,'Object Orriented Programming'),(607,10,19,1,'Engineering Ethics And Computer Laws'),(608,10,19,1,'Computer Networks'),(609,10,19,1,'Elevtive 2'),(610,10,19,1,'Safety Engineering'),(611,10,19,1,'Eng\'G Design, Research & Dev\'T 1'),(612,10,19,1,'CISCO 4');
/*!40000 ALTER TABLE `tblclasses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblclassschedules`
--

DROP TABLE IF EXISTS `tblclassschedules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblclassschedules` (
  `CSchedID` int(11) NOT NULL AUTO_INCREMENT,
  `ClassID` int(11) DEFAULT NULL,
  `DayID` int(11) DEFAULT NULL,
  `TimeOfStart` time DEFAULT NULL,
  `TimeOfEnd` time DEFAULT NULL,
  PRIMARY KEY (`CSchedID`),
  KEY `ClassID` (`ClassID`),
  KEY `DayID` (`DayID`),
  CONSTRAINT `tblclassschedules_ibfk_1` FOREIGN KEY (`ClassID`) REFERENCES `tblclasses` (`ClassID`) ON DELETE CASCADE,
  CONSTRAINT `tblclassschedules_ibfk_2` FOREIGN KEY (`DayID`) REFERENCES `tbldays` (`DayID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblclassschedules`
--

LOCK TABLES `tblclassschedules` WRITE;
/*!40000 ALTER TABLE `tblclassschedules` DISABLE KEYS */;
INSERT INTO `tblclassschedules` VALUES (1,1,1,'13:00:00','16:00:00'),(2,2,4,'13:00:00','16:00:00'),(4,4,4,'09:00:00','12:00:00'),(5,5,3,'13:00:00','16:00:00'),(7,7,6,'10:30:00','12:30:00'),(8,7,6,'13:00:00','15:00:00'),(9,8,1,'16:00:00','19:00:00'),(10,9,1,'10:30:00','12:00:00'),(11,10,3,'13:00:00','16:00:00'),(12,11,5,'09:00:00','12:00:00'),(13,12,1,'13:00:00','16:00:00'),(14,13,3,'09:00:00','12:00:00'),(15,14,4,'09:00:00','12:00:00'),(17,16,6,'10:30:00','12:30:00'),(18,17,6,'13:00:00','16:00:00'),(19,18,5,'14:30:00','16:00:00'),(21,20,3,'16:00:00','17:30:00'),(22,21,6,'07:30:00','10:30:00'),(23,22,5,'16:00:00','19:00:00'),(24,23,1,'09:00:00','12:00:00'),(25,24,4,'13:00:00','16:00:00'),(26,25,2,'13:00:00','16:00:00'),(27,26,1,'13:00:00','16:00:00'),(28,27,2,'09:00:00','12:00:00'),(29,28,4,'16:00:00','17:30:00'),(30,29,6,'15:00:00','17:00:00'),(31,30,4,'17:30:00','19:00:00'),(32,31,6,'13:30:00','15:00:00'),(33,32,4,'09:00:00','12:00:00'),(34,33,3,'09:00:00','12:00:00'),(35,34,2,'16:00:00','19:00:00'),(36,35,2,'13:00:00','16:00:00'),(37,36,4,'08:00:00','09:00:00'),(38,37,6,'12:00:00','13:30:00');
/*!40000 ALTER TABLE `tblclassschedules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblclasssubjects`
--

DROP TABLE IF EXISTS `tblclasssubjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblclasssubjects` (
  `CSubjID` int(11) NOT NULL AUTO_INCREMENT,
  `ClassID` int(11) DEFAULT NULL,
  `SubjectID` int(11) DEFAULT NULL,
  PRIMARY KEY (`CSubjID`),
  KEY `ClassID` (`ClassID`),
  KEY `SubjectID` (`SubjectID`),
  CONSTRAINT `tblclasssubjects_ibfk_1` FOREIGN KEY (`ClassID`) REFERENCES `tblclasses` (`ClassID`) ON DELETE CASCADE,
  CONSTRAINT `tblclasssubjects_ibfk_2` FOREIGN KEY (`SubjectID`) REFERENCES `tblcoursesubjects` (`SubjectID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=631 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblclasssubjects`
--

LOCK TABLES `tblclasssubjects` WRITE;
/*!40000 ALTER TABLE `tblclasssubjects` DISABLE KEYS */;
INSERT INTO `tblclasssubjects` VALUES (1,1,111),(2,1,65),(3,2,67),(4,2,112),(6,4,113),(7,5,115),(9,7,114),(10,8,118),(11,9,34),(12,9,119),(13,10,156),(14,10,220),(15,11,157),(16,11,221),(17,12,158),(18,12,222),(19,13,223),(20,14,224),(23,16,163),(24,16,226),(25,17,164),(26,17,227),(27,18,159),(29,20,161),(30,21,76),(31,21,128),(32,22,129),(33,23,130),(34,24,131),(35,24,77),(36,25,59),(37,25,133),(38,26,134),(39,27,52),(40,27,64),(41,28,60),(42,29,61),(43,30,62),(44,31,63),(45,32,142),(46,32,78),(47,33,143),(48,33,79),(49,34,144),(50,35,145),(51,35,141),(52,36,80),(53,36,146),(54,37,75),(56,39,132),(57,40,66),(58,40,135),(60,42,31),(64,46,87),(65,47,147),(66,48,148),(67,49,149),(68,50,150),(69,51,151),(70,52,152),(71,53,153),(72,54,154),(73,55,155),(74,56,215),(75,57,216),(76,58,217),(77,59,20),(78,60,21),(79,61,22),(80,62,23),(81,63,24),(82,64,25),(83,65,26),(84,66,27),(85,67,103),(86,68,104),(87,69,105),(88,70,106),(89,71,107),(90,72,35),(91,73,36),(92,74,37),(93,75,38),(94,76,39),(95,77,40),(96,78,41),(97,79,42),(98,80,120),(99,81,121),(100,82,122),(101,83,123),(102,84,124),(103,85,125),(104,86,126),(105,87,51),(106,88,52),(107,89,53),(108,90,54),(109,91,55),(110,92,56),(111,93,57),(112,94,58),(113,95,136),(114,96,137),(115,97,138),(116,98,139),(117,99,140),(118,100,132),(119,101,67),(120,102,68),(121,103,69),(122,104,70),(123,105,71),(124,106,72),(125,107,73),(126,108,141),(127,109,10),(128,110,11),(129,111,12),(130,112,13),(131,113,14),(132,114,15),(133,115,16),(134,116,17),(135,117,18),(136,118,19),(137,119,92),(138,120,93),(139,121,94),(140,122,95),(141,123,96),(142,124,98),(143,125,99),(144,126,28),(145,127,29),(146,128,30),(147,129,31),(148,130,32),(149,131,33),(150,132,34),(151,133,111),(152,134,112),(153,135,113),(154,136,114),(155,137,115),(156,138,118),(157,139,43),(158,140,44),(159,141,45),(160,142,46),(161,143,47),(162,144,48),(163,145,49),(164,146,50),(165,147,128),(166,148,129),(167,149,130),(168,150,131),(169,151,132),(170,152,133),(171,153,134),(172,154,59),(173,155,60),(174,156,61),(175,157,62),(176,158,63),(177,159,64),(178,160,65),(179,161,142),(180,162,143),(181,163,144),(182,164,145),(183,165,146),(184,166,75),(185,167,76),(186,168,77),(187,169,78),(188,170,79),(189,171,80),(190,172,1),(191,173,2),(192,174,3),(193,175,4),(194,176,5),(195,177,6),(196,178,7),(197,179,8),(198,180,9),(199,181,84),(200,182,85),(201,183,86),(202,184,87),(203,185,20),(204,186,21),(205,187,22),(206,188,23),(207,189,24),(208,190,25),(209,191,26),(210,192,27),(211,193,103),(212,194,104),(213,195,105),(214,196,106),(215,197,107),(216,198,35),(217,199,36),(218,200,37),(219,201,38),(220,202,39),(221,203,40),(222,204,41),(223,205,42),(224,206,120),(225,207,121),(226,208,122),(227,209,123),(228,210,124),(229,211,125),(230,212,126),(231,213,51),(232,214,52),(233,215,53),(234,216,54),(235,217,55),(236,218,56),(237,219,57),(238,220,58),(239,221,136),(240,222,137),(241,223,138),(242,224,139),(243,225,140),(244,226,132),(245,227,67),(246,228,68),(247,229,69),(248,230,70),(249,231,71),(250,232,72),(251,233,73),(252,234,141),(253,235,10),(254,236,11),(255,237,12),(256,238,13),(257,239,14),(258,240,15),(259,241,16),(260,242,17),(261,243,18),(262,244,19),(263,245,92),(264,246,93),(265,247,94),(266,248,95),(267,249,96),(268,250,98),(269,251,99),(270,252,28),(271,253,29),(272,254,30),(273,255,31),(274,256,32),(275,257,33),(276,258,34),(277,259,111),(278,260,112),(279,261,113),(280,262,114),(281,263,115),(282,264,118),(283,265,43),(284,266,44),(285,267,45),(286,268,46),(287,269,47),(288,270,48),(289,271,49),(290,272,50),(291,273,128),(292,274,129),(293,275,130),(294,276,131),(295,277,132),(296,278,133),(297,279,134),(298,280,59),(299,281,60),(300,282,61),(301,283,62),(302,284,63),(303,285,64),(304,286,65),(305,287,142),(306,288,143),(307,289,144),(308,290,145),(309,291,146),(310,292,75),(311,293,76),(312,294,77),(313,295,78),(314,296,79),(315,297,80),(316,298,1),(317,299,2),(318,300,3),(319,301,4),(320,302,5),(321,303,6),(322,304,7),(323,305,8),(324,306,9),(325,307,84),(326,308,85),(327,309,86),(328,310,87),(329,311,20),(330,312,21),(331,313,22),(332,314,23),(333,315,24),(334,316,25),(335,317,26),(336,318,27),(337,319,103),(338,320,104),(339,321,105),(340,322,106),(341,323,107),(342,324,35),(343,325,36),(344,326,37),(345,327,38),(346,328,39),(347,329,40),(348,330,41),(349,331,42),(350,332,120),(351,333,121),(352,334,122),(353,335,123),(354,336,124),(355,337,125),(356,338,126),(357,339,51),(358,340,52),(359,341,53),(360,342,54),(361,343,55),(362,344,56),(363,345,57),(364,346,58),(365,347,136),(366,348,137),(367,349,138),(368,350,139),(369,351,140),(370,352,132),(371,353,67),(372,354,68),(373,355,69),(374,356,70),(375,357,71),(376,358,72),(377,359,73),(378,360,141),(379,361,10),(380,362,11),(381,363,12),(382,364,13),(383,365,14),(384,366,15),(385,367,16),(386,368,17),(387,369,18),(388,370,19),(389,371,92),(390,372,93),(391,373,94),(392,374,95),(393,375,96),(394,376,98),(395,377,99),(396,378,28),(397,379,29),(398,380,30),(399,381,31),(400,382,32),(401,383,33),(402,384,34),(403,385,111),(404,386,112),(405,387,113),(406,388,114),(407,389,115),(408,390,118),(409,391,43),(410,392,44),(411,393,45),(412,394,46),(413,395,47),(414,396,48),(415,397,49),(416,398,50),(417,399,128),(418,400,129),(419,401,130),(420,402,131),(421,403,132),(422,404,133),(423,405,134),(424,406,59),(425,407,60),(426,408,61),(427,409,62),(428,410,63),(429,411,64),(430,412,65),(431,413,142),(432,414,143),(433,415,144),(434,416,145),(435,417,146),(436,418,75),(437,419,76),(438,420,77),(439,421,78),(440,422,79),(441,423,80),(442,424,1),(443,425,2),(444,426,3),(445,427,4),(446,428,5),(447,429,6),(448,430,7),(449,431,8),(450,432,9),(451,433,84),(452,434,85),(453,435,86),(454,436,87),(455,437,20),(456,438,21),(457,439,22),(458,440,23),(459,441,24),(460,442,25),(461,443,26),(462,444,27),(463,445,103),(464,446,104),(465,447,105),(466,448,106),(467,449,107),(468,450,35),(469,451,36),(470,452,37),(471,453,38),(472,454,39),(473,455,40),(474,456,41),(475,457,42),(476,458,120),(477,459,121),(478,460,122),(479,461,123),(480,462,124),(481,463,125),(482,464,126),(483,465,51),(484,466,52),(485,467,53),(486,468,54),(487,469,55),(488,470,56),(489,471,57),(490,472,58),(491,473,136),(492,474,137),(493,475,138),(494,476,139),(495,477,140),(496,478,132),(497,479,67),(498,480,68),(499,481,69),(500,482,70),(501,483,71),(502,484,72),(503,485,73),(504,486,141),(505,487,10),(506,488,11),(507,489,12),(508,490,13),(509,491,14),(510,492,15),(511,493,16),(512,494,17),(513,495,18),(514,496,19),(515,497,92),(516,498,93),(517,499,94),(518,500,95),(519,501,96),(520,502,98),(521,503,99),(522,504,28),(523,505,29),(524,506,30),(525,507,31),(526,508,32),(527,509,33),(528,510,34),(529,511,111),(530,512,112),(531,513,113),(532,514,114),(533,515,115),(534,516,118),(535,517,43),(536,518,44),(537,519,45),(538,520,46),(539,521,47),(540,522,48),(541,523,49),(542,524,50),(543,525,128),(544,526,129),(545,527,130),(546,528,131),(547,529,132),(548,530,133),(549,531,134),(550,532,59),(551,533,60),(552,534,61),(553,535,62),(554,536,63),(555,537,64),(556,538,65),(557,539,142),(558,540,143),(559,541,144),(560,542,145),(561,543,146),(562,544,75),(563,545,76),(564,546,77),(565,547,78),(566,548,79),(567,549,80),(568,550,1),(569,551,2),(570,552,3),(571,553,4),(572,554,5),(573,555,6),(574,556,7),(575,557,8),(576,558,9),(577,559,84),(578,560,85),(579,561,86),(580,562,87),(581,563,20),(582,564,21),(583,565,22),(584,566,23),(585,567,24),(586,568,25),(587,569,26),(588,570,27),(589,571,103),(590,572,104),(591,573,105),(592,574,106),(593,575,107),(594,576,35),(595,577,36),(596,578,37),(597,579,38),(598,580,39),(599,581,40),(600,582,41),(601,583,42),(602,584,120),(603,585,121),(604,586,122),(605,587,123),(606,588,124),(607,589,125),(608,590,126),(609,591,51),(610,592,52),(611,593,53),(612,594,54),(613,595,55),(614,596,56),(615,597,57),(616,598,58),(617,599,136),(618,600,137),(619,601,138),(620,602,139),(621,603,140),(622,604,132),(623,605,67),(624,606,68),(625,607,69),(626,608,70),(627,609,71),(628,610,72),(629,611,73),(630,612,141);
/*!40000 ALTER TABLE `tblclasssubjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblclasstypes`
--

DROP TABLE IF EXISTS `tblclasstypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblclasstypes` (
  `TypeID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`TypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblclasstypes`
--

LOCK TABLES `tblclasstypes` WRITE;
/*!40000 ALTER TABLE `tblclasstypes` DISABLE KEYS */;
INSERT INTO `tblclasstypes` VALUES (1,'Regular'),(2,'Merged'),(3,'Tutorial');
/*!40000 ALTER TABLE `tblclasstypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcourses`
--

DROP TABLE IF EXISTS `tblcourses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblcourses` (
  `CourseID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(255) DEFAULT NULL,
  `Acronym` varchar(50) DEFAULT NULL,
  `TotalYrs` int(5) DEFAULT NULL,
  `CurriculumYear` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CourseID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcourses`
--

LOCK TABLES `tblcourses` WRITE;
/*!40000 ALTER TABLE `tblcourses` DISABLE KEYS */;
INSERT INTO `tblcourses` VALUES (1,'Bachelor of Science in Computer Engineering','BSCpE',5,'S.Y. 2008-2009'),(2,'Bachelor of Science in Information Technology','BSIT',4,'S.Y. 2008-2009'),(3,'Bachelor of Science in Computer Engineering','BSCpE',4,'S.Y. 2018-2019'),(4,'Bachelor of Science in Information Technology','BSIT',4,'S.Y. 2018-2019'),(5,'dfgdfg','dfgdfg',1,'dfgdfgdf');
/*!40000 ALTER TABLE `tblcourses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcoursesubjects`
--

DROP TABLE IF EXISTS `tblcoursesubjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblcoursesubjects` (
  `SubjectID` int(11) NOT NULL AUTO_INCREMENT,
  `CourseID` int(11) DEFAULT NULL,
  `SemesterID` int(11) DEFAULT NULL,
  `YearLevelID` int(11) DEFAULT NULL,
  `SubjectCode` varchar(20) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Units` int(11) DEFAULT NULL,
  `LecHrs` int(11) DEFAULT NULL,
  `LabHrs` int(11) DEFAULT NULL,
  PRIMARY KEY (`SubjectID`),
  KEY `CourseID` (`CourseID`),
  KEY `SemesterID` (`SemesterID`),
  KEY `YearLevelID` (`YearLevelID`),
  CONSTRAINT `tblcoursesubjects_ibfk_1` FOREIGN KEY (`CourseID`) REFERENCES `tblcourses` (`CourseID`) ON DELETE CASCADE,
  CONSTRAINT `tblcoursesubjects_ibfk_2` FOREIGN KEY (`SemesterID`) REFERENCES `tblsemesters` (`SemesterID`) ON DELETE CASCADE,
  CONSTRAINT `tblcoursesubjects_ibfk_3` FOREIGN KEY (`YearLevelID`) REFERENCES `tblyearlevels` (`YearLevelID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=267 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcoursesubjects`
--

LOCK TABLES `tblcoursesubjects` WRITE;
/*!40000 ALTER TABLE `tblcoursesubjects` DISABLE KEYS */;
INSERT INTO `tblcoursesubjects` VALUES (1,1,1,1,'ENG 111','Communication Skills 1',3,3,0),(2,1,1,1,'MAT 111','College Algebra',3,3,0),(3,1,1,1,'MAT 112','Plane & Spherical Trigonometry',3,3,0),(4,1,1,1,'CPE 111','General Inorganic Chemistry',4,2,1),(5,1,1,1,'DFT 111','Engineering Drawing 1',2,0,6),(6,1,1,1,'COM 111','Computer Fundamentals & Programming',3,2,3),(7,1,1,1,'FIL 111','Sining ng Pakikipagtalastasan',3,3,0),(8,1,1,1,'PED 111','Physical Fitness / Gymnastics',2,0,0),(9,1,1,1,'NSTP 111','National Service Training Program 1',3,0,0),(10,1,2,1,'ENG 112','Communication Skills 2',3,3,0),(11,1,2,1,'MAT 123','Analytic Geometry',2,2,0),(12,1,2,1,'FIL 122','Gamiting Filipino',3,3,0),(13,1,2,1,'MAT 125','Advance Algebra',2,2,0),(14,1,2,1,'MAT 124','Solid Mensuration',2,2,0),(15,1,2,1,'RIZ 125','Rizal\'s Life, Works & Writings',3,3,0),(16,1,2,1,'DFT 122','Computer Aided Drafting',2,0,6),(17,1,2,1,'PED 122','Rhythmic Activities',2,0,0),(18,1,2,1,'NSTP 122','National Service Training Program 2',3,0,0),(19,1,2,1,'HUM 121','Philosophy of Man',3,3,0),(20,1,1,2,'ENG 213','Technical Communications',3,3,0),(21,1,1,2,'MAT 216','Differential Calculus',4,4,0),(22,1,1,2,'PHY 211','General Physics 1',4,3,3),(23,1,1,2,'SS 212','Economics w/ Land Reform and Taxation',3,3,0),(24,1,1,2,'SS 211','Philippine History & Culture',3,3,0),(25,1,1,2,'CPE 211','Computer Hardware Fundamentals',1,0,3),(26,1,1,2,'PED 223','Specialized Athletics',2,0,0),(27,1,1,2,'HUM 212','Art Appreciation',3,3,0),(28,1,2,2,'MAT 228','Statistics and Probabilities',3,3,0),(29,1,2,2,'MAT 227','Integral Calculus',4,4,0),(30,1,2,2,'PHY 222','General Physics 2',4,3,3),(31,1,2,2,'COM 222','Data Structure & Algorithm Analysis',4,3,3),(32,1,2,2,'SS 222','General Psychology',3,3,0),(33,1,2,2,'HUM 223','Philippine Literature',3,3,0),(34,1,2,2,'PED 224','Group Games',2,0,0),(35,1,1,3,'MAT 310','Engineering Economy',3,3,0),(36,1,1,3,'MAT 319','Different Equations',3,3,0),(37,1,1,3,'EGR 311','Statics of Rigid Bodies',3,3,0),(38,1,1,3,'ECA 311','Circuit Analysis 1',4,3,3),(39,1,1,3,'EGR 312','Electromagnetics',3,3,0),(40,1,1,3,'ECE 311','Electronics 1',4,3,3),(41,1,1,3,'CPE 312','Computer Systems Organization w/ Assembly Language',4,2,3),(42,1,1,3,'MAT 311','Discrete Mathematics',3,3,0),(43,1,2,3,'MAT 322','Advance Engineering Mathematics',3,3,0),(44,1,2,3,'EGR 322','Dynamics of Rigid Bodies',2,2,0),(45,1,2,3,'EGR 323','Engineering Materials',3,3,0),(46,1,2,3,'NT 321','CISCO 1',3,2,3),(47,1,2,3,'ECE 322','Electronics 2',4,3,3),(48,1,2,3,'ECA 322','Circuit Analysis 2',4,3,3),(49,1,2,3,'CPE 323','Logic Circuit & Switching Theory',4,3,3),(50,1,2,3,'CPE 324','Operating System',4,3,3),(51,1,1,4,'MAT 413','Numerical Analysis w/ Computer Application',3,2,3),(52,1,1,4,'NT 412','CISCO 2',3,2,3),(53,1,1,4,'ECM 411','Principles of Communication',3,3,0),(54,1,1,4,'CPE 416','Advance Logic Circuit & Switching Theory',4,3,3),(55,1,1,4,'EGR 414','Control Systems',4,3,3),(56,1,1,4,'EGR 415','Mechanics of Deformable Bodies',3,3,0),(57,1,1,4,'CPE 415','Digital Signal Processing',4,3,3),(58,1,1,4,'CPE 417','Computer Engineering Drafting and Design',1,0,3),(59,1,2,4,'SS 524','Society & Culture w/ HIV Aids Education',3,3,0),(60,1,2,4,'CPE 427','Microprocessor & Microcontroller Systems',4,3,3),(61,1,2,4,'CPE 428','Data Communications',3,3,3),(62,1,2,4,'CPE 424','Computer System Architecture',4,3,3),(63,1,2,4,'ENV 421','Environmental Engineering',2,2,0),(64,2,2,3,'FEL 322','CISCO 2',3,2,3),(65,1,2,4,'EL 421','Elective 1',3,2,3),(66,1,3,4,'OJT 231','Practicum',3,0,240),(67,1,1,5,'COM 515','System Analysis & Design',3,3,0),(68,1,1,5,'COM 516','Object Oriented Programming',3,2,3),(69,1,1,5,'ETH 511','Engineering Ethics and Computer Laws',2,2,0),(70,1,1,5,'CPE 510','Computer Networks',4,3,3),(71,1,1,5,'EEL 512','Elective 2',3,2,3),(72,1,1,5,'SAF 521','Safety Engineering',2,2,0),(73,1,1,5,'EDR 511','Engineering Design, Research & Dev\'t 1',2,2,0),(74,1,2,4,'NT 423','CISCO 3',3,2,3),(75,1,2,5,'EGR 528','Engineering Management',3,3,0),(76,1,2,5,'COM 527','Software Engineering',3,2,3),(77,1,2,5,'ENT 521','Entrepreneurship',3,3,0),(78,1,2,5,'EDR 522','Engineering Design, Research & Dev\'t 2',2,0,6),(79,1,2,5,'WWL 523','Elective 3',3,2,3),(80,1,2,5,'SFT 521','Seminars & Field Trip',1,0,3),(81,2,1,1,'ENG 111','Communication Skills 1',3,3,0),(82,2,1,1,'FIL 111','Komunikasyon sa Akademikong Filipino',3,3,0),(83,2,1,1,'MAT 111','College Algebra',3,3,0),(84,2,1,1,'IT 110','IT Fundamentals',3,2,1),(85,2,1,1,'IT 111','Programming 1 (C+)',3,2,1),(86,2,1,1,'TVET 111','Office Productivity',3,2,1),(87,2,1,1,'SS 111','General Psychology',3,3,0),(88,2,1,1,'NS 111','General Inorganic Chemistry',3,2,1),(89,2,1,1,'PE 111','Gymnastics',3,0,0),(90,2,1,1,'NSTP 111','National Service Training Program 1',2,0,0),(91,2,2,1,'ENG 112','Communication Skills 2',3,3,0),(92,2,2,1,'FIL 122','Pagbasa at Pagsulat Tungo sa Pananaliksik',3,3,0),(93,2,2,1,'MAT 112','Trigonometry',3,3,0),(94,2,2,1,'IT 122','Programming 2 (C++)',3,2,1),(95,2,2,1,'IT 223','Applied Operating System',3,2,1),(96,2,2,1,'TVET 122','Quality Consciousness, Habits and Processes',3,3,0),(97,2,2,1,'DFT 122','Computer Aided Drafting',2,0,2),(98,2,2,1,'HUM 121','Philosophy of Man',3,3,0),(99,2,2,1,'NS 212','General Physics 1',3,3,0),(100,2,2,1,'PE 122','Rhythmic Activities',2,0,0),(101,2,2,1,'NSTP 122','National Service Training Program 2',3,0,0),(102,2,1,2,'ENG 213','Technical Communications',3,3,0),(103,2,1,2,'FIL 213','Masining na Pagpapahayag',3,3,0),(104,2,1,2,'IT 214','Computer System Organization',3,2,1),(105,2,1,2,'IT 211','Object Oriented Programming (Visual Basic)',3,2,1),(106,2,1,2,'IT 212','Data Structure & Algorithm Analysis',3,2,1),(107,2,1,2,'ACC 211','Fundamentals of Accounting',3,3,0),(108,2,1,2,'SS 212','Economics w/ Land Reform and Taxation',3,3,0),(109,2,1,2,'HUM 212','Art Appreciation',3,3,0),(110,2,1,2,'PE 213','Specialized Athletics',2,0,0),(111,2,2,2,'IT 225','Database Management System',3,2,1),(112,2,2,2,'IT 226','System Analysis & Design',3,2,1),(113,2,2,2,'IT 227','Network Management',3,2,1),(114,2,2,2,'LDS 121','Logic Design and Switching Theory',4,2,2),(115,2,2,2,'FEL 221','Free Elective (SAP)',3,2,1),(116,2,2,2,'MAT 223','Probability & Statistics',3,3,0),(117,2,2,2,'NS 222','General Physics 2',3,2,1),(118,2,2,2,'SS 223','Philippine History',3,3,0),(119,2,2,2,'PE 224','Group Games',2,0,0),(120,2,1,3,'IT 317','Web Development',3,2,1),(121,2,1,3,'IT 318','Data Communications',3,2,1),(122,2,1,3,'EEL 311','IT Elective 1 (MIS)',3,2,1),(123,2,1,3,'FEL 312','CISCO 1',3,2,1),(124,2,1,3,'RIZ 311','Rizal\'s Life, Works & Writings',3,3,0),(125,2,1,3,'SS 313','Philippine Government & Constitution',3,3,0),(126,2,1,3,'HUM 314','Philippine Literature',3,3,0),(127,2,1,3,'MAT 314','Discrete Mathematics',3,3,0),(128,2,2,3,'IT 323','Software Engineering',3,2,1),(129,2,2,3,'IT 324','Multimedia System',3,2,1),(130,2,2,3,'IT 322','Advance Database Management Systems',3,2,1),(131,2,2,3,'TEC 311','Technopreneurship',3,2,1),(132,2,1,4,'FEL 414','CISCO 3',3,2,1),(133,2,2,3,'SS 325','Society & Culture w/ HIV Aids Education',3,3,0),(134,2,2,3,'EEL 322','IT Elective 2 (Network Administration)',3,2,1),(135,2,3,3,'OJT 411','Practicum',9,0,500),(136,2,1,4,'SS 415','Professional Ethics in IT',3,3,0),(137,2,1,4,'IT 415','Database Administration',3,2,1),(138,2,1,4,'IT 417','Computer System Architecture',3,2,1),(139,2,1,4,'IT 418','Information Technology Design 1 (Thesis 1)',3,1,2),(140,2,1,4,'EEL 423','IT Elective 3 (E-Business)',3,2,1),(141,1,1,5,'NT 514','CISCO 4',3,2,1),(142,2,2,4,'IT 428','Information Technology Design 2 (Thesis 2)',3,1,2),(143,2,2,4,'EEL 424','IT Elective 4 (IT Project Management)',3,2,1),(144,2,2,4,'TVET 423','Contact Center',3,2,1),(145,2,2,4,'FEL 425','CISCO 4',3,0,0),(146,2,2,4,'SFT 421','Seminars & Field Trip',1,0,0),(147,3,1,1,'GE 111','Understanding The Self ',3,3,0),(148,3,1,1,'GE 112','Mathematics In The Modern World',3,3,0),(149,3,1,1,'GE 113','Science, Technology And Society',3,3,0),(150,3,1,1,'MAT 111','Calculus 1',3,3,0),(151,3,1,1,'NS 111','Chemistry For Engineers',4,3,1),(152,3,1,1,'CPE 111','Computer Engineering As A Discipline ',1,1,0),(153,3,1,1,'IT 111','Programming Logic And Design',2,0,2),(154,3,1,1,'PE 111','Physical Fitness/Gymnastics',2,2,0),(155,3,1,1,'NSTP 1','Cwts 1',3,3,0),(156,3,2,1,'GE 124','Purposive Communication',3,3,0),(157,3,2,1,'GE 125','Readings In The Philippines',3,3,0),(158,3,2,1,'GE 126','Arts Appreciation',3,3,0),(159,3,2,1,'MAT 122','Calculus 2',3,3,0),(160,3,2,1,'NS 122','Physics For Engineers',3,3,1),(161,3,2,1,'IT 122','Object Oriented Programming',3,0,2),(162,3,2,1,'MAT 123','Discrete Mathematics',3,3,0),(163,3,2,1,'PE 122','Rhythmic Activities (Dance)',3,2,0),(164,3,2,1,'NSTP 2','Cwts 2',3,3,0),(165,3,1,2,'RIZ 211','Rizal\'S Life, Works And Writing',3,3,0),(166,3,1,2,'GE 217','The Contemporary World ',3,3,0),(167,3,1,2,'GE 218','Ethics',3,3,0),(168,3,1,2,'MAT 214','Differential Equations',3,3,0),(169,3,1,2,'CPE 212','Engineering Data Analysis',3,3,0),(170,3,1,2,'IT 213','Data Structures & Algorithms',2,0,2),(171,3,1,2,'TECH 211','Fundamentals Of Electrical Circuit',4,3,1),(172,3,1,2,'DFT 211','Computer Aided Drafting',1,0,1),(173,3,1,2,'CPE 213','Engineering Economics',3,3,0),(174,3,1,2,'PE 213','Specialized Atheletic',2,2,0),(175,3,2,2,'IT 224','Operating Systems',3,3,0),(176,3,2,2,'MAT 225','Numerical Methods',3,3,0),(177,3,2,2,'IT 225','Software Design',4,3,1),(178,3,2,2,'TECH 222','Fundamentals Of Electronic Circuits',4,3,1),(179,3,2,2,'GE 126','Arts Appreciation',3,3,0),(180,3,2,2,'DFT 222','Computer Eng\'G Drafting & Design',1,0,1),(181,3,2,2,'PE 224','Group Games',2,2,0),(182,3,2,2,'CIS 01','CISCO 1',3,3,0),(183,3,1,3,'GE 218','Ethics',3,3,0),(184,3,1,3,'TECH 313','Logic Circuit And Design',4,3,1),(185,3,1,3,'GEE 311','Human Behavior In Organization',3,3,0),(186,3,1,3,'DDC 311','Data & Digital Communications',3,3,0),(187,3,1,3,'HDL 311','Introduction To Hdl ',1,0,1),(188,3,1,3,'FCS 311','Feedback & Control Systems',3,3,0),(189,3,1,3,'MSS 311','Fundamentals Of Mixed Signals & Sensors',3,3,0),(190,3,1,3,'GEE 312','Retorika',3,3,0),(191,3,1,3,'CIS 02','CISCO 2',3,3,0),(192,3,2,3,'OHS 321','Basic Occupational Health & Safety',3,3,0),(193,3,2,3,'IT 326','Computer Networks & Security',4,3,3),(194,3,2,3,'TECH 324','Microprocessors',4,3,3),(195,3,2,3,'RES 321','Methods Of Research',2,2,0),(196,3,2,3,'ENT 321','Technopreneurship',3,3,0),(197,3,2,3,'CPE 324','Cpe Laws & Professional Practice',2,2,0),(198,3,2,3,'FEL 321','Software Development 1',3,3,0),(199,3,2,3,'GEE 323','General Inorganic Chemistry',3,3,0),(200,3,2,3,'CIS 03','CISCO 3',3,3,0),(201,3,1,4,'EMB 411','Embedded Systems',4,3,3),(202,3,1,4,'IT 417','Computer Architecture & Organization',4,3,3),(203,3,1,4,'CPE 415','Emerging Technologies In Cpe',3,3,0),(204,3,1,4,'DSP 411','Digital Signal Processing',4,3,3),(205,3,1,4,'CPE 416','Cpe Practice And Design 1',1,0,3),(206,3,1,4,'FEL 412','Software Development 2',3,3,0),(207,3,1,4,'CIS 04','CISCO 4',3,3,0),(208,3,1,4,'CPE 427','Cpe Practice & Design',2,0,6),(209,3,1,4,'FEL 423','Software Development 3',3,3,0),(210,3,1,4,'SF 421','Seminars & Fieldtrip',1,0,3),(211,3,3,4,'','OJT',3,0,240),(212,4,1,1,'GE 111','Understanding The Self',3,3,0),(213,4,1,1,'GE 112','Mathematics In The Modern World',3,3,0),(214,4,1,1,'GE 113','Science, Technology And Society',3,3,0),(215,4,1,1,'IT 111','Computer Concepts And Fundamentals',3,3,0),(216,4,1,1,'PROG 111','Computer Programming 1 (C++)',3,2,1),(217,4,1,1,'IT 112','Introduction To Computing',3,3,0),(218,4,1,1,'PE 111','Physical Fitness/Gymnastics',2,2,0),(219,4,1,1,'NSTP 1','Cwts 1',3,3,0),(220,4,2,1,'GE 124','Purposive Communication',3,3,0),(221,4,2,1,'GE 125','Readings In The Philippines',3,3,0),(222,4,2,1,'GE 126','Arts Appreciation',3,3,0),(223,4,2,1,'PROG 122','Computer Programming 2 (Java)',3,2,1),(224,4,2,1,'IT 123','Intro To Human Interaction',3,3,0),(225,4,2,1,'MAT 121','Discrete Mathematics',3,3,0),(226,4,2,1,'PE 122','Rhythmic Activities (Dance)',2,2,0),(227,4,2,1,'NSTP 2','Cwts 2',3,3,0),(228,4,1,2,'RIZ 211','Rizal\'S Life, Works And Writing',3,3,0),(229,4,1,2,'GE 217','The Contemporary World',3,3,0),(230,4,1,2,'GE 218','Ethics',3,3,0),(231,4,1,2,'IT 214','Data Structures And Algorithm',3,2,1),(232,4,1,2,'ELE 211','Object Oriented Programming (Vb.Net)',3,2,1),(233,4,1,2,'IT 215','Application Development & Emerging Technologies',3,3,0),(234,4,1,2,'IAS 211','Information Assurance & Security 1',3,3,0),(235,4,1,2,'PE 213','Specialized Athletic',3,2,0),(236,4,2,2,'NET 221','Networking 1',3,2,1),(237,4,2,2,'IAS 222','Information Assurance & Security 2',3,3,0),(238,4,2,2,'IT 226','Platform Technologies',3,3,0),(239,4,2,2,'DBS 221','Fundamentals Of Database Systems',3,2,1),(240,4,2,2,'SAD 221','Systems Analysis & Design',3,1,2),(241,4,2,2,'TVET 221','Computer Systems Servicing',3,1,2),(242,4,2,2,'PE 224','Group Games',2,2,0),(243,4,2,2,'CIS 01','CISCO 1',3,1,2),(244,4,1,3,'NET 312','Networking 2',3,2,1),(245,4,1,3,'IM 311','Information Management',3,2,1),(246,4,1,3,'ELE','Web Systems & Technology ',3,2,1),(247,4,1,3,'SIA 311','Systems Integration & Architecture 1',3,2,1),(248,4,1,3,'IPT 311','Integrative Programming & Technologies 1',3,2,1),(249,4,1,3,'GEE 313','Human Behavior In Organization',3,3,0),(250,4,1,3,'GEE 312','Retorika',3,3,0),(251,4,1,3,'CIS 02','CISCO 2',3,1,2),(252,4,2,3,'THESIS 1','Capstone Project And Research 1',3,1,2),(253,4,2,3,'IT 327','System Administration & Maintenance',3,3,0),(254,4,2,3,'SS','Social And Professional Issues',3,3,0),(255,4,2,3,'IT 328','Quantitative Methods (Inc. Modeling & Simulation)',3,3,0),(256,4,2,3,'CAD 321','Computer Aided Drafting',2,0,2),(257,4,2,3,'GEE 323','General Inorganic Chemistry',3,2,1),(258,4,2,3,'CIS 03','CISCO 3',3,1,2),(259,4,2,3,'SAP 01','SAP 1',3,1,2),(260,4,1,4,'THESIS 2','Capstone Project And Research 2',3,1,2),(261,4,1,4,'TVET 412','Contact Center Services',3,2,1),(262,4,1,4,'GE 410','Technical Writing ',0,0,0),(263,4,1,4,'TEC 411','Technopreneurship',3,3,0),(264,4,1,4,'CIS 04','CISCO 4',3,1,2),(265,4,1,4,'SAP 02','SAP 2',3,1,2),(266,4,3,4,'','Practicum/OJT',6,0,500);
/*!40000 ALTER TABLE `tblcoursesubjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbldays`
--

DROP TABLE IF EXISTS `tbldays`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbldays` (
  `DayID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`DayID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbldays`
--

LOCK TABLES `tbldays` WRITE;
/*!40000 ALTER TABLE `tbldays` DISABLE KEYS */;
INSERT INTO `tbldays` VALUES (1,'Monday'),(2,'Tuesday'),(3,'Wednesday'),(4,'Thursday'),(5,'Friday'),(6,'Saturday'),(7,'Sunday');
/*!40000 ALTER TABLE `tbldays` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbldegrees`
--

DROP TABLE IF EXISTS `tbldegrees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbldegrees` (
  `DegreeID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`DegreeID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbldegrees`
--

LOCK TABLES `tbldegrees` WRITE;
/*!40000 ALTER TABLE `tbldegrees` DISABLE KEYS */;
INSERT INTO `tbldegrees` VALUES (1,'Elementary'),(2,'Junior High School'),(3,'Senior High School'),(4,'Vocational Degree'),(5,'Associate Degree'),(6,'Baccalaureate Degree'),(7,'Masteral Degree'),(8,'Doctoral Degree');
/*!40000 ALTER TABLE `tbldegrees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbleducation`
--

DROP TABLE IF EXISTS `tbleducation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbleducation` (
  `EducationID` int(11) NOT NULL AUTO_INCREMENT,
  `PersonID` int(11) DEFAULT NULL,
  `DegreeID` int(11) DEFAULT NULL,
  `Institution` varchar(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `DegreeEarned` varchar(255) DEFAULT NULL,
  `DateStarted` date DEFAULT NULL,
  `DateEnded` date DEFAULT NULL,
  PRIMARY KEY (`EducationID`),
  KEY `PersonID` (`PersonID`),
  KEY `DegreeID` (`DegreeID`),
  CONSTRAINT `tbleducation_ibfk_1` FOREIGN KEY (`PersonID`) REFERENCES `tblpersons` (`PersonID`) ON DELETE CASCADE,
  CONSTRAINT `tbleducation_ibfk_2` FOREIGN KEY (`DegreeID`) REFERENCES `tbldegrees` (`DegreeID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbleducation`
--

LOCK TABLES `tbleducation` WRITE;
/*!40000 ALTER TABLE `tbleducation` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbleducation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblenrolledstudents`
--

DROP TABLE IF EXISTS `tblenrolledstudents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblenrolledstudents` (
  `EStudID` int(11) NOT NULL AUTO_INCREMENT,
  `DateEnrolled` date DEFAULT NULL,
  `STermID` int(11) DEFAULT NULL,
  `StudID` int(11) DEFAULT NULL,
  `YearLevelID` int(11) DEFAULT NULL,
  `AdmissionStatusID` int(11) DEFAULT NULL,
  `ScholasticStatusID` int(11) DEFAULT NULL,
  PRIMARY KEY (`EStudID`),
  KEY `STermID` (`STermID`),
  KEY `StudID` (`StudID`),
  KEY `YearLevelID` (`YearLevelID`),
  KEY `AdmissionStatusID` (`AdmissionStatusID`),
  KEY `ScholasticStatusID` (`ScholasticStatusID`),
  CONSTRAINT `tblenrolledstudents_ibfk_1` FOREIGN KEY (`STermID`) REFERENCES `tblschoolterms` (`STermID`) ON DELETE CASCADE,
  CONSTRAINT `tblenrolledstudents_ibfk_2` FOREIGN KEY (`StudID`) REFERENCES `tblstudents` (`StudID`) ON DELETE CASCADE,
  CONSTRAINT `tblenrolledstudents_ibfk_3` FOREIGN KEY (`YearLevelID`) REFERENCES `tblyearlevels` (`YearLevelID`) ON DELETE CASCADE,
  CONSTRAINT `tblenrolledstudents_ibfk_4` FOREIGN KEY (`AdmissionStatusID`) REFERENCES `tbladmissionstatus` (`AdmissionStatusID`) ON DELETE CASCADE,
  CONSTRAINT `tblenrolledstudents_ibfk_5` FOREIGN KEY (`ScholasticStatusID`) REFERENCES `tblscholasticstatus` (`ScholasticStatusID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=203 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblenrolledstudents`
--

LOCK TABLES `tblenrolledstudents` WRITE;
/*!40000 ALTER TABLE `tblenrolledstudents` DISABLE KEYS */;
INSERT INTO `tblenrolledstudents` VALUES (1,'2018-11-12',1,1,3,3,2),(2,'2018-11-12',1,2,1,3,1),(5,'2018-11-12',1,5,4,3,2),(6,'2018-11-12',1,6,1,3,1),(7,'2018-11-12',1,7,3,3,1),(8,'2018-11-12',1,8,1,3,1),(9,'2018-11-12',1,9,1,3,1),(10,'2018-11-12',1,10,4,3,2),(13,'2018-11-12',1,13,1,3,1),(14,'2018-11-12',1,14,1,3,1),(15,'2018-11-12',1,15,1,3,1),(16,'2018-11-12',1,16,3,3,2),(17,'2018-11-12',1,17,1,3,1),(18,'2018-11-12',1,18,4,3,2),(19,'2018-11-12',1,19,3,3,1),(20,'2018-11-12',1,20,4,3,2),(21,'2018-11-12',1,21,1,3,1),(22,'2018-11-12',1,22,4,3,2),(24,'2018-11-12',1,24,1,3,1),(25,'2018-11-12',1,25,4,3,1),(26,'2018-11-12',1,26,4,3,1),(27,'2018-11-12',1,27,4,3,2),(29,'2018-11-12',1,29,3,3,2),(31,'2018-11-12',1,31,2,3,2),(32,'2018-11-12',1,32,3,3,1),(33,'2018-11-12',1,33,4,3,1),(34,'2018-11-12',1,34,3,3,2),(35,'2018-11-12',1,35,3,3,2),(36,'2018-11-12',1,36,1,3,1),(38,'2018-11-12',1,38,4,3,1),(39,'2018-11-12',1,39,2,3,1),(40,'2018-11-12',1,40,3,3,1),(41,'2018-11-12',1,41,2,3,1),(42,'2018-11-12',1,42,4,3,1),(43,'2018-11-12',1,43,4,3,2),(44,'2018-11-12',1,44,1,3,1),(45,'2018-11-12',1,45,1,3,1),(46,'2018-11-12',1,46,4,3,2),(47,'2018-11-12',1,47,5,3,2),(48,'2018-11-12',1,48,2,3,2),(49,'2018-11-12',1,49,1,3,1),(50,'2018-11-12',1,50,2,3,1),(51,'2018-11-12',1,51,3,3,1),(52,'2018-11-12',1,52,1,3,1),(53,'2018-11-12',1,53,1,3,1),(54,'2018-11-12',1,54,3,3,1),(55,'2018-11-12',1,55,1,3,1),(56,'2018-11-12',1,56,4,3,1),(57,'2018-11-12',1,57,2,3,1),(58,'2018-11-12',1,58,1,3,1),(59,'2018-11-12',1,59,2,3,2),(60,'2018-11-12',1,60,1,3,1),(61,'2018-11-12',1,61,1,3,1),(62,'2018-11-12',1,62,1,3,1),(63,'2018-11-12',1,63,4,3,2),(64,'2018-11-12',1,64,1,3,1),(65,'2018-11-12',1,65,2,3,1),(66,'2018-11-12',1,66,1,3,1),(67,'2018-11-12',1,67,5,3,2),(72,'2018-06-11',2,1,3,3,2),(73,'2018-06-11',2,3,3,3,2),(74,'2018-06-11',2,7,3,3,1),(75,'2018-06-11',2,12,5,3,2),(76,'2018-06-11',2,16,3,3,2),(77,'2018-06-11',2,19,3,3,1),(78,'2018-06-11',2,20,3,3,2),(79,'2018-06-11',2,32,3,3,2),(80,'2018-06-11',2,35,3,3,2),(81,'2018-06-11',2,37,5,3,2),(82,'2018-06-11',2,40,3,3,1),(83,'2018-06-11',2,47,5,3,2),(84,'2018-06-11',2,51,3,3,1),(85,'2018-06-11',2,54,3,3,1),(86,'2018-06-11',2,67,5,2,2),(87,'2018-06-11',2,70,5,3,1),(88,'2017-11-06',2,71,5,3,1),(89,'2017-11-06',3,1,3,3,1),(90,'2017-11-06',3,3,3,3,1),(91,'2017-11-06',3,7,3,3,1),(92,'2017-11-06',3,12,4,3,1),(93,'2017-11-06',3,16,3,3,1),(94,'2017-11-06',3,19,3,3,1),(95,'2017-11-06',3,20,4,3,1),(96,'2017-11-06',3,32,3,3,1),(97,'2017-11-06',3,35,3,3,1),(98,'2017-11-06',3,37,4,3,1),(99,'2017-11-06',3,40,3,3,1),(100,'2017-11-06',3,47,4,3,1),(101,'2017-11-06',3,51,3,3,1),(102,'2017-11-06',3,54,3,3,1),(103,'2017-11-06',3,67,4,2,1),(104,'2017-11-06',3,70,4,3,1),(105,'2017-06-13',3,71,4,3,1),(106,'2017-06-13',4,1,3,3,1),(107,'2017-06-13',4,3,3,3,1),(108,'2017-06-13',4,7,3,3,1),(109,'2017-06-13',4,12,4,3,1),(110,'2017-06-13',4,16,3,3,1),(111,'2017-06-13',4,19,3,3,1),(112,'2017-06-13',4,20,4,3,1),(113,'2017-06-13',4,32,3,3,1),(114,'2017-06-13',4,35,3,3,1),(115,'2017-06-13',4,37,4,3,1),(116,'2017-06-13',4,40,3,3,1),(117,'2017-06-13',4,47,4,3,1),(118,'2017-06-13',4,51,3,3,1),(119,'2017-06-13',4,54,3,3,1),(120,'2017-06-13',4,67,4,2,1),(121,'2017-06-13',4,70,4,3,1),(122,'2016-11-07',4,71,4,3,1),(123,'2016-11-07',5,1,2,3,1),(124,'2016-11-07',5,3,2,3,1),(125,'2016-11-07',5,7,2,3,1),(126,'2016-11-07',5,12,3,3,1),(127,'2016-11-07',5,16,2,3,1),(128,'2016-11-07',5,19,2,3,1),(129,'2016-11-07',5,20,3,3,1),(130,'2016-11-07',5,32,2,3,1),(131,'2016-11-07',5,35,2,3,1),(132,'2016-11-07',5,37,3,3,1),(133,'2016-11-07',5,40,2,3,1),(134,'2016-11-07',5,47,3,3,1),(135,'2016-11-07',5,51,2,3,1),(136,'2016-11-07',5,54,2,3,1),(137,'2016-11-07',5,67,3,2,1),(138,'2016-11-07',5,70,3,3,1),(139,'2016-06-06',5,71,3,3,1),(140,'2016-06-06',6,1,2,2,1),(141,'2016-06-06',6,3,2,3,1),(142,'2016-06-06',6,7,2,3,1),(143,'2016-06-06',6,12,3,3,1),(144,'2016-06-06',6,16,2,3,1),(145,'2016-06-06',6,19,2,3,1),(146,'2016-06-06',6,20,2,3,1),(147,'2016-06-06',6,32,2,2,1),(148,'2016-06-06',6,35,2,2,1),(149,'2016-06-06',6,37,3,3,1),(150,'2016-06-06',6,40,2,3,1),(151,'2016-06-06',6,47,3,2,1),(152,'2016-06-06',6,51,2,3,1),(153,'2016-06-06',6,54,2,3,1),(154,'2016-06-06',6,67,3,2,1),(155,'2016-06-06',6,70,3,3,1),(156,'2015-11-09',6,71,3,3,1),(157,'2015-11-09',7,1,1,2,1),(158,'2015-11-09',7,3,1,3,1),(159,'2015-11-09',7,7,1,3,1),(160,'2015-11-09',7,12,2,3,1),(161,'2015-11-09',7,16,1,3,1),(162,'2015-11-09',7,19,1,3,1),(163,'2015-11-09',7,20,1,3,1),(164,'2015-11-09',7,32,1,2,1),(165,'2015-11-09',7,35,1,2,1),(166,'2015-11-09',7,37,2,3,1),(167,'2015-11-09',7,40,1,3,1),(168,'2015-11-09',7,47,2,2,1),(169,'2015-11-09',7,51,1,3,1),(170,'2015-11-09',7,54,1,3,1),(171,'2015-11-09',7,67,2,2,1),(172,'2015-11-09',7,70,2,3,1),(173,'2015-06-08',7,71,2,3,1),(174,'2015-06-08',8,1,1,2,1),(175,'2015-06-08',8,3,1,3,1),(176,'2015-06-08',8,7,1,3,1),(177,'2015-06-08',8,12,2,2,1),(178,'2015-06-08',8,16,1,3,1),(179,'2015-06-08',8,19,1,3,1),(180,'2015-06-08',8,20,1,3,1),(181,'2015-06-08',8,32,1,2,1),(182,'2015-06-08',8,35,1,2,1),(183,'2015-06-08',8,37,2,3,1),(184,'2015-06-08',8,40,1,3,1),(185,'2015-06-08',8,47,2,2,1),(186,'2015-06-08',8,51,1,3,1),(187,'2015-06-08',8,54,1,3,1),(188,'2015-06-08',8,67,2,2,1),(189,'2015-06-08',8,70,2,3,1),(190,'2014-11-10',8,71,2,2,1),(191,'2014-11-10',9,12,1,2,1),(192,'2014-11-10',9,37,1,3,1),(193,'2014-11-10',9,47,1,2,1),(194,'2014-11-10',9,67,1,2,1),(195,'2014-11-10',9,70,1,3,1),(196,'2014-06-09',9,71,1,2,1),(197,'2014-06-09',10,12,1,2,1),(198,'2014-06-09',10,37,1,1,1),(199,'2014-06-09',10,47,1,2,1),(200,'2014-06-09',10,67,1,2,1),(201,'2014-06-09',10,70,1,1,1),(202,'2014-06-09',10,71,1,2,1);
/*!40000 ALTER TABLE `tblenrolledstudents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblenrolledsubjects`
--

DROP TABLE IF EXISTS `tblenrolledsubjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblenrolledsubjects` (
  `ESubjID` int(11) NOT NULL AUTO_INCREMENT,
  `CSubjID` int(11) DEFAULT NULL,
  `EStudID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ESubjID`),
  KEY `CSubjID` (`CSubjID`),
  KEY `EStudID` (`EStudID`),
  CONSTRAINT `tblenrolledsubjects_ibfk_1` FOREIGN KEY (`CSubjID`) REFERENCES `tblclasssubjects` (`CSubjID`) ON DELETE CASCADE,
  CONSTRAINT `tblenrolledsubjects_ibfk_2` FOREIGN KEY (`EStudID`) REFERENCES `tblenrolledstudents` (`EStudID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1483 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblenrolledsubjects`
--

LOCK TABLES `tblenrolledsubjects` WRITE;
/*!40000 ALTER TABLE `tblenrolledsubjects` DISABLE KEYS */;
INSERT INTO `tblenrolledsubjects` VALUES (1,1,31),(2,1,65),(3,1,39),(4,1,41),(5,1,48),(6,1,50),(7,1,57),(8,1,35),(9,2,67),(12,3,38),(13,3,42),(14,4,31),(15,4,65),(16,4,39),(17,4,41),(18,4,48),(19,4,50),(20,4,57),(21,4,35),(22,4,33),(23,4,10),(40,6,31),(41,6,65),(42,6,39),(43,6,41),(44,6,48),(45,6,50),(46,6,57),(47,7,65),(48,7,39),(49,7,41),(50,7,48),(51,7,50),(52,7,57),(53,7,29),(54,7,34),(70,9,31),(71,9,65),(72,9,39),(73,9,41),(74,9,48),(75,9,50),(76,9,57),(77,9,35),(78,10,65),(79,10,39),(80,10,41),(81,10,48),(82,10,50),(83,10,57),(84,10,18),(85,10,22),(86,10,27),(87,10,63),(88,10,5),(89,10,29),(90,10,34),(92,12,65),(93,12,39),(94,12,41),(95,12,48),(96,12,50),(97,12,57),(98,12,20),(99,13,17),(100,13,52),(101,13,53),(102,13,58),(103,13,66),(104,14,2),(105,14,6),(106,14,8),(107,14,9),(108,14,13),(109,14,14),(110,14,15),(111,14,21),(112,14,24),(113,14,36),(114,14,44),(115,14,45),(116,14,49),(117,14,55),(118,14,60),(119,14,61),(120,14,62),(121,14,64),(122,15,17),(123,15,52),(124,15,53),(125,15,58),(126,15,66),(127,16,2),(128,16,6),(129,16,8),(130,16,9),(131,16,13),(132,16,14),(133,16,15),(134,16,21),(135,16,24),(136,16,36),(137,16,44),(138,16,45),(139,16,49),(140,16,55),(141,16,60),(142,16,61),(143,16,62),(144,16,64),(145,17,17),(146,17,52),(147,17,53),(148,17,58),(149,17,66),(150,18,2),(151,18,6),(152,18,8),(153,18,9),(154,18,13),(155,18,14),(156,18,15),(157,18,21),(158,18,24),(159,18,36),(160,18,44),(161,18,45),(162,18,49),(163,18,55),(164,18,60),(165,18,61),(166,18,62),(167,18,64),(168,18,1),(169,18,46),(170,18,5),(171,19,2),(172,19,6),(173,19,8),(174,19,9),(175,19,13),(176,19,14),(177,19,15),(178,19,21),(179,19,24),(180,19,36),(181,19,44),(182,19,45),(183,19,49),(184,19,55),(185,19,60),(186,19,61),(187,19,62),(188,19,64),(189,19,46),(190,20,2),(191,20,6),(192,20,8),(193,20,9),(194,20,13),(195,20,14),(196,20,15),(197,20,21),(198,20,24),(199,20,36),(200,20,44),(201,20,45),(202,20,49),(203,20,55),(204,20,60),(205,20,61),(206,20,62),(207,20,64),(232,23,17),(233,23,52),(234,23,53),(235,23,58),(236,23,66),(237,24,2),(238,24,6),(239,24,8),(240,24,9),(241,24,13),(242,24,14),(243,24,15),(244,24,21),(245,24,24),(246,24,36),(247,24,44),(248,24,45),(249,24,49),(250,24,55),(251,24,60),(252,24,61),(253,24,62),(254,24,64),(255,25,17),(256,25,52),(257,25,53),(258,25,58),(259,25,66),(260,26,2),(261,26,6),(262,26,8),(263,26,9),(264,26,13),(265,26,14),(266,26,15),(267,26,21),(268,26,24),(269,26,36),(270,26,44),(271,26,45),(272,26,49),(273,26,55),(274,26,60),(275,26,61),(276,26,62),(277,26,64),(278,27,17),(279,27,52),(280,27,53),(281,27,58),(282,27,66),(288,29,17),(289,29,52),(290,29,53),(291,29,58),(292,29,66),(295,30,47),(296,30,67),(299,31,1),(301,31,7),(302,31,16),(303,31,19),(304,31,32),(305,31,35),(306,31,40),(307,31,51),(308,31,54),(309,31,20),(310,32,1),(312,32,7),(313,32,16),(314,32,19),(315,32,32),(316,32,40),(317,32,51),(318,32,54),(319,33,1),(321,33,7),(322,33,16),(323,33,19),(324,33,32),(325,33,40),(326,33,51),(327,33,54),(328,33,5),(329,33,18),(330,33,22),(331,33,27),(332,33,63),(333,33,29),(334,33,34),(335,33,20),(336,34,1),(338,34,7),(339,34,16),(340,34,19),(341,34,32),(342,34,40),(343,34,51),(344,34,54),(345,34,20),(348,35,47),(349,35,67),(355,36,38),(356,36,42),(357,37,1),(359,37,7),(360,37,16),(361,37,19),(362,37,32),(363,37,40),(364,37,51),(365,37,54),(366,37,29),(367,37,34),(368,37,20),(369,38,1),(371,38,7),(372,38,16),(373,38,19),(374,38,32),(375,38,40),(376,38,51),(377,38,54),(378,38,5),(379,38,18),(380,38,22),(381,38,27),(382,38,63),(383,38,20),(384,39,67),(385,40,1),(387,40,7),(388,40,16),(389,40,19),(390,40,32),(391,40,40),(392,40,51),(393,40,54),(394,40,31),(397,41,38),(398,41,42),(401,42,38),(402,42,42),(405,43,38),(406,43,42),(409,44,38),(410,44,42),(411,45,5),(412,45,10),(413,45,18),(414,45,20),(415,45,22),(417,45,25),(418,45,26),(419,45,27),(421,45,33),(422,45,43),(423,45,46),(424,45,56),(425,45,63),(430,46,47),(431,46,67),(434,47,5),(435,47,10),(436,47,18),(437,47,20),(438,47,22),(440,47,25),(441,47,26),(442,47,27),(444,47,33),(445,47,43),(446,47,46),(447,47,56),(448,47,63),(453,48,47),(454,48,67),(457,49,5),(458,49,10),(459,49,18),(460,49,20),(461,49,22),(463,49,25),(464,49,26),(465,49,27),(467,49,33),(468,49,43),(469,49,46),(470,49,56),(471,49,63),(474,49,35),(475,50,10),(477,50,25),(478,50,26),(480,50,33),(481,50,43),(482,50,46),(483,50,56),(485,50,35),(486,51,67),(487,52,67),(488,53,5),(489,53,18),(490,53,22),(491,53,27),(492,53,63),(493,53,10),(495,53,25),(496,53,26),(498,53,33),(499,53,43),(500,53,46),(501,53,56),(503,53,20),(506,54,47),(510,56,67),(512,57,67),(514,57,47),(515,58,1),(516,58,7),(517,58,19),(518,58,32),(519,58,40),(520,58,51),(521,58,54),(527,64,46),(528,97,72),(529,97,73),(530,97,74),(531,97,76),(532,97,77),(533,97,79),(534,97,80),(535,97,82),(536,97,84),(537,97,85),(538,97,78),(539,98,72),(540,98,73),(541,98,74),(542,98,76),(543,98,77),(544,98,79),(545,98,80),(546,98,82),(547,98,84),(548,98,85),(549,98,78),(550,99,72),(551,99,73),(552,99,74),(553,99,76),(554,99,77),(555,99,79),(556,99,80),(557,99,82),(558,99,84),(559,99,85),(560,99,78),(561,100,72),(562,100,73),(563,100,74),(564,100,76),(565,100,77),(566,100,79),(567,100,80),(568,100,82),(569,100,84),(570,100,85),(571,100,78),(572,101,72),(573,101,73),(574,101,74),(575,101,76),(576,101,77),(577,101,79),(578,101,80),(579,101,82),(580,101,84),(581,101,85),(582,101,78),(583,102,72),(584,102,73),(585,102,74),(586,102,76),(587,102,77),(588,102,79),(589,102,80),(590,102,82),(591,102,84),(592,102,85),(593,102,78),(594,103,72),(595,103,73),(596,103,74),(597,103,76),(598,103,77),(599,103,79),(600,103,80),(601,103,82),(602,103,84),(603,103,85),(604,103,78),(605,104,72),(606,104,73),(607,104,74),(608,104,76),(609,104,77),(610,104,79),(611,104,80),(612,104,82),(613,104,84),(614,104,85),(615,104,78),(616,119,75),(617,119,81),(618,119,83),(619,119,86),(620,119,87),(621,119,88),(622,120,75),(623,120,81),(624,120,83),(625,120,86),(626,120,87),(627,120,88),(628,121,75),(629,121,81),(630,121,83),(631,121,86),(632,121,87),(633,121,88),(634,122,75),(635,122,81),(636,122,83),(637,122,86),(638,122,87),(639,122,88),(640,123,75),(641,123,81),(642,123,83),(643,123,86),(644,123,87),(645,123,88),(646,124,75),(647,124,81),(648,124,83),(649,124,86),(650,124,87),(651,124,88),(652,125,75),(653,125,81),(654,125,83),(655,125,86),(656,125,87),(657,125,88),(658,126,75),(659,126,81),(660,126,83),(661,126,86),(662,126,87),(663,126,88),(664,146,89),(665,146,90),(666,146,91),(667,146,93),(668,146,94),(669,146,96),(670,146,97),(671,146,99),(672,146,101),(673,146,102),(674,146,95),(675,147,89),(676,147,90),(677,147,91),(678,147,93),(679,147,94),(680,147,96),(681,147,97),(682,147,99),(683,147,101),(684,147,102),(685,147,95),(686,150,89),(687,150,90),(688,150,91),(689,150,93),(690,150,94),(691,150,96),(692,150,97),(693,150,99),(694,150,101),(695,150,102),(696,150,95),(697,151,89),(698,151,90),(699,151,91),(700,151,93),(701,151,94),(702,151,96),(703,151,97),(704,151,99),(705,151,101),(706,151,102),(707,151,95),(708,152,89),(709,152,90),(710,152,91),(711,152,93),(712,152,94),(713,152,96),(714,152,97),(715,152,99),(716,152,101),(717,152,102),(718,152,95),(719,153,89),(720,153,90),(721,153,91),(722,153,93),(723,153,94),(724,153,96),(725,153,97),(726,153,99),(727,153,101),(728,153,102),(729,153,95),(730,154,89),(731,154,90),(732,154,91),(733,154,93),(734,154,94),(735,154,96),(736,154,97),(737,154,99),(738,154,101),(739,154,102),(740,154,95),(741,155,89),(742,155,90),(743,155,91),(744,155,93),(745,155,94),(746,155,96),(747,155,97),(748,155,99),(749,155,101),(750,155,102),(751,155,95),(752,156,89),(753,156,90),(754,156,91),(755,156,93),(756,156,94),(757,156,96),(758,156,97),(759,156,99),(760,156,101),(761,156,102),(762,156,95),(763,172,92),(764,172,98),(765,172,100),(766,172,103),(767,172,104),(768,172,105),(769,173,92),(770,173,98),(771,173,100),(772,173,103),(773,173,104),(774,173,105),(775,174,92),(776,174,98),(777,174,100),(778,174,103),(779,174,104),(780,174,105),(781,175,92),(782,175,98),(783,175,100),(784,175,103),(785,175,104),(786,175,105),(787,176,92),(788,176,98),(789,176,100),(790,176,103),(791,176,104),(792,176,105),(793,177,92),(794,177,98),(795,177,100),(796,177,103),(797,177,104),(798,177,105),(799,178,92),(800,178,98),(801,178,100),(802,178,103),(803,178,104),(804,178,105),(805,203,106),(806,203,107),(807,203,108),(808,203,110),(809,203,111),(810,203,113),(811,203,114),(812,203,116),(813,203,118),(814,203,119),(815,203,112),(816,206,106),(817,206,107),(818,206,108),(819,206,110),(820,206,111),(821,206,113),(822,206,114),(823,206,116),(824,206,118),(825,206,119),(826,206,112),(827,209,106),(828,209,107),(829,209,108),(830,209,110),(831,209,111),(832,209,113),(833,209,114),(834,209,116),(835,209,118),(836,209,119),(837,209,112),(838,210,106),(839,210,107),(840,210,108),(841,210,110),(842,210,111),(843,210,113),(844,210,114),(845,210,116),(846,210,118),(847,210,119),(848,210,112),(849,211,106),(850,211,107),(851,211,108),(852,211,110),(853,211,111),(854,211,113),(855,211,114),(856,211,116),(857,211,118),(858,211,119),(859,211,112),(860,212,106),(861,212,107),(862,212,108),(863,212,110),(864,212,111),(865,212,113),(866,212,114),(867,212,116),(868,212,118),(869,212,119),(870,212,112),(871,213,106),(872,213,107),(873,213,108),(874,213,110),(875,213,111),(876,213,113),(877,213,114),(878,213,116),(879,213,118),(880,213,119),(881,213,112),(882,214,106),(883,214,107),(884,214,108),(885,214,110),(886,214,111),(887,214,113),(888,214,114),(889,214,116),(890,214,118),(891,214,119),(892,214,112),(893,215,106),(894,215,107),(895,215,108),(896,215,110),(897,215,111),(898,215,113),(899,215,114),(900,215,116),(901,215,118),(902,215,119),(903,215,112),(904,231,109),(905,231,115),(906,231,117),(907,231,120),(908,231,121),(909,231,122),(910,232,109),(911,232,115),(912,232,117),(913,232,120),(914,232,121),(915,232,122),(916,233,109),(917,233,115),(918,233,117),(919,233,120),(920,233,121),(921,233,122),(922,234,109),(923,234,115),(924,234,117),(925,234,120),(926,234,121),(927,234,122),(928,235,109),(929,235,115),(930,235,117),(931,235,120),(932,235,121),(933,235,122),(934,236,109),(935,236,115),(936,236,117),(937,236,120),(938,236,121),(939,236,122),(940,237,109),(941,237,115),(942,237,117),(943,237,120),(944,237,121),(945,237,122),(946,238,109),(947,238,115),(948,238,117),(949,238,120),(950,238,121),(951,238,122),(952,253,123),(953,253,124),(954,253,125),(955,253,127),(956,253,128),(957,253,130),(958,253,131),(959,253,133),(960,253,135),(961,253,136),(962,253,129),(963,259,123),(964,259,124),(965,259,125),(966,259,127),(967,259,128),(968,259,130),(969,259,131),(970,259,133),(971,259,135),(972,259,136),(973,259,129),(974,260,123),(975,260,124),(976,260,125),(977,260,127),(978,260,128),(979,260,130),(980,260,131),(981,260,133),(982,260,135),(983,260,136),(984,260,129),(985,261,123),(986,261,124),(987,261,125),(988,261,127),(989,261,128),(990,261,130),(991,261,131),(992,261,133),(993,261,135),(994,261,136),(995,261,129),(996,263,123),(997,263,124),(998,263,125),(999,263,127),(1000,263,128),(1001,263,130),(1002,263,131),(1003,263,133),(1004,263,135),(1005,263,136),(1006,263,129),(1007,264,123),(1008,264,124),(1009,264,125),(1010,264,127),(1011,264,128),(1012,264,130),(1013,264,131),(1014,264,133),(1015,264,135),(1016,264,136),(1017,264,129),(1018,265,123),(1019,265,124),(1020,265,125),(1021,265,127),(1022,265,128),(1023,265,130),(1024,265,131),(1025,265,133),(1026,265,135),(1027,265,136),(1028,265,129),(1029,266,123),(1030,266,124),(1031,266,125),(1032,266,127),(1033,266,128),(1034,266,130),(1035,266,131),(1036,266,133),(1037,266,135),(1038,266,136),(1039,266,129),(1040,267,123),(1041,267,124),(1042,267,125),(1043,267,127),(1044,267,128),(1045,267,130),(1046,267,131),(1047,267,133),(1048,267,135),(1049,267,136),(1050,267,129),(1051,268,123),(1052,268,124),(1053,268,125),(1054,268,127),(1055,268,128),(1056,268,130),(1057,268,131),(1058,268,133),(1059,268,135),(1060,268,136),(1061,268,129),(1062,269,123),(1063,269,124),(1064,269,125),(1065,269,127),(1066,269,128),(1067,269,130),(1068,269,131),(1069,269,133),(1070,269,135),(1071,269,136),(1072,269,129),(1073,283,126),(1074,283,132),(1075,283,134),(1076,283,137),(1077,283,138),(1078,283,139),(1079,284,126),(1080,284,132),(1081,284,134),(1082,284,137),(1083,284,138),(1084,284,139),(1085,285,126),(1086,285,132),(1087,285,134),(1088,285,137),(1089,285,138),(1090,285,139),(1091,286,126),(1092,286,132),(1093,286,134),(1094,286,137),(1095,286,138),(1096,286,139),(1097,287,126),(1098,287,132),(1099,287,134),(1100,287,137),(1101,287,138),(1102,287,139),(1103,288,126),(1104,288,132),(1105,288,134),(1106,288,137),(1107,288,138),(1108,288,139),(1109,289,126),(1110,289,132),(1111,289,134),(1112,289,137),(1113,289,138),(1114,289,139),(1115,290,126),(1116,290,132),(1117,290,134),(1118,290,137),(1119,290,138),(1120,290,139),(1121,316,140),(1122,316,141),(1123,316,142),(1124,316,144),(1125,316,145),(1126,316,147),(1127,316,148),(1128,316,150),(1129,316,152),(1130,316,153),(1131,316,146),(1132,317,140),(1133,317,141),(1134,317,142),(1135,317,144),(1136,317,145),(1137,317,147),(1138,317,148),(1139,317,150),(1140,317,152),(1141,317,153),(1142,317,146),(1143,319,140),(1144,319,141),(1145,319,142),(1146,319,144),(1147,319,145),(1148,319,147),(1149,319,148),(1150,319,150),(1151,319,152),(1152,319,153),(1153,319,146),(1154,322,140),(1155,322,141),(1156,322,142),(1157,322,144),(1158,322,145),(1159,322,147),(1160,322,148),(1161,322,150),(1162,322,152),(1163,322,153),(1164,322,146),(1165,323,140),(1166,323,141),(1167,323,142),(1168,323,144),(1169,323,145),(1170,323,147),(1171,323,148),(1172,323,150),(1173,323,152),(1174,323,153),(1175,323,146),(1176,324,140),(1177,324,141),(1178,324,142),(1179,324,144),(1180,324,145),(1181,324,147),(1182,324,148),(1183,324,150),(1184,324,152),(1185,324,153),(1186,324,146),(1187,325,140),(1188,325,141),(1189,325,142),(1190,325,144),(1191,325,145),(1192,325,147),(1193,325,148),(1194,325,150),(1195,325,152),(1196,325,153),(1197,325,146),(1198,326,140),(1199,326,141),(1200,326,142),(1201,326,144),(1202,326,145),(1203,326,147),(1204,326,148),(1205,326,150),(1206,326,152),(1207,326,153),(1208,326,146),(1209,327,140),(1210,327,141),(1211,327,142),(1212,327,144),(1213,327,145),(1214,327,147),(1215,327,148),(1216,327,150),(1217,327,152),(1218,327,153),(1219,327,146),(1220,328,140),(1221,328,141),(1222,328,142),(1223,328,144),(1224,328,145),(1225,328,147),(1226,328,148),(1227,328,150),(1228,328,152),(1229,328,153),(1230,328,146),(1231,342,143),(1232,342,149),(1233,342,151),(1234,342,154),(1235,342,155),(1236,342,156),(1237,343,143),(1238,343,149),(1239,343,151),(1240,343,154),(1241,343,155),(1242,343,156),(1243,344,143),(1244,344,149),(1245,344,151),(1246,344,154),(1247,344,155),(1248,344,156),(1249,345,143),(1250,345,149),(1251,345,151),(1252,345,154),(1253,345,155),(1254,345,156),(1255,346,143),(1256,346,149),(1257,346,151),(1258,346,154),(1259,346,155),(1260,346,156),(1261,347,143),(1262,347,149),(1263,347,151),(1264,347,154),(1265,347,155),(1266,347,156),(1267,348,143),(1268,348,149),(1269,348,151),(1270,348,154),(1271,348,155),(1272,348,156),(1273,349,143),(1274,349,149),(1275,349,151),(1276,349,154),(1277,349,155),(1278,349,156),(1279,396,160),(1280,396,166),(1281,396,168),(1282,396,171),(1283,396,172),(1284,396,173),(1285,397,160),(1286,397,166),(1287,397,168),(1288,397,171),(1289,397,172),(1290,397,173),(1291,398,160),(1292,398,166),(1293,398,168),(1294,398,171),(1295,398,172),(1296,398,173),(1297,399,160),(1298,399,166),(1299,399,168),(1300,399,171),(1301,399,172),(1302,399,173),(1303,400,160),(1304,400,166),(1305,400,168),(1306,400,171),(1307,400,172),(1308,400,173),(1309,401,160),(1310,401,166),(1311,401,168),(1312,401,171),(1313,401,172),(1314,401,173),(1315,402,160),(1316,402,166),(1317,402,168),(1318,402,171),(1319,402,172),(1320,402,173),(1321,455,177),(1322,455,183),(1323,455,185),(1324,455,188),(1325,455,189),(1326,455,190),(1327,456,177),(1328,456,183),(1329,456,185),(1330,456,188),(1331,456,189),(1332,456,190),(1333,457,177),(1334,457,183),(1335,457,185),(1336,457,188),(1337,457,189),(1338,457,190),(1339,458,177),(1340,458,183),(1341,458,185),(1342,458,188),(1343,458,189),(1344,458,190),(1345,459,177),(1346,459,183),(1347,459,185),(1348,459,188),(1349,459,189),(1350,459,190),(1351,460,177),(1352,460,183),(1353,460,185),(1354,460,188),(1355,460,189),(1356,460,190),(1357,461,177),(1358,461,183),(1359,461,185),(1360,461,188),(1361,461,189),(1362,461,190),(1363,462,177),(1364,462,183),(1365,462,185),(1366,462,188),(1367,462,189),(1368,462,190),(1369,505,191),(1370,505,192),(1371,505,193),(1372,505,194),(1373,505,195),(1374,505,196),(1375,506,191),(1376,506,192),(1377,506,193),(1378,506,194),(1379,506,195),(1380,506,196),(1381,507,191),(1382,507,192),(1383,507,193),(1384,507,194),(1385,507,195),(1386,507,196),(1387,508,191),(1388,508,192),(1389,508,193),(1390,508,194),(1391,508,195),(1392,508,196),(1393,509,191),(1394,509,192),(1395,509,193),(1396,509,194),(1397,509,195),(1398,509,196),(1399,510,191),(1400,510,192),(1401,510,193),(1402,510,194),(1403,510,195),(1404,510,196),(1405,511,191),(1406,511,192),(1407,511,193),(1408,511,194),(1409,511,195),(1410,511,196),(1411,512,191),(1412,512,192),(1413,512,193),(1414,512,194),(1415,512,195),(1416,512,196),(1417,513,191),(1418,513,192),(1419,513,193),(1420,513,194),(1421,513,195),(1422,513,196),(1423,514,191),(1424,514,192),(1425,514,193),(1426,514,194),(1427,514,195),(1428,514,196),(1429,568,197),(1430,568,198),(1431,568,199),(1432,568,200),(1433,568,201),(1434,568,202),(1435,569,197),(1436,569,198),(1437,569,199),(1438,569,200),(1439,569,201),(1440,569,202),(1441,570,197),(1442,570,198),(1443,570,199),(1444,570,200),(1445,570,201),(1446,570,202),(1447,571,197),(1448,571,198),(1449,571,199),(1450,571,200),(1451,571,201),(1452,571,202),(1453,572,197),(1454,572,198),(1455,572,199),(1456,572,200),(1457,572,201),(1458,572,202),(1459,573,197),(1460,573,198),(1461,573,199),(1462,573,200),(1463,573,201),(1464,573,202),(1465,574,197),(1466,574,198),(1467,574,199),(1468,574,200),(1469,574,201),(1470,574,202),(1471,575,197),(1472,575,198),(1473,575,199),(1474,575,200),(1475,575,201),(1476,575,202),(1477,576,197),(1478,576,198),(1479,576,199),(1480,576,200),(1481,576,201),(1482,576,202);
/*!40000 ALTER TABLE `tblenrolledsubjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblfacultymembers`
--

DROP TABLE IF EXISTS `tblfacultymembers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblfacultymembers` (
  `FacultyID` int(11) NOT NULL AUTO_INCREMENT,
  `SchoolIDNo` varchar(50) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `PersonID` int(11) DEFAULT NULL,
  PRIMARY KEY (`FacultyID`),
  KEY `UserID` (`UserID`),
  KEY `PersonID` (`PersonID`),
  CONSTRAINT `tblfacultymembers_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `tblusers` (`UserID`) ON DELETE CASCADE,
  CONSTRAINT `tblfacultymembers_ibfk_2` FOREIGN KEY (`PersonID`) REFERENCES `tblpersons` (`PersonID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblfacultymembers`
--

LOCK TABLES `tblfacultymembers` WRITE;
/*!40000 ALTER TABLE `tblfacultymembers` DISABLE KEYS */;
INSERT INTO `tblfacultymembers` VALUES (1,'1214-92',73,72),(2,'1011-89',74,73),(3,'1224-07',75,74),(4,'0629-18',76,75),(5,'0001-18',77,76),(6,'0002-18',78,77),(7,'0003-18',79,78),(8,'0004-18',80,79),(9,'0005-18',81,80),(10,'0006-18',82,81),(11,'0007-18',83,82),(12,'0008-18',84,83),(13,'0009-18',85,84),(14,'0010-18',86,85),(15,'0011-18',87,86),(16,'0012-18',88,87),(17,'0013-18',89,88),(18,'0014-18',90,89),(19,'0015-18',91,90);
/*!40000 ALTER TABLE `tblfacultymembers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblhiredfacultymembers`
--

DROP TABLE IF EXISTS `tblhiredfacultymembers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblhiredfacultymembers` (
  `HFacultyID` int(11) NOT NULL AUTO_INCREMENT,
  `STermID` int(11) DEFAULT NULL,
  `FacultyID` int(11) DEFAULT NULL,
  PRIMARY KEY (`HFacultyID`),
  KEY `STermID` (`STermID`),
  KEY `FacultyID` (`FacultyID`),
  CONSTRAINT `tblhiredfacultymembers_ibfk_1` FOREIGN KEY (`STermID`) REFERENCES `tblschoolterms` (`STermID`) ON DELETE CASCADE,
  CONSTRAINT `tblhiredfacultymembers_ibfk_2` FOREIGN KEY (`FacultyID`) REFERENCES `tblfacultymembers` (`FacultyID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblhiredfacultymembers`
--

LOCK TABLES `tblhiredfacultymembers` WRITE;
/*!40000 ALTER TABLE `tblhiredfacultymembers` DISABLE KEYS */;
INSERT INTO `tblhiredfacultymembers` VALUES (1,1,1),(2,1,2),(3,1,3),(4,1,4),(6,1,6),(7,1,7),(8,1,8),(9,1,9),(10,1,10),(11,1,11),(12,1,12),(13,1,13),(14,1,14),(15,1,15),(16,1,16),(17,1,17),(18,1,18),(19,1,19),(20,2,19),(21,3,19),(22,4,19),(23,5,19),(24,6,19),(25,7,19),(26,8,19),(27,9,19),(28,10,19);
/*!40000 ALTER TABLE `tblhiredfacultymembers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblpersons`
--

DROP TABLE IF EXISTS `tblpersons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblpersons` (
  `PersonID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(10) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `MiddleName` varchar(50) DEFAULT NULL,
  `Sex` varchar(10) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `PlaceOfBirth` varchar(50) DEFAULT NULL,
  `AddLine1` varchar(100) DEFAULT NULL,
  `AddLine2` varchar(100) DEFAULT NULL,
  `MunicipalityCity` varchar(100) DEFAULT NULL,
  `Province` varchar(100) DEFAULT NULL,
  `PostalCode` int(10) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `ContactNo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`PersonID`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblpersons`
--

LOCK TABLES `tblpersons` WRITE;
/*!40000 ALTER TABLE `tblpersons` DISABLE KEYS */;
INSERT INTO `tblpersons` VALUES (1,'Mr.','Abejo','Jay-R','R.','Male','1997-04-01','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4023,'sad@gmail.com','09123123321'),(2,'Ms.','Advincula','Alice Jean Rin','','Female','1997-04-02','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4024,'sad@gmail.com','09123123321'),(3,'Ms.','Aguilo','Christian Joy','M.','Female','1997-04-03','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4025,'sad@gmail.com','09123123321'),(4,'Ms.','Aguilo','Maria Cloe Mojedo','','Female','1997-04-04','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4026,'sad@gmail.com','09123123321'),(5,'Ms.','Alfonso','Raida Dee','J.','Female','1997-04-05','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4027,'sad@gmail.com','09123123321'),(6,'Mr.','Alonzo','Mark Vincent Nalitan','','Male','1997-04-06','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4028,'sad@gmail.com','09123123321'),(7,'Mr.','Apanay','Abraham','D.','Male','1997-04-07','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4029,'sad@gmail.com','09123123321'),(8,'Mr.','Avecilla','Rannie Bergado','','Male','1997-04-08','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4030,'sad@gmail.com','09123123321'),(9,'Mr.','Ayuban','John Britz','','Male','1997-04-09','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4031,'sad@gmail.com','09123123321'),(10,'Ms.','Bandola','Merry Jane Abelinde','','Female','1997-04-10','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4032,'sad@gmail.com','09123123321'),(11,'Mr.','Bantiles','Mark Panelo','','Male','1997-04-11','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4033,'sad@gmail.com','09123123321'),(12,'Mr.','Bonto','Marc Anthony','T.','Male','1997-04-12','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4034,'sad@gmail.com','09123123321'),(13,'Mr.','Bonus','John Kristoffer','P.','Male','1997-04-13','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4035,'sad@gmail.com','09123123321'),(14,'Ms.','Buenviaje','Meghan','I.','Female','1997-04-14','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4036,'sad@gmail.com','09123123321'),(15,'Mr.','Bustamante','Jetro','S.','Male','1997-04-15','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4037,'sad@gmail.com','09123123321'),(16,'Ms.','Calsado','Kem Diobeth','L.','Female','1997-04-16','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4038,'sad@gmail.com','09123123321'),(17,'Ms.','Cantores','Maria Jenica','V.','Female','1997-04-17','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4039,'sad@gmail.com','09123123321'),(18,'Mr.','Catalan','Ronan','C.','Male','1997-04-18','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4040,'sad@gmail.com','09123123321'),(19,'Mr.','Chua','Alexander Jr.','B.','Male','1997-04-19','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4041,'sad@gmail.com','09123123321'),(20,'Ms.','Coloma','Angelica','C.','Female','1997-04-20','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4042,'sad@gmail.com','09123123321'),(21,'Ms.','Combes','Roxanne','','Female','1997-04-21','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4043,'sad@gmail.com','09123123321'),(22,'Mr.','Culla','Archie','C.','Male','1997-04-22','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4044,'sad@gmail.com','09123123321'),(23,'Mr.','De Lumin','Al Christian Ross','F.','Male','1997-04-23','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4045,'sad@gmail.com','09123123321'),(24,'Mr.','Dela Paz','Billy Joe','C.','Male','1997-04-24','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4046,'sad@gmail.com','09123123321'),(25,'Ms.','Dimamay','Mayabelle','M.','Female','1997-04-25','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4047,'sad@gmail.com','09123123321'),(26,'Ms.','Erese','Mary Joy Christelle','L.','Female','1997-04-26','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4048,'sad@gmail.com','09123123321'),(27,'Mr.','Estacio','Mark Anthony','S.','Male','1997-04-27','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4049,'sad@gmail.com','09123123321'),(28,'Ms.','Fernandez','Johnna','P.','Female','1997-04-28','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4050,'sad@gmail.com','09123123321'),(29,'Ms.','Funtila','Jeremiah Ester','D.','Female','1997-04-29','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4051,'sad@gmail.com','09123123321'),(30,'Mr.','Genelza','Mark Joshua','M.','Male','1997-04-30','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4052,'sad@gmail.com','09123123321'),(31,'Mr.','Haucian','John Paul','B.','Male','1997-05-01','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4053,'sad@gmail.com','09123123321'),(32,'Mr.','Hibi','Keisom','G.','Male','1997-05-02','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4054,'sad@gmail.com','09123123321'),(33,'Ms.','Isidoro','Christine Mae','P.','Female','1997-05-03','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4055,'sad@gmail.com','09123123321'),(34,'Mr.','Lagdaan','John Ardy','P.','Male','1997-05-04','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4056,'sad@gmail.com','09123123321'),(35,'Ms.','Latayan','Regina Shane','S.','Female','1997-05-05','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4057,'sad@gmail.com','09123123321'),(36,'Mr.','Libutan','Johnvert','L.','Male','1997-05-06','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4058,'sad@gmail.com','09123123321'),(37,'Ms.','Manalili','AJ','O.','Female','1997-05-07','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4059,'sad@gmail.com','09123123321'),(38,'Mr.','Mancia','Edmar','B.','Male','1997-05-08','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4060,'sad@gmail.com','09123123321'),(39,'Mr.','Medalla','Patrick Paul','M.','Male','1997-05-09','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4061,'sad@gmail.com','09123123321'),(40,'Ms.','Mendoza','Kyla Louisse','A','Female','1997-05-10','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4062,'sad@gmail.com','09123123321'),(41,'Mr.','Mendoza','Nikko','L.','Male','1997-05-11','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4063,'sad@gmail.com','09123123321'),(42,'Mr.','Montaño Jr.','Oscar','Z.','Male','1997-05-12','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4064,'sad@gmail.com','09123123321'),(43,'Ms.','Nadong','April Ann','C.','Female','1997-05-13','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4065,'sad@gmail.com','09123123321'),(44,'Mr.','Odicta','John Lester','O.','Male','1997-05-14','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4066,'sad@gmail.com','09123123321'),(45,'Ms.','Olores','Jessa','M.','Female','1997-05-15','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4067,'sad@gmail.com','09123123321'),(46,'Mr.','Ones','Jonmarck','F.','Male','1997-05-16','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4068,'sad@gmail.com','09123123321'),(47,'Mr.','Ornos','Dondon','M.','Male','1997-05-17','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4069,'sad@gmail.com','09123123321'),(48,'Mr.','Pante','Ezekiel','O.','Male','1997-05-18','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4070,'sad@gmail.com','09123123321'),(49,'Mr.','Parcon','Jayson','E.','Male','1997-05-19','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4071,'sad@gmail.com','09123123321'),(50,'Ms.','Pastoral','Angelica','R.','Female','1997-05-20','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4072,'sad@gmail.com','09123123321'),(51,'Mr.','Peña','Nathaniel','M.','Male','1997-05-21','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4073,'sad@gmail.com','09123123321'),(52,'Mr.','Pimentel','Vincent','I.','Male','1997-05-22','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4074,'sad@gmail.com','09123123321'),(53,'Ms.','Posada','Jasmin','G.','Female','1997-05-23','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4075,'sad@gmail.com','09123123321'),(54,'Mr.','Quiachon','Willard','D.','Male','1997-05-24','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4076,'sad@gmail.com','09123123321'),(55,'Mr.','Quimpo','Dexer','J.','Male','1997-05-25','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4077,'sad@gmail.com','09123123321'),(56,'Mr.','Ragasa','Rodolfo Jr.','B.','Male','1997-05-26','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4078,'sad@gmail.com','09123123321'),(57,'Mr.','Rapay','John Paul','','Male','1997-05-27','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4079,'sad@gmail.com','09123123321'),(58,'Mr.','Ruaya','Fitz Jerald','O.','Male','1997-05-28','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4080,'sad@gmail.com','09123123321'),(59,'Mr.','Sanchez','Rocel','C.','Male','1997-05-29','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4081,'sad@gmail.com','09123123321'),(60,'Mr.','Sano','Kurt Adrianne','P.','Male','1997-05-30','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4082,'sad@gmail.com','09123123321'),(61,'Mr.','Sayson Jr.','Rolando','B.','Male','1997-05-31','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4083,'sad@gmail.com','09123123321'),(62,'Mr.','Siaron','Jeffrey','P.','Male','1997-06-01','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4084,'sad@gmail.com','09123123321'),(63,'Ms.','Sison','Ailyn','R.','Female','1997-06-02','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4085,'sad@gmail.com','09123123321'),(64,'Mr.','Surtida','Shawn Kairi','B.','Male','1997-06-03','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4086,'sad@gmail.com','09123123321'),(65,'Mr.','Tabuzo','David','P.','Male','1997-06-04','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4087,'sad@gmail.com','09123123321'),(66,'Mr.','Tamo','John Cyrus','A.','Male','1997-06-05','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4088,'sad@gmail.com','09123123321'),(67,'Mr.','Tigno','Joshua','','Male','1997-06-06','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4089,'sad@gmail.com','09123123321'),(68,'Mr.','Valdez','Carl John','O.','Male','1997-06-07','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4090,'sad@gmail.com','09123123321'),(69,'Mr.','Vayakaril','Kevin','B.','Male','1997-06-08','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4091,'sad@gmail.com','09123123321'),(70,'Mr.','Yolola','Kenneth Arvin','P.','Male','1997-06-09','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4092,'sad@gmail.com','09123123321'),(71,'Mr.','Zapata','Jerom','I.','Male','1997-06-10','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4093,'sad@gmail.com','09123123321'),(72,'Mr.','Chicano','Joshua Paolo','','Male','1997-06-11','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4094,'sad@gmail.com','09123123321'),(73,'Mr.','Douglas','Jemar','','Male','1997-06-12','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4095,'sad@gmail.com','09123123321'),(74,'Ms.','Mariano','Luzviminda','','Female','1997-06-13','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4096,'sad@gmail.com','09123123321'),(75,'Mr.','Reyes','Mc Joben','Rodrigo','Male','1997-06-14','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4097,'sad@gmail.com','09123123321'),(76,'Mr.','De Lumin','Arnold','E.','Male','1997-06-15','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4098,'sad@gmail.com','09123123321'),(77,'Mr.','Duelas','John Emil','','Male','1997-06-16','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4099,'sad@gmail.com','09123123321'),(78,'Ms.','Palmes','Liezel','','Female','1997-06-17','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4100,'sad@gmail.com','09123123321'),(79,'Ms.','Macaraeg','Maricar','','Female','1997-06-18','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4101,'sad@gmail.com','09123123321'),(80,'Mr.','Laroya','Mark Anthony','','Male','1997-06-19','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4102,'sad@gmail.com','09123123321'),(81,'Ms.','Abejar','Nelia','','Female','1997-06-20','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4103,'sad@gmail.com','09123123321'),(82,'Mr.','Cenia','Randolp','','Male','1997-06-21','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4104,'sad@gmail.com','09123123321'),(83,'Ms.','Dondoy','Cristy','','Female','1997-06-22','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4105,'sad@gmail.com','09123123321'),(84,'Ms.','Santiago','Rowena','','Female','1997-06-23','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4106,'sad@gmail.com','09123123321'),(85,'Mr.','Valdez','Allan Raniel','','Male','1997-06-24','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4107,'sad@gmail.com','09123123321'),(86,'Mr.','Zulueta','Juniper','','Male','1997-06-25','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4108,'sad@gmail.com','09123123321'),(87,'Mr.','Recto','Juan','','Male','1997-06-26','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4109,'sad@gmail.com','09123123321'),(88,'Mr.','Ty','Gregorgio William','','Male','1997-06-27','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4110,'sad@gmail.com','09123123321'),(89,'Ms.','Visda','Rizhelle Ann','','Female','1997-06-28','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4111,'sad@gmail.com','09123123321'),(90,'Ms.','Reyes','Mary Ann','','Female','1997-06-29','San Pedro, Laguna','#23 Maharlika St.','Brgy. Magsaysay','City of San Pedro','Laguna',4112,'sad@gmail.com','09123123321');
/*!40000 ALTER TABLE `tblpersons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblprerequisitetype`
--

DROP TABLE IF EXISTS `tblprerequisitetype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblprerequisitetype` (
  `TypeID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`TypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblprerequisitetype`
--

LOCK TABLES `tblprerequisitetype` WRITE;
/*!40000 ALTER TABLE `tblprerequisitetype` DISABLE KEYS */;
INSERT INTO `tblprerequisitetype` VALUES (1,'Subject'),(2,'Year Level Standing');
/*!40000 ALTER TABLE `tblprerequisitetype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblscholasticstatus`
--

DROP TABLE IF EXISTS `tblscholasticstatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblscholasticstatus` (
  `ScholasticStatusID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ScholasticStatusID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblscholasticstatus`
--

LOCK TABLES `tblscholasticstatus` WRITE;
/*!40000 ALTER TABLE `tblscholasticstatus` DISABLE KEYS */;
INSERT INTO `tblscholasticstatus` VALUES (1,'Regular'),(2,'Irregular');
/*!40000 ALTER TABLE `tblscholasticstatus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblschoolterms`
--

DROP TABLE IF EXISTS `tblschoolterms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblschoolterms` (
  `STermID` int(11) NOT NULL AUTO_INCREMENT,
  `SemesterID` int(11) DEFAULT NULL,
  `SchoolYear` varchar(50) DEFAULT NULL,
  `DateOfStart` date DEFAULT NULL,
  `DateOfEnd` date DEFAULT NULL,
  PRIMARY KEY (`STermID`),
  KEY `SemesterID` (`SemesterID`),
  CONSTRAINT `tblschoolterms_ibfk_1` FOREIGN KEY (`SemesterID`) REFERENCES `tblsemesters` (`SemesterID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblschoolterms`
--

LOCK TABLES `tblschoolterms` WRITE;
/*!40000 ALTER TABLE `tblschoolterms` DISABLE KEYS */;
INSERT INTO `tblschoolterms` VALUES (1,2,'S.Y. 2018-2019','2018-11-12','2019-03-30'),(2,1,'S.Y. 2018-2019','2018-06-11','2018-10-27'),(3,2,'S.Y. 2017-2018','2017-11-06','2018-03-23'),(4,1,'S.Y. 2017-2018','2017-06-13','2017-10-28'),(5,2,'S.Y. 2016-2017','2016-11-07','2017-03-31'),(6,1,'S.Y. 2016-2017','2016-06-06','2016-10-29'),(7,2,'S.Y. 2015-2016','2015-11-09','2016-04-02'),(8,1,'S.Y. 2015-2016','2015-06-08','2015-10-30'),(9,2,'S.Y. 2014-2015','2014-11-10','2015-03-28'),(10,1,'S.Y. 2014-2015','2014-06-09','2014-10-25');
/*!40000 ALTER TABLE `tblschoolterms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblsemesters`
--

DROP TABLE IF EXISTS `tblsemesters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblsemesters` (
  `SemesterID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`SemesterID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblsemesters`
--

LOCK TABLES `tblsemesters` WRITE;
/*!40000 ALTER TABLE `tblsemesters` DISABLE KEYS */;
INSERT INTO `tblsemesters` VALUES (1,'1st Semester'),(2,'2nd Semester'),(3,'Summer');
/*!40000 ALTER TABLE `tblsemesters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblstudents`
--

DROP TABLE IF EXISTS `tblstudents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblstudents` (
  `StudID` int(11) NOT NULL AUTO_INCREMENT,
  `SchoolIDNo` varchar(50) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `PersonID` int(11) DEFAULT NULL,
  `CourseID` int(11) DEFAULT NULL,
  PRIMARY KEY (`StudID`),
  KEY `UserID` (`UserID`),
  KEY `PersonID` (`PersonID`),
  KEY `CourseID` (`CourseID`),
  CONSTRAINT `tblstudents_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `tblusers` (`UserID`) ON DELETE CASCADE,
  CONSTRAINT `tblstudents_ibfk_2` FOREIGN KEY (`PersonID`) REFERENCES `tblpersons` (`PersonID`) ON DELETE CASCADE,
  CONSTRAINT `tblstudents_ibfk_3` FOREIGN KEY (`CourseID`) REFERENCES `tblcourses` (`CourseID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblstudents`
--

LOCK TABLES `tblstudents` WRITE;
/*!40000 ALTER TABLE `tblstudents` DISABLE KEYS */;
INSERT INTO `tblstudents` VALUES (1,'04-16-0077',2,1,2),(2,'04-18-0125',3,2,4),(3,'04-15-0073',4,3,2),(4,'04-15-0074',5,4,1),(5,'04-16-0052',6,5,2),(6,'04-18-0080',7,6,4),(7,'04-16-0030',8,7,2),(8,'04-18-0043',9,8,4),(9,'04-18-0064',10,9,4),(10,'04-16-0004',11,10,2),(11,'04-15-0061',12,11,1),(12,'04-15-0072',13,12,1),(13,'04-18-0004',14,13,4),(14,'04-18-0119',15,14,4),(15,'04-18-0054',16,15,4),(16,'04-15-0077',17,16,2),(17,'04-18-0071',18,17,3),(18,'04-17-0042',19,18,2),(19,'04-16-0024',20,19,2),(20,'04-17-0077',21,20,2),(21,'04-18-0049',22,21,4),(22,'04-17-0043',23,22,2),(23,'04-15-0040',24,23,2),(24,'04-18-0016',25,24,4),(25,'04-15-0018',26,25,2),(26,'04-15-0025',27,26,2),(27,'04-16-0055',28,27,2),(28,'04-16-0020',29,28,2),(29,'04-18-0114',30,29,2),(30,'04-15-0047',31,30,1),(31,'04-17-0044',32,31,2),(32,'04-17-0028',33,32,2),(33,'04-15-0076',34,33,2),(34,'04-18-0113',35,34,2),(35,'04-17-0070',36,35,2),(36,'04-18-0127',37,36,4),(37,'04-14-0040',38,37,1),(38,'04-15-0079',39,38,1),(39,'04-17-0020',40,39,2),(40,'04-16-0031',41,40,2),(41,'04-17-0079',42,41,2),(42,'04-15-0034',43,42,1),(43,'04-15-0028',44,43,2),(44,'04-18-0068',45,44,4),(45,'04-18-0138',46,45,4),(46,'04-16-0070',47,46,2),(47,'04-16-0051',48,47,1),(48,'04-17-0009',49,48,2),(49,'04-18-0038',50,49,4),(50,'04-17-0017',51,50,2),(51,'04-16-0014',52,51,2),(52,'04-18-0073',53,52,3),(53,'04-18-0040',54,53,3),(54,'04-16-0046',55,54,2),(55,'04-17-0092',56,55,4),(56,'04-16-0043',57,56,2),(57,'04-15-0092',58,57,2),(58,'04-18-0007',59,58,3),(59,'asd',60,59,2),(60,'04-18-0025',61,60,4),(61,'04-18-0069',62,61,4),(62,'04-18-0002',63,62,4),(63,'04-17-0061',64,63,2),(64,'04-18-0041',65,64,4),(65,'04-17-0002',66,65,2),(66,'04-18-0103',67,66,3),(67,'04-18-0081',68,67,1),(68,'04-15-0046',69,68,2),(69,'04-15-0001',70,69,2),(70,'04-14-0070',71,70,1),(71,'04-13-0029',72,71,1);
/*!40000 ALTER TABLE `tblstudents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblsubjectprerequisites`
--

DROP TABLE IF EXISTS `tblsubjectprerequisites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblsubjectprerequisites` (
  `PrerequisiteID` int(11) NOT NULL AUTO_INCREMENT,
  `SubjectID` int(11) DEFAULT NULL,
  `TypeID` int(11) DEFAULT NULL,
  `PSubjectID` int(11) DEFAULT NULL,
  `YearLevelID` int(11) DEFAULT NULL,
  PRIMARY KEY (`PrerequisiteID`),
  KEY `SubjectID` (`SubjectID`),
  KEY `TypeID` (`TypeID`),
  KEY `PSubjectID` (`PSubjectID`),
  KEY `YearLevelID` (`YearLevelID`),
  CONSTRAINT `tblsubjectprerequisites_ibfk_1` FOREIGN KEY (`SubjectID`) REFERENCES `tblcoursesubjects` (`SubjectID`) ON DELETE CASCADE,
  CONSTRAINT `tblsubjectprerequisites_ibfk_2` FOREIGN KEY (`TypeID`) REFERENCES `tblprerequisitetype` (`TypeID`) ON DELETE CASCADE,
  CONSTRAINT `tblsubjectprerequisites_ibfk_3` FOREIGN KEY (`PSubjectID`) REFERENCES `tblcoursesubjects` (`SubjectID`) ON DELETE CASCADE,
  CONSTRAINT `tblsubjectprerequisites_ibfk_4` FOREIGN KEY (`YearLevelID`) REFERENCES `tblyearlevels` (`YearLevelID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=163 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblsubjectprerequisites`
--

LOCK TABLES `tblsubjectprerequisites` WRITE;
/*!40000 ALTER TABLE `tblsubjectprerequisites` DISABLE KEYS */;
INSERT INTO `tblsubjectprerequisites` VALUES (1,10,1,1,NULL),(2,11,1,2,NULL),(3,11,1,3,NULL),(4,12,1,7,NULL),(5,13,1,2,NULL),(6,14,1,2,NULL),(7,14,1,3,NULL),(8,16,1,5,NULL),(9,17,1,8,NULL),(10,18,1,9,NULL),(11,20,1,10,NULL),(12,21,1,11,NULL),(13,21,1,13,NULL),(14,21,1,14,NULL),(15,22,1,2,NULL),(16,22,1,3,NULL),(17,26,1,17,NULL),(18,27,1,19,NULL),(19,28,1,2,NULL),(20,29,1,21,NULL),(21,30,1,22,NULL),(22,31,1,6,NULL),(23,33,1,27,NULL),(24,34,1,26,NULL),(25,35,2,NULL,3),(26,36,1,29,NULL),(27,37,1,22,NULL),(28,37,1,29,NULL),(29,38,1,30,NULL),(30,38,1,29,NULL),(31,39,1,30,NULL),(32,39,1,29,NULL),(33,40,1,30,NULL),(34,41,1,31,NULL),(35,42,1,2,NULL),(36,43,1,36,NULL),(37,44,1,38,NULL),(38,45,1,4,NULL),(39,46,2,NULL,3),(40,47,1,40,NULL),(41,48,1,38,NULL),(42,49,1,41,NULL),(43,50,1,41,NULL),(44,51,1,43,NULL),(45,52,1,46,NULL),(46,192,2,NULL,3),(47,54,1,49,NULL),(48,55,1,47,NULL),(49,55,1,48,NULL),(50,56,1,37,NULL),(51,57,1,43,NULL),(52,58,1,16,NULL),(53,60,1,54,NULL),(54,61,1,53,NULL),(55,62,1,41,NULL),(56,62,1,54,NULL),(57,63,1,4,NULL),(58,74,1,52,NULL),(59,196,2,NULL,3),(60,67,1,31,NULL),(61,68,1,31,NULL),(62,197,2,NULL,3),(63,70,1,61,NULL),(64,198,2,NULL,3),(65,73,1,60,NULL),(66,141,1,74,NULL),(67,53,2,NULL,4),(68,76,1,67,NULL),(69,65,2,NULL,4),(70,78,1,73,NULL),(71,135,2,NULL,4),(72,91,1,81,NULL),(73,92,1,82,NULL),(74,94,1,85,NULL),(75,99,1,88,NULL),(76,100,1,89,NULL),(77,101,1,90,NULL),(78,102,1,91,NULL),(79,103,1,92,NULL),(80,104,1,94,NULL),(81,105,1,94,NULL),(82,106,1,94,NULL),(83,110,1,100,NULL),(84,111,1,106,NULL),(85,112,1,106,NULL),(86,113,1,106,NULL),(87,114,1,104,NULL),(88,117,1,99,NULL),(89,119,1,89,NULL),(90,120,1,111,NULL),(91,121,1,111,NULL),(92,122,1,111,NULL),(93,127,1,116,NULL),(94,128,1,121,NULL),(95,129,1,121,NULL),(96,130,1,121,NULL),(97,64,1,123,NULL),(98,203,2,NULL,4),(99,137,1,129,NULL),(100,138,1,129,NULL),(101,139,1,112,NULL),(102,159,1,150,NULL),(103,160,1,151,NULL),(104,161,1,153,NULL),(105,162,1,150,NULL),(106,163,1,154,NULL),(107,164,1,155,NULL),(108,168,1,159,NULL),(109,169,1,150,NULL),(110,170,1,161,NULL),(111,171,1,160,NULL),(112,173,1,148,NULL),(113,174,1,163,NULL),(114,175,1,170,NULL),(115,176,1,168,NULL),(116,177,1,170,NULL),(117,178,1,171,NULL),(118,180,1,172,NULL),(119,181,1,174,NULL),(120,184,1,178,NULL),(121,186,1,178,NULL),(122,187,1,178,NULL),(123,187,1,153,NULL),(124,188,1,176,NULL),(125,188,1,178,NULL),(126,189,1,178,NULL),(127,191,1,182,NULL),(128,69,2,NULL,5),(129,193,1,186,NULL),(130,194,1,184,NULL),(131,195,1,169,NULL),(132,195,1,184,NULL),(133,72,2,NULL,5),(134,75,2,NULL,5),(135,77,2,NULL,5),(136,200,1,191,NULL),(137,201,1,194,NULL),(138,202,1,194,NULL),(139,80,2,NULL,5),(140,204,1,188,NULL),(141,205,1,195,NULL),(142,206,1,198,NULL),(143,207,1,200,NULL),(144,209,1,206,NULL),(145,223,1,216,NULL),(146,226,1,218,NULL),(147,227,1,219,NULL),(148,231,1,223,NULL),(149,232,1,223,NULL),(150,235,1,226,NULL),(151,237,1,234,NULL),(152,239,1,231,NULL),(153,240,1,232,NULL),(154,242,1,235,NULL),(155,244,1,236,NULL),(156,247,1,231,NULL),(157,248,1,233,NULL),(158,251,1,243,NULL),(159,258,1,251,NULL),(160,260,1,252,NULL),(161,264,1,258,NULL),(162,265,1,259,NULL);
/*!40000 ALTER TABLE `tblsubjectprerequisites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbluserroles`
--

DROP TABLE IF EXISTS `tbluserroles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbluserroles` (
  `RoleID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`RoleID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbluserroles`
--

LOCK TABLES `tbluserroles` WRITE;
/*!40000 ALTER TABLE `tbluserroles` DISABLE KEYS */;
INSERT INTO `tbluserroles` VALUES (1,'Administrator'),(2,'Faculty Member'),(3,'Student');
/*!40000 ALTER TABLE `tbluserroles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblusers`
--

DROP TABLE IF EXISTS `tblusers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblusers` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `RoleID` int(11) DEFAULT NULL,
  `StatusID` int(11) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `ProfilePic` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`UserID`),
  KEY `RoleID` (`RoleID`),
  KEY `StatusID` (`StatusID`),
  CONSTRAINT `tblusers_ibfk_1` FOREIGN KEY (`RoleID`) REFERENCES `tbluserroles` (`RoleID`) ON DELETE CASCADE,
  CONSTRAINT `tblusers_ibfk_2` FOREIGN KEY (`StatusID`) REFERENCES `tbluserstatus` (`StatusID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblusers`
--

LOCK TABLES `tblusers` WRITE;
/*!40000 ALTER TABLE `tblusers` DISABLE KEYS */;
INSERT INTO `tblusers` VALUES (1,1,1,'Admin','e3afed0047b08059d0fada10f400c1e5',''),(2,3,1,'04-16-0077','aaeb6557ce12b8cc891fd0b2845347da',''),(3,3,1,'04-18-0125','f0e631c9ea5fc0f2f6ea79f70197d899',''),(4,3,1,'04-15-0073','483d5c188dd340b81cb62fa7759f77a6',''),(5,3,1,'04-15-0074','87adea4cad3b14642d6b0c839dcd95f5',''),(6,3,1,'04-16-0052','bf8c0e576df30edfbb27ba700d4a154e',''),(7,3,1,'04-18-0080','6e835d3210c4fcd12de4bdb82d17f716',''),(8,3,1,'04-16-0030','ecacdd92678959cfa67ff9e4e1c9cff0',''),(9,3,1,'04-18-0043','478bade1fa74aadeb551101f3ea2631b',''),(10,3,1,'04-18-0064','c2b92970c9d113b21e6a6fc1136ea403',''),(11,3,1,'04-16-0004','3e59d93eed1dc581793a079c864ec26d',''),(12,3,1,'04-15-0061','77727c3daf35e81bb12c363a034e3712',''),(13,3,1,'04-15-0072','c5e00952e522d965f9930a9fd3b86671',''),(14,3,1,'04-18-0004','f3f8e5515487d0abd3a583f0204ba2be',''),(15,3,1,'04-18-0119','d7c538160c9cf956727377de74e6d254',''),(16,3,1,'04-18-0054','5998e46432e5311ad12a34754e4911fc',''),(17,3,1,'04-15-0077','65068f58aedaa0c927c5c665e6b68aed',''),(18,3,1,'04-18-0071','53166c43a23e9fe21b45f47722b3acce',''),(19,3,1,'04-17-0042','625d34da5e783b7d5e1874d446b385de',''),(20,3,1,'04-16-0024','e26b2f1c2406e60b663f0c34707aaa6e',''),(21,3,1,'04-17-0077','0fc8d5dde3b6fc9d654d0dde0206908d',''),(22,3,1,'04-18-0049','5af25ea5b43a57ad4fbbdbbfdd4cf670',''),(23,3,1,'04-17-0043','8fedee2d4cc25d8d4e6c878f54b82265',''),(24,3,1,'04-15-0040','db9fff53ad0211e8bc86031a76a6b21d',''),(25,3,1,'04-18-0016','9cdf6fe2c897586e6720a6510b26a4ff',''),(26,3,1,'04-15-0018','2db0bb94fdc54d8cc69b9b2aad7a0685',''),(27,3,1,'04-15-0025','419c192504892f470431c20c6fc8a140',''),(28,3,1,'04-16-0055','6ac66a876eca051a3d8392a52aa06903',''),(29,3,1,'04-16-0020','d399c66baedd9bd5a17ac6828d16ae54',''),(30,3,1,'04-18-0114','a98db936efa14428a0c0fbde0dc25c18',''),(31,3,1,'04-15-0047','532e7861993b557f8e081343cf4a61a1',''),(32,3,1,'04-17-0044','fcfd8443926840cddf5a63c77e83e61f',''),(33,3,1,'04-17-0028','710902543fa004c81eb0ce341e6acd5f',''),(34,3,1,'04-15-0076','8f5ec3a0e4bfa63338f8b21c79fc2e15',''),(35,3,1,'04-18-0113','d410acd4643e6582fc7a2fd15634e258',''),(36,3,1,'04-17-0070','7e4ba0bd28c16a2a0a1b43ed3d915ba7',''),(37,3,1,'04-18-0127','5a4678161ac525d686802ff63490f52a',''),(38,3,1,'04-14-0040','54a79c54db36a075ae11328b9d0bbc87',''),(39,3,1,'04-15-0079','5ca5c92e2b72b7abf326e718de210960',''),(40,3,1,'04-17-0020','93cc84fbf4533cd877a66746c2d032be',''),(41,3,1,'04-16-0031','b42609b981c60b8db8614834362b5636',''),(42,3,1,'04-17-0079','c882a3a4345f19dc9aa64dbc34a3863a',''),(43,3,1,'04-15-0034','63eea10e16be23ea145c62a42a87964f',''),(44,3,1,'04-15-0028','7978a9dada2e12d8317fd12bfc73dc65',''),(45,3,1,'04-18-0068','165b4464c7f257b79478d07fc588dbb0',''),(46,3,1,'04-18-0138','5bed7ad3686a273e728836bb5e62c8d6',''),(47,3,1,'04-16-0070','0121db897c8fa844b073ac620d671a7e',''),(48,3,1,'04-16-0051','c25665798fcb11672f8c9bfaaa3c6b97',''),(49,3,1,'04-17-0009','c844329ca49f279d0baaf384cc8bc7d1',''),(50,3,1,'04-18-0038','b80d84e9d9aaec443952f94bd433132a',''),(51,3,1,'04-17-0017','607ee6e5d5aafb0912598cc884bab4e7',''),(52,3,1,'04-16-0014','e7e9d35b022f8c7d8a54004aba219d0e',''),(53,3,1,'04-18-0073','cfc209f6a3e646c25c50580559e4e541',''),(54,3,1,'04-18-0040','98cc4101ec6c2c01d62093eb1e5ad3cb',''),(55,3,1,'04-16-0046','24f09d7c04015462de5de4f2c95a5f5c',''),(56,3,1,'04-17-0092','71b9aa1771782288c59bcf66dfcedd91',''),(57,3,1,'04-16-0043','effb9e82635eb132526b07cf57a56dae',''),(58,3,1,'04-15-0092','73ca86dba8270bc388e7f3bcf347a218',''),(59,3,1,'04-18-0007','efedcfbd9dd0b54bea63664c04b8d1da',''),(60,3,1,'asd','7815696ecbf1c96e6894b779456d330e',''),(61,3,1,'04-18-0025','17ccadf872c79f3bcf8cfdd551539ec5',''),(62,3,1,'04-18-0069','0e6dff88b70f83adbe59e9f4e7a5fec8',''),(63,3,1,'04-18-0002','964e44ac672e903927b1bedc9f8072d5',''),(64,3,1,'04-17-0061','3ac52af718c182d1413fa13d5f38d6b8',''),(65,3,1,'04-18-0041','d73983e713258dfa31817ef34c943876',''),(66,3,1,'04-17-0002','1af682c85c6bdffa47add2d16c48a9c6',''),(67,3,1,'04-18-0103','a292e22349f60337f68d65707255769a',''),(68,3,1,'04-18-0081','edd6b22447e27b53770fc2c2125bc946',''),(69,3,1,'04-15-0046','41fdffca7df835bf91271d5de55382d1',''),(70,3,1,'04-15-0001','ff892cf2220a984499a8452522aa818f',''),(71,3,1,'04-14-0070','8ad5b12f7724caff8400846adbbb5b34',''),(72,3,1,'04-13-0029','8eb0f4ed8c9eb78db78b6cc08929256b',''),(73,2,1,'1214-92','fc8e8c2509bc748ccfa04fdfc04f4b91',''),(74,2,1,'1011-89','e7f39ad47770038f50e6233bc58b9a66',''),(75,2,1,'1224-07','6e3b39254ee01b3624f9e0b3383773e7',''),(76,2,1,'0629-18','80a482e6e0023f24631fc50cb1593fae',''),(77,2,1,'0001-18','8937b2f98551707d3f5af7149d1650bb',''),(78,2,1,'0002-18','01967f469362514d5e472fbb087a3f0e',''),(79,2,1,'0003-18','260182a96df2fec6933ae3b175e5b692',''),(80,2,1,'0004-18','b9ed17333eac7e8a1db3823c874bdb3b',''),(81,2,1,'0005-18','04501358ff461f10d30a14ed2ba667ed',''),(82,2,1,'0006-18','934830af51121a2b582987e586b19949',''),(83,2,1,'0007-18','2ba18e8127523482600866d36aa19d86',''),(84,2,1,'0008-18','2aefea443d130007f382004b194a9bdf',''),(85,2,1,'0009-18','98cdc7f410569350b590c5813218eef6',''),(86,2,1,'0010-18','33e62c77b6cd7e6af274b4f1d7ad0624',''),(87,2,1,'0011-18','ea05ccf66622fca54c79cd641da479b0',''),(88,2,1,'0012-18','08258bdcbf985c7c2df15062128093bd',''),(89,2,1,'0013-18','122b3579ec9c9848ecfcd86431308bfe',''),(90,2,1,'0014-18','fa9d0d92bbed47a58eb83527ae16eca1',''),(91,2,1,'0015-18','1e47b9c3ebe3787b80d6de1ae333046d','');
/*!40000 ALTER TABLE `tblusers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbluserstatus`
--

DROP TABLE IF EXISTS `tbluserstatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbluserstatus` (
  `StatusID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`StatusID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbluserstatus`
--

LOCK TABLES `tbluserstatus` WRITE;
/*!40000 ALTER TABLE `tbluserstatus` DISABLE KEYS */;
INSERT INTO `tbluserstatus` VALUES (1,'Activated'),(2,'Deactivated');
/*!40000 ALTER TABLE `tbluserstatus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblyearlevels`
--

DROP TABLE IF EXISTS `tblyearlevels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblyearlevels` (
  `YearLevelID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`YearLevelID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblyearlevels`
--

LOCK TABLES `tblyearlevels` WRITE;
/*!40000 ALTER TABLE `tblyearlevels` DISABLE KEYS */;
INSERT INTO `tblyearlevels` VALUES (1,'1st Year'),(2,'2nd Year'),(3,'3rd Year'),(4,'4th Year'),(5,'5th Year');
/*!40000 ALTER TABLE `tblyearlevels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database '2022-2023'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-05  5:00:34
