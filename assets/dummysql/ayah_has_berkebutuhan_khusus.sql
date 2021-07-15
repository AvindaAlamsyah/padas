-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2021 pada 23.54
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
-- Struktur dari tabel `ayah_has_berkebutuhan_khusus`
--

CREATE TABLE `ayah_has_berkebutuhan_khusus` (
  `ayah_id_ayah` bigint(20) NOT NULL,
  `berkebutuhan_khusus_id_berkebutuhan_khusus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ayah_has_berkebutuhan_khusus`
--

INSERT INTO `ayah_has_berkebutuhan_khusus` VALUES
(1, 7),
(6, 16),
(9, 4),
(14, 5),
(14, 10),
(19, 8),
(20, 7),
(31, 4),
(34, 9),
(37, 13),
(38, 3),
(43, 18),
(44, 4),
(44, 12),
(48, 9),
(48, 17),
(61, 7),
(64, 9),
(65, 7),
(67, 3),
(70, 16),
(76, 8),
(81, 4),
(82, 5),
(88, 4),
(93, 6),
(93, 12),
(96, 7),
(98, 11),
(99, 11);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ayah_has_berkebutuhan_khusus`
--
ALTER TABLE `ayah_has_berkebutuhan_khusus`
  ADD PRIMARY KEY (`ayah_id_ayah`,`berkebutuhan_khusus_id_berkebutuhan_khusus`),
  ADD KEY `fk_ayah_has_berkebutuhan_khusus_berkebutuhan_khusus1_idx` (`berkebutuhan_khusus_id_berkebutuhan_khusus`),
  ADD KEY `fk_ayah_has_berkebutuhan_khusus_ayah1_idx` (`ayah_id_ayah`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ayah_has_berkebutuhan_khusus`
--
ALTER TABLE `ayah_has_berkebutuhan_khusus`
  ADD CONSTRAINT `fk_ayah_has_berkebutuhan_khusus_ayah1` FOREIGN KEY (`ayah_id_ayah`) REFERENCES `ayah` (`id_ayah`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ayah_has_berkebutuhan_khusus_berkebutuhan_khusus1` FOREIGN KEY (`berkebutuhan_khusus_id_berkebutuhan_khusus`) REFERENCES `berkebutuhan_khusus` (`id_berkebutuhan_khusus`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
