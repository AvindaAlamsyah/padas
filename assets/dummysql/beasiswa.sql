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
-- Struktur dari tabel `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id_beasiswa` bigint(20) NOT NULL,
  `jenis_beasiswa_id_jenis_beasiswa` int(11) NOT NULL,
  `siswa_id_siswa` bigint(20) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_mulai` year(4) NOT NULL,
  `tahun_selesai` year(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beasiswa`
--

INSERT INTO `beasiswa` VALUES
(32, 3, 1, 'Minus est nostrum et.', 2019, 2018, '2019-05-29 12:46:41', '2021-07-15 21:21:20', NULL),
(36, 2, 4, 'Aliquam sed magnam.', 2019, 2019, '2021-01-09 12:40:44', '2021-07-15 21:21:20', NULL),
(10, 5, 6, 'Consequatur deleniti expedita cumque ea.', 2020, 2018, '2020-06-10 04:47:14', '2021-07-15 21:21:20', NULL),
(15, 2, 7, 'Praesentium sed ut repellendus esse et.', 2021, 2020, '2020-09-19 15:27:25', '2021-07-15 21:21:20', NULL),
(35, 4, 9, 'Necessitatibus modi qui sint repellat ipsa.', 2021, 2020, '2021-03-29 01:57:08', '2021-07-15 21:21:20', NULL),
(23, 5, 15, 'Esse aut est sed.', 2021, 2021, '2019-10-31 04:22:17', '2021-07-15 21:21:20', NULL),
(11, 2, 16, 'Aut aspernatur aut.', 2020, 2020, '2020-05-24 19:54:35', '2021-07-15 21:21:20', NULL),
(18, 1, 17, 'Culpa similique est omnis.', 2020, 2019, '2019-03-14 20:20:13', '2021-07-15 21:21:20', NULL),
(22, 2, 21, 'Explicabo iste temporibus rem culpa.', 2021, 2018, '2019-07-29 10:28:43', '2021-07-15 21:21:20', NULL),
(4, 3, 23, 'At repudiandae error sequi cum id.', 2018, 2020, '2018-07-21 19:04:31', '2021-07-15 21:21:20', NULL),
(28, 4, 25, 'Nostrum provident amet.', 2019, 2020, '2020-06-27 22:58:11', '2021-07-15 21:21:20', NULL),
(30, 2, 27, 'Velit sapiente accusantium.', 2020, 2021, '2020-03-19 00:07:20', '2021-07-15 21:21:20', NULL),
(25, 4, 29, 'Et a deleniti.', 2021, 2020, '2020-07-21 17:49:06', '2021-07-15 21:21:20', NULL),
(17, 5, 37, 'In dolores nihil sapiente vero.', 2019, 2018, '2019-07-09 04:30:24', '2021-07-15 21:21:20', NULL),
(8, 2, 38, 'Magni repellat et ut.', 2019, 2018, '2021-02-25 09:40:09', '2021-07-15 21:21:20', NULL),
(9, 5, 39, 'Harum ab neque quis.', 2021, 2021, '2020-10-13 04:16:29', '2021-07-15 21:21:20', NULL),
(26, 1, 43, 'Ullam tempora consectetur odit.', 2019, 2019, '2020-05-03 11:26:37', '2021-07-15 21:21:20', NULL),
(29, 2, 44, 'Ut suscipit earum id.', 2019, 2020, '2020-09-08 00:08:16', '2021-07-15 21:21:20', NULL),
(16, 1, 50, 'Beatae nisi officiis blanditiis.', 2019, 2018, '2018-11-03 14:59:43', '2021-07-15 21:21:20', NULL),
(5, 5, 51, 'Dolore vel et.', 2020, 2020, '2020-04-14 21:59:24', '2021-07-15 21:21:20', NULL),
(7, 4, 52, 'Voluptatem harum voluptatem ipsam.', 2019, 2019, '2019-09-17 16:48:04', '2021-07-15 21:21:20', NULL),
(13, 4, 53, 'Laborum qui nihil voluptatem placeat maiores.', 2019, 2019, '2020-05-17 14:50:28', '2021-07-15 21:21:20', NULL),
(2, 5, 54, 'Enim dolores qui doloribus cum.', 2020, 2019, '2019-07-27 12:40:48', '2021-07-15 21:21:20', NULL),
(1, 2, 56, 'Nostrum fuga assumenda ut.', 2020, 2019, '2019-12-10 03:19:15', '2021-07-15 21:21:20', NULL),
(6, 4, 62, 'Veniam fugit ducimus aut.', 2018, 2020, '2019-10-14 02:39:35', '2021-07-15 21:21:20', NULL),
(3, 2, 63, 'Alias pariatur ut.', 2020, 2021, '2018-09-05 22:15:28', '2021-07-15 21:21:20', NULL),
(34, 2, 67, 'Aspernatur quia aut.', 2020, 2021, '2019-11-06 04:46:44', '2021-07-15 21:21:20', NULL),
(27, 2, 68, 'Fugiat et vel excepturi.', 2018, 2019, '2020-05-31 10:09:21', '2021-07-15 21:21:20', NULL),
(31, 5, 73, 'Quaerat atque quia impedit ab.', 2019, 2021, '2018-10-01 06:18:03', '2021-07-15 21:21:20', NULL),
(19, 1, 77, 'Rem eius quod officiis.', 2021, 2019, '2020-12-06 00:07:35', '2021-07-15 21:21:20', NULL),
(37, 5, 79, 'Earum nisi tempora ut ducimus.', 2018, 2019, '2020-02-19 10:20:57', '2021-07-15 21:21:20', NULL),
(33, 3, 80, 'Exercitationem et qui numquam omnis ut.', 2019, 2019, '2020-12-25 04:59:18', '2021-07-15 21:21:20', NULL),
(21, 5, 82, 'Corrupti tempore commodi eaque.', 2020, 2018, '2021-04-02 13:19:51', '2021-07-15 21:21:20', NULL),
(14, 2, 89, 'Mollitia sed sed molestiae consequatur non.', 2021, 2018, '2018-09-21 19:16:45', '2021-07-15 21:21:20', NULL),
(12, 1, 90, 'Reprehenderit sint veniam.', 2019, 2021, '2020-04-29 02:58:30', '2021-07-15 21:21:20', NULL),
(24, 2, 93, 'Rerum ad alias cum.', 2018, 2020, '2019-10-04 09:14:00', '2021-07-15 21:21:20', NULL),
(20, 3, 94, 'Ex voluptatem dolores.', 2020, 2019, '2021-03-25 20:02:16', '2021-07-15 21:21:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id_beasiswa`),
  ADD KEY `fk_beasiswa_jenis_beasiswa1_idx` (`jenis_beasiswa_id_jenis_beasiswa`),
  ADD KEY `fk_beasiswa_siswa1_idx` (`siswa_id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beasiswa`
--
ALTER TABLE `beasiswa`
  MODIFY `id_beasiswa` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD CONSTRAINT `fk_beasiswa_jenis_beasiswa1` FOREIGN KEY (`jenis_beasiswa_id_jenis_beasiswa`) REFERENCES `jenis_beasiswa` (`id_jenis_beasiswa`),
  ADD CONSTRAINT `fk_beasiswa_siswa1` FOREIGN KEY (`siswa_id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
