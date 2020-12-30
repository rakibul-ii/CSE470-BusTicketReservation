-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 04:44 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `type` text NOT NULL,
  `date` date NOT NULL,
  `cost` int(11) NOT NULL,
  `departing_time` varchar(50) NOT NULL,
  `arrival_time` varchar(50) NOT NULL,
  `seat_available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `name`, `location`, `type`, `date`, `cost`, `departing_time`, `arrival_time`, `seat_available`) VALUES
(1, 'Shyamoli nr travels', 'Bandarban', 'AC', '2020-12-30', 1400, '10:30 PM', '04:45 AM', 44),
(2, 'Saintmartin Paribahan', 'Bandarban', 'AC', '2020-09-30', 950, '10:45 PM', '07:15 AM', 33),
(3, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-12-30', 620, '08:15 AM', '06:44 PM', 40),
(4, 'Shyamoli nr travels', 'Bandarban', 'Non-AC', '2020-09-30', 620, '09:45 PM', '06:15 AM', 33),
(5, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-10-01', 620, '10:01 PM', '05:30 AM', 38),
(6, 'Shyamoli nr travels', 'Bandarban', 'Non-AC', '2020-09-30', 620, '10:15 PM', '04:45 AM', 33);

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `percent` decimal(8,2) NOT NULL,
  `used` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `code`, `percent`, `used`) VALUES
(1, 'DIS10', '10.00', 5),
(2, 'DIS20', '20.00', 2),
(3, 'DIS50', '50.00', 2),
(4, 'NONE', '0.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` int(11) NOT NULL,
  `bus` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `type` text NOT NULL,
  `date` date NOT NULL,
  `cost` int(11) NOT NULL,
  `discount` decimal(8,2) NOT NULL,
  `departing_time` varchar(50) NOT NULL,
  `arrival_time` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `review` varchar(255) NOT NULL,
  `star` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `name`, `number`, `bus`, `location`, `type`, `date`, `cost`, `discount`, `departing_time`, `arrival_time`, `payment`, `review`, `star`) VALUES
(1, 'omuk', 1111111111, 'Shyamoli nr travels', 'Bandarban', 'Non-AC', '2020-09-12', 620, '0.00', '09:45 PM', '06:15 AM', 'Bkash', '', 0),
(2, 'omuk', 1111111111, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-09-13', 620, '0.00', '10:01 PM', '05:30 AM', 'Bkash', '', 0),
(3, 'omuk', 1111111111, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-09-13', 620, '0.00', '08:15 AM', '06:44 PM', 'Bkash', '', 0),
(4, 'omuk', 1111111111, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-09-13', 620, '0.00', '10:01 PM', '05:30 AM', 'Bkash', '', 0),
(5, 'omuk', 1111111111, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-09-13', 620, '0.00', '10:01 PM', '05:30 AM', 'Bkash', '', 0),
(6, 'abla', 1234567, 'Shyamoli nr travels', 'Bandarban', 'AC', '2020-09-12', 1400, '10.00', '10:30 PM', '04:45 AM', 'Bkash', '', 0),
(7, 'abra', 1672539882, 'Shyamoli nr travels', 'Bandarban', 'AC', '2020-09-12', 1400, '20.00', '10:30 PM', '04:45 AM', 'Rocket', '', 0),
(8, 'omuk', 1111111111, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-09-13', 620, '0.00', '10:01 PM', '05:30 AM', 'Nagad', '', 0),
(9, 'omuk', 1111111111, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-09-13', 620, '0.00', '08:15 AM', '06:44 PM', 'Bkash', '', 0),
(10, 'omuk', 1111111111, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-09-13', 620, '0.00', '10:01 PM', '05:30 AM', 'Bkash', '', 0),
(11, 'omuk', 1111111111, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-09-13', 620, '0.00', '10:01 PM', '05:30 AM', 'Nagad', '', 0),
(12, 'omuk', 1111111111, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-09-13', 620, '0.00', '08:15 AM', '06:44 PM', 'Bkash', '', 0),
(13, 'omuk', 1111111111, 'S. Alam Service', 'Bandarban', 'Non-AC', '2020-10-01', 620, '0.00', '10:01 PM', '05:30 AM', 'Nagad', '', 0),
(14, 'omuk', 1111111111, 'Shyamoli nr travels', 'Bandarban', 'Non-AC', '2020-09-30', 620, '0.00', '09:45 PM', '06:15 AM', 'Rocket', '', 0),
(15, 'omuk', 1111111111, 'Shyamoli nr travels', 'Bandarban', 'Non-AC', '2020-09-30', 620, '0.00', '10:15 PM', '04:45 AM', 'Nagad', '', 0),
(16, 'tamak', 1224365987, 'Saintmartin Paribahan', 'Bandarban', 'AC', '2020-09-30', 950, '0.00', '10:45 PM', '07:15 AM', 'Bkash', '', 0),
(17, 'omuk', 1111111111, 'Shyamoli nr travels', 'Bandarban', 'AC', '2020-10-01', 1400, '0.00', '10:30 PM', '04:45 AM', 'Bkash', '', 0),
(18, 'omuk', 1111111111, 'Shyamoli nr travels', 'Bandarban', 'AC', '2020-10-01', 1400, '0.00', '10:30 PM', '04:45 AM', 'Bkash', '', 0),
(19, 'abra', 1672539882, 'Shyamoli nr travels', 'Bandarban', 'AC', '2020-12-30', 1400, '3.00', '10:30 PM', '04:45 AM', 'Bkash', '', 0),
(20, 'abra', 1672539882, 'Shyamoli nr travels', 'Bandarban', 'AC', '2020-12-30', 1400, '0.00', '10:30 PM', '04:45 AM', 'Bkash', '', 0),
(21, 'abra', 1672539882, 'Shyamoli nr travels', 'Bandarban', 'AC', '2020-12-30', 1400, '10.00', '10:30 PM', '04:45 AM', 'Bkash', '', 0),
(22, 'abra', 1672539882, 'Shyamoli nr travels', 'Bandarban', 'AC', '2020-12-30', 1400, '10.00', '10:30 PM', '04:45 AM', 'Nagad', '', 0),
(23, 'abra', 1672539882, 'Shyamoli nr travels', 'Bandarban', 'AC', '2020-12-30', 1400, '20.00', '10:30 PM', '04:45 AM', 'Rocket', '', 0),
(24, 'abra', 1672539882, 'Shyamoli nr travels', 'Bandarban', 'AC', '2020-12-30', 1400, '10.00', '10:30 PM', '04:45 AM', 'Bkash', '', 0),
(25, 'abra', 1672539882, 'Shyamoli nr travels', 'Bandarban', 'AC', '2020-12-30', 1400, '50.00', '10:30 PM', '04:45 AM', 'Bkash', '', 0),
(26, 'abra', 1672539882, 'Shyamoli nr travels', 'Bandarban', 'AC', '2020-12-30', 1400, '10.00', '10:30 PM', '04:45 AM', 'Bkash', '', 0),
(27, 'sabbir', 16235688, 'Shyamoli nr travels', 'Bandarban', 'AC', '2020-12-30', 1400, '0.00', '10:30 PM', '04:45 AM', 'Bkash', 'This ride is for good', 5),
(28, 'sabbir', 16235688, 'Shyamoli nr travels', 'Bandarban', 'AC', '2020-12-30', 1400, '50.00', '10:30 PM', '04:45 AM', 'Rocket', 'This was for good information.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` int(11) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `number`, `pwd`) VALUES
(1, 'omuk', 1111111111, 'tomuk'),
(2, 'abla', 1234567, 'baabla'),
(3, 'abra', 1672539882, 'kadabra'),
(6, 'agdum', 1883456972, 'bagdum'),
(7, 'abol', 1765412289, 'tabol'),
(8, 'ashik', 1345789632, 'chowdhury'),
(9, 'tamak', 1224365987, 'pata'),
(10, 'tousif', 1733987704, 'aaaa'),
(11, 'sabbir', 16235688, '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `number` (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
