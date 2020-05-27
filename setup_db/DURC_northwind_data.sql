-- MySQL dump 10.16  Distrib 10.2.15-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: DURC_northwind_data
-- ------------------------------------------------------
-- Server version	10.2.15-MariaDB-10.2.15+maria~xenial-log

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
-- Table structure for table `inventoryTransaction`
--

DROP TABLE IF EXISTS `inventoryTransaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventoryTransaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transactionType` tinyint(4) NOT NULL,
  `transactionCreatedDate` datetime NOT NULL DEFAULT current_timestamp(),
  `transactionModifiedDate` datetime NOT NULL DEFAULT current_timestamp(),
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `purchaseOrder_id` int(11) DEFAULT NULL,
  `customerOrder_id` int(11) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customerOrder_id` (`customerOrder_id`),
  KEY `product_id` (`product_id`),
  KEY `purchaseOrder_id` (`purchaseOrder_id`),
  KEY `transactionType` (`transactionType`),
  CONSTRAINT `fkInventoryTransactionInventoryTransactionType1` FOREIGN KEY (`transactionType`) REFERENCES `northwind_model`.`inventoryTransactionType` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkInventoryTransactionOrder1` FOREIGN KEY (`customerOrder_id`) REFERENCES `order` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkInventoryTransactionProducts1` FOREIGN KEY (`product_id`) REFERENCES `northwind_model`.`product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkInventoryTransactionPurchaseOrder1` FOREIGN KEY (`purchaseOrder_id`) REFERENCES `purchaseOrder` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventoryTransaction`
--

LOCK TABLES `inventoryTransaction` WRITE;
/*!40000 ALTER TABLE `inventoryTransaction` DISABLE KEYS */;
INSERT INTO `inventoryTransaction` VALUES (35,1,'2006-03-22 16:02:28','2006-03-22 16:02:28',80,75,NULL,NULL,NULL),(36,1,'2006-03-22 16:02:48','2006-03-22 16:02:48',72,40,NULL,NULL,NULL),(37,1,'2006-03-22 16:03:04','2006-03-22 16:03:04',52,100,NULL,NULL,NULL),(38,1,'2006-03-22 16:03:09','2006-03-22 16:03:09',56,120,NULL,NULL,NULL),(39,1,'2006-03-22 16:03:14','2006-03-22 16:03:14',57,80,NULL,NULL,NULL),(40,1,'2006-03-22 16:03:40','2006-03-22 16:03:40',6,100,NULL,NULL,NULL),(41,1,'2006-03-22 16:03:47','2006-03-22 16:03:47',7,40,NULL,NULL,NULL),(42,1,'2006-03-22 16:03:54','2006-03-22 16:03:54',8,40,NULL,NULL,NULL),(43,1,'2006-03-22 16:04:02','2006-03-22 16:04:02',14,40,NULL,NULL,NULL),(44,1,'2006-03-22 16:04:07','2006-03-22 16:04:07',17,40,NULL,NULL,NULL),(45,1,'2006-03-22 16:04:12','2006-03-22 16:04:12',19,20,NULL,NULL,NULL),(46,1,'2006-03-22 16:04:17','2006-03-22 16:04:17',20,40,NULL,NULL,NULL),(47,1,'2006-03-22 16:04:20','2006-03-22 16:04:20',21,20,NULL,NULL,NULL),(48,1,'2006-03-22 16:04:24','2006-03-22 16:04:24',40,120,NULL,NULL,NULL),(49,1,'2006-03-22 16:04:28','2006-03-22 16:04:28',41,40,NULL,NULL,NULL),(50,1,'2006-03-22 16:04:31','2006-03-22 16:04:31',48,100,NULL,NULL,NULL),(51,1,'2006-03-22 16:04:38','2006-03-22 16:04:38',51,40,NULL,NULL,NULL),(52,1,'2006-03-22 16:04:41','2006-03-22 16:04:41',74,20,NULL,NULL,NULL),(53,1,'2006-03-22 16:04:45','2006-03-22 16:04:45',77,60,NULL,NULL,NULL),(54,1,'2006-03-22 16:05:07','2006-03-22 16:05:07',3,100,NULL,NULL,NULL),(55,1,'2006-03-22 16:05:11','2006-03-22 16:05:11',4,40,NULL,NULL,NULL),(56,1,'2006-03-22 16:05:14','2006-03-22 16:05:14',5,40,NULL,NULL,NULL),(57,1,'2006-03-22 16:05:26','2006-03-22 16:05:26',65,40,NULL,NULL,NULL),(58,1,'2006-03-22 16:05:32','2006-03-22 16:05:32',66,80,NULL,NULL,NULL),(59,1,'2006-03-22 16:05:47','2006-03-22 16:05:47',1,40,NULL,NULL,NULL),(60,1,'2006-03-22 16:05:51','2006-03-22 16:05:51',34,60,NULL,NULL,NULL),(61,1,'2006-03-22 16:06:00','2006-03-22 16:06:00',43,100,NULL,NULL,NULL),(62,1,'2006-03-22 16:06:03','2006-03-22 16:06:03',81,125,NULL,NULL,NULL),(63,2,'2006-03-22 16:07:56','2006-03-24 11:03:00',80,30,NULL,NULL,NULL),(64,2,'2006-03-22 16:08:19','2006-03-22 16:08:59',7,10,NULL,NULL,NULL),(65,2,'2006-03-22 16:08:29','2006-03-22 16:08:59',51,10,NULL,NULL,NULL),(66,2,'2006-03-22 16:08:37','2006-03-22 16:08:59',80,10,NULL,NULL,NULL),(67,2,'2006-03-22 16:09:46','2006-03-22 16:10:27',1,15,NULL,NULL,NULL),(68,2,'2006-03-22 16:10:06','2006-03-22 16:10:27',43,20,NULL,NULL,NULL),(69,2,'2006-03-22 16:11:39','2006-03-24 11:00:55',19,20,NULL,NULL,NULL),(70,2,'2006-03-22 16:11:56','2006-03-24 10:59:41',48,10,NULL,NULL,NULL),(71,2,'2006-03-22 16:12:29','2006-03-24 10:57:38',8,17,NULL,NULL,NULL),(72,1,'2006-03-24 10:41:30','2006-03-24 10:41:30',81,200,NULL,NULL,NULL),(73,2,'2006-03-24 10:41:33','2006-03-24 10:41:42',81,200,NULL,NULL,'Fill Back Ordered product, Order #40'),(74,1,'2006-03-24 10:53:13','2006-03-24 10:53:13',48,100,NULL,NULL,NULL),(75,2,'2006-03-24 10:53:16','2006-03-24 10:55:46',48,100,NULL,NULL,'Fill Back Ordered product, Order #39'),(76,1,'2006-03-24 10:53:36','2006-03-24 10:53:36',43,300,NULL,NULL,NULL),(77,2,'2006-03-24 10:53:39','2006-03-24 10:56:57',43,300,NULL,NULL,'Fill Back Ordered product, Order #38'),(78,1,'2006-03-24 10:54:04','2006-03-24 10:54:04',41,200,NULL,NULL,NULL),(79,2,'2006-03-24 10:54:07','2006-03-24 10:58:40',41,200,NULL,NULL,'Fill Back Ordered product, Order #36'),(80,1,'2006-03-24 10:54:33','2006-03-24 10:54:33',19,30,NULL,NULL,NULL),(81,2,'2006-03-24 10:54:35','2006-03-24 11:02:02',19,30,NULL,NULL,'Fill Back Ordered product, Order #33'),(82,1,'2006-03-24 10:54:58','2006-03-24 10:54:58',34,100,NULL,NULL,NULL),(83,2,'2006-03-24 10:55:02','2006-03-24 11:03:00',34,100,NULL,NULL,'Fill Back Ordered product, Order #30'),(84,2,'2006-03-24 14:48:15','2006-04-04 11:41:14',6,10,NULL,NULL,NULL),(85,2,'2006-03-24 14:48:23','2006-04-04 11:41:14',4,10,NULL,NULL,NULL),(86,3,'2006-03-24 14:49:16','2006-03-24 14:49:16',80,20,NULL,NULL,NULL),(87,3,'2006-03-24 14:49:20','2006-03-24 14:49:20',81,50,NULL,NULL,NULL),(88,3,'2006-03-24 14:50:09','2006-03-24 14:50:09',1,25,NULL,NULL,NULL),(89,3,'2006-03-24 14:50:14','2006-03-24 14:50:14',43,25,NULL,NULL,NULL),(90,3,'2006-03-24 14:50:18','2006-03-24 14:50:18',81,25,NULL,NULL,NULL),(91,2,'2006-03-24 14:51:03','2006-04-04 11:09:24',40,50,NULL,NULL,NULL),(92,2,'2006-03-24 14:55:03','2006-04-04 11:06:56',21,20,NULL,NULL,NULL),(93,2,'2006-03-24 14:55:39','2006-04-04 11:06:13',5,25,NULL,NULL,NULL),(94,2,'2006-03-24 14:55:52','2006-04-04 11:06:13',41,30,NULL,NULL,NULL),(95,2,'2006-03-24 14:56:09','2006-04-04 11:06:13',40,30,NULL,NULL,NULL),(96,3,'2006-03-30 16:46:34','2006-03-30 16:46:34',34,12,NULL,NULL,NULL),(97,3,'2006-03-30 17:23:27','2006-03-30 17:23:27',34,10,NULL,NULL,NULL),(98,3,'2006-03-30 17:24:33','2006-03-30 17:24:33',34,1,NULL,NULL,NULL),(99,2,'2006-04-03 13:50:08','2006-04-03 13:50:15',48,10,NULL,NULL,NULL),(100,1,'2006-04-04 11:00:54','2006-04-04 11:00:54',57,100,NULL,NULL,NULL),(101,2,'2006-04-04 11:00:56','2006-04-04 11:08:49',57,100,NULL,NULL,'Fill Back Ordered product, Order #46'),(102,1,'2006-04-04 11:01:14','2006-04-04 11:01:14',34,50,NULL,NULL,NULL),(103,1,'2006-04-04 11:01:35','2006-04-04 11:01:35',43,250,NULL,NULL,NULL),(104,3,'2006-04-04 11:01:37','2006-04-04 11:01:37',43,300,NULL,NULL,'Fill Back Ordered product, Order #41'),(105,1,'2006-04-04 11:01:55','2006-04-04 11:01:55',8,25,NULL,NULL,NULL),(106,2,'2006-04-04 11:01:58','2006-04-04 11:07:37',8,25,NULL,NULL,'Fill Back Ordered product, Order #48'),(107,1,'2006-04-04 11:02:17','2006-04-04 11:02:17',34,300,NULL,NULL,NULL),(108,2,'2006-04-04 11:02:19','2006-04-04 11:08:14',34,300,NULL,NULL,'Fill Back Ordered product, Order #47'),(109,1,'2006-04-04 11:02:37','2006-04-04 11:02:37',19,25,NULL,NULL,NULL),(110,2,'2006-04-04 11:02:39','2006-04-04 11:41:14',19,10,NULL,NULL,'Fill Back Ordered product, Order #42'),(111,1,'2006-04-04 11:02:56','2006-04-04 11:02:56',19,10,NULL,NULL,NULL),(112,2,'2006-04-04 11:02:58','2006-04-04 11:07:37',19,25,NULL,NULL,'Fill Back Ordered product, Order #48'),(113,1,'2006-04-04 11:03:12','2006-04-04 11:03:12',72,50,NULL,NULL,NULL),(114,2,'2006-04-04 11:03:14','2006-04-04 11:08:49',72,50,NULL,NULL,'Fill Back Ordered product, Order #46'),(115,1,'2006-04-04 11:03:38','2006-04-04 11:03:38',41,50,NULL,NULL,NULL),(116,2,'2006-04-04 11:03:39','2006-04-04 11:09:24',41,50,NULL,NULL,'Fill Back Ordered product, Order #45'),(117,2,'2006-04-04 11:04:55','2006-04-04 11:05:04',34,87,NULL,NULL,NULL),(118,2,'2006-04-04 11:35:50','2006-04-04 11:35:54',51,30,NULL,NULL,NULL),(119,2,'2006-04-04 11:35:51','2006-04-04 11:35:54',7,30,NULL,NULL,NULL),(120,2,'2006-04-04 11:36:15','2006-04-04 11:36:21',17,40,NULL,NULL,NULL),(121,2,'2006-04-04 11:36:39','2006-04-04 11:36:47',6,90,NULL,NULL,NULL),(122,2,'2006-04-04 11:37:06','2006-04-04 11:37:09',4,30,NULL,NULL,NULL),(123,2,'2006-04-04 11:37:45','2006-04-04 11:37:49',48,40,NULL,NULL,NULL),(124,2,'2006-04-04 11:38:07','2006-04-04 11:38:11',48,40,NULL,NULL,NULL),(125,2,'2006-04-04 11:38:27','2006-04-04 11:38:32',41,10,NULL,NULL,NULL),(126,2,'2006-04-04 11:38:48','2006-04-04 11:38:53',43,5,NULL,NULL,NULL),(127,2,'2006-04-04 11:39:12','2006-04-04 11:39:29',40,40,NULL,NULL,NULL),(128,2,'2006-04-04 11:39:50','2006-04-04 11:39:53',8,20,NULL,NULL,NULL),(129,2,'2006-04-04 11:40:13','2006-04-04 11:40:16',80,15,NULL,NULL,NULL),(130,2,'2006-04-04 11:40:32','2006-04-04 11:40:38',74,20,NULL,NULL,NULL),(131,2,'2006-04-04 11:41:39','2006-04-04 11:41:45',72,40,NULL,NULL,NULL),(132,2,'2006-04-04 11:42:17','2006-04-04 11:42:26',3,50,NULL,NULL,NULL),(133,2,'2006-04-04 11:42:24','2006-04-04 11:42:26',8,3,NULL,NULL,NULL),(134,2,'2006-04-04 11:42:48','2006-04-04 11:43:08',20,40,NULL,NULL,NULL),(135,2,'2006-04-04 11:43:05','2006-04-04 11:43:08',52,40,NULL,NULL,NULL),(136,3,'2006-04-25 17:04:05','2006-04-25 17:04:57',56,110,NULL,NULL,NULL);
/*!40000 ALTER TABLE `inventoryTransaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `invoiceDate` datetime NOT NULL DEFAULT current_timestamp(),
  `dueDate` datetime DEFAULT NULL,
  `tax` decimal(19,4) DEFAULT 0.0000,
  `shipping` decimal(19,4) DEFAULT 0.0000,
  `amountDue` decimal(19,4) DEFAULT 0.0000,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `fkInvoicesOrder1_idx` (`order_id`),
  CONSTRAINT `fkInvoicesOrder1` FOREIGN KEY (`order_id`) REFERENCES `northwind_model`.`order` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoice`
--

LOCK TABLES `invoice` WRITE;
/*!40000 ALTER TABLE `invoice` DISABLE KEYS */;
INSERT INTO `invoice` VALUES (5,31,'2006-03-22 16:08:59',NULL,0.0000,0.0000,0.0000),(6,32,'2006-03-22 16:10:27',NULL,0.0000,0.0000,0.0000),(7,40,'2006-03-24 10:41:41',NULL,0.0000,0.0000,0.0000),(8,39,'2006-03-24 10:55:46',NULL,0.0000,0.0000,0.0000),(9,38,'2006-03-24 10:56:57',NULL,0.0000,0.0000,0.0000),(10,37,'2006-03-24 10:57:38',NULL,0.0000,0.0000,0.0000),(11,36,'2006-03-24 10:58:40',NULL,0.0000,0.0000,0.0000),(12,35,'2006-03-24 10:59:41',NULL,0.0000,0.0000,0.0000),(13,34,'2006-03-24 11:00:55',NULL,0.0000,0.0000,0.0000),(14,33,'2006-03-24 11:02:02',NULL,0.0000,0.0000,0.0000),(15,30,'2006-03-24 11:03:00',NULL,0.0000,0.0000,0.0000),(16,56,'2006-04-03 13:50:15',NULL,0.0000,0.0000,0.0000),(17,55,'2006-04-04 11:05:04',NULL,0.0000,0.0000,0.0000),(18,51,'2006-04-04 11:06:13',NULL,0.0000,0.0000,0.0000),(19,50,'2006-04-04 11:06:56',NULL,0.0000,0.0000,0.0000),(20,48,'2006-04-04 11:07:37',NULL,0.0000,0.0000,0.0000),(21,47,'2006-04-04 11:08:14',NULL,0.0000,0.0000,0.0000),(22,46,'2006-04-04 11:08:49',NULL,0.0000,0.0000,0.0000),(23,45,'2006-04-04 11:09:24',NULL,0.0000,0.0000,0.0000),(24,79,'2006-04-04 11:35:54',NULL,0.0000,0.0000,0.0000),(25,78,'2006-04-04 11:36:21',NULL,0.0000,0.0000,0.0000),(26,77,'2006-04-04 11:36:47',NULL,0.0000,0.0000,0.0000),(27,76,'2006-04-04 11:37:09',NULL,0.0000,0.0000,0.0000),(28,75,'2006-04-04 11:37:49',NULL,0.0000,0.0000,0.0000),(29,74,'2006-04-04 11:38:11',NULL,0.0000,0.0000,0.0000),(30,73,'2006-04-04 11:38:32',NULL,0.0000,0.0000,0.0000),(31,72,'2006-04-04 11:38:53',NULL,0.0000,0.0000,0.0000),(32,71,'2006-04-04 11:39:29',NULL,0.0000,0.0000,0.0000),(33,70,'2006-04-04 11:39:53',NULL,0.0000,0.0000,0.0000),(34,69,'2006-04-04 11:40:16',NULL,0.0000,0.0000,0.0000),(35,67,'2006-04-04 11:40:38',NULL,0.0000,0.0000,0.0000),(36,42,'2006-04-04 11:41:14',NULL,0.0000,0.0000,0.0000),(37,60,'2006-04-04 11:41:45',NULL,0.0000,0.0000,0.0000),(38,63,'2006-04-04 11:42:26',NULL,0.0000,0.0000,0.0000),(39,58,'2006-04-04 11:43:08',NULL,0.0000,0.0000,0.0000);
/*!40000 ALTER TABLE `invoice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `orderDate` datetime NOT NULL DEFAULT current_timestamp(),
  `shippedDate` datetime DEFAULT NULL,
  `shipper_id` int(11) DEFAULT NULL,
  `shipName` varchar(50) DEFAULT NULL,
  `shipAddress` longtext DEFAULT NULL,
  `shipCity` varchar(50) DEFAULT NULL,
  `shipStateProvince` varchar(50) DEFAULT NULL,
  `shipZipPostalCode` varchar(50) DEFAULT NULL,
  `shipCountryRegion` varchar(50) DEFAULT NULL,
  `shippingFee` decimal(19,4) DEFAULT 0.0000,
  `taxes` decimal(19,4) DEFAULT 0.0000,
  `paymentType` varchar(50) DEFAULT NULL,
  `paidDate` datetime DEFAULT NULL,
  `notes` longtext DEFAULT NULL,
  `taxRate` double DEFAULT 0,
  `taxStatus_id` tinyint(4) DEFAULT NULL,
  `status_id` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`),
  KEY `employee_id` (`employee_id`),
  KEY `id` (`id`),
  KEY `shipper_id` (`shipper_id`),
  KEY `taxStatus` (`taxStatus_id`),
  KEY `shipZipPostalCode` (`shipZipPostalCode`),
  KEY `fkOrderOrderStatus1` (`status_id`),
  CONSTRAINT `fkOrderCustomers` FOREIGN KEY (`customer_id`) REFERENCES `northwind_model`.`customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkOrderEmployees1` FOREIGN KEY (`employee_id`) REFERENCES `northwind_model`.`employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkOrderOrderStatus1` FOREIGN KEY (`status_id`) REFERENCES `northwind_model`.`orderStatus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkOrderOrderTaxStatus1` FOREIGN KEY (`taxStatus_id`) REFERENCES `northwind_model`.`orderTaxStatus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkOrderShippers1` FOREIGN KEY (`shipper_id`) REFERENCES `northwind_model`.`shipper` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (30,9,27,'2006-01-15 00:00:00','2006-01-22 00:00:00',2,'Karen Toh','789 27th Street','Las Vegas','NV','99999','USA',200.0000,0.0000,'Check','2006-01-15 00:00:00',NULL,0,NULL,3),(31,3,4,'2006-01-20 00:00:00','2006-01-22 00:00:00',1,'Christina Lee','123 4th Street','New York','NY','99999','USA',5.0000,0.0000,'Credit Card','2006-01-20 00:00:00',NULL,0,NULL,3),(32,4,12,'2006-01-22 00:00:00','2006-01-22 00:00:00',2,'John Edwards','123 12th Street','Las Vegas','NV','99999','USA',5.0000,0.0000,'Credit Card','2006-01-22 00:00:00',NULL,0,NULL,3),(33,6,8,'2006-01-30 00:00:00','2006-01-31 00:00:00',3,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',50.0000,0.0000,'Credit Card','2006-01-30 00:00:00',NULL,0,NULL,3),(34,9,4,'2006-02-06 00:00:00','2006-02-07 00:00:00',3,'Christina Lee','123 4th Street','New York','NY','99999','USA',4.0000,0.0000,'Check','2006-02-06 00:00:00',NULL,0,NULL,3),(35,3,29,'2006-02-10 00:00:00','2006-02-12 00:00:00',2,'Soo Jung Lee','789 29th Street','Denver','CO','99999','USA',7.0000,0.0000,'Check','2006-02-10 00:00:00',NULL,0,NULL,3),(36,4,3,'2006-02-23 00:00:00','2006-02-25 00:00:00',2,'Thomas Axen','123 3rd Street','Los Angelas','CA','99999','USA',7.0000,0.0000,'Cash','2006-02-23 00:00:00',NULL,0,NULL,3),(37,8,6,'2006-03-06 00:00:00','2006-03-09 00:00:00',2,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',12.0000,0.0000,'Credit Card','2006-03-06 00:00:00',NULL,0,NULL,3),(38,9,28,'2006-03-10 00:00:00','2006-03-11 00:00:00',3,'Amritansh Raghav','789 28th Street','Memphis','TN','99999','USA',10.0000,0.0000,'Check','2006-03-10 00:00:00',NULL,0,NULL,3),(39,3,8,'2006-03-22 00:00:00','2006-03-24 00:00:00',3,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',5.0000,0.0000,'Check','2006-03-22 00:00:00',NULL,0,NULL,3),(40,4,10,'2006-03-24 00:00:00','2006-03-24 00:00:00',2,'Roland Wacker','123 10th Street','Chicago','IL','99999','USA',9.0000,0.0000,'Credit Card','2006-03-24 00:00:00',NULL,0,NULL,3),(41,1,7,'2006-03-24 00:00:00',NULL,NULL,'Ming-Yang Xie','123 7th Street','Boise','ID','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(42,1,10,'2006-03-24 00:00:00','2006-04-07 00:00:00',1,'Roland Wacker','123 10th Street','Chicago','IL','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,2),(43,1,11,'2006-03-24 00:00:00',NULL,3,'Peter Krschne','123 11th Street','Miami','FL','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(44,1,1,'2006-03-24 00:00:00',NULL,NULL,'Anna Bedecs','123 1st Street','Seattle','WA','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(45,1,28,'2006-04-07 00:00:00','2006-04-07 00:00:00',3,'Amritansh Raghav','789 28th Street','Memphis','TN','99999','USA',40.0000,0.0000,'Credit Card','2006-04-07 00:00:00',NULL,0,NULL,3),(46,7,9,'2006-04-05 00:00:00','2006-04-05 00:00:00',1,'Sven Mortensen','123 9th Street','Salt Lake City','UT','99999','USA',100.0000,0.0000,'Check','2006-04-05 00:00:00',NULL,0,NULL,3),(47,6,6,'2006-04-08 00:00:00','2006-04-08 00:00:00',2,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',300.0000,0.0000,'Credit Card','2006-04-08 00:00:00',NULL,0,NULL,3),(48,4,8,'2006-04-05 00:00:00','2006-04-05 00:00:00',2,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',50.0000,0.0000,'Check','2006-04-05 00:00:00',NULL,0,NULL,3),(50,9,25,'2006-04-05 00:00:00','2006-04-05 00:00:00',1,'John Rodman','789 25th Street','Chicago','IL','99999','USA',5.0000,0.0000,'Cash','2006-04-05 00:00:00',NULL,0,NULL,3),(51,9,26,'2006-04-05 00:00:00','2006-04-05 00:00:00',3,'Run Liu','789 26th Street','Miami','FL','99999','USA',60.0000,0.0000,'Credit Card','2006-04-05 00:00:00',NULL,0,NULL,3),(55,1,29,'2006-04-05 00:00:00','2006-04-05 00:00:00',2,'Soo Jung Lee','789 29th Street','Denver','CO','99999','USA',200.0000,0.0000,'Check','2006-04-05 00:00:00',NULL,0,NULL,3),(56,2,6,'2006-04-03 00:00:00','2006-04-03 00:00:00',3,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',0.0000,0.0000,'Check','2006-04-03 00:00:00',NULL,0,NULL,3),(57,9,27,'2006-04-22 00:00:00','2006-04-22 00:00:00',2,'Karen Toh','789 27th Street','Las Vegas','NV','99999','USA',200.0000,0.0000,'Check','2006-04-22 00:00:00',NULL,0,NULL,0),(58,3,4,'2006-04-22 00:00:00','2006-04-22 00:00:00',1,'Christina Lee','123 4th Street','New York','NY','99999','USA',5.0000,0.0000,'Credit Card','2006-04-22 00:00:00',NULL,0,NULL,3),(59,4,12,'2006-04-22 00:00:00','2006-04-22 00:00:00',2,'John Edwards','123 12th Street','Las Vegas','NV','99999','USA',5.0000,0.0000,'Credit Card','2006-04-22 00:00:00',NULL,0,NULL,0),(60,6,8,'2006-04-30 00:00:00','2006-04-30 00:00:00',3,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',50.0000,0.0000,'Credit Card','2006-04-30 00:00:00',NULL,0,NULL,3),(61,9,4,'2006-04-07 00:00:00','2006-04-07 00:00:00',3,'Christina Lee','123 4th Street','New York','NY','99999','USA',4.0000,0.0000,'Check','2006-04-07 00:00:00',NULL,0,NULL,0),(62,3,29,'2006-04-12 00:00:00','2006-04-12 00:00:00',2,'Soo Jung Lee','789 29th Street','Denver','CO','99999','USA',7.0000,0.0000,'Check','2006-04-12 00:00:00',NULL,0,NULL,0),(63,4,3,'2006-04-25 00:00:00','2006-04-25 00:00:00',2,'Thomas Axen','123 3rd Street','Los Angelas','CA','99999','USA',7.0000,0.0000,'Cash','2006-04-25 00:00:00',NULL,0,NULL,3),(64,8,6,'2006-05-09 00:00:00','2006-05-09 00:00:00',2,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',12.0000,0.0000,'Credit Card','2006-05-09 00:00:00',NULL,0,NULL,0),(65,9,28,'2006-05-11 00:00:00','2006-05-11 00:00:00',3,'Amritansh Raghav','789 28th Street','Memphis','TN','99999','USA',10.0000,0.0000,'Check','2006-05-11 00:00:00',NULL,0,NULL,0),(66,3,8,'2006-05-24 00:00:00','2006-05-24 00:00:00',3,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',5.0000,0.0000,'Check','2006-05-24 00:00:00',NULL,0,NULL,0),(67,4,10,'2006-05-24 00:00:00','2006-05-24 00:00:00',2,'Roland Wacker','123 10th Street','Chicago','IL','99999','USA',9.0000,0.0000,'Credit Card','2006-05-24 00:00:00',NULL,0,NULL,3),(68,1,7,'2006-05-24 00:00:00',NULL,NULL,'Ming-Yang Xie','123 7th Street','Boise','ID','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(69,1,10,'2006-05-24 00:00:00',NULL,1,'Roland Wacker','123 10th Street','Chicago','IL','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(70,1,11,'2006-05-24 00:00:00',NULL,3,'Peter Krschne','123 11th Street','Miami','FL','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(71,1,1,'2006-05-24 00:00:00',NULL,3,'Anna Bedecs','123 1st Street','Seattle','WA','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(72,1,28,'2006-06-07 00:00:00','2006-06-07 00:00:00',3,'Amritansh Raghav','789 28th Street','Memphis','TN','99999','USA',40.0000,0.0000,'Credit Card','2006-06-07 00:00:00',NULL,0,NULL,3),(73,7,9,'2006-06-05 00:00:00','2006-06-05 00:00:00',1,'Sven Mortensen','123 9th Street','Salt Lake City','UT','99999','USA',100.0000,0.0000,'Check','2006-06-05 00:00:00',NULL,0,NULL,3),(74,6,6,'2006-06-08 00:00:00','2006-06-08 00:00:00',2,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',300.0000,0.0000,'Credit Card','2006-06-08 00:00:00',NULL,0,NULL,3),(75,4,8,'2006-06-05 00:00:00','2006-06-05 00:00:00',2,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',50.0000,0.0000,'Check','2006-06-05 00:00:00',NULL,0,NULL,3),(76,9,25,'2006-06-05 00:00:00','2006-06-05 00:00:00',1,'John Rodman','789 25th Street','Chicago','IL','99999','USA',5.0000,0.0000,'Cash','2006-06-05 00:00:00',NULL,0,NULL,3),(77,9,26,'2006-06-05 00:00:00','2006-06-05 00:00:00',3,'Run Liu','789 26th Street','Miami','FL','99999','USA',60.0000,0.0000,'Credit Card','2006-06-05 00:00:00',NULL,0,NULL,3),(78,1,29,'2006-06-05 00:00:00','2006-06-05 00:00:00',2,'Soo Jung Lee','789 29th Street','Denver','CO','99999','USA',200.0000,0.0000,'Check','2006-06-05 00:00:00',NULL,0,NULL,3),(79,2,6,'2006-06-23 00:00:00','2006-06-23 00:00:00',3,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',0.0000,0.0000,'Check','2006-06-23 00:00:00',NULL,0,NULL,3),(80,2,4,'2006-04-25 17:03:55',NULL,NULL,'Christina Lee','123 4th Street','New York','NY','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(81,2,3,'2006-04-25 17:26:53',NULL,NULL,'Thomas Axen','123 3rd Street','Los Angelas','CA','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0);
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderDetail`
--

DROP TABLE IF EXISTS `orderDetail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orderDetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` decimal(18,4) NOT NULL DEFAULT 0.0000,
  `unitPrice` decimal(19,4) DEFAULT 0.0000,
  `discount` double NOT NULL DEFAULT 0,
  `status_id` int(11) DEFAULT NULL,
  `dateAllocated` datetime DEFAULT NULL,
  `PurchaseOrder_id` int(11) DEFAULT NULL,
  `inventory_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `inventory_id` (`inventory_id`),
  KEY `product_id` (`product_id`),
  KEY `purchaseOrder_id` (`PurchaseOrder_id`),
  KEY `fkOrderDetailOrder1_idx` (`order_id`),
  KEY `fkOrderDetailOrderDetailStatus1_idx` (`status_id`),
  CONSTRAINT `fkOrderDetailOrder1` FOREIGN KEY (`order_id`) REFERENCES `northwind_model`.`order` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkOrderDetailOrderDetailStatus1` FOREIGN KEY (`status_id`) REFERENCES `northwind_model`.`orderDetailStatus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkOrderDetailProducts1` FOREIGN KEY (`product_id`) REFERENCES `northwind_model`.`product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderDetail`
--

LOCK TABLES `orderDetail` WRITE;
/*!40000 ALTER TABLE `orderDetail` DISABLE KEYS */;
INSERT INTO `orderDetail` VALUES (27,30,34,100.0000,14.0000,0,2,NULL,96,83),(28,30,80,30.0000,3.5000,0,2,NULL,NULL,63),(29,31,7,10.0000,30.0000,0,2,NULL,NULL,64),(30,31,51,10.0000,53.0000,0,2,NULL,NULL,65),(31,31,80,10.0000,3.5000,0,2,NULL,NULL,66),(32,32,1,15.0000,18.0000,0,2,NULL,NULL,67),(33,32,43,20.0000,46.0000,0,2,NULL,NULL,68),(34,33,19,30.0000,9.2000,0,2,NULL,97,81),(35,34,19,20.0000,9.2000,0,2,NULL,NULL,69),(36,35,48,10.0000,12.7500,0,2,NULL,NULL,70),(37,36,41,200.0000,9.6500,0,2,NULL,98,79),(38,37,8,17.0000,40.0000,0,2,NULL,NULL,71),(39,38,43,300.0000,46.0000,0,2,NULL,99,77),(40,39,48,100.0000,12.7500,0,2,NULL,100,75),(41,40,81,200.0000,2.9900,0,2,NULL,101,73),(42,41,43,300.0000,46.0000,0,1,NULL,102,104),(43,42,6,10.0000,25.0000,0,2,NULL,NULL,84),(44,42,4,10.0000,22.0000,0,2,NULL,NULL,85),(45,42,19,10.0000,9.2000,0,2,NULL,103,110),(46,43,80,20.0000,3.5000,0,1,NULL,NULL,86),(47,43,81,50.0000,2.9900,0,1,NULL,NULL,87),(48,44,1,25.0000,18.0000,0,1,NULL,NULL,88),(49,44,43,25.0000,46.0000,0,1,NULL,NULL,89),(50,44,81,25.0000,2.9900,0,1,NULL,NULL,90),(51,45,41,50.0000,9.6500,0,2,NULL,104,116),(52,45,40,50.0000,18.4000,0,2,NULL,NULL,91),(53,46,57,100.0000,19.5000,0,2,NULL,105,101),(54,46,72,50.0000,34.8000,0,2,NULL,106,114),(55,47,34,300.0000,14.0000,0,2,NULL,107,108),(56,48,8,25.0000,40.0000,0,2,NULL,108,106),(57,48,19,25.0000,9.2000,0,2,NULL,109,112),(59,50,21,20.0000,10.0000,0,2,NULL,NULL,92),(60,51,5,25.0000,21.3500,0,2,NULL,NULL,93),(61,51,41,30.0000,9.6500,0,2,NULL,NULL,94),(62,51,40,30.0000,18.4000,0,2,NULL,NULL,95),(66,56,48,10.0000,12.7500,0,2,NULL,111,99),(67,55,34,87.0000,14.0000,0,2,NULL,NULL,117),(68,79,7,30.0000,30.0000,0,2,NULL,NULL,119),(69,79,51,30.0000,53.0000,0,2,NULL,NULL,118),(70,78,17,40.0000,39.0000,0,2,NULL,NULL,120),(71,77,6,90.0000,25.0000,0,2,NULL,NULL,121),(72,76,4,30.0000,22.0000,0,2,NULL,NULL,122),(73,75,48,40.0000,12.7500,0,2,NULL,NULL,123),(74,74,48,40.0000,12.7500,0,2,NULL,NULL,124),(75,73,41,10.0000,9.6500,0,2,NULL,NULL,125),(76,72,43,5.0000,46.0000,0,2,NULL,NULL,126),(77,71,40,40.0000,18.4000,0,2,NULL,NULL,127),(78,70,8,20.0000,40.0000,0,2,NULL,NULL,128),(79,69,80,15.0000,3.5000,0,2,NULL,NULL,129),(80,67,74,20.0000,10.0000,0,2,NULL,NULL,130),(81,60,72,40.0000,34.8000,0,2,NULL,NULL,131),(82,63,3,50.0000,10.0000,0,2,NULL,NULL,132),(83,63,8,3.0000,40.0000,0,2,NULL,NULL,133),(84,58,20,40.0000,81.0000,0,2,NULL,NULL,134),(85,58,52,40.0000,7.0000,0,2,NULL,NULL,135),(86,80,56,10.0000,38.0000,0,1,NULL,NULL,136),(90,81,81,0.0000,2.9900,0,5,NULL,NULL,NULL),(91,81,56,0.0000,38.0000,0,0,NULL,NULL,NULL);
/*!40000 ALTER TABLE `orderDetail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_2017`
--

DROP TABLE IF EXISTS `order_2017`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_2017` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `orderDate` datetime NOT NULL DEFAULT current_timestamp(),
  `shippedDate` datetime DEFAULT NULL,
  `shipper_id` int(11) DEFAULT NULL,
  `shipName` varchar(50) DEFAULT NULL,
  `shipAddress` longtext DEFAULT NULL,
  `shipCity` varchar(50) DEFAULT NULL,
  `shipStateProvince` varchar(50) DEFAULT NULL,
  `shipZipPostalCode` varchar(50) DEFAULT NULL,
  `shipCountryRegion` varchar(50) DEFAULT NULL,
  `shippingFee` decimal(19,4) DEFAULT 0.0000,
  `taxes` decimal(19,4) DEFAULT 0.0000,
  `paymentType` varchar(50) DEFAULT NULL,
  `paidDate` datetime DEFAULT NULL,
  `notes` longtext DEFAULT NULL,
  `taxRate` double DEFAULT 0,
  `taxStatus_id` tinyint(4) DEFAULT NULL,
  `status_id` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`),
  KEY `employee_id` (`employee_id`),
  KEY `id` (`id`),
  KEY `shipper_id` (`shipper_id`),
  KEY `taxStatus` (`taxStatus_id`),
  KEY `shipZipPostalCode` (`shipZipPostalCode`),
  KEY `fkOrderOrderStatus1` (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_2017`
--

LOCK TABLES `order_2017` WRITE;
/*!40000 ALTER TABLE `order_2017` DISABLE KEYS */;
INSERT INTO `order_2017` VALUES (30,9,27,'2017-01-15 00:00:00','2006-01-22 00:00:00',2,'Karen Toh','789 27th Street','Las Vegas','NV','99999','USA',200.0000,0.0000,'Check','2006-01-15 00:00:00',NULL,0,NULL,3),(31,3,4,'2017-01-20 00:00:00','2006-01-22 00:00:00',1,'Christina Lee','123 4th Street','New York','NY','99999','USA',5.0000,0.0000,'Credit Card','2006-01-20 00:00:00',NULL,0,NULL,3),(32,4,12,'2017-01-22 00:00:00','2006-01-22 00:00:00',2,'John Edwards','123 12th Street','Las Vegas','NV','99999','USA',5.0000,0.0000,'Credit Card','2006-01-22 00:00:00',NULL,0,NULL,3),(33,6,8,'2017-01-30 00:00:00','2006-01-31 00:00:00',3,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',50.0000,0.0000,'Credit Card','2006-01-30 00:00:00',NULL,0,NULL,3),(34,9,4,'2017-02-06 00:00:00','2006-02-07 00:00:00',3,'Christina Lee','123 4th Street','New York','NY','99999','USA',4.0000,0.0000,'Check','2006-02-06 00:00:00',NULL,0,NULL,3),(35,3,29,'2017-02-10 00:00:00','2006-02-12 00:00:00',2,'Soo Jung Lee','789 29th Street','Denver','CO','99999','USA',7.0000,0.0000,'Check','2006-02-10 00:00:00',NULL,0,NULL,3),(36,4,3,'2017-02-23 00:00:00','2006-02-25 00:00:00',2,'Thomas Axen','123 3rd Street','Los Angelas','CA','99999','USA',7.0000,0.0000,'Cash','2006-02-23 00:00:00',NULL,0,NULL,3),(37,8,6,'2017-03-06 00:00:00','2006-03-09 00:00:00',2,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',12.0000,0.0000,'Credit Card','2006-03-06 00:00:00',NULL,0,NULL,3),(38,9,28,'2017-03-10 00:00:00','2006-03-11 00:00:00',3,'Amritansh Raghav','789 28th Street','Memphis','TN','99999','USA',10.0000,0.0000,'Check','2006-03-10 00:00:00',NULL,0,NULL,3),(39,3,8,'2017-03-22 00:00:00','2006-03-24 00:00:00',3,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',5.0000,0.0000,'Check','2006-03-22 00:00:00',NULL,0,NULL,3),(40,4,10,'2017-03-24 00:00:00','2006-03-24 00:00:00',2,'Roland Wacker','123 10th Street','Chicago','IL','99999','USA',9.0000,0.0000,'Credit Card','2006-03-24 00:00:00',NULL,0,NULL,3),(41,1,7,'2017-03-24 00:00:00',NULL,NULL,'Ming-Yang Xie','123 7th Street','Boise','ID','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(42,1,10,'2017-03-24 00:00:00','2006-04-07 00:00:00',1,'Roland Wacker','123 10th Street','Chicago','IL','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,2),(43,1,11,'2017-03-24 00:00:00',NULL,3,'Peter Krschne','123 11th Street','Miami','FL','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(44,1,1,'2017-03-24 00:00:00',NULL,NULL,'Anna Bedecs','123 1st Street','Seattle','WA','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(45,1,28,'2017-04-07 00:00:00','2006-04-07 00:00:00',3,'Amritansh Raghav','789 28th Street','Memphis','TN','99999','USA',40.0000,0.0000,'Credit Card','2006-04-07 00:00:00',NULL,0,NULL,3),(46,7,9,'2017-04-05 00:00:00','2006-04-05 00:00:00',1,'Sven Mortensen','123 9th Street','Salt Lake City','UT','99999','USA',100.0000,0.0000,'Check','2006-04-05 00:00:00',NULL,0,NULL,3),(47,6,6,'2017-04-08 00:00:00','2006-04-08 00:00:00',2,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',300.0000,0.0000,'Credit Card','2006-04-08 00:00:00',NULL,0,NULL,3),(48,4,8,'2017-04-05 00:00:00','2006-04-05 00:00:00',2,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',50.0000,0.0000,'Check','2006-04-05 00:00:00',NULL,0,NULL,3),(50,9,25,'2006-04-05 00:00:00','2006-04-05 00:00:00',1,'John Rodman','789 25th Street','Chicago','IL','99999','USA',5.0000,0.0000,'Cash','2006-04-05 00:00:00',NULL,0,NULL,3),(51,9,26,'2006-04-05 00:00:00','2006-04-05 00:00:00',3,'Run Liu','789 26th Street','Miami','FL','99999','USA',60.0000,0.0000,'Credit Card','2006-04-05 00:00:00',NULL,0,NULL,3),(55,1,29,'2006-04-05 00:00:00','2006-04-05 00:00:00',2,'Soo Jung Lee','789 29th Street','Denver','CO','99999','USA',200.0000,0.0000,'Check','2006-04-05 00:00:00',NULL,0,NULL,3),(56,2,6,'2006-04-03 00:00:00','2006-04-03 00:00:00',3,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',0.0000,0.0000,'Check','2006-04-03 00:00:00',NULL,0,NULL,3),(57,9,27,'2006-04-22 00:00:00','2006-04-22 00:00:00',2,'Karen Toh','789 27th Street','Las Vegas','NV','99999','USA',200.0000,0.0000,'Check','2006-04-22 00:00:00',NULL,0,NULL,0),(58,3,4,'2006-04-22 00:00:00','2006-04-22 00:00:00',1,'Christina Lee','123 4th Street','New York','NY','99999','USA',5.0000,0.0000,'Credit Card','2006-04-22 00:00:00',NULL,0,NULL,3),(59,4,12,'2006-04-22 00:00:00','2006-04-22 00:00:00',2,'John Edwards','123 12th Street','Las Vegas','NV','99999','USA',5.0000,0.0000,'Credit Card','2006-04-22 00:00:00',NULL,0,NULL,0),(60,6,8,'2006-04-30 00:00:00','2006-04-30 00:00:00',3,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',50.0000,0.0000,'Credit Card','2006-04-30 00:00:00',NULL,0,NULL,3),(61,9,4,'2006-04-07 00:00:00','2006-04-07 00:00:00',3,'Christina Lee','123 4th Street','New York','NY','99999','USA',4.0000,0.0000,'Check','2006-04-07 00:00:00',NULL,0,NULL,0),(62,3,29,'2006-04-12 00:00:00','2006-04-12 00:00:00',2,'Soo Jung Lee','789 29th Street','Denver','CO','99999','USA',7.0000,0.0000,'Check','2006-04-12 00:00:00',NULL,0,NULL,0),(63,4,3,'2006-04-25 00:00:00','2006-04-25 00:00:00',2,'Thomas Axen','123 3rd Street','Los Angelas','CA','99999','USA',7.0000,0.0000,'Cash','2006-04-25 00:00:00',NULL,0,NULL,3),(64,8,6,'2006-05-09 00:00:00','2006-05-09 00:00:00',2,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',12.0000,0.0000,'Credit Card','2006-05-09 00:00:00',NULL,0,NULL,0),(65,9,28,'2006-05-11 00:00:00','2006-05-11 00:00:00',3,'Amritansh Raghav','789 28th Street','Memphis','TN','99999','USA',10.0000,0.0000,'Check','2006-05-11 00:00:00',NULL,0,NULL,0),(66,3,8,'2006-05-24 00:00:00','2006-05-24 00:00:00',3,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',5.0000,0.0000,'Check','2006-05-24 00:00:00',NULL,0,NULL,0),(67,4,10,'2006-05-24 00:00:00','2006-05-24 00:00:00',2,'Roland Wacker','123 10th Street','Chicago','IL','99999','USA',9.0000,0.0000,'Credit Card','2006-05-24 00:00:00',NULL,0,NULL,3),(68,1,7,'2006-05-24 00:00:00',NULL,NULL,'Ming-Yang Xie','123 7th Street','Boise','ID','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(69,1,10,'2006-05-24 00:00:00',NULL,1,'Roland Wacker','123 10th Street','Chicago','IL','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(70,1,11,'2006-05-24 00:00:00',NULL,3,'Peter Krschne','123 11th Street','Miami','FL','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(71,1,1,'2006-05-24 00:00:00',NULL,3,'Anna Bedecs','123 1st Street','Seattle','WA','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(72,1,28,'2006-06-07 00:00:00','2006-06-07 00:00:00',3,'Amritansh Raghav','789 28th Street','Memphis','TN','99999','USA',40.0000,0.0000,'Credit Card','2006-06-07 00:00:00',NULL,0,NULL,3),(73,7,9,'2006-06-05 00:00:00','2006-06-05 00:00:00',1,'Sven Mortensen','123 9th Street','Salt Lake City','UT','99999','USA',100.0000,0.0000,'Check','2006-06-05 00:00:00',NULL,0,NULL,3),(74,6,6,'2006-06-08 00:00:00','2006-06-08 00:00:00',2,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',300.0000,0.0000,'Credit Card','2006-06-08 00:00:00',NULL,0,NULL,3),(75,4,8,'2006-06-05 00:00:00','2006-06-05 00:00:00',2,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',50.0000,0.0000,'Check','2006-06-05 00:00:00',NULL,0,NULL,3),(76,9,25,'2006-06-05 00:00:00','2006-06-05 00:00:00',1,'John Rodman','789 25th Street','Chicago','IL','99999','USA',5.0000,0.0000,'Cash','2006-06-05 00:00:00',NULL,0,NULL,3),(77,9,26,'2006-06-05 00:00:00','2006-06-05 00:00:00',3,'Run Liu','789 26th Street','Miami','FL','99999','USA',60.0000,0.0000,'Credit Card','2006-06-05 00:00:00',NULL,0,NULL,3),(78,1,29,'2006-06-05 00:00:00','2006-06-05 00:00:00',2,'Soo Jung Lee','789 29th Street','Denver','CO','99999','USA',200.0000,0.0000,'Check','2006-06-05 00:00:00',NULL,0,NULL,3),(79,2,6,'2006-06-23 00:00:00','2006-06-23 00:00:00',3,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',0.0000,0.0000,'Check','2006-06-23 00:00:00',NULL,0,NULL,3),(80,2,4,'2006-04-25 17:03:55',NULL,NULL,'Christina Lee','123 4th Street','New York','NY','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(81,2,3,'2006-04-25 17:26:53',NULL,NULL,'Thomas Axen','123 3rd Street','Los Angelas','CA','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0);
/*!40000 ALTER TABLE `order_2017` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_2018`
--

DROP TABLE IF EXISTS `order_2018`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_2018` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `orderDate` datetime NOT NULL DEFAULT current_timestamp(),
  `shippedDate` datetime DEFAULT NULL,
  `shipper_id` int(11) DEFAULT NULL,
  `shipName` varchar(50) DEFAULT NULL,
  `shipAddress` longtext DEFAULT NULL,
  `shipCity` varchar(50) DEFAULT NULL,
  `shipStateProvince` varchar(50) DEFAULT NULL,
  `shipZipPostalCode` varchar(50) DEFAULT NULL,
  `shipCountryRegion` varchar(50) DEFAULT NULL,
  `shippingFee` decimal(19,4) DEFAULT 0.0000,
  `taxes` decimal(19,4) DEFAULT 0.0000,
  `paymentType` varchar(50) DEFAULT NULL,
  `paidDate` datetime DEFAULT NULL,
  `notes` longtext DEFAULT NULL,
  `taxRate` double DEFAULT 0,
  `taxStatus_id` tinyint(4) DEFAULT NULL,
  `status_id` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`),
  KEY `employee_id` (`employee_id`),
  KEY `id` (`id`),
  KEY `shipper_id` (`shipper_id`),
  KEY `taxStatus` (`taxStatus_id`),
  KEY `shipZipPostalCode` (`shipZipPostalCode`),
  KEY `fkOrderOrderStatus1` (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_2018`
--

LOCK TABLES `order_2018` WRITE;
/*!40000 ALTER TABLE `order_2018` DISABLE KEYS */;
INSERT INTO `order_2018` VALUES (30,9,27,'2006-01-15 00:00:00','2006-01-22 00:00:00',2,'Karen Toh','789 27th Street','Las Vegas','NV','99999','USA',200.0000,0.0000,'Check','2006-01-15 00:00:00',NULL,0,NULL,3),(31,3,4,'2006-01-20 00:00:00','2006-01-22 00:00:00',1,'Christina Lee','123 4th Street','New York','NY','99999','USA',5.0000,0.0000,'Credit Card','2006-01-20 00:00:00',NULL,0,NULL,3),(32,4,12,'2006-01-22 00:00:00','2006-01-22 00:00:00',2,'John Edwards','123 12th Street','Las Vegas','NV','99999','USA',5.0000,0.0000,'Credit Card','2006-01-22 00:00:00',NULL,0,NULL,3),(33,6,8,'2006-01-30 00:00:00','2006-01-31 00:00:00',3,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',50.0000,0.0000,'Credit Card','2006-01-30 00:00:00',NULL,0,NULL,3),(34,9,4,'2006-02-06 00:00:00','2006-02-07 00:00:00',3,'Christina Lee','123 4th Street','New York','NY','99999','USA',4.0000,0.0000,'Check','2006-02-06 00:00:00',NULL,0,NULL,3),(35,3,29,'2006-02-10 00:00:00','2006-02-12 00:00:00',2,'Soo Jung Lee','789 29th Street','Denver','CO','99999','USA',7.0000,0.0000,'Check','2006-02-10 00:00:00',NULL,0,NULL,3),(36,4,3,'2006-02-23 00:00:00','2006-02-25 00:00:00',2,'Thomas Axen','123 3rd Street','Los Angelas','CA','99999','USA',7.0000,0.0000,'Cash','2006-02-23 00:00:00',NULL,0,NULL,3),(37,8,6,'2006-03-06 00:00:00','2006-03-09 00:00:00',2,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',12.0000,0.0000,'Credit Card','2006-03-06 00:00:00',NULL,0,NULL,3),(38,9,28,'2006-03-10 00:00:00','2006-03-11 00:00:00',3,'Amritansh Raghav','789 28th Street','Memphis','TN','99999','USA',10.0000,0.0000,'Check','2006-03-10 00:00:00',NULL,0,NULL,3),(39,3,8,'2006-03-22 00:00:00','2006-03-24 00:00:00',3,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',5.0000,0.0000,'Check','2006-03-22 00:00:00',NULL,0,NULL,3),(40,4,10,'2006-03-24 00:00:00','2006-03-24 00:00:00',2,'Roland Wacker','123 10th Street','Chicago','IL','99999','USA',9.0000,0.0000,'Credit Card','2006-03-24 00:00:00',NULL,0,NULL,3),(41,1,7,'2006-03-24 00:00:00',NULL,NULL,'Ming-Yang Xie','123 7th Street','Boise','ID','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(42,1,10,'2006-03-24 00:00:00','2006-04-07 00:00:00',1,'Roland Wacker','123 10th Street','Chicago','IL','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,2),(43,1,11,'2006-03-24 00:00:00',NULL,3,'Peter Krschne','123 11th Street','Miami','FL','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(44,1,1,'2006-03-24 00:00:00',NULL,NULL,'Anna Bedecs','123 1st Street','Seattle','WA','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(45,1,28,'2006-04-07 00:00:00','2006-04-07 00:00:00',3,'Amritansh Raghav','789 28th Street','Memphis','TN','99999','USA',40.0000,0.0000,'Credit Card','2006-04-07 00:00:00',NULL,0,NULL,3),(46,7,9,'2006-04-05 00:00:00','2006-04-05 00:00:00',1,'Sven Mortensen','123 9th Street','Salt Lake City','UT','99999','USA',100.0000,0.0000,'Check','2006-04-05 00:00:00',NULL,0,NULL,3),(47,6,6,'2006-04-08 00:00:00','2006-04-08 00:00:00',2,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',300.0000,0.0000,'Credit Card','2006-04-08 00:00:00',NULL,0,NULL,3),(48,4,8,'2006-04-05 00:00:00','2006-04-05 00:00:00',2,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',50.0000,0.0000,'Check','2006-04-05 00:00:00',NULL,0,NULL,3),(50,9,25,'2006-04-05 00:00:00','2006-04-05 00:00:00',1,'John Rodman','789 25th Street','Chicago','IL','99999','USA',5.0000,0.0000,'Cash','2006-04-05 00:00:00',NULL,0,NULL,3),(51,9,26,'2006-04-05 00:00:00','2006-04-05 00:00:00',3,'Run Liu','789 26th Street','Miami','FL','99999','USA',60.0000,0.0000,'Credit Card','2006-04-05 00:00:00',NULL,0,NULL,3),(55,1,29,'2006-04-05 00:00:00','2006-04-05 00:00:00',2,'Soo Jung Lee','789 29th Street','Denver','CO','99999','USA',200.0000,0.0000,'Check','2006-04-05 00:00:00',NULL,0,NULL,3),(56,2,6,'2006-04-03 00:00:00','2006-04-03 00:00:00',3,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',0.0000,0.0000,'Check','2006-04-03 00:00:00',NULL,0,NULL,3),(57,9,27,'2006-04-22 00:00:00','2006-04-22 00:00:00',2,'Karen Toh','789 27th Street','Las Vegas','NV','99999','USA',200.0000,0.0000,'Check','2006-04-22 00:00:00',NULL,0,NULL,0),(58,3,4,'2006-04-22 00:00:00','2006-04-22 00:00:00',1,'Christina Lee','123 4th Street','New York','NY','99999','USA',5.0000,0.0000,'Credit Card','2006-04-22 00:00:00',NULL,0,NULL,3),(59,4,12,'2006-04-22 00:00:00','2006-04-22 00:00:00',2,'John Edwards','123 12th Street','Las Vegas','NV','99999','USA',5.0000,0.0000,'Credit Card','2006-04-22 00:00:00',NULL,0,NULL,0),(60,6,8,'2006-04-30 00:00:00','2006-04-30 00:00:00',3,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',50.0000,0.0000,'Credit Card','2006-04-30 00:00:00',NULL,0,NULL,3),(61,9,4,'2006-04-07 00:00:00','2006-04-07 00:00:00',3,'Christina Lee','123 4th Street','New York','NY','99999','USA',4.0000,0.0000,'Check','2006-04-07 00:00:00',NULL,0,NULL,0),(62,3,29,'2006-04-12 00:00:00','2006-04-12 00:00:00',2,'Soo Jung Lee','789 29th Street','Denver','CO','99999','USA',7.0000,0.0000,'Check','2006-04-12 00:00:00',NULL,0,NULL,0),(63,4,3,'2006-04-25 00:00:00','2006-04-25 00:00:00',2,'Thomas Axen','123 3rd Street','Los Angelas','CA','99999','USA',7.0000,0.0000,'Cash','2006-04-25 00:00:00',NULL,0,NULL,3),(64,8,6,'2006-05-09 00:00:00','2006-05-09 00:00:00',2,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',12.0000,0.0000,'Credit Card','2006-05-09 00:00:00',NULL,0,NULL,0),(65,9,28,'2006-05-11 00:00:00','2006-05-11 00:00:00',3,'Amritansh Raghav','789 28th Street','Memphis','TN','99999','USA',10.0000,0.0000,'Check','2006-05-11 00:00:00',NULL,0,NULL,0),(66,3,8,'2006-05-24 00:00:00','2006-05-24 00:00:00',3,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',5.0000,0.0000,'Check','2006-05-24 00:00:00',NULL,0,NULL,0),(67,4,10,'2006-05-24 00:00:00','2006-05-24 00:00:00',2,'Roland Wacker','123 10th Street','Chicago','IL','99999','USA',9.0000,0.0000,'Credit Card','2006-05-24 00:00:00',NULL,0,NULL,3),(68,1,7,'2006-05-24 00:00:00',NULL,NULL,'Ming-Yang Xie','123 7th Street','Boise','ID','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(69,1,10,'2006-05-24 00:00:00',NULL,1,'Roland Wacker','123 10th Street','Chicago','IL','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(70,1,11,'2006-05-24 00:00:00',NULL,3,'Peter Krschne','123 11th Street','Miami','FL','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(71,1,1,'2006-05-24 00:00:00',NULL,3,'Anna Bedecs','123 1st Street','Seattle','WA','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(72,1,28,'2006-06-07 00:00:00','2006-06-07 00:00:00',3,'Amritansh Raghav','789 28th Street','Memphis','TN','99999','USA',40.0000,0.0000,'Credit Card','2006-06-07 00:00:00',NULL,0,NULL,3),(73,7,9,'2006-06-05 00:00:00','2006-06-05 00:00:00',1,'Sven Mortensen','123 9th Street','Salt Lake City','UT','99999','USA',100.0000,0.0000,'Check','2006-06-05 00:00:00',NULL,0,NULL,3),(74,6,6,'2006-06-08 00:00:00','2006-06-08 00:00:00',2,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',300.0000,0.0000,'Credit Card','2006-06-08 00:00:00',NULL,0,NULL,3),(75,4,8,'2006-06-05 00:00:00','2006-06-05 00:00:00',2,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',50.0000,0.0000,'Check','2006-06-05 00:00:00',NULL,0,NULL,3),(76,9,25,'2006-06-05 00:00:00','2006-06-05 00:00:00',1,'John Rodman','789 25th Street','Chicago','IL','99999','USA',5.0000,0.0000,'Cash','2006-06-05 00:00:00',NULL,0,NULL,3),(77,9,26,'2006-06-05 00:00:00','2006-06-05 00:00:00',3,'Run Liu','789 26th Street','Miami','FL','99999','USA',60.0000,0.0000,'Credit Card','2006-06-05 00:00:00',NULL,0,NULL,3),(78,1,29,'2006-06-05 00:00:00','2006-06-05 00:00:00',2,'Soo Jung Lee','789 29th Street','Denver','CO','99999','USA',200.0000,0.0000,'Check','2006-06-05 00:00:00',NULL,0,NULL,3),(79,2,6,'2006-06-23 00:00:00','2006-06-23 00:00:00',3,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',0.0000,0.0000,'Check','2006-06-23 00:00:00',NULL,0,NULL,3),(80,2,4,'2006-04-25 17:03:55',NULL,NULL,'Christina Lee','123 4th Street','New York','NY','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(81,2,3,'2006-04-25 17:26:53',NULL,NULL,'Thomas Axen','123 3rd Street','Los Angelas','CA','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0);
/*!40000 ALTER TABLE `order_2018` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_2019`
--

DROP TABLE IF EXISTS `order_2019`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_2019` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `orderDate` datetime NOT NULL DEFAULT current_timestamp(),
  `shippedDate` datetime DEFAULT NULL,
  `shipper_id` int(11) DEFAULT NULL,
  `shipName` varchar(50) DEFAULT NULL,
  `shipAddress` longtext DEFAULT NULL,
  `shipCity` varchar(50) DEFAULT NULL,
  `shipStateProvince` varchar(50) DEFAULT NULL,
  `shipZipPostalCode` varchar(50) DEFAULT NULL,
  `shipCountryRegion` varchar(50) DEFAULT NULL,
  `shippingFee` decimal(19,4) DEFAULT 0.0000,
  `taxes` decimal(19,4) DEFAULT 0.0000,
  `paymentType` varchar(50) DEFAULT NULL,
  `paidDate` datetime DEFAULT NULL,
  `notes` longtext DEFAULT NULL,
  `taxRate` double DEFAULT 0,
  `taxStatus_id` tinyint(4) DEFAULT NULL,
  `status_id` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`),
  KEY `employee_id` (`employee_id`),
  KEY `id` (`id`),
  KEY `shipper_id` (`shipper_id`),
  KEY `taxStatus` (`taxStatus_id`),
  KEY `shipZipPostalCode` (`shipZipPostalCode`),
  KEY `fkOrderOrderStatus1` (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_2019`
--

LOCK TABLES `order_2019` WRITE;
/*!40000 ALTER TABLE `order_2019` DISABLE KEYS */;
INSERT INTO `order_2019` VALUES (30,9,27,'2006-01-15 00:00:00','2006-01-22 00:00:00',2,'Karen Toh','789 27th Street','Las Vegas','NV','99999','USA',200.0000,0.0000,'Check','2006-01-15 00:00:00',NULL,0,NULL,3),(31,3,4,'2006-01-20 00:00:00','2006-01-22 00:00:00',1,'Christina Lee','123 4th Street','New York','NY','99999','USA',5.0000,0.0000,'Credit Card','2006-01-20 00:00:00',NULL,0,NULL,3),(32,4,12,'2006-01-22 00:00:00','2006-01-22 00:00:00',2,'John Edwards','123 12th Street','Las Vegas','NV','99999','USA',5.0000,0.0000,'Credit Card','2006-01-22 00:00:00',NULL,0,NULL,3),(33,6,8,'2006-01-30 00:00:00','2006-01-31 00:00:00',3,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',50.0000,0.0000,'Credit Card','2006-01-30 00:00:00',NULL,0,NULL,3),(34,9,4,'2006-02-06 00:00:00','2006-02-07 00:00:00',3,'Christina Lee','123 4th Street','New York','NY','99999','USA',4.0000,0.0000,'Check','2006-02-06 00:00:00',NULL,0,NULL,3),(35,3,29,'2006-02-10 00:00:00','2006-02-12 00:00:00',2,'Soo Jung Lee','789 29th Street','Denver','CO','99999','USA',7.0000,0.0000,'Check','2006-02-10 00:00:00',NULL,0,NULL,3),(36,4,3,'2006-02-23 00:00:00','2006-02-25 00:00:00',2,'Thomas Axen','123 3rd Street','Los Angelas','CA','99999','USA',7.0000,0.0000,'Cash','2006-02-23 00:00:00',NULL,0,NULL,3),(37,8,6,'2006-03-06 00:00:00','2006-03-09 00:00:00',2,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',12.0000,0.0000,'Credit Card','2006-03-06 00:00:00',NULL,0,NULL,3),(38,9,28,'2006-03-10 00:00:00','2006-03-11 00:00:00',3,'Amritansh Raghav','789 28th Street','Memphis','TN','99999','USA',10.0000,0.0000,'Check','2006-03-10 00:00:00',NULL,0,NULL,3),(39,3,8,'2006-03-22 00:00:00','2006-03-24 00:00:00',3,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',5.0000,0.0000,'Check','2006-03-22 00:00:00',NULL,0,NULL,3),(40,4,10,'2006-03-24 00:00:00','2006-03-24 00:00:00',2,'Roland Wacker','123 10th Street','Chicago','IL','99999','USA',9.0000,0.0000,'Credit Card','2006-03-24 00:00:00',NULL,0,NULL,3),(41,1,7,'2006-03-24 00:00:00',NULL,NULL,'Ming-Yang Xie','123 7th Street','Boise','ID','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(42,1,10,'2006-03-24 00:00:00','2006-04-07 00:00:00',1,'Roland Wacker','123 10th Street','Chicago','IL','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,2),(43,1,11,'2006-03-24 00:00:00',NULL,3,'Peter Krschne','123 11th Street','Miami','FL','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(44,1,1,'2006-03-24 00:00:00',NULL,NULL,'Anna Bedecs','123 1st Street','Seattle','WA','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(45,1,28,'2006-04-07 00:00:00','2006-04-07 00:00:00',3,'Amritansh Raghav','789 28th Street','Memphis','TN','99999','USA',40.0000,0.0000,'Credit Card','2006-04-07 00:00:00',NULL,0,NULL,3),(46,7,9,'2006-04-05 00:00:00','2006-04-05 00:00:00',1,'Sven Mortensen','123 9th Street','Salt Lake City','UT','99999','USA',100.0000,0.0000,'Check','2006-04-05 00:00:00',NULL,0,NULL,3),(47,6,6,'2006-04-08 00:00:00','2006-04-08 00:00:00',2,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',300.0000,0.0000,'Credit Card','2006-04-08 00:00:00',NULL,0,NULL,3),(48,4,8,'2006-04-05 00:00:00','2006-04-05 00:00:00',2,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',50.0000,0.0000,'Check','2006-04-05 00:00:00',NULL,0,NULL,3),(50,9,25,'2006-04-05 00:00:00','2006-04-05 00:00:00',1,'John Rodman','789 25th Street','Chicago','IL','99999','USA',5.0000,0.0000,'Cash','2006-04-05 00:00:00',NULL,0,NULL,3),(51,9,26,'2006-04-05 00:00:00','2006-04-05 00:00:00',3,'Run Liu','789 26th Street','Miami','FL','99999','USA',60.0000,0.0000,'Credit Card','2006-04-05 00:00:00',NULL,0,NULL,3),(55,1,29,'2006-04-05 00:00:00','2006-04-05 00:00:00',2,'Soo Jung Lee','789 29th Street','Denver','CO','99999','USA',200.0000,0.0000,'Check','2006-04-05 00:00:00',NULL,0,NULL,3),(56,2,6,'2006-04-03 00:00:00','2006-04-03 00:00:00',3,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',0.0000,0.0000,'Check','2006-04-03 00:00:00',NULL,0,NULL,3),(57,9,27,'2006-04-22 00:00:00','2006-04-22 00:00:00',2,'Karen Toh','789 27th Street','Las Vegas','NV','99999','USA',200.0000,0.0000,'Check','2006-04-22 00:00:00',NULL,0,NULL,0),(58,3,4,'2006-04-22 00:00:00','2006-04-22 00:00:00',1,'Christina Lee','123 4th Street','New York','NY','99999','USA',5.0000,0.0000,'Credit Card','2006-04-22 00:00:00',NULL,0,NULL,3),(59,4,12,'2006-04-22 00:00:00','2006-04-22 00:00:00',2,'John Edwards','123 12th Street','Las Vegas','NV','99999','USA',5.0000,0.0000,'Credit Card','2006-04-22 00:00:00',NULL,0,NULL,0),(60,6,8,'2006-04-30 00:00:00','2006-04-30 00:00:00',3,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',50.0000,0.0000,'Credit Card','2006-04-30 00:00:00',NULL,0,NULL,3),(61,9,4,'2006-04-07 00:00:00','2006-04-07 00:00:00',3,'Christina Lee','123 4th Street','New York','NY','99999','USA',4.0000,0.0000,'Check','2006-04-07 00:00:00',NULL,0,NULL,0),(62,3,29,'2006-04-12 00:00:00','2006-04-12 00:00:00',2,'Soo Jung Lee','789 29th Street','Denver','CO','99999','USA',7.0000,0.0000,'Check','2006-04-12 00:00:00',NULL,0,NULL,0),(63,4,3,'2006-04-25 00:00:00','2006-04-25 00:00:00',2,'Thomas Axen','123 3rd Street','Los Angelas','CA','99999','USA',7.0000,0.0000,'Cash','2006-04-25 00:00:00',NULL,0,NULL,3),(64,8,6,'2006-05-09 00:00:00','2006-05-09 00:00:00',2,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',12.0000,0.0000,'Credit Card','2006-05-09 00:00:00',NULL,0,NULL,0),(65,9,28,'2006-05-11 00:00:00','2006-05-11 00:00:00',3,'Amritansh Raghav','789 28th Street','Memphis','TN','99999','USA',10.0000,0.0000,'Check','2006-05-11 00:00:00',NULL,0,NULL,0),(66,3,8,'2006-05-24 00:00:00','2006-05-24 00:00:00',3,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',5.0000,0.0000,'Check','2006-05-24 00:00:00',NULL,0,NULL,0),(67,4,10,'2006-05-24 00:00:00','2006-05-24 00:00:00',2,'Roland Wacker','123 10th Street','Chicago','IL','99999','USA',9.0000,0.0000,'Credit Card','2006-05-24 00:00:00',NULL,0,NULL,3),(68,1,7,'2006-05-24 00:00:00',NULL,NULL,'Ming-Yang Xie','123 7th Street','Boise','ID','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(69,1,10,'2006-05-24 00:00:00',NULL,1,'Roland Wacker','123 10th Street','Chicago','IL','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(70,1,11,'2006-05-24 00:00:00',NULL,3,'Peter Krschne','123 11th Street','Miami','FL','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(71,1,1,'2006-05-24 00:00:00',NULL,3,'Anna Bedecs','123 1st Street','Seattle','WA','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(72,1,28,'2006-06-07 00:00:00','2006-06-07 00:00:00',3,'Amritansh Raghav','789 28th Street','Memphis','TN','99999','USA',40.0000,0.0000,'Credit Card','2006-06-07 00:00:00',NULL,0,NULL,3),(73,7,9,'2006-06-05 00:00:00','2006-06-05 00:00:00',1,'Sven Mortensen','123 9th Street','Salt Lake City','UT','99999','USA',100.0000,0.0000,'Check','2006-06-05 00:00:00',NULL,0,NULL,3),(74,6,6,'2006-06-08 00:00:00','2006-06-08 00:00:00',2,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',300.0000,0.0000,'Credit Card','2006-06-08 00:00:00',NULL,0,NULL,3),(75,4,8,'2006-06-05 00:00:00','2006-06-05 00:00:00',2,'Elizabeth Andersen','123 8th Street','Portland','OR','99999','USA',50.0000,0.0000,'Check','2006-06-05 00:00:00',NULL,0,NULL,3),(76,9,25,'2006-06-05 00:00:00','2006-06-05 00:00:00',1,'John Rodman','789 25th Street','Chicago','IL','99999','USA',5.0000,0.0000,'Cash','2006-06-05 00:00:00',NULL,0,NULL,3),(77,9,26,'2006-06-05 00:00:00','2006-06-05 00:00:00',3,'Run Liu','789 26th Street','Miami','FL','99999','USA',60.0000,0.0000,'Credit Card','2006-06-05 00:00:00',NULL,0,NULL,3),(78,1,29,'2006-06-05 00:00:00','2006-06-05 00:00:00',2,'Soo Jung Lee','789 29th Street','Denver','CO','99999','USA',200.0000,0.0000,'Check','2006-06-05 00:00:00',NULL,0,NULL,3),(79,2,6,'2006-06-23 00:00:00','2006-06-23 00:00:00',3,'Francisco Pérez-Olaeta','123 6th Street','Milwaukee','WI','99999','USA',0.0000,0.0000,'Check','2006-06-23 00:00:00',NULL,0,NULL,3),(80,2,4,'2006-04-25 17:03:55',NULL,NULL,'Christina Lee','123 4th Street','New York','NY','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0),(81,2,3,'2006-04-25 17:26:53',NULL,NULL,'Thomas Axen','123 3rd Street','Los Angelas','CA','99999','USA',0.0000,0.0000,NULL,NULL,NULL,0,NULL,0);
/*!40000 ALTER TABLE `order_2019` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchaseOrder`
--

DROP TABLE IF EXISTS `purchaseOrder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purchaseOrder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_id` int(11) DEFAULT NULL,
  `createdBy_employee_id` int(11) DEFAULT NULL,
  `submittedDate` datetime DEFAULT NULL,
  `creationDate` datetime NOT NULL DEFAULT current_timestamp(),
  `status_id` int(11) DEFAULT 0,
  `expectedDate` datetime DEFAULT NULL,
  `shippingFee` decimal(19,4) NOT NULL DEFAULT 0.0000,
  `taxes` decimal(19,4) NOT NULL DEFAULT 0.0000,
  `paymentDate` datetime DEFAULT NULL,
  `paymentAmount` decimal(19,4) DEFAULT 0.0000,
  `paymentMethod` varchar(50) DEFAULT NULL,
  `notes` longtext DEFAULT NULL,
  `approvedBy_employee_id` int(11) DEFAULT NULL,
  `approvedDate` datetime DEFAULT NULL,
  `submittedBy_employee_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `createdBy` (`createdBy_employee_id`),
  KEY `status_id` (`status_id`),
  KEY `supplier_id` (`supplier_id`),
  CONSTRAINT `fkPurchaseOrderEmployees1` FOREIGN KEY (`createdBy_employee_id`) REFERENCES `northwind_model`.`employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkPurchaseOrderPurchaseOrderStatus1` FOREIGN KEY (`status_id`) REFERENCES `northwind_model`.`purchaseOrderStatus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkPurchaseOrderSuppliers1` FOREIGN KEY (`supplier_id`) REFERENCES `northwind_model`.`supplier` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchaseOrder`
--

LOCK TABLES `purchaseOrder` WRITE;
/*!40000 ALTER TABLE `purchaseOrder` DISABLE KEYS */;
INSERT INTO `purchaseOrder` VALUES (90,1,2,'2006-01-14 00:00:00','2006-01-22 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,NULL,2,'2006-01-22 00:00:00',2),(91,3,2,'2006-01-14 00:00:00','2006-01-22 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,NULL,2,'2006-01-22 00:00:00',2),(92,2,2,'2006-01-14 00:00:00','2006-01-22 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,NULL,2,'2006-01-22 00:00:00',2),(93,5,2,'2006-01-14 00:00:00','2006-01-22 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,NULL,2,'2006-01-22 00:00:00',2),(94,6,2,'2006-01-14 00:00:00','2006-01-22 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,NULL,2,'2006-01-22 00:00:00',2),(95,4,2,'2006-01-14 00:00:00','2006-01-22 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,NULL,2,'2006-01-22 00:00:00',2),(96,1,5,'2006-01-14 00:00:00','2006-01-22 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,'Purchase generated based on Order #30',2,'2006-01-22 00:00:00',5),(97,2,7,'2006-01-14 00:00:00','2006-01-22 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,'Purchase generated based on Order #33',2,'2006-01-22 00:00:00',7),(98,2,4,'2006-01-14 00:00:00','2006-01-22 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,'Purchase generated based on Order #36',2,'2006-01-22 00:00:00',4),(99,1,3,'2006-01-14 00:00:00','2006-01-22 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,'Purchase generated based on Order #38',2,'2006-01-22 00:00:00',3),(100,2,9,'2006-01-14 00:00:00','2006-01-22 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,'Purchase generated based on Order #39',2,'2006-01-22 00:00:00',9),(101,1,2,'2006-01-14 00:00:00','2006-01-22 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,'Purchase generated based on Order #40',2,'2006-01-22 00:00:00',2),(102,1,1,'2006-03-24 00:00:00','2006-03-24 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,'Purchase generated based on Order #41',2,'2006-04-04 00:00:00',1),(103,2,1,'2006-03-24 00:00:00','2006-03-24 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,'Purchase generated based on Order #42',2,'2006-04-04 00:00:00',1),(104,2,1,'2006-03-24 00:00:00','2006-03-24 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,'Purchase generated based on Order #45',2,'2006-04-04 00:00:00',1),(105,5,7,'2006-03-24 00:00:00','2006-03-24 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,'Check','Purchase generated based on Order #46',2,'2006-04-04 00:00:00',7),(106,6,7,'2006-03-24 00:00:00','2006-03-24 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,'Purchase generated based on Order #46',2,'2006-04-04 00:00:00',7),(107,1,6,'2006-03-24 00:00:00','2006-03-24 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,'Purchase generated based on Order #47',2,'2006-04-04 00:00:00',6),(108,2,4,'2006-03-24 00:00:00','2006-03-24 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,'Purchase generated based on Order #48',2,'2006-04-04 00:00:00',4),(109,2,4,'2006-03-24 00:00:00','2006-03-24 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,'Purchase generated based on Order #48',2,'2006-04-04 00:00:00',4),(110,1,3,'2006-03-24 00:00:00','2006-03-24 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,'Purchase generated based on Order #49',2,'2006-04-04 00:00:00',3),(111,1,2,'2006-03-31 00:00:00','2006-03-31 00:00:00',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,'Purchase generated based on Order #56',2,'2006-04-04 00:00:00',2),(140,6,NULL,'2006-04-25 00:00:00','2006-04-25 16:40:51',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,NULL,2,'2006-04-25 16:41:33',2),(141,8,NULL,'2006-04-25 00:00:00','2006-04-25 17:10:35',2,NULL,0.0000,0.0000,NULL,0.0000,NULL,NULL,2,'2006-04-25 17:10:55',2),(142,8,NULL,'2006-04-25 00:00:00','2006-04-25 17:18:29',2,NULL,0.0000,0.0000,NULL,0.0000,'Check',NULL,2,'2006-04-25 17:18:51',2),(146,2,2,'2006-04-26 18:26:37','2006-04-26 18:26:37',1,NULL,0.0000,0.0000,NULL,0.0000,NULL,NULL,NULL,NULL,2),(147,7,2,'2006-04-26 18:33:28','2006-04-26 18:33:28',1,NULL,0.0000,0.0000,NULL,0.0000,NULL,NULL,NULL,NULL,2),(148,5,2,'2006-04-26 18:33:52','2006-04-26 18:33:52',1,NULL,0.0000,0.0000,NULL,0.0000,NULL,NULL,NULL,NULL,2);
/*!40000 ALTER TABLE `purchaseOrder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchaseOrderDetail`
--

DROP TABLE IF EXISTS `purchaseOrderDetail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purchaseOrderDetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchaseOrder_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` decimal(18,4) NOT NULL,
  `unitCost` decimal(19,4) NOT NULL,
  `dateReceived` datetime DEFAULT NULL,
  `postedToInventory` tinyint(1) NOT NULL DEFAULT 0,
  `inventory_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `inventory_id` (`inventory_id`),
  KEY `purchaseOrder_id` (`purchaseOrder_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `fkPurchaseOrderDetailInventoryTransaction1` FOREIGN KEY (`inventory_id`) REFERENCES `inventoryTransaction` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkPurchaseOrderDetailProducts1` FOREIGN KEY (`product_id`) REFERENCES `northwind_model`.`product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkPurchaseOrderDetailPurchaseOrder1` FOREIGN KEY (`purchaseOrder_id`) REFERENCES `purchaseOrder` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=296 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchaseOrderDetail`
--

LOCK TABLES `purchaseOrderDetail` WRITE;
/*!40000 ALTER TABLE `purchaseOrderDetail` DISABLE KEYS */;
INSERT INTO `purchaseOrderDetail` VALUES (238,90,1,40.0000,14.0000,'2006-01-22 00:00:00',1,59),(239,91,3,100.0000,8.0000,'2006-01-22 00:00:00',1,54),(240,91,4,40.0000,16.0000,'2006-01-22 00:00:00',1,55),(241,91,5,40.0000,16.0000,'2006-01-22 00:00:00',1,56),(242,92,6,100.0000,19.0000,'2006-01-22 00:00:00',1,40),(243,92,7,40.0000,22.0000,'2006-01-22 00:00:00',1,41),(244,92,8,40.0000,30.0000,'2006-01-22 00:00:00',1,42),(245,92,14,40.0000,17.0000,'2006-01-22 00:00:00',1,43),(246,92,17,40.0000,29.0000,'2006-01-22 00:00:00',1,44),(247,92,19,20.0000,7.0000,'2006-01-22 00:00:00',1,45),(248,92,20,40.0000,61.0000,'2006-01-22 00:00:00',1,46),(249,92,21,20.0000,8.0000,'2006-01-22 00:00:00',1,47),(250,90,34,60.0000,10.0000,'2006-01-22 00:00:00',1,60),(251,92,40,120.0000,14.0000,'2006-01-22 00:00:00',1,48),(252,92,41,40.0000,7.0000,'2006-01-22 00:00:00',1,49),(253,90,43,100.0000,34.0000,'2006-01-22 00:00:00',1,61),(254,92,48,100.0000,10.0000,'2006-01-22 00:00:00',1,50),(255,92,51,40.0000,40.0000,'2006-01-22 00:00:00',1,51),(256,93,52,100.0000,5.0000,'2006-01-22 00:00:00',1,37),(257,93,56,120.0000,28.0000,'2006-01-22 00:00:00',1,38),(258,93,57,80.0000,15.0000,'2006-01-22 00:00:00',1,39),(259,91,65,40.0000,16.0000,'2006-01-22 00:00:00',1,57),(260,91,66,80.0000,13.0000,'2006-01-22 00:00:00',1,58),(261,94,72,40.0000,26.0000,'2006-01-22 00:00:00',1,36),(262,92,74,20.0000,8.0000,'2006-01-22 00:00:00',1,52),(263,92,77,60.0000,10.0000,'2006-01-22 00:00:00',1,53),(264,95,80,75.0000,3.0000,'2006-01-22 00:00:00',1,35),(265,90,81,125.0000,2.0000,'2006-01-22 00:00:00',1,62),(266,96,34,100.0000,10.0000,'2006-01-22 00:00:00',1,82),(267,97,19,30.0000,7.0000,'2006-01-22 00:00:00',1,80),(268,98,41,200.0000,7.0000,'2006-01-22 00:00:00',1,78),(269,99,43,300.0000,34.0000,'2006-01-22 00:00:00',1,76),(270,100,48,100.0000,10.0000,'2006-01-22 00:00:00',1,74),(271,101,81,200.0000,2.0000,'2006-01-22 00:00:00',1,72),(272,102,43,300.0000,34.0000,NULL,0,NULL),(273,103,19,10.0000,7.0000,'2006-04-17 00:00:00',1,111),(274,104,41,50.0000,7.0000,'2006-04-06 00:00:00',1,115),(275,105,57,100.0000,15.0000,'2006-04-05 00:00:00',1,100),(276,106,72,50.0000,26.0000,'2006-04-05 00:00:00',1,113),(277,107,34,300.0000,10.0000,'2006-04-05 00:00:00',1,107),(278,108,8,25.0000,30.0000,'2006-04-05 00:00:00',1,105),(279,109,19,25.0000,7.0000,'2006-04-05 00:00:00',1,109),(280,110,43,250.0000,34.0000,'2006-04-10 00:00:00',1,103),(281,90,1,40.0000,14.0000,NULL,0,NULL),(282,92,19,20.0000,7.0000,NULL,0,NULL),(283,111,34,50.0000,10.0000,'2006-04-04 00:00:00',1,102),(285,91,3,50.0000,8.0000,NULL,0,NULL),(286,91,4,40.0000,16.0000,NULL,0,NULL),(288,140,85,10.0000,9.0000,NULL,0,NULL),(289,141,6,10.0000,18.7500,NULL,0,NULL),(290,142,1,1.0000,13.5000,NULL,0,NULL),(292,146,20,40.0000,60.0000,NULL,0,NULL),(293,146,51,40.0000,39.0000,NULL,0,NULL),(294,147,40,120.0000,13.0000,NULL,0,NULL),(295,148,72,40.0000,26.0000,NULL,0,NULL);
/*!40000 ALTER TABLE `purchaseOrderDetail` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-27 13:37:29
