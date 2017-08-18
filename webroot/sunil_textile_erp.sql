-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2017 at 09:30 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

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
-- Table structure for table `accounting_entries`
--

CREATE TABLE `accounting_entries` (
  `id` int(11) NOT NULL,
  `ledger_id` int(10) NOT NULL,
  `debit` decimal(12,2) NOT NULL,
  `credit` decimal(15,2) NOT NULL,
  `transaction_date` date NOT NULL,
  `company_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounting_entries`
--

INSERT INTO `accounting_entries` (`id`, `ledger_id`, `debit`, `credit`, `transaction_date`, `company_id`) VALUES
(7, 37, '0.00', '5773.50', '2017-08-10', 1),
(8, 3, '5520.00', '0.00', '2017-08-10', 1),
(9, 5, '122.50', '0.00', '2017-08-10', 1),
(10, 10, '122.50', '0.00', '2017-08-10', 1),
(11, 4, '0.00', '0.00', '2017-08-10', 1),
(12, 9, '0.00', '0.00', '2017-08-10', 1),
(13, 5, '4.25', '0.00', '2017-08-10', 1),
(14, 10, '4.25', '0.00', '2017-08-10', 1),
(15, 32, '3385.80', '0.00', '2017-08-10', 1),
(16, 18, '0.00', '2970.00', '2017-08-10', 1),
(17, 25, '0.00', '118.80', '2017-08-10', 1),
(18, 21, '0.00', '118.80', '2017-08-10', 1),
(19, 26, '0.00', '89.10', '2017-08-10', 1),
(20, 22, '0.00', '89.10', '2017-08-10', 1),
(21, 31, '2146.13', '0.00', '2017-08-10', 1),
(22, 18, '0.00', '1978.00', '2017-08-10', 1),
(23, 24, '0.00', '49.45', '2017-08-10', 1),
(24, 21, '0.00', '118.68', '2017-08-10', 1),
(25, 31, '1144.60', '0.00', '2017-08-10', 1),
(26, 18, '0.00', '970.00', '2017-08-10', 1),
(27, 26, '0.00', '87.30', '2017-08-10', 1),
(28, 22, '0.00', '87.30', '2017-08-10', 1),
(29, 31, '1156.40', '0.00', '2017-08-11', 1),
(30, 18, '0.00', '980.00', '2017-08-11', 1),
(31, 26, '0.00', '88.20', '2017-08-11', 1),
(32, 22, '0.00', '88.20', '2017-08-11', 1),
(33, 29, '1000.00', '0.00', '0000-00-00', 1),
(34, 18, '0.00', '847.46', '0000-00-00', 1),
(35, 26, '0.00', '76.27', '0000-00-00', 1),
(36, 22, '0.00', '76.27', '0000-00-00', 1),
(37, 29, '1000.00', '0.00', '0000-00-00', 1),
(38, 18, '0.00', '847.46', '0000-00-00', 1),
(39, 25, '0.00', '76.27', '0000-00-00', 1),
(40, 21, '0.00', '76.27', '0000-00-00', 1),
(41, 29, '2000.00', '0.00', '0000-00-00', 1),
(42, 18, '0.00', '1785.71', '0000-00-00', 1),
(43, 26, '0.00', '107.14', '0000-00-00', 1),
(44, 22, '0.00', '107.14', '0000-00-00', 1),
(45, 29, '2000.00', '0.00', '0000-00-00', 1),
(46, 18, '0.00', '1785.71', '0000-00-00', 1),
(47, 26, '0.00', '107.14', '0000-00-00', 1),
(48, 22, '0.00', '107.14', '0000-00-00', 1),
(49, 29, '2000.00', '0.00', '0000-00-00', 1),
(50, 18, '0.00', '1785.71', '0000-00-00', 1),
(51, 26, '0.00', '107.14', '0000-00-00', 1),
(52, 22, '0.00', '107.14', '0000-00-00', 1),
(53, 32, '2000.00', '0.00', '0000-00-00', 1),
(54, 18, '0.00', '1785.71', '0000-00-00', 1),
(55, 25, '0.00', '107.14', '0000-00-00', 1),
(56, 21, '0.00', '107.14', '0000-00-00', 1),
(57, 25, '0.00', '0.00', '0000-00-00', 1),
(58, 21, '0.00', '0.00', '0000-00-00', 1),
(59, 32, '2000.00', '0.00', '2017-08-14', 1),
(60, 18, '0.00', '1785.71', '2017-08-14', 1),
(61, 25, '0.00', '107.14', '2017-08-14', 1),
(62, 21, '0.00', '107.14', '2017-08-14', 1),
(63, 29, '1000.00', '0.00', '2017-08-14', 1),
(64, 18, '0.00', '847.46', '2017-08-14', 1),
(65, 25, '0.00', '76.27', '2017-08-14', 1),
(66, 21, '0.00', '76.27', '2017-08-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `accounting_groups`
--

CREATE TABLE `accounting_groups` (
  `id` int(10) NOT NULL,
  `nature_of_group_id` int(10) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `company_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounting_groups`
--

INSERT INTO `accounting_groups` (`id`, `nature_of_group_id`, `name`, `parent_id`, `lft`, `rght`, `company_id`) VALUES
(1, 2, 'Branch / Divisions', NULL, 1, 2, 1),
(2, 2, 'Capital Account', NULL, 3, 6, 0),
(3, 1, 'Current Assets', NULL, 7, 20, 0),
(4, 2, 'Current Liabilities', NULL, 21, 32, 0),
(5, 4, 'Direct Expenses', NULL, 33, 34, 0),
(6, 3, 'Direct Incomes', NULL, 35, 36, 0),
(7, 1, 'Fixed Assets', NULL, 37, 38, 0),
(8, 4, 'Indirect Expenses', NULL, 39, 40, 0),
(9, 3, 'Indirect Incomes', NULL, 41, 42, 0),
(10, 1, 'Investments', NULL, 43, 44, 0),
(11, 2, 'Loans (Liability)', NULL, 45, 52, 0),
(12, 1, 'Misc. Expenses (ASSET)', NULL, 53, 54, 0),
(13, 4, 'Purchase Accounts', NULL, 55, 56, 0),
(14, 3, 'Sales Accounts', NULL, 57, 58, 0),
(15, 2, 'Suspense A/c', NULL, 59, 60, 0),
(16, NULL, 'Reserves & Surplus', 2, 4, 5, 1),
(17, NULL, 'Bank Accounts', 3, 8, 9, 1),
(18, NULL, 'Cash-in-hand', 3, 10, 11, 1),
(19, NULL, 'Deposits (Asset)', 3, 12, 13, 1),
(20, NULL, 'Loans & Advances (Asset)', 3, 14, 15, 1),
(21, NULL, 'Stock-in-hand', 3, 16, 17, 1),
(22, NULL, 'Sundry Debtors', 3, 18, 19, 1),
(23, NULL, 'Duties & Taxes', 4, 22, 27, 1),
(24, NULL, 'Provisions', 4, 28, 29, 1),
(25, NULL, 'Sundry Creditors', 4, 30, 31, 1),
(26, NULL, 'Bank OD A/c', 11, 46, 47, 1),
(27, NULL, 'Secured Loans', 11, 48, 49, 1),
(28, NULL, 'Unsecured Loans', 11, 50, 51, 1),
(29, NULL, 'Input GST', 23, 23, 24, 0),
(30, NULL, 'Output GST', 23, 25, 26, 0),
(31, NULL, 'Petty Cash', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `state_id` int(10) NOT NULL,
  `financial_year_begins_from` date NOT NULL,
  `books_beginning_from` date NOT NULL,
  `address` text NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `fax_no` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gstin` varchar(20) NOT NULL,
  `pan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_users`
--

CREATE TABLE `company_users` (
  `id` int(10) NOT NULL,
  `company_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `hsn_code` varchar(30) NOT NULL,
  `unit_id` int(10) NOT NULL,
  `stock_group_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ledgers`
--

CREATE TABLE `ledgers` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `accounting_group_id` int(10) NOT NULL,
  `freeze` tinyint(1) NOT NULL COMMENT '0==unfreezed 1==freezed',
  `company_id` int(10) NOT NULL,
  `supplier_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `tax_percentage` decimal(5,2) NOT NULL,
  `gst_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ledgers`
--

INSERT INTO `ledgers` (`id`, `name`, `accounting_group_id`, `freeze`, `company_id`, `supplier_id`, `customer_id`, `tax_percentage`, `gst_type`) VALUES
(3, 'Purchase Account', 13, 0, 0, 0, 0, '0.00', ''),
(4, '0% CGST', 29, 0, 1, 0, 0, '0.00', 'CGST'),
(5, '2.5% CGST', 29, 0, 1, 0, 0, '2.50', 'CGST'),
(6, '6% CGST', 29, 0, 1, 0, 0, '6.00', 'CGST'),
(7, '9% CGST', 29, 0, 1, 0, 0, '9.00', 'CGST'),
(8, '14% CGST', 29, 0, 1, 0, 0, '14.00', 'CGST'),
(9, '0% SGST', 29, 0, 1, 0, 0, '0.00', 'SGST'),
(10, '2.5% SGST', 29, 0, 1, 0, 0, '2.50', 'SGST'),
(12, '6% SGST', 29, 0, 1, 0, 0, '6.00', 'SGST'),
(13, '9% SGST', 29, 0, 1, 0, 0, '9.00', 'SGST'),
(14, '14% SGST', 29, 0, 1, 0, 0, '14.00', 'SGST'),
(18, 'Sales Accounts', 14, 0, 0, 0, 0, '0.00', ''),
(19, '0% SGST', 30, 0, 1, 0, 0, '0.00', 'SGST'),
(20, '2.5% SGST', 30, 0, 1, 0, 0, '2.50', 'SGST'),
(21, '6% SGST', 30, 0, 1, 0, 0, '6.00', 'SGST'),
(22, '9% SGST', 30, 0, 1, 0, 0, '9.00', 'SGST'),
(23, '0% CGST', 30, 0, 1, 0, 0, '0.00', 'CGST'),
(24, '2.5% CGST', 30, 0, 1, 0, 0, '2.50', 'CGST'),
(25, '6% CGST', 30, 0, 1, 0, 0, '6.00', 'CGST'),
(26, '9% CGST', 30, 0, 1, 0, 0, '9.00', 'CGST'),
(27, '14%CGST', 30, 0, 1, 0, 0, '14.00', 'CGST'),
(28, '14% SGST', 30, 0, 1, 0, 0, '14.00', 'SGST'),
(29, 'Petty Cash', 31, 0, 1, 0, 0, '0.00', ''),
(30, 'customer3', 22, 1, 1, 0, 3, '0.00', NULL),
(31, 'customer1', 22, 0, 1, 0, 1, '0.00', NULL),
(32, 'customer2', 22, 0, 1, 0, 2, '0.00', NULL),
(33, 'customer3', 22, 1, 1, 0, 3, '0.00', NULL),
(34, 'customer4', 22, 0, 1, 0, 4, '0.00', NULL),
(35, 'supplier1', 25, 0, 1, 1, 0, '0.00', NULL),
(36, 'supplier2', 25, 1, 1, 2, 0, '0.00', NULL),
(37, 'supplier3', 25, 0, 1, 3, 0, '0.00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nature_of_groups`
--

CREATE TABLE `nature_of_groups` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nature_of_groups`
--

INSERT INTO `nature_of_groups` (`id`, `name`) VALUES
(1, 'Assets'),
(2, 'Liabilities'),
(3, 'Income'),
(4, 'Expenses');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'Rajasthan');

-- --------------------------------------------------------

--
-- Table structure for table `stock_groups`
--

CREATE TABLE `stock_groups` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `company_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`) VALUES
(1, 'killo gram'),
(2, 'centimeter');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` varchar(10) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `active`) VALUES
(2, 'Abhilash Lohar', 'hello', '$2y$10$byO0PcIW4AN3Vr4XV756K.3tt4XO.vVJKJUgp75NhQ11aQ79LoYGa', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounting_entries`
--
ALTER TABLE `accounting_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accounting_groups`
--
ALTER TABLE `accounting_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_users`
--
ALTER TABLE `company_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ledgers`
--
ALTER TABLE `ledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nature_of_groups`
--
ALTER TABLE `nature_of_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_groups`
--
ALTER TABLE `stock_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounting_entries`
--
ALTER TABLE `accounting_entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `accounting_groups`
--
ALTER TABLE `accounting_groups`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_users`
--
ALTER TABLE `company_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ledgers`
--
ALTER TABLE `ledgers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `nature_of_groups`
--
ALTER TABLE `nature_of_groups`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stock_groups`
--
ALTER TABLE `stock_groups`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
