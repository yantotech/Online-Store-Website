-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: uaspemrogramanweba
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `normal_price` int(11) DEFAULT NULL,
  `discounted_price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Ban_Luar_Pirelli_Diablo_Rosso_Corsa_2_100_80_17.png','Ban Luar Pirelli',20,650000,520000,'Ban Luar Pirelli Diablo Rosso Corsa 2 100/80-17'),(2,'Van_Belt_Assy_Vario_125_eSP.png','Van Belt vario 125',NULL,NULL,175000,'Van Belt Assy Vario 125 eSP'),(3,'ECU_Vario_150_eSP_BRT_JUKEN_5_RACING_TURBO.png','ECU Vario 150',25,1250000,937500,'ECU Vario 150 eSP BRT Juken 5 Racing Turbo'),(4,'CDI_Supra_X_125_BRT_POWER_MAX_HYPER_BAND.png','CDI Supra X 125 BRT',NULL,NULL,350000,'CDI Supra X 125 BRT Power Max Hyper Band'),(5,'Spion_Nmax_Variasi.png','Spion Nmax',20,250000,200000,'Spion Yamaha Nmax Variasi'),(6,'Plat_Kopling_Yamaha_MX_King.png','Plat Kopling MxKing',NULL,NULL,180000,'Plat Kopling Yamaha MX New'),(7,'Plat_Kopling_Yamaha_MX_King.png','Plat Kopling MxKing',25,200000,150000,'Plat Kopling Yamaha MX King'),(8,'Disc_Brake_Vario_150_Front.png','Disc Brake Vario 150',35,800000,520000,'Disc Brake Vario 150 (Front)'),(9,'Disc_Brake_Vario_150_Front.png','Disc Brake Vario 150',NULL,NULL,675000,'Disc Brake Vario 125 (Front)'),(10,'ECU_Vario_150_eSP_BRT_JUKEN_5_RACING_TURBO.png','ECU Vario 150',NULL,NULL,1100000,'ECU Vario 125 eSP BRT Juken 5 Racing Turbo');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tabel_users`
--

DROP TABLE IF EXISTS `tabel_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabel_users` (
  `email` char(50) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `phonenumber` varchar(15) DEFAULT NULL,
  `address` varchar(70) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabel_users`
--

LOCK TABLES `tabel_users` WRITE;
/*!40000 ALTER TABLE `tabel_users` DISABLE KEYS */;
INSERT INTO `tabel_users` VALUES ('rinanda1@gmail.com','Rinanda','08123456789','Gg. Reformasi','rinan'),('tandyo1@gmail.com','tandyo1@gmail.com','08122323113','Gg. Reformasi','tandyo'),('yanti123@gmail.com','yanti','089243432223','Kota Baru','yanti'),('yanto@gmail.com','Yanto','081234567890','Sungai Jawi','Yanto');
/*!40000 ALTER TABLE `tabel_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-06 11:08:41
