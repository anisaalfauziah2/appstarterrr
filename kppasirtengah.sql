-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 08:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kppasirtengah`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospital_pen`
--

CREATE TABLE `hospital_pen` (
  `id_hospital_pen` varchar(11) NOT NULL,
  `jenis_hospital_pen` varchar(64) NOT NULL,
  `kapasitas_hospital_pen` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kandang_pen`
--

CREATE TABLE `kandang_pen` (
  `id_kandang_pen` varchar(11) NOT NULL,
  `jenis_kandang_pen` varchar(64) NOT NULL,
  `kapasitas_kandang_pen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` varchar(11) NOT NULL,
  `nama_obat` varchar(64) DEFAULT NULL,
  `jenis_obat` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(11) NOT NULL,
  `nama_pegawai` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id_pemeriksaan` varchar(11) DEFAULT NULL,
  `eartag` varchar(11) DEFAULT NULL,
  `id_hospital_pen` varchar(11) DEFAULT NULL,
  `id_pegawai` varchar(11) DEFAULT NULL,
  `id_penyakit` varchar(11) DEFAULT NULL,
  `id_obat` varchar(11) DEFAULT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penentuan_kandang`
--

CREATE TABLE `penentuan_kandang` (
  `eartag` varchar(11) DEFAULT NULL,
  `id_kandang_pen` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` varchar(11) NOT NULL,
  `nama_penyakit` varchar(64) DEFAULT NULL,
  `jenis_penyakit` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sapi`
--

CREATE TABLE `sapi` (
  `eartag` varchar(11) NOT NULL,
  `bobot` int(11) NOT NULL,
  `sex` varchar(24) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_sapi` varchar(64) NOT NULL,
  `kedatangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospital_pen`
--
ALTER TABLE `hospital_pen`
  ADD PRIMARY KEY (`id_hospital_pen`);

--
-- Indexes for table `kandang_pen`
--
ALTER TABLE `kandang_pen`
  ADD PRIMARY KEY (`id_kandang_pen`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD KEY `eartag` (`eartag`),
  ADD KEY `id_hospital_pen` (`id_hospital_pen`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indexes for table `penentuan_kandang`
--
ALTER TABLE `penentuan_kandang`
  ADD KEY `eartag` (`eartag`),
  ADD KEY `id_kandang_pen` (`id_kandang_pen`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `sapi`
--
ALTER TABLE `sapi`
  ADD PRIMARY KEY (`eartag`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD CONSTRAINT `eartag` FOREIGN KEY (`eartag`) REFERENCES `sapi` (`eartag`),
  ADD CONSTRAINT `pemeriksaan_ibfk_1` FOREIGN KEY (`id_hospital_pen`) REFERENCES `hospital_pen` (`id_hospital_pen`),
  ADD CONSTRAINT `pemeriksaan_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `pemeriksaan_ibfk_3` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`),
  ADD CONSTRAINT `pemeriksaan_ibfk_4` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`);

--
-- Constraints for table `penentuan_kandang`
--
ALTER TABLE `penentuan_kandang`
  ADD CONSTRAINT `penentuan_kandang_ibfk_1` FOREIGN KEY (`eartag`) REFERENCES `sapi` (`eartag`),
  ADD CONSTRAINT `penentuan_kandang_ibfk_2` FOREIGN KEY (`id_kandang_pen`) REFERENCES `kandang_pen` (`id_kandang_pen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
