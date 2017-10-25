-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: library
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
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id_UNIQUE` (`Id`),
  UNIQUE KEY `Email_UNIQUE` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'Sybil','Shilvock','sshilvock0@miitbeian.gov.cn','Female'),(2,'Omero','Semour','osemour1@comsenz.com','Male'),(3,'Faustina','Gimber','fgimber2@ebay.com','Female'),(4,'Brinn','Crosio','bcrosio3@cnn.com','Female'),(5,'Ryon','Semper','rsemper4@princeton.edu','Male'),(6,'Derrek','Sebire','dsebire5@sciencedaily.com','Male'),(7,'Kara','Frankling','kfrankling6@ucla.edu','Female'),(8,'Giovanna','Laise','glaise7@illinois.edu','Female'),(9,'Shanda','Darby','sdarby8@comcast.net','Female'),(10,'Janot','Whetland','jwhetland9@wikispaces.com','Female'),(11,'Tierney','Alwell','talwella@google.cn','Female'),(12,'Thedric','Freemantle','tfreemantleb@yale.edu','Male'),(13,'Ebenezer','Courtes','ecourtesc@theglobeandmail.com','Male'),(14,'Jenny','Jessop','jjessopd@eepurl.com','Female'),(15,'Ive','Aingell','iaingelle@last.fm','Male'),(16,'Cassaundra','Pounsett','cpounsettf@linkedin.com','Female'),(17,'Maison','Bateup','mbateupg@wp.com','Male'),(18,'Starlin','Bridgnell','sbridgnellh@csmonitor.com','Female'),(19,'Baldwin','Simpkins','bsimpkinsi@squarespace.com','Male'),(20,'Prudence','Stait','pstaitj@blog.com','Female'),(21,'Sharleen','Heatlie','sheatliek@washington.edu','Female'),(22,'Ursala','Beavan','ubeavanl@free.fr','Female'),(23,'Patric','Florentine','pflorentinem@miibeian.gov.cn','Male'),(24,'Minnie','Thomen','mthomenn@thetimes.co.uk','Female'),(25,'Arvin','Cambell','acambello@theguardian.com','Male'),(26,'Pat','Zavattiero','pzavattierop@comsenz.com','Female'),(27,'Kamillah','Wescott','kwescottq@list-manage.com','Female'),(28,'Brinn','Asty','bastyr@forbes.com','Female'),(29,'Robby','Colthard','rcolthards@java.com','Female'),(30,'Sidonnie','Brideaux','sbrideauxt@lycos.com','Female'),(31,'Elna','Frears','efrearsu@hc360.com','Female'),(32,'Baldwin','Sokale','bsokalev@ucoz.com','Male'),(33,'Clarine','Percifull','cpercifullw@360.cn','Female'),(34,'Eveline','Spaice','espaicex@trellian.com','Female'),(35,'Norbert','Lowis','nlowisy@godaddy.com','Male'),(36,'Evered','Beals','ebealsz@google.ru','Male'),(37,'Jackelyn','Rickesies','jrickesies10@auda.org.au','Female'),(38,'Craggy','Peres','cperes11@businesswire.com','Male'),(39,'Morse','Ivimey','mivimey12@friendfeed.com','Male'),(40,'Ginger','Tremonte','gtremonte13@wordpress.com','Female'),(41,'Hansiain','Doward','hdoward14@google.ru','Male'),(42,'Carma','Sabbatier','csabbatier15@networkadvertising.org','Female'),(43,'Garv','Tall','gtall16@usgs.gov','Male'),(44,'Jonathon','Brimble','jbrimble17@yahoo.co.jp','Male'),(45,'Rustin','Suthworth','rsuthworth18@nba.com','Male'),(46,'Emlynn','Triplet','etriplet19@marriott.com','Female'),(47,'Miriam','Tuxell','mtuxell1a@ft.com','Female'),(48,'Paulie','Geeves','pgeeves1b@discovery.com','Male'),(49,'Kennie','MacVean','kmacvean1c@dropbox.com','Male'),(50,'Augustus','Sewards','asewards1d@yellowpages.com','Male');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-25  0:16:55
