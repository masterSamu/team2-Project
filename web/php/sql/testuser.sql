-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 10, 2021 at 11:37 AM
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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `bdate` date NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `fname`, `lname`, `email`, `tel`, `bdate`, `country`, `created_at`) VALUES
(1, 'asd', 'asd', 'asd@asd.co', '156164', '2020-12-11', NULL, '2021-02-18 05:45:32'),
(2, 'Lia', 'Atashkar', 'asdsdaa@asd.com', '0534836461', '2021-03-03', 'Finland', '2021-03-08 17:05:57'),
(3, 'Hossein', 'Ghasemi', 'asdsdaa@asd.com', '05484684640', '2021-03-01', 'Iran', '2021-03-08 17:13:39'),
(4, 'HOSSEIN', 'Hazratgholizadeh', 'asdsdaa@asd.com', '0836461', '2021-03-06', 'Iran', '2021-03-08 17:16:07'),
(5, 'HOSSEIN', 'Hazratgholizadeh', 'asdsdaa@asd.com', '0836461', '2021-03-06', 'Iran', '2021-03-08 17:18:05'),
(6, 'HOSSEIN', 'Hazratgholizadeh', 'asdsdaa@asd.com', '0836461', '2021-03-06', 'Iran', '2021-03-08 17:18:28'),
(7, 'Ghazaleh', 'Naz', 'sadcvfdv@gmail.com', '0484845640', '2020-12-09', 'Iran', '2021-03-08 17:19:49'),
(8, 'Jack', 'Morfi', 'jack@gmail.com', '02659590', '2021-03-01', 'USA', '2021-03-08 17:23:36'),
(9, 'jams', 'jams', 'james@kdhf.com', '0212654980', '2021-03-03', 'UK', '2021-03-08 17:25:04'),
(10, 'HOSSEIN', 'Hazratgholizadeh', 'hossein.hazratgholizade@gmail.com', '083646154598', '2021-03-02', 'Finland', '2021-03-08 17:33:13'),
(11, 'Ghazaleh', 'dsg', 'sadcvfdv@gmail.com', '045548622', '2021-03-03', 'Iran', '2021-03-08 17:35:51');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(15) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `family` varchar(50) NOT NULL,
  `arrive_date` date NOT NULL,
  `departure_date` date NOT NULL,
  `adults_num` int(11) NOT NULL,
  `child_num` int(11) NOT NULL,
  `extra_services` varchar(250) DEFAULT NULL,
  `room_type` varchar(50) NOT NULL,
  `total_price` varchar(20) DEFAULT NULL,
  `reservation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `name`, `family`, `arrive_date`, `departure_date`, `adults_num`, `child_num`, `extra_services`, `room_type`, `total_price`, `reservation_date`) VALUES
(1, '', '', '2021-03-08', '2021-03-10', 3, 1, 'Array', '', '', '2021-03-05 02:27:11'),
(2, 'Ghazaleh', 'Nazarian', '2021-03-06', '2021-03-09', 3, 2, 'Array', '', '', '2021-03-05 02:30:03'),
(3, 'Lia', 'Atashkar', '2021-03-10', '2021-03-13', 3, 1, '(Champagne house,Champagne house,Champagne house)', '', '495', '2021-03-08 17:05:57'),
(4, 'Hossein', 'Ghasemi', '2021-03-17', '2021-03-19', 3, 1, '(,,)', '', '310', '2021-03-08 17:13:39'),
(5, 'HOSSEIN', 'Hazratgholizadeh', '2021-03-10', '2021-03-11', 2, 0, '(Champagne house,Champagne house,Champagne house)', '', '175', '2021-03-08 17:16:07'),
(6, 'Ghazaleh', 'Naz', '2021-03-09', '2021-03-11', 3, 2, '(Rose petal bath,House Sparkling Wine,Champagne house)', '', '445', '2021-03-08 17:19:49'),
(7, 'Jack', 'Morfi', '2021-03-09', '2021-03-12', 2, 0, '(,,Champagne house)', '', '495', '2021-03-08 17:23:36'),
(8, 'jams', 'jams', '2021-03-09', '2021-03-12', 2, 0, '(,House Sparkling Wine,Champagne house)', '', '335', '2021-03-08 17:25:04'),
(9, 'HOSSEIN', 'Hazratgholizadeh', '2021-03-09', '2021-03-11', 2, 2, '(Rose petal bath,House Sparkling Wine,Champagne house)', '', '545', '2021-03-08 17:33:13'),
(10, 'Ghazaleh', 'dsg', '2021-03-09', '2021-03-11', 1, 0, '(Rose petal bath,,)', '', '110', '2021-03-08 17:35:51');

-- --------------------------------------------------------

--
-- Table structure for table `resfeedback`
--

CREATE TABLE `resfeedback` (
  `points` int(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resfeedback`
--

INSERT INTO `resfeedback` (`points`, `timestamp`) VALUES
(2, '2021-02-19 17:38:46'),
(3, '2021-02-19 17:39:30'),
(1, '2021-02-19 17:39:44'),
(3, '2021-02-20 09:43:39'),
(1, '2021-02-20 09:54:34'),
(1, '2021-02-20 09:55:44'),
(1, '2021-02-20 09:58:16'),
(2, '2021-02-20 09:58:18'),
(3, '2021-02-20 09:58:21'),
(2, '2021-02-20 10:16:39'),
(1, '2021-02-22 07:20:30'),
(3, '2021-02-22 07:29:17'),
(2, '2021-02-22 07:34:56'),
(3, '2021-02-22 07:36:25'),
(3, '2021-02-22 07:47:03'),
(1, '2021-02-22 08:38:04'),
(2, '2021-02-22 08:59:31'),
(3, '2021-02-22 08:59:59'),
(1, '2021-02-22 09:00:32'),
(2, '2021-02-22 09:01:26'),
(2, '2021-02-22 09:02:27'),
(2, '2021-02-22 09:02:46'),
(2, '2021-02-22 09:03:04'),
(3, '2021-02-22 09:03:11'),
(1, '2021-02-22 09:03:15'),
(3, '2021-02-22 09:06:38'),
(2, '2021-02-22 09:06:45'),
(1, '2021-02-22 09:06:46'),
(2, '2021-02-23 08:28:35'),
(3, '2021-02-23 08:30:11'),
(3, '2021-02-23 08:30:18'),
(3, '2021-02-23 08:30:22'),
(3, '2021-02-23 08:31:49'),
(3, '2021-02-23 08:32:09'),
(3, '2021-02-23 08:32:11'),
(3, '2021-02-23 08:32:30'),
(3, '2021-02-23 08:39:41'),
(2, '2021-02-23 08:40:00'),
(3, '2021-02-23 08:40:22'),
(3, '2021-02-23 08:42:20'),
(3, '2021-02-23 08:42:36'),
(3, '2021-02-23 08:43:01'),
(3, '2021-02-23 08:43:29'),
(3, '2021-02-23 08:43:37'),
(3, '2021-02-23 08:43:51'),
(2, '2021-02-23 08:43:54'),
(3, '2021-02-23 08:43:56'),
(2, '2021-02-23 08:45:52'),
(2, '2021-02-23 08:45:54'),
(3, '2021-02-23 08:45:55'),
(3, '2021-02-23 08:46:36'),
(1, '2021-02-23 08:46:56'),
(2, '2021-02-23 08:50:14'),
(3, '2021-02-23 08:50:17'),
(3, '2021-02-23 08:50:31'),
(2, '2021-02-23 08:50:35'),
(3, '2021-02-23 08:50:36'),
(3, '2021-02-23 08:51:34'),
(3, '2021-02-23 08:52:04'),
(2, '2021-02-23 08:53:03'),
(1, '2021-02-23 08:53:33'),
(3, '2021-02-23 08:54:53'),
(2, '2021-02-23 08:55:00'),
(3, '2021-02-23 08:55:03'),
(3, '2021-02-23 08:55:56'),
(3, '2021-02-23 08:56:29'),
(2, '2021-02-23 08:58:21'),
(2, '2021-02-23 08:58:59'),
(2, '2021-02-23 08:59:38'),
(3, '2021-02-23 08:59:44'),
(2, '2021-02-23 08:59:56'),
(2, '2021-02-23 09:00:10'),
(3, '2021-02-26 10:03:46'),
(1, '2021-02-26 10:07:55'),
(2, '2021-02-26 17:34:54');

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
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `res_customers`
--
ALTER TABLE `res_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `res_customers`
--
ALTER TABLE `res_customers`
  MODIFY `customer_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
