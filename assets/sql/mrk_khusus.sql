-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 16, 2019 at 08:21 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jpspro`
--

-- --------------------------------------------------------

--
-- Table structure for table `mrk_khusus`
--

CREATE TABLE `mrk_khusus` (
  `ks_id` int(11) NOT NULL,
  `ks_kscode` varchar(10) DEFAULT NULL,
  `ks_ksname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mrk_khusus`
--

INSERT INTO `mrk_khusus` (`ks_id`, `ks_kscode`, `ks_ksname`) VALUES
(1, 'CE 02', 'Pembinaan Jambatan & Jeti'),
(2, 'CE 04', ' Empangan'),
(3, 'CE 06', 'Struktur saliran, pengairan dan kawalan banjir'),
(4, 'CE 12', 'Kerja penyiasatan tanah'),
(5, 'CE 13', 'Pemasangan papan iklan'),
(6, 'CE 14', 'Landskap di luar bangunan'),
(7, 'CE 21', 'Pembinaan kejuruteraan awam'),
(8, 'CE 26', 'Struktur berukir (Sculptured structures)'),
(9, 'CE 32', 'Kerja-kerja penyenggaraan kejuruteraan awam'),
(10, 'CE 33', 'Telaga tiub'),
(11, 'CE 36', 'Kerja-kerja tanah'),
(12, 'M 01', 'Sistem hawa dingin dan pengedaran udara'),
(13, 'M 15', 'Kelengkapan mekanikal pelbagai'),
(14, 'M 20', 'Penyelengaraan am mekanikal'),
(15, 'M 20', 'Sistem pam'),
(16, 'M 23', 'Sistem SCADA dan telemetri'),
(17, 'E 02', 'Sistem pengawasan dan keselamatan'),
(18, 'E 07', 'Sistem telekomunikasi dalaman'),
(19, 'E 14', 'Kabel rangkaian komputer'),
(20, 'B 04', 'Kerja-kerja Pembinaan bangunan'),
(21, 'B 05', 'Kerja cerucuk'),
(22, 'B 07', 'Hiasan dalaman'),
(23, 'B 10', 'Sistem paip air dalaman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mrk_khusus`
--
ALTER TABLE `mrk_khusus`
  ADD PRIMARY KEY (`ks_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mrk_khusus`
--
ALTER TABLE `mrk_khusus`
  MODIFY `ks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
