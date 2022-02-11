-- MySQL dump 10.13  Distrib 8.0.16, for macos10.14 (x86_64)
--
-- Host: localhost    Database: portfolio
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `portfolio_contact`
--

DROP TABLE IF EXISTS `portfolio_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `portfolio_contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `cc` varchar(60) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolio_contact`
--

LOCK TABLES `portfolio_contact` WRITE;
/*!40000 ALTER TABLE `portfolio_contact` DISABLE KEYS */;
INSERT INTO `portfolio_contact` VALUES (1,'','','','',''),(2,' Pe$ter ','peter@aol.com','','Just another test','test'),(3,' Trish^ Daphne ','trish@gmail.com','','Just another test','test'),(4,'\" Ronald Reagan\"','reaganpower@gmail.com','','Just another test','\"  test \"'),(5,'<h1> Bobby Holsworth </h1>','hols@gmail.com','','Just another test','test'),(6,'<h1> Hil$ary </h1>','hilary@hotmail.com','','Just another test','test'),(7,'<h1> Hilary </h1>','hilary@hotmail.com','','Just another test','test'),(8,'<p> Barnaby </p>','detective@gmail.co.uk','','Just another test','test'),(9,'£ Ronald Reagan%$','reaganpower@gmail.com','','Just another test','\"  test \"'),(10,'Amber','amber@gmail.com','','',''),(11,'B/ob Gib/son','gibson@gmail.com','','Just another test','test'),(12,'Barney Kessle','kessle@gmail.com','','Just another test','test'),(13,'Bil/ly Shears','billy@gmail.com','','Just another test','test'),(14,'Billy Crystal','crystal@gmail.com','','Just another test','test'),(15,'Bis/mark','otto@aol.com','','Just another test','test'),(16,'Bo%%bby Holsworth','hols@gmail.com','','Just another test','test'),(17,'Bob Wiseman','bobwise@hotmail.com','','Just another test','test'),(18,'Cecil Kessle','kessle@gmail.com','','Just another test','test'),(19,'Dolly Dagger','dagger@aol.com','','',''),(20,'Felicity Kendall','kendall@aol.com','','Just another test','test'),(21,'Gertrand Smith','gerta@gmail.com','','Just another test','test'),(22,'Harriott Varley','varley@aol.com','','Just another test','test'),(23,'Helen Douglas','house@hotmail.com','','Just another test','test'),(24,'Joe Brown','browney@gmail.com','','Just another test','test'),(25,'La>','larrysears@gmail.com','','Just another test','test'),(26,'Lazlo Sears','lazlo@hotmail.co.uk','','','Hi'),(27,'Leroy James','leroy@gmail.com','','Just another test','test'),(28,'Leroy Jenkins','leroy@gmail.com','','Just another test','test'),(29,'Lilly hears','lilly@gmail.com','','Just another test','test'),(30,'Lilly Sanders','sanders@gmail.com','','Just another test','test'),(31,'Lucy Lacey','lacey@gmail.com','','Just another test','test'),(32,'Mike Austin','austin@hotmail.com','','Just another test','test'),(33,'Patricia Parvel','parvel@hotmail.co.uk','','Just another test','test'),(34,'Reginald White','reg@gmail.com','','Just another test','test'),(35,'Roy Haley','royhaley@aol.com','','Just another test','test'),(36,'Victoria Giani','victor@gmail.com','','Just another test','test'),(37,'Wilber','wilbersearsgmail.com','','Just another test','test'),(38,'Wilber Sears','wilbersears@gmail.com','','Just another test','test'),(39,'Wilber Wears','wilbersears@gmail.com','','Just another test','test'),(40,'Wilfred Mears','wilbersears@gmail.com','','Test','test'),(41,'William Augustine','august@aol.com','','Just another test','test'),(42,'Chris Squire','chris@gmail.com','','Test','test'),(43,'Chris Squire','chris@gmail.com','','Test','test');
/*!40000 ALTER TABLE `portfolio_contact` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-11 14:45:04
