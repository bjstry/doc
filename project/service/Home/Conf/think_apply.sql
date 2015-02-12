-- MySQL dump 10.13  Distrib 5.1.73, for redhat-linux-gnu (x86_64)
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

--
-- Dumping data for table `think_apply`
--

LOCK TABLES `think_apply` WRITE;
/*!40000 ALTER TABLE `think_apply` DISABLE KEYS */;
INSERT INTO `think_apply` VALUES (41,'gentai-bjs',1,'ss','sss','sss','ddsdsd','ywb','0000-00-00','sdsdsdsadsad','2015-02-11 03:09:23',1,'',0,0,0,0,'jsb','',1,0,'',''),(42,'sdsdsadsa',0,'dsad','sadsad','sadsad','dssdsd','ywb','0000-00-00','sdsadsada','2015-02-11 06:39:15',1,'ewe',0,0,0,0,'jsb','',1,0,'',''),(43,'yfhughg',0,'ghhgh','','','','ywb','0000-00-00','','2015-02-11 06:41:37',1,'',0,0,0,0,'jsb','abcabcabc',1,1,'',''),(44,'baijinsong',0,'abc','abc','abc','abc','ywb','2015-02-26','abc','2015-02-11 06:43:29',1,'',0,0,0,0,'','',0,0,'',''),(45,'43dsrfgg434',0,'','','','','ywb','0000-00-00','','2015-02-11 07:46:01',2,'',0,0,0,0,'jsb','',1,0,'','sefdfdfdf'),(46,'abasdfdasfdsf',1,'aaaaa','aaa','aaa','aaaa','ywb','2015-02-28','aaaa','2015-02-11 08:09:44',1,'',0,0,0,0,'','',0,0,'',''),(47,'没有过质保',1,'abc','abc','abc','sdfdsf','ywb','2015-03-11','dsfdsf','2015-02-11 08:31:57',1,'',0,0,0,0,'','',0,0,'',''),(48,'已过质保',0,'abc','abc','abc','abc','ywb','2015-02-28','abdsf','2015-02-11 08:38:00',1,'',1,1,1,0,'','',0,0,'','');
/*!40000 ALTER TABLE `think_apply` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-02-12  9:16:40
