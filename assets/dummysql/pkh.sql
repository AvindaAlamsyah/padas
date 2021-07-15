-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2021 pada 00.14
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `padas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pkh`
--

CREATE TABLE `pkh` (
  `id_pkh` bigint(20) NOT NULL,
  `siswa_id_siswa` bigint(20) NOT NULL,
  `nomor_pkh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pkh`
--

INSERT INTO `pkh` VALUES
(1, 33, '77429131', '2020-04-09 16:14:36', '2021-07-15 21:28:16', NULL),
(2, 35, '91474599', '2019-03-18 04:04:29', '2021-07-15 21:28:16', NULL),
(3, 76, '33391922', '2019-02-14 21:15:22', '2021-07-15 21:28:16', NULL),
(4, 39, '84672773', '2020-01-15 14:54:01', '2021-07-15 21:28:16', NULL),
(5, 26, '88638140', '2018-07-17 11:43:45', '2021-07-15 21:28:16', NULL),
(6, 51, '60395290', '2020-03-22 09:03:50', '2021-07-15 21:28:16', NULL),
(7, 17, '83215896', '2020-07-05 06:25:04', '2021-07-15 21:28:16', NULL),
(8, 55, '30469211', '2020-04-28 10:20:39', '2021-07-15 21:28:16', NULL),
(9, 44, '47705661', '2021-05-11 13:11:15', '2021-07-15 21:28:16', NULL),
(10, 18, '91701435', '2021-07-04 15:06:34', '2021-07-15 21:28:16', NULL),
(11, 81, '99833596', '2020-03-15 08:42:35', '2021-07-15 21:28:16', NULL),
(12, 96, '99203801', '2019-11-04 01:05:21', '2021-07-15 21:28:16', NULL),
(13, 14, '88639536', '2021-02-01 02:27:08', '2021-07-15 21:28:16', NULL),
(14, 22, '96689561', '2019-08-20 03:22:12', '2021-07-15 21:28:16', NULL),
(15, 89, '07968297', '2019-09-22 04:58:45', '2021-07-15 21:28:16', NULL),
(16, 25, '53357038', '2020-09-21 09:31:01', '2021-07-15 21:28:16', NULL),
(17, 48, '99566975', '2018-12-14 04:07:36', '2021-07-15 21:28:16', NULL),
(18, 9, '41371817', '2019-10-27 15:42:45', '2021-07-15 21:28:16', NULL),
(19, 68, '55042840', '2019-02-02 09:05:54', '2021-07-15 21:28:16', NULL),
(20, 64, '16374065', '2021-05-27 10:34:03', '2021-07-15 21:28:16', NULL),
(21, 60, '19273259', '2019-03-31 07:20:29', '2021-07-15 21:28:16', NULL),
(22, 46, '50856725', '2021-01-16 11:28:59', '2021-07-15 21:28:16', NULL),
(23, 32, '20829766', '2020-07-22 06:49:39', '2021-07-15 21:28:16', NULL),
(24, 34, '52757235', '2021-03-02 03:18:19', '2021-07-15 21:28:16', NULL),
(25, 79, '98354849', '2021-07-15 02:40:52', '2021-07-15 21:28:16', NULL),
(26, 75, '56665369', '2018-11-10 11:24:49', '2021-07-15 21:28:16', NULL),
(27, 86, '49662566', '2018-08-03 12:05:42', '2021-07-15 21:28:16', NULL),
(28, 38, '04441243', '2020-04-24 12:56:46', '2021-07-15 21:28:16', NULL),
(29, 24, '43689002', '2018-08-28 15:36:35', '2021-07-15 21:28:16', NULL),
(30, 21, '64978468', '2020-05-04 20:48:18', '2021-07-15 21:28:16', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pkh`
--
ALTER TABLE `pkh`
  ADD PRIMARY KEY (`id_pkh`),
  ADD KEY `fk_pkh_siswa1_idx` (`siswa_id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pkh`
--
ALTER TABLE `pkh`
  MODIFY `id_pkh` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pkh`
--
ALTER TABLE `pkh`
  ADD CONSTRAINT `fk_pkh_siswa1` FOREIGN KEY (`siswa_id_siswa`) REFERENCES `siswa` (`id_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
