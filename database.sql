-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2019 at 03:18 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mad`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktif`
--

CREATE TABLE `aktif` (
  `id` int(11) NOT NULL,
  `nama_pemesan` text NOT NULL,
  `ponsel_pemesan` text NOT NULL,
  `lokasi_penjemputan` text NOT NULL,
  `lat_penjemputan` varchar(500) NOT NULL,
  `lng_penjemputan` varchar(500) NOT NULL,
  `lokasi_tujuan` text NOT NULL,
  `lat_tujuan` varchar(500) NOT NULL,
  `lng_tujuan` varchar(500) NOT NULL,
  `nama_pengemudi` text NOT NULL,
  `ponsel_pengemudi` text NOT NULL,
  `motor_pengemudi` text NOT NULL,
  `nopol_pengemudi` text NOT NULL,
  `tarif` text NOT NULL,
  `jarak` text NOT NULL,
  `catatan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktif`
--

INSERT INTO `aktif` (`id`, `nama_pemesan`, `ponsel_pemesan`, `lokasi_penjemputan`, `lat_penjemputan`, `lng_penjemputan`, `lokasi_tujuan`, `lat_tujuan`, `lng_tujuan`, `nama_pengemudi`, `ponsel_pengemudi`, `motor_pengemudi`, `nopol_pengemudi`, `tarif`, `jarak`, `catatan`) VALUES
(1, 'Ahmad Zaenudin', '085956480043', 'Jalan Raya Limo', '106.7762568', '-6.3482339', 'Jalan Kemang Timur Raya', '106.823872', '-6.2664504', 'John Legend', '0888777666', 'Yamaha Mio', 'B7777XY', '3000', '14498', '');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `mangkal` text NOT NULL,
  `lat` varchar(500) NOT NULL,
  `lng` varchar(500) NOT NULL,
  `nama` text NOT NULL,
  `ponsel` text NOT NULL,
  `motor` text NOT NULL,
  `nopol` text NOT NULL,
  `tarif` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `id_kendaraan`, `mangkal`, `lat`, `lng`, `nama`, `ponsel`, `motor`, `nopol`, `tarif`) VALUES
(1, 12345, 'Jalan Kemang Timur Raya', '106.823872', '-6.2664504', 'Joko', '08555566667777', 'Honda BeAT', 'B1234XYZ', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `pemesan` text NOT NULL,
  `ponsel` text NOT NULL,
  `asal` text NOT NULL,
  `lat` varchar(500) NOT NULL,
  `lng` varchar(500) NOT NULL,
  `tujuan` text NOT NULL,
  `lat_tujuan` varchar(500) NOT NULL,
  `long_tujuan` varchar(500) NOT NULL,
  `jarak` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_pemesanan`, `pemesan`, `ponsel`, `asal`, `lat`, `lng`, `tujuan`, `lat_tujuan`, `long_tujuan`, `jarak`) VALUES
(1, 0, 'Admin', '', 'meruyung', '', '', 'margonda', '', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktif`
--
ALTER TABLE `aktif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktif`
--
ALTER TABLE `aktif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
