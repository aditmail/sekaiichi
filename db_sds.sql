-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 03:23 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sds`
--

-- --------------------------------------------------------

--
-- Table structure for table `mt_jenis_pekerjaan`
--

CREATE TABLE `mt_jenis_pekerjaan` (
  `id_jenis_pekerjaan` varchar(65) NOT NULL,
  `id_tipe_pekerjaan` varchar(65) DEFAULT NULL,
  `tipe` varchar(250) NOT NULL,
  `jenis_pekerjaan` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `is_visible` varchar(50) NOT NULL,
  `datetime_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mt_jenis_pekerjaan`
--

INSERT INTO `mt_jenis_pekerjaan` (`id_jenis_pekerjaan`, `id_tipe_pekerjaan`, `tipe`, `jenis_pekerjaan`, `deskripsi`, `is_visible`, `datetime_created`) VALUES
('5e1dcf280f2b6', '5e199923dd414', 'Toilet', 'Membersihkan Septic Tank', 'Membersihkan Septic Tank sangat Sulid', 'True', '2020-01-14 21:24:40'),
('5e1dd229c6c36', NULL, 'Toilet', 'Testing Jenis Pekerjaan', 'Testing Jenis Pekerjaanss', 'True', '2020-01-14 21:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `mt_tipe_pekerjaan`
--

CREATE TABLE `mt_tipe_pekerjaan` (
  `id_tipe_pekerjaan` varchar(65) NOT NULL,
  `tipe` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `is_visible` varchar(50) NOT NULL DEFAULT 'True',
  `datetime_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mt_tipe_pekerjaan`
--

INSERT INTO `mt_tipe_pekerjaan` (`id_tipe_pekerjaan`, `tipe`, `deskripsi`, `is_visible`, `datetime_created`) VALUES
('5e198518e44c9', 'Toilet', 'Toilet adalah fasilitas sanitasi untuk tempat buang air besar dan kecil, tempat cuci tangan dan muka. Menurut Kamus Besar Bahasa Indonesia, sanitasi adalah usaha untuk membina dan menciptakan suatu keadaan yang baik di bidang kesehatan, terutama kesehatan masyarakat.', 'True', '2020-01-11 21:28:41'),
('5e19865817523', 'Taman', 'Taman merupakan areal yang berisikan komponen material keras dan lunak yang saling mendukung satu sama lainnya yang sengaja dibuat oleh manusia dalam kegunaanya sebagai tempat penyegar dalam dan luar ruangan. Taman dapat dibagi dalam taman alami dan taman buatan.', 'True', '2020-01-11 21:28:23'),
('5e198a5d76282', 'Parkiran', 'Parkir adalah keadaan tidak bergerak suatu kendaraan yang bersifat sementara karena ditinggalkan oleh pengemudinya. Secara hukum dilarang untuk parkir di tengah jalan raya; namun parkir di sisi jalan umumnya diperbolehkan.', 'False', '2020-01-11 21:27:09'),
('5e198a773959b', 'Rumahan', 'Pekerjaan rumahan bukanlah hal baru dan pekerja rumahan seringkali disebut sebagai \'pekerja sub-kontrak\' di Indonesia. Pekerjaan rumahan adalah suatu kegiatan yang dilakukan oleh keluarga, sebagian besar perempuan, dari generasi ke generasi, dengan nenek, ibu dan anak perempuan terlibat dalam pekerjaan rumahan.', 'False', '2020-01-11 21:28:06'),
('5e199923dd414', 'Jembatan', 'Jembatan adalah suatu struktur konstruksi yang berfungsi untuk menghubungkan dua bagian jalan yang terputus oleh adanya rintangan-rintangan seperti lembah yang dalam, alur sungai saluran irigasi dan pembuang . Jalan ini yang melintang yang tidak sebidang dan lain-lain', 'True', '2020-01-11 21:26:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mt_jenis_pekerjaan`
--
ALTER TABLE `mt_jenis_pekerjaan`
  ADD PRIMARY KEY (`id_jenis_pekerjaan`);

--
-- Indexes for table `mt_tipe_pekerjaan`
--
ALTER TABLE `mt_tipe_pekerjaan`
  ADD PRIMARY KEY (`id_tipe_pekerjaan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
