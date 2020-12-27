-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 22, 2020 at 07:24 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `type` tinyint(1) NOT NULL COMMENT '1=module,group=2',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_parent_id_foreign` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `code`, `name`, `route_name`, `parent_id`, `status`, `type`, `created_by`, `updated_by`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 100, 'Accounts', NULL, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(2, 10001, 'Inventory', NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(3, 10002, 'Payeable', NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(4, 10003, 'Receiveable', NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(5, 1000301, 'Vendor', NULL, 4, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(6, 100030101, 'Create', NULL, 5, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(7, 100030102, 'all', NULL, 5, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(8, 200, 'Front Desk', NULL, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(9, 20001, 'Meeting', NULL, 8, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(10, 2000101, 'Greetings', NULL, 9, 1, 0, 1, NULL, NULL, NULL, NULL, NULL),
(11, 200010101, 'create', NULL, 10, 1, 0, 1, NULL, NULL, NULL, NULL, NULL),
(12, 200010102, 'Edit', NULL, 10, 1, 0, 1, NULL, NULL, NULL, NULL, NULL),
(13, 1000101, 'Product', NULL, 2, 1, 0, 1, NULL, NULL, NULL, NULL, NULL),
(14, 10003010101, 'Ns', NULL, 6, 1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(15, 300, 'Invoice parameter', '/invoice-parameter', NULL, 1, 0, 1, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
