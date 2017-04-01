-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Mei 2015 pada 10.06
-- Versi Server: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Akhmad Dharma kasman', 'Jalan Kebahagiaan No. 23', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Kresna Abimanyu', 'jalan Kebagusan No. 284', '0000-00-00 00:00:00', '2015-05-03 22:18:09'),
(4, 'Sutrisno', 'Jl. Tubagus Angke 6 Gg. fatahilah No. 455', '2015-05-03 22:26:37', '2015-05-03 22:26:37'),
(5, 'Dodon Suhendar', 'jalan umar bakri 443', '2015-05-03 23:28:55', '2015-05-03 23:29:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hobi`
--

CREATE TABLE IF NOT EXISTS `hobi` (
`id` int(10) unsigned NOT NULL,
  `hobi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anggota_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `hobi`
--

INSERT INTO `hobi` (`id`, `hobi`, `anggota_id`, `created_at`, `updated_at`) VALUES
(1, 'Traveling', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Nonton Film thriller', 2, '0000-00-00 00:00:00', '2015-05-03 23:53:04'),
(3, 'Kuliner', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Membaca Novel', 2, '0000-00-00 00:00:00', '2015-05-03 23:53:20'),
(17, 'Nonton Film horor', 4, '2015-05-03 23:37:17', '2015-05-03 23:52:41'),
(18, 'Membaca Buku fiksi', 4, '2015-05-03 23:48:36', '2015-05-03 23:51:38'),
(19, 'Makan Besar', 5, '2015-05-05 15:00:35', '2015-05-05 15:00:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_04_25_141738_buat_table_anggota', 1),
('2015_05_01_044901_create_anggotas_table', 2),
('2015_05_01_054515_buat_table_hobi', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Akhmad Dharma Kasman', 'akhmad_dharma@yahoo.com', '$2y$10$82.gEAk94FLKc70H62O8uOPOu8leIpQO.TI6fpQcp0zr.NMFNnRJO', 'XsNOFhMArp0LyicFYVGxuEgCYABRz4ChL4y94bjntEusFi5QOTHsuDLZRHh2', '2015-05-06 14:01:44', '2015-05-06 14:32:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hobi`
--
ALTER TABLE `hobi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hobi`
--
ALTER TABLE `hobi`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
