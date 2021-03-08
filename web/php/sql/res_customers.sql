-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2021 at 03:12 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `res_customers`
--

CREATE TABLE `res_customers` (
  `customer_id` int(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `family` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `country` varchar(50) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `reservation_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `res_customers`
--

INSERT INTO `res_customers` (`customer_id`, `name`, `family`, `email`, `country`, `date_of_birth`, `reservation_time`) VALUES
(1, 'HOSSEIN', 'Hazratgholizadeh', 'hossein.hazratgholizade@gmail.com', 'Finland', NULL, '2021-03-05 02:16:16'),
(2, 'HOSSEIN', 'Hazratgholizadeh', 'hossein.hazratgholizade@gmail.com', 'Finland', NULL, '2021-03-05 02:18:53'),
(3, '', '', '', '', NULL, '2021-03-05 02:24:22'),
(4, '', '', '', '', NULL, '2021-03-05 02:27:11'),
(5, 'Ghazaleh', 'Nazarian', 'asdsdaa@asd.com', 'Iran', NULL, '2021-03-05 02:30:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `res_customers`
--
ALTER TABLE `res_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `res_customers`
--
ALTER TABLE `res_customers`
  MODIFY `customer_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
