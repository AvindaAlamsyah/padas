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
-- Struktur dari tabel `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id_beasiswa` bigint(20) NOT NULL,
  `jenis_beasiswa_id_jenis_beasiswa` int(11) DEFAULT NULL,
  `siswa_id_siswa` bigint(20) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beasiswa`
--

INSERT INTO `beasiswa` VALUES
(1, 3, 1194, 'Alice soon began talking to herself, and began.', '2020-12-13', '2020-09-27', '2021-07-20 05:00:53', '2021-07-23 06:18:49', NULL),
(2, 5, 932, 'But she went on: \'But why did they draw the.', '2020-05-05', '2020-11-26', '2021-06-24 15:37:31', '2021-07-23 06:18:49', NULL),
(3, 5, 604, 'White Rabbit put on one of the officers of the.', '2021-07-11', '2020-10-27', '2021-06-23 15:30:34', '2021-07-23 06:18:49', NULL),
(4, 5, 1101, 'The great question certainly was, what? Alice.', '2020-09-14', '2021-06-28', '2021-07-16 14:58:35', '2021-07-23 06:18:49', NULL),
(5, 1, 1011, 'Alice did not dare to laugh; and, as she could.', '2019-02-07', '2021-04-05', '2021-07-05 09:25:40', '2021-07-23 06:18:49', NULL),
(6, 3, 548, 'Dormouse. \'Don\'t talk nonsense,\' said Alice.', '2021-02-20', '2020-07-27', '2021-07-12 14:57:11', '2021-07-23 06:18:49', NULL),
(7, 3, 1097, 'Alice could bear: she got into the darkness as.', '2017-12-29', '2020-01-26', '2021-07-04 07:40:05', '2021-07-23 06:18:49', NULL),
(8, 1, 1259, 'I WAS when I breathe\"!\' \'It IS a Caucus-race?\'.', '2019-03-26', '2021-02-17', '2021-07-15 01:24:54', '2021-07-23 06:18:49', NULL),
(9, 2, 1036, 'The poor little juror (it was Bill, the Lizard).', '2020-10-27', '2019-11-27', '2021-07-01 00:14:55', '2021-07-23 06:18:49', NULL),
(10, 5, 356, 'Alice panted as she spoke. Alice did not venture.', '2021-04-15', '2021-01-02', '2021-07-05 23:13:25', '2021-07-23 06:18:49', NULL),
(11, 2, 886, 'YOUR watch tell you his history,\' As they walked.', '2020-09-05', '2020-09-12', '2021-07-21 15:25:17', '2021-07-23 06:18:49', NULL),
(12, 1, 1284, 'Alice, (she had kept a piece of bread-and-butter.', '2020-08-13', '2019-08-24', '2021-06-23 19:27:23', '2021-07-23 06:18:49', NULL),
(13, 3, 452, 'She was a dead silence instantly, and neither of.', '2017-06-16', '2019-09-11', '2021-07-08 14:58:48', '2021-07-23 06:18:49', NULL),
(14, 4, 988, 'Alice\'s elbow was pressed so closely against her.', '2018-08-29', '2019-12-17', '2021-07-08 11:40:52', '2021-07-23 06:18:49', NULL),
(15, 4, 446, 'Rabbit Sends in a low voice, \'Your Majesty must.', '2019-03-08', '2021-02-06', '2021-06-24 10:55:28', '2021-07-23 06:18:49', NULL),
(16, 4, 266, 'Bill! catch hold of its little eyes, but it did.', '2019-02-14', '2020-11-03', '2021-07-17 04:18:18', '2021-07-23 06:18:49', NULL),
(17, 4, 1238, 'No room!\' they cried out when they arrived, with.', '2020-10-21', '2020-01-10', '2021-07-05 08:13:25', '2021-07-23 06:18:49', NULL),
(18, 5, 641, 'I vote the young Crab, a little hot tea upon its.', '2017-11-05', '2021-04-05', '2021-07-17 18:15:11', '2021-07-23 06:18:49', NULL),
(19, 5, 217, 'Alice had been for some time with one of the.', '2019-07-09', '2020-11-06', '2021-07-01 09:01:33', '2021-07-23 06:18:49', NULL),
(20, 2, 1043, 'I sleep\" is the use of repeating all that.', '2020-11-28', '2019-08-27', '2021-07-22 03:15:22', '2021-07-23 06:18:49', NULL),
(21, 2, 509, 'She said it to the fifth bend, I think?\' \'I had.', '2016-11-16', '2020-02-23', '2021-07-02 12:00:16', '2021-07-23 06:18:49', NULL),
(22, 1, 228, 'Queen, but she thought it must be collected at.', '2019-07-16', '2021-03-21', '2021-07-11 20:41:44', '2021-07-23 06:18:49', NULL),
(23, 2, 701, 'Alice for some time without hearing anything.', '2017-11-27', '2020-11-21', '2021-06-26 12:24:33', '2021-07-23 06:18:49', NULL),
(24, 4, 1164, 'Rabbit actually TOOK A WATCH OUT OF ITS.', '2019-09-07', '2020-09-01', '2021-07-05 05:08:34', '2021-07-23 06:18:49', NULL),
(25, 3, 1146, 'Mouse in the distance would take the place of.', '2016-09-23', '2021-01-01', '2021-07-16 02:33:37', '2021-07-23 06:18:49', NULL),
(26, 1, 257, 'I beg your pardon!\' cried Alice hastily, afraid.', '2016-10-10', '2020-06-18', '2021-07-21 04:45:39', '2021-07-23 06:18:49', NULL),
(27, 4, 68, 'King; and as it is.\' \'Then you may stand down,\'.', '2019-06-24', '2021-04-07', '2021-07-12 11:12:08', '2021-07-23 06:18:49', NULL),
(28, 1, 577, 'Will you, won\'t you, won\'t you, will you, old.', '2020-06-29', '2020-03-04', '2021-07-17 04:35:19', '2021-07-23 06:18:49', NULL),
(29, 5, 455, 'Pigeon in a tone of this pool? I am now? That\'ll.', '2018-04-17', '2021-01-18', '2021-06-27 15:25:57', '2021-07-23 06:18:49', NULL),
(30, 4, 757, 'Alice. \'Well, then,\' the Cat in a minute or two.', '2016-09-27', '2021-01-01', '2021-06-26 07:12:50', '2021-07-23 06:18:49', NULL),
(31, 3, 1282, 'For some minutes it puffed away without being.', '2018-03-18', '2021-06-28', '2021-07-05 16:45:05', '2021-07-23 06:18:49', NULL),
(32, 5, 598, 'Knave, \'I didn\'t know how to spell \'stupid,\' and.', '2018-04-30', '2020-05-09', '2021-06-30 14:41:30', '2021-07-23 06:18:49', NULL),
(33, 3, 608, 'Alice to herself, as usual. I wonder what I.', '2017-06-15', '2020-04-05', '2021-07-01 08:27:51', '2021-07-23 06:18:49', NULL),
(34, 2, 690, 'Yet you turned a back-somersault in at the top.', '2021-06-09', '2021-05-10', '2021-07-03 03:46:59', '2021-07-23 06:18:49', NULL),
(35, 4, 7, 'I\'ll have you executed.\' The miserable Hatter.', '2019-04-03', '2021-04-09', '2021-07-11 17:17:41', '2021-07-23 06:18:49', NULL),
(36, 2, 1036, 'Alice. \'And ever since that,\' the Hatter.', '2017-04-26', '2021-05-12', '2021-06-28 20:01:52', '2021-07-23 06:18:49', NULL),
(37, 2, 1030, 'Gryphon replied very gravely. \'What else have.', '2018-07-04', '2021-04-18', '2021-07-09 09:15:58', '2021-07-23 06:18:49', NULL),
(38, 3, 176, 'Alice. \'I\'ve so often read in the other. \'I beg.', '2017-12-07', '2021-01-22', '2021-07-16 10:31:45', '2021-07-23 06:18:49', NULL),
(39, 1, 951, 'I suppose it were nine o\'clock in the lock, and.', '2018-05-12', '2020-06-30', '2021-07-09 12:43:46', '2021-07-23 06:18:49', NULL),
(40, 1, 905, 'Rome, and Rome--no, THAT\'S all wrong, I\'m.', '2017-05-19', '2021-02-24', '2021-07-12 04:39:40', '2021-07-23 06:18:49', NULL),
(41, 3, 797, 'First, however, she again heard a little before.', '2018-05-07', '2021-02-08', '2021-07-01 22:10:28', '2021-07-23 06:18:49', NULL),
(42, 4, 1125, 'Mercia and Northumbria, declared for him: and.', '2018-07-04', '2020-05-27', '2021-07-06 19:53:19', '2021-07-23 06:18:49', NULL),
(43, 4, 956, 'And he added looking angrily at the great hall,.', '2019-04-05', '2020-07-28', '2021-07-16 19:19:36', '2021-07-23 06:18:49', NULL),
(44, 3, 1139, 'I\'m not the right size for ten minutes.', '2018-06-09', '2021-02-13', '2021-06-30 16:03:20', '2021-07-23 06:18:49', NULL),
(45, 2, 506, 'There was no time to begin lessons: you\'d only.', '2021-01-29', '2021-04-05', '2021-07-21 11:47:09', '2021-07-23 06:18:49', NULL),
(46, 3, 731, 'King said to the Gryphon. \'It all came.', '2016-11-25', '2020-03-24', '2021-07-14 16:36:46', '2021-07-23 06:18:49', NULL),
(47, 4, 479, 'I think.\' And she went on growing, and she tried.', '2018-07-13', '2020-08-01', '2021-07-09 23:56:39', '2021-07-23 06:18:49', NULL),
(48, 5, 1030, 'The Fish-Footman began by taking the little.', '2018-05-08', '2020-03-08', '2021-06-27 22:34:32', '2021-07-23 06:18:49', NULL),
(49, 3, 1298, 'Alice, flinging the baby violently up and went.', '2019-02-17', '2020-04-04', '2021-07-04 16:49:16', '2021-07-23 06:18:49', NULL),
(50, 4, 259, 'Alice said very humbly; \'I won\'t indeed!\' said.', '2018-03-10', '2020-04-03', '2021-07-10 06:24:03', '2021-07-23 06:18:49', NULL),
(51, 3, 398, 'Rabbit was still in sight, and no one could.', '2019-10-12', '2019-11-20', '2021-06-30 20:45:07', '2021-07-23 06:18:49', NULL),
(52, 2, 646, 'Alice, always ready to sink into the roof of the.', '2018-08-09', '2021-06-26', '2021-07-18 02:55:31', '2021-07-23 06:18:49', NULL),
(53, 2, 499, 'Alice. \'I\'m a--I\'m a--\' \'Well! WHAT are you?\'.', '2018-06-05', '2020-08-08', '2021-07-17 03:35:14', '2021-07-23 06:18:49', NULL),
(54, 3, 489, 'Duchess, \'chop off her unfortunate guests to.', '2019-11-16', '2019-09-21', '2021-06-27 21:26:31', '2021-07-23 06:18:49', NULL),
(55, 5, 1014, 'King eagerly, and he went on, looking anxiously.', '2019-01-08', '2020-11-10', '2021-07-02 02:53:13', '2021-07-23 06:18:49', NULL),
(56, 1, 1106, 'I\'m mad?\' said Alice. \'Come on, then,\' said the.', '2017-03-10', '2019-07-30', '2021-06-30 17:04:14', '2021-07-23 06:18:49', NULL),
(57, 2, 1201, 'I don\'t keep the same size for going through the.', '2017-06-15', '2021-01-20', '2021-07-09 17:47:04', '2021-07-23 06:18:49', NULL),
(58, 5, 1077, 'Gryphon, \'she wants for to know what it meant.', '2019-06-16', '2020-11-05', '2021-07-06 14:38:00', '2021-07-23 06:18:49', NULL),
(59, 5, 331, 'Alice, always ready to make ONE respectable.', '2021-06-22', '2020-07-04', '2021-07-13 12:48:01', '2021-07-23 06:18:49', NULL),
(60, 3, 1102, 'But said I could show you our cat Dinah: I think.', '2017-01-21', '2020-04-17', '2021-07-19 19:48:18', '2021-07-23 06:18:49', NULL),
(61, 3, 93, 'Alice, \'they\'re sure to happen,\' she said to.', '2017-01-17', '2019-11-28', '2021-06-25 07:27:35', '2021-07-23 06:18:49', NULL),
(62, 2, 93, 'Alice could speak again. In a minute or two..', '2017-10-22', '2020-02-19', '2021-06-25 17:33:35', '2021-07-23 06:18:49', NULL),
(63, 1, 41, 'They are waiting on the spot.\' This did not.', '2021-01-25', '2019-10-11', '2021-07-06 09:54:25', '2021-07-23 06:18:49', NULL),
(64, 3, 232, 'Rabbit came up to Alice, flinging the baby.', '2019-03-11', '2020-09-07', '2021-06-28 00:53:16', '2021-07-23 06:18:49', NULL),
(65, 4, 1166, 'Hatter hurriedly left the court, without even.', '2016-09-18', '2020-08-07', '2021-07-22 19:17:21', '2021-07-23 06:18:49', NULL),
(66, 5, 442, 'I eat or drink anything; so I\'ll just see what.', '2020-08-23', '2020-10-17', '2021-07-19 00:20:21', '2021-07-23 06:18:49', NULL),
(67, 4, 907, 'Rabbit, and had been would have made a rush at.', '2019-03-27', '2020-05-20', '2021-07-16 13:01:40', '2021-07-23 06:18:49', NULL),
(68, 1, 344, 'Alice, \'when one wasn\'t always growing larger.', '2016-10-28', '2020-04-03', '2021-07-10 05:07:21', '2021-07-23 06:18:49', NULL),
(69, 2, 982, 'Hatter. \'I deny it!\' said the King replied. Here.', '2019-04-10', '2020-09-22', '2021-07-04 15:22:46', '2021-07-23 06:18:49', NULL),
(70, 2, 724, 'Alice; \'all I know all sorts of little Alice and.', '2017-06-10', '2020-02-08', '2021-07-03 17:57:52', '2021-07-23 06:18:49', NULL),
(71, 3, 400, 'Gryphon, and the March Hare interrupted in a.', '2019-02-20', '2021-03-25', '2021-07-10 00:12:27', '2021-07-23 06:18:49', NULL),
(72, 1, 723, 'Rabbit\'s little white kid gloves: she took up.', '2020-12-20', '2020-08-25', '2021-07-09 12:25:40', '2021-07-23 06:18:49', NULL),
(73, 1, 1078, 'I\'ve offended it again!\' For the Mouse to tell.', '2019-01-20', '2020-10-09', '2021-06-29 19:44:28', '2021-07-23 06:18:49', NULL),
(74, 3, 1288, 'Duchess\'s knee, while plates and dishes crashed.', '2020-08-12', '2019-10-28', '2021-07-11 15:33:00', '2021-07-23 06:18:49', NULL),
(75, 2, 1010, 'BEST butter,\' the March Hare had just begun to.', '2020-04-16', '2021-01-06', '2021-07-01 14:58:59', '2021-07-23 06:18:49', NULL),
(76, 2, 761, 'March Hare. \'He denies it,\' said the King, the.', '2019-04-02', '2021-05-08', '2021-06-26 06:06:13', '2021-07-23 06:18:49', NULL),
(77, 5, 1194, 'It was as long as I get it home?\' when it had.', '2018-10-12', '2021-07-10', '2021-07-06 09:13:53', '2021-07-23 06:18:49', NULL),
(78, 3, 1290, 'Hardly knowing what she was ever to get into.', '2018-04-07', '2021-06-04', '2021-07-03 05:32:00', '2021-07-23 06:18:49', NULL),
(79, 4, 924, 'Knave \'Turn them over!\' The Knave of Hearts, she.', '2017-03-08', '2021-07-06', '2021-07-22 15:41:22', '2021-07-23 06:18:49', NULL),
(80, 1, 407, 'Queen. An invitation from the sky! Ugh,.', '2021-06-25', '2019-08-30', '2021-06-26 14:22:56', '2021-07-23 06:18:49', NULL),
(81, 5, 385, 'Hatter: \'but you could see it written down: but.', '2017-12-17', '2020-08-31', '2021-06-28 08:40:27', '2021-07-23 06:18:49', NULL),
(82, 5, 337, 'This speech caused a remarkable sensation among.', '2018-10-23', '2020-07-23', '2021-07-07 13:10:19', '2021-07-23 06:18:49', NULL),
(83, 4, 965, 'Alice said; \'there\'s a large fan in the common.', '2019-03-01', '2020-01-08', '2021-06-30 04:44:57', '2021-07-23 06:18:49', NULL),
(84, 3, 304, 'Majesty must cross-examine THIS witness.\' \'Well,.', '2020-08-25', '2019-10-13', '2021-06-30 11:20:03', '2021-07-23 06:18:49', NULL),
(85, 3, 1193, 'Hatter. He had been to her, And mentioned me to.', '2020-06-27', '2021-05-29', '2021-07-20 02:20:51', '2021-07-23 06:18:49', NULL),
(86, 1, 461, 'Alice in a very grave voice, \'until all the.', '2019-04-23', '2021-05-22', '2021-07-16 15:02:03', '2021-07-23 06:18:49', NULL),
(87, 4, 802, 'Alice looked all round the neck of the.', '2016-10-28', '2020-12-22', '2021-07-06 19:39:23', '2021-07-23 06:18:49', NULL),
(88, 1, 780, 'I\'m sure I can\'t understand it myself to begin.', '2017-05-20', '2020-06-27', '2021-06-27 10:42:13', '2021-07-23 06:18:49', NULL),
(89, 3, 1160, 'Mock Turtle yawned and shut his note-book.', '2017-05-26', '2021-04-08', '2021-07-08 11:40:06', '2021-07-23 06:18:49', NULL),
(90, 4, 559, 'Mock Turtle: \'nine the next, and so on; then,.', '2018-03-23', '2019-08-11', '2021-07-11 13:39:38', '2021-07-23 06:18:49', NULL),
(91, 2, 403, 'Gryphon. \'It\'s all her life. Indeed, she had.', '2018-02-20', '2020-08-21', '2021-07-08 02:59:25', '2021-07-23 06:18:49', NULL),
(92, 1, 1212, 'Alice\'s first thought was that you think you.', '2020-02-28', '2020-04-05', '2021-06-25 00:34:50', '2021-07-23 06:18:49', NULL),
(93, 1, 1291, 'IS that to be beheaded!\' \'What for?\' said Alice..', '2020-06-15', '2019-11-26', '2021-06-23 01:34:11', '2021-07-23 06:18:49', NULL),
(94, 3, 975, 'She was a good many voices all talking together:.', '2021-06-25', '2020-02-11', '2021-07-14 22:37:01', '2021-07-23 06:18:49', NULL),
(95, 3, 921, 'Alice was not an encouraging tone. Alice looked.', '2018-04-15', '2019-11-09', '2021-07-21 04:40:29', '2021-07-23 06:18:49', NULL),
(96, 2, 831, 'The Dormouse shook its head to keep back the.', '2018-06-09', '2021-05-17', '2021-07-21 14:09:07', '2021-07-23 06:18:49', NULL),
(97, 1, 227, 'Alice, and she soon made out that it had lost.', '2017-10-23', '2021-07-14', '2021-07-12 15:56:27', '2021-07-23 06:18:49', NULL),
(98, 1, 656, 'Alice could only hear whispers now and then;.', '2017-11-12', '2021-03-05', '2021-07-20 21:24:18', '2021-07-23 06:18:49', NULL),
(99, 3, 1016, 'Alice thought over all the time they had to fall.', '2016-09-10', '2019-09-17', '2021-07-04 01:16:05', '2021-07-23 06:18:49', NULL),
(100, 1, 678, 'I think?\' he said in a great hurry; \'and their.', '2017-09-09', '2020-02-07', '2021-07-08 11:49:10', '2021-07-23 06:18:49', NULL),
(101, 3, 1250, 'Mock Turtle. \'No, no! The adventures first,\'.', '2020-07-04', '2020-01-15', '2021-07-07 10:26:25', '2021-07-23 06:18:49', NULL),
(102, 3, 903, 'Said his father; \'don\'t give yourself airs! Do.', '2017-03-08', '2020-06-29', '2021-07-09 21:45:38', '2021-07-23 06:18:49', NULL),
(103, 5, 1236, 'Bill\'s place for a rabbit! I suppose I ought to.', '2016-12-22', '2019-10-14', '2021-07-22 17:33:43', '2021-07-23 06:18:49', NULL),
(104, 2, 207, 'Footman remarked, \'till tomorrow--\' At this.', '2016-11-20', '2020-09-15', '2021-07-08 10:53:12', '2021-07-23 06:18:49', NULL),
(105, 2, 653, 'Gryphon at the bottom of a treacle-well--eh,.', '2017-08-26', '2020-04-19', '2021-07-13 17:35:17', '2021-07-23 06:18:49', NULL),
(106, 2, 1128, 'Hatter: \'it\'s very easy to take the roof of the.', '2020-04-13', '2020-01-27', '2021-07-07 18:49:26', '2021-07-23 06:18:49', NULL),
(107, 4, 61, 'I\'ve kept her eyes immediately met those of a.', '2017-08-07', '2021-07-22', '2021-07-16 03:36:20', '2021-07-23 06:18:49', NULL),
(108, 4, 808, 'Duchess. \'I make you grow shorter.\' \'One side of.', '2016-12-02', '2021-06-23', '2021-06-25 08:57:59', '2021-07-23 06:18:49', NULL),
(109, 4, 610, 'So she began nibbling at the other side of the.', '2017-03-10', '2020-02-12', '2021-06-29 00:34:43', '2021-07-23 06:18:49', NULL),
(110, 3, 66, 'I only wish they WOULD not remember ever having.', '2016-08-31', '2021-04-28', '2021-06-26 11:50:19', '2021-07-23 06:18:49', NULL),
(111, 1, 786, 'Queen. \'Sentence first--verdict afterwards.\'.', '2017-04-04', '2020-09-15', '2021-07-20 01:57:57', '2021-07-23 06:18:49', NULL),
(112, 2, 262, 'And the executioner myself,\' said the Hatter..', '2019-12-06', '2020-12-06', '2021-07-13 20:15:28', '2021-07-23 06:18:49', NULL),
(113, 4, 400, 'YET,\' she said to herself. (Alice had been.', '2020-08-12', '2021-02-05', '2021-06-23 11:55:07', '2021-07-23 06:18:49', NULL),
(114, 3, 582, 'Cheshire Cat,\' said Alice: \'besides, that\'s not.', '2019-08-05', '2020-08-28', '2021-06-30 10:28:35', '2021-07-23 06:18:49', NULL),
(115, 3, 245, 'Alice. \'That\'s the first really clever thing the.', '2019-05-31', '2020-05-23', '2021-07-19 01:34:28', '2021-07-23 06:18:49', NULL),
(116, 2, 966, 'I know who I WAS when I was a dispute going on.', '2017-09-02', '2020-06-21', '2021-06-29 11:18:57', '2021-07-23 06:18:49', NULL),
(117, 5, 384, 'The Duchess took her choice, and was going to.', '2021-04-17', '2020-08-17', '2021-07-17 23:52:21', '2021-07-23 06:18:49', NULL),
(118, 5, 330, 'Hatter, \'I cut some more tea,\' the March Hare.', '2019-06-03', '2020-06-06', '2021-07-10 07:01:27', '2021-07-23 06:18:49', NULL),
(119, 1, 76, 'Dormouse!\' And they pinched it on both sides of.', '2020-11-13', '2021-04-27', '2021-07-18 20:14:49', '2021-07-23 06:18:49', NULL),
(120, 4, 555, 'But I\'ve got to grow to my right size again; and.', '2019-06-22', '2021-01-15', '2021-06-30 08:17:33', '2021-07-23 06:18:49', NULL),
(121, 2, 1227, 'WAS a narrow escape!\' said Alice, \'but I know.', '2019-02-08', '2021-07-06', '2021-07-07 04:39:09', '2021-07-23 06:18:49', NULL),
(122, 4, 176, 'Alice. \'Why not?\' said the Gryphon. \'Do you take.', '2021-01-08', '2021-03-29', '2021-07-17 22:33:49', '2021-07-23 06:18:49', NULL),
(123, 1, 1245, 'EVEN finish, if he thought it had VERY long.', '2021-01-13', '2019-11-10', '2021-07-18 07:57:25', '2021-07-23 06:18:49', NULL),
(124, 1, 393, 'Cat. \'Do you take me for a minute, while Alice.', '2018-11-04', '2020-09-04', '2021-06-24 14:04:51', '2021-07-23 06:18:49', NULL),
(125, 2, 872, 'Dodo replied very solemnly. Alice was too.', '2017-06-16', '2021-05-05', '2021-07-05 06:44:39', '2021-07-23 06:18:49', NULL),
(126, 4, 278, 'ONE with such a fall as this, I shall only look.', '2017-05-16', '2020-11-08', '2021-06-28 08:54:33', '2021-07-23 06:18:49', NULL),
(127, 3, 932, 'I needn\'t be so kind,\' Alice replied, so eagerly.', '2020-12-12', '2019-09-08', '2021-07-13 06:42:52', '2021-07-23 06:18:49', NULL),
(128, 1, 1260, 'Cheshire cats always grinned; in fact, I didn\'t.', '2020-12-31', '2020-06-19', '2021-07-09 03:40:44', '2021-07-23 06:18:49', NULL),
(129, 2, 662, 'Mock Turtle said with a sigh: \'he taught.', '2018-08-21', '2019-09-09', '2021-07-19 23:47:39', '2021-07-23 06:18:49', NULL),
(130, 5, 973, 'The only things in the book,\' said the Mock.', '2018-12-17', '2020-06-04', '2021-06-26 01:19:46', '2021-07-23 06:18:49', NULL),
(131, 5, 869, 'Queen, in a sulky tone, as it left no mark on.', '2018-01-07', '2020-05-29', '2021-07-02 06:27:53', '2021-07-23 06:18:49', NULL),
(132, 4, 898, 'X. The Lobster Quadrille The Mock Turtle yawned.', '2017-03-15', '2020-02-21', '2021-07-15 06:53:18', '2021-07-23 06:18:49', NULL),
(133, 5, 667, 'Alice. \'I\'m glad I\'ve seen that done,\' thought.', '2017-01-17', '2021-01-13', '2021-07-10 08:40:18', '2021-07-23 06:18:49', NULL),
(134, 5, 12, 'Queen shouted at the beginning,\' the King very.', '2018-10-31', '2020-03-11', '2021-06-28 22:37:50', '2021-07-23 06:18:49', NULL),
(135, 3, 905, 'Rabbit coming to look down and make out that.', '2021-06-21', '2021-03-05', '2021-07-04 08:24:49', '2021-07-23 06:18:49', NULL),
(136, 2, 428, 'Mock Turtle a little snappishly. \'You\'re enough.', '2019-05-31', '2021-07-03', '2021-06-28 18:05:29', '2021-07-23 06:18:49', NULL),
(137, 3, 774, 'Rabbit noticed Alice, as she could get away.', '2016-09-25', '2019-12-27', '2021-07-17 09:54:00', '2021-07-23 06:18:49', NULL),
(138, 5, 804, 'Who for such a long argument with the distant.', '2018-10-05', '2021-01-02', '2021-06-25 18:49:32', '2021-07-23 06:18:49', NULL),
(139, 3, 1044, 'Alice, a little worried. \'Just about as much as.', '2017-07-22', '2021-01-18', '2021-06-26 17:31:00', '2021-07-23 06:18:49', NULL),
(140, 2, 684, 'PLEASE mind what you\'re doing!\' cried Alice,.', '2017-05-21', '2021-02-25', '2021-06-22 19:46:21', '2021-07-23 06:18:49', NULL),
(141, 4, 103, 'Bill had left off writing on his spectacles and.', '2016-08-23', '2021-07-07', '2021-07-19 15:32:21', '2021-07-23 06:18:49', NULL),
(142, 4, 397, 'Mouse. \'Of course,\' the Dodo solemnly presented.', '2018-01-31', '2021-05-11', '2021-07-21 00:18:43', '2021-07-23 06:18:49', NULL),
(143, 5, 406, 'I ever saw one that size? Why, it fills the.', '2021-06-30', '2020-02-08', '2021-06-28 08:35:08', '2021-07-23 06:18:49', NULL),
(144, 2, 717, 'Mouse was bristling all over, and she walked.', '2016-12-08', '2020-06-16', '2021-07-06 14:14:37', '2021-07-23 06:18:49', NULL),
(145, 1, 1292, 'March Hare interrupted, yawning. \'I\'m getting.', '2021-03-23', '2020-09-11', '2021-06-25 14:27:16', '2021-07-23 06:18:49', NULL),
(146, 5, 1272, 'YOU manage?\' Alice asked. The Hatter opened his.', '2019-07-20', '2020-09-12', '2021-07-18 03:50:39', '2021-07-23 06:18:49', NULL),
(147, 5, 574, 'If I or she should push the matter worse. You.', '2019-04-24', '2020-09-21', '2021-07-11 07:20:37', '2021-07-23 06:18:49', NULL),
(148, 2, 735, 'Two!\' said Seven. \'Yes, it IS his business!\'.', '2017-05-25', '2019-09-08', '2021-06-27 18:17:10', '2021-07-23 06:18:49', NULL),
(149, 1, 1033, 'Dormouse, and repeated her question. \'Why did.', '2021-07-13', '2020-04-15', '2021-07-09 04:08:13', '2021-07-23 06:18:49', NULL),
(150, 1, 596, 'I\'m talking!\' Just then she noticed that the.', '2019-04-22', '2020-09-20', '2021-07-06 23:04:42', '2021-07-23 06:18:49', NULL),
(151, 2, 1020, 'As she said to itself \'Then I\'ll go round a deal.', '2018-07-03', '2020-08-09', '2021-06-25 07:31:43', '2021-07-23 06:18:49', NULL),
(152, 2, 361, 'Mock Turtle, suddenly dropping his voice; and.', '2017-12-30', '2019-10-21', '2021-07-19 02:22:18', '2021-07-23 06:18:49', NULL),
(153, 3, 336, 'But at any rate, the Dormouse indignantly..', '2018-11-29', '2019-11-28', '2021-07-10 07:05:08', '2021-07-23 06:18:49', NULL),
(154, 2, 792, 'Forty-two. ALL PERSONS MORE THAN A MILE HIGH TO.', '2020-02-01', '2020-07-27', '2021-07-10 09:02:50', '2021-07-23 06:18:49', NULL),
(155, 3, 1175, 'And so she felt unhappy. \'It was much pleasanter.', '2021-02-06', '2020-10-02', '2021-07-18 22:18:00', '2021-07-23 06:18:49', NULL),
(156, 3, 1090, 'Alice. \'Now we shall get on better.\' \'I\'d rather.', '2016-10-05', '2019-10-23', '2021-07-13 10:06:46', '2021-07-23 06:18:49', NULL),
(157, 1, 18, 'Take your choice!\' The Duchess took no notice of.', '2019-04-06', '2020-06-25', '2021-06-23 21:44:18', '2021-07-23 06:18:49', NULL),
(158, 5, 1008, 'Mock Turtle in a moment: she looked at each.', '2017-10-09', '2021-01-08', '2021-07-17 05:59:17', '2021-07-23 06:18:49', NULL),
(159, 5, 426, 'Come on!\' \'Everybody says \"come on!\" here,\'.', '2016-10-10', '2020-02-09', '2021-07-07 16:32:12', '2021-07-23 06:18:49', NULL),
(160, 4, 1047, 'Cheshire Cat,\' said Alice: \'she\'s so.', '2018-03-31', '2019-11-18', '2021-07-05 05:55:10', '2021-07-23 06:18:49', NULL),
(161, 3, 26, 'Gryphon. \'We can do no more, whatever happens..', '2018-10-28', '2019-09-06', '2021-07-06 20:36:34', '2021-07-23 06:18:49', NULL),
(162, 2, 965, 'Alice went on, \'and most of \'em do.\' \'I don\'t.', '2017-01-20', '2019-11-05', '2021-06-30 06:40:20', '2021-07-23 06:18:49', NULL),
(163, 5, 925, 'Alice like the name: however, it only grinned a.', '2016-12-27', '2020-02-20', '2021-07-04 20:51:57', '2021-07-23 06:18:49', NULL),
(164, 4, 790, 'VERY tired of being all alone here!\' As she said.', '2019-02-15', '2021-01-04', '2021-07-06 18:01:37', '2021-07-23 06:18:49', NULL),
(165, 3, 341, 'However, this bottle was a real Turtle.\' These.', '2016-09-01', '2020-03-11', '2021-07-01 07:47:56', '2021-07-23 06:18:49', NULL),
(166, 4, 618, 'It was as much right,\' said the Gryphon. \'Then,.', '2021-06-18', '2020-02-29', '2021-07-22 13:41:30', '2021-07-23 06:18:49', NULL),
(167, 4, 1221, 'Him, and ourselves, and it. Don\'t let him know.', '2016-09-10', '2020-11-07', '2021-07-20 08:21:19', '2021-07-23 06:18:49', NULL),
(168, 2, 984, 'I could show you our cat Dinah: I think you\'d.', '2017-07-19', '2019-11-22', '2021-07-16 08:25:18', '2021-07-23 06:18:49', NULL),
(169, 2, 513, 'WOULD always get into her head. \'If I eat one of.', '2020-05-18', '2021-07-12', '2021-06-25 08:40:25', '2021-07-23 06:18:49', NULL),
(170, 3, 92, 'Alice said; \'there\'s a large dish of tarts upon.', '2020-07-17', '2019-08-21', '2021-06-27 17:27:49', '2021-07-23 06:18:49', NULL),
(171, 4, 1299, 'I wonder?\' And here poor Alice began telling.', '2018-02-25', '2021-04-29', '2021-06-27 13:18:10', '2021-07-23 06:18:49', NULL),
(172, 3, 933, 'Mock Turtle drew a long silence after this, and.', '2019-07-25', '2021-05-02', '2021-07-18 13:18:13', '2021-07-23 06:18:49', NULL),
(173, 3, 819, 'Alice, \'to speak to this last remark, \'it\'s a.', '2021-05-23', '2021-02-11', '2021-07-22 17:53:53', '2021-07-23 06:18:49', NULL),
(174, 1, 247, 'Be off, or I\'ll kick you down stairs!\' \'That is.', '2018-06-20', '2020-08-16', '2021-07-17 03:36:34', '2021-07-23 06:18:49', NULL),
(175, 2, 198, 'How I wonder what they said. The executioner\'s.', '2018-11-29', '2021-02-01', '2021-07-16 13:37:18', '2021-07-23 06:18:49', NULL),
(176, 1, 814, 'White Rabbit read:-- \'They told me he was going.', '2021-04-23', '2019-09-17', '2021-07-14 16:47:10', '2021-07-23 06:18:49', NULL),
(177, 5, 172, 'Hatter. \'I told you that.\' \'If I\'d been the.', '2016-11-15', '2020-01-15', '2021-07-16 01:00:01', '2021-07-23 06:18:49', NULL),
(178, 3, 474, 'At this moment Five, who had been looking over.', '2019-09-06', '2021-04-19', '2021-07-11 12:03:00', '2021-07-23 06:18:49', NULL),
(179, 4, 1005, 'Classics master, though. He was looking down at.', '2019-04-12', '2021-01-06', '2021-07-08 12:02:08', '2021-07-23 06:18:49', NULL),
(180, 2, 1156, 'The jury all looked puzzled.) \'He must have been.', '2019-02-25', '2020-04-08', '2021-07-14 11:07:40', '2021-07-23 06:18:49', NULL),
(181, 1, 607, 'Queen was to eat her up in spite of all this.', '2019-06-15', '2020-12-15', '2021-07-08 00:20:55', '2021-07-23 06:18:49', NULL),
(182, 2, 5, 'I should think!\' (Dinah was the same age as.', '2019-04-02', '2020-08-25', '2021-06-29 23:57:02', '2021-07-23 06:18:49', NULL),
(183, 5, 76, 'Shakespeare, in the lock, and to her great.', '2021-04-13', '2019-12-26', '2021-06-25 15:34:19', '2021-07-23 06:18:49', NULL),
(184, 5, 558, 'ME\' were beautifully marked in currants. \'Well,.', '2017-08-17', '2021-03-20', '2021-07-22 06:21:30', '2021-07-23 06:18:49', NULL),
(185, 3, 744, 'Alice asked in a trembling voice, \'--and I.', '2019-05-21', '2020-12-20', '2021-06-29 11:59:41', '2021-07-23 06:18:49', NULL),
(186, 2, 1065, 'Now I growl when I\'m pleased, and wag my tail.', '2019-02-08', '2020-04-11', '2021-07-18 23:16:17', '2021-07-23 06:18:49', NULL),
(187, 1, 631, 'She was a little irritated at the other side,.', '2018-03-11', '2021-03-19', '2021-07-05 14:35:28', '2021-07-23 06:18:49', NULL),
(188, 4, 300, 'Alice thoughtfully: \'but then--I shouldn\'t be.', '2021-07-01', '2020-10-08', '2021-06-25 16:05:28', '2021-07-23 06:18:49', NULL),
(189, 4, 941, 'March Hare. Alice sighed wearily. \'I think I may.', '2018-04-08', '2020-01-05', '2021-07-05 15:57:18', '2021-07-23 06:18:49', NULL),
(190, 2, 612, 'Lobster Quadrille The Mock Turtle said: \'advance.', '2018-12-18', '2020-03-13', '2021-07-07 19:34:40', '2021-07-23 06:18:49', NULL),
(191, 2, 1169, 'I!\' said the March Hare: she thought it had some.', '2020-07-24', '2020-11-11', '2021-07-01 14:23:53', '2021-07-23 06:18:49', NULL),
(192, 5, 695, 'WOULD go with Edgar Atheling to meet William and.', '2019-09-09', '2021-02-07', '2021-07-12 08:16:29', '2021-07-23 06:18:49', NULL),
(193, 5, 108, 'Dormouse turned out, and, by the fire, and at.', '2017-07-29', '2020-08-16', '2021-07-20 10:37:09', '2021-07-23 06:18:49', NULL),
(194, 3, 813, 'Alice replied very politely, feeling quite.', '2020-08-23', '2019-08-21', '2021-07-04 05:14:20', '2021-07-23 06:18:49', NULL),
(195, 1, 241, 'At last the Dodo solemnly, rising to its feet,.', '2018-08-05', '2020-07-05', '2021-07-14 23:49:34', '2021-07-23 06:18:49', NULL),
(196, 4, 441, 'King, looking round the refreshments!\' But there.', '2020-05-06', '2019-10-21', '2021-07-07 22:22:26', '2021-07-23 06:18:49', NULL),
(197, 4, 862, 'There was certainly not becoming. \'And that\'s.', '2016-11-03', '2020-02-02', '2021-06-24 13:48:47', '2021-07-23 06:18:49', NULL),
(198, 3, 738, 'MARMALADE\', but to open it; but, as the rest of.', '2019-06-28', '2020-09-24', '2021-07-02 12:37:07', '2021-07-23 06:18:49', NULL),
(199, 5, 70, 'Alice noticed with some curiosity. \'What a.', '2018-01-05', '2020-03-03', '2021-07-03 12:22:31', '2021-07-23 06:18:49', NULL),
(200, 2, 320, 'The first question of course was, how to begin.\'.', '2016-12-30', '2020-09-12', '2021-06-26 14:35:53', '2021-07-23 06:18:49', NULL),
(201, 4, 132, 'However, on the bank, and of having the sentence.', '2018-01-13', '2020-06-13', '2021-07-08 19:27:21', '2021-07-23 06:18:49', NULL),
(202, 1, 1100, 'Alice could not think of any that do,\' Alice.', '2017-08-29', '2019-11-12', '2021-07-17 23:13:50', '2021-07-23 06:18:49', NULL),
(203, 4, 1217, 'Alice, and sighing. \'It IS a long time.', '2016-12-25', '2020-05-08', '2021-07-07 15:00:50', '2021-07-23 06:18:49', NULL),
(204, 3, 394, 'Alice ventured to remark. \'Tut, tut, child!\'.', '2020-04-04', '2020-04-30', '2021-06-29 14:04:46', '2021-07-23 06:18:49', NULL),
(205, 4, 1215, 'She pitied him deeply. \'What is it?\' \'Why,\' said.', '2018-05-19', '2019-12-13', '2021-07-09 08:36:45', '2021-07-23 06:18:49', NULL),
(206, 4, 928, 'March Hare: she thought it must make me grow.', '2016-11-11', '2020-05-16', '2021-07-03 21:22:09', '2021-07-23 06:18:49', NULL),
(207, 3, 131, 'Will you, won\'t you, will you, won\'t you, will.', '2020-08-11', '2020-09-06', '2021-06-26 05:11:09', '2021-07-23 06:18:49', NULL),
(208, 1, 757, 'ARE OLD, FATHER WILLIAM,\"\' said the Mock.', '2017-12-04', '2020-08-27', '2021-07-14 03:14:34', '2021-07-23 06:18:49', NULL),
(209, 5, 262, 'I\'m on the hearth and grinning from ear to ear..', '2021-01-29', '2021-06-14', '2021-06-24 14:58:03', '2021-07-23 06:18:49', NULL),
(210, 5, 1215, 'Those whom she sentenced were taken into custody.', '2019-06-04', '2021-04-17', '2021-06-25 16:44:13', '2021-07-23 06:18:49', NULL),
(211, 1, 1140, 'So she tucked it away under her arm, with its.', '2018-03-02', '2020-05-17', '2021-06-25 05:51:00', '2021-07-23 06:18:49', NULL),
(212, 2, 341, 'However, I\'ve got to the door, and the fan, and.', '2019-05-29', '2020-02-09', '2021-07-06 01:05:42', '2021-07-23 06:18:49', NULL),
(213, 1, 1266, 'Alice. \'I mean what I get\" is the same tone,.', '2018-03-08', '2021-02-15', '2021-06-24 04:38:53', '2021-07-23 06:18:49', NULL),
(214, 5, 310, 'Duchess, it had no pictures or conversations in.', '2018-02-10', '2020-01-02', '2021-07-07 01:22:17', '2021-07-23 06:18:49', NULL),
(215, 3, 453, 'Queen: so she began nibbling at the.', '2019-04-22', '2019-08-14', '2021-06-28 08:26:24', '2021-07-23 06:18:49', NULL),
(216, 5, 705, 'Gryphon, with a T!\' said the Gryphon added.', '2020-10-25', '2021-04-15', '2021-07-15 14:33:07', '2021-07-23 06:18:49', NULL),
(217, 4, 987, 'Alice gave a look askance-- Said he thanked the.', '2016-07-30', '2019-09-19', '2021-06-26 05:58:43', '2021-07-23 06:18:49', NULL),
(218, 1, 348, 'Queen of Hearts, and I shall be a letter,.', '2018-04-20', '2020-07-02', '2021-07-19 14:00:04', '2021-07-23 06:18:49', NULL),
(219, 1, 925, 'All this time she saw in another moment down.', '2021-05-23', '2019-11-12', '2021-07-22 15:20:11', '2021-07-23 06:18:49', NULL),
(220, 3, 1066, 'Dormouse followed him: the March Hare.', '2017-04-12', '2019-12-21', '2021-07-03 08:57:24', '2021-07-23 06:18:49', NULL),
(221, 5, 1161, 'By the time she heard the Rabbit hastily.', '2019-03-15', '2020-02-01', '2021-07-01 05:25:36', '2021-07-23 06:18:49', NULL),
(222, 3, 1251, 'Dormouse!\' And they pinched it on both sides of.', '2020-05-18', '2021-03-15', '2021-06-24 14:19:18', '2021-07-23 06:18:49', NULL),
(223, 3, 61, 'I wish you could keep it to speak with. Alice.', '2018-02-09', '2019-12-20', '2021-07-14 05:40:27', '2021-07-23 06:18:49', NULL),
(224, 1, 814, 'Take your choice!\' The Duchess took her choice,.', '2021-04-21', '2020-06-20', '2021-07-12 12:28:39', '2021-07-23 06:18:49', NULL),
(225, 3, 1300, 'I think?\' he said in a melancholy tone: \'it.', '2017-11-04', '2021-02-14', '2021-06-27 18:53:52', '2021-07-23 06:18:49', NULL),
(226, 4, 519, 'And concluded the banquet--] \'What IS the same.', '2018-04-05', '2019-07-29', '2021-07-14 17:06:33', '2021-07-23 06:18:49', NULL),
(227, 3, 396, 'Now I growl when I\'m pleased, and wag my tail.', '2018-01-05', '2021-07-21', '2021-06-25 19:39:38', '2021-07-23 06:18:49', NULL),
(228, 4, 46, 'CAN I have to fly; and the turtles all advance!.', '2018-01-16', '2021-01-08', '2021-07-03 14:39:23', '2021-07-23 06:18:49', NULL),
(229, 3, 1090, 'Queen added to one of the jurymen. \'It isn\'t.', '2016-11-19', '2020-08-11', '2021-06-28 13:07:26', '2021-07-23 06:18:49', NULL),
(230, 2, 74, 'March Hare had just begun to dream that she let.', '2020-07-01', '2020-07-23', '2021-07-09 20:39:56', '2021-07-23 06:18:49', NULL),
(231, 5, 344, 'Mabel! I\'ll try if I would talk on such a thing.', '2018-03-23', '2019-10-13', '2021-07-02 21:46:37', '2021-07-23 06:18:49', NULL),
(232, 2, 170, 'All this time the Queen had only one who got any.', '2020-12-20', '2020-08-29', '2021-06-30 04:07:42', '2021-07-23 06:18:49', NULL),
(233, 3, 495, 'Alice. \'I\'m a--I\'m a--\' \'Well! WHAT are you?\'.', '2021-02-03', '2020-04-07', '2021-07-09 23:22:04', '2021-07-23 06:18:49', NULL),
(234, 1, 938, 'It means much the same thing, you know.\' He was.', '2021-01-08', '2021-01-06', '2021-07-17 05:01:14', '2021-07-23 06:18:49', NULL),
(235, 1, 984, 'Hatter added as an explanation. \'Oh, you\'re sure.', '2017-05-14', '2020-03-20', '2021-06-26 09:04:01', '2021-07-23 06:18:49', NULL),
(236, 5, 1252, 'ME\' were beautifully marked in currants. \'Well,.', '2017-07-19', '2021-04-17', '2021-07-09 07:23:10', '2021-07-23 06:18:49', NULL),
(237, 1, 495, 'Pigeon; \'but I know is, it would be like, but it.', '2017-02-24', '2020-04-27', '2021-07-10 20:28:23', '2021-07-23 06:18:49', NULL),
(238, 4, 754, 'Queen was to eat or drink something or other;.', '2017-03-01', '2021-03-08', '2021-07-03 04:33:38', '2021-07-23 06:18:49', NULL),
(239, 4, 889, 'I ought to be two people! Why, there\'s hardly.', '2018-03-04', '2021-03-14', '2021-07-18 23:08:13', '2021-07-23 06:18:49', NULL),
(240, 2, 186, 'And it\'ll fetch things when you have of putting.', '2019-01-29', '2019-11-13', '2021-06-24 18:33:19', '2021-07-23 06:18:49', NULL),
(241, 1, 862, 'By the use of a treacle-well--eh, stupid?\' \'But.', '2018-11-16', '2021-02-22', '2021-07-02 16:55:41', '2021-07-23 06:18:49', NULL),
(242, 3, 613, 'Prizes!\' Alice had never heard before, \'Sure.', '2018-05-01', '2019-08-17', '2021-07-10 05:59:36', '2021-07-23 06:18:49', NULL),
(243, 2, 572, 'Time!\' \'Perhaps not,\' Alice replied in an.', '2019-10-21', '2021-07-09', '2021-07-04 16:29:23', '2021-07-23 06:18:49', NULL),
(244, 1, 467, 'COULD he turn them out with his knuckles. It was.', '2019-08-14', '2020-03-08', '2021-07-01 04:50:03', '2021-07-23 06:18:49', NULL),
(245, 2, 597, 'Dinah: I think it so quickly that the cause of.', '2020-02-07', '2020-10-01', '2021-07-11 15:18:58', '2021-07-23 06:18:49', NULL),
(246, 2, 352, 'Alice was very fond of beheading people here;.', '2020-03-08', '2020-09-28', '2021-07-09 05:07:21', '2021-07-23 06:18:49', NULL),
(247, 3, 520, 'The King looked anxiously round, to make out.', '2018-09-03', '2019-09-28', '2021-07-01 00:22:34', '2021-07-23 06:18:49', NULL),
(248, 5, 393, 'Between yourself and me.\' \'That\'s the judge,\'.', '2019-07-22', '2020-07-07', '2021-07-06 11:28:49', '2021-07-23 06:18:49', NULL),
(249, 1, 146, 'Alice timidly. \'Would you tell me, Pat, what\'s.', '2016-10-09', '2019-10-17', '2021-06-26 11:57:19', '2021-07-23 06:18:49', NULL),
(250, 3, 914, 'I wish I could say if I fell off the top of his.', '2018-05-28', '2020-07-18', '2021-07-02 08:42:34', '2021-07-23 06:18:49', NULL);

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
  MODIFY `id_beasiswa` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

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
