-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2021 pada 23.58
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
-- Struktur dari tabel `kip`
--

CREATE TABLE `kip` (
  `id_kip` bigint(20) NOT NULL,
  `siswa_id_siswa` bigint(20) NOT NULL,
  `nomor_kip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_tertera_kip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kip`
--

INSERT INTO `kip` VALUES
(1, 85, '85320055', 'Chanel Wilkinson', '2019-03-14 02:45:14', '2021-07-15 21:23:36', NULL),
(2, 99, '58487310', 'Ms. Eunice Corwin', '2020-03-10 18:30:37', '2021-07-15 21:23:36', NULL),
(3, 93, '47507586', 'Dr. Mittie Bartoletti II', '2018-09-17 20:53:12', '2021-07-15 21:23:36', NULL),
(4, 59, '73006848', 'Tyrique Davis', '2021-04-10 07:48:41', '2021-07-15 21:23:36', NULL),
(5, 50, '17264716', 'Hosea Rau', '2018-07-31 20:59:28', '2021-07-15 21:23:36', NULL),
(6, 49, '15216823', 'Prof. Talia Simonis', '2019-09-15 17:35:02', '2021-07-15 21:23:36', NULL),
(7, 26, '51726997', 'Mrs. Felicia Schumm', '2019-12-01 06:12:16', '2021-07-15 21:23:36', NULL),
(8, 1, '92163102', 'Prof. Christian Gutkowski', '2019-06-25 02:34:09', '2021-07-15 21:23:36', NULL),
(9, 12, '75533762', 'Dakota Leannon', '2019-02-07 18:12:36', '2021-07-15 21:23:36', NULL),
(10, 32, '54724181', 'Elva Kling', '2019-03-09 06:13:03', '2021-07-15 21:23:36', NULL),
(11, 38, '74610860', 'Prof. Verla Gaylord', '2019-12-30 18:27:50', '2021-07-15 21:23:36', NULL),
(12, 14, '26397306', 'Miss Tessie Fisher', '2020-05-30 11:38:40', '2021-07-15 21:23:36', NULL),
(13, 77, '97861645', 'Ismael Kreiger', '2020-05-23 19:38:35', '2021-07-15 21:23:36', NULL),
(14, 30, '28419662', 'Mr. Percy Harris V', '2018-08-04 21:08:40', '2021-07-15 21:23:36', NULL),
(15, 41, '17590914', 'Matt Beahan DVM', '2018-08-17 05:03:31', '2021-07-15 21:23:36', NULL),
(16, 98, '79551496', 'Prof. Keyon Russel', '2019-02-06 07:01:27', '2021-07-15 21:23:36', NULL),
(17, 54, '04802402', 'Misty Marvin', '2019-01-06 01:09:12', '2021-07-15 21:23:36', NULL),
(18, 16, '99644567', 'Prof. Natalie White', '2019-12-02 04:38:20', '2021-07-15 21:23:36', NULL),
(19, 39, '17297691', 'Howard Morar', '2019-03-23 14:48:27', '2021-07-15 21:23:36', NULL),
(20, 20, '99675547', 'Diamond Smitham', '2018-08-30 05:34:43', '2021-07-15 21:23:36', NULL),
(21, 82, '09010239', 'Ms. Ciara Smith PhD', '2020-01-12 20:49:03', '2021-07-15 21:23:36', NULL),
(22, 66, '26901916', 'Joesph Smitham III', '2020-01-14 00:10:02', '2021-07-15 21:23:36', NULL),
(23, 11, '84661258', 'Monserrat Franecki', '2020-12-05 09:24:54', '2021-07-15 21:23:36', NULL),
(24, 24, '17411745', 'Dr. Heber Hoppe DDS', '2019-05-06 12:28:09', '2021-07-15 21:23:36', NULL),
(25, 75, '99381578', 'Jamil O\'Reilly V', '2020-07-10 15:24:07', '2021-07-15 21:23:36', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kip`
--
ALTER TABLE `kip`
  ADD PRIMARY KEY (`id_kip`),
  ADD KEY `fk_kip_siswa1_idx` (`siswa_id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kip`
--
ALTER TABLE `kip`
  MODIFY `id_kip` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kip`
--
ALTER TABLE `kip`
  ADD CONSTRAINT `fk_kip_siswa1` FOREIGN KEY (`siswa_id_siswa`) REFERENCES `siswa` (`id_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
