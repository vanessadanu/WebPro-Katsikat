-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 07:47 AM
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
-- Database: `finpro_katsikat`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_file_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `image_file_url`, `created_at`, `updated_at`) VALUES
(4, 'Kenapa sih Kita Perlu Cuci Sepatu?', '[Orang sepatunya masih bersih, ngapain dicuci?🤨]\r\n\r\nEitssss, sepatu yang kelihatan bersih dari luar belum tentu bersih juga di dalam lohhh, bisa jadi ada banyak bakteri yang tumbuh dan tertimbun di bagian dalam sepatu kita🫢.\r\n\r\nTernyata ada banyak permasalahan yang bisa timbul karena kita males cuci sepatu loh, mulai dari bau kaki hingga infeksi. Nah untuk menghindari hal itu, kita mesti rutin cuci sepatu kita minimal 1-2 minggu sekali ya gais, terutama deep clean di Katsikat.id biar sepatu kita bersih to the bone ygy🤩', '[\"\\/storage\\/carousel\\/eWwtiEhCQndRVrSalMcGelYaqCIHsiRbb7nB6jVM.jpg\",\"\\/storage\\/carousel\\/8ivVaf3YQz61Nf1OKOwXSlrVHMJ3Z8yufrC3YFIg.jpg\",\"\\/storage\\/carousel\\/UFRUPMt36CBQ3tl6EaqFr6C4eT4LrIYUlvdAuRUD.jpg\"]', '2023-06-29 21:03:44', '2023-06-29 21:03:44'),
(5, 'Cara Menyimpan Sepatu', '[Sepatu disimpen di kresek boleh ga si?🤨]\r\n\r\nHayoo kalian disini ada yang nyimpen sepatu di kantong plastik ga nii? Ternyata ga boleh loo gais, karena bisa membuat kondisi sepatu menjadi lembap dan menyebabkan tumbuhnya jamur🤯\r\nTempat penyimpanan sepatu yang baik adalah tempat yang kering dan bersih sehingga tidak terjadi pertumbuhan bakteri dan jamur🧹\r\n\r\nSelain rajin cuci sepatu, kita juga harus rajin bersih-bersih rak/lemari sepatu kita ya gaiss😉', '[\"\\/storage\\/carousel\\/VqA0urTjUVHkllN2TnkOlQIiDYCmdHDBLMbN1f8F.jpg\",\"\\/storage\\/carousel\\/jeXAnw7sHijhfuGRSQq511NpnOfb9YquRkqKIBZs.jpg\",\"\\/storage\\/carousel\\/ycLKyee8zfowAuAPeoRG7oJMHHUu4pOWMZrlkMKa.jpg\"]', '2023-06-29 21:04:22', '2023-06-29 21:04:22'),
(6, 'Sepatu Bau???', '[Kok sepatuku bau sih?🦨]\r\n\r\nAda yang kepo ga nih, apa sih yang bikin sepatu jadi bau? Nah disini mimin jelasin beberapa penyebabnya nih gais…\r\n\r\nJadi, setelah kita tau penyebabnya, yuk kita cegah biar sepatu kita ga menimbulkan bau nggak sedap yang mengganggu👃', '[\"\\/storage\\/carousel\\/tikYfvlnffzlsd8e1I6vitE5YZpalkti644ft3dw.jpg\",\"\\/storage\\/carousel\\/I93xtCsRQzM3f3nNT5faznjMl6NG2joD3EovHLOf.jpg\",\"\\/storage\\/carousel\\/5t15MVSvHL7qFKkBLpBw69NhJrMEM6s0TLDuRGTJ.jpg\"]', '2023-06-29 21:05:41', '2023-06-29 21:05:41'),
(7, 'Cara Mencuci Sepatu dengan Benar', '[Gimana sih cara sepatu yang bener?🪥]\r\nTernyata kita gabisa asal-asalan cuci sepatu tanpa memerhatikan sepatu kita loh karena bisa memperpendek usia sepatu kita.\r\n\r\nJadi emang paling bener tinggal serahin ke Katsikat.id aja gais langsung beresss🏃‍♂️🏃‍♂️', '[\"\\/storage\\/carousel\\/Nujbe0zqhxtEBbCOen0ewyvbtXoxl7PwCQKo6zck.jpg\",\"\\/storage\\/carousel\\/1xegQignxETmeW1zApeR9NgUSFLrbeg6Cju4TIT3.jpg\",\"\\/storage\\/carousel\\/glz5hKYG3ros85I3BWwEYtx3O8x8ODljm3Ib5s0B.jpg\"]', '2023-06-29 21:06:48', '2023-06-29 21:06:48');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_04_03_063627_create_categories_table', 1),
(7, '2023_04_04_064655_create_portfolios_table', 1),
(8, '2023_04_03_063627_create_services_table', 2),
(9, '2023_04_04_063627_create_services_table', 3),
(10, '2023_04_05_063627_create_services_table', 4),
(11, '2023_04_05_064655_create_portfolios_table', 4),
(12, '2023_06_28_094006_create_articles_table', 5);

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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `image_file_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `description`, `service_id`, `image_file_url`, `created_at`, `updated_at`) VALUES
(14, 'Air Jordan', 'Kami pernah mencuci Nike Air Jordan yang merupakan sepatu dengan penjualan terbanyak kedua di dunia.', 1, '/storage/uploads/Ev8ffRVkXPIGvwYeeHWNyl2IUNaQdowl83UXa8BX.jpg', '2023-07-03 12:18:04', '2023-07-03 12:18:04'),
(15, 'Nike Force', 'Nike Force merupakan sepatu paling laris di dunia. Sepatu ini sudah hampir dijual lebih dari 1000 pasang di dunia.', 2, '/storage/uploads/mygQSfp1fkEvw4KwcyJBHTyyhlghqkMagPuGODwE.jpg', '2023-07-03 12:19:39', '2023-07-03 12:19:39'),
(16, 'Converse', 'Converse salah satu merk sepatu yang paling banyak digemari. Kami pernah menangani Converse putih favorit kaum muda.', 3, '/storage/uploads/xWw1SDELPOuBNSYYoMU5XgqC6w4zw1UVqTF4HwYb.jpg', '2023-07-03 12:20:17', '2023-07-03 12:20:17'),
(17, 'Adidas', 'Kami pernah mencuci sepatu Adidas Grand Court putih yang merupakan sepatu terlaris milik Adidas.', 2, '/storage/uploads/c3Lj456XDd2NfuLFaq2vmXXuRxABQmHzFVAqDwR4.jpg', '2023-07-03 12:23:41', '2023-07-03 12:23:41'),
(18, 'Eiger', 'Eiger juga merupaka merk lokal favorit pendaki gunung yang pernah kami tangani dengan sepenuh hati.', 4, '/storage/uploads/e78JjhPWJ51aPfCTMwvLl3Lx6Zv3pzFPWXbMJHLe.jpg', '2023-07-03 12:24:50', '2023-07-03 12:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Outside Clean', 'Membersihkan bagian luar sepatu (outsole, midsole, dan upper)', 25000, '2023-06-27 09:21:00', '2023-06-27 23:31:07'),
(2, 'Deep Clean', 'Membersihkan seluruh bagian sepatu (outsole, midsole, upper, insole, dan lace)', 35000, '2023-06-27 09:20:42', '2023-06-27 22:53:19'),
(3, 'Unyellowing', 'Deep clean dengan tambahan membersihkan noda kuning pada bagian midsole', 45000, '2023-06-27 22:54:26', '2023-06-27 22:54:26'),
(4, 'Sandal', 'Perawatan pembersihan khusus untuk sandal', 15000, '2023-06-27 22:55:00', '2023-06-27 22:55:00');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Pat Lynch', 'ezekiel.nienow@yahoo.com', NULL, '', NULL, '2023-06-05 22:15:07', '2023-06-05 22:15:07'),
(4, 'Freddie Hickle Jr.', 'dare.dave@yahoo.com', NULL, '', NULL, '2023-06-05 22:15:07', '2023-06-05 22:15:07'),
(5, 'Waldo Stoltenberg', 'xbins@yahoo.com', NULL, '', NULL, '2023-06-05 22:15:07', '2023-06-05 22:15:07'),
(6, 'Demetrius Cronin V', 'warren80@tremblay.com', NULL, '', NULL, '2023-06-05 22:15:07', '2023-06-05 22:15:07'),
(7, 'Odessa Streich', 'nat26@hotmail.com', NULL, '', NULL, '2023-06-05 22:15:07', '2023-06-05 22:15:07'),
(8, 'Norris Batz', 'phagenes@hotmail.com', NULL, '', NULL, '2023-06-05 22:15:07', '2023-06-05 22:15:07'),
(9, 'Dr. Eda Walsh', 'bhuel@boyle.biz', NULL, '', NULL, '2023-06-05 22:15:07', '2023-06-05 22:15:07'),
(10, 'Trevor Denesik', 'mdonnelly@yahoo.com', NULL, '', NULL, '2023-06-05 22:15:07', '2023-06-05 22:15:07'),
(11, 'Justus Marquardt', 'madisen05@yahoo.com', NULL, '', NULL, '2023-06-05 22:15:07', '2023-06-05 22:15:07'),
(13, 'Vanessa D', 'vanillipeace@gmail.com', NULL, '$2y$10$Wv8kTxRt.i8KZHB7Ab4WxO.gahgE91dwIuo34W55D3YeHwYDf5QAa', NULL, '2023-06-05 22:20:21', '2023-06-05 22:20:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
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
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolios_service_id_foreign` (`service_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD CONSTRAINT `portfolios_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
