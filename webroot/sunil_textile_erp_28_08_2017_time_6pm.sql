-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2017 at 03:12 PM
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
  `purchase_voucher_row_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounting_entries`
--

INSERT INTO `accounting_entries` (`id`, `ledger_id`, `debit`, `credit`, `transaction_date`, `company_id`, `purchase_voucher_id`, `purchase_voucher_row_id`) VALUES
(7, 37, '0.00', '5773.50', '2017-08-10', 1, NULL, NULL),
(8, 3, '5520.00', '0.00', '2017-08-10', 1, NULL, NULL),
(9, 5, '122.50', '0.00', '2017-08-10', 1, NULL, NULL),
(10, 10, '122.50', '0.00', '2017-08-10', 1, NULL, NULL),
(11, 4, '0.00', '0.00', '2017-08-10', 1, NULL, NULL),
(12, 9, '0.00', '0.00', '2017-08-10', 1, NULL, NULL),
(13, 5, '4.25', '0.00', '2017-08-10', 1, NULL, NULL),
(14, 10, '4.25', '0.00', '2017-08-10', 1, NULL, NULL),
(15, 32, '3385.80', '0.00', '2017-08-10', 1, NULL, NULL),
(16, 18, '0.00', '2970.00', '2017-08-10', 1, NULL, NULL),
(17, 25, '0.00', '118.80', '2017-08-10', 1, NULL, NULL),
(18, 21, '0.00', '118.80', '2017-08-10', 1, NULL, NULL),
(19, 26, '0.00', '89.10', '2017-08-10', 1, NULL, NULL),
(20, 22, '0.00', '89.10', '2017-08-10', 1, NULL, NULL),
(21, 31, '2146.13', '0.00', '2017-08-10', 1, NULL, NULL),
(22, 18, '0.00', '1978.00', '2017-08-10', 1, NULL, NULL),
(23, 24, '0.00', '49.45', '2017-08-10', 1, NULL, NULL),
(24, 21, '0.00', '118.68', '2017-08-10', 1, NULL, NULL),
(25, 31, '1144.60', '0.00', '2017-08-10', 1, NULL, NULL),
(26, 18, '0.00', '970.00', '2017-08-10', 1, NULL, NULL),
(27, 26, '0.00', '87.30', '2017-08-10', 1, NULL, NULL),
(28, 22, '0.00', '87.30', '2017-08-10', 1, NULL, NULL),
(29, 31, '1156.40', '0.00', '2017-08-11', 1, NULL, NULL),
(30, 18, '0.00', '980.00', '2017-08-11', 1, NULL, NULL),
(31, 26, '0.00', '88.20', '2017-08-11', 1, NULL, NULL),
(32, 22, '0.00', '88.20', '2017-08-11', 1, NULL, NULL),
(33, 29, '1000.00', '0.00', '0000-00-00', 1, NULL, NULL),
(34, 18, '0.00', '847.46', '0000-00-00', 1, NULL, NULL),
(35, 26, '0.00', '76.27', '0000-00-00', 1, NULL, NULL),
(36, 22, '0.00', '76.27', '0000-00-00', 1, NULL, NULL),
(37, 29, '1000.00', '0.00', '0000-00-00', 1, NULL, NULL),
(38, 18, '0.00', '847.46', '0000-00-00', 1, NULL, NULL),
(39, 25, '0.00', '76.27', '0000-00-00', 1, NULL, NULL),
(40, 21, '0.00', '76.27', '0000-00-00', 1, NULL, NULL),
(41, 29, '2000.00', '0.00', '0000-00-00', 1, NULL, NULL),
(42, 18, '0.00', '1785.71', '0000-00-00', 1, NULL, NULL),
(43, 26, '0.00', '107.14', '0000-00-00', 1, NULL, NULL),
(44, 22, '0.00', '107.14', '0000-00-00', 1, NULL, NULL),
(45, 29, '2000.00', '0.00', '0000-00-00', 1, NULL, NULL),
(46, 18, '0.00', '1785.71', '0000-00-00', 1, NULL, NULL),
(47, 26, '0.00', '107.14', '0000-00-00', 1, NULL, NULL),
(48, 22, '0.00', '107.14', '0000-00-00', 1, NULL, NULL),
(49, 29, '2000.00', '0.00', '0000-00-00', 1, NULL, NULL),
(50, 18, '0.00', '1785.71', '0000-00-00', 1, NULL, NULL),
(51, 26, '0.00', '107.14', '0000-00-00', 1, NULL, NULL),
(52, 22, '0.00', '107.14', '0000-00-00', 1, NULL, NULL),
(53, 32, '2000.00', '0.00', '0000-00-00', 1, NULL, NULL),
(54, 18, '0.00', '1785.71', '0000-00-00', 1, NULL, NULL),
(55, 25, '0.00', '107.14', '0000-00-00', 1, NULL, NULL),
(56, 21, '0.00', '107.14', '0000-00-00', 1, NULL, NULL),
(57, 25, '0.00', '0.00', '0000-00-00', 1, NULL, NULL),
(58, 21, '0.00', '0.00', '0000-00-00', 1, NULL, NULL),
(59, 32, '2000.00', '0.00', '2017-08-14', 1, NULL, NULL),
(60, 18, '0.00', '1785.71', '2017-08-14', 1, NULL, NULL),
(61, 25, '0.00', '107.14', '2017-08-14', 1, NULL, NULL),
(62, 21, '0.00', '107.14', '2017-08-14', 1, NULL, NULL),
(63, 29, '1000.00', '0.00', '2017-08-14', 1, NULL, NULL),
(64, 18, '0.00', '847.46', '2017-08-14', 1, NULL, NULL),
(65, 25, '0.00', '76.27', '2017-08-14', 1, NULL, NULL),
(66, 21, '0.00', '76.27', '2017-08-14', 1, NULL, NULL),
(68, 49, '2000.00', '0.00', '2017-04-01', 1, NULL, NULL),
(72, 50, '0.00', '90.00', '2017-04-01', 1, NULL, NULL),
(74, 51, '0.00', '1000.00', '2017-04-01', 1, NULL, NULL),
(76, 52, '80.00', '0.00', '2017-04-01', 1, NULL, NULL),
(77, 55, '100.00', '0.00', '2017-04-01', 1, NULL, NULL),
(80, 35, NULL, '25.00', '2017-08-25', 1, 5, 15),
(81, 3, '25.00', NULL, '2017-08-25', 1, 5, 16),
(84, 56, NULL, '123.00', '2017-04-01', 1, NULL, NULL),
(87, 57, NULL, '120.00', '2017-04-01', 1, NULL, NULL),
(88, 3, '100.00', '200.00', '2017-08-25', 1, NULL, NULL),
(89, 3, '50.00', '40.00', '2017-08-26', 1, NULL, NULL);

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
(3, 1, 'Current Assets', NULL, 11, 34, 1, NULL, NULL, NULL, NULL),
(4, 2, 'Current Liabilities', NULL, 35, 48, 1, NULL, NULL, NULL, NULL),
(5, 4, 'Direct Expenses', NULL, 49, 54, 1, NULL, NULL, NULL, NULL),
(6, 3, 'Direct Incomes', NULL, 55, 58, 1, NULL, NULL, NULL, NULL),
(7, 1, 'Fixed Assets', NULL, 59, 62, 1, NULL, NULL, NULL, NULL),
(8, 4, 'Indirect Expenses', NULL, 63, 64, 1, NULL, NULL, NULL, NULL),
(9, 3, 'Indirect Incomes', NULL, 65, 66, 1, NULL, NULL, NULL, NULL),
(10, 1, 'Investments', NULL, 67, 68, 1, NULL, NULL, NULL, NULL),
(11, 2, 'Loans (Liability)', NULL, 69, 76, 1, NULL, NULL, NULL, NULL),
(12, 1, 'Misc. Expenses (ASSET)', NULL, 77, 78, 1, NULL, NULL, NULL, NULL),
(13, 4, 'Purchase Accounts', NULL, 79, 80, 1, NULL, NULL, NULL, 1),
(14, 3, 'Sales Accounts', NULL, 81, 82, 1, NULL, NULL, NULL, NULL),
(15, 2, 'Suspense A/c', NULL, 83, 86, 1, NULL, NULL, NULL, NULL),
(16, NULL, 'Reserves & Surplus', 2, 8, 9, 1, NULL, NULL, NULL, NULL),
(17, NULL, 'Bank Accounts', 3, 12, 13, 1, NULL, NULL, NULL, NULL),
(18, NULL, 'Cash-in-hand', 3, 14, 15, 1, NULL, NULL, 1, NULL),
(19, NULL, 'Deposits (Asset)', 3, 16, 17, 1, NULL, NULL, NULL, NULL),
(20, NULL, 'Loans & Advances (Asset)', 3, 18, 19, 1, NULL, NULL, NULL, NULL),
(21, NULL, 'Stock-in-hand', 3, 20, 21, 1, NULL, NULL, NULL, NULL),
(22, NULL, 'Sundry Debtors', 3, 22, 33, 1, 1, NULL, NULL, NULL),
(23, NULL, 'Duties & Taxes', 4, 36, 41, 1, NULL, NULL, NULL, NULL),
(24, NULL, 'Provisions', 4, 42, 43, 1, NULL, NULL, NULL, NULL),
(25, NULL, 'Sundry Creditors', 4, 44, 47, 1, NULL, 1, 1, NULL),
(26, NULL, 'Bank OD A/c', 11, 70, 71, 1, NULL, NULL, NULL, NULL),
(27, NULL, 'Secured Loans', 11, 72, 73, 1, NULL, NULL, NULL, NULL),
(28, NULL, 'Unsecured Loans', 11, 74, 75, 1, NULL, NULL, NULL, NULL),
(29, NULL, 'Input GST', 23, 37, 38, 1, NULL, NULL, NULL, NULL),
(30, NULL, 'Output GST', 23, 39, 40, 1, NULL, NULL, NULL, NULL),
(31, NULL, 'dd', NULL, 87, 88, 0, NULL, NULL, NULL, NULL),
(32, 1, 'bill1', NULL, 89, 90, 0, NULL, NULL, NULL, NULL),
(33, NULL, 'account12', 15, 84, 85, 0, NULL, NULL, NULL, NULL),
(34, NULL, 'Type 1 customers', 22, 23, 32, 0, NULL, NULL, NULL, NULL),
(35, NULL, 'type 2 customers', 34, 24, 31, 0, NULL, NULL, NULL, NULL),
(36, NULL, 'type 3 customers', 35, 25, 30, 0, NULL, NULL, NULL, NULL),
(37, NULL, 'type 4 customers', 36, 26, 29, 0, NULL, NULL, NULL, NULL),
(38, NULL, 'type 5 customers', 37, 27, 28, 0, NULL, NULL, NULL, NULL),
(39, NULL, 'type 1 supplier', 25, 45, 46, 0, NULL, NULL, NULL, NULL),
(40, 3, 'accountent 1.0', 1, 2, 3, 1, NULL, NULL, NULL, NULL),
(41, 3, 'accountent 1.1', 1, 4, 5, 1, NULL, NULL, NULL, NULL),
(42, NULL, 'c', 6, 56, 57, 1, NULL, NULL, NULL, NULL),
(43, NULL, 'z', NULL, 91, 92, 1, NULL, NULL, NULL, NULL),
(44, 3, 'z', 5, 50, 51, 1, NULL, NULL, NULL, NULL),
(45, NULL, 'az', 5, 52, 53, 1, NULL, NULL, NULL, NULL),
(46, NULL, 'q', 7, 60, 61, 1, NULL, NULL, NULL, NULL);

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
(13, 'harish', 1, 1, '23ddcs', 'hari@gmail.com', '9837464653', 'cxcx', 0);

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
  `output_igst_ledger_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `item_code`, `hsn_code`, `unit_id`, `stock_group_id`, `company_id`, `size_id`, `shade_id`, `description`, `gst_figure_id`, `input_cgst_ledger_id`, `input_sgst_ledger_id`, `input_igst_ledger_id`, `output_cgst_ledger_id`, `output_sgst_ledger_id`, `output_igst_ledger_id`) VALUES
(1, 'kapda', 1, '12s', 1, 1, 0, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0),
(2, 'iwerjk', 2, '32432', 1, 0, 0, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0),
(3, 'iwerjk', 3, '32432', 1, 0, 0, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0),
(4, 'dsfsdf', 4, 'werwr', 1, 0, 0, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0),
(5, 'dsfsdf', 5, 'werwr', 1, 0, 0, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0),
(6, 'dsfsdf', 6, 'werwr', 1, 0, 0, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0),
(7, 'd', 7, 'e3', 1, 0, 0, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0),
(8, 'wsx', 8, 'dsfdsfs3342', 1, 1, 0, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0),
(9, 'wsx', 9, 'dsfdsfs3342', 1, 1, 0, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0),
(10, 'dd', 10, 'ddfd123', 1, 1, 0, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0),
(11, 'qazxs', 11, 'dfes3', 1, 1, 0, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0),
(12, 'idesa', 12, 'ddd', 1, 0, 1, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0),
(13, 'this is item 1 name =, which is very long 3236mm 98 snsi', 13, '-', 1, 0, 1, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0),
(14, 'thaan ', 14, '332', 2, 2, 1, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0),
(15, 'a2', 15, 'w', 2, 1, 1, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0),
(16, 'a2', 16, 'w', 1, 2, 1, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0),
(17, 'a3', 17, '3', 2, 2, 1, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0),
(18, 'ww', 18, 'dx', 1, 1, 1, 1, 1, 'dscdscdd', 0, 0, 0, 0, 0, 0, 0),
(19, 'a', 19, 'a', 1, 0, 1, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0),
(20, 'dscdscz', 20, 'xzx', 1, 0, 1, NULL, NULL, '', 1, 60, 61, 62, 63, 64, 65);

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
(1, 9, '2017-04-01', '5.00', '6.00', '30.00', 'in', 'yes', 0, NULL, NULL, 1),
(2, 11, '2017-04-01', '12.00', '10.00', '120.00', 'in', 'yes', 0, NULL, NULL, 1),
(3, 12, '2017-04-01', '30.00', '300.00', '9000.00', 'in', 'yes', 0, NULL, NULL, 1),
(153, 1, '2017-08-23', '2.00', '100.00', '200.00', 'in', NULL, 1, 22, NULL, 1),
(154, 5, '2017-08-23', '77.00', '77.00', '5929.00', 'in', NULL, 1, 24, NULL, 1),
(155, 5, '2017-08-23', '77.00', '77.00', '5929.00', 'in', NULL, 1, 27, NULL, 1),
(156, 8, '2017-08-23', '6.00', '6.00', '36.00', 'in', NULL, 1, 28, NULL, 1),
(157, 7, '2017-08-23', '25.00', '100.00', '2500.00', 'out', NULL, 1, NULL, 12, 1),
(158, 8, '2017-08-23', '25.00', '100.00', '2500.00', 'out', NULL, 1, NULL, 13, 1),
(159, 11, '2017-08-23', '125.00', '2.00', '250.00', 'out', NULL, 1, NULL, 14, 1),
(160, 4, '2017-08-23', '3.00', '4.00', '12.00', 'out', NULL, 1, NULL, 15, 1),
(161, 11, '2017-08-23', '4.00', '12.00', '48.00', 'out', NULL, 1, NULL, 17, 1),
(239, 1, '2017-08-17', '100.00', '100.00', '10000.00', 'in', NULL, 3, 35, NULL, 1),
(242, 2, '2017-08-18', '2.00', '2.00', '4.00', 'in', NULL, 4, 36, NULL, 1),
(246, 1, '2017-08-24', '4.00', '7.00', '28.00', 'in', NULL, 2, 34, NULL, 1),
(247, 2, '2017-08-24', '10.00', '100.00', '1000.00', 'out', NULL, 2, NULL, 18, 1),
(248, 7, '2017-08-24', '50.00', '2.00', '100.00', 'out', NULL, 2, NULL, 19, 1),
(254, 15, '2017-04-01', '2.00', '7.00', '14.00', 'in', 'yes', 0, NULL, NULL, 1),
(255, 17, '2017-04-01', '3.00', '3.00', '9.00', 'in', 'yes', 0, NULL, NULL, 1);

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
  `bill_to_bill_accounting` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ledgers`
--

INSERT INTO `ledgers` (`id`, `name`, `accounting_group_id`, `freeze`, `company_id`, `supplier_id`, `customer_id`, `tax_percentage`, `gst_type`, `input_output`, `gst_figure_id`, `bill_to_bill_accounting`) VALUES
(3, 'Purchase Account', 13, 0, 0, 0, 0, '0.00', '', NULL, NULL, ''),
(4, '0% CGST', 29, 0, 1, 0, 0, '0.00', 'CGST', NULL, NULL, ''),
(5, '2.5% CGST', 29, 0, 1, 0, 0, '2.50', 'CGST', NULL, NULL, ''),
(6, '6% CGST', 29, 0, 1, 0, 0, '6.00', 'CGST', NULL, NULL, ''),
(7, 'nagarjun ji', 29, 0, 1, 0, 0, '9.00', 'CGST', NULL, NULL, ''),
(8, '14% CGST', 29, 0, 1, 0, 0, '14.00', 'CGST', NULL, NULL, ''),
(9, '0% SGST', 29, 0, 1, 0, 0, '0.00', 'SGST', NULL, NULL, ''),
(10, '2.5% SGST', 29, 0, 1, 0, 0, '2.50', 'SGST', NULL, NULL, ''),
(12, '6% SGST', 29, 0, 1, 0, 0, '6.00', 'SGST', NULL, NULL, ''),
(13, '9% SGST', 29, 0, 1, 0, 0, '9.00', 'SGST', NULL, NULL, ''),
(14, '14% SGST', 29, 0, 1, 0, 0, '14.00', 'SGST', NULL, NULL, ''),
(18, 'Sales Accounts', 14, 0, 0, 0, 0, '0.00', '', NULL, NULL, ''),
(19, '0% SGST', 30, 0, 1, 0, 0, '0.00', 'SGST', NULL, NULL, ''),
(20, '2.5% SGST', 30, 0, 1, 0, 0, '2.50', 'SGST', NULL, NULL, ''),
(21, '6% SGST', 30, 0, 1, 0, 0, '6.00', 'SGST', NULL, 5, ''),
(22, '9% SGST', 30, 0, 1, 0, 0, '9.00', 'SGST', NULL, NULL, ''),
(23, '0% CGST', 30, 0, 1, 0, 0, '0.00', 'CGST', NULL, 5, ''),
(24, '2.5% CGST', 30, 0, 1, 0, 0, '2.50', 'CGST', NULL, NULL, ''),
(25, '6% CGST', 30, 0, 1, 0, 0, '6.00', 'CGST', NULL, NULL, ''),
(26, '9% CGST', 30, 0, 1, 0, 0, '9.00', 'CGST', NULL, NULL, ''),
(27, '14%CGST', 30, 0, 1, 0, 0, '14.00', 'CGST', NULL, NULL, ''),
(28, '14% SGST', 30, 0, 1, 0, 0, '14.00', 'SGST', NULL, NULL, ''),
(29, 'Petty Cash', 31, 0, 1, 0, 0, '0.00', '', NULL, NULL, ''),
(30, 'customer3', 22, 1, 1, 0, 3, '0.00', NULL, NULL, NULL, ''),
(31, 'customer1', 22, 0, 1, 0, 1, '0.00', NULL, NULL, NULL, ''),
(32, 'customer2', 22, 0, 1, 0, 2, '0.00', NULL, NULL, NULL, ''),
(33, 'customer3', 22, 1, 1, 0, 3, '0.00', NULL, NULL, NULL, ''),
(34, 'customer4', 22, 0, 1, 0, 4, '0.00', NULL, NULL, NULL, ''),
(35, 'supplier1', 25, 0, 1, 1, 0, '0.00', NULL, NULL, NULL, ''),
(36, 'supplier2', 25, 1, 1, 2, 0, '0.00', NULL, NULL, NULL, ''),
(37, 'supplier3', 25, 0, 1, 3, 0, '0.00', NULL, NULL, NULL, ''),
(38, 'kapil', 22, 0, 1, 0, 0, '0.00', NULL, NULL, NULL, ''),
(39, 'gopal dla', 25, 0, 1, 0, 0, '0.00', NULL, NULL, NULL, ''),
(40, 'man\'sa  ji', 25, 0, 1, 6, 0, '0.00', NULL, NULL, NULL, ''),
(41, 'nagarjun ji', 22, 0, 1, 0, 7, '0.00', NULL, NULL, NULL, ''),
(42, 'abhiram gut', 22, 0, 1, 0, 8, '0.00', NULL, NULL, NULL, 'yes'),
(43, 'harish suthar', 37, 0, 1, 0, 9, '0.00', NULL, NULL, NULL, 'no'),
(44, 'choudhhary supplier', 25, 0, 1, 7, 0, '0.00', NULL, NULL, NULL, 'yes'),
(45, 'kaka fuka supplier', 25, 0, 1, 8, 0, '0.00', NULL, NULL, NULL, 'no'),
(46, 'ravish kumar', 1, 0, 0, 0, 0, '0.00', NULL, NULL, NULL, ''),
(47, 'cxzc', 2, 0, 0, 0, 0, '0.00', NULL, NULL, NULL, ''),
(48, 'sdsd', 22, 0, 1, 0, 10, '0.00', NULL, NULL, NULL, 'yes'),
(49, 'nikil verma', 22, 0, 1, 0, 11, '0.00', NULL, NULL, NULL, 'yes'),
(50, 'hri hra', 25, 0, 1, 9, 0, '0.00', NULL, NULL, NULL, 'yes'),
(51, 'nav bharti pvt ltd', 39, 0, 1, 10, 0, '0.00', NULL, NULL, NULL, ''),
(52, 'kalu singh', 38, 0, 1, 0, 12, '0.00', NULL, NULL, NULL, 'no'),
(53, 'case', 18, 0, 0, 0, 0, '0.00', NULL, NULL, NULL, ''),
(54, 'supplier 1', 25, 0, 1, 11, 0, '0.00', NULL, NULL, NULL, 'no'),
(55, 'suppler 1', 25, 0, 1, 12, 0, '0.00', NULL, NULL, NULL, 'no'),
(56, 'harish', 34, 0, 1, 0, 13, '0.00', NULL, NULL, NULL, 'no'),
(57, 'dharamraj supplier', 25, 0, 1, 13, 0, '0.00', NULL, NULL, NULL, 'no'),
(58, 'ledger top', 1, 0, 1, 0, 0, '0.00', NULL, NULL, NULL, ''),
(59, 'ledger top 2', 1, 0, 1, 0, 0, '0.00', NULL, NULL, NULL, ''),
(60, '0% CGST (input)', 29, 0, 1, 0, 0, '0.00', 'cgst', 'input', 1, 'no'),
(61, '0% SGST (input)', 29, 0, 1, 0, 0, '0.00', 'sgst', 'input', 1, 'no'),
(62, '0% IGST (input)', 29, 0, 1, 0, 0, '0.00', 'igst', 'input', 1, 'no'),
(63, '0% CGST (output)', 29, 0, 1, 0, 0, '0.00', 'cgst', 'output', 1, 'no'),
(64, '0% SGST (output)', 29, 0, 1, 0, 0, '0.00', 'sgst', 'output', 1, 'no'),
(65, '0% IGST (output)', 29, 0, 1, 0, 0, '0.00', 'igst', 'output', 1, 'no'),
(66, '2.5% CGST (input)', 29, 0, 1, 0, 0, '0.00', 'cgst', 'input', 2, 'no'),
(67, '2.5% SGST (input)', 29, 0, 1, 0, 0, '0.00', 'sgst', 'input', 2, 'no'),
(68, '5% IGST (input)', 29, 0, 1, 0, 0, '0.00', 'igst', 'input', 2, 'no'),
(69, '2.5% CGST (output)', 29, 0, 1, 0, 0, '0.00', 'cgst', 'output', 2, 'no'),
(70, '2.5% SGST (output)', 29, 0, 1, 0, 0, '0.00', 'sgst', 'output', 2, 'no'),
(71, '5% IGST (output)', 29, 0, 1, 0, 0, '0.00', 'igst', 'output', 2, 'no'),
(72, '6% CGST (input)', 29, 0, 1, 0, 0, '0.00', 'cgst', 'input', 3, 'no'),
(73, '6% SGST (input)', 29, 0, 1, 0, 0, '0.00', 'sgst', 'input', 3, 'no'),
(74, '12% IGST (input)', 29, 0, 1, 0, 0, '0.00', 'igst', 'input', 3, 'no'),
(75, '6% CGST (output)', 29, 0, 1, 0, 0, '0.00', 'cgst', 'output', 3, 'no'),
(76, '6% SGST (output)', 29, 0, 1, 0, 0, '0.00', 'sgst', 'output', 3, 'no'),
(77, '12% IGST (output)', 29, 0, 1, 0, 0, '0.00', 'igst', 'output', 3, 'no'),
(78, '9% CGST (input)', 29, 0, 1, 0, 0, '0.00', 'cgst', 'input', 4, 'no'),
(79, '9% SGST (input)', 29, 0, 1, 0, 0, '0.00', 'sgst', 'input', 4, 'no'),
(80, '18% IGST (input)', 29, 0, 1, 0, 0, '0.00', 'igst', 'input', 4, 'no'),
(81, '9% CGST (output)', 29, 0, 1, 0, 0, '0.00', 'cgst', 'output', 4, 'no'),
(82, '9% SGST (output)', 29, 0, 1, 0, 0, '0.00', 'sgst', 'output', 4, 'no'),
(83, '18% IGST (output)', 29, 0, 1, 0, 0, '0.00', 'igst', 'output', 4, 'no'),
(84, '14% CGST (input)', 29, 0, 1, 0, 0, '0.00', 'cgst', 'input', 5, 'no'),
(85, '14% SGST (input)', 29, 0, 1, 0, 0, '0.00', 'sgst', 'input', 5, 'no'),
(86, '28% IGST (input)', 29, 0, 1, 0, 0, '0.00', 'igst', 'input', 5, 'no'),
(87, '14% CGST (output)', 29, 0, 1, 0, 0, '0.00', 'cgst', 'output', 5, 'no'),
(88, '14% SGST (output)', 29, 0, 1, 0, 0, '0.00', 'sgst', 'output', 5, 'no'),
(89, '28% IGST (output)', 29, 0, 1, 0, 0, '0.00', 'igst', 'output', 5, 'no');

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
(3, 2, 1, '2017-08-25', 'sep3', '0000-00-00', 'hiiiii', '2.00'),
(4, 3, 1, '2017-08-25', 'sep4', '2017-08-25', 'purchase voucher add', '25.00'),
(5, 4, 1, '2017-08-25', 'sep4', '2017-08-25', 'purchase voucher add', '25.00');

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
(16, 5, 3, '25.00', NULL);

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
(13, 'dharamraj supplier', 1, 1, '556b', '', '', '', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `accounting_groups`
--
ALTER TABLE `accounting_groups`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `financial_years`
--
ALTER TABLE `financial_years`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `item_ledgers`
--
ALTER TABLE `item_ledgers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;
--
-- AUTO_INCREMENT for table `ledgers`
--
ALTER TABLE `ledgers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `purchase_voucher_rows`
--
ALTER TABLE `purchase_voucher_rows`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
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
