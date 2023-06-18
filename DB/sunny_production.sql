-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 09:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunny_production`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id_companies` char(36) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `primary_phone` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `industry` varchar(255) DEFAULT NULL,
  `check_customer` tinyint(1) NOT NULL,
  `check_partner` tinyint(1) NOT NULL,
  `check_our_company` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id_companies`, `company_name`, `company_email`, `primary_phone`, `website`, `fax`, `category`, `industry`, `check_customer`, `check_partner`, `check_our_company`, `created_at`, `updated_at`) VALUES
('0c1c15b6-c47f-4fd8-a863-ace222e160dc', 'PT. Inter Sistem Asia', 'isystemasia@asia.com', '02199592919', NULL, NULL, NULL, NULL, 0, 1, 0, '2023-06-18 06:08:51', '2023-06-18 06:08:51'),
('a730d41d-018a-4b21-a057-ad39551d1aba', 'PT Maju Sejahtera', 'majusejahtera@gmail.com', '021321221', NULL, NULL, NULL, NULL, 0, 1, 0, '2023-06-18 06:07:35', '2023-06-18 06:07:35'),
('df52e4c6-f404-49a6-a6df-e1bf18ed8ca3', 'PT Palugada', 'palugada@outlook.com', '021883881919', NULL, NULL, NULL, NULL, 0, 1, 0, '2023-06-18 06:08:05', '2023-06-18 06:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `company_address`
--

CREATE TABLE `company_address` (
  `id_company_address` bigint(20) UNSIGNED NOT NULL,
  `company_id` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company_detail`
--

CREATE TABLE `company_detail` (
  `id_company_detail` bigint(20) UNSIGNED NOT NULL,
  `company_id` varchar(255) NOT NULL,
  `total_employees` varchar(255) DEFAULT NULL,
  `business_entity` varchar(255) DEFAULT NULL,
  `annual_revenue` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_managements`
--

CREATE TABLE `customer_managements` (
  `id_customer` char(36) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_managements`
--

INSERT INTO `customer_managements` (`id_customer`, `nama_customer`, `email`, `website`, `phone_number`, `created_at`, `updated_at`) VALUES
('0d3dc2fb-1b5d-408b-9545-85af80f0d7ff', 'Ahmad', 'Ahmad@gmail.com', NULL, '082818192819', '2023-06-18 06:10:00', '2023-06-18 06:10:00'),
('2ad2d146-8326-4433-a280-13e0525ae645', 'Alexander', 'Alexander@gmail.com', NULL, '081347281819', '2023-06-18 06:07:00', '2023-06-18 06:07:00'),
('7c7f13c9-675e-424c-ba14-e44f861cd933', 'Ferbyansah Adi Putra', 'febryansah@i-systemasia.com', NULL, NULL, '2023-06-14 07:52:13', '2023-06-14 07:52:13'),
('7d6bbc9b-6e51-475a-8407-5dc7da5c07a0', 'Baker', 'baker@gmail.com', NULL, '08381819212', '2023-06-18 06:09:39', '2023-06-18 06:09:39'),
('d2dd8282-8a26-4da5-8ca9-47964106080b', 'Brian', 'brian@gmail.com', NULL, NULL, '2023-06-18 06:09:21', '2023-06-18 06:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forecasts`
--

CREATE TABLE `forecasts` (
  `id_forecast` bigint(20) UNSIGNED NOT NULL,
  `kode_proyek` varchar(255) NOT NULL,
  `nilai_ok_awal` varchar(255) NOT NULL,
  `nilai_realisasi` varchar(255) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_data`
--

CREATE TABLE `master_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `group` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `qty` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_data`
--

INSERT INTO `master_data` (`id`, `uuid`, `name`, `code`, `category`, `group`, `deskripsi`, `jenis`, `created_at`, `updated_at`, `qty`) VALUES
(1, '6c8d406f-efc5-3071-abd7-d5dfe2d63b18', 'PLASTIC', 'RAW-001', 'Raw Material', NULL, 'KG', 'Items', '2023-06-16 10:16:46', '2023-06-17 14:15:38', 1000.00),
(2, '1709903d-3cbe-34e4-bedd-96ebe5898628', 'Production', 'PRD', 'Production', NULL, 'Production', 'Location', '2023-06-16 10:18:44', '2023-06-16 10:19:44', 0.00),
(3, 'cbfe5550-a051-33e7-88c1-5eb99cb551d8', 'Main Warehouse', 'MW', 'Warehouse', NULL, 'Main Warehouse', 'Location', '2023-06-16 10:19:13', '2023-06-16 10:19:13', 0.00),
(4, '81d0d2f0-303a-3609-a779-a0e1e7416539', 'Finishing', 'FSH', 'Finishing', NULL, 'Finishing Goods', 'Location', '2023-06-16 10:20:00', '2023-06-16 10:43:34', 0.00),
(5, '45a95935-f076-3c4b-8364-50630ab29eb6', 'Finish Polybag', 'FG-001', 'Finish Goods', NULL, 'PCS', 'Items', '2023-06-16 10:38:40', '2023-06-18 05:20:54', 1700.00),
(6, '6ce2780c-a45f-317c-be92-37690275e599', 'Serabut', 'RAW-002', 'Raw Material', NULL, 'KG', 'Items', '2023-06-18 05:06:53', '2023-06-18 05:06:53', 100.00),
(7, '9c6192c9-dace-334e-aba6-4491861af3cd', 'Jerami', 'RAW-003', 'Raw Material', NULL, 'KG', 'Items', '2023-06-18 05:07:21', '2023-06-18 05:07:21', 150.00),
(8, '94ef5b63-2449-35b0-91aa-d4c8c2a71199', 'Sealed Cup', 'FG-002', 'Finish Goods', NULL, 'PCS', 'Items', '2023-06-18 05:20:29', '2023-06-18 05:20:29', 2500.00);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_01_162809_create_roles_table', 1),
(6, '2023_03_15_111854_create_forecasts', 1),
(7, '2023_03_15_125646_create_customer_managements', 1),
(8, '2023_06_13_171237_create_company', 1),
(9, '2023_06_13_172014_create_company_details_table', 1),
(10, '2023_06_14_092931_create_company_addresses_table', 1),
(11, '2023_06_14_141640_create_master_data_table', 2),
(12, '2023_06_17_112317_add_qty', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uuid`, `name`, `email`, `password`, `is_active`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adm1n846-39aa-4e3d-bfb5-b85bd8fbd482', 'Admin Sunny', 'admin@sunny.com', '$2y$10$UtWfRpO4IMZwYb2/tN2kJ.iJQKvwcws0zzmlccLz3Ky5d32quPNyy', 1, NULL, NULL, '2023-06-14 06:44:41', '2023-06-14 06:44:41'),
(2, 'Us3r7a2f-7f67-4603-9b44-306ede59c53f', 'User Sunny', 'user@sunny.com', '$2y$10$ySLikgXYyspSfvAmAuBLv.Jvw9zN2yiHNra5.ntqeWIp3oYoZ7V.m', 1, NULL, NULL, '2023-06-14 06:44:41', '2023-06-14 06:44:41');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `is_supervisor` tinyint(1) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `is_user` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `uuid`, `is_supervisor`, `is_admin`, `is_user`, `created_at`, `updated_at`) VALUES
(1, 'Adm1n846-39aa-4e3d-bfb5-b85bd8fbd482', 1, 0, 0, '2023-06-14 06:44:41', '2023-06-14 06:44:41'),
(2, 'Us3r7a2f-7f67-4603-9b44-306ede59c53f', 0, 0, 1, '2023-06-14 06:44:41', '2023-06-14 06:44:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id_companies`);

--
-- Indexes for table `company_address`
--
ALTER TABLE `company_address`
  ADD PRIMARY KEY (`id_company_address`);

--
-- Indexes for table `company_detail`
--
ALTER TABLE `company_detail`
  ADD PRIMARY KEY (`id_company_detail`);

--
-- Indexes for table `customer_managements`
--
ALTER TABLE `customer_managements`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forecasts`
--
ALTER TABLE `forecasts`
  ADD PRIMARY KEY (`id_forecast`);

--
-- Indexes for table `master_data`
--
ALTER TABLE `master_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `master_data_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_address`
--
ALTER TABLE `company_address`
  MODIFY `id_company_address` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_detail`
--
ALTER TABLE `company_detail`
  MODIFY `id_company_detail` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forecasts`
--
ALTER TABLE `forecasts`
  MODIFY `id_forecast` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_data`
--
ALTER TABLE `master_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
