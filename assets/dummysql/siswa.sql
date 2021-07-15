-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2021 pada 00.15
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
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` bigint(20) NOT NULL,
  `tahun_ajaran_id_tahun_ajaran` int(11) NOT NULL,
  `gender_id_gender` int(11) NOT NULL,
  `moda_transportasi_id_moda_transportasi` int(11) NOT NULL,
  `tempat_tinggal_id_tempat_tinggal` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nipd` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rombel` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nomor   Induk   Siswa   Nasional   peserta   didik.   NISN memiliki    format    10    digit    angka.',
  `nomor_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nomor Induk Kependudukan yang tercantum pada Kartu Keluarga bagi WNI. NIK memiliki format 16 digit angka. ',
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nomor_registrasi_akta_lahir` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nomor registrasi Akta Kelahiran. Nomor registrasi yang dimaksud umumnya tercantum pada bagian tengah atas lembar kutipan akta kelahiran',
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Agama   atau   kepercayaan   yang   dianut   oleh   peserta   didik.',
  `kewarganegaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Kewarganegaraan peserta didik',
  `anak_ke` int(11) NOT NULL COMMENT 'berdasarkan KK',
  `jumlah_saudara_kandung` int(11) NOT NULL,
  `nomor_telepon_rumah` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_telepon_seluler` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinggi_badan_cm` int(11) NOT NULL,
  `berat_badan_kg` int(11) NOT NULL,
  `lingkar_kepala_cm` int(11) NOT NULL,
  `jarak_tempat_tinggal_ke_sekolah_km` int(11) NOT NULL,
  `waktu_tempuh_ke_sekolah_menit` int(11) NOT NULL COMMENT 'Lama  tempuh  peserta  didik  ke  sekolah.  Kolom  kiri  adalah  jam,  kolom  kanan  adalah  menit.  Misalnya,  peserta  didik memerlukan  waktu  tempuh  1  jam  15  menit,  maka  kotak  kiri  diisi  1  sedangkan  kanan  diisi  15.  Apabila  memerlukan waktu 25  menit,  maka  kotak  kiri diisi  0  sedangkan kanan diisi  25',
  `foto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='data pribadi siswa';

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` VALUES
(100, 6, 2, 5, 4, 'Amiya Armstrong', 'e77e50f3-26dd-3730-a0ec-73d0b33ff27d', ' XII TKJ 3', '715232553', '3393746777623891', '3382387672457844', 'New Maci', '1993-10-19', '01521337', ' Katolik', ' Malaysia', 7, 3, '1-937-233-9458', '185.760.2096x357', 'rzemlak@example.org', 174, 47, 37, 27, 303, 'ratione', '2009-07-08 09:48:05', '2021-07-15 07:09:53', NULL),
(99, 3, 1, 9, 5, 'Kyla Metz', '209bc7c3-e8a9-39ca-b39f-70426516aa24', ' X OTKP 2', '3362776931', '3354443107638508', '3298107678815722', 'New Uriah', '1987-03-28', '02731667', ' Katolik', ' Brunei', 6, 5, '1-928-417-5226', '1-814-172-9497x77211', NULL, 115, 30, 46, 13, 155, 'provident', '1983-09-09 06:41:03', '2021-07-15 21:32:39', NULL),
(98, 4, 1, 9, 4, 'Miss Jalyn Tromp', '553f03d0-9ad1-34c0-9a66-82b4453446f3', ' XII OTKP 3', '7266196853', '3251644348260015', '3341074169240892', 'New Keeganchester', '2001-10-31', '58695142', ' Hindu', ' Malaysia', 8, 6, NULL, '781.748.9334x0449', NULL, 220, 80, 47, 99, 291, 'aliquam', '2013-06-24 00:51:41', '2021-07-15 21:32:39', NULL),
(97, 6, 1, 4, 2, 'Ms. Rosalyn Abbott', '4f957646-c6a9-3821-adfc-72265e8d59be', '  XI PBS 3', '7475964057', '3360445242188871', '3350590435974300', 'Streichside', '1990-09-18', '41444023', ' Hindu', 'Indonesia', 10, 3, NULL, '(135)156-5580x78046', NULL, 149, 115, 27, 48, 189, NULL, '2001-01-22 06:45:39', '2021-07-15 21:33:41', NULL),
(96, 8, 2, 6, 5, 'Miss Clarissa Batz', '4b34ba96-6d3a-3fad-bb21-770213b19128', ' XII PBS 2', '4990122440', '3231621857825667', '3358005821518600', 'East Danial', '1991-08-10', '54620681', ' Budda', 'Indonesia', 10, 5, '866.977.9723', '170-577-2006x0212', NULL, 143, 25, 34, 26, 161, 'veritatis', '1974-04-23 12:03:54', '2021-07-15 21:32:39', NULL),
(95, 2, 1, 2, 3, 'Melissa Mohr III', '6c34071a-7f7e-3d82-8fff-17391e9c479d', ' XI TBSM 1', '1602134105', '3273377385735512', '3358624278195202', 'North Juanitaview', '1995-07-27', '22222381', ' Katolik', ' Malaysia', 2, 10, NULL, '06155020462', 'adele.langosh@example.com', 203, 74, 50, 24, 157, NULL, '1973-12-28 19:25:15', '2021-07-15 21:33:41', NULL),
(94, 6, 2, 1, 1, 'Prof. Douglas Carter', 'd5dc2ca9-de2a-38cd-a76e-42c33aa93091', ' XII OTKP 3', '8156333205', '3270184130314738', '3381688557658344', 'Port Hester', '1983-02-13', '40059570', 'Islam', ' Singapura', 4, 7, '395.083.0976', '(664)331-0709x28929', 'kessler.eudora@example.org', 117, 87, 49, 61, 144, NULL, '1970-05-10 07:08:13', '2021-07-15 21:33:41', NULL),
(93, 9, 2, 5, 5, 'Richard Parker I', '613b6f8e-0b9d-33b9-9c47-198cdaa7ead3', ' X AKL 3', '4695810307', '3272134554386139', '3304266946949065', 'West Gwenside', '1989-08-31', '72618301', 'Islam', ' Malaysia', 6, 10, '03297927710', '(374)496-9167', 'ckulas@example.org', 176, 69, 46, 3, 25, NULL, '2008-02-03 15:36:31', '2021-07-15 21:33:41', NULL),
(92, 1, 2, 8, 5, 'Maximilian Cruickshank', 'deffef96-d3fa-3750-835e-9a49a0b723fe', ' XI AKL 3', '312094979', '3305778220668435', '3379072425886988', 'Lake Assuntabury', '1982-07-10', '32854688', ' Kristen', 'Indonesia', 1, 7, '425.062.6045', '356-335-7124x185', 'phessel@example.org', 102, 66, 42, 4, 33, NULL, '1999-07-20 22:25:10', '2021-07-15 21:33:41', NULL),
(91, 11, 2, 8, 4, 'Elton Cassin MD', 'b4fd0cf3-06de-3270-b13a-3176c9849f5c', '  XI PBS 3', '3340821505', '3252832998335362', '3328495072759688', 'Wymanport', '2009-07-26', '11924074', ' Hindu', ' Singapura', 5, 2, NULL, '(213)616-4494x130', NULL, 207, 80, 23, 82, 159, 'error', '1989-03-26 00:46:10', '2021-07-15 21:32:39', NULL),
(90, 7, 2, 3, 6, 'Bret Grady', 'b340bf7e-f2b0-3968-b770-ab938e03eff7', ' X OTKP 2', '234987088', '3351037352811545', '3227260212972761', 'Port Zenafurt', '2003-05-18', '33607658', 'Islam', ' Malaysia', 8, 10, '1-229-654-4323', '1-193-362-4266x38811', NULL, 193, 95, 22, 99, 69, 'quia', '2007-01-25 22:21:59', '2021-07-15 21:32:39', NULL),
(89, 6, 1, 4, 2, 'Priscilla Christiansen', '142a061b-8118-395c-a4af-50dc2af50ab9', ' XI TBSM 1', '7837356557', '3317131245788187', '3382003265805542', 'Ankundingville', '1974-11-14', '25930269', ' Kristen', ' Brunei', 3, 8, '587-333-7699x5138', '1-037-019-0342x763', NULL, 124, 73, 29, 21, 132, NULL, '1992-09-20 08:02:47', '2021-07-15 21:33:41', NULL),
(88, 1, 2, 2, 3, 'Mr. Johathan Jenkins V', '23061bb8-bedf-31a9-8700-461169bf4768', ' X TKJ 3', '8822317657', '3259038146957755', '3225387932173908', 'East Hoytshire', '1985-08-10', '43615650', ' Khonghuchu', 'Indonesia', 9, 9, NULL, '1-729-256-1233', 'francis35@example.org', 167, 76, 48, 33, 283, NULL, '1984-10-06 10:21:25', '2021-07-15 21:33:41', NULL),
(87, 6, 1, 3, 2, 'Alford Dare', '8bbe78e8-c21a-390c-9959-d87bdeab2582', ' XII TKJ 3', '2490274768', '3201667468529195', '3349017705675214', 'Marvinhaven', '1997-09-24', '42454205', ' Budda', ' Singapura', 5, 4, NULL, '1-174-071-5946x084', 'schmidt.katrina@example.com', 130, 43, 31, 84, 195, 'eos', '2018-12-05 02:00:35', '2021-07-15 21:31:53', NULL),
(86, 6, 1, 4, 2, 'Shany Gerhold', 'e5a6cec9-879e-3a5a-957c-24bbf0128058', ' XII OTKP 1', '7823749427', '3378612199611961', '3325931919738650', 'West Arvillaton', '2016-11-29', '33920856', ' Kristen', 'Indonesia', 5, 9, '+16(5)6649429378', '972-109-9961x621', NULL, 138, 93, 44, 42, 177, 'rerum', '1996-04-16 11:05:13', '2021-07-15 21:32:39', NULL),
(85, 5, 1, 8, 4, 'Prof. Lila Hermann II', '98f13bfe-162a-3a85-8707-12b214efd55d', ' X TBSM 2', '7852957287', '3238208627142012', '3355380476452410', 'Volkmanmouth', '1991-05-22', '59003694', 'Islam', 'Indonesia', 2, 4, '838-173-9010x965', '+14(7)2588564825', NULL, 179, 95, 46, 69, 8, NULL, '1998-10-15 17:53:41', '2021-07-15 21:33:41', NULL),
(84, 5, 1, 3, 6, 'Jermaine Kovacek', 'bbc46010-a336-3d81-adb5-9d19796b1a41', ' XI OTKP 2', '7294874963', '3216495351213962', '3251686182990670', 'Port Erna', '1999-07-07', '63366709', ' Hindu', ' Brunei', 4, 8, NULL, '(020)213-5979', NULL, 208, 28, 34, 73, 182, 'et', '2013-02-18 15:04:22', '2021-07-15 21:32:39', NULL),
(83, 7, 2, 7, 6, 'Heaven Senger', '1bdecb84-0e4e-3933-86c1-bd50f056ab37', ' XII TBSM 1', '146512081', '3285512304678559', '3276330014690757', 'Goldnertown', '2004-07-12', '92647282', ' Katolik', 'Indonesia', 4, 9, NULL, '(545)940-2357x058', 'brenda25@example.com', 163, 56, 38, 17, 361, NULL, '1982-10-23 20:48:02', '2021-07-15 21:33:41', NULL),
(82, 8, 1, 3, 2, 'Mr. Shayne Kilback I', '71b42ec4-3cf7-3527-9ad0-f77ad871315c', ' X TKJ 2', '934535639', '3271490454394370', '3325516808591783', 'West Ellsworth', '1994-10-26', '02192376', ' Katolik', ' Singapura', 4, 2, '577-013-6566x735', '725.011.4997x75470', 'mayert.reba@example.com', 135, 28, 50, 17, 349, 'aut', '1992-04-21 01:35:19', '2021-07-15 07:09:53', NULL),
(81, 12, 1, 4, 4, 'Prof. Edmond Mraz DVM', 'e9cd25d7-57f7-359b-897a-1f00e7659192', ' XI AKL 3', '6173136814', '3299344680830836', '3379016167391091', 'Faustinomouth', '1976-04-26', '21761102', ' Katolik', ' Brunei', 9, 1, NULL, '825-125-5859', 'haag.gerda@example.net', 132, 90, 46, 84, 152, NULL, '1979-02-08 09:15:05', '2021-07-15 21:33:41', NULL),
(80, 10, 2, 9, 6, 'Miss Cordia Lakin III', '4fe1bc04-7466-3675-afa3-01fbbc4654d5', ' XI TKJ 2', '2102275739', '3207115433365107', '3270643077231944', 'Beattymouth', '1972-05-09', '94960402', ' Budda', ' Malaysia', 2, 2, '+78(9)4283235774', '1-842-761-4027x9770', NULL, 175, 80, 35, 15, 141, 'est', '2015-06-19 13:44:04', '2021-07-15 21:32:39', NULL),
(79, 11, 1, 5, 4, 'Margaret Thiel DVM', '40291362-607f-3404-906c-067471cb2cb8', ' XI TBSM 3', '8594206339', '3291406888701022', '3205741455778480', 'Cecilport', '2003-04-22', '49740677', ' Kristen', ' Malaysia', 1, 7, '(365)985-2043x706', '1-581-737-5671x646', 'kaitlin.prosacco@example.org', 126, 60, 29, 89, 92, 'consequuntur', '2014-12-17 09:58:33', '2021-07-15 07:09:53', NULL),
(78, 3, 1, 2, 4, 'Dr. Aimee Gibson', '11903ff2-6770-3b6a-865a-1c792f248cbb', ' XII TKJ 3', '6902262157', '3237580459844321', '3264135279040784', 'West Deronstad', '1973-08-02', '28018933', ' Budda', ' Singapura', 2, 4, NULL, '913.096.3578', 'gaylord.emely@example.com', 197, 115, 24, 99, 48, 'voluptatem', '1980-03-28 10:19:11', '2021-07-15 21:31:53', NULL),
(77, 8, 2, 8, 3, 'Makayla Brakus', '7a072587-3946-305c-91cb-236e078081de', '  XI AKL 1', '9810060592', '3372798839956522', '3389810905698686', 'Sheamouth', '1975-07-16', '19268699', ' Khonghuchu', ' Singapura', 2, 3, NULL, '+13(6)8621473692', 'gavin.pfeffer@example.com', 155, 92, 50, 13, 345, NULL, '2005-03-15 20:32:46', '2021-07-15 21:33:41', NULL),
(76, 1, 2, 6, 2, 'Terrence Weber', 'edabea0f-7398-3731-b7e9-1870dad8d69a', ' XI PBS 4', '4353634018', '3354084888100624', '3368547090329230', 'Johnsonside', '2007-03-14', '26153384', ' Kristen', 'Indonesia', 10, 9, NULL, '048-446-1120x18731', NULL, 134, 101, 32, 6, 243, 'molestiae', '1993-10-26 03:45:33', '2021-07-15 21:32:39', NULL),
(75, 10, 1, 9, 1, 'Kobe Kshlerin', '694aa05e-7fec-3516-a4b4-f3ae0ced0c1a', ' XII PBS 1', '3876562385', '3286949305795133', '3329849149100482', 'Kozeytown', '1976-05-23', '03804452', 'Islam', ' Malaysia', 9, 8, NULL, '212.285.1279x4566', 'llewellyn.cormier@example.org', 111, 84, 43, 7, 223, 'delectus', '2001-09-08 09:58:48', '2021-07-15 21:31:53', NULL),
(74, 1, 2, 5, 5, 'Miss Jade Howe', '87c087a1-4b71-390e-a0c6-a9014bf74d52', ' XI TBSM 2', '9866705449', '3236257653031499', '3381694656424224', 'South Macy', '1971-11-27', '35685456', ' Katolik', ' Brunei', 2, 8, '(254)964-8587', '776-504-4814x7641', NULL, 159, 61, 33, 14, 186, NULL, '2013-12-21 13:42:02', '2021-07-15 21:33:41', NULL),
(73, 7, 2, 8, 2, 'Celestine Rau', '10c95d5c-234e-3da5-8ab7-043e561744bc', ' XI TBSM 3', '7342192685', '3381362202670425', '3204283726681024', 'South Holly', '2018-12-04', '51561130', ' Katolik', ' Malaysia', 10, 8, NULL, '1-699-419-7239', 'wmitchell@example.org', 134, 61, 50, 4, 61, NULL, '1977-09-04 01:42:22', '2021-07-15 21:33:41', NULL),
(72, 4, 2, 1, 1, 'Lawrence Skiles', '3835f5d7-6b7c-3178-8c58-0ce4fb71a4a8', ' XII TBSM 1', '6414781911', '3220977374352515', '3212184401880950', 'South Alejandraberg', '1971-11-05', '35214106', ' Hindu', ' Brunei', 2, 7, NULL, '596-022-9910x952', 'halvorson.anibal@example.net', 102, 23, 24, 26, 386, NULL, '1984-08-16 18:14:26', '2021-07-15 21:33:41', NULL),
(71, 9, 2, 3, 1, 'Prof. Francesco Mills MD', '1dc45e24-3932-3877-8cf6-211559631267', ' XI PBS 4', '5104021777', '3356783893331885', '3248104570526630', 'South Brown', '2018-12-20', '50868377', ' Khonghuchu', 'Indonesia', 1, 1, '578.984.7459x292', '933-226-1930', 'joany44@example.com', 142, 22, 46, 8, 388, NULL, '2017-04-23 18:49:17', '2021-07-15 21:33:41', NULL),
(70, 2, 2, 3, 6, 'Ova Kuhic', 'd89afb3c-4f44-36d6-aca4-7abb854f1672', ' XI PBS 2', '1299392059', '3202943393029273', '3253636553417891', 'Griffinside', '1974-04-18', '71331829', ' Kristen', ' Brunei', 1, 5, NULL, '1-720-198-0725x209', NULL, 175, 21, 36, 90, 293, NULL, '1973-08-02 13:51:46', '2021-07-15 21:33:41', NULL),
(69, 2, 2, 3, 6, 'Reyes Connelly', 'bfdba61d-ba5a-3e45-9795-dcb63b2f7283', ' XII TKJ 3', '6279223283', '3387793352361768', '3309259964060038', 'Koeppshire', '1973-05-24', '02296968', ' Khonghuchu', ' Singapura', 6, 2, NULL, '(081)201-0284', 'selina.turner@example.net', 162, 103, 48, 28, 110, 'molestiae', '1979-08-30 23:40:43', '2021-07-15 21:31:53', NULL),
(68, 5, 2, 5, 1, 'Mrs. Tianna Erdman MD', 'fec8262b-72b0-3ded-af6c-cdf12b6530f6', ' XI OTKP 1', '9910529416', '3233371777832508', '3305813449528068', 'South Rosemarieton', '2018-07-12', '17140812', 'Islam', 'Indonesia', 10, 3, NULL, '893-242-0460x42905', NULL, 182, 46, 50, 23, 229, NULL, '2003-12-09 01:24:13', '2021-07-15 21:33:41', NULL),
(67, 10, 1, 9, 6, 'Sylvan Ryan', 'a09997d3-a8be-3e6c-92d8-765b548fa4fe', ' X TKJ 1', '1088997722', '3340991596598178', '3399276105687022', 'West Burdettestad', '2018-09-05', '24664080', ' Khonghuchu', 'Indonesia', 1, 1, NULL, '(902)514-2978x28718', NULL, 130, 87, 32, 97, 38, NULL, '2016-04-14 13:31:05', '2021-07-15 21:33:41', NULL),
(66, 4, 2, 9, 6, 'Fleta Bruen', '4bfa5fdd-69ba-3427-acd9-4916d9e55ad5', ' XII TKJ 4', '5135391914', '3282875866722316', '3272434156667441', 'Daughertyberg', '2015-11-22', '02483900', ' Budda', ' Brunei', 6, 5, '452.550.1627', '288-008-2126', NULL, 145, 62, 24, 18, 109, NULL, '2003-01-28 23:15:38', '2021-07-15 21:33:41', NULL),
(65, 2, 1, 9, 6, 'Mr. Elwyn Feil III', '557b0e39-eb55-3a70-8559-a5158146cc91', ' XII PBS 1', '4435050744', '3343271852470934', '3313011368457228', 'Rickyville', '1981-10-31', '01316469', ' Budda', ' Singapura', 8, 1, NULL, '1-099-770-3724x611', NULL, 158, 120, 30, 79, 325, 'optio', '2011-06-22 05:12:20', '2021-07-15 21:32:39', NULL),
(64, 11, 2, 3, 2, 'Libby Walsh', '84316118-b4df-3824-bc1b-c64a293a3bcf', ' X TKJ 1', '8334665709', '3367167316190898', '3343185137491673', 'Lake Josieville', '1984-09-11', '98556700', ' Budda', ' Malaysia', 7, 9, NULL, '059-189-1948', 'willis.stamm@example.com', 142, 60, 24, 89, 164, NULL, '2010-05-25 13:00:30', '2021-07-15 21:33:41', NULL),
(63, 8, 2, 9, 6, 'Ms. Janae Hickle', '600bfd15-610d-3561-aab0-c5ead362eac0', ' X TBSM 2', '3017983333', '3220781940314919', '3391894117556512', 'Wolffberg', '1999-08-08', '13726287', ' Kristen', 'Indonesia', 8, 10, NULL, '278-741-9065', NULL, 110, 73, 36, 79, 198, 'ut', '2003-06-24 04:56:44', '2021-07-15 21:32:39', NULL),
(62, 10, 2, 4, 3, 'Rosa Quitzon', 'c42b692f-b262-3d1d-95d5-5911db3abf41', '  XI TKJ 1', '843982934', '3302574693039060', '3291832775156945', 'West Kathrynborough', '1972-03-22', '07233258', 'Islam', ' Singapura', 1, 7, NULL, '710.654.0907', 'tillman.shanelle@example.net', 219, 39, 26, 35, 108, 'sit', '1977-06-11 17:03:05', '2021-07-15 21:31:53', NULL),
(61, 1, 2, 6, 4, 'Cleve Gleichner', 'd39e3a2f-5687-3d6c-ac21-aadc6542c6ac', ' XII TKJ 4', '1821125243', '3253114935290069', '3275353620015085', 'New Deontaeport', '1972-06-22', '39187659', ' Budda', 'Indonesia', 3, 7, NULL, '(480)468-4979x703', 'carter87@example.com', 169, 56, 21, 59, 14, 'magni', '1970-06-07 08:46:06', '2021-07-15 21:31:53', NULL),
(60, 4, 2, 8, 6, 'Ms. Shanny Considine I', '0c61e1e4-4035-3c0e-be79-c6d5497cc661', ' XI TKJ 2', '3335769746', '3309954342432320', '3384729803353548', 'Verlieport', '1972-11-07', '23336988', ' Khonghuchu', 'Indonesia', 9, 9, NULL, '470-857-6392', NULL, 152, 97, 47, 67, 192, 'iusto', '1970-07-04 17:59:09', '2021-07-15 21:32:39', NULL),
(59, 9, 2, 3, 1, 'Norval Ortiz', 'b3dbf66d-75c4-367e-9909-3e42e3e5e67e', ' XII OTKP 3', '2625630396', '3373366358131170', '3377500280644744', 'Prohaskaport', '2005-07-02', '28131502', ' Hindu', ' Malaysia', 8, 8, NULL, '253.121.0527x72855', NULL, 104, 59, 41, 48, 337, NULL, '1980-06-13 01:01:21', '2021-07-15 21:33:41', NULL),
(58, 8, 2, 6, 4, 'Jasper Davis', 'bf6a9c6f-43a6-397a-87b9-58de51a7d6d4', ' XI TBSM 1', '4158149365', '3303965673316270', '3351144105289131', 'Lake Tanner', '1987-03-25', '99200640', ' Katolik', ' Singapura', 4, 2, '1-081-296-7391x1012', '07977332211', 'fkessler@example.org', 129, 92, 21, 18, 25, 'porro', '1974-12-14 03:29:57', '2021-07-15 07:09:53', NULL),
(57, 12, 1, 8, 4, 'Dr. Allan Bayer', '31b8f1a1-b45b-3be0-b54c-dc064756cb5c', '  XI TKJ 1', '9477179900', '3364635421056300', '3210631248261780', 'Jonesland', '1993-09-05', '79870252', ' Katolik', ' Brunei', 4, 9, NULL, '1-502-417-8273', NULL, 141, 33, 21, 86, 293, 'facilis', '1970-01-01 19:03:00', '2021-07-15 21:32:39', NULL),
(56, 10, 2, 8, 3, 'Prof. Mathew Kuphal PhD', 'c87824fb-31b4-3b26-8769-36bcdf52aeea', ' XI OTKP 2', '3351283577', '3365229972917586', '3367467930167913', 'Port Jaymeburgh', '1980-07-30', '98992126', 'Islam', ' Malaysia', 9, 5, NULL, '1-295-592-2983', 'oliver.jones@example.org', 174, 86, 32, 54, 398, NULL, '2017-10-18 18:09:12', '2021-07-15 21:33:41', NULL),
(55, 11, 2, 9, 5, 'Bridie Kuhic', '3fbacdf2-7912-3a39-b4ed-9a62409a09c1', '  XI TKJ 1', '564075925', '3206471182778478', '3350299341138452', 'South Eldridge', '1996-01-19', '59738244', ' Budda', ' Singapura', 7, 9, '(492)295-5074', '584.109.1577x89766', NULL, 187, 71, 33, 15, 149, NULL, '2002-05-27 05:24:28', '2021-07-15 21:33:41', NULL),
(54, 10, 1, 4, 3, 'Lamar Douglas', 'cc495a57-7af9-3cf4-8eec-87187b2f6859', ' XI AKL 3', '6658626696', '3276531348191202', '3221956844720990', 'South Scarlett', '1985-08-22', '60934864', ' Hindu', ' Malaysia', 8, 3, NULL, '629-291-8980x53279', 'ulubowitz@example.net', 125, 94, 47, 64, 8, NULL, '2013-11-13 21:21:49', '2021-07-15 21:33:41', NULL),
(53, 3, 1, 6, 6, 'Louisa Stoltenberg', '0a20c6bf-2a98-3f1f-86a0-794da3ce80df', '  XI AKL 1', '5951089242', '3382202175911516', '3371582422778010', 'South Minnieview', '2014-08-14', '86353816', ' Khonghuchu', ' Malaysia', 3, 1, '317-389-8111x2588', '827-828-1134x79054', 'kristina.kuhic@example.com', 109, 20, 20, 38, 249, 'quia', '1992-08-29 03:05:47', '2021-07-15 07:09:53', NULL),
(52, 5, 1, 4, 2, 'Cathrine Howell', '8401e96d-6586-359d-b7fd-b7bc8c943e87', '  XI TKJ 1', '5755479874', '3329944476485252', '3290589750744402', 'Lake Violette', '2001-03-26', '75399993', ' Hindu', ' Brunei', 8, 6, '1-447-395-0250x858', '1-498-886-8719x7437', 'kautzer.alvina@example.org', 160, 99, 30, 64, 73, NULL, '1986-05-30 20:10:50', '2021-07-15 21:33:41', NULL),
(51, 6, 2, 6, 3, 'Clyde Conn', '53a863f4-a2bd-37c1-ad01-2089eb8d017f', ' XII PBS 2', '6610482645', '3224159361701459', '3371908927336335', 'Anaismouth', '1979-05-11', '10834084', ' Khonghuchu', ' Brunei', 6, 2, NULL, '(306)689-1376x77435', NULL, 149, 62, 28, 33, 211, 'amet', '1972-09-08 10:49:56', '2021-07-15 21:32:39', NULL),
(50, 2, 1, 5, 1, 'Frankie Treutel IV', 'c439a1c1-2772-3b14-b48e-9a1723285c74', ' X AKL 2', '2874442120', '3341384065896272', '3391460531018674', 'Lake Margueriteborough', '2007-03-29', '30196780', ' Hindu', ' Brunei', 8, 5, '+85(1)3016390877', '1-045-921-1641x6424', NULL, 161, 47, 21, 80, 275, NULL, '1982-04-09 19:18:45', '2021-07-15 21:33:41', NULL),
(49, 11, 1, 4, 4, 'Shane Spencer', '2c2aafea-3226-3050-a946-23d56ea2c4b3', '  XII TKJ 1', '1573508402', '3380855112988501', '3343620320968330', 'South Leonard', '1982-01-28', '30363939', ' Kristen', ' Brunei', 8, 4, '441-681-8789', '867-825-1785', 'adriel.herman@example.com', 135, 116, 40, 28, 196, 'impedit', '1974-07-25 18:00:05', '2021-07-15 07:09:53', NULL),
(48, 11, 2, 7, 6, 'Bernhard Franecki', 'b74fcdb0-721f-3abc-ba72-a76d9f95696f', ' XI PBS 4', '8119057483', '3302634281758219', '3269973545800895', 'East Lisandrofort', '1974-07-24', '19384542', ' Budda', ' Brunei', 7, 8, NULL, '592-006-9882', 'lorenz38@example.net', 211, 51, 25, 84, 255, 'facere', '2013-06-19 18:49:24', '2021-07-15 21:31:53', NULL),
(47, 4, 2, 2, 2, 'Aaron Langworth PhD', '6bffa269-e50b-3e71-9019-c9d156344c36', ' X PBS 2', '8501815258', '3234087424632162', '3266106047574431', 'Nolaside', '2009-06-06', '17065504', ' Kristen', ' Brunei', 4, 9, NULL, '03673150643', 'hank33@example.org', 140, 112, 42, 28, 385, 'autem', '1992-02-27 05:37:46', '2021-07-15 21:31:53', NULL),
(46, 7, 2, 9, 4, 'Ms. Adeline Grant DVM', '0e2b6db5-576e-3d3f-b792-85bf2dddd2b9', ' XI AKL 3', '2382082411', '3222630430851132', '3302492245845497', 'Hettingerland', '2003-11-29', '52430473', ' Khonghuchu', ' Brunei', 2, 6, '666-460-0844x74259', '117.206.0920', 'smitham.elyse@example.net', 107, 102, 36, 49, 105, NULL, '1983-05-29 22:00:07', '2021-07-15 21:33:41', NULL),
(45, 11, 1, 4, 3, 'Stephany Bergstrom', '264fbbdb-e07a-32f2-b5e6-7008268df245', ' XI PBS 2', '384180205', '3360233314707875', '3260598117578775', 'Gislasonmouth', '1970-11-27', '75117931', ' Kristen', ' Brunei', 3, 7, NULL, '1-912-599-4834x65113', 'maegan.deckow@example.org', 129, 85, 31, 31, 287, 'quaerat', '1993-07-01 20:33:07', '2021-07-15 21:31:53', NULL),
(44, 3, 1, 2, 5, 'Danielle Heathcote', '1a5d08af-0210-3f2f-b9b5-6109c166c3a0', '  XII TKJ 1', '9128965293', '3202088024932892', '3206146643031389', 'West Willishaven', '1980-12-21', '37151102', 'Islam', ' Malaysia', 9, 1, '825.773.7948x1361', '(752)838-8000x08106', NULL, 136, 77, 33, 67, 122, NULL, '1978-11-29 17:04:11', '2021-07-15 21:33:41', NULL),
(43, 5, 1, 1, 6, 'Ena Senger', '655c82cb-1749-3ff0-8b39-ffd33402dd9b', ' X AKL 3', '3973144423', '3224152571335435', '3240465349890292', 'Dorrisbury', '2003-07-13', '77296467', ' Katolik', ' Brunei', 6, 8, NULL, '373.392.7048', 'bednar.sydnie@example.org', 116, 34, 49, 58, 205, 'repudiandae', '1974-05-11 20:31:00', '2021-07-15 21:31:53', NULL),
(42, 2, 1, 7, 1, 'Mr. Santos Connelly IV', '55aadfc1-4597-3e2c-8d5e-6b10bf1dd495', ' XI TKJ 2', '3352481327', '3399983684159815', '3222245621681214', 'Hermanside', '1996-10-11', '35391982', ' Hindu', ' Brunei', 8, 3, '1-899-445-3334', '681.494.8609x274', 'hahn.lyda@example.org', 136, 110, 39, 13, 106, NULL, '1971-12-04 01:54:45', '2021-07-15 21:33:41', NULL),
(41, 1, 1, 7, 1, 'Matteo Wiza Jr.', 'bbd0ce80-6d0f-3a66-b256-cc5dba3df4bd', '  XI PBS 1', '9390645565', '3328076575696468', '3269007000233978', 'Angelton', '2006-07-27', '38480898', ' Khonghuchu', ' Brunei', 4, 6, NULL, '875.205.4884', NULL, 117, 50, 35, 99, 79, 'quia', '1974-07-03 09:08:02', '2021-07-15 21:32:39', NULL),
(40, 10, 2, 8, 4, 'Jolie Metz', '3ca63a60-4b56-3445-bd40-8fa5efc31bf0', ' XI OTKP 2', '7603504306', '3390262478217482', '3244732266478241', 'Lakinshire', '2018-04-04', '23071230', ' Budda', ' Singapura', 3, 9, '(259)273-6548x09940', '1-724-938-7521x306', NULL, 186, 63, 49, 55, 355, 'fugit', '2004-08-07 16:10:36', '2021-07-15 21:32:39', NULL),
(39, 9, 2, 2, 5, 'Ms. Miracle Gaylord', '842d8fa2-53b3-363d-9769-1a2de8894de1', ' XII TKJ 4', '6773407059', '3254949153121561', '3288240488804877', 'North Delfina', '1990-05-08', '53259943', ' Kristen', ' Malaysia', 1, 10, '(130)811-3139', '212.792.5765', 'streich.jarvis@example.com', 146, 118, 47, 97, 329, 'quos', '1978-09-17 03:43:39', '2021-07-15 07:09:53', NULL),
(38, 5, 1, 4, 1, 'Dr. Cary Bogisich', 'd180e00f-613c-33a4-942a-1bb08b9df7ab', ' XII PBS 1', '759532931', '3300407905317843', '3352286217547953', 'South Maxime', '2014-07-10', '86592963', ' Katolik', ' Brunei', 4, 8, NULL, '1-948-775-3683', NULL, 146, 83, 48, 33, 340, NULL, '2013-04-15 23:25:04', '2021-07-15 21:33:41', NULL),
(37, 4, 2, 9, 6, 'Dr. Enid Pollich', '5d2b2bec-07be-38e5-ae32-1eb5df3aaeb9', ' XI TBSM 3', '2248688611', '3209139312524349', '3212680539675057', 'Francesborough', '1988-06-22', '50903207', ' Khonghuchu', ' Brunei', 3, 8, NULL, '(439)317-3222', NULL, 106, 46, 40, 69, 209, NULL, '1971-11-26 16:10:31', '2021-07-15 21:33:41', NULL),
(36, 3, 1, 9, 4, 'Lorenzo Runolfsson', '4a98e194-a30d-3bd6-ba65-88249c0849bf', '  XII TKJ 1', '5279934398', '3353609755635261', '3210744364093990', 'Corwinfort', '2019-12-12', '56646597', ' Katolik', ' Malaysia', 10, 10, '1-826-187-3983x0300', '586.846.0583x24809', 'jared14@example.org', 160, 78, 32, 68, 90, NULL, '1975-01-10 12:44:46', '2021-07-15 21:33:41', NULL),
(35, 4, 2, 7, 6, 'Mara Nolan', '8f3a63d4-e36d-3d3e-b6eb-1f1e2c26bf52', '  XI PBS 1', '2544227975', '3260833606217057', '3200237519387156', 'Leuschkemouth', '1977-05-08', '28589556', ' Khonghuchu', ' Malaysia', 4, 6, '05877102673', '+48(3)5087801753', 'kelley.moen@example.com', 182, 81, 32, 94, 242, 'id', '2004-10-26 12:41:22', '2021-07-15 07:09:53', NULL),
(34, 9, 1, 1, 1, 'Adolphus Bergstrom', 'b409a98f-992a-372a-ac87-4e54d023cf49', ' XI PBS 4', '8875998673', '3365229014866054', '3377604988496750', 'Kihnbury', '1986-08-30', '98595181', ' Kristen', 'Indonesia', 4, 3, NULL, '583.784.3998x530', 'emma.mitchell@example.net', 171, 86, 24, 30, 343, 'libero', '1990-07-24 21:15:53', '2021-07-15 21:31:53', NULL),
(33, 5, 2, 4, 1, 'Barton Moore I', '45ffe8d7-2676-3415-8e9f-c81f309d3b8d', ' XII TKJ 4', '9892707385', '3326374124549329', '3252579127997160', 'Mayertside', '1982-04-26', '98895106', ' Hindu', ' Singapura', 3, 5, NULL, '(426)829-2163x7771', 'zboncak.jayda@example.net', 103, 90, 47, 11, 189, NULL, '1992-04-20 22:05:15', '2021-07-15 21:33:41', NULL),
(32, 5, 2, 7, 2, 'Dr. Nikki Kuvalis', 'e434b613-8406-3b3f-b443-88760383de10', ' X OTKP 3', '9895750657', '3320443953014910', '3323384724743664', 'Brendamouth', '1997-01-26', '10940518', ' Katolik', ' Brunei', 10, 10, NULL, '087.682.8131', 'denesik.theresia@example.com', 154, 29, 43, 1, 385, 'qui', '1973-06-02 18:08:20', '2021-07-15 21:31:53', NULL),
(31, 1, 1, 6, 4, 'Miss Cassandra Kuhn Jr.', 'e2509f6d-66b8-3f89-94df-8cdf0acd4b9a', ' X TKJ 3', '8400950104', '3363901566993445', '3340637780353427', 'East Dylan', '2015-07-28', '74293070', ' Kristen', ' Brunei', 6, 7, NULL, '1-568-390-1838x3975', 'akilback@example.net', 138, 47, 49, 32, 21, 'doloremque', '2013-10-04 07:37:12', '2021-07-15 21:31:53', NULL),
(30, 5, 2, 1, 4, 'Lolita Hirthe DDS', '8ba1eb7f-7cfa-3220-aa9b-75287d5597a7', ' XI PBS 4', '6477113882', '3240862484462560', '3386192671302706', 'Flochester', '2020-09-26', '21261985', ' Kristen', ' Brunei', 2, 1, NULL, '+67(4)3229542722', NULL, 188, 83, 21, 96, 134, NULL, '1989-05-04 11:40:00', '2021-07-15 21:33:41', NULL),
(29, 8, 2, 3, 3, 'Cordelia Batz', '1d720fa7-375b-3536-aa5d-eac24f22ce73', ' XI TBSM 2', '6217288721', '3244593154732138', '3341090157534927', 'Hickleshire', '2019-11-29', '33949260', ' Budda', ' Brunei', 8, 7, NULL, '532-711-8161x836', NULL, 113, 55, 24, 27, 147, 'quisquam', '1980-11-25 16:33:44', '2021-07-15 21:32:39', NULL),
(28, 7, 1, 1, 3, 'Tobin Rempel', 'ab86b04c-2eb0-3e23-adc1-3dd383f26729', '  XI TKJ 1', '3281479157', '3201658198423684', '3356953231524676', 'Lake Lawrencefort', '2012-03-25', '08182616', ' Kristen', ' Malaysia', 3, 10, '214.070.3688x12676', '1-841-874-7740x34189', 'breitenberg.garett@example.com', 216, 42, 32, 57, 204, 'officia', '1989-05-03 11:47:22', '2021-07-15 07:09:53', NULL),
(27, 9, 2, 4, 2, 'Mrs. Roslyn Hauck', '8a0d7bbb-c3fb-34cc-baa6-22bf1709a605', '  XI PBS 1', '3598947579', '3242571440804750', '3356290503405034', 'Georgeport', '2001-05-24', '25633641', ' Katolik', 'Indonesia', 5, 5, NULL, '907-697-3701x0039', NULL, 163, 28, 41, 13, 318, NULL, '2009-09-22 17:56:55', '2021-07-15 21:33:41', NULL),
(26, 3, 2, 8, 6, 'Alexane Hudson V', 'edefc81c-ac5b-3de0-b71b-13381c59a7f5', ' XI AKL 3', '1177343339', '3347170566581189', '3368590617086738', 'Evertport', '1987-10-10', '12663842', ' Hindu', 'Indonesia', 10, 2, NULL, '1-074-452-2507x265', NULL, 215, 54, 36, 90, 20, 'qui', '1982-12-10 02:07:02', '2021-07-15 21:32:39', NULL),
(25, 5, 2, 7, 5, 'Bailee D\'Amore', '705f86b5-0ba5-3a13-aa9e-83c53c6905ce', ' X OTKP 2', '4664396632', '3233533150423318', '3262990511860699', 'East Marcelino', '2012-04-07', '07148804', ' Khonghuchu', ' Brunei', 7, 8, '1-252-429-1103x25108', '1-022-720-9256', NULL, 144, 56, 47, 31, 146, NULL, '2011-08-15 07:38:55', '2021-07-15 21:33:41', NULL),
(24, 5, 2, 1, 5, 'Nichole Hickle', 'e5ab7747-3bdc-3e5c-bedd-f044b76f3278', '  XI TKJ 1', '5929127999', '3338930293731391', '3314553661365062', 'East Domenick', '1994-09-25', '04014997', 'Islam', ' Brunei', 10, 4, '715.643.9798', '262.772.2557x52768', NULL, 147, 47, 40, 92, 274, NULL, '1978-12-19 19:58:20', '2021-07-15 21:33:41', NULL),
(23, 6, 2, 5, 2, 'Damon Goldner', '6ecae7ed-81aa-3fd0-bfa3-5b2a2cd8c2af', ' XI PBS 4', '6620920911', '3252986375894398', '3374019008874893', 'New Kristin', '1980-08-27', '87572421', 'Islam', 'Indonesia', 9, 9, NULL, '237-577-8737', NULL, 170, 23, 38, 34, 382, 'consequatur', '2004-01-13 00:15:29', '2021-07-15 21:32:39', NULL),
(22, 5, 2, 2, 1, 'Lindsey Braun', '8c7beaca-d2e9-3df1-84f2-4b3c06e3f9fc', 'X TBSM 1', '8247658812', '3222027152404190', '3305483296234161', 'Port Otto', '1971-05-24', '28298397', ' Kristen', 'Indonesia', 8, 5, '1-347-578-5122', '1-128-400-5269x276', 'tyler.langworth@example.org', 150, 50, 25, 29, 204, 'vel', '1996-03-17 10:17:33', '2021-07-15 07:09:53', NULL),
(21, 3, 1, 2, 6, 'Neil Luettgen', 'deefe797-4483-39b6-b8d1-5e37ce75ca6f', '  XI PBS 3', '5929531539', '3354120850097388', '3357987820822745', 'Harrisside', '1984-10-20', '06508371', ' Budda', 'Indonesia', 5, 6, '(655)679-3421', '1-467-684-5538x67448', 'schmitt.rashad@example.com', 193, 26, 38, 58, 339, NULL, '1991-11-27 13:43:37', '2021-07-15 21:33:41', NULL),
(20, 9, 2, 9, 6, 'Effie Kuphal DVM', 'dd57ed61-29b8-38f9-aeed-b2832fcd91c6', '  XI PBS 3', '5092349286', '3215033280476928', '3386676769983023', 'Lake Cristinafort', '1998-12-07', '43590148', 'Islam', ' Malaysia', 8, 2, NULL, '062.354.8407x897', 'smoore@example.org', 145, 58, 25, 20, 400, NULL, '2007-09-12 17:22:28', '2021-07-15 21:33:41', NULL),
(19, 8, 2, 2, 3, 'Cecile Koch', '840d878b-91b4-33fa-909d-ff7c1fcbe27d', ' X TKJ 1', '7826968748', '3262013450823724', '3224084228277207', 'North Julie', '2017-08-26', '24382052', ' Hindu', 'Indonesia', 9, 9, '(729)988-2799', '02860051160', NULL, 104, 42, 30, 66, 289, NULL, '1988-04-17 12:33:44', '2021-07-15 21:33:41', NULL),
(18, 2, 1, 3, 3, 'Ocie Rempel', '036d7f63-4ff0-3b05-bf89-aa2a1c145211', ' X TKJ 1', '3324641536', '3245875248406083', '3331351460237056', 'Port Genevieveland', '1979-11-11', '22875334', ' Khonghuchu', ' Singapura', 3, 3, '995.558.3725x66655', '1-084-005-0087x357', NULL, 180, 64, 43, 95, 359, NULL, '1984-10-22 15:44:56', '2021-07-15 21:33:41', NULL),
(17, 12, 2, 7, 3, 'Micah Weber', '74cf3802-b6eb-3515-8e58-63f959ba9ac3', ' XI AKL 3', '2613557578', '3391749088559299', '3272719108872116', 'Margebury', '1984-12-06', '29808441', ' Hindu', ' Malaysia', 4, 6, NULL, '1-401-064-2061x23616', 'frieda26@example.com', 103, 111, 38, 13, 267, NULL, '1983-07-07 07:31:55', '2021-07-15 21:33:41', NULL),
(16, 3, 2, 3, 1, 'Mr. Mustafa Mayer', '67a67426-d8cd-3d31-b58f-d34738968141', ' X PBS 2', '7679696992', '3253640690911561', '3251087652146817', 'West Albaport', '2003-09-13', '29536733', ' Katolik', ' Singapura', 5, 2, '09731836592', '+83(5)1888303018', 'jazmyn.kuhn@example.org', 183, 20, 23, 13, 335, 'fugiat', '1971-11-26 21:45:06', '2021-07-15 07:09:53', NULL),
(15, 2, 1, 6, 2, 'Mckenna Batz', '7274d305-8fdf-3cde-a4e0-7725ad23bb2f', ' X TKJ 3', '7194644382', '3254142646118999', '3356885613128543', 'Port Justus', '2004-11-04', '21748561', 'Islam', ' Singapura', 10, 8, NULL, '+85(9)5057123890', 'declan73@example.net', 200, 69, 29, 25, 185, NULL, '1970-04-02 18:47:57', '2021-07-15 21:33:41', NULL),
(14, 5, 2, 2, 5, 'Dr. Bulah Rosenbaum', 'e2cbd700-b8cc-3359-a4a4-84e693354361', ' XII OTKP 1', '9907910333', '3274205972906202', '3380485283304005', 'Skilesfurt', '2007-08-25', '42031376', ' Kristen', ' Brunei', 3, 3, '(266)138-7086x5353', '(277)442-0886', 'smitham.garret@example.org', 194, 110, 29, 82, 396, NULL, '1986-01-11 17:53:14', '2021-07-15 21:33:41', NULL),
(13, 9, 2, 4, 2, 'Prof. Bryce Murray', '643c9111-1a59-3f56-b1e5-faee11029ed3', ' X OTKP 2', '6958742168', '3339586931560188', '3210107775218785', 'North Reneechester', '1992-07-23', '75356651', 'Islam', ' Malaysia', 10, 9, NULL, '1-868-423-5332x55253', NULL, 131, 67, 48, 39, 163, 'minima', '2019-11-26 07:26:32', '2021-07-15 21:32:39', NULL),
(12, 5, 1, 2, 2, 'Isabella Rutherford', 'ad727382-b706-3950-8e7d-bef58703188f', ' XI AKL 2', '5155403113', '3336925548221916', '3201478262897581', 'West Percival', '1976-02-29', '95848440', ' Khonghuchu', 'Indonesia', 7, 10, NULL, '575.052.6547x30125', 'marquardt.kareem@example.net', 153, 56, 50, 56, 161, NULL, '2008-10-13 10:51:12', '2021-07-15 21:33:41', NULL),
(11, 9, 2, 8, 4, 'Elda Spinka', 'aa311ceb-989a-3e2e-9c68-101e7d09c39d', '  XII AKL 1', '438406000', '3265692623239011', '3231084046885372', 'Port Alessandra', '2016-05-16', '95878980', 'Islam', ' Brunei', 8, 9, NULL, '1-262-145-3121x948', NULL, 208, 71, 23, 84, 92, NULL, '1999-02-03 09:07:39', '2021-07-15 21:33:41', NULL),
(10, 9, 1, 2, 1, 'Dr. Kristofer Ullrich IV', '39d12a7c-733a-3e4c-87d6-49728b37180d', ' X AKL 1', '5548673150', '3233543620165438', '3297119841910899', 'North Jalenburgh', '2000-06-24', '99676254', 'Islam', ' Singapura', 1, 1, '495.848.7574x71809', '483.099.8881', 'mlakin@example.org', 147, 49, 31, 28, 144, 'quae', '2014-09-03 11:29:21', '2021-07-15 07:09:53', NULL),
(9, 2, 2, 3, 2, 'Antonina Boyer', '7ad24cfb-273a-385f-b7d2-7077e87043d7', ' XII PBS 1', '9552549655', '3294190246984363', '3338531431183219', 'Trompport', '2004-09-03', '85356023', ' Hindu', ' Brunei', 2, 6, '1-415-083-7892', '(939)845-8361', 'parker.camden@example.net', 215, 102, 47, 24, 344, NULL, '1990-06-21 01:25:13', '2021-07-15 21:33:41', NULL),
(8, 12, 2, 7, 3, 'Mrs. Verna Vandervort II', '9501c0e6-b2d3-3c55-b156-681cb71bebbb', ' XII TKJ 3', '479536192', '3359695898555219', '3224370008241386', 'Rathchester', '1986-07-02', '79375504', ' Khonghuchu', 'Indonesia', 2, 8, '1-439-545-1553', '1-785-736-2220', NULL, 119, 44, 28, 22, 5, 'fuga', '1979-09-13 12:13:18', '2021-07-15 21:32:39', NULL),
(7, 3, 1, 9, 5, 'Albertha Borer', '974a56ca-334d-3483-a21b-cbdd20b11328', ' X OTKP 3', '4478839904', '3244605730753392', '3369429716374725', 'Vergieburgh', '1989-11-21', '99681708', ' Kristen', ' Malaysia', 6, 8, NULL, '1-512-043-4755x0453', 'eloise.moore@example.org', 213, 30, 29, 71, 104, NULL, '1979-04-16 03:56:52', '2021-07-15 21:33:41', NULL),
(6, 3, 2, 5, 3, 'Irma Harber', 'c204d8cc-c372-34f9-a200-b95dda0a122d', ' XII TKJ 4', '4939310551', '3316427866928279', '3206856552232057', 'Zulaufside', '1988-03-15', '33289014', ' Hindu', ' Brunei', 2, 2, NULL, '758.430.0044', NULL, 175, 87, 36, 23, 336, NULL, '1976-11-26 10:04:30', '2021-07-15 21:33:41', NULL),
(5, 2, 1, 9, 3, 'Jose Collier I', '2118ef76-7859-3fdf-a26e-585b65e0765e', ' X PBS 1', '8579868245', '3377002766914665', '3349896001443267', 'O\'Connellfort', '1998-10-28', '30765597', ' Katolik', ' Malaysia', 5, 3, '1-052-425-7272x2015', '(125)356-5476x647', NULL, 142, 22, 28, 30, 397, NULL, '2013-11-28 02:42:47', '2021-07-15 21:33:41', NULL),
(4, 10, 1, 9, 2, 'Mr. Howell Heller', '7486d93e-90c8-3ce8-adc1-63078553d05d', ' X OTKP 2', '4448020986', '3299805242661387', '3320728658232838', 'North Tania', '2009-08-17', '00851831', ' Khonghuchu', ' Singapura', 9, 7, '1-431-453-7279', '+81(3)9732886717', NULL, 173, 100, 50, 75, 102, 'nostrum', '1980-03-20 00:03:49', '2021-07-15 21:32:39', NULL),
(3, 1, 1, 4, 6, 'Ms. Jammie Turcotte', 'ba8226e0-29ca-3c2d-885e-0b2de9b97350', ' X PBS 2', '1724023584', '3365091757755726', '3229602303914726', 'Lake Bentonborough', '2003-12-30', '97226253', 'Islam', ' Malaysia', 5, 6, '001-740-5987x58327', '(581)775-7506', 'xcollins@example.net', 105, 88, 46, 5, 322, NULL, '1993-08-11 01:59:06', '2021-07-15 21:33:41', NULL),
(2, 1, 2, 7, 5, 'Myrtie Cole', '465f6a42-588f-30ee-a20b-7da62bacfd08', ' XI TBSM 2', '7201996531', '3312727383337915', '3285850559547544', 'West Rhoda', '1983-01-30', '94866360', ' Hindu', ' Malaysia', 10, 8, NULL, '293-936-6440', 'kohler.cedrick@example.com', 188, 69, 28, 100, 376, 'doloribus', '2007-12-12 01:59:02', '2021-07-15 21:31:53', NULL),
(1, 5, 1, 1, 4, 'Carrie Mohr PhD', 'd423e209-03f9-32c0-a8d0-352d81e91349', ' XII PBS 2', '951896637', '3278249531053007', '3331217942666262', 'Alverachester', '2017-06-10', '76382185', 'Islam', ' Brunei', 1, 7, NULL, '(269)777-7870x3185', NULL, 163, 28, 41, 65, 374, NULL, '2007-04-04 12:06:12', '2021-07-15 21:33:41', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `fk_siswa_gender_idx` (`gender_id_gender`),
  ADD KEY `fk_siswa_tempat_tinggal1_idx` (`tempat_tinggal_id_tempat_tinggal`),
  ADD KEY `fk_siswa_moda_transportasi1_idx` (`moda_transportasi_id_moda_transportasi`),
  ADD KEY `fk_siswa_tahun_ajaran1_idx` (`tahun_ajaran_id_tahun_ajaran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_siswa_gender` FOREIGN KEY (`gender_id_gender`) REFERENCES `gender` (`id_gender`),
  ADD CONSTRAINT `fk_siswa_moda_transportasi1` FOREIGN KEY (`moda_transportasi_id_moda_transportasi`) REFERENCES `moda_transportasi` (`id_moda_transportasi`),
  ADD CONSTRAINT `fk_siswa_tahun_ajaran1` FOREIGN KEY (`tahun_ajaran_id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`),
  ADD CONSTRAINT `fk_siswa_tempat_tinggal1` FOREIGN KEY (`tempat_tinggal_id_tempat_tinggal`) REFERENCES `tempat_tinggal` (`id_tempat_tinggal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
