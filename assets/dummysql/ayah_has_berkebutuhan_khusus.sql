-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Jul 2021 pada 06.59
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
-- Struktur dari tabel `ayah_has_berkebutuhan_khusus`
--

CREATE TABLE `ayah_has_berkebutuhan_khusus` (
  `ayah_id_ayah` bigint(20) NOT NULL,
  `berkebutuhan_khusus_id_berkebutuhan_khusus` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ayah_has_berkebutuhan_khusus`
--

INSERT INTO `ayah_has_berkebutuhan_khusus` VALUES
(3, 6, '2021-07-13 12:18:37', '2021-07-04 13:06:40', NULL),
(26, 1, '2021-06-24 07:55:47', '2021-06-25 11:30:53', NULL),
(30, 1, '2021-07-21 05:44:44', '2021-07-13 10:56:22', NULL),
(31, 7, '2021-06-24 03:41:25', '2021-07-02 16:11:34', NULL),
(33, 2, '2021-07-18 23:00:56', '2021-06-26 14:54:40', NULL),
(42, 13, '2021-07-02 08:00:21', '2021-07-22 19:13:06', NULL),
(57, 6, '2021-07-18 03:08:15', '2021-06-24 10:06:44', NULL),
(67, 16, '2021-07-08 08:31:50', '2021-06-29 10:13:34', NULL),
(98, 16, '2021-07-07 00:27:57', '2021-07-16 22:05:08', NULL),
(120, 4, '2021-07-11 03:28:08', '2021-07-10 06:18:24', NULL),
(129, 13, '2021-07-06 08:39:38', '2021-07-06 20:37:44', NULL),
(133, 16, '2021-07-21 14:29:51', '2021-06-27 22:27:16', NULL),
(134, 10, '2021-07-09 03:42:22', '2021-07-04 18:11:09', NULL),
(137, 12, '2021-07-17 13:42:54', '2021-07-07 20:41:49', NULL),
(166, 14, '2021-06-26 16:11:23', '2021-07-12 05:52:22', NULL),
(179, 6, '2021-06-24 07:38:30', '2021-07-12 22:08:24', NULL),
(192, 8, '2021-07-08 12:24:51', '2021-06-23 00:54:58', NULL),
(193, 3, '2021-07-22 14:22:08', '2021-07-17 06:29:19', NULL),
(197, 2, '2021-07-05 01:22:08', '2021-07-15 23:57:49', NULL),
(202, 14, '2021-07-13 18:40:58', '2021-07-10 17:08:29', NULL),
(212, 3, '2021-07-20 03:16:21', '2021-07-18 16:14:52', NULL),
(212, 10, '2021-07-05 19:04:17', '2021-07-20 13:25:03', NULL),
(221, 12, '2021-07-21 15:41:22', '2021-07-16 04:04:23', NULL),
(222, 7, '2021-07-17 00:29:09', '2021-07-02 19:46:14', NULL),
(226, 17, '2021-06-28 19:13:34', '2021-07-04 16:32:20', NULL),
(246, 11, '2021-07-06 13:17:40', '2021-07-20 04:46:57', NULL),
(278, 16, '2021-06-27 07:53:31', '2021-07-10 22:32:58', NULL),
(304, 11, '2021-07-22 19:59:51', '2021-07-14 12:56:24', NULL),
(307, 2, '2021-06-23 02:06:11', '2021-06-23 21:33:27', NULL),
(314, 10, '2021-07-16 10:43:04', '2021-07-06 11:35:03', NULL),
(334, 11, '2021-07-22 13:38:16', '2021-07-08 09:15:35', NULL),
(334, 16, '2021-07-03 18:03:17', '2021-07-10 00:18:13', NULL),
(341, 17, '2021-07-18 10:36:08', '2021-06-25 19:09:12', NULL),
(346, 16, '2021-07-18 01:44:43', '2021-07-19 21:31:25', NULL),
(347, 8, '2021-06-30 14:59:34', '2021-07-02 04:25:55', NULL),
(351, 5, '2021-06-28 23:50:33', '2021-07-16 10:10:13', NULL),
(352, 4, '2021-07-11 17:49:34', '2021-07-02 14:26:53', NULL),
(378, 3, '2021-06-28 22:30:52', '2021-07-05 00:58:33', NULL),
(397, 3, '2021-06-30 09:28:28', '2021-07-15 05:50:40', NULL),
(407, 11, '2021-07-18 12:37:44', '2021-07-19 05:48:21', NULL),
(418, 9, '2021-07-17 23:54:50', '2021-07-10 16:06:39', NULL),
(422, 11, '2021-06-23 15:04:28', '2021-07-02 15:58:35', NULL),
(427, 10, '2021-07-14 15:28:00', '2021-07-21 05:25:18', NULL),
(430, 8, '2021-07-13 23:44:59', '2021-07-18 12:23:01', NULL),
(430, 10, '2021-07-10 00:52:09', '2021-07-11 20:45:53', NULL),
(431, 17, '2021-07-13 00:48:48', '2021-07-07 07:21:42', NULL),
(439, 8, '2021-06-30 03:01:13', '2021-07-20 10:46:34', NULL),
(442, 12, '2021-06-25 02:21:30', '2021-06-27 05:25:22', NULL),
(448, 2, '2021-07-22 07:21:10', '2021-07-09 04:44:18', NULL),
(451, 8, '2021-07-02 01:37:35', '2021-07-05 07:55:21', NULL),
(457, 1, '2021-07-07 18:53:26', '2021-07-17 20:21:44', NULL),
(460, 7, '2021-06-29 13:09:12', '2021-07-01 02:25:54', NULL),
(473, 3, '2021-07-14 16:22:29', '2021-06-30 05:06:31', NULL),
(480, 7, '2021-07-12 23:59:34', '2021-07-02 06:38:38', NULL),
(481, 12, '2021-07-03 08:40:07', '2021-06-23 08:58:24', NULL),
(499, 13, '2021-07-14 16:24:01', '2021-07-10 10:40:27', NULL),
(500, 7, '2021-07-04 05:01:12', '2021-07-13 18:15:50', NULL),
(524, 11, '2021-07-03 19:02:38', '2021-07-03 06:33:21', NULL),
(561, 11, '2021-07-19 03:42:48', '2021-07-05 17:01:12', NULL),
(565, 14, '2021-06-28 06:12:59', '2021-07-07 03:10:41', NULL),
(569, 5, '2021-07-16 11:08:08', '2021-06-30 02:59:40', NULL),
(574, 3, '2021-07-11 08:20:53', '2021-07-21 07:04:04', NULL),
(588, 3, '2021-07-08 19:14:32', '2021-06-29 17:30:36', NULL),
(606, 3, '2021-07-21 03:52:53', '2021-06-29 13:15:37', NULL),
(607, 7, '2021-07-14 00:47:17', '2021-07-04 05:45:45', NULL),
(609, 1, '2021-06-25 19:14:35', '2021-07-06 09:01:53', NULL),
(613, 4, '2021-07-11 07:56:51', '2021-07-18 17:44:04', NULL),
(622, 8, '2021-07-15 01:15:57', '2021-07-18 15:33:11', NULL),
(646, 10, '2021-07-15 13:43:25', '2021-06-26 00:32:04', NULL),
(646, 17, '2021-07-22 20:09:24', '2021-07-06 09:23:02', NULL),
(654, 5, '2021-07-09 04:39:46', '2021-07-15 06:10:21', NULL),
(655, 8, '2021-07-11 22:16:35', '2021-07-20 21:59:53', NULL),
(656, 16, '2021-07-07 17:38:22', '2021-06-24 12:12:47', NULL),
(662, 2, '2021-07-20 13:51:55', '2021-07-22 04:42:59', NULL),
(666, 5, '2021-07-20 09:00:42', '2021-07-21 23:32:29', NULL),
(670, 6, '2021-06-26 22:03:56', '2021-07-06 05:11:30', NULL),
(674, 13, '2021-06-29 02:00:55', '2021-07-02 08:46:28', NULL),
(691, 17, '2021-07-04 22:08:37', '2021-07-15 11:59:39', NULL),
(695, 10, '2021-07-01 23:08:05', '2021-06-28 09:33:15', NULL),
(702, 7, '2021-07-17 09:10:26', '2021-06-25 13:57:50', NULL),
(706, 6, '2021-07-05 15:04:51', '2021-06-30 16:37:12', NULL),
(711, 7, '2021-07-01 09:07:38', '2021-06-26 05:36:34', NULL),
(721, 1, '2021-07-10 14:31:53', '2021-06-24 14:20:33', NULL),
(723, 8, '2021-07-22 05:25:59', '2021-06-26 22:37:40', NULL),
(725, 3, '2021-07-04 14:50:51', '2021-07-18 22:22:39', NULL),
(727, 13, '2021-07-16 07:12:31', '2021-07-17 10:39:00', NULL),
(738, 8, '2021-07-17 20:54:17', '2021-06-25 23:38:48', NULL),
(739, 5, '2021-06-29 23:02:26', '2021-06-24 13:06:04', NULL),
(740, 13, '2021-06-25 02:29:47', '2021-06-24 23:46:51', NULL),
(745, 4, '2021-07-09 22:04:06', '2021-07-04 21:45:52', NULL),
(758, 15, '2021-07-01 01:47:49', '2021-06-22 21:22:59', NULL),
(789, 16, '2021-07-08 23:27:56', '2021-07-20 09:47:39', NULL),
(796, 11, '2021-07-04 01:34:53', '2021-06-25 09:45:46', NULL),
(798, 13, '2021-06-23 02:24:25', '2021-07-15 00:35:02', NULL),
(807, 7, '2021-07-04 02:16:58', '2021-07-06 15:22:49', NULL),
(814, 5, '2021-07-03 22:20:34', '2021-06-25 15:09:31', NULL),
(820, 10, '2021-06-27 15:15:54', '2021-07-10 02:50:28', NULL),
(824, 6, '2021-07-05 10:06:12', '2021-06-26 02:11:42', NULL),
(830, 17, '2021-07-13 20:24:19', '2021-07-20 01:17:30', NULL),
(839, 13, '2021-07-16 13:45:53', '2021-07-21 00:37:19', NULL),
(840, 13, '2021-07-14 20:34:15', '2021-07-01 03:38:28', NULL),
(856, 14, '2021-06-29 08:27:40', '2021-07-21 12:38:14', NULL),
(879, 6, '2021-07-08 13:32:59', '2021-07-06 19:13:35', NULL),
(880, 4, '2021-07-14 06:57:23', '2021-07-15 04:22:47', NULL),
(898, 15, '2021-07-10 17:45:14', '2021-07-02 06:37:53', NULL),
(902, 17, '2021-06-27 22:57:42', '2021-07-05 05:43:19', NULL),
(915, 5, '2021-06-30 16:07:37', '2021-07-11 07:24:35', NULL),
(956, 7, '2021-07-01 22:36:59', '2021-07-11 12:15:42', NULL),
(970, 9, '2021-07-08 20:47:45', '2021-06-29 04:49:03', NULL),
(977, 9, '2021-06-28 09:59:54', '2021-07-03 18:52:25', NULL),
(989, 3, '2021-07-01 11:43:23', '2021-07-06 15:20:25', NULL),
(991, 6, '2021-07-06 19:34:31', '2021-07-04 15:26:15', NULL),
(991, 13, '2021-06-27 09:29:18', '2021-07-11 00:24:48', NULL),
(993, 8, '2021-07-17 15:26:48', '2021-07-01 21:02:07', NULL),
(994, 14, '2021-07-05 17:46:53', '2021-07-10 22:20:17', NULL),
(1036, 2, '2021-06-26 23:25:23', '2021-07-02 00:54:55', NULL),
(1042, 10, '2021-06-29 14:39:09', '2021-07-06 01:20:46', NULL),
(1047, 10, '2021-07-10 11:27:42', '2021-07-13 18:28:55', NULL),
(1051, 9, '2021-06-29 19:06:38', '2021-07-17 01:31:44', NULL),
(1052, 9, '2021-07-13 16:41:02', '2021-07-20 23:42:21', NULL),
(1057, 11, '2021-06-22 23:25:21', '2021-06-27 04:59:25', NULL),
(1095, 11, '2021-07-09 00:47:02', '2021-07-12 06:45:47', NULL),
(1107, 4, '2021-07-05 04:30:56', '2021-07-01 17:06:56', NULL),
(1117, 2, '2021-07-12 02:52:35', '2021-06-25 14:06:40', NULL),
(1121, 5, '2021-07-16 20:32:24', '2021-06-26 18:52:47', NULL),
(1125, 6, '2021-07-04 04:31:23', '2021-07-08 03:53:54', NULL),
(1133, 8, '2021-07-17 16:15:46', '2021-06-23 05:53:16', NULL),
(1139, 3, '2021-07-12 15:11:31', '2021-06-25 16:24:13', NULL),
(1164, 12, '2021-07-11 02:15:31', '2021-07-20 07:16:15', NULL),
(1169, 4, '2021-07-22 03:18:52', '2021-07-02 10:39:55', NULL),
(1169, 17, '2021-07-02 05:59:57', '2021-07-04 00:53:50', NULL),
(1174, 16, '2021-07-10 16:46:54', '2021-07-09 09:45:19', NULL),
(1177, 9, '2021-07-18 12:17:42', '2021-06-23 10:33:15', NULL),
(1177, 14, '2021-07-07 19:52:12', '2021-07-02 06:49:42', NULL),
(1182, 7, '2021-07-19 18:16:48', '2021-07-11 04:28:22', NULL),
(1189, 10, '2021-07-12 10:25:02', '2021-07-16 09:35:12', NULL),
(1191, 5, '2021-06-24 10:33:51', '2021-07-18 05:19:01', NULL),
(1209, 6, '2021-07-09 11:04:20', '2021-07-12 00:42:24', NULL),
(1211, 13, '2021-07-16 04:22:08', '2021-07-14 05:15:23', NULL),
(1213, 14, '2021-07-09 10:50:40', '2021-07-19 15:06:58', NULL),
(1216, 15, '2021-07-11 06:32:29', '2021-07-09 06:38:40', NULL),
(1216, 16, '2021-07-21 04:24:14', '2021-06-28 17:15:35', NULL),
(1222, 9, '2021-07-04 02:07:22', '2021-07-02 23:45:09', NULL),
(1223, 14, '2021-07-14 13:54:00', '2021-06-27 16:56:55', NULL),
(1228, 6, '2021-07-02 01:52:32', '2021-07-07 13:18:47', NULL),
(1242, 6, '2021-07-03 20:33:40', '2021-06-27 12:13:14', NULL),
(1278, 3, '2021-07-22 02:19:12', '2021-07-01 20:15:15', NULL),
(1285, 8, '2021-07-19 14:45:36', '2021-07-15 02:43:28', NULL);

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
