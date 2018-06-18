-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: database
-- ------------------------------------------------------
-- Server version	5.7.20-log

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
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `comment#` int(11) NOT NULL AUTO_INCREMENT,
  `contents` varchar(200) NOT NULL,
  `writer` varchar(15) NOT NULL,
  `newsID` int(11) NOT NULL,
  PRIMARY KEY (`comment#`,`newsID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (1,'씨발...','최형운',1),(1,'와우 또 그 말 나왔네','백승훈',2),(1,'성조 기사쓰는 속도 엄청 빠르네','권용희',3),(1,'ㅅㅂㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋ','이수현성',4),(1,'345','5',14),(1,'멋져요~','정성조',17),(1,'앗 탁구짱님 반갑습니다','admin',18),(1,'4천억 너무 비싸요...ㅠ','염용근',27),(1,'234','5',34),(2,'???? 진짜 퀴즈 봐???','백승훈',1),(2,'그래... 롤충은 그냥 찌그러져서 혼자 겜이나 할게...','정성조',2),(2,'태서는 기억해뒀다가 학생회비 제곱으로 걷는다','백선우',3),(2,'농구보세여~~~','염용근',16),(2,'감사합니다','염용근',17),(2,'오 된다','탁구짱',18),(2,'ㅠㅠㅠㅠㅠㅠㅠㅠㅠㅠ','염용근',27),(3,'하하','이태호',1),(3,'앙기모띠','이수현',3),(3,'진짜로요','염용근',17),(3,'대박','탁구짱',18),(4,'123','5',3),(4,'신기하군요','탁구짱',18),(5,'57','5',3),(5,'칭찬해드릴게요ㅎㅎ','탁구짱',18),(6,'근데 긴 댓글은 안달리나봐요..','탁구짱',18),(9,'안녕하세요 제가 바로 탁구짱입니다 기사 수정해서 탁구치실 분 모집하려고 했는데 수정이 안되네요ㅎㅎㅎ','탁구짱',18),(10,'앙기모띠','이수현',18);
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `hits_info`
--

DROP TABLE IF EXISTS `hits_info`;
/*!50001 DROP VIEW IF EXISTS `hits_info`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `hits_info` AS SELECT 
 1 AS `nickname`,
 1 AS `title`,
 1 AS `authorID`,
 1 AS `newsID`,
 1 AS `date`,
 1 AS `category`,
 1 AS `all_hits`,
 1 AS `weight_hits10`,
 1 AS `weight_hits20`,
 1 AS `weight_hits30_40`,
 1 AS `weight_hits50_`,
 1 AS `rate`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `hits_info_notuser`
--

DROP TABLE IF EXISTS `hits_info_notuser`;
/*!50001 DROP VIEW IF EXISTS `hits_info_notuser`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `hits_info_notuser` AS SELECT 
 1 AS `title`,
 1 AS `authorID`,
 1 AS `newsID`,
 1 AS `date`,
 1 AS `category`,
 1 AS `all_hits`,
 1 AS `weight_hits10`,
 1 AS `weight_hits20`,
 1 AS `weight_hits30_40`,
 1 AS `weight_hits50_`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `ID` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `authority` int(11) NOT NULL,
  `age` varchar(10) NOT NULL,
  `정치` int(11) DEFAULT '1',
  `경제` int(11) DEFAULT '1',
  `사회` int(11) DEFAULT '1',
  `문화` int(11) DEFAULT '1',
  `스포츠` int(11) DEFAULT '1',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID_UNIQUE` (`ID`),
  UNIQUE KEY `nickname_UNIQUE` (`nickname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES ('1','1','이황',2,'20s',3,4,13,1,5),('2','2','정성조',2,'20s',3,3,2,5,5),('230','230','이세영',2,'30-40s',1,1,1,1,1),('3','3','최형운',2,'10s',1,1,1,1,1),('5','5','5',4,'20s',1,3,2,6,3),('8','8','8',4,'20s',1,1,1,1,1),('admin','tkrnr17','admin',1,'20s',2,2,2,3,2),('author','author','author',2,'50-s',51,7,1,3,3),('duadydrms','duadydrms','염용근',2,'30-40s',9,9,3,1,38),('isoo','asdf','이수현성',2,'20s',1,1,1,1,1),('khsong','khson','송채경화',2,'50-s',3,5,1,1,4),('wldud','wldud','탁구짱',2,'20s',3,1,2,2,6),('yonghee','yonghee','권용희',3,'10s',1,1,1,1,1);
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `title` varchar(80) NOT NULL,
  `contents` varchar(40) DEFAULT NULL,
  `authorID` varchar(15) NOT NULL,
  `newsID` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `10hits` int(11) NOT NULL DEFAULT '0',
  `20hits` int(11) NOT NULL DEFAULT '0',
  `30-40hits` int(11) NOT NULL DEFAULT '0',
  `50-hits` int(11) NOT NULL DEFAULT '0',
  `hits` int(11) NOT NULL DEFAULT '0',
  `category` varchar(10) NOT NULL,
  PRIMARY KEY (`title`),
  UNIQUE KEY `title_UNIQUE` (`title`),
  UNIQUE KEY `newsID_UNIQUE` (`newsID`),
  UNIQUE KEY `contents_UNIQUE` (`contents`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES ('[단독] 미국 법원, 모바일 특허 침해 삼성전자에 “4천억원 배상” 평결','news8.txt','송채경화',27,'2018-06-16 16:06:51',0,0,3,21,1,'경제'),('[오늘의 NBA] (6/11) 2017-18시즌 정리 1부','news7.txt','염용근',17,'2018-06-11 05:49:21',0,4,18,5,0,'스포츠'),('[오늘의 NBA] (6/12) 2017-18시즌 정리 2부','news15.txt','염용근',16,'2018-06-12 06:27:24',0,11,15,2,1,'스포츠'),('“10년 후에 또 만나자” 약속 지키지 못한 채 ‘옛 소련 지휘 거장’ 로즈데스트벤스키 타계','news16.txt','author',35,'2018-06-17 17:46:28',0,2,0,0,3,'문화'),('그냥뉴스','news5.txt','author',5,'2018-06-06 12:43:47',8,3,5,4,5,'사회'),('속보1','news1.txt','이황',1,'2017-11-15 13:30:23',34,13,1,3,8,'정치'),('속보2','news2.txt','정성조',2,'2017-11-17 13:38:54',2,5,5,5,30,'경제'),('속보3','news3.txt','정성조',3,'2017-12-20 04:07:34',2,46,4,30,2,'문화'),('속보4','news4.txt','최형운',4,'2018-03-22 04:33:29',5,7,32,3,2,'사회'),('속보5','news14.txt','정성조',34,'2018-06-17 16:57:45',0,5,7,2,5,'스포츠'),('안녕하세요 기자입니다','news11.txt','탁구짱',18,'2018-06-13 16:01:28',0,71,2,0,6,'사회'),('앙 기모띠','news12.txt','이수현성',19,'2018-06-14 17:49:02',0,7,1,50,2,'정치'),('호날두 호우','news13.txt','author',14,'2018-06-12 06:17:59',0,3,1,5,2,'경제'),('홍준표 \"마지막으로 막말\"…한국당 의원들 \"부글부글\"','news18.txt','이세영',26,'2018-06-16 16:04:20',0,2,2,1,2,'정치');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `hits_info`
--

/*!50001 DROP VIEW IF EXISTS `hits_info`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `hits_info` AS select `member`.`nickname` AS `nickname`,`news`.`title` AS `title`,`news`.`authorID` AS `authorID`,`news`.`newsID` AS `newsID`,`news`.`date` AS `date`,`news`.`category` AS `category`,((((`news`.`hits` + `news`.`10hits`) + `news`.`20hits`) + `news`.`30-40hits`) + `news`.`50-hits`) AS `all_hits`,(((((0.2 * `news`.`hits`) + (0.5 * `news`.`10hits`)) + (0.3 * `news`.`20hits`)) + (0.3 * `news`.`30-40hits`)) + (0.3 * `news`.`50-hits`)) AS `weight_hits10`,(((((0.2 * `news`.`hits`) + (0.3 * `news`.`10hits`)) + (0.5 * `news`.`20hits`)) + (0.3 * `news`.`30-40hits`)) + (0.3 * `news`.`50-hits`)) AS `weight_hits20`,(((((0.2 * `news`.`hits`) + (0.3 * `news`.`10hits`)) + (0.3 * `news`.`20hits`)) + (0.5 * `news`.`30-40hits`)) + (0.3 * `news`.`50-hits`)) AS `weight_hits30_40`,(((((0.2 * `news`.`hits`) + (0.3 * `news`.`10hits`)) + (0.3 * `news`.`20hits`)) + (0.3 * `news`.`30-40hits`)) + (0.5 * `news`.`50-hits`)) AS `weight_hits50_`,(case when (`news`.`category` = '정치') then (`member`.`정치` / ((((`member`.`정치` + `member`.`경제`) + `member`.`사회`) + `member`.`문화`) + `member`.`스포츠`)) when (`news`.`category` = '경제') then (`member`.`경제` / ((((`member`.`정치` + `member`.`경제`) + `member`.`사회`) + `member`.`문화`) + `member`.`스포츠`)) when (`news`.`category` = '사회') then (`member`.`사회` / ((((`member`.`정치` + `member`.`경제`) + `member`.`사회`) + `member`.`문화`) + `member`.`스포츠`)) when (`news`.`category` = '문화') then (`member`.`문화` / ((((`member`.`정치` + `member`.`경제`) + `member`.`사회`) + `member`.`문화`) + `member`.`스포츠`)) when (`news`.`category` = '스포츠') then (`member`.`스포츠` / ((((`member`.`정치` + `member`.`경제`) + `member`.`사회`) + `member`.`문화`) + `member`.`스포츠`)) else 0 end) AS `rate` from (`news` join `member`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `hits_info_notuser`
--

/*!50001 DROP VIEW IF EXISTS `hits_info_notuser`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `hits_info_notuser` AS select `news`.`title` AS `title`,`news`.`authorID` AS `authorID`,`news`.`newsID` AS `newsID`,`news`.`date` AS `date`,`news`.`category` AS `category`,((((`news`.`hits` + `news`.`10hits`) + `news`.`20hits`) + `news`.`30-40hits`) + `news`.`50-hits`) AS `all_hits`,(((((0.2 * `news`.`hits`) + (0.5 * `news`.`10hits`)) + (0.3 * `news`.`20hits`)) + (0.3 * `news`.`30-40hits`)) + (0.3 * `news`.`50-hits`)) AS `weight_hits10`,(((((0.2 * `news`.`hits`) + (0.3 * `news`.`10hits`)) + (0.5 * `news`.`20hits`)) + (0.3 * `news`.`30-40hits`)) + (0.3 * `news`.`50-hits`)) AS `weight_hits20`,(((((0.2 * `news`.`hits`) + (0.3 * `news`.`10hits`)) + (0.3 * `news`.`20hits`)) + (0.5 * `news`.`30-40hits`)) + (0.3 * `news`.`50-hits`)) AS `weight_hits30_40`,(((((0.2 * `news`.`hits`) + (0.3 * `news`.`10hits`)) + (0.3 * `news`.`20hits`)) + (0.3 * `news`.`30-40hits`)) + (0.5 * `news`.`50-hits`)) AS `weight_hits50_` from `news` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-18 20:02:52
