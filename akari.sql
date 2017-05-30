-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 08, 2017 at 11:53 PM
-- Server version: 5.7.16
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akari`
--

-- --------------------------------------------------------

--
-- Table structure for table `bu`
--

CREATE TABLE `bu` (
  `id` int(11) NOT NULL,
  `bu_name` varchar(100) NOT NULL,
  `bu_price` varchar(20) NOT NULL,
  `bu_rent` tinyint(1) NOT NULL,
  `bu_square` varchar(10) NOT NULL,
  `bu_type` tinyint(1) NOT NULL,
  `bu_small_disc` varchar(160) NOT NULL,
  `bu_meta` varchar(200) NOT NULL,
  `bu_langitude` varchar(50) NOT NULL,
  `bu_latitude` varchar(50) NOT NULL,
  `bu_large_disc` longtext NOT NULL,
  `bu_status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sitesettings`
--

CREATE TABLE `sitesettings` (
  `id` int(11) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `namesetting` varchar(50) NOT NULL,
  `value` varchar(50) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sitesettings`
--

INSERT INTO `sitesettings` (`id`, `slug`, `namesetting`, `value`, `type`, `created_at`, `updated_at`) VALUES
(1, 'اسم الموقع', 'sitename', 'موقع العقارات الأول في الشرق الأوسط', 0, '2016-10-13 13:40:55', '2016-10-13 11:40:55'),
(2, 'الموبايل', 'mobile', '01092848528', 0, '2016-10-13 13:40:55', '2016-10-13 11:40:55'),
(3, 'الفيس بوك', 'facebook', 'facebook', 0, '2016-10-13 13:40:55', '2016-10-13 11:40:55'),
(4, 'تويتر', 'twitter', 'twitter', 0, '2016-10-13 13:40:55', '2016-10-13 11:40:55'),
(5, 'يوتيوب', 'youtube', 'YT', 0, '2016-10-13 13:40:55', '2016-10-13 11:40:55'),
(6, 'لينكد ان', 'linkedin', 'LinkedIn', 0, '2016-10-13 13:40:55', '2016-10-13 11:40:55'),
(7, 'العنوان', 'address', 'Address', 0, '2016-10-13 13:40:55', '2016-10-13 11:40:55'),
(8, 'ألكلمات الدلالية', 'keywords', 'keywords', 1, '2016-10-13 13:40:55', '2016-10-13 11:40:55'),
(9, 'وصف الموقع', 'sitedesc', 'Website description', 1, '2016-10-13 13:40:55', '2016-10-13 11:40:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(1, 'test', 'test@yahoo.com', '$2y$10$Sl9PagMOTNMjMgnuNYLMGu6E2zGMniwSM9T/5Hw/0lRpr6LpJCzAG', 'YG4ppApj3RCR8I3IswokNKNAvrmEhIF1GKHqjv8z3MdpWuxWGBod8ft0VfDS', '2016-09-24 15:01:19', '2016-10-07 16:10:45', 1),
(2, 'admin', 'admin@yahoo.com', '$2y$10$Sl9PagMOTNMjMgnuNYLMGu6E2zGMniwSM9T/5Hw/0lRpr6LpJCzAG', '27zYFMIe8mqSU3YRETDTkiwrdI1lL90jsg45o5Uf4x7uVCEkGnuttEyqCPJt', '2016-09-24 15:01:48', '2016-09-24 15:01:53', 1),
(3, 'Marwa', 'marwa@yahoo.com', '$2y$10$Sl9PagMOTNMjMgnuNYLMGu6E2zGMniwSM9T/5Hw/0lRpr6LpJCzAG', 'qvJrl6xxeDdEueUlHqud4Ch7QvMBzulNq1m1cQvabtdsxcaG1y1kMM4oeVxe', '2016-09-24 15:40:13', '2016-09-24 15:46:33', 1),
(4, 'ahmed', 'ahmed@yahoo.com', '$2y$10$Sl9PagMOTNMjMgnuNYLMGu6E2zGMniwSM9T/5Hw/0lRpr6LpJCzAG', 'hlaLBSEeZopCfJ19X43FuuMF8NOKhgosK3FEKsBXJtsD2KPfVmLEzIYwK6qX', '2016-09-24 15:48:21', '2016-09-24 16:06:11', 1),
(5, 'mido', 'mido@yahoo.com', '$2y$10$Sl9PagMOTNMjMgnuNYLMGu6E2zGMniwSM9T/5Hw/0lRpr6LpJCzAG', 'NATKf9sZ4wYGBMnQefOLuiQ3dt9BRbr6gsIX599DBD4ghKNn66hCfJJuE1Hz', '2016-09-24 16:07:00', '2016-12-23 18:30:49', 1),
(6, 'zein Jaber', 'zein@yahoo.com', '$2y$10$Sl9PagMOTNMjMgnuNYLMGu6E2zGMniwSM9T/5Hw/0lRpr6LpJCzAG', '0p0XiKbWVUbg4sDGJDDrYCoLbVdaFtN2GON12LODrbQKToZDrgqu4FRuVTFU', '2016-09-24 16:09:15', '2016-10-07 12:42:10', 1),
(8, 'sheka', 'sheka@yahoo.com', '$2y$10$Sl9PagMOTNMjMgnuNYLMGu6E2zGMniwSM9T/5Hw/0lRpr6LpJCzAG', '8jD4R7ysrgMLn9QYFDl8tkyoYBpHE0YtxQGSCGeDerSwBVpu2Wy4Y0o5q3gV', '2016-09-25 09:20:07', '2017-01-22 03:09:12', 1),
(9, 'admin', 'admin12@yahoo.com', '$2y$10$Sl9PagMOTNMjMgnuNYLMGu6E2zGMniwSM9T/5Hw/0lRpr6LpJCzAG', '0kj7jTr1upN38HKco0RryZxjPjEvio9PACBlFuLewLNOJiK8JwWs3aM6G5Zq', '2017-01-22 02:50:55', '2017-01-22 03:06:22', 0),
(10, 'prince', 'prince@yahoo.com', '$2y$10$Sl9PagMOTNMjMgnuNYLMGu6E2zGMniwSM9T/5Hw/0lRpr6LpJCzAG', 'hCPK0oXnoN9QD85SMfiE2EbrpgVr10fXzow9iQ5yx9nDsfKYtuzskGfvifUq', '2017-03-10 09:44:24', '2017-03-10 09:46:48', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bu`
--
ALTER TABLE `bu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `sitesettings`
--
ALTER TABLE `sitesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bu`
--
ALTER TABLE `bu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sitesettings`
--
ALTER TABLE `sitesettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
