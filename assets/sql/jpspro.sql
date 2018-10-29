-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 03:56 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

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

--
-- Dumping data for table `dp_gps`
--

INSERT INTO `dp_gps` (`id`, `dp_lata`, `dp_latb`, `dp_latc`, `dp_longa`, `dp_longb`, `dp_longc`, `dp_sungai`, `dp_sistem`, `dp_subsistem`, `dp_komponen`, `dp_dimensi`, `dp_id`) VALUES
(6, 2, 2, 2, 2, 2, 2, 'sp', 'SISTEM', 'SUB', 'KOM', 'DIM', 14),
(7, 0, 0, 0, 0, 0, 0, 'sp', 'SISTEM', 'SUB', 'KOM', 'DIM', 15),
(8, 343, 33, 44, 44, 33, 44, 'sp', 'SISTEM', 'SUB', 'KOM', 'DIM', 16),
(9, 0, 0, 0, 0, 0, 0, 'sp', 'SISTEM', 'SUB', 'KOM', 'DIM', 17);

-- --------------------------------------------------------

--
-- Table structure for table `dp_projek`
--

CREATE TABLE `dp_projek` (
  `id` int(11) NOT NULL,
  `df_nosebutharga` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `df_tarikmohon` date DEFAULT NULL,
  `df_jsebutharga` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `df_tajuk` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `df_daerah` varchar(25) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `dp_projek`
--

INSERT INTO `dp_projek` (`id`, `df_nosebutharga`, `df_tarikmohon`, `df_jsebutharga`, `df_tajuk`, `df_daerah`) VALUES
(14, 'JKTEST', '2018-10-04', 'Sebutharga', 'TAJUK PROJEK', 'Baling'),
(15, 'JKTES2', '2018-10-11', 'Sebutharga', 'TAJUK 2', 'Baling'),
(16, 'TESE', '2018-10-17', 'Lantikan Terus', 'J', 'Sik'),
(17, 'TES9', '2018-10-04', 'Sebutharga', 'TAJUK', 'Kuala Muda');

-- --------------------------------------------------------

--
-- Table structure for table `dp_projekinfo`
--

CREATE TABLE `dp_projekinfo` (
  `id` int(11) NOT NULL,
  `df_gred` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `df_kategori` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `df_khusus` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `df_taraf` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `df_tempohsiap` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `df_hargadoc` varchar(255) COLLATE utf8_bin DEFAULT NULL,
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
  `df_peruntukan` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `df_bakiperuntukan` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `dp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `dp_projekinfo`
--

INSERT INTO `dp_projekinfo` (`id`, `df_gred`, `df_kategori`, `df_khusus`, `df_taraf`, `df_tempohsiap`, `df_hargadoc`, `df_tarikhnotis`, `df_tarikhlawat`, `df_tarikhdocmula`, `df_tarikhdocakhir`, `df_tarikhtutup`, `df_juruterad`, `df_jurutera`, `df_penolongkanan`, `df_penolong`, `df_kodvot`, `df_peruntukan`, `df_bakiperuntukan`, `dp_id`) VALUES
(7, 'G1', 'B | Pembin', 'G', 'Bukan Bumi', '30', '12', '2018-10-10', '2018-10-20', '2018-10-18', '2018-10-17', '2018-10-24', 'Kamarudin Bin Saleh', 'G', 'G', 'G', '23NNADAF', 'persekutua', '12000', 14),
(8, 'G1', 'CE | Pembi', 'A', 'Bumiputera', '30', '12', '2018-11-01', '2018-10-12', '0000-00-00', '2018-10-18', '2018-10-10', 'Kamarudin Bin Saleh', 'MDB', 'MDB', 'MDB', '23NNADAF', 'persekutua', '12000', 15),
(9, 'G1', 'CE | Pembi', 'A', 'Bumiputera', '30', '12', '2018-10-12', '2018-10-12', '2018-10-13', '2018-10-06', '2018-10-12', 'Kamarudin Bin Saleh', 'MDB', 'MDB', 'MDB', 'K3223233', 'persekutua', '12000', 16),
(10, 'G3', 'CE | Pembi', 'A', 'Bukan Bumi', '30', '12', '2018-10-11', '2018-10-05', '2018-10-13', '2018-10-12', '0000-00-00', 'Idris B. Yussof', '', '', '', 'KLSD22222', 'persekutua', '12000', 17);

-- --------------------------------------------------------

--
-- Table structure for table `mrk_dua`
--

CREATE TABLE `mrk_dua` (
  `mrkduaid` int(11) NOT NULL,
  `mrk_majukerja` int(11) DEFAULT NULL,
  `mrk_majukerjasebenar` date DEFAULT NULL,
  `mrk_bayarmajusemasa` int(11) DEFAULT NULL,
  `mrk_jumlahbayarmaju` decimal(10,0) DEFAULT NULL,
  `mrk_masalah` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_sebaboleh` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_lainlain` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_lanjutmasa` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_dari` date DEFAULT NULL,
  `mrk_sehingga` date DEFAULT NULL,
  `mrk_disebab` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_ladsehari` decimal(10,0) DEFAULT NULL,
  `mrk_laddari` date DEFAULT NULL,
  `mrk_ladsehingga` date DEFAULT NULL,
  `mrk_perakukerjataksiap` date DEFAULT NULL,
  `mrk_projekmansuh` date DEFAULT NULL,
  `mrk_tarikhlaporan` date DEFAULT NULL,
  `mrksatu_id` int(11) DEFAULT NULL,
  `mrk2_noinden` varchar(150) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `mrk_jaminanbank`
--

CREATE TABLE `mrk_jaminanbank` (
  `id` int(11) NOT NULL,
  `mrk_rujukanbank` varchar(255) COLLATE utf8_bin NOT NULL,
  `mrk_namabank` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_alamatbank` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_tarikhmulatanggung` date DEFAULT NULL,
  `mrk_tarikhluputtanggung` date DEFAULT NULL,
  `mrk_namajurutera` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_jawatanjuru` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_namapem` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_alamatpem` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_jaminanbank`
--

INSERT INTO `mrk_jaminanbank` (`id`, `mrk_rujukanbank`, `mrk_namabank`, `mrk_alamatbank`, `mrk_tarikhmulatanggung`, `mrk_tarikhluputtanggung`, `mrk_namajurutera`, `mrk_jawatanjuru`, `mrk_namapem`, `mrk_alamatpem`) VALUES
(1, 'sdfsgdg', '', '', '0000-00-00', '0000-00-00', '', '', '', ''),
(2, 'grwtgtwrgrt', '', '', '0000-00-00', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mrk_laporansiap`
--

CREATE TABLE `mrk_laporansiap` (
  `lskid` int(11) NOT NULL,
  `lsk_noinden` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_lanjutmasa` date DEFAULT NULL,
  `lks_hargasebenar` decimal(10,0) DEFAULT NULL,
  `lsk_tarikhkerjasiap` date DEFAULT NULL,
  `lsk_peruntukan` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_laporanpegawai` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_pegawaipenyelia` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_jawatanpen` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_tarikhperakui` date NOT NULL,
  `lsk_ketuabahagian` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_jawatanketuab` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_juruteraj` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_jawatanjuruteraj` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_juruterad` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_jawatanjuruterad` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_perkeso` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lsk_liability` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lskmrksatuid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `mrk_perakuansiap`
--

CREATE TABLE `mrk_perakuansiap` (
  `id` int(11) NOT NULL,
  `mrk_pskinden` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `mrk_tarikhsiapsebenar` date DEFAULT NULL,
  `mrk_tarikhambikmilik` date DEFAULT NULL,
  `mrk_tarikhmulatanggungcacat` date DEFAULT NULL,
  `mrk_tarikhtamattanggungcacat` date DEFAULT NULL,
  `pskmrksatuid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `mrk_perakuansiapbaikicacat`
--

CREATE TABLE `mrk_perakuansiapbaikicacat` (
  `id` int(11) NOT NULL,
  `mrk_namapemb` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_alamatpem` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_failrujuk` varchar(255) COLLATE utf8_bin NOT NULL,
  `mrk_nokontrak` varchar(255) COLLATE utf8_bin NOT NULL,
  `mrk_tajukkerja` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_tarikhmulatanggung` date DEFAULT NULL,
  `mrk_tarikhsiapbaikicacat` date DEFAULT NULL,
  `mrk_gred` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `mrk_kategori` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `mrk_khusus` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `mrk_nowangjaminansatu` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_hargasatu` decimal(10,0) DEFAULT NULL,
  `mrk_bakiwangjamin` decimal(10,0) DEFAULT NULL,
  `mrk_nowangjaminandua` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_hargadua` decimal(10,0) DEFAULT NULL,
  `mrk_wangjaminlaksana` decimal(10,0) DEFAULT NULL,
  `mrk_tambahbonlaksana` decimal(10,0) DEFAULT NULL,
  `mrk_bakibonlaksana` decimal(10,0) DEFAULT NULL,
  `mrk_pegawaipenguasa` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_jawatanpp` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_perakuansiapbaikicacat`
--

INSERT INTO `mrk_perakuansiapbaikicacat` (`id`, `mrk_namapemb`, `mrk_alamatpem`, `mrk_failrujuk`, `mrk_nokontrak`, `mrk_tajukkerja`, `mrk_tarikhmulatanggung`, `mrk_tarikhsiapbaikicacat`, `mrk_gred`, `mrk_kategori`, `mrk_khusus`, `mrk_nowangjaminansatu`, `mrk_hargasatu`, `mrk_bakiwangjamin`, `mrk_nowangjaminandua`, `mrk_hargadua`, `mrk_wangjaminlaksana`, `mrk_tambahbonlaksana`, `mrk_bakibonlaksana`, `mrk_pegawaipenguasa`, `mrk_jawatanpp`) VALUES
(1, '', '', 'fgegg', 'rgegeg', '', '0000-00-00', '0000-00-00', 'G1 | Sehing', 'CE | Pembin', 'CE 02 | Pem', NULL, '0', '0', '', '0', '0', '0', '0', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `mrk_satu`
--

CREATE TABLE `mrk_satu` (
  `mrksatuid` int(11) NOT NULL,
  `mrk_nopkk` varchar(255) COLLATE utf8_bin NOT NULL,
  `mrk_gred` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_namakon` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_alamatkon` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_nokontrak` varchar(255) COLLATE utf8_bin NOT NULL,
  `mrk_noinden` varchar(255) COLLATE utf8_bin NOT NULL,
  `mrk_tajukkerja` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_kategori` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_daerah` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_negeri` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_khusus` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_tarikhmulakon` date DEFAULT NULL,
  `mrk_tarikhjangkasiap` date DEFAULT NULL,
  `mrk_pegawai` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_jawatan` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_kosprojek` decimal(10,0) DEFAULT NULL,
  `mrk_tarikh` date DEFAULT NULL,
  `mrksatu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_satu`
--

INSERT INTO `mrk_satu` (`mrksatuid`, `mrk_nopkk`, `mrk_gred`, `mrk_namakon`, `mrk_alamatkon`, `mrk_nokontrak`, `mrk_noinden`, `mrk_tajukkerja`, `mrk_kategori`, `mrk_daerah`, `mrk_negeri`, `mrk_khusus`, `mrk_tarikhmulakon`, `mrk_tarikhjangkasiap`, `mrk_pegawai`, `mrk_jawatan`, `mrk_kosprojek`, `mrk_tarikh`, `mrksatu_id`) VALUES
(16, 'PKKJPS1234', 'G1 | Sehingga RM200,000.00', 'ARAS VENTURES', 'NO, 218, BAKAR KAPUR', 'JKTEST', '23NNADAF', 'TAJUK PROJEK', 'CE | Pembinaan Kejuruteraan Awam', 'kuala muda', 'kedah', 'CE 12', '2017-11-15', '2017-12-12', 'Mohamad Ridzam B. Jusoh', 'Penolong Jurutera JA29', '3610927', '2017-11-15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mrk_suratkhas`
--

CREATE TABLE `mrk_suratkhas` (
  `id` int(11) NOT NULL,
  `mrk_rujuktuan` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mrk_rujukkami` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mrk_namakon` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `mrk_nosebutharga` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mrk_tajukkerja` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `mrk_gred` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `mek_kategori` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `mrk_khusus` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `mrk_pegawaikuasa` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `mrk_jawatanpp` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mrk_suratmrk`
--

CREATE TABLE `mrk_suratmrk` (
  `id` int(11) NOT NULL,
  `mrk_rujuktuan` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mrk_tarikhtuan` date DEFAULT NULL,
  `mrk_rujukkami` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mrk_jenisborang` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `mrk_namakon` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `mrk_nokon` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mrk_noinden` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mrk_pegawaikuasa` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `mrk_nosebutharga` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mrk_jawatanpp` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mrk_suratmrk`
--

INSERT INTO `mrk_suratmrk` (`id`, `mrk_rujuktuan`, `mrk_tarikhtuan`, `mrk_rujukkami`, `mrk_jenisborang`, `mrk_namakon`, `mrk_nokon`, `mrk_noinden`, `mrk_pegawaikuasa`, `mrk_nosebutharga`, `mrk_jawatanpp`) VALUES
(1, 'a', '2018-09-20', 'x', 'MRK 01', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mrk_suratwjp`
--

CREATE TABLE `mrk_suratwjp` (
  `id` int(11) NOT NULL,
  `mrk_kepada` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `mrk_rujuktuan` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mrk_alamat` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `mrk_rujukkami` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mrk_namakon` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `mrk_nokon` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mrk_melalui` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `mrk_wangjamin` decimal(10,0) DEFAULT NULL,
  `mrk_alamatlalu` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `mrk_pegawaikuasa` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `mrk_jawatanpp` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mrk_tiga`
--

CREATE TABLE `mrk_tiga` (
  `mrktigaid` int(11) NOT NULL,
  `mrksatutiga_id` int(11) DEFAULT NULL,
  `mrk_tigainden` varchar(150) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_tiga`
--

INSERT INTO `mrk_tiga` (`mrktigaid`, `mrksatutiga_id`, `mrk_tigainden`) VALUES
(1, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dp_gps`
--
ALTER TABLE `dp_gps`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `mrk_dua`
--
ALTER TABLE `mrk_dua`
  ADD PRIMARY KEY (`mrkduaid`);

--
-- Indexes for table `mrk_jaminanbank`
--
ALTER TABLE `mrk_jaminanbank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mrk_laporansiap`
--
ALTER TABLE `mrk_laporansiap`
  ADD PRIMARY KEY (`lskid`);

--
-- Indexes for table `mrk_perakuansiap`
--
ALTER TABLE `mrk_perakuansiap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mrk_perakuansiapbaikicacat`
--
ALTER TABLE `mrk_perakuansiapbaikicacat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mrk_satu`
--
ALTER TABLE `mrk_satu`
  ADD PRIMARY KEY (`mrksatuid`);

--
-- Indexes for table `mrk_suratkhas`
--
ALTER TABLE `mrk_suratkhas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mrk_suratmrk`
--
ALTER TABLE `mrk_suratmrk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mrk_suratwjp`
--
ALTER TABLE `mrk_suratwjp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mrk_tiga`
--
ALTER TABLE `mrk_tiga`
  ADD PRIMARY KEY (`mrktigaid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dp_gps`
--
ALTER TABLE `dp_gps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dp_projek`
--
ALTER TABLE `dp_projek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `dp_projekinfo`
--
ALTER TABLE `dp_projekinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mrk_dua`
--
ALTER TABLE `mrk_dua`
  MODIFY `mrkduaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mrk_jaminanbank`
--
ALTER TABLE `mrk_jaminanbank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mrk_laporansiap`
--
ALTER TABLE `mrk_laporansiap`
  MODIFY `lskid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mrk_perakuansiap`
--
ALTER TABLE `mrk_perakuansiap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mrk_perakuansiapbaikicacat`
--
ALTER TABLE `mrk_perakuansiapbaikicacat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mrk_satu`
--
ALTER TABLE `mrk_satu`
  MODIFY `mrksatuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mrk_suratkhas`
--
ALTER TABLE `mrk_suratkhas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mrk_suratmrk`
--
ALTER TABLE `mrk_suratmrk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mrk_suratwjp`
--
ALTER TABLE `mrk_suratwjp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mrk_tiga`
--
ALTER TABLE `mrk_tiga`
  MODIFY `mrktigaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
