-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2023 at 09:11 AM
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
-- Database: `interntask8`
--
CREATE DATABASE IF NOT EXISTS `interntask8` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `interntask8`;

-- --------------------------------------------------------

--
-- Table structure for table `my_table`
--

CREATE TABLE `my_table` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `order_index` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `my_table`
--

INSERT INTO `my_table` (`id`, `name`, `order_index`) VALUES
(31, '2', 0),
(32, '5', 1),
(33, '4', 2),
(34, '1', 3),
(35, '3', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_table`
--
ALTER TABLE `my_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my_table`
--
ALTER TABLE `my_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
