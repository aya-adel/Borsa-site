-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: borsa
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
-- Table structure for table `Share`
--

DROP TABLE IF EXISTS `Share`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Share` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
<<<<<<< HEAD
  `time` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=404 DEFAULT CHARSET=latin1;
=======
  `time` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
>>>>>>> f4f855e6990b796a55ce0cddbf30e305ed4914ba
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Share`
--

LOCK TABLES `Share` WRITE;
/*!40000 ALTER TABLE `Share` DISABLE KEYS */;
<<<<<<< HEAD
INSERT INTO `Share` VALUES (365,'Apple Inc.','103.01','0000-00-00'),(384,'Symantec Corporation','16.62','0000-00-00'),(394,'Microsoft Corporation','52.03','0000-00-00'),(396,'Hewlett Packard Enterprise Comp','15.44','0000-00-00'),(397,'Petroleo Brasileiro S.A.- Petro','5.26','0000-00-00'),(398,'H&R Block, Inc. Common Stock','27.76','0000-00-00'),(399,'Alphabet Inc.','730.22','0000-00-00'),(401,'Seadrill Limited Ordinary Share','5.97','0000-00-00'),(402,'North Atlantic Drilling Ltd. Co','3.34','0000-00-00'),(403,'Whiting Petroleum Corporation C','7.09','0000-00-00');
=======
INSERT INTO `Share` VALUES (1,'Apple Inc.','101.87','March 8, 2016, 2:33 pm'),(2,'Symantec Corporation','17.09','March 8, 2016, 2:33 pm'),(3,'Microsoft Corporation','51.03','March 8, 2016, 2:33 pm'),(4,'Hewlett Packard Enterprise Comp','15.97','March 8, 2016, 2:33 pm'),(5,'Petroleo Brasileiro S.A.- Petro','5.22','March 8, 2016, 2:33 pm'),(6,'H&R Block, Inc. Common Stock','28.11','March 8, 2016, 2:33 pm'),(7,'Alphabet Inc.','712.80','March 8, 2016, 2:33 pm'),(8,'Seadrill Limited Ordinary Share','6.06','March 8, 2016, 2:33 pm'),(9,'North Atlantic Drilling Ltd. Co','3.52','March 8, 2016, 2:33 pm'),(10,'Whiting Petroleum Corporation C','8.16','March 8, 2016, 2:33 pm');
>>>>>>> f4f855e6990b796a55ce0cddbf30e305ed4914ba
/*!40000 ALTER TABLE `Share` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data`
--

LOCK TABLES `data` WRITE;
/*!40000 ALTER TABLE `data` DISABLE KEYS */;
/*!40000 ALTER TABLE `data` ENABLE KEYS */;
UNLOCK TABLES;

--
<<<<<<< HEAD
=======
-- Table structure for table `temp_price`
--

DROP TABLE IF EXISTS `temp_price`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp_price` (
  `share_id` int(50) NOT NULL,
  `share_name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `time` date NOT NULL,
  KEY `share_id` (`share_id`),
  CONSTRAINT `temp_price_ibfk_1` FOREIGN KEY (`share_id`) REFERENCES `Share` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp_price`
--

LOCK TABLES `temp_price` WRITE;
/*!40000 ALTER TABLE `temp_price` DISABLE KEYS */;
INSERT INTO `temp_price` VALUES (1,'Apple Inc.',102,'0000-00-00'),(2,'Symantec Corporation',17,'0000-00-00'),(3,'Microsoft Corporation',51,'0000-00-00'),(4,'Hewlett Packard Enterprise Comp',16,'0000-00-00'),(5,'Petroleo Brasileiro S.A.- Petro',5,'0000-00-00'),(6,'H&R Block, Inc. Common Stock',28,'0000-00-00'),(7,'Alphabet Inc.',713,'0000-00-00'),(8,'Seadrill Limited Ordinary Share',6,'0000-00-00'),(9,'North Atlantic Drilling Ltd. Co',4,'0000-00-00'),(10,'Whiting Petroleum Corporation C',8,'0000-00-00'),(1,'Apple Inc.',102,'0000-00-00'),(2,'Symantec Corporation',17,'0000-00-00'),(3,'Microsoft Corporation',51,'0000-00-00'),(4,'Hewlett Packard Enterprise Comp',16,'0000-00-00'),(5,'Petroleo Brasileiro S.A.- Petro',5,'0000-00-00'),(6,'H&R Block, Inc. Common Stock',28,'0000-00-00'),(7,'Alphabet Inc.',713,'0000-00-00'),(8,'Seadrill Limited Ordinary Share',6,'0000-00-00'),(9,'North Atlantic Drilling Ltd. Co',4,'0000-00-00'),(10,'Whiting Petroleum Corporation C',8,'0000-00-00');
/*!40000 ALTER TABLE `temp_price` ENABLE KEYS */;
UNLOCK TABLES;

--
>>>>>>> f4f855e6990b796a55ce0cddbf30e305ed4914ba
-- Table structure for table `user_share`
--

DROP TABLE IF EXISTS `user_share`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_share` (
  `user_id` int(50) NOT NULL,
  `share_id` int(50) NOT NULL,
  `flag` int(10) NOT NULL,
  `wPrice` int(50) NOT NULL,
  PRIMARY KEY (`user_id`,`share_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_share`
--

LOCK TABLES `user_share` WRITE;
/*!40000 ALTER TABLE `user_share` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_share` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

<<<<<<< HEAD
-- Dump completed on 2016-03-06 19:29:13
=======
-- Dump completed on 2016-03-08 16:20:09
>>>>>>> f4f855e6990b796a55ce0cddbf30e305ed4914ba
