-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2024 at 11:03 AM
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
(2, NULL, 2, 'خریداران', 'kharidaran', NULL, NULL),
(3, NULL, 3, 'موجران', 'mojeran', NULL, NULL),
(4, NULL, 4, 'مستاجران', 'mostageran', NULL, NULL),
(5, 1, 1, 'آپارتمان', 'froshandegan_aparteman', NULL, NULL),
(6, 2, 1, 'آپارتمان', 'kharidaran_aparteman', NULL, NULL),
(7, 1, 2, 'ویلایی', 'froshandegan_vilaye', NULL, NULL),
(8, 2, 2, 'ویلایی', 'kharidaran_vilaye', NULL, NULL),
(9, 1, 3, 'مسکونی ( کلنگی،زمین )', 'froshandegan_maskoni', NULL, NULL),
(10, 2, 3, 'مسکونی ( کلنگی،زمین )', 'kharidaran_maskoni', NULL, NULL),
(11, 1, 4, 'مغازه', 'froshandegan_maghaze', NULL, NULL),
(12, 2, 4, 'مغازه', 'kharidaran_maghaze', NULL, NULL),
(13, 1, 5, 'صنعتی', 'froshandegan_sanati', NULL, NULL),
(14, 2, 5, 'صنعتی', 'kharidaran_sanati', NULL, NULL),
(15, 1, 6, 'اداری ( اتاق کار )', 'froshandegan_edari', NULL, NULL),
(16, 2, 6, 'اداری ( اتاق کار )', 'kharidaran_edari', NULL, NULL),
(17, 1, 7, 'زمین تجاری', 'froshandegan_zamin', NULL, NULL),
(18, 2, 7, 'زمین تجاری', 'kharidaran_zamin', NULL, NULL),
(19, 1, 8, 'مسکونی - تجاری', 'froshandegan_tejari', NULL, NULL),
(20, 2, 8, 'مسکونی - تجاری', 'kharidaran_tejari', NULL, NULL),
(21, 1, 9, 'کسب و کار', 'froshandegan_kasb', NULL, NULL),
(22, 2, 9, 'کسب و کار', 'kharidaran_kasb', NULL, NULL),
(23, 1, 10, 'باغ ویلا', 'froshandegan_bagh', NULL, NULL),
(24, 2, 10, 'باغ ویلا', 'kharidaran_bagh', NULL, NULL),
(25, 3, 1, 'آپارتمان', 'mojeran_aparteman', NULL, NULL),
(26, 4, 1, 'آپارتمان', 'mostageran_aparteman', NULL, NULL),
(27, 3, 2, 'ویلایی', 'mojeran_vilaye', NULL, NULL),
(28, 4, 2, 'ویلایی', 'mostageran_vilaye', NULL, NULL),
(29, 3, 3, 'مغازه', 'mojeran_maghaze', NULL, NULL),
(30, 4, 3, 'مغازه', 'mostageran_maghaze', NULL, NULL),
(31, 3, 4, 'صنعتی', 'mojeran_sanati', NULL, NULL),
(32, 4, 4, 'صنعتی', 'mostageran_sanati', NULL, NULL),
(33, 3, 5, 'اداری ( اتاق کار )', 'mojeran_edari', NULL, NULL),
(34, 4, 5, 'اداری ( اتاق کار )', 'mostageran_edari', NULL, NULL),
(35, 3, 6, 'باغ ویلا', 'mojeran_bagh', NULL, NULL),
(36, 4, 6, 'باغ ویلا', 'mostageran_bagh', NULL, NULL),
(37, 3, 7, 'سوییت', 'mojeran_soeet', NULL, NULL);
(38, 4, 7, 'سوییت', 'mostageran_soeet', NULL, NULL);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
