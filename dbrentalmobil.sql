-- MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: dbrentalmobil
-- ------------------------------------------------------
-- Server version	10.4.22-MariaDB

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
-- Table structure for table `jenis_perawatan`
--

DROP TABLE IF EXISTS `jenis_perawatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenis_perawatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis_perawatan`
--

LOCK TABLES `jenis_perawatan` WRITE;
/*!40000 ALTER TABLE `jenis_perawatan` DISABLE KEYS */;
INSERT INTO `jenis_perawatan` VALUES (1,'Ganti oli'),(2,'Service Rutin'),(3,'Turun Mesin'),(4,'Ganti Spartpart'),(5,'Coating');
/*!40000 ALTER TABLE `jenis_perawatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `merk`
--

DROP TABLE IF EXISTS `merk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `merk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `produk` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `merk`
--

LOCK TABLES `merk` WRITE;
/*!40000 ALTER TABLE `merk` DISABLE KEYS */;
INSERT INTO `merk` VALUES (1,'Toyota','Rush'),(2,'Mitsubishi','Xpander'),(3,'Suzuki','Ertiga'),(4,'Honda','Mobilio'),(6,'Nissan','Livina'),(8,'Toyota ','Avanza');
/*!40000 ALTER TABLE `merk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mobil`
--

DROP TABLE IF EXISTS `mobil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mobil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nopol` varchar(20) DEFAULT NULL,
  `warna` varchar(20) DEFAULT NULL,
  `biaya_sewa` double DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `cc` int(11) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `merk_id` int(11) NOT NULL,
  `foto` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nopol_UNIQUE` (`nopol`),
  KEY `fk_produk_jenis_produk_idx` (`merk_id`),
  CONSTRAINT `fk_produk_jenis_produk` FOREIGN KEY (`merk_id`) REFERENCES `merk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mobil`
--

LOCK TABLES `mobil` WRITE;
/*!40000 ALTER TABLE `mobil` DISABLE KEYS */;
INSERT INTO `mobil` VALUES (1,'B2050SJD','putih',350000,'Jumlah Pintu 5 · Kapasitas Tempat Duduk 7 · Kapasitas Tangki Bahan Bakar (liter) 45 L · Ground Clearance 200 mm · Tinggi 1695 mm',1500,2020,2,'B2050SJD.jpg'),(2,'B27822EYD','hitam',300000,'Jumlah Pintu 5 · Kapasitas Tempat Duduk 7 · Kapasitas Tangki Bahan Bakar (liter) 35 L · Ground Clearance 200 mm · Tinggi 1600 mm',1300,2021,1,'B27822EYD.jpg'),(3,'B3246336','Coklat',250000,'Jumlah Pintu 5,  Kapasitas Tempat Duduk 4, Kapasitas Tangki Bahan Bakar (liter) 30 L, Ground Cleanser 200m, Tinggi 1500mm',1250,2018,3,'B3246336.png'),(7,'B4544TTW','Putih',400000,'Jumlah Pintu 5,  Kapasitas Tempat Duduk 7, Dimensi: 4.386-4.398 mm P x 1.683 mm L x 1.603 mm T , Kapasitas Tangki Bahan Bakar (liter) 42 L, Ground Cleanser 200m, Tinggi 1500mm',1400,2020,4,'B4544TTW.jpg'),(8,'B03431ASQ',' Silver',350000,'Jumlah Pintu 5,  Kapasitas Tempat Duduk 7, Kapasitas Tangki Bahan Bakar (liter) 43 L, Dimensi: 4.395 mm P x 1.730 mm L x 1.665-1.700 mm T, Ground Cleanser 200m, Tinggi 1500mm',1300,2019,8,'B03431ASQ.jpg'),(9,'B03562ENY','Orange',350000,'Jumlah Pintu 5,  Kapasitas Tempat Duduk 7, Dimensi: 4.510 mm P x 1.750 mm L x 1.695-1.700 mm T, Kapasitas Tangki Bahan Bakar (liter) 52 L, Ground Cleanser 200m, Tinggi 1500mm',1400,2021,6,'B03562ENY.jpg');
/*!40000 ALTER TABLE `mobil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perawatan`
--

DROP TABLE IF EXISTS `perawatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perawatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `biaya` double DEFAULT NULL,
  `km_mobil` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `mobil_id` int(11) DEFAULT NULL,
  `jenis_perawatan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pembelian_produk1_idx` (`mobil_id`),
  KEY `fk_perawatan_jenis_perawatan1_idx` (`jenis_perawatan_id`),
  CONSTRAINT `fk_pembelian_produk1` FOREIGN KEY (`mobil_id`) REFERENCES `mobil` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_perawatan_jenis_perawatan1` FOREIGN KEY (`jenis_perawatan_id`) REFERENCES `jenis_perawatan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perawatan`
--

LOCK TABLES `perawatan` WRITE;
/*!40000 ALTER TABLE `perawatan` DISABLE KEYS */;
INSERT INTO `perawatan` VALUES (1,'2022-06-12',850000,20500,'service rutin aja',1,2),(3,'2022-06-12',210000,2500,'ganti lampu spion kanan',2,4),(5,'2022-07-12',500000,23000,'Cat Body Mobil',2,5);
/*!40000 ALTER TABLE `perawatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sewa`
--

DROP TABLE IF EXISTS `sewa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sewa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  `tujuan` varchar(100) DEFAULT NULL,
  `noktp` varchar(20) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `mobil_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pesanan_users1_idx` (`users_id`),
  KEY `fk_pesanan_produk1_idx` (`mobil_id`),
  CONSTRAINT `fk_pesanan_produk1` FOREIGN KEY (`mobil_id`) REFERENCES `mobil` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pesanan_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sewa`
--

LOCK TABLES `sewa` WRITE;
/*!40000 ALTER TABLE `sewa` DISABLE KEYS */;
INSERT INTO `sewa` VALUES (1,'2022-07-11','2022-07-15','Solo','4362563632153',3,1),(2,'2022-07-13','2022-07-18','Medan','13445474685',7,9),(3,'2022-07-19','2022-07-23','Lampung','32476237583',8,1);
/*!40000 ALTER TABLE `sewa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','827ccb0eea8a706c4c34a16891f84e7b','admin@gmail.com','2022-06-11 23:51:03','2022-06-11 23:51:03',1,'administrator'),(3,'hanats','827ccb0eea8a706c4c34a16891f84e7b','hana25@gmail.com','2022-07-08 03:41:22','2022-07-08 03:41:22',0,'public'),(4,'yasmin','827ccb0eea8a706c4c34a16891f84e7b','yasmin11@gmail.com','2022-07-08 05:34:45','2022-07-08 05:34:45',1,'public'),(5,'rehanah','827ccb0eea8a706c4c34a16891f84e7b','rehanah23@gmail.com','2022-07-08 05:41:23','2022-07-08 05:41:23',0,'public'),(7,'amdah','827ccb0eea8a706c4c34a16891f84e7b','amdah24@gmail.com','2022-07-08 05:58:19','2022-07-08 05:58:19',1,'public'),(8,'cika','1f32aa4c9a1d2ea010adcf2348166a04','cika67@gmail.com','2022-07-08 08:08:28','2022-07-08 08:08:28',0,'public');
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

-- Dump completed on 2022-07-08 16:02:56
