-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 07, 2020 at 08:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

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

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `pg_id` int(11) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `ratings` int(5) NOT NULL,
  `forwhom` varchar(5) NOT NULL,
  `pricepm` int(5) NOT NULL,
  `address` varchar(100) NOT NULL,
  `images` varchar(200) NOT NULL,
  `owner_number` varchar(11) DEFAULT NULL,
  `ac_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`pg_id`, `owner_name`, `name`, `location`, `ratings`, `forwhom`, `pricepm`, `address`, `images`, `owner_number`, `ac_status`) VALUES
(1, 'Ram Kumar', 'Paradise', 'Delhi', 4, 'Boys', 4000, 'G-8, Rajouri Garden', 'paradise1,paradise2,paradise3,paradise4', '9354752373', 0),
(2, 'Kushdeep Walia', 'Mannat', 'Delhi', 5, 'Girls', 6000, 'B-Block, Mahipalpur', 'mannat1,mannat2,mannat3,mannat4', '9354752373', 0),
(3, 'Ajay Kumar', 'Taj', 'Delhi', 5, 'Girls', 6000, 'B-Block, Chirag Delhi', 'taj1,taj2,taj3,taj4', '9384752373', 1),
(4, 'Sunita', 'Google', 'Delhi', 5, 'Boys', 5000, 'B-Block, Janakpuri', 'google1,google2,google3,google4', '9384752398', 1);

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
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`pg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pgrequirer`
--
ALTER TABLE `pgrequirer`
  MODIFY `S.No.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `pg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
