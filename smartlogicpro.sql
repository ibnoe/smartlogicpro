-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2014 at 09:17 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smartlogicpro`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `agamas`
--

INSERT INTO `agamas` (`id`, `kd_agama`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'AG001', 'Islam', '2014-06-29 18:59:26', '2014-06-29 19:33:10'),
(2, 'AG002', 'Katolik', '2014-06-29 19:01:24', '2014-06-29 19:01:24'),
(3, 'AG003', 'Kristen', '2014-06-29 19:01:49', '2014-06-29 19:01:49'),
(4, 'AG004', 'Hindu', '2014-06-29 19:02:28', '2014-06-29 19:02:28'),
(5, 'AG005', 'Budha', '2014-06-29 19:05:02', '2014-06-29 19:05:02');

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
(1, 'DP001', 'Departement Marketing', '2014-06-29 20:37:40', '2014-06-29 20:37:40');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `golongans`
--

INSERT INTO `golongans` (`id`, `kd_gol`, `gol_pok`, `tun_jab`, `created_at`, `updated_at`) VALUES
(1, 'G001', 'Golongan 12', 1000000, '2014-06-30 02:18:33', '2014-06-30 02:26:58');

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
(1, 'administrator', '{"admin":1}', '2014-06-29 01:06:31', '2014-06-29 01:06:31'),
(2, 'administrator-owner', '{"administrator-owner":1}', '2014-06-29 01:06:31', '2014-06-29 01:06:31'),
(3, 'marketing', '{"marketing":1}', '2014-06-29 01:06:31', '2014-06-29 01:06:31'),
(4, 'karyawan', '{"employer":1}', '2014-06-29 01:06:31', '2014-06-29 01:06:31');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
(1, 'JB001', 'Direkturs', 1000000, 1000000, 1000000, '2014-06-30 01:06:52', '2014-06-30 01:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `karyawans`
--

CREATE TABLE IF NOT EXISTS `karyawans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  ` kd_agama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_jab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_gol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_statuskawin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kd_karyawan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_depan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_belakang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jen_kel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_masuk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_keluar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `propinsi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kode_pos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_handphone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `npwp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
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
('2014_06_29_184537_create_statuses_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE IF NOT EXISTS `owners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `user_id`, `kd_perusahaan`, `kd_marketing`, `kd_owner`, `handphone`, `npwp`, `alamat`, `kota`, `propinsi`, `kode_pos`, `tanggal_daftar`, `tanggal_aktifasi`, `status`, `created_at`, `updated_at`) VALUES
(1, 100, 'PR001', NULL, 'OW001', '0802028082', '219892839283923', 'jogjakarta', 'jogjakarta', 'jogjakarta', '', '2014-07-01', NULL, 'pending', '2014-06-30 21:41:12', '2014-06-30 21:41:12');

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
-- Table structure for table `perusahaans`
--

CREATE TABLE IF NOT EXISTS `perusahaans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pkps`
--

CREATE TABLE IF NOT EXISTS `pkps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  ` kd_pkp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batas_pkp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tarif` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `potongans`
--

CREATE TABLE IF NOT EXISTS `potongans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  ` kd_potongan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_potongan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 3, '::1', 0, 0, 0, NULL, NULL, NULL),
(2, 1, '::1', 0, 0, 0, NULL, NULL, NULL),
(3, 2, '::1', 0, 0, 0, NULL, NULL, NULL);

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
(1, 'MK002', 'keterangan saja ok', 'IMG_0003.jpg', 'low', 'open', '2014-06-29 12:05:05', '2014-06-29 12:27:28'),
(2, 'MK001', 'adsasdada', NULL, 'low', 'open', '2014-06-29 12:27:57', '2014-06-29 12:27:57');

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
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$msvNJhLmRRbJ8Tb7UAdjI.75NXjScqsSm49N.t1VOmiAwSChXS8ma', NULL, 1, NULL, '2014-06-29 01:06:32', '2014-07-02 00:01:19', '$2y$10$D3T5ooGSJE8Hn9Y2mjIr1ef1IjMSFQU7R1UlSrTLaIDt61MLgq5S6', NULL, 'Administrator', 'Super', '2014-06-29 01:06:32', '2014-07-02 00:01:19'),
(2, 'admin.owner@gmail.com', '$2y$10$/WiDbRTO79USqTYRmCo3f.V5gT1qYu4PmbzUiaUWQ6xcW3ch.QqLi', NULL, 1, NULL, '2014-06-29 01:06:33', '2014-07-01 00:49:21', '$2y$10$aZtwhtl328B/sxZIvHUR2eunBJxghCXKoRMfULfqxhaGoqmkON6lC', NULL, 'Administrator', 'Owner', '2014-06-29 01:06:32', '2014-07-01 00:49:21'),
(3, 'marketing@gmail.com', '$2y$10$ygxGnrAO2We0hAx7a5fLte8UGJBXY8WEoTCOEkAeLs.JJfh.3hSUe', NULL, 1, NULL, '2014-06-29 01:06:33', '2014-07-01 23:22:05', '$2y$10$g6Q8omSgvwB6IU.QtPItcuLrCxfugDTlmQP9AGIFuQY69lGXfHFxO', NULL, 'Marketing', 'Smart', '2014-06-29 01:06:33', '2014-07-01 23:22:05'),
(4, 'karyawan@gmail.com', '$2y$10$CZTOo4p8qHuIhxF7w1.sBeUhK0aw/uEsi.Om1wT.V17pAsOfpflXC', NULL, 1, NULL, '2014-06-29 01:06:33', NULL, NULL, NULL, 'Karyawan', 'Smart', '2014-06-29 01:06:33', '2014-06-29 01:06:33'),
(8, 'ugm@outlook.com', '$2y$10$tRbv6yUgRHglRd3vrYaNAeVcDzHwzPeoVND0lAely1XZWOswjcf7G', NULL, 0, NULL, NULL, NULL, NULL, NULL, 'rizki', 'sabdono', '2014-07-01 01:13:27', '2014-07-01 01:13:27');

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
