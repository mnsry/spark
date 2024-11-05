-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2024 at 11:41 PM
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
(1, NULL, 1, 'فروشندگان', 'froshandegan', NULL, NULL),
(2, 1, 1, 'آپارتمان', 'froshandegan_aparteman', NULL, NULL),
(3, 1, 2, 'ویلایی', 'froshandegan_vilaye', NULL, NULL),
(4, 1, 3, 'مسکونی ( کلنگی|زمین )', 'froshandegan_maskoni', NULL, NULL),
(5, 1, 4, 'مغازه', 'froshandegan_maghaze', NULL, NULL),
(6, 1, 5, 'صنعتی', 'froshandegan_sanati', NULL, NULL),
(7, 1, 6, 'اداری ( اتاق کار )', 'froshandegan_edari', NULL, NULL),
(8, 1, 7, 'زمین تجاری', 'froshandegan_zamin', NULL, NULL),
(9, 1, 8, 'مسکونی - تجاری', 'froshandegan_tejari', NULL, NULL),
(10, 1, 9, 'کسب و کار', 'froshandegan_kasb', NULL, NULL),
(11, 1, 10, 'باغ ویلا', 'froshandegan_bagh', NULL, NULL),
(12, NULL, 2, 'خریداران', 'kharidaran', NULL, NULL),
(13, 12, 1, 'آپارتمان', 'kharidaran_aparteman', NULL, NULL),
(14, 12, 2, 'ویلایی', 'kharidaran_vilaye', NULL, NULL),
(15, 12, 3, 'مسکونی ( کلنگی|زمین )', 'kharidaran_maskoni', NULL, NULL),
(16, 12, 4, 'مغازه', 'kharidaran_maghaze', NULL, NULL),
(17, 12, 5, 'صنعتی', 'kharidaran_sanati', NULL, NULL),
(18, 12, 6, 'اداری ( اتاق کار )', 'kharidaran_edari', NULL, NULL),
(19, 12, 7, 'زمین تجاری', 'kharidaran_zamin', NULL, NULL),
(20, 12, 8, 'مسکونی - تجاری', 'kharidaran_tejari', NULL, NULL),
(21, 12, 9, 'کسب و کار', 'kharidaran_kasb', NULL, NULL),
(22, 12, 10, 'باغ ویلا', 'kharidaran_bagh', NULL, NULL),
(23, NULL, 3, 'موجران', 'mojeran', NULL, NULL),
(24, 23, 1, 'آپارتمان', 'mojeran_aparteman', NULL, NULL),
(25, 23, 2, 'ویلایی', 'mojeran_vilaye', NULL, NULL),
(26, 23, 3, 'مغازه', 'mojeran_maghaze', NULL, NULL),
(27, 23, 4, 'صنعتی', 'mojeran_sanati', NULL, NULL),
(28, 23, 5, 'اداری ( اتاق کار )', 'mojeran_edari', NULL, NULL),
(29, 23, 6, 'باغ ویلا', 'mojeran_bagh', NULL, NULL),
(30, 23, 7, 'سوییت', 'mojeran_soeet', NULL, NULL),
(31, NULL, 4, 'مستاجران', 'mostageran', NULL, NULL),
(32, 31, 1, 'آپارتمان', 'mostageran_aparteman', NULL, NULL),
(33, 31, 2, 'ویلایی', 'mostageran_vilaye', NULL, NULL),
(34, 31, 3, 'مغازه', 'mostageran_maghaze', NULL, NULL),
(35, 31, 4, 'صنعتی', 'mostageran_sanati', NULL, NULL),
(36, 31, 5, 'اداری ( اتاق کار )', 'mostageran_edari', NULL, NULL),
(37, 31, 6, 'باغ ویلا', 'mostageran_bagh', NULL, NULL),
(38, 31, 7, 'سوییت', 'mostageran_soeet', NULL, NULL);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
