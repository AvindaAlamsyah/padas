-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Jul 2021 pada 07.08
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `berkebutuhan_khusus_id_berkebutuhan_khusus` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wali_has_berkebutuhan_khusus`
--

INSERT INTO `wali_has_berkebutuhan_khusus` VALUES
(7, 1, '2021-07-18 19:14:31', '2021-07-17 09:53:23', NULL),
(8, 14, '2021-07-14 23:28:30', '2021-07-17 02:53:50', NULL),
(9, 12, '2021-07-03 10:43:57', '2021-07-03 18:47:02', NULL),
(10, 12, '2021-06-22 21:13:23', '2021-07-11 20:11:26', NULL),
(12, 13, '2021-07-07 23:41:28', '2021-07-07 22:24:26', NULL),
(17, 13, '2021-07-15 11:39:02', '2021-07-19 17:37:54', NULL),
(22, 12, '2021-07-09 05:54:53', '2021-06-30 15:43:43', NULL),
(25, 9, '2021-07-01 00:37:36', '2021-07-19 01:17:00', NULL),
(28, 1, '2021-07-05 14:23:08', '2021-07-09 05:22:13', NULL),
(28, 7, '2021-06-23 09:15:54', '2021-07-04 15:35:18', NULL),
(31, 4, '2021-07-03 04:21:10', '2021-07-13 04:17:30', NULL),
(42, 3, '2021-06-29 09:54:23', '2021-07-12 17:26:05', NULL),
(48, 16, '2021-07-10 11:31:35', '2021-07-10 02:00:36', NULL),
(50, 2, '2021-07-03 11:05:17', '2021-07-06 14:39:45', NULL),
(52, 2, '2021-06-29 22:13:45', '2021-07-16 06:06:39', NULL),
(58, 15, '2021-06-27 14:50:20', '2021-07-13 01:22:43', NULL),
(71, 16, '2021-07-16 09:29:34', '2021-07-04 12:47:50', NULL),
(78, 3, '2021-07-08 03:08:58', '2021-06-28 00:35:04', NULL),
(82, 12, '2021-07-19 14:42:35', '2021-07-07 09:58:48', NULL),
(84, 17, '2021-07-21 15:27:14', '2021-07-09 17:39:24', NULL),
(88, 4, '2021-06-30 17:52:31', '2021-06-23 16:23:51', NULL),
(94, 17, '2021-07-14 08:22:07', '2021-07-12 02:36:16', NULL),
(126, 15, '2021-07-06 20:13:43', '2021-07-13 00:58:14', NULL),
(138, 17, '2021-07-13 06:29:36', '2021-07-10 22:42:13', NULL),
(149, 12, '2021-07-20 13:56:43', '2021-07-20 01:17:18', NULL),
(154, 6, '2021-07-12 13:23:43', '2021-07-10 13:50:29', NULL),
(156, 13, '2021-07-07 21:35:20', '2021-07-19 05:03:30', NULL),
(158, 6, '2021-06-30 22:46:05', '2021-07-12 10:11:50', NULL),
(161, 4, '2021-07-02 03:11:16', '2021-06-24 09:47:00', NULL),
(177, 12, '2021-07-08 13:12:58', '2021-07-09 05:44:43', NULL),
(192, 10, '2021-07-21 18:05:57', '2021-06-28 15:57:07', NULL),
(193, 9, '2021-06-26 13:14:19', '2021-07-08 21:56:11', NULL),
(201, 10, '2021-06-26 20:10:31', '2021-06-28 01:34:29', NULL),
(210, 14, '2021-07-05 07:17:55', '2021-06-27 23:40:16', NULL),
(218, 17, '2021-06-26 04:53:53', '2021-06-25 08:36:21', NULL),
(226, 15, '2021-06-29 17:54:58', '2021-07-03 21:58:56', NULL),
(261, 9, '2021-07-14 22:15:01', '2021-07-02 09:51:49', NULL),
(262, 15, '2021-07-12 06:09:20', '2021-07-01 09:00:45', NULL),
(265, 17, '2021-07-13 04:28:36', '2021-07-04 16:04:33', NULL),
(271, 1, '2021-06-27 22:23:11', '2021-07-19 02:28:47', NULL),
(290, 6, '2021-06-26 10:01:43', '2021-06-29 09:00:41', NULL),
(291, 14, '2021-07-18 04:42:48', '2021-07-10 23:43:41', NULL),
(292, 10, '2021-07-14 20:49:15', '2021-07-09 06:49:58', NULL),
(303, 12, '2021-07-03 05:50:28', '2021-06-23 14:35:22', NULL),
(304, 13, '2021-07-06 06:54:47', '2021-07-09 02:02:34', NULL),
(306, 12, '2021-06-22 20:57:13', '2021-07-16 22:31:35', NULL),
(319, 2, '2021-07-03 03:21:53', '2021-07-12 02:28:26', NULL),
(327, 15, '2021-07-18 13:11:17', '2021-07-10 20:12:56', NULL),
(332, 13, '2021-06-28 04:14:21', '2021-07-21 04:29:29', NULL),
(342, 13, '2021-06-28 15:48:29', '2021-07-11 13:01:00', NULL);

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
