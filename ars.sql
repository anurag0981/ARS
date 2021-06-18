-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 05:54 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ars`
--

-- --------------------------------------------------------

--
-- Table structure for table `ars_userdetails`
--

CREATE TABLE `ars_userdetails` (
  `ars_id` int(255) NOT NULL,
  `ars_username` varchar(255) DEFAULT NULL,
  `ars_emailid` varchar(255) DEFAULT NULL,
  `ars_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ars_userdetails`
--

INSERT INTO `ars_userdetails` (`ars_id`, `ars_username`, `ars_emailid`, `ars_password`) VALUES
(2, 'Aniket', 'aniketyadav@gmail.com', 'aniket'),
(5, 'anurag', 'anuragupadhyay4u2@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'himanshu', 'himanshusingh@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'anurag', 'anurag@gmail.com', 'd77d2953c546cb33e2d0bff4989f6aa2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ars_userdetails`
--
ALTER TABLE `ars_userdetails`
  ADD PRIMARY KEY (`ars_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ars_userdetails`
--
ALTER TABLE `ars_userdetails`
  MODIFY `ars_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
