-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2021 at 12:35 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giffty`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `firstname`, `lastname`, `type`, `location_type`, `postalcode`, `city`, `province`, `phone`, `user_id`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'erfet', 'etwt', 'shipping', 'Residence', '5456', 'gfgfh', 'AB', '43336544444', NULL, NULL, 'rtgretg', '2021-04-19 12:39:48', '2021-04-19 12:39:48'),
(2, 'erfet', 'etwt', 'shipping', 'Residence', '5456', 'gfgfh', 'AB', '43336544444', NULL, NULL, 'rtgretg', '2021-04-19 12:41:34', '2021-04-19 12:41:34'),
(3, 'erfet', 'etwt', 'shipping', 'Residence', '5456', 'gfgfh', 'AB', '43336544444', NULL, NULL, 'rtgretg', '2021-04-19 12:41:39', '2021-04-19 12:41:39'),
(4, 'scdfdsf', 'fdg', 'shipping', 'Residence', '3432', 'dfvfg', 'AB', '24356654', NULL, NULL, 'degfregr', '2021-04-19 12:42:21', '2021-04-19 12:42:21'),
(5, 'scdfdsf', 'fdg', 'shipping', 'Residence', '3432', 'dfvfg', 'AB', '24356654', NULL, NULL, 'degfregr', '2021-04-19 12:43:37', '2021-04-19 12:43:37'),
(6, 'dfgff', 'rtgyh', 'billing', NULL, '3434', 'fgtgh', 'BC', '34354656', NULL, 'trht@vf', 'dfdgg', '2021-04-19 12:43:37', '2021-04-19 12:43:37'),
(7, 'ancel', 'jose', 'shipping', 'Residence', '978675', 'fgfhjhgh', 'AB', '87654534', NULL, NULL, 'asds', '2021-04-20 06:29:27', '2021-04-20 06:29:27'),
(8, 'dscfdsf', 'dfds', 'billing', NULL, '3244', 'fgfg', 'BC', 'dcfdsf', NULL, 'dfsf@df', 'dscfdsf', '2021-04-20 06:29:27', '2021-04-20 06:29:27'),
(9, 'ancel', 'jose', 'shipping', 'Residence', '978675', 'fgfhjhgh', 'AB', '87654534', NULL, NULL, 'asds', '2021-04-20 06:33:36', '2021-04-20 06:33:36'),
(10, 'dscfdsf', 'dfds', 'billing', NULL, '3244', 'fgfg', 'BC', 'dcfdsf', NULL, 'dfsf@df', 'dscfdsf', '2021-04-20 06:33:36', '2021-04-20 06:33:36'),
(11, 'ancel', 'jose', 'shipping', 'Residence', '978-675', 'fgfhjhgh', 'AB', '876-545-34__', NULL, NULL, 'asds', '2021-04-20 07:18:07', '2021-04-20 07:18:07'),
(12, 'dscfdsf', 'dfds', 'billing', NULL, '324-4__', 'dfds', 'BC', '243-254-3546', NULL, 'dfsf@df', 'dscfdsf', '2021-04-20 07:18:07', '2021-04-20 07:18:07'),
(13, 'ancel', 'jose', 'shipping', 'Residence', '978-675', 'fgfhjhgh', 'AB', '876-545-3455', NULL, NULL, 'asds', '2021-04-20 07:25:14', '2021-04-20 07:25:14'),
(14, 'dscfdsf', 'dfds', 'billing', NULL, '324-4__', 'dfds', 'BC', '243-254-3546', NULL, 'dfsf@df', 'dscfdsf', '2021-04-20 07:25:14', '2021-04-20 07:25:14'),
(15, 'ancel', 'jose', 'shipping', 'Residence', '978-675', 'fgfhjhgh', 'AB', '876-545-3455', NULL, NULL, 'asds', '2021-04-20 07:25:39', '2021-04-20 07:25:39'),
(16, 'dscfdsf', 'dfds', 'billing', NULL, '324-4__', 'dfds', 'BC', '243-254-3546', NULL, 'dfsf@df', 'dscfdsf', '2021-04-20 07:25:39', '2021-04-20 07:25:39'),
(17, 'ancel', 'jose', 'shipping', 'Residence', '978-675', 'fgfhjhgh', 'AB', '876-545-3455', NULL, NULL, 'asds', '2021-04-20 07:26:17', '2021-04-20 07:26:17'),
(18, 'dscfdsf', 'dfds', 'billing', NULL, '324-4__', 'dfds', 'BC', '243-254-3546', NULL, 'dfsf@df', 'dscfdsf', '2021-04-20 07:26:17', '2021-04-20 07:26:17'),
(19, 'ancel', 'jose', 'shipping', 'Residence', '978-675', 'fgfhjhgh', 'AB', '876-545-3455', NULL, NULL, 'asds', '2021-04-20 10:56:13', '2021-04-20 10:56:13'),
(20, 'dscfdsf', 'dfds', 'billing', NULL, '324-4__', 'dfds', 'BC', '243-254-3546', NULL, 'dfsf@df', 'dscfdsf', '2021-04-20 10:56:13', '2021-04-20 10:56:13'),
(21, 'vcbb', 'gfbg', 'shipping', 'Residence', '123-213', 'fghgh', 'AB', '243-545-6777', NULL, NULL, 'fgg', '2021-04-20 11:17:48', '2021-04-20 11:17:48'),
(22, 'fgfdggh', 'rdfgtfg', 'billing', NULL, '232-435', 'fgfggfgg', 'AB', '214-354-6576', NULL, 'dfg@fgfg', 'dfdgg', '2021-04-20 11:17:48', '2021-04-20 11:17:48'),
(23, 'vcbb', 'gfbg', 'shipping', 'Residence', '123-213', 'fghgh', 'AB', '243-545-6777', NULL, NULL, 'fgg', '2021-04-20 12:11:54', '2021-04-20 12:11:54'),
(24, 'fgfdggh', 'rdfgtfg', 'billing', NULL, '232-435', 'rdfgtfg', 'AB', '214-354-6576', 3, 'dfg@fgfg', 'dfdgg', '2021-04-20 12:11:54', '2021-04-20 12:11:54'),
(25, 'sff', 'edff', 'shipping', 'Residence', '234-243', 'fdgfg', 'AB', '232-435-6768', 3, NULL, 'sdas', '2021-04-20 12:20:40', '2021-04-20 12:20:40'),
(26, 'sdfsdfg', 'erfet', 'billing', NULL, '132-144', 'dggf', 'AB', '123-243-4544', NULL, 'erert@rtgtg', 'werferf', '2021-04-20 12:20:40', '2021-04-20 12:20:40'),
(27, 'ancel', 'jose', 'shipping', 'Residence', '345-678', 'chittarikkal', 'BC', '755-992-1349', NULL, NULL, 'chittarikkal', '2021-04-20 12:44:40', '2021-04-20 12:44:40'),
(28, 'ghjg', 'hjkh', 'billing', NULL, '865-645', 'dfguftgfy', 'BC', '987-676-5676', NULL, 'ancel@ghhhh', 'ghggggj', '2021-04-20 12:44:40', '2021-04-20 12:44:40'),
(29, 'sdsf', 'dff', 'shipping', 'Residence', '232-432', 'dfretfre', 'AB', '234-324-5657', NULL, NULL, 'sfdf', '2021-04-20 13:08:49', '2021-04-20 13:08:49'),
(30, 'fgdh', 'ghgfh', 'billing', NULL, '234-354', 'bghgh', 'BC', '345-465-7687', NULL, 'gfhfhg@FDB', 'FGG', '2021-04-20 13:08:49', '2021-04-20 13:08:49'),
(31, 'ancel', 'jose', 'shipping', 'Business', '000-000', 'toronto', 'AB', '222-222-2222', NULL, NULL, 'test', '2021-04-20 13:21:48', '2021-04-20 13:21:48'),
(32, 'test', 'test', 'billing', NULL, '000-000', 'toronto', 'NB', '222-222-2222', NULL, 'test@test.cfom', 'asdfasdf', '2021-04-20 13:21:48', '2021-04-20 13:21:48'),
(33, 'fcvghfgh', 'hjkh;j', 'shipping', 'Residence', '243-254', 'fgfdghfh', 'BC', '243-655-7687', NULL, NULL, 'fghfh', '2021-04-21 05:26:17', '2021-04-21 05:26:17'),
(34, 'dfvgfdg', 'fgfdg', 'billing', NULL, '324-365', 'bgnhmj', 'AB', '243-657-6898', NULL, 'fggf@fgfdg', 'fgfg', '2021-04-21 05:26:17', '2021-04-21 05:26:17'),
(35, 'aswrer', 'rertet', 'shipping', 'Residence', '243-535', 'dgfdhhjf', 'AB', '243-547-6879', NULL, NULL, 'fdfds', '2021-04-21 05:29:33', '2021-04-21 05:29:33'),
(36, 'rtrey', 'rytyrty', 'billing', NULL, '213-245', 'dcgfgfh', 'AB', '243-546-7687', NULL, 'dfgdg@v', 'dfdggg', '2021-04-21 05:29:33', '2021-04-21 05:29:33'),
(37, 'azsdsaf', 'fdsf', 'shipping', 'Residence', '243-254', 'dvfdbgf', 'AB', '234-254-6576', NULL, NULL, 'wsfdesgf', '2021-04-21 05:39:53', '2021-04-21 05:39:53'),
(38, 'dfgfdhg', 'ghgfj', 'billing', NULL, '232-436', 'fgfhgjh', 'AB', '455-567-7587', NULL, 'fgfdh@fgf', 'fgfggf', '2021-04-21 05:39:53', '2021-04-21 05:39:53'),
(39, 'dfdf', 'dfdfs', 'shipping', 'Residence', '242-354', 'dfdfg', 'BC', '232-543-5667', NULL, NULL, 'dfdfs', '2021-04-21 05:49:09', '2021-04-21 05:49:09'),
(40, 'gfgtrfh', 'yhhju', 'billing', NULL, '345-436', 'bgfhg', 'AB', '324-365-7687', NULL, 'rfrg@s', 'dfdf', '2021-04-21 05:49:09', '2021-04-21 05:49:09'),
(41, 'dfdf', 'dfdfs', 'shipping', 'Residence', '242-354', 'dfdfg', 'BC', '232-543-5667', NULL, NULL, 'dfdfs', '2021-04-21 07:22:01', '2021-04-21 07:22:01'),
(42, 'gfgtrfh', 'yhhju', 'billing', NULL, '345-436', 'yhhju', 'AB', '324-365-7687', NULL, 'rfrg@s', 'dfdf', '2021-04-21 07:22:01', '2021-04-21 07:22:01'),
(43, 'asds', 'addf', 'shipping', 'Residence', '76877', 'dfghg', 'BC', '987654566776', NULL, NULL, 'wderf', '2021-04-21 12:39:28', '2021-04-21 12:39:28'),
(44, 'dsfdf', 'hjdjgsfh', 'billing', NULL, '8787', 'fghfg', 'BC', '978776656', NULL, 'dsgs@hsj', 'dgfadg', '2021-04-21 12:39:28', '2021-04-21 12:39:28'),
(45, 'asds', 'addf', 'shipping', 'Residence', '76877', 'dfghg', 'BC', '987654566776', NULL, NULL, 'wderf', '2021-04-21 12:48:47', '2021-04-21 12:48:47'),
(46, 'dsfdf', 'hjdjgsfh', 'billing', NULL, '8787', 'fghfg', 'BC', '978776656', NULL, 'dsgs@hsj', 'dgfadg', '2021-04-21 12:48:47', '2021-04-21 12:48:47'),
(47, 'ancel', 'jose', 'shipping', 'Residence', 'M1A 1A5', 'torinto', 'BC', '7559921349', NULL, NULL, 'chittarikkal', '2021-04-21 12:58:49', '2021-04-21 12:58:49'),
(48, 'ghj', 'ds', 'billing', NULL, 'sd23f', 'scf', 'BC', '9878987878', NULL, 'ancel@gmail.com', 'swdwqsd', '2021-04-21 12:58:49', '2021-04-21 12:58:49'),
(49, 'asdfsdf', 'rgrrg', 'shipping', 'Residence', '345', 'defd', 'BC', '4567875678', NULL, NULL, 'greh', '2021-04-21 13:27:42', '2021-04-21 13:27:42'),
(50, 'dfds', 'dfsfd', 'billing', NULL, '34567', 'fgggf', 'BC', '564535436', NULL, 'def@v', 'vcfb', '2021-04-21 13:27:42', '2021-04-21 13:27:42'),
(51, 'Ancel', 'Jose', 'shipping', 'Residence', '0A0T0A', 'torointo', 'BC', '343546577', NULL, NULL, 'edakkara', '2021-04-27 05:23:31', '2021-04-27 05:23:31'),
(52, 'malu', 'jose', 'billing', NULL, '23455', 'dfdsfdsf', 'AB', '34354657', NULL, 'ancel@gmail.com', 'sdghsadh', '2021-04-27 05:23:31', '2021-04-27 05:23:31'),
(53, 'ancel', 'dfdsf', 'shipping', 'Residence', '1233', 'dfdfg', 'BC', '76534534', 3, NULL, 'sdsd', '2021-04-27 05:47:22', '2021-04-27 05:47:22'),
(54, 'dfrd', 'fgfg', 'billing', NULL, '2324', 'fgfghh', 'AB', '765678765', 3, 'fgdfg@bb', 'fgdfg', '2021-04-27 05:47:22', '2021-04-27 05:47:22'),
(55, 'ancel', 'dfdsf', 'shipping', 'Residence', '1233', 'dfdfg', 'BC', '76534534', NULL, NULL, 'sdsd', '2021-04-27 07:03:32', '2021-04-27 07:03:32'),
(56, 'dfrd', 'fgfg', 'billing', NULL, '2324', 'fgfghh', 'AB', '765678765', NULL, 'fgdfg@bb', 'fgdfg', '2021-04-27 07:03:32', '2021-04-27 07:03:32'),
(57, 'cinta', 'sdsad', 'shipping', 'Residence', '45465', 'fghgfh', 'AB', '76767676', NULL, NULL, 'sadasd', '2021-04-27 07:06:25', '2021-04-27 07:06:25'),
(58, 'cintaaa', 'dcds', 'billing', NULL, '6567', 'fhgfghj', 'BC', '9878767676', NULL, 'cinta@gmail.com', 'dcvfds', '2021-04-27 07:06:25', '2021-04-27 07:06:25'),
(59, 'sff', 'edff', 'shipping', 'Business', '234-243', 'fdgfg', 'AB', '232-435-6768', NULL, NULL, 'sdas', '2021-04-27 07:31:26', '2021-04-27 07:31:26'),
(60, 'fgfdggh', 'rdfgtfg', 'billing', NULL, '232-435', 'rdfgtfg', 'AB', '214-354-6576', NULL, 'dfg@fgfg', 'dfdgg', '2021-04-27 07:31:26', '2021-04-27 07:31:26'),
(61, 'sff', 'edff', 'shipping', 'Residence', '234-243', 'fdgfg', 'AB', '232-435-6768', 3, NULL, 'sdas', '2021-04-27 08:49:13', '2021-04-27 08:49:13'),
(62, 'fgfdggh', 'rdfgtfg', 'billing', NULL, '232-435', 'rdfgtfg', 'AB', '214-354-6576', 3, 'dfg@fgfg', 'dfdgg', '2021-04-27 08:49:13', '2021-04-27 08:49:13'),
(63, 'sff', 'edff', 'shipping', 'Residence', '234-243', 'fdgfg', 'AB', '232-435-6768', 3, NULL, 'sdas', '2021-04-27 08:55:58', '2021-04-27 08:55:58'),
(64, 'fgfdggh', 'rdfgtfg', 'billing', NULL, '232-435', 'rdfgtfg', 'AB', '214-354-6576', 3, 'dfg@fgfg', 'dfdgg', '2021-04-27 08:55:59', '2021-04-27 08:55:59'),
(65, 'sff', 'edff', 'shipping', 'Residence', '234-243', 'fdgfg', 'AB', '232-435-6768', 3, NULL, 'sdas', '2021-04-27 09:10:34', '2021-04-27 09:10:34'),
(66, 'fgfdggh', 'rdfgtfg', 'billing', NULL, '232-435', 'rdfgtfg', 'AB', '214-354-6576', 3, 'dfg@fgfg', 'dfdgg', '2021-04-27 09:10:34', '2021-04-27 09:10:34'),
(67, 'sds', 'dfd', 'shipping', 'Residence', '2324', 'dfdfdf', 'BC', '7654454646', NULL, NULL, 'sadsdf', '2021-04-27 09:31:29', '2021-04-27 09:31:29'),
(68, 'fgf', 'fggf', 'billing', NULL, '3543', 'fgfdgd', 'BC', '35465747', NULL, 'dfgff@gfg', 'dfgfg', '2021-04-27 09:31:29', '2021-04-27 09:31:29');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `values` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `values`, `status`, `created_at`, `updated_at`) VALUES
(1, 'color', 'red,green', 1, '2021-03-27 10:08:55', '2021-03-27 10:53:41'),
(4, 'size', 'small', 1, '2021-03-27 10:54:13', '2021-03-27 10:54:13');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `display_order` int(11) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `user_id` int(11) DEFAULT '1',
  `email` varchar(50) DEFAULT NULL,
  `open` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `billing_id` int(11) DEFAULT NULL,
  `delivery_id` int(11) DEFAULT NULL,
  `remarks` text,
  `discount_code` varchar(50) DEFAULT NULL,
  `discount_value` decimal(10,0) DEFAULT NULL,
  `discount_value_type` varchar(20) DEFAULT NULL,
  `discount_type` varchar(30) DEFAULT NULL,
  `discount_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `email`, `open`, `created_at`, `updated_at`, `status`, `billing_id`, `delivery_id`, `remarks`, `discount_code`, `discount_value`, `discount_value_type`, `discount_type`, `discount_id`) VALUES
(1, 1, NULL, 1, '2021-04-16 12:53:47', '2021-04-16 12:53:47', 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0),
(2, 1, NULL, 1, '2021-04-17 04:51:24', '2021-04-17 04:51:24', 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0),
(3, 1, NULL, 1, '2021-04-17 07:06:56', '2021-04-17 07:06:56', 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0),
(4, 1, NULL, 1, '2021-04-17 11:05:31', '2021-04-17 11:05:31', 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 0),
(5, 1, NULL, 1, '2021-04-19 06:36:43', '2021-04-19 12:43:37', 1, 6, 5, NULL, NULL, NULL, NULL, NULL, 0),
(6, 1, NULL, 1, '2021-04-20 05:42:29', '2021-04-20 10:56:13', 0, 20, 19, NULL, NULL, NULL, NULL, NULL, 0),
(7, 1, NULL, 1, '2021-04-20 11:16:59', '2021-04-20 12:15:01', 0, 24, 23, NULL, NULL, NULL, NULL, NULL, 0),
(8, 1, NULL, 1, '2021-04-20 12:19:52', '2021-04-20 12:21:02', 0, 26, 25, NULL, NULL, NULL, NULL, NULL, 0),
(9, 1, NULL, 1, '2021-04-20 12:43:12', '2021-04-20 13:02:55', 0, 28, 27, NULL, NULL, NULL, NULL, NULL, 0),
(10, 1, NULL, 1, '2021-04-20 13:08:03', '2021-04-20 13:17:45', 0, 30, 29, NULL, NULL, NULL, NULL, NULL, 0),
(11, 1, NULL, 1, '2021-04-20 13:20:10', '2021-04-20 13:22:19', 0, 32, 31, NULL, NULL, NULL, NULL, NULL, 0),
(12, 1, NULL, 1, '2021-04-20 13:29:35', '2021-04-20 13:29:35', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(13, 1, NULL, 1, '2021-04-21 05:25:29', '2021-04-21 05:27:35', 0, 34, 33, NULL, NULL, NULL, NULL, NULL, 0),
(14, 1, NULL, 1, '2021-04-21 05:27:50', '2021-04-21 05:29:49', 0, 36, 35, NULL, NULL, NULL, NULL, NULL, 0),
(15, 1, NULL, 1, '2021-04-21 05:39:05', '2021-04-21 05:40:08', 0, 38, 37, NULL, NULL, NULL, NULL, NULL, 0),
(16, 1, NULL, 1, '2021-04-21 05:48:36', '2021-04-21 07:22:01', 0, 42, 41, NULL, NULL, NULL, NULL, NULL, 0),
(17, 1, NULL, 1, '2021-04-21 09:27:08', '2021-04-21 09:27:08', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(18, 1, NULL, 1, '2021-04-21 10:11:08', '2021-04-21 10:11:08', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(19, 1, NULL, 1, '2021-04-21 12:09:22', '2021-04-21 12:48:47', 0, 46, 45, NULL, NULL, NULL, NULL, NULL, 0),
(20, 1, NULL, 1, '2021-04-21 12:56:38', '2021-04-21 12:59:11', 0, 48, 47, NULL, NULL, NULL, NULL, NULL, 0),
(21, 1, NULL, 1, '2021-04-21 13:04:46', '2021-04-21 13:28:10', 0, 50, 49, NULL, NULL, NULL, NULL, NULL, 0),
(22, 1, NULL, 1, '2021-04-22 04:49:45', '2021-04-22 04:49:45', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(23, 1, NULL, 1, '2021-04-22 12:04:01', '2021-04-22 12:04:01', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(24, 1, NULL, 1, '2021-04-26 06:41:34', '2021-04-26 06:41:34', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(25, 1, NULL, 1, '2021-04-26 12:57:51', '2021-04-26 12:57:51', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(26, 1, 'sfdsfdf@fg', 1, '2021-04-26 13:26:12', '2021-04-26 13:38:29', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(27, 1, 'fggg@ghg', 1, '2021-04-27 04:45:32', '2021-04-27 04:49:34', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(28, 1, 'ancel@gmail.com', 1, '2021-04-27 04:53:26', '2021-04-27 04:53:53', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(29, 1, 'ancel@gmail.com', 1, '2021-04-27 04:56:57', '2021-04-27 05:25:21', 0, 52, 51, NULL, NULL, NULL, NULL, NULL, 0),
(30, 1, 'ancel@gmail.com', 1, '2021-04-27 05:25:38', '2021-04-27 05:25:53', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(31, 3, 'ancel@gmail.com', 1, '2021-04-27 05:35:48', '2021-04-27 07:04:16', 0, 56, 55, NULL, NULL, NULL, NULL, NULL, 0),
(32, 1, 'cinta@gmail.com', 1, '2021-04-27 07:04:31', '2021-04-27 07:06:25', 1, 58, 57, NULL, NULL, NULL, NULL, NULL, 0),
(33, 3, 'ancel@gmail.com', 1, '2021-04-27 07:11:49', '2021-04-27 08:49:13', 1, 62, 61, NULL, NULL, NULL, NULL, NULL, 0),
(34, 3, 'ancel@gmail.com', 1, '2021-04-27 08:55:14', '2021-04-27 09:10:34', 1, 66, 65, NULL, NULL, NULL, NULL, NULL, 0),
(35, 1, 'sadf@gfh', 1, '2021-04-27 09:14:25', '2021-04-27 09:33:19', 0, 68, 67, NULL, NULL, NULL, NULL, NULL, 0),
(36, 3, 'ancel@gmail.com', 1, '2021-04-27 09:59:42', '2021-04-27 10:00:12', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(37, 1, NULL, 1, '2021-04-27 10:56:15', '2021-04-27 10:56:15', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(38, 1, NULL, 1, '2021-04-28 05:21:57', '2021-04-28 10:16:04', 1, NULL, NULL, NULL, 'GIFTF2', '2', 'amount', 'coupon', 0),
(39, 1, NULL, 1, '2021-04-28 09:58:41', '2021-04-28 10:05:29', 1, NULL, NULL, NULL, 'SD4', '4', 'percentage', 'coupon', 0),
(40, 1, NULL, 1, '2021-04-28 10:17:05', '2021-04-28 10:43:41', 1, NULL, NULL, NULL, 'ASD1', '10', 'percentage', 'coupon', 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `parent_id` int(10) DEFAULT NULL,
  `display_order` int(11) NOT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `parent_id`, `display_order`, `slug`, `picture`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Books', 1, NULL, 1, 'books', NULL, NULL, 'Books let you travel without moving your feet', '2021-03-29 09:13:28', '2021-03-29 09:13:28'),
(3, 'Babies', 1, NULL, 2, 'babies', NULL, NULL, 'Provide Amazing gifts for babies', '2021-03-29 09:17:24', '2021-03-29 09:17:24'),
(5, 'Home', 1, NULL, 3, 'home', NULL, NULL, 'Provide home items.', '2021-03-29 09:19:34', '2021-03-29 09:19:34'),
(6, 'Kids', 1, NULL, 6, 'kids', NULL, NULL, 'Attractive gift items are here for kids.', '2021-03-29 09:20:49', '2021-03-29 09:20:49'),
(7, 'Barware', 1, NULL, 1, 'barware', NULL, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', '2021-03-30 05:34:52', '2021-03-30 05:34:52'),
(8, 'Gourmet', 1, NULL, 15, 'gourmet', NULL, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2021-03-30 05:38:41', '2021-03-30 05:38:41'),
(9, 'Wine & Spirits', 1, NULL, 3, 'wine-spirits', NULL, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '2021-03-30 05:39:21', '2021-03-30 05:39:21'),
(10, 'Plants & Flowers', 1, NULL, 5, 'plants-flowers', NULL, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2021-03-30 05:40:05', '2021-03-30 05:40:05'),
(11, 'Health & Wellness', 1, NULL, 6, 'health-wellness', NULL, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2021-03-30 05:40:35', '2021-03-30 05:40:35'),
(12, 'Sustainable', 1, NULL, 8, 'sustainable', NULL, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2021-03-30 05:41:12', '2021-03-30 05:41:12'),
(13, 'Apothecary', 1, NULL, 9, 'apothecary', NULL, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2021-03-30 05:41:44', '2021-03-30 05:41:44'),
(14, 'Work From Home', 1, NULL, 11, 'work-from-home', NULL, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2021-03-30 05:42:09', '2021-03-30 05:42:09');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `product_id`, `category_id`) VALUES
(15, 6, 5),
(14, 6, 10),
(3, 3, 10),
(13, 2, 10),
(11, 1, 10),
(6, 3, 9),
(8, 4, 3),
(10, 5, 5),
(16, 9, 10),
(17, 11, 5),
(18, 12, 10),
(19, 13, 5),
(20, 15, 5),
(21, 16, 5),
(22, 17, 3),
(23, 18, 6),
(24, 19, 1),
(25, 20, 14),
(26, 21, 10),
(27, 22, 10),
(28, 23, 10),
(29, 24, 10);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `province` char(2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_popular` tinyint(1) NOT NULL DEFAULT '1',
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(45) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `use_count` int(11) DEFAULT NULL,
  `discount_type` enum('coupon','shipped') NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `code`, `description`, `start_time`, `end_time`, `min_amount`, `max_usage`, `value`, `value_type`, `use_count`, `discount_type`, `status`, `created_at`, `updated_at`) VALUES
(3, 'GIFTF2', 'Discount for Flower', '2021-04-27 00:00:00', '2021-04-30 00:00:00', '10', 2, '2', 'amount', 0, 'coupon', 1, '2021-04-28 05:52:14', '2021-04-28 06:41:47'),
(4, 'SD4', 'for flowers', '2021-04-27 00:00:00', '2021-04-29 23:59:59', '15', 2, '4', 'percentage', NULL, 'coupon', 1, '2021-04-28 07:43:05', '2021-04-28 10:41:38'),
(5, 'ASD1', 'sdff', '2021-04-26 00:00:00', '2021-04-30 00:00:00', '12', 4, '10', 'percentage', 0, 'coupon', 1, '2021-04-28 10:43:25', '2021-04-28 10:43:25');

-- --------------------------------------------------------

--
-- Table structure for table `discount_user`
--

CREATE TABLE `discount_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `discount_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `card_message` text,
  `special_note` text,
  `special_instructions` text,
  `postal_code` varchar(7) DEFAULT NULL,
  `delivery_date` datetime DEFAULT NULL,
  `location_type` varchar(25) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `product_id`, `product_name`, `product_picture`, `variant_id`, `variant_name`, `price`, `quantity`, `product_sku`, `cart_id`, `card_message`, `special_note`, `special_instructions`, `postal_code`, `delivery_date`, `location_type`, `created_at`, `updated_at`) VALUES
(1, 1, 'White Chocolate Pralines', '099Wft9FEq5M0thtM7cDh0oIZWDGed.png', 49, 'Small', '45.00', 1, 'WCP21', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-16 12:53:47', '2021-04-16 12:53:47'),
(9, 1, 'White Chocolate Pralines', '099Wft9FEq5M0thtM7cDh0oIZWDGed.png', 49, 'Small', '45.00', 1, 'WCP21', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-16 13:49:38', '2021-04-16 13:49:38'),
(21, 2, 'Red Roses', 'http://127.0.0.1:8000/images/user/2/tGMrlU1ToOuMzpJe2vNKCj2DTFyrHX.png', 47, 'Large', '150.00', 1, 'RR01', 2, NULL, NULL, NULL, NULL, '2021-04-17 06:22:39', NULL, '2021-04-17 06:22:39', '2021-04-17 06:22:39'),
(13, 1, 'White Chocolate Pralines', '099Wft9FEq5M0thtM7cDh0oIZWDGed.png', 49, 'Small', '45.00', 2, 'WCP21', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-16 14:19:03', '2021-04-16 14:19:03'),
(22, 2, 'Red Roses', 'http://127.0.0.1:8000/images/user/2/tGMrlU1ToOuMzpJe2vNKCj2DTFyrHX.png', 47, 'Large', '150.00', 0, 'RR01', 2, NULL, NULL, NULL, NULL, '2021-04-17 06:35:29', NULL, '2021-04-17 06:35:29', '2021-04-17 06:35:29'),
(27, 2, 'Red Roses', '2/M9hOpESZaziVBqleJjGObSZp2L2drj.png', 47, 'big', '150.00', 1, 'RR01', 3, NULL, NULL, NULL, NULL, '2021-04-19 07:31:38', NULL, '2021-04-17 07:31:38', '2021-04-17 07:31:38'),
(35, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', '145.00', 1, 'WCP21', 5, NULL, NULL, NULL, NULL, '2021-04-21 06:36:43', NULL, '2021-04-19 06:36:43', '2021-04-19 06:36:43'),
(25, 2, 'Red Roses', '2/M9hOpESZaziVBqleJjGObSZp2L2drj.png', 47, 'big', '150.00', 3, 'RR01', 3, NULL, NULL, NULL, NULL, '2021-04-19 07:21:20', NULL, '2021-04-17 07:21:20', '2021-04-17 07:21:20'),
(32, 2, 'Red Roses', '2/Kc5vyus8veptk5cdox4IBDGvKBnL5M.png', 48, 'Large', '245.00', 2, 'RR01', 3, NULL, NULL, NULL, NULL, '2021-04-19 07:57:51', NULL, '2021-04-17 07:57:51', '2021-04-17 07:57:51'),
(33, 2, 'Red Roses', '2/Kc5vyus8veptk5cdox4IBDGvKBnL5M.png', 48, 'Large', '245.00', 1, 'RR01', 4, NULL, NULL, NULL, NULL, '2021-04-19 11:05:31', NULL, '2021-04-17 11:05:31', '2021-04-17 11:05:31'),
(34, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', '145.00', 1, 'WCP21', 3, NULL, NULL, NULL, NULL, '2021-04-19 12:20:39', NULL, '2021-04-17 12:20:39', '2021-04-17 12:20:39'),
(36, 2, 'Red Roses', '2/Kc5vyus8veptk5cdox4IBDGvKBnL5M.png', 48, 'Large', '245.00', 1, 'RR01', 5, NULL, NULL, NULL, NULL, '2021-04-21 07:12:27', NULL, '2021-04-19 07:12:27', '2021-04-19 07:12:27'),
(37, 3, 'Yellow Roses', '2/M4XC2uUgoaNPH110R0rye8GGgoxaZ7.png', 36, 'large', '345.00', 1, 'YR2', 5, NULL, NULL, NULL, NULL, '2021-04-21 07:12:42', NULL, '2021-04-19 07:12:42', '2021-04-19 07:12:42'),
(48, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', '145.00', 1, 'WCP21', 7, NULL, NULL, NULL, NULL, '2021-04-22 11:16:59', NULL, '2021-04-20 11:16:59', '2021-04-20 11:16:59'),
(39, 2, 'Red Roses', '2/Kc5vyus8veptk5cdox4IBDGvKBnL5M.png', 48, 'Large', '245.00', 1, 'RR01', 6, NULL, NULL, NULL, NULL, '2021-04-22 05:58:58', NULL, '2021-04-20 05:58:58', '2021-04-20 05:58:58'),
(47, 2, 'Red Roses', '2/Kc5vyus8veptk5cdox4IBDGvKBnL5M.png', 48, 'Large', '245.00', 1, 'RR01', 6, NULL, NULL, NULL, NULL, '2021-04-22 10:55:58', NULL, '2021-04-20 10:55:58', '2021-04-20 10:55:58'),
(44, 2, 'Red Roses', '2/M9hOpESZaziVBqleJjGObSZp2L2drj.png', 47, 'big', '150.00', 2, 'RR01', 6, NULL, NULL, NULL, NULL, '2021-04-22 06:28:08', NULL, '2021-04-20 06:28:08', '2021-04-20 06:28:08'),
(45, 2, 'Red Roses', '2/Kc5vyus8veptk5cdox4IBDGvKBnL5M.png', 48, 'Large', '245.00', 1, 'RR01', 6, NULL, NULL, NULL, NULL, '2021-04-22 06:34:30', NULL, '2021-04-20 06:34:30', '2021-04-20 06:34:30'),
(46, 3, 'Yellow Roses', '2/M4XC2uUgoaNPH110R0rye8GGgoxaZ7.png', 36, 'large', '345.00', 1, 'YR2', 6, NULL, NULL, NULL, NULL, '2021-04-22 06:54:54', NULL, '2021-04-20 06:54:54', '2021-04-20 06:54:54'),
(49, 3, 'Yellow Roses', '2/M4XC2uUgoaNPH110R0rye8GGgoxaZ7.png', 36, 'large', '345.00', 1, 'YR2', 7, NULL, NULL, NULL, NULL, '2021-04-22 12:11:39', NULL, '2021-04-20 12:11:39', '2021-04-20 12:11:39'),
(50, 2, 'Red Roses', '2/Kc5vyus8veptk5cdox4IBDGvKBnL5M.png', 48, 'Large', '245.00', 1, 'RR01', 8, NULL, NULL, NULL, NULL, '2021-04-22 12:19:52', NULL, '2021-04-20 12:19:52', '2021-04-20 12:19:52'),
(51, 2, 'Red Roses', '2/M9hOpESZaziVBqleJjGObSZp2L2drj.png', 47, 'big', '150.00', 2, 'RR01', 9, NULL, NULL, NULL, NULL, '2021-04-22 12:43:12', NULL, '2021-04-20 12:43:12', '2021-04-20 12:43:12'),
(52, 1, 'White Chocolate Pralines', '2/QdiMoeKTtUnqeEFjXv32KylNDvBoEJ.png', 49, 'small', '45.00', 1, 'WCP21', 10, NULL, NULL, NULL, NULL, '2021-04-22 13:08:03', NULL, '2021-04-20 13:08:03', '2021-04-20 13:08:03'),
(53, 1, 'White Chocolate Pralines', '2/QdiMoeKTtUnqeEFjXv32KylNDvBoEJ.png', 49, 'small', '45.00', 2, 'WCP21', 11, NULL, NULL, NULL, NULL, '2021-04-22 13:20:10', NULL, '2021-04-20 13:20:10', '2021-04-20 13:20:10'),
(57, 5, 'chocolates', '2/SucfpnD3WCQfaFopz9bS7BiPWPwKlI.png', 22, 'asdf', '34.00', 3, '34df', 12, NULL, NULL, NULL, NULL, '2021-04-22 13:42:35', NULL, '2021-04-20 13:42:35', '2021-04-20 13:42:35'),
(56, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', '145.00', 4, 'WCP21', 12, NULL, NULL, NULL, NULL, '2021-04-22 13:39:15', NULL, '2021-04-20 13:39:15', '2021-04-20 13:39:15'),
(58, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', '145.00', 1, 'WCP21', 13, NULL, NULL, NULL, NULL, '2021-04-23 05:25:29', NULL, '2021-04-21 05:25:29', '2021-04-21 05:25:29'),
(59, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', '145.00', 1, 'WCP21', 14, NULL, NULL, NULL, NULL, '2021-04-23 05:27:50', NULL, '2021-04-21 05:27:50', '2021-04-21 05:27:50'),
(60, 3, 'Yellow Roses', '2/M4XC2uUgoaNPH110R0rye8GGgoxaZ7.png', 36, 'large', '345.00', 1, 'YR2', 14, NULL, NULL, NULL, NULL, '2021-04-23 05:28:16', NULL, '2021-04-21 05:28:16', '2021-04-21 05:28:16'),
(61, 2, 'Red Roses', '2/Kc5vyus8veptk5cdox4IBDGvKBnL5M.png', 48, 'Large', '245.00', 1, 'RR01', 15, NULL, NULL, NULL, NULL, '2021-04-23 05:39:05', NULL, '2021-04-21 05:39:05', '2021-04-21 05:39:05'),
(82, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', '145.00', 1, 'WCP21', 19, NULL, NULL, NULL, NULL, '2021-04-23 12:29:11', NULL, '2021-04-21 12:29:11', '2021-04-21 12:29:11'),
(81, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', '145.00', 1, 'WCP21', 19, NULL, NULL, NULL, NULL, '2021-04-23 12:28:59', NULL, '2021-04-21 12:28:59', '2021-04-21 12:28:59'),
(80, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', '145.00', 1, 'WCP21', 19, NULL, NULL, NULL, NULL, '2021-04-23 12:24:07', NULL, '2021-04-21 12:24:07', '2021-04-21 12:24:07'),
(78, 3, 'Yellow Roses', '2/M4XC2uUgoaNPH110R0rye8GGgoxaZ7.png', 36, 'large', '345.00', 1, 'YR2', 18, NULL, NULL, NULL, NULL, '2021-04-23 10:11:08', NULL, '2021-04-21 10:11:08', '2021-04-21 10:11:08'),
(76, 3, 'Yellow Roses', '2/M4XC2uUgoaNPH110R0rye8GGgoxaZ7.png', 36, 'large', '345.00', 1, 'YR2', 16, NULL, NULL, NULL, NULL, '2021-04-23 08:32:03', NULL, '2021-04-21 08:32:03', '2021-04-21 08:32:03'),
(77, 3, 'Yellow Roses', '2/M4XC2uUgoaNPH110R0rye8GGgoxaZ7.png', 36, 'large', '345.00', 1, 'YR2', 17, NULL, NULL, NULL, NULL, '2021-04-23 09:27:08', NULL, '2021-04-21 09:27:08', '2021-04-21 09:27:08'),
(84, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', '145.00', 1, 'WCP21', 20, NULL, NULL, NULL, NULL, '2021-04-23 12:57:17', NULL, '2021-04-21 12:57:17', '2021-04-21 12:57:17'),
(87, 1, 'White Chocolate Pralines', '2/uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 50, 'Small', '145.00', 1, 'WCP21', 21, NULL, NULL, NULL, NULL, '2021-04-23 13:25:43', NULL, '2021-04-21 13:25:43', '2021-04-21 13:25:43'),
(102, 12, 'Red Roses', '2/eZgcoVPYaYvtBcY34lKKNnjSdEIq0X.png', 80, 'Small', '20.00', 1, 'RR3', 22, NULL, NULL, NULL, NULL, '2021-04-24 09:41:23', NULL, '2021-04-22 09:41:23', '2021-04-22 09:41:23'),
(103, 12, 'Red Roses', '2/mjXIrkRnSIigbunOrUf0IFiPNpysrc.png', 79, 'Medium', '40.00', 2, 'RR3', 22, NULL, NULL, NULL, NULL, '2021-04-24 09:41:32', NULL, '2021-04-22 09:41:32', '2021-04-22 09:53:54'),
(104, 12, 'Red Roses', '2/mGH0jnEgFrw71EmLVYTND1TsdYhiBC.png', 78, 'Large', '50.00', 2, 'RR3', 22, NULL, NULL, NULL, NULL, '2021-04-24 09:41:39', NULL, '2021-04-22 09:41:39', '2021-04-22 09:54:05'),
(105, 13, 'Wall Art Painting', '2/qlNZt0msLDzSrdwd4w0JOzuFlFRsH9.png', 81, 'Large', '100.00', 1, 'WAP', 22, NULL, NULL, NULL, NULL, '2021-04-24 09:51:32', NULL, '2021-04-22 09:51:32', '2021-04-22 09:51:32'),
(108, 12, 'Red Roses', '2/mjXIrkRnSIigbunOrUf0IFiPNpysrc.png', 79, 'Medium', '40.00', 1, 'RR3', 23, NULL, NULL, NULL, NULL, '2021-04-24 12:06:23', NULL, '2021-04-22 12:06:23', '2021-04-22 12:06:23'),
(109, 12, 'Red Roses', '2/eZgcoVPYaYvtBcY34lKKNnjSdEIq0X.png', 80, 'Small', '20.00', 7, 'RR3', 23, NULL, NULL, NULL, NULL, '2021-04-24 12:06:30', NULL, '2021-04-22 12:06:30', '2021-04-22 13:27:22'),
(110, 12, 'Red Roses', '2/eZgcoVPYaYvtBcY34lKKNnjSdEIq0X.png', 80, 'Small', '20.00', 2, 'RR3', 23, NULL, NULL, NULL, NULL, '2021-04-24 12:42:16', NULL, '2021-04-22 12:42:16', '2021-04-22 12:42:29'),
(111, 12, 'Red Roses', '2/eZgcoVPYaYvtBcY34lKKNnjSdEIq0X.png', 80, 'Small', '20.00', 1, 'RR3', 23, NULL, NULL, NULL, NULL, '2021-04-24 13:27:05', NULL, '2021-04-22 13:27:05', '2021-04-22 13:27:05'),
(112, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', '80.00', 1, 'YR4', 24, NULL, NULL, NULL, NULL, '2021-04-28 06:41:34', NULL, '2021-04-26 06:41:34', '2021-04-26 06:41:34'),
(113, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', '80.00', 1, 'YR4', 24, NULL, NULL, NULL, NULL, '2021-04-28 07:13:40', NULL, '2021-04-26 07:13:40', '2021-04-26 07:13:40'),
(115, 22, 'White Rose Flower', '2/FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 112, 'Small', '80.00', 1, 'WRE4', 26, NULL, NULL, NULL, NULL, '2021-04-28 13:26:12', NULL, '2021-04-26 13:26:12', '2021-04-26 13:26:12'),
(120, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', '80.00', 1, 'YR4', 27, NULL, NULL, NULL, NULL, '2021-04-29 04:51:59', NULL, '2021-04-27 04:51:59', '2021-04-27 04:51:59'),
(121, 22, 'White Rose Flower', '2/FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 112, 'Small', '80.00', 1, 'WRE4', 28, NULL, NULL, NULL, NULL, '2021-04-29 04:53:26', NULL, '2021-04-27 04:53:26', '2021-04-27 04:53:26'),
(122, 22, 'White Rose Flower', '2/FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 112, 'Small', '80.00', 1, 'WRE4', 29, NULL, NULL, NULL, NULL, '2021-04-29 04:56:57', NULL, '2021-04-27 04:56:57', '2021-04-27 04:56:57'),
(123, 22, 'White Rose Flower', '2/FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 112, 'Small', '80.00', 1, 'WRE4', 30, NULL, NULL, NULL, NULL, '2021-04-29 05:25:38', NULL, '2021-04-27 05:25:38', '2021-04-27 05:25:38'),
(124, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', '80.00', 1, 'YR4', 31, NULL, NULL, NULL, NULL, '2021-04-29 05:35:48', NULL, '2021-04-27 05:35:48', '2021-04-27 05:35:48'),
(125, 22, 'White Rose Flower', '2/FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 112, 'Small', '80.00', 1, 'WRE4', 31, NULL, NULL, NULL, NULL, '2021-04-29 06:56:11', NULL, '2021-04-27 06:56:11', '2021-04-27 06:56:11'),
(126, 22, 'White Rose Flower', '2/FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 112, 'Small', '80.00', 1, 'WRE4', 31, NULL, NULL, NULL, NULL, '2021-04-29 06:56:56', NULL, '2021-04-27 06:56:56', '2021-04-27 06:56:56'),
(128, 22, 'White Rose Flower', '2/FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 112, 'Small', '80.00', 1, 'WRE4', 32, NULL, NULL, NULL, NULL, '2021-04-29 07:10:58', NULL, '2021-04-27 07:10:58', '2021-04-27 07:10:58'),
(129, 12, 'Red Roses', '2/DAODpkPnHLfMqlUV4uw0zIFBImGWW0.png', 89, 'Small', '20.00', 1, 'RR3', 33, NULL, NULL, NULL, NULL, '2021-04-29 07:11:49', NULL, '2021-04-27 07:11:49', '2021-04-27 07:11:49'),
(132, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', '80.00', 1, 'YR4', 34, NULL, NULL, NULL, NULL, '2021-04-29 09:10:28', NULL, '2021-04-27 09:10:28', '2021-04-27 09:10:28'),
(134, 22, 'White Rose Flower', '2/FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 112, 'Small', '80.00', 1, 'WRE4', 35, NULL, NULL, NULL, NULL, '2021-04-29 09:14:42', NULL, '2021-04-27 09:14:42', '2021-04-27 09:14:42'),
(135, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', '80.00', 1, 'YR4', 36, NULL, NULL, NULL, NULL, '2021-04-29 09:59:42', NULL, '2021-04-27 09:59:42', '2021-04-27 09:59:42'),
(142, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', '80.00', 1, 'YR4', 38, NULL, NULL, NULL, NULL, '2021-04-30 10:16:34', NULL, '2021-04-28 10:16:34', '2021-04-28 10:16:34'),
(140, 22, 'White Rose Flower', '2/FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 112, 'Small', '80.00', 1, 'WRE4', 39, NULL, NULL, NULL, NULL, '2021-04-30 09:58:41', NULL, '2021-04-28 09:58:41', '2021-04-28 09:58:41'),
(144, 21, 'Yellow Rose Flower', '2/bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 109, 'Small', '80.00', 1, 'YR4', 40, NULL, NULL, NULL, NULL, '2021-04-30 12:33:52', NULL, '2021-04-28 12:33:52', '2021-04-28 12:33:52');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `body_html` text,
  `recipient_id` varchar(60) DEFAULT NULL,
  `sender_id` varchar(60) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `recipient_status` tinyint(1) NOT NULL DEFAULT '1',
  `sender_status` tinyint(1) NOT NULL DEFAULT '1',
  `attachment` varchar(100) DEFAULT NULL,
  `recipient_folder` enum('inbox','sent','trash') DEFAULT 'inbox',
  `sender_folder` enum('inbox','sent','trash') DEFAULT 'sent',
  `read_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `subject`, `body`, `body_html`, `recipient_id`, `sender_id`, `parent_id`, `recipient_status`, `sender_status`, `attachment`, `recipient_folder`, `sender_folder`, `read_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'I am sending this message', 'Thios message is sent', '<p>Thios message is sent</p>', '30', '79', NULL, 1, 1, NULL, 'inbox', 'sent', NULL, '2021-04-01 15:20:48', '2021-04-01 15:20:48', NULL),
(2, 'Hello how is this message', 'Check this message content', '<p>Check this message content</p>', '79', '30', NULL, 1, 1, NULL, 'inbox', 'sent', '2021-04-01 16:33:18', '2021-04-01 15:21:50', '2021-04-01 16:33:18', NULL),
(3, 'Re: Hello how is this message', 'yyyyy', '<p>yyyyy</p>', '30', '79', 2, 1, 1, NULL, 'inbox', 'sent', NULL, '2021-04-01 16:32:43', '2021-04-01 16:32:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `display_order` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `level` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navigations`
--

INSERT INTO `navigations` (`id`, `name`, `parent_id`, `link`, `display_order`, `status`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Header Menu', NULL, NULL, 1, 1, 0, '2021-04-08 08:49:22', '2021-04-08 08:49:22'),
(2, 'Home', 1, '/', 1, 1, 1, '2021-04-08 08:49:44', '2021-04-08 09:07:04'),
(3, 'Shop', 1, '#', 2, 1, 1, '2021-04-08 08:52:11', '2021-04-08 08:52:11'),
(4, 'Gifts', 1, '#', 3, 1, 1, '2021-04-08 08:52:37', '2021-04-08 08:52:37'),
(5, 'Categories', 1, '#', 4, 1, 1, '2021-04-08 08:53:05', '2021-04-08 08:53:05'),
(6, 'Budget', 1, '#', 1, 1, 1, '2021-04-08 08:53:31', '2021-04-08 08:53:31'),
(7, 'For Her', 3, '#', 1, 1, 2, '2021-04-08 08:54:12', '2021-04-08 08:54:12'),
(8, 'For Him', 3, '#', 2, 1, 2, '2021-04-08 08:54:40', '2021-04-08 08:54:40'),
(9, 'For Kids', 3, '#', 3, 1, 2, '2021-04-08 08:55:02', '2021-04-08 08:55:02'),
(10, 'For Babies', 3, '#', 4, 1, 2, '2021-04-08 08:55:31', '2021-04-08 08:55:31'),
(11, 'All', 4, '#', 1, 1, 2, '2021-04-08 08:56:26', '2021-04-08 08:56:26'),
(12, 'Best Sellers', 4, '#', 2, 1, 2, '2021-04-08 08:56:48', '2021-04-08 08:56:48'),
(13, 'Giftboxes', 4, '#', 3, 1, 2, '2021-04-08 08:57:09', '2021-04-08 08:57:09'),
(14, 'Personalized Gifts', 4, '#', 4, 1, 2, '2021-04-08 08:57:39', '2021-04-08 08:57:39'),
(15, 'Gift Cards', 4, '#', 5, 1, 2, '2021-04-08 08:59:50', '2021-04-08 08:59:50'),
(16, 'Barware', 5, '#', 1, 1, 2, '2021-04-08 09:00:32', '2021-04-08 09:00:32'),
(17, 'Gourmet', 5, '#', 2, 1, 2, '2021-04-08 09:00:50', '2021-04-08 09:00:50'),
(18, 'Wine & Spirits', 5, '#', 3, 1, 2, '2021-04-08 09:01:25', '2021-04-08 09:01:25'),
(19, 'Sweets', 5, 'sweets', 4, 1, 2, '2021-04-08 09:01:44', '2021-04-15 09:24:33'),
(20, 'Plants & Flowers', 5, 'plants-flowers', 5, 1, 2, '2021-04-08 09:02:10', '2021-04-15 09:34:18'),
(21, 'Health & Wellness', 5, '#', 6, 1, 2, '2021-04-08 09:02:42', '2021-04-08 09:02:42'),
(22, 'Home', 5, 'home', 7, 1, 2, '2021-04-08 09:02:59', '2021-04-15 08:48:03'),
(23, 'Sustainable', 5, '#', 8, 1, 2, '2021-04-08 09:03:19', '2021-04-08 09:03:19'),
(24, 'Books', 5, 'category/books', 9, 1, 2, '2021-04-08 09:03:33', '2021-04-15 07:31:50'),
(25, 'Apothecary', 5, '#', 10, 1, 2, '2021-04-08 09:04:04', '2021-04-08 09:04:04'),
(26, 'Work From Home', 5, '#', 11, 1, 2, '2021-04-08 09:04:26', '2021-04-08 09:04:26'),
(27, 'Tech & Gadgets', 5, '#', 12, 1, 2, '2021-04-08 09:04:52', '2021-04-08 09:04:52'),
(28, 'Under $50', 6, '#', 1, 1, 2, '2021-04-08 09:05:57', '2021-04-08 09:05:57'),
(29, '$50-100', 6, '#', 2, 1, 2, '2021-04-08 09:06:18', '2021-04-08 09:06:18'),
(30, '$100+', 6, '#', 3, 1, 2, '2021-04-08 09:06:38', '2021-04-08 09:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `occasions`
--

CREATE TABLE `occasions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `occasions`
--

INSERT INTO `occasions` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Canada day', 1, '2021-03-29 09:28:37', '2021-03-29 09:28:37'),
(2, 'Easter Day', 1, '2021-03-29 09:30:46', '2021-03-29 09:30:46'),
(3, 'Thanks Giving Day', 1, '2021-03-29 09:31:16', '2021-03-29 09:31:16'),
(4, 'Victoria Day', 1, '2021-03-29 09:31:40', '2021-03-29 09:31:40'),
(5, 'Anniversary Gifts', 1, '2021-03-29 09:32:02', '2021-03-29 09:32:02'),
(6, 'Birthday Gifts', 1, '2021-03-29 09:32:15', '2021-03-29 09:32:15'),
(7, 'House Warming', 1, '2021-03-29 09:32:26', '2021-03-29 09:32:26'),
(8, 'New Baby', 1, '2021-03-29 09:32:43', '2021-03-29 09:32:43'),
(9, 'Wedding Gifts', 1, '2021-03-29 09:33:00', '2021-03-29 09:33:00'),
(10, 'Father\'s Day', 1, '2021-03-29 09:33:24', '2021-03-29 09:33:24'),
(11, 'Mother\'s Day', 1, '2021-03-29 09:33:36', '2021-03-29 09:33:36'),
(12, 'Congratulations', 1, '2021-03-29 09:34:32', '2021-03-29 09:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `occasion_product`
--

CREATE TABLE `occasion_product` (
  `id` int(11) NOT NULL,
  `occasion_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(31, 12, 24);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `ipaddress` varchar(50) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `grand_total` decimal(8,2) NOT NULL,
  `transaction_id` varchar(15) DEFAULT NULL,
  `payment_method` varchar(25) DEFAULT NULL,
  `payment_status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `invoice_id` varchar(20) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cart_id`, `ipaddress`, `status`, `user_id`, `grand_total`, `transaction_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`, `invoice_id`) VALUES
(1, 6, NULL, 1, NULL, '1135.00', NULL, NULL, 1, '2021-04-20 10:30:10', '2021-04-20 10:30:10', ''),
(2, 6, NULL, 1, NULL, '1135.00', NULL, NULL, 1, '2021-04-20 10:36:58', '2021-04-20 10:36:58', ''),
(3, 6, NULL, 1, NULL, '1380.00', NULL, NULL, 1, '2021-04-20 10:56:44', '2021-04-20 10:56:44', ''),
(4, 6, NULL, 1, NULL, '1380.00', NULL, NULL, 1, '2021-04-20 10:57:43', '2021-04-20 10:57:43', ''),
(5, 6, NULL, 1, NULL, '1380.00', NULL, NULL, 1, '2021-04-20 10:58:43', '2021-04-20 10:58:43', ''),
(6, 7, NULL, 1, NULL, '490.00', NULL, NULL, 1, '2021-04-20 12:15:01', '2021-04-20 12:15:01', ''),
(7, 8, NULL, 1, NULL, '245.00', NULL, NULL, 1, '2021-04-20 12:21:02', '2021-04-20 12:21:02', ''),
(8, 9, NULL, 1, NULL, '300.00', NULL, NULL, 1, '2021-04-20 13:02:55', '2021-04-20 13:02:55', ''),
(9, 10, NULL, 1, NULL, '45.00', NULL, NULL, 1, '2021-04-20 13:17:45', '2021-04-20 13:17:45', ''),
(10, 11, NULL, 1, NULL, '90.00', NULL, NULL, 1, '2021-04-20 13:22:19', '2021-04-20 13:22:19', ''),
(11, 13, NULL, 1, NULL, '145.00', NULL, NULL, 1, '2021-04-21 05:27:35', '2021-04-21 05:27:35', '1'),
(12, 14, NULL, 1, NULL, '490.00', NULL, NULL, 1, '2021-04-21 05:29:49', '2021-04-21 05:29:49', '1'),
(13, 15, NULL, 1, NULL, '245.00', NULL, NULL, 1, '2021-04-21 05:40:08', '2021-04-21 05:40:08', '1'),
(14, 16, NULL, 1, NULL, '690.00', NULL, NULL, 1, '2021-04-21 05:49:27', '2021-04-21 05:49:27', '1'),
(15, 16, NULL, 1, NULL, '690.00', NULL, NULL, 1, '2021-04-21 05:52:29', '2021-04-21 05:52:29', '1'),
(16, 19, NULL, 1, NULL, '435.00', NULL, NULL, 1, '2021-04-21 12:39:49', '2021-04-21 12:39:49', '1'),
(17, 19, NULL, 1, NULL, '435.00', NULL, NULL, 1, '2021-04-21 12:49:04', '2021-04-21 12:49:04', '1'),
(18, 20, NULL, 1, NULL, '145.00', NULL, NULL, 1, '2021-04-21 12:59:11', '2021-04-21 12:59:11', '1'),
(19, 21, NULL, 1, NULL, '145.00', NULL, NULL, 1, '2021-04-21 13:28:10', '2021-04-21 13:28:10', '1'),
(20, 29, NULL, 1, NULL, '80.00', NULL, NULL, 1, '2021-04-27 05:25:21', '2021-04-27 05:25:21', '1'),
(21, 31, NULL, 1, NULL, '240.00', NULL, NULL, 1, '2021-04-27 07:04:16', '2021-04-27 07:04:16', '1'),
(22, 35, NULL, 1, NULL, '80.00', NULL, NULL, 1, '2021-04-27 09:33:19', '2021-04-27 09:33:19', '1');

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
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `seo_title` varchar(225) NOT NULL,
  `seo_description` varchar(225) NOT NULL,
  `seo_keyword` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `content`, `slug`, `picture`, `published`, `seo_title`, `seo_description`, `seo_keyword`, `created_at`, `updated_at`) VALUES
(1, 'page', 'page content', 'page', 'Q9fGpqZJ2g9OIVStnKkcI79MyyJ98A.png', 1, 'page', 'page', 'page', '2021-02-27 17:50:56', '2021-03-30 14:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `excerpt` text,
  `content` text,
  `picture` varchar(100) DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `tags` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `excerpt`, `content`, `picture`, `published`, `tags`, `created_at`, `updated_at`) VALUES
(1, 30, 'Days of Your Product', 'days-of-your-product', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</span>', 'YsNA7LTCbBbQ5ZWQMrMV476VXgZWH4.png', 1, 'article,gifts', '2021-02-05 09:18:24', '2021-03-30 13:09:23'),
(5, 30, 'Kid Friendly', 'kid-friendly', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', NULL, 'jxVUz6PWE3pylldVgerOkJRQ038P47.png', 1, 'gifts', '2021-02-05 12:40:29', '2021-03-30 13:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `post_topic`
--

CREATE TABLE `post_topic` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_topic`
--

INSERT INTO `post_topic` (`id`, `post_id`, `topic_id`) VALUES
(1, 10, 1),
(2, 10, 4),
(3, 1, 4),
(4, 5, 1),
(6, 6, 4);

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
  `description` text,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `picture` varchar(100) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `seo_title` varchar(225) DEFAULT NULL,
  `seo_description` text,
  `seo_keyword` text,
  `tag` text,
  `weight` decimal(10,0) NOT NULL DEFAULT '0',
  `width` decimal(10,0) DEFAULT NULL,
  `height` decimal(10,0) DEFAULT NULL,
  `breadth` decimal(10,0) DEFAULT NULL,
  `shopping_category_id` int(11) DEFAULT NULL,
  `attribute_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `sku`, `shipping_id`, `store_id`, `created_at`, `updated_at`, `description`, `published`, `picture`, `type_id`, `seo_title`, `seo_description`, `seo_keyword`, `tag`, `weight`, `width`, `height`, `breadth`, `shopping_category_id`, `attribute_id`) VALUES
(12, 'Red Roses', 'red-roses', 'RR3', NULL, 1, '2021-04-22 09:31:44', '2021-04-23 06:53:17', 'Red roses also stand for passion, true love, romance, and desire. The red rose is a classic “I Love You” rose, making it a popular choice for Valentine\'s Day', 1, 'XQR0BVdcANtn4Pdp8UDAADOtgpJS9s.png', 6, 'Red Roses', 'Red Roses', 'Red Roses', 'Red Roses', '23', '12', '23', '12', NULL, NULL),
(13, 'Wall Art Painting', 'wall-art-painting', 'WAP', NULL, 1, '2021-04-22 09:51:16', '2021-04-22 09:51:16', 'a picture or design painted either directly on plastered walls and ceilings or on canvas, paper, or some other material that is attached to an architectural surface.', 1, 'NLagWxtuS91XBqpJd33fj5fKzJI2Yy.png', 4, 'Wall Decor Painting', 'Wall Decor Painting', 'Wall Decor Painting', 'Wall Decor Painting', '12', '23', '34', '45', NULL, NULL),
(16, 'Titan', 'titan', 'TT1', NULL, 1, '2021-04-23 07:35:13', '2021-04-23 07:35:13', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 'td8IsTe9Occ0L5WoBjvx27txPhmJ0x.png', 5, 'Clock', 'Clock', 'Clock', 'Clock', '12', '4', '12', '4', NULL, NULL),
(17, 'New Born Baby', 'new-born-baby', 'BB2', NULL, 1, '2021-04-23 07:39:25', '2021-04-23 07:39:25', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 'UAD5z1BhLPncLSjJQzWLGl236r61N5.png', 1, 'New Born Baby', 'New Born Baby', 'New Born Baby', 'New Born Baby', '12', '23', '23', '6', NULL, NULL),
(18, 'Kids Toys', 'kids-toys', 'KT4', NULL, 1, '2021-04-23 07:46:54', '2021-04-23 07:46:54', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 'WjaDKW1Kz7cobtvVWniQ4M4bDo9JhX.png', 3, 'Kid Toy', 'Kid Toy', 'Kid Toy', 'Kid Toy', '22', '22', '4', '4', NULL, NULL),
(19, 'Story Book', 'story-book', 'SB1', NULL, 1, '2021-04-23 09:01:45', '2021-04-23 09:01:45', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 'L53pJGb2OtfZFVuNYhl2Z35luh08DY.png', 7, 'Book', 'Book', 'Book', 'Book', '23', '12', '23', '12', NULL, NULL),
(20, 'Work From Home stickers', 'work-from-home-stickers', 'WFH', NULL, 1, '2021-04-23 09:06:51', '2021-04-23 09:06:51', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 'ZcXS61o9paDF5weikdGpluwGDYgiy0.png', 7, 'Work From Home', 'Work From Home', 'Work From Home', 'Work From Home', '33', '23', '2', '2', NULL, NULL),
(21, 'Yellow Rose Flower', 'yellow-rose-flower', 'YR4', NULL, 1, '2021-04-23 09:12:44', '2021-04-23 09:12:44', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 'lArdsXT6HNW384YzsgopARDj9KMAxB.png', 6, 'Yellow Rose Flower', 'Yellow Rose Flower', 'Yellow Rose Flower', 'Yellow Rose Flower', '12', '24', '17', '2', NULL, NULL),
(22, 'White Rose Flower', 'white-rose-flower', 'WRE4', NULL, 1, '2021-04-23 09:19:03', '2021-04-23 09:19:03', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 'h0MlGWLxP9TG3NKJCpbe1eqIpKqIQD.png', 6, 'White Rose Flower', 'White Rose Flower', 'White Rose Flower', 'White Rose Flower', '12', '14', '8', '19', NULL, NULL),
(23, 'Orange Rose Flower', 'orange-rose-flower', 'OR3', NULL, 1, '2021-04-23 09:29:22', '2021-04-23 09:29:22', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 'xlAXbEWU9KrHBnG7zUR39lUuM0LCrf.png', 6, 'Orange Flower', 'Orange Flower', 'Orange Flower', 'Orange Flower', '12', '23', '2', '12', NULL, NULL),
(24, 'Pink Rose Flower', 'pink-rose-flower', 'PRF', NULL, 1, '2021-04-23 09:38:25', '2021-04-23 09:38:25', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 'yDl3lEzM1JmO3aIMcFi2tymcVWzIu2.png', 3, 'Pink Roses', 'Pink Roses', 'Pink Roses', 'Pink Roses', '23', '12', '14', '15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_related`
--

CREATE TABLE `product_related` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `related_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(34, 24, 22);

-- --------------------------------------------------------

--
-- Table structure for table `product_shopping_category`
--

CREATE TABLE `product_shopping_category` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `shopping_category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(9, 16, 13),
(10, 17, 12),
(11, 18, 12),
(12, 19, 16),
(13, 20, 19),
(14, 20, 16),
(15, 21, 12),
(16, 22, 12),
(17, 22, 21),
(18, 23, 12),
(19, 23, 22),
(20, 23, 21);

-- --------------------------------------------------------

--
-- Table structure for table `product_similar`
--

CREATE TABLE `product_similar` (
  `id` int(11) NOT NULL,
  `similar_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `slug` varchar(70) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(8, 'Kitchen and Dinning', 'kitchen-and-dinning', 1, '2021-03-29 09:44:09', '2021-03-29 09:44:09');

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
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `attribute_id` int(10) DEFAULT '0',
  `attribute_value` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `name`, `price`, `description`, `picture`, `stock`, `type`, `published`, `attribute_id`, `attribute_value`, `created_at`, `updated_at`) VALUES
(50, 1, 'Small', '145', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'uuiQWesw2mZdWAZrZLgFoxEv7eRKSy.png', 6, NULL, 1, 1, NULL, '2021-04-15 09:21:27', '2021-04-15 09:21:27'),
(58, 5, 'asdf', '34', 'fdg', 'EyYGU2DJD7RxEO38WqNGQZk2cGKMpe.png', 16, NULL, 1, 1, NULL, '2021-04-22 06:54:54', '2021-04-22 06:54:54'),
(63, 6, 'Medium', '23', 'A red rose is an expression of love. Red roses usually show deep feelings, like love, longing, or desire. Red roses can also be used to show respect, admiration, or devotion. A deep red rose can be used to show regret and sorrow.', 'y5geW1JcOqkiQqqiYaObmRaAeGq0XO.png', 3, NULL, 1, 1, NULL, '2021-04-22 07:05:23', '2021-04-22 07:05:23'),
(64, 6, 'small', '10', 'A red rose is an expression of love. Red roses usually show deep feelings, like love, longing, or desire. Red roses can also be used to show respect, admiration, or devotion. A deep red rose can be used to show regret and sorrow.', 'FdWjHrwQvalcXMYSnT0yMzYlMGzg1b.png', 6, NULL, 1, 1, NULL, '2021-04-22 07:05:23', '2021-04-22 07:05:23'),
(65, 7, 'Large', '50', 'A red rose is an expression of love. Red roses usually show deep feelings, like love, longing, or desire. Red roses can also be used to show respect, admiration, or devotion. A deep red rose can be used to show regret and sorrow.', '7MsWBcyDAwn98GbSWqT6VaygbcnPQ2.png', 1, NULL, 1, 1, NULL, '2021-04-22 07:58:27', '2021-04-22 07:58:27'),
(66, 7, 'Medium', '40', 'A red rose is an expression of love. Red roses usually show deep feelings, like love, longing, or desire. Red roses can also be used to show respect, admiration, or devotion. A deep red rose can be used to show regret and sorrow.', 'ANr4TEK1JCNdZe268kFTNkQ9T34yw9.png', 4, NULL, 1, 4, NULL, '2021-04-22 07:58:27', '2021-04-22 07:58:27'),
(67, 8, 'Large', '50', 'A red rose is an expression of love. Red roses usually show deep feelings, like love, longing, or desire. Red roses can also be used to show respect, admiration, or devotion. A deep red rose can be used to show regret and sorrow.', 'yGphXtCeDQ52l1ihpjYi9YRBggRdPN.png', 1, NULL, 1, 1, NULL, '2021-04-22 07:59:44', '2021-04-22 07:59:44'),
(68, 8, 'Medium', '40', 'A red rose is an expression of love. Red roses usually show deep feelings, like love, longing, or desire. Red roses can also be used to show respect, admiration, or devotion. A deep red rose can be used to show regret and sorrow.', '8RKUnGf3QxifJxsBvE9cU7jUvmYslI.png', 4, NULL, 1, 4, NULL, '2021-04-22 07:59:44', '2021-04-22 07:59:44'),
(73, 9, 'Medium', '40', 'A red rose is an expression of love. Red roses usually show deep feelings, like love, longing, or desire. Red roses can also be used to show respect, admiration, or devotion. A deep red rose can be used to show regret and sorrow.', 'hCyVRI0PNSzPxZjOIOsRrWNEXuVLgr.png', 6, NULL, 1, 4, NULL, '2021-04-22 08:15:47', '2021-04-22 08:15:47'),
(74, 9, 'Small', '25', 'A red rose is an expression of love. Red roses usually show deep feelings, like love, longing, or desire. Red roses can also be used to show respect, admiration, or devotion. A deep red rose can be used to show regret and sorrow.', 'wKkYo8GIn8IBPhw8mRvAmcSG5UfbiL.png', 12, NULL, 1, 1, NULL, '2021-04-22 08:15:47', '2021-04-22 08:15:47'),
(77, 2, 'Large', '245', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'pZGGEc67drcxwbAvYXLAcWFcTtfSmh.png', 1, NULL, 1, 1, NULL, '2021-04-22 09:26:35', '2021-04-22 09:26:35'),
(81, 13, 'Large', '100', 'a picture or design painted either directly on plastered walls and ceilings or on canvas, paper, or some other material that is attached to an architectural surface.', 'qlNZt0msLDzSrdwd4w0JOzuFlFRsH9.png', 7, NULL, 1, 4, NULL, '2021-04-22 09:51:16', '2021-04-22 09:51:16'),
(82, 13, 'Medium', '80', 'a picture or design painted either directly on plastered walls and ceilings or on canvas, paper, or some other material that is attached to an architectural surface.', 'uh7RUYM9DdQgOLGYLN16HmxM3F8NtV.png', 8, NULL, 1, 4, NULL, '2021-04-22 09:51:16', '2021-04-22 09:51:16'),
(83, 13, 'Small', '20', 'a picture or design painted either directly on plastered walls and ceilings or on canvas, paper, or some other material that is attached to an architectural surface.', 'AjCU2gQknzOhWFXsGb4X2RJ2cDw6Ec.png', 2, NULL, 1, 4, NULL, '2021-04-22 09:51:16', '2021-04-22 09:51:16'),
(87, 12, 'Large', '50', 'Red roses also stand for passion, true love, romance, and desire. The red rose is a classic “I Love You” rose, making it a popular choice for Valentine\'s Day', 'o1aZqUOsk13TV2fLCRnwYHQ0bcB7X1.png', 2, NULL, 1, 4, NULL, '2021-04-23 06:53:17', '2021-04-23 06:53:17'),
(88, 12, 'Medium', '40', 'Red roses also stand for passion, true love, romance, and desire. The red rose is a classic “I Love You” rose, making it a popular choice for Valentine\'s Day', '96hpDPjfaF5RlIf3RqbyiBGybq6B1e.png', 3, NULL, 1, 4, NULL, '2021-04-23 06:53:17', '2021-04-23 06:53:17'),
(89, 12, 'Small', '20', 'Red roses also stand for passion, true love, romance, and desire. The red rose is a classic “I Love You” rose, making it a popular choice for Valentine\'s Day', 'DAODpkPnHLfMqlUV4uw0zIFBImGWW0.png', 6, NULL, 1, 4, NULL, '2021-04-23 06:53:17', '2021-04-23 06:53:17'),
(91, 14, 'Medium', '80', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'cBKPFx38WTjmXlqZaDrHhr8dXxIn5q.png', 2, NULL, 1, 4, NULL, '2021-04-23 07:20:56', '2021-04-23 07:20:56'),
(93, 15, 'Medium', '50', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'WdfyrI6RS8TYMkvf88Lv1yDZYQapum.png', 1, NULL, 1, 4, NULL, '2021-04-23 07:32:00', '2021-04-23 07:32:00'),
(94, 15, 'Small', '25', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'toYIAXkznF3mFMnrSNTgPtLSz50Q5u.png', 5, NULL, 1, 4, NULL, '2021-04-23 07:32:00', '2021-04-23 07:32:00'),
(95, 16, 'Large', '100', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'oTsrIIY2cIBptIuHUs9fYT9TJoooi3.png', 2, NULL, 1, 4, NULL, '2021-04-23 07:35:13', '2021-04-23 07:35:13'),
(96, 16, 'Medium', '50', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'OQU9H7boLBQ9YMG3bpquTxE2Z8xmWh.png', 1, NULL, 1, 4, NULL, '2021-04-23 07:35:13', '2021-04-23 07:35:13'),
(97, 16, 'Small', '25', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'MFcGaoJm7hCeOszH64lDgFFcKQYdBu.png', 5, NULL, 1, 4, NULL, '2021-04-23 07:35:13', '2021-04-23 07:35:13'),
(98, 17, 'Big', '100', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '8EFWxFNCJ0lU1pSq9TBOP6xyHKdNS9.png', 1, NULL, 1, 1, NULL, '2021-04-23 07:39:25', '2021-04-23 07:39:25'),
(99, 17, 'Medium', '80', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, 6, NULL, 1, 1, NULL, '2021-04-23 07:39:25', '2021-04-23 07:39:25'),
(100, 17, 'Small', '50', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '4dxwQoD8UrIKHoFYVminYpKXtaHEop.png', 1, NULL, 1, 4, NULL, '2021-04-23 07:39:25', '2021-04-23 07:39:25'),
(101, 18, 'Big', '80', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'k4rG3qA2gwgITkEChgnWa4Ksrw9nfV.png', 2, NULL, 1, 4, NULL, '2021-04-23 07:46:54', '2021-04-23 07:46:54'),
(102, 18, 'Medium', '75', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2EFJZZckOSVUojvgnjwAQCxnMXxmDv.png', 2, NULL, 1, 4, NULL, '2021-04-23 07:46:54', '2021-04-23 07:46:54'),
(103, 18, 'small', '25', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'g0JiTCImvOOALIATtO34PIzfNB4Ujh.png', 3, NULL, 1, 4, NULL, '2021-04-23 07:46:54', '2021-04-23 07:46:54'),
(104, 19, 'Big', '67', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '0mxTExllJYl1F1xg9fFQMDdIiqqO9t.png', 2, NULL, 1, 4, NULL, '2021-04-23 09:01:45', '2021-04-23 09:01:45'),
(105, 20, 'Big', '45', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'XnDCsKelH6TcNoHTNbdXRfBS6Uvpge.png', 12, NULL, 1, 1, NULL, '2021-04-23 09:06:51', '2021-04-23 09:06:51'),
(106, 20, 'Small', '25', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'JLVjPhWdTrpCwyn3SW3JnD2OMKvslG.png', 4, NULL, 1, 0, NULL, '2021-04-23 09:06:51', '2021-04-23 09:06:51'),
(107, 21, 'Big', '134', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '038eYIc5D7t2j6S5x9tMfxRDBKwxXR.png', 2, NULL, 1, 4, NULL, '2021-04-23 09:12:44', '2021-04-23 09:12:44'),
(108, 21, 'Medium', '100', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'sLHFMIkmD5TFmhBO47lRoYKe92acTx.png', 2, NULL, 1, 4, NULL, '2021-04-23 09:12:44', '2021-04-23 09:12:44'),
(109, 21, 'Small', '80', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'bmh4k5tBEWurYVogYp39aFOwnesVKC.png', 9, NULL, 1, 4, NULL, '2021-04-23 09:12:44', '2021-04-23 09:12:44'),
(110, 22, 'Big', '200', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'X2OYVsivRynl9T3Ac7PnwsuZTOCyOd.png', 4, NULL, 1, 4, NULL, '2021-04-23 09:19:03', '2021-04-23 09:19:03'),
(111, 22, 'Medium', '180', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'jUvRQoQaItIrImjgTmk6LpOdBooJGB.png', 6, NULL, 1, 4, NULL, '2021-04-23 09:19:03', '2021-04-23 09:19:03'),
(112, 22, 'Small', '80', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'FFW3RTpppV5TWTA2njXvnx5vaKyKNn.png', 3, NULL, 1, 4, NULL, '2021-04-23 09:19:03', '2021-04-23 09:19:03'),
(113, 23, 'Big', '150', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'yfENhuyS7NEpSOysP4NliO2T2qH1KL.png', 4, NULL, 1, 4, NULL, '2021-04-23 09:29:22', '2021-04-23 09:29:22'),
(114, 23, 'Medium', '23', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '9z2w0AK0XWcc13tqrY0RW9n2od1Lv5.png', 2, NULL, 1, 4, NULL, '2021-04-23 09:29:22', '2021-04-23 09:29:22'),
(118, 24, 'Big', '150', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'VZLoO2K8gmgQzq1wTJnF6wiM6m5WS3.png', 6, NULL, 1, 1, NULL, '2021-04-23 09:47:07', '2021-04-23 09:47:07'),
(119, 24, 'Medium', '50', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '7xwq5cwovAg3paclmBqOGECtgt4w9d.png', 5, NULL, 1, 4, NULL, '2021-04-23 09:47:07', '2021-04-23 09:47:07'),
(120, 24, 'Small', '25', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '8662HczsxZkqsnlxBQjMlV1NGMrlk8.png', 6, NULL, 1, 4, NULL, '2021-04-23 09:47:07', '2021-04-23 09:47:07');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `description` text,
  `days` int(11) NOT NULL,
  `cut_off` time NOT NULL,
  `shipping_policy_id` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `delivery_date` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `charge` decimal(10,0) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `name`, `short_description`, `description`, `days`, `cut_off`, `shipping_policy_id`, `priority`, `delivery_date`, `status`, `charge`, `created_at`, `updated_at`) VALUES
(11, 'Express Shipping', 'Typically Ships next Day', NULL, 1, '02:33:00', 1, 1, 1, 1, '34', '2021-03-29 07:31:10', '2021-03-29 09:50:01'),
(12, 'Standard Shipping', 'Ships In 3-7 Business Days', NULL, 2, '05:06:00', 1, 3, 1, 1, '23', '2021-03-29 07:32:26', '2021-03-29 09:50:18');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(32, 35, 'trghrt', 'trhry', '2021-03-30 11:18:36', '2021-03-30 11:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_categories`
--

CREATE TABLE `shopping_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `parent_id` int(11) DEFAULT NULL,
  `display_order` int(11) NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(6, 'For Babies', 1, NULL, 5, 'for-babies', '2021-03-29 09:22:18', '2021-03-30 13:05:12');

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
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `picture`, `title`, `description`, `link`, `button_text`, `display_order`, `slider_type`, `status`, `created_at`, `updated_at`) VALUES
(3, 'jZG8jxsxL52kn5NQYjTnRyg9fEtWaj.png', 'Giftty', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum is simply dummy text of the printing', 'Giftty', 1, 'home', 1, '2021-02-08 08:08:17', '2021-04-07 12:23:15'),
(4, 'X7HhOYplqD1iknkzL8H1XIDE0bxZWd.png', 'Gifts', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum is simply dummy text', 'Gift', 2, 'home', 0, '2021-03-05 13:56:28', '2021-04-07 12:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `social_medias`
--

CREATE TABLE `social_medias` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_medias`
--

INSERT INTO `social_medias` (`id`, `name`, `link`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Instagram', 'https://www.instagram.com', '7mjES2oGNMNt6oCUaMgFJJOTk9BPLP.png', 1, '2021-02-18 14:24:03', '2021-03-30 14:15:07'),
(3, 'Face Book', 'https://www.facebook.com', 'fKQrT7iab4MIS53SYbExlzFQonGTx0.png', 1, '2021-03-30 13:53:45', '2021-03-30 13:53:45');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `description` text,
  `website` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `user_id`, `vendor_category_id`, `name`, `store_email`, `slug`, `address`, `city`, `postalcode`, `province`, `phone`, `mobile`, `logo`, `description`, `website`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 'Aquva', 'aquvashop@gmail.com', 'aquva', NULL, 'mentobia', '345-667', 'MB', '978-673-5673', '987-654-3322', 'g3W5fYzkhrsrfjdtgaWZhWN0G0odnf.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'aquva book', 1, '2021-04-12 08:40:46', '2021-04-12 08:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `name`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'ancelindigital@gmail.com', 1, '2021-04-26 07:07:39', '2021-04-26 07:07:39');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `role_id` int(11) NOT NULL DEFAULT '1',
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `bio` text,
  `phone` varchar(15) NOT NULL,
  `verified` tinyint(1) DEFAULT '0',
  `remember_token` varchar(50) DEFAULT NULL,
  `user_type` enum('admin','vendor','customer','staff','user') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `address` text,
  `province` int(11) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `postalcode` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `role_id`, `email`, `password`, `status`, `bio`, `phone`, `verified`, `remember_token`, `user_type`, `created_at`, `updated_at`, `picture`, `address`, `province`, `city`, `postalcode`) VALUES
(1, 'Admin', 'Giftty', 1, 'admin@giftty.ca', '$2y$10$GT4vOkCCiJFKxnikdGlDnOW4VCw5IIcphdqiYnOAkqMBHN3QXkwQe', 1, 'Giftty Admin', '', 0, NULL, 'admin', '2021-04-12 08:23:38', '2021-04-12 08:23:38', NULL, NULL, NULL, NULL, NULL),
(2, 'Cesario', NULL, 1, 'aquva@gmail.com', '$2y$10$ZuriES9guZpyz9hyctUxeubw/hGN7BdUaOCYLZNc1e78zlLfWnIe.', 1, 'winnepeg', '978-673-5673', 0, NULL, 'vendor', '2021-04-12 08:40:46', '2021-04-12 08:42:33', NULL, NULL, NULL, NULL, NULL),
(3, 'ancel', 'jose', 1, 'ancel@gmail.com', '$2y$10$tlNuEvnCaywZsoJLVLT0w.GwFX65V3BAmXc1WOO9ifSTms/euABRi', 1, NULL, '7678767876', 1, NULL, 'customer', '2021-04-26 10:48:53', '2021-04-26 10:48:53', NULL, 'chittarikkal', 1, 'ontario', '678899');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_categories`
--

CREATE TABLE `vendor_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_policy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
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
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `color_product`
--
ALTER TABLE `color_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `discount_user`
--
ALTER TABLE `discount_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `occasion_product`
--
ALTER TABLE `occasion_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post_topic`
--
ALTER TABLE `post_topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product_related`
--
ALTER TABLE `product_related`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product_shopping_category`
--
ALTER TABLE `product_shopping_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_similar`
--
ALTER TABLE `product_similar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `shipping_faq`
--
ALTER TABLE `shipping_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `shopping_categories`
--
ALTER TABLE `shopping_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendor_categories`
--
ALTER TABLE `vendor_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
