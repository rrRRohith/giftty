-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2024 at 04:00 AM
-- Server version: 10.3.39-MariaDB
-- PHP Version: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gifttyca_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `type` enum('billing','shipping') NOT NULL,
  `location_type` varchar(30) DEFAULT NULL,
  `postalcode` varchar(7) NOT NULL,
  `city` varchar(30) NOT NULL,
  `province` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `address` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `firstname`, `lastname`, `type`, `location_type`, `postalcode`, `city`, `province`, `phone`, `user_id`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'dsaasd', 'dsdad', 'shipping', 'Residence', '34', '45', 'AB', '4566', NULL, NULL, 'das', '2021-04-29 11:23:17', '2021-04-29 11:23:17'),
(2, 'rtrt', 'rtr', 'billing', NULL, 'gfgfdg', 'gfdgdf', '6', '343445435', NULL, NULL, 'gfgfd', '2021-04-29 11:23:17', '2021-04-29 11:23:17'),
(3, 'dfrewfew', 'efewrf', 'shipping', 'Residence', 'ewrf', 'dewfef', 'AB', 'fdfdsf', NULL, NULL, 'fewrfwef', '2021-04-29 11:26:23', '2021-04-29 11:26:23'),
(4, 'fdfsdf', 'fdsfs', 'billing', NULL, '454', 'fgfgf', '6', '57676878', NULL, 'dfdf@dfdf', 'fdfsdf', '2021-04-29 11:26:23', '2021-04-29 11:26:23'),
(5, 'Test', 'test', 'shipping', 'Residence', '0987', 'Torontpo', 'BC', '9876543211', NULL, NULL, 'Test', '2021-04-29 13:11:37', '2021-04-29 13:11:37'),
(6, 'Test Bill', 'Test', 'billing', NULL, '9876', 'pqrd', '9', '9876543311', NULL, 'test@gmail.com', 'abcd', '2021-04-29 13:11:37', '2021-04-29 13:11:37'),
(7, 'dsaasd', 'dsdad', 'shipping', 'Residence', '34', '45', 'AB', '9877654123', NULL, NULL, 'das', '2021-04-30 07:22:47', '2021-04-30 07:22:47'),
(8, 'rtrt', 'rtr', 'billing', NULL, 'gfgfdg', 'gfdgdf', '6', '343445435', NULL, 'abcd@gmail.com', 'gfgfd', '2021-04-30 07:22:47', '2021-04-30 07:22:47'),
(9, 'Ancel', 'Jose', 'shipping', 'Residence', '7897', 'toronto', 'BC', '78987898789', 7, NULL, 'rose villa', '2021-05-03 07:44:49', '2021-05-03 07:44:49'),
(10, 'malu', 'jose', 'billing', NULL, '7898', 'toronto', '9', '878987887', 7, 'malu@gmail.com', 'chittari', '2021-05-03 07:44:49', '2021-05-03 07:44:49'),
(11, 'Ancel', 'Jose', 'shipping', 'Residence', '7897', 'toronto', 'BC', '675434331', 7, NULL, 'rose villa', '2021-05-07 09:32:39', '2021-05-07 09:32:39'),
(12, 'malu', 'jose', 'billing', NULL, '7898', 'toronto', '9', '878987887', 7, 'malu@gmail.com', 'chittari', '2021-05-07 09:32:40', '2021-05-07 09:32:40'),
(13, 'Ancel', 'Jose', 'shipping', 'Residence', '7897', 'toronto', 'BC', '675434331', 7, NULL, 'rose villa', '2021-05-07 09:33:03', '2021-05-07 09:33:03'),
(14, 'malu', 'jose', 'billing', NULL, '7898', 'toronto', '9', '878987887', 7, 'malu@gmail.com', 'chittari', '2021-05-07 09:33:04', '2021-05-07 09:33:04'),
(15, 'Ancel', 'Jose', 'shipping', 'Residence', '7897', 'toronto', 'BC', '675434331', 7, NULL, 'rose villa', '2021-05-07 09:33:54', '2021-05-07 09:33:54'),
(16, 'malu', 'jose', 'billing', NULL, '7898', 'toronto', '9', '878987887', 7, 'malu@gmail.com', 'chittari', '2021-05-07 09:33:55', '2021-05-07 09:33:55'),
(17, 'Ancel', 'Jose', 'shipping', 'Residence', '7897', 'toronto', 'BC', '675434331', 7, NULL, 'rose villa', '2021-05-07 09:34:01', '2021-05-07 09:34:01'),
(18, 'malu', 'jose', 'billing', NULL, '7898', 'toronto', '9', '878987887', 7, 'malu@gmail.com', 'chittari', '2021-05-07 09:34:01', '2021-05-07 09:34:01'),
(19, 'Ancel', 'Jose', 'shipping', 'Residence', '7897', 'toronto', 'BC', '675434331', 7, NULL, 'rose villa', '2021-05-07 09:35:52', '2021-05-07 09:35:52'),
(20, 'malu', 'jose', 'billing', NULL, '7898', 'toronto', '9', '878987887', 7, 'malu@gmail.com', 'chittari', '2021-05-07 09:35:53', '2021-05-07 09:35:53'),
(21, 'asasd', 'sdwqd', 'shipping', 'Residence', '89674', 'ghuiih', 'AB', '98787676', 5, NULL, 'dfd', '2021-05-17 08:10:33', '2021-05-17 08:10:33'),
(22, 'dgsd', 'dfdf', 'billing', NULL, '7868', 'gghg', '6', '9876787677', 5, 'testcustomer@gmail.com', 'dsf', '2021-05-17 08:10:35', '2021-05-17 08:10:35'),
(23, 'asasd', 'sdwqd', 'shipping', 'Residence', '89674', 'ghuiih', 'AB', '8787876767', 5, NULL, 'dfd', '2021-05-17 13:49:59', '2021-05-17 13:49:59'),
(24, 'dgsd', 'dfdf', 'billing', NULL, '7868', 'gghg', '6', '9876787677', 5, 'testcustomer@gmail.com', 'dsf', '2021-05-17 13:50:02', '2021-05-17 13:50:02'),
(25, 'customer', 'joe', 'shipping', 'Business', '78987', 'fbgfb', 'AB', '9898787878', NULL, NULL, 'dsv', '2021-05-18 07:40:16', '2021-05-18 07:40:16'),
(26, 'hdffhjfd', 'dfbnfb', 'billing', NULL, '234', 'dfdfds', '6', '9878898889', NULL, 'customer@gmail.com', 'cvvc', '2021-05-18 07:40:16', '2021-05-18 07:40:16'),
(27, 'asasd', 'sdwqd', 'shipping', 'Residence', '89674', 'ghuiih', 'AB', '34354656', 5, NULL, 'dfd', '2021-05-18 08:08:47', '2021-05-18 08:08:47'),
(28, 'dgsd', 'dfdf', 'billing', NULL, '7868', 'gghg', '6', '9876787677', 5, 'testcustomer@gmail.com', 'dsf', '2021-05-18 08:08:47', '2021-05-18 08:08:47'),
(29, 'asasd', 'sdwqd', 'shipping', 'Residence', '89674', 'ghuiih', 'AB', '98787676', 5, NULL, 'dfd', '2021-05-19 07:58:08', '2021-05-19 07:58:08'),
(30, 'dgsd', 'dfdf', 'billing', NULL, '7868', 'gghg', '6', '9876787677', 5, 'testcustomer@gmail.com', 'dsf', '2021-05-19 07:58:08', '2021-05-19 07:58:08'),
(31, 'anju', 'joseph', 'shipping', 'Residence', '679554', 'Edakkara', 'BC', '8899776655', NULL, NULL, 'abcd', '2021-05-19 12:41:06', '2021-05-19 12:41:06'),
(32, 'anju', 'Joseph', 'billing', NULL, '679554', 'toronto', '6', '8899776655', NULL, 'anju@gmail.com', 'abcd', '2021-05-19 12:41:06', '2021-05-19 12:41:06'),
(33, 'dsaasd', 'dsdad', 'shipping', 'Residence', 't0a0a0', 'Toronto', 'ON', '2342342323', NULL, NULL, 'das', '2021-05-19 12:42:08', '2021-05-19 12:42:08'),
(34, 'test', 'test', 'billing', NULL, 't0a0a0', 'Toronto', '6', '343445435', NULL, 'asdfsa@adsad.com', 'test', '2021-05-19 12:42:08', '2021-05-19 12:42:08'),
(35, 'Anju', 'Joseph', 'shipping', 'Residence', '679554', 'Toronto', 'ON', '8899776655', 13, NULL, 'Test123', '2021-05-19 12:49:16', '2021-05-19 12:49:16'),
(36, 'Anju', 'Joseph', 'billing', NULL, '679554', 'Toronto', '9', '8899776655', 13, 'anju@gmail.com', 'test 123', '2021-05-19 12:49:17', '2021-05-19 12:49:17'),
(37, 'asasd', 'sdwqd', 'shipping', 'Residence', '89674', 'ghuiih', 'AB', '98787676', 5, NULL, 'dfd', '2021-05-19 14:03:45', '2021-05-19 14:03:45'),
(38, 'dgsd', 'dfdf', 'billing', NULL, '7868', 'gghg', '6', '9876787677', 5, 'testcustomer@gmail.com', 'dsf', '2021-05-19 14:03:45', '2021-05-19 14:03:45'),
(39, 'Jack', 'Daniel', 'shipping', 'Residence', 'M8Z 1J7', 'Toronto', 'MB', '9878987898', 14, NULL, 'Jack villa', '2021-05-20 05:00:14', '2021-05-20 05:00:14'),
(40, 'Rose', 'Daniel', 'billing', NULL, 'M8Z 1J7', 'Toronto', '6', '89878987898', 14, 'rose@gmail.com', 'rose villa', '2021-05-20 05:00:14', '2021-05-20 05:00:14'),
(41, 'Jalsa', 'Jee', 'shipping', 'Residence', 't0a0a0', 'Toronto', 'ON', '2342342323', 16, NULL, 'Tows', '2021-05-20 07:44:17', '2021-05-20 07:44:17'),
(42, 'Jalsa', 'Dew', 'billing', NULL, 't0a0a0', 'toronto', '1', '2342342323', 16, 'benbel@gmail.com', 'test', '2021-05-20 07:44:17', '2021-05-20 07:44:17'),
(43, 'mathew', 'george', 'shipping', 'Business', '67868', 'fgghhh', 'AB', '56708766788', NULL, NULL, 'mathewss', '2021-05-20 12:50:41', '2021-05-20 12:50:41'),
(44, 'geaorge', 'joseph', 'billing', NULL, '1234', 'ghgkyh', '9', '67876545678', NULL, 'george@gmail.com', 'gjhj', '2021-05-20 12:50:41', '2021-05-20 12:50:41'),
(45, 'esthu', 'jose', 'shipping', 'Business', '1234', 'bjhbk', 'AB', '5678765678', NULL, NULL, 'gjhgj', '2021-05-20 12:56:53', '2021-05-20 12:56:53'),
(46, 'esthu', 'joko', 'billing', NULL, '2345', 'ghgj', '9', '8767876787', NULL, 'esthu@gmail.com', 'bhjbj', '2021-05-20 12:56:53', '2021-05-20 12:56:53'),
(47, 'Jack', 'Daniel', 'shipping', 'Residence', 'M8Z 1J7', 'Toronto', 'MB', '9878987898', 14, NULL, 'Jack villa', '2021-05-20 13:23:38', '2021-05-20 13:23:38'),
(48, 'Rose', 'Daniel', 'billing', NULL, 'M8Z 1J7', 'Toronto', 'BC', '89878987898', 14, 'rose@gmail.com', 'rose villa', '2021-05-20 13:23:38', '2021-05-20 13:23:38'),
(49, 'Jack', 'Daniel', 'shipping', 'Residence', 'M8Z 1J7', 'Toronto', 'MB', '9878987898', 14, NULL, 'Jack villa', '2021-05-20 13:35:20', '2021-05-20 13:35:20'),
(50, 'Rose', 'Daniel', 'billing', NULL, 'M8Z 1J7', 'Toronto', 'MB', '89878987898', 14, 'rose@gmail.com', 'rose villa', '2021-05-20 13:35:20', '2021-05-20 13:35:20'),
(51, 'test', 'Yohannan', 'shipping', 'Business', '676123', 'Manjeri', 'MB', '09744374423', NULL, NULL, 'Santhi Bhavan', '2021-05-20 14:01:09', '2021-05-20 14:01:09'),
(52, 'fxg', 'gtgygyg', 'billing', NULL, 't0a0a0', 'Toronto', 'MB', '6282468836', NULL, 'fxtfgxcfcy@jghh.com', 'ted', '2021-05-20 14:01:09', '2021-05-20 14:01:09'),
(53, 'Jack', 'Daniel', 'shipping', 'Residence', 'M8Z 1J7', 'Toronto', 'MB', '9878987898', 14, NULL, 'Jack villa', '2021-05-21 09:56:49', '2021-05-21 09:56:49'),
(54, 'Rose', 'Daniel', 'billing', NULL, 'M8Z 1J7', 'Toronto', 'BC', '89878987898', 14, 'rose@gmail.com', 'rose villa', '2021-05-21 09:56:49', '2021-05-21 09:56:49'),
(55, 'Jack', 'Daniel', 'shipping', 'Residence', 'M8Z 1J7', 'Toronto', 'MB', '9878987898', 14, NULL, 'Jack villa', '2021-05-21 10:25:03', '2021-05-21 10:25:03'),
(56, 'Rose', 'Daniel', 'billing', NULL, 'M8Z 1J7', 'Toronto', 'BC', '89878987898', 14, 'rose@gmail.com', 'rose villa', '2021-05-21 10:25:03', '2021-05-21 10:25:03'),
(57, 'Jack', 'Daniel', 'shipping', 'Residence', 'M8Z 1J7', 'Toronto', 'MB', '9878987898', 14, NULL, 'Jack villa', '2021-05-21 10:39:39', '2021-05-21 10:39:39'),
(58, 'Rose', 'Daniel', 'billing', NULL, 'M8Z 1J7', 'Toronto', 'AB', '89878987898', 14, 'rose@gmail.com', 'rose villa', '2021-05-21 10:39:39', '2021-05-21 10:39:39'),
(59, 'Jack', 'Daniel', 'shipping', 'Residence', 'M8Z 1J7', 'Toronto', 'MB', '9878987898', 14, NULL, 'Jack villa', '2021-05-21 11:00:15', '2021-05-21 11:00:15'),
(60, 'Rose', 'Daniel', 'billing', NULL, 'M8Z 1J7', 'Toronto', 'BC', '89878987898', 14, 'rose@gmail.com', 'rose villa', '2021-05-21 11:00:15', '2021-05-21 11:00:15'),
(61, 'TESR', 'TEST', 'shipping', 'Residence', 'T0A 0A0', 'TORONTO', 'ON', '777-788-8888', NULL, NULL, 'TEST', '2021-05-21 12:19:18', '2021-05-21 12:19:18'),
(62, 'asdfasdf', 'asdffasdf', 'billing', NULL, 'T0A 0T7', 'twefqwe', 'BC', '555-555-5666', NULL, 'asdasdf@asdfsa.com', 'asdfsad', '2021-05-21 12:19:18', '2021-05-21 12:19:18'),
(63, 'Jack', 'Daniel', 'shipping', 'Residence', 'M8Z 1J7', 'Toronto', 'MB', '987-898-7898', 14, NULL, 'Jack villa', '2021-05-21 12:35:18', '2021-05-21 12:35:18'),
(64, 'Rose', 'Daniel', 'billing', NULL, 'f78 899', 'Toronto', 'AB', '898-789-8789', 14, 'rose@gmail.com', 'rose villa', '2021-05-21 12:35:18', '2021-05-21 12:35:18'),
(65, 'Jack', 'Daniel', 'shipping', 'Residence', 'M8Z 1J7', 'Toronto', 'AB', '987-898-7898', 14, NULL, 'Jack villa', '2021-05-21 13:52:44', '2021-05-21 13:52:44'),
(66, 'Jack', 'Daniel', 'billing', NULL, 'M8Z 1J7', 'Toronto', 'AB', '987-898-7898', 14, 'rose@gmail.com', 'Jack villa', '2021-05-21 13:52:44', '2021-05-21 13:52:44'),
(67, 'dsaasd', 'dsdad', 'shipping', 'Residence', '34', '45', 'AB', '456-6', NULL, NULL, 'das', '2021-05-24 07:54:43', '2021-05-24 07:54:43'),
(68, 'rtrt', 'rtr', 'billing', NULL, 'g', 'gfdgdf', 'BC', '343-445-435', NULL, 'ronaldo@gmail.com', 'gfgfd', '2021-05-24 07:54:43', '2021-05-24 07:54:43'),
(69, 'gyuguy', 'gjhg', 'shipping', 'Residence', '889', 'gvhhh', 'BC', '788-787-8788', NULL, NULL, 'gvhgvhg', '2021-12-30 12:15:36', '2021-12-30 12:15:36'),
(70, 'gyuguy', 'gjhg', 'billing', NULL, '889', 'gvhhh', 'BC', '788-787-8788', NULL, 'ancelu@gmail.com', 'gvhgvhg', '2021-12-30 12:15:36', '2021-12-30 12:15:36'),
(71, 'test', 'test', 'shipping', 'Residence', 't0a 0a0', 'toronto', 'ON', '234-234-2323', NULL, NULL, 'test', '2021-12-30 15:15:51', '2021-12-30 15:15:51'),
(72, 'test', 'test', 'billing', NULL, 't0a 0a0', 'toronto', 'ON', '233-423-4232', NULL, 'bjooos@gmail.com', 'test', '2021-12-30 15:15:51', '2021-12-30 15:15:51'),
(73, 'abcd', 'pqrs', 'shipping', 'Residence', 'n86 686', 'dhgfdh', 'BC', '465-456-5475', NULL, NULL, 'test', '2022-01-03 07:54:06', '2022-01-03 07:54:06'),
(74, 'abcd', 'pqrs', 'billing', NULL, 'n86 686', 'dhgfdh', 'BC', '465-456-5475', NULL, 'abcd@gmail.com', 'test', '2022-01-03 07:54:06', '2022-01-03 07:54:06'),
(75, 'Abcd', 'Pqrs', 'shipping', 'Residence', 'T34 345', 'Toronto', 'AB', '789-659-8797', 18, NULL, 'Test 123', '2022-01-03 08:12:50', '2022-01-03 08:12:50'),
(76, 'Abcd', 'Pqrs', 'billing', NULL, 'T34 345', 'Toronto', 'AB', '789-659-8797', 18, 'pqrs@gmail.com', 'Test 123', '2022-01-03 08:12:50', '2022-01-03 08:12:50'),
(77, 'dsaasd', 'dsdad', 'shipping', 'Residence', '34', '45', 'NB', '456-6', NULL, NULL, 'das', '2022-01-03 10:34:21', '2022-01-03 10:34:21'),
(78, 'dsaasd', 'dsdad', 'billing', NULL, '34', '45', 'NB', '456-6', NULL, 'amaze@gmail.com', 'das', '2022-01-03 10:34:21', '2022-01-03 10:34:21'),
(79, 'dsaasd', 'dsdad', 'shipping', 'Residence', '34', '45', 'BC', '456-6', NULL, NULL, 'das', '2022-01-03 10:39:46', '2022-01-03 10:39:46'),
(80, 'dsaasd', 'dsdad', 'billing', NULL, '34', '45', 'BC', '456-6', NULL, 'amaze@gmail.com', 'das', '2022-01-03 10:39:46', '2022-01-03 10:39:46'),
(81, 'Abcd', 'Pqrs', 'shipping', 'Residence', 'T34 345', 'Toronto', 'AB', '789-659-8797', 18, NULL, 'Test 123', '2022-01-03 12:20:32', '2022-01-03 12:20:32'),
(82, 'Abcd', 'Pqrs', 'billing', NULL, 'T34 345', 'Toronto', 'AB', '789-659-8797', 18, 'abcd@gmail.com', 'Test 123', '2022-01-03 12:20:32', '2022-01-03 12:20:32'),
(83, 'Abcd', 'Pqrs', 'shipping', 'Residence', 'T34 345', 'Toronto', 'AB', '789-659-8797', 18, NULL, 'Test 123', '2022-01-04 07:33:39', '2022-01-04 07:33:39'),
(84, 'Abcd', 'Pqrs', 'billing', NULL, 'T34 345', 'Toronto', 'AB', '789-659-8797', 18, 'abcd@gmail.com', 'Test 123', '2022-01-04 07:33:39', '2022-01-04 07:33:39'),
(85, 'Abcd', 'Pqrs', 'shipping', 'Residence', 'T34 345', 'Toronto', 'AB', '789-659-8797', 18, NULL, 'Test 123', '2022-01-04 07:58:44', '2022-01-04 07:58:44'),
(86, 'Abcd', 'Pqrs', 'billing', NULL, 'T34 345', 'Toronto', 'AB', '789-659-8797', 18, 'abcd@gmail.com', 'Test 123', '2022-01-04 07:58:44', '2022-01-04 07:58:44'),
(87, 'Jubi', 'Nannahoy', 'shipping', 'Residence', 't0a 0a0', 'Toronto', 'ON', '234-234-2323', NULL, NULL, 'test', '2023-03-28 13:36:05', '2023-03-28 13:36:05'),
(88, 'Jubi', 'Nannahoy', 'billing', NULL, 't0a 0a0', 'Toronto', 'ON', '234-234-2323', NULL, 'bjooos@gmail.com', 'test', '2023-03-28 13:36:05', '2023-03-28 13:36:05');

-- --------------------------------------------------------

--
-- Table structure for table `addresses_delivery`
--

CREATE TABLE `addresses_delivery` (
  `id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `postalcode` varchar(7) NOT NULL,
  `city` varchar(30) NOT NULL,
  `province` varchar(20) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `address` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `addresses_delivery`
--

INSERT INTO `addresses_delivery` (`id`, `firstname`, `lastname`, `postalcode`, `city`, `province`, `phone`, `user_id`, `email`, `address`, `created_at`, `updated_at`) VALUES
(2, 'jack', 'customer', '098hu', 'toronto', 'NS', NULL, 5, NULL, 'toronyo', '2021-04-29 05:48:12', '2021-04-29 05:48:12'),
(3, 'Albert', 'Thomas', 'M5T 2S4', 'Toronto', 'PE', NULL, 6, NULL, 'Toronto', '2021-04-30 07:37:12', '2021-04-30 07:37:12'),
(4, 'Albert', 'Daniel', 'M8Z 1J7', 'Toronto', 'QC', NULL, 14, NULL, 'Daniel villa', '2021-05-20 05:14:56', '2021-05-20 05:14:56'),
(5, 'Abcd', 'Pqrs', 'TA0900', 'Toronto', 'ON', NULL, 18, NULL, 'Test 1233', '2022-01-03 08:10:23', '2022-01-03 08:10:23');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `values` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `values`, `status`, `created_at`, `updated_at`) VALUES
(1, 'color', 'red,green', 1, '2021-03-27 10:08:55', '2021-03-27 10:53:41'),
(4, 'size', 'small', 1, '2021-03-27 10:54:13', '2021-03-27 10:54:13');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(50) NOT NULL,
  `button_text` varchar(50) NOT NULL,
  `display_order` int(11) NOT NULL,
  `banner_type` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `picture`, `title`, `description`, `link`, `button_text`, `display_order`, `banner_type`, `status`, `created_at`, `updated_at`) VALUES
(2, 'ZDhw3XPglrD40nZ65ePwqRYCXCZSmQ.png', 'Shoe', 'shoe offers', 'shoe link', 'shoew', 1, 'mobile_top_banner', 1, '2021-04-29 07:54:23', '2021-05-26 08:20:30'),
(3, 'FzAg6haQMskzHwcfxsVj2cRR7kihON.png', 'gift box', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'gift box', 'gift box', 2, 'mobile_middle_banner', 1, '2021-04-29 07:55:40', '2021-05-26 12:23:30'),
(4, 'sCkvCXvW5tCAF3IxSNEVbyhkXMMNCi.png', 'Surprice', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'surprice gift', 'surprice gift', 6, 'mobile_top_banner', 1, '2021-04-29 07:56:30', '2021-05-26 08:31:36'),
(5, 'DSJ6nsej0s4AqNZbbR7LBGleubwE5p.png', 'Free Gift', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Free Gift', 'Free Gift', 8, 'mobile_top_banner', 1, '2021-05-26 08:34:52', '2021-05-26 08:34:52'),
(6, 'xd6UTeappPyRnSDlnuwV1RwrgeRAsS.png', 'Gift for all occasions', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Gift for all occasions', 'Gift for all occasions', 9, 'mobile_middle_banner', 1, '2021-05-26 08:39:18', '2021-05-26 08:39:18'),
(7, 'fhVoFjGoXihRA4cUzquDF6DrzTGN3h.png', 'Special offer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Special offer', 'Special offer', 5, 'home', 1, '2021-05-26 08:42:47', '2021-05-26 09:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `body` text NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `image` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `body`, `author_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'blog', 'test blog', 3, 'NULL', '2021-02-27 17:54:09', '2021-02-27 17:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `display_order` int(11) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `status`, `display_order`, `slug`, `picture`, `website`, `description`, `created_at`, `updated_at`) VALUES
(8, 'Apple', 1, 1, 'apple', NULL, NULL, 'Apple\'s brand has evolved as it has expanded its range of products and services.', '2021-03-05 06:54:37', '2021-03-05 06:54:37'),
(9, 'Adidas', 1, 2, 'adidas', NULL, NULL, 'Adidas  designs and manufactures shoes, clothing and accessories. It is the largest sportswear manufacturer in Europe, and the second largest in the world', '2021-03-05 07:02:25', '2021-03-05 07:02:36');

-- --------------------------------------------------------

--
-- Table structure for table `brand_product`
--

CREATE TABLE `brand_product` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `brand_product`
--

INSERT INTO `brand_product` (`id`, `brand_id`, `product_id`) VALUES
(1, 1, 8),
(2, 1, 9),
(3, 1, 10),
(4, 5, 11),
(5, 1, 12),
(6, 1, 13),
(7, 1, 15),
(8, 1, 22),
(9, 1, 23),
(10, 1, 24),
(11, 5, 25),
(12, 1, 26),
(13, 1, 27),
(14, 6, 31),
(15, 8, 33);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT 1,
  `email` varchar(50) DEFAULT NULL,
  `open` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `billing_id` int(11) DEFAULT NULL,
  `delivery_id` int(11) DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `discount_code` varchar(50) DEFAULT NULL,
  `discount_value` decimal(10,0) DEFAULT NULL,
  `discount_value_type` varchar(20) DEFAULT NULL,
  `discount_type` varchar(30) DEFAULT NULL,
  `discount_id` int(11) DEFAULT NULL,
  `special_note` text DEFAULT NULL,
  `card_message` text DEFAULT NULL,
  `order_note` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `email`, `open`, `created_at`, `updated_at`, `status`, `billing_id`, `delivery_id`, `remarks`, `discount_code`, `discount_value`, `discount_value_type`, `discount_type`, `discount_id`, `special_note`, `card_message`, `order_note`) VALUES
(1, 1, NULL, 1, '2021-04-16 12:53:47', '2021-04-16 12:53:47', 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(2, 1, NULL, 1, '2021-04-17 04:51:24', '2021-04-17 04:51:24', 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(3, 1, NULL, 1, '2021-04-17 07:06:56', '2021-04-17 07:06:56', 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(4, 1, NULL, 1, '2021-04-17 11:05:31', '2021-04-17 11:05:31', 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(5, 1, NULL, 1, '2021-04-19 06:36:43', '2021-04-19 12:43:37', 1, 6, 5, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(6, 1, NULL, 1, '2021-04-20 05:42:29', '2021-04-20 10:56:13', 0, 20, 19, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(7, 1, NULL, 1, '2021-04-20 11:16:59', '2021-04-20 12:15:01', 0, 24, 23, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(8, 1, NULL, 1, '2021-04-20 12:19:52', '2021-04-20 12:21:02', 0, 26, 25, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(9, 1, NULL, 1, '2021-04-20 12:43:12', '2021-04-20 13:02:55', 0, 28, 27, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(10, 1, NULL, 1, '2021-04-20 13:08:03', '2021-04-20 13:17:45', 0, 30, 29, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(11, 1, NULL, 1, '2021-04-20 13:20:10', '2021-04-20 13:22:19', 0, 32, 31, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(12, 1, NULL, 1, '2021-04-20 13:29:35', '2021-04-20 13:29:35', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(13, 1, NULL, 1, '2021-04-21 05:25:29', '2021-04-21 05:27:35', 0, 34, 33, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(14, 1, NULL, 1, '2021-04-21 05:27:50', '2021-04-21 05:29:49', 0, 36, 35, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(15, 1, NULL, 1, '2021-04-21 05:39:05', '2021-04-21 05:40:08', 0, 38, 37, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(16, 1, NULL, 1, '2021-04-21 05:48:36', '2021-04-21 07:22:01', 0, 42, 41, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(17, 1, NULL, 1, '2021-04-21 09:27:08', '2021-04-21 09:27:08', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(18, 1, NULL, 1, '2021-04-21 10:11:08', '2021-04-21 10:11:08', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(19, 1, NULL, 1, '2021-04-21 12:09:22', '2021-04-21 12:48:47', 0, 46, 45, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(20, 1, NULL, 1, '2021-04-21 12:56:38', '2021-04-21 12:59:11', 0, 48, 47, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(21, 1, NULL, 1, '2021-04-21 13:04:46', '2021-04-21 13:28:10', 0, 50, 49, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(22, 1, NULL, 1, '2021-04-22 04:49:45', '2021-04-22 04:49:45', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(23, 1, NULL, 1, '2021-04-22 12:04:01', '2021-04-22 12:04:01', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(24, 1, NULL, 1, '2021-04-26 06:41:34', '2021-04-26 06:41:34', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(25, 1, NULL, 1, '2021-04-26 12:57:51', '2021-04-26 12:57:51', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(26, 1, 'sfdsfdf@fg', 1, '2021-04-26 13:26:12', '2021-04-26 13:38:29', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(27, 1, 'fggg@ghg', 1, '2021-04-27 04:45:32', '2021-04-27 04:49:34', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(28, 1, 'ancel@gmail.com', 1, '2021-04-27 04:53:26', '2021-04-27 04:53:53', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(29, 1, 'ancel@gmail.com', 1, '2021-04-27 04:56:57', '2021-04-27 05:25:21', 0, 52, 51, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(30, 1, 'ancel@gmail.com', 1, '2021-04-27 05:25:38', '2021-04-27 05:25:53', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(31, 3, 'ancel@gmail.com', 1, '2021-04-27 05:35:48', '2021-04-27 07:04:16', 0, 56, 55, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(32, 1, 'cinta@gmail.com', 1, '2021-04-27 07:04:31', '2021-04-27 07:06:25', 1, 58, 57, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(33, 3, 'ancel@gmail.com', 1, '2021-04-27 07:11:49', '2021-04-27 08:49:13', 1, 62, 61, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(34, 3, 'ancel@gmail.com', 1, '2021-04-27 08:55:14', '2021-04-27 09:10:34', 1, 66, 65, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(35, 1, 'sadf@gfh', 1, '2021-04-27 09:14:25', '2021-04-27 09:33:19', 0, 68, 67, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(36, 3, 'ancel@gmail.com', 1, '2021-04-27 09:59:42', '2021-04-27 10:00:12', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(37, 1, NULL, 1, '2021-04-27 10:56:15', '2021-04-27 10:56:15', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(38, 1, NULL, 1, '2021-04-28 05:21:57', '2021-04-28 10:16:04', 1, NULL, NULL, NULL, 'GIFTF2', 2, 'amount', 'coupon', 0, NULL, NULL, NULL),
(39, 1, NULL, 1, '2021-04-28 09:58:41', '2021-04-28 10:05:29', 1, NULL, NULL, NULL, 'SD4', 4, 'percentage', 'coupon', 0, NULL, NULL, NULL),
(40, 1, NULL, 1, '2021-04-28 10:17:05', '2021-04-28 10:43:41', 1, NULL, NULL, NULL, 'ASD1', 10, 'percentage', 'coupon', 3, NULL, NULL, NULL),
(41, 3, 'ancel@gmail.com', 1, '2021-04-29 04:45:29', '2021-04-29 11:26:55', 0, 4, 3, NULL, 'ASD1', NULL, NULL, NULL, 5, NULL, NULL, NULL),
(42, 5, 'testcustomer@gmail.com', 1, '2021-04-29 05:44:54', '2021-04-29 05:45:13', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 3, 'ancel@gmail.com', 1, '2021-04-29 11:33:41', '2021-04-29 11:34:01', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 1, NULL, 1, '2021-04-29 12:33:49', '2021-04-29 12:33:49', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 1, 'sdfdsfdf@vvgf', 1, '2021-04-29 13:06:52', '2021-04-29 13:12:00', 0, 6, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 1, NULL, 1, '2021-04-29 13:15:33', '2021-04-29 13:16:06', 1, NULL, NULL, NULL, 'ASD1', NULL, NULL, NULL, 5, NULL, NULL, NULL),
(47, 1, 'info@shoplocalto.ca', 1, '2021-04-30 05:37:21', '2021-04-30 07:22:47', 1, 8, 7, NULL, 'ASD1', NULL, NULL, NULL, 5, NULL, NULL, NULL),
(48, 7, 'malu@gmail.com', 1, '2021-05-03 07:26:24', '2021-05-03 07:47:25', 0, 10, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 1, NULL, 1, '2021-05-03 12:18:00', '2021-05-03 12:18:00', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 1, NULL, 1, '2021-05-04 09:02:30', '2021-05-04 09:02:30', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 1, 'abinjose@gmail.com', 1, '2021-05-05 10:18:27', '2021-05-05 10:19:40', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 7, 'malu@gmail.com', 1, '2021-05-06 09:06:09', '2021-05-06 14:10:16', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 1, NULL, 1, '2021-05-07 07:45:20', '2021-05-07 07:45:20', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 1, NULL, 1, '2021-05-07 08:06:13', '2021-05-07 08:06:13', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 7, 'malu@gmail.com', 1, '2021-05-07 08:09:40', '2021-05-07 09:35:53', 1, 20, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 1, 'maluz@gmail.com', 1, '2021-05-14 13:01:17', '2021-05-14 13:50:44', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 1, 'anbv@gg', 1, '2021-05-17 07:54:08', '2021-05-17 07:54:26', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 5, 'testcustomer@gmail.com', 1, '2021-05-17 08:07:07', '2021-05-17 08:11:09', 0, 22, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 5, 'testcustomer@gmail.com', 1, '2021-05-17 12:08:31', '2021-05-17 13:50:35', 0, 24, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 1, 'customer@gmail.com', 1, '2021-05-18 07:37:11', '2021-05-18 07:40:37', 0, 26, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 5, 'testcustomer@gmail.com', 1, '2021-05-18 08:07:15', '2021-05-18 08:09:11', 0, 28, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 1, NULL, 1, '2021-05-18 14:33:18', '2021-05-18 14:33:18', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 5, 'testcustomer@gmail.com', 1, '2021-05-19 07:36:28', '2021-05-19 14:03:45', 1, 38, 37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 1, 'bjooos@gmail.com', 1, '2021-05-19 12:20:09', '2021-05-19 12:48:20', 0, 34, 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 1, 'developer@indigitalgroup.ca', 1, '2021-05-19 12:35:14', '2021-05-19 12:42:00', 0, 32, 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 13, 'anju@gmail.com', 1, '2021-05-19 12:48:12', '2021-05-19 12:50:03', 0, 36, 35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 14, 'rose@gmail.com', 1, '2021-05-20 04:42:42', '2021-05-20 05:00:38', 0, 40, 39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 16, 'benbel@gmail.com', 1, '2021-05-20 07:41:36', '2021-05-20 07:44:35', 0, 42, 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 1, 'adff@gg', 1, '2021-05-20 12:16:52', '2021-05-20 12:52:57', 0, 44, 43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 13, 'anju@gmail.com', 1, '2021-05-20 12:17:25', '2021-05-20 12:17:36', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 1, 'esthu@gmail.com', 1, '2021-05-20 12:55:10', '2021-05-20 12:56:53', 1, 46, 45, NULL, NULL, NULL, NULL, NULL, NULL, 'specual notes', 'card message', NULL),
(72, 14, 'rose@gmail.com', 1, '2021-05-20 13:22:13', '2021-05-20 13:24:00', 0, 48, 47, NULL, NULL, NULL, NULL, NULL, NULL, 'good', 'Always be cool', 'This is first order'),
(73, 14, 'rose@gmail.com', 1, '2021-05-20 13:25:33', '2021-05-20 13:35:20', 1, 50, 49, NULL, NULL, NULL, NULL, NULL, NULL, 'secong', 'Happy Anniversary', 'Happy order'),
(74, 1, 'bjooos@gmail.com', 1, '2021-05-20 13:59:48', '2021-05-20 14:01:32', 0, 52, 51, NULL, NULL, NULL, NULL, NULL, NULL, 'Test', 'ygdfr rdrd', 'test'),
(75, 1, NULL, 1, '2021-05-20 15:16:47', '2021-05-20 15:16:47', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 14, 'rose@gmail.com', 1, '2021-05-21 09:55:47', '2021-05-21 10:35:54', 0, 56, 55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 14, 'rose@gmail.com', 1, '2021-05-21 10:38:50', '2021-05-21 11:15:17', 0, 60, 59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 14, 'rose@gmail.com', 1, '2021-05-21 11:20:31', '2021-05-21 12:37:37', 0, 64, 63, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'reetrertrytrytuytuyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy', NULL),
(79, 1, 'bjooos@gmail.com', 1, '2021-05-21 12:01:37', '2021-05-21 12:19:18', 1, 62, 61, NULL, NULL, NULL, NULL, NULL, NULL, 'sdfsd', 'Atem gfggfgff hghgf hyhh hhgyyybhh', NULL),
(80, 14, 'rose@gmail.com', 1, '2021-05-21 12:38:15', '2021-05-21 13:52:44', 1, 66, 65, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 14, 'rose@gmail.com', 1, '2021-05-21 13:22:57', '2021-05-21 14:11:51', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 15, 'steve@gmail.com', 1, '2021-05-21 14:21:52', '2021-05-21 14:29:20', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 1, 'cesario@indigitalgroup.ca', 1, '2021-05-21 15:20:44', '2021-05-21 15:21:18', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 1, 'ronaldo@gmail.com', 1, '2021-05-24 06:38:07', '2021-05-24 07:54:43', 1, 68, 67, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 1, NULL, 1, '2021-10-18 16:01:09', '2021-10-18 16:01:09', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 1, NULL, 1, '2021-12-30 07:23:19', '2021-12-30 07:23:19', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 1, 'ancelu@gmail.com', 1, '2021-12-30 12:14:14', '2021-12-30 12:15:58', 0, 70, 69, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vghvhghghguyhyuuy', NULL),
(88, 1, 'bjooos@gmail.com', 1, '2021-12-30 15:13:59', '2021-12-30 15:16:16', 0, 72, 71, NULL, NULL, NULL, NULL, NULL, NULL, 'test', 'test', NULL),
(89, 1, 'abcd@gmail.com', 1, '2022-01-03 07:51:01', '2022-01-03 07:54:31', 0, 74, 73, NULL, NULL, NULL, NULL, NULL, NULL, 'gjghj', 'Happy birthday', NULL),
(90, 1, 'pqrs@gmail.com', 1, '2022-01-03 07:56:55', '2022-01-03 08:13:23', 0, 76, 75, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gift for you.', NULL),
(91, 1, 'amaze@gmail.com', 1, '2022-01-03 09:02:50', '2022-01-03 10:40:08', 0, 80, 79, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 18, 'abcd@gmail.com', 1, '2022-01-03 12:19:59', '2022-01-03 12:21:04', 0, 82, 81, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, 18, 'abcd@gmail.com', 1, '2022-01-03 12:28:40', '2022-01-03 14:15:04', 1, NULL, NULL, NULL, 'newyear2022', NULL, NULL, NULL, 7, NULL, NULL, NULL),
(94, 18, 'abcd@gmail.com', 1, '2022-01-04 07:30:08', '2022-01-04 07:59:03', 0, 86, 85, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(109, 22, 'testpqrs@gmail.com', 1, '2022-01-04 13:46:42', '2022-01-04 13:56:56', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 1, NULL, 1, '2022-01-04 10:43:28', '2022-01-04 10:45:38', 1, NULL, NULL, NULL, 'test123', NULL, NULL, NULL, 9, NULL, NULL, NULL),
(110, 1, NULL, 1, '2022-01-04 13:54:09', '2022-01-04 14:04:51', 1, NULL, NULL, NULL, 'tester', NULL, NULL, NULL, 16, NULL, NULL, NULL),
(99, 1, NULL, 1, '2022-01-04 12:35:29', '2022-01-04 12:35:29', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 1, NULL, 1, '2022-01-04 12:38:50', '2022-01-04 12:38:50', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(117, 1, 'ewfrwgreer@rfgrgh', 1, '2022-07-25 06:54:37', '2022-07-25 06:54:50', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(116, 1, NULL, 1, '2022-05-19 13:47:20', '2022-05-19 13:47:20', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(115, 1, NULL, 1, '2022-05-18 07:56:30', '2022-05-18 07:56:30', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(114, 1, NULL, 1, '2022-05-12 13:42:14', '2022-05-12 13:42:14', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, 1, NULL, 1, '2022-05-12 07:57:18', '2022-05-12 07:57:18', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 1, NULL, 1, '2022-01-05 13:29:52', '2022-01-05 13:29:52', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 1, NULL, 1, '2022-01-05 08:45:53', '2022-01-05 08:45:53', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(118, 1, 'bjooos@gmail.com', 1, '2023-03-28 13:35:15', '2023-03-28 13:36:28', 0, 88, 87, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test', NULL),
(119, 1, NULL, 1, '2023-07-08 08:32:36', '2023-07-08 08:32:36', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(120, 1, NULL, 1, '2023-11-08 10:47:53', '2023-11-08 10:47:53', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(121, 1, NULL, 1, '2023-11-08 10:47:53', '2023-11-08 10:47:53', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `parent_id` int(10) DEFAULT NULL,
  `display_order` int(11) NOT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `parent_id`, `display_order`, `slug`, `picture`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Books', 1, NULL, 1, 'books', 'Fqo08ngGf7lUS6Ks1PYL4zpke5lcSA.png', NULL, 'Books let you travel without moving your feet', '2021-03-29 09:13:28', '2021-05-19 08:45:13'),
(3, 'Babies', 1, NULL, 2, 'babies', 'lAVhc58W52U2SVyAsYi2WvcmOctQla.png', NULL, 'Provide Amazing gifts for babies', '2021-03-29 09:17:24', '2021-05-19 08:45:39'),
(5, 'Home', 1, NULL, 3, 'home', 'CwCDFoOIzsBd1CTrFA53d1Ljozlb87.png', NULL, 'Provide home items.', '2021-03-29 09:19:34', '2021-05-19 08:46:06'),
(6, 'Kids', 1, NULL, 6, 'kids', 'RkQHjs2LwblYo3xMPRT02SskTRxqEp.png', NULL, 'Attractive gift items are here for kids.', '2021-03-29 09:20:49', '2021-05-19 08:46:32'),
(7, 'Barware', 1, NULL, 1, 'barware', '7zUJVdHNKjh80JVod3ZZPFGMxIyaLP.png', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', '2021-03-30 05:34:52', '2021-05-19 08:47:05'),
(8, 'Gourmet', 1, NULL, 15, 'gourmet', '58IJgVToNBcFoYypBJf2PGEBEM6G4O.png', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2021-03-30 05:38:41', '2021-05-19 08:47:45'),
(9, 'Wine & Spirits', 1, NULL, 3, 'wine-spirits', 'yf0haLkpTDTEZ8pM6FCEYqdGvKXGgo.png', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2021-03-30 05:39:21', '2021-05-19 08:49:04'),
(10, 'Plants & Flowers', 1, NULL, 5, 'plants-flowers', 'CXcF6FxSLrcNgiOubg2eVZ0l7FxmDF.png', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2021-03-30 05:40:05', '2021-05-19 08:50:00'),
(11, 'Health & Wellness', 1, NULL, 6, 'health-wellness', 'bRCU3658RNuZNlMpsHcBk1PSbAwdJg.png', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2021-03-30 05:40:35', '2021-05-19 08:51:00'),
(12, 'Sustainable', 1, NULL, 8, 'sustainable', '2aIR6ahtWAMmNW9VhAIei9KxqqlJ3N.png', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2021-03-30 05:41:12', '2021-05-19 08:51:30'),
(13, 'Apothecary', 1, NULL, 9, 'apothecary', '3rgFna4kzVpNW4ylZd0Zpo4zYXn7TN.png', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2021-03-30 05:41:44', '2021-05-19 08:51:58'),
(14, 'Work From Home', 1, NULL, 11, 'work-from-home', '6eLWy6VZof0i71majEZBCXYu5U9C5W.png', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2021-03-30 05:42:09', '2021-05-19 08:52:28'),
(15, 'New Trending Products', 1, NULL, 2, 'new-trending-products', 'ji8NZnhSV4qqG4gOO4VkUsmR51HCeo.png', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2021-04-29 08:04:19', '2021-05-19 08:53:06'),
(16, 'Sweets', 1, NULL, 1, 'sweets', '9KCu56T0LEtlx8WwOFHhm6VZlu2eOR.png', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2021-05-20 06:26:28', '2021-05-20 06:26:28'),
(17, 'Tech & Gadgets', 1, NULL, 18, 'tech-gadgets', '3qIwyYIK85gQkynuVvW2MPbAK3tumd.png', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2021-05-20 06:30:56', '2021-05-20 06:30:56'),
(18, 'Best Sellers', 1, NULL, 17, 'best-sellers', 'jv1qILZ8bULHaueOoGkUpPHCmItNkV.png', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2021-05-20 08:43:06', '2021-05-20 08:43:06'),
(19, 'Best Deals Products', 1, NULL, 7, 'best-deals-products', 'YPNowubT1wsZ8epl6eS1h8t9eh1Pr2.png', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2021-05-26 10:05:50', '2021-05-26 10:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `product_id`, `category_id`) VALUES
(54, 31, 3),
(48, 13, 19),
(47, 16, 19),
(46, 28, 19),
(45, 17, 18),
(42, 17, 16),
(53, 30, 3),
(44, 18, 18),
(52, 29, 3),
(18, 12, 10),
(19, 13, 5),
(51, 29, 13),
(21, 16, 5),
(22, 17, 3),
(23, 18, 6),
(24, 19, 1),
(40, 28, 8),
(26, 21, 10),
(27, 22, 10),
(28, 23, 10),
(29, 24, 10),
(30, 18, 15),
(31, 17, 15),
(32, 23, 15),
(33, 12, 15),
(34, 22, 15),
(43, 16, 17),
(41, 28, 11),
(37, 27, 3);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `province` char(2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `is_popular` tinyint(1) NOT NULL DEFAULT 1,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `province`, `status`, `is_popular`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'Toronto', 'ON', 1, 1, NULL, NULL, '2021-05-21 13:44:41', '2021-05-21 13:44:41'),
(2, 'Brant', 'ON', 1, 1, 43.116669, -80.366669, '2022-01-03 12:56:03', '2022-01-03 12:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `city_store`
--

CREATE TABLE `city_store` (
  `id` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  `store_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(2, 'Blue', '#1193d9', '2021-02-12 07:11:51', '2021-02-12 10:30:44'),
(3, 'Red', '#ff0000', '2021-02-12 07:12:16', '2021-02-12 10:30:35'),
(6, 'Rose', '#cb16e3', '2021-02-12 08:36:04', '2021-02-12 10:30:26'),
(7, 'Green', '#3f9e52', '2021-02-12 08:40:27', '2021-02-12 10:30:55'),
(8, 'Yellow', '#fff04d', '2021-02-12 10:31:14', '2021-02-12 10:31:14'),
(9, 'Violet', '#742fff', '2021-02-12 10:31:45', '2021-02-12 10:31:45'),
(10, 'Orange', '#ff7614', '2021-02-12 10:32:07', '2021-02-12 10:32:07'),
(11, 'Grey', '#9b9ca3', '2021-02-12 10:32:35', '2021-02-12 10:35:52'),
(12, 'Brown', '#855033', '2021-02-12 10:33:21', '2021-02-12 10:33:21'),
(13, 'Black', '#000000', '2021-02-12 10:35:33', '2021-02-12 10:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `color_product`
--

CREATE TABLE `color_product` (
  `id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'stephen', 'stephen@gmail.com', 'testing', 'testing contas', '2022-01-06 07:52:59', '2022-01-06 07:52:59'),
(2, 'stephen', 'stephen@gmail.com', 'testing', 'testing contas', '2022-01-06 08:02:31', '2022-01-06 08:02:31'),
(3, 'stephen', 'stephen@gmail.com', 'testing', 'testing contas', '2022-01-06 08:13:15', '2022-01-06 08:13:15'),
(4, 'fgfgh', 'fhhjj@fdsg', 'gdfg', 'fgfg', '2022-01-06 08:13:33', '2022-01-06 08:13:33'),
(5, 'fgfgh', 'fhhjj@fdsg', 'gdfg', 'fgfg', '2022-01-06 08:22:15', '2022-01-06 08:22:15'),
(6, 'fgfgh', 'fhhjj@fdsg', 'gdfg', 'fgfg', '2022-01-06 08:23:59', '2022-01-06 08:23:59'),
(7, 'dsSFG', 'Anse@gmail.com', 'gfghfhfh', 'vfgfg', '2022-01-06 08:24:32', '2022-01-06 08:24:32'),
(8, 'dsSFG', 'Anse@gmail.com', 'gfghfhfh', 'vfgfg', '2022-01-06 08:27:06', '2022-01-06 08:27:06'),
(9, 'dsSFG', 'Anse@gmail.com', 'gfghfhfh', 'vfgfg', '2022-01-06 08:32:05', '2022-01-06 08:32:05'),
(10, 'dsSFG', 'Anse@gmail.com', 'gfghfhfh', 'vfgfg', '2022-01-06 08:33:26', '2022-01-06 08:33:26'),
(11, 'dsSFG', 'Anse@gmail.com', 'gfghfhfh', 'vfgfg', '2022-01-06 08:35:46', '2022-01-06 08:35:46'),
(12, 'dsSFG', 'Anse@gmail.com', 'gfghfhfh', 'vfgfg', '2022-01-06 08:38:27', '2022-01-06 08:38:27'),
(13, 'ancek', 'ancelindigital@gmail.com', 'testing', 'just for testing', '2022-01-06 08:58:25', '2022-01-06 08:58:25'),
(14, 'ancek', 'ancelindigital@gmail.com', 'testing', 'just for testing', '2022-01-06 08:58:57', '2022-01-06 08:58:57'),
(15, 'xssxfsf', 'dsfdf@fgfh', 'fgdf', 'dfgdfgf', '2022-01-06 09:00:03', '2022-01-06 09:00:03'),
(16, 'ancel', 'ancelindigital@gmail.com', 'testing', 'testing contact us', '2022-01-06 09:05:58', '2022-01-06 09:05:58'),
(17, 'xssxfsf', 'dsfdf@fgfh', 'fgdf', 'dfgdfgf', '2022-01-06 09:12:40', '2022-01-06 09:12:40'),
(18, 'xssxfsf', 'dsfdf@fgfh', 'fgdf', 'dfgdfgf', '2022-01-06 09:15:35', '2022-01-06 09:15:35'),
(19, 'xssxfsf', 'dsfdf@fgfh', 'fgdf', 'dfgdfgf', '2022-01-06 09:20:05', '2022-01-06 09:20:05'),
(20, 'xssxfsf', 'dsfdf@fgfh', 'fgdf', 'dfgdfgf', '2022-01-06 09:21:52', '2022-01-06 09:21:52'),
(21, 'rerer', 'ancelindigital@gmail.com', 'dewdrfw', 'ewrwer', '2022-01-06 09:24:58', '2022-01-06 09:24:58'),
(22, 'rerer', 'ancelindigital@gmail.com', 'dewdrfw', 'ewrwer', '2022-01-06 09:26:00', '2022-01-06 09:26:00'),
(23, 'rerer', 'ancelindigital@gmail.com', 'dewdrfw', 'ewrwer', '2022-01-06 09:37:28', '2022-01-06 09:37:28'),
(24, 'rerer', 'ancelindigital@gmail.com', 'dewdrfw', 'ewrwer', '2022-01-06 09:45:18', '2022-01-06 09:45:18'),
(25, 'rerer', 'ancelindigital@gmail.com', 'dewdrfw', 'ewrwer', '2022-01-06 09:54:41', '2022-01-06 09:54:41'),
(26, 'rerer', 'ancelindigital@gmail.com', 'dewdrfw', 'ewrwer', '2022-01-06 09:59:11', '2022-01-06 09:59:11'),
(27, 'rerer', 'ancelindigital@gmail.com', 'dewdrfw', 'ewrwer', '2022-01-06 10:01:30', '2022-01-06 10:01:30'),
(28, 'rerer', 'ancelindigital@gmail.com', 'dewdrfw', 'ewrwer', '2022-01-06 10:02:23', '2022-01-06 10:02:23'),
(29, 'rerer', 'ancelindigital@gmail.com', 'dewdrfw', 'ewrwer', '2022-01-06 10:06:29', '2022-01-06 10:06:29'),
(30, 'rerer', 'ancelindigital@gmail.com', 'dewdrfw', 'ewrwer', '2022-01-06 10:12:28', '2022-01-06 10:12:28'),
(31, 'rerer', 'ancelindigital@gmail.com', 'dewdrfw', 'ewrwer', '2022-01-06 10:16:22', '2022-01-06 10:16:22'),
(32, 'rerer', 'ancelindigital@gmail.com', 'dewdrfw', 'ewrwer', '2022-01-06 10:22:19', '2022-01-06 10:22:19'),
(33, 'dfds', 'ancel@gmail.com', 'dsfds', 'dfsdf', '2022-01-06 10:22:43', '2022-01-06 10:22:43'),
(34, 'dfds', 'ancel@gmail.com', 'dsfds', 'dfsdf', '2022-01-06 10:23:11', '2022-01-06 10:23:11'),
(35, 'dfds', 'ancel@gmail.com', 'dsfds', 'dfsdf', '2022-01-06 10:25:04', '2022-01-06 10:25:04'),
(36, 'dfds', 'ancel@gmail.com', 'dsfds', 'dfsdf', '2022-01-06 10:26:20', '2022-01-06 10:26:20'),
(37, 'dfds', 'ancel@gmail.com', 'dsfds', 'dfsdf', '2022-01-06 10:30:10', '2022-01-06 10:30:10'),
(38, 'dfds', 'ancel@gmail.com', 'dsfds', 'dfsdf', '2022-01-06 10:31:00', '2022-01-06 10:31:00'),
(39, 'dfds', 'ancel@gmail.com', 'dsfds', 'dfsdf', '2022-01-06 10:32:01', '2022-01-06 10:32:01'),
(40, 'dfds', 'ancel@gmail.com', 'dsfds', 'dfsdf', '2022-01-06 10:32:27', '2022-01-06 10:32:27'),
(41, 'dfds', 'ancel@gmail.com', 'dsfds', 'dfsdf', '2022-01-06 10:34:55', '2022-01-06 10:34:55'),
(42, 'dfds', 'ancel@gmail.com', 'dsfds', 'dfsdf', '2022-01-06 10:36:22', '2022-01-06 10:36:22'),
(43, 'dfds', 'ancel@gmail.com', 'dsfds', 'dfsdf', '2022-01-06 10:38:18', '2022-01-06 10:38:18'),
(44, 'dfds', 'ancel@gmail.com', 'dsfds', 'dfsdf', '2022-01-06 10:39:02', '2022-01-06 10:39:02'),
(45, 'dfds', 'ancel@gmail.com', 'dsfds', 'dfsdf', '2022-01-06 10:41:09', '2022-01-06 10:41:09'),
(46, 'dfds', 'ancel@gmail.com', 'dsfds', 'dfsdf', '2022-01-06 10:41:28', '2022-01-06 10:41:28'),
(47, 'dfds', 'ancel@gmail.com', 'dsfds', 'dfsdf', '2022-01-06 10:42:57', '2022-01-06 10:42:57'),
(48, 'dfds', 'ancel@gmail.com', 'dsfds', 'dfsdf', '2022-01-06 10:43:49', '2022-01-06 10:43:49'),
(49, 'dfds', 'ancel@gmail.com', 'dsfds', 'dfsdf', '2022-01-06 10:46:19', '2022-01-06 10:46:19'),
(50, 'dfds', 'ancel@gmail.com', 'dsfds', 'dfsdf', '2022-01-06 10:46:43', '2022-01-06 10:46:43'),
(51, 'dfds', 'ancel@gmail.com', 'dsfds', 'dfsdf', '2022-01-06 10:46:59', '2022-01-06 10:46:59'),
(52, 'dsadsd', 'ancel@gmail.com', 'dfgdg', 'gfdg', '2022-01-06 10:53:12', '2022-01-06 10:53:12'),
(53, 'dsadsd', 'ancel@gmail.com', 'dfgdg', 'gfdg', '2022-01-06 10:56:18', '2022-01-06 10:56:18'),
(54, 'dsadsd', 'ancel@gmail.com', 'dfgdg', 'gfdg', '2022-01-06 11:00:25', '2022-01-06 11:00:25'),
(55, 'dsadsd', 'ancel@gmail.com', 'dfgdg', 'gfdg', '2022-01-06 11:02:10', '2022-01-06 11:02:10'),
(56, 'dsadsd', 'ancel@gmail.com', 'dfgdg', 'gfdg', '2022-01-06 11:05:11', '2022-01-06 11:05:11'),
(57, 'dsadsd', 'ancel@gmail.com', 'dfgdg', 'gfdg', '2022-01-06 11:12:43', '2022-01-06 11:12:43'),
(58, 'dsadsd', 'ancel@gmail.com', 'dfgdg', 'gfdg', '2022-01-06 11:15:10', '2022-01-06 11:15:10'),
(59, 'dsadsd', 'ancel@gmail.com', 'dfgdg', 'gfdg', '2022-01-06 12:43:46', '2022-01-06 12:43:46'),
(60, 'dsadsd', 'ancel@gmail.com', 'dfgdg', 'gfdg', '2022-01-06 12:44:20', '2022-01-06 12:44:20'),
(61, 'ammu', 'ammu@gmail.com', 'testing', 'testing contactus', '2022-01-06 12:48:04', '2022-01-06 12:48:04'),
(62, 'ammu', 'ammu@gmail.com', 'testing', 'testing contactus', '2022-01-06 12:57:12', '2022-01-06 12:57:12'),
(63, 'ammu', 'ammu@gmail.com', 'testing', 'testing contactus', '2022-01-06 12:59:10', '2022-01-06 12:59:10'),
(64, 'ammu', 'ammu@gmail.com', 'testing', 'testing contactus', '2022-01-06 13:02:17', '2022-01-06 13:02:17'),
(65, 'ammu', 'ancelindigital@gmail.com', 'testing', 'testing message', '2022-01-06 13:03:42', '2022-01-06 13:03:42'),
(66, 'ammu', 'ancelindigital@gmail.com', 'testing', 'testing message', '2022-01-06 13:06:21', '2022-01-06 13:06:21'),
(67, 'ammu', 'ancelindigital@gmail.com', 'testing', 'testing message', '2022-01-06 13:08:47', '2022-01-06 13:08:47'),
(68, 'ammu', 'ancelindigital@gmail.com', 'testing', 'testing message', '2022-01-06 13:13:05', '2022-01-06 13:13:05'),
(69, 'anse', 'ancel@gmail.com', 'dghgh', 'fgh', '2022-01-06 13:13:47', '2022-01-06 13:13:47'),
(70, 'anse', 'ancel@gmail.com', 'dghgh', 'fgh', '2022-01-06 13:23:30', '2022-01-06 13:23:30'),
(71, 'ancel', 'ancelindigital@gmail.com', 'please contact me', 'contact message testing', '2022-01-06 13:25:55', '2022-01-06 13:25:55'),
(72, 'ancel', 'ancelindigital@gmail.com', 'please contact me', 'contact message testing', '2022-01-06 13:29:05', '2022-01-06 13:29:05'),
(73, 'ancel', 'ancelindigital@gmail.com', 'please contact me', 'contact message testing', '2022-01-06 13:37:04', '2022-01-06 13:37:04'),
(74, 'ancel', 'ancel@gmail.com', 'testing', 'contactus testing', '2022-01-06 13:54:12', '2022-01-06 13:54:12'),
(75, 'ancel', 'ancel@gmail.com', 'testing', 'contactus testing', '2022-01-06 13:55:14', '2022-01-06 13:55:14'),
(76, 'ancel', 'ancel@gmail.com', 'testing', 'contactus testing', '2022-01-06 13:55:46', '2022-01-06 13:55:46'),
(77, 'ancel', 'ancel@gmail.com', 'testing', 'contactus testing', '2022-01-06 13:56:49', '2022-01-06 13:56:49'),
(78, 'ancel', 'ancel@gmail.com', 'testing', 'contactus testing', '2022-01-06 13:58:55', '2022-01-06 13:58:55'),
(79, 'ancel', 'ancel@gmail.com', 'testing', 'contactus testing', '2022-01-06 14:00:00', '2022-01-06 14:00:00'),
(80, 'ancel', 'ancel@gmail.com', 'testing', 'contactus testing', '2022-01-06 14:02:44', '2022-01-06 14:02:44'),
(81, 'ancel', 'ancel@gmail.com', 'testing', 'contactus testing', '2022-01-06 14:03:22', '2022-01-06 14:03:22'),
(82, 'ancel', 'ancel@gmail.com', 'testing', 'contactus testing', '2022-01-06 14:07:11', '2022-01-06 14:07:11'),
(83, 'ancel', 'ancel@gmail.com', 'testing', 'contactus testing', '2022-01-06 14:09:14', '2022-01-06 14:09:14'),
(84, 'ancel', 'ancel@gmail.com', 'testing', 'contactus testing', '2022-01-06 14:17:33', '2022-01-06 14:17:33'),
(85, 'ancel', 'ancel@gmail.com', 'testing', 'contactus testing', '2022-01-06 14:18:17', '2022-01-06 14:18:17'),
(86, 'ancel', 'ancel@gmail.com', 'testing', 'contactus testing', '2022-01-06 14:20:45', '2022-01-06 14:20:45'),
(87, 'ancel', 'ancel@gmail.com', 'testing', 'contactus testing', '2022-01-06 14:22:04', '2022-01-06 14:22:04'),
(88, 'ancel', 'ancel@gmail.com', 'testing', 'contactus testing', '2022-01-06 14:23:50', '2022-01-06 14:23:50'),
(89, 'ancel', 'ancel@gmail.com', 'testing', 'contactus testing', '2022-01-06 14:24:23', '2022-01-06 14:24:23'),
(90, 'ancel', 'ancel@gmail.com', 'testing', 'testing', '2022-01-06 14:25:09', '2022-01-06 14:25:09'),
(91, 'test', 'ancel@gmail.com', 'testing', 'testing', '2022-01-06 14:28:10', '2022-01-06 14:28:10'),
(92, 'dff', 'ancel@gmail.in', 'contact', 'test concatct', '2022-01-06 14:31:55', '2022-01-06 14:31:55'),
(93, 'ansu', 'ansu@gmail.com', 'hi', 'fhgfh', '2022-01-11 13:23:44', '2022-01-11 13:23:44'),
(94, 'ammu', 'ammu@gmail.com', '/hi', 'from giftty', '2022-01-11 13:26:55', '2022-01-11 13:26:55'),
(95, 'ammu', 'ammu@gmail.com', '/hi', 'from giftty', '2022-01-11 14:06:26', '2022-01-11 14:06:26'),
(96, 'ammu', 'ammu@gmail.com', '/hi', 'from giftty', '2022-01-11 14:12:31', '2022-01-11 14:12:31'),
(97, 'ammu', 'ammu@gmail.com', '/hi', 'from giftty', '2022-01-11 14:12:47', '2022-01-11 14:12:47'),
(98, 'ammu', 'ammu@gmail.com', '/hi', 'from giftty', '2022-01-11 14:13:51', '2022-01-11 14:13:51'),
(99, 'ammu', 'ammu@gmail.com', '/hi', 'from giftty', '2022-01-11 14:16:02', '2022-01-11 14:16:02'),
(100, 'ammu', 'ammu@gmail.com', '/hi', 'from giftty', '2022-01-11 14:17:25', '2022-01-11 14:17:25'),
(101, 'ammu', 'ammu@gmail.com', '/hi', 'from giftty', '2022-01-11 14:20:08', '2022-01-11 14:20:08'),
(102, 'ammu', 'ammu@gmail.com', '/hi', 'from giftty', '2022-01-11 14:21:47', '2022-01-11 14:21:47'),
(103, 'ammu', 'ammu@gmail.com', 'hi', 'from giftty', '2022-01-11 14:22:10', '2022-01-11 14:22:10'),
(104, 'ammu', 'ammu@gmail.com', 'hi', 'from giftty', '2022-01-11 14:28:11', '2022-01-11 14:28:11'),
(105, 'ammu', 'ammu@gmail.com', 'jjkl', 'kjkjklk', '2022-01-11 14:28:34', '2022-01-11 14:28:34'),
(106, 'ammu', 'ammu@gmail.com', 'jjkl', 'kjkjklk', '2022-01-11 14:29:46', '2022-01-11 14:29:46'),
(107, 'ammu', 'ammu@gmail.com', 'jjkl', 'kjkjklk', '2022-01-11 14:29:55', '2022-01-11 14:29:55'),
(108, 'new', 'newone@gmail.com', 'asdas', 'asdad', '2022-01-12 09:15:36', '2022-01-12 09:15:36'),
(109, 'new', 'newone@gmail.com', 'asdas', 'asdad', '2022-01-12 09:17:12', '2022-01-12 09:17:12'),
(110, 'new', 'newone@gmail.com', 'asdas', 'asdad', '2022-01-12 09:18:00', '2022-01-12 09:18:00'),
(111, 'gg', 'ann@gmail.com', '43t4', 't4t', '2022-01-12 09:20:21', '2022-01-12 09:20:21'),
(112, 'fggf', 'asdrfd@gmail.com', 'gghh', 'ghh', '2022-01-12 09:22:57', '2022-01-12 09:22:57'),
(113, 'adsf', 'ancel@gmail.com', 'bvn', 'nnnnnb', '2022-01-12 12:31:22', '2022-01-12 12:31:22'),
(114, 'adsf', 'ancel@gmail.com', 'bvn', 'nnnnnb', '2022-01-12 12:43:27', '2022-01-12 12:43:27'),
(115, 'testing', 'testing@gmail.com', 'hi', 'hghf', '2022-01-13 07:32:05', '2022-01-13 07:32:05'),
(116, 'appu', 'appu@gmail.com', 'appu hi', 'hloi asdff', '2022-01-13 07:39:28', '2022-01-13 07:39:28'),
(117, 'appu', 'appu@gmail.com', 'appu hi', 'hloi asdff', '2022-01-13 07:42:12', '2022-01-13 07:42:12'),
(118, 'gdfg', 'ancel@gmail.com', 'gfh', 'hf', '2022-01-13 07:49:11', '2022-01-13 07:49:11'),
(119, 'fgdf', 'fdhd@fgf', 'fdg', 'fdg', '2022-01-13 07:50:27', '2022-01-13 07:50:27'),
(120, 'dfdsf', 'dfdsf@ghgf', 'dgf', 'gfdd', '2022-01-20 09:55:46', '2022-01-20 09:55:46'),
(121, 'dfdsf', 'dfdsf@ghgf', 'dgf', 'gfdd', '2022-01-20 10:01:11', '2022-01-20 10:01:11'),
(122, 'dfdsf', 'dfdsf@ghgf', 'dgf', 'gfdd', '2022-01-20 10:02:53', '2022-01-20 10:02:53'),
(123, 'dfdsf', 'dfdsf@ghgf', 'dgf', 'gfdd', '2022-01-20 10:04:40', '2022-01-20 10:04:40'),
(124, 'dfdsf', 'dfdsf@ghgf', 'dgf', 'gfdd', '2022-01-20 10:05:08', '2022-01-20 10:05:08'),
(125, 'dfdsf', 'dfdsf@ghgf', 'dgf', 'gfdd', '2022-01-20 10:06:08', '2022-01-20 10:06:08'),
(126, 'dfdsf', 'dfdsf@ghgf', 'dgf', 'gfdd', '2022-01-20 10:07:13', '2022-01-20 10:07:13'),
(127, 'dfdsf', 'dfdsf@ghgf', 'dgf', 'gfdd', '2022-01-20 10:08:40', '2022-01-20 10:08:40'),
(128, 'dfdsf', 'dfdsf@ghgf', 'dgf', 'gfdd', '2022-01-20 10:09:09', '2022-01-20 10:09:09'),
(129, 'dfdsf', 'dfdsf@ghgf', 'dgf', 'gfdd', '2022-01-20 10:09:32', '2022-01-20 10:09:32'),
(130, 'dfdsf', 'dfdsf@ghgf', 'dgf', 'gfdd', '2022-01-20 10:11:43', '2022-01-20 10:11:43'),
(131, 'dfdsf', 'dfdsf@ghgf', 'dgf', 'gfdd', '2022-01-20 10:13:24', '2022-01-20 10:13:24'),
(132, 'dfdsf', 'dfdsf@ghgf', 'dgf', 'gfdd', '2022-01-20 10:14:56', '2022-01-20 10:14:56'),
(133, 'dfdsf', 'dfdsf@ghgf', 'dgf', 'gfdd', '2022-01-20 10:15:18', '2022-01-20 10:15:18'),
(134, 'dfdsf', 'dfdsf@ghgf', 'dgf', 'gfdd', '2022-01-20 10:16:43', '2022-01-20 10:16:43'),
(135, 'dfdsf', 'dfdsf@ghgf', 'dgf', 'gfdd', '2022-01-20 10:18:24', '2022-01-20 10:18:24'),
(136, 'dfdsf', 'dfdsf@ghgf', 'dgf', 'gfdd', '2022-01-20 10:24:46', '2022-01-20 10:24:46'),
(137, 'dfdsf', 'dfdsf@ghgf', 'dgf', 'gfdd', '2022-01-20 10:25:19', '2022-01-20 10:25:19'),
(138, 'dfdsf', 'dfdsf@ghgf', 'dgf', 'gfdd', '2022-01-20 10:30:27', '2022-01-20 10:30:27'),
(139, 'ancel', 'ancel@gmail.com', 'Contact me', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2022-01-20 10:34:18', '2022-01-20 10:34:18'),
(140, 'ZAP', 'zaproxy@example.com', 'Zaproxy dolore alias impedit expedita quisquam.', 'Zaproxy alias impedit expedita quisquam pariatur exercitationem. Nemo rerum eveniet dolores rem quia dignissimos.', '2023-11-08 10:47:55', '2023-11-08 10:47:55');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(45) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `min_amount` decimal(10,0) NOT NULL,
  `max_usage` int(11) NOT NULL,
  `value` decimal(10,0) NOT NULL,
  `value_type` enum('amount','percentage') NOT NULL,
  `use_count` int(11) DEFAULT 0,
  `discount_type` enum('coupon','shipped') NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `code`, `description`, `start_time`, `end_time`, `min_amount`, `max_usage`, `value`, `value_type`, `use_count`, `discount_type`, `status`, `created_at`, `updated_at`) VALUES
(3, 'GIFTF2', 'Discount for Flower', '2022-01-04 00:00:00', '2022-01-04 23:59:59', 10, 4, 2, 'amount', NULL, 'coupon', 1, '2021-04-28 05:52:14', '2022-01-04 10:26:04'),
(4, 'SD4', 'for flowers', '2021-04-27 00:00:00', '2021-04-29 23:59:59', 15, 2, 4, 'percentage', 0, 'coupon', 1, '2021-04-28 07:43:05', '2021-04-28 10:41:38'),
(5, 'ASD1', 'sdff', '2021-04-26 00:00:00', '2021-05-01 00:00:00', 12, 4, 10, 'percentage', 1, 'coupon', 1, '2021-04-28 10:43:25', '2021-04-30 06:43:12'),
(7, 'newyear2022', 'New Year Discount', '2022-01-01 00:00:00', '2022-01-15 23:59:59', 200, 5, 50, 'amount', NULL, 'coupon', 1, '2022-01-03 14:14:52', '2022-01-03 14:21:02'),
(8, 'AD89', 'vxdfgh', '2022-01-05 00:00:00', '2022-01-12 23:59:59', 40, 2, 5, 'amount', NULL, 'coupon', 1, '2022-01-04 10:38:33', '2022-01-04 10:40:25'),
(9, 'test123', 'test123', '2022-01-04 00:00:00', '2022-01-31 23:59:59', 100, 5, 50, 'amount', NULL, 'coupon', 1, '2022-01-04 10:45:09', '2022-01-04 10:47:29'),
(16, 'tester', 'savf', '2022-01-04 00:00:00', '2022-01-27 23:59:59', 20, 4, 50, 'amount', NULL, 'coupon', 1, '2022-01-04 13:25:58', '2022-01-04 14:21:51'),
(17, 'GIFTYNEW', 'GIFTYNEW', '2022-01-05 00:00:00', '2022-01-12 00:00:00', 25, 4, 4, 'percentage', 0, 'coupon', 1, '2022-01-05 07:45:49', '2022-01-05 07:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `discount_user`
--

CREATE TABLE `discount_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `discount_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `display_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `display_order`, `created_at`, `updated_at`) VALUES
(1, 'What is your Policy?', 'test', 3, '2021-01-30 17:22:45', '2021-01-30 17:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_picture` varchar(100) NOT NULL,
  `variant_id` int(11) NOT NULL,
  `variant_name` varchar(50) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_sku` varchar(15) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `card_message` text DEFAULT NULL,
  `special_note` text DEFAULT NULL,
  `special_instructions` text DEFAULT NULL,
  `postal_code` varchar(7) DEFAULT NULL,
  `delivery_date` datetime DEFAULT NULL,
  `location_type` varchar(25) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `product_id`, `product_name`, `product_picture`, `variant_id`, `variant_name`, `price`, `quantity`, `product_sku`, `cart_id`, `vendor_id`, `store_id`, `card_message`, `special_note`, `special_instructions`, `postal_code`, `delivery_date`, `location_type`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'White Chocolate Pralines', '099Wft9FEq5M0thtM7cDh0oIZWDGed.png', 49, 'Small', 45.00, 1, 'WCP21', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2021-04-16 12:53:47', '2021-04-16 12:53:47'),
(9, 1, 'White Chocolate Pralines', '099Wft9FEq5M0thtM7cDh0oIZWDGed.png', 49, 'Small', 45.00, 1, 'WCP21', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2021-04-16 13:49:38', '2021-04-16 13:49:38'),
(21, 2, 'Red Roses', 'http://127.0.0.1:8000/images/user/2/tGMrlU1ToOuMzpJe2vNKCj2DTFyrHX.png', 47, 'Large', 150.00, 1, 'RR01', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-17 06:22:39', NULL, 0, NULL, '2021-04-17 06:22:39', '2021-04-17 06:22:39'),
(13, 1, 'White Chocolate Pralines', '099Wft9FEq5M0thtM7cDh0oIZWDGed.png', 49, 'Small', 45.00, 2, 'WCP21', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2021-04-16 14:19:03', '2021-04-16 14:19:03'),
(22, 2, 'Red Roses', 'http://127.0.0.1:8000/images/user/2/tGMrlU1ToOuMzpJe2vNKCj2DTFyrHX.png', 47, 'Large', 150.00, 0, 'RR01', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-17 06:35:29', NULL, 0, NULL, '2021-04-17 06:35:29', '2021-04-17 06:35:29'),
(27, 2, 'Red Roses', '2/M9hOpESZaziVBqleJjGObSZp2L2drj.png', 47, 'big', 150.00, 1, 'RR01', 3, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-19 07:31:38', NULL, 0, NULL, '2021-04-17 07:31:38', '2021-04-17 07:31:38'),
(35, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', 145.00, 1, 'WCP21', 5, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-21 06:36:43', NULL, 0, NULL, '2021-04-19 06:36:43', '2021-04-19 06:36:43'),
(25, 2, 'Red Roses', '2/M9hOpESZaziVBqleJjGObSZp2L2drj.png', 47, 'big', 150.00, 3, 'RR01', 3, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-19 07:21:20', NULL, 0, NULL, '2021-04-17 07:21:20', '2021-04-17 07:21:20'),
(32, 2, 'Red Roses', '2/Kc5vyus8veptk5cdox4IBDGvKBnL5M.png', 48, 'Large', 245.00, 2, 'RR01', 3, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-19 07:57:51', NULL, 0, NULL, '2021-04-17 07:57:51', '2021-04-17 07:57:51'),
(33, 2, 'Red Roses', '2/Kc5vyus8veptk5cdox4IBDGvKBnL5M.png', 48, 'Large', 245.00, 1, 'RR01', 4, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-19 11:05:31', NULL, 0, NULL, '2021-04-17 11:05:31', '2021-04-17 11:05:31'),
(34, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', 145.00, 1, 'WCP21', 3, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-19 12:20:39', NULL, 0, NULL, '2021-04-17 12:20:39', '2021-04-17 12:20:39'),
(36, 2, 'Red Roses', '2/Kc5vyus8veptk5cdox4IBDGvKBnL5M.png', 48, 'Large', 245.00, 1, 'RR01', 5, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-21 07:12:27', NULL, 0, NULL, '2021-04-19 07:12:27', '2021-04-19 07:12:27'),
(37, 3, 'Yellow Roses', '2/M4XC2uUgoaNPH110R0rye8GGgoxaZ7.png', 36, 'large', 345.00, 1, 'YR2', 5, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-21 07:12:42', NULL, 0, NULL, '2021-04-19 07:12:42', '2021-04-19 07:12:42'),
(48, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', 145.00, 1, 'WCP21', 7, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-22 11:16:59', NULL, 0, NULL, '2021-04-20 11:16:59', '2021-04-20 11:16:59'),
(39, 2, 'Red Roses', '2/Kc5vyus8veptk5cdox4IBDGvKBnL5M.png', 48, 'Large', 245.00, 1, 'RR01', 6, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-22 05:58:58', NULL, 0, NULL, '2021-04-20 05:58:58', '2021-04-20 05:58:58'),
(47, 2, 'Red Roses', '2/Kc5vyus8veptk5cdox4IBDGvKBnL5M.png', 48, 'Large', 245.00, 1, 'RR01', 6, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-22 10:55:58', NULL, 0, NULL, '2021-04-20 10:55:58', '2021-04-20 10:55:58'),
(44, 2, 'Red Roses', '2/M9hOpESZaziVBqleJjGObSZp2L2drj.png', 47, 'big', 150.00, 2, 'RR01', 6, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-22 06:28:08', NULL, 0, NULL, '2021-04-20 06:28:08', '2021-04-20 06:28:08'),
(45, 2, 'Red Roses', '2/Kc5vyus8veptk5cdox4IBDGvKBnL5M.png', 48, 'Large', 245.00, 1, 'RR01', 6, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-22 06:34:30', NULL, 0, NULL, '2021-04-20 06:34:30', '2021-04-20 06:34:30'),
(46, 3, 'Yellow Roses', '2/M4XC2uUgoaNPH110R0rye8GGgoxaZ7.png', 36, 'large', 345.00, 1, 'YR2', 6, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-22 06:54:54', NULL, 0, NULL, '2021-04-20 06:54:54', '2021-04-20 06:54:54'),
(49, 3, 'Yellow Roses', '2/M4XC2uUgoaNPH110R0rye8GGgoxaZ7.png', 36, 'large', 345.00, 1, 'YR2', 7, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-22 12:11:39', NULL, 0, NULL, '2021-04-20 12:11:39', '2021-04-20 12:11:39'),
(50, 2, 'Red Roses', '2/Kc5vyus8veptk5cdox4IBDGvKBnL5M.png', 48, 'Large', 245.00, 1, 'RR01', 8, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-22 12:19:52', NULL, 0, NULL, '2021-04-20 12:19:52', '2021-04-20 12:19:52'),
(51, 2, 'Red Roses', '2/M9hOpESZaziVBqleJjGObSZp2L2drj.png', 47, 'big', 150.00, 2, 'RR01', 9, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-22 12:43:12', NULL, 0, NULL, '2021-04-20 12:43:12', '2021-04-20 12:43:12'),
(52, 1, 'White Chocolate Pralines', '2/QdiMoeKTtUnqeEFjXv32KylNDvBoEJ.png', 49, 'small', 45.00, 1, 'WCP21', 10, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-22 13:08:03', NULL, 0, NULL, '2021-04-20 13:08:03', '2021-04-20 13:08:03'),
(53, 1, 'White Chocolate Pralines', '2/QdiMoeKTtUnqeEFjXv32KylNDvBoEJ.png', 49, 'small', 45.00, 2, 'WCP21', 11, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-22 13:20:10', NULL, 0, NULL, '2021-04-20 13:20:10', '2021-04-20 13:20:10'),
(57, 5, 'chocolates', '2/SucfpnD3WCQfaFopz9bS7BiPWPwKlI.png', 22, 'asdf', 34.00, 3, '34df', 12, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-22 13:42:35', NULL, 0, NULL, '2021-04-20 13:42:35', '2021-04-20 13:42:35'),
(56, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', 145.00, 4, 'WCP21', 12, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-22 13:39:15', NULL, 0, NULL, '2021-04-20 13:39:15', '2021-04-20 13:39:15'),
(58, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', 145.00, 1, 'WCP21', 13, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-23 05:25:29', NULL, 0, NULL, '2021-04-21 05:25:29', '2021-04-21 05:25:29'),
(59, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', 145.00, 1, 'WCP21', 14, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-23 05:27:50', NULL, 0, NULL, '2021-04-21 05:27:50', '2021-04-21 05:27:50'),
(60, 3, 'Yellow Roses', '2/M4XC2uUgoaNPH110R0rye8GGgoxaZ7.png', 36, 'large', 345.00, 1, 'YR2', 14, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-23 05:28:16', NULL, 0, NULL, '2021-04-21 05:28:16', '2021-04-21 05:28:16'),
(61, 2, 'Red Roses', '2/Kc5vyus8veptk5cdox4IBDGvKBnL5M.png', 48, 'Large', 245.00, 1, 'RR01', 15, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-23 05:39:05', NULL, 0, NULL, '2021-04-21 05:39:05', '2021-04-21 05:39:05'),
(82, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', 145.00, 1, 'WCP21', 19, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-23 12:29:11', NULL, 0, NULL, '2021-04-21 12:29:11', '2021-04-21 12:29:11'),
(81, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', 145.00, 1, 'WCP21', 19, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-23 12:28:59', NULL, 0, NULL, '2021-04-21 12:28:59', '2021-04-21 12:28:59'),
(80, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', 145.00, 1, 'WCP21', 19, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-23 12:24:07', NULL, 0, NULL, '2021-04-21 12:24:07', '2021-04-21 12:24:07'),
(78, 3, 'Yellow Roses', '2/M4XC2uUgoaNPH110R0rye8GGgoxaZ7.png', 36, 'large', 345.00, 1, 'YR2', 18, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-23 10:11:08', NULL, 0, NULL, '2021-04-21 10:11:08', '2021-04-21 10:11:08'),
(76, 3, 'Yellow Roses', '2/M4XC2uUgoaNPH110R0rye8GGgoxaZ7.png', 36, 'large', 345.00, 1, 'YR2', 16, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-23 08:32:03', NULL, 0, NULL, '2021-04-21 08:32:03', '2021-04-21 08:32:03'),
(77, 3, 'Yellow Roses', '2/M4XC2uUgoaNPH110R0rye8GGgoxaZ7.png', 36, 'large', 345.00, 1, 'YR2', 17, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-23 09:27:08', NULL, 0, NULL, '2021-04-21 09:27:08', '2021-04-21 09:27:08'),
(84, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', 145.00, 1, 'WCP21', 20, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-23 12:57:17', NULL, 0, NULL, '2021-04-21 12:57:17', '2021-04-21 12:57:17'),
(87, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', 145.00, 1, 'WCP21', 21, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-23 13:25:43', NULL, 0, NULL, '2021-04-21 13:25:43', '2021-04-21 13:25:43'),
(102, 12, 'Red Roses', '2/eZgcoVPYaYvtBcY34lKKNnjSdEIq0X.png', 80, 'Small', 20.00, 1, 'RR3', 22, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-24 09:41:23', NULL, 0, NULL, '2021-04-22 09:41:23', '2021-04-22 09:41:23'),
(103, 12, 'Red Roses', '2/mjXIrkRnSIigbunOrUf0IFiPNpysrc.png', 79, 'Medium', 40.00, 2, 'RR3', 22, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-24 09:41:32', NULL, 0, NULL, '2021-04-22 09:41:32', '2021-04-22 09:53:54'),
(104, 12, 'Red Roses', '2/mGH0jnEgFrw71EmLVYTND1TsdYhiBC.png', 78, 'Large', 50.00, 2, 'RR3', 22, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-24 09:41:39', NULL, 0, NULL, '2021-04-22 09:41:39', '2021-04-22 09:54:05'),
(105, 13, 'Wall Art Painting', '2/qlNZt0msLDzSrdwd4w0JOzuFlFRsH9.png', 81, 'Large', 100.00, 1, 'WAP', 22, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-24 09:51:32', NULL, 0, NULL, '2021-04-22 09:51:32', '2021-04-22 09:51:32'),
(108, 12, 'Red Roses', '2/mjXIrkRnSIigbunOrUf0IFiPNpysrc.png', 79, 'Medium', 40.00, 1, 'RR3', 23, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-24 12:06:23', NULL, 0, NULL, '2021-04-22 12:06:23', '2021-04-22 12:06:23'),
(109, 12, 'Red Roses', '2/eZgcoVPYaYvtBcY34lKKNnjSdEIq0X.png', 80, 'Small', 20.00, 7, 'RR3', 23, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-24 12:06:30', NULL, 0, NULL, '2021-04-22 12:06:30', '2021-04-22 13:27:22'),
(110, 12, 'Red Roses', '2/eZgcoVPYaYvtBcY34lKKNnjSdEIq0X.png', 80, 'Small', 20.00, 2, 'RR3', 23, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-24 12:42:16', NULL, 0, NULL, '2021-04-22 12:42:16', '2021-04-22 12:42:29'),
(111, 12, 'Red Roses', '2/eZgcoVPYaYvtBcY34lKKNnjSdEIq0X.png', 80, 'Small', 20.00, 1, 'RR3', 23, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-24 13:27:05', NULL, 0, NULL, '2021-04-22 13:27:05', '2021-04-22 13:27:05'),
(112, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', 80.00, 1, 'YR4', 24, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-28 06:41:34', NULL, 0, NULL, '2021-04-26 06:41:34', '2021-04-26 06:41:34'),
(113, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', 80.00, 1, 'YR4', 24, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-28 07:13:40', NULL, 0, NULL, '2021-04-26 07:13:40', '2021-04-26 07:13:40'),
(115, 22, 'White Rose Flower', '2/FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 112, 'Small', 80.00, 1, 'WRE4', 26, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-28 13:26:12', NULL, 0, NULL, '2021-04-26 13:26:12', '2021-04-26 13:26:12'),
(120, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', 80.00, 1, 'YR4', 27, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-29 04:51:59', NULL, 0, NULL, '2021-04-27 04:51:59', '2021-04-27 04:51:59'),
(121, 22, 'White Rose Flower', '2/FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 112, 'Small', 80.00, 1, 'WRE4', 28, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-29 04:53:26', NULL, 0, NULL, '2021-04-27 04:53:26', '2021-04-27 04:53:26'),
(122, 22, 'White Rose Flower', '2/FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 112, 'Small', 80.00, 1, 'WRE4', 29, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-29 04:56:57', NULL, 0, NULL, '2021-04-27 04:56:57', '2021-04-27 04:56:57'),
(123, 22, 'White Rose Flower', '2/FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 112, 'Small', 80.00, 1, 'WRE4', 30, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-29 05:25:38', NULL, 0, NULL, '2021-04-27 05:25:38', '2021-04-27 05:25:38'),
(124, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', 80.00, 1, 'YR4', 31, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-29 05:35:48', NULL, 0, NULL, '2021-04-27 05:35:48', '2021-04-27 05:35:48'),
(125, 22, 'White Rose Flower', '2/FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 112, 'Small', 80.00, 1, 'WRE4', 31, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-29 06:56:11', NULL, 0, NULL, '2021-04-27 06:56:11', '2021-04-27 06:56:11'),
(126, 22, 'White Rose Flower', '2/FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 112, 'Small', 80.00, 1, 'WRE4', 31, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-29 06:56:56', NULL, 0, NULL, '2021-04-27 06:56:56', '2021-04-27 06:56:56'),
(128, 22, 'White Rose Flower', '2/FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 112, 'Small', 80.00, 1, 'WRE4', 32, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-29 07:10:58', NULL, 0, NULL, '2021-04-27 07:10:58', '2021-04-27 07:10:58'),
(129, 12, 'Red Roses', '2/DAODpkPnHLfMqlUV4uw0zIFBImGWW0.png', 89, 'Small', 20.00, 1, 'RR3', 33, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-29 07:11:49', NULL, 0, NULL, '2021-04-27 07:11:49', '2021-04-27 07:11:49'),
(132, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', 80.00, 1, 'YR4', 34, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-29 09:10:28', NULL, 0, NULL, '2021-04-27 09:10:28', '2021-04-27 09:10:28'),
(134, 22, 'White Rose Flower', '2/FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 112, 'Small', 80.00, 1, 'WRE4', 35, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-29 09:14:42', NULL, 0, NULL, '2021-04-27 09:14:42', '2021-04-27 09:14:42'),
(135, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', 80.00, 1, 'YR4', 36, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-29 09:59:42', NULL, 0, NULL, '2021-04-27 09:59:42', '2021-04-27 09:59:42'),
(142, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', 80.00, 1, 'YR4', 38, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-30 10:16:34', NULL, 0, NULL, '2021-04-28 10:16:34', '2021-04-28 10:16:34'),
(140, 22, 'White Rose Flower', '2/FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 112, 'Small', 80.00, 1, 'WRE4', 39, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-30 09:58:41', NULL, 0, NULL, '2021-04-28 09:58:41', '2021-04-28 09:58:41'),
(144, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', 80.00, 1, 'YR4', 40, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-30 12:33:52', NULL, 0, NULL, '2021-04-28 12:33:52', '2021-04-28 12:33:52'),
(145, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', 80.00, 1, 'YR4', 41, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-01 04:45:29', NULL, 0, NULL, '2021-04-29 04:45:29', '2021-04-29 04:45:29'),
(146, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', 80.00, 1, 'YR4', 41, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-01 04:48:55', NULL, 0, NULL, '2021-04-29 04:48:55', '2021-04-29 04:48:55'),
(147, 22, 'White Rose Flower', '2/FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 112, 'Small', 80.00, 1, 'WRE4', 41, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-01 04:52:01', NULL, 0, NULL, '2021-04-29 04:52:01', '2021-04-29 04:52:01'),
(148, 22, 'White Rose Flower', '2/FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 112, 'Small', 80.00, 1, 'WRE4', 42, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-01 05:44:54', NULL, 0, NULL, '2021-04-29 05:44:54', '2021-04-29 05:44:54'),
(149, 18, 'Kids Toys', '2/g0JiTCImvOOALIATtO34PIzfNB4Ujh.png', 103, 'small', 25.00, 1, 'KT4', 41, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-01 10:21:13', NULL, 0, NULL, '2021-04-29 10:21:13', '2021-04-29 10:21:13'),
(150, 22, 'White Rose Flower', '2/FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 112, 'Small', 80.00, 2, 'WRE4', 41, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-01 10:58:24', NULL, 0, NULL, '2021-04-29 10:58:24', '2021-04-29 10:58:24'),
(154, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', 80.00, 1, 'YR4', 45, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-01 13:06:52', NULL, 0, NULL, '2021-04-29 13:06:52', '2021-04-29 13:06:52'),
(155, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', 80.00, 1, 'YR4', 46, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-01 13:15:33', NULL, 0, NULL, '2021-04-29 13:15:33', '2021-04-29 13:15:33'),
(159, 12, 'Red Roses', '2/DAODpkPnHLfMqlUV4uw0zIFBImGWW0.png', 89, 'Small', 20.00, 1, 'RR3', 47, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-02 07:25:54', NULL, 0, NULL, '2021-04-30 07:25:54', '2021-04-30 07:25:54'),
(160, 12, 'Red Roses', '2/DAODpkPnHLfMqlUV4uw0zIFBImGWW0.png', 89, 'Small', 20.00, 1, 'RR3', 48, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-05 07:26:24', NULL, 0, NULL, '2021-05-03 07:26:24', '2021-05-03 07:26:24'),
(161, 12, 'Red Roses', '2/DAODpkPnHLfMqlUV4uw0zIFBImGWW0.png', 89, 'Small', 20.00, 1, 'RR3', 48, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-05 07:28:49', NULL, 0, NULL, '2021-05-03 07:28:49', '2021-05-03 07:28:49'),
(162, 13, 'Wall Art Painting', '2/AjCU2gQknzOhWFXsGb4X2RJ2cDw6Ec.png', 83, 'Small', 20.00, 2, 'WAP', 49, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-05 12:18:00', NULL, 0, NULL, '2021-05-03 12:18:00', '2021-05-03 12:18:00'),
(163, 13, 'Wall Art Painting', '2/AjCU2gQknzOhWFXsGb4X2RJ2cDw6Ec.png', 83, 'Small', 20.00, 2, 'WAP', 49, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-05 12:39:24', NULL, 0, NULL, '2021-05-03 12:39:24', '2021-05-03 12:39:24'),
(164, 12, 'Red Roses', '2/DAODpkPnHLfMqlUV4uw0zIFBImGWW0.png', 89, 'Small', 20.00, 1, 'RR3', 50, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-06 09:02:31', NULL, 0, NULL, '2021-05-04 09:02:31', '2021-05-04 09:02:31'),
(165, 23, 'Orange Rose Flower', '2/yfENhuyS7NEpSOysP4NliO2T2qH1KL.png', 113, 'Big', 150.00, 2, 'OR3', 51, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-07 10:18:27', NULL, 0, NULL, '2021-05-05 10:18:27', '2021-05-05 10:18:27'),
(166, 12, 'Red Roses', '2/DAODpkPnHLfMqlUV4uw0zIFBImGWW0.png', 89, 'Small', 20.00, 1, 'RR3', 52, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-08 09:06:09', NULL, 0, NULL, '2021-05-06 09:06:09', '2021-05-06 09:06:09'),
(167, 21, 'Yellow Rose Flower', '2/038eYIc5D7t2j6S5x9tMfxRDBKwxXR.png', 107, 'Big', 134.00, 5, 'YR4', 52, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-08 09:07:32', NULL, 0, NULL, '2021-05-06 09:07:32', '2021-05-06 14:29:25'),
(168, 12, 'Red Roses', '2/DAODpkPnHLfMqlUV4uw0zIFBImGWW0.png', 89, 'Small', 20.00, 2, 'RR3', 52, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-08 14:28:41', NULL, 0, NULL, '2021-05-06 14:28:41', '2021-05-06 14:29:31'),
(169, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', 80.00, 1, 'YR4', 53, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-09 07:45:21', NULL, 0, NULL, '2021-05-07 07:45:21', '2021-05-07 07:45:21'),
(170, 12, 'Red Roses', '2/DAODpkPnHLfMqlUV4uw0zIFBImGWW0.png', 89, 'Small', 20.00, 1, 'RR3', 53, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-09 07:47:45', NULL, 0, NULL, '2021-05-07 07:47:45', '2021-05-07 07:47:45'),
(171, 12, 'Red Roses', '2/DAODpkPnHLfMqlUV4uw0zIFBImGWW0.png', 89, 'Small', 20.00, 1, 'RR3', 54, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-09 08:06:13', NULL, 0, NULL, '2021-05-07 08:06:13', '2021-05-07 08:06:13'),
(172, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', 80.00, 1, 'YR4', 55, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-09 08:09:40', NULL, 0, NULL, '2021-05-07 08:09:40', '2021-05-07 08:09:40'),
(173, 19, 'Story Book', '2/0mxTExllJYl1F1xg9fFQMDdIiqqO9t.png', 104, 'Big', 67.00, 3, 'SB1', 55, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-09 08:18:49', NULL, 0, NULL, '2021-05-07 08:18:49', '2021-05-07 08:19:01'),
(178, 12, 'Red Roses', '12/ExBPvcjB02PWYVXJ6BXKpqbZdl6kD2.png', 162, 'Small', 20.00, 1, 'RR3', 56, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-16 13:50:19', NULL, 0, NULL, '2021-05-14 13:50:19', '2021-05-14 13:50:19'),
(180, 21, 'Yellow Rose Flower', '21/aFMhu9wQlsjRkb6vTMajKxt6tomQb5.png', 149, 'Big', 134.00, 1, 'YR4', 58, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-19 08:07:07', NULL, 0, NULL, '2021-05-17 08:07:07', '2021-05-17 08:07:07'),
(179, 12, 'Red Roses', '12/ExBPvcjB02PWYVXJ6BXKpqbZdl6kD2.png', 162, 'Small', 20.00, 2, 'RR3', 57, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-19 07:54:08', NULL, 0, NULL, '2021-05-17 07:54:08', '2021-05-17 07:54:08'),
(181, 21, 'Yellow Rose Flower', '21/t8MAjApvQV8WJiaNobsijG0FmGALD7.png', 151, 'Small', 80.00, 1, 'YR4', 59, 11, NULL, NULL, NULL, NULL, NULL, '2021-05-19 12:16:06', NULL, 0, NULL, '2021-05-17 12:16:06', '2021-05-17 12:16:06'),
(182, 24, 'Pink Rose Flower', '24/04zn8oBIiHAQlLf5cWIB6EXaHVX3b1.png', 158, 'Medium', 50.00, 1, 'PRF', 60, 11, NULL, NULL, NULL, NULL, NULL, '2021-05-20 07:37:11', NULL, 0, NULL, '2021-05-18 07:37:11', '2021-05-18 07:37:11'),
(183, 23, 'Orange Rose Flower', '23/SBxwPbyZVcNLGnKGzRS25vTteG2e7h.png', 156, 'Medium', 23.00, 1, 'OR3', 61, 11, 2, NULL, NULL, NULL, NULL, '2021-05-20 08:07:15', NULL, 0, NULL, '2021-05-18 08:07:15', '2021-05-18 08:07:15'),
(184, 12, 'Red Roses', '12/ExBPvcjB02PWYVXJ6BXKpqbZdl6kD2.png', 162, 'Small', 20.00, 1, 'RR3', 62, 11, 2, NULL, NULL, NULL, NULL, '2021-05-20 14:33:18', NULL, 0, NULL, '2021-05-18 14:33:18', '2021-05-18 14:33:18'),
(185, 24, 'Pink Rose Flower', '24/YlGKmOi4JYVWyIBVqazIdvNOp1lbEU.png', 159, 'Small', 25.00, 2, 'PRF', 63, 11, 2, NULL, NULL, NULL, NULL, '2021-05-21 07:36:28', NULL, 0, NULL, '2021-05-19 07:36:28', '2021-05-19 14:00:49'),
(187, 28, 'Assorted Milk and Almonds Dark Chocolates in Box', '28/1vpdoSRoxDKT0kjJWf8MrrfkEzFHsB.png', 168, 'Standard', 145.00, 5, 'AMASD445', 64, 12, 3, NULL, NULL, NULL, NULL, '2021-05-21 12:26:42', NULL, 0, NULL, '2021-05-19 12:26:42', '2021-05-19 12:41:02'),
(188, 17, 'New Born Baby', '17/R1KPLahYfB5oHP9rohRv4RvQ6vApTY.png', 137, 'Small', 50.00, 2, 'BB2', 65, 11, 2, NULL, NULL, NULL, NULL, '2021-05-21 12:35:14', NULL, 0, NULL, '2021-05-19 12:35:14', '2021-05-19 12:35:14'),
(189, 17, 'New Born Baby', '17/AHuwDHYKNYSeIEVveUgxtTYQbyL8n2.png', 136, 'Medium', 80.00, 2, 'BB2', 64, 11, 2, NULL, NULL, NULL, NULL, '2021-05-21 12:35:45', NULL, 0, NULL, '2021-05-19 12:35:45', '2021-05-19 12:35:45'),
(190, 13, 'Wall Art Painting', '13/TtuYELupS3QXUU8JUitUuf7FXupWdh.png', 128, 'Small', 20.00, 2, 'WAP', 66, 11, 2, NULL, NULL, NULL, NULL, '2021-05-21 12:48:12', NULL, 0, NULL, '2021-05-19 12:48:12', '2021-05-19 12:48:12'),
(191, 28, 'Assorted Milk and Almonds Dark Chocolates in Box', '28/1vpdoSRoxDKT0kjJWf8MrrfkEzFHsB.png', 168, 'Standard', 145.00, 3, 'AMASD445', 63, 12, 3, NULL, NULL, NULL, NULL, '2021-05-21 14:00:34', NULL, 0, NULL, '2021-05-19 14:00:34', '2021-05-19 14:00:56'),
(194, 12, 'Red Roses', '12/xXqBkUhGs2LSMBYVQxe5mx3qkPmDe1.png', 170, 'Medium', 40.00, 1, 'RR3', 67, 11, 2, NULL, NULL, NULL, NULL, '2021-05-22 04:55:59', NULL, 0, NULL, '2021-05-20 04:55:59', '2021-05-20 04:55:59'),
(195, 28, 'Assorted Milk and Almonds Dark Chocolates in Box', '28/uuXyM5Io6lIuI3c7yXWUinHARt1Svn.png', 172, 'Standard', 145.00, 3, 'AMASD445', 68, 12, 3, NULL, NULL, NULL, NULL, '2021-05-22 07:41:36', NULL, 5, NULL, '2021-05-20 07:41:36', '2021-05-20 13:55:42'),
(196, 21, 'Yellow Rose Flower', '21/t8MAjApvQV8WJiaNobsijG0FmGALD7.png', 151, 'Small', 80.00, 1, 'YR4', 69, 11, 2, NULL, NULL, NULL, NULL, '2021-05-22 12:16:52', NULL, 1, NULL, '2021-05-20 12:16:52', '2021-05-20 12:52:57'),
(197, 13, 'Wall Art Painting', '13/TtuYELupS3QXUU8JUitUuf7FXupWdh.png', 128, 'Small', 20.00, 1, 'WAP', 70, 11, 2, NULL, NULL, NULL, NULL, '2021-05-22 12:17:25', NULL, 0, NULL, '2021-05-20 12:17:25', '2021-05-20 12:17:25'),
(198, 17, 'New Born Baby', '17/R1KPLahYfB5oHP9rohRv4RvQ6vApTY.png', 137, 'Small', 50.00, 1, 'BB2', 71, 11, 2, NULL, NULL, NULL, NULL, '2021-05-22 12:55:10', NULL, 0, NULL, '2021-05-20 12:55:10', '2021-05-20 12:55:10'),
(199, 21, 'Yellow Rose Flower', '21/t8MAjApvQV8WJiaNobsijG0FmGALD7.png', 151, 'Small', 80.00, 1, 'YR4', 71, 11, 2, NULL, NULL, NULL, NULL, '2021-05-22 13:20:18', NULL, 0, NULL, '2021-05-20 13:20:18', '2021-05-20 13:20:18'),
(200, 24, 'Pink Rose Flower', '24/04zn8oBIiHAQlLf5cWIB6EXaHVX3b1.png', 158, 'Medium', 50.00, 1, 'PRF', 72, 11, 2, NULL, NULL, NULL, NULL, '2021-05-22 13:22:13', NULL, 1, NULL, '2021-05-20 13:22:13', '2021-05-20 13:24:00'),
(201, 22, 'White Rose Flower', '22/YY5vNLH6K5JA1q94BMVhiEVWGd7nfV.png', 154, 'Small', 80.00, 1, 'WRE4', 73, 11, 2, NULL, NULL, NULL, NULL, '2021-05-22 13:25:33', NULL, 0, NULL, '2021-05-20 13:25:33', '2021-05-20 13:25:33'),
(202, 28, 'Assorted Milk and Almonds Dark Chocolates in Box', '28/uuXyM5Io6lIuI3c7yXWUinHARt1Svn.png', 172, 'Standard', 145.00, 2, 'AMASD445', 74, 12, 3, NULL, NULL, NULL, NULL, '2021-05-22 13:59:48', NULL, 1, NULL, '2021-05-20 13:59:48', '2021-05-20 14:01:32'),
(203, 21, 'Yellow Rose Flower', '21/t8MAjApvQV8WJiaNobsijG0FmGALD7.png', 151, 'Small', 80.00, 1, 'YR4', 71, 11, 2, NULL, NULL, NULL, NULL, '2021-05-22 14:05:50', NULL, 0, NULL, '2021-05-20 14:05:50', '2021-05-20 14:05:50'),
(204, 23, 'Orange Rose Flower', '23/SBxwPbyZVcNLGnKGzRS25vTteG2e7h.png', 156, 'Medium', 23.00, 1, 'OR3', 75, 11, 2, NULL, NULL, NULL, NULL, '2021-05-22 15:16:47', NULL, 0, NULL, '2021-05-20 15:16:47', '2021-05-20 15:16:47'),
(205, 12, 'Red Roses', '12/dwYgyYxqmvp8tBAdiAfJN92j4TlqwP.png', 171, 'Small', 20.00, 1, 'RR3', 76, 11, 2, NULL, NULL, NULL, NULL, '2021-05-23 09:55:47', NULL, 1, NULL, '2021-05-21 09:55:47', '2021-05-21 10:35:54'),
(206, 12, 'Red Roses', '12/dwYgyYxqmvp8tBAdiAfJN92j4TlqwP.png', 171, 'Small', 20.00, 1, 'RR3', 76, 11, 2, NULL, NULL, NULL, NULL, '2021-05-23 10:24:49', NULL, 1, NULL, '2021-05-21 10:24:49', '2021-05-21 10:35:54'),
(207, 21, 'Yellow Rose Flower', '21/t8MAjApvQV8WJiaNobsijG0FmGALD7.png', 151, 'Small', 80.00, 1, 'YR4', 77, 11, 2, NULL, NULL, NULL, NULL, '2021-05-23 10:38:50', NULL, 1, NULL, '2021-05-21 10:38:50', '2021-05-21 11:15:17'),
(208, 17, 'New Born Baby', '17/R1KPLahYfB5oHP9rohRv4RvQ6vApTY.png', 137, 'Small', 50.00, 1, 'BB2', 77, 11, 2, NULL, NULL, NULL, NULL, '2021-05-23 11:00:01', NULL, 1, NULL, '2021-05-21 11:00:01', '2021-05-21 11:15:17'),
(209, 21, 'Yellow Rose Flower', '21/t8MAjApvQV8WJiaNobsijG0FmGALD7.png', 151, 'Small', 80.00, 1, 'YR4', 78, 11, 2, NULL, NULL, NULL, NULL, '2021-05-23 11:20:31', NULL, 1, NULL, '2021-05-21 11:20:31', '2021-05-21 12:37:37'),
(210, 12, 'Red Roses', '12/dwYgyYxqmvp8tBAdiAfJN92j4TlqwP.png', 171, 'Small', 20.00, 1, 'RR3', 78, 11, 2, NULL, NULL, NULL, NULL, '2021-05-23 11:28:34', NULL, 1, NULL, '2021-05-21 11:28:34', '2021-05-21 12:37:37'),
(211, 12, 'Red Roses', '12/xXqBkUhGs2LSMBYVQxe5mx3qkPmDe1.png', 170, 'Medium', 40.00, 1, 'RR3', 79, 11, 2, NULL, NULL, NULL, NULL, '2021-05-23 12:01:37', NULL, 0, NULL, '2021-05-21 12:01:37', '2021-05-21 12:01:37'),
(219, 19, 'Story Book', '19/qPiAcCOQJhnMK93KRO7nYbvB7trO7B.png', 173, 'Big', 67.00, 1, 'SB1', 83, 11, 2, NULL, NULL, NULL, NULL, '2021-05-23 15:20:44', NULL, 0, NULL, '2021-05-21 15:20:44', '2021-05-21 15:20:44'),
(216, 21, 'Yellow Rose Flower', '21/t8MAjApvQV8WJiaNobsijG0FmGALD7.png', 151, 'Small', 80.00, 1, 'YR4', 81, 11, 2, NULL, NULL, NULL, NULL, '2021-05-23 14:19:26', NULL, 0, NULL, '2021-05-21 14:19:26', '2021-05-21 14:19:26'),
(220, 19, 'Story Book', '19/qPiAcCOQJhnMK93KRO7nYbvB7trO7B.png', 173, 'Big', 67.00, 1, 'SB1', 83, 11, 2, NULL, NULL, NULL, NULL, '2021-05-23 15:21:06', NULL, 0, NULL, '2021-05-21 15:21:06', '2021-05-21 15:21:06'),
(221, 19, 'Story Book', '19/qPiAcCOQJhnMK93KRO7nYbvB7trO7B.png', 173, 'Big', 67.00, 1, 'SB1', 83, 11, 2, NULL, NULL, NULL, NULL, '2021-05-23 15:39:44', NULL, 0, NULL, '2021-05-21 15:39:44', '2021-05-21 15:39:44'),
(222, 12, 'Red Roses', '12/dwYgyYxqmvp8tBAdiAfJN92j4TlqwP.png', 171, 'Small', 20.00, 2, 'RR3', 84, 11, 2, NULL, NULL, NULL, NULL, '2021-05-26 06:38:07', NULL, 0, NULL, '2021-05-24 06:38:07', '2021-05-24 06:38:07'),
(223, 12, 'Red Roses', '12/dwYgyYxqmvp8tBAdiAfJN92j4TlqwP.png', 171, 'Small', 20.00, 1, 'RR3', 84, 11, 2, NULL, NULL, NULL, NULL, '2021-05-26 07:54:02', NULL, 0, NULL, '2021-05-24 07:54:02', '2021-05-24 07:54:02'),
(224, 19, 'Story Book', '19/qPiAcCOQJhnMK93KRO7nYbvB7trO7B.png', 173, 'Big', 67.00, 2, 'SB1', 85, 11, 2, NULL, NULL, NULL, NULL, '2021-10-20 16:01:09', NULL, 0, NULL, '2021-10-18 16:01:09', '2021-10-18 16:01:09'),
(225, 18, 'Kids Toys', '18/HW2g3pAVd9QzYRZCUoKgTM2WKc6kMS.png', 147, 'small', 25.00, 1, 'KT4', 86, 11, 2, NULL, NULL, NULL, NULL, '2022-01-01 07:23:19', NULL, 0, NULL, '2021-12-30 07:23:19', '2021-12-30 07:23:19'),
(226, 28, 'Assorted Milk and Almonds Dark Chocolates in Box', '28/uuXyM5Io6lIuI3c7yXWUinHARt1Svn.png', 172, 'Standard', 145.00, 1, 'AMASD445', 87, 12, 3, NULL, NULL, NULL, NULL, '2022-01-01 12:14:14', NULL, 1, NULL, '2021-12-30 12:14:14', '2021-12-30 12:15:58'),
(227, 24, 'Pink Rose Flower', '24/04zn8oBIiHAQlLf5cWIB6EXaHVX3b1.png', 158, 'Medium', 50.00, 2, 'PRF', 88, 11, 2, NULL, NULL, NULL, NULL, '2022-01-01 15:13:59', NULL, 1, NULL, '2021-12-30 15:13:59', '2021-12-30 15:16:16'),
(228, 21, 'Yellow Rose Flower', '21/t8MAjApvQV8WJiaNobsijG0FmGALD7.png', 151, 'Small', 80.00, 2, 'YR4', 89, 11, 2, NULL, NULL, NULL, NULL, '2022-01-05 07:51:01', NULL, 1, NULL, '2022-01-03 07:51:01', '2022-01-03 07:54:31'),
(231, 17, 'New Born Baby', '17/R1KPLahYfB5oHP9rohRv4RvQ6vApTY.png', 137, 'Small', 50.00, 1, 'BB2', 91, 11, 2, NULL, NULL, NULL, NULL, '2022-01-05 09:02:50', NULL, 1, NULL, '2022-01-03 09:02:50', '2022-01-03 10:40:08'),
(230, 13, 'Wall Art Painting', '13/TtuYELupS3QXUU8JUitUuf7FXupWdh.png', 128, 'Small', 20.00, 1, 'WAP', 90, 11, 2, NULL, NULL, NULL, NULL, '2022-01-05 08:11:09', NULL, 1, NULL, '2022-01-03 08:11:09', '2022-01-03 08:13:23'),
(232, 23, 'Orange Rose Flower', '23/SBxwPbyZVcNLGnKGzRS25vTteG2e7h.png', 156, 'Medium', 23.00, 1, 'OR3', 91, 11, 2, NULL, NULL, NULL, NULL, '2022-01-05 09:36:04', NULL, 1, NULL, '2022-01-03 09:36:04', '2022-01-03 10:40:08'),
(233, 31, 'test', '31/99C5lU7rAaI9K4nKWwCOHARLUMUYOu.png', 182, 'test1', 50.00, 1, 'test', 92, 20, 5, NULL, NULL, NULL, NULL, '2022-01-05 12:19:59', NULL, 1, NULL, '2022-01-03 12:19:59', '2022-01-03 12:21:04'),
(234, 28, 'Assorted Milk and Almonds Dark Chocolates in Box', '28/uuXyM5Io6lIuI3c7yXWUinHARt1Svn.png', 172, 'Standard', 145.00, 2, 'AMASD445', 93, 12, 3, NULL, NULL, NULL, NULL, '2022-01-05 12:28:40', NULL, 0, NULL, '2022-01-03 12:28:40', '2022-01-03 12:28:40'),
(236, 17, 'New Born Baby', '17/R1KPLahYfB5oHP9rohRv4RvQ6vApTY.png', 137, 'Small', 50.00, 1, 'BB2', 94, 11, 2, NULL, NULL, NULL, NULL, '2022-01-06 07:30:08', NULL, 1, NULL, '2022-01-04 07:30:08', '2022-01-04 07:59:03'),
(237, 31, 'test', '31/QSYM4n0Sd4jlXJVjMuFQ7CABXuKlx3.png', 183, 'test1', 50.00, 1, 'test', 94, 20, 5, NULL, NULL, NULL, NULL, '2022-01-06 07:58:19', NULL, 1, NULL, '2022-01-04 07:58:19', '2022-01-04 07:59:03'),
(250, 12, 'Red Roses', '12/F6FvBthMmuyUS55CHaa3cNgYeIkuRJ.png', 187, 'Small', 20.00, 4, 'RR3', 100, 11, 2, NULL, NULL, NULL, NULL, '2022-01-06 12:38:50', NULL, 0, 'red-roses', '2022-01-04 12:38:50', '2022-01-04 12:38:50'),
(249, 16, 'Titan', '16/s1gcK2MHZruKuI2WNwNBPSwjlWFRYz.png', 134, 'Small', 25.00, 6, 'TT1', 99, 11, 2, NULL, NULL, NULL, NULL, '2022-01-06 12:35:29', NULL, 0, 'titan', '2022-01-04 12:35:29', '2022-01-04 12:35:29'),
(248, 28, 'Assorted Milk and Almonds Dark Chocolates in Box', '28/uuXyM5Io6lIuI3c7yXWUinHARt1Svn.png', 172, 'Standard', 145.00, 1, 'AMASD445', 98, 12, 3, NULL, NULL, NULL, NULL, '2022-01-06 12:33:33', NULL, 0, 'assorted-milk-and-almonds-dark-chocolates-in-box', '2022-01-04 12:33:33', '2022-01-04 12:33:33'),
(247, 12, 'Red Roses', '12/F6FvBthMmuyUS55CHaa3cNgYeIkuRJ.png', 187, 'Small', 20.00, 3, 'RR3', 97, 11, 2, NULL, NULL, NULL, NULL, '2022-01-06 12:20:45', NULL, 0, 'red-roses', '2022-01-04 12:20:45', '2022-01-04 12:20:45'),
(243, 31, 'test', '31/ePLEteomkLgIAQ6n1pO0yIiy2ublKC.png', 184, 'test2', 50.00, 3, 'test', 96, 20, 5, NULL, NULL, NULL, NULL, '2022-01-06 10:43:28', NULL, 0, 'test', '2022-01-04 10:43:28', '2022-01-04 10:45:32'),
(246, 24, 'Pink Rose Flower', '24/YlGKmOi4JYVWyIBVqazIdvNOp1lbEU.png', 159, 'Small', 25.00, 3, 'PRF', 95, 11, 2, NULL, NULL, NULL, NULL, '2022-01-06 12:17:39', NULL, 0, 'pink-rose-flower', '2022-01-04 12:17:39', '2022-01-04 12:17:39'),
(251, 24, 'Pink Rose Flower', '24/YlGKmOi4JYVWyIBVqazIdvNOp1lbEU.png', 159, 'Small', 25.00, 3, 'PRF', 101, 11, 2, NULL, NULL, NULL, NULL, '2022-01-06 12:40:41', NULL, 0, 'pink-rose-flower', '2022-01-04 12:40:41', '2022-01-04 12:40:41'),
(252, 16, 'Titan', '16/s1gcK2MHZruKuI2WNwNBPSwjlWFRYz.png', 134, 'Small', 25.00, 3, 'TT1', 102, 11, 2, NULL, NULL, NULL, NULL, '2022-01-06 12:43:30', NULL, 0, 'titan', '2022-01-04 12:43:30', '2022-01-04 12:43:30'),
(253, 24, 'Pink Rose Flower', '24/YlGKmOi4JYVWyIBVqazIdvNOp1lbEU.png', 159, 'Small', 25.00, 2, 'PRF', 103, 11, 2, NULL, NULL, NULL, NULL, '2022-01-06 12:48:31', NULL, 0, 'pink-rose-flower', '2022-01-04 12:48:31', '2022-01-04 12:48:31'),
(254, 16, 'Titan', '16/s1gcK2MHZruKuI2WNwNBPSwjlWFRYz.png', 134, 'Small', 25.00, 1, 'TT1', 103, 11, 2, NULL, NULL, NULL, NULL, '2022-01-06 12:57:05', NULL, 0, 'titan', '2022-01-04 12:57:05', '2022-01-04 12:57:05'),
(255, 16, 'Titan', '16/s1gcK2MHZruKuI2WNwNBPSwjlWFRYz.png', 134, 'Small', 25.00, 2, 'TT1', 104, 11, 2, NULL, NULL, NULL, NULL, '2022-01-06 12:59:10', NULL, 0, 'titan', '2022-01-04 12:59:10', '2022-01-04 12:59:10'),
(256, 24, 'Pink Rose Flower', '24/YlGKmOi4JYVWyIBVqazIdvNOp1lbEU.png', 159, 'Small', 25.00, 3, 'PRF', 105, 11, 2, NULL, NULL, NULL, NULL, '2022-01-06 13:01:16', NULL, 0, 'pink-rose-flower', '2022-01-04 13:01:16', '2022-01-04 13:01:16'),
(257, 24, 'Pink Rose Flower', '24/YlGKmOi4JYVWyIBVqazIdvNOp1lbEU.png', 159, 'Small', 25.00, 2, 'PRF', 106, 11, 2, NULL, NULL, NULL, NULL, '2022-01-06 13:03:17', NULL, 0, 'pink-rose-flower', '2022-01-04 13:03:17', '2022-01-04 13:03:17'),
(258, 21, 'Yellow Rose Flower', '21/t8MAjApvQV8WJiaNobsijG0FmGALD7.png', 151, 'Small', 80.00, 2, 'YR4', 107, 11, 2, NULL, NULL, NULL, NULL, '2022-01-06 13:12:11', NULL, 0, 'yellow-rose-flower', '2022-01-04 13:12:11', '2022-01-04 13:12:11'),
(259, 23, 'Orange Rose Flower', '23/SBxwPbyZVcNLGnKGzRS25vTteG2e7h.png', 156, 'Medium', 23.00, 1, 'OR3', 107, 11, 2, NULL, NULL, NULL, NULL, '2022-01-06 13:12:23', NULL, 0, 'orange-rose-flower', '2022-01-04 13:12:23', '2022-01-04 13:12:23'),
(260, 19, 'Story Book', '19/qPiAcCOQJhnMK93KRO7nYbvB7trO7B.png', 173, 'Big', 67.00, 1, 'SB1', 108, 11, 2, NULL, NULL, NULL, NULL, '2022-01-06 13:13:53', NULL, 0, 'story-book', '2022-01-04 13:13:53', '2022-01-04 13:13:53'),
(261, 21, 'Yellow Rose Flower', '21/t8MAjApvQV8WJiaNobsijG0FmGALD7.png', 151, 'Small', 80.00, 2, 'YR4', 109, 11, 2, NULL, NULL, NULL, NULL, '2022-01-06 13:46:42', NULL, 0, 'yellow-rose-flower', '2022-01-04 13:46:42', '2022-01-04 13:56:07'),
(262, 16, 'Titan', '16/s1gcK2MHZruKuI2WNwNBPSwjlWFRYz.png', 134, 'Small', 25.00, 1, 'TT1', 109, 11, 2, NULL, NULL, NULL, NULL, '2022-01-06 13:47:14', NULL, 0, 'titan', '2022-01-04 13:47:14', '2022-01-04 13:47:14'),
(263, 24, 'Pink Rose Flower', '24/YlGKmOi4JYVWyIBVqazIdvNOp1lbEU.png', 159, 'Small', 25.00, 2, 'PRF', 109, 11, 2, NULL, NULL, NULL, NULL, '2022-01-06 13:47:25', NULL, 0, 'pink-rose-flower', '2022-01-04 13:47:25', '2022-01-04 13:47:25'),
(264, 23, 'Orange Rose Flower', '23/SBxwPbyZVcNLGnKGzRS25vTteG2e7h.png', 156, 'Medium', 23.00, 1, 'OR3', 109, 11, 2, NULL, NULL, NULL, NULL, '2022-01-06 13:47:42', NULL, 0, 'orange-rose-flower', '2022-01-04 13:47:42', '2022-01-04 13:47:42'),
(268, 23, 'Orange Rose Flower', '23/SBxwPbyZVcNLGnKGzRS25vTteG2e7h.png', 156, 'Medium', 23.00, 1, 'OR3', 110, 11, 2, NULL, NULL, NULL, NULL, '2022-01-06 14:04:36', NULL, 0, 'orange-rose-flower', '2022-01-04 14:04:36', '2022-01-04 14:04:36'),
(266, 21, 'Yellow Rose Flower', '21/t8MAjApvQV8WJiaNobsijG0FmGALD7.png', 151, 'Small', 80.00, 1, 'YR4', 109, 11, 2, NULL, NULL, NULL, NULL, '2022-01-06 13:54:39', NULL, 0, 'yellow-rose-flower', '2022-01-04 13:54:39', '2022-01-04 13:54:39'),
(286, 28, 'Assorted Milk and Almonds Dark Chocolates in Box', '28/uuXyM5Io6lIuI3c7yXWUinHARt1Svn.png', 172, 'Standard', 145.00, 3, 'AMASD445', 115, 12, 3, NULL, NULL, NULL, NULL, '2022-05-20 07:56:30', NULL, 0, 'assorted-milk-and-almonds-dark-chocolates-in-box', '2022-05-18 07:56:30', '2022-05-18 07:56:47'),
(285, 13, 'Wall Art Painting', '13/TtuYELupS3QXUU8JUitUuf7FXupWdh.png', 128, 'Small', 20.00, 1, 'WAP', 114, 11, 2, NULL, NULL, NULL, NULL, '2022-05-14 13:42:14', NULL, 0, 'wall-art-painting', '2022-05-12 13:42:14', '2022-05-12 13:42:14'),
(284, 31, 'test', '31/qtcm9vqKC93BjUHSjkn8JdgSDld9Ek.png', 193, 'test2', 50.00, 1, 'test', 113, 20, 5, NULL, NULL, NULL, NULL, '2022-05-14 09:27:15', NULL, 0, 'test', '2022-05-12 09:27:15', '2022-05-12 09:27:15'),
(283, 19, 'Story Book', '19/qPiAcCOQJhnMK93KRO7nYbvB7trO7B.png', 173, 'Big', 67.00, 1, 'SB1', 113, 11, 2, NULL, NULL, NULL, NULL, '2022-05-14 09:26:52', NULL, 0, 'story-book', '2022-05-12 09:26:52', '2022-05-12 09:26:52'),
(279, 24, 'Pink Rose Flower', '24/YlGKmOi4JYVWyIBVqazIdvNOp1lbEU.png', 159, 'Small', 25.00, 4, 'PRF', 111, 11, 2, NULL, NULL, NULL, NULL, '2022-01-07 13:10:55', NULL, 0, 'pink-rose-flower', '2022-01-05 13:10:55', '2022-01-05 13:10:55'),
(280, 21, 'Yellow Rose Flower', '21/t8MAjApvQV8WJiaNobsijG0FmGALD7.png', 151, 'Small', 80.00, 2, 'YR4', 112, 11, 2, NULL, NULL, NULL, NULL, '2022-01-07 13:29:52', NULL, 0, 'yellow-rose-flower', '2022-01-05 13:29:52', '2022-01-05 13:29:52'),
(281, 16, 'Titan', '16/s1gcK2MHZruKuI2WNwNBPSwjlWFRYz.png', 134, 'Small', 25.00, 1, 'TT1', 113, 11, 2, NULL, NULL, NULL, NULL, '2022-05-14 07:57:18', NULL, 0, 'titan', '2022-05-12 07:57:18', '2022-05-12 07:57:18'),
(282, 21, 'Yellow Rose Flower', '21/t8MAjApvQV8WJiaNobsijG0FmGALD7.png', 151, 'Small', 80.00, 1, 'YR4', 113, 11, 2, NULL, NULL, NULL, NULL, '2022-05-14 09:26:40', NULL, 0, 'yellow-rose-flower', '2022-05-12 09:26:40', '2022-05-12 09:26:40'),
(287, 28, 'Assorted Milk and Almonds Dark Chocolates in Box', '28/uuXyM5Io6lIuI3c7yXWUinHARt1Svn.png', 172, 'Standard', 145.00, 1, 'AMASD445', 116, 12, 3, NULL, NULL, NULL, NULL, '2022-05-21 13:47:20', NULL, 0, 'assorted-milk-and-almonds-dark-chocolates-in-box', '2022-05-19 13:47:20', '2022-05-19 13:47:20'),
(288, 13, 'Wall Art Painting', '13/TtuYELupS3QXUU8JUitUuf7FXupWdh.png', 128, 'Small', 20.00, 1, 'WAP', 117, 11, 2, NULL, NULL, NULL, NULL, '2022-07-27 06:54:37', NULL, 0, 'wall-art-painting', '2022-07-25 06:54:37', '2022-07-25 06:54:37'),
(289, 18, 'Kids Toys', '18/KxAw1MK4wUWNN5VQkxAE2K39jtNH4k.png', 146, 'Medium', 75.00, 1, 'KT4', 118, 11, 2, NULL, NULL, NULL, NULL, '2023-03-30 13:35:15', NULL, 1, 'kids-toys', '2023-03-28 13:35:15', '2023-03-28 13:36:28'),
(290, 22, 'White Rose Flower', '22/6YPaCPee3dKiFTNSRlG9h97PeGeFHu.png', 176, 'Small', 80.00, 1, 'WRE4', 119, 11, 2, NULL, NULL, NULL, NULL, '2023-07-10 08:32:36', NULL, 0, 'white-rose-flower', '2023-07-08 08:32:36', '2023-07-08 08:32:36'),
(291, 19, 'Story Book', '19/qPiAcCOQJhnMK93KRO7nYbvB7trO7B.png', 173, 'Big', 67.00, 1, 'SB1', 119, 11, 2, NULL, NULL, NULL, NULL, '2023-07-10 08:33:01', NULL, 0, 'story-book', '2023-07-08 08:33:01', '2023-07-08 08:33:01'),
(292, 18, 'Kids Toys', '18/z0eyIjLgS5vzASqDFQ6U1ASdIHvy7w.png', 145, 'Big', 80.00, 3, 'KT4', 120, 11, 2, NULL, NULL, NULL, NULL, '2023-11-10 10:47:53', NULL, 0, 'kids-toys', '2023-11-08 10:47:53', '2023-11-08 10:47:53'),
(293, 17, 'New Born Baby', '17/9hSD0wlw2ahuvb5QHUz6HGIIXgFWq4.png', 135, 'Big', 100.00, 3, 'BB2', 121, 11, 2, NULL, NULL, NULL, NULL, '2023-11-10 10:47:53', NULL, 0, 'new-born-baby', '2023-11-08 10:47:53', '2023-11-08 10:47:53'),
(294, 16, 'Titan', '16/howlDKms063Kq8oyaSNlySbpHUZgBU.png', 132, 'Large', 100.00, 3, 'TT1', 121, 11, 2, NULL, NULL, NULL, NULL, '2023-11-10 10:47:53', NULL, 0, 'titan', '2023-11-08 10:47:53', '2023-11-08 10:47:53'),
(295, 21, 'Yellow Rose Flower', '21/aFMhu9wQlsjRkb6vTMajKxt6tomQb5.png', 149, 'Big', 134.00, 3, 'YR4', 121, 11, 2, NULL, NULL, NULL, NULL, '2023-11-10 10:47:53', NULL, 0, 'yellow-rose-flower', '2023-11-08 10:47:53', '2023-11-08 10:47:53'),
(296, 19, 'Story Book', '19/qPiAcCOQJhnMK93KRO7nYbvB7trO7B.png', 173, 'Big', 67.00, 3, 'SB1', 121, 11, 2, NULL, NULL, NULL, NULL, '2023-11-10 10:47:53', NULL, 0, 'story-book', '2023-11-08 10:47:53', '2023-11-08 10:47:53'),
(297, 13, 'Wall Art Painting', '13/lhEP6NoSIlD53AzKhBran9rNixpNiS.png', 126, 'Large', 100.00, 3, 'WAP', 121, 11, 2, NULL, NULL, NULL, NULL, '2023-11-10 10:47:53', NULL, 0, 'wall-art-painting', '2023-11-08 10:47:53', '2023-11-08 10:47:53'),
(298, 22, 'White Rose Flower', '22/1189QaI5CD85cFS5aZDzf7LozsnfYa.png', 174, 'Big', 200.00, 3, 'WRE4', 121, 11, 2, NULL, NULL, NULL, NULL, '2023-11-10 10:47:55', NULL, 0, 'white-rose-flower', '2023-11-08 10:47:55', '2023-11-08 10:47:55'),
(299, 23, 'Orange Rose Flower', '23/12dfksHjLW5qGwB81Qo4UUxXknqLpu.png', 155, 'Big', 150.00, 3, 'OR3', 121, 11, 2, NULL, NULL, NULL, NULL, '2023-11-10 10:47:55', NULL, 0, 'orange-rose-flower', '2023-11-08 10:47:55', '2023-11-08 10:47:55'),
(300, 12, 'Red Roses', '12/4kBHj63zWpoaXECxzY1jqCC1BAHaB4.png', 185, 'Large', 50.00, 3, 'RR3', 121, 11, 2, NULL, NULL, NULL, NULL, '2023-11-10 10:47:55', NULL, 0, 'red-roses', '2023-11-08 10:47:55', '2023-11-08 10:47:55'),
(301, 28, 'Assorted Milk and Almonds Dark Chocolates in Box', '28/uuXyM5Io6lIuI3c7yXWUinHARt1Svn.png', 172, 'Standard', 145.00, 3, 'AMASD445', 121, 12, 3, NULL, NULL, NULL, NULL, '2023-11-10 10:47:55', NULL, 0, 'assorted-milk-and-almonds-dark-chocolates-in-box', '2023-11-08 10:47:55', '2023-11-08 10:47:55'),
(302, 24, 'Pink Rose Flower', '24/Il8oZSMBnffSGzDoeLSx5uI2IELtWf.png', 157, 'Big', 150.00, 3, 'PRF', 121, 11, 2, NULL, NULL, NULL, NULL, '2023-11-10 10:47:56', NULL, 0, 'pink-rose-flower', '2023-11-08 10:47:56', '2023-11-08 10:47:56'),
(303, 27, 'fdsgdfahg', '27/QxZpW19UnwT1g9auhf5JcUqQOsGvjA.png', 164, 'erewr', 56.00, 3, 'df', 121, 11, 2, NULL, NULL, NULL, NULL, '2023-11-10 10:47:56', NULL, 0, 'fdsgdfahg', '2023-11-08 10:47:56', '2023-11-08 10:47:56'),
(304, 31, 'test', '31/bTuQKRyek3Uw85c29tfuMLD9XAqMBH.png', 192, 'test1', 50.00, 3, 'test', 121, 20, 5, NULL, NULL, NULL, NULL, '2023-11-10 10:47:56', NULL, 0, 'test', '2023-11-08 10:47:56', '2023-11-08 10:47:56');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `body_html` text DEFAULT NULL,
  `recipient_id` varchar(60) DEFAULT NULL,
  `sender_id` varchar(60) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `recipient_status` tinyint(1) NOT NULL DEFAULT 1,
  `sender_status` tinyint(1) NOT NULL DEFAULT 1,
  `attachment` varchar(100) DEFAULT NULL,
  `recipient_folder` enum('inbox','sent','trash') DEFAULT 'inbox',
  `sender_folder` enum('inbox','sent','trash') DEFAULT 'sent',
  `read_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `subject`, `body`, `body_html`, `recipient_id`, `sender_id`, `parent_id`, `recipient_status`, `sender_status`, `attachment`, `recipient_folder`, `sender_folder`, `read_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'I am sending this message', 'Thios message is sent', '<p>Thios message is sent</p>', '30', '79', NULL, 1, 1, NULL, 'inbox', 'sent', NULL, '2021-04-01 15:20:48', '2021-04-01 15:20:48', NULL),
(2, 'Hello how is this message', 'Check this message content', '<p>Check this message content</p>', '79', '30', NULL, 1, 1, NULL, 'inbox', 'sent', '2021-04-01 16:33:18', '2021-04-01 15:21:50', '2021-04-01 16:33:18', NULL),
(3, 'Re: Hello how is this message', 'yyyyy', '<p>yyyyy</p>', '30', '79', 2, 1, 1, NULL, 'inbox', 'sent', NULL, '2021-04-01 16:32:43', '2021-04-01 16:32:43', NULL),
(4, 'admin test', 'fjhgfj', '<p>fjhgfj</p>', '11', '1', NULL, 1, 0, NULL, 'inbox', 'trash', NULL, '2021-07-27 07:22:04', '2021-09-14 08:41:03', NULL),
(5, 'test', 'test', '<p>test</p>', '20', '1', NULL, 0, 1, NULL, 'trash', 'sent', '2022-01-03 13:35:04', '2022-01-03 10:38:10', '2022-01-03 13:35:18', NULL),
(6, 'Re: test', 'test', '<p>test</p>', '1', '20', 5, 1, 1, NULL, 'inbox', 'sent', '2022-01-03 10:38:48', '2022-01-03 10:38:38', '2022-01-03 10:38:48', NULL),
(7, 'About your order', 'About your order', '<p>About your order</p>', '20', '1', NULL, 1, 1, NULL, 'inbox', 'sent', '2022-01-03 13:35:46', '2022-01-03 13:33:56', '2022-01-03 13:35:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `navigations`
--

CREATE TABLE `navigations` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `display_order` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `level` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `navigations`
--

INSERT INTO `navigations` (`id`, `name`, `parent_id`, `link`, `display_order`, `status`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Header Menu', NULL, NULL, 1, 1, 0, '2021-04-08 08:49:22', '2021-04-08 08:49:22'),
(2, 'Home', 1, '/', 1, 1, 1, '2021-04-08 08:49:44', '2021-04-08 09:07:04'),
(3, 'Shop', 1, '#', 2, 1, 1, '2021-04-08 08:52:11', '2021-05-20 06:37:48'),
(4, 'Gifts', 1, '#', 3, 1, 1, '2021-04-08 08:52:37', '2021-05-20 06:38:06'),
(5, 'Categories', 1, '#', 4, 1, 1, '2021-04-08 08:53:05', '2021-05-20 06:38:23'),
(6, 'Budget', 1, '#', 1, 1, 1, '2021-04-08 08:53:31', '2021-05-20 06:38:41'),
(7, 'For Her', 3, '/shopping/for-her', 1, 1, 2, '2021-04-08 08:54:12', '2021-05-20 06:18:47'),
(8, 'For Him', 3, '/shopping/for-him', 2, 1, 2, '2021-04-08 08:54:40', '2021-05-20 06:19:09'),
(9, 'For Kids', 3, '/shopping/for-kids', 3, 1, 2, '2021-04-08 08:55:02', '2021-05-20 06:19:27'),
(10, 'For Babies', 3, '/shopping/for-babies', 4, 1, 2, '2021-04-08 08:55:31', '2021-05-20 06:19:55'),
(11, 'All', 4, '#', 1, 1, 2, '2021-04-08 08:56:26', '2021-04-08 08:56:26'),
(12, 'Best Sellers', 4, '/best-sellers', 2, 1, 2, '2021-04-08 08:56:48', '2021-05-20 08:44:09'),
(13, 'Giftboxes', 4, '/type/giftboxes', 3, 1, 2, '2021-04-08 08:57:09', '2021-05-20 10:11:39'),
(14, 'Personalized Gifts', 4, '/type/personalized-gifts', 4, 1, 2, '2021-04-08 08:57:39', '2021-05-20 10:12:09'),
(15, 'Gift Cards', 4, '/type/gift-cards', 5, 1, 2, '2021-04-08 08:59:50', '2021-05-20 10:12:46'),
(16, 'Barware', 5, '/barware', 1, 1, 2, '2021-04-08 09:00:32', '2021-05-20 06:22:40'),
(17, 'Gourmet', 5, '/gourmet', 2, 1, 2, '2021-04-08 09:00:50', '2021-05-20 06:23:00'),
(18, 'Wine & Spirits', 5, '/wine-spirits', 3, 1, 2, '2021-04-08 09:01:25', '2021-05-20 06:23:17'),
(19, 'Sweets', 5, '/sweets', 4, 1, 2, '2021-04-08 09:01:44', '2021-05-20 06:27:05'),
(20, 'Plants & Flowers', 5, '/plants-flowers', 5, 1, 2, '2021-04-08 09:02:10', '2021-05-20 06:27:23'),
(21, 'Health & Wellness', 5, '/health-wellness', 6, 1, 2, '2021-04-08 09:02:42', '2021-05-19 12:17:25'),
(22, 'Home', 5, '/home', 7, 1, 2, '2021-04-08 09:02:59', '2021-05-20 06:27:50'),
(23, 'Sustainable', 5, '/sustainable', 8, 1, 2, '2021-04-08 09:03:19', '2021-05-20 06:28:11'),
(24, 'Books', 5, '/books', 9, 1, 2, '2021-04-08 09:03:33', '2021-05-20 06:28:32'),
(25, 'Apothecary', 5, '/apothecary', 10, 1, 2, '2021-04-08 09:04:04', '2021-05-20 06:28:56'),
(26, 'Work From Home', 5, '/work-from-home', 11, 1, 2, '2021-04-08 09:04:26', '2021-05-20 06:29:13'),
(27, 'Tech & Gadgets', 5, '/tech-gadgets', 12, 1, 2, '2021-04-08 09:04:52', '2021-05-20 06:31:20'),
(28, '$0-50', 6, '/budget/1/50', 1, 1, 2, '2021-04-08 09:05:57', '2021-05-20 10:05:37'),
(29, '$50-100', 6, '/budget/50/100', 2, 1, 2, '2021-04-08 09:06:18', '2021-05-20 06:32:02'),
(30, '$100+', 6, '/budget/100/1000', 3, 1, 2, '2021-04-08 09:06:38', '2021-05-20 06:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `occasions`
--

CREATE TABLE `occasions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `occasions`
--

INSERT INTO `occasions` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Canada', 'canada', 1, '2021-03-29 09:28:37', '2021-03-29 09:28:37'),
(2, 'Easter', 'easter', 1, '2021-03-29 09:30:46', '2021-03-29 09:30:46'),
(3, 'Thanks Giving', 'thanks-giving', 1, '2021-03-29 09:31:16', '2021-03-29 09:31:16'),
(4, 'Victoria Day', 'victoria-day', 1, '2021-03-29 09:31:40', '2021-03-29 09:31:40'),
(5, 'Anniversary', 'anniversary', 1, '2021-03-29 09:32:02', '2021-03-29 09:32:02'),
(6, 'Birthday', 'birthday', 1, '2021-03-29 09:32:15', '2021-03-29 09:32:15'),
(7, 'House Warming', 'house-warming', 1, '2021-03-29 09:32:26', '2021-03-29 09:32:26'),
(8, 'New Baby', 'new-baby', 1, '2021-03-29 09:32:43', '2021-03-29 09:32:43'),
(9, 'Wedding', 'wedding', 1, '2021-03-29 09:33:00', '2021-03-29 09:33:00'),
(10, 'Father\'s Day', 'fathers-day', 1, '2021-03-29 09:33:24', '2021-03-29 09:33:24'),
(11, 'Mother\'s Day', 'mothers-day', 1, '2021-03-29 09:33:36', '2021-03-29 09:33:36'),
(12, 'Congratulations', 'congratulations', 1, '2021-03-29 09:34:32', '2021-03-29 09:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `occasion_product`
--

CREATE TABLE `occasion_product` (
  `id` int(11) NOT NULL,
  `occasion_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `occasion_product`
--

INSERT INTO `occasion_product` (`id`, `occasion_id`, `product_id`) VALUES
(1, 6, 1),
(2, 7, 2),
(3, 4, 3),
(5, 6, 4),
(6, 6, 5),
(7, 12, 6),
(8, 12, 9),
(9, 1, 11),
(10, 12, 12),
(11, 7, 13),
(12, 7, 15),
(13, 7, 16),
(14, 8, 17),
(15, 6, 18),
(16, 4, 19),
(17, 3, 20),
(18, 5, 21),
(19, 6, 21),
(20, 12, 21),
(21, 5, 22),
(22, 6, 22),
(23, 2, 22),
(24, 9, 22),
(25, 6, 23),
(26, 11, 23),
(27, 9, 23),
(28, 5, 24),
(29, 6, 24),
(30, 1, 24),
(31, 12, 24),
(32, 1, 25),
(33, 6, 26),
(34, 6, 27),
(35, 12, 28),
(39, 6, 30),
(38, 5, 29),
(40, 8, 30),
(41, 6, 31);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `ipaddress` varchar(50) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` int(11) DEFAULT NULL,
  `grand_total` decimal(8,2) NOT NULL,
  `transaction_id` varchar(15) DEFAULT NULL,
  `payment_method` varchar(25) DEFAULT NULL,
  `payment_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `invoice_id` varchar(20) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cart_id`, `ipaddress`, `status`, `user_id`, `grand_total`, `transaction_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`, `invoice_id`) VALUES
(27, 59, NULL, 1, 5, 80.00, NULL, NULL, 1, '2021-05-17 13:50:35', '2021-05-17 13:50:35', '1'),
(26, 58, NULL, 1, 5, 134.00, NULL, NULL, 1, '2021-05-17 08:11:09', '2021-05-17 08:11:09', '1'),
(24, 45, NULL, 0, 7, 80.00, NULL, NULL, 1, '2021-04-29 13:12:00', '2021-12-31 07:18:01', '1'),
(25, 48, NULL, 1, 7, 40.00, NULL, NULL, 1, '2021-05-03 07:47:25', '2021-05-04 08:18:05', '1'),
(28, 60, NULL, -1, NULL, 50.00, NULL, NULL, 1, '2021-05-18 07:40:37', '2022-01-04 08:41:07', '1'),
(29, 61, NULL, 1, 5, 23.00, NULL, NULL, 1, '2021-05-18 08:09:11', '2021-05-18 08:09:11', '1'),
(30, 65, NULL, 1, NULL, 100.00, NULL, NULL, 1, '2021-05-19 12:42:00', '2021-05-19 12:42:00', '1'),
(31, 64, NULL, 1, NULL, 885.00, NULL, NULL, 1, '2021-05-19 12:48:20', '2021-05-19 12:48:20', '1'),
(32, 66, NULL, 1, 13, 40.00, NULL, NULL, 1, '2021-05-19 12:50:03', '2021-05-19 12:50:03', '1'),
(33, 67, NULL, 1, 14, 40.00, NULL, NULL, 1, '2021-05-20 05:00:38', '2021-05-20 05:00:38', '1'),
(34, 68, NULL, 1, 16, 435.00, NULL, NULL, 1, '2021-05-20 07:44:35', '2021-05-20 07:44:35', '1'),
(35, 69, NULL, 1, NULL, 80.00, NULL, NULL, 1, '2021-05-20 12:52:57', '2021-05-20 12:52:57', '1'),
(36, 72, NULL, 1, 14, 50.00, NULL, NULL, 1, '2021-05-20 13:24:00', '2021-05-20 13:24:00', '1'),
(37, 74, NULL, 1, NULL, 290.00, NULL, NULL, 1, '2021-05-20 14:01:32', '2021-05-20 14:01:32', '1'),
(38, 76, NULL, 1, 14, 40.00, NULL, NULL, 1, '2021-05-21 10:35:54', '2021-05-21 10:35:54', '1'),
(39, 77, NULL, 0, 14, 130.00, NULL, NULL, 1, '2021-05-21 11:15:17', '2021-12-30 12:18:31', '1'),
(40, 78, NULL, 1, 14, 100.00, NULL, NULL, 1, '2021-05-21 12:37:37', '2021-05-21 12:37:37', '1'),
(41, 87, NULL, 1, NULL, 145.00, NULL, NULL, 1, '2021-12-30 12:15:58', '2021-12-30 12:15:58', '1'),
(42, 88, NULL, 1, NULL, 100.00, NULL, NULL, 1, '2021-12-30 15:16:16', '2021-12-30 15:16:16', '1'),
(43, 89, NULL, 2, NULL, 160.00, NULL, NULL, 1, '2022-01-03 07:54:31', '2022-01-03 13:25:24', '1'),
(44, 90, NULL, 1, 18, 20.00, NULL, NULL, 1, '2022-01-03 08:13:23', '2022-01-03 08:13:23', '1'),
(45, 91, NULL, 1, NULL, 73.00, NULL, NULL, 1, '2022-01-03 10:40:08', '2022-01-03 10:40:08', '1'),
(46, 92, NULL, -1, 18, 50.00, NULL, NULL, 1, '2022-01-03 12:21:04', '2022-01-04 08:41:22', '1'),
(47, 94, NULL, 3, 18, 100.00, NULL, NULL, 1, '2022-01-04 07:59:03', '2022-01-04 08:38:26', '1'),
(48, 118, NULL, 1, NULL, 75.00, NULL, NULL, 1, '2023-03-28 13:36:28', '2023-03-28 13:36:28', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order_statuses`
--

CREATE TABLE `order_statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `action` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_statuses`
--

INSERT INTO `order_statuses` (`id`, `name`, `action`, `created_at`, `updated_at`) VALUES
(-1, 'deleted', 'Delete Order', '2021-12-31 18:46:05', '2021-12-31 18:46:05'),
(0, 'cancelled', 'Order Cancelled', '2021-12-31 18:42:06', '2021-12-31 18:42:06'),
(1, 'pending', 'Order Pending', '2021-12-31 18:42:06', '2021-12-31 18:42:06'),
(2, 'processing', 'Order Processing', '2021-12-31 18:44:26', '2021-12-31 18:44:26'),
(3, 'completed', 'order completed', '2021-12-31 18:44:26', '2021-12-31 18:44:26'),
(4, 'dispute', 'dispute order', '2021-12-31 18:46:05', '2021-12-31 18:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(250) NOT NULL,
  `picture` varchar(225) DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `seo_title` varchar(225) NOT NULL,
  `seo_description` varchar(225) NOT NULL,
  `seo_keyword` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `content`, `slug`, `picture`, `published`, `seo_title`, `seo_description`, `seo_keyword`, `created_at`, `updated_at`) VALUES
(1, 'Contact Us', 'page content', 'page', 'APb8lZYRRCHTDCY4NKkyBmY8poolZj.png', 1, 'Contact Us', 'Contact Us', 'Contact Us', '2021-02-27 17:50:56', '2021-04-29 10:44:52'),
(2, 'About Us', 'GIFTY is a small business starts with four lovely partners, where they believe that choosing the perfect gift can be challenge.  GIFTY provides the clients with an easy way to select a gift from different categories that suit any occasion, by using GIFTY website.', 'about-us', 'bdj1mcJBH6ldQfm4cKsl0Tqg423Dgg.png', 1, 'About Us', 'About Us', 'About Us', '2021-04-29 10:43:58', '2021-04-30 06:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `title`, `slug`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Shipping Policy', 'shipping-policy', 'free shipping on nearly all gifts over $50.Gifts that are larger in size may have an oversized shipping fee', 0, '2021-03-29 07:23:45', '2021-04-13 06:25:36'),
(2, 'Shop Policy', 'shop-policy', 'Provide Shop policy', 1, '2021-03-29 07:25:50', '2021-03-29 07:25:50');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `excerpt` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `tags` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `excerpt`, `content`, `picture`, `published`, `tags`, `created_at`, `updated_at`) VALUES
(1, 1, 'Days of Your Product', 'days-of-your-product', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'new testing', 'y0E0WIuPpAFAr7m6nqpi9qmLCPQvQ7.png', 1, 'article,gifts', '2021-02-05 09:18:24', '2022-01-05 12:35:43'),
(5, 1, 'Kid Friendly', 'kid-friendly', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'cvgXzejohBopYpT8TcU2j5cw39LbqX.png', 1, 'gifts', '2021-02-05 12:40:29', '2021-08-12 09:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `post_topic`
--

CREATE TABLE `post_topic` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `post_topic`
--

INSERT INTO `post_topic` (`id`, `post_id`, `topic_id`) VALUES
(1, 10, 1),
(2, 10, 4),
(3, 1, 4),
(4, 5, 1),
(7, 6, 1),
(8, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `sku` varchar(100) NOT NULL,
  `shipping_id` int(11) DEFAULT NULL,
  `store_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `description` text DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `picture` varchar(100) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `seo_title` varchar(225) DEFAULT NULL,
  `seo_description` text DEFAULT NULL,
  `seo_keyword` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `weight` decimal(10,0) NOT NULL DEFAULT 0,
  `width` decimal(10,0) DEFAULT NULL,
  `height` decimal(10,0) DEFAULT NULL,
  `breadth` decimal(10,0) DEFAULT NULL,
  `shopping_category_id` int(11) DEFAULT NULL,
  `attribute_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `sku`, `shipping_id`, `store_id`, `created_at`, `updated_at`, `description`, `published`, `picture`, `type_id`, `seo_title`, `seo_description`, `seo_keyword`, `tag`, `weight`, `width`, `height`, `breadth`, `shopping_category_id`, `attribute_id`) VALUES
(12, 'Red Roses', 'red-roses', 'RR3', 11, 2, '2021-04-22 09:31:44', '2022-01-03 14:17:37', 'Red roses also stand for passion, true love, romance, and desire. The red rose is a classic “I Love You” rose, making it a popular choice for Valentine\'s Day', 1, 'ocMCBjGV8wEaJkxU8lFknb2C1224DI.png', 6, 'Red Roses', 'Red Roses', 'Red Roses', 'Red Roses', 23, 12, 23, 12, NULL, NULL),
(13, 'Wall Art Painting', 'wall-art-painting', 'WAP', NULL, 2, '2021-04-22 09:51:16', '2021-05-14 11:46:28', 'a picture or design painted either directly on plastered walls and ceilings or on canvas, paper, or some other material that is attached to an architectural surface.', 1, 'IyixPMKxIZhaNwkOiOeFYm2qJPtM38.png', 4, 'Wall Decor Painting', 'Wall Decor Painting', 'Wall Decor Painting', 'Wall Decor Painting', 12, 23, 34, 45, NULL, NULL),
(16, 'Titan', 'titan', 'TT1', NULL, 2, '2021-04-23 07:35:13', '2021-05-14 12:00:48', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 'ImuRstHj5FkN7QuGIVTGCXesLRIfbK.png', 5, 'Clock', 'Clock', 'Clock', 'Clock', 12, 4, 12, 4, NULL, NULL),
(17, 'New Born Baby', 'new-born-baby', 'BB2', NULL, 2, '2021-04-23 07:39:25', '2021-05-14 12:02:18', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 'mgaUTlgl53v6GpPtWjDuW4IlgU1bWh.png', 1, 'New Born Baby', 'New Born Baby', 'New Born Baby', 'New Born Baby', 12, 23, 23, 6, NULL, NULL),
(18, 'Kids Toys', 'kids-toys', 'KT4', NULL, 2, '2021-04-23 07:46:54', '2021-05-14 13:37:48', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 'UHcTL0GOmWdJEJKamrsH7bMv2fHE9W.png', 3, 'Kid Toy', 'Kid Toy', 'Kid Toy', 'Kid Toy', 22, 22, 4, 4, NULL, NULL),
(19, 'Story Book', 'story-book', 'SB1', NULL, 2, '2021-04-23 09:01:45', '2021-05-20 13:47:45', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 'X1ZTZSH1DKK8E91e9FvOWyGzK2PiA6.png', 9, 'Book', 'Book', 'Book', 'Book', 23, 12, 23, 12, NULL, NULL),
(21, 'Yellow Rose Flower', 'yellow-rose-flower', 'YR4', NULL, 2, '2021-04-23 09:12:44', '2021-05-14 13:40:55', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 'eWV8khHhbAL8RksPr6fvsBVCdW6rlU.png', 6, 'Yellow Rose Flower', 'Yellow Rose Flower', 'Yellow Rose Flower', 'Yellow Rose Flower', 12, 24, 17, 2, NULL, NULL),
(22, 'White Rose Flower', 'white-rose-flower', 'WRE4', NULL, 2, '2021-04-23 09:19:03', '2021-05-20 13:50:02', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 'ldeFPnoMX9jpwpiyWtwYtMptjmi3Wh.png', 10, 'White Rose Flower', 'White Rose Flower', 'White Rose Flower', 'White Rose Flower', 12, 14, 8, 19, NULL, NULL),
(23, 'Orange Rose Flower', 'orange-rose-flower', 'OR3', NULL, 2, '2021-04-23 09:29:22', '2021-05-14 13:43:42', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, '0d0WkmP4DUQJsLLoi2MAjrzlj2xoBC.png', 6, 'Orange Flower', 'Orange Flower', 'Orange Flower', 'Orange Flower', 12, 23, 2, 12, NULL, NULL),
(24, 'Pink Rose Flower', 'pink-rose-flower', 'PRF', NULL, 2, '2021-04-23 09:38:25', '2021-05-14 13:44:42', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 'kYSnzVNPlYVrQWJSyQcL8mzdfw90L0.png', 3, 'Pink Roses', 'Pink Roses', 'Pink Roses', 'Pink Roses', 23, 12, 14, 15, NULL, NULL),
(27, 'fdsgdfahg', 'fdsgdfahg', 'df', NULL, 2, '2021-05-14 13:57:01', '2021-05-14 13:57:01', 'ZXc', 1, 'WLrCWDHYzf9WLUxJ0omgnRCNxtF7e2.png', 2, 'xczxcxzczx', 'xzcz', 'fgfg', 'fg', 34, 22, 2, 23, NULL, NULL),
(28, 'Assorted Milk and Almonds Dark Chocolates in Box', 'assorted-milk-and-almonds-dark-chocolates-in-box', 'AMASD445', NULL, 3, '2021-05-19 09:34:11', '2021-05-19 14:22:20', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 1, '7XkvHzdaxDd6qOPCXlOrTuEvdo2iA8.png', 8, 'Chocolates', 'Test', 'Test', 'testg', 5, 5, 4, 3, NULL, NULL),
(31, 'test', 'test', 'test', 11, 5, '2022-01-03 12:18:44', '2022-01-03 13:18:41', 'sfds', 1, 'ePLEteomkLgIAQ6n1pO0yIiy2ublKC.png', 1, 'test', 'test', 'test', 'test', 4, 44, 4, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_related`
--

CREATE TABLE `product_related` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `related_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_related`
--

INSERT INTO `product_related` (`id`, `product_id`, `related_id`) VALUES
(4, 5, 1),
(7, 7, 4),
(9, 10, 4),
(11, 8, 7),
(14, 14, 7),
(15, 4, 2),
(16, 11, 9),
(18, 12, 13),
(19, 15, 13),
(20, 16, 13),
(21, 17, 12),
(22, 18, 12),
(23, 19, 16),
(24, 20, 19),
(25, 20, 16),
(26, 21, 12),
(27, 22, 12),
(28, 22, 21),
(29, 23, 12),
(30, 23, 22),
(31, 23, 21),
(32, 24, 23),
(33, 24, 12),
(34, 24, 22),
(35, 26, 12),
(36, 27, 17),
(37, 29, 18);

-- --------------------------------------------------------

--
-- Table structure for table `product_shopping_category`
--

CREATE TABLE `product_shopping_category` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `shopping_category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_shopping_category`
--

INSERT INTO `product_shopping_category` (`id`, `product_id`, `shopping_category_id`) VALUES
(1, 3, 1),
(3, 4, 2),
(4, 5, 1),
(5, 6, 2),
(6, 11, 9),
(7, 12, 2),
(8, 15, 13),
(13, 20, 19),
(14, 20, 16),
(21, 25, 1),
(22, 13, 1),
(23, 16, 1),
(24, 17, 5),
(26, 19, 1),
(27, 21, 2),
(28, 21, 1),
(29, 22, 1),
(30, 23, 2),
(31, 23, 1),
(32, 24, 2),
(33, 24, 1),
(34, 24, 5),
(38, 29, 1),
(39, 29, 2),
(40, 24, 8),
(41, 31, 6);

-- --------------------------------------------------------

--
-- Table structure for table `product_similar`
--

CREATE TABLE `product_similar` (
  `id` int(11) NOT NULL,
  `similar_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `slug` varchar(70) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Baby Care', 'baby-care', 1, '2021-03-29 09:37:49', '2021-03-29 09:37:49'),
(2, 'Baby Clothing', 'baby-clothing', 1, '2021-03-29 09:38:14', '2021-03-29 09:38:14'),
(3, 'Baby Shoe', 'baby-shoe', 1, '2021-03-29 09:38:32', '2021-03-29 09:38:32'),
(4, 'Wall Decor and Hangings', 'wall-decor-and-hangings', 1, '2021-03-29 09:40:09', '2021-03-29 09:40:09'),
(5, 'Wall Clocks', 'wall-clocks', 1, '2021-03-29 09:40:47', '2021-03-29 09:40:47'),
(6, 'Home Furnitures', 'home-furnitures', 1, '2021-03-29 09:41:04', '2021-03-29 09:41:04'),
(7, 'Paintings', 'paintings', 1, '2021-03-29 09:42:35', '2021-03-29 09:42:35'),
(8, 'Kitchen and Dinning', 'kitchen-and-dinning', 1, '2021-03-29 09:44:09', '2021-03-29 09:44:09'),
(9, 'Giftboxes', 'giftboxes', 1, '2021-05-20 08:51:38', '2021-05-20 08:51:38'),
(10, 'Personalized Gifts', 'personalized-gifts', 1, '2021-05-20 08:52:03', '2021-05-20 08:52:03'),
(11, 'Gift Cards', 'gift-cards', 1, '2021-05-20 08:52:50', '2021-05-20 08:52:50');

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `attribute_id` int(10) DEFAULT 0,
  `attribute_value` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `name`, `price`, `description`, `picture`, `stock`, `type`, `published`, `attribute_id`, `attribute_value`, `created_at`, `updated_at`) VALUES
(50, 1, 'Small', 145, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 6, NULL, 1, 1, NULL, '2021-04-15 09:21:27', '2021-04-15 09:21:27'),
(58, 5, 'asdf', 34, 'fdg', 'EyYGU2DJD7RxEO38WqNGQZk2cGKMpe.png', 16, NULL, 1, 1, NULL, '2021-04-22 06:54:54', '2021-04-22 06:54:54'),
(63, 6, 'Medium', 23, 'A red rose is an expression of love. Red roses usually show deep feelings, like love, longing, or desire. Red roses can also be used to show respect, admiration, or devotion. A deep red rose can be used to show regret and sorrow.', 'y5geW1JcOqkiQqqiYaObmRaAeGq0XO.png', 3, NULL, 1, 1, NULL, '2021-04-22 07:05:23', '2021-04-22 07:05:23'),
(64, 6, 'small', 10, 'A red rose is an expression of love. Red roses usually show deep feelings, like love, longing, or desire. Red roses can also be used to show respect, admiration, or devotion. A deep red rose can be used to show regret and sorrow.', 'FdWjHrwQvalcXMYSnT0yMzYlMGzg1b.png', 6, NULL, 1, 1, NULL, '2021-04-22 07:05:23', '2021-04-22 07:05:23'),
(65, 7, 'Large', 50, 'A red rose is an expression of love. Red roses usually show deep feelings, like love, longing, or desire. Red roses can also be used to show respect, admiration, or devotion. A deep red rose can be used to show regret and sorrow.', '7MsWBcyDAwn98GbSWqT6VaygbcnPQ2.png', 1, NULL, 1, 1, NULL, '2021-04-22 07:58:27', '2021-04-22 07:58:27'),
(66, 7, 'Medium', 40, 'A red rose is an expression of love. Red roses usually show deep feelings, like love, longing, or desire. Red roses can also be used to show respect, admiration, or devotion. A deep red rose can be used to show regret and sorrow.', 'ANr4TEK1JCNdZe268kFTNkQ9T34yw9.png', 4, NULL, 1, 4, NULL, '2021-04-22 07:58:27', '2021-04-22 07:58:27'),
(67, 8, 'Large', 50, 'A red rose is an expression of love. Red roses usually show deep feelings, like love, longing, or desire. Red roses can also be used to show respect, admiration, or devotion. A deep red rose can be used to show regret and sorrow.', 'yGphXtCeDQ52l1ihpjYi9YRBggRdPN.png', 1, NULL, 1, 1, NULL, '2021-04-22 07:59:44', '2021-04-22 07:59:44'),
(68, 8, 'Medium', 40, 'A red rose is an expression of love. Red roses usually show deep feelings, like love, longing, or desire. Red roses can also be used to show respect, admiration, or devotion. A deep red rose can be used to show regret and sorrow.', '8RKUnGf3QxifJxsBvE9cU7jUvmYslI.png', 4, NULL, 1, 4, NULL, '2021-04-22 07:59:44', '2021-04-22 07:59:44'),
(73, 9, 'Medium', 40, 'A red rose is an expression of love. Red roses usually show deep feelings, like love, longing, or desire. Red roses can also be used to show respect, admiration, or devotion. A deep red rose can be used to show regret and sorrow.', 'hCyVRI0PNSzPxZjOIOsRrWNEXuVLgr.png', 6, NULL, 1, 4, NULL, '2021-04-22 08:15:47', '2021-04-22 08:15:47'),
(74, 9, 'Small', 25, 'A red rose is an expression of love. Red roses usually show deep feelings, like love, longing, or desire. Red roses can also be used to show respect, admiration, or devotion. A deep red rose can be used to show regret and sorrow.', 'wKkYo8GIn8IBPhw8mRvAmcSG5UfbiL.png', 12, NULL, 1, 1, NULL, '2021-04-22 08:15:47', '2021-04-22 08:15:47'),
(77, 2, 'Large', 245, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'pZGGEc67drcxwbAvYXLAcWFcTtfSmh.png', 1, NULL, 1, 1, NULL, '2021-04-22 09:26:35', '2021-04-22 09:26:35'),
(91, 14, 'Medium', 80, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'cBKPFx38WTjmXlqZaDrHhr8dXxIn5q.png', 2, NULL, 1, 4, NULL, '2021-04-23 07:20:56', '2021-04-23 07:20:56'),
(93, 15, 'Medium', 50, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'WdfyrI6RS8TYMkvf88Lv1yDZYQapum.png', 1, NULL, 1, 4, NULL, '2021-04-23 07:32:00', '2021-04-23 07:32:00'),
(94, 15, 'Small', 25, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'toYIAXkznF3mFMnrSNTgPtLSz50Q5u.png', 5, NULL, 1, 4, NULL, '2021-04-23 07:32:00', '2021-04-23 07:32:00'),
(106, 20, 'Small', 25, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'JLVjPhWdTrpCwyn3SW3JnD2OMKvslG.png', 4, NULL, 1, 0, NULL, '2021-04-23 09:06:51', '2021-04-23 09:06:51'),
(126, 13, 'Large', 100, 'a picture or design painted either directly on plastered walls and ceilings or on canvas, paper, or some other material that is attached to an architectural surface.', 'lhEP6NoSIlD53AzKhBran9rNixpNiS.png', 7, NULL, 1, 4, NULL, '2021-05-14 11:46:29', '2021-05-14 11:46:29'),
(127, 13, 'Medium', 80, 'a picture or design painted either directly on plastered walls and ceilings or on canvas, paper, or some other material that is attached to an architectural surface.', 'PhsHeHq5yUoS7Yh6ppqGa4duuamPTK.png', 8, NULL, 1, 4, NULL, '2021-05-14 11:46:29', '2021-05-14 11:46:29'),
(128, 13, 'Small', 20, 'a picture or design painted either directly on plastered walls and ceilings or on canvas, paper, or some other material that is attached to an architectural surface.', 'TtuYELupS3QXUU8JUitUuf7FXupWdh.png', 2, NULL, 1, 4, NULL, '2021-05-14 11:46:29', '2021-05-14 11:46:29'),
(132, 16, 'Large', 100, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'howlDKms063Kq8oyaSNlySbpHUZgBU.png', 2, NULL, 1, 4, NULL, '2021-05-14 12:00:48', '2021-05-14 12:00:48'),
(133, 16, 'Medium', 50, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'cRlbvH0ajHmRHFx0dCiBhITUnupIkT.png', 1, NULL, 1, 4, NULL, '2021-05-14 12:00:48', '2021-05-14 12:00:48'),
(134, 16, 'Small', 25, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 's1gcK2MHZruKuI2WNwNBPSwjlWFRYz.png', 5, NULL, 1, 4, NULL, '2021-05-14 12:00:48', '2021-05-14 12:00:48'),
(135, 17, 'Big', 100, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '9hSD0wlw2ahuvb5QHUz6HGIIXgFWq4.png', 1, NULL, 1, 1, NULL, '2021-05-14 12:02:18', '2021-05-14 12:02:18'),
(136, 17, 'Medium', 80, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'AHuwDHYKNYSeIEVveUgxtTYQbyL8n2.png', 6, NULL, 1, 1, NULL, '2021-05-14 12:02:18', '2021-05-14 12:02:18'),
(137, 17, 'Small', 50, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'R1KPLahYfB5oHP9rohRv4RvQ6vApTY.png', 1, NULL, 1, 4, NULL, '2021-05-14 12:02:19', '2021-05-14 12:02:19'),
(145, 18, 'Big', 80, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'z0eyIjLgS5vzASqDFQ6U1ASdIHvy7w.png', 2, NULL, 1, 4, NULL, '2021-05-14 13:37:48', '2021-05-14 13:37:49'),
(146, 18, 'Medium', 75, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'KxAw1MK4wUWNN5VQkxAE2K39jtNH4k.png', 2, NULL, 1, 4, NULL, '2021-05-14 13:37:49', '2021-05-14 13:37:49'),
(147, 18, 'small', 25, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'HW2g3pAVd9QzYRZCUoKgTM2WKc6kMS.png', 3, NULL, 1, 4, NULL, '2021-05-14 13:37:49', '2021-05-14 13:37:49'),
(149, 21, 'Big', 134, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'aFMhu9wQlsjRkb6vTMajKxt6tomQb5.png', 2, NULL, 1, 4, NULL, '2021-05-14 13:40:55', '2021-05-14 13:40:55'),
(150, 21, 'Medium', 100, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'kQk5OOdUVf6uhSKloSIoEVZkRXJE3a.png', 2, NULL, 1, 4, NULL, '2021-05-14 13:40:55', '2021-05-14 13:40:55'),
(151, 21, 'Small', 80, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 't8MAjApvQV8WJiaNobsijG0FmGALD7.png', 9, NULL, 1, 4, NULL, '2021-05-14 13:40:55', '2021-05-14 13:40:56'),
(155, 23, 'Big', 150, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '12dfksHjLW5qGwB81Qo4UUxXknqLpu.png', 4, NULL, 1, 4, NULL, '2021-05-14 13:43:42', '2021-05-14 13:43:42'),
(156, 23, 'Medium', 23, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'SBxwPbyZVcNLGnKGzRS25vTteG2e7h.png', 2, NULL, 1, 4, NULL, '2021-05-14 13:43:42', '2021-05-14 13:43:42'),
(157, 24, 'Big', 150, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Il8oZSMBnffSGzDoeLSx5uI2IELtWf.png', 6, NULL, 1, 1, NULL, '2021-05-14 13:44:42', '2021-05-14 13:44:42'),
(158, 24, 'Medium', 50, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '04zn8oBIiHAQlLf5cWIB6EXaHVX3b1.png', 5, NULL, 1, 4, NULL, '2021-05-14 13:44:42', '2021-05-14 13:44:42'),
(159, 24, 'Small', 25, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'YlGKmOi4JYVWyIBVqazIdvNOp1lbEU.png', 6, NULL, 1, 4, NULL, '2021-05-14 13:44:43', '2021-05-14 13:44:43'),
(164, 27, 'erewr', 56, 'efret', 'QxZpW19UnwT1g9auhf5JcUqQOsGvjA.png', 16, NULL, 0, 4, NULL, '2021-05-14 13:59:18', '2021-05-14 13:59:19'),
(172, 28, 'Standard', 145, 'Best', 'uuXyM5Io6lIuI3c7yXWUinHARt1Svn.png', 11, NULL, 1, 1, 'Standard Box', '2021-05-19 14:22:20', '2021-05-19 14:22:20'),
(173, 19, 'Big', 67, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'qPiAcCOQJhnMK93KRO7nYbvB7trO7B.png', 2, NULL, 1, 4, NULL, '2021-05-20 13:47:45', '2021-05-20 13:47:45'),
(174, 22, 'Big', 200, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '1189QaI5CD85cFS5aZDzf7LozsnfYa.png', 4, NULL, 1, 4, NULL, '2021-05-20 13:50:02', '2021-05-20 13:50:02'),
(175, 22, 'Medium', 180, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'GfKnrKj7IJHRyl1Q9FrP844Xf1OMnI.png', 6, NULL, 1, 4, NULL, '2021-05-20 13:50:02', '2021-05-20 13:50:02'),
(176, 22, 'Small', 80, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '6YPaCPee3dKiFTNSRlG9h97PeGeFHu.png', 3, NULL, 1, 4, NULL, '2021-05-20 13:50:02', '2021-05-20 13:50:02'),
(185, 12, 'Large', 50, 'Red roses also stand for passion, true love, romance, and desire. The red rose is a classic “I Love You” rose, making it a popular choice for Valentine\'s Day', '4kBHj63zWpoaXECxzY1jqCC1BAHaB4.png', 2, NULL, 1, 4, NULL, '2022-01-03 14:17:37', '2022-01-03 14:17:37'),
(186, 12, 'Medium', 40, 'Red roses also stand for passion, true love, romance, and desire. The red rose is a classic “I Love You” rose, making it a popular choice for Valentine\'s Day', 'apqYA1bxnppGmfJNalebU1Tu6FVx8g.png', 3, NULL, 1, 4, NULL, '2022-01-03 14:17:37', '2022-01-03 14:17:37'),
(187, 12, 'Small', 20, 'Red roses also stand for passion, true love, romance, and desire. The red rose is a classic “I Love You” rose, making it a popular choice for Valentine\'s Day', 'F6FvBthMmuyUS55CHaa3cNgYeIkuRJ.png', 6, NULL, 1, 4, NULL, '2022-01-03 14:17:37', '2022-01-03 14:17:37'),
(192, 31, 'test1', 50, 'test1', 'bTuQKRyek3Uw85c29tfuMLD9XAqMBH.png', 15, NULL, 1, 1, 'erty', '2022-01-05 10:03:26', '2022-01-05 10:03:26'),
(193, 31, 'test2', 50, 'Test2', 'qtcm9vqKC93BjUHSjkn8JdgSDld9Ek.png', 10, NULL, 1, 1, 'red', '2022-01-05 10:03:26', '2022-01-05 10:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `short_code` char(2) NOT NULL,
  `country` varchar(10) NOT NULL DEFAULT 'CA',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `short_code`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Ontario', 'ON', 'CA', '2021-01-30 14:45:39', '2021-01-30 14:45:39'),
(2, 'Quebec', 'QC', 'CA', '2021-01-30 14:46:42', '2021-01-30 14:46:42'),
(3, 'Nova Scotia', 'NS', 'CA', '2021-01-30 00:00:00', '2021-01-30 00:00:00'),
(4, 'New Brunswick', 'NB', 'CA', '2021-01-30 16:30:36', '2021-01-30 16:30:36'),
(5, 'Manitoba', 'MB', 'CA', '2021-01-30 16:31:55', '2021-01-30 16:31:55'),
(6, 'British Columbia', 'BC', 'CA', '2021-01-30 16:31:55', '2021-01-30 16:31:55'),
(7, 'Prince Edward Island', 'PE', 'CA', '2021-01-30 16:31:55', '2021-01-30 16:31:55'),
(8, 'Saskatchewan', 'SK', 'CA', '2021-01-30 16:31:55', '2021-01-30 16:31:55'),
(9, 'Alberta', 'AB', 'CA', '2021-01-30 16:33:57', '2021-01-30 16:33:57'),
(10, 'Newfoundland and Labrador', 'NL', 'CA', '2021-01-30 16:34:16', '2021-01-30 16:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `short_description` varchar(150) NOT NULL,
  `description` text DEFAULT NULL,
  `days` int(11) NOT NULL,
  `cut_off` time NOT NULL,
  `shipping_policy_id` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `delivery_date` tinyint(1) NOT NULL DEFAULT 1,
  `local_delivery` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `charge` decimal(10,0) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `name`, `short_description`, `description`, `days`, `cut_off`, `shipping_policy_id`, `priority`, `delivery_date`, `local_delivery`, `status`, `charge`, `created_at`, `updated_at`) VALUES
(11, 'Express Shipping', 'Typically Ships next Day', NULL, 1, '02:33:00', 1, 1, 1, 0, 1, 34, '2021-03-29 07:31:10', '2021-03-29 09:50:01'),
(12, 'Standard Shipping', 'Ships In 3-7 Business Days', NULL, 2, '05:06:00', 1, 3, 1, 0, 1, 23, '2021-03-29 07:32:26', '2021-03-29 09:50:18'),
(13, 'Local Shipping', 'Vendor Local Shipping', 'test', 1, '20:00:00', 2, 1, 1, 1, 1, 0, '2021-05-21 11:36:34', '2021-05-21 11:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_faq`
--

CREATE TABLE `shipping_faq` (
  `id` int(11) NOT NULL,
  `vendor_category_id` int(11) NOT NULL,
  `question` varchar(250) NOT NULL,
  `answer` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shipping_faq`
--

INSERT INTO `shipping_faq` (`id`, `vendor_category_id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 1, 'Is there any extra charge for Shipping?', 'No. It\'s Free', '2021-03-29 07:38:53', '2021-03-29 14:10:28'),
(2, 1, 'Is there any extra charge for Shipping?', 'No. It\'s Free', '2021-03-29 07:38:53', '2021-03-29 07:38:53'),
(3, 2, 'Do you ship across national borders?', 'It operates  Canadian store', '2021-03-29 07:46:25', '2021-03-29 07:46:25'),
(4, 2, 'When will my gift arrive?', 'Most items on the app ship within 3-5 business days from the time the order is confirmed by the recipient', '2021-03-29 07:46:25', '2021-03-29 07:46:25'),
(5, 3, 'Will my Gift be delayed due to COVID-19', 'We remain committed to you for your gifting needs.\r\nAll of our partners listed in our marketplace are currently open and operating', '2021-03-29 07:50:28', '2021-03-29 07:50:28'),
(6, 3, 'What is Charge For Shipping?', '$15.00', '2021-03-29 07:50:28', '2021-03-29 07:50:28'),
(8, 5, 'Is there any extra charge for Shipping?', 'No', '2021-03-30 05:51:18', '2021-03-30 05:51:18'),
(9, 6, 'Is there any extra charge for Shipping?', 'No.Its free', '2021-03-30 05:52:19', '2021-03-30 05:52:19'),
(10, 7, 'Do you ship across national ?', 'No', '2021-03-30 05:53:50', '2021-03-30 05:53:50'),
(11, 8, 'Do you ship across national borders?', 'It operates  Canadian store', '2021-03-30 05:54:52', '2021-03-30 05:54:52'),
(12, 9, 'Will my Gift be delayed due to Covid-19?', 'We remain committed to you for your gifting needs.\r\nAll of our partners listed in our marketplace are currently open and operating', '2021-03-30 05:56:36', '2021-03-30 05:56:36'),
(13, 10, 'Is there any extra charge for Shipping?', 'No.It\'s Free', '2021-03-30 05:57:37', '2021-03-30 05:57:37'),
(14, 11, 'sxfd', 'fadfa', '2021-03-30 05:58:04', '2021-03-30 07:27:15'),
(15, 12, 'Is there any extra charge for Shipping?', 'Yes', '2021-03-30 05:58:39', '2021-03-30 05:58:39'),
(16, 13, 'Is there any extra charge for Shipping?', 'No', '2021-03-30 05:59:09', '2021-03-30 05:59:09'),
(17, 14, 'Is there any extra charge for Shipping?', 'No', '2021-03-30 05:59:47', '2021-03-30 05:59:47'),
(18, 15, 'Is there any extra charge for Shipping?', 'No.It\'s Free', '2021-03-30 06:00:27', '2021-03-30 06:00:27'),
(32, 35, 'trghrt', 'trhry', '2021-03-30 11:18:36', '2021-03-30 11:18:36'),
(34, 16, 'What is Beautyy?', 'Beautyy', '2022-01-03 09:06:32', '2022-01-03 09:06:32');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_categories`
--

CREATE TABLE `shopping_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `parent_id` int(11) DEFAULT NULL,
  `display_order` int(11) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shopping_categories`
--

INSERT INTO `shopping_categories` (`id`, `name`, `status`, `parent_id`, `display_order`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'For Him', 1, NULL, 1, 'for-him', '2021-03-09 11:04:20', '2021-03-09 12:19:05'),
(2, 'For Her', 1, NULL, 1, 'for-her', '2021-03-09 12:19:53', '2021-03-09 12:19:53'),
(5, 'For Kids', 1, NULL, 4, 'for-kids', '2021-03-10 10:31:07', '2021-03-30 13:04:53'),
(6, 'For Babies', 1, NULL, 5, 'for-babies', '2021-03-29 09:22:18', '2021-03-30 13:05:12'),
(8, 'testing ancel', 1, 5, 9, 'testing-ancel', '2022-01-03 12:29:49', '2022-01-03 12:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(50) NOT NULL,
  `button_text` varchar(40) NOT NULL,
  `display_order` int(11) NOT NULL,
  `slider_type` enum('home') NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `picture`, `title`, `description`, `link`, `button_text`, `display_order`, `slider_type`, `status`, `created_at`, `updated_at`) VALUES
(5, 'SIqciMoDbAFp4WizRj3Qp1Ve9v8oYZ.png', 'Giftty', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text', 'gifty', 1, 'home', 1, '2021-05-14 12:48:10', '2021-05-14 12:50:17'),
(6, 'piJKGXMNi17sNplp10kW1PJDWbLX8q.png', 'Gift', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text', 'Gifty', 2, 'home', 1, '2021-05-14 12:52:28', '2021-05-14 12:52:28');

-- --------------------------------------------------------

--
-- Table structure for table `social_medias`
--

CREATE TABLE `social_medias` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `social_medias`
--

INSERT INTO `social_medias` (`id`, `name`, `link`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Instagram', 'https://www.instagram.com', 'vCQSV4vqUvYqGrvhYPplDqZJgEkqSi.png', 1, '2021-02-18 14:24:03', '2021-05-19 10:20:50'),
(3, 'Face Book', 'https://www.facebook.com', 'j33yPth1bAJxeXXOxWEnq8gwyxwdMw.png', 1, '2021-03-30 13:53:45', '2021-05-19 10:21:12');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `firstname`, `lastname`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'don', 'john', 'don@gmail.com', 1, '2021-02-27 15:34:30', '2021-02-27 15:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vendor_category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `store_email` varchar(50) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `address` varchar(150) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `postalcode` varchar(7) DEFAULT NULL,
  `province` char(2) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `user_id`, `vendor_category_id`, `name`, `store_email`, `slug`, `address`, `city`, `postalcode`, `province`, `phone`, `mobile`, `logo`, `description`, `website`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 'Aquva', 'aquvashop@gmail.com', 'aquva', NULL, 'mentobia', '345-667', 'MB', '978-673-5673', '987-654-3322', 'jl8QZdlTkhL0UEJr3AjjXFU1ez9O2e.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'aquva book', 1, '2021-04-12 08:40:46', '2021-05-19 08:56:23'),
(2, 11, 8, 'Amaze', 'amaze@gmail.com', 'amaze', NULL, 'toronto', '324-343', 'NB', '878-987-8767', '878-767-8767', 'a7qR3iyqh9waKY43vRfIPoGNCvSC16.png', 'dfdf', 'asds', 1, '2021-05-14 10:54:17', '2021-05-19 13:46:24'),
(3, 12, 8, 'Gift House', 'gifthouse@gmail.com', 'gift-house', NULL, 'Toronto', '000', 'ON', '223-344-4444', '444-555-3343', 's8qoTo2JkxICuvmyGKGPQpPtiBgbbb.png', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur', 'http://www.gifthouse.com', 1, '2021-05-18 17:15:28', '2021-05-19 12:50:06'),
(5, 20, 4, 'Test Shop', 'testshop@gmail.com', 'test-shop', NULL, 'Torointo', 't45-465', 'ON', '657-568-6865', '678-768-9798', 'Z7mwTrWXZg7TWDpW8FAv0B13QBJkNa.png', 'Test Shop', 'testshop.com', 1, '2022-01-03 08:59:15', '2022-01-03 08:59:15');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `name`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'ancelindigital@gmail.com', 1, '2021-04-26 07:07:39', '2021-04-26 07:07:39'),
(2, NULL, 'malu@gmail.com', 1, '2021-04-29 12:01:28', '2021-04-29 12:01:28'),
(3, NULL, 'anceltreasajose@gmail.com', 1, '2021-12-30 10:43:21', '2021-12-30 10:43:21'),
(4, NULL, 'developer@indigitalgroup.ca', 1, '2022-01-03 12:09:38', '2022-01-03 12:09:38'),
(5, NULL, 'ssadcsa', 1, '2022-05-12 07:15:23', '2022-05-12 07:15:23'),
(6, NULL, 'zaproxy@example.com', 1, '2023-11-08 10:47:11', '2023-11-08 10:47:11');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `slug`, `published`, `created_at`, `updated_at`) VALUES
(1, 'story', 'story', 1, '2021-02-05 10:14:39', '2021-03-08 13:55:28'),
(4, 'articles', 'articles', 1, '2021-02-05 11:11:41', '2021-03-08 13:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 1,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `bio` text DEFAULT NULL,
  `phone` varchar(15) NOT NULL,
  `verified` tinyint(1) DEFAULT 0,
  `remember_token` varchar(50) DEFAULT NULL,
  `user_type` enum('admin','vendor','customer','staff','user') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `province` int(11) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `postalcode` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `role_id`, `email`, `password`, `status`, `bio`, `phone`, `verified`, `remember_token`, `user_type`, `created_at`, `updated_at`, `picture`, `address`, `province`, `city`, `postalcode`) VALUES
(1, 'Admin', 'Giftty', 1, 'admin@giftty.ca', '$2y$10$GT4vOkCCiJFKxnikdGlDnOW4VCw5IIcphdqiYnOAkqMBHN3QXkwQe', 0, 'Giftty Admin', '', 0, NULL, 'admin', '2021-04-12 08:23:38', '2022-01-05 13:03:23', 'N0nwFnQ2NFlK7tYU2BlWMMJP9kAQKJ.png', NULL, NULL, NULL, NULL),
(2, 'Cesario', NULL, 1, 'aquva@gmail.com', '$2y$10$ZuriES9guZpyz9hyctUxeubw/hGN7BdUaOCYLZNc1e78zlLfWnIe.', 1, 'winnepeg', '978-673-5673', 0, NULL, 'vendor', '2021-04-12 08:40:46', '2021-04-12 08:42:33', NULL, NULL, NULL, NULL, NULL),
(5, 'test', 'customer', 1, 'testcustomer@gmail.com', '$2y$10$.NFEA.PcZq7b15rru.26lu.uHjcp7q7ssK7vDicy3ZVs4hvVKfFea', 0, 'ghgjj', '987-898-7878', 0, NULL, 'customer', '2021-04-29 05:43:52', '2021-08-24 12:52:47', 'JJlnq5SpGNj2lGW5ztO6ijkYsHAkst.png', 'testing', 4, 'toronto', 'gh67f'),
(9, 'Biju', 'Yohannan', 1, 'bijuys@gmail.com', '$2y$10$GRGFDDQ7H7yvuhREIA5f3OFkpGcDIu9b0SLAh.GEb0dwzuVnivXTu', 1, 'ghg', '333-444-3333', 0, NULL, 'customer', '2021-05-10 14:02:43', '2021-05-19 10:16:29', 'wk8R2e4tNcH0qGvuLD5yKi0TsOQPOe.png', NULL, NULL, NULL, NULL),
(10, 'Biju', 'Yohannan', 1, 'biju@gmail.com', '$2y$10$ynUiBgUGylpzGFo3fWInLuuq/ocTq99Zu61tgUn0HCBFGCOirRxS6', 1, 'sdsa', '333-444-3333', 0, NULL, 'customer', '2021-05-10 14:03:44', '2021-07-27 07:29:05', 'dvStugKgEYzCN9EvYpeKWVyIM9p6K0.png', NULL, NULL, NULL, NULL),
(11, 'cesario', NULL, 1, 'cesario@gmail.com', '$2y$10$Ra4U67237DKPcl5O/gFeW.mdk3L7jOSGXknb.S6a.W5SpXellQ8H.', 1, 'canada', '878-987-8767', 0, NULL, 'vendor', '2021-05-14 10:54:17', '2021-05-19 13:50:37', NULL, NULL, NULL, NULL, NULL),
(12, 'Renold William', NULL, 1, 'renold@gmail.com', '$2y$10$HrtojTd7L/zrHM13RA7iruwR.I5TyvA9g.Xp6xTCwMKC1wLDPv5IS', 1, '123test', '223-344-4444', 0, NULL, 'vendor', '2021-05-18 17:15:28', '2021-12-30 20:11:36', NULL, NULL, NULL, NULL, NULL),
(13, 'Anju', 'Joseph', 1, 'anju@gmail.com', '$2y$10$KbKoaKksksVht5O20C/eEenIt1AC6tjLXgP/Pss9/1kwANPN6hTjC', 1, NULL, '8899776655', 1, NULL, 'customer', '2021-05-19 12:47:30', '2021-05-19 12:47:30', NULL, 'Test123', 1, 'Toronto', '679554'),
(14, 'Rose', 'Daniel', 1, 'rose@gmail.com', '$2y$10$OqYCekhqF5Dz3jMIrlhY9egP5nkK6KYbQQhjydaQvjYv8LVVKOGdi', 1, NULL, '7876787678', 1, NULL, 'customer', '2021-05-20 04:54:01', '2021-05-20 04:54:01', NULL, 'Toronto', 1, 'Ontario', 'M8Z 1J7'),
(15, 'Steve', 'Jose', 1, 'steve@gmail.com', '$2y$10$a1anbd2wS6BNeftyM/9tuuJaMYYxARaQHo0YNqJwVObOdajQzM9Hu', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '878-987-8987', 0, NULL, 'customer', '2021-05-20 05:08:30', '2021-08-12 13:32:54', 'Jra5ZqRCbDQAx41V2cOueb0qAJL6Yp.png', NULL, NULL, NULL, NULL),
(16, 'Benzion', 'Belva', 1, 'benbel@gmail.com', '$2y$10$93CHgSOPPcHuFb0P.O6vv.i2sADLJ7ED3eD3Krg9l2EPiI6KSy6V2', 1, NULL, '2342342323', 1, NULL, 'customer', '2021-05-20 07:42:49', '2021-08-12 13:32:54', NULL, 'MyHome', 1, 'Toronto', 't0a0a0'),
(18, 'Abcd', 'Pqrs', 1, 'abcd@gmail.com', '$2y$10$Pm4zuN5IUZKJ71dgYZ6Cx.QtxHWb.1OqxCD519PZpOTgd4rhYlDXa', 1, 'abcd', '987-542-1245', 0, NULL, 'customer', '2022-01-03 08:06:42', '2022-01-05 10:21:05', 'MPjhpWUfCo84fMx8ZphKWt4OOeJJ4k.png', 'Test 123', 1, 'Toronto', 'T13 354'),
(20, 'Test', NULL, 1, 'test@gmail.com', '$2y$10$0tJtdeZ5YEEQj2XlFUATnusFwK5EanHE38wOBoUiS2ygjPyABD18G', 1, 'Test 123', '657-568-6865', 0, NULL, 'vendor', '2022-01-03 08:59:15', '2022-01-03 12:23:24', NULL, NULL, NULL, NULL, NULL),
(21, 'abcd', 'pqrs', 1, 'abcdpqrs@gmail.com', '$2y$10$uVxaZIzGqlLmdx/H91GpwOS6FqwP5TJJI1rA9IqQ0yTBgTLWPAZvq', 1, 'abcdpqrs', '787-976-9780', 0, NULL, 'user', '2022-01-03 10:43:43', '2022-01-03 10:43:43', 'mlxkh066mAFXcrgJx4iSM2Oww0sRv2.png', NULL, NULL, NULL, NULL),
(22, 'Test', 'Pqrs', 1, 'testpqrs@gmail.com', '$2y$10$.wiv5aS2YhDUvDQM9sbaJOO5kYS9TVI31eeizqjKrUlG5eKWBNLte', 1, 'sdgdfg', '657-865-8768', 0, NULL, 'customer', '2022-01-03 12:06:05', '2022-01-03 12:06:05', '5LUhgU8bb7SOVollH452cDvw99bnOC.png', NULL, NULL, NULL, NULL),
(23, 'veddoi', 'soutrelle', 1, 'veddoisoutrelle-2940@yopmail.com', '$2y$10$5PfNQECRVkx1GhHHJ4XO6OwXdGuv/eg95G8dFfOjkBjI/S9wFaOZ6', 1, NULL, '452-124-5245', 1, NULL, 'customer', '2023-07-08 08:30:55', '2023-07-08 08:30:55', NULL, '55335 colwin rd', 1, 'toronto', 'h4g 4k5');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_categories`
--

CREATE TABLE `vendor_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(120) DEFAULT NULL,
  `shipping_policy` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_categories`
--

INSERT INTO `vendor_categories` (`id`, `name`, `shipping_policy`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Sweets', 'National Shipping', 1, '2021-03-29 07:50:28', '2021-03-29 07:50:28'),
(4, 'Babies', 'National Shipping', 1, '2021-03-29 08:45:42', '2021-03-29 08:45:42'),
(5, 'Barware', 'Express Shipping.', 1, '2021-03-30 05:51:18', '2021-03-30 05:51:21'),
(6, 'Gourmet', 'Standard Shipping', 1, '2021-03-30 05:52:19', '2021-03-30 05:52:19'),
(7, 'Wine & Spirits', 'Standard Shipping', 1, '2021-03-30 05:53:50', '2021-03-30 05:53:50'),
(8, 'Plants & Flowers', 'Express Shipping', 1, '2021-03-30 05:54:52', '2021-03-30 05:54:52'),
(9, 'Health & Wellness', 'Standard Shipping', 1, '2021-03-30 05:56:36', '2021-03-30 05:56:36'),
(10, 'Home', 'Standard Shipping', 1, '2021-03-30 05:57:37', '2021-03-30 05:57:37'),
(11, 'Sustainable', 'Standard Shipping', 1, '2021-03-30 05:58:04', '2021-03-30 05:58:04'),
(12, 'Books', 'Express Shipping', 1, '2021-03-30 05:58:39', '2021-03-30 05:58:39'),
(13, 'Apothecary', 'Standard Shipping', 1, '2021-03-30 05:59:09', '2021-03-30 05:59:09'),
(14, 'Work From Home', 'Stanadard Shipping', 1, '2021-03-30 05:59:47', '2021-03-30 05:59:47'),
(15, 'Tech & Gadgets', 'Standard Shipping', 1, '2021-03-30 06:00:27', '2021-03-30 06:00:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addresses_delivery`
--
ALTER TABLE `addresses_delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_product`
--
ALTER TABLE `brand_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_store`
--
ALTER TABLE `city_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_product`
--
ALTER TABLE `color_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount_user`
--
ALTER TABLE `discount_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigations`
--
ALTER TABLE `navigations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occasions`
--
ALTER TABLE `occasions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occasion_product`
--
ALTER TABLE `occasion_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_statuses`
--
ALTER TABLE `order_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_topic`
--
ALTER TABLE `post_topic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_related`
--
ALTER TABLE `product_related`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_shopping_category`
--
ALTER TABLE `product_shopping_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_similar`
--
ALTER TABLE `product_similar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_faq`
--
ALTER TABLE `shipping_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_categories`
--
ALTER TABLE `shopping_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_medias`
--
ALTER TABLE `social_medias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_categories`
--
ALTER TABLE `vendor_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `addresses_delivery`
--
ALTER TABLE `addresses_delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `brand_product`
--
ALTER TABLE `brand_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `city_store`
--
ALTER TABLE `city_store`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `color_product`
--
ALTER TABLE `color_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `discount_user`
--
ALTER TABLE `discount_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `navigations`
--
ALTER TABLE `navigations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `occasions`
--
ALTER TABLE `occasions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `occasion_product`
--
ALTER TABLE `occasion_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `order_statuses`
--
ALTER TABLE `order_statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post_topic`
--
ALTER TABLE `post_topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product_related`
--
ALTER TABLE `product_related`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `product_shopping_category`
--
ALTER TABLE `product_shopping_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `product_similar`
--
ALTER TABLE `product_similar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `shipping_faq`
--
ALTER TABLE `shipping_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `shopping_categories`
--
ALTER TABLE `shopping_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `social_medias`
--
ALTER TABLE `social_medias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `vendor_categories`
--
ALTER TABLE `vendor_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
