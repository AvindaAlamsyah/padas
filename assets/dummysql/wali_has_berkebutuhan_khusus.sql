-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2021 pada 00.17
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
-- Struktur dari tabel `wali_has_berkebutuhan_khusus`
--

CREATE TABLE `wali_has_berkebutuhan_khusus` (
  `wali_id_wali` bigint(20) NOT NULL,
  `berkebutuhan_khusus_id_berkebutuhan_khusus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wali_has_berkebutuhan_khusus`
--

INSERT INTO `wali_has_berkebutuhan_khusus` VALUES
(40, 7),
(43, 6),
(43, 8),
(44, 16),
(47, 15),
(48, 6),
(49, 2),
(49, 3),
(50, 6),
(50, 10),
(50, 11),
(50, 17),
(50, 18),
(52, 3),
(52, 7),
(52, 9),
(53, 13),
(56, 10),
(58, 5),
(60, 12);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `wali_has_berkebutuhan_khusus`
--
ALTER TABLE `wali_has_berkebutuhan_khusus`
  ADD PRIMARY KEY (`wali_id_wali`,`berkebutuhan_khusus_id_berkebutuhan_khusus`),
  ADD KEY `fk_wali_has_berkebutuhan_khusus_berkebutuhan_khusus1_idx` (`berkebutuhan_khusus_id_berkebutuhan_khusus`),
  ADD KEY `fk_wali_has_berkebutuhan_khusus_wali1_idx` (`wali_id_wali`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `wali_has_berkebutuhan_khusus`
--
ALTER TABLE `wali_has_berkebutuhan_khusus`
  ADD CONSTRAINT `fk_wali_has_berkebutuhan_khusus_berkebutuhan_khusus1` FOREIGN KEY (`berkebutuhan_khusus_id_berkebutuhan_khusus`) REFERENCES `berkebutuhan_khusus` (`id_berkebutuhan_khusus`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wali_has_berkebutuhan_khusus_wali1` FOREIGN KEY (`wali_id_wali`) REFERENCES `wali` (`id_wali`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
