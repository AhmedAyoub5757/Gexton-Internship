-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 05:08 PM
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
-- Database: `interntask9`
--
CREATE DATABASE IF NOT EXISTS `interntask9` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `interntask9`;

-- --------------------------------------------------------

--
-- Table structure for table `mytask9`
--

CREATE TABLE `mytask9` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mytask9`
--

INSERT INTO `mytask9` (`id`, `name`, `email`, `phone`, `address`, `city`, `created_at`) VALUES
(1, 'Ahmed Ayoub', 'kkayoub111@gmail.com', '03113115428', 'abc', 'Tando Allahyar', '2023-07-18 14:45:33'),
(2, 'ayoub', 'kkahmed5757@gmail.com', '03113115428', 'xyz', 'Tando Allahyar', '2023-07-18 14:46:07'),
(3, 'riaz', 'riaz@email.com', '000000000000', '124', 'Tando Allahyar', '2023-07-18 15:00:52'),
(4, 'hunain', 'hunain@abc.com', '888888888888', '12345', 'Hyderabad', '2023-07-18 15:01:33'),
(5, 'vinesh', 'vinesh@20.com', '202020200202', '20', 'Hyderabad', '2023-07-18 15:02:14'),
(6, 'deepak', 'deepak@22.com', '222222222222', '22 street', 'hyderabad', '2023-07-18 15:02:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mytask9`
--
ALTER TABLE `mytask9`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mytask9`
--
ALTER TABLE `mytask9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
