-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 09:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eskul`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftars`
--

CREATE TABLE `daftars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `eskul_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftars`
--

INSERT INTO `daftars` (`id`, `user_id`, `eskul_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-08-18 22:17:25', '2022-08-18 22:17:25'),
(2, 1, 2, '2022-08-18 22:18:04', '2022-08-18 22:18:04'),
(3, 2, 2, '2022-08-18 22:20:17', '2022-08-18 22:20:17'),
(4, 1, 1, '2022-08-18 23:38:46', '2022-08-18 23:38:46');

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakurikulers`
--

CREATE TABLE `ekstrakurikulers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_eskul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ekstrakurikulers`
--

INSERT INTO `ekstrakurikulers` (`id`, `nama_eskul`, `cover`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Pramuka', 'cover/rReEcaLOjvcJjTIyqbMZuhpFQyJJAQmqiFqooBdq.jpg', 'Pramuka adalah nama organisasi pendidikan nonformal yang menyelenggarakan pendidikan kepanduan yang dilaksanakan di Indonesia. Kata “ pramuka merupakan singkatan dari Praja Muda Karana, yang memiliki arti Orang Muda yang Suka Berkarya. “Pramuka” merupakan sebutan bagi anggota gerakan pramuka, yang meliputi : Pramuka Siaga (7-10 tahun), Pramuka Penggalang (11-15 tahun), Pramuka Penegak (16-20 tahun) dan Pramuka Pandega  (21-25 tahun). Kelompok anggota yang lain yaituPembina Pramuka, Andalan Pramuka,Korps Pelatih Pramuka, Pamong, Saka Pramuka, Staf Kwartir, dan Majelis Pembimbing', '2022-08-18 22:11:40', '2022-08-18 22:11:40'),
(2, 'Paskibra', 'cover/1pQ547ysxUrmC7Kb1egtUvNuwqcDCbqyAr7yWUct.jpg', 'PASKIBRA merupakan salah satu ekstrakurikuler (ekskul) yang ada di SMA Plus Darussalam. Keberadaan Ekskul PASKIBRA mempunyai manfaat sangat banyak diantaranya bisa meningkatkan kedisiplinan siswa-siswi, membangkitkan jiwa nasionalisme pada anggotanya, sebagai wahana penyaluran bakat, memupuk rasa tanggung jawab dan membekali anggotanya dengan berbagai keterampilan untuk menyongsong masa depan.', '2022-08-18 22:14:00', '2022-08-18 22:14:00'),
(3, 'Palang Merah Remaja', 'cover/47Ycl0CG2GjOPo9gJmljciG2VzS6KCicuFr8Rkya.jpg', 'Ekstrakurikuler Palang Merah Remaja (PMR) merupakan salah satu ekstrakurikuler yang bergerak dibidang kepalangmerahan dimana ekstrakurikuler Palang Merah Remaja (PMR) adalah wadah pembinaan anggota remaja dengan tujuan membangun dan mengembangkan karakter anggota PMR yang berpedoman pada tribakti PMR dan prinsip', '2022-08-18 22:14:53', '2022-08-18 22:14:53'),
(4, 'Basket', 'cover/ClXBpLpSxZufZkdbDuK2b38ZokFipmYJxIkbLXKw.jpg', 'Kegiatan ekstrakurikuler bola basket merupakan salah satu kegiatan di luar jam pelajaran sekolah dan sebagai wahana untuk menampung, menyalurkan dan membina minat, bakat serta kegemaran peserta didik dalam mengikuti kegiatan ekstrakurikuler.', '2022-08-18 23:14:42', '2022-08-18 23:14:42'),
(5, 'Paduan Suara', 'cover/rmKrjJbGjFuGUtb98qBgY9Rw9BzlocnkEh6yZTri.jpg', 'Ekskul Paduan Suara di SMKN 3 Jember sudah berdiri sejak beberapa tahun yang lalu. Sebelum adanya padus itu nyanyi perkelas. Jadi mereka ada seperti audisi buat nyanyi di walikota atau gubernur, setelah mereka terpilih mereka berkumpul di sekolah lalu terfikirkan lah untuk membuat ekskul padus. Mereka tidak banyak orang. Cuma sekitar 4-5 orang saja tapi karena suara mereka bagus-bagus dan lantang jadi mereka bisa nyanyi dengan baik. Lalu dari situ mereka setiap senin menyanyi dan akhirnya terciptalah ekskul padus. Program ekstrakurikuler paduan suara merupakan tempat siswa/siswi untuk belajar dan melatih kekompakan dalam bernyanyi secara berkelompok maupun perorangan, ekskul ini berperan aktif dalam kegiatan Nasional seperti 17 Agustus, Sumpah pemuda, dll. Kegiatan berkala Paduan Suara adalah upacara bendera setiap hari Senin, mengikuti audisi paduan suara untuk tampil di kantor Walikota maupun kantor Gubernur. Ekskul Paduan Suara biasanya diadakan setiap hari Senin, Jumat dan hari hari tertentu jika sedang mempersiapkan hari Nasional. Biasanya Ekskul Paduan Suara dilakukan setelah pulang sekolah.', '2022-08-18 23:31:18', '2022-08-18 23:31:18'),
(6, 'Sepak Bola', 'cover/1toK1jiwr9TkYVwnENBPVIVDGeqKOAtUV99nI4GE.jpg', 'Kegiatan ekstrakurikuler sepakbola merupakan kegiatan sekolah yang dilakukan di luar jam pelajaran dengan tujuan untuk memperdalam dan memperluas pengetahuan, meningkatkan prestasi, menyalurkan minat, dan bakat serta melengkapi upaya pembinaan manusia seutuhnya', '2022-08-18 23:32:42', '2022-08-18 23:32:42'),
(7, 'Voli', 'cover/b71n1ZyyA15OZIuHuEKCCJ2dQclpfU3WsXuiWOJO.jpg', 'Ekstrakurikuler bola voli merupakan media untuk mendorong prestasi non akademik, pertumbuhan fisik dan perkembangan psikis, meningkatkan kemampuan dan keterampilan dalam bermain bola voli supaya lebih baik, serta pembiasaan pola hidup sehat dengan berolahraga.', '2022-08-18 23:34:48', '2022-08-18 23:34:48'),
(8, 'Teater Kesenian', 'cover/UkyIIBCVzZsd1X1XdCe7PIS3ZiFvJWTK2kdj0EgQ.jpg', 'Pengertian Seni Teater. Seni teater adalah jenis kesenian pertunjukan drama yang dipentaskan di atas panggung. Secara spesifik, seni teater merupakan sebuah seni drama yang menampilkan perilaku manusia dengan gerak, tari, dan nyanyian yang disajikan lengkap dengan dialog dan akting.', '2022-08-18 23:35:40', '2022-08-18 23:35:40'),
(9, 'Remas', 'cover/AENMQo71ds8BBum8Yram0qY1k21WxT7neac4Uumy.jpg', 'Remaja masjid atau sering dikenal berbagai nama seperti IRMAS, REMAS, ataupun PRISMA merupakan perkumpulan pemuda masjid yang melakukan aktivitas social dan ibadah di lingkungan suatu masjid.', '2022-08-18 23:37:45', '2022-08-18 23:37:45');

-- --------------------------------------------------------

--
-- Table structure for table `eskul_images`
--

CREATE TABLE `eskul_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `eskul_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eskul_images`
--

INSERT INTO `eskul_images` (`id`, `eskul_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'eskul_image/ekstra/a26398dca6f47b49876cbaffbc9954f9.jpeg', '2022-08-18 22:11:40', '2022-08-18 22:11:40'),
(2, 2, 'eskul_image/ekstra/8b3bac12926cc1d9fb5d68783376971d.jpeg|eskul_image/ekstra/e9287a53b94620249766921107fe70a3.jpeg', '2022-08-18 22:14:00', '2022-08-18 22:14:00'),
(3, 3, 'eskul_image/ekstra/79e785d63f00348ff360d5a86528580b.jpeg', '2022-08-18 22:14:53', '2022-08-18 22:14:53'),
(4, 4, 'eskul_image/ekstra/496bd33584d955e3913f1a3e82bb2f2d.jpeg', '2022-08-18 23:14:42', '2022-08-18 23:14:42'),
(5, 5, 'eskul_image/ekstra/ecdcd675b3a4cbb5578baf72f255ec21.jpg', '2022-08-18 23:31:18', '2022-08-18 23:31:18'),
(6, 6, 'eskul_image/ekstra/a6197a578fe7778e8d49a95ac425bcfc.jpeg', '2022-08-18 23:32:42', '2022-08-18 23:32:42'),
(7, 7, 'eskul_image/ekstra/b8ffa41d4e492f0fad2f13e29e1762eb.jpg', '2022-08-18 23:34:48', '2022-08-18 23:34:48'),
(8, 8, 'eskul_image/ekstra/f629ed9325990b10543ab5946c1362fb.jpeg', '2022-08-18 23:35:40', '2022-08-18 23:35:40'),
(9, 9, 'eskul_image/ekstra/7171e95248ff768e1ebee3edde01ea7a.jfif', '2022-08-18 23:37:45', '2022-08-18 23:37:45');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_13_103032_create_sessions_table', 1),
(6, '2022_08_15_071218_ekstrakurikuler', 1),
(7, '2022_08_17_111026_create_daftars_table', 1),
(8, '2022_08_18_051507_create_eskul_images_table', 1);

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
('Ci5IKkakHRA2gg9T8h7oyTXhOXL1Qp91oqC1X17u', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWWNkdHBkOVNKOE1ZMWt4Qmk0VU9sUmFsZGtjSUpqZ3ZvelIwVlhJSyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9maWxlIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1660892660),
('OMOWQajUe84SPKgVKn3lOrZBOqhDGZ8eBQP5kCxc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNGpUU3NGdk9rOFFBcHNQa1M2UXNic09yZnd3aHJsZmZvTm9DNzVyZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1660892790),
('YOdhNHTZAoKHVHHaAL7y3U8YqJhFC5hoD6xPxt8q', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoia2dzM09RWXdJMWxKWFRxUG5hd08xQjFnV2NpMEhDYUtVRDlmR2p2biI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9la3N0cmFrdXJpa3VsZXIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1660893436);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentang_saya` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `nim`, `prodi`, `tentang_saya`, `no_hp`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Muh Dien Vito', 'vito@email.com', '123456789', 'Rekayasa Perangkat Lunak', NULL, '081234565789', NULL, '$2y$10$znvMng06QCQhmK4cVLOOzulOCK55H48/az3NccV5BWS0DWJtToRoW', NULL, NULL, NULL, NULL, NULL, '2022-08-18 22:10:57', '2022-08-18 22:10:57'),
(2, 'Ojet Gans But Lie', 'ojet@gmail.com', '34534564567567', 'Multimedia', 'test', '043483495345', NULL, '$2y$10$iVijYB2W9mX6ML1c7yeBE.r7R/2lHcqpN/99p7pMhHyCbu6.W01U.', NULL, NULL, NULL, NULL, NULL, '2022-08-18 22:20:00', '2022-08-18 22:34:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftars`
--
ALTER TABLE `daftars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daftars_user_id_foreign` (`user_id`),
  ADD KEY `daftars_eskul_id_foreign` (`eskul_id`);

--
-- Indexes for table `ekstrakurikulers`
--
ALTER TABLE `ekstrakurikulers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ekstrakurikulers_nama_eskul_unique` (`nama_eskul`);

--
-- Indexes for table `eskul_images`
--
ALTER TABLE `eskul_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eskul_images_eskul_id_foreign` (`eskul_id`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nim_unique` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftars`
--
ALTER TABLE `daftars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ekstrakurikulers`
--
ALTER TABLE `ekstrakurikulers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `eskul_images`
--
ALTER TABLE `eskul_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- Constraints for dumped tables
--

--
-- Constraints for table `daftars`
--
ALTER TABLE `daftars`
  ADD CONSTRAINT `daftars_eskul_id_foreign` FOREIGN KEY (`eskul_id`) REFERENCES `ekstrakurikulers` (`id`),
  ADD CONSTRAINT `daftars_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `eskul_images`
--
ALTER TABLE `eskul_images`
  ADD CONSTRAINT `eskul_images_eskul_id_foreign` FOREIGN KEY (`eskul_id`) REFERENCES `ekstrakurikulers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
