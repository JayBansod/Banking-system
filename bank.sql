-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 04:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `current_amount` int(10) NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `email`, `current_amount`, `id`) VALUES
('jay', 'jay@gmail.com', 148436, 1),
('dipti', 'dipti@gmail.com', 199500, 2),
('sarang', 'sarang@gmail.com', 11464, 3),
('nakul', 'nakul@gamil.com', 2100, 4),
('prathmesh', 'prathmesh@gmail.com', 29900, 5),
('ashu', 'ashu2gmail.cpm', 9900, 6);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `no` int(3) NOT NULL,
  `money_from` varchar(50) NOT NULL,
  `money_to` varchar(50) NOT NULL,
  `amount` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`no`, `money_from`, `money_to`, `amount`) VALUES
(47, 'ashu', 'jay', 50),
(48, 'jay', 'dipti', 2312),
(53, 'jay', 'dipti', 30),
(54, 'dipti', 'jay', 231),
(55, 'dipti', 'nakul', 122),
(56, 'dipti', 'jay', 1),
(57, 'dipti', 'sarang', 122),
(61, 'dipti', 'ashu', 1000),
(67, 'sarang', 'dipti', 200),
(78, 'ashu', 'sarang', 100),
(79, 'jay', 'sarang', 100),
(80, 'jay', 'nakul', 100),
(81, 'jay', 'prathmesh', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
