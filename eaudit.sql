-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2018 at 12:58 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eaudit`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_hakakses`
--

CREATE TABLE `data_hakakses` (
  `id` int(25) NOT NULL,
  `id_user` varchar(25) NOT NULL,
  `id_unit` varchar(25) NOT NULL,
  `Tanggal_hak_akses` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_unit`
--

CREATE TABLE `data_unit` (
  `id_unit` varchar(25) NOT NULL,
  `nama_unit` varchar(25) NOT NULL,
  `induk_unit` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `Username` varchar(25) NOT NULL,
  `Fullname` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_perjalanandinas`
--

CREATE TABLE `detail_perjalanandinas` (
  `id_detail` int(50) NOT NULL,
  `id_master` int(100) NOT NULL,
  `nama_maskapai` varchar(15) NOT NULL,
  `nomor_tiket` varchar(10) NOT NULL,
  `flight_number` varchar(15) NOT NULL,
  `origin` varchar(25) NOT NULL,
  `ticket_class` varchar(15) NOT NULL,
  `destination` varchar(25) NOT NULL,
  `harga_total` int(20) NOT NULL,
  `best_fare` int(20) NOT NULL,
  `status_audit` varchar(15) NOT NULL,
  `tanggal_keberangkatan` date NOT NULL,
  `keterangan_audit` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_tax`
--

CREATE TABLE `detail_tax` (
  `id_detail` int(50) NOT NULL,
  `id_master` int(100) NOT NULL,
  `NIP` int(20) NOT NULL,
  `golongan` varchar(10) NOT NULL,
  `penghasilan` int(20) NOT NULL,
  `pajak` int(20) NOT NULL,
  `tanggal_penerimaanpenghasilan` date NOT NULL,
  `status_audit` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `periode` varchar(25) NOT NULL,
  `belum_validasi` int(11) NOT NULL,
  `tidak_valid` int(11) NOT NULL,
  `valid` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_perjalanandinas`
--

CREATE TABLE `master_perjalanandinas` (
  `id_master` int(100) NOT NULL,
  `id_unit` varchar(25) NOT NULL,
  `tanggal_input` date NOT NULL,
  `id_user` varchar(25) NOT NULL,
  `tahun_periodeaudit` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_recruitment`
--

CREATE TABLE `master_recruitment` (
  `id_master` varchar(15) NOT NULL,
  `id_unit` varchar(25) DEFAULT NULL,
  `periode_recruitment` varchar(15) DEFAULT NULL,
  `tanggal_awal` date DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  `daya_tampungtotal` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_tax`
--

CREATE TABLE `master_tax` (
  `id_mastertax` int(100) NOT NULL,
  `id_unit` varchar(25) NOT NULL,
  `tanggal_input` date NOT NULL,
  `id_user` varchar(25) NOT NULL,
  `tahun_periodeaudit` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `realisasi_pendapatan`
--

CREATE TABLE `realisasi_pendapatan` (
  `id_realisasipendapatan` varchar(15) NOT NULL,
  `id_rencana` varchar(15) NOT NULL,
  `tahun` year(4) DEFAULT NULL,
  `triwulanke` varchar(15) DEFAULT NULL,
  `jenis_pendapatan` varchar(15) DEFAULT NULL,
  `jumlah_pendapatan` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `realisasi_recruitment`
--

CREATE TABLE `realisasi_recruitment` (
  `id_detail` varchar(15) NOT NULL,
  `id_master` varchar(15) DEFAULT NULL,
  `NIK` int(16) DEFAULT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `nilai` varchar(10) DEFAULT NULL,
  `formasi` varchar(15) DEFAULT NULL,
  `status_audit` varchar(15) DEFAULT NULL,
  `hasil_audit` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rencana_pendapatan`
--

CREATE TABLE `rencana_pendapatan` (
  `id_rencanapendapatan` varchar(15) NOT NULL,
  `tahun` int(5) DEFAULT NULL,
  `id_unit` varchar(25) DEFAULT NULL,
  `triwulanke` varchar(15) DEFAULT NULL,
  `jenis_pendapatan` varchar(15) DEFAULT NULL,
  `jumlah_pendapatan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_hakakses`
--
ALTER TABLE `data_hakakses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `f_unit` (`id_unit`),
  ADD KEY `f_user` (`id_user`);

--
-- Indexes for table `data_unit`
--
ALTER TABLE `data_unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `detail_perjalanandinas`
--
ALTER TABLE `detail_perjalanandinas`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `Fmaster_perjalananDinas` (`id_master`);

--
-- Indexes for table `detail_tax`
--
ALTER TABLE `detail_tax`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `Fmaster_tax` (`id_master`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`periode`);

--
-- Indexes for table `master_perjalanandinas`
--
ALTER TABLE `master_perjalanandinas`
  ADD PRIMARY KEY (`id_master`),
  ADD KEY `f_unit3` (`id_unit`),
  ADD KEY `f_user2` (`id_user`);

--
-- Indexes for table `master_recruitment`
--
ALTER TABLE `master_recruitment`
  ADD PRIMARY KEY (`id_master`),
  ADD KEY `f_unit2` (`id_unit`);

--
-- Indexes for table `master_tax`
--
ALTER TABLE `master_tax`
  ADD PRIMARY KEY (`id_mastertax`),
  ADD KEY `f_unit4` (`id_unit`),
  ADD KEY `f_user3` (`id_user`);

--
-- Indexes for table `realisasi_pendapatan`
--
ALTER TABLE `realisasi_pendapatan`
  ADD PRIMARY KEY (`id_realisasipendapatan`),
  ADD KEY `f_rencana` (`id_rencana`);

--
-- Indexes for table `realisasi_recruitment`
--
ALTER TABLE `realisasi_recruitment`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `f_recruitment` (`id_master`);

--
-- Indexes for table `rencana_pendapatan`
--
ALTER TABLE `rencana_pendapatan`
  ADD PRIMARY KEY (`id_rencanapendapatan`),
  ADD KEY `f_unit5` (`id_unit`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_hakakses`
--
ALTER TABLE `data_hakakses`
  ADD CONSTRAINT `f_unit` FOREIGN KEY (`id_unit`) REFERENCES `data_unit` (`id_unit`) ON UPDATE CASCADE,
  ADD CONSTRAINT `f_user` FOREIGN KEY (`id_user`) REFERENCES `data_user` (`Username`) ON UPDATE CASCADE;

--
-- Constraints for table `detail_perjalanandinas`
--
ALTER TABLE `detail_perjalanandinas`
  ADD CONSTRAINT `Fmaster_perjalananDinas` FOREIGN KEY (`id_master`) REFERENCES `master_perjalanandinas` (`id_master`) ON UPDATE CASCADE;

--
-- Constraints for table `detail_tax`
--
ALTER TABLE `detail_tax`
  ADD CONSTRAINT `Fmaster_tax` FOREIGN KEY (`id_master`) REFERENCES `master_tax` (`id_mastertax`) ON UPDATE CASCADE;

--
-- Constraints for table `master_perjalanandinas`
--
ALTER TABLE `master_perjalanandinas`
  ADD CONSTRAINT `f_unit3` FOREIGN KEY (`id_unit`) REFERENCES `data_unit` (`id_unit`) ON UPDATE CASCADE,
  ADD CONSTRAINT `f_user2` FOREIGN KEY (`id_user`) REFERENCES `data_user` (`Username`) ON UPDATE CASCADE;

--
-- Constraints for table `master_recruitment`
--
ALTER TABLE `master_recruitment`
  ADD CONSTRAINT `f_unit2` FOREIGN KEY (`id_unit`) REFERENCES `data_unit` (`id_unit`);

--
-- Constraints for table `master_tax`
--
ALTER TABLE `master_tax`
  ADD CONSTRAINT `f_unit4` FOREIGN KEY (`id_unit`) REFERENCES `data_unit` (`id_unit`) ON UPDATE CASCADE,
  ADD CONSTRAINT `f_user3` FOREIGN KEY (`id_user`) REFERENCES `data_user` (`Username`) ON UPDATE CASCADE;

--
-- Constraints for table `realisasi_pendapatan`
--
ALTER TABLE `realisasi_pendapatan`
  ADD CONSTRAINT `f_rencana` FOREIGN KEY (`id_rencana`) REFERENCES `rencana_pendapatan` (`id_rencanapendapatan`) ON UPDATE CASCADE;

--
-- Constraints for table `realisasi_recruitment`
--
ALTER TABLE `realisasi_recruitment`
  ADD CONSTRAINT `f_recruitment` FOREIGN KEY (`id_master`) REFERENCES `master_recruitment` (`id_master`) ON UPDATE CASCADE;

--
-- Constraints for table `rencana_pendapatan`
--
ALTER TABLE `rencana_pendapatan`
  ADD CONSTRAINT `f_unit5` FOREIGN KEY (`id_unit`) REFERENCES `data_unit` (`id_unit`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
