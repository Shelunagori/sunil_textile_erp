-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2017 at 12:39 PM
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
  `debit` decimal(12,2) DEFAULT NULL,
  `credit` decimal(15,2) DEFAULT NULL,
  `transaction_date` date NOT NULL,
  `company_id` int(10) NOT NULL,
  `purchase_voucher_id` int(10) DEFAULT NULL,
  `purchase_voucher_row_id` int(10) DEFAULT NULL,
  `is_opening_balance` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounting_entries`
--

INSERT INTO `accounting_entries` (`id`, `ledger_id`, `debit`, `credit`, `transaction_date`, `company_id`, `purchase_voucher_id`, `purchase_voucher_row_id`, `is_opening_balance`) VALUES
(116, 97, NULL, '1000.00', '2017-04-01', 1, NULL, NULL, 'yes'),
(117, 98, '1000.00', NULL, '2017-04-01', 1, NULL, NULL, 'yes'),
(120, 97, NULL, '200.00', '2017-04-03', 1, NULL, NULL, NULL),
(121, 98, '200.00', NULL, '2017-04-03', 1, NULL, NULL, NULL),
(122, 97, '20.00', '0.00', '2017-04-04', 1, NULL, NULL, NULL),
(123, 98, '0.00', '20.00', '2017-04-04', 1, NULL, NULL, NULL),
(127, 35, NULL, '10.00', '2017-09-02', 1, 8, 25, NULL),
(128, 3, '1.00', NULL, '2017-09-02', 1, 8, 26, NULL),
(129, 30, '1.00', NULL, '2017-09-02', 1, 8, 27, NULL),
(130, 31, '1.00', NULL, '2017-09-02', 1, 8, 28, NULL),
(131, 32, '1.00', NULL, '2017-09-02', 1, 8, 29, NULL),
(132, 34, '6.00', NULL, '2017-09-02', 1, 8, 30, NULL),
(133, 99, '100.00', NULL, '2017-04-01', 1, NULL, NULL, 'yes'),
(134, 100, NULL, '200.00', '2017-04-01', 1, NULL, NULL, 'yes'),
(135, 101, '1000.00', NULL, '2017-04-01', 1, NULL, NULL, 'yes'),
(136, 102, NULL, '3000.00', '2017-04-01', 1, NULL, NULL, 'yes'),
(137, 103, '80.00', NULL, '2017-04-01', 1, NULL, NULL, 'yes'),
(138, 104, NULL, '90.00', '2017-04-01', 1, NULL, NULL, 'yes'),
(139, 105, '500.00', NULL, '2017-04-01', 1, NULL, NULL, 'yes'),
(140, 106, NULL, '10.00', '2017-04-01', 1, NULL, NULL, 'yes');

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
  `supplier` tinyint(1) DEFAULT NULL,
  `purchase_voucher_party` tinyint(1) DEFAULT NULL,
  `purchase_voucher_purchase_account` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounting_groups`
--

INSERT INTO `accounting_groups` (`id`, `nature_of_group_id`, `name`, `parent_id`, `lft`, `rght`, `company_id`, `customer`, `supplier`, `purchase_voucher_party`, `purchase_voucher_purchase_account`) VALUES
(1, 2, 'Branch / Divisions', NULL, 1, 6, 1, NULL, NULL, NULL, NULL),
(2, 2, 'Capital Account', NULL, 7, 10, 1, NULL, NULL, NULL, NULL),
(3, 1, 'Current Assets', NULL, 11, 36, 1, NULL, NULL, NULL, NULL),
(4, 2, 'Current Liabilities', NULL, 37, 52, 1, NULL, NULL, NULL, NULL),
(5, 4, 'Direct Expenses', NULL, 53, 58, 1, NULL, NULL, NULL, NULL),
(6, 3, 'Direct Incomes', NULL, 59, 62, 1, NULL, NULL, NULL, NULL),
(7, 1, 'Fixed Assets', NULL, 63, 66, 1, NULL, NULL, NULL, NULL),
(8, 4, 'Indirect Expenses', NULL, 67, 68, 1, NULL, NULL, NULL, NULL),
(9, 3, 'Indirect Incomes', NULL, 69, 70, 1, NULL, NULL, NULL, NULL),
(10, 1, 'Investments', NULL, 71, 72, 1, NULL, NULL, NULL, NULL),
(11, 2, 'Loans (Liability)', NULL, 73, 80, 1, NULL, NULL, NULL, NULL),
(12, 1, 'Misc. Expenses (ASSET)', NULL, 81, 82, 1, NULL, NULL, NULL, NULL),
(13, 4, 'Purchase Accounts', NULL, 83, 84, 1, NULL, NULL, NULL, 1),
(14, 3, 'Sales Accounts', NULL, 85, 86, 1, NULL, NULL, NULL, NULL),
(15, 2, 'Suspense A/c', NULL, 87, 90, 1, NULL, NULL, NULL, NULL),
(16, NULL, 'Reserves & Surplus', 2, 8, 9, 1, NULL, NULL, NULL, NULL),
(17, NULL, 'Bank Accounts', 3, 12, 13, 1, NULL, NULL, NULL, NULL),
(18, NULL, 'Cash-in-hand', 3, 14, 15, 1, NULL, NULL, 1, NULL),
(19, NULL, 'Deposits (Asset)', 3, 16, 17, 1, NULL, NULL, NULL, NULL),
(20, NULL, 'Loans & Advances (Asset)', 3, 18, 19, 1, NULL, NULL, NULL, NULL),
(21, NULL, 'Stock-in-hand', 3, 20, 21, 1, NULL, NULL, NULL, NULL),
(22, NULL, 'Sundry Debtors', 3, 22, 35, 1, 1, NULL, NULL, NULL),
(23, NULL, 'Duties & Taxes', 4, 38, 43, 1, NULL, NULL, NULL, NULL),
(24, NULL, 'Provisions', 4, 44, 45, 1, NULL, NULL, NULL, NULL),
(25, NULL, 'Sundry Creditors', 4, 46, 51, 1, NULL, 1, 1, NULL),
(26, NULL, 'Bank OD A/c', 11, 74, 75, 1, NULL, NULL, NULL, NULL),
(27, NULL, 'Secured Loans', 11, 76, 77, 1, NULL, NULL, NULL, NULL),
(28, NULL, 'Unsecured Loans', 11, 78, 79, 1, NULL, NULL, NULL, NULL),
(29, NULL, 'Input GST', 23, 39, 40, 1, NULL, NULL, NULL, NULL),
(30, NULL, 'Output GST', 23, 41, 42, 1, NULL, NULL, NULL, NULL),
(31, NULL, 'dd', NULL, 91, 92, 0, NULL, NULL, NULL, NULL),
(32, 1, 'bill1', NULL, 93, 94, 0, NULL, NULL, NULL, NULL),
(33, NULL, 'account12', 15, 88, 89, 0, NULL, NULL, NULL, NULL),
(34, NULL, 'Type 1 customers', 22, 23, 32, 0, NULL, NULL, NULL, NULL),
(35, NULL, 'type 2 customers', 34, 24, 31, 0, NULL, NULL, NULL, NULL),
(36, NULL, 'type 3 customers', 35, 25, 30, 0, NULL, NULL, NULL, NULL),
(37, NULL, 'type 4 customers', 36, 26, 29, 0, NULL, NULL, NULL, NULL),
(38, NULL, 'type 5 customers', 37, 27, 28, 0, NULL, NULL, NULL, NULL),
(39, NULL, 'type 1 supplier', 25, 47, 48, 0, NULL, NULL, NULL, NULL),
(40, 3, 'accountent 1.0', 1, 2, 3, 1, NULL, NULL, NULL, NULL),
(41, 3, 'accountent 1.1', 1, 4, 5, 1, NULL, NULL, NULL, NULL),
(42, NULL, 'c', 6, 60, 61, 1, NULL, NULL, NULL, NULL),
(43, NULL, 'z', NULL, 95, 96, 1, NULL, NULL, NULL, NULL),
(44, 3, 'z', 5, 54, 55, 1, NULL, NULL, NULL, NULL),
(45, NULL, 'az', 5, 56, 57, 1, NULL, NULL, NULL, NULL),
(46, NULL, 'q', 7, 64, 65, 1, NULL, NULL, NULL, NULL),
(47, 1, 'rr', 25, 49, 50, 1, NULL, NULL, NULL, NULL),
(48, 1, 'sun', 22, 33, 34, 1, NULL, NULL, NULL, NULL),
(49, 3, 'test-group', NULL, 97, 110, 1, NULL, NULL, NULL, NULL),
(50, 1, 'test1', 49, 98, 103, 1, NULL, NULL, NULL, NULL),
(51, 1, 'test2', 49, 104, 109, 1, NULL, NULL, NULL, NULL),
(52, 1, 'test1.0', 50, 99, 100, 1, NULL, NULL, NULL, NULL),
(53, 1, 'test1.1', 50, 101, 102, 1, NULL, NULL, NULL, NULL),
(54, 1, 'test2.0', 51, 105, 106, 1, NULL, NULL, NULL, NULL),
(55, 1, 'test2.1', 51, 107, 108, 1, NULL, NULL, NULL, NULL);

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
(9, 'harish suthar', 1, 1, 'cdscdscdsc234', '', '', '', 0),
(10, 'sdsd', 1, 1, '', '', '', '', 0),
(11, 'nikil verma', 1, 1, 'sdasdas32', 'nikil@gmail.com', '8767564533', 'sdasdasd', 0),
(12, 'kalu singh', 1, 1, '', 'ww@gamil.com', '9877776656', '', 0),
(13, 'harish', 1, 1, '23ddcs', 'hari@gmail.com', '9837464653', 'cxcx', 0),
(14, 'sanju', 41, 1, '', '', '', '', 0),
(15, 'ravina tandan', 46, 1, '', '', '', '', 0);

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
-- Table structure for table `first_tamp_grn_records`
--

CREATE TABLE `first_tamp_grn_records` (
  `id` int(11) NOT NULL,
  `item_code` varchar(255) NOT NULL,
  `quantity` decimal(10,2) NOT NULL,
  `purchase_rate` decimal(15,2) NOT NULL,
  `sales_rate` decimal(15,2) NOT NULL,
  `user_id` int(10) NOT NULL,
  `company_id` int(10) NOT NULL,
  `processed` varchar(10) NOT NULL,
  `is_addition_item_data_required` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first_tamp_grn_records`
--

INSERT INTO `first_tamp_grn_records` (`id`, `item_code`, `quantity`, `purchase_rate`, `sales_rate`, `user_id`, `company_id`, `processed`, `is_addition_item_data_required`) VALUES
(1, '68HD876', '98.00', '850.00', '1100.00', 3, 1, 'Yes', 'Yes'),
(2, '44RTGR43', '30.00', '900.00', '1200.00', 3, 1, 'Yes', 'Yes'),
(3, '768JSDFH87', '118.00', '550.00', '999.00', 3, 1, 'Yes', 'Yes'),
(4, '118JSDFH11', '11.00', '100.00', '210.00', 3, 1, 'Yes', 'Yes'),
(5, '118JSDFH12', '12.00', '101.00', '220.00', 3, 1, 'Yes', 'Yes'),
(6, '118JSDFH13', '13.00', '102.00', '230.00', 3, 1, 'Yes', 'Yes'),
(7, '118JSDFH14', '14.00', '103.00', '240.00', 3, 1, 'Yes', 'Yes'),
(8, '118JSDFH15', '15.00', '104.00', '250.00', 3, 1, 'Yes', 'Yes'),
(9, '118JSDFH16', '16.00', '105.00', '260.00', 3, 1, 'Yes', 'Yes'),
(10, '118JSDFH17', '17.00', '106.00', '270.00', 3, 1, 'Yes', 'Yes'),
(11, '118JSDFH18', '18.00', '107.00', '280.00', 3, 1, 'Yes', 'Yes'),
(12, '118JSDFH19', '19.00', '108.00', '290.00', 3, 1, 'Yes', 'Yes'),
(13, '118JSDFH20', '20.00', '109.00', '300.00', 3, 1, 'Yes', 'Yes'),
(14, '118JSDFH21', '21.00', '110.00', '310.00', 3, 1, 'Yes', 'Yes'),
(15, '118JSDFH22', '22.00', '111.00', '320.00', 3, 1, 'Yes', 'Yes'),
(16, '118JSDFH23', '23.00', '112.00', '330.00', 3, 1, 'Yes', 'Yes'),
(17, '118JSDFH24', '24.00', '113.00', '340.00', 3, 1, 'Yes', 'Yes'),
(18, '118JSDFH25', '25.00', '114.00', '350.00', 3, 1, 'Yes', 'Yes'),
(19, '118JSDFH26', '26.00', '115.00', '360.00', 3, 1, 'Yes', 'Yes'),
(20, '118JSDFH27', '27.00', '116.00', '370.00', 3, 1, 'Yes', 'Yes'),
(21, '118JSDFH28', '28.00', '117.00', '380.00', 3, 1, 'Yes', 'Yes'),
(22, '118JSDFH29', '29.00', '118.00', '390.00', 3, 1, 'Yes', 'Yes'),
(23, '118JSDFH30', '30.00', '119.00', '400.00', 3, 1, 'Yes', 'Yes'),
(24, '118JSDFH31', '31.00', '120.00', '410.00', 3, 1, 'Yes', 'Yes'),
(25, '118JSDFH32', '32.00', '121.00', '420.00', 3, 1, 'Yes', 'Yes'),
(26, '118JSDFH33', '33.00', '122.00', '430.00', 3, 1, 'Yes', 'Yes'),
(27, '118JSDFH34', '34.00', '123.00', '440.00', 3, 1, 'Yes', 'Yes'),
(28, '118JSDFH35', '35.00', '124.00', '450.00', 3, 1, 'Yes', 'Yes'),
(29, '118JSDFH36', '36.00', '125.00', '460.00', 3, 1, 'Yes', 'Yes'),
(30, '118JSDFH37', '37.00', '126.00', '470.00', 3, 1, 'Yes', 'Yes'),
(31, '118JSDFH38', '38.00', '127.00', '480.00', 3, 1, 'Yes', 'Yes'),
(32, '118JSDFH39', '39.00', '128.00', '490.00', 3, 1, 'Yes', 'Yes'),
(33, '118JSDFH40', '40.00', '129.00', '500.00', 3, 1, 'Yes', 'Yes'),
(34, '118JSDFH41', '41.00', '130.00', '510.00', 3, 1, 'Yes', 'Yes'),
(35, '118JSDFH42', '42.00', '131.00', '520.00', 3, 1, 'Yes', 'Yes'),
(36, '118JSDFH43', '43.00', '132.00', '530.00', 3, 1, 'Yes', 'Yes'),
(37, '118JSDFH44', '44.00', '133.00', '540.00', 3, 1, 'Yes', 'Yes'),
(38, '118JSDFH45', '45.00', '134.00', '550.00', 3, 1, 'Yes', 'Yes'),
(39, '118JSDFH46', '46.00', '135.00', '560.00', 3, 1, 'Yes', 'Yes'),
(40, '118JSDFH47', '47.00', '136.00', '570.00', 3, 1, 'Yes', 'Yes'),
(41, '118JSDFH48', '48.00', '137.00', '580.00', 3, 1, 'Yes', 'Yes'),
(42, '118JSDFH49', '49.00', '138.00', '590.00', 3, 1, 'Yes', 'Yes'),
(43, '118JSDFH50', '50.00', '139.00', '600.00', 3, 1, 'Yes', 'Yes'),
(44, '118JSDFH51', '51.00', '140.00', '610.00', 3, 1, 'Yes', 'Yes'),
(45, '118JSDFH52', '52.00', '141.00', '620.00', 3, 1, 'Yes', 'Yes'),
(46, '118JSDFH53', '53.00', '142.00', '630.00', 3, 1, 'Yes', 'Yes'),
(47, '118JSDFH54', '54.00', '143.00', '640.00', 3, 1, 'Yes', 'Yes'),
(48, '118JSDFH55', '55.00', '144.00', '650.00', 3, 1, 'Yes', 'Yes'),
(49, '118JSDFH56', '56.00', '145.00', '660.00', 3, 1, 'Yes', 'Yes'),
(50, '118JSDFH57', '57.00', '146.00', '670.00', 3, 1, 'Yes', 'Yes'),
(51, '118JSDFH58', '58.00', '147.00', '680.00', 3, 1, 'Yes', 'Yes'),
(52, '118JSDFH59', '59.00', '148.00', '690.00', 3, 1, 'Yes', 'Yes'),
(53, '118JSDFH60', '60.00', '149.00', '700.00', 3, 1, 'Yes', 'Yes'),
(54, '118JSDFH61', '61.00', '150.00', '710.00', 3, 1, 'Yes', 'Yes'),
(55, '118JSDFH62', '62.00', '151.00', '720.00', 3, 1, 'Yes', 'Yes'),
(56, '118JSDFH63', '63.00', '152.00', '730.00', 3, 1, 'Yes', 'Yes'),
(57, '118JSDFH64', '64.00', '153.00', '740.00', 3, 1, 'Yes', 'Yes'),
(58, '118JSDFH65', '65.00', '154.00', '750.00', 3, 1, 'Yes', 'Yes'),
(59, '118JSDFH66', '66.00', '155.00', '760.00', 3, 1, 'Yes', 'Yes'),
(60, '118JSDFH67', '67.00', '156.00', '770.00', 3, 1, 'Yes', 'Yes'),
(61, '118JSDFH68', '68.00', '157.00', '780.00', 3, 1, 'Yes', 'Yes'),
(62, '118JSDFH69', '69.00', '158.00', '790.00', 3, 1, 'Yes', 'Yes'),
(63, '118JSDFH70', '70.00', '159.00', '800.00', 3, 1, 'Yes', 'Yes'),
(64, '118JSDFH71', '71.00', '160.00', '810.00', 3, 1, 'Yes', 'Yes'),
(65, '118JSDFH72', '72.00', '161.00', '820.00', 3, 1, 'Yes', 'Yes'),
(66, '118JSDFH73', '73.00', '162.00', '830.00', 3, 1, 'Yes', 'Yes'),
(67, '118JSDFH74', '74.00', '163.00', '840.00', 3, 1, 'Yes', 'Yes'),
(68, '118JSDFH75', '75.00', '164.00', '850.00', 3, 1, 'Yes', 'Yes'),
(69, '118JSDFH76', '76.00', '165.00', '860.00', 3, 1, 'Yes', 'Yes'),
(70, '118JSDFH77', '77.00', '166.00', '870.00', 3, 1, 'Yes', 'Yes'),
(71, '118JSDFH78', '78.00', '167.00', '880.00', 3, 1, 'Yes', 'Yes'),
(72, '118JSDFH79', '79.00', '168.00', '890.00', 3, 1, 'Yes', 'Yes'),
(73, '118JSDFH80', '80.00', '169.00', '900.00', 3, 1, 'Yes', 'Yes'),
(74, '118JSDFH81', '81.00', '170.00', '910.00', 3, 1, 'Yes', 'Yes'),
(75, '118JSDFH82', '82.00', '171.00', '920.00', 3, 1, 'Yes', 'Yes'),
(76, '118JSDFH83', '83.00', '172.00', '930.00', 3, 1, 'Yes', 'Yes'),
(77, '118JSDFH84', '84.00', '173.00', '940.00', 3, 1, 'Yes', 'Yes'),
(78, '118JSDFH85', '85.00', '174.00', '950.00', 3, 1, 'Yes', 'Yes'),
(79, '118JSDFH86', '86.00', '175.00', '960.00', 3, 1, 'Yes', 'Yes'),
(80, '118JSDFH87', '87.00', '176.00', '970.00', 3, 1, 'Yes', 'Yes'),
(81, '118JSDFH88', '88.00', '177.00', '980.00', 3, 1, 'Yes', 'Yes'),
(82, '118JSDFH89', '89.00', '178.00', '990.00', 3, 1, 'Yes', 'Yes'),
(83, '118JSDFH90', '90.00', '179.00', '1000.00', 3, 1, 'Yes', 'Yes'),
(84, '118JSDFH91', '91.00', '180.00', '1010.00', 3, 1, 'Yes', 'Yes'),
(85, '118JSDFH92', '92.00', '181.00', '1020.00', 3, 1, 'Yes', 'Yes'),
(86, '118JSDFH93', '93.00', '182.00', '1030.00', 3, 1, 'Yes', 'Yes'),
(87, '118JSDFH94', '94.00', '183.00', '1040.00', 3, 1, 'Yes', 'Yes'),
(88, '118JSDFH95', '95.00', '184.00', '1050.00', 3, 1, 'Yes', 'Yes'),
(89, '118JSDFH96', '96.00', '185.00', '1060.00', 3, 1, 'Yes', 'Yes'),
(90, '118JSDFH97', '97.00', '186.00', '1070.00', 3, 1, 'Yes', 'Yes'),
(91, '118JSDFH98', '98.00', '187.00', '1080.00', 3, 1, 'Yes', 'Yes'),
(92, '118JSDFH99', '99.00', '188.00', '1090.00', 3, 1, 'Yes', 'Yes'),
(93, '118JSDFH100', '100.00', '189.00', '1100.00', 3, 1, 'Yes', 'Yes'),
(94, '118JSDFH101', '101.00', '190.00', '1110.00', 3, 1, 'Yes', 'Yes'),
(95, '118JSDFH102', '102.00', '191.00', '1120.00', 3, 1, 'Yes', 'Yes'),
(96, '118JSDFH103', '103.00', '192.00', '1130.00', 3, 1, 'Yes', 'Yes'),
(97, '118JSDFH104', '104.00', '193.00', '1140.00', 3, 1, 'Yes', 'Yes'),
(98, '118JSDFH105', '105.00', '194.00', '1150.00', 3, 1, 'Yes', 'Yes'),
(99, '118JSDFH106', '106.00', '195.00', '1160.00', 3, 1, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `grns`
--

CREATE TABLE `grns` (
  `id` int(10) NOT NULL,
  `voucher_no` int(10) NOT NULL,
  `location_id` int(10) NOT NULL,
  `company_id` int(10) NOT NULL,
  `transaction_date` date NOT NULL,
  `reference_no` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grn_rows`
--

CREATE TABLE `grn_rows` (
  `id` int(10) NOT NULL,
  `grn_id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `quantity` decimal(10,2) NOT NULL,
  `purchase_rate` decimal(15,2) NOT NULL,
  `sale_rate` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gst_figures`
--

CREATE TABLE `gst_figures` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company_id` int(10) NOT NULL,
  `tax_percentage` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gst_figures`
--

INSERT INTO `gst_figures` (`id`, `name`, `company_id`, `tax_percentage`) VALUES
(1, '0%', 1, '0.00'),
(2, '5%', 1, '5.00'),
(3, '12%', 1, '12.00'),
(4, '18%', 1, '18.00'),
(5, '28%', 1, '28.00');

-- --------------------------------------------------------

--
-- Table structure for table `inwards`
--

CREATE TABLE `inwards` (
  `id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `quantity` decimal(10,2) NOT NULL,
  `rate` decimal(15,2) NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `stock_journal_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inwards`
--

INSERT INTO `inwards` (`id`, `item_id`, `quantity`, `rate`, `amount`, `stock_journal_id`) VALUES
(34, 1, '4.00', '7.00', '28.00', 2),
(35, 1, '100.00', '100.00', '10000.00', 3),
(36, 2, '2.00', '2.00', '4.00', 4);

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
  `stock_group_id` int(10) NOT NULL,
  `company_id` int(10) NOT NULL,
  `size_id` int(10) DEFAULT NULL,
  `shade_id` int(10) DEFAULT NULL,
  `description` text,
  `gst_figure_id` int(10) NOT NULL,
  `input_cgst_ledger_id` int(10) NOT NULL,
  `input_sgst_ledger_id` int(10) NOT NULL,
  `input_igst_ledger_id` int(10) NOT NULL,
  `output_cgst_ledger_id` int(10) NOT NULL,
  `output_sgst_ledger_id` int(10) NOT NULL,
  `output_igst_ledger_id` int(10) NOT NULL,
  `first_gst_figure_id` int(10) DEFAULT NULL,
  `gst_amount` decimal(15,2) DEFAULT NULL,
  `second_gst_figure_id` int(10) DEFAULT NULL,
  `kind_of_gst` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `item_code`, `hsn_code`, `unit_id`, `stock_group_id`, `company_id`, `size_id`, `shade_id`, `description`, `gst_figure_id`, `input_cgst_ledger_id`, `input_sgst_ledger_id`, `input_igst_ledger_id`, `output_cgst_ledger_id`, `output_sgst_ledger_id`, `output_igst_ledger_id`, `first_gst_figure_id`, `gst_amount`, `second_gst_figure_id`, `kind_of_gst`) VALUES
(20, 'wool suit', 20, 'xzx', 1, 1, 1, NULL, NULL, '', 2, 66, 67, 68, 69, 70, 71, NULL, NULL, NULL, NULL),
(21, 'nirmax', 21, 'csd', 1, 0, 1, NULL, 1, 'dss', 3, 72, 73, 74, 75, 76, 77, NULL, NULL, NULL, NULL),
(22, 'ASC', 22, 'asa', 2, 0, 1, NULL, NULL, '', 1, 60, 61, 62, 63, 64, 65, NULL, NULL, NULL, NULL),
(23, 'aaa', 23, 'asxsa', 1, 0, 1, NULL, NULL, '', 3, 72, 73, 74, 75, 76, 77, NULL, NULL, NULL, NULL),
(24, 'wool top', 0, '123', 1, 1, 1, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(25, 'green shirt', 0, '123', 1, 1, 1, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL),
(26, 'item 11', 24, 'sdsd', 1, 0, 1, NULL, NULL, '', 2, 66, 67, 68, 69, 70, 71, NULL, NULL, NULL, NULL),
(27, 'item12', 25, '12ss', 2, 2, 1, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 1, '900.00', 3, NULL),
(28, 'item 13', 26, '23', 2, 0, 1, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 3, '0.00', 3, 'fix');

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
  `is_opening_balance` varchar(10) DEFAULT NULL,
  `stock_journal_id` int(10) NOT NULL,
  `inward_id` int(10) DEFAULT NULL,
  `outward_id` int(10) DEFAULT NULL,
  `company_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_ledgers`
--

INSERT INTO `item_ledgers` (`id`, `item_id`, `transaction_date`, `quantity`, `rate`, `amount`, `status`, `is_opening_balance`, `stock_journal_id`, `inward_id`, `outward_id`, `company_id`) VALUES
(1, 1, '2017-04-01', '5.00', '20.00', '100.00', '', 'yes', 0, NULL, NULL, 1);

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
  `input_output` varchar(10) DEFAULT NULL,
  `gst_figure_id` int(10) DEFAULT NULL,
  `bill_to_bill_accounting` varchar(10) NOT NULL,
  `round_off` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ledgers`
--

INSERT INTO `ledgers` (`id`, `name`, `accounting_group_id`, `freeze`, `company_id`, `supplier_id`, `customer_id`, `tax_percentage`, `gst_type`, `input_output`, `gst_figure_id`, `bill_to_bill_accounting`, `round_off`) VALUES
(3, 'Purchase Account', 13, 0, 0, 0, 0, '0.00', '', NULL, NULL, '', 0),
(4, '0% CGST', 29, 0, 1, 0, 0, '0.00', 'CGST', NULL, NULL, '', 0),
(5, '2.5% CGST', 29, 0, 1, 0, 0, '2.50', 'CGST', NULL, NULL, '', 0),
(6, '6% CGST', 29, 0, 1, 0, 0, '6.00', 'CGST', NULL, NULL, '', 0),
(7, 'nagarjun ji', 29, 0, 1, 0, 0, '9.00', 'CGST', NULL, NULL, '', 0),
(8, '14% CGST', 29, 0, 1, 0, 0, '14.00', 'CGST', NULL, NULL, '', 0),
(9, '0% SGST', 29, 0, 1, 0, 0, '0.00', 'SGST', NULL, NULL, '', 0),
(10, '2.5% SGST', 29, 0, 1, 0, 0, '2.50', 'SGST', NULL, NULL, '', 0),
(12, '6% SGST', 29, 0, 1, 0, 0, '6.00', 'SGST', NULL, NULL, '', 0),
(13, '9% SGST', 29, 0, 1, 0, 0, '9.00', 'SGST', NULL, NULL, '', 0),
(14, '14% SGST', 29, 0, 1, 0, 0, '14.00', 'SGST', NULL, NULL, '', 0),
(18, 'Sales Accounts', 14, 0, 0, 0, 0, '0.00', '', NULL, NULL, '', 0),
(19, '0% SGST', 30, 0, 1, 0, 0, '0.00', 'SGST', NULL, NULL, '', 0),
(20, '2.5% SGST', 30, 0, 1, 0, 0, '2.50', 'SGST', NULL, NULL, '', 0),
(21, '6% SGST', 30, 0, 1, 0, 0, '6.00', 'SGST', NULL, 5, '', 0),
(22, '9% SGST', 30, 0, 1, 0, 0, '9.00', 'SGST', NULL, NULL, '', 0),
(23, '0% CGST', 30, 0, 1, 0, 0, '0.00', 'CGST', NULL, 5, '', 0),
(24, '2.5% CGST', 30, 0, 1, 0, 0, '2.50', 'CGST', NULL, NULL, '', 0),
(25, '6% CGST', 30, 0, 1, 0, 0, '6.00', 'CGST', NULL, NULL, '', 0),
(26, '9% CGST', 30, 0, 1, 0, 0, '9.00', 'CGST', NULL, NULL, '', 0),
(27, '14%CGST', 30, 0, 1, 0, 0, '14.00', 'CGST', NULL, NULL, '', 0),
(28, '14% SGST', 30, 0, 1, 0, 0, '14.00', 'SGST', NULL, NULL, '', 0),
(29, 'Petty Cash', 31, 0, 1, 0, 0, '0.00', '', NULL, NULL, '', 0),
(30, 'customer3', 22, 1, 1, 0, 3, '0.00', NULL, NULL, NULL, '', 0),
(31, 'customer1', 22, 0, 1, 0, 1, '0.00', NULL, NULL, NULL, '', 0),
(32, 'customer2', 22, 0, 1, 0, 2, '0.00', NULL, NULL, NULL, '', 0),
(33, 'customer3', 22, 1, 1, 0, 3, '0.00', NULL, NULL, NULL, '', 0),
(34, 'customer4', 22, 0, 1, 0, 4, '0.00', NULL, NULL, NULL, '', 0),
(35, 'supplier1', 25, 0, 1, 1, 0, '0.00', NULL, NULL, NULL, '', 0),
(36, 'supplier2', 25, 1, 1, 2, 0, '0.00', NULL, NULL, NULL, '', 0),
(37, 'supplier3', 25, 0, 1, 3, 0, '0.00', NULL, NULL, NULL, '', 0),
(38, 'kapil', 22, 0, 1, 0, 0, '0.00', NULL, NULL, NULL, '', 0),
(39, 'gopal dla', 25, 0, 1, 0, 0, '0.00', NULL, NULL, NULL, '', 0),
(40, 'man\'sa  ji', 25, 0, 1, 6, 0, '0.00', NULL, NULL, NULL, '', 0),
(41, 'nagarjun ji', 22, 0, 1, 0, 7, '0.00', NULL, NULL, NULL, '', 0),
(42, 'abhiram gut', 22, 0, 1, 0, 8, '0.00', NULL, NULL, NULL, 'yes', 0),
(43, 'harish suthar', 37, 0, 1, 0, 9, '0.00', NULL, NULL, NULL, 'no', 0),
(44, 'choudhhary supplier', 25, 0, 1, 7, 0, '0.00', NULL, NULL, NULL, 'yes', 0),
(45, 'kaka fuka supplier', 25, 0, 1, 8, 0, '0.00', NULL, NULL, NULL, 'no', 0),
(46, 'ravish kumar', 1, 0, 0, 0, 0, '0.00', NULL, NULL, NULL, '', 0),
(47, 'cxzc', 2, 0, 0, 0, 0, '0.00', NULL, NULL, NULL, '', 0),
(48, 'sdsd', 22, 0, 1, 0, 10, '0.00', NULL, NULL, NULL, 'yes', 0),
(49, 'nikil verma', 22, 0, 1, 0, 11, '0.00', NULL, NULL, NULL, 'yes', 0),
(50, 'hri hra', 25, 0, 1, 9, 0, '0.00', NULL, NULL, NULL, 'yes', 0),
(51, 'nav bharti pvt ltd', 39, 0, 1, 10, 0, '0.00', NULL, NULL, NULL, '', 0),
(52, 'kalu singh', 38, 0, 1, 0, 12, '0.00', NULL, NULL, NULL, 'no', 0),
(53, 'case', 18, 0, 0, 0, 0, '0.00', NULL, NULL, NULL, '', 0),
(54, 'supplier 1', 25, 0, 1, 11, 0, '0.00', NULL, NULL, NULL, 'no', 0),
(55, 'suppler 1', 25, 0, 1, 12, 0, '0.00', NULL, NULL, NULL, 'no', 0),
(56, 'harish', 34, 0, 1, 0, 13, '0.00', NULL, NULL, NULL, 'no', 0),
(57, 'dharamraj supplier', 25, 0, 1, 13, 0, '0.00', NULL, NULL, NULL, 'no', 0),
(58, 'ledger top', 1, 0, 1, 0, 0, '0.00', NULL, NULL, NULL, '', 0),
(59, 'ledger top 2', 1, 0, 1, 0, 0, '0.00', NULL, NULL, NULL, '', 0),
(60, '0% CGST (input)', 29, 0, 1, 0, 0, '0.00', 'cgst', 'input', 1, 'no', 0),
(61, '0% SGST (input)', 29, 0, 1, 0, 0, '0.00', 'sgst', 'input', 1, 'no', 0),
(62, '0% IGST (input)', 29, 0, 1, 0, 0, '0.00', 'igst', 'input', 1, 'no', 0),
(63, '0% CGST (output)', 29, 0, 1, 0, 0, '0.00', 'cgst', 'output', 1, 'no', 0),
(64, '0% SGST (output)', 29, 0, 1, 0, 0, '0.00', 'sgst', 'output', 1, 'no', 0),
(65, '0% IGST (output)', 29, 0, 1, 0, 0, '0.00', 'igst', 'output', 1, 'no', 0),
(66, '2.5% CGST (input)', 29, 0, 1, 0, 0, '0.00', 'cgst', 'input', 2, 'no', 0),
(67, '2.5% SGST (input)', 29, 0, 1, 0, 0, '0.00', 'sgst', 'input', 2, 'no', 0),
(68, '5% IGST (input)', 29, 0, 1, 0, 0, '0.00', 'igst', 'input', 2, 'no', 0),
(69, '2.5% CGST (output)', 29, 0, 1, 0, 0, '0.00', 'cgst', 'output', 2, 'no', 0),
(70, '2.5% SGST (output)', 29, 0, 1, 0, 0, '0.00', 'sgst', 'output', 2, 'no', 0),
(71, '5% IGST (output)', 29, 0, 1, 0, 0, '0.00', 'igst', 'output', 2, 'no', 0),
(72, '6% CGST (input)', 29, 0, 1, 0, 0, '0.00', 'cgst', 'input', 3, 'no', 0),
(73, '6% SGST (input)', 29, 0, 1, 0, 0, '0.00', 'sgst', 'input', 3, 'no', 0),
(74, '12% IGST (input)', 29, 0, 1, 0, 0, '0.00', 'igst', 'input', 3, 'no', 0),
(75, '6% CGST (output)', 29, 0, 1, 0, 0, '0.00', 'cgst', 'output', 3, 'no', 0),
(76, '6% SGST (output)', 29, 0, 1, 0, 0, '0.00', 'sgst', 'output', 3, 'no', 0),
(77, '12% IGST (output)', 29, 0, 1, 0, 0, '0.00', 'igst', 'output', 3, 'no', 0),
(78, '9% CGST (input)', 29, 0, 1, 0, 0, '0.00', 'cgst', 'input', 4, 'no', 0),
(79, '9% SGST (input)', 29, 0, 1, 0, 0, '0.00', 'sgst', 'input', 4, 'no', 0),
(80, '18% IGST (input)', 29, 0, 1, 0, 0, '0.00', 'igst', 'input', 4, 'no', 0),
(81, '9% CGST (output)', 29, 0, 1, 0, 0, '0.00', 'cgst', 'output', 4, 'no', 0),
(82, '9% SGST (output)', 29, 0, 1, 0, 0, '0.00', 'sgst', 'output', 4, 'no', 0),
(83, '18% IGST (output)', 29, 0, 1, 0, 0, '0.00', 'igst', 'output', 4, 'no', 0),
(84, '14% CGST (input)', 29, 0, 1, 0, 0, '0.00', 'cgst', 'input', 5, 'no', 0),
(85, '14% SGST (input)', 29, 0, 1, 0, 0, '0.00', 'sgst', 'input', 5, 'no', 0),
(86, '28% IGST (input)', 29, 0, 1, 0, 0, '0.00', 'igst', 'input', 5, 'no', 0),
(87, '14% CGST (output)', 29, 0, 1, 0, 0, '0.00', 'cgst', 'output', 5, 'no', 0),
(88, '14% SGST (output)', 29, 0, 1, 0, 0, '0.00', 'sgst', 'output', 5, 'no', 0),
(89, '28% IGST (output)', 29, 0, 1, 0, 0, '0.00', 'igst', 'output', 5, 'no', 0),
(90, 'gopu', 1, 0, 1, 0, 0, '0.00', NULL, NULL, NULL, '', 0),
(91, 'gopu', 1, 0, 1, 0, 0, '0.00', NULL, NULL, NULL, '', 0),
(92, 'ledghers', 2, 0, 1, 0, 0, '0.00', NULL, NULL, NULL, '', 0),
(93, 'sanju', 22, 0, 1, 0, 14, '0.00', NULL, NULL, NULL, 'no', 0),
(94, 'aa', 25, 0, 1, 14, 0, '0.00', NULL, NULL, NULL, 'no', 0),
(95, 'test', 22, 0, 2, 0, 0, '0.00', NULL, NULL, NULL, '', 0),
(96, 'ravina tandan', 22, 0, 1, 0, 15, '0.00', NULL, NULL, NULL, 'no', 0),
(97, 'mumbai cloth pvt ltd', 25, 0, 1, 15, 0, '0.00', NULL, NULL, NULL, 'no', 0),
(98, 'wsx', 1, 0, 1, 0, 0, '0.00', NULL, NULL, NULL, '', 0),
(99, 'test-ledger', 49, 0, 1, 0, 0, '0.00', NULL, NULL, NULL, '', 0),
(100, 'test-ledger2', 49, 0, 1, 0, 0, '0.00', NULL, NULL, NULL, '', 0),
(101, 'test1', 50, 0, 1, 0, 0, '0.00', NULL, NULL, NULL, '', 0),
(102, 'test2', 51, 0, 1, 0, 0, '0.00', NULL, NULL, NULL, '', 0),
(103, 'test3', 52, 0, 1, 0, 0, '0.00', NULL, NULL, NULL, '', 0),
(104, 'test4', 53, 0, 1, 0, 0, '0.00', NULL, NULL, NULL, '', 0),
(105, 'test5', 54, 0, 1, 0, 0, '0.00', NULL, NULL, NULL, '', 0),
(106, 'test6', 55, 0, 1, 0, 0, '0.00', NULL, NULL, NULL, '', 0);

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
-- Table structure for table `outwards`
--

CREATE TABLE `outwards` (
  `id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `quantity` decimal(10,2) NOT NULL,
  `rate` decimal(15,2) NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `stock_journal_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outwards`
--

INSERT INTO `outwards` (`id`, `item_id`, `quantity`, `rate`, `amount`, `stock_journal_id`) VALUES
(12, 7, '25.00', '100.00', '2500.00', 1),
(13, 8, '25.00', '100.00', '2500.00', 1),
(14, 11, '125.00', '2.00', '250.00', 1),
(15, 4, '3.00', '4.00', '12.00', 1),
(17, 11, '4.00', '12.00', '48.00', 1),
(18, 2, '10.00', '100.00', '1000.00', 2),
(19, 7, '50.00', '2.00', '100.00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_vouchers`
--

CREATE TABLE `purchase_vouchers` (
  `id` int(10) NOT NULL,
  `voucher_no` int(10) NOT NULL,
  `company_id` int(10) NOT NULL,
  `transaction_date` date NOT NULL,
  `supplier_invoice_no` varchar(50) NOT NULL,
  `supplier_invoice_date` date NOT NULL,
  `narration` text NOT NULL,
  `voucher_amount` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_vouchers`
--

INSERT INTO `purchase_vouchers` (`id`, `voucher_no`, `company_id`, `transaction_date`, `supplier_invoice_no`, `supplier_invoice_date`, `narration`, `voucher_amount`) VALUES
(2, 1, 1, '2017-08-25', 'sup123', '2017-08-25', 'hiii', '46.00'),
(3, 2, 1, '2017-08-31', 'sep3', '0000-00-00', 'hiiiii sdjshasasajsaskjas32492dba ddssad\r\nsddaasdkd;laskdlsd;sadsadasdk\r\nasdasdas', '2.00'),
(4, 3, 1, '2017-08-30', 'sep4', '2017-08-25', 'purchase voucher add', '25.00'),
(5, 4, 1, '2017-08-25', 'sep4', '2017-08-25', 'purchase voucher add', '25.00'),
(6, 5, 1, '2017-09-01', '', '0000-00-00', 'hi', '2000.00'),
(7, 6, 1, '2017-09-01', '', '0000-00-00', '', '100.00'),
(8, 7, 1, '2017-09-02', '', '0000-00-00', '', '10.00');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_voucher_rows`
--

CREATE TABLE `purchase_voucher_rows` (
  `id` int(10) NOT NULL,
  `purchase_voucher_id` int(10) NOT NULL,
  `ledger_id` int(10) NOT NULL,
  `debit` decimal(15,2) DEFAULT NULL,
  `credit` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_voucher_rows`
--

INSERT INTO `purchase_voucher_rows` (`id`, `purchase_voucher_id`, `ledger_id`, `debit`, `credit`) VALUES
(1, 2, 53, NULL, '46.00'),
(2, 2, 3, '46.00', NULL),
(9, 3, 35, NULL, '2.00'),
(10, 3, 3, '2.00', NULL),
(13, 4, 35, NULL, '25.00'),
(14, 4, 3, '25.00', NULL),
(15, 5, 35, NULL, '25.00'),
(16, 5, 3, '25.00', NULL),
(17, 6, 35, NULL, '1000.00'),
(18, 6, 3, '500.00', NULL),
(19, 6, 3, '100.00', NULL),
(20, 6, 3, NULL, '1000.00'),
(21, 6, 3, '1000.00', NULL),
(22, 6, 3, '400.00', NULL),
(23, 7, 36, NULL, '100.00'),
(24, 7, 3, '100.00', NULL),
(25, 8, 35, NULL, '10.00'),
(26, 8, 3, '1.00', NULL),
(27, 8, 30, '1.00', NULL),
(28, 8, 31, '1.00', NULL),
(29, 8, 32, '1.00', NULL),
(30, 8, 34, '6.00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales_invoices`
--

CREATE TABLE `sales_invoices` (
  `id` int(11) NOT NULL,
  `voucher_no` int(10) NOT NULL,
  `company_id` int(10) NOT NULL,
  `transaction_date` date NOT NULL,
  `cash_or_credit` varchar(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `gst_figure_id` int(10) NOT NULL,
  `amount_before_tax` decimal(15,2) NOT NULL,
  `total_cgst` decimal(15,2) NOT NULL,
  `total_sgst` double(15,2) NOT NULL,
  `total_igst` decimal(15,2) NOT NULL,
  `amount_after_tax` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_invoices`
--

INSERT INTO `sales_invoices` (`id`, `voucher_no`, `company_id`, `transaction_date`, `cash_or_credit`, `customer_id`, `gst_figure_id`, `amount_before_tax`, `total_cgst`, `total_sgst`, `total_igst`, `amount_after_tax`) VALUES
(6, 1, 1, '2017-08-30', 'cash', 0, 0, '60.00', '1.00', 1.00, '0.00', '63.00'),
(7, 2, 1, '2017-08-30', 'credit', 1, 0, '200.00', '5.00', 5.00, '0.00', '210.00'),
(8, 3, 1, '2017-08-30', 'credit', 2, 0, '4.08', '0.10', 0.10, '0.00', '4.28');

-- --------------------------------------------------------

--
-- Table structure for table `sales_invoice_rows`
--

CREATE TABLE `sales_invoice_rows` (
  `id` int(11) NOT NULL,
  `sales_invoice_id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `quantity` decimal(15,2) NOT NULL,
  `rate` decimal(15,2) NOT NULL,
  `discount_percentage` decimal(15,2) NOT NULL,
  `taxable_value` decimal(15,2) NOT NULL,
  `gst_figure_id` int(10) NOT NULL,
  `output_cgst_ledger_id` int(10) NOT NULL,
  `output_sgst_ledger_id` int(10) NOT NULL,
  `output_igst_ledger_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_invoice_rows`
--

INSERT INTO `sales_invoice_rows` (`id`, `sales_invoice_id`, `item_id`, `quantity`, `rate`, `discount_percentage`, `taxable_value`, `gst_figure_id`, `output_cgst_ledger_id`, `output_sgst_ledger_id`, `output_igst_ledger_id`) VALUES
(1, 6, 19, '10.00', '2.00', '0.00', '20.00', 2, 0, 0, 0),
(2, 6, 20, '20.00', '2.00', '0.00', '40.00', 1, 0, 0, 0),
(3, 7, 20, '100.00', '2.00', '0.00', '200.00', 1, 0, 0, 0),
(4, 8, 20, '2.00', '2.00', '2.00', '4.08', 2, 69, 70, 71);

-- --------------------------------------------------------

--
-- Table structure for table `shades`
--

CREATE TABLE `shades` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shades`
--

INSERT INTO `shades` (`id`, `name`, `company_id`) VALUES
(1, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `company_id`) VALUES
(1, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `state_code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `state_code`) VALUES
(39, 'JAMMU AND KASHMIR', 1),
(40, 'HIMACHAL PRADESH', 2),
(41, 'PUNJAB', 3),
(42, 'CHANDIGARH', 4),
(43, 'UTTARAKHAND', 5),
(44, 'HARYANA', 6),
(45, 'DELHI', 7),
(46, 'RAJASTHAN', 8),
(47, 'UTTAR  PRADESH', 9),
(48, 'BIHAR', 10),
(49, 'SIKKIM', 11),
(50, 'ARUNACHAL PRADESH', 12),
(51, 'NAGALAND', 13),
(52, 'MANIPUR', 14),
(53, 'MIZORAM', 15),
(54, 'TRIPURA', 16),
(55, 'MEGHLAYA', 17),
(56, 'ASSAM', 18),
(57, 'WEST BENGAL', 19),
(58, 'JHARKHAND', 20),
(59, 'ODISHA', 21),
(60, 'CHATTISGARH', 22),
(61, 'MADHYA PRADESH', 23),
(62, 'GUJARAT', 24),
(63, 'DAMAN AND DIU', 25),
(64, 'DADRA AND NAGAR HAVELI', 26),
(65, 'MAHARASHTRA', 27),
(66, 'ANDHRA PRADESH(BEFORE DIVISION)', 28),
(67, 'KARNATAKA', 29),
(68, 'GOA', 30),
(69, 'LAKSHWADEEP', 31),
(70, 'KERALA', 32),
(71, 'TAMIL NADU', 33),
(72, 'PUDUCHERRY', 34),
(73, 'ANDAMAN AND NICOBAR ISLANDS', 35),
(74, 'TELANGANA', 36),
(75, 'ANDHRA PRADESH (NEW)', 37);

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
(1, 'Group 1', NULL, 1, 2, 1),
(2, 'abc', NULL, 3, 6, 1),
(3, 'abc1', 2, 4, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stock_journals`
--

CREATE TABLE `stock_journals` (
  `id` int(10) NOT NULL,
  `voucher_no` int(10) NOT NULL,
  `company_id` int(10) NOT NULL,
  `transaction_date` date NOT NULL,
  `reference_no` varchar(100) NOT NULL,
  `narration` text NOT NULL,
  `inward_amount_total` decimal(15,2) NOT NULL,
  `outward_amount_total` decimal(15,2) NOT NULL,
  `created_by` int(10) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `edited_by` int(10) DEFAULT NULL,
  `edited_on` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_journals`
--

INSERT INTO `stock_journals` (`id`, `voucher_no`, `company_id`, `transaction_date`, `reference_no`, `narration`, `inward_amount_total`, `outward_amount_total`, `created_by`, `created_on`, `edited_by`, `edited_on`) VALUES
(2, 2, 1, '2017-08-24', 'ref123', 'hii', '0.00', '1100.00', 3, '2017-08-25 08:32:09', 3, '2017-08-25 00:00:00'),
(3, 3, 1, '2017-08-17', '22', '', '10000.00', '0.00', 3, '2017-08-24 06:19:15', 3, '2017-08-24 00:00:00'),
(4, 4, 1, '2017-08-18', 'de', '', '4.00', '0.00', 3, '2017-08-24 08:20:06', 3, '2017-08-24 00:00:00');

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
(8, 'kaka fuka supplier', 1, 1, 'dcvcvdcv', '', '', '', 0),
(9, 'hri hra', 1, 1, 'dscdc', 'hari@gmail.com', '3565656565', 'cvxcvcv', 0),
(10, 'nav bharti pvt ltd', 1, 1, 'sas322', 'nav@gmail.com', '9876756757', 'c ', 0),
(11, 'supplier 1', 1, 1, '67876', '', '', '', 0),
(12, 'suppler 1', 1, 1, 't67789', '', '', '', 0),
(13, 'dharamraj supplier', 1, 1, '556b', '', '', '', 0),
(14, 'aa', 41, 1, '54435', '', '', '', 0),
(15, 'mumbai cloth pvt ltd', 65, 1, '2323', '', '', '', 0);

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
-- Indexes for table `first_tamp_grn_records`
--
ALTER TABLE `first_tamp_grn_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grns`
--
ALTER TABLE `grns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grn_rows`
--
ALTER TABLE `grn_rows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gst_figures`
--
ALTER TABLE `gst_figures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inwards`
--
ALTER TABLE `inwards`
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
-- Indexes for table `outwards`
--
ALTER TABLE `outwards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_vouchers`
--
ALTER TABLE `purchase_vouchers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_voucher_rows`
--
ALTER TABLE `purchase_voucher_rows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_invoices`
--
ALTER TABLE `sales_invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_invoice_rows`
--
ALTER TABLE `sales_invoice_rows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shades`
--
ALTER TABLE `shades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
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
-- Indexes for table `stock_journals`
--
ALTER TABLE `stock_journals`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT for table `accounting_groups`
--
ALTER TABLE `accounting_groups`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `financial_years`
--
ALTER TABLE `financial_years`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `first_tamp_grn_records`
--
ALTER TABLE `first_tamp_grn_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `grns`
--
ALTER TABLE `grns`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grn_rows`
--
ALTER TABLE `grn_rows`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gst_figures`
--
ALTER TABLE `gst_figures`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `inwards`
--
ALTER TABLE `inwards`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `item_ledgers`
--
ALTER TABLE `item_ledgers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ledgers`
--
ALTER TABLE `ledgers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `nature_of_groups`
--
ALTER TABLE `nature_of_groups`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `outwards`
--
ALTER TABLE `outwards`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `purchase_vouchers`
--
ALTER TABLE `purchase_vouchers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `purchase_voucher_rows`
--
ALTER TABLE `purchase_voucher_rows`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `sales_invoices`
--
ALTER TABLE `sales_invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sales_invoice_rows`
--
ALTER TABLE `sales_invoice_rows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `shades`
--
ALTER TABLE `shades`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `stock_groups`
--
ALTER TABLE `stock_groups`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `stock_journals`
--
ALTER TABLE `stock_journals`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
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
