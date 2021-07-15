-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2021 pada 23.55
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
-- Struktur dari tabel `ibu_has_berkebutuhan_khusus`
--

CREATE TABLE `ibu_has_berkebutuhan_khusus` (
  `ibu_id_ibu` bigint(20) NOT NULL,
  `berkebutuhan_khusus_id_berkebutuhan_khusus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ibu_has_berkebutuhan_khusus`
--

INSERT INTO `ibu_has_berkebutuhan_khusus` VALUES
(10, 6),
(10, 16),
(10, 17),
(11, 14),
(12, 7),
(12, 12),
(13, 5),
(13, 9),
(13, 17),
(14, 2),
(14, 16),
(14, 18),
(16, 12),
(18, 7),
(18, 12),
(18, 15),
(20, 17),
(21, 9),
(22, 4),
(23, 18),
(24, 2),
(24, 18),
(25, 13),
(25, 15),
(27, 12),
(28, 2),
(28, 4),
(28, 8),
(28, 10),
(29, 18);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ibu_has_berkebutuhan_khusus`
--
ALTER TABLE `ibu_has_berkebutuhan_khusus`
  ADD PRIMARY KEY (`ibu_id_ibu`,`berkebutuhan_khusus_id_berkebutuhan_khusus`),
  ADD KEY `fk_ibu_has_berkebutuhan_khusus_berkebutuhan_khusus1_idx` (`berkebutuhan_khusus_id_berkebutuhan_khusus`),
  ADD KEY `fk_ibu_has_berkebutuhan_khusus_ibu1_idx` (`ibu_id_ibu`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ibu_has_berkebutuhan_khusus`
--
ALTER TABLE `ibu_has_berkebutuhan_khusus`
  ADD CONSTRAINT `fk_ibu_has_berkebutuhan_khusus_berkebutuhan_khusus1` FOREIGN KEY (`berkebutuhan_khusus_id_berkebutuhan_khusus`) REFERENCES `berkebutuhan_khusus` (`id_berkebutuhan_khusus`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ibu_has_berkebutuhan_khusus_ibu1` FOREIGN KEY (`ibu_id_ibu`) REFERENCES `ibu` (`id_ibu`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
