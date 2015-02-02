-- MySQL dump 10.13  Distrib 5.1.73, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: gentai
-- ------------------------------------------------------
-- Server version	5.1.73

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
-- Table structure for table `gt_protables`
--

DROP TABLE IF EXISTS `gt_protables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gt_protables` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'å”¯ä¸€è‡ªå¢žid',
  `date` varchar(15) NOT NULL COMMENT 'å¡«è¡¨æ—¥æœŸå­—ç¬¦ä¸²',
  `author` varchar(10) NOT NULL COMMENT 'å¡«è¡¨äºº',
  `customer_a` varchar(20) NOT NULL COMMENT 'å®¢æˆ·å•ä½',
  `customer_b` varchar(10) NOT NULL COMMENT 'å®¢æˆ·å§“å',
  `salesman` varchar(10) NOT NULL COMMENT 'ä¸šåŠ¡è´Ÿè´£äºº',
  `mdate` varchar(15) NOT NULL COMMENT 'æˆ‘æ–¹ç­¾å­—å­—ç¬¦ä¸²',
  `ydate` varchar(15) NOT NULL COMMENT 'å®¢æˆ·ç­¾å­—å­—ç¬¦ä¸²',
  `cdate` varchar(15) NOT NULL COMMENT 'åˆåŒç­¾è®¢æ—¥æœŸå­—ç¬¦ä¸²',
  `aom` int(10) NOT NULL COMMENT 'åˆåŒé‡‘é¢',
  `paytype` varchar(20) NOT NULL COMMENT 'ä»˜æ¬¾æ–¹å¼',
  `cnum` int(20) NOT NULL COMMENT 'åˆåŒç¼–å·',
  `onum` int(20) NOT NULL COMMENT 'ä¸‹å•ç¼–å·',
  `prjman` varchar(10) NOT NULL COMMENT 'é¡¹ç›®è´Ÿè´£äºº',
  `odate` varchar(20) NOT NULL COMMENT 'ä¸‹å•æ—¥æœŸ',
  `sdate` varchar(20) NOT NULL COMMENT 'å‘è´§æ—¥æœŸ',
  `stype` varchar(20) NOT NULL COMMENT 'å‘è´§æ–¹å¼',
  `techman` varchar(10) NOT NULL COMMENT 'å®‰è£…è°ƒè¯•äºº',
  `tdate` varchar(20) NOT NULL COMMENT 'å®‰è£…æ—¥æœŸ',
  `checkdate` varchar(20) NOT NULL COMMENT 'éªŒè´§æ—¥æœŸ',
  `checkman` varchar(10) NOT NULL COMMENT 'éªŒæ”¶äºº',
  `cpu` varchar(20) NOT NULL COMMENT 'CPU',
  `memery` varchar(20) NOT NULL COMMENT 'å†…å­˜',
  `board` varchar(20) NOT NULL COMMENT 'ä¸»æ¿',
  `other` varchar(50) NOT NULL COMMENT 'å…¶ä»–é…ä»¶',
  `kdate` varchar(20) NOT NULL COMMENT 'å¼€ç¥¨æ—¥æœŸ',
  `kom` int(10) NOT NULL COMMENT 'å¼€ç¥¨é‡‘é¢',
  `vtax` int(10) NOT NULL COMMENT 'å¢žå€¼ç¨Žé¢',
  `othertax` int(10) NOT NULL COMMENT 'å…¶ä»–>ç¨Žé¢',
  `salescost` int(10) NOT NULL COMMENT 'å”®å‰æˆæœ¬',
  `sentcost` int(10) NOT NULL COMMENT 'é€è´§æˆæœ¬',
  `mancost` int(10) NOT NULL COMMENT 'äººåŠ›æˆæœ¬',
  `cost` int(10) NOT NULL COMMENT 'æ€»æˆæœ¬',
  `gdate` varchar(20) NOT NULL COMMENT 'ä»˜æ¬¾æ—¥æœŸ',
  `gom` int(10) NOT NULL COMMENT 'ä»˜æ¬¾é‡‘é¢',
  `shom` int(10) NOT NULL COMMENT 'åº”æ”¶è´¦æ¬¾',
  `subdate` int(20) NOT NULL COMMENT 'æäº¤æ—¥æœŸ',
  `htstatus` int(1) NOT NULL DEFAULT '0' COMMENT 'åˆåŒçŠ¶æ€',
  `xdstatus` int(1) NOT NULL DEFAULT '0',
  `fhstatus` int(1) NOT NULL DEFAULT '0',
  `kpstatus` int(1) NOT NULL DEFAULT '0',
  `skstatus` int(1) NOT NULL DEFAULT '0',
  `showstatus` int(1) NOT NULL DEFAULT '0' COMMENT 'æ˜¾ç¤ºçŠ¶æ€',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gt_protables`
--

LOCK TABLES `gt_protables` WRITE;
/*!40000 ALTER TABLE `gt_protables` DISABLE KEYS */;
INSERT INTO `gt_protables` VALUES (1,'','','åŒ—äº¬å¤§å­¦','åˆ˜æŸæŸ','å¼ æŸæŸ','','','20190921',1200000,'',34545,435345345,'è¯»æŸæŸ','20110101','','','','','','','ab','abc','abc','abc','',0,0,0,0,0,0,0,'',0,0,0,0,0,1,1,1,1),(2,'201412','ç™½åŠ²æ¾','å¤©æ´¥å¤§å­¦','','å“ˆå“ˆå“ˆ','20142511','12051251','0',12000,'ä¸ç»™',2505464,4142245,'ç™½åŠ²æ¾','2013025','','','','','','','','','','','',0,0,0,0,0,0,0,'',0,0,1422597459,1,0,1,1,1,1),(3,'abc','abc','abc','','abc','abc','abc','',0,'abc',121,1212,'abc','dsf','','','','','','','','','','','',0,0,0,0,0,0,0,'',0,0,1422602979,1,1,1,1,1,1),(4,'sdfdsf','sdfdsf','dsfds','dsfdsf','dsfdsf','dsfdsf','dsfdsf','',200,'dsfdsf',12323,231321,'dsfdsf','23dsfds','','','','','','','','','','','',0,0,0,0,0,0,0,'',0,0,1422603156,1,1,1,1,1,1);
/*!40000 ALTER TABLE `gt_protables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gt_users`
--

DROP TABLE IF EXISTS `gt_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gt_users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'è‡ªå¢žid',
  `gid` int(1) NOT NULL COMMENT 'æƒé™',
  `uname` varchar(15) NOT NULL COMMENT 'ç”¨æˆ·å',
  `upass` varchar(50) NOT NULL COMMENT 'md5åŠ å¯†åŽå¯†ç ',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gt_users`
--

LOCK TABLES `gt_users` WRITE;
/*!40000 ALTER TABLE `gt_users` DISABLE KEYS */;
INSERT INTO `gt_users` VALUES (1,1,'gentaiht','196c5457b4c8eb83c5a6bb044ae6d488'),(2,2,'gentaixd','c53bda6bde4001946d925172de3df3f6'),(3,3,'gentaifh','d13b7df242527d2a662e8b4cc092adc0'),(4,4,'gentaikp','78d250ca5764c2aff6bbcb1e46a919c3'),(5,5,'gentaisk','beab31e6addb878f05cdf00f82c7ce1e'),(6,0,'gentai','e0f5bf1c1699f4ffcee5160a31acf265');
/*!40000 ALTER TABLE `gt_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-02-02 15:43:21
