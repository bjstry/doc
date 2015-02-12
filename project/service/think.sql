-- MySQL dump 10.13  Distrib 5.1.66, for redhat-linux-gnu (x86_64)
--
-- Host: fangxinworld.mysql.domeneshop.no    Database: fangxinworld
-- ------------------------------------------------------
-- Server version	5.5.42-log

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
-- Table structure for table `think_user`
--

DROP TABLE IF EXISTS `think_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `upasswd` varchar(200) NOT NULL,
  `depart` varchar(10) CHARACTER SET utf8 NOT NULL,
  `guid` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `think_apply`
--

DROP TABLE IF EXISTS `think_apply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_apply` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `projectname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `servicetype` int(11) NOT NULL,
  `buyer` varchar(10) CHARACTER SET utf8 NOT NULL,
  `buyerphone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `user` varchar(10) CHARACTER SET utf8 NOT NULL,
  `userphone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `business` varchar(20) CHARACTER SET utf8 NOT NULL,
  `producttime` date NOT NULL,
  `detail` varchar(400) CHARACTER SET utf8 NOT NULL,
  `applytime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '0',
  `aadvice` varchar(150) CHARACTER SET utf8 NOT NULL,
  `busstatus` int(11) DEFAULT '0',
  `moneystatus` int(11) DEFAULT '0',
  `adminstatus` int(11) DEFAULT '0',
  `techstatus` int(11) DEFAULT '0',
  `techreponsor` varchar(15) CHARACTER SET utf8 NOT NULL,
  `workdetail` varchar(150) CHARACTER SET utf8 NOT NULL,
  `assignstatus` tinyint(4) DEFAULT '0',
  `terminate` tinyint(4) DEFAULT '0',
  `badvice` varchar(150) CHARACTER SET utf8 NOT NULL,
  `cadvice` varchar(150) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-02-12  9:02:28
