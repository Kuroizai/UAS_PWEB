-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 05:58 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dbvaksin`
--

CREATE TABLE `dbvaksin` (
  `Nomor` int(255) NOT NULL,
  `Nama Daerah` varchar(60) NOT NULL,
  `Jumlah Penduduk` int(255) NOT NULL,
  `Jumlah Tervaksin` int(255) NOT NULL,
  `Jumlah Keluhan` int(255) NOT NULL,
  `Kode Pos` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbvaksin`
--

INSERT INTO `dbvaksin` (`Nomor`, `Nama Daerah`, `Jumlah Penduduk`, `Jumlah Tervaksin`, `Jumlah Keluhan`, `Kode Pos`) VALUES
(6, 'DUMMY', 5, 3, 0, 0),
(7, 'DUMMY', 5, 3, 0, 1),
(3, 'DUMMY', 1, 1, 0, 1111),
(4, 'DUMMY', 5, 2, 0, 1112),
(5, 'DUMMY', 5, 1, 0, 1114),
(2, 'Jember', 2406000, 500000, 248, 6811),
(1, 'Banyuwangi', 700000, 120000, 540, 68421);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbvaksin`
--
ALTER TABLE `dbvaksin`
  ADD PRIMARY KEY (`Kode Pos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
