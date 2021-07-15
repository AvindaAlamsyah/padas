-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2021 pada 00.16
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
-- Struktur dari tabel `siswa_has_berkebutuhan_khusus`
--

CREATE TABLE `siswa_has_berkebutuhan_khusus` (
  `siswa_id_siswa` bigint(20) NOT NULL,
  `berkebutuhan_khusus_id_berkebutuhan_khusus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa_has_berkebutuhan_khusus`
--

INSERT INTO `siswa_has_berkebutuhan_khusus` VALUES
(1, 9),
(7, 6),
(10, 14),
(27, 11),
(29, 5),
(36, 8),
(40, 5),
(44, 3),
(49, 10),
(69, 15),
(70, 2),
(77, 9),
(77, 15),
(79, 7),
(81, 8),
(83, 14),
(87, 3),
(94, 9),
(97, 8),
(99, 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa_has_berkebutuhan_khusus`
--
ALTER TABLE `siswa_has_berkebutuhan_khusus`
  ADD PRIMARY KEY (`siswa_id_siswa`,`berkebutuhan_khusus_id_berkebutuhan_khusus`),
  ADD KEY `fk_siswa_has_berkebutuhan_khusus_berkebutuhan_khusus1_idx` (`berkebutuhan_khusus_id_berkebutuhan_khusus`),
  ADD KEY `fk_siswa_has_berkebutuhan_khusus_siswa1_idx` (`siswa_id_siswa`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `siswa_has_berkebutuhan_khusus`
--
ALTER TABLE `siswa_has_berkebutuhan_khusus`
  ADD CONSTRAINT `fk_siswa_has_berkebutuhan_khusus_berkebutuhan_khusus1` FOREIGN KEY (`berkebutuhan_khusus_id_berkebutuhan_khusus`) REFERENCES `berkebutuhan_khusus` (`id_berkebutuhan_khusus`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_siswa_has_berkebutuhan_khusus_siswa1` FOREIGN KEY (`siswa_id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
