-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2021 pada 00.11
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
-- Struktur dari tabel `kps`
--

CREATE TABLE `kps` (
  `id_kps` bigint(20) NOT NULL,
  `siswa_id_siswa` bigint(20) NOT NULL,
  `nomor_kps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kps`
--

INSERT INTO `kps` VALUES
(1, 78, '44558192', '2020-10-26 22:46:49', '2021-07-15 21:24:31', NULL),
(2, 29, '41688984', '2020-12-20 17:59:26', '2021-07-15 21:24:31', NULL),
(3, 64, '98085873', '2020-09-27 20:28:13', '2021-07-15 21:24:31', NULL),
(4, 79, '77156303', '2019-04-29 02:46:02', '2021-07-15 21:24:31', NULL),
(5, 68, '64196657', '2018-12-09 01:43:26', '2021-07-15 21:24:31', NULL),
(6, 27, '91223876', '2019-10-20 22:27:47', '2021-07-15 21:24:31', NULL),
(7, 46, '04254249', '2020-07-08 17:49:54', '2021-07-15 21:24:31', NULL),
(8, 76, '65478103', '2020-10-14 01:20:32', '2021-07-15 21:24:31', NULL),
(9, 96, '75811457', '2021-06-02 11:49:33', '2021-07-15 21:24:31', NULL),
(10, 15, '56742435', '2021-07-04 15:06:14', '2021-07-15 21:24:31', NULL),
(11, 87, '64371900', '2019-06-25 20:04:34', '2021-07-15 21:24:31', NULL),
(12, 90, '47417595', '2020-05-31 08:45:59', '2021-07-15 21:24:31', NULL),
(13, 37, '59728931', '2019-08-14 09:30:35', '2021-07-15 21:24:31', NULL),
(14, 48, '48057103', '2020-06-17 17:58:35', '2021-07-15 21:24:31', NULL),
(15, 43, '66131892', '2021-04-21 10:29:55', '2021-07-15 21:24:31', NULL),
(16, 49, '02333779', '2020-06-06 23:06:07', '2021-07-15 21:24:31', NULL),
(17, 70, '41794586', '2021-06-19 09:58:18', '2021-07-15 21:24:31', NULL),
(18, 86, '07872273', '2018-10-15 07:17:53', '2021-07-15 21:24:31', NULL),
(19, 66, '76226526', '2020-01-21 10:15:34', '2021-07-15 21:24:31', NULL),
(20, 31, '19250472', '2020-11-30 00:57:15', '2021-07-15 21:24:31', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kps`
--
ALTER TABLE `kps`
  ADD PRIMARY KEY (`id_kps`),
  ADD KEY `fk_kps_siswa1_idx` (`siswa_id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kps`
--
ALTER TABLE `kps`
  MODIFY `id_kps` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kps`
--
ALTER TABLE `kps`
  ADD CONSTRAINT `fk_kps_siswa1` FOREIGN KEY (`siswa_id_siswa`) REFERENCES `siswa` (`id_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
