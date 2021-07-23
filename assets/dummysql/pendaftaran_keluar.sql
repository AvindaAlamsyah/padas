-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Jul 2021 pada 07.04
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
-- Struktur dari tabel `pendaftaran_keluar`
--

CREATE TABLE `pendaftaran_keluar` (
  `id_pendaftaran_keluar` bigint(20) NOT NULL,
  `siswa_id_siswa` bigint(20) NOT NULL,
  `jenis_pendaftaran_keluar_id_jenis_pendaftaran_keluar` int(11) DEFAULT NULL,
  `tanggal_keluar` date DEFAULT NULL,
  `alasan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendaftaran_keluar`
--

INSERT INTO `pendaftaran_keluar` VALUES
(1, 55, 2, '2017-12-05', 'Voluptatem fugit et aspernatur aut et.', '2021-07-17 01:54:31', '2021-07-23 06:36:51', NULL),
(2, 86, 7, '2019-05-31', 'Doloribus dolore in repellat reprehenderit adipisci.', '2021-07-14 11:22:57', '2021-07-23 06:36:51', NULL),
(3, 15, 6, '2016-09-04', 'Dolorum expedita natus officia sed.', '2021-07-15 14:33:56', '2021-07-23 06:36:51', NULL),
(4, 38, 8, '2017-10-15', 'Est pariatur inventore aut dolores temporibus.', '2021-06-23 04:32:11', '2021-07-23 06:36:51', NULL),
(5, 9, 7, '2017-08-25', 'Illo alias et in ullam ea ipsa.', '2021-06-28 07:05:44', '2021-07-23 06:36:51', NULL),
(6, 80, 8, '2017-03-09', 'Vero rerum vel perspiciatis numquam sunt et.', '2021-07-15 09:10:40', '2021-07-23 06:36:51', NULL),
(7, 92, 3, '2019-06-16', 'Eum atque voluptate nisi quas voluptatem.', '2021-06-30 02:14:49', '2021-07-23 06:36:51', NULL),
(8, 17, 6, '2018-10-17', 'Aut ut necessitatibus debitis et doloremque.', '2021-07-15 06:56:39', '2021-07-23 06:36:51', NULL),
(9, 5, 6, '2020-08-09', 'Sed aut sit voluptates rerum voluptas.', '2021-07-12 09:43:23', '2021-07-23 06:36:51', NULL),
(10, 56, 8, '2018-08-25', 'Exercitationem et est est.', '2021-07-13 13:21:20', '2021-07-23 06:36:51', NULL),
(11, 51, 7, '2021-06-24', 'Ipsum atque veniam non nostrum consequuntur architecto.', '2021-07-13 11:46:25', '2021-07-23 06:36:51', NULL),
(12, 78, 8, '2019-10-18', 'Doloribus sed libero aut voluptas et eligendi.', '2021-06-25 12:42:35', '2021-07-23 06:36:51', NULL),
(13, 1, 4, '2017-07-27', 'Et repellendus est aut.', '2021-07-08 00:10:37', '2021-07-23 06:36:51', NULL),
(14, 34, 1, '2020-01-07', 'Est dolores omnis consequatur voluptates odio assumenda.', '2021-07-15 16:52:49', '2021-07-23 06:36:51', NULL),
(15, 66, 7, '2016-10-13', 'Modi nostrum aliquid odit voluptatibus.', '2021-07-12 22:17:44', '2021-07-23 06:36:51', NULL),
(16, 94, 8, '2021-02-11', 'Recusandae et deleniti quidem.', '2021-07-16 03:19:02', '2021-07-23 06:36:51', NULL),
(17, 76, 2, '2020-10-31', 'Voluptas aut odio non et.', '2021-07-10 20:47:37', '2021-07-23 06:36:51', NULL),
(18, 14, 1, '2017-04-11', 'Aliquam culpa tenetur eaque eligendi doloribus.', '2021-06-28 19:27:31', '2021-07-23 06:36:51', NULL),
(19, 77, 6, '2017-02-20', 'Architecto in non architecto ducimus.', '2021-07-02 08:47:33', '2021-07-23 06:36:51', NULL),
(20, 23, 6, '2017-07-18', 'Sapiente pariatur nam id.', '2021-07-01 20:44:04', '2021-07-23 06:36:51', NULL),
(21, 46, 6, '2017-09-08', 'Quae possimus est sapiente.', '2021-06-23 15:22:23', '2021-07-23 06:36:51', NULL),
(22, 20, 1, '2021-07-16', 'Eum consequuntur perspiciatis nesciunt reiciendis in et.', '2021-07-21 08:01:24', '2021-07-23 06:36:51', NULL),
(23, 64, 5, '2020-10-15', 'Laborum quibusdam tenetur voluptatem.', '2021-06-27 01:41:25', '2021-07-23 06:36:51', NULL),
(24, 91, 3, '2019-12-10', 'Et voluptates nisi eligendi et quibusdam quisquam.', '2021-06-29 15:25:15', '2021-07-23 06:36:51', NULL),
(25, 82, 2, '2018-06-18', 'Sunt voluptatem aut quis.', '2021-07-22 08:43:30', '2021-07-23 06:36:51', NULL),
(26, 72, 4, '2018-01-18', 'Et quia accusamus aut cupiditate voluptates.', '2021-07-13 11:29:28', '2021-07-23 06:36:51', NULL),
(27, 74, 5, '2017-04-05', 'Et et occaecati voluptatem error qui.', '2021-07-02 01:23:21', '2021-07-23 06:36:51', NULL),
(28, 6, 4, '2017-12-16', 'Adipisci reprehenderit libero quisquam soluta consequatur saepe.', '2021-07-02 18:46:33', '2021-07-23 06:36:51', NULL),
(29, 99, 6, '2020-07-14', 'Et aliquam aut soluta dolor.', '2021-06-30 00:15:33', '2021-07-23 06:36:51', NULL),
(30, 100, 8, '2020-01-04', 'Aut qui asperiores quidem atque nihil id.', '2021-07-21 19:47:25', '2021-07-23 06:36:51', NULL),
(31, 84, 3, '2020-02-13', 'At natus blanditiis voluptas qui et qui.', '2021-07-01 08:53:08', '2021-07-23 06:36:51', NULL),
(32, 90, 6, '2019-05-15', 'Laborum similique blanditiis est.', '2021-07-03 01:21:14', '2021-07-23 06:36:51', NULL),
(33, 95, 3, '2021-05-15', 'Ut sapiente consequatur alias voluptatibus.', '2021-07-17 21:14:37', '2021-07-23 06:36:51', NULL),
(34, 62, 7, '2021-05-01', 'Consectetur neque assumenda atque minus velit nam.', '2021-07-14 13:55:05', '2021-07-23 06:36:51', NULL),
(35, 42, 7, '2019-03-28', 'Et qui rerum possimus quos non.', '2021-07-02 16:56:37', '2021-07-23 06:36:51', NULL),
(36, 37, 6, '2018-12-11', 'Est nulla earum nobis autem vero ad.', '2021-06-30 06:15:48', '2021-07-23 06:36:51', NULL),
(37, 63, 1, '2018-07-26', 'Dolor ea sed deleniti modi aliquam eveniet.', '2021-07-11 08:24:58', '2021-07-23 06:36:51', NULL),
(38, 87, 1, '2020-03-04', 'Vel expedita veritatis rerum qui unde aliquid.', '2021-07-04 00:43:33', '2021-07-23 06:36:51', NULL),
(39, 70, 6, '2018-07-28', 'Omnis molestiae praesentium eos ut molestiae soluta.', '2021-07-16 17:41:37', '2021-07-23 06:36:51', NULL),
(40, 24, 8, '2019-07-29', 'Voluptatem labore at aspernatur voluptatem.', '2021-07-08 15:40:17', '2021-07-23 06:36:51', NULL),
(41, 89, 4, '2020-05-21', 'Dolorem autem aut id esse animi provident.', '2021-07-14 23:30:09', '2021-07-23 06:36:51', NULL),
(42, 43, 1, '2016-08-25', 'Deserunt temporibus consequatur laboriosam reprehenderit sed ut.', '2021-06-25 23:47:36', '2021-07-23 06:36:51', NULL),
(43, 49, 6, '2017-02-03', 'Qui ad in distinctio.', '2021-06-25 03:18:28', '2021-07-23 06:36:51', NULL),
(44, 47, 2, '2020-08-28', 'Asperiores excepturi ipsam ducimus sapiente cumque rerum.', '2021-07-14 10:10:26', '2021-07-23 06:36:51', NULL),
(45, 60, 8, '2018-09-11', 'Autem iusto et in velit consequatur sed.', '2021-07-13 21:50:03', '2021-07-23 06:36:51', NULL),
(46, 11, 3, '2020-05-19', 'Pariatur impedit tenetur quis.', '2021-07-15 17:18:14', '2021-07-23 06:36:51', NULL),
(47, 40, 7, '2017-08-26', 'Aut harum praesentium ex et perferendis voluptas.', '2021-07-20 05:29:52', '2021-07-23 06:36:51', NULL),
(48, 33, 3, '2017-09-18', 'Atque eveniet eum blanditiis nostrum nemo sed.', '2021-07-15 12:39:54', '2021-07-23 06:36:51', NULL),
(49, 67, 2, '2016-08-24', 'Fugit eum qui expedita aspernatur nihil nihil.', '2021-06-30 13:27:45', '2021-07-23 06:36:51', NULL),
(50, 16, 6, '2019-04-22', 'Sit ullam qui repellendus.', '2021-07-09 00:10:01', '2021-07-23 06:36:51', NULL),
(51, 81, 2, '2018-08-26', 'Cupiditate laudantium et pariatur rerum consequatur.', '2021-07-12 05:57:35', '2021-07-23 06:36:51', NULL),
(52, 36, 4, '2019-01-19', 'Harum corrupti iste eligendi.', '2021-07-18 10:36:30', '2021-07-23 06:36:51', NULL),
(53, 26, 2, '2018-12-21', 'Non sit quo reprehenderit ab voluptatum.', '2021-07-22 05:48:38', '2021-07-23 06:36:51', NULL),
(54, 57, 7, '2021-01-25', 'In dolorem in magni.', '2021-07-08 12:48:45', '2021-07-23 06:36:51', NULL),
(55, 61, 2, '2017-11-22', 'Suscipit excepturi ab velit.', '2021-06-28 16:41:34', '2021-07-23 06:36:51', NULL),
(56, 41, 6, '2021-06-17', 'Odit illum enim est neque.', '2021-06-30 21:09:05', '2021-07-23 06:36:51', NULL),
(57, 52, 1, '2021-03-17', 'Vel veniam ut fugit sit sapiente.', '2021-07-03 19:54:37', '2021-07-23 06:36:51', NULL),
(58, 19, 4, '2017-03-06', 'Qui quaerat et quam.', '2021-06-30 22:19:48', '2021-07-23 06:36:51', NULL),
(59, 18, 8, '2017-03-10', 'Nihil ut asperiores laborum.', '2021-07-11 13:29:44', '2021-07-23 06:36:51', NULL),
(60, 3, 1, '2018-07-14', 'Repellat odit quia dolorem voluptatum laborum.', '2021-07-13 13:15:14', '2021-07-23 06:36:51', NULL),
(61, 65, 2, '2018-11-26', 'Voluptates praesentium quisquam optio.', '2021-06-27 14:35:10', '2021-07-23 06:36:51', NULL),
(62, 48, 5, '2016-12-30', 'Magni in saepe reprehenderit quasi et.', '2021-07-09 20:19:59', '2021-07-23 06:36:51', NULL),
(63, 39, 5, '2018-07-30', 'Dolores et aut eligendi et libero nihil.', '2021-06-24 01:47:00', '2021-07-23 06:36:51', NULL),
(64, 12, 5, '2018-08-27', 'Adipisci et eos voluptatem aspernatur beatae iusto.', '2021-07-08 09:12:58', '2021-07-23 06:36:51', NULL),
(65, 2, 8, '2020-04-14', 'Cumque fuga et alias impedit.', '2021-07-22 03:56:15', '2021-07-23 06:36:51', NULL),
(66, 31, 4, '2017-12-11', 'Voluptatibus dolorem fugiat non.', '2021-07-16 17:36:53', '2021-07-23 06:36:51', NULL),
(67, 68, 5, '2017-10-05', 'Officiis error dolores minima et.', '2021-07-19 20:46:26', '2021-07-23 06:36:51', NULL),
(68, 32, 2, '2017-01-21', 'Ratione magnam molestiae dolore officiis nesciunt.', '2021-06-24 22:45:55', '2021-07-23 06:36:51', NULL),
(69, 30, 6, '2019-04-07', 'Cum dignissimos atque autem veritatis unde.', '2021-06-26 13:50:07', '2021-07-23 06:36:51', NULL),
(70, 54, 3, '2020-10-23', 'Laborum qui incidunt et nihil cum.', '2021-07-22 18:00:28', '2021-07-23 06:36:51', NULL),
(71, 69, 1, '2016-10-21', 'Aspernatur ex ipsum dolor.', '2021-07-21 09:03:29', '2021-07-23 06:36:51', NULL),
(72, 71, 5, '2016-11-25', 'Voluptas perferendis exercitationem neque.', '2021-07-08 16:34:05', '2021-07-23 06:36:51', NULL),
(73, 10, 2, '2021-02-05', 'Eos rem sit et illo eum.', '2021-07-20 07:27:04', '2021-07-23 06:36:51', NULL),
(74, 98, 8, '2019-10-29', 'Aut dolores aliquam hic soluta.', '2021-07-19 08:14:04', '2021-07-23 06:36:51', NULL),
(75, 22, 7, '2018-05-03', 'Facere qui ipsum corrupti.', '2021-06-28 06:14:23', '2021-07-23 06:36:51', NULL),
(76, 13, 1, '2016-12-11', 'Consequatur aut laborum dicta nemo velit.', '2021-06-30 11:30:45', '2021-07-23 06:36:51', NULL),
(77, 21, 7, '2017-04-25', 'Et rem dolor reiciendis consequatur adipisci officiis.', '2021-07-02 23:48:45', '2021-07-23 06:36:51', NULL),
(78, 8, 4, '2016-08-04', 'Tenetur deserunt asperiores hic veritatis architecto distinctio.', '2021-07-03 16:14:17', '2021-07-23 06:36:51', NULL),
(79, 93, 3, '2016-11-12', 'Voluptates cumque est repudiandae.', '2021-07-08 12:19:47', '2021-07-23 06:36:51', NULL),
(80, 27, 5, '2021-03-23', 'Maiores fuga ratione distinctio ut consectetur nobis.', '2021-07-13 19:03:01', '2021-07-23 06:36:51', NULL),
(81, 35, 3, '2019-07-31', 'Neque sit sed ea id eligendi.', '2021-07-15 11:01:27', '2021-07-23 06:36:51', NULL),
(82, 79, 5, '2016-10-31', 'Adipisci perspiciatis beatae ut deserunt et.', '2021-07-17 17:18:15', '2021-07-23 06:36:51', NULL),
(83, 96, 8, '2017-03-26', 'Error nobis qui sunt doloremque libero perferendis.', '2021-07-03 05:08:32', '2021-07-23 06:36:51', NULL),
(84, 83, 4, '2020-03-22', 'Praesentium ad expedita nisi voluptatibus in incidunt.', '2021-07-18 01:59:02', '2021-07-23 06:36:51', NULL),
(85, 7, 6, '2017-03-05', 'Doloribus consequuntur recusandae quasi assumenda pariatur praesentium.', '2021-07-13 18:34:43', '2021-07-23 06:36:51', NULL),
(86, 29, 8, '2017-11-12', 'Quam illo sunt omnis cum vitae suscipit.', '2021-07-13 15:19:50', '2021-07-23 06:36:51', NULL),
(87, 44, 8, '2016-09-01', 'Iusto libero officiis vel et.', '2021-06-26 02:25:08', '2021-07-23 06:36:51', NULL),
(88, 97, 4, '2017-01-20', 'Unde aut ea consequatur blanditiis voluptas qui dolor.', '2021-06-23 06:16:54', '2021-07-23 06:36:51', NULL),
(89, 25, 5, '2017-10-28', 'Temporibus odit est qui.', '2021-06-29 16:22:22', '2021-07-23 06:36:51', NULL),
(90, 73, 7, '2019-05-11', 'Mollitia dolores aut dolor vitae.', '2021-07-04 17:47:41', '2021-07-23 06:36:51', NULL),
(91, 28, 4, '2018-06-06', 'Deleniti voluptatem animi at id recusandae.', '2021-07-16 17:47:18', '2021-07-23 06:36:51', NULL),
(92, 50, 3, '2016-12-15', 'Ratione assumenda enim sapiente distinctio ut.', '2021-07-15 11:55:51', '2021-07-23 06:36:51', NULL),
(93, 75, 5, '2019-08-20', 'Consequatur rerum dicta dolore quaerat.', '2021-07-06 08:23:13', '2021-07-23 06:36:51', NULL),
(94, 45, 8, '2017-07-10', 'Illo provident consequatur eaque.', '2021-07-14 02:40:38', '2021-07-23 06:36:51', NULL),
(95, 88, 4, '2019-03-04', 'Magni aliquid est reiciendis earum maxime et.', '2021-07-19 02:49:35', '2021-07-23 06:36:51', NULL),
(96, 85, 5, '2021-01-01', 'Totam quis qui veniam.', '2021-07-21 12:22:31', '2021-07-23 06:36:51', NULL),
(97, 53, 8, '2020-02-20', 'Magnam ad non ut non.', '2021-06-28 02:52:09', '2021-07-23 06:36:51', NULL),
(98, 58, 5, '2018-10-22', 'Id provident ex consequuntur est.', '2021-06-24 09:28:22', '2021-07-23 06:36:51', NULL),
(99, 4, 7, '2020-06-23', 'Sunt culpa quia quod id numquam.', '2021-07-11 16:03:26', '2021-07-23 06:36:51', NULL),
(100, 59, 2, '2018-02-15', 'Non est error corporis numquam omnis ullam.', '2021-07-14 11:23:27', '2021-07-23 06:36:51', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendaftaran_keluar`
--
ALTER TABLE `pendaftaran_keluar`
  ADD PRIMARY KEY (`id_pendaftaran_keluar`),
  ADD KEY `fk_pendaftaran_keluar_jenis_pendaftaran_keluar1_idx` (`jenis_pendaftaran_keluar_id_jenis_pendaftaran_keluar`),
  ADD KEY `fk_pendaftaran_keluar_siswa1_idx` (`siswa_id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pendaftaran_keluar`
--
ALTER TABLE `pendaftaran_keluar`
  MODIFY `id_pendaftaran_keluar` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pendaftaran_keluar`
--
ALTER TABLE `pendaftaran_keluar`
  ADD CONSTRAINT `fk_pendaftaran_keluar_jenis_pendaftaran_keluar1` FOREIGN KEY (`jenis_pendaftaran_keluar_id_jenis_pendaftaran_keluar`) REFERENCES `jenis_pendaftaran_keluar` (`id_jenis_pendaftaran_keluar`),
  ADD CONSTRAINT `fk_pendaftaran_keluar_siswa1` FOREIGN KEY (`siswa_id_siswa`) REFERENCES `siswa` (`id_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
