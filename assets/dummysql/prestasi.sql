-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2021 pada 00.14
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
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` bigint(20) NOT NULL,
  `siswa_id_siswa` bigint(20) NOT NULL,
  `bidang_prestasi_id_bidang_prestasi` int(11) NOT NULL,
  `tingkat_prestasi_id_tingkat_prestasi` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year(4) NOT NULL,
  `penyelenggara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peringkat` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` VALUES
(1, 50, 1, 5, 'Quisquam dolorem tempore deleniti dicta nemo.', 2008, 'Stamm, Daugherty and Littel', 3, '2019-08-15 05:46:35', '2021-07-15 21:28:52', NULL),
(2, 4, 1, 3, 'Quasi exercitationem consequatur doloribus sit est labore.', 2019, 'D\'Amore, Heathcote and Frami', 1, '2019-12-29 09:41:12', '2021-07-15 21:28:52', NULL),
(3, 17, 4, 6, 'Nam aut eum eos maxime tempora.', 1998, 'Okuneva, Stokes and Lockman', 6, '2021-07-02 11:23:11', '2021-07-15 21:28:52', NULL),
(4, 97, 4, 6, 'Et est non facilis alias.', 1985, 'Dietrich-Haley', 10, '2018-08-16 09:55:35', '2021-07-15 21:28:52', NULL),
(5, 20, 4, 6, 'Optio perferendis consectetur culpa sit.', 1993, 'Kub, Hackett and Gorczany', 8, '2020-03-15 04:50:15', '2021-07-15 21:28:52', NULL),
(6, 48, 2, 5, 'Consequatur expedita corrupti est nostrum omnis iusto dolorem.', 2000, 'Haag Ltd', 2, '2019-10-04 09:14:07', '2021-07-15 21:28:52', NULL),
(7, 40, 2, 3, 'Optio eveniet non consequatur ex doloremque asperiores.', 1972, 'Heaney, Volkman and Green', 2, '2021-03-03 07:14:54', '2021-07-15 21:28:52', NULL),
(8, 46, 3, 5, 'Facilis cupiditate iste nisi nemo dolores.', 1984, 'Jacobs-Jerde', 4, '2019-10-28 03:02:40', '2021-07-15 21:28:52', NULL),
(9, 88, 4, 2, 'Atque sapiente mollitia voluptatem nulla dolorum voluptatum tempore.', 1989, 'Tromp Group', 3, '2019-04-13 08:47:07', '2021-07-15 21:28:52', NULL),
(10, 73, 2, 5, 'Odio sed est consequuntur ut.', 2000, 'Smitham-Farrell', 8, '2020-01-11 20:56:56', '2021-07-15 21:28:52', NULL),
(11, 21, 2, 4, 'Earum corrupti nesciunt rerum mollitia suscipit.', 2012, 'Bechtelar Group', 5, '2019-11-05 12:41:36', '2021-07-15 21:28:52', NULL),
(12, 54, 4, 4, 'Dolorem in nam et repellat qui.', 2018, 'Walter Group', 5, '2021-05-09 10:40:45', '2021-07-15 21:28:52', NULL),
(13, 68, 2, 3, 'Optio atque incidunt animi asperiores amet.', 1973, 'Feil-Hettinger', 2, '2020-07-01 06:18:58', '2021-07-15 21:28:52', NULL),
(14, 78, 4, 4, 'Officiis consequatur ut repellat ullam eos quibusdam aut.', 1972, 'Auer, Gleichner and Mayer', 2, '2018-10-08 18:26:56', '2021-07-15 21:28:52', NULL),
(15, 18, 3, 1, 'Saepe et autem eum at voluptatem.', 2000, 'Friesen Group', 7, '2021-05-17 06:07:10', '2021-07-15 21:28:52', NULL),
(16, 83, 2, 4, 'Ad aliquid laborum neque perspiciatis qui dolores rerum.', 1978, 'Lesch-Smith', 3, '2019-06-04 12:06:58', '2021-07-15 21:28:52', NULL),
(17, 98, 4, 6, 'Facilis deleniti necessitatibus ut rerum.', 2011, 'Heathcote, Kovacek and Turner', 1, '2019-09-30 20:45:42', '2021-07-15 21:28:52', NULL),
(18, 63, 2, 4, 'Pariatur quod nobis facere quam.', 1971, 'Schuster-Schaden', 1, '2019-05-23 07:47:26', '2021-07-15 21:28:52', NULL),
(19, 65, 4, 1, 'Quis necessitatibus ut qui qui quia quia a.', 1996, 'Gibson PLC', 9, '2021-01-04 09:07:23', '2021-07-15 21:28:52', NULL),
(20, 8, 3, 1, 'Voluptatem ipsum nisi perferendis reiciendis excepturi ut magnam.', 2021, 'Donnelly, Marks and Hegmann', 3, '2020-12-11 04:00:59', '2021-07-15 21:28:52', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`),
  ADD KEY `fk_prestasi_siswa1_idx` (`siswa_id_siswa`),
  ADD KEY `fk_prestasi_bidang_prestasi1_idx` (`bidang_prestasi_id_bidang_prestasi`),
  ADD KEY `fk_prestasi_tingkat_prestasi1_idx` (`tingkat_prestasi_id_tingkat_prestasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `fk_prestasi_bidang_prestasi1` FOREIGN KEY (`bidang_prestasi_id_bidang_prestasi`) REFERENCES `bidang_prestasi` (`id_bidang_prestasi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prestasi_siswa1` FOREIGN KEY (`siswa_id_siswa`) REFERENCES `siswa` (`id_siswa`),
  ADD CONSTRAINT `fk_prestasi_tingkat_prestasi1` FOREIGN KEY (`tingkat_prestasi_id_tingkat_prestasi`) REFERENCES `tingkat_prestasi` (`id_tingkat_prestasi`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
