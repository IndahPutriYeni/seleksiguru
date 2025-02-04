-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: seleksi_guru
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `calon_guru`
--

DROP TABLE IF EXISTS `calon_guru`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calon_guru` (
  `id` bigint(20) unsigned NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/profile.png',
  KEY `calon_guru_id_foreign` (`id`),
  CONSTRAINT `calon_guru_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calon_guru`
--

LOCK TABLES `calon_guru` WRITE;
/*!40000 ALTER TABLE `calon_guru` DISABLE KEYS */;
INSERT INTO `calon_guru` VALUES (4,'1324240505950001','1324240505950032','Pasar Baru. Kec Pauh, Kota Padang, Sumatera Barat','Padang','1995-05-05','S1','PGSD UNP','081346558654','images/profile.png'),(5,'1324240505950001','1324240505950032','Pasar Baru. Kec Pauh, Kota Padang, Sumatera Barat','Padang','1995-05-05','SMA','SMAN 4 Padang','081346558654','images/profile.png'),(6,'1324240505950001','1324240505950032','Pasar Baru. Kec Pauh, Kota Padang, Sumatera Barat','Padang','1995-05-05','S1','PLB UNP','081346558654','images/profile.png'),(7,'1324240505950001','1324240505950032','Pasar Baru. Kec Pauh, Kota Padang, Sumatera Barat','Padang','1995-05-05','SMK','Seni Rupa SMKN 3 Padang','081346558654','images/profile.png'),(8,'1324240505950001','1324240505950032','Pasar Baru. Kec Pauh, Kota Padang, Sumatera Barat','Padang','1995-05-05','S1','PGSD UNP','081346558654','images/profile.png'),(9,'1324240505950001','1324240505950032','Pasar Baru. Kec Pauh, Kota Padang, Sumatera Barat','Padang','1995-05-05','S1','PGSD UNP','081346558654','images/profile.png'),(10,'1324240505950001','1324240505950032','Pasar Baru. Kec Pauh, Kota Padang, Sumatera Barat','Padang','1995-05-05','S1','Bahasa Inggris UNP','081346558654','images/profile.png'),(43,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'images/profile.png'),(44,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'images/profile.png');
/*!40000 ALTER TABLE `calon_guru` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `copeland`
--

DROP TABLE IF EXISTS `copeland`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `copeland` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` double NOT NULL,
  `ranking` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `copeland`
--

LOCK TABLES `copeland` WRITE;
/*!40000 ALTER TABLE `copeland` DISABLE KEYS */;
INSERT INTO `copeland` VALUES (17,'Inayah',1,11,'2022-11-20 21:01:24','2022-11-20 21:33:16'),(18,'wahyu',1.5,10,'2022-11-20 21:01:24','2022-11-20 21:33:16'),(19,'Sri Nova',1,6,'2022-11-20 21:01:24','2022-11-20 21:57:43'),(20,'lili',6,5,'2022-11-20 21:01:24','2022-11-20 21:33:17'),(21,'Febriani Putri',2.5,4,'2022-11-20 21:01:24','2022-11-20 21:57:43'),(22,'Kiko',3.5,8,'2022-11-20 21:01:24','2022-11-20 21:33:17'),(23,'Irsyadul Fitri',5,2,'2022-11-20 21:01:24','2022-11-20 21:57:43'),(24,'pipiw',4,7,'2022-11-20 21:01:25','2022-11-20 21:33:17'),(25,'Jamaludin Makhruf',8,1,'2022-11-20 21:01:25','2022-11-20 21:57:43'),(26,'lala',10,1,'2022-11-20 21:01:25','2022-11-20 21:33:18'),(27,'Tari',10,1,'2022-11-20 21:01:25','2022-11-20 21:33:18'),(28,'Rabiatul Wahyu',3,3,'2022-11-20 21:01:25','2022-11-20 21:57:43'),(29,'Restu Rahayu',5,2,'2022-11-20 21:01:25','2022-11-20 21:57:43'),(30,'Maulana Yahya',2,5,'2022-11-20 21:01:25','2022-11-20 21:57:43'),(31,'Aldi',11,2,'2022-11-20 21:07:54','2022-11-20 21:10:37'),(32,'zack',12,1,'2022-11-20 21:10:37','2022-11-20 21:10:37'),(33,'mutia',5,2,'2022-11-20 21:57:43','2022-11-20 21:57:43');
/*!40000 ALTER TABLE `copeland` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kriteria`
--

DROP TABLE IF EXISTS `kriteria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kriteria` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atribut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'benefit',
  `bobot` double NOT NULL DEFAULT 0,
  `tipe` enum('kepala_sekolah','kepala_yayasan') COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kriteria`
--

LOCK TABLES `kriteria` WRITE;
/*!40000 ALTER TABLE `kriteria` DISABLE KEYS */;
INSERT INTO `kriteria` VALUES (1,'Pengalaman','C4','benefit',0.09323738520786,'kepala_sekolah'),(2,'Tahfiz','C1','benefit',0.11888565221685,'kepala_sekolah'),(3,'Pendidikan','C3','benefit',0.18531080280438,'kepala_sekolah'),(4,'Kepribadian','C5','benefit',0.25356398736052,'kepala_sekolah'),(5,'Mengajar','C2','benefit',0.34900217241039,'kepala_sekolah'),(18,'Pengalaman','POP','cost',0.087695062075867,'kepala_yayasan'),(19,'Tahfiz','C6','benefit',0.3521804734653,'kepala_yayasan'),(20,'Pendidikan','C7','benefit',0.23100157926009,'kepala_yayasan'),(21,'Kepribadian','C8','benefit',0.11640319604716,'kepala_yayasan'),(22,'Mengajar','C9','benefit',0.21271968915158,'kepala_yayasan');
/*!40000 ALTER TABLE `kriteria` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (17,'2022_11_14_112240_dokumen_table',4),(18,'2022_11_14_112450_create_dokumen_table',5),(38,'2022_11_10_223222_create_penilaian_kriteria_table',6),(56,'2014_10_12_000000_create_users_table',7),(57,'2014_10_12_100000_create_password_resets_table',7),(58,'2019_08_19_000000_create_failed_jobs_table',7),(59,'2019_12_14_000001_create_personal_access_tokens_table',7),(60,'2022_11_10_103622_create_calon_guru_table',7),(61,'2022_11_10_135421_create_surat_menyurat_table',7),(62,'2022_11_10_223203_create_kriteria_table',7),(63,'2022_11_10_224425_create_nilai_alternatif_table',7),(64,'2022_11_13_091122_alter_surat_menyurat_table',7),(65,'2022_11_13_134711_create_nilai_kriteria_table',7),(66,'2022_11_13_144735_create_perbandingan_kriteria_table',7),(67,'2022_11_14_172008_create_nilai_perbandingan_table',7),(74,'2022_11_15_151539_create_topsis_table',8),(75,'2022_11_16_030859_alter_topsis_table',9),(76,'2022_11_18_022518_create_copeland_table',10),(78,'2022_11_18_131818_alter_kriteria_tale',11),(81,'2022_12_14_133745_create_seleksi_guru_table',12);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nilai_alternatif`
--

DROP TABLE IF EXISTS `nilai_alternatif`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nilai_alternatif` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `calon_guru_id` bigint(20) unsigned NOT NULL,
  `penilai_id` bigint(20) unsigned NOT NULL,
  `kriteria_id` bigint(20) unsigned NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nilai_alternatif_kriteria_id_foreign` (`kriteria_id`),
  KEY `nilai_alternatif_calon_guru_id_foreign` (`calon_guru_id`),
  KEY `nilai_alternatif_penilai_id_foreign` (`penilai_id`),
  CONSTRAINT `nilai_alternatif_calon_guru_id_foreign` FOREIGN KEY (`calon_guru_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `nilai_alternatif_kriteria_id_foreign` FOREIGN KEY (`kriteria_id`) REFERENCES `kriteria` (`id`),
  CONSTRAINT `nilai_alternatif_penilai_id_foreign` FOREIGN KEY (`penilai_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=361 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nilai_alternatif`
--

LOCK TABLES `nilai_alternatif` WRITE;
/*!40000 ALTER TABLE `nilai_alternatif` DISABLE KEYS */;
INSERT INTO `nilai_alternatif` VALUES (281,4,41,1,'kepala_sekolah',56),(282,4,41,2,'kepala_sekolah',78),(283,4,41,3,'kepala_sekolah',67),(284,4,41,4,'kepala_sekolah',67),(285,4,41,5,'kepala_sekolah',67),(286,5,41,1,'kepala_sekolah',95),(287,5,41,2,'kepala_sekolah',95),(288,5,41,3,'kepala_sekolah',95),(289,5,41,4,'kepala_sekolah',95),(290,5,41,5,'kepala_sekolah',95),(291,6,41,1,'kepala_sekolah',78),(292,6,41,2,'kepala_sekolah',78),(293,6,41,3,'kepala_sekolah',67),(294,6,41,4,'kepala_sekolah',78),(295,6,41,5,'kepala_sekolah',90),(296,7,41,1,'kepala_sekolah',56),(297,7,41,2,'kepala_sekolah',78),(298,7,41,3,'kepala_sekolah',78),(299,7,41,4,'kepala_sekolah',78),(300,7,41,5,'kepala_sekolah',90),(301,8,41,1,'kepala_sekolah',78),(302,8,41,2,'kepala_sekolah',89),(303,8,41,3,'kepala_sekolah',78),(304,8,41,4,'kepala_sekolah',90),(305,8,41,5,'kepala_sekolah',98),(306,9,41,1,'kepala_sekolah',67),(307,9,41,2,'kepala_sekolah',89),(308,9,41,3,'kepala_sekolah',67),(309,9,41,4,'kepala_sekolah',45),(310,9,41,5,'kepala_sekolah',89),(311,10,41,1,'kepala_sekolah',77),(312,10,41,2,'kepala_sekolah',89),(313,10,41,3,'kepala_sekolah',67),(314,10,41,4,'kepala_sekolah',56),(315,10,41,5,'kepala_sekolah',77),(316,43,41,1,'kepala_sekolah',78),(317,43,41,2,'kepala_sekolah',67),(318,43,41,3,'kepala_sekolah',98),(319,43,41,4,'kepala_sekolah',78),(320,43,41,5,'kepala_sekolah',87),(321,4,42,18,'kepala_yayasan',78),(322,4,42,19,'kepala_yayasan',78),(323,4,42,20,'kepala_yayasan',67),(324,4,42,21,'kepala_yayasan',67),(325,4,42,22,'kepala_yayasan',90),(326,5,42,18,'kepala_yayasan',98),(327,5,42,19,'kepala_yayasan',95),(328,5,42,20,'kepala_yayasan',95),(329,5,42,21,'kepala_yayasan',95),(330,5,42,22,'kepala_yayasan',95),(331,6,42,18,'kepala_yayasan',89),(332,6,42,19,'kepala_yayasan',78),(333,6,42,20,'kepala_yayasan',67),(334,6,42,21,'kepala_yayasan',98),(335,6,42,22,'kepala_yayasan',90),(336,7,42,18,'kepala_yayasan',78),(337,7,42,19,'kepala_yayasan',98),(338,7,42,20,'kepala_yayasan',78),(339,7,42,21,'kepala_yayasan',67),(340,7,42,22,'kepala_yayasan',67),(341,8,42,18,'kepala_yayasan',78),(342,8,42,19,'kepala_yayasan',67),(343,8,42,20,'kepala_yayasan',89),(344,8,42,21,'kepala_yayasan',89),(345,8,42,22,'kepala_yayasan',76),(346,9,42,18,'kepala_yayasan',78),(347,9,42,19,'kepala_yayasan',90),(348,9,42,20,'kepala_yayasan',78),(349,9,42,21,'kepala_yayasan',67),(350,9,42,22,'kepala_yayasan',89),(351,10,42,18,'kepala_yayasan',78),(352,10,42,19,'kepala_yayasan',76),(353,10,42,20,'kepala_yayasan',89),(354,10,42,21,'kepala_yayasan',78),(355,10,42,22,'kepala_yayasan',78),(356,43,42,18,'kepala_yayasan',89),(357,43,42,19,'kepala_yayasan',67),(358,43,42,20,'kepala_yayasan',89),(359,43,42,21,'kepala_yayasan',89),(360,43,42,22,'kepala_yayasan',89);
/*!40000 ALTER TABLE `nilai_alternatif` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nilai_kriteria`
--

DROP TABLE IF EXISTS `nilai_kriteria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nilai_kriteria` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` enum('kepala_sekolah','kepala_yayasan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nilai_kriteria`
--

LOCK TABLES `nilai_kriteria` WRITE;
/*!40000 ALTER TABLE `nilai_kriteria` DISABLE KEYS */;
INSERT INTO `nilai_kriteria` VALUES (1,'pengalaman_pengalaman','kepala_sekolah',1,'2022-11-15 05:47:22','2022-11-15 05:47:22'),(2,'pengalaman_tahfiz','kepala_sekolah',0.5,'2022-11-15 05:47:22','2022-11-20 21:06:07'),(3,'pengalaman_pendidikan','kepala_sekolah',0.5,'2022-11-15 05:47:22','2022-11-20 21:06:07'),(4,'pengalaman_kepribadian','kepala_sekolah',0.5,'2022-11-15 05:47:22','2022-11-20 21:06:07'),(5,'pengalaman_mengajar','kepala_sekolah',0.33333333333333,'2022-11-15 05:47:22','2022-11-20 21:06:07'),(6,'tahfiz_pengalaman','kepala_sekolah',2,'2022-11-15 05:47:23','2022-11-20 21:06:07'),(7,'tahfiz_tahfiz','kepala_sekolah',1,'2022-11-15 05:47:23','2022-11-15 05:47:23'),(8,'tahfiz_pendidikan','kepala_sekolah',0.33333333333333,'2022-11-15 05:47:23','2022-11-20 21:06:07'),(9,'tahfiz_kepribadian','kepala_sekolah',0.5,'2022-11-15 05:47:23','2022-11-20 21:06:07'),(10,'tahfiz_mengajar','kepala_sekolah',0.33333333333333,'2022-11-15 05:47:23','2022-11-20 21:06:07'),(11,'pendidikan_pengalaman','kepala_sekolah',2,'2022-11-15 05:47:23','2022-11-20 21:06:07'),(12,'pendidikan_tahfiz','kepala_sekolah',3,'2022-11-15 05:47:23','2022-11-20 21:06:08'),(13,'pendidikan_pendidikan','kepala_sekolah',1,'2022-11-15 05:47:23','2022-11-15 05:47:23'),(14,'pendidikan_kepribadian','kepala_sekolah',0.33333333333333,'2022-11-15 05:47:23','2022-11-20 21:06:08'),(15,'pendidikan_mengajar','kepala_sekolah',0.5,'2022-11-15 05:47:23','2022-11-20 21:06:08'),(16,'kepribadian_pengalaman','kepala_sekolah',2,'2022-11-15 05:47:24','2022-11-20 21:06:08'),(17,'kepribadian_tahfiz','kepala_sekolah',2,'2022-11-15 05:47:24','2022-11-20 21:06:08'),(18,'kepribadian_pendidikan','kepala_sekolah',3,'2022-11-15 05:47:24','2022-11-20 21:06:08'),(19,'kepribadian_kepribadian','kepala_sekolah',1,'2022-11-15 05:47:24','2022-11-15 05:47:24'),(20,'kepribadian_mengajar','kepala_sekolah',0.5,'2022-11-15 05:47:24','2022-11-20 21:06:08'),(21,'mengajar_pengalaman','kepala_sekolah',3,'2022-11-15 05:47:24','2022-11-20 21:06:08'),(22,'mengajar_tahfiz','kepala_sekolah',3,'2022-11-15 05:47:24','2022-11-20 21:06:08'),(23,'mengajar_pendidikan','kepala_sekolah',2,'2022-11-15 05:47:24','2022-11-20 21:06:08'),(24,'mengajar_kepribadian','kepala_sekolah',2,'2022-11-15 05:47:24','2022-11-20 21:06:08'),(25,'mengajar_mengajar','kepala_sekolah',1,'2022-11-15 05:47:25','2022-11-15 05:47:25'),(26,'pengalaman_pengalaman','kepala_yayasan',1,'2022-11-17 00:20:28','2022-11-17 00:20:28'),(27,'pengalaman_tahfiz','kepala_yayasan',0.33333333333333,'2022-11-17 00:20:29','2022-11-18 10:18:41'),(28,'pengalaman_pendidikan','kepala_yayasan',0.5,'2022-11-17 00:20:29','2022-11-18 10:18:41'),(29,'pengalaman_kepribadian','kepala_yayasan',0.5,'2022-11-17 00:20:29','2022-11-18 10:18:41'),(30,'pengalaman_mengajar','kepala_yayasan',0.33333333333333,'2022-11-17 00:20:29','2022-11-18 07:49:56'),(31,'tahfiz_pengalaman','kepala_yayasan',3,'2022-11-17 00:20:29','2022-11-18 10:18:41'),(32,'tahfiz_tahfiz','kepala_yayasan',1,'2022-11-17 00:20:29','2022-11-17 00:20:29'),(33,'tahfiz_pendidikan','kepala_yayasan',2,'2022-11-17 00:20:29','2022-11-18 08:26:04'),(34,'tahfiz_kepribadian','kepala_yayasan',3,'2022-11-17 00:20:29','2022-11-18 10:18:41'),(35,'tahfiz_mengajar','kepala_yayasan',2,'2022-11-17 00:20:29','2022-11-18 10:18:42'),(36,'pendidikan_pengalaman','kepala_yayasan',2,'2022-11-17 00:20:29','2022-11-18 10:18:42'),(37,'pendidikan_tahfiz','kepala_yayasan',0.5,'2022-11-17 00:20:30','2022-11-18 08:26:04'),(38,'pendidikan_pendidikan','kepala_yayasan',1,'2022-11-17 00:20:30','2022-11-17 00:20:30'),(39,'pendidikan_kepribadian','kepala_yayasan',2,'2022-11-17 00:20:30','2022-11-18 15:31:24'),(40,'pendidikan_mengajar','kepala_yayasan',2,'2022-11-17 00:20:30','2022-11-18 08:26:04'),(41,'kepribadian_pengalaman','kepala_yayasan',2,'2022-11-17 00:20:30','2022-11-18 10:18:42'),(42,'kepribadian_tahfiz','kepala_yayasan',0.33333333333333,'2022-11-17 00:20:30','2022-11-18 10:18:42'),(43,'kepribadian_pendidikan','kepala_yayasan',0.5,'2022-11-17 00:20:30','2022-11-18 15:31:24'),(44,'kepribadian_kepribadian','kepala_yayasan',1,'2022-11-17 00:20:30','2022-11-17 00:20:30'),(45,'kepribadian_mengajar','kepala_yayasan',0.33333333333333,'2022-11-17 00:20:30','2022-11-18 15:31:25'),(46,'mengajar_pengalaman','kepala_yayasan',3,'2022-11-17 00:20:30','2022-11-18 07:49:57'),(47,'mengajar_tahfiz','kepala_yayasan',0.5,'2022-11-17 00:20:30','2022-11-18 10:18:42'),(48,'mengajar_pendidikan','kepala_yayasan',0.5,'2022-11-17 00:20:30','2022-11-18 08:26:05'),(49,'mengajar_kepribadian','kepala_yayasan',3,'2022-11-17 00:20:30','2022-11-18 15:31:25'),(50,'mengajar_mengajar','kepala_yayasan',1,'2022-11-17 00:20:30','2022-11-17 00:20:30');
/*!40000 ALTER TABLE `nilai_kriteria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nilai_perbandingan`
--

DROP TABLE IF EXISTS `nilai_perbandingan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nilai_perbandingan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `jumlah_kriteria` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`jumlah_kriteria`)),
  `jumlah_eigen` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`jumlah_eigen`)),
  `rata_eigen` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`rata_eigen`)),
  `tipe` enum('kepala_sekolah','kepala_yayasan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `lambda_max` double NOT NULL,
  `ci` double NOT NULL,
  `cr` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nilai_perbandingan`
--

LOCK TABLES `nilai_perbandingan` WRITE;
/*!40000 ALTER TABLE `nilai_perbandingan` DISABLE KEYS */;
INSERT INTO `nilai_perbandingan` VALUES (3,'{\"pengalaman\":10,\"tahfiz\":9.5,\"pendidikan\":6.83333333333333,\"kepribadian\":4.33333333333333,\"mengajar\":2.66666666666666}','{\"pengalaman\":0.46618692603930006,\"tahfiz\":0.594428261084229,\"pendidikan\":0.9265540140219215,\"kepribadian\":1.2678199368026075,\"mengajar\":1.7450108620519416}','{\"pengalaman\":0.09323738520786001,\"tahfiz\":0.1188856522168458,\"pendidikan\":0.1853108028043843,\"kepribadian\":0.2535639873605215,\"mengajar\":0.34900217241038833}','kepala_sekolah',5.3575277722919,0.089381943072971,0.079805306315153,'2022-11-18 08:05:40','2022-11-20 21:06:08'),(4,'{\"pengalaman\":11,\"tahfiz\":2.66666666666666,\"pendidikan\":4.5,\"kepribadian\":9.5,\"mengajar\":5.666666666666661}','{\"pengalaman\":0.4384753103793337,\"tahfiz\":1.7609023673265172,\"pendidikan\":1.1550078963004669,\"kepribadian\":0.582015980235793,\"mengajar\":1.063598445757889}','{\"pengalaman\":0.08769506207586673,\"tahfiz\":0.35218047346530346,\"pendidikan\":0.23100157926009338,\"kepribadian\":0.11640319604715861,\"mengajar\":0.21271968915157782}','kepala_yayasan',5.2545426530527,0.063635663263177,0.056817556484979,'2022-11-18 08:08:55','2022-11-18 15:31:25');
/*!40000 ALTER TABLE `nilai_perbandingan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seleksi_guru`
--

DROP TABLE IF EXISTS `seleksi_guru`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seleksi_guru` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/profile.png',
  `tahun_diterima` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Diterima','Ditolak') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seleksi_guru`
--

LOCK TABLES `seleksi_guru` WRITE;
/*!40000 ALTER TABLE `seleksi_guru` DISABLE KEYS */;
INSERT INTO `seleksi_guru` VALUES (2,'Hasibuan','123456','123456','Jalan','Medan','2022-11-30','D4','Unand','123456','images/userID-1-1671025491.jpg','2016','Diterima','2022-12-14 06:44:51','2022-12-14 06:44:51'),(3,'Julian','123456','123456','Serai','Pontianak','2022-12-06','SMA','SMAN','123456','images/userID-1-1671025623.jpg','2016','Diterima','2022-12-14 06:47:03','2022-12-14 06:47:03');
/*!40000 ALTER TABLE `seleksi_guru` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_menyurat`
--

DROP TABLE IF EXISTS `surat_menyurat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_menyurat` (
  `user_id` bigint(20) unsigned NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `surat_menyurat_user_id_foreign` (`user_id`),
  CONSTRAINT `surat_menyurat_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_menyurat`
--

LOCK TABLES `surat_menyurat` WRITE;
/*!40000 ALTER TABLE `surat_menyurat` DISABLE KEYS */;
/*!40000 ALTER TABLE `surat_menyurat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topsis`
--

DROP TABLE IF EXISTS `topsis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topsis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ternomalisasi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`ternomalisasi`)),
  `ternomalisasi_bobot` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`ternomalisasi_bobot`)),
  `min` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`min`)),
  `max` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`max`)),
  `solusi_ideal_plus` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`solusi_ideal_plus`)),
  `solusi_ideal_min` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`solusi_ideal_min`)),
  `preferensi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`preferensi`)),
  `ranking` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`ranking`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipe` enum('kepala_sekolah','kepala_yayasan') COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topsis`
--

LOCK TABLES `topsis` WRITE;
/*!40000 ALTER TABLE `topsis` DISABLE KEYS */;
INSERT INTO `topsis` VALUES (34,'{\"Sri Nova\":{\"Pengalaman\":0.2670696949097401,\"Tahfiz\":0.3310050932685265,\"Pendidikan\":0.3034409086510448,\"Kepribadian\":0.31574631923854307,\"Mengajar\":0.27186176633429365},\"Jamaludin Makhruf\":{\"Pengalaman\":0.45306466100759485,\"Tahfiz\":0.40314722898089767,\"Pendidikan\":0.4302520346544665,\"Kepribadian\":0.4477000048904715,\"Mengajar\":0.3854756388322074},\"Rabiatul Wahyu\":{\"Pengalaman\":0.3719899321957094,\"Tahfiz\":0.3310050932685265,\"Pendidikan\":0.3034409086510448,\"Kepribadian\":0.36758526717322926,\"Mengajar\":0.3651874473147228},\"Irsyadul Fitri\":{\"Pengalaman\":0.2670696949097401,\"Tahfiz\":0.3310050932685265,\"Pendidikan\":0.35325956529524616,\"Kepribadian\":0.36758526717322926,\"Mengajar\":0.3651874473147228},\"Febriani Putri\":{\"Pengalaman\":0.3719899321957094,\"Tahfiz\":0.37768529872947254,\"Pendidikan\":0.35325956529524616,\"Kepribadian\":0.42413684673834146,\"Mengajar\":0.3976485537426982},\"Restu Rahayu\":{\"Pengalaman\":0.31952981355272475,\"Tahfiz\":0.37768529872947254,\"Pendidikan\":0.3034409086510448,\"Kepribadian\":0.21206842336917073,\"Mengajar\":0.36112980901122593},\"Maulana Yahya\":{\"Pengalaman\":0.36722083050089266,\"Tahfiz\":0.37768529872947254,\"Pendidikan\":0.3034409086510448,\"Kepribadian\":0.2639073713038569,\"Mengajar\":0.31243814936926284},\"mutia\":{\"Pengalaman\":0.3719899321957094,\"Tahfiz\":0.2843248878075804,\"Pendidikan\":0.44383894101197596,\"Kepribadian\":0.36758526717322926,\"Mengajar\":0.3530145324042321}}','{\"Sri Nova\":{\"Pengalaman\":0.024900880021645085,\"Tahfiz\":0.03935175640032665,\"Pendidikan\":0.05623087838581695,\"Kepribadian\":0.08006189570053313,\"Mengajar\":0.09488034704599387},\"Jamaludin Makhruf\":{\"Pengalaman\":0.04224256432243363,\"Tahfiz\":0.047928421256808094,\"Pendidikan\":0.07973034995003896,\"Kepribadian\":0.11352059838135294,\"Mengajar\":0.13453183536372265},\"Rabiatul Wahyu\":{\"Pengalaman\":0.034683368601577086,\"Tahfiz\":0.03935175640032665,\"Pendidikan\":0.05623087838581695,\"Kepribadian\":0.09320638603942662,\"Mengajar\":0.1274512124498425},\"Irsyadul Fitri\":{\"Pengalaman\":0.024900880021645085,\"Tahfiz\":0.03935175640032665,\"Pendidikan\":0.06546281364318988,\"Kepribadian\":0.09320638603942662,\"Mengajar\":0.1274512124498425},\"Febriani Putri\":{\"Pengalaman\":0.034683368601577086,\"Tahfiz\":0.044901363072167584,\"Pendidikan\":0.06546281364318988,\"Kepribadian\":0.10754583004549226,\"Mengajar\":0.13878020911205072},\"Restu Rahayu\":{\"Pengalaman\":0.029792124311611087,\"Tahfiz\":0.044901363072167584,\"Pendidikan\":0.05623087838581695,\"Kepribadian\":0.05377291502274613,\"Mengajar\":0.1260350878670665},\"Maulana Yahya\":{\"Pengalaman\":0.034238710029762,\"Tahfiz\":0.044901363072167584,\"Pendidikan\":0.05623087838581695,\"Kepribadian\":0.06691740536163962,\"Mengajar\":0.10904159287375413},\"mutia\":{\"Pengalaman\":0.034683368601577086,\"Tahfiz\":0.033802149728485706,\"Pendidikan\":0.08224815047477703,\"Kepribadian\":0.09320638603942662,\"Mengajar\":0.12320283870151442}}','{\"pengalaman\":0.024900880021645085,\"mengajar\":0.09488034704599387,\"pendidikan\":0.05623087838581695,\"tahfiz\":0.033802149728485706,\"kepribadian\":0.05377291502274613}','{\"pengalaman\":0.04224256432243363,\"mengajar\":0.13878020911205072,\"pendidikan\":0.08224815047477703,\"tahfiz\":0.047928421256808094,\"kepribadian\":0.11352059838135294}','{\"Sri Nova\":0.0640146414182093,\"Jamaludin Makhruf\":0.004938420697738739,\"Rabiatul Wahyu\":0.03672345919712353,\"Irsyadul Fitri\":0.03459846984251835,\"Febriani Putri\":0.019589535737644586,\"Restu Rahayu\":0.06762616924635728,\"Maulana Yahya\":0.06169575436886911,\"mutia\":0.03019958077884577}','{\"Sri Nova\":0.026868357584511927,\"Jamaludin Makhruf\":0.07870538048957713,\"Rabiatul Wahyu\":0.05236750067176822,\"Irsyadul Fitri\":0.05226745328010034,\"Febriani Putri\":0.07157403529020621,\"Restu Rahayu\":0.03343253928706134,\"Maulana Yahya\":0.024160010674098977,\"mutia\":0.05594423741340919}','{\"Sri Nova\":0.29563678442991775,\"Jamaludin Makhruf\":0.940958915931147,\"Rabiatul Wahyu\":0.5877981419083754,\"Irsyadul Fitri\":0.6017026171047575,\"Febriani Putri\":0.7851166258980803,\"Restu Rahayu\":0.3308229421515484,\"Maulana Yahya\":0.2814023107476552,\"mutia\":0.6494283465419813}','{\"Jamaludin Makhruf\":0.940958915931147,\"Febriani Putri\":0.7851166258980803,\"mutia\":0.6494283465419813,\"Irsyadul Fitri\":0.6017026171047575,\"Rabiatul Wahyu\":0.5877981419083754,\"Restu Rahayu\":0.3308229421515484,\"Sri Nova\":0.29563678442991775,\"Maulana Yahya\":0.2814023107476552}','2022-11-18 08:06:21','2022-11-20 21:54:20','kepala_sekolah'),(35,'{\"Sri Nova\":{\"Pengalaman\":0.33000522349680084,\"Tahfiz\":0.3367485172169751,\"Pendidikan\":0.2884984520643907,\"Kepribadian\":0.28826337921256395,\"Mengajar\":0.37560039716841664},\"Jamaludin Makhruf\":{\"Pengalaman\":0.4146219474703395,\"Tahfiz\":0.4101424248155465,\"Pendidikan\":0.40906496934503156,\"Kepribadian\":0.4087316570924414,\"Mengajar\":0.39646708589999535},\"Rabiatul Wahyu\":{\"Pengalaman\":0.3765444216822471,\"Tahfiz\":0.3367485172169751,\"Pendidikan\":0.2884984520643907,\"Kepribadian\":0.42163897257957117,\"Mengajar\":0.37560039716841664},\"Irsyadul Fitri\":{\"Pengalaman\":0.33000522349680084,\"Tahfiz\":0.4230942908623533,\"Pendidikan\":0.3358638695674996,\"Kepribadian\":0.28826337921256395,\"Mengajar\":0.2796136290031546},\"Febriani Putri\":{\"Pengalaman\":0.33000522349680084,\"Tahfiz\":0.28925834171201703,\"Pendidikan\":0.3832292870706085,\"Kepribadian\":0.38291702611818196,\"Mengajar\":0.31717366871999625},\"Restu Rahayu\":{\"Pengalaman\":0.33000522349680084,\"Tahfiz\":0.388555981404202,\"Pendidikan\":0.3358638695674996,\"Kepribadian\":0.28826337921256395,\"Mengajar\":0.37142705942210086},\"Maulana Yahya\":{\"Pengalaman\":0.33000522349680084,\"Tahfiz\":0.32811393985243725,\"Pendidikan\":0.3832292870706085,\"Kepribadian\":0.335590202665373,\"Mengajar\":0.32552034421262777},\"mutia\":{\"Pengalaman\":0.3765444216822471,\"Tahfiz\":0.28925834171201703,\"Pendidikan\":0.3832292870706085,\"Kepribadian\":0.38291702611818196,\"Mengajar\":0.37142705942210086}}','{\"Sri Nova\":{\"Pengalaman\":0.028939828559912225,\"Tahfiz\":0.11859625223221318,\"Pendidikan\":0.06664359804096659,\"Kepribadian\":0.033554778643696506,\"Mengajar\":0.07989759973087476},\"Jamaludin Makhruf\":{\"Pengalaman\":0.03636029742142818,\"Tahfiz\":0.1444441533597468,\"Pendidikan\":0.09449465393868398,\"Kepribadian\":0.04757767121121147,\"Mengajar\":0.08433635527147891},\"Rabiatul Wahyu\":{\"Pengalaman\":0.033021086433746,\"Tahfiz\":0.11859625223221318,\"Pendidikan\":0.06664359804096659,\"Kepribadian\":0.049080123986302356,\"Mengajar\":0.07989759973087476},\"Irsyadul Fitri\":{\"Pengalaman\":0.028939828559912225,\"Tahfiz\":0.1490055476763704,\"Pendidikan\":0.07758508428649842,\"Kepribadian\":0.033554778643696506,\"Mengajar\":0.059479324244095653},\"Febriani Putri\":{\"Pengalaman\":0.028939828559912225,\"Tahfiz\":0.10187113973792669,\"Pendidikan\":0.08852657053203025,\"Kepribadian\":0.04457276566102969,\"Mengajar\":0.06746908421718313},\"Restu Rahayu\":{\"Pengalaman\":0.028939828559912225,\"Tahfiz\":0.13684182949870752,\"Pendidikan\":0.07758508428649842,\"Kepribadian\":0.033554778643696506,\"Mengajar\":0.07900984862275393},\"Maulana Yahya\":{\"Pengalaman\":0.028939828559912225,\"Tahfiz\":0.11555532268779745,\"Pendidikan\":0.08852657053203025,\"Kepribadian\":0.039063772152363105,\"Mengajar\":0.06924458643342479},\"mutia\":{\"Pengalaman\":0.033021086433746,\"Tahfiz\":0.10187113973792669,\"Pendidikan\":0.08852657053203025,\"Kepribadian\":0.04457276566102969,\"Mengajar\":0.07900984862275393}}','{\"pengalaman\":0.028939828559912225,\"mengajar\":0.059479324244095653,\"pendidikan\":0.06664359804096659,\"tahfiz\":0.10187113973792669,\"kepribadian\":0.033554778643696506}','{\"pengalaman\":0.03636029742142818,\"mengajar\":0.08433635527147891,\"pendidikan\":0.09449465393868398,\"tahfiz\":0.1490055476763704,\"kepribadian\":0.049080123986302356}','{\"Sri Nova\":0.044902213986717454,\"Jamaludin Makhruf\":0.004802466288596334,\"Rabiatul Wahyu\":0.041608405939152736,\"Irsyadul Fitri\":0.03463964843139014,\"Febriani Putri\":0.051158136217737814,\"Restu Rahayu\":0.027538354434107595,\"Maulana Yahya\":0.0392133615006693,\"mutia\":0.04813635542319312}','{\"Sri Nova\":0.026393850833111538,\"Jamaludin Makhruf\":0.058802378090027516,\"Rabiatul Wahyu\":0.03089220574255658,\"Irsyadul Fitri\":0.048387689890805774,\"Febriani Putri\":0.025770075424536933,\"Restu Rahayu\":0.04152236320479975,\"Maulana Yahya\":0.028139486547466615,\"mutia\":0.03159681267623155}','{\"Sri Nova\":0.3702006681548409,\"Jamaludin Makhruf\":0.9244952749194945,\"Rabiatul Wahyu\":0.4260957945869326,\"Irsyadul Fitri\":0.5827922569676085,\"Febriani Putri\":0.33498861957653225,\"Restu Rahayu\":0.6012443053648046,\"Maulana Yahya\":0.41779208100236254,\"mutia\":0.39628191666523715}','{\"Jamaludin Makhruf\":0.9244952749194945,\"Restu Rahayu\":0.6012443053648046,\"Irsyadul Fitri\":0.5827922569676085,\"Rabiatul Wahyu\":0.4260957945869326,\"Maulana Yahya\":0.41779208100236254,\"mutia\":0.39628191666523715,\"Sri Nova\":0.3702006681548409,\"Febriani Putri\":0.33498861957653225}','2022-11-18 08:09:00','2022-11-20 21:57:24','kepala_yayasan');
/*!40000 ALTER TABLE `topsis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'calon_guru',
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@admin.com',NULL,'$2y$10$F43AyYtRpIk6d5HJWsQXv.4Tb81Av1l4sDr/LXIU0Vjwv4x9sI5nu','admin',1,NULL,NULL,NULL),(4,'Sri Nova','srinova@gmail.com',NULL,'$2y$10$sEDGBGukyK5VoBDRwW9EaOoSciR/oXaKg56JR4e/I3xPehO1Sm5.G','calon_guru',0,NULL,NULL,NULL),(5,'Jamaludin Makhruf','Jamaludin@gmail.com',NULL,'$2y$10$tkd0qt0N.MZBrEJRAdEMyu7w07rz.3kUbb2LD27LDcAdrRZLS0kRq','calon_guru',0,NULL,NULL,NULL),(6,'Rabiatul Wahyu','Rabiatul@gmail.com',NULL,'$2y$10$bX97XHD4YHG/om0dpdIvW.k35K.IClpsrpHw9MoE0UbxWaHtS.Fye','calon_guru',0,NULL,NULL,NULL),(7,'Irsyadul Fitri','Irsyadul@gmail.com',NULL,'$2y$10$ZjjXQ1nvc7uLOakWWle8xOHK6v/92N0MjX5HeCxSXRgZ246HLFp9.','calon_guru',0,NULL,NULL,NULL),(8,'Febriani Putri','Febriani@gmail.com',NULL,'$2y$10$N7NrE.GhEbOc68q1.nyP2.3OVVbug5v8MLJ6Alc0mlzoBtYh73dka','calon_guru',0,NULL,NULL,NULL),(9,'Restu Rahayu','Restu@gmail.com',NULL,'$2y$10$gRniUHwrYZJSJ8BuPosr7O5Hy1mt.bRrLRzZoDmymbIhHjC4o/VmS','calon_guru',0,NULL,NULL,NULL),(10,'Maulana Yahya','Maulana@gmail.com',NULL,'$2y$10$AHJv4J.1c8KCF1UOtRElo..t3spCUw4izbigFEw8e4MQwvaRbCl22','calon_guru',0,NULL,NULL,NULL),(41,'Kepsek','kepsek@admin.com',NULL,'$2y$10$HVEojwsa7Dh.dUj1RGEhO.zZ3X5sHVFb9tqVe77Mv8AlUmk8UpYRm','kepala_sekolah',1,NULL,'2022-11-20 21:44:42','2022-11-20 21:44:42'),(42,'kepala yayasan','yayasan@admin.com',NULL,'$2y$10$JOj9jI55JTv82NeCxFlLNe6obrObdDFzuM9DHzGUKWZplhKfWUJqq','kepala_yayasan',1,NULL,'2022-11-20 21:46:10','2022-11-20 21:46:10'),(43,'mutia','mutia@gmail.com',NULL,'$2y$10$F3ITCjCnBO7gN2puYd6IS.yHwGSvNVLH8KaFvOF5x23fuqyPmiuNC','calon_guru',0,NULL,'2022-11-20 21:50:40','2022-11-20 21:50:40'),(44,'zukron','zukron@gmail.com',NULL,'$2y$10$Liwd2fMQSffMGiIrPQe1m.O.OUZuWCYBq1UHb2d9wk27tkklA5dii','calon_guru',0,NULL,'2022-12-14 05:47:39','2022-12-14 05:47:39');
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

-- Dump completed on 2022-12-14 20:55:11
