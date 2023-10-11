-- MariaDB dump 10.19  Distrib 10.6.12-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: api-rs
-- ------------------------------------------------------
-- Server version	10.6.12-MariaDB-0ubuntu0.22.04.1

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
-- Table structure for table `bangsal`
--

DROP TABLE IF EXISTS `bangsal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bangsal` (
  `bangsal_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_bangsal` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`bangsal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bangsal`
--

LOCK TABLES `bangsal` WRITE;
/*!40000 ALTER TABLE `bangsal` DISABLE KEYS */;
/*!40000 ALTER TABLE `bangsal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barang` (
  `barang_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(255) NOT NULL,
  `letak_barang` varchar(255) NOT NULL,
  `harga` double DEFAULT NULL,
  `jumlah_barang` int(11) DEFAULT NULL,
  `tgl_pengadaan` date DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`barang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barang`
--

LOCK TABLES `barang` WRITE;
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` VALUES (1,'Oksigen','Ruang ICU',10000,10,'2022-08-23','1','2023-09-10 07:41:05','2023-09-10 07:43:17'),(2,'Stetoskop','Ruang ICU',100000,15,'2022-09-23','0','2023-09-10 07:46:14','2023-09-10 07:47:33'),(3,'Kursi Roda','Ruang IGD',10000,10,'2022-02-23','1','2023-09-10 07:46:28','2023-09-10 07:46:28');
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departemen`
--

DROP TABLE IF EXISTS `departemen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departemen` (
  `departemen_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_departemen` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`departemen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departemen`
--

LOCK TABLES `departemen` WRITE;
/*!40000 ALTER TABLE `departemen` DISABLE KEYS */;
INSERT INTO `departemen` VALUES (1,'backend','2023-09-10 07:54:06','2023-09-10 07:54:06');
/*!40000 ALTER TABLE `departemen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail`
--

DROP TABLE IF EXISTS `detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail` (
  `detail_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `regristasi_id` int(11) NOT NULL,
  `perawatan_id` varchar(15) NOT NULL,
  `dokter_id` varchar(20) NOT NULL,
  `tgl_perawatan` date NOT NULL,
  `jam_rawat` time NOT NULL,
  `bagian_rs` double DEFAULT NULL,
  `bhp` double DEFAULT NULL,
  `tarif_perujuk` double DEFAULT NULL,
  `tarif_tindakan_dokter` double DEFAULT NULL,
  `tarif_tindakan_petugas` double DEFAULT NULL,
  `kso` double DEFAULT NULL,
  `menejemen` double DEFAULT NULL,
  `total_biaya` double DEFAULT NULL,
  `status_bayar` enum('sudah','belum','suspen') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail`
--

LOCK TABLES `detail` WRITE;
/*!40000 ALTER TABLE `detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_obat`
--

DROP TABLE IF EXISTS `detail_obat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_obat` (
  `detail_obat_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `regristasi_id` int(11) NOT NULL,
  `obat_id` int(11) NOT NULL,
  `dokter_id` int(11) DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `biaya_obat` double DEFAULT NULL,
  `total_biaya` double DEFAULT NULL,
  `jumlah` double NOT NULL,
  `status` enum('Ralan','Ranap') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`detail_obat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_obat`
--

LOCK TABLES `detail_obat` WRITE;
/*!40000 ALTER TABLE `detail_obat` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_obat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_tambahan`
--

DROP TABLE IF EXISTS `detail_tambahan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_tambahan` (
  `detail_tambahan_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `regristasi_id` int(11) NOT NULL,
  `nama_biaya` varchar(60) NOT NULL,
  `total_biaya` double NOT NULL,
  `status` enum('ralan','ranap') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`detail_tambahan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_tambahan`
--

LOCK TABLES `detail_tambahan` WRITE;
/*!40000 ALTER TABLE `detail_tambahan` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_tambahan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dokter`
--

DROP TABLE IF EXISTS `dokter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dokter` (
  `dokter_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pegawai_id` int(11) NOT NULL,
  `kode_spesialis` char(5) DEFAULT NULL,
  `no_ijn_praktek` varchar(120) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dokter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dokter`
--

LOCK TABLES `dokter` WRITE;
/*!40000 ALTER TABLE `dokter` DISABLE KEYS */;
/*!40000 ALTER TABLE `dokter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
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
-- Table structure for table `jadwal`
--

DROP TABLE IF EXISTS `jadwal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jadwal` (
  `jadwal_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pegawai_id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `tgl_1` varchar(255) DEFAULT NULL,
  `tgl_2` varchar(255) DEFAULT NULL,
  `tgl_3` varchar(255) DEFAULT NULL,
  `tgl_4` varchar(255) DEFAULT NULL,
  `tgl_5` varchar(255) DEFAULT NULL,
  `tgl_6` varchar(255) DEFAULT NULL,
  `tgl_7` varchar(255) DEFAULT NULL,
  `tgl_8` varchar(255) DEFAULT NULL,
  `tgl_9` varchar(255) DEFAULT NULL,
  `tgl_10` varchar(255) DEFAULT NULL,
  `tgl_11` varchar(255) DEFAULT NULL,
  `tgl_12` varchar(255) DEFAULT NULL,
  `tgl_13` varchar(255) DEFAULT NULL,
  `tgl_14` varchar(255) DEFAULT NULL,
  `tgl_15` varchar(255) DEFAULT NULL,
  `tgl_16` varchar(255) DEFAULT NULL,
  `tgl_17` varchar(255) DEFAULT NULL,
  `tgl_18` varchar(255) DEFAULT NULL,
  `tgl_19` varchar(255) DEFAULT NULL,
  `tgl_20` varchar(255) DEFAULT NULL,
  `tgl_21` varchar(255) DEFAULT NULL,
  `tgl_22` varchar(255) DEFAULT NULL,
  `tgl_23` varchar(255) DEFAULT NULL,
  `tgl_24` varchar(255) DEFAULT NULL,
  `tgl_25` varchar(255) DEFAULT NULL,
  `tgl_26` varchar(255) DEFAULT NULL,
  `tgl_27` varchar(255) DEFAULT NULL,
  `tgl_28` varchar(255) DEFAULT NULL,
  `tgl_29` varchar(255) DEFAULT NULL,
  `tgl_30` varchar(255) DEFAULT NULL,
  `tgl_31` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`jadwal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jadwal`
--

LOCK TABLES `jadwal` WRITE;
/*!40000 ALTER TABLE `jadwal` DISABLE KEYS */;
/*!40000 ALTER TABLE `jadwal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kamar`
--

DROP TABLE IF EXISTS `kamar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kamar` (
  `kamar_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `bangsal_id` int(11) NOT NULL,
  `tarif_kamar` double DEFAULT NULL,
  `status` enum('ISI','KOSONG','DIBERSIHKAN','DIBOOKING') DEFAULT NULL,
  `kelas` enum('Kelas 1','Kelas 2','Kelas 3','Kelas Utama','Kelas VIP','Kelas VVIP') DEFAULT NULL,
  `statusdata` enum('0','1') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kamar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kamar`
--

LOCK TABLES `kamar` WRITE;
/*!40000 ALTER TABLE `kamar` DISABLE KEYS */;
/*!40000 ALTER TABLE `kamar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2023_08_23_081417_create_pegawai_table',1),(5,'2023_08_23_121537_create_pasien_table',1),(6,'2023_08_23_153529_create_dokter_table',1),(7,'2023_08_23_162903_create_role_table',1),(8,'2023_08_23_162917_create_permission_table',1),(9,'2023_08_23_162933_create_permission_role_table',1),(10,'2023_08_24_021201_create_shift_table',1),(11,'2023_08_24_022151_create_jadwal_table',1),(12,'2023_08_24_023036_create_presensi_table',1),(13,'2023_08_24_023719_create_bangsal_table',1),(14,'2023_08_24_023731_create_kamar_table',1),(15,'2023_08_24_030746_create_barang_table',1),(16,'2023_08_24_032334_create_perbaikan_table',1),(17,'2023_08_24_034307_create_obat_table',1),(18,'2023_08_24_061341_create_regristasi_table',1),(19,'2023_08_25_071824_create_departemen_table',1),(20,'2023_08_25_082939_create_perawatan_table',1),(21,'2023_08_25_085340_create_poliklinik_table',1),(22,'2023_08_28_132528_create_detail_table',1),(23,'2023_08_28_133446_create_detail_obat_table',1),(24,'2023_08_28_134151_create_detail_tambahan_table',1),(25,'2023_08_28_150958_create_soap_table',1),(26,'2023_09_07_171940_create_permohonan_perbaikan_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `obat`
--

DROP TABLE IF EXISTS `obat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `obat` (
  `obat_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(80) DEFAULT NULL,
  `dasar` double NOT NULL,
  `harga_beli` double DEFAULT NULL,
  `ralan` double DEFAULT NULL,
  `harga_kelas_1` double DEFAULT NULL,
  `harga_kelas_2` double DEFAULT NULL,
  `harga_kelas_3` double DEFAULT NULL,
  `harga_utama` double DEFAULT NULL,
  `harga_vip` double DEFAULT NULL,
  `harga_vvip` double DEFAULT NULL,
  `harga_beli_luar` double DEFAULT NULL,
  `harga_jual_bebas` double DEFAULT NULL,
  `harga_karyawan` double DEFAULT NULL,
  `stok_minimal` double DEFAULT NULL,
  `stok` double DEFAULT NULL,
  `expire` date DEFAULT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`obat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `obat`
--

LOCK TABLES `obat` WRITE;
/*!40000 ALTER TABLE `obat` DISABLE KEYS */;
/*!40000 ALTER TABLE `obat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pasien`
--

DROP TABLE IF EXISTS `pasien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pasien` (
  `pasien_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `nama_pasien` varchar(40) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `image` varchar(40) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `tmp_lahir` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `nm_ibu` varchar(40) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `gol_darah` enum('A','B','O','AB','-') DEFAULT NULL,
  `pekerjaan` varchar(60) DEFAULT NULL,
  `status_nikah` enum('belum menikah','menikah') DEFAULT NULL,
  `agama` varchar(12) DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `no_tlp` varchar(40) DEFAULT NULL,
  `umur` varchar(30) DEFAULT NULL,
  `pnd` enum('TS','TK','SD','SMP','SMA','SLTA/SEDERAJAT','D1','D2','D3','D4','S1','S2','S3','-') DEFAULT NULL,
  `keluarga` enum('AYAH','IBU','ISTRI','SUAMI','SAUDARA','ANAK') DEFAULT NULL,
  `namakeluarga` varchar(50) DEFAULT NULL,
  `penjamin` char(100) DEFAULT NULL,
  `no_peserta` varchar(25) DEFAULT NULL,
  `kd_kelurahan` int(11) DEFAULT NULL,
  `kd_kec` int(11) DEFAULT NULL,
  `kd_kab` int(11) DEFAULT NULL,
  `pekerjaanpj` varchar(35) DEFAULT NULL,
  `alamatpj` varchar(100) DEFAULT NULL,
  `kelurahanpj` varchar(60) DEFAULT NULL,
  `kecamatanpj` varchar(60) DEFAULT NULL,
  `kabupatenpj` varchar(60) DEFAULT NULL,
  `perusahaan_pasien` varchar(8) DEFAULT NULL,
  `suku_bangsa` int(11) DEFAULT NULL,
  `bahasa_pasien` int(11) DEFAULT NULL,
  `cacat_fisik` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nip` varchar(30) DEFAULT NULL,
  `kd_prop` int(11) DEFAULT NULL,
  `propinsipj` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pasien_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pasien`
--

LOCK TABLES `pasien` WRITE;
/*!40000 ALTER TABLE `pasien` DISABLE KEYS */;
INSERT INTO `pasien` VALUES (1,1,'fandy','37100501537005',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-09-10 07:38:05','2023-09-10 07:38:05');
/*!40000 ALTER TABLE `pasien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
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
-- Table structure for table `pegawai`
--

DROP TABLE IF EXISTS `pegawai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pegawai` (
  `pegawai_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `golongan_darah` enum('A','B','O','AB','-') DEFAULT NULL,
  `agama` varchar(12) DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status_nikah` enum('BELUM MENIKAH','MENIKAH','JANDA','DUDHA','JOMBLO') DEFAULT NULL,
  `pendidikan_terakhir` varchar(80) DEFAULT NULL,
  `alumni` varchar(60) DEFAULT NULL,
  `bank` varchar(50) DEFAULT NULL,
  `rekening` varchar(25) DEFAULT NULL,
  `status_wajib_pajak` varchar(5) DEFAULT NULL,
  `status_kerja` varchar(3) DEFAULT NULL,
  `status_aktif` enum('AKTIF','CUTI','KELUAR','TENAGA LUAR') DEFAULT NULL,
  `npwp` varchar(15) DEFAULT NULL,
  `gaji_pokok` int(11) DEFAULT NULL,
  `departemen_id` varchar(4) NOT NULL,
  `bidang` varchar(15) DEFAULT NULL,
  `jabatan` varchar(25) DEFAULT NULL,
  `jenjang_jabatan` varchar(5) DEFAULT NULL,
  `kode_kelompok` varchar(3) DEFAULT NULL,
  `kode_resiko` varchar(3) DEFAULT NULL,
  `kode_emergency` varchar(3) DEFAULT NULL,
  `mulai_kontrak` date DEFAULT NULL,
  `mulai_kerja` date DEFAULT NULL,
  `masa_kerja` enum('<1','PT','FT>1') DEFAULT NULL,
  `indexins` varchar(4) DEFAULT NULL,
  `wajibmasuk` int(11) DEFAULT NULL,
  `pengurang` int(11) DEFAULT NULL,
  `indek` int(11) DEFAULT NULL,
  `cuti_diambil` int(11) DEFAULT NULL,
  `dankes` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pegawai_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pegawai`
--

LOCK TABLES `pegawai` WRITE;
/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
INSERT INTO `pegawai` VALUES (1,2,'37100501537005','Fandy Ahmad','Pria','Surakarta','2005-05-05','Bantul No. 62',NULL,'A','Islam','08123456987','fandy@mail.com','MENIKAH','D3','Pontekindo','Bank BSI','9325723093','Ya','PKW','AKTIF','-',10000000,'1','Programmer','COO','1','K01','R02','E03','2020-01-01','2020-02-01','PT','IN01',22,4,18,5,0,'2023-09-10 07:54:19','2023-09-10 07:54:19');
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perawatan`
--

DROP TABLE IF EXISTS `perawatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perawatan` (
  `perawatan_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `poliklinik_id` int(11) NOT NULL,
  `nama_perawatan` varchar(80) NOT NULL,
  `bagian_rs` double DEFAULT NULL,
  `bhp` double DEFAULT NULL,
  `tarif_perujuk` double DEFAULT NULL,
  `tarif_tindakan_dokter` double DEFAULT NULL,
  `tarif_tindakan_petugas` double DEFAULT NULL,
  `kso` double DEFAULT NULL,
  `menejemen` double DEFAULT NULL,
  `total_biaya` double DEFAULT NULL,
  `kode_pj` char(3) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `kelas` enum('-','Rawat Jalan','Kelas 1','Kelas 2','Kelas 3','Kelas Utama','Kelas VIP','Kelas VVIP') DEFAULT NULL,
  `kategori` enum('PK','PA','MB') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`perawatan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perawatan`
--

LOCK TABLES `perawatan` WRITE;
/*!40000 ALTER TABLE `perawatan` DISABLE KEYS */;
/*!40000 ALTER TABLE `perawatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perbaikan`
--

DROP TABLE IF EXISTS `perbaikan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perbaikan` (
  `perbaikan_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `permohonan_perbaikan_id` int(11) NOT NULL,
  `pelaksana` varchar(255) DEFAULT NULL,
  `tgl_perbaikan` date DEFAULT NULL,
  `lama_perbaikan` varchar(255) DEFAULT NULL,
  `uraian_kegiatan` varchar(255) DEFAULT NULL,
  `biaya` double DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`perbaikan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perbaikan`
--

LOCK TABLES `perbaikan` WRITE;
/*!40000 ALTER TABLE `perbaikan` DISABLE KEYS */;
INSERT INTO `perbaikan` VALUES (1,1,'Teknisi Panggilan','2023-02-23','10 Hari','Ganti Sparepart',300000,'1','2023-09-10 08:01:34','2023-09-10 08:01:34'),(2,3,'Teknisi Panggilan','2023-02-23','20 Hari','Ganti Sparepart',400000,'0','2023-09-10 08:02:17','2023-09-10 08:04:29');
/*!40000 ALTER TABLE `perbaikan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission`
--

DROP TABLE IF EXISTS `permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission` (
  `permission_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `permission_name` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission`
--

LOCK TABLES `permission` WRITE;
/*!40000 ALTER TABLE `permission` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_role_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` varchar(20) NOT NULL,
  `permission_id` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`permission_role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permohonan_perbaikan`
--

DROP TABLE IF EXISTS `permohonan_perbaikan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permohonan_perbaikan` (
  `permohonan_perbaikan_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `barang_id` int(11) NOT NULL,
  `pegawai_id` int(11) NOT NULL,
  `tgl_permohonan` date DEFAULT NULL,
  `deskripsi_kerusakan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`permohonan_perbaikan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permohonan_perbaikan`
--

LOCK TABLES `permohonan_perbaikan` WRITE;
/*!40000 ALTER TABLE `permohonan_perbaikan` DISABLE KEYS */;
INSERT INTO `permohonan_perbaikan` VALUES (1,2,1,'2001-09-23','Rusak','2023-09-10 07:54:28','2023-09-10 07:57:08');
/*!40000 ALTER TABLE `permohonan_perbaikan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `poliklinik`
--

DROP TABLE IF EXISTS `poliklinik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `poliklinik` (
  `poliklinik_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_poliklinik` varchar(255) NOT NULL,
  `regristasi_baru` int(11) DEFAULT NULL,
  `regristasi_lama` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`poliklinik_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `poliklinik`
--

LOCK TABLES `poliklinik` WRITE;
/*!40000 ALTER TABLE `poliklinik` DISABLE KEYS */;
/*!40000 ALTER TABLE `poliklinik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `presensi`
--

DROP TABLE IF EXISTS `presensi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `presensi` (
  `presensi_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pegawai_id` int(11) NOT NULL,
  `shift_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_keterlambatan` int(11) DEFAULT NULL,
  `waktu_kecepetan` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lon` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`presensi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `presensi`
--

LOCK TABLES `presensi` WRITE;
/*!40000 ALTER TABLE `presensi` DISABLE KEYS */;
/*!40000 ALTER TABLE `presensi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regristasi`
--

DROP TABLE IF EXISTS `regristasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regristasi` (
  `regristasi_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dokter_id` int(11) NOT NULL,
  `pasien_id` int(11) NOT NULL,
  `no_regristasi` varchar(50) DEFAULT NULL,
  `tgl_registrasi` date DEFAULT NULL,
  `jam_reg` time DEFAULT NULL,
  `poliklinik_id` int(11) NOT NULL,
  `penjamin` varchar(100) NOT NULL,
  `alamat_pj` varchar(200) DEFAULT NULL,
  `hubungan_pj` varchar(20) DEFAULT NULL,
  `biaya_regristasi` double DEFAULT NULL,
  `status` enum('belum','sudah','batal','berkas Diterima','dirujuk','meninggal','dirawat','pulang paksa') NOT NULL DEFAULT 'belum',
  `status_bayar` enum('sudah','belum') NOT NULL DEFAULT 'belum',
  `status_daftar` enum('lama','baru') NOT NULL DEFAULT 'baru',
  `status_lanjut` enum('ralan','ranap') NOT NULL DEFAULT 'ralan',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`regristasi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regristasi`
--

LOCK TABLES `regristasi` WRITE;
/*!40000 ALTER TABLE `regristasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `regristasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `role_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shift`
--

DROP TABLE IF EXISTS `shift`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shift` (
  `shift_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `departemen_id` int(11) NOT NULL,
  `shift_name` varchar(255) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`shift_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shift`
--

LOCK TABLES `shift` WRITE;
/*!40000 ALTER TABLE `shift` DISABLE KEYS */;
/*!40000 ALTER TABLE `shift` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `soap`
--

DROP TABLE IF EXISTS `soap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `soap` (
  `soap_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pasien_id` int(11) NOT NULL,
  `regristasi_id` int(11) NOT NULL,
  `tgl_perawatan` date DEFAULT NULL,
  `jam_rawat` time DEFAULT NULL,
  `suhu_tubuh` varchar(5) DEFAULT NULL,
  `tensi` varchar(8) NOT NULL,
  `nadi` varchar(3) DEFAULT NULL,
  `respirasi` varchar(3) DEFAULT NULL,
  `tinggi` varchar(5) DEFAULT NULL,
  `berat` varchar(5) DEFAULT NULL,
  `spo2` varchar(3) DEFAULT NULL,
  `gcs` varchar(10) DEFAULT NULL,
  `kesadaran` enum('Compos Mentis','Somnolence','Sopor','Coma') DEFAULT NULL,
  `keluhan` varchar(2000) DEFAULT NULL,
  `pemeriksaan` varchar(2000) DEFAULT NULL,
  `alergi` varchar(50) DEFAULT NULL,
  `lingkar_perut` varchar(5) DEFAULT NULL,
  `rtl` varchar(2000) DEFAULT NULL,
  `penilaian` varchar(2000) DEFAULT NULL,
  `instruksi` varchar(2000) DEFAULT NULL,
  `evaluasi` varchar(2000) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`soap_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `soap`
--

LOCK TABLES `soap` WRITE;
/*!40000 ALTER TABLE `soap` DISABLE KEYS */;
/*!40000 ALTER TABLE `soap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'fandy','$2y$10$Oy4junOkwrNmTJ/odBHNAexYO69KnnzPeIoks5voyqqd95JTF1w1K','3','2023-09-10 07:38:05','2023-09-10 07:38:05'),(2,'Fandy Ahmad','$2y$10$mCdenrhMJhgoPeA1Ml//zO7kOjcAlBybrMX5NFExnO7NYbTqarXp2','3','2023-09-10 07:54:19','2023-09-10 07:54:19');
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

-- Dump completed on 2023-09-19  9:01:30
