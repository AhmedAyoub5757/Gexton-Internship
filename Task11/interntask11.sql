-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 07:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interntask11`
--
CREATE DATABASE IF NOT EXISTS `interntask11` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `interntask11`;

-- --------------------------------------------------------

--
-- Table structure for table `mymsgs`
--

CREATE TABLE `mymsgs` (
  `s.no` int(11) NOT NULL,
  `msg` text NOT NULL,
  `room` text NOT NULL,
  `ip` text NOT NULL,
  `stime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mymsgs`
--

INSERT INTO `mymsgs` (`s.no`, `msg`, `room`, `ip`, `stime`) VALUES
(6, 'hello first msg', 'test2', '::1', '2023-07-24 09:48:49'),
(7, 'hello second msg', 'test2', '::1', '2023-07-24 09:56:46'),
(8, 'ahmed', 'test2', '::1', '2023-07-24 09:59:44'),
(9, 'try', 'test2', '::1', '2023-07-24 10:01:28'),
(10, 'see you then', 'test2', '::1', '2023-07-24 10:28:37');

-- --------------------------------------------------------

--
-- Table structure for table `mytask11`
--

CREATE TABLE `mytask11` (
  `s.no` int(11) NOT NULL,
  `roomname` text NOT NULL,
  `stime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mytask11`
--

INSERT INTO `mytask11` (`s.no`, `roomname`, `stime`) VALUES
(1, 'room11', '2023-07-23 10:37:23'),
(2, 'ahmed', '2023-07-23 10:37:49'),
(3, 'hello', '2023-07-23 10:38:52'),
(4, 'riaz', '2023-07-23 11:05:10'),
(5, 'aa', '2023-07-23 11:05:19'),
(6, 'hunain', '2023-07-23 11:05:45'),
(7, 'fahad', '2023-07-23 11:09:32'),
(8, 'deepak', '2023-07-23 11:12:01'),
(9, 'vinesh', '2023-07-23 11:12:51'),
(10, 'user', '2023-07-23 11:18:30'),
(11, 'new', '2023-07-23 12:11:26'),
(12, 'aaa', '2023-07-23 12:12:19'),
(13, 'new123', '2023-07-23 12:14:23'),
(14, 'my', '2023-07-23 12:24:48'),
(15, 'my12', '2023-07-23 12:26:58'),
(16, 'test', '2023-07-23 13:27:09'),
(17, 'bhhhh', '2023-07-23 14:58:56'),
(18, 'test2', '2023-07-24 07:40:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mymsgs`
--
ALTER TABLE `mymsgs`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `mytask11`
--
ALTER TABLE `mytask11`
  ADD PRIMARY KEY (`s.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mymsgs`
--
ALTER TABLE `mymsgs`
  MODIFY `s.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mytask11`
--
ALTER TABLE `mytask11`
  MODIFY `s.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
