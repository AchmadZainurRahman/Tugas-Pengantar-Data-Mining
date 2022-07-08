-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 07:53 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knnachmad`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataknn`
--

CREATE TABLE `dataknn` (
  `no` int(5) NOT NULL,
  `c1` int(4) NOT NULL,
  `c2` int(4) NOT NULL,
  `kategori` enum('Baik','Buruk') NOT NULL,
  `hitung` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataknn`
--

INSERT INTO `dataknn` (`no`, `c1`, `c2`, `kategori`, `hitung`) VALUES
(1, 3, 2, 'Baik', 0),
(2, 4, 1, 'Baik', 0),
(3, 4, 3, 'Baik', 0),
(4, 5, 1, 'Baik', 0),
(5, 5, 4, 'Baik', 0),
(6, 6, 5, 'Buruk', 0),
(7, 7, 6, 'Buruk', 0),
(8, 8, 4, 'Buruk', 0),
(9, 7, 2, 'Buruk', 0),
(10, 9, 1, 'Buruk', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataknn`
--
ALTER TABLE `dataknn`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataknn`
--
ALTER TABLE `dataknn`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
