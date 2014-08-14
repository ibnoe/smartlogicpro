-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2014 at 11:22 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smartlogicprofix`
--
CREATE DATABASE IF NOT EXISTS `smartlogicprofix` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `smartlogicprofix`;

-- --------------------------------------------------------

--
-- Table structure for table `absensis`
--

CREATE TABLE IF NOT EXISTS `absensis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  ` kd_karyawan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_absen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `cuti` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ijin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sakit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alpha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `agamas`
--

CREATE TABLE IF NOT EXISTS `agamas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kd_agama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `agamas`
--

INSERT INTO `agamas` (`id`, `kd_agama`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'AG001', 'Islam', '2014-06-29 11:59:26', '2014-08-04 00:19:36'),
(2, 'AG002', 'Katolik', '2014-06-29 12:01:24', '2014-06-29 12:01:24'),
(3, 'AG003', 'Kristen', '2014-06-29 12:01:49', '2014-06-29 12:01:49'),
(4, 'AG004', 'Hindu', '2014-06-29 12:02:28', '2014-06-29 12:02:28'),
(5, 'AG005', 'Budha', '2014-06-29 12:05:02', '2014-06-29 12:05:02'),
(6, 'AG006', 'Lainnya', '2014-07-03 14:09:41', '2014-07-03 14:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

CREATE TABLE IF NOT EXISTS `agendas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kd_marketing` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_agenda` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_agenda` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Mohammad Fauzil Adhim', '2014-04-30 21:15:22', '2014-04-30 21:15:22'),
(2, 'Salim A. Fillah', '2014-04-30 21:15:22', '2014-04-30 21:15:22'),
(3, 'Aam Amiruddin', '2014-04-30 21:15:22', '2014-04-30 21:15:22');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(10) unsigned NOT NULL,
  `amount` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `books_author_id_foreign` (`author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'Kupinang Engkau dengan Hamdalah', 1, 3, '2014-05-15 21:15:22', '2014-05-15 21:15:22'),
(2, 'Jalan Cinta Para Pejuang', 2, 2, '2014-05-15 21:15:22', '2014-05-15 21:15:22'),
(3, 'Membingkai Surga dalam Rumah Tangga', 3, 4, '2014-05-15 21:15:22', '2014-05-15 21:15:22'),
(4, 'Cinta & Seks Rumah Tangga Muslim', 3, 3, '2014-05-15 21:15:22', '2014-05-15 21:15:22');

-- --------------------------------------------------------

--
-- Table structure for table `departements`
--

CREATE TABLE IF NOT EXISTS `departements` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kd_dep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_dep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `departements`
--

INSERT INTO `departements` (`id`, `kd_dep`, `nama_dep`, `created_at`, `updated_at`) VALUES
(1, 'DP001', 'Departement Marketing', '2014-06-29 13:37:40', '2014-06-29 13:37:40');

-- --------------------------------------------------------

--
-- Table structure for table `detailgajis`
--

CREATE TABLE IF NOT EXISTS `detailgajis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  ` kd_potongan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gajis`
--

CREATE TABLE IF NOT EXISTS `gajis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  ` kd_tunjangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_lembur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_pph` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_gaji` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `tun_jab` int(11) NOT NULL,
  `ttl_tunjangan` int(11) NOT NULL,
  `pph_thr` int(11) NOT NULL,
  `pph_gaji_sebulan` int(11) NOT NULL,
  `jml_potongan` int(11) NOT NULL,
  `ttl_lembur` int(11) NOT NULL,
  `gaji_pokok` int(11) NOT NULL,
  `gaji_bruto` int(11) NOT NULL,
  `gaji_bersih` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `golongans`
--

CREATE TABLE IF NOT EXISTS `golongans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kd_gol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gol_pok` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tun_jab` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `golongans`
--

INSERT INTO `golongans` (`id`, `kd_gol`, `gol_pok`, `tun_jab`, `created_at`, `updated_at`) VALUES
(1, 'G001', 'Golongan 12', 1000000, '2014-06-29 19:18:33', '2014-06-29 19:26:58'),
(2, 'PTKP01', 'PTKP Golongan 1', 120000, '2014-08-03 21:25:43', '2014-08-03 21:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'administrator', '{"admin":1}', '2014-06-28 18:06:31', '2014-06-28 18:06:31'),
(2, 'administrator-owner', '{"administrator-owner":1}', '2014-06-28 18:06:31', '2014-06-28 18:06:31'),
(3, 'marketing', '{"marketing":1}', '2014-06-28 18:06:31', '2014-06-28 18:06:31'),
(4, 'karyawan', '{"employer":1}', '2014-06-28 18:06:31', '2014-06-28 18:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `hargas`
--

CREATE TABLE IF NOT EXISTS `hargas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kd_harga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_harga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hargas`
--

INSERT INTO `hargas` (`id`, `kd_harga`, `nama_harga`, `harga`, `created_at`, `updated_at`) VALUES
(2, 'HRG002', 'Harga Sewa', 100000, '2014-08-04 19:39:45', '2014-08-04 20:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `jabatans`
--

CREATE TABLE IF NOT EXISTS `jabatans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kd_jab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_jabatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tun_kes` int(11) NOT NULL,
  `tun_mkn` int(11) NOT NULL,
  `tun_transport` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jabatans`
--

INSERT INTO `jabatans` (`id`, `kd_jab`, `nama_jabatan`, `tun_kes`, `tun_mkn`, `tun_transport`, `created_at`, `updated_at`) VALUES
(1, 'JB001', 'Direkturs', 1000000, 1000000, 1000000, '2014-06-29 18:06:52', '2014-06-29 18:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `karyawans`
--

CREATE TABLE IF NOT EXISTS `karyawans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  ` kd_agama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_jab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_gol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_statuskawin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_karyawan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jen_kel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_masuk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_keluar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `propinsi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kode_pos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_handphone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `npwp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lemburs`
--

CREATE TABLE IF NOT EXISTS `lemburs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  ` kd_tunjangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_lembur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jml_lembur_biasa` int(11) NOT NULL,
  `jml_lembur_libur` int(11) NOT NULL,
  `tarif_biasa` int(11) NOT NULL,
  `tarif_libur` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `marketings`
--

CREATE TABLE IF NOT EXISTS `marketings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `uid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `no_hp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `kota` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `propinsi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kode_pos` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `marketing_kd_marketing_unique` (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `marketings`
--

INSERT INTO `marketings` (`id`, `users_id`, `uid`, `no_hp`, `alamat`, `kota`, `propinsi`, `kode_pos`, `created_at`, `updated_at`) VALUES
(2, '3', '', '081804109307', 'Jl. Nusa Indah No. 4', 'Yogyakarta', 'jawa Tengah', '5678', '2014-05-16 03:48:57', '2014-05-26 06:35:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_05_07_182527_migration_cartalyst_sentry_install_users', 1),
('2014_05_07_182528_migration_cartalyst_sentry_install_groups', 1),
('2014_05_07_182529_migration_cartalyst_sentry_install_users_groups_pivot', 1),
('2014_05_07_182530_migration_cartalyst_sentry_install_throttle', 1),
('2014_06_24_015608_create_agamas_table', 1),
('2014_06_24_020934_create_departements_table', 1),
('2014_06_24_022833_create_owners_table', 1),
('2014_06_24_030338_create_ticket_supports_table', 1),
('2014_06_19_013822_create_agendas_table', 2),
('2014_06_29_090127_create_jabatans_table', 3),
('2014_06_29_091423_create_golongans_table', 4),
('2014_06_29_092530_create_ptkps_table', 5),
('2014_06_29_101006_create_perusahaans_table', 6),
('2014_06_29_161913_create_marketings_table', 7),
('2014_06_29_162554_create_marketings_table', 8),
('2014_06_29_162554_create_karyawans_table', 9),
('2014_06_29_165703_create_hargas_table', 10),
('2014_06_29_170814_create_potongans_table', 11),
('2014_06_29_171126_create_pkps_table', 12),
('2014_06_29_171410_create_detailgajis_table', 13),
('2014_06_29_171824_create_absensis_table', 14),
('2014_06_29_172211_create_tunjangans_table', 15),
('2014_06_29_172528_create_lemburs_table', 16),
('2014_06_29_180409_create_penilaians_table', 17),
('2014_06_29_181224_create_pphs_table', 18),
('2014_06_29_182754_create_pph42s_table', 19),
('2014_06_29_183409_create_gajis_table', 20),
('2014_06_29_184238_create_ppns_table', 21),
('2014_06_29_184537_create_statuses_table', 22),
('2014_07_03_042852_create_modules_table', 23),
('2014_07_03_044353_create_usermodules_table', 24),
('2014_07_04_025753_create_modulegroups_table', 25),
('2014_07_04_085609_create_modulegroups_table', 26);

-- --------------------------------------------------------

--
-- Table structure for table `modulegroups`
--

CREATE TABLE IF NOT EXISTS `modulegroups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_grup_module` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_grup` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `modulegroups`
--

INSERT INTO `modulegroups` (`id`, `nama_grup_module`, `kd_grup`, `created_at`, `updated_at`) VALUES
(1, 'Module Tax Session', 'MO001', '2014-07-03 19:15:15', '2014-07-06 11:35:29'),
(2, 'Module Extra', 'MO002', '2014-07-06 11:42:21', '2014-07-09 17:50:39');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_kelompokmodule` int(10) NOT NULL,
  `nama_modul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_module` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_module` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon_module` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `id_kelompokmodule`, `nama_modul`, `url_module`, `status_module`, `icon_module`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tax Module', 'module/ok', 'active', 'ok', '2014-07-06 10:00:00', '2014-07-06 10:00:00'),
(2, 1, 'Module Tax Session Part 1', 'ok/module', 'active', 'C:\\xampp\\tmp\\phpB786.tmp', '2014-07-09 17:49:31', '2014-07-09 17:49:31'),
(3, 2, 'Module Tax Session Part 2', 'ok/module', 'active', 'C:\\xampp\\tmp\\php90AE.tmp', '2014-07-09 17:54:48', '2014-07-09 17:54:48');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE IF NOT EXISTS `owners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kd_perusahaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_marketing` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kd_owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `handphone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `npwp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `propinsi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kode_pos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `tanggal_aktifasi` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `uid`, `kd_perusahaan`, `kd_marketing`, `kd_owner`, `handphone`, `npwp`, `alamat`, `kota`, `propinsi`, `kode_pos`, `tanggal_daftar`, `tanggal_aktifasi`, `status`, `created_at`, `updated_at`) VALUES
(1, '100', 'PR001', NULL, 'OW001', '0802028082', '219892839283923', 'jogjakarta', 'jogjakarta', 'jogjakarta', '', '2014-07-01', NULL, 'pending', '2014-06-30 14:41:12', '2014-06-30 14:41:12'),
(2, 'ca2qSTDQwnYmJvp', 'MK001', NULL, 'MKonstruksi', '84848484', '1212312as', 'Yogyakarta', 'asdad', 'adsad', '', '2014-08-12', NULL, 'pending', '2014-08-11 19:19:05', '2014-08-11 19:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `pembeliandlmnegeris`
--

CREATE TABLE IF NOT EXISTS `pembeliandlmnegeris` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_pembeli` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `npwp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_faktur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `penjualan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ppn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pembeliandlmnegeris`
--

INSERT INTO `pembeliandlmnegeris` (`id`, `nama_pembeli`, `npwp`, `no_faktur`, `penjualan`, `ppn`, `created_at`, `updated_at`) VALUES
(1, 'Pak Ndut', '51.453.541.6-542.000', '010.620-14.00000002', '35000000', '95000000', '2014-07-07 00:03:29', '2014-07-11 01:50:30'),
(2, 'Surya Agil', '123467', '010.620-14.00000009', '34000000', '23000000', '2014-07-11 01:51:42', '2014-07-11 01:51:42');

-- --------------------------------------------------------

--
-- Table structure for table `pembelianimports`
--

CREATE TABLE IF NOT EXISTS `pembelianimports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_pembeli` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `no_ekspor` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `penjualan` int(30) NOT NULL,
  `ppn` int(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pembelianimports`
--

INSERT INTO `pembelianimports` (`id`, `nama_pembeli`, `no_ekspor`, `penjualan`, `ppn`, `created_at`, `updated_at`) VALUES
(1, 'Chung Dong .co', '0001', 2000000, 2000000, '2014-07-06 20:51:34', '2014-07-06 21:00:35'),
(2, 'Rahasia Negara', '0002', 34000000, 55000000, '2014-07-11 01:44:24', '2014-07-16 23:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `penilaians`
--

CREATE TABLE IF NOT EXISTS `penilaians` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  ` kd_absen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_penilaian` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kinerja` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `penjualaneksports`
--

CREATE TABLE IF NOT EXISTS `penjualaneksports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_pembeli` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `no_ekspor` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `penjualan` int(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `penjualaneksports`
--

INSERT INTO `penjualaneksports` (`id`, `nama_pembeli`, `no_ekspor`, `penjualan`, `created_at`, `updated_at`) VALUES
(1, 'media solution business', '002', 25000000, '2014-07-06 23:26:54', '2014-07-06 23:29:54'),
(2, 'Agil Satya', '00019', 35000000, '2014-07-11 01:22:44', '2014-07-11 01:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `penjualanfakturlengkaps`
--

CREATE TABLE IF NOT EXISTS `penjualanfakturlengkaps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_pembeli` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `npwp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `no_faktur` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `penjualan` int(30) NOT NULL,
  `ppn` int(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `penjualanfakturlengkaps`
--

INSERT INTO `penjualanfakturlengkaps` (`id`, `nama_pembeli`, `npwp`, `no_faktur`, `penjualan`, `ppn`, `created_at`, `updated_at`) VALUES
(2, 'rusmanto', '10.12.4767', '15.50.55.577', 1500000, 4500000, '2014-07-04 01:27:01', '2014-07-04 01:27:01'),
(3, 'Fajar indera Febriantoro', '31.453.541.6-542.000', '010.620-14.00000003', 12000000, 56000000, '2014-07-10 18:33:52', '2014-07-11 00:52:16');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaans`
--

CREATE TABLE IF NOT EXISTS `perusahaans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  ` kd_perusahaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `propinsi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kode_pos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `handphone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `perusahaans`
--

INSERT INTO `perusahaans` (`id`, `users_id`, ` kd_perusahaan`, `nama_perusahaan`, `alamat`, `kota`, `propinsi`, `kode_pos`, `handphone`, `telephone`, `fax`, `email`, `created_at`, `updated_at`) VALUES
(1, 2, 'P001', 'PT okesaja', 'jogja', 'jogja', 'jogja', '55153', '54545454', '5454545454', '54545', '55454', '2014-07-14 10:00:00', '2014-07-14 10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pkps`
--

CREATE TABLE IF NOT EXISTS `pkps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_pkp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batas_pkp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tarif` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pkps`
--

INSERT INTO `pkps` (`id`, `kode_pkp`, `batas_pkp`, `tarif`, `created_at`, `updated_at`) VALUES
(1, 'KDPKP01', '123', '100000', '2014-08-04 17:00:00', '2014-08-05 00:32:32'),
(2, 'PKP 001', '12', '1500000', '2014-08-05 00:16:35', '2014-08-05 00:16:35');

-- --------------------------------------------------------

--
-- Table structure for table `potongans`
--

CREATE TABLE IF NOT EXISTS `potongans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_potongan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_potongan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `potongans`
--

INSERT INTO `potongans` (`id`, `kode_potongan`, `nama_potongan`, `created_at`, `updated_at`) VALUES
(1, 'PT001', 'Potongan Harga 1', '2014-08-04 17:00:00', '2014-08-04 21:49:10'),
(2, 'PT002', 'Potongan Harga Baru', '2014-08-04 21:16:33', '2014-08-04 21:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `pph42s`
--

CREATE TABLE IF NOT EXISTS `pph42s` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  ` kd_perusahaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_pph42` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_omset` int(11) NOT NULL,
  `bulan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tahun` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_penyetor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pphs`
--

CREATE TABLE IF NOT EXISTS `pphs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  ` kd_pkp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_lembur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_pph` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pph_thr` int(11) NOT NULL,
  `pph_gaji_sebulan` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ppns`
--

CREATE TABLE IF NOT EXISTS `ppns` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  ` kd_perusahaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ppn_pembelian` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ppn_penjualan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bulan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tahun` int(11) NOT NULL,
  `biaya_membangun_sendiri` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `penomoran_faktur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `penjualan_tanpa_faktur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ptkps`
--

CREATE TABLE IF NOT EXISTS `ptkps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kd_statuskawin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_ptkp` int(11) NOT NULL,
  `status_kawin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ptkps`
--

INSERT INTO `ptkps` (`id`, `kd_statuskawin`, `jumlah_ptkp`, `status_kawin`, `created_at`, `updated_at`) VALUES
(1, 'PTKP01', 3, 'Janda', '2014-08-03 23:59:30', '2014-08-04 00:20:42');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  ` status_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tanpafakturlengkaps`
--

CREATE TABLE IF NOT EXISTS `tanpafakturlengkaps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_pembeli` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `no_faktur` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `penjualan` int(50) NOT NULL,
  `ppn` int(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tanpafakturlengkaps`
--

INSERT INTO `tanpafakturlengkaps` (`id`, `nama_pembeli`, `no_faktur`, `penjualan`, `ppn`, `created_at`, `updated_at`) VALUES
(2, 'Rivan Hakim', '010.620-14.00000002', 15000, 3500000, '2014-07-06 19:13:43', '2014-07-06 19:14:10'),
(3, 'Rahmad Awaludin', '010.620-14.00000006', 83000000, 35000000, '2014-07-11 00:57:59', '2014-07-11 00:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 3, '::1', 0, 0, 0, NULL, NULL, NULL),
(2, 1, '::1', 0, 0, 0, NULL, NULL, NULL),
(3, 2, '::1', 0, 0, 0, NULL, NULL, NULL),
(4, 4, '::1', 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_supports`
--

CREATE TABLE IF NOT EXISTS `ticket_supports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kd_marketing` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  `lampiran` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jenis_ticket` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_ticket` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ticket_supports`
--

INSERT INTO `ticket_supports` (`id`, `kd_marketing`, `keterangan`, `lampiran`, `jenis_ticket`, `status_ticket`, `created_at`, `updated_at`) VALUES
(1, 'MK002', 'keterangan saja ok', 'IMG_0003.jpg', 'low', 'open', '2014-06-29 05:05:05', '2014-06-29 05:27:28'),
(2, 'MK001', 'adsasdada', NULL, 'low', 'open', '2014-06-29 05:27:57', '2014-06-29 05:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `tunjangans`
--

CREATE TABLE IF NOT EXISTS `tunjangans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  ` kd_absen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_tunjangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ttl_tun_kes` int(11) NOT NULL,
  `ttl_tun_makan` int(11) NOT NULL,
  `ttl_tun_transport` int(11) NOT NULL,
  `ttl_tun` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usermodules`
--

CREATE TABLE IF NOT EXISTS `usermodules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  ` user_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `usermodules`
--

INSERT INTO `usermodules` (`id`, ` user_id`, `module_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2014-07-10 10:00:00', '2014-07-10 10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `last_name`, `uid`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$msvNJhLmRRbJ8Tb7UAdjI.75NXjScqsSm49N.t1VOmiAwSChXS8ma', NULL, 1, NULL, '2014-06-28 18:06:32', '2014-08-13 23:45:51', '$2y$10$K3SC/.uSWwAgDr8a0enUS.lqbxYCGo8.KSl5aQm9elNw2mRrXxyjq', NULL, 'Administrator', 'Super', '', '2014-06-28 18:06:32', '2014-08-13 23:45:51'),
(2, 'admin.owner@gmail.com', '$2y$10$/WiDbRTO79USqTYRmCo3f.V5gT1qYu4PmbzUiaUWQ6xcW3ch.QqLi', NULL, 1, NULL, '2014-06-28 18:06:33', '2014-07-23 19:05:23', '$2y$10$29EHp4WsRjE62t1O1iYY1.NYmPGlIYJu5PrFSqZSFSzOIqKp/KinS', NULL, 'Administrator', 'Owner', '', '2014-06-28 18:06:32', '2014-07-23 19:05:23'),
(3, 'marketing@gmail.com', '$2y$10$ygxGnrAO2We0hAx7a5fLte8UGJBXY8WEoTCOEkAeLs.JJfh.3hSUe', NULL, 1, NULL, '2014-06-28 18:06:33', '2014-07-23 19:09:21', '$2y$10$FxmnZpSBeNPwhYRapWWOE.PgKCxQSd6fYkAMDKpMJi.ZHkqt/5ubO', NULL, 'Marketing', 'Smart', '', '2014-06-28 18:06:33', '2014-07-23 19:09:21'),
(4, 'karyawan@gmail.com', '$2y$10$CZTOo4p8qHuIhxF7w1.sBeUhK0aw/uEsi.Om1wT.V17pAsOfpflXC', NULL, 1, NULL, '2014-06-28 18:06:33', '2014-07-23 19:12:04', '$2y$10$P9LQOqZfcrnKZUoXGGOVmuWRSl9JhOhnhHJU5.zJ5s/occlO9ZjRm', NULL, 'Karyawan', 'Smart', '', '2014-06-28 18:06:33', '2014-07-23 19:12:04'),
(5, 'rizkisabdono@gmail.com', '$2y$10$5TOochlK3QnkkdTG2Y7jpuBkredP3YRfYa06L9oDyVC/cv4Vt2GaG', NULL, 1, NULL, '2014-08-11 19:19:58', NULL, NULL, NULL, 'marketing', 'lagi', 'ca2qSTDQwnYmJvp', '2014-08-11 19:19:05', '2014-08-11 19:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`user_id`, `group_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 2),
(6, 2),
(7, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
