-- MySQL dump 10.13  Distrib 5.7.12, for osx10.11 (x86_64)
--
-- Host: 192.168.222.1    Database: db_restowaze
-- ------------------------------------------------------
-- Server version	5.6.31

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
-- Table structure for table `feedbacks`
--

DROP TABLE IF EXISTS `feedbacks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedbacks`
--

LOCK TABLES `feedbacks` WRITE;
/*!40000 ALTER TABLE `feedbacks` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedbacks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (22,'2014_10_12_000000_create_users_table',1),(23,'2014_10_12_100000_create_password_resets_table',1),(24,'2017_01_29_032157_create_restaurants_table',1),(25,'2017_01_29_075343_create_sessions_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `restaurants`
--

DROP TABLE IF EXISTS `restaurants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `restaurants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `owner` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `date_established` date NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `restaurants`
--

LOCK TABLES `restaurants` WRITE;
/*!40000 ALTER TABLE `restaurants` DISABLE KEYS */;
INSERT INTO `restaurants` VALUES (1,'Chowking','Pia','http://www.chowking.ph','2010-04-20','09281235678','09281235678','email@chowking.ph','Balanga city, Bataan','','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','2017-02-09 22:42:43','2017-02-09 22:42:43',NULL),(2,'The Beanery','Daniel','http://www.thebeanery.com','2009-01-01','09281235678','09281235678','email@beanery.com','Balanga city, Bataan','','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','2017-02-09 22:42:43',NULL,NULL),(3,'Jollibee','Mcdonalds','http://www.jollibeehappy.com','2010-04-20','09022222222','09231312223','','Almeda, Pateros','','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','2017-02-11 05:29:41','2017-02-11 05:29:41',NULL),(4,'test123','Pia','http://lovekoto.ph','0000-00-00','09275888857','09275888857','','Almeda, Pateros','','Lorem Ipsum is simply dummy text of the print','2017-02-11 05:31:54','2017-02-11 06:43:23',NULL),(5,'Mang Inasal','Inasal Chicken','http://www.manginasal.ph','2010-04-20','09281235678','09281235678','manginasal@me.com','Bagac, Bataan','','Lorem Ipsum is simply dummy text of the print','2017-02-11 07:01:09','2017-02-11 07:28:27',NULL),(6,'Mang Inasalx','Inasal Chicken','http://www.manginasal.ph','2010-04-20','09281235678','09222355533','manginasal@me.com','Bagac, Bataan','','Lorem Ipsum is simply dummy text of the print','2017-02-11 07:02:43','2017-02-11 10:25:24',NULL);
/*!40000 ALTER TABLE `restaurants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registeredIP` varchar(100) CHARACTER SET utf8 NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `type` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','','','0000-00-00','admin@restowaze.com','$2y$10$D2ZC7ESZQ1ceTFueYBhI0er1KIfDJKqqu6s6FKySCHz9g/A6iLqdS','','4vmnlhf4C1lzpLig3ZqxE2zb2jBbqAC1NRJ38hJTvopIcyACV4nopddE6rh2',NULL,1,'2017-02-08 21:17:42','2017-02-09 00:34:14',NULL),(2,'Pia','','','0000-00-00','delosreyes_pia@yahoo.com','$2y$10$RSoiSKypUDoEP.HWiOVlGeXJfMJ/6lU2EBmdanjqsT7br7Xr1BEIW','','f8bPstdGbPDJQFzwBDP4jw1yhQm1ZxuWa708wNCb3hGWHKsH6l5mcqtetLGx',NULL,1,'2017-02-09 00:35:09','2017-02-09 00:36:17',NULL),(3,'asdas','','','0000-00-00','delosreyses_pia@yahoo.com','$2y$10$YFkuFsXuhDyClHr3pI76MO8WDYxUjln3BK2p3OH06.Q3echO71nwi','',NULL,NULL,1,'2017-02-09 00:36:48','2017-02-11 03:55:07','2017-02-11 03:55:07'),(4,'asdas','','','0000-00-00','delosreyses_pia@yahoo.coms','$2y$10$ngpuzHgnmyd0u9xkag9Ja.35/O15Ey/sSt/QeBryB/bEUWo.rzXmq','','hXm3kBoQsLAd5iRQpGYmX71zWukUVBjocZ3fC3N6mVj9ZDLjnCe7d4t57wWL',NULL,1,'2017-02-09 00:38:48','2017-02-11 03:55:03','2017-02-11 03:55:03'),(5,'kevin','','','0000-00-00','kevin@restowaze.com','$2y$10$MoL9e0iMRow4WymALbtDiut8mJvBhZrvYOZONyVsvAoKs3.x6.Fv2','','V9s8FXtjt05DnVMNJOwAqixBVNFxiT3kjq9mzJprPzIkrLapqDENpk8TEH0Q',NULL,1,'2017-02-09 00:41:44','2017-02-11 10:25:54',NULL),(6,'praetor','','','0000-00-00','praetor@restowaze.com','$2y$10$yew01Py6B1nQb81iRajhguBC.dOkcjsEaQDuX8DElwRjpeqBiezji','','guVsSXXZsQ0O5qZOaWZNqslK7hITMLXohuwKC6A00yz56BZ59d2bx4wqqghU',NULL,1,'2017-02-09 00:42:46','2017-02-09 00:44:11',NULL),(7,'xcvxcvx','','','0000-00-00','xpia@restowaze.com','$2y$10$e0hmzZHzOi27u5rDb5SxZuMGfB.Ba6ekxJY67dsG6O4ypwrSTOL6G','','lt6rFQiyqCwwrn9i0nMexz6VjXCfyLxyDaGU9V1kOBSN1xceQsXMtACJUZTr',NULL,1,'2017-02-09 00:44:33','2017-02-09 00:45:16',NULL),(8,'asda21312','','','0000-00-00','admin12@restowaze.com','$2y$10$et7wkIcUtzy9kJ/yUQ38AOpokAxCpwIVg72kof4U7rfx5zGe.BrtK','','pNPrw8241AEPNX6miuZ4oaQAhNODW3eP7sUhuF5H4anS6gDTqyDqsZQXBThh',NULL,1,'2017-02-09 00:45:36','2017-02-09 00:48:13',NULL),(9,'asdasd3142','','','0000-00-00','admin222@restowaze.com','$2y$10$ajCV0caHWzF03HSbWfVXneSIj2y1CX7yPCHYhpetJGxALPT/udjZ2','127.0.0.1',NULL,NULL,1,'2017-02-09 00:48:29','2017-02-11 03:54:56','2017-02-11 03:54:56'),(10,'asd','','','0000-00-00','','','',NULL,NULL,2,'2017-02-09 07:06:06','2017-02-09 21:40:23','2017-02-09 21:40:23'),(11,'piadelrey','','','0000-00-00','piadelrey03@gmail.com','','',NULL,NULL,2,'2017-02-09 22:30:42','2017-02-09 22:30:42',NULL),(12,'piasd','','','0000-00-00','ipasd@asd.com','','',NULL,NULL,2,'2017-02-09 22:31:57','2017-02-09 22:31:57',NULL),(13,'piax123','Pia','Delos Reyes','2010-04-20','piadelrey0002@gmail.com','','',NULL,NULL,0,'2017-02-09 22:37:21','2017-02-09 22:37:21',NULL),(14,'daniel','Daniel','Bulanhagui','2010-04-20','daniel@restowaze.com','','',NULL,NULL,0,'2017-02-10 21:51:51','2017-02-10 21:51:51',NULL),(15,'earl123','Earl','Test1','2010-04-20','earl@restowaze.com','','',NULL,NULL,0,'2017-02-11 03:22:25','2017-02-11 03:22:25',NULL),(18,'dasdasdasd','asdasd','asdasdasdas','2010-04-20','asdasdasdasdasdasdasd@me.com','','',NULL,NULL,0,'2017-02-11 03:26:46','2017-02-11 03:26:46',NULL),(19,'khloe@me.com','khloe','baby','2010-04-20','khloe@me.com','','',NULL,NULL,1,'2017-02-11 03:28:25','2017-02-11 03:28:25',NULL),(20,'pamela223','pam','pam','0000-00-00','pame@aoasd.com','','',NULL,NULL,1,'2017-02-11 03:31:23','2017-02-11 03:31:23',NULL),(21,'pamela223xxx','pamx','pamx','0000-00-00','pame@aoasd.comx','','',NULL,NULL,1,'2017-02-11 03:31:50','2017-02-11 03:31:50',NULL),(22,'pamela223xxxzz','zpamx','zpamx','0000-00-00','pame@aoasd.comxzz','','',NULL,NULL,1,'2017-02-11 03:32:10','2017-02-11 03:53:20','2017-02-11 03:53:20'),(24,'asdasdasdsss','Pias','Delos Reyess','0000-00-00','delossssssreyes_pia@yahoo.com','','',NULL,NULL,1,'2017-02-11 03:35:55','2017-02-11 03:53:52','2017-02-11 03:53:52'),(25,'lianaxxxxx','liana','coronejo','0000-00-00','liana@me.com','','',NULL,NULL,1,'2017-02-11 03:51:22','2017-02-11 05:22:21',NULL),(26,'kim123','kim','kim2','2010-04-20','kim123@me.com','','127.0.0.1',NULL,NULL,1,'2017-02-11 09:48:26','2017-02-11 10:08:34',NULL),(27,'adminkhlow','khloe','asdasd','0000-00-00','asd@asd.com','','127.0.0.1',NULL,0,1,'2017-02-11 10:10:50','2017-02-11 10:10:50',NULL),(28,'124124','asdasdqr341','23124124','0000-00-00','user@admin.com','','127.0.0.1',NULL,0,1,'2017-02-11 10:14:28','2017-02-11 10:14:28',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-13 11:41:38
