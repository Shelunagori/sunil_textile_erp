-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2017 at 11:45 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
  `company_id` int(10) NOT NULL,
  `customer` tinyint(1) DEFAULT NULL,
  `supplier` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounting_groups`
--

INSERT INTO `accounting_groups` (`id`, `nature_of_group_id`, `name`, `parent_id`, `lft`, `rght`, `company_id`, `customer`, `supplier`) VALUES
(1, 2, 'Branch / Divisions', NULL, 1, 2, 1, NULL, NULL),
(2, 2, 'Capital Account', NULL, 3, 6, 1, NULL, NULL),
(3, 1, 'Current Assets', NULL, 7, 30, 1, NULL, NULL),
(4, 2, 'Current Liabilities', NULL, 31, 42, 1, NULL, NULL),
(5, 4, 'Direct Expenses', NULL, 43, 44, 1, NULL, NULL),
(6, 3, 'Direct Incomes', NULL, 45, 46, 1, NULL, NULL),
(7, 1, 'Fixed Assets', NULL, 47, 48, 1, NULL, NULL),
(8, 4, 'Indirect Expenses', NULL, 49, 50, 1, NULL, NULL),
(9, 3, 'Indirect Incomes', NULL, 51, 52, 1, NULL, NULL),
(10, 1, 'Investments', NULL, 53, 54, 1, NULL, NULL),
(11, 2, 'Loans (Liability)', NULL, 55, 62, 1, NULL, NULL),
(12, 1, 'Misc. Expenses (ASSET)', NULL, 63, 64, 1, NULL, NULL),
(13, 4, 'Purchase Accounts', NULL, 65, 66, 1, NULL, NULL),
(14, 3, 'Sales Accounts', NULL, 67, 68, 1, NULL, NULL),
(15, 2, 'Suspense A/c', NULL, 69, 72, 1, NULL, NULL),
(16, NULL, 'Reserves & Surplus', 2, 4, 5, 1, NULL, NULL),
(17, NULL, 'Bank Accounts', 3, 8, 9, 1, NULL, NULL),
(18, NULL, 'Cash-in-hand', 3, 10, 11, 1, NULL, NULL),
(19, NULL, 'Deposits (Asset)', 3, 12, 13, 1, NULL, NULL),
(20, NULL, 'Loans & Advances (Asset)', 3, 14, 15, 1, NULL, NULL),
(21, NULL, 'Stock-in-hand', 3, 16, 17, 1, NULL, NULL),
(22, NULL, 'Sundry Debtors', 3, 18, 29, 1, 1, NULL),
(23, NULL, 'Duties & Taxes', 4, 32, 37, 1, NULL, NULL),
(24, NULL, 'Provisions', 4, 38, 39, 1, NULL, NULL),
(25, NULL, 'Sundry Creditors', 4, 40, 41, 1, NULL, 1),
(26, NULL, 'Bank OD A/c', 11, 56, 57, 1, NULL, NULL),
(27, NULL, 'Secured Loans', 11, 58, 59, 1, NULL, NULL),
(28, NULL, 'Unsecured Loans', 11, 60, 61, 1, NULL, NULL),
(29, NULL, 'Input GST', 23, 33, 34, 1, NULL, NULL),
(30, NULL, 'Output GST', 23, 35, 36, 1, NULL, NULL),
(31, NULL, 'dd', NULL, 73, 74, 0, NULL, NULL),
(32, 1, 'bill1', NULL, 75, 76, 0, NULL, NULL),
(33, NULL, 'account12', 15, 70, 71, 0, NULL, NULL),
(34, NULL, 'Type 1 customers', 22, 19, 28, 0, NULL, NULL),
(35, NULL, 'type 2 customers', 34, 20, 27, 0, NULL, NULL),
(36, NULL, 'type 3 customers', 35, 21, 26, 0, NULL, NULL),
(37, NULL, 'type 4 customers', 36, 22, 25, 0, NULL, NULL),
(38, NULL, 'type 5 customers', 37, 23, 24, 0, NULL, NULL);

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

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `state_id`, `financial_year_begins_from`, `books_beginning_from`, `address`, `phone_no`, `mobile`, `fax_no`, `email`, `gstin`, `pan`) VALUES
(1, 'Company 1', 1, '2017-04-01', '2017-04-01', '', '', '', '', '', '0834523523', ''),
(2, 'Company 2', 1, '2017-04-01', '2017-04-01', '', '', '', '', '', '0834523523', '');

-- --------------------------------------------------------

--
-- Table structure for table `company_users`
--

CREATE TABLE `company_users` (
  `id` int(10) NOT NULL,
  `company_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_users`
--

INSERT INTO `company_users` (`id`, `company_id`, `user_id`) VALUES
(1, 1, 3),
(2, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `state_id` int(10) NOT NULL,
  `company_id` int(10) NOT NULL,
  `gstin` varchar(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `address` text,
  `freeze` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `state_id`, `company_id`, `gstin`, `email`, `mobile`, `address`, `freeze`) VALUES
(1, 'naman kumar', 1, 1, 'dfdsfdsfdsfdsfdsfdsf', '', '', '', 0),
(2, 'patel', 1, 1, 'cxxczxcz', '', '', '', 0),
(4, 'nukul', 1, 1, 'csdxcd34343432', 'nukul@gmail.com', '3356756757', 'udaipur', 0),
(5, 'sunney deol', 1, 1, 'dcdcdssdasd12122', '', '', '', 0),
(6, 'kapil', 1, 1, 'sacxsd232', '', '', '', 0),
(7, 'nagarjun ji', 1, 1, 'dcvdsf5454', '', '', '', 0),
(8, 'abhiram gut', 1, 1, 'gfert54t5', '', '', '', 0),
(9, 'harish suthar', 1, 1, 'cdscdscdsc234', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `financial_years`
--

CREATE TABLE `financial_years` (
  `id` int(10) NOT NULL,
  `fy_from` date NOT NULL,
  `fy_to` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `company_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financial_years`
--

INSERT INTO `financial_years` (`id`, `fy_from`, `fy_to`, `status`, `company_id`) VALUES
(1, '2017-04-01', '2018-03-31', 'open', 1),
(2, '2018-04-01', '2019-03-31', 'closed', 1);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `item_code` int(10) NOT NULL,
  `hsn_code` varchar(30) NOT NULL,
  `unit_id` int(10) NOT NULL,
  `stock_group_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `item_code`, `hsn_code`, `unit_id`, `stock_group_id`) VALUES
(1, 'kapda', 1, '12s', 1, 1),
(2, 'iwerjk', 2, '32432', 1, 0),
(3, 'iwerjk', 3, '32432', 1, 0),
(4, 'dsfsdf', 4, 'werwr', 1, 0),
(5, 'dsfsdf', 5, 'werwr', 1, 0),
(6, 'dsfsdf', 6, 'werwr', 1, 0),
(7, 'd', 7, 'e3', 1, 0),
(8, 'wsx', 8, 'dsfdsfs3342', 1, 1),
(9, 'wsx', 9, 'dsfdsfs3342', 1, 1),
(10, 'dd', 10, 'ddfd123', 1, 1),
(11, 'qazxs', 11, 'dfes3', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `item_ledgers`
--

CREATE TABLE `item_ledgers` (
  `id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `transaction_date` date NOT NULL,
  `quantity` decimal(10,2) NOT NULL,
  `rate` decimal(15,2) NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `status` varchar(10) NOT NULL,
  `is_opening_balance` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_ledgers`
--

INSERT INTO `item_ledgers` (`id`, `item_id`, `transaction_date`, `quantity`, `rate`, `amount`, `status`, `is_opening_balance`) VALUES
(1, 9, '2017-04-01', '5.00', '6.00', '30.00', 'in', 'yes'),
(2, 11, '2017-04-01', '12.00', '10.00', '120.00', 'in', 'yes');

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
  `gst_type` varchar(10) DEFAULT NULL,
  `bill_to_bill_accounting` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ledgers`
--

INSERT INTO `ledgers` (`id`, `name`, `accounting_group_id`, `freeze`, `company_id`, `supplier_id`, `customer_id`, `tax_percentage`, `gst_type`, `bill_to_bill_accounting`) VALUES
(3, 'Purchase Account', 13, 0, 0, 0, 0, '0.00', '', ''),
(4, '0% CGST', 29, 0, 1, 0, 0, '0.00', 'CGST', ''),
(5, '2.5% CGST', 29, 0, 1, 0, 0, '2.50', 'CGST', ''),
(6, '6% CGST', 29, 0, 1, 0, 0, '6.00', 'CGST', ''),
(7, 'nagarjun ji', 29, 0, 1, 0, 0, '9.00', 'CGST', ''),
(8, '14% CGST', 29, 0, 1, 0, 0, '14.00', 'CGST', ''),
(9, '0% SGST', 29, 0, 1, 0, 0, '0.00', 'SGST', ''),
(10, '2.5% SGST', 29, 0, 1, 0, 0, '2.50', 'SGST', ''),
(12, '6% SGST', 29, 0, 1, 0, 0, '6.00', 'SGST', ''),
(13, '9% SGST', 29, 0, 1, 0, 0, '9.00', 'SGST', ''),
(14, '14% SGST', 29, 0, 1, 0, 0, '14.00', 'SGST', ''),
(18, 'Sales Accounts', 14, 0, 0, 0, 0, '0.00', '', ''),
(19, '0% SGST', 30, 0, 1, 0, 0, '0.00', 'SGST', ''),
(20, '2.5% SGST', 30, 0, 1, 0, 0, '2.50', 'SGST', ''),
(21, '6% SGST', 30, 0, 1, 0, 0, '6.00', 'SGST', ''),
(22, '9% SGST', 30, 0, 1, 0, 0, '9.00', 'SGST', ''),
(23, '0% CGST', 30, 0, 1, 0, 0, '0.00', 'CGST', ''),
(24, '2.5% CGST', 30, 0, 1, 0, 0, '2.50', 'CGST', ''),
(25, '6% CGST', 30, 0, 1, 0, 0, '6.00', 'CGST', ''),
(26, '9% CGST', 30, 0, 1, 0, 0, '9.00', 'CGST', ''),
(27, '14%CGST', 30, 0, 1, 0, 0, '14.00', 'CGST', ''),
(28, '14% SGST', 30, 0, 1, 0, 0, '14.00', 'SGST', ''),
(29, 'Petty Cash', 31, 0, 1, 0, 0, '0.00', '', ''),
(30, 'customer3', 22, 1, 1, 0, 3, '0.00', NULL, ''),
(31, 'customer1', 22, 0, 1, 0, 1, '0.00', NULL, ''),
(32, 'customer2', 22, 0, 1, 0, 2, '0.00', NULL, ''),
(33, 'customer3', 22, 1, 1, 0, 3, '0.00', NULL, ''),
(34, 'customer4', 22, 0, 1, 0, 4, '0.00', NULL, ''),
(35, 'supplier1', 25, 0, 1, 1, 0, '0.00', NULL, ''),
(36, 'supplier2', 25, 1, 1, 2, 0, '0.00', NULL, ''),
(37, 'supplier3', 25, 0, 1, 3, 0, '0.00', NULL, ''),
(38, 'kapil', 22, 0, 1, 0, 0, '0.00', NULL, ''),
(39, 'gopal dla', 25, 0, 1, 0, 0, '0.00', NULL, ''),
(40, 'man\'sa  ji', 25, 0, 1, 6, 0, '0.00', NULL, ''),
(41, 'nagarjun ji', 22, 0, 1, 0, 7, '0.00', NULL, ''),
(42, 'abhiram gut', 22, 0, 1, 0, 8, '0.00', NULL, 'yes'),
(43, 'harish suthar', 37, 0, 1, 0, 9, '0.00', NULL, 'no'),
(44, 'choudhhary supplier', 25, 0, 1, 7, 0, '0.00', NULL, 'yes'),
(45, 'kaka fuka supplier', 25, 0, 1, 8, 0, '0.00', NULL, 'no'),
(46, 'ravish kumar', 1, 0, 0, 0, 0, '0.00', NULL, ''),
(47, 'cxzc', 2, 0, 0, 0, 0, '0.00', NULL, '');

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

--
-- Dumping data for table `stock_groups`
--

INSERT INTO `stock_groups` (`id`, `name`, `parent_id`, `lft`, `rght`, `company_id`) VALUES
(1, 'Group 1', NULL, 1, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `state_id` int(10) NOT NULL,
  `company_id` int(10) NOT NULL,
  `gstin` varchar(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `address` text,
  `freeze` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `state_id`, `company_id`, `gstin`, `email`, `mobile`, `address`, `freeze`) VALUES
(1, 'nirma pvt ltd', 1, 0, 'dsfdsgf4545345tgdfg', 'niru@gmail.com', '2345466666', 'zxczxcxczxczxczx\r\nudaipur(raj)', 0),
(2, 'papu gaba wala', 1, 1, 'x zxc xcxxcx', 'papu@yahoo.com', '1232323344', 'sxsxsx', 0),
(3, 'bh', 1, 1, 'njm', '', '', '', 0),
(4, 'bh', 1, 1, 'njm', '', '', '', 0),
(5, 'gopal dla', 1, 1, 'cdcdcd232313', '', '', '', 0),
(6, 'man\'sa  ji', 1, 1, 'vfdg545', '', '', '', 0),
(7, 'choudhhary supplier', 1, 1, 'cvdfvgd45r4354', '', '3434343432', '23434224', 0),
(8, 'kaka fuka supplier', 1, 1, 'dcvcvdcv', '', '', '', 0);

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
(3, 'company1', 'company1', '$2y$10$Asq6ce7MpgbK/.ByOYY25e0oBiHS/6eW27VLfLgZqFQGvy0CVGvRu', 'yes'),
(4, 'company2', 'company2', '$2y$10$AK/JEB.mGCfJn.hxMmoieepiCMhjuYPtdM3eyMO1IDqOZDeJHHeYC', 'yes');

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
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financial_years`
--
ALTER TABLE `financial_years`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_ledgers`
--
ALTER TABLE `item_ledgers`
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
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `company_users`
--
ALTER TABLE `company_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `financial_years`
--
ALTER TABLE `financial_years`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `item_ledgers`
--
ALTER TABLE `item_ledgers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ledgers`
--
ALTER TABLE `ledgers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
