-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2024 at 11:11 AM
-- Server version: 8.0.40-0ubuntu0.22.04.1
-- PHP Version: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `role_permission`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_11_09_103242_create_role_models_table', 2),
(6, '2024_11_09_143520_create_permission_models_table', 3),
(7, '2024_11_09_155548_create_permission_role_models_table', 4);

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
-- Table structure for table `permission_models`
--

CREATE TABLE `permission_models` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_models`
--

INSERT INTO `permission_models` (`id`, `name`, `slug`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'Dashboard', 0, NULL, NULL),
(2, 'User', 'User', 1, NULL, NULL),
(3, 'Add User', 'Add User', 1, NULL, NULL),
(4, 'Edit User', 'Edit User', 1, NULL, NULL),
(5, 'Delete User', 'Delete User', 1, NULL, NULL),
(6, 'Role', 'Role', 2, NULL, NULL),
(7, 'Role Add', 'Role Add', 2, NULL, NULL),
(8, 'Role Edit', 'Role Edit', 2, NULL, NULL),
(9, 'Role Delete', 'Role Delete', 2, NULL, NULL),
(10, 'Category', 'Category', 3, NULL, NULL),
(11, 'Category Add', 'Category Add', 3, NULL, NULL),
(12, 'Category Edit', 'Category Edit', 3, NULL, NULL),
(13, 'Category Delete', 'Category Delete', 3, NULL, NULL),
(14, 'Sub Category', 'Sub Category', 4, NULL, NULL),
(15, 'Sub Category Add', 'Sub Category Add', 4, NULL, NULL),
(16, 'Sub Category Edit', 'Sub Category Edit', 4, NULL, NULL),
(17, 'Sub Category Delete', 'Sub Category Delete', 4, NULL, NULL),
(18, 'Product', 'Product', 5, NULL, NULL),
(19, 'Product Add', 'Product Add', 5, NULL, NULL),
(20, 'Product Edit', 'Product Edit', 5, NULL, NULL),
(21, 'Product Delete', 'Product Delete', 5, NULL, NULL),
(22, 'setting', 'setting', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role_models`
--

CREATE TABLE `permission_role_models` (
  `id` bigint UNSIGNED NOT NULL,
  `role_id` int NOT NULL,
  `permission_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role_models`
--

INSERT INTO `permission_role_models` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(35, 11, 1, '2024-11-26 02:39:57', '2024-11-26 02:39:57'),
(41, 12, 1, '2024-11-26 02:41:13', '2024-11-26 02:41:13'),
(42, 12, 2, '2024-11-26 02:41:13', '2024-11-26 02:41:13'),
(43, 12, 3, '2024-11-26 02:41:13', '2024-11-26 02:41:13'),
(44, 12, 4, '2024-11-26 02:41:13', '2024-11-26 02:41:13'),
(45, 12, 5, '2024-11-26 02:41:13', '2024-11-26 02:41:13'),
(298, 14, 1, '2024-12-20 04:50:32', '2024-12-20 04:50:32'),
(299, 14, 10, '2024-12-20 04:50:32', '2024-12-20 04:50:32'),
(300, 14, 11, '2024-12-20 04:50:32', '2024-12-20 04:50:32'),
(388, 13, 1, '2024-12-20 05:06:17', '2024-12-20 05:06:17'),
(389, 13, 2, '2024-12-20 05:06:17', '2024-12-20 05:06:17'),
(390, 13, 3, '2024-12-20 05:06:17', '2024-12-20 05:06:17'),
(391, 13, 4, '2024-12-20 05:06:17', '2024-12-20 05:06:17'),
(392, 13, 5, '2024-12-20 05:06:17', '2024-12-20 05:06:17'),
(393, 13, 6, '2024-12-20 05:06:17', '2024-12-20 05:06:17'),
(394, 13, 7, '2024-12-20 05:06:17', '2024-12-20 05:06:17'),
(395, 13, 8, '2024-12-20 05:06:17', '2024-12-20 05:06:17'),
(396, 13, 9, '2024-12-20 05:06:17', '2024-12-20 05:06:17'),
(397, 13, 10, '2024-12-20 05:06:17', '2024-12-20 05:06:17'),
(398, 13, 11, '2024-12-20 05:06:17', '2024-12-20 05:06:17'),
(399, 13, 12, '2024-12-20 05:06:17', '2024-12-20 05:06:17'),
(400, 13, 13, '2024-12-20 05:06:17', '2024-12-20 05:06:17'),
(401, 13, 14, '2024-12-20 05:06:17', '2024-12-20 05:06:17'),
(402, 13, 15, '2024-12-20 05:06:17', '2024-12-20 05:06:17'),
(403, 13, 16, '2024-12-20 05:06:17', '2024-12-20 05:06:17'),
(404, 13, 17, '2024-12-20 05:06:17', '2024-12-20 05:06:17'),
(405, 13, 18, '2024-12-20 05:06:17', '2024-12-20 05:06:17'),
(406, 13, 19, '2024-12-20 05:06:17', '2024-12-20 05:06:17'),
(407, 13, 20, '2024-12-20 05:06:17', '2024-12-20 05:06:17'),
(408, 13, 21, '2024-12-20 05:06:17', '2024-12-20 05:06:17'),
(409, 13, 22, '2024-12-20 05:06:17', '2024-12-20 05:06:17');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_models`
--

CREATE TABLE `role_models` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_models`
--

INSERT INTO `role_models` (`id`, `name`, `created_at`, `updated_at`) VALUES
(13, 'Admin', '2024-12-06 04:08:13', '2024-12-06 04:08:13'),
(14, 'User', '2024-12-06 04:08:54', '2024-12-06 04:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'TMSS NGO', 'tmss-ict@gmail.com', NULL, '$2y$10$x6iHP17hLZwFnuLnFHdBre0tPEMdCQhwAkDGxO03GE21XhctrGbke', 13, NULL, '2024-12-06 05:34:39', '2024-12-06 05:34:39'),
(5, 'Rabby Hasan Saref', 'rabbyhasansaref83@gmail.com', NULL, '$2y$10$WNy/qxhXYzhQyKQPwFzl.O4KFfL5yZMrTZnShf/ppnh3WVd.4YqNK', 14, NULL, '2024-12-20 04:47:27', '2024-12-20 04:47:27');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `permission_models`
--
ALTER TABLE `permission_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role_models`
--
ALTER TABLE `permission_role_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `role_models`
--
ALTER TABLE `role_models`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permission_models`
--
ALTER TABLE `permission_models`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `permission_role_models`
--
ALTER TABLE `permission_role_models`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=410;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role_models`
--
ALTER TABLE `role_models`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
