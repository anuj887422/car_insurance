-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 06:29 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_insurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `ins_det`
--

CREATE TABLE `ins_det` (
  `ins_id` int(11) NOT NULL,
  `ins_provider` varchar(20) NOT NULL,
  `ins_no` int(11) NOT NULL,
  `valid_date` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ins_det`
--

INSERT INTO `ins_det` (`ins_id`, `ins_provider`, `ins_no`, `valid_date`, `id`) VALUES
(26, 'anuj', 12, '2018-04-11', 11),
(27, 'anuj', 12, '2018-04-11', 11),
(28, 'haet', 12, '2018-04-05', 11),
(29, 'n', 123, '2018-12-31', 12),
(30, 'a', 0, '2018-12-31', 13),
(31, 'a', 0, '2018-12-31', 13),
(32, 'a', 0, '2018-12-31', 14),
(33, 'b', 0, '2018-12-31', 14),
(34, 'a', 0, '0002-02-02', 15),
(35, '653/', 0, '0000-00-00', 16);

-- --------------------------------------------------------

--
-- Table structure for table `owner_det`
--

CREATE TABLE `owner_det` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `lic_no` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner_det`
--

INSERT INTO `owner_det` (`id`, `username`, `dob`, `gender`, `nationality`, `email`, `lic_no`, `password`) VALUES
(11, 'haet', '1997-08-03', 'male', 'indian', 'haet97trivedi@gmail.', 'haetchaplus', 'haet'),
(12, 'anuj', '2018-09-12', 'male', 'indian', 'anuj@gmail.com', '123', 'anuj'),
(13, 'ritwik', '2018-04-12', 'male', 'indian', 'anuj@gmail.com', '123', 'ritwik'),
(14, 'ana', '2018-12-12', 'male', 'indian', 'anuj@gmail.com', '134', 'ana'),
(15, 'mam', '2018-02-13', 'female', 'indian', 'anuj@gmail.com', '123', 'mam'),
(16, 'ashutosh', '1997-12-15', 'male', 'indian', 'ashutosh88742@gmail.', '123', '123'),
(17, 'amit', '0000-00-00', 'male', 'indian', 'asjfjfjjfjfjfjjf@gma', '12345', '123456'),
(18, 'deepak', '1997-11-17', 'male', 'indian', 'deepak@gmail.com', 'mh456', '123'),
(19, 'jay', '1997-10-14', 'male', 'indian', 'jat@gmail.com', 'mh456', '123');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_det`
--

CREATE TABLE `vehicle_det` (
  `vehicle_id` int(11) NOT NULL,
  `source` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `plate_no` varchar(20) NOT NULL,
  `manufacture` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `reg_date` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_det`
--

INSERT INTO `vehicle_det` (`vehicle_id`, `source`, `category`, `plate_no`, `manufacture`, `type`, `color`, `reg_date`, `id`) VALUES
(6, '', '', '', '', '', '', '0000-00-00', 12),
(9, 'mumbai', 'nisan', '123', 'anuj', 'anuj', 'anuj', '2018-04-05', 11),
(11, 'a', 'a', 'a', 'a', 'a', 'a', '2018-12-31', 12),
(12, 'a', 'a', 'a', 'a', 'a', 'a', '2018-12-31', 12),
(13, 'b', 'b', 'b', 'b', 'b', 'b', '2018-12-31', 12),
(14, 'a', 'a', 'a', 'a', 'a', 'a', '2018-12-31', 13),
(15, 'b', 'b', 'b', 'b', 'b', 'b', '2018-12-31', 13),
(16, 'A', 'A', 'A', 'A', 'A', 'A', '2018-12-31', 13),
(17, 'ASDFD', 'A', 'GHJJ', 'GFHJ', 'HJ', 'GHJJK', '2018-12-31', 13),
(18, '', '', '', '', '', '', '0000-00-00', 13),
(19, '', '', '', '', '', '', '0000-00-00', 13),
(20, '', '', '', '', '', '', '0000-00-00', 13),
(21, 'X', 'X', 'X', 'X', 'X', 'X', '2018-12-31', 13),
(22, '', '', '', '', '', '', '0000-00-00', 13),
(23, '', '', '', '', '', '', '0000-00-00', 13),
(24, '', '', '', '', '', '', '0000-00-00', 13),
(25, 'haet', 'anuj', 'anuj', 'anuj', 'haet', 'anuj', '2018-12-31', 14),
(26, 'b', 'b', 'b', 'b', 'b', 'b', '2018-12-31', 14),
(27, '', '', '', '', '', '', '0000-00-00', 14),
(28, 'b', 'b', 'b', 'b', 'b', 'b', '2018-12-31', 14),
(29, 'a', 'ayt', 'g', 'u', 'yuuy', 'y', '0002-02-02', 14),
(30, 'b', 'b', 'b', 'b', 'b', 'b', '2018-12-31', 14),
(31, 'b', 'b', 'b', 'b', 'b', 'b', '2018-12-31', 14),
(32, 'a', 'a', 'a', 'a', 'a', 'a', '2018-12-31', 14),
(33, 'a', 'a', 'a', 'a', 'a', 'a', '2018-12-31', 14),
(34, 'b', 'b', 'b', 'b', 'b', 'b', '2018-12-31', 14),
(35, 'b', 'b', 'b', 'b', 'b', 'b', '2018-12-31', 14),
(36, 'a', 'a', 'a', 'a', 'a', 'a', '2018-12-31', 14),
(37, 'b', 'b', 'b', 'b', 'b', 'b', '2018-12-31', 14),
(38, 'b', 'b', 'b', 'b', 'b', 'b', '2018-12-31', 14),
(39, 'a', 'a', 'a', 'a', 'a', 'a', '2018-12-31', 14),
(40, '', '', '', '', '', '', '0000-00-00', 14),
(41, 'b', 'b', 'b', 'b', 'b', 'b', '2018-12-31', 14),
(42, 'b', 'b', 'b', 'b', 'b', 'b', '2018-12-31', 14),
(43, 'b', 'b', 'b', 'b', 'b', 'b', '2018-12-31', 14),
(44, '', '', '', '', '', '', '0000-00-00', 14),
(45, '', '', '', '', '', '', '0000-00-00', 14),
(46, '', '', '', '', '', '', '0000-00-00', 14),
(47, '', '', '', '', '', '', '0000-00-00', 14),
(48, '', '', '', '', '', '', '0000-00-00', 14),
(49, 'b', 'b', 'b', 'b', 'b', 'b', '2018-12-31', 14),
(50, 'a', 'a', 'a', 'a', 's', 'a', '0002-02-02', 14),
(51, 'a', 'a', 'a', 'a', 's', 'a', '0002-02-02', 14),
(52, 'b', 'b', 'b', 'b', 'b', 'b', '2018-12-31', 14),
(53, 'b', 'b', 'b', 'b', 'b', 'b', '2018-12-31', 14),
(54, 'a', 'a', 'a', 'a', 'a', 'a', '2018-12-31', 14),
(55, 'a', 'a', 'a', 'a', 'a', 'a', '2018-12-31', 14),
(56, 'a', 'a', 'a', 'a', 'a', 'a', '2018-12-31', 14),
(57, 'a', 'a', 'a', 'a', 'a', 'a', '2018-12-31', 14),
(58, 'a', 'a', 'a', 'a', 'a', 'a', '2018-12-31', 14),
(59, 'a', 'a', 'a', 'a', 'a', 'a', '2018-12-31', 14),
(60, '', '', '', '', '', '', '0000-00-00', 14),
(61, '', '', '', '', '', '', '0000-00-00', 14),
(62, 'a', 'a', 'a', 'a', 'a', 'a', '2018-12-31', 14),
(63, 'a', 'a', 'a', 'a', 'a', 'a', '2018-12-31', 14),
(64, 'a', 'a', 'a', 'a', 'a', 'a', '2018-12-31', 14),
(65, 'a', 'a', 'a', 'a', 'a', 'a', '2018-12-31', 14),
(66, 'a', 'a', 'a', 'a', 'a', 'a', '2018-12-31', 14),
(67, 'anuj', 'a', 'a', 'a', 'a', 'a', '2018-12-31', 14),
(68, 'a', 'a', 'a', 'a', 'a', 'red', '2018-12-31', 14),
(69, 'anuj', 'a', 'a', 'a', 'a', 'a', '2018-12-31', 14),
(70, 'hello', 'ayt', 'g', 'u', 'yuuy', 'y', '0002-02-02', 14),
(71, 'anuj', 'a', 'a', 'aanuj', 'a', 'a', '2018-12-31', 14),
(72, 'anuj', 'a', 'anuj', 'a', 'a', 'a', '2018-12-31', 14),
(73, 'anuj', 'anuj', 'nuj', 'a', 'a', 'a', '2018-12-31', 14),
(74, 'anuj', 'anuj', 'nuj', 'a', 'a', 'a', '2018-12-31', 14),
(75, 'anuj', 'a', 'anuj', 'a', 'a', 'a', '2018-12-31', 14),
(76, 'anuj', 'a', 'a', 'a', 'anuj', 'a', '2018-12-31', 14),
(77, 'anuj', 'anuj', 'anuj', 'anuj', 'anuj', 'anuj', '2018-12-31', 14),
(78, 'haet', 'anuj', 'anuj', 'anuj', 'anuj', 'anuj', '2018-12-31', 14),
(79, 'anuj', 'b', 'b', 'b', 'b', 'b', '2018-12-31', 14),
(80, 'hello', 'anuj', 'anuj', 'anuj', 'anuj', 'anuj', '2018-12-31', 14),
(81, 'anuj', 'anuj', 'anuj', 'anuj', 'anuj', 'anuj', '2018-12-31', 14),
(82, 'anuj', 'anuj', 'anuj', 'anuj', 'anuj', 'anuj', '2018-12-31', 14),
(83, 'anuj', 'anuj', 'anuj', 'anuj', 'anuj', 'anuj', '2018-12-31', 14),
(84, 'anuj', 'anuj', 'anuj', 'anuj', 'anuj', 'anuj', '2018-12-31', 14),
(85, 'anuj', 'anuj', 'anuj', 'anuj', 'anuj', 'anuj', '2018-12-31', 14),
(86, 'anuj', 'anuj', 'anuj', 'anuj', 'anuj', 'anuj', '2018-12-31', 14),
(87, 'anuj', 'anuj', 'anuj', 'anuj', 'anuj', 'anuj', '2018-12-31', 14),
(88, 'anuj', 'anuj', 'anuj', 'anuj', 'anuj', 'anuj', '2018-12-31', 14),
(89, 'haet', 'anuj', 'anuj', 'anuj', 'anuj', 'anuj', '2018-12-31', 14),
(90, 'haet', 'anuj', 'anuj', 'anuj', 'haet', 'anuj', '2018-12-31', 14),
(91, 'anuj', 'anuj', 'anuj', 'a', 'a', 'a', '0002-02-02', 15),
(92, 'anuj', 'anuj', 'anuj', 'a', 'a', 'haet', '0002-02-02', 15),
(93, 'anuj', 'anuj', 'anuj', 'a', 'a', 'haet', '0002-02-02', 15),
(94, 'pune', 'suv', 'mh123', 'anuj', 'four wheeler', 'red', '2018-04-02', 16),
(95, '', '', '', '', '', '', '0000-00-00', 16),
(96, 'pune', 'suv', 'mh123', 'anuj', 'four wheeler', 'red', '2018-04-02', 16),
(97, 'pune', 'suv', 'mh123', 'anuj', 'four wheeler', 'red', '2018-04-02', 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ins_det`
--
ALTER TABLE `ins_det`
  ADD PRIMARY KEY (`ins_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `owner_det`
--
ALTER TABLE `owner_det`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_det`
--
ALTER TABLE `vehicle_det`
  ADD PRIMARY KEY (`vehicle_id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ins_det`
--
ALTER TABLE `ins_det`
  MODIFY `ins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `owner_det`
--
ALTER TABLE `owner_det`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `vehicle_det`
--
ALTER TABLE `vehicle_det`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ins_det`
--
ALTER TABLE `ins_det`
  ADD CONSTRAINT `ins_det_ibfk_2` FOREIGN KEY (`id`) REFERENCES `owner_det` (`id`);

--
-- Constraints for table `vehicle_det`
--
ALTER TABLE `vehicle_det`
  ADD CONSTRAINT `vehicle_det_ibfk_1` FOREIGN KEY (`id`) REFERENCES `owner_det` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
