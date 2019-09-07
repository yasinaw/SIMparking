-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2019 at 01:53 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim_parkir`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mobil`
--

CREATE TABLE `data_mobil` (
  `id` bigint(20) NOT NULL,
  `plat_no` varchar(50) NOT NULL,
  `warna_mobil` int(11) NOT NULL,
  `tipe_mobil` int(11) NOT NULL,
  `parking_lot` varchar(50) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `jam_keluar` time NOT NULL,
  `biaya` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mobil`
--

INSERT INTO `data_mobil` (`id`, `plat_no`, `warna_mobil`, `tipe_mobil`, `parking_lot`, `tanggal_masuk`, `jam_masuk`, `tanggal_keluar`, `jam_keluar`, `biaya`, `status`) VALUES
(5, 'B 2873 MLK', 2, 2, 'A1', '2019-09-07', '15:26:51', '2019-09-07', '16:21:34', 35000, 1),
(6, 'B 3543 KZM', 4, 1, 'A2', '2019-09-07', '15:27:25', '2019-09-07', '16:35:12', 25000, 1),
(7, 'L 2313 MS', 9, 1, 'A1', '2019-09-07', '06:22:33', '2019-09-07', '16:37:01', 70000, 1),
(8, 'B 3233 MLP', 3, 2, 'A3', '2019-09-07', '09:22:33', '2019-09-07', '16:42:57', 77000, 1),
(9, 'B 1123 SJU', 3, 2, 'B1', '2019-09-07', '16:24:53', '2019-09-07', '16:42:43', 35000, 1),
(10, 'B 9999 RMS', 5, 2, 'B2', '2019-09-07', '16:25:56', '2019-09-07', '16:43:09', 35000, 1),
(11, 'B 3232 KKS', 3, 1, 'A1', '2019-09-07', '18:25:19', '0000-00-00', '00:00:00', 0, 0),
(12, 'L 4323 MD', 2, 2, 'A2', '2019-09-07', '18:29:25', '0000-00-00', '00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_tipe`
--

CREATE TABLE `data_tipe` (
  `id_tipe` int(11) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `jam_pertama` int(11) NOT NULL,
  `perjam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_tipe`
--

INSERT INTO `data_tipe` (`id_tipe`, `tipe`, `jam_pertama`, `perjam`) VALUES
(1, 'SUV', 25000, 5000),
(2, 'MPV', 35000, 7000),
(4, 'Truk', 90000, 18000);

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id`, `username`, `password`) VALUES
(1, 'pinkmanjha', 'tilulit');

-- --------------------------------------------------------

--
-- Table structure for table `data_warna`
--

CREATE TABLE `data_warna` (
  `id_warna` int(11) NOT NULL,
  `warna` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_warna`
--

INSERT INTO `data_warna` (`id_warna`, `warna`) VALUES
(1, 'Hitam'),
(2, 'Merah'),
(3, 'Putih'),
(4, 'Silver'),
(5, 'Abu-abu'),
(6, 'Hijau'),
(7, 'Biru'),
(8, 'Kuning'),
(9, 'Oranye'),
(10, 'Pink');

-- --------------------------------------------------------

--
-- Table structure for table `parking_lot`
--

CREATE TABLE `parking_lot` (
  `parking` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parking_lot`
--

INSERT INTO `parking_lot` (`parking`, `status`) VALUES
('A1', 1),
('A2', 1),
('A3', 0),
('B1', 0),
('B2', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mobil`
--
ALTER TABLE `data_mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_tipe`
--
ALTER TABLE `data_tipe`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_warna`
--
ALTER TABLE `data_warna`
  ADD PRIMARY KEY (`id_warna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_mobil`
--
ALTER TABLE `data_mobil`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `data_tipe`
--
ALTER TABLE `data_tipe`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_warna`
--
ALTER TABLE `data_warna`
  MODIFY `id_warna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
