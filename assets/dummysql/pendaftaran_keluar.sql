-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2021 pada 00.12
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
-- Struktur dari tabel `pendaftaran_keluar`
--

CREATE TABLE `pendaftaran_keluar` (
  `id_pendaftaran_keluar` bigint(20) NOT NULL,
  `siswa_id_siswa` bigint(20) NOT NULL,
  `jenis_pendaftaran_keluar_id_jenis_pendaftaran_keluar` int(11) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `alasan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendaftaran_keluar`
--

INSERT INTO `pendaftaran_keluar` VALUES
(1, 88, 2, '2020-10-18', 'Omnis rerum reprehenderit ut qui illum.', '2021-01-31 12:22:18', '2021-07-15 21:25:09', NULL),
(2, 98, 3, '1998-12-05', 'Amet nihil dignissimos veritatis.', '2019-01-15 09:16:08', '2021-07-15 21:25:09', NULL),
(3, 99, 7, '2000-07-25', 'Et tenetur occaecati corporis accusantium a maxime.', '2020-02-21 11:19:32', '2021-07-15 21:25:09', NULL),
(4, 82, 4, '2016-09-08', 'Veniam dolor et suscipit.', '2018-11-10 22:20:42', '2021-07-15 21:25:09', NULL),
(5, 97, 8, '1977-11-23', 'Perferendis sit quis mollitia at est unde.', '2019-09-07 09:10:49', '2021-07-15 21:25:09', NULL),
(6, 92, 3, '2020-09-23', 'Corporis magnam corrupti est ut.', '2020-05-13 17:21:37', '2021-07-15 21:25:09', NULL),
(7, 87, 6, '2015-11-04', 'Sint incidunt possimus perspiciatis.', '2021-01-09 02:26:39', '2021-07-15 21:25:09', NULL),
(8, 85, 5, '1991-05-09', 'Delectus sed ratione et quidem a qui.', '2020-04-16 12:23:33', '2021-07-15 21:25:09', NULL),
(9, 80, 7, '1971-07-17', 'Qui qui aut dolore.', '2019-06-04 16:53:18', '2021-07-15 21:25:09', NULL),
(10, 90, 3, '1998-02-23', 'Omnis tempore est laborum voluptatibus enim sit.', '2019-11-22 05:24:01', '2021-07-15 21:25:09', NULL),
(11, 95, 5, '1983-04-16', 'Quibusdam sapiente sunt rerum.', '2019-07-08 02:18:53', '2021-07-15 21:25:09', NULL),
(12, 84, 8, '2016-12-06', 'Et voluptatem perspiciatis veritatis dolorem adipisci omnis.', '2020-07-31 19:19:16', '2021-07-15 21:25:09', NULL),
(13, 89, 4, '2017-05-30', 'Adipisci corrupti commodi corrupti quis.', '2021-03-03 18:59:40', '2021-07-15 21:25:09', NULL),
(14, 86, 4, '2016-05-25', 'Aspernatur sed quibusdam quae.', '2020-02-20 20:13:23', '2021-07-15 21:25:09', NULL),
(15, 96, 7, '1995-08-30', 'Quis eos dolores quasi neque.', '2021-04-29 04:33:57', '2021-07-15 21:25:09', NULL),
(16, 81, 3, '1972-09-04', 'Vel et quasi repellendus.', '2020-05-27 18:17:23', '2021-07-15 21:25:09', NULL),
(17, 83, 5, '1994-08-06', 'Sunt fuga dolores accusantium est dignissimos.', '2019-12-25 18:35:18', '2021-07-15 21:25:09', NULL),
(18, 91, 8, '1982-02-17', 'Sint doloribus accusantium et.', '2019-02-15 21:19:32', '2021-07-15 21:25:09', NULL),
(19, 94, 4, '2000-11-02', 'Autem molestiae eligendi magni enim.', '2019-06-13 21:57:11', '2021-07-15 21:25:09', NULL),
(20, 93, 4, '2019-08-08', 'Optio eligendi quia aperiam tenetur.', '2021-06-04 04:06:49', '2021-07-15 21:25:09', NULL);

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
  MODIFY `id_pendaftaran_keluar` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
