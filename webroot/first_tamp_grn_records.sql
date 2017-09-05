-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2017 at 01:12 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunil_textile_erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `first_tamp_grn_records`
--

CREATE TABLE `first_tamp_grn_records` (
  `id` int(11) NOT NULL,
  `item_code` varchar(255) NOT NULL,
  `quantity` decimal(10,2) NOT NULL,
  `purchase_rate` decimal(15,2) NOT NULL,
  `sales_rate` decimal(15,2) NOT NULL,
  `user_id` int(10) NOT NULL,
  `processed` varchar(10) NOT NULL,
  `is_addition_item_data_required` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `first_tamp_grn_records`
--
ALTER TABLE `first_tamp_grn_records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `first_tamp_grn_records`
--
ALTER TABLE `first_tamp_grn_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
