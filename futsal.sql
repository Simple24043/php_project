-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 06:30 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futsal`
--

-- --------------------------------------------------------

--
-- Table structure for table `baneshwor`
--

CREATE TABLE `baneshwor` (
  `Timeperiod` varchar(7) DEFAULT NULL,
  `Sun` tinyint(1) DEFAULT NULL,
  `Mon` tinyint(1) DEFAULT NULL,
  `Tue` tinyint(1) DEFAULT NULL,
  `Wed` tinyint(1) DEFAULT NULL,
  `Thu` tinyint(1) DEFAULT NULL,
  `Fri` tinyint(1) DEFAULT NULL,
  `Sat` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baneshwor`
--

INSERT INTO `baneshwor` (`Timeperiod`, `Sun`, `Mon`, `Tue`, `Wed`, `Thu`, `Fri`, `Sat`) VALUES
('7-8', 0, 0, 0, 0, 0, 0, 0),
('8-9', 0, 0, 0, 0, 0, 0, 0),
('9-10', 0, 0, 0, 0, 0, 0, 0),
('10-11', 0, 0, 0, 0, 0, 0, 0),
('11-12', 0, 0, 0, 0, 0, 0, 0),
('12-1', 0, 0, 0, 0, 0, 0, 0),
('1-2', 0, 0, 0, 0, 0, 0, 0),
('2-3', 0, 0, 0, 0, 0, 0, 0),
('3-4', 0, 0, 0, 0, 0, 0, 0),
('4-5', 0, 0, 0, 0, 0, 0, 0),
('6-7', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chabhail`
--

CREATE TABLE `chabhail` (
  `Timeperiod` varchar(7) DEFAULT NULL,
  `Sun` tinyint(1) DEFAULT NULL,
  `Mon` tinyint(1) DEFAULT NULL,
  `Tue` tinyint(1) DEFAULT NULL,
  `Wed` tinyint(1) DEFAULT NULL,
  `Thu` tinyint(1) DEFAULT NULL,
  `Fri` tinyint(1) DEFAULT NULL,
  `Sat` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chabhail`
--

INSERT INTO `chabhail` (`Timeperiod`, `Sun`, `Mon`, `Tue`, `Wed`, `Thu`, `Fri`, `Sat`) VALUES
('7-8', 0, 0, 0, 0, 0, 0, 0),
('8-9', 0, 0, 0, 0, 0, 0, 0),
('9-10', 0, 0, 0, 0, 0, 0, 0),
('10-11', 0, 0, 0, 0, 0, 0, 0),
('11-12', 0, 0, 0, 0, 0, 0, 0),
('12-1', 0, 0, 0, 0, 0, 0, 0),
('1-2', 0, 0, 0, 0, 0, 0, 0),
('2-3', 0, 0, 0, 0, 0, 0, 0),
('3-4', 0, 0, 0, 0, 0, 0, 0),
('4-5', 0, 0, 0, 0, 0, 0, 0),
('6-7', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kapan`
--

CREATE TABLE `kapan` (
  `Timeperiod` varchar(7) DEFAULT NULL,
  `Sun` tinyint(1) DEFAULT NULL,
  `Mon` tinyint(1) DEFAULT NULL,
  `Tue` tinyint(1) DEFAULT NULL,
  `Wed` tinyint(1) DEFAULT NULL,
  `Thu` tinyint(1) DEFAULT NULL,
  `Fri` tinyint(1) DEFAULT NULL,
  `Sat` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kapan`
--

INSERT INTO `kapan` (`Timeperiod`, `Sun`, `Mon`, `Tue`, `Wed`, `Thu`, `Fri`, `Sat`) VALUES
('7-8', 0, 0, 0, 0, 0, 0, 0),
('8-9', 0, 0, 0, 0, 0, 0, 0),
('9-10', 0, 0, 0, 0, 0, 0, 0),
('10-11', 0, 0, 0, 0, 0, 0, 0),
('11-12', 0, 0, 0, 0, 0, 0, 0),
('12-1', 0, 0, 0, 0, 0, 0, 0),
('1-2', 0, 0, 0, 0, 0, 0, 0),
('2-3', 0, 0, 0, 0, 0, 0, 0),
('3-4', 0, 0, 0, 0, 0, 0, 0),
('4-5', 0, 0, 0, 0, 0, 0, 0),
('6-7', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `name` varchar(50) DEFAULT NULL,
  `day` varchar(10) DEFAULT NULL,
  `Timeperiod` varchar(7) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `branch` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(30) DEFAULT NULL,
  `user_contact` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `user_email`, `user_password`, `user_contact`) VALUES
(1, 'Pratyush Sapkota', 'sapkotapratyush78@gmail.com', 'pratyush', 1234532);

-- --------------------------------------------------------

--
-- Table structure for table `visiting`
--

CREATE TABLE `visiting` (
  `name` varchar(50) DEFAULT NULL,
  `day` varchar(10) DEFAULT NULL,
  `Timeperiod` varchar(7) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `branch` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pending`
--
ALTER TABLE `pending`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `visiting`
--
ALTER TABLE `visiting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visiting`
--
ALTER TABLE `visiting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
