-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 11:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fost laboratory`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `tag_id` varchar(12) NOT NULL,
  `instrument_name` varchar(255) NOT NULL,
  `clearance` varchar(10) NOT NULL,
  `purchased` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`tag_id`, `instrument_name`, `clearance`, `purchased`) VALUES
('tagid', 'this', 'NO', '2023-03-20'),
('tagid1', 'this', 'NO', '2023-03-20'),
('tagid11', '111', 'YES', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `labusers`
--

CREATE TABLE `labusers` (
  `tag_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `user_names` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_contacts` decimal(13,0) NOT NULL,
  `access_status` varchar(255) NOT NULL,
  `time_in` datetime NOT NULL,
  `time_out` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `labusers`
--

INSERT INTO `labusers` (`tag_id`, `user_id`, `user_names`, `occupation`, `email`, `mobile_contacts`, `access_status`, `time_in`, `time_out`) VALUES
('1A7CBE5C\r\n\r\n', '200309009', 'lab instructor', 'instructor', 'instructor@gmail.com', '33778236', 'allow', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('34474hu7ji', '209300003', 'kahan heh', 'occupation', 'email@emao.com', '45455566', 'access', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('5310C510\r\n', '201800008', 'TSIKE RORISANG', 'STUDENT', 'rorisangtsike@gmail.com', '68961386', 'deny', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`tag_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Indexes for table `labusers`
--
ALTER TABLE `labusers`
  ADD PRIMARY KEY (`tag_id`),
  ADD UNIQUE KEY `tag id` (`tag_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
