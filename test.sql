-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 01:02 PM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `kesehatan`
--

CREATE TABLE `kesehatan` (
  `id` int(11) NOT NULL,
  `eartag` varchar(11) NOT NULL,
  `sex` varchar(12) NOT NULL,
  `kedatangan` int(11) NOT NULL,
  `gejala` varchar(244) NOT NULL,
  `no_kandang` varchar(12) NOT NULL,
  `no_hospital` varchar(12) NOT NULL,
  `penyakit` varchar(64) NOT NULL,
  `nama_obat` varchar(64) NOT NULL,
  `jenis_obat` varchar(64) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kesehatan`
--

INSERT INTO `kesehatan` (`id`, `eartag`, `sex`, `kedatangan`, `gejala`, `no_kandang`, `no_hospital`, `penyakit`, `nama_obat`, `jenis_obat`, `tanggal_masuk`, `tanggal_keluar`) VALUES
(71, '171', 'Jantan', 143, 'asda', 'C3', 'H1', 'Asma', 'Paracetamol', 'Kapsul', '2022-08-26', '2022-08-27'),
(74, 'A574', 'Jantan', 5, 'Laper', 'C3', 'H1', '', '', '', '2022-08-18', '2022-08-22'),
(78, 'D678', 'Betina', 6, 'Depresi', 'C3', 'H1', '', '', '', '2022-09-01', '2022-09-14'),
(79, 'A+079', 'Jantan', 0, 'Mata Memerah', 'C3', 'D2', '', '', '', '1111-11-11', '2121-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `medicalrecord`
--

CREATE TABLE `medicalrecord` (
  `id` int(11) NOT NULL,
  `eartag` varchar(11) NOT NULL,
  `gejala` varchar(244) NOT NULL,
  `grade` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalrecord`
--

INSERT INTO `medicalrecord` (`id`, `eartag`, `gejala`, `grade`) VALUES
(71, '171', 'asda', 'D'),
(74, 'A574', 'Laper', 'A'),
(78, 'D678', 'Depresi', 'D'),
(79, 'A+079', 'Mata Memerah', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `pakan`
--

CREATE TABLE `pakan` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id` int(11) NOT NULL,
  `eartag` varchar(11) NOT NULL,
  `bobot` int(11) NOT NULL,
  `sex` varchar(12) NOT NULL,
  `grade` varchar(12) NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_sapi` varchar(64) NOT NULL,
  `kedatangan` int(11) NOT NULL,
  `gejala` varchar(244) NOT NULL,
  `no_kandang` varchar(12) NOT NULL,
  `no_hospital` varchar(12) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`id`, `eartag`, `bobot`, `sex`, `grade`, `umur`, `jenis_sapi`, `kedatangan`, `gejala`, `no_kandang`, `no_hospital`, `tanggal_masuk`, `tanggal_keluar`) VALUES
(71, '171', 85, 'Jantan', 'D', 5, 'White Brahman', 1, 'asda', 'C3', 'H1', '2022-08-26', '2022-08-27'),
(74, 'A574', 78, 'Jantan', 'A', 12, 'Galian Blonde', 5, 'Laper', 'C3', 'H1', '2022-08-18', '2022-08-22'),
(75, 'A+675', 450, 'Jantan', 'A+', 40, 'Belgian Blue', 6, 'Depresi', 'C1', 'H1', '2022-08-02', '2022-08-02'),
(77, 'A977', 450, 'Betina', 'A', 25, 'Belgian Blue', 9, 'Depresi', 'C1', 'H1', '2022-09-01', '2022-09-14'),
(78, 'D678', 500, 'Betina', 'D', 40, 'Belgian Blue', 6, 'Depresi', 'C3', 'H1', '2022-09-01', '2022-09-14'),
(79, 'A+079', 1, 'Jantan', 'A+', 0, 'Wagyu', 0, 'Mata Memerah', 'C3', 'D2', '1111-11-11', '2121-11-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicalrecord`
--
ALTER TABLE `medicalrecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakan`
--
ALTER TABLE `pakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemeriksaan_ibfk_1` (`eartag`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kesehatan`
--
ALTER TABLE `kesehatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `pakan`
--
ALTER TABLE `pakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD CONSTRAINT `kesehatan_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pemeriksaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kesehatan_ibfk_2` FOREIGN KEY (`id`) REFERENCES `medicalrecord` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
