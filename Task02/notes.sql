-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 02:27 PM
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
-- Database: `notes`
--
CREATE DATABASE IF NOT EXISTS `notes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `notes`;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `s.no` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`s.no`, `title`, `description`, `tstamp`) VALUES
(1, 'first ', 'hello there', '2023-06-27 16:31:56'),
(2, 'hi ', 'second time', '2023-06-27 16:42:23'),
(3, 'hi ', 'second time', '2023-06-27 16:43:50'),
(4, 'hi ', 'second time', '2023-06-27 16:49:59'),
(5, 'hi ', 'second time', '2023-06-27 16:52:55'),
(6, 'hi ', 'second time', '2023-06-27 17:03:24'),
(7, 'hi ', 'second time', '2023-06-27 17:05:24'),
(8, 'hi ', 'second time', '2023-06-27 17:12:05'),
(9, 'hi ', 'second time', '2023-06-27 17:22:11'),
(10, 'hi ', 'second time', '2023-06-27 17:22:51'),
(11, 'hi ', 'second time', '2023-06-27 17:23:16'),
(12, 'hi ', 'second time', '2023-06-27 17:24:00'),
(13, 'hi ', 'second time', '2023-06-27 17:24:51'),
(14, 'hi ', 'second time', '2023-06-27 17:25:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`s.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `s.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
