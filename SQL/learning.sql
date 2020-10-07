-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: learning
-- ------------------------------------------------------
-- Server version	8.0.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `CustomerName` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `PostalCode` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'Aniket Hake','Saptashrungi society, N7','Aurangabad','431003','India'),(2,'Parag Chirde','A10/2 Vekanand society, N4','Aurangabad','431003','India'),(3,'Shubham Padamwar','99 Kasliwal Bhagyoday','Pune','411002','India'),(4,'Garrick Mohan','0 Arkansas Junction','Suez',NULL,'Egypt'),(5,'Rois Snelgrove','35 Eggendart Parkway','Płock','09-410','Poland'),(6,'Dannel Buesnel','9783 Fordem Place','Lishui',NULL,'China'),(7,'Clayton Wheble','24 Mifflin Lane','Nanding',NULL,'China'),(8,'Deena Bendin','8013 BaysAvenue','Sinamar','1230','Philippines'),(9,'Dedie Garric','12 Clyde Gallagher Terrace','Sondo',NULL,'Indonesia'),(10,'Elisa Joll','9419 Rigney Alley','Burtunay','368150','Russia'),(11,'Raphael Pattemore','8 Montana Park','Youzha',NULL,'China'),(12,'Kristine Chrisp','2410 Bluejay Plaza','Akora','24131','Pakistan'),(13,'Leontine Boxen','887 Luster Park','Birmingham','B40','United Kingdom'),(14,'Lorettalorna Skakunas','2917 Commercial Pass','Meiqi',NULL,'China'),(15,'Gayle Bleiman','5135 Fulton Lane','Fkih Ben Salah',NULL,'Morocco'),(16,'Hansiain Pritchard','38333 Eliot Park','Ambunti',NULL,'Papua New Guinea'),(17,'Tyson Patifield','03311 Florence Trail','Parungjawa',NULL,'Indonesia'),(18,'Norah Gambles','79 Saint Paul Alley','Muikamachi','990-0054','Japan'),(19,'Ettie Kaminski','92585 Sage Center','El Paraíso',NULL,'Honduras'),(20,'Cassie Shearman','5098 Memorial Terrace','Mora','792 27','Sweden'),(21,'Misty Jinkin','845 Knutson Court','Karangnongko',NULL,'Indonesia'),(22,'Jimmy Kavanagh','2 Swallow Trail','Qingchuan',NULL,'China'),(23,'Darda Haeslier','08 Warbler Center','Mancos',NULL,'Peru'),(24,'Martelle Faye','884 Moulton Crossing','Carquefou','44474 CEDEX','France'),(25,'Timmi Downs','8 Talisman Pass','Sri Jayewardenepura Kotte','10600','Sri Lanka'),(26,'Sibeal Brompton','7940 Little Fleur Lane','Gangsha',NULL,'China'),(27,'Isac Perks','547 Laurel Avenue','Nangela',NULL,'Indonesia'),(28,'Jeth Arlett','12 Anzinger Park','Nashville','37240','United States'),(29,'Ellen Aynsley','269 Cherokee Road','Smokvica','23249','Croatia'),(30,'Forest Kinavan','83 Novick Circle','Ituiutaba','38300-000','Brazil'),(31,'Brand Brusle','8 Bartillon Crossing','Iligan City','9200','Philippines'),(32,'Mariquilla Kynvin','4012 Pleasure Parkway','Ganzhou',NULL,'China'),(33,'Ignacio Mallard','125 Rview Alley','Shahumyan',NULL,'Armenia'),(34,'Marchall Allen','136 Village Green Terrace','Thị Trấn Than Uyên',NULL,'Vietnam'),(35,'Averyl Haslam','59 Texas Park','Taypano','1066','Philippines'),(36,'Langston Bullock','7843 Hazelcrest Circle','Taha Man Zu',NULL,'China'),(37,'Dill Shyre','34 Fairfield Pass','Gornji Breg',NULL,'Serbia'),(38,'Derk Lodden','99 Algoma Terrace','Gozdowo','09-213','Poland'),(39,'Fanechka Wardhough','2456 Erie Junction','Ferreiras','8200-567','Portugal'),(40,'Tina MacGrath','77 Lakewood Gardens Crossing','Huangjindong',NULL,'China'),(41,'Cathyleen Maryska','57 Melvin Place','Tvŭrditsa','8890','Bulgaria'),(42,'Odette Wadge','7 Merchant Circle','Bucheon-si',NULL,'South Korea'),(43,'Cleve Addie','8 Fallview Junction','Aoqian',NULL,'China'),(44,'Tailor Spawton','72 Kim Plaza','Nürnberg','90451','Germany'),(45,'Taddeo Tash','7884 Arizona Drive','Gävle','801 84','Sweden'),(46,'Adriena Gravener','178 Towne Parkway','Juupajoki','35540','Finland'),(47,'Dionis Otter','82 Sherman Crossing','Aygavan',NULL,'Armenia'),(48,'Reggy Fransewich','811 Raven Junction','Raejeru',NULL,'Indonesia'),(49,'Byram Durnford','23755 1st Point','Oruro',NULL,'Bolivia'),(50,'Sayre Twoohy','3464 Havey Terrace','Vale Covo','2540-702','Portugal'),(51,'Bonnie Lovett','7 Walton Point','Konggar',NULL,'China'),(52,'Lorine Greer','71745 Glendale Road','Nysa','48-304','Poland'),(53,'Cristina O\'Cahey','18291 Drewry Park','Barguzin','671610','Russia'),(54,'Darcy Haines','988 Sherman Place','Rudolfov','373 71','Czech Republic'),(55,'Algernon Enterle','39278 Bluejay Road','Senneterre','L0P','Canada'),(56,'Lilli Meiner','2 Eagle Crest Road','Nakkila','29251','Finland'),(57,'Corabelle Vedstra','817 Clarendon Road','Sim','456022','Russia'),(58,'Christiano Nuscha','19 Troy Alley','Yëlkino','624214','Russia'),(59,'Loy Balden','574 Summit Junction','Parakanhonje Wetan',NULL,'Indonesia'),(60,'Retha Gerson','9 Myrtle Drive','Comé',NULL,'Benin'),(61,'Jenine Heisham','351 Main Alley','Nanhe',NULL,'China'),(62,'Bartie Le Leu','3 Main Terrace','Kan’onjichō','769-1613','Japan'),(63,'Nickola Stilwell','17 Loomis Park','Dawusu',NULL,'China'),(64,'Ulysses Andreacci','51 Di Loreto Park','Tselinnoye','659430','Russia'),(65,'Melitta Jachimak','94 V Crossing','Nglojo',NULL,'Indonesia'),(66,'Morena Matijevic','8047 Continental Lane','Ḩadādah',NULL,'Yemen'),(67,'Babbette Prettyjohns','026 5th Drive','Banjar Kampungbugis',NULL,'Indonesia'),(68,'Scottie Shugg','417 Pepper Wood Plaza','Az Zulfi',NULL,'Saudi Arabia'),(69,'Annelise Pn','5622 Maple Wood Pass','Aş Şanamayn',NULL,'Syria'),(70,'Hurlee Stabbins','5565 Oakr Way','Shicong',NULL,'China'),(71,'Billye Nias','4 Forster Place','Biao','2701','Philippines'),(72,'Ame Blacksland','7910 Oak Crossing','Västerås','721 19','Sweden'),(73,'Romeo Matuschek','39447 Becker Court','Seraya',NULL,'Indonesia'),(74,'Calypso Christall','17 Cool Center','Ystad','271 51','Sweden'),(75,'Kendal Peacock','93759 Michigan Park','Lisičani','6539','Macedonia'),(76,'Wilburt Fairpo','584 Farragut Center','Novouzensk','413362','Russia'),(77,'Margalit Burstowe','121 Springs Pass','Jinkou',NULL,'China'),(78,'Feodor Nugent','67613 Washington Junction','Huangchuan',NULL,'China'),(79,'Krystal Dinneen','0 Paget Trail','Rrasa e Sipërme',NULL,'Albania'),(80,'Christalle Ivanishchev','474 6th Alley','Verkhniy Mamon','396460','Russia'),(81,'Micaela Royden','1 Bunting Circle','Xuefu',NULL,'China'),(82,'Davine Dowthwaite','7 Straubel Terrace','Sheregesh','660126','Russia'),(83,'Mandel Whal','87 Norway Maple Circle','Timurjaya',NULL,'Indonesia'),(84,'Ricki Sopper','2 Hoffman Point','Bāgh-e Maīdān',NULL,'Afghanistan'),(85,'Lyon Godon','8009 Manitowish Park','Baugo','6017','Philippines'),(86,'Angus Fearnyough','4171 Gulseth Way','Svenljunga','512 93','Sweden'),(87,'Sharleen Payfoot','83 Moose Way','Aktau',NULL,'Kazakhstan'),(88,'Louise Reinhart','3714 Farwell Terrace','Nikita',NULL,'Ukraine'),(89,'Brigg Sage','1456 Evergreen Park','Malhiao','6032','Philippines'),(90,'Yehudit Littleover','88 Commercial Crossing','Prostki','19-335','Poland'),(91,'Ranice Mariault','6 Village Green Park','Rochester','14652','United States'),(92,'Austin Billinge','30036 Westerfield Hill','Hong’an',NULL,'China'),(93,'Darda Peckham','6936 Mandrake Pass','Qingshu',NULL,'China'),(94,'Leupold Sergean','50 Twin Pines Way','Carcavelos','4620-031','Portugal'),(95,'Marley Nelm','2719 McbrPlaza','Élancourt','78990','France'),(96,'Marcelia MacCook','183 Monument Drive','Lantian',NULL,'China'),(97,'Juliane Legen','233 Bluestem Lane','Asahi','989-2474','Japan'),(98,'Emlyn Barratt','9 Independence Hill','Horní Jiřetín','435 43','Czech Republic'),(99,'Perkin Huckerby','67 Wayr Hill','Shuangqiaoping',NULL,'China'),(100,'Carolynn Yokelman','40 Manley Circle','Cabo','95335-000','Brazil'),(101,'Marji Batthew','46 1st Plaza','Nkurenkuru',NULL,'Namibia'),(102,'Cori Meggison','49 Nancy Crossing','Orléans','45947 CEDEX 9','France'),(103,'Delmore Derkes','417 Hayes Alley','Ta’erqi',NULL,'China'),(104,'Gaurav Khunger','Cidco n4','Aurangabad','431001','India'),(105,'Jaideep Khedekar','bypass','Mumbai','56789','India');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-07 14:42:52
