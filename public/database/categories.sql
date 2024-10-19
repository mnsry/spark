-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2024 at 11:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spark`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'فروش مسکونی', 'forosh-m', NULL, NULL),
(2, NULL, 2, 'فروش اداری و تجاری', 'forosh-t', NULL, NULL),
(3, NULL, 3, 'اجاره مسکونی', 'ejareh-m', NULL, NULL),
(4, NULL, 4, 'اجاره اداری و تجاری', 'ejareh-t', NULL, NULL),
(5, NULL, 5, 'اجاره کوتاه مدت', 'ejareh-k', NULL, NULL),
(6, NULL, 6, 'پروژه ساخت و ساز', 'forosh-s', NULL, NULL),
(7, 1, 1, 'آپارتمان', 'f-m-aparteman', NULL, NULL),
(8, 1, 2, 'خانه و ویلا', 'f-m-khaneh', NULL, NULL),
(9, 1, 3, 'باغ و زمین', 'f-m-bagh', NULL, NULL),
(10, 2, 1, 'مغازه و غرفه', 'f-t-maghaze', NULL, NULL),
(11, 2, 2, 'دفتر کار، اتاق اداری و مطب', 'f-t-daftar', NULL, NULL),
(12, 2, 3, 'صنعتی و کشاورزی', 'f-t-sanati', NULL, NULL),
(13, 3, 1, 'آپارتمان', 'e-m-aparteman', NULL, NULL),
(14, 3, 2, 'خانه و ویلا', 'e-m-khaneh', NULL, NULL),
(15, 4, 1, 'مغازه و غرفه', 'e-t-maghaze', NULL, NULL),
(16, 4, 2, 'دفتر کار، اتاق اداری و مطب', 'e-t-daftar', NULL, NULL),
(17, 4, 3, 'صنعتی و کشاورزی', 'e-t-sanati', NULL, NULL),
(18, 5, 1, 'آپارتمان', 'e-k-aparteman', NULL, NULL),
(19, 5, 2, 'خانه و ویلا', 'e-k-khane', NULL, NULL),
(20, 5, 3, 'دفترکار و فضا آموزشی', 'e-k-daftar', NULL, NULL),
(21, 6, 1, 'مشارکت', 'f-s-mosharekat', NULL, NULL),
(22, 6, 2, 'پیش فروش', 'f-s-pish-forosh', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
