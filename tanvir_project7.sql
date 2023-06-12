-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 07:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanvir_project7`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SONY', 'Sony is a Japanese multinational corporation in Minato, Tokyo, Japan.', 'brand-images/673459.png', 1, '2023-02-22 06:02:08', '2023-02-22 06:02:08'),
(2, 'MENS WORLD', 'Mens World is marching toward a wholly modern approach to fashion', 'brand-images/Logo-3.png.webp', 1, '2023-02-22 06:08:52', '2023-02-22 06:08:52'),
(3, 'Aarong', 'Aarong is a Bangladeshi department stores specializing in handicrafts.', 'brand-images/download.png', 1, '2023-02-22 06:10:12', '2023-02-22 06:10:12'),
(4, 'OnePlus', 'Explore the latest version of OnePlus Phones, Wearables, Audios.', 'brand-images/OnePlus-New-Logo-2.webp', 1, '2023-02-22 06:11:34', '2023-02-22 06:11:34'),
(5, 'ZINQ Technologies', 'The idea behind the new Zinq IT that would represent to the world.', 'brand-images/images.png', 1, '2023-02-22 06:12:09', '2023-02-22 06:12:09'),
(6, 'Adidas', 'A collection where you are sure to find amazing articles.', 'brand-images/Adidas_Logo.svg.webp', 1, '2023-02-22 06:12:47', '2023-02-22 06:12:47'),
(7, 'Reebok', 'Reebok International Limited is an American fitness', 'brand-images/551064.png', 1, '2023-02-22 06:13:17', '2023-02-22 06:13:17'),
(8, 'Tiffany & Co', 'Tiffany & Co. is a luxury jewelry and specialty retailer,', 'brand-images/Tiffany-Co-logo.png', 1, '2023-02-22 06:13:53', '2023-02-22 06:13:53'),
(9, 'Cartier', 'Cartier International SNC, or simply Cartier, is a French luxury good', 'brand-images/1200px-Cartier_logo.svg.png', 1, '2023-02-22 06:14:32', '2023-02-22 06:14:32');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Electronic Devices', 'Deferent Electronic Devices', 'category-images/icons8-multiple-devices-50.png', 1, '2023-02-21 01:20:27', '2023-02-22 12:12:50'),
(4, 'Men\'s Fashion', 'Men\'s-clothing', 'category-images/icons8-short-sleeve-shirt-32.png', 1, '2023-02-21 11:24:23', '2023-02-22 12:06:43'),
(5, 'Women\'s Fashion', 'Women\'s Clothing', 'category-images/Q5.jpg', 1, '2023-02-21 11:24:56', '2023-02-22 12:10:45'),
(6, 'Babies & Toys', 'Babies & Toys', 'category-images/baby.png', 1, '2023-02-21 11:25:29', '2023-02-22 12:17:56'),
(10, 'Electronic Accessories', 'Electronic Accessories', 'category-images/usb.png', 1, '2023-02-22 12:14:16', '2023-02-22 12:14:16'),
(11, 'Sports & Outdoor', 'Sports & Outdoor', 'category-images/sports.png', 1, '2023-02-22 12:14:47', '2023-02-22 12:14:47'),
(12, 'Jewelry & Accessories', 'Jewelry & Accessories', 'category-images/icons8-necklace-64.png', 1, '2023-02-22 12:15:16', '2023-02-22 12:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_02_13_065024_create_sessions_table', 1),
(7, '2023_02_21_061156_create_categories_table', 2),
(8, '2023_02_22_052351_create_sub_categories_table', 3),
(9, '2023_02_22_112151_create_brands_table', 4),
(10, '2023_02_22_112406_create_units_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1sia3WG9npHDUeOKjy0wZZtR3zvbqKmSlcg4npmK', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiYkRuWDdDUlFWYnplaHZvY0pZTUtMQ3lMcENtOFg3blFVMDlTRUFVWCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjY0OiJodHRwOi8vbG9jYWxob3N0L1RhbnZpci1MYXJhdmVsL3RhbnZpci1wcm9qZWN0Ny9wdWJsaWMvZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRFZVN4S1A2LjFoWEFMbzdvZlJNbkVPd3lUemVCSFplLmNvd3FyNk5jN2ZQM1p5NHVYcEtxQyI7fQ==', 1677086543),
('fkftzARHRsdMWH8FKPDCxwf25rYFNrJjgEPQz1Jm', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiVDM0U0w1VEJyYmc0TzZJR2hEWjhqY3BxTG5rdnNWc2xGbUswNlBwWSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjYzOiJodHRwOi8vbG9jYWxob3N0L1RhbnZpci1MYXJhdmVsL3RhbnZpci1wcm9qZWN0Ny9wdWJsaWMvdW5pdC9hZGQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEVlU3hLUDYuMWhYQUxvN29mUk1uRU93eVR6ZUJIWmUuY293cXI2TmM3ZlAzWnk0dVhwS3FDIjt9', 1677086736),
('xZWHjfRzN6ZN3QNU7NRxjNBSKfeBfLOh4w11QpJZ', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoidTBUMlhBZ2JsVXQ1QzI0MGRpVXQxbjA3cXdpVkw3Zk1peldGb2d1TiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjY2OiJodHRwOi8vbG9jYWxob3N0L1RhbnZpci1MYXJhdmVsL3RhbnZpci1wcm9qZWN0Ny9wdWJsaWMvdW5pdC9tYW5hZ2UiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEVlU3hLUDYuMWhYQUxvN29mUk1uRU93eVR6ZUJIWmUuY293cXI2TmM3ZlAzWnk0dVhwS3FDIjt9', 1677091274);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 'T Shirt For baby', 'T Shirt For baby', 'subCategory-images/images.jpg', 1, '2023-02-22 00:21:08', '2023-02-22 12:21:41'),
(4, 4, 'Men\'s T-Shirt', 'Men\'s T-Shirt', 'subCategory-images/tshirt.png', 1, '2023-02-22 12:22:47', '2023-02-22 12:22:47'),
(5, 5, 'Women\'s T-Shirt', 'Women\'s T-Shirt', 'subCategory-images/icons8-womens-t-shirt-80.png', 1, '2023-02-22 12:24:08', '2023-02-22 12:24:08'),
(6, 4, 'Casual Pants', 'Pants for men', 'subCategory-images/trousers.png', 1, '2023-02-22 12:24:49', '2023-02-22 12:24:49'),
(7, 5, 'Skirt', 'Skirts for women', 'subCategory-images/skirt.png', 1, '2023-02-22 12:26:11', '2023-02-22 12:26:11'),
(8, 1, 'Smartphone', 'smartphone', 'subCategory-images/mobile-phone.png', 1, '2023-02-22 12:28:08', '2023-02-22 12:28:08'),
(9, 1, 'Smartphone', 'smartphone', 'subCategory-images/mobile-phone.png', 1, '2023-02-22 12:28:08', '2023-02-22 12:28:08'),
(10, 1, 'iPhones', 'iPhones', 'subCategory-images/smartphone-iphone.png', 1, '2023-02-22 12:29:09', '2023-02-22 12:29:09'),
(11, 1, 'Computer PC', 'Computer PC', 'subCategory-images/monitor.png', 1, '2023-02-22 12:30:07', '2023-02-22 12:30:07'),
(12, 1, 'Televisions', 'Televisions', 'subCategory-images/television.png', 1, '2023-02-22 12:30:36', '2023-02-22 12:30:36'),
(13, 10, 'Mobile Accessories', 'Mobile Accessories', 'subCategory-images/2004488.png', 1, '2023-02-22 12:31:21', '2023-02-22 12:31:21'),
(14, 10, 'Computer Accessories', 'Computer Accessories', 'subCategory-images/5882225.png', 1, '2023-02-22 12:31:58', '2023-02-22 12:31:58'),
(15, 10, 'Fitness Accessories', 'Fitness Accessories', 'subCategory-images/8645846.png', 1, '2023-02-22 12:32:37', '2023-02-22 12:32:37'),
(16, 11, 'Sports shoes for men', 'Sports shoes for men', 'subCategory-images/2615478.png', 1, '2023-02-22 12:33:44', '2023-02-22 12:33:44'),
(17, 12, 'Necklaces & Pendants', 'Necklaces & Pendants', 'subCategory-images/necklace.png', 1, '2023-02-22 12:34:18', '2023-02-22 12:34:18'),
(18, 12, 'Bracelets & Bangles', 'Bracelets & Bangles', 'subCategory-images/icons8-bangles-50.png', 1, '2023-02-22 12:34:44', '2023-02-22 12:34:44'),
(19, 12, 'Bracelets & Bangles', 'Bracelets & Bangles', 'subCategory-images/icons8-bangles-50.png', 1, '2023-02-22 12:34:44', '2023-02-22 12:34:44'),
(20, 5, 'Sarees', 'Sarees For Women', 'subCategory-images/4172657.png', 1, '2023-02-22 12:35:25', '2023-02-22 12:35:25');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `code`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pices', 'PIS', 'Pices', 1, '2023-02-22 11:27:34', '2023-02-22 11:27:34'),
(2, 'Box', 'BX', 'A unit of a box.', 1, '2023-02-22 11:28:38', '2023-02-22 11:28:38'),
(3, 'Batch', '5B', 'A full Batch', 1, '2023-02-22 11:29:37', '2023-02-22 11:29:37'),
(4, 'Carton', 'CT', 'Carton', 1, '2023-02-22 11:30:02', '2023-02-22 11:30:02'),
(5, 'Liter', 'LTR', 'LTR', 1, '2023-02-22 11:30:25', '2023-02-22 11:30:25'),
(7, 'Kilogram', 'KGM', 'A unit of mass equal to one thousand grams.', 1, '2023-02-22 12:39:04', '2023-02-22 12:39:04'),
(8, 'Meter', 'MTR', 'The meter is the basic unit of length in the Inter...', 1, '2023-02-22 12:39:28', '2023-02-22 12:39:28'),
(9, 'Packet', 'PA', 'Packet', 1, '2023-02-22 12:40:08', '2023-02-22 12:40:08'),
(10, 'Packet', 'PA', 'Packet', 1, '2023-02-22 12:40:08', '2023-02-22 12:40:08'),
(11, 'Pound', 'LBR', 'The international avoirdupois pound of exactly 0.4...', 1, '2023-02-22 12:40:40', '2023-02-22 12:40:40'),
(12, 'Pound', 'LBR', 'The international avoirdupois pound of exactly 0.4...', 1, '2023-02-22 12:40:40', '2023-02-22 12:40:40'),
(13, 'Set', 'SET', 'A number of objects grouped together.', 1, '2023-02-22 12:41:07', '2023-02-22 12:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@admin.com', NULL, '$2y$10$EeSxKP6.1hXALo7ofRMnEOwyTzeBHZe.cowqr6Nc7fP3Zy4uXpKqC', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-19 20:50:43', '2023-02-19 20:50:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
