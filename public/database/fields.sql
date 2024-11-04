-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2024 at 12:03 PM
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
  `form` enum('NULL','TEXT','NUMBER','SELECT','MULTISELECT','CHECKBOX','RADIOBUTTON','TEXTAREA','IMAGE','MULTIIMAGE','VIDEO','FILE') NOT NULL DEFAULT 'NULL',
  `option` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`id`, `parent_id`, `order`, `name`, `slug`, `form`, `option`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'محله', 'mahale', 'SELECT', 0, NULL, NULL),
(2, 1, 1, 'ابرش', 'mahale_abrash', 'NULL', 0, NULL, NULL),
(3, 1, 2, 'ابریشم', 'mahale_abrisham', 'NULL', 0, NULL, NULL),
(4, 1, 3, 'اردمه', 'mahale_ardame', 'NULL', 0, NULL, NULL),
(5, 1, 4, 'احسان', 'mahale_ehsan', 'NULL', 0, NULL, NULL),
(6, 1, 5, 'اصلانی', 'mahale_aslani', 'NULL', 0, NULL, NULL),
(7, 1, 6, 'امامی', 'mahale_emami', 'NULL', 0, NULL, NULL),
(8, 1, 7, 'امان آباد', 'mahale_amanabad', 'NULL', 0, NULL, NULL),
(9, 1, 8, 'ایمان', 'mahale_eman', 'NULL', 0, NULL, NULL),
(10, 1, 9, 'باقری', 'mahale_bagheri', 'NULL', 0, NULL, NULL),
(11, 1, 10, 'براتی', 'mahale_barati', 'NULL', 0, NULL, NULL),
(12, 1, 11, 'بساروج', 'mahale_basaroj', 'NULL', 0, NULL, NULL),
(13, 1, 12, 'باش ساروق', 'mahale_beshsarogh', 'NULL', 0, NULL, NULL),
(14, 1, 13, 'بالندر', 'mahale_balandar', 'NULL', 0, NULL, NULL),
(15, 1, 14, 'بینالود', 'mahale_binalod', 'NULL', 0, NULL, NULL),
(16, 1, 15, 'پورآزاد', 'mahale_porazad', 'NULL', 0, NULL, NULL),
(17, 1, 16, 'پیشه', 'mahale_pisheh', 'NULL', 0, NULL, NULL),
(18, 1, 17, 'پیوه ژن', 'mahale_pivjan', 'NULL', 0, NULL, NULL),
(19, 1, 18, 'تجر', 'mahale_tajar', 'NULL', 0, NULL, NULL),
(20, 1, 19, 'ثامن', 'mahale_samen', 'NULL', 0, NULL, NULL),
(21, 1, 20, 'حقیقی', 'mahale_haghighi', 'NULL', 0, NULL, NULL),
(22, 1, 21, 'خاکستری', 'mahale_khakestari', 'NULL', 0, NULL, NULL),
(23, 1, 22, 'خانزاده', 'mahale_khanzade', 'NULL', 0, NULL, NULL),
(24, 1, 23, 'خانرود', 'mahale_khanrod', 'NULL', 0, NULL, NULL),
(25, 1, 24, 'خدمت', 'mahale_khedmat', 'NULL', 0, NULL, NULL),
(26, 1, 25, 'خلج', 'mahale_khalag', 'NULL', 0, NULL, NULL),
(27, 1, 26, 'داوری', 'mahale_davari', 'NULL', 0, NULL, NULL),
(28, 1, 27, 'دایی', 'mahale_daee', 'NULL', 0, NULL, NULL),
(29, 1, 28, 'دلدار', 'mahale_deldar', 'NULL', 0, NULL, NULL),
(30, 1, 29, 'ده غیبی', 'mahale_dehghabi', 'NULL', 0, NULL, NULL),
(31, 1, 30, 'رباط طرق', 'mahale_robat', 'NULL', 0, NULL, NULL),
(32, 1, 31, 'رضایی', 'mahale_rezayee', 'NULL', 0, NULL, NULL),
(33, 1, 32, 'ریاضی', 'mahale_reyazi', 'NULL', 0, NULL, NULL),
(34, 1, 33, 'سبحان', 'mahale_sobhan', 'NULL', 0, NULL, NULL),
(35, 1, 34, 'سپاه', 'mahale_sepah', 'NULL', 0, NULL, NULL),
(36, 1, 35, 'سربرج', 'mahale_sarborg', 'NULL', 0, NULL, NULL),
(37, 1, 36, 'سحر', 'mahale_sahar', 'NULL', 0, NULL, NULL),
(38, 1, 37, 'شعبانی', 'mahale_shabani', 'NULL', 0, NULL, NULL),
(39, 1, 38, 'شلگرد', 'mahale_shelgerd', 'NULL', 0, NULL, NULL),
(40, 1, 39, 'شهرک ابوذر', 'mahale_shahrakabozar', 'NULL', 0, NULL, NULL),
(41, 1, 40, 'صفاری', 'mahale_safari', 'NULL', 0, NULL, NULL),
(42, 1, 41, 'صیدآبادی', 'mahale_seydabadi', 'NULL', 0, NULL, NULL),
(43, 1, 42, 'صنعتی طرق', 'mahale_sanatitorogh', 'NULL', 0, NULL, NULL),
(44, 1, 43, 'عارفی', 'mahale_arefi', 'NULL', 0, NULL, NULL),
(45, 1, 44, 'عبدالله نژاد', 'mahale_abdolahnejad', 'NULL', 0, NULL, NULL),
(46, 1, 45, 'غفاری', 'mahale_ghafari', 'NULL', 0, NULL, NULL),
(47, 1, 46, 'فدایی', 'mahale_fadaye', 'NULL', 0, NULL, NULL),
(48, 1, 47, 'فرجی', 'mahale_faragi', 'NULL', 0, NULL, NULL),
(49, 1, 48, 'قاسمی', 'mahale_ghasemi', 'NULL', 0, NULL, NULL),
(50, 1, 49, 'قائم', 'mahale_quem', 'NULL', 0, NULL, NULL),
(51, 1, 50, 'قشلاق', 'mahale_gheshlagh', 'NULL', 0, NULL, NULL),
(52, 1, 51, 'قیصری', 'mahale_ghisari', 'NULL', 0, NULL, NULL),
(53, 1, 52, 'کارآفرین', 'mahale_karafarin', 'NULL', 0, NULL, NULL),
(54, 1, 53, 'کافی', 'mahale_kafi', 'NULL', 0, NULL, NULL),
(55, 1, 54, 'کارگر', 'mahale_kargar', 'NULL', 0, NULL, NULL),
(56, 1, 55, 'کرتیان', 'mahale_kortian', 'NULL', 0, NULL, NULL),
(57, 1, 56, 'کوشش', 'mahale_koshesh', 'NULL', 0, NULL, NULL),
(58, 1, 57, 'مج', 'mahale_mag', 'NULL', 0, NULL, NULL),
(59, 1, 58, 'محمدی فرد', 'mahale_mohamadifar', 'NULL', 0, NULL, NULL),
(60, 1, 59, 'مغان', 'mahale_moghan', 'NULL', 0, NULL, NULL),
(61, 1, 60, 'ملک آباد', 'mahale_molkabad', 'NULL', 0, NULL, NULL),
(62, 1, 61, 'مهدی', 'mahale_mahdi', 'NULL', 0, NULL, NULL),
(63, 1, 62, 'ناظر', 'mahale_nazer', 'NULL', 0, NULL, NULL),
(64, 1, 63, 'نقیبی فرد', 'mahale_naghibifard', 'NULL', 0, NULL, NULL),
(65, 1, 64, 'هفت حوض', 'mahale_7hoz', 'NULL', 0, NULL, NULL),
(66, 1, 65, 'خارج از سیدی', 'mahale_exit', 'NULL', 0, NULL, NULL),
(67, NULL, 2, 'آدرس', 'address', 'TEXT', 1, NULL, NULL),
(68, NULL, 3, 'سند', 'sanad', 'SELECT', 0, NULL, NULL),
(69, 68, 1, 'ششدانگ-ملک', 'sanad_6melk', 'NULL', 0, NULL, NULL),
(70, 68, 2, 'ششدانگ-وقفی', 'sanad_6vaghf', 'NULL', 0, NULL, NULL),
(71, 68, 3, 'وکالتی', 'sanad_vekalat', 'NULL', 0, NULL, NULL),
(72, 68, 4, 'قولنامه', 'sanad_gholname', 'NULL', 0, NULL, NULL),
(73, 68, 5, 'سایر', 'sanad_sayer', 'NULL', 0, NULL, NULL),
(74, NULL, 4, 'جهت', 'jahat', 'SELECT', 1, NULL, NULL),
(75, 74, 1, 'شمالی', 'jahat_shomali', 'NULL', 0, NULL, NULL),
(76, 74, 2, 'جنوبی', 'jahat_jonobi', 'NULL', 0, NULL, NULL),
(77, 74, 3, 'حاشیه', 'jahat_hashiye', 'NULL', 0, NULL, NULL),
(78, 74, 4, 'دونبش', 'jahat_2nabsh', 'NULL', 0, NULL, NULL),
(79, 74, 5, 'سه نبش', 'jahat_3nabsh', 'NULL', 0, NULL, NULL),
(80, NULL, 5, 'سن بنا', 'senbana', 'SELECT', 0, NULL, NULL),
(81, 80, 1, '1404', 'senbana_04', 'NULL', 0, NULL, NULL),
(82, 80, 2, '1403', 'senbana_03', 'NULL', 0, NULL, NULL),
(83, 80, 3, '1402', 'senbana_02', 'NULL', 0, NULL, NULL),
(84, 80, 4, '1401', 'senbana_01', 'NULL', 0, NULL, NULL),
(85, 80, 5, '1400', 'senbana_00', 'NULL', 0, NULL, NULL),
(86, 80, 6, '1399', 'senbana_99', 'NULL', 0, NULL, NULL),
(87, 80, 7, '1398', 'senbana_98', 'NULL', 0, NULL, NULL),
(88, 80, 8, '1397', 'senbana_97', 'NULL', 0, NULL, NULL),
(89, 80, 9, '1396', 'senbana_96', 'NULL', 0, NULL, NULL),
(90, 80, 10, '1395', 'senbana_95', 'NULL', 0, NULL, NULL),
(91, 80, 11, '1394', 'senbana_94', 'NULL', 0, NULL, NULL),
(92, 80, 12, '1393', 'senbana_93', 'NULL', 0, NULL, NULL),
(93, 80, 13, '1392', 'senbana_92', 'NULL', 0, NULL, NULL),
(94, 80, 14, '1391', 'senbana_91', 'NULL', 0, NULL, NULL),
(95, 80, 15, '1390', 'senbana_90', 'NULL', 0, NULL, NULL),
(96, 80, 16, '1389', 'senbana_89', 'NULL', 0, NULL, NULL),
(97, 80, 17, '1388', 'senbana_88', 'NULL', 0, NULL, NULL),
(98, 80, 18, '1387', 'senbana_87', 'NULL', 0, NULL, NULL),
(99, 80, 19, '1386', 'senbana_86', 'NULL', 0, NULL, NULL),
(100, 80, 20, '1385', 'senbana_85', 'NULL', 0, NULL, NULL),
(101, 80, 21, '1384', 'senbana_84', 'NULL', 0, NULL, NULL),
(102, 80, 22, '1383', 'senbana_83', 'NULL', 0, NULL, NULL),
(103, 80, 23, '1382', 'senbana_82', 'NULL', 0, NULL, NULL),
(104, 80, 24, '1381', 'senbana_81', 'NULL', 0, NULL, NULL),
(105, 80, 25, '1380', 'senbana_80', 'NULL', 0, NULL, NULL),
(106, 80, 26, 'قبل از 1380', 'senbana_old', 'NULL', 0, NULL, NULL),
(107, NULL, 6, 'کل واحد', 'kolvahed', 'SELECT', 1, NULL, NULL),
(108, 107, 1, '1', 'kolvahed_1', 'NULL', 0, NULL, NULL),
(109, 107, 2, '2', 'kolvahed_2', 'NULL', 0, NULL, NULL),
(110, 107, 3, '3', 'kolvahed_3', 'NULL', 0, NULL, NULL),
(111, 107, 4, '4', 'kolvahed_4', 'NULL', 0, NULL, NULL),
(112, 107, 5, '5', 'kolvahed_5', 'NULL', 0, NULL, NULL),
(113, 107, 6, '6', 'kolvahed_6', 'NULL', 0, NULL, NULL),
(114, 107, 7, '7', 'kolvahed_7', 'NULL', 0, NULL, NULL),
(115, 107, 8, '8', 'kolvahed_8', 'NULL', 0, NULL, NULL),
(116, 107, 9, '9', 'kolvahed_9', 'NULL', 0, NULL, NULL),
(117, 107, 10, '10', 'kolvahed_10', 'NULL', 0, NULL, NULL),
(118, 107, 11, '11', 'kolvahed_11', 'NULL', 0, NULL, NULL),
(119, 107, 12, '12', 'kolvahed_12', 'NULL', 0, NULL, NULL),
(120, 107, 13, '13', 'kolvahed_13', 'NULL', 0, NULL, NULL),
(121, 107, 14, '14', 'kolvahed_14', 'NULL', 0, NULL, NULL),
(122, 107, 15, '15', 'kolvahed_15', 'NULL', 0, NULL, NULL),
(123, 107, 16, '16', 'kolvahed_16', 'NULL', 0, NULL, NULL),
(124, 107, 17, '17', 'kolvahed_17', 'NULL', 0, NULL, NULL),
(125, 107, 18, '18', 'kolvahed_18', 'NULL', 0, NULL, NULL),
(126, 107, 19, '19', 'kolvahed_19', 'NULL', 0, NULL, NULL),
(127, 107, 20, '20', 'kolvahed_20', 'NULL', 0, NULL, NULL),
(128, 107, 21, 'بیش از 20', 'kolvahed_more', 'NULL', 0, NULL, NULL),
(129, NULL, 7, 'طبقه', 'tabaghe', 'SELECT', 1, NULL, NULL),
(130, 129, 1, 'زیر همکف', 'tabaghe_zir', 'NULL', 0, NULL, NULL),
(131, 129, 2, 'همکف', 'tabaghe_hamkaf', 'NULL', 0, NULL, NULL),
(132, 129, 3, '1', 'tabaghe_1', 'NULL', 0, NULL, NULL),
(133, 129, 4, '2', 'tabaghe_2', 'NULL', 0, NULL, NULL),
(134, 129, 5, '3', 'tabaghe_3', 'NULL', 0, NULL, NULL),
(135, 129, 6, '4', 'tabaghe_4', 'NULL', 0, NULL, NULL),
(136, 129, 7, '5', 'tabaghe_5', 'NULL', 0, NULL, NULL),
(137, 129, 8, '6', 'tabaghe_6', 'NULL', 0, NULL, NULL),
(138, 129, 9, '7', 'tabaghe_7', 'NULL', 0, NULL, NULL),
(139, 129, 10, '8', 'tabaghe_8', 'NULL', 0, NULL, NULL),
(140, 129, 11, '9', 'tabaghe_9', 'NULL', 0, NULL, NULL),
(141, 129, 12, '10', 'tabaghe_10', 'NULL', 0, NULL, NULL),
(142, 129, 13, 'بیش از 10', 'tabaghe_more', 'NULL', 0, NULL, NULL),
(143, NULL, 8, 'پارکینگ', 'parking', 'CHECKBOX', 0, NULL, NULL),
(144, NULL, 9, 'انباری', 'anbari', 'CHECKBOX', 1, NULL, NULL),
(145, NULL, 10, 'آسانسور', 'elvator', 'CHECKBOX', 0, NULL, NULL),
(146, NULL, 11, 'متراژ', 'metraj', 'NUMBER', 0, NULL, NULL),
(147, NULL, 12, 'متراژ بالکن', 'balkon', 'NUMBER', 1, NULL, NULL),
(148, NULL, 13, 'اتاق', 'otagh', 'SELECT', 0, NULL, NULL),
(149, 148, 1, 'ندارد', 'otagh_nadarad', 'NULL', 0, NULL, NULL),
(150, 148, 2, '1', 'otagh_1', 'NULL', 0, NULL, NULL),
(151, 148, 3, '2', 'otagh_2', 'NULL', 0, NULL, NULL),
(152, 148, 4, '3', 'otagh_3', 'NULL', 0, NULL, NULL),
(153, 148, 5, '4', 'otagh_4', 'NULL', 0, NULL, NULL),
(154, 148, 6, '5', 'otagh_5', 'NULL', 0, NULL, NULL),
(155, 148, 7, 'بیش از 5', 'otagh_more', 'NULL', 0, NULL, NULL),
(156, NULL, 14, 'امتیازات', 'emtiazat', 'MULTISELECT', 1, NULL, NULL),
(157, 156, 1, 'آب مجزا', 'emtiazat_abjoda', 'NULL', 0, NULL, NULL),
(158, 156, 2, 'آب مشترک', 'emtiazat_abmoshtarak', 'NULL', 0, NULL, NULL),
(159, 156, 3, 'برق مجزا', 'emtiazat_barghjoda', 'NULL', 0, NULL, NULL),
(160, 156, 4, 'برق مشترک', 'emtiazat_barghmoshtarak', 'NULL', 0, NULL, NULL),
(161, 156, 5, 'گاز مجزا', 'emtiazat_gasjoda', 'NULL', 0, NULL, NULL),
(162, 156, 6, 'گاز مشترک', 'emtiazat_gasmoshtarak', 'NULL', 0, NULL, NULL),
(163, 156, 7, 'تلفن', 'emtiazat_telphone', 'NULL', 0, NULL, NULL),
(164, 156, 8, 'آب دارد', 'emtiazat_abdarad', 'NULL', 0, NULL, NULL),
(165, 156, 9, 'آب ندارد', 'emtiazat_abnadarad', 'NULL', 0, NULL, NULL),
(166, 156, 10, 'برق دارد', 'emtiazat_barghdarad', 'NULL', 0, NULL, NULL),
(167, 156, 11, 'برق ندارد', 'emtiazat_barghnadarad', 'NULL', 0, NULL, NULL),
(168, 156, 12, 'گاز دارد', 'emtiazat_gasdarad', 'NULL', 0, NULL, NULL),
(169, 156, 13, 'گاز ندارد', 'emtiazat_gasnadarad', 'NULL', 0, NULL, NULL),
(170, NULL, 15, 'نما', 'nama', 'SELECT', 1, NULL, NULL),
(171, 170, 1, 'آجر سفال', 'nama_ajor', 'NULL', 0, NULL, NULL),
(172, 170, 2, 'رومی', 'nama_romi', 'NULL', 0, NULL, NULL),
(173, 170, 3, 'سرامیک', 'nama_seramik', 'NULL', 0, NULL, NULL),
(174, 170, 4, 'سنگ', 'nama_sang', 'NULL', 0, NULL, NULL),
(175, 170, 5, 'سیمان', 'nama_siman', 'NULL', 0, NULL, NULL),
(176, 170, 6, 'شیشه', 'nama_shishe', 'NULL', 0, NULL, NULL),
(177, 170, 7, 'کامپوزیت', 'nama_composit', 'NULL', 0, NULL, NULL),
(178, 170, 8, 'گرانولیت', 'nama_granolit', 'NULL', 0, NULL, NULL),
(179, NULL, 16, 'کف', 'kafposh', 'SELECT', 1, NULL, NULL),
(180, 179, 1, 'پارکت', 'kafposh_parket', 'NULL', 0, NULL, NULL),
(181, 179, 2, 'چوب', 'kafposh_chob', 'NULL', 0, NULL, NULL),
(182, 179, 3, 'سرامیک', 'kafposh_seramik', 'NULL', 0, NULL, NULL),
(183, 179, 4, 'سنگ', 'kafposh_sang', 'NULL', 0, NULL, NULL),
(184, 179, 5, 'سیمان', 'kafposh_siman', 'NULL', 0, NULL, NULL),
(185, 179, 6, 'موزاییک', 'kafposh_mozaeek', 'NULL', 0, NULL, NULL),
(186, 179, 7, 'موکت', 'kafposh_moket', 'NULL', 0, NULL, NULL),
(187, NULL, 17, 'دیوار', 'divar', 'SELECT', 1, NULL, NULL),
(188, 187, 1, 'پتینه کاری', 'divar_patine', 'NULL', 0, NULL, NULL),
(189, 187, 2, 'پی وی سی', 'divar_pvc', 'NULL', 0, NULL, NULL),
(190, 187, 3, 'چوب', 'divar_chob', 'NULL', 0, NULL, NULL),
(191, 187, 4, 'سنگ', 'divar_sang', 'NULL', 0, NULL, NULL),
(192, 187, 5, 'کاغذ دیواری', 'divar_kaghaz', 'NULL', 0, NULL, NULL),
(193, 187, 6, 'گچ', 'divar_gach', 'NULL', 0, NULL, NULL),
(194, 187, 7, 'نقاشی', 'divar_naghashi', 'NULL', 0, NULL, NULL),
(195, NULL, 18, 'لوستر', 'loster', 'SELECT', 0, NULL, NULL),
(196, 195, 1, 'ندارد', 'loster_nadarad', 'NULL', 0, NULL, NULL),
(197, 195, 2, '1', 'loster_1', 'NULL', 0, NULL, NULL),
(198, 195, 3, '2', 'loster_2', 'NULL', 0, NULL, NULL),
(199, 195, 4, '3', 'loster_3', 'NULL', 0, NULL, NULL),
(200, 195, 5, '4', 'loster_4', 'NULL', 0, NULL, NULL),
(201, 195, 6, '5', 'loster_5', 'NULL', 0, NULL, NULL),
(202, 195, 7, 'بیشتر از 5', 'loster_more', 'NULL', 0, NULL, NULL),
(203, NULL, 19, 'حمام', 'hammam', 'SELECT', 0, NULL, NULL),
(204, 203, 1, 'ندارد', 'hammam_nadarad', 'NULL', 0, NULL, NULL),
(205, 203, 2, '1', 'hammam_1', 'NULL', 0, NULL, NULL),
(206, 203, 3, '2', 'hammam_2', 'NULL', 0, NULL, NULL),
(207, 203, 4, '3', 'hammam_3', 'NULL', 0, NULL, NULL),
(208, 203, 5, 'بیش از 3', 'hammam_more', 'NULL', 0, NULL, NULL),
(209, NULL, 20, 'توالت', 'tovalet', 'SELECT', 0, NULL, NULL),
(210, 209, 1, 'ایرانی', 'tovalet_irani', 'NULL', 0, NULL, NULL),
(211, 209, 2, 'ایرانی - فرنگی', 'tovalet_iranifarangi', 'NULL', 0, NULL, NULL),
(212, 209, 3, 'فرنگی', 'tovalet_farangi', 'NULL', 0, NULL, NULL),
(213, NULL, 21, 'دستشور', 'dastshor', 'SELECT', 0, NULL, NULL),
(214, 213, 1, 'ندارد', 'dastshor_nadarad', 'NULL', 0, NULL, NULL),
(215, 213, 2, '1', 'dastshor_1', 'NULL', 0, NULL, NULL),
(216, 213, 3, '2', 'dastshor_2', 'NULL', 0, NULL, NULL),
(217, 213, 4, 'بیش از 2', 'dastshor_more', 'NULL', 0, NULL, NULL),
(218, NULL, 22, 'تامین آبگرم', 'abgarm', 'SELECT', 0, NULL, NULL),
(219, 218, 1, 'آبگرمکن', 'abgarm_abgarmkon', 'NULL', 0, NULL, NULL),
(220, 218, 2, 'پکیج', 'abgarm_package', 'NULL', 0, NULL, NULL),
(221, NULL, 23, 'گرمایش', 'garmayesh', 'SELECT', 1, NULL, NULL),
(222, 221, 1, 'از کف', 'garmayesh_azkaf', 'NULL', 0, NULL, NULL),
(223, 221, 2, 'بخاری', 'garmayesh_bokhari', 'NULL', 0, NULL, NULL),
(224, 221, 3, 'پنل رادیاتور', 'garmayesh_panel', 'NULL', 0, NULL, NULL),
(225, 221, 4, 'شومینه', 'garmayesh_shomineh', 'NULL', 0, NULL, NULL),
(226, NULL, 24, 'سرمایش', 'sarmayesh', 'SELECT', 1, NULL, NULL),
(227, 226, 1, 'پنکه سقفی', 'sarmayesh_panke', 'NULL', 0, NULL, NULL),
(228, 226, 2, 'کولر آبی', 'sarmayesh_coolerabi', 'NULL', 0, NULL, NULL),
(229, 226, 3, 'کولر گازی', 'sarmayesh_coolergasi', 'NULL', 0, NULL, NULL),
(230, NULL, 24, 'کمد دیواری', 'komoddivari', 'SELECT', 0, NULL, NULL),
(231, 230, 1, 'ندارد', 'komoddivari_nadarad', 'NULL', 0, NULL, NULL),
(232, 230, 2, '1', 'komoddivari_1', 'NULL', 0, NULL, NULL),
(233, 230, 3, '2', 'komoddivari_2', 'NULL', 0, NULL, NULL),
(234, 230, 4, '3', 'komoddivari_3', 'NULL', 0, NULL, NULL),
(235, 230, 5, '4', 'komoddivari_4', 'NULL', 0, NULL, NULL),
(236, 230, 6, '5', 'komoddivari_5', 'NULL', 0, NULL, NULL),
(237, 230, 7, '6', 'komoddivari_6', 'NULL', 0, NULL, NULL),
(238, 230, 8, 'بیش از 6', 'komoddivari_more', 'NULL', 0, NULL, NULL),


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
