-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Apr 2022 pada 11.50
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_parkir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `nama` varchar(100) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  `id_mall` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`nama`, `id_role`, `id_mall`) VALUES
('afif zakaria', NULL, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_parkir`
--

CREATE TABLE `detail_parkir` (
  `id` int(11) NOT NULL,
  `stnk` varchar(25) NOT NULL,
  `tempat_parkir` int(11) DEFAULT NULL,
  `masuk` datetime NOT NULL DEFAULT current_timestamp(),
  `keluar` datetime DEFAULT current_timestamp(),
  `harga` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_parkir`
--

INSERT INTO `detail_parkir` (`id`, `stnk`, `tempat_parkir`, `masuk`, `keluar`, `harga`) VALUES
(29, 'L 3832 EU', 11, '2022-04-22 15:45:26', NULL, 0),
(30, 'L 1227 LU', 10, '2022-04-22 15:45:39', NULL, 0),
(31, 'N 4421 BU', 1, '2022-04-22 15:45:56', NULL, 0),
(32, 'L 4043 NO', NULL, '2022-04-23 05:32:37', NULL, 0),
(33, 'B 1122 LO', NULL, '2022-04-23 05:32:46', NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `stnk` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`stnk`) VALUES
(''),
('1111'),
('11111'),
('B 101 NO'),
('B 1122 LO'),
('K 88192 LO'),
('kontol'),
('L 1212 BO'),
('L 1227 BO'),
('L 1227 LU'),
('L 12333'),
('L 1234 BO'),
('L 1443 NO'),
('L 1927'),
('L 1927 BO'),
('L 2223 BO'),
('L 2233 BO'),
('L 2345 BO'),
('L 2392 BO'),
('L 3832 EU'),
('L 4043 NO'),
('L 9998 BO'),
('L bO fd'),
('L BOBOBO'),
('L iksan BO'),
('l testing 123'),
('L1234 BO'),
('L2220p'),
('N 1233 LO'),
('N 1822 BI'),
('N 20201 LO'),
('N 4421 BU'),
('N BO'),
('testing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mall`
--

CREATE TABLE `mall` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mall`
--

INSERT INTO `mall` (`id`, `nama`) VALUES
(1, 'TP'),
(2, 'TP'),
(3, 'TP'),
(4, 'TP'),
(5, 'TP'),
(6, 'TP'),
(7, 'TP'),
(8, 'TP'),
(9, 'TP'),
(10, 'TP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2022_04_07_030918_create_akun', 1),
(5, '2014_10_12_000000_create_users_table', 2),
(6, '2014_10_12_100000_create_password_resets_table', 2),
(7, '2019_08_19_000000_create_failed_jobs_table', 2),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `parkiran`
--

CREATE TABLE `parkiran` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `id_mall` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `parkiran`
--

INSERT INTO `parkiran` (`id`, `nama`, `id_mall`) VALUES
(1, 'TP1\r\n', 1),
(2, 'TP1', 2),
(3, 'TP1', 3),
(4, 'TP1', 4),
(5, 'TP1', 5),
(6, 'TP1', 6),
(7, 'TP1', 7),
(8, 'TP1', 8),
(9, 'TP1', 9),
(10, 'TP1', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `tipe` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_parkir`
--

CREATE TABLE `tempat_parkir` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `id_parkiran` int(11) DEFAULT NULL,
  `kondisi` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tempat_parkir`
--

INSERT INTO `tempat_parkir` (`id`, `nama`, `id_parkiran`, `kondisi`) VALUES
(1, 'parkiran TP', 1, 1),
(2, 'parkiran ROYAL', 2, 0),
(4, 'Parkiran PTC', 3, 0),
(9, 'lambo', 4, 0),
(10, 'Parkiran', 5, 1),
(11, 'parkir', 6, 1),
(12, 'laborgini', 7, 0),
(13, 'ferrari', 8, 0),
(15, 'honda', 9, 0),
(16, 'jazz', 10, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'iksan', 'admin', 'admin123', NULL, '$2y$10$m/1ZP20SCODtF3/EGj7v8Og.xVMacF5BQDMR9THwNPsbjCF9kYcwa', NULL, '2022-04-22 08:08:34', '2022-04-22 08:08:34'),
(7, 'afif gans', 'petugasM', 'petugasMasuk123', NULL, '$2y$10$0.hQLzA6Mj79d8YhHB0bG.O3AMmN8nUDMmYGhdp4F8/a9yRYA16GS', NULL, '2022-04-22 08:11:28', '2022-04-22 08:11:28'),
(8, 'muklis', 'petugasK', 'petugasKeluar123', NULL, '$2y$10$6aUo3qQTjnGZy/HZaKMk7ekqNhiKxEgKypBl3O3yNXAH.XGPsYJZi', NULL, '2022-04-22 21:50:42', '2022-04-22 21:50:42'),
(9, 'supri', 'petugasR', 'petugasRuang123', NULL, '$2y$10$PubGGsE0Ts2ikoEBXpAXv.WxspQC4YJ6RV1tq5U0mWgK9fT8LaZ.2', NULL, '2022-04-22 21:53:02', '2022-04-22 21:53:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD UNIQUE KEY `unq_akun_id_role` (`id_role`),
  ADD UNIQUE KEY `unq_akun_id_mall` (`id_mall`);

--
-- Indeks untuk tabel `detail_parkir`
--
ALTER TABLE `detail_parkir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detail_parkir_tempat_parkir` (`tempat_parkir`),
  ADD KEY `fk_detail_parkir_kendaraan` (`stnk`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`stnk`);

--
-- Indeks untuk tabel `mall`
--
ALTER TABLE `mall`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `parkiran`
--
ALTER TABLE `parkiran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unq_parkiran_id_mall` (`id_mall`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tempat_parkir`
--
ALTER TABLE `tempat_parkir`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unq_tempat_parkir_id_parkiran` (`id_parkiran`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_parkir`
--
ALTER TABLE `detail_parkir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mall`
--
ALTER TABLE `mall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `parkiran`
--
ALTER TABLE `parkiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tempat_parkir`
--
ALTER TABLE `tempat_parkir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `fk_akun_mall` FOREIGN KEY (`id_mall`) REFERENCES `mall` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `detail_parkir`
--
ALTER TABLE `detail_parkir`
  ADD CONSTRAINT `fk_detail_parkir_kendaraan` FOREIGN KEY (`stnk`) REFERENCES `kendaraan` (`stnk`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detail_parkir_tempat_parkir` FOREIGN KEY (`tempat_parkir`) REFERENCES `tempat_parkir` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `parkiran`
--
ALTER TABLE `parkiran`
  ADD CONSTRAINT `fk_parkiran_mall` FOREIGN KEY (`id_mall`) REFERENCES `mall` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `fk_role_akun` FOREIGN KEY (`id`) REFERENCES `akun` (`id_role`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tempat_parkir`
--
ALTER TABLE `tempat_parkir`
  ADD CONSTRAINT `fk_tempat_parkir_parkiran` FOREIGN KEY (`id_parkiran`) REFERENCES `parkiran` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
