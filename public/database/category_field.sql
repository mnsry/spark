-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: services.irn8.chabokan.net:2763
-- Generation Time: Oct 20, 2024 at 11:11 PM
-- Server version: 8.0.29
-- PHP Version: 8.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jeraghe453_michael`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_field`
--

CREATE TABLE `category_field` (
  `category_id` int UNSIGNED NOT NULL,
  `field_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_field`
--

INSERT INTO `category_field` (`category_id`, `field_id`) VALUES
(7, 1),
(7, 2),
(7, 3),
(7, 4),
(7, 5),
(7, 6),
(7, 7),
(7, 8),
(7, 9),
(7, 10),
(7, 11),
(8, 1),
(8, 4),
(8, 5),
(8, 6),
(8, 7),
(9, 5),
(10, 2),
(10, 5),
(10, 6),
(11, 4),
(11, 5),
(11, 6),
(12, 5),
(13, 2),
(13, 3),
(13, 4),
(13, 6),
(13, 7),
(14, 4),
(14, 6),
(14, 7),
(15, 6),
(16, 2),
(16, 4),
(16, 6),
(18, 2),
(18, 4),
(19, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_field`
--
ALTER TABLE `category_field`
  ADD PRIMARY KEY (`field_id`,`category_id`),
  ADD KEY `category_field_category_id_foreign` (`category_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_field`
--
ALTER TABLE `category_field`
  ADD CONSTRAINT `category_field_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `category_field_field_id_foreign` FOREIGN KEY (`field_id`) REFERENCES `fields` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
