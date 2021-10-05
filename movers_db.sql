-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 02:25 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movers_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_pk` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `status` varchar(60) DEFAULT NULL,
  `offence_count` int(11) DEFAULT NULL,
  `vehicle_pk` int(10) UNSIGNED DEFAULT NULL,
  `reg_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_pk`, `name`, `status`, `offence_count`, `vehicle_pk`, `reg_time`) VALUES
(1, 'Main', 'Warning', 3, 1, '2021-09-30 16:03:45'),
(2, 'Loader 1', 'Active', 1, 1, '2021-09-30 17:46:36'),
(3, 'asdasd', 'Active', 0, 1, '2021-09-30 17:51:31');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `farmer_pk` int(11) NOT NULL,
  `namr` varchar(60) DEFAULT NULL,
  `group_pk` int(10) UNSIGNED DEFAULT NULL,
  `farmer_type` tinyint(1) DEFAULT NULL,
  `reg_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`farmer_pk`, `namr`, `group_pk`, `farmer_type`, `reg_time`) VALUES
(1, 'Farmer 1', 1, 0, '2021-09-30 18:43:20'),
(2, 'Ngecu', 0, 1, '2021-10-02 11:39:55'),
(3, 'Ngecu Farmer', 0, 1, '2021-10-02 11:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `groupp`
--

CREATE TABLE `groupp` (
  `group_pk` int(11) NOT NULL,
  `group_name` varchar(60) DEFAULT NULL,
  `location` varchar(60) DEFAULT NULL,
  `nature_of_goods` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupp`
--

INSERT INTO `groupp` (`group_pk`, `group_name`, `location`, `nature_of_goods`) VALUES
(1, 'Eobotics Group', 'Embakasi', 'Cabbahe');

-- --------------------------------------------------------

--
-- Table structure for table `loader`
--

CREATE TABLE `loader` (
  `loader_pk` int(11) NOT NULL,
  `loader_name` varchar(60) DEFAULT NULL,
  `reg_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loader`
--

INSERT INTO `loader` (`loader_pk`, `loader_name`, `reg_time`) VALUES
(1, 'Loader 1', '2021-09-30 18:27:12'),
(2, 'Loader 2', '2021-09-30 22:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `offence`
--

CREATE TABLE `offence` (
  `offence_pk` int(11) NOT NULL,
  `summary` varchar(60) DEFAULT NULL,
  `driver_pk` int(11) DEFAULT NULL,
  `reg_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offence`
--

INSERT INTO `offence` (`offence_pk`, `summary`, `driver_pk`, `reg_time`) VALUES
(1, 'Got Arrested', 2, '2021-09-30 23:41:55'),
(2, 'Stole Goods', 1, '2021-09-30 23:46:16'),
(3, 'Drunk Driving', 1, '2021-10-01 15:59:47'),
(4, 'Dead', 1, '2021-10-01 17:05:58'),
(5, 'Killed a cow', 1, '2021-10-02 11:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `order_transport`
--

CREATE TABLE `order_transport` (
  `order_pk` int(11) NOT NULL,
  `farmer_pk` int(11) DEFAULT NULL,
  `group_pk` int(11) DEFAULT NULL,
  `driver_pk` int(11) DEFAULT NULL,
  `loader_pk` int(11) DEFAULT NULL,
  `reg_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_transport`
--

INSERT INTO `order_transport` (`order_pk`, `farmer_pk`, `group_pk`, `driver_pk`, `loader_pk`, `reg_time`) VALUES
(1, 1, 1, 1, 1, '2021-09-30 22:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'ngecu', 'ngecu16@gmail.com', '76d80224611fc919a5d54f0ff9fba446');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle_pk` int(6) UNSIGNED NOT NULL,
  `vehicle_name` varchar(30) NOT NULL,
  `load_capacity` int(60) NOT NULL,
  `transport_cost` int(50) NOT NULL,
  `number_of_loaders` int(50) NOT NULL,
  `amount_per_loader` int(50) NOT NULL,
  `trip_driver_per_trip` int(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicle_pk`, `vehicle_name`, `load_capacity`, `transport_cost`, `number_of_loaders`, `amount_per_loader`, `trip_driver_per_trip`, `reg_date`) VALUES
(1, 'Pick Up', 1, 200, 2, 200, 2000, '2021-09-30 11:49:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_pk`),
  ADD KEY `vehicle_pk` (`vehicle_pk`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`farmer_pk`);

--
-- Indexes for table `groupp`
--
ALTER TABLE `groupp`
  ADD PRIMARY KEY (`group_pk`);

--
-- Indexes for table `loader`
--
ALTER TABLE `loader`
  ADD PRIMARY KEY (`loader_pk`);

--
-- Indexes for table `offence`
--
ALTER TABLE `offence`
  ADD PRIMARY KEY (`offence_pk`),
  ADD KEY `driver_pk` (`driver_pk`);

--
-- Indexes for table `order_transport`
--
ALTER TABLE `order_transport`
  ADD PRIMARY KEY (`order_pk`),
  ADD KEY `farmer_pk` (`farmer_pk`),
  ADD KEY `group_pk` (`group_pk`),
  ADD KEY `driver_pk` (`driver_pk`),
  ADD KEY `loader_pk` (`loader_pk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_pk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `farmer_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `groupp`
--
ALTER TABLE `groupp`
  MODIFY `group_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loader`
--
ALTER TABLE `loader`
  MODIFY `loader_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `offence`
--
ALTER TABLE `offence`
  MODIFY `offence_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_transport`
--
ALTER TABLE `order_transport`
  MODIFY `order_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicle_pk` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `driver_ibfk_1` FOREIGN KEY (`vehicle_pk`) REFERENCES `vehicle` (`vehicle_pk`);

--
-- Constraints for table `offence`
--
ALTER TABLE `offence`
  ADD CONSTRAINT `offence_ibfk_1` FOREIGN KEY (`driver_pk`) REFERENCES `driver` (`driver_pk`);

--
-- Constraints for table `order_transport`
--
ALTER TABLE `order_transport`
  ADD CONSTRAINT `order_transport_ibfk_1` FOREIGN KEY (`farmer_pk`) REFERENCES `farmer` (`farmer_pk`),
  ADD CONSTRAINT `order_transport_ibfk_2` FOREIGN KEY (`group_pk`) REFERENCES `groupp` (`group_pk`),
  ADD CONSTRAINT `order_transport_ibfk_3` FOREIGN KEY (`driver_pk`) REFERENCES `driver` (`driver_pk`),
  ADD CONSTRAINT `order_transport_ibfk_4` FOREIGN KEY (`loader_pk`) REFERENCES `loader` (`loader_pk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
