-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2021 pada 00.13
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
-- Struktur dari tabel `pip`
--

CREATE TABLE `pip` (
  `id_pip` bigint(20) NOT NULL,
  `siswa_id_siswa` bigint(20) NOT NULL,
  `alasan_layak_pip_id_alasan_layak_pip` bigint(20) NOT NULL,
  `bank_id_bank` int(11) DEFAULT NULL,
  `nomor_rekening` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kantor_cabang_pembantu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekening_atas_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pip`
--

INSERT INTO `pip` VALUES
(1, 94, 1, 69, '373174964978705', 'Nyasiafort', 'Neha Goodwin', '2021-01-14 10:02:07', '2021-07-15 21:27:47', NULL),
(2, 36, 1, 85, '5130895996978166', 'Walkerburgh', 'Jamie Walker V', '2021-02-20 13:33:55', '2021-07-15 21:27:47', NULL),
(3, 97, 4, 23, '5437113710056545', 'Port Susanna', 'Ms. Norene Donnelly', '2020-04-26 13:49:21', '2021-07-15 21:27:47', NULL),
(4, 4, 4, 102, '5507276816317117', 'North Ora', 'Mrs. Vita Witting II', '2019-02-09 01:15:11', '2021-07-15 21:27:47', NULL),
(5, 81, 9, 3, '340974111955795', 'North Oliverland', 'Juwan Beier', '2019-02-19 05:27:31', '2021-07-15 21:27:47', NULL),
(6, 74, 7, 97, '6011592358727294', 'Baumbachbury', 'Prof. Catherine Corwin V', '2021-03-10 17:49:21', '2021-07-15 21:27:47', NULL),
(7, 75, 4, 36, '5294415487184291', 'Hellerfurt', 'Jaunita Hickle', '2019-11-12 08:15:47', '2021-07-15 21:27:47', NULL),
(8, 47, 3, 41, '347078192803739', 'South Enriqueberg', 'Katherine Oberbrunner MD', '2019-02-08 12:32:03', '2021-07-15 21:27:47', NULL),
(9, 57, 5, 20, '5495815340029121', 'Pfannerstillfurt', 'Ismael Abbott', '2018-10-13 14:39:15', '2021-07-15 21:27:47', NULL),
(10, 70, 7, 96, '6011648913552642', 'South Wilburn', 'Sanford Bartell', '2019-10-03 05:36:35', '2021-07-15 21:27:47', NULL),
(11, 39, 2, 5, '5599116502100472', 'Delilahstad', 'Nadia Reichert Jr.', '2020-11-07 06:05:04', '2021-07-15 21:27:47', NULL),
(12, 18, 7, 51, '372395340100864', 'Ileneburgh', 'Mr. Jamal Gislason V', '2021-06-14 17:20:11', '2021-07-15 21:27:47', NULL),
(13, 54, 1, 81, '5234063988210697', 'Port Kelton', 'Abdullah Schultz', '2020-05-25 18:52:50', '2021-07-15 21:27:47', NULL),
(14, 59, 5, 43, '4916120940210', 'East Murrayton', 'Anjali Wiza', '2021-07-12 07:10:04', '2021-07-15 21:27:47', NULL),
(15, 23, 1, 4, '6011085177786787', 'East Natasha', 'Mr. Avery Daugherty I', '2020-11-01 23:00:11', '2021-07-15 21:27:47', NULL),
(16, 16, 4, 69, '4916157622149', 'South Clementine', 'Tanya Wiza', '2018-12-05 14:33:08', '2021-07-15 21:27:47', NULL),
(17, 66, 9, 82, '6011834401543604', 'North Alexysmouth', 'Orland Hackett', '2019-05-04 20:35:44', '2021-07-15 21:27:47', NULL),
(18, 56, 7, 36, '4855784745595', 'Brianaside', 'Ms. Ima Adams', '2020-09-06 18:22:20', '2021-07-15 21:27:47', NULL),
(19, 29, 1, 105, '5594681553353241', 'Greysonburgh', 'Lucas Kshlerin', '2019-07-17 07:49:55', '2021-07-15 21:27:47', NULL),
(20, 6, 6, 56, '5223120453876974', 'North Damaris', 'Miss Emely Gerlach Jr.', '2020-07-30 23:59:42', '2021-07-15 21:27:47', NULL),
(21, 99, 8, 38, '5274761676365384', 'Jamieview', 'Lilliana Anderson', '2018-12-03 21:36:27', '2021-07-15 21:27:47', NULL),
(22, 82, 4, 22, '5372353753609273', 'West Adolphborough', 'Eliza Abshire', '2020-07-05 15:36:30', '2021-07-15 21:27:47', NULL),
(23, 44, 9, 35, '5468585142194639', 'Kraigberg', 'Mr. Gennaro Howell I', '2019-07-24 16:33:26', '2021-07-15 21:27:47', NULL),
(24, 79, 3, 42, '5564833895362357', 'Davisstad', 'Camila Beatty', '2020-01-03 18:21:55', '2021-07-15 21:27:47', NULL),
(25, 96, 6, 84, '4716532546349', 'Douglaschester', 'Mrs. Aniyah Cormier', '2020-08-02 10:47:27', '2021-07-15 21:27:47', NULL),
(26, 42, 6, 32, '5334302064894430', 'Lake Estebantown', 'Aron Hettinger', '2021-06-06 01:20:58', '2021-07-15 21:27:47', NULL),
(27, 31, 5, 55, '349049548916963', 'East Abigailland', 'Ludwig Bauch', '2020-10-21 23:51:36', '2021-07-15 21:27:47', NULL),
(28, 53, 2, 38, '4024007186619368', 'Smithville', 'Dr. Lincoln Durgan', '2020-09-28 08:37:34', '2021-07-15 21:27:47', NULL),
(29, 2, 3, 55, '340764828712021', 'Mooreside', 'Maybell Hyatt', '2019-07-15 18:21:05', '2021-07-15 21:27:47', NULL),
(30, 26, 7, 56, '4929481867057', 'Kenyonville', 'Prof. Emmanuelle Dare', '2020-09-26 15:53:10', '2021-07-15 21:27:47', NULL),
(31, 22, 2, 77, '5388180865504623', 'Lake Elisabethstad', 'Mrs. Clementina Bartoletti', '2019-03-14 00:52:13', '2021-07-15 21:27:47', NULL),
(32, 85, 4, 50, '4554798738125365', 'Port Khalid', 'Claudia Bednar', '2018-11-22 07:43:14', '2021-07-15 21:27:47', NULL),
(33, 51, 2, 20, '6011847833888967', 'Port Melyssaville', 'Dr. Elenora Schinner IV', '2018-10-12 12:37:16', '2021-07-15 21:27:47', NULL),
(34, 68, 2, 103, '4556765882971', 'Schustermouth', 'Vena Schowalter', '2020-05-14 19:02:23', '2021-07-15 21:27:47', NULL),
(35, 92, 8, 63, '349653227659310', 'Eunicebury', 'Jena Cummerata PhD', '2021-06-17 11:10:13', '2021-07-15 21:27:47', NULL),
(36, 50, 5, 39, '4916575649772359', 'Turcotteside', 'Maida Windler IV', '2018-10-16 00:34:57', '2021-07-15 21:27:47', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pip`
--
ALTER TABLE `pip`
  ADD PRIMARY KEY (`id_pip`),
  ADD KEY `fk_pip_alasan_layak_pip1_idx` (`alasan_layak_pip_id_alasan_layak_pip`),
  ADD KEY `fk_pip_siswa1_idx` (`siswa_id_siswa`),
  ADD KEY `fk_pip_bank1_idx` (`bank_id_bank`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pip`
--
ALTER TABLE `pip`
  MODIFY `id_pip` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pip`
--
ALTER TABLE `pip`
  ADD CONSTRAINT `fk_pip_alasan_layak_pip1` FOREIGN KEY (`alasan_layak_pip_id_alasan_layak_pip`) REFERENCES `alasan_layak_pip` (`id_alasan_layak_pip`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pip_bank1` FOREIGN KEY (`bank_id_bank`) REFERENCES `bank` (`id_bank`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pip_siswa1` FOREIGN KEY (`siswa_id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
