-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2024 at 04:27 PM
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
(1, NULL, 10, 'انتخاب کنید:', 'noe_moamele', '2024-10-08 10:16:09', '2024-10-16 05:28:28'),
(2, 1, 11, 'فروش مسکونی', 'f-manzel', '2024-10-08 10:16:09', '2024-10-16 05:29:15'),
(3, 1, 12, 'فروش اداری و تجاری', 'f-tejari', '2024-10-16 05:34:33', '2024-10-16 05:34:33'),
(4, 1, 13, 'اجاره مسکونی', 'e-manzel', '2024-10-16 05:38:28', '2024-10-16 05:38:28'),
(5, 1, 14, 'اجاره اداری و تجاری', 'e-tejari', '2024-10-16 05:39:05', '2024-10-16 05:39:05'),
(6, 1, 15, 'اجاره کوتاه مدت', 'e-kotah', '2024-10-16 05:40:36', '2024-10-16 05:40:36'),
(7, 1, 16, 'پروژه ساخت و ساز', 'sakht', '2024-10-16 05:42:14', '2024-10-16 05:42:14'),
(8, NULL, 20, 'انتخاب ملک', 'noe_melk', '2024-10-16 05:44:04', '2024-10-16 05:44:04'),
(9, 8, 11, 'آپارتمان', 'f-aparteman', '2024-10-16 13:28:09', '2024-10-16 13:28:09'),
(10, 8, 11, 'خانه و ویلا', 'f-khaneh', '2024-10-16 10:03:22', '2024-10-16 10:03:22'),
(11, 8, 11, 'باغ و زمین', 'f-zamin', '2024-10-16 10:03:51', '2024-10-16 10:03:51'),
(12, 8, 12, 'مغازه و غرفه', 'f-maghaze', '2024-10-16 10:04:23', '2024-10-16 10:04:23'),
(13, 8, 12, 'دفتر کار، اتاق اداری و مطب', 'f-daftar', '2024-10-16 10:05:19', '2024-10-16 10:05:19'),
(14, 8, 12, 'صنعتی و کشاورزی', 'f-bagh', '2024-10-16 10:06:31', '2024-10-16 10:06:31'),
(15, 8, 13, 'آپارتمان', 'e-aparteman', '2024-10-16 13:28:09', '2024-10-16 13:28:09'),
(16, 8, 13, 'خانه و ویلا', 'e-khaneh', '2024-10-16 10:03:22', '2024-10-16 10:03:22'),
(17, 8, 14, 'مغازه و غرفه', 'e-maghaze', '2024-10-16 10:04:23', '2024-10-16 10:04:23'),
(18, 8, 14, 'دفتر کار، اتاق اداری و مطب', 'e-daftar', '2024-10-16 10:05:19', '2024-10-16 10:05:19'),
(19, 8, 14, 'صنعتی و کشاورزی', 'e-sanati', '2024-10-16 10:06:31', '2024-10-16 10:06:31'),
(20, 8, 15, 'آپارتمان', 'ek-aparteman', '2024-10-16 13:28:09', '2024-10-16 13:28:09'),
(21, 8, 15, 'خانه و ویلا', 'ek-khane', '2024-10-16 10:03:22', '2024-10-16 10:03:22'),
(22, 8, 15, 'دفترکار و فضا آموزشی', 'ek-daftar', '2024-10-16 10:05:19', '2024-10-16 10:05:19'),
(23, 8, 16, 'مشارکت', 'mosharekat', NULL, NULL),
(24, 8, 16, 'پیش فروش', 'pish-forosh', NULL, NULL),
(25, NULL, 30, 'انتخاب سن بنا', 'sen-bana', '2024-10-16 10:39:02', '2024-10-16 10:39:02'),
(26, 25, 30, 'نوساز - صفر', 'sen-no', '2024-10-16 10:48:37', '2024-10-16 10:48:37'),
(27, 25, 30, '1', 'seen-1', '2024-10-16 10:49:03', '2024-10-16 10:49:03'),
(28, 25, 30, '2', 'seen-2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 25, 30, '3', 'seen-3', '2024-10-16 10:49:03', '2024-10-16 10:49:03'),
(30, 25, 30, '4', 'seen-4', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 25, 30, '5', 'seen-5', '2024-10-16 10:49:03', '2024-10-16 10:49:03'),
(32, 25, 30, '6', 'seen-6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 25, 30, '7', 'seen-7', '2024-10-16 10:49:03', '2024-10-16 10:49:03'),
(34, 25, 30, '8', 'seen-8', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 25, 30, '9', 'seen-9', '2024-10-16 10:49:03', '2024-10-16 10:49:03'),
(36, 25, 30, '10', 'seen-10', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 25, 30, 'بین 10 تا 15', 'seen-10-15', '2024-10-16 10:49:03', '2024-10-16 10:49:03'),
(38, 25, 30, 'بین 15 تا 20', 'seen-15-20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 25, 30, 'بین 20 تا 25', 'seen-20-25', '2024-10-16 10:49:03', '2024-10-16 10:49:03'),
(40, 25, 30, 'بالای 25', 'seen-25-up', '2024-10-16 10:49:03', '2024-10-16 10:49:03'),
(41, NULL, 40, 'انتخاب طبقه', 'tabaghe', '2024-10-16 10:55:48', '2024-10-16 10:55:48'),
(42, 41, 40, 'زیر همکف', 'tabaghe-zir', '2024-10-16 10:56:29', '2024-10-16 10:56:29'),
(43, 41, 40, 'همکف', 'tabaghe-hamkaf', '2024-10-16 10:57:01', '2024-10-16 10:57:01'),
(44, 41, 40, '1', 'tabaghe-1', '2024-10-16 10:56:29', '2024-10-16 10:56:29'),
(45, 41, 40, '2', 'tabaghe-2', '2024-10-16 10:57:01', '2024-10-16 10:57:01'),
(46, 41, 40, '3', 'tabaghe-3', '2024-10-16 10:56:29', '2024-10-16 10:56:29'),
(47, 41, 40, '4', 'tabaghe-4', '2024-10-16 10:57:01', '2024-10-16 10:57:01'),
(48, 41, 40, '5', 'tabaghe-5', '2024-10-16 10:56:29', '2024-10-16 10:56:29'),
(49, 41, 40, '6', 'tabaghe-6', '2024-10-16 10:57:01', '2024-10-16 10:57:01'),
(50, 41, 40, '7', 'tabaghe-7', '2024-10-16 10:56:29', '2024-10-16 10:56:29'),
(51, 41, 40, '8', 'tabaghe-8', '2024-10-16 10:57:01', '2024-10-16 10:57:01'),
(52, 41, 40, '9', 'tabaghe-9', '2024-10-16 10:56:29', '2024-10-16 10:56:29'),
(53, 41, 40, '10', 'tabaghe-10', '2024-10-16 10:57:01', '2024-10-16 10:57:01'),
(54, NULL, 50, 'کل واحد ها', 'kol_vahed', '2024-10-16 11:22:18', '2024-10-16 11:22:18'),
(55, 54, 50, '1', 'k-vahed-1', '2024-10-16 11:23:16', '2024-10-16 11:23:16'),
(56, 54, 50, '2', 'k-vahed-2', '2024-10-16 11:23:16', '2024-10-16 11:23:16'),
(57, 54, 50, '3', 'k-vahed-3', '2024-10-16 11:23:16', '2024-10-16 11:23:16'),
(58, 54, 50, '4', 'k-vahed-4', '2024-10-16 11:23:16', '2024-10-16 11:23:16'),
(59, 54, 50, '5', 'k-vahed-5', '2024-10-16 11:23:16', '2024-10-16 11:23:16'),
(60, 54, 50, '6', 'k-vahed-6', '2024-10-16 11:23:16', '2024-10-16 11:23:16'),
(61, 54, 50, '7', 'k-vahed-7', '2024-10-16 11:23:16', '2024-10-16 11:23:16'),
(62, 54, 50, '8', 'k-vahed-8', '2024-10-16 11:23:16', '2024-10-16 11:23:16'),
(63, 54, 50, '9', 'k-vahed-9', '2024-10-16 11:23:16', '2024-10-16 11:23:16'),
(64, 54, 50, '10', 'k-vahed-10', '2024-10-16 11:23:16', '2024-10-16 11:23:16'),
(65, 54, 50, '11', 'k-vahed-11', '2024-10-16 11:23:16', '2024-10-16 11:23:16'),
(66, 54, 50, '12', 'k-vahed-12', '2024-10-16 11:23:16', '2024-10-16 11:23:16'),
(67, 54, 50, '13', 'k-vahed-13', '2024-10-16 11:23:16', '2024-10-16 11:23:16'),
(68, 54, 50, '14', 'k-vahed-14', '2024-10-16 11:23:16', '2024-10-16 11:23:16'),
(69, 54, 50, '15', 'k-vahed-15', '2024-10-16 11:23:16', '2024-10-16 11:23:16'),
(70, 54, 50, '16', 'k-vahed-16', '2024-10-16 11:23:16', '2024-10-16 11:23:16'),
(71, 54, 50, '17', 'k-vahed-17', '2024-10-16 11:23:16', '2024-10-16 11:23:16'),
(72, 54, 50, '18', 'k-vahed-18', '2024-10-16 11:23:16', '2024-10-16 11:23:16'),
(73, 54, 50, '19', 'k-vahed-19', '2024-10-16 11:23:16', '2024-10-16 11:23:16'),
(74, 54, 50, '20', 'k-vahed-20', '2024-10-16 11:23:16', '2024-10-16 11:23:16'),
(75, NULL, 60, 'تعداد اتاق', 'otagh', '2024-10-16 11:37:09', '2024-10-16 11:37:09'),
(76, 75, 60, 'بدون اتاق', 'otagh-no', '2024-10-16 11:38:20', '2024-10-16 11:38:20'),
(77, 75, 60, '1', 'otagh-1', '2024-10-16 11:38:20', '2024-10-16 11:38:20'),
(78, 75, 60, '2', 'otagh-2', '2024-10-16 11:38:20', '2024-10-16 11:38:20'),
(79, 75, 60, '3', 'otagh-3', '2024-10-16 11:38:20', '2024-10-16 11:38:20'),
(80, 75, 60, '4', 'otagh-4', '2024-10-16 11:38:20', '2024-10-16 11:38:20'),
(81, 75, 60, '5', 'otagh-5', '2024-10-16 11:38:20', '2024-10-16 11:38:20'),
(82, NULL, 70, 'انتخاب سند', 'sanad', '2024-10-16 11:40:25', '2024-10-16 11:40:25'),
(83, 82, 70, 'شش دانگ - ملکی', 'sanad-6m', '2024-10-16 11:41:14', '2024-10-16 11:41:14'),
(84, 82, 70, 'شش دانگ - اوقاف', 'sanad-6o', '2024-10-16 11:41:14', '2024-10-16 11:41:14'),
(85, 82, 70, 'وکالت', 'sanad-v', '2024-10-16 11:41:14', '2024-10-16 11:41:14'),
(86, 82, 70, 'قولنامه', 'sanad-gh', '2024-10-16 11:41:14', '2024-10-16 11:41:14'),
(87, 82, 70, 'سایر', 'sanad-other', '2024-10-16 11:41:14', '2024-10-16 11:41:14'),
(88, NULL, 80, 'کف پوش', 'kafpoosh', '2024-10-16 11:43:46', '2024-10-16 11:43:46'),
(89, 88, 80, 'سرامیک', 'kaaf-seramik', '2024-10-16 11:44:42', '2024-10-16 11:44:42'),
(90, 88, 80, 'موزاییک', 'kaaf-mozaek', '2024-10-16 11:44:42', '2024-10-16 11:44:42'),
(91, 88, 80, 'پارکت', 'kaaf-parket', '2024-10-16 11:44:42', '2024-10-16 11:44:42'),
(92, 88, 80, 'موکت', 'kaaf-moket', '2024-10-16 11:44:42', '2024-10-16 11:44:42'),
(93, NULL, 90, 'انتخاب جهت', 'jahat', '2024-10-16 11:48:44', '2024-10-16 11:48:44'),
(94, 93, 90, 'شمالی', 'jhat-shomali', '2024-10-16 11:49:30', '2024-10-16 11:49:30'),
(95, 93, 90, 'جنوبی', 'jhat-jonobi', '2024-10-16 11:49:30', '2024-10-16 11:49:30'),
(96, 93, 90, 'دونبش', 'jhat-2n', '2024-10-16 11:49:30', '2024-10-16 11:49:30'),
(97, NULL, 100, 'انتخاب کابینت', 'kabinet', '2024-10-16 11:51:31', '2024-10-16 11:51:31'),
(98, 97, 100, 'mdf', 'kabinet-mdf', '2024-10-16 11:52:02', '2024-10-16 11:52:02'),
(99, 97, 100, 'فلز', 'kabinet-flz', '2024-10-16 11:52:02', '2024-10-16 11:52:02'),
(100, 97, 100, 'چوب', 'kabinet-wood', '2024-10-16 11:52:02', '2024-10-16 11:52:02'),
(101, 97, 100, 'ملامینه', 'kabinet-ml', '2024-10-16 11:52:02', '2024-10-16 11:52:02'),
(102, 97, 100, 'گلاس', 'kabinet-glas', '2024-10-16 11:52:02', '2024-10-16 11:52:02'),
(103, NULL, 110, 'گرمایش', 'hot', '2024-10-16 11:54:50', '2024-10-16 11:54:50'),
(104, 103, 110, 'بخاری', 'hot-bokhari', '2024-10-16 11:55:34', '2024-10-16 11:55:34'),
(105, 103, 110, 'از کف', 'hot-kaf', '2024-10-16 11:55:34', '2024-10-16 11:55:34'),
(106, 103, 110, 'پنل', 'hot-panel', '2024-10-16 11:55:34', '2024-10-16 11:55:34'),
(107, 103, 110, 'شومینه', 'hot-shomine', '2024-10-16 11:55:34', '2024-10-16 11:55:34'),
(108, NULL, 120, 'امتیازات', 'emtiyza', '2024-10-16 11:57:58', '2024-10-16 11:57:58'),
(109, 108, 121, 'همه مستقل', 'emtiyaz-mostaghel', '2024-10-16 12:00:02', '2024-10-16 12:00:02'),
(110, 108, 122, 'آب مشترک', 'emtiyaz-ab', '2024-10-16 12:00:02', '2024-10-16 12:00:02'),
(111, 108, 123, 'برق مشترک', 'emtiyaz-bargh', '2024-10-16 12:00:02', '2024-10-16 12:00:02'),
(112, 108, 124, 'گاز مشترک', 'emtiyaz-gas', '2024-10-16 12:00:02', '2024-10-16 12:00:02'),
(113, NULL, 130, 'انتخاب محل', 'mahal', '2024-10-16 12:03:10', '2024-10-16 12:03:10'),
(114, 113, 130, 'اول قاعم تا 35 متری اول', 'loc-1', '2024-10-16 12:04:05', '2024-10-16 12:04:05'),
(115, 113, 130, '35 متری اول تا 35 متری دوم', 'loc-2', '2024-10-16 12:04:05', '2024-10-16 12:04:05'),
(116, 113, 130, '35 متری دوم تا بوستان قاعم', 'loc-3', '2024-10-16 12:04:05', '2024-10-16 12:04:05'),
(117, 113, 130, 'ایمان', 'loc-4', '2024-10-16 12:04:05', '2024-10-16 12:04:05'),
(118, 113, 130, 'عسکریه', 'loc-5', '2024-10-16 12:04:05', '2024-10-16 12:04:05'),
(119, 113, 130, 'کوشش', 'loc-6', '2024-10-16 12:04:05', '2024-10-16 12:04:05'),
(120, 113, 130, 'خلج', 'loc-7', '2024-10-16 12:04:05', '2024-10-16 12:04:05'),
(121, 113, 130, 'سبحان', 'loc-8', '2024-10-16 12:04:05', '2024-10-16 12:04:05'),
(122, 113, 130, 'ریاضی', 'loc-9', '2024-10-16 12:04:05', '2024-10-16 12:04:05'),
(123, 113, 130, 'نقیبی فرد', 'loc-10', '2024-10-16 12:04:05', '2024-10-16 12:04:05'),
(124, 113, 130, 'شهید دایی', 'loc-11', '2024-10-16 12:04:05', '2024-10-16 12:04:05'),
(125, 113, 130, 'پردیس', 'loc-12', '2024-10-16 12:04:05', '2024-10-16 12:04:05'),
(126, 113, 130, 'صبا غربی', 'loc-13', '2024-10-16 12:04:05', '2024-10-16 12:04:05'),
(127, 113, 130, 'سپاه', 'loc-14', '2024-10-16 12:04:05', '2024-10-16 12:04:05'),
(128, 113, 130, 'شهرک ابوذر', 'loc-15', '2024-10-16 12:04:05', '2024-10-16 12:04:05'),
(129, 113, 130, 'اول صبا تا میدان', 'loc-16', '2024-10-16 12:04:05', '2024-10-16 12:04:05'),
(130, 113, 130, 'میدان صبا تا پایانه اتوبوسرانی', 'loc-17', '2024-10-16 12:04:05', '2024-10-16 12:04:05'),
(131, 113, 130, 'ثامن', 'loc-18', '2024-10-16 12:04:05', '2024-10-16 12:04:05');

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
