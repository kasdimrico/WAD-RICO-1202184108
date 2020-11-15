-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 03:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul3_rico`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_table`
--

CREATE TABLE `event_table` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `mulai` time DEFAULT NULL,
  `berakhir` time DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `harga` bigint(20) DEFAULT NULL,
  `benefit` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_table`
--
ALTER TABLE `event_table`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
