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
  `select` enum('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15') DEFAULT '1',
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `select`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 10, '1', 'انتخاب کنید', 'noe_moamele', NULL, NULL),
(2, 1, 11, '1', 'فروش مسکونی', 'f-manzel', NULL, NULL),
(3, 1, 12, '1', 'فروش اداری و تجاری', 'f-tejari', NULL, NULL),
(4, 1, 13, '1', 'اجاره مسکونی', 'e-manzel', NULL, NULL),
(5, 1, 14, '1', 'اجاره اداری و تجاری', 'e-tejari', NULL, NULL),
(6, 1, 15, '1', 'اجاره کوتاه مدت', 'e-kotah', NULL, NULL),
(7, 1, 16, '1', 'پروژه ساخت و ساز', 'sakht', NULL, NULL),
(8, NULL, 20, '2', 'انتخاب ملک', 'noe_melk', NULL, NULL),
(9, 8, 11, '2', 'آپارتمان', 'f-aparteman', NULL, NULL),
(10, 8, 11, '2', 'خانه و ویلا', 'f-khaneh', NULL, NULL),
(11, 8, 11, '2', 'باغ و زمین', 'f-zamin', NULL, NULL),
(12, 8, 12, '2', 'مغازه و غرفه', 'f-maghaze', NULL, NULL),
(13, 8, 12, '2', 'دفتر کار، اتاق اداری و مطب', 'f-daftar', NULL, NULL),
(14, 8, 12, '2', 'صنعتی و کشاورزی', 'f-bagh', NULL, NULL),
(15, 8, 13, '2', 'آپارتمان', 'e-aparteman', NULL, NULL),
(16, 8, 13, '2', 'خانه و ویلا', 'e-khaneh', NULL, NULL),
(17, 8, 14, '2', 'مغازه و غرفه', 'e-maghaze',  NULL, NULL),
(18, 8, 14, '2', 'دفتر کار، اتاق اداری و مطب', NULL, NULL),
(19, 8, 14, '2', 'صنعتی و کشاورزی', 'e-sanati', NULL, NULL),
(20, 8, 15, '2', 'آپارتمان', 'ek-aparteman', NULL, NULL),
(21, 8, 15, '2', 'خانه و ویلا', 'ek-khane', NULL, NULL),
(22, 8, 15, '2', 'دفترکار و فضا آموزشی', 'ek-daftar', NULL, NULL),
(23, 8, 16, '2', 'مشارکت', 'mosharekat', NULL, NULL),
(24, 8, 16, '2', 'پیش فروش', 'pish-forosh', NULL, NULL),
(25, NULL, 30, '3', 'انتخاب سن بنا', 'sen-bana', NULL, NULL),
(26, 25, 30, '3', 'نوساز - صفر', 'sen-no', NULL, NULL),
(27, 25, 30, '3', '1', 'seen-1', NULL, NULL),
(28, 25, 30, '3', '2', 'seen-2', NULL, NULL),
(29, 25, 30, '3', '3', 'seen-3', NULL, NULL),
(30, 25, 30, '3', '4', 'seen-4', NULL, NULL),
(31, 25, 30, '3', '5', 'seen-5', NULL, NULL),
(32, 25, 30, '3', '6', 'seen-6', NULL, NULL),
(33, 25, 30, '3', '7', 'seen-7', NULL, NULL),
(34, 25, 30, '3', '8', 'seen-8', NULL, NULL),
(35, 25, 30, '3', '9', 'seen-9', NULL, NULL),
(36, 25, 30, '3', '10', 'seen-10', NULL, NULL),
(37, 25, 30, '3', 'بین 10 تا 15', 'seen-10-15', NULL, NULL),
(38, 25, 30, '3', 'بین 15 تا 20', 'seen-15-20', NULL, NULL),
(39, 25, 30, '3', 'بین 20 تا 25', 'seen-20-25', NULL, NULL),
(40, 25, 30, '3', 'بالای 25', 'seen-25-up', NULL, NULL),
(41, NULL, 40, '4', 'انتخاب طبقه', 'tabaghe', NULL, NULL),
(42, 41, 40, '4', 'زیر همکف', 'tabaghe-zir', NULL, NULL),
(43, 41, 40, '4', 'همکف', 'tabaghe-hamkaf', NULL, NULL),
(44, 41, 40, '4', '1', 'tabaghe-1', NULL, NULL),
(45, 41, 40, '4', '2', 'tabaghe-2', NULL, NULL),
(46, 41, 40, '4', '3', 'tabaghe-3', NULL, NULL),
(47, 41, 40, '4', '4', 'tabaghe-4', NULL, NULL),
(48, 41, 40, '4', '5', 'tabaghe-5', NULL, NULL),
(49, 41, 40, '4', '6', 'tabaghe-6', NULL, NULL),
(50, 41, 40, '4', '7', 'tabaghe-7', NULL, NULL),
(51, 41, 40, '4', '8', 'tabaghe-8', NULL, NULL),
(52, 41, 40, '4', '9', 'tabaghe-9', NULL, NULL),
(53, 41, 40, '4', '10', 'tabaghe-10', NULL, NULL),
(54, NULL, 50, '5', 'کل واحد ها', 'kol_vahed', NULL, NULL),
(55, 54, 50, '5', '1', 'k-vahed-1', NULL, NULL),
(56, 54, 50, '5', '2', 'k-vahed-2', NULL, NULL),
(57, 54, 50, '5', '3', 'k-vahed-3', NULL, NULL),
(58, 54, 50, '5', '4', 'k-vahed-4', NULL, NULL),
(59, 54, 50, '5', '5', 'k-vahed-5', NULL, NULL),
(60, 54, 50, '5', '6', 'k-vahed-6', NULL, NULL),
(61, 54, 50, '5', '7', 'k-vahed-7', NULL, NULL),
(62, 54, 50, '5', '8', 'k-vahed-8', NULL, NULL),
(63, 54, 50, '5', '9', 'k-vahed-9', NULL, NULL),
(64, 54, 50, '5', '10', 'k-vahed-10', NULL, NULL),
(65, 54, 50, '5', '11', 'k-vahed-11', NULL, NULL),
(66, 54, 50, '5', '12', 'k-vahed-12', NULL, NULL),
(67, 54, 50, '5', '13', 'k-vahed-13', NULL, NULL),
(68, 54, 50, '5', '14', 'k-vahed-14', NULL, NULL),
(69, 54, 50, '5', '15', 'k-vahed-15', NULL, NULL),
(70, 54, 50, '5', '16', 'k-vahed-16', NULL, NULL),
(71, 54, 50, '5', '17', 'k-vahed-17', NULL, NULL),
(72, 54, 50, '5', '18', 'k-vahed-18', NULL, NULL),
(73, 54, 50, '5', '19', 'k-vahed-19', NULL, NULL),
(74, 54, 50, '5', '20', 'k-vahed-20', NULL, NULL),
(75, NULL, 60, '6', 'تعداد اتاق', 'otagh', NULL, NULL),
(76, 75, 60, '6', 'بدون اتاق', 'otagh-no', NULL, NULL),
(77, 75, 60, '6', '1', 'otagh-1', NULL, NULL),
(78, 75, 60, '6', '2', 'otagh-2', NULL, NULL),
(79, 75, 60, '6', '3', 'otagh-3', NULL, NULL),
(80, 75, 60, '6', '4', 'otagh-4', NULL, NULL),
(81, 75, 60, '6', '5', 'otagh-5', NULL, NULL),
(82, NULL, 70, '7', 'انتخاب سند', 'sanad', NULL, NULL),
(83, 82, 70, '7', 'شش دانگ - ملکی', 'sanad-6m', NULL, NULL),
(84, 82, 70, '7', 'شش دانگ - اوقاف', 'sanad-6o', NULL, NULL),
(85, 82, 70, '7', 'وکالت', 'sanad-v', NULL, NULL),
(86, 82, 70, '7', 'قولنامه', 'sanad-gh', NULL, NULL),
(87, 82, 70, '7', 'سایر', 'sanad-other', NULL, NULL),
(88, NULL, 80, '8', 'کف پوش', 'kafpoosh', NULL, NULL),
(89, 88, 80, '8', 'سرامیک', 'kaaf-seramik', NULL, NULL),
(90, 88, 80, '8', 'موزاییک', 'kaaf-mozaek', NULL, NULL),
(91, 88, 80, '8', 'پارکت', 'kaaf-parket', NULL, NULL),
(92, 88, 80, '8', 'موکت', 'kaaf-moket', NULL, NULL),
(93, NULL, 90, '9', 'انتخاب جهت', 'jahat', NULL, NULL),
(94, 93, 90, '9', 'شمالی', 'jhat-shomali', NULL, NULL),
(95, 93, 90, '9', 'جنوبی', 'jhat-jonobi', NULL, NULL),
(96, 93, 90, '9', 'دونبش', 'jhat-2n', NULL, NULL),
(97, NULL, 100, '10', 'انتخاب کابینت', 'kabinet', NULL, NULL),
(98, 97, 100, '10', 'mdf', 'kabinet-mdf', NULL, NULL),
(99, 97, 100, '10', 'فلز', 'kabinet-flz', NULL, NULL),
(100, 97, 100, '10', 'چوب', 'kabinet-wood', NULL, NULL),
(101, 97, 100, '10', 'ملامینه', 'kabinet-ml', NULL, NULL),
(102, 97, 100, '10', 'گلاس', 'kabinet-glas', NULL, NULL),
(103, NULL, 110, '11', 'گرمایش', 'hot', NULL, NULL),
(104, 103, 110, '11', 'بخاری', 'hot-bokhari', NULL, NULL),
(105, 103, 110, '11', 'از کف', 'hot-kaf', NULL, NULL),
(106, 103, 110, '11', 'پنل', 'hot-panel', NULL, NULL),
(107, 103, 110, '11', 'شومینه', 'hot-shomine', NULL, NULL),
(108, NULL, 120, '12', 'امتیازات', 'emtiyza', NULL, NULL),
(109, 108, 121, '12', 'همه مستقل', 'emtiyaz-mostaghel', NULL, NULL),
(110, 108, 122, '12', 'آب مشترک', 'emtiyaz-ab', NULL, NULL),
(111, 108, 123, '12', 'برق مشترک', 'emtiyaz-bargh', NULL, NULL),
(112, 108, 124, '12', 'گاز مشترک', 'emtiyaz-gas', NULL, NULL),
(113, NULL, 130, '13', 'انتخاب محل', 'mahal', NULL, NULL),
(114, 113, 130, '13', 'اول قاعم تا 35 متری اول', 'loc-1', NULL, NULL),
(115, 113, 130, '13', '35 متری اول تا 35 متری دوم', 'loc-2', NULL, NULL),
(116, 113, 130, '13', '35 متری دوم تا بوستان قاعم', 'loc-3', NULL, NULL),
(117, 113, 130, '13', 'ایمان', 'loc-4', NULL, NULL),
(118, 113, 130, '13', 'عسکریه', 'loc-5', NULL, NULL),
(119, 113, 130, '13', 'کوشش', 'loc-6', NULL, NULL),
(120, 113, 130, '13', 'خلج', 'loc-7', NULL, NULL),
(121, 113, 130, '13', 'سبحان', 'loc-8', NULL, NULL),
(122, 113, 130, '13', 'ریاضی', 'loc-9', NULL, NULL),
(123, 113, 130, '13', 'نقیبی فرد', 'loc-10', NULL, NULL),
(124, 113, 130, '13', 'شهید دایی', 'loc-11', NULL, NULL),
(125, 113, 130, '13', 'پردیس', 'loc-12', NULL, NULL),
(126, 113, 130, '13', 'صبا غربی', 'loc-13', NULL, NULL),
(127, 113, 130, '13', 'سپاه', 'loc-14', NULL, NULL),
(128, 113, 130, '13', 'شهرک ابوذر', 'loc-15', NULL, NULL),
(129, 113, 130, '13', 'اول صبا تا میدان', 'loc-16', NULL, NULL),
(130, 113, 130, '13', 'میدان صبا تا پایانه اتوبوسرانی', 'loc-17', NULL, NULL),
(131, 113, 130, '13', 'ثامن', 'loc-18', NULL, NULL);

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
