-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: po_dewisri
-- ------------------------------------------------------
-- Server version	5.6.40

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
-- Table structure for table `bus`
--

DROP TABLE IF EXISTS `bus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bus` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `no_bus` char(30) DEFAULT NULL,
  `kapasitas` int(11) DEFAULT NULL,
  `fasilitas` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bus`
--

LOCK TABLES `bus` WRITE;
/*!40000 ALTER TABLE `bus` DISABLE KEYS */;
INSERT INTO `bus` VALUES (1,'324',124324,'sad','dsvd','2018-07-15 09:45:43','2018-07-15 09:45:43'),(2,'123',456,'dd','ff','2018-07-16 13:26:37','2018-07-16 13:26:37');
/*!40000 ALTER TABLE `bus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hak_akses`
--

DROP TABLE IF EXISTS `hak_akses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hak_akses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hak_akses`
--

LOCK TABLES `hak_akses` WRITE;
/*!40000 ALTER TABLE `hak_akses` DISABLE KEYS */;
INSERT INTO `hak_akses` VALUES (1,'admin','user,akses,siswa,alternatif,kriteria,crips,penilaian,laporan','admin full akses','2017-11-18 03:20:03','2017-12-03 05:56:12'),(2,'kesiswaan','penilaian','-','2017-12-03 04:45:45','2017-12-09 07:28:59'),(3,'walikelas','penilaian','-','2017-12-03 04:45:57','2017-12-03 05:14:28'),(11,'kepala_sekolah','laporan','-','2017-12-03 05:13:40','2017-12-03 05:13:40');
/*!40000 ALTER TABLE `hak_akses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `harga`
--

DROP TABLE IF EXISTS `harga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `harga` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nominal` float DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `harga_lama` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `harga`
--

LOCK TABLES `harga` WRITE;
/*!40000 ALTER TABLE `harga` DISABLE KEYS */;
INSERT INTO `harga` VALUES (1,9000,'lunas','2018-07-15 08:52:05','2018-07-15 08:52:05',8000),(2,3000,'belum','2018-07-16 13:34:35','2018-07-16 13:34:35',40000);
/*!40000 ALTER TABLE `harga` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jam`
--

DROP TABLE IF EXISTS `jam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jam` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `jam` varchar(30) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jam`
--

LOCK TABLES `jam` WRITE;
/*!40000 ALTER TABLE `jam` DISABLE KEYS */;
INSERT INTO `jam` VALUES (1,'00:00','dwd','2018-07-16 08:27:07','2018-07-16 08:27:56'),(2,'12:00','dfdfgf','2018-07-16 13:33:47','2018-07-16 13:33:47');
/*!40000 ALTER TABLE `jam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelas`
--

DROP TABLE IF EXISTS `kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` char(30) DEFAULT NULL,
  `kota_asal` int(11) DEFAULT NULL,
  `id_jam` int(11) DEFAULT NULL,
  `kota_tujuan` int(11) DEFAULT NULL,
  `id_harga` int(11) DEFAULT NULL,
  `id_bus` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelas`
--

LOCK TABLES `kelas` WRITE;
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
INSERT INTO `kelas` VALUES (1,'aku',2,2,1,1,1,'2018-07-15 14:27:06','2018-07-18 16:18:53'),(3,'budi',1,1,1,2,2,'2018-07-18 09:07:01','2018-07-18 09:18:48');
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kota`
--

DROP TABLE IF EXISTS `kota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kota` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` char(30) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kota`
--

LOCK TABLES `kota` WRITE;
/*!40000 ALTER TABLE `kota` DISABLE KEYS */;
INSERT INTO `kota` VALUES (1,'jakarta','sdfds','2018-07-16 13:34:47','2018-07-16 13:34:47'),(2,'bali','fgfh','2018-07-16 13:35:26','2018-07-16 13:35:26');
/*!40000 ALTER TABLE `kota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` char(30) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `no_ktp` varchar(16) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (6,'jaka','e10adc3949ba59abbe56e057f20f883e','123','2018-07-28','P','jakarta',NULL,NULL),(7,'agus','fdf169558242ee051cca1479770ebac3','0001','2018-07-07','P','Tangerang',NULL,NULL),(8,'hendra','e10adc3949ba59abbe56e057f20f883e','001','2018-07-14','P','tangerang',NULL,NULL);
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2017_08_19_102739_create_users_table',1),(9,'2017_11_18_091937_create_siswas_table',2),(11,'2017_11_18_100432_create_hak_akses_table',4),(12,'2017_12_01_132638_create_kriterias_table',5),(13,'2017_12_02_034250_create_kriterias_table',6),(14,'2017_12_02_034551_create_kriterias_table',7),(15,'2017_12_02_042254_create_crips_table',8),(16,'2017_12_02_070929_create_alternatifs_table',9),(17,'2017_12_02_075551_create_nilai_alternatifs_table',10);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rute`
--

DROP TABLE IF EXISTS `rute`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rute` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `rute` varchar(100) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rute`
--

LOCK TABLES `rute` WRITE;
/*!40000 ALTER TABLE `rute` DISABLE KEYS */;
INSERT INTO `rute` VALUES (1,'serang-tng','fdfd','2018-07-16 08:24:58','2018-07-16 08:28:56'),(2,'jakarta-sby','sampai','2018-07-16 08:26:42','2018-07-16 13:49:01');
/*!40000 ALTER TABLE `rute` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaksi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) DEFAULT NULL,
  `tgl_berangkat` datetime DEFAULT NULL,
  `id_member` int(11) DEFAULT NULL,
  `jml_penumpang` int(11) DEFAULT NULL,
  `total_harga` float DEFAULT NULL,
  `bukti_transfer` varchar(255) DEFAULT NULL,
  `status` char(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi`
--

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` VALUES (1,1,'2018-09-09 00:00:00',1,2,1000,'OK','y','2018-07-15 15:10:20','2018-07-15 15:10:20');
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nik` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_nik_unique` (`nik`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'10102','Administrator','admin','$2y$10$Gmkat619O8B3XqmkYUZ8he9N9fBCLq6jUczCHK/Pbppf04O2Vucbi','admin','2017-08-19 09:32:29','2017-08-19 09:32:29'),(5,'10103','Manager','manager','$2y$10$LOBnk4Ntt/aVZ6mTqWgQEOE3pSgKHqp9cEyI3i2W5zmg5vaGSY.Cy','manager','2018-07-15 00:15:57','2018-07-15 00:15:57');
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

-- Dump completed on 2018-07-28  9:21:09
