-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2018 at 06:10 AM
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
  `gps_id` int(11) NOT NULL,
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

INSERT INTO `dp_gps` (`gps_id`, `dp_lata`, `dp_latb`, `dp_latc`, `dp_longa`, `dp_longb`, `dp_longc`, `dp_sungai`, `dp_sistem`, `dp_subsistem`, `dp_komponen`, `dp_dimensi`, `dp_id`) VALUES
(11, 3, 3, 3, 3, 3, 3, 'SUNGAI', 'SISTEM', 'SUB', 'KOM', 'DIM', 20);

-- --------------------------------------------------------

--
-- Table structure for table `dp_projek`
--

CREATE TABLE `dp_projek` (
  `projek_id` int(11) NOT NULL,
  `df_nosebutharga` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `df_tarikmohon` date DEFAULT NULL,
  `df_jsebutharga` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `df_tajuk` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `df_daerah` varchar(25) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `dp_projek`
--

INSERT INTO `dp_projek` (`projek_id`, `df_nosebutharga`, `df_tarikmohon`, `df_jsebutharga`, `df_tajuk`, `df_daerah`) VALUES
(20, 'JKL/ST/201888/OP/200', '2018-11-07', 'Lantikan Terus', 'PROTECTIVE FUNCTION ANALOG MULTIMETER', 'Kuala Muda');

-- --------------------------------------------------------

--
-- Table structure for table `dp_projekinfo`
--

CREATE TABLE `dp_projekinfo` (
  `info_id` int(11) NOT NULL,
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

INSERT INTO `dp_projekinfo` (`info_id`, `df_gred`, `df_kategori`, `df_khusus`, `df_taraf`, `df_tempohsiap`, `df_hargadoc`, `df_tarikhnotis`, `df_tarikhlawat`, `df_tarikhdocmula`, `df_tarikhdocakhir`, `df_tarikhtutup`, `df_juruterad`, `df_jurutera`, `df_penolongkanan`, `df_penolong`, `df_kodvot`, `df_peruntukan`, `df_bakiperuntukan`, `dp_id`) VALUES
(12, 'G3', 'B | Pembin', 'CE23', 'Bukan Bumi', '3', '10', '2018-11-21', '2018-11-21', '2018-11-21', '2018-11-21', '2018-11-21', 'Zainuddin bin Yusoff, AMP., BCK', 'Nurul', 'A.A', 'A.A', 'JPS0001922', 'persekutua', '20.00', 20);

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
  `mrk2_noinden` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `mrk2_kodvots` varchar(150) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_dua`
--

INSERT INTO `mrk_dua` (`mrkduaid`, `mrk_majukerja`, `mrk_majukerjasebenar`, `mrk_bayarmajusemasa`, `mrk_jumlahbayarmaju`, `mrk_masalah`, `mrk_sebaboleh`, `mrk_lainlain`, `mrk_lanjutmasa`, `mrk_dari`, `mrk_sehingga`, `mrk_disebab`, `mrk_ladsehari`, `mrk_laddari`, `mrk_ladsehingga`, `mrk_perakukerjataksiap`, `mrk_projekmansuh`, `mrk_tarikhlaporan`, `mrksatu_id`, `mrk2_noinden`, `mrk2_kodvots`) VALUES
(1, 50, '2018-11-21', 50, '20', NULL, 'EMPANGAN BOCOR', 'DLL', '9', '2018-11-09', '2018-11-07', 'DO', '20', '2018-11-15', '2018-11-14', '2018-11-08', '2018-11-14', '2018-11-07', 18, '0002991882', 'JPS0001922');

-- --------------------------------------------------------

--
-- Table structure for table `mrk_jaminanbank`
--

CREATE TABLE `mrk_jaminanbank` (
  `id` int(11) NOT NULL,
  `mrk_rujukanbank` varchar(255) COLLATE utf8_bin NOT NULL,
  `mrk_namabank` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_alamatbank` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `js_mrkid` int(11) DEFAULT NULL,
  `js_kodvot` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `js_inden` varchar(150) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_jaminanbank`
--

INSERT INTO `mrk_jaminanbank` (`id`, `mrk_rujukanbank`, `mrk_namabank`, `mrk_alamatbank`, `js_mrkid`, `js_kodvot`, `js_inden`) VALUES
(2, 'RHB0021/2123', 'RHB BANK', 'TAMAN EMAS LUBUK', 18, 'JPS0001922', '0002991882');

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
  `lskmrksatuid` int(11) DEFAULT NULL,
  `lks_kodvots` varchar(150) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_laporansiap`
--

INSERT INTO `mrk_laporansiap` (`lskid`, `lsk_noinden`, `lsk_lanjutmasa`, `lks_hargasebenar`, `lsk_tarikhkerjasiap`, `lsk_peruntukan`, `lsk_laporanpegawai`, `lsk_pegawaipenyelia`, `lsk_jawatanpen`, `lsk_tarikhperakui`, `lsk_ketuabahagian`, `lsk_jawatanketuab`, `lsk_juruteraj`, `lsk_jawatanjuruteraj`, `lsk_juruterad`, `lsk_jawatanjuruterad`, `lsk_perkeso`, `lsk_liability`, `lskmrksatuid`, `lks_kodvots`) VALUES
(1, '0002991882', '2018-11-01', '326523', '2018-11-21', '002992/12393-211/0024', 'Laporan-Laporan Sekolah', 'Haji Shukri B. Man', 'Penolong Jurutera JA29', '2018-11-21', 'Yahaya B. Shariff', 'Penolong Jurutera JA29', 'Mohd. Daud Hamid', 'Penolong Jurutera JA29', 'Zainuddin bin Yusoff, AMP., BCK', 'Jurutera ( Baling )', 'PK2932PP', 'PL33922', 18, 'JPS0001922');

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
  `pskmrksatuid` int(11) DEFAULT NULL,
  `psk_kodvots` varchar(150) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_perakuansiap`
--

INSERT INTO `mrk_perakuansiap` (`id`, `mrk_pskinden`, `mrk_tarikhsiapsebenar`, `mrk_tarikhambikmilik`, `mrk_tarikhmulatanggungcacat`, `mrk_tarikhtamattanggungcacat`, `pskmrksatuid`, `psk_kodvots`) VALUES
(3, '0002991882', '2018-11-10', '2018-11-07', '2018-11-29', '2018-11-30', 18, 'JPS0001922');

-- --------------------------------------------------------

--
-- Table structure for table `mrk_perakuansiapbaikicacat`
--

CREATE TABLE `mrk_perakuansiapbaikicacat` (
  `id` int(11) NOT NULL,
  `mrk_nowangjaminansatu` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_hargasatu` decimal(10,0) DEFAULT NULL,
  `mrk_bakiwangjamin` decimal(10,0) DEFAULT NULL,
  `mrk_nowangjaminandua` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_hargadua` decimal(10,0) DEFAULT NULL,
  `mrk_wangjaminlaksana` decimal(10,0) DEFAULT NULL,
  `mrk_tambahbonlaksana` decimal(10,0) DEFAULT NULL,
  `mrk_bakibonlaksana` decimal(10,0) DEFAULT NULL,
  `mrk_pegawaipenguasa` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrk_jawatanpp` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mrkid_id` int(11) DEFAULT NULL,
  `psmk_kodvots` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `psmk_inden` varchar(150) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_perakuansiapbaikicacat`
--

INSERT INTO `mrk_perakuansiapbaikicacat` (`id`, `mrk_nowangjaminansatu`, `mrk_hargasatu`, `mrk_bakiwangjamin`, `mrk_nowangjaminandua`, `mrk_hargadua`, `mrk_wangjaminlaksana`, `mrk_tambahbonlaksana`, `mrk_bakibonlaksana`, `mrk_pegawaipenguasa`, `mrk_jawatanpp`, `mrkid_id`, `psmk_kodvots`, `psmk_inden`) VALUES
(4, 'JK/2093/SSS', '20', '20', 'JK/2093/SSS', '20', '50', '50', '50', 'Nama Pegawai', 'IR', 18, 'JPS0001922', '0002991882');

-- --------------------------------------------------------

--
-- Table structure for table `mrk_ppwjp`
--

CREATE TABLE `mrk_ppwjp` (
  `ppwjp_id` int(11) NOT NULL,
  `ppwjp_rt` varchar(150) DEFAULT NULL,
  `ppwjp_rk` varchar(150) DEFAULT NULL,
  `ppwjp_kepada` varchar(150) DEFAULT NULL,
  `ppwjp_alamat` text,
  `ppwjp_kos` decimal(10,0) DEFAULT NULL,
  `ppwjp_pegawai` varchar(150) DEFAULT NULL,
  `ppwjp_jawatan` varchar(150) DEFAULT NULL,
  `ppwjp_mrkid` int(11) DEFAULT NULL,
  `ppwjp_inden` varchar(150) DEFAULT NULL,
  `ppwjp_kodvot` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mrk_ppwjp`
--

INSERT INTO `mrk_ppwjp` (`ppwjp_id`, `ppwjp_rt`, `ppwjp_rk`, `ppwjp_kepada`, `ppwjp_alamat`, `ppwjp_kos`, `ppwjp_pegawai`, `ppwjp_jawatan`, `ppwjp_mrkid`, `ppwjp_inden`, `ppwjp_kodvot`) VALUES
(1, 'JPS/22/22/23312', 'JPS/22/22/23312', 'BANK NEGARA', 'DAMANSARA, KUALA LUMPUR', '37999', 'Idris Bin Yussof', 'Penolong Jurutera JA29', 18, '0002991882', 'JPS0001922');

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
  `mrksatu_id` int(11) NOT NULL,
  `mrks_kodvot` varchar(150) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_satu`
--

INSERT INTO `mrk_satu` (`mrksatuid`, `mrk_nopkk`, `mrk_gred`, `mrk_namakon`, `mrk_alamatkon`, `mrk_nokontrak`, `mrk_noinden`, `mrk_tajukkerja`, `mrk_kategori`, `mrk_daerah`, `mrk_negeri`, `mrk_khusus`, `mrk_tarikhmulakon`, `mrk_tarikhjangkasiap`, `mrk_pegawai`, `mrk_jawatan`, `mrk_kosprojek`, `mrk_tarikh`, `mrksatu_id`, `mrks_kodvot`) VALUES
(18, 'PKK299393', 'G1', 'RCS  SYSTEM COMPUTER', 'TAMAN DELIMA', 'JKL/ST/201888/OP/200', '0002991882', 'PROTECTIVE FUNCTION ANALOG MULTIMETER', 'CE', 'kuala muda', 'kedah', 'CE 02', '2018-11-07', '2018-11-14', 'Haji Shukri B. Man', 'Penolong Jurutera JA29', '576533', '2018-11-15', 0, 'JPS0001922');

-- --------------------------------------------------------

--
-- Table structure for table `mrk_ss`
--

CREATE TABLE `mrk_ss` (
  `ss_id` int(11) NOT NULL,
  `cb1` tinyint(1) DEFAULT NULL,
  `cb2` int(1) DEFAULT NULL,
  `cb3` tinyint(1) DEFAULT NULL,
  `cb4` tinyint(1) DEFAULT NULL,
  `cb5` tinyint(1) DEFAULT NULL,
  `cb6` tinyint(1) DEFAULT NULL,
  `cb7` tinyint(1) DEFAULT NULL,
  `cb8` tinyint(1) DEFAULT NULL,
  `cb9` tinyint(1) DEFAULT NULL,
  `cb10` tinyint(1) DEFAULT NULL,
  `cb11` tinyint(1) DEFAULT NULL,
  `cb12` tinyint(1) DEFAULT NULL,
  `cb13` tinyint(1) DEFAULT NULL,
  `cb14` tinyint(1) DEFAULT NULL,
  `cb15` tinyint(1) DEFAULT NULL,
  `cb16` tinyint(1) DEFAULT NULL,
  `cb17` tinyint(1) DEFAULT NULL,
  `cb18` tinyint(1) DEFAULT NULL,
  `ss_inden` varchar(150) DEFAULT NULL,
  `ss_mrkid` int(11) DEFAULT NULL,
  `ss_kodvot` varchar(150) DEFAULT NULL,
  `ss_disediakan` varchar(200) DEFAULT NULL,
  `ss_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mrk_ss`
--

INSERT INTO `mrk_ss` (`ss_id`, `cb1`, `cb2`, `cb3`, `cb4`, `cb5`, `cb6`, `cb7`, `cb8`, `cb9`, `cb10`, `cb11`, `cb12`, `cb13`, `cb14`, `cb15`, `cb16`, `cb17`, `cb18`, `ss_inden`, `ss_mrkid`, `ss_kodvot`, `ss_disediakan`, `ss_date`) VALUES
(48, 1, 1, 1, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, 1, 1, 1, 1, '0002991882', 18, 'JPS0001922', 'b', '2018-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `mrk_suratkhas`
--

CREATE TABLE `mrk_suratkhas` (
  `skhas_id` int(11) NOT NULL,
  `skhas_rujuktuan` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `skhas_pegawaikuasa` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `skhas_jawatanpp` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `skhas_inden` varchar(150) DEFAULT NULL,
  `skhas_kodvot` varchar(150) DEFAULT NULL,
  `skhas_mrkid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mrk_suratkhas`
--

INSERT INTO `mrk_suratkhas` (`skhas_id`, `skhas_rujuktuan`, `skhas_pegawaikuasa`, `skhas_jawatanpp`, `skhas_inden`, `skhas_kodvot`, `skhas_mrkid`) VALUES
(1, 'JPS/22/22/23312', 'Mohd. Amin B. Ahmad', 'Penolong Jurutera JA38', '0002991882', 'JPS0001922', 18);

-- --------------------------------------------------------

--
-- Table structure for table `mrk_suratmrk`
--

CREATE TABLE `mrk_suratmrk` (
  `id` int(11) NOT NULL,
  `s_rujuktuan` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `s_tarikhtuan` date DEFAULT NULL,
  `s_jenisborang` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `s_noinden` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `s_pegawaikuasa` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `s_jawatanpp` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `s_mrkid` int(11) DEFAULT NULL,
  `s_kodvot` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mrk_suratmrk`
--

INSERT INTO `mrk_suratmrk` (`id`, `s_rujuktuan`, `s_tarikhtuan`, `s_jenisborang`, `s_noinden`, `s_pegawaikuasa`, `s_jawatanpp`, `s_mrkid`, `s_kodvot`) VALUES
(3, 'JPS/22/22/23312', '2018-11-21', 'MRK 03', '0002991882', 'Nama jurutera', 'IR', 18, 'JPS0001922');

-- --------------------------------------------------------

--
-- Table structure for table `mrk_suratwjp`
--

CREATE TABLE `mrk_suratwjp` (
  `id` int(11) NOT NULL,
  `swjp_kepada` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `swjp_rujuktuan` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `swjp_alamat` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `swjp_melalui` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `swjp_wangjamin` decimal(10,0) DEFAULT NULL,
  `swjp_alamatlalu` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `swjp_pegawaikuasa` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `swjp_jawatanpp` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `swjp_inden` varchar(150) DEFAULT NULL,
  `swjp_kodvot` varchar(150) DEFAULT NULL,
  `swjp_mrkid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mrk_suratwjp`
--

INSERT INTO `mrk_suratwjp` (`id`, `swjp_kepada`, `swjp_rujuktuan`, `swjp_alamat`, `swjp_melalui`, `swjp_wangjamin`, `swjp_alamatlalu`, `swjp_pegawaikuasa`, `swjp_jawatanpp`, `swjp_inden`, `swjp_kodvot`, `swjp_mrkid`) VALUES
(1, 'KETUA AKAUNTAN', 'JPS/22/22/23312', 'JABATAN AKAUNTAN NEGERI KEDAH,\r\nALOR STAR.', 'PENGARAH', NULL, 'JABATAN AKAUNTAN NEGERI KEDAH DARUL AMAN,\r\nALOR STAR.', 'NAMA JURUTERA', 'IR', '0002991882', 'JPS0001922', 18);

-- --------------------------------------------------------

--
-- Table structure for table `mrk_tiga`
--

CREATE TABLE `mrk_tiga` (
  `mrktigaid` int(11) NOT NULL,
  `mrksatutiga_id` int(11) DEFAULT NULL,
  `mrk_tigainden` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `mrktiga_kodvots` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_bina` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_tadbir` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `tiga_kemajuan` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_kerangka` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_kerja` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_kemasan` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_luar` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_kontraktor` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_pegawai` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_jawatan` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_tarikah` date DEFAULT NULL,
  `tiga_catat1` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_catat2` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_catat3` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_catat4` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_catat5` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_catat6` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_catat7` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `tiga_catat8` varchar(150) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `mrk_tiga`
--

INSERT INTO `mrk_tiga` (`mrktigaid`, `mrksatutiga_id`, `mrk_tigainden`, `mrktiga_kodvots`, `tiga_bina`, `tiga_tadbir`, `tiga_kemajuan`, `tiga_kerangka`, `tiga_kerja`, `tiga_kemasan`, `tiga_luar`, `tiga_kontraktor`, `tiga_pegawai`, `tiga_jawatan`, `tiga_tarikah`, `tiga_catat1`, `tiga_catat2`, `tiga_catat3`, `tiga_catat4`, `tiga_catat5`, `tiga_catat6`, `tiga_catat7`, `tiga_catat8`) VALUES
(1, 18, '0002991882', 'JPS0001922', '90% - Keatas', '75% - 89%', '50% - 74%', '75% - 89%', '50% - 74%', '50% - 74%', '50% - 74%', '50% - 74%', 'TEST', 'IR', '2018-11-22', 'catat1', 'catat1gr', 'catat1', 'catat1', 'catat1', 'catat1', 'catat1', 'catat1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dp_gps`
--
ALTER TABLE `dp_gps`
  ADD PRIMARY KEY (`gps_id`);

--
-- Indexes for table `dp_projek`
--
ALTER TABLE `dp_projek`
  ADD PRIMARY KEY (`projek_id`);

--
-- Indexes for table `dp_projekinfo`
--
ALTER TABLE `dp_projekinfo`
  ADD PRIMARY KEY (`info_id`);

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
-- Indexes for table `mrk_ppwjp`
--
ALTER TABLE `mrk_ppwjp`
  ADD PRIMARY KEY (`ppwjp_id`);

--
-- Indexes for table `mrk_satu`
--
ALTER TABLE `mrk_satu`
  ADD PRIMARY KEY (`mrksatuid`);

--
-- Indexes for table `mrk_ss`
--
ALTER TABLE `mrk_ss`
  ADD PRIMARY KEY (`ss_id`);

--
-- Indexes for table `mrk_suratkhas`
--
ALTER TABLE `mrk_suratkhas`
  ADD PRIMARY KEY (`skhas_id`);

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
  MODIFY `gps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dp_projek`
--
ALTER TABLE `dp_projek`
  MODIFY `projek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `dp_projekinfo`
--
ALTER TABLE `dp_projekinfo`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mrk_dua`
--
ALTER TABLE `mrk_dua`
  MODIFY `mrkduaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mrk_jaminanbank`
--
ALTER TABLE `mrk_jaminanbank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mrk_laporansiap`
--
ALTER TABLE `mrk_laporansiap`
  MODIFY `lskid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mrk_perakuansiap`
--
ALTER TABLE `mrk_perakuansiap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mrk_perakuansiapbaikicacat`
--
ALTER TABLE `mrk_perakuansiapbaikicacat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mrk_ppwjp`
--
ALTER TABLE `mrk_ppwjp`
  MODIFY `ppwjp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mrk_satu`
--
ALTER TABLE `mrk_satu`
  MODIFY `mrksatuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mrk_ss`
--
ALTER TABLE `mrk_ss`
  MODIFY `ss_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `mrk_suratkhas`
--
ALTER TABLE `mrk_suratkhas`
  MODIFY `skhas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mrk_suratmrk`
--
ALTER TABLE `mrk_suratmrk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mrk_suratwjp`
--
ALTER TABLE `mrk_suratwjp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mrk_tiga`
--
ALTER TABLE `mrk_tiga`
  MODIFY `mrktigaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
