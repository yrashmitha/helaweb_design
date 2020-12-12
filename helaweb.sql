-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2020 at 06:42 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helaweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_11_145322_create_projects_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(9999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `cover_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `url`, `image_path`, `cover_path`, `created_at`, `updated_at`) VALUES
(25, 'Ceylon7Tours', 'Ceylon7Tours is a tourism company that upcoming in Sri Lanka', 'https://ceylon7tours.com/', 'public/images/LD0d4VmTiLHoDXdPwZLVgmSVa12ozFjSjkraubet.png', 'public/covers/Wqj08iLPzz4FSIWTcajWmobrIYZRzewF1aQB17mJ.png', '2020-10-03 00:39:53', '2020-10-03 00:39:53'),
(26, 'perabeats', 'Perabeats is a photography society in University of Peradeniya.', 'https://perabeats.lk/', 'public/images/bgjNijg3wfyYrUvn0cUtMLQtigO9apH08w1zon7c.png', 'public/covers/u8b0K2WL8C0IjYMoTs8s8FXh8tf6J3FoFGarnUjz.png', '2020-10-03 01:34:04', '2020-10-03 01:34:04'),
(27, 'Japanese Language & Japanese Technology Center', 'JLJTC is a Japanese language teaching center in Sri Lanka', 'https://jljtcsrilanka.com/', 'public/images/nE0U3x0CDWWE5gSCTi3oaR8Wxxrw1Q7HJnpBOYVh.png', 'public/covers/6DV3Q1SbcAdF2G2lRG3ft6M6xmRZhZMURtoa0T4z.png', '2020-10-03 01:37:31', '2020-10-03 01:37:31'),
(28, 'ElviseWane', 'Blog Website', 'https://elvisewane.com/', 'public/images/HzeYfcfv2m1pAbCzJCH2XxYMd3Og6G2Jfzu35zYL.png', 'public/covers/0YxNw3CabxABWJ0sRFhIBwny3WE21f4AGQZNmUqV.png', '2020-10-03 01:41:55', '2020-10-03 01:41:55'),
(29, 'Item Searches', 'Amazon Affiliate website', 'https://itemsearches.com/', 'public/images/xPzGXlIWhGEtzZ1Af5DVTuheEALJ20tVqgnrBY2U.png', 'public/covers/0Z0ODCiabtqrarBssYy0ZYfeAvogWjZv9oLen3pg.png', '2020-10-03 01:42:46', '2020-10-03 01:42:46'),
(30, 'Guido Ludwigs', 'Hypnose and Mediation Website', 'http://guidoludwigs.de/', 'public/images/hgBrFQOt77KDqIYdT59CBF7QGvP7TOrP43Jy9TvU.png', 'public/covers/1w4g1jfxidK1K1Yg9agommNXtYe1dhi1Du63Mff7.png', '2020-10-03 01:44:17', '2020-10-03 01:44:17'),
(31, 'The Migraine Doctor', 'Personal website for migraine doctor that includes their services', 'https://drcamillemd.com/', 'public/images/aMKj4BU6SUJT7x0fk5aJSbeFnt7nuGvDnDNClJ3v.png', 'public/covers/7ok2JSFLpPZ2gELPWha2bcfdL9MTPrEh601RPWXN.png', '2020-10-03 01:47:49', '2020-10-03 01:47:49'),
(32, 'Tadassy', 'e-commerce shopping website', 'http://tadassy.com/', 'public/images/AoDo54t1vHBrkMJWPL5YfNuYbkJzztE3f3JxgjDt.png', 'public/covers/kF4BX7DhEzb6m5AR1Xo6GKxkbiGWCW5LkwnMSLmc.png', '2020-10-03 01:50:13', '2020-10-03 01:50:13'),
(33, 'Virtually Urgent Healthcare', 'Virtually Urgent Healthcare is an urgent care clinic focused on supplying our patients with quality and affordable healthcare through our cyber secure telemedicine platform', 'https://virtuallyurgenthealthcare.com/', 'public/images/goSDYipPCpUI8eZ93tyOrgGb5MP4OoYI8Q12AHzR.png', 'public/covers/YYfYejNgfzwZPp1CUCCXbqAZeYeUm5beZCwB3NhX.png', '2020-10-03 01:52:22', '2020-10-03 01:52:22'),
(34, 'Kohan', 'Website for Japanese company', 'https://kohan.viron.lk/en/home/', 'public/images/fey636VWNrUOAYCn8UcqQFGhkzzb3CnQj97RQUFl.png', 'public/covers/ncdM1XPX5Fce0ky1LBY7PsTJsuJ5IXV8wPpBp8KC.png', '2020-10-03 01:54:21', '2020-10-03 01:54:21'),
(35, 'Football Pink', 'Football blog website', 'https://footballpink.net/', 'public/images/oONXs7hpjtLSIQ6viELc6vuF7GsqCoH9zgKE9OvT.png', 'public/covers/9RC4bZeO46UPD4jaZAk9prKGhq1SHWlKIVdzYWTk.png', '2020-10-03 01:55:33', '2020-10-03 01:55:33'),
(36, 'EBM Logistics LLC', 'Logistics Company', 'https://ebmlogisticsllc.com/', 'public/images/c7U2EX3EmVH526IN9quKuyAKdQFnMEIXtrRXRHbR.png', 'public/covers/sRE0E0NsfBLd6IzyYo5xg4UqrtZG5BuDWmIgnuIz.png', '2020-10-03 01:57:16', '2020-10-03 01:57:16'),
(37, 'YEX', 'Paper search engine', 'https://yexfirebase.web.app/', 'public/images/YSZz98BStggGjLyXOVggDvpOSZBe8ZRWBDNed5JZ.png', 'public/covers/bXrRzL4V2RdJ9n5T6hI5adgJ6esmb2CBjikAeXB5.png', '2020-10-03 01:59:28', '2020-10-03 01:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'yohan rashmitha', 'yrenterprices@gmail.com', NULL, '$2y$10$bQYWi4wEG4D/dkCkbXQ8jOzZU0jPTTBuBLRnSnHxET/kq8KPUxYqm', NULL, '2020-09-11 11:33:34', '2020-09-11 11:33:34', NULL),
(9, 'Yohan Rashmitha', 'test@gmail.com', '2020-09-21 19:17:24', '12345678', 'a', '2020-09-21 13:48:15', '2020-09-21 13:48:15', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
