-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2024 at 12:14 PM
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
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `form` enum('TEXT','NUMBER','SELECT','MULTISELECT','CHECKBOX','RADIOBUTTON','TEXTAREA','IMAGE','MULTIIMAGE','VIDEO','FILE') DEFAULT 'TEXT',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`id`, `parent_id`, `order`, `name`, `slug`, `form`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'انتخاب سن بنا', 'sen-bana', 'TEXT', NULL, NULL),
(2, NULL, 2, 'انتخاب طبقه', 'tabaghe', 'TEXT', NULL, NULL),
(3, NULL, 3, 'کل واحد ها', 'kol_vahed', 'TEXT', NULL, NULL),
(4, NULL, 4, 'تعداد اتاق', 'otagh', 'TEXT', NULL, NULL),
(5, NULL, 5, 'انتخاب سند', 'sanad', 'TEXT', NULL, NULL),
(6, NULL, 6, 'کف پوش', 'kafpoosh', 'TEXT', NULL, NULL),
(7, NULL, 7, 'انتخاب جهت', 'jahat', 'TEXT', NULL, NULL),
(8, NULL, 8, 'انتخاب کابینت', 'kabinet', 'TEXT', NULL, NULL),
(9, NULL, 9, 'گرمایش', 'hot', 'TEXT', NULL, NULL),
(10, NULL, 10, 'امتیازات', 'emtiyza', 'MULTISELECT', NULL, NULL),
(11, NULL, 11, 'انتخاب محل', 'mahal', 'TEXT', NULL, NULL),
(12, 1, 1, 'نوساز - صفر', 'sen-no', 'TEXT', NULL, NULL),
(13, 1, 2, '1', 'seen-1', 'TEXT', NULL, NULL),
(14, 1, 3, '2', 'seen-2', 'TEXT', NULL, NULL),
(15, 1, 4, '3', 'seen-3', 'TEXT', NULL, NULL),
(16, 1, 5, '4', 'seen-4', 'TEXT', NULL, NULL),
(17, 1, 6, '5', 'seen-5', 'TEXT', NULL, NULL),
(18, 1, 7, '6', 'seen-6', 'TEXT', NULL, NULL),
(19, 1, 8, '7', 'seen-7', 'TEXT', NULL, NULL),
(20, 1, 9, '8', 'seen-8', 'TEXT', NULL, NULL),
(21, 1, 10, '9', 'seen-9', 'TEXT', NULL, NULL),
(22, 1, 11, '10', 'seen-10', 'TEXT', NULL, NULL),
(23, 1, 12, 'بین 10 تا 15', 'seen-10-15', 'TEXT', NULL, NULL),
(24, 1, 13, 'بین 15 تا 20', 'seen-15-20', 'TEXT', NULL, NULL),
(25, 1, 14, 'بین 20 تا 25', 'seen-20-25', 'TEXT', NULL, NULL),
(26, 1, 15, 'بالای 25', 'seen-25-up', 'TEXT', NULL, NULL),
(27, 2, 1, 'زیر همکف', 'tabaghe-zir', 'TEXT', NULL, NULL),
(28, 2, 1, 'همکف', 'tabaghe-hamkaf', 'TEXT', NULL, NULL),
(29, 2, 2, '1', 'tabaghe-1', 'TEXT', NULL, NULL),
(30, 2, 3, '2', 'tabaghe-2', 'TEXT', NULL, NULL),
(31, 2, 4, '3', 'tabaghe-3', 'TEXT', NULL, NULL),
(32, 2, 5, '4', 'tabaghe-4', 'TEXT', NULL, NULL),
(33, 2, 6, '5', 'tabaghe-5', 'TEXT', NULL, NULL),
(34, 2, 7, '6', 'tabaghe-6', 'TEXT', NULL, NULL),
(35, 2, 8, '7', 'tabaghe-7', 'TEXT', NULL, NULL),
(36, 2, 9, '8', 'tabaghe-8', 'TEXT', NULL, NULL),
(37, 2, 10, '9', 'tabaghe-9', 'TEXT', NULL, NULL),
(38, 2, 11, '10', 'tabaghe-10', 'TEXT', NULL, NULL),
(39, 3, 1, '1', 'k-vahed-1', 'TEXT', NULL, NULL),
(40, 3, 2, '2', 'k-vahed-2', 'TEXT', NULL, NULL),
(41, 3, 3, '3', 'k-vahed-3', 'TEXT', NULL, NULL),
(42, 3, 4, '4', 'k-vahed-4', 'TEXT', NULL, NULL),
(43, 3, 5, '5', 'k-vahed-5', 'TEXT', NULL, NULL),
(44, 3, 6, '6', 'k-vahed-6', 'TEXT', NULL, NULL),
(45, 3, 7, '7', 'k-vahed-7', 'TEXT', NULL, NULL),
(46, 3, 8, '8', 'k-vahed-8', 'TEXT', NULL, NULL),
(47, 3, 9, '9', 'k-vahed-9', 'TEXT', NULL, NULL),
(48, 3, 10, '10', 'k-vahed-10', 'TEXT', NULL, NULL),
(49, 3, 11, '11', 'k-vahed-11', 'TEXT', NULL, NULL),
(50, 3, 12, '12', 'k-vahed-12', 'TEXT', NULL, NULL),
(51, 3, 13, '13', 'k-vahed-13', 'TEXT', NULL, NULL),
(52, 3, 14, '14', 'k-vahed-14', 'TEXT', NULL, NULL),
(53, 3, 15, '15', 'k-vahed-15', 'TEXT', NULL, NULL),
(54, 3, 16, '16', 'k-vahed-16', 'TEXT', NULL, NULL),
(55, 3, 17, '17', 'k-vahed-17', 'TEXT', NULL, NULL),
(56, 3, 18, '18', 'k-vahed-18', 'TEXT', NULL, NULL),
(57, 3, 19, '19', 'k-vahed-19', 'TEXT', NULL, NULL),
(58, 3, 20, '20', 'k-vahed-20', 'TEXT', NULL, NULL),
(59, 4, 1, 'بدون اتاق', 'otagh-no', 'TEXT', NULL, NULL),
(60, 4, 2, '1', 'otagh-1', 'TEXT', NULL, NULL),
(61, 4, 3, '2', 'otagh-2', 'TEXT', NULL, NULL),
(62, 4, 4, '3', 'otagh-3', 'TEXT', NULL, NULL),
(63, 4, 5, '4', 'otagh-4', 'TEXT', NULL, NULL),
(64, 4, 6, '5', 'otagh-5', 'TEXT', NULL, NULL),
(65, 5, 1, 'شش دانگ - ملکی', 'sanad-6m', 'TEXT', NULL, NULL),
(66, 5, 2, 'شش دانگ - اوقاف', 'sanad-6o', 'TEXT', NULL, NULL),
(67, 5, 3, 'وکالت', 'sanad-v', 'TEXT', NULL, NULL),
(68, 5, 4, 'قولنامه', 'sanad-gh', 'TEXT', NULL, NULL),
(69, 5, 5, 'سایر', 'sanad-other', 'TEXT', NULL, NULL),
(70, 6, 1, 'سرامیک', 'kaaf-seramik', 'TEXT', NULL, NULL),
(71, 6, 2, 'موزاییک', 'kaaf-mozaek', 'TEXT', NULL, NULL),
(72, 6, 3, 'پارکت', 'kaaf-parket', 'TEXT', NULL, NULL),
(73, 6, 4, 'موکت', 'kaaf-moket', 'TEXT', NULL, NULL),
(74, 7, 1, 'شمالی', 'jhat-shomali', 'TEXT', NULL, NULL),
(75, 7, 2, 'جنوبی', 'jhat-jonobi', 'TEXT', NULL, NULL),
(76, 7, 3, 'دونبش', 'jhat-2n', 'TEXT', NULL, NULL),
(77, 8, 1, 'mdf', 'kabinet-mdf', 'TEXT', NULL, NULL),
(78, 8, 2, 'فلز', 'kabinet-flz', 'TEXT', NULL, NULL),
(79, 8, 3, 'چوب', 'kabinet-wood', 'TEXT', NULL, NULL),
(80, 8, 4, 'ملامینه', 'kabinet-ml', 'TEXT', NULL, NULL),
(81, 8, 5, 'گلاس', 'kabinet-glas', 'TEXT', NULL, NULL),
(82, 9, 1, 'بخاری', 'hot-bokhari', 'TEXT', NULL, NULL),
(83, 9, 2, 'از کف', 'hot-kaf', 'TEXT', NULL, NULL),
(84, 9, 3, 'پنل', 'hot-panel', 'TEXT', NULL, NULL),
(85, 9, 4, 'شومینه', 'hot-shomine', 'TEXT', NULL, NULL),
(86, 10, 1, 'همه مستقل', 'emtiyaz-mostaghel', 'TEXT', NULL, NULL),
(87, 10, 2, 'آب مشترک', 'emtiyaz-ab', 'TEXT', NULL, NULL),
(88, 10, 3, 'برق مشترک', 'emtiyaz-bargh', 'TEXT', NULL, NULL),
(89, 10, 4, 'گاز مشترک', 'emtiyaz-gas', 'TEXT', NULL, NULL),
(90, 11, 1, 'اول قاعم تا 35 متری اول', 'loc-1', 'TEXT', NULL, NULL),
(91, 11, 2, '35 متری اول تا 35 متری دوم', 'loc-2', 'TEXT', NULL, NULL),
(92, 11, 3, '35 متری دوم تا بوستان قاعم', 'loc-3', 'TEXT', NULL, NULL),
(93, 11, 4, 'ایمان', 'loc-4', 'TEXT', NULL, NULL),
(94, 11, 5, 'عسکریه', 'loc-5', 'TEXT', NULL, NULL),
(95, 11, 6, 'کوشش', 'loc-6', 'TEXT', NULL, NULL),
(96, 11, 7, 'خلج', 'loc-7', 'TEXT', NULL, NULL),
(97, 11, 8, 'سبحان', 'loc-8', 'TEXT', NULL, NULL),
(98, 11, 9, 'ریاضی', 'loc-9', 'TEXT', NULL, NULL),
(99, 11, 10, 'نقیبی فرد', 'loc-10', 'TEXT', NULL, NULL),
(100, 11, 11, 'شهید دایی', 'loc-11', 'TEXT', NULL, NULL),
(101, 11, 12, 'پردیس', 'loc-12', 'TEXT', NULL, NULL),
(102, 11, 13, 'صبا غربی', 'loc-13', 'TEXT', NULL, NULL),
(103, 11, 14, 'سپاه', 'loc-14', 'TEXT', NULL, NULL),
(104, 11, 15, 'شهرک ابوذر', 'loc-15', 'TEXT', NULL, NULL),
(105, 11, 16, 'اول صبا تا میدان', 'loc-16', 'TEXT', NULL, NULL),
(106, 11, 17, 'میدان صبا تا پایانه اتوبوسرانی', 'loc-17', 'TEXT', NULL, NULL),
(107, 11, 18, 'ثامن', 'loc-18', 'TEXT', NULL, NULL),
(108, NULL, 1, 'قیمت', 'price', 'NUMBER', '2024-10-21 09:49:15', '2024-10-21 09:49:15'),
(109, NULL, 1, 'رهن', 'rhn', 'NUMBER', '2024-10-21 09:50:00', '2024-10-21 09:50:00'),
(110, NULL, 1, 'اجاره', 'ajarh', 'NUMBER', '2024-10-21 09:50:40', '2024-10-21 09:50:40'),
(111, NULL, 1, 'بالکن', 'bal-n', 'CHECKBOX', '2024-10-21 09:51:54', '2024-10-21 09:51:54'),
(112, NULL, 1, 'پارکینگ', 'parking', 'CHECKBOX', '2024-10-21 09:52:57', '2024-10-21 09:52:57'),
(113, NULL, 1, 'توالت فرنگی', 'twalt-frn', 'CHECKBOX', '2024-10-21 09:53:58', '2024-10-21 09:53:58'),
(114, NULL, 1, 'معاوضه', 'maawdhh', 'CHECKBOX', '2024-10-21 09:54:50', '2024-10-21 09:54:50'),
(115, NULL, 1, 'عکس', 'pic', 'IMAGE', '2024-10-21 09:56:24', '2024-10-21 09:56:24'),
(116, NULL, 1, 'ادرس', 'adrs', 'TEXT', '2024-10-21 09:57:23', '2024-10-21 09:57:23'),
(117, NULL, 1, 'توضیحات', 'twdh-hat', 'TEXTAREA', '2024-10-21 09:58:30', '2024-10-21 09:58:30'),
(118, NULL, 1, 'متراژ', 'mtra', 'NUMBER', '2024-10-21 09:59:46', '2024-10-21 09:59:46'),
(119, NULL, 1, 'متراژ زمین', 'mtra-zm-n', 'NUMBER', '2024-10-21 10:00:24', '2024-10-21 10:00:24'),
(120, NULL, 1, 'آسانسور', 'aasanswr', 'CHECKBOX', '2024-10-21 10:01:04', '2024-10-21 10:01:04'),
(121, NULL, 1, 'بازسازی', 'bazsaz', 'CHECKBOX', '2024-10-21 10:03:39', '2024-10-21 10:03:39'),
(122, NULL, 1, 'سرمایش', 'srma-sh', 'TEXT', '2024-10-21 10:09:03', '2024-10-21 10:09:03'),
(123, 122, 1, 'ندارد', 'ndard', 'TEXT', '2024-10-21 10:09:29', '2024-10-21 10:09:29'),
(124, 122, 2, 'کولر آبی', 'wlr-aab', 'TEXT', '2024-10-21 10:09:56', '2024-10-21 10:09:56'),
(125, 122, 3, 'کولر گازی', 'wlr-az', 'TEXT', '2024-10-21 10:10:22', '2024-10-21 10:10:22'),
(126, NULL, 1, 'آبگرم', 'aab-rm', 'TEXT', '2024-10-21 10:12:01', '2024-10-21 10:12:01'),
(127, 126, 1, 'آبگرمکن', 'aab-rm-n', 'TEXT', '2024-10-21 10:12:26', '2024-10-21 10:12:26'),
(128, 126, 2, 'پکیج', 'packge', 'TEXT', '2024-10-21 10:12:52', '2024-10-21 10:12:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fields_slug_unique` (`slug`),
  ADD KEY `fields_parent_id_foreign` (`parent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fields`
--
ALTER TABLE `fields`
  ADD CONSTRAINT `fields_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `fields` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
