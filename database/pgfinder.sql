-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 11:02 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pgfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `pgrequirer`
--

CREATE TABLE `pgrequirer` (
  `S.No.` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone Num` varchar(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pgrequirer`
--

INSERT INTO `pgrequirer` (`S.No.`, `Name`, `Phone Num`, `Email`, `Password`, `Address`) VALUES
(1, 'Kushdeep Singh', '9354752373', 'skushdeep5@gmail.com', '12345678', 'Janakpuri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pgrequirer`
--
ALTER TABLE `pgrequirer`
  ADD PRIMARY KEY (`S.No.`),
  ADD UNIQUE KEY `Phone Num` (`Phone Num`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pgrequirer`
--
ALTER TABLE `pgrequirer`
  MODIFY `S.No.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
