-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 14, 2017 at 06:37 AM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mewar_hitech`
--

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tin` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `cin` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `address3` text NOT NULL,
  `address4` text NOT NULL,
  `mobile_no` varchar(25) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin_code` varchar(50) NOT NULL,
  `is_deleted` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gst_registration_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `tin`, `pan`, `cin`, `gst`, `address`, `address1`, `address2`, `address3`, `address4`, `mobile_no`, `state`, `pin_code`, `is_deleted`, `email`, `gst_registration_type`) VALUES
(1, 'test supplier', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', ''),
(2, 'neel kant', '', '', '', '12345678', 'erw', 'wsw', 'w', 'w', 'w', '9999999999', 'rajasthan', '123454', 0, 'neel@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
