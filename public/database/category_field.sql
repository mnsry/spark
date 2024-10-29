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
-- Table structure for table `category_field`
--

CREATE TABLE `category_field` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `field_id` int(10) UNSIGNED NOT NULL
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
(7, 108),
(7, 111),
(7, 112),
(7, 113),
(7, 114),
(7, 115),
(7, 116),
(7, 117),
(7, 118),
(7, 119),
(7, 120),
(7, 121),
(7, 122),
(7, 126),
(8, 1),
(8, 4),
(8, 5),
(8, 6),
(8, 7),
(8, 8),
(8, 9),
(8, 11),
(8, 108),
(8, 112),
(8, 113),
(8, 114),
(8, 115),
(8, 116),
(8, 117),
(8, 118),
(8, 121),
(8, 122),
(8, 126),
(9, 5),
(9, 11),
(9, 108),
(9, 114),
(9, 115),
(9, 116),
(9, 117),
(9, 118),
(10, 2),
(10, 5),
(10, 6),
(10, 9),
(10, 11),
(10, 108),
(10, 111),
(10, 114),
(10, 115),
(10, 116),
(10, 117),
(10, 118),
(10, 122),
(11, 4),
(11, 5),
(11, 6),
(11, 11),
(11, 108),
(11, 113),
(11, 114),
(11, 115),
(11, 116),
(11, 117),
(11, 118),
(11, 122),
(11, 126),
(12, 5),
(12, 11),
(12, 108),
(12, 114),
(12, 115),
(12, 116),
(12, 117),
(12, 118),
(13, 2),
(13, 3),
(13, 4),
(13, 6),
(13, 7),
(13, 8),
(13, 9),
(13, 11),
(13, 109),
(13, 110),
(13, 111),
(13, 112),
(13, 113),
(13, 115),
(13, 116),
(13, 117),
(13, 118),
(13, 119),
(13, 120),
(13, 122),
(13, 126),
(14, 4),
(14, 6),
(14, 7),
(14, 8),
(14, 9),
(14, 11),
(14, 109),
(14, 110),
(14, 112),
(14, 113),
(14, 115),
(14, 116),
(14, 117),
(14, 118),
(14, 122),
(14, 126),
(15, 6),
(15, 11),
(15, 109),
(15, 110),
(15, 111),
(15, 115),
(15, 116),
(15, 117),
(15, 118),
(15, 122),
(16, 2),
(16, 4),
(16, 6),
(16, 11),
(16, 109),
(16, 110),
(16, 115),
(16, 116),
(16, 117),
(16, 118),
(16, 122),
(16, 126),
(17, 11),
(17, 115),
(17, 116),
(17, 117),
(17, 118),
(18, 2),
(18, 4),
(18, 11),
(18, 108),
(18, 111),
(18, 112),
(18, 113),
(18, 115),
(18, 116),
(18, 117),
(18, 122),
(19, 4),
(19, 11),
(19, 108),
(19, 112),
(19, 113),
(19, 115),
(19, 116),
(19, 117),
(19, 122),
(20, 11),
(20, 108),
(20, 115),
(20, 116),
(20, 117),
(21, 11),
(21, 108),
(21, 115),
(21, 117),
(22, 11),
(22, 108),
(22, 115),
(22, 117);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_field`
--
ALTER TABLE `category_field`
  ADD PRIMARY KEY (`category_id`,`field_id`),
  ADD KEY `category_field_field_id_foreign` (`field_id`);

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
