-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 10:40 AM
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
-- Database: `interntask1`
--
CREATE DATABASE IF NOT EXISTS `interntask1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `interntask1`;

-- --------------------------------------------------------

--
-- Table structure for table `gextask1`
--

CREATE TABLE `gextask1` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gextask1`
--

INSERT INTO `gextask1` (`id`, `name`, `email`, `message`) VALUES
(1, 'Ahmed Ayoub', 'kkayoub111@gmail.com', 'hello this  is my first task'),
(2, 'Ahmed Ayoub', 'kkayoub111@gmail.com', 'hello this  is my first task'),
(3, '@hmed', 'kkahmed5757@gmail.co', 'hello this  is my first task ....');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gextask1`
--
ALTER TABLE `gextask1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gextask1`
--
ALTER TABLE `gextask1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
