-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 11, 2024 at 06:15 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `searchsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboards`
--

CREATE TABLE `dashboards` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dashboards`
--

INSERT INTO `dashboards` (`id`, `title`, `image`, `created_at`, `updated_at`, `status`) VALUES
(13, 'datas one', 'images/1798735744938293.jpg', '2024-05-11 00:08:06', '2024-05-11 00:14:42', 1),
(14, 'data two', 'images/1798735354402951.jpg', '2024-05-11 00:08:29', '2024-05-11 00:08:29', 0),
(15, 'data three', 'images/1798735696655938.jpg', '2024-05-11 00:13:55', '2024-05-11 00:13:55', 1);

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_05_09_150329_create_dashboards_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$ds5G.h91YMK7P25dCn2..upRkkgFcfgJLcDs5JzmKbQDyBrt9vU2O', NULL, '2024-03-15 07:29:15', '2024-03-15 07:29:15'),
(2, 'Gustave Feeney', 'lavinia33@example.com', '2024-03-16 20:31:00', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', '9pGD0ZRNxG', '2024-03-16 20:31:01', '2024-03-16 20:31:01'),
(3, 'Charlene Murphy', 'ron65@example.org', '2024-03-16 20:31:01', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'ZiQ2JHWiOQ', '2024-03-16 20:31:01', '2024-03-16 20:31:01'),
(4, 'Afton Strosin', 'mertie.howell@example.org', '2024-03-16 20:31:01', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', '1s1YOqgG41', '2024-03-16 20:31:01', '2024-03-16 20:31:01'),
(5, 'Dr. Aditya Brown Sr.', 'tyrell.eichmann@example.org', '2024-03-16 20:31:01', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'C0lQpeXJbP', '2024-03-16 20:31:01', '2024-03-16 20:31:01'),
(6, 'Mason King', 'lilian76@example.com', '2024-03-16 20:31:01', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'hQWAjCeJJL', '2024-03-16 20:31:01', '2024-03-16 20:31:01'),
(7, 'Cyrus Yundt', 'luther24@example.com', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'xxkTdLHwvU', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(8, 'Herta Bradtke', 'ressie93@example.org', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', '24Brs4qFEG', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(9, 'Elliot Haley', 'vkulas@example.org', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'kA6okehmi6', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(10, 'Zack Turner', 'jlehner@example.net', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'ixBuHV3JKr', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(11, 'Elisha Collier IV', 'armand76@example.org', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', '81Kb45D62D', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(12, 'Vincenzo McGlynn MD', 'stremblay@example.com', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'Vif91fDnu7', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(13, 'Leda Borer', 'rutherford.celestine@example.net', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'GyORFBp2Ly', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(14, 'Clement Jenkins', 'tate77@example.org', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'SdEESjwcqM', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(15, 'Colt Mann', 'blanda.lonie@example.net', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'Pu6NIhPzuX', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(16, 'Haley Bartell Sr.', 'jacey30@example.com', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'uKyUT138Qy', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(17, 'Prof. Lorenzo Leannon DVM', 'danny06@example.net', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', '5Awfbjp6Ee', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(18, 'Mrs. Mara Mayert', 'lubowitz.arturo@example.com', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'NU80oeHJhP', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(19, 'Garrison Paucek', 'graham.west@example.org', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'Cx9XJfETXn', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(20, 'Madalyn Mann', 'hegmann.chelsea@example.org', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'o8AumR9CpO', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(21, 'Jacinthe Luettgen', 'eino.skiles@example.net', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'AAXEhK8xI5', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(22, 'Mrs. Bonita Altenwerth MD', 'tillman04@example.com', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'CnqXgwqtTI', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(23, 'Caesar Harber', 'acasper@example.net', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'mvzBO9945i', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(24, 'Millie Block', 'ora04@example.org', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'VS94vKNplc', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(25, 'Dr. Emerson Doyle II', 'delbert58@example.com', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'cbdJFPk4ee', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(26, 'Maeve Cruickshank', 'vern.waters@example.com', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'w4PejpLfrS', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(27, 'Prof. Elna Larkin DVM', 'eileen74@example.net', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'JmvLq6YXTb', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(28, 'Prof. Megane Lesch', 'kendra.douglas@example.com', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'CT92XIYjmc', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(29, 'Miss Tara Wyman', 'monahan.cletus@example.net', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'YLP8LJHjgp', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(30, 'Chauncey Huels', 'kellen.moore@example.org', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'DX5LgWEf2m', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(31, 'Michelle Sanford', 'tmorar@example.org', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'iWXq5BRpC0', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(32, 'Layne Mills', 'iwill@example.org', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'NNRuUHGeev', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(33, 'Miss Alize McClure', 'hgottlieb@example.com', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'IF4Mu53spv', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(34, 'Hildegard Wintheiser', 'wtromp@example.org', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'PQhdtBQSNS', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(35, 'Flavio Collier', 'botsford.vito@example.com', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'zcPynsnwYH', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(36, 'Jolie O\'Reilly', 'marjory.lehner@example.com', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'l2iZNSSZsu', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(37, 'Mina Hirthe', 'tkulas@example.net', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'JjWWhpKUG6', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(38, 'Alvena Schneider', 'dandre37@example.org', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'M2KRK6XT2F', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(39, 'Arden Jerde MD', 'feeney.antwon@example.net', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'nRuCPrgifP', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(40, 'Tania Nicolas', 'efahey@example.org', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'ImkvnFvsRX', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(41, 'Nikko Friesen', 'sondricka@example.net', '2024-03-16 20:32:47', '$2y$12$6ssSCoWbitVJQLoL.1fEZeIzZqNlhIcYXVx9f1i9YYTaD85/VvWmO', 'qkkcbV7p8D', '2024-03-16 20:32:47', '2024-03-16 20:32:47'),
(42, 'Tanha', 'tanha@gmail.com', '2024-05-06 06:04:43', '', 'aaaaaaaa', '2024-05-06 06:04:43', '2024-05-06 06:04:43'),
(43, 'susmitatanha', 'susmitatanha@gmail.com', '2024-05-07 09:06:45', 'xxxxxxxx', 'xxxxxxxx', '2024-05-07 09:06:45', '2024-05-07 09:06:45'),
(44, 'Billu', 'billu@gmail.com', NULL, '$2y$12$MLGcqyV0MMMq2IzY4LfJoefWoX9k0hFQGoVr4pClo/5GsfSHqAuDO', NULL, '2024-05-09 03:36:37', '2024-05-09 03:36:37'),
(45, 'belal', 'belal@gmail.com', NULL, '$2y$12$uMwr244NmVzkprx5xRs7OOEweecmzzUHgzgfLmKyyecQfdgqPei.e', NULL, '2024-05-09 03:43:51', '2024-05-09 03:43:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dashboards`
--
ALTER TABLE `dashboards`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
