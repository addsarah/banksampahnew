-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 03, 2023 at 04:23 AM
-- Server version: 8.1.0
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banksampahnew`
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
-- Table structure for table `jenissampahs`
--

CREATE TABLE `jenissampahs` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_jenis` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(5, '2023_08_20_103357_create_jenissampahs_table', 1),
(6, '2023_08_20_105233_create_produksampahs_table', 1),
(7, '2023_08_20_110417_create_nasabahs_table', 1),
(8, '2023_08_20_123848_create_pengemudis_table', 1),
(9, '2023_08_20_143337_create_transaksis_table', 1),
(10, '2023_09_14_065016_create_organiks_table', 1),
(11, '2023_09_29_041325_create_produks_table', 1),
(12, '2023_10_03_035529_create_pesanans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nasabahs`
--

CREATE TABLE `nasabahs` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_nasabah` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_nasabah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telepon` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organiks`
--

CREATE TABLE `organiks` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_organik` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_organik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan_hitung` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `pengemudis`
--

CREATE TABLE `pengemudis` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_pengemudi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_pengemudi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kendaraan` enum('motor','mobil') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint UNSIGNED NOT NULL,
  `id_nasabah` bigint UNSIGNED NOT NULL,
  `id_produk` bigint UNSIGNED NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_jemput` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int NOT NULL,
  `stok` int NOT NULL,
  `jenis` enum('organik','kertas','plastik','elektronik','kaca') COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan_hitung` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produksampahs`
--

CREATE TABLE `produksampahs` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_produk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_perkg` decimal(10,2) NOT NULL,
  `stok_tersedia` int NOT NULL,
  `deskripsi_produk` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint UNSIGNED NOT NULL,
  `id_nasabah` bigint UNSIGNED NOT NULL,
  `id_pengemudi` bigint UNSIGNED NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('staff','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `level`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shoto', 'halfhot', 'shoto@gmail.com', 'admin', '$2y$10$CsT0EOMejQPxpaJVCG/MDOy3iERZ7uyAj4DXBmnNj2CQRHg42lfp2', NULL, '2023-10-02 21:00:43', '2023-10-02 21:00:43'),
(2, 'kousuke', 'kou', 'kousuke@gmail.com', 'staff', '$2y$10$K3Xo7vUmyVwsag0SL8/hmeQYykGBeOamvpclpFHJFCT0GscfEfIfu', NULL, '2023-10-02 21:00:43', '2023-10-02 21:00:43'),
(3, 'kento', 'miyaken', 'miyaken@gmail.com', 'staff', '$2y$10$s5lDluT6e6k8MFpTvh0LBOHxoqB2pXQz6A8dQj8Q7YW99SzSxZCRu', NULL, '2023-10-02 21:00:43', '2023-10-02 21:00:43');

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
-- Indexes for table `jenissampahs`
--
ALTER TABLE `jenissampahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nasabahs`
--
ALTER TABLE `nasabahs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nasabahs_email_nasabah_unique` (`email_nasabah`);

--
-- Indexes for table `organiks`
--
ALTER TABLE `organiks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pengemudis`
--
ALTER TABLE `pengemudis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pengemudis_email_pengemudi_unique` (`email_pengemudi`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesanans_id_nasabah_foreign` (`id_nasabah`),
  ADD KEY `pesanans_id_produk_foreign` (`id_produk`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produksampahs`
--
ALTER TABLE `produksampahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksis_id_nasabah_foreign` (`id_nasabah`),
  ADD KEY `transaksis_id_pengemudi_foreign` (`id_pengemudi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
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
-- AUTO_INCREMENT for table `jenissampahs`
--
ALTER TABLE `jenissampahs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nasabahs`
--
ALTER TABLE `nasabahs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organiks`
--
ALTER TABLE `organiks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengemudis`
--
ALTER TABLE `pengemudis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produksampahs`
--
ALTER TABLE `produksampahs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD CONSTRAINT `pesanans_id_nasabah_foreign` FOREIGN KEY (`id_nasabah`) REFERENCES `nasabahs` (`id`),
  ADD CONSTRAINT `pesanans_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produks` (`id`);

--
-- Constraints for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `transaksis_id_nasabah_foreign` FOREIGN KEY (`id_nasabah`) REFERENCES `nasabahs` (`id`),
  ADD CONSTRAINT `transaksis_id_pengemudi_foreign` FOREIGN KEY (`id_pengemudi`) REFERENCES `pengemudis` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
