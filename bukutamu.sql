-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 26, 2025 at 11:11 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('lulu', 'admin1'),
('admin2', 'admin123'),
('admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `no_pengunjung` int NOT NULL,
  `kode` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `no_hp` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_datang` time NOT NULL,
  `waktu_pulang` time DEFAULT NULL,
  `instansi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tujuan` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah` int NOT NULL,
  `jenis` enum('satuan','kelompok') COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`no_pengunjung`, `kode`, `nama`, `no_hp`, `tanggal`, `waktu_datang`, `waktu_pulang`, `instansi`, `tujuan`, `jumlah`, `jenis`) VALUES
(35, 'ZGKXCJ', 'yudi', '081261976531', '2025-12-19', '01:33:30', NULL, 'Singapura', 'Berkunjung', 1, 'satuan'),
(43, '63RUYX', 'Puja Davi', '0895678900', '2025-12-19', '13:36:40', '13:38:30', 'CEO ', 'ingin makan gratis', 1, 'satuan'),
(51, 'RT4CEJ', 'naya khairunnisa', '081261976531', '2025-12-19', '14:50:56', '15:00:25', 'Guru SMA', 'Keperluan pribadi', 1, 'satuan'),
(52, '6HVPC9', 'ririn', '08125012923', '2025-12-19', '15:03:47', '16:12:35', 'SMA 2', 'kegiatan', 3, 'kelompok'),
(53, '6KQG7F', 'zahwa', '081261976531', '2025-12-19', '16:05:09', '07:02:17', 'SMP', 'kegiatan', 1, 'satuan'),
(61, 'JS53XA', 'Lulu Khaira Yudita', '083333333333', '2025-12-21', '19:37:16', NULL, 'Politeknik', 'Event ', 1, 'satuan'),
(62, 'SFXZKH', 'Zahwa Aqila', '081111111111', '2025-12-21', '19:45:04', NULL, 'Politeknik', 'Event', 1, 'satuan'),
(63, 'QLCFZE', 'Ezra Merita Ringoringo', '082222222222', '2025-12-21', '19:47:45', '19:52:15', 'Poltek', 'Event', 12, 'kelompok'),
(64, 'AVCHYR', 'Ezra Merita Ringo Ringo', '082222222222', '2025-12-22', '09:26:25', '12:07:34', 'Poltek', 'Event', 1, 'satuan'),
(65, 'UYKVWR', 'Lulu Khaira Yudita', '083333333333', '2025-12-22', '09:28:27', NULL, 'Poltek', 'Observasi', 1, 'satuan'),
(66, 'FYQGRS', 'Zahwa Aqila', '081111111111', '2025-12-22', '12:07:22', NULL, 'PADANG', 'Poltek', 10, 'kelompok'),
(68, 'BR82TD', 'Ezra Merita', '082222222222', '2025-12-22', '14:41:29', NULL, 'Batam', 'Poltek', 10, 'kelompok'),
(69, '7FDXC3', 'Zahwa Aqila', '081111111111', '2025-12-22', '20:21:36', NULL, 'PADANG', 'Poltek', 10, 'kelompok'),
(70, 'XADFY6', 'gilang', '087654345678', '2025-12-23', '10:25:46', '10:25:58', 'Infiti', 'Wawancara', 1, 'satuan'),
(71, 'U6ABSH', 'gojo', '097543456786', '2025-12-23', '11:10:08', NULL, 'PT.random', 'Kunjungan kerja', 1, 'satuan'),
(72, '87EBDR', 'HGFCGX VBJ', '098765432456', '2025-12-23', '11:10:21', NULL, 'SMK', 'Konsultasi', 2, 'kelompok'),
(73, 'MANQ2W', 'SAWDEWD', '087654345678', '2025-12-23', '11:10:45', NULL, 'palembang', 'rapat', 1, 'satuan'),
(74, 'L6UWHN', 'ASD', '087654233333', '2025-12-23', '11:10:56', NULL, 'China', 'Event', 1, 'satuan'),
(83, 'NCMJSB', 'ERGTFGH', '098765432', '2025-12-23', '11:12:50', NULL, 'SDFTGY', 'SDFGT', 5, 'kelompok'),
(84, '7ZD2ML', 'WERFTF', '076543212345', '2025-12-23', '11:12:58', NULL, 'SD', 'FRGTYHGFD', 23, 'kelompok'),
(85, 'SDRXY8', 'WSDGTFHJU', '098765432123', '2025-12-23', '11:13:11', NULL, 'Palembnag', 'DFG', 1, 'satuan'),
(86, '68D4AK', 'RE', '086543234567', '2025-12-23', '11:13:19', NULL, 'Padang', 'DSF', 1, 'satuan'),
(88, '4PHYJZ', 'Ezra Merita Ringoringo', '098778909878', '2025-12-23', '18:12:34', NULL, 'SMA 20 Merangin', 'Event', 1, 'satuan'),
(89, 'KG4WLZ', 'Lulu', '081111111111', '2025-12-23', '21:23:04', NULL, 'ds', 'd', 1, 'satuan'),
(90, 'TN2WD7', 'Lulu ', '083333333333', '2025-12-24', '21:11:34', '21:29:21', 'SMK', 'Event', 1, 'satuan'),
(91, 'NZVC4H', 'EZRA', '082222222222', '2025-12-24', '21:11:52', NULL, 'JAMBI', 'EVENT', 20, 'kelompok'),
(92, 'YD5EKJ', 'Lulu khaira yudita', '083333333333', '2025-12-25', '17:57:31', '12:17:10', 'palembang', 'event', 1, 'satuan'),
(93, 'HVMZQY', 'Ezra Merita Ringoringo', '082222222222', '2025-12-25', '17:58:02', '14:35:17', 'Jambi', 'event', 10, 'kelompok'),
(94, 'EJ32HY', 'Zahwa aqila', '081111111111', '2025-12-25', '17:58:19', '14:35:07', 'Padang', 'Poltek', 1, 'satuan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`no_pengunjung`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `no_pengunjung` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
