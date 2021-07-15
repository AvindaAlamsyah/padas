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
-- Struktur dari tabel `kks`
--

CREATE TABLE `kks` (
  `id_kks` bigint(20) NOT NULL,
  `siswa_id_siswa` bigint(20) NOT NULL,
  `nomor_kks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kks`
--

INSERT INTO `kks` VALUES
(1, 3, '21797842', '2019-08-27 11:00:13', '2021-07-15 21:24:05', NULL),
(2, 97, '85676237', '2021-05-09 21:42:20', '2021-07-15 21:24:05', NULL),
(3, 28, '98599325', '2018-07-23 05:12:51', '2021-07-15 21:24:05', NULL),
(4, 12, '59904694', '2020-07-21 19:19:07', '2021-07-15 21:24:05', NULL),
(5, 58, '73517306', '2021-04-27 22:42:13', '2021-07-15 21:24:05', NULL),
(6, 25, '74247714', '2021-04-17 21:43:43', '2021-07-15 21:24:05', NULL),
(7, 52, '35653806', '2021-05-26 15:37:15', '2021-07-15 21:24:05', NULL),
(8, 85, '75676483', '2020-09-26 09:18:09', '2021-07-15 21:24:05', NULL),
(9, 54, '34907092', '2018-09-10 10:08:40', '2021-07-15 21:24:05', NULL),
(10, 77, '50298501', '2020-12-09 06:00:12', '2021-07-15 21:24:05', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kks`
--
ALTER TABLE `kks`
  ADD PRIMARY KEY (`id_kks`),
  ADD KEY `fk_kks_siswa1_idx` (`siswa_id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kks`
--
ALTER TABLE `kks`
  MODIFY `id_kks` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kks`
--
ALTER TABLE `kks`
  ADD CONSTRAINT `fk_kks_siswa1` FOREIGN KEY (`siswa_id_siswa`) REFERENCES `siswa` (`id_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
