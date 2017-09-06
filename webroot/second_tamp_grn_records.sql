-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2017 at 01:58 PM
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
-- Table structure for table `second_tamp_grn_records`
--

CREATE TABLE `second_tamp_grn_records` (
  `id` int(10) NOT NULL,
  `item_code` varchar(255) NOT NULL,
  `quantity` decimal(10,2) NOT NULL,
  `purchase_rate` decimal(15,2) NOT NULL,
  `sales_rate` decimal(15,2) NOT NULL,
  `user_id` int(10) NOT NULL,
  `processed` varchar(10) NOT NULL,
  `is_addition_item_data_required` varchar(10) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `hsn_code` varchar(30) NOT NULL,
  `unit` varchar(30) NOT NULL,
  `gst_rate_fixed_or_fluid` int(10) NOT NULL,
  `first_gst_rate` decimal(15,2) NOT NULL,
  `amount_in_ref_of_gst_rate` decimal(15,2) NOT NULL,
  `second_gst_rate` decimal(15,2) NOT NULL,
  `company_id` int(10) NOT NULL,
  `location_id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `second_tamp_grn_records`
--

INSERT INTO `second_tamp_grn_records` (`id`, `item_code`, `quantity`, `purchase_rate`, `sales_rate`, `user_id`, `processed`, `is_addition_item_data_required`, `item_name`, `hsn_code`, `unit`, `gst_rate_fixed_or_fluid`, `first_gst_rate`, `amount_in_ref_of_gst_rate`, `second_gst_rate`, `company_id`, `location_id`, `item_id`) VALUES
(1, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 76),
(2, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 76),
(3, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 76),
(4, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 76),
(5, '68HD876FR', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'serretyujuh', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 75),
(6, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 76),
(7, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 76),
(8, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 76),
(9, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 76),
(10, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 76),
(11, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 76),
(12, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 76),
(13, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 76),
(14, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 76),
(15, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 76),
(16, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 76),
(17, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 76),
(18, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 76),
(19, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 76),
(20, '68HD876787', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 77),
(21, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 76),
(22, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(23, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(24, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(25, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(26, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(27, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(28, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(29, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(30, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(31, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(32, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(33, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(34, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(35, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(36, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(37, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(38, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(39, 'ytyu6766', '98.00', '850.00', '1100.00', 3, 'Yes', 'yes', 'dfghkuyjk uiyfy', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 74),
(40, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(41, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'no', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(42, 'pika34', '98.00', '50.00', '1100.00', 3, 'Yes', 'no', 'test item', 'HG6854', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 0, 78),
(43, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'No', 'dummy item1', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(44, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'No', 'dummy item2', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(45, 'ytyu6766', '98.00', '850.00', '1100.00', 3, 'Yes', 'yes', 'dummy item3', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 74),
(46, '68HD87jhgj6', '98.00', '850.00', '1100.00', 3, 'Yes', 'No', 'dummy item 4', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 79),
(47, '68HD876fgf454', '98.00', '850.00', '1100.00', 3, 'Yes', 'No', 'dummy item 5', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 80),
(48, '68HD876ab1', '98.00', '850.00', '1100.00', 3, 'Yes', 'No', 'dummy item 6', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 81),
(49, '68HD876ab2', '98.00', '850.00', '1100.00', 3, 'Yes', 'No', 'dummy item 7', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 82),
(50, 'ytyu6766ab3', '98.00', '850.00', '1100.00', 3, 'Yes', 'yes', 'dummy item 8', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 83),
(51, '68HD87jhgj6', '98.00', '850.00', '1100.00', 3, 'Yes', 'No', 'dummy item 9', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 79),
(52, '68HD876fgf454', '98.00', '850.00', '1100.00', 3, 'Yes', 'No', 'dummy item 10', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 80),
(53, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'No', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(54, '68HD876', '98.00', '850.00', '1100.00', 3, 'Yes', 'No', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 76),
(55, 'ytyu6766', '98.00', '850.00', '1100.00', 3, 'Yes', 'yes', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 74),
(56, '68HD87jhgj6', '98.00', '850.00', '1100.00', 3, 'Yes', 'No', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 79),
(57, '68HD876fgf454', '98.00', '850.00', '1100.00', 3, 'Yes', 'No', 'dummy item', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 80),
(58, '68HD876789', '98.00', '850.00', '1100.00', 3, 'Yes', 'No', 'dummy item1', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 0),
(59, '68HD8765467', '98.00', '850.00', '1100.00', 3, 'Yes', 'No', 'dummy item2', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 87),
(60, 'ytyu67668799009560', '98.00', '850.00', '1100.00', 3, 'Yes', 'yes', 'dummy item3', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 88),
(61, '68HD87jhgj687698', '98.00', '850.00', '1100.00', 3, 'Yes', 'No', 'dummy item 4', 'HJ678NEJE', 'killo gram', 22, '15.25', '1000.25', '12.23', 1, 1, 89);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `second_tamp_grn_records`
--
ALTER TABLE `second_tamp_grn_records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `second_tamp_grn_records`
--
ALTER TABLE `second_tamp_grn_records`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
