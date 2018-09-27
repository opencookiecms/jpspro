-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2018 at 09:20 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

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
(1, 9, 9, 9, 0, 0, 0, '', '', '', '', '', 1),
(2, 1, 1, 1, 1, 1, 1, 'Sik', 'Taktau', 'Tasik', 'Batu', 'Besi', 2),
(3, 2, 1, 4, 5, 3, 2, 'sp', 'a', 'AS', 'a', 'a', 3),
(4, 1, 1, 1, 0, 0, 0, '', '', '', '', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `dp_projek`
--

CREATE TABLE `dp_projek` (
  `id` int(11) NOT NULL,
  `df_nosebutharga` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `df_tarikmohon` date DEFAULT NULL,
  `df_jsebutharga` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `df_tajuk` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `dp_projek`
--

INSERT INTO `dp_projek` (`id`, `df_nosebutharga`, `df_tarikmohon`, `df_jsebutharga`, `df_tajuk`) VALUES
(1, 'BKK291/SH', '2018-09-07', 'wwwqd', 'lkoijio'),
(2, 'BKK291/SH/B/001', '2018-09-19', 'Tetap', 'Menanam ubi'),
(3, 'BKK291/SH/B/003', '2018-09-19', 'Sementara', 'Membersihkan rumah kucing'),
(4, 'BKK291/SH/007', '2018-08-29', 'wwwqd', ''),
(5, 'test', '2018-09-28', 'test', ''),
(6, 'BKK291/SH', '2018-09-13', 'Tetap', '');

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
(1, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', 'BH/K/S/21', 'negeri', '', 1),
(2, 'A', 'A', 'A', 'A', '2', '23', '2018-09-18', '2018-09-19', '2018-09-20', '2018-09-21', '2018-09-22', 'Ahmad', 'Abu', 'Ajis', 'Peah', 'BH/K/S/21', 'negeri', '2344', 2),
(3, 'C', 'D', 'S', 'A', '22', '23.00', '2018-09-19', '2018-09-20', '2018-09-21', '2018-09-22', '2018-09-23', 'AAferfe', 'Aefer', 'AAAfwef', 'Peah', 'BH/K/S/22', 'persekutua', '2344', 3),
(4, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', 'BH/K/S/21', 'negeri', '', 4),
(5, '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', 't', 'negeri', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mrk_dua`
--

CREATE TABLE `mrk_dua` (
  `id` int(11) NOT NULL,
  `mrk_nopkk` varchar(255) COLLATE utf8_bin NOT NULL,
  `mrk_namakon` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_noinden` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_kosprojek` decimal(10,0) DEFAULT NULL,
  `mrk_nokontrak` varchar(255) COLLATE utf8_bin NOT NULL,
  `mrk_tarikhmulakon` date DEFAULT NULL,
  `mrk_tarikhjangkasiap` date DEFAULT NULL,
  `mrk_tajukkerja` varchar(255) COLLATE utf8_bin DEFAULT NULL,
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
  `mrk_pegawai` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_jawatan` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_tarikhlaporan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_dua`
--

INSERT INTO `mrk_dua` (`id`, `mrk_nopkk`, `mrk_namakon`, `mrk_noinden`, `mrk_kosprojek`, `mrk_nokontrak`, `mrk_tarikhmulakon`, `mrk_tarikhjangkasiap`, `mrk_tajukkerja`, `mrk_majukerja`, `mrk_majukerjasebenar`, `mrk_bayarmajusemasa`, `mrk_jumlahbayarmaju`, `mrk_masalah`, `mrk_sebaboleh`, `mrk_lainlain`, `mrk_lanjutmasa`, `mrk_dari`, `mrk_sehingga`, `mrk_disebab`, `mrk_ladsehari`, `mrk_laddari`, `mrk_ladsehingga`, `mrk_perakukerjataksiap`, `mrk_projekmansuh`, `mrk_pegawai`, `mrk_jawatan`, `mrk_tarikhlaporan`) VALUES
(1, 'a', '', '', '0', '', '0000-00-00', '0000-00-00', '', 0, '0000-00-00', 0, '0', 'modal', NULL, '', '', '0000-00-00', '0000-00-00', '', '0', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '0000-00-00');

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
  `id` int(11) NOT NULL,
  `mrk_nopkk` varchar(255) COLLATE utf8_bin NOT NULL,
  `mrk_namapemb` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_alamatpemb` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_tajukkerja` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_nokontrak` varchar(255) COLLATE utf8_bin NOT NULL,
  `mrk_noinden` varchar(255) COLLATE utf8_bin NOT NULL,
  `mrk_hargapesanan` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `mrk_hargasebenar` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `mrk_tarikhmulakerja` date DEFAULT NULL,
  `mrk_tarikhkerjatamat` date DEFAULT NULL,
  `mrk_lanjutmasa` date DEFAULT NULL,
  `mrk_tarikhkerjasiap` date DEFAULT NULL,
  `mrk_peruntukan` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_laporanpegawai` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_pegawaipenyelia` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_jawatanpen` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_tarikhperakui` date NOT NULL,
  `mrk_ketuabahagian` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_jawatanketuab` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_juruteraj` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_jawatanjuruteraj` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_juruterad` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_jawatanjuruterad` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_perkeso` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_liability` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_laporansiap`
--

INSERT INTO `mrk_laporansiap` (`id`, `mrk_nopkk`, `mrk_namapemb`, `mrk_alamatpemb`, `mrk_tajukkerja`, `mrk_nokontrak`, `mrk_noinden`, `mrk_hargapesanan`, `mrk_hargasebenar`, `mrk_tarikhmulakerja`, `mrk_tarikhkerjatamat`, `mrk_lanjutmasa`, `mrk_tarikhkerjasiap`, `mrk_peruntukan`, `mrk_laporanpegawai`, `mrk_pegawaipenyelia`, `mrk_jawatanpen`, `mrk_tarikhperakui`, `mrk_ketuabahagian`, `mrk_jawatanketuab`, `mrk_juruteraj`, `mrk_jawatanjuruteraj`, `mrk_juruterad`, `mrk_jawatanjuruterad`, `mrk_perkeso`, `mrk_liability`) VALUES
(1, 'dsdsd', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 'Mohamad Ridzam B. Jusoh', 'Merinyu Taliair Kanan', '0000-00-00', 'Mohd. Amin B. Ahmad', 'Merinyu Taliair Kanan', 'Khairul Anuar B. Abd. Rashid', 'Merinyu Taliair Kanan', 'Idris B. Yussof', 'Merinyu Taliair Kanan', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mrk_perakuansiap`
--

CREATE TABLE `mrk_perakuansiap` (
  `id` int(11) NOT NULL,
  `mrk_namapemb` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_alamatpem` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_failrujuk` varchar(255) COLLATE utf8_bin NOT NULL,
  `mrk_nosebutharga` varchar(255) COLLATE utf8_bin NOT NULL,
  `mrk_butirankerja` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_tarikhsiapsebenar` date DEFAULT NULL,
  `mrk_tarikhambikmilik` date DEFAULT NULL,
  `mrk_tarikhmulatanggungcacat` date DEFAULT NULL,
  `mrk_tarikhtamattanggungcacat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_perakuansiap`
--

INSERT INTO `mrk_perakuansiap` (`id`, `mrk_namapemb`, `mrk_alamatpem`, `mrk_failrujuk`, `mrk_nosebutharga`, `mrk_butirankerja`, `mrk_tarikhsiapsebenar`, `mrk_tarikhambikmilik`, `mrk_tarikhmulatanggungcacat`, `mrk_tarikhtamattanggungcacat`) VALUES
(1, '', '', 'frgrgrg', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');

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
  `id` int(11) NOT NULL,
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
  `mrk_tarikh` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_satu`
--

INSERT INTO `mrk_satu` (`id`, `mrk_nopkk`, `mrk_gred`, `mrk_namakon`, `mrk_alamatkon`, `mrk_nokontrak`, `mrk_noinden`, `mrk_tajukkerja`, `mrk_kategori`, `mrk_daerah`, `mrk_negeri`, `mrk_khusus`, `mrk_tarikhmulakon`, `mrk_tarikhjangkasiap`, `mrk_pegawai`, `mrk_jawatan`, `mrk_kosprojek`, `mrk_tarikh`) VALUES
(1, 'a', 'g1', '', '', 'a', 'a', '', 'CE', 'kuala muda', 'kedah', 'CE 02', '0000-00-00', '0000-00-00', 'mr', 'mtk', '0', '0000-00-00'),
(2, 'saas', 'g4', 'dsasd', '1488, Jalan Mutiara, 6/6, Taman Mutiara, 09700 Karangan Kedah', 'sdasda', 'sdsadas', 'dsadad', 'B', 'kuala muda', 'kedah', 'M 01', '2018-09-20', '2018-09-20', 'o', 'jb', '21', '2018-09-08'),
(3, 'BSH/11', 'g2', 'Abu', '1488, Jalan Mutiara, 6/6, Taman Mutiara, 09700 Karangan Kedah', '12212', '2121212', 'Tanam Ubi', 'B', 'baling', 'kedah', 'CE 02', '2018-09-21', '2018-09-21', 'mr', 'mtk', '120', '2018-09-15'),
(4, 'BSH/11/S', 'G2 | RM200,001.00 Hingga RM500,000.00', 'Abu', '1488, Jalan Mutiara, 6/6, Taman Mutiara, 09700 Karangan Kedah', '12212QWQE', 'QEQWE', 'E', 'ME | Mekanikal & Elektrikal', 'kuala muda', 'kedah', 'CE 14', '0000-00-00', '2018-09-13', 'Mohamad Ridzam B. Jusoh', 'Jurutera ( Kuala Muda/Sik )', '21', '2018-09-07'),
(5, 'BSH/11/S/B', 'G3 | RM500,001.00 Hingga RM1 000,000.00', 'Alyya Izzati', 'Taman Delima', 'BSH/12/DLM/21', 'IM12213', 'Membina empangan', 'CE | Pembinaan Kejuruteraan Awam', 'kuala muda', 'kedah', 'CE 02', '2018-09-13', '2018-09-14', 'Mohamad Ridzam B. Jusoh', 'Jurutera ( Kuala Muda/Sik )', '12', '2018-09-14');

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
  `id` int(11) NOT NULL,
  `mrk_nopkk` varchar(255) COLLATE utf8_bin NOT NULL,
  `mrk_namakon` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_nokontrak` varchar(255) COLLATE utf8_bin NOT NULL,
  `mrk_noinden` varchar(255) COLLATE utf8_bin NOT NULL,
  `mrk_tajukkerja` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_tarikhmulakon` date DEFAULT NULL,
  `mrk_tarikhjangkasiap` date DEFAULT NULL,
  `mrk_lanjutmasa` date DEFAULT NULL,
  `mrk_siapsebenar` date DEFAULT NULL,
  `mrk_kosprojek` decimal(10,0) DEFAULT NULL,
  `mrk_kossebenar` decimal(10,0) DEFAULT NULL,
  `mrk_laddari` date DEFAULT NULL,
  `mrk_ladsehingga` date DEFAULT NULL,
  `mrk_ladsehari` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_tiga`
--

INSERT INTO `mrk_tiga` (`id`, `mrk_nopkk`, `mrk_namakon`, `mrk_nokontrak`, `mrk_noinden`, `mrk_tajukkerja`, `mrk_tarikhmulakon`, `mrk_tarikhjangkasiap`, `mrk_lanjutmasa`, `mrk_siapsebenar`, `mrk_kosprojek`, `mrk_kossebenar`, `mrk_laddari`, `mrk_ladsehingga`, `mrk_ladsehari`) VALUES
(1, 'dwefdwef', '', 'wefwef', 'fwefwef', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0000-00-00', '0000-00-00', '0');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mrk_jaminanbank`
--
ALTER TABLE `mrk_jaminanbank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mrk_laporansiap`
--
ALTER TABLE `mrk_laporansiap`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dp_gps`
--
ALTER TABLE `dp_gps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dp_projek`
--
ALTER TABLE `dp_projek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dp_projekinfo`
--
ALTER TABLE `dp_projekinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mrk_dua`
--
ALTER TABLE `mrk_dua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mrk_jaminanbank`
--
ALTER TABLE `mrk_jaminanbank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mrk_laporansiap`
--
ALTER TABLE `mrk_laporansiap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
