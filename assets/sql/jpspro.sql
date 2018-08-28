-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 06:44 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

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
-- Table structure for table `dp_gps`
--

CREATE TABLE `dp_gps` (
  `id` int(11) NOT NULL,
  `dp_lata` int(11) DEFAULT NULL,
  `dp_latb` int(11) DEFAULT NULL,
  `dp_latc` int(11) DEFAULT NULL,
  `dp_longa` int(11) DEFAULT NULL,
  `dp_longb` int(11) DEFAULT NULL,
  `dp_longc` int(11) DEFAULT NULL,
  `dp_sungai` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dp_sistem` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `dp_subsistem` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `dp_komponen` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `dp_dimensi` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `dp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `dp_projek`
--

CREATE TABLE `dp_projek` (
  `id` int(11) NOT NULL,
  `df_nosebutharga` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `df_tajuk` text COLLATE utf8_bin,
  `df_tarikmohon` date DEFAULT NULL,
  `df_jsebutharga` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `dp_projekinfo`
--

CREATE TABLE `dp_projekinfo` (
  `id` int(11) NOT NULL,
  `df_gred` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `df_katergori` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `df_khusus` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `df_taraf` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `df_tempohsiap` date DEFAULT NULL,
  `df_hargadoc` decimal(10,0) DEFAULT NULL,
  `df_tarikhnotis` date DEFAULT NULL,
  `df_tarikhlawat` date DEFAULT NULL,
  `df_tarikhdocmula` date DEFAULT NULL,
  `df_tarikhdocakhir` date DEFAULT NULL,
  `df_tarikhtutup` date DEFAULT NULL,
  `df_juruterad` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `df_jurutera` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `df_penolongkanan` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `df_penolong` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `df_kodvot` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `df_bakiperuntukan` decimal(10,0) DEFAULT NULL,
  `df_peruntukan` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `dp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dp_projek`
--
ALTER TABLE `dp_projek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dp_projekinfo`
--
ALTER TABLE `dp_projekinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dp_projek`
--
ALTER TABLE `dp_projek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dp_projekinfo`
--
ALTER TABLE `dp_projekinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
