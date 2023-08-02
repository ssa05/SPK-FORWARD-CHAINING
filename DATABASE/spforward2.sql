-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 06:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spforward2`
--

-- --------------------------------------------------------

--
-- Table structure for table `kualifikasi`
--

CREATE TABLE `kualifikasi` (
  `id_kualifikasi` int(11) NOT NULL,
  `kode_kualifikasi` varchar(20) NOT NULL,
  `nama_kualifikasi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kualifikasi`
--

INSERT INTO `kualifikasi` (`id_kualifikasi`, `kode_kualifikasi`, `nama_kualifikasi`) VALUES
(3, 'K01', 'Memahami bahasa pemrograman tertentu seperti Python, Java, C++, JavaScrip.'),
(4, 'K02', 'Memiliki pengetahuan tentang struktur data, algoritma, paradigma pemrograman.'),
(5, 'K03', 'Kemampuan untuk menganalisis masalah, menguraikan masalah menjadi langkah-langkah terstruktur.'),
(6, 'K04', 'Kemampuan untuk berkolaborasi dengan anggota tim lain.'),
(7, 'K05', 'Familiaritas dengan basis data dan kemampuan untuk menggunakan bahasa query SQL '),
(8, 'K06', 'Kemampuan untuk mencari dan mempelajari informasi baru secara mandiri.'),
(9, 'K07', 'Pengalaman sebelumnya dengan platform atau alat tertentu yang relevan, seperti Git, Docker'),
(10, 'K08', 'Memiliki pengetahuan tentang HTML, CSS, dan framework web (misalnya React, Angular, atau Vue)'),
(11, 'K09', 'Kemampuan untuk berpikir kreatif dan inovatif'),
(12, 'K10', 'Kemampuan untuk mencari dan memperbaiki bug atau kesalahan dalam kode.'),
(13, 'K11', 'Memahami dasar-dasar keamanan jaringan, protokol, dan infrastruktur untuk melindungi jaringan dari a'),
(14, 'K12', 'Memahami keamanan sistem operasi, konfigurasi keamanan, dan praktik pengamanan untuk melindungi serv'),
(15, 'K13', 'Kemampuan untuk melakukan pengujian penetrasi'),
(20, 'K14', 'Pemahaman tentang konsep dasar kriptografi'),
(21, 'K15', 'Familiaritas dengan alat keamanan seperti SIEM, NIDS, HIDS'),
(22, 'K16', 'Pemahaman tentang keamanan dalam lingkungan cloud computing'),
(23, 'K17', 'Pemahaman tentang manajemen identitas dan hak akses pengguna untuk mengontrol akses ke sumber daya.'),
(24, 'K18 ', 'Kemampuan untuk menganalisis ancaman keamanan informasi yang umum dan bagaimana mengatasinya.'),
(25, 'K19', 'Kesadaran tentang undang-undang dan regulasi keamanan siber yang relevan.'),
(26, 'K20', 'Kemampuan untuk menganalisis risiko keamanan'),
(27, 'K21', 'Pengetahuan tentang infrastruktur jaringan, firewall, IDS/IPS'),
(28, 'K22', 'Familiaritas dengan sistem operasi seperti Windows, macOS, dan Linux, serta cara mengamankannya.'),
(29, 'K23', 'Pemahaman tentang pentingnya dan praktik manajemen patch untuk menjaga sistem tetap aman.'),
(30, 'K24 ', 'Pengetahuan tentang kerentanan umum dalam aplikasi'),
(31, 'K25', 'Kemampuan untuk berkomunikasi dengan jelas'),
(32, 'K26', 'Familiaritas dengan penggunaan framework dan library yang umum digunakan dalam pengembangan perangka'),
(33, 'K27', 'Familiaritas dengan sistem version control seperti Git dan kemampuan untuk berkolaborasi dengan tim '),
(34, 'K28', 'Kemampuan untuk mengumpulkan dan menganalisis kebutuhan bisnis atau pengguna, serta merumuskan solus'),
(35, 'K29 ', ' Kemampuan untuk menggunakan alat pemodelan seperti UML (Unified Modeling Language)'),
(36, 'K30', ' Pengetahuan tentang teknologi informasi umum, arsitektur sistem, dan infrastruktur IT.'),
(37, 'K31', 'Memahami proses bisnis yang ada dan mengidentifikasi area yang dapat ditingkatkan melalui teknologi '),
(38, 'K32', 'Familiaritas dengan prinsip-prinsip manajemen proyek dan kemampuan untuk mengelola proyek dengan efi'),
(39, 'K33', 'Kemampuan untuk menganalisis data dan mengambil keputusan berdasarkan temuan analisis.'),
(40, 'K34 ', 'Pemahaman tentang prinsip-prinsip pengujian perangkat lunak dan kemampuan untuk melakukan pengujian '),
(41, 'K35', 'Kemampuan untuk mengumpulkan dan menganalisis bukti digital dari berbagai sumber, termasuk perangkat'),
(42, 'K36', 'Familiaritas dengan berbagai alat forensik digital seperti EnCase, FTK (Forensic Toolkit), Autopsy'),
(43, 'K37 ', 'Kemampuan untuk menganalisis data digital dengan cermat'),
(44, 'K38', ' Kemampuan dalam scripting atau pemrograman'),
(45, 'K39', 'Kemampuan untuk mengelola waktu dengan baik'),
(46, 'K40', 'Memahami aspek hukum dan peraturan yang relevan dalam forensik digital'),
(47, 'K41', 'Menunjukkan integritas dan etika kerja yang baik dalam menghadapi data sensitif'),
(48, 'K42', 'Kemampuan untuk membaca, memahami, dan menganalisis kode Assembly dari program atau perangkat lunak.'),
(49, 'K43', 'Kemampuan untuk menggunakan debugger (seperti GDB, OllyDbg, atau IDA Pro) untuk menganalisis eksekus'),
(50, 'K44', 'Pengetahuan tentang teknik analisis malware, termasuk menganalisis malware dan teknik peretasan.'),
(51, 'K45 ', ' Kemampuan untuk menganalisis kode dan mengidentifikasi kerentanannya.'),
(52, 'K46', 'Kemampuan untuk berpikir secara logis dan menganalisis kode secara sistematis.'),
(53, 'K47', 'Pengetahuan tentang malware, teknik peretasan, dan metode serangan yang sering digunakan oleh penyer'),
(54, 'K48', 'Familiaritas dengan berbagai alat dan teknik analisis intelijen ancaman yang digunakan dalam industr'),
(55, 'K49', 'Kemampuan untuk mencari dan menganalisis data dari sumber-sumber terpercaya untuk memahami tren anca'),
(56, 'K50', 'Kemampuan untuk menganalisis data terstruktur dan tidak terstruktur, termasuk log dan data keamanan '),
(57, 'K51', 'Kemampuan untuk menghubungkan titik-titik data yang berbeda dan mengidentifikasi hubungan antara anc'),
(58, 'K52 ', 'Memahami konsep dan prinsip dasar Internet of Things'),
(59, 'K53', 'Kemampuan untuk menganalisis dan mengevaluasi risiko keamanan dalam sistem IoT'),
(60, 'K54 ', 'Pemahaman tentang keamanan jaringan dan protokol yang digunakan dalam komunikasi perangkat IoT'),
(61, 'K55', 'Pemahaman tentang manajemen identitas, hak akses pengguna, dan praktik keamanan akses dalam konteks '),
(62, 'K56', 'Pemahaman tentang protokol komunikasi yang digunakan dalam IoT dan praktik keamanan untuk melindungi'),
(63, 'K57 ', 'Pengetahuan tentang keamanan sistem operasi, protokol jaringan, infrastruktur jaringan'),
(64, 'K58 ', 'Kemampuan untuk mengidentifikasi risiko keamanan potensial dalam lingkungan bisnis atau proyek'),
(65, 'K59', 'Pemahaman tentang manajemen identitas, hak akses pengguna, dan praktik pengamanan akses'),
(66, 'K60', 'Familiaritas dengan prinsip-prinsip manajemen proyek dan kemampuan untuk merencanakan dan mengelola ');

-- --------------------------------------------------------

--
-- Table structure for table `magang`
--

CREATE TABLE `magang` (
  `id_perusahaan` int(11) NOT NULL,
  `kode_perusahaan` varchar(20) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `posisi_magang` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `magang`
--

INSERT INTO `magang` (`id_perusahaan`, `kode_perusahaan`, `nama_perusahaan`, `posisi_magang`, `keterangan`) VALUES
(1, 'P01', 'PT Wesclic Indonesia Neotech', 'System Analist', 'Berdasarkan pada hasil kualifikasi, anda disarankan untuk magang pada PT.Wesclic Indonesia Neotech yang terletak di kota Yogyakarta. Untuk informasi lebih lengkap silahkan kunjungi website resmi perusahaan.'),
(2, 'P02', 'PT Marsindo Konsult Prima', 'IT Developer', 'Berdasarkan pada hasil kualifikasi, anda disarankan untuk magang pada PT.Marsindo Konsult Prima yang terletak di kota Jakarta Selatan. Untuk informasi lebih lengkap silahkan kunjungi website resmi perusahaan.'),
(3, 'P03', 'PT Xapiens Teknologi Indonesia', 'Cyber Security', 'Berdasarkan pada hasil kualifikasi, anda disarankan untuk magang pada PT.Xapiens Teknologi Indonesia yang terletak di kota Tangerang. Untuk informasi lebih lengkap silahkan kunjungi website resmi perusahaan.'),
(4, 'P04', 'Mekari', 'Security Engineer', 'Berdasarkan pada hasil kualifikasi, anda disarankan untuk magang pada Mekari yang terletak di DKI Jakarta. Untuk informasi lebih lengkap silahkan kunjungi website resmi perusahaan.'),
(5, 'P05', 'PT Beon Intermedia', 'Programmer', 'Berdasarkan pada hasil kualifikasi, anda disarankan untuk magang pada PT Beon Intermedia yang terletak di kota Malang. Untuk informasi lebih lengkap silahkan kunjungi website resmi perusahaan.'),
(8, 'P06', 'PT Wesclic Indonesia Neotech', 'Forensic Digital', 'Berdasarkan pada hasil kualifikasi, anda disarankan untuk magang pada PT.Wesclic Indonesia Neotech yang terletak di kota Yogyakarta. Untuk informasi lebih lengkap silahkan kunjungi website resmi perusahaan.'),
(9, 'P07', 'PT Marsindo Konsult Prima', 'IoT Security', 'Berdasarkan pada hasil kualifikasi, anda disarankan untuk magang pada PT.Marsindo Konsult Prima yang terletak di kota Jakarta Selatan. Untuk informasi lebih lengkap silahkan kunjungi website resmi perusahaan.'),
(10, 'P08', 'PT Xapiens Teknologi Indonesia', 'Threat Intelligence Analyst', 'Berdasarkan pada hasil kualifikasi, anda disarankan untuk magang pada PT.Xapiens Teknologi Indonesia yang terletak di kota Tangerang. Untuk informasi lebih lengkap silahkan kunjungi website resmi perusahaan.'),
(11, 'P09', 'Mekari', 'Security Architech', 'Berdasarkan pada hasil kualifikasi, anda disarankan untuk magang pada Mekari yang terletak di DKI Jakarta. Untuk informasi lebih lengkap silahkan kunjungi website resmi perusahaan.'),
(12, 'P10', 'PT Beon Intermedia', 'Reverse Engineer', 'Berdasarkan pada hasil kualifikasi, anda disarankan untuk magang pada PT Beon Intermedia yang terletak di kota Malang. Untuk informasi lebih lengkap silahkan kunjungi website resmi perusahaan.');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_perusahaan` int(11) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `id_pengguna`, `id_perusahaan`, `tanggal`) VALUES
(7, 11, 2, '2020-09-25'),
(8, 11, NULL, '2020-09-25'),
(9, 11, 2, '2020-09-25'),
(10, 11, NULL, '2020-09-25'),
(11, 11, 1, '2020-09-25'),
(12, 11, NULL, '2020-09-25'),
(13, 11, 1, '2020-09-25'),
(14, 11, 2, '2020-09-25'),
(15, 11, NULL, '2020-09-25'),
(16, 11, NULL, '2020-09-25'),
(17, 11, NULL, '2020-09-25'),
(18, 11, NULL, '2020-09-25'),
(19, 11, NULL, '2020-09-25'),
(20, 11, 1, '2020-09-25'),
(21, 11, 3, '2020-09-25'),
(26, 11, 3, '2020-09-25'),
(27, 11, 3, '2020-09-25'),
(28, 11, 1, '2020-09-25'),
(29, 11, 1, '2020-09-25'),
(30, 11, 1, '2020-09-25'),
(31, 11, NULL, '2020-09-25'),
(32, 11, 1, '2020-09-25'),
(33, 11, 1, '2020-09-25'),
(34, 11, 1, '2020-09-25'),
(35, 11, NULL, '2020-09-25'),
(36, 11, NULL, '2020-09-25'),
(37, 11, NULL, '2020-09-25'),
(38, 11, 1, '2020-09-25'),
(39, 11, 1, '2020-09-25'),
(40, 11, NULL, '2020-09-25'),
(41, 15, 1, '2020-09-25'),
(42, 15, 2, '2020-09-25'),
(43, 17, 1, '2020-09-25'),
(45, 11, 1, '2023-07-21'),
(46, 11, 1, '2023-07-21'),
(47, 11, 1, '2023-07-21'),
(48, 11, 1, '2023-07-21'),
(49, 11, 1, '2023-07-21'),
(50, 11, NULL, '2023-07-21'),
(51, 11, NULL, '2023-07-21'),
(52, 11, NULL, '2023-07-21'),
(53, 11, 2, '2023-07-21'),
(54, 11, 2, '2023-07-21'),
(55, 11, NULL, '2023-07-21'),
(56, 11, 2, '2023-07-21'),
(57, 11, 2, '2023-07-21'),
(58, 11, 2, '2023-07-21'),
(59, 11, 2, '2023-07-21'),
(60, 11, NULL, '2023-07-22'),
(61, 11, 1, '2023-07-22'),
(62, 11, 1, '2023-07-22'),
(63, 11, 1, '2023-07-22'),
(64, 11, NULL, '2023-07-25'),
(65, 20, 4, '2023-07-25'),
(66, 21, 1, '2023-07-25'),
(67, 22, 3, '2023-07-25'),
(68, 23, 5, '2023-07-25'),
(69, 24, 2, '2023-07-25'),
(70, 25, 4, '2023-07-25'),
(71, 26, 3, '2023-07-25'),
(72, 27, 1, '2023-07-25'),
(73, 28, 2, '2023-07-25'),
(74, 29, 1, '2023-07-25'),
(75, 30, 3, '2023-07-25'),
(76, 31, 1, '2023-07-25'),
(77, 32, 2, '2023-07-25'),
(78, 33, 2, '2023-07-25'),
(79, 34, 4, '2023-07-25'),
(80, 35, 3, '2023-07-25'),
(81, 36, 3, '2023-07-25'),
(82, 37, 3, '2023-07-25'),
(83, 38, 1, '2023-07-25'),
(84, 39, 4, '2023-07-25'),
(85, 40, 1, '2023-07-25'),
(86, 21, NULL, '2023-08-01'),
(87, 21, NULL, '2023-08-01'),
(88, 21, NULL, '2023-08-01'),
(89, 21, 1, '2023-08-01'),
(90, 12, NULL, '2023-08-01'),
(91, 12, 12, '2023-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `id_rule` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `id_kualifikasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`id_rule`, `id_perusahaan`, `id_kualifikasi`) VALUES
(36, 1, 34),
(60, 1, 35),
(62, 1, 36),
(63, 1, 31),
(66, 1, 5),
(67, 1, 37),
(68, 1, 38),
(69, 1, 39),
(70, 1, 40),
(71, 1, 8),
(72, 2, 3),
(73, 2, 4),
(74, 2, 32),
(75, 2, 7),
(76, 2, 10),
(77, 2, 33),
(78, 2, 11),
(79, 2, 8),
(80, 2, 31),
(81, 2, 5),
(92, 3, 26),
(93, 3, 27),
(96, 3, 15),
(97, 3, 28),
(100, 3, 20),
(101, 3, 29),
(104, 3, 24),
(105, 3, 30),
(108, 3, 5),
(114, 3, 31),
(116, 4, 13),
(117, 4, 14),
(120, 4, 15),
(122, 4, 20),
(124, 4, 21),
(126, 4, 22),
(127, 4, 23),
(128, 4, 24),
(129, 4, 25),
(130, 4, 5),
(134, 5, 3),
(135, 5, 4),
(136, 5, 5),
(137, 5, 6),
(138, 5, 7),
(139, 5, 8),
(140, 5, 9),
(141, 5, 10),
(142, 5, 11),
(143, 5, 12),
(144, 8, 41),
(145, 8, 42),
(146, 8, 28),
(147, 8, 43),
(148, 8, 11),
(149, 8, 44),
(150, 8, 31),
(151, 8, 45),
(152, 8, 46),
(153, 8, 47),
(155, 9, 58),
(156, 9, 59),
(157, 9, 60),
(158, 9, 15),
(159, 9, 3),
(160, 9, 61),
(161, 9, 62),
(162, 9, 8),
(163, 9, 20),
(164, 9, 31),
(165, 10, 26),
(166, 10, 24),
(167, 10, 53),
(168, 10, 54),
(169, 10, 55),
(170, 10, 56),
(171, 10, 57),
(172, 10, 31),
(173, 10, 8),
(174, 10, 47),
(175, 11, 63),
(176, 11, 36),
(177, 11, 64),
(178, 11, 27),
(179, 11, 30),
(180, 11, 5),
(181, 11, 31),
(182, 11, 47),
(183, 11, 65),
(184, 11, 38),
(186, 12, 3),
(187, 12, 48),
(188, 12, 28),
(189, 12, 49),
(190, 12, 50),
(191, 12, 20),
(192, 12, 52),
(193, 12, 51),
(194, 12, 8),
(195, 12, 47);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_pengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('Admin','Perusahaan','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_pengguna`, `nama_lengkap`, `username`, `password`, `level`) VALUES
(1, 'Sela Putri', 'admin1', 'admin1', 'Admin'),
(11, 'Caroline', 'user', 'user', 'User'),
(12, 'perusahaan akses', 'perusahaan', 'perusahaan', 'Perusahaan'),
(14, 'Joni', 'user2', 'user2', 'User'),
(15, 'Jono', 'user3', 'user3', 'User'),
(16, 'Keke', 'user3', 'user3', 'User'),
(17, 'Gunawan', 'user4', 'user4', 'User'),
(18, 'Tri', 'user5', 'user5', 'User'),
(19, 'Sari', 'user6', 'user6', 'User'),
(20, 'Faiz Nesa', 'nesauser', 'nesa', 'User'),
(21, 'Clarissa Monique', 'sasauser', 'sasa', 'User'),
(22, 'At Taffani', 'atuser', 'at', 'User'),
(23, 'Firdaus Anesta', 'dausuer', 'daus', 'User'),
(24, 'Eko Alfianto', 'ekouser', 'eko', 'User'),
(25, 'Yudha Satria', 'yudhauser', 'yudha', 'User'),
(26, 'Aditya Eka', 'nobiuser', 'nobi', 'User'),
(27, 'Nova Aditya', 'tomatuser', 'tomat', 'User'),
(28, 'Aji Nur', 'ajiuser', 'aji', 'User'),
(29, 'Imam Muhyiddin', 'imamuser', 'imam', 'User'),
(30, 'Assa Zara', 'assauser', 'assa', 'User'),
(31, 'Sarah Gracia', 'onauser', 'ona', 'User'),
(32, 'Arsyad Abdulghani', 'arsyaduser', 'arsyad', 'User'),
(33, 'Angga Ferdyan', 'anggauser', 'angga', 'User'),
(34, 'Kanca Dwi', 'kancauser', 'kanca', 'User'),
(35, 'Uun Syaifudin', 'uunuser', 'uun', 'User'),
(36, 'Dion Lucky', 'dionuser', 'dion', 'User'),
(37, 'Alfian Yudha', 'alfianuser', 'alfian', 'User'),
(38, 'Indra ', 'indrauser', 'indra', 'User'),
(39, 'Samuel Thomas', 'samueluser', 'samuel', 'User'),
(40, 'Jidar Titahjaya', 'jidaruser', 'jidar', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kualifikasi`
--
ALTER TABLE `kualifikasi`
  ADD PRIMARY KEY (`id_kualifikasi`);

--
-- Indexes for table `magang`
--
ALTER TABLE `magang`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_penyakit` (`id_perusahaan`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id_rule`),
  ADD KEY `id_penyakit` (`id_perusahaan`),
  ADD KEY `id_gejala` (`id_kualifikasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kualifikasi`
--
ALTER TABLE `kualifikasi`
  MODIFY `id_kualifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `magang`
--
ALTER TABLE `magang`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `id_rule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `riwayat_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `user` (`id_pengguna`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `riwayat_ibfk_2` FOREIGN KEY (`id_perusahaan`) REFERENCES `magang` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `rule`
--
ALTER TABLE `rule`
  ADD CONSTRAINT `rule_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `magang` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `rule_ibfk_2` FOREIGN KEY (`id_kualifikasi`) REFERENCES `kualifikasi` (`id_kualifikasi`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
