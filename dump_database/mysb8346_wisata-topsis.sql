-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 08, 2019 at 10:44 AM
-- Server version: 10.3.16-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysb8346_wisata-topsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_topsis`
--

CREATE TABLE `kriteria_topsis` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(30) NOT NULL,
  `jenis` enum('cost','benefit') NOT NULL,
  `bobot` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_topsis`
--

INSERT INTO `kriteria_topsis` (`id_kriteria`, `nama_kriteria`, `jenis`, `bobot`) VALUES
(1, 'pengunjung', 'cost', 2),
(2, 'fasilitas', 'benefit', 2),
(3, 'Pelayanan', 'benefit', 2),
(4, 'harga', 'benefit', 2),
(5, 'jarak', 'benefit', 2);

-- --------------------------------------------------------

--
-- Table structure for table `max_min_topsis`
--

CREATE TABLE `max_min_topsis` (
  `id_max_min` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai_max_min` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `max_min_topsis`
--

INSERT INTO `max_min_topsis` (`id_max_min`, `id_kriteria`, `nilai_max_min`) VALUES
(906, 1, 0.0620977004343114),
(907, 2, 0.386740907904138),
(908, 3, 0.17160805121001416),
(909, 4, 0.17609102008829974),
(910, 4, 0.19370012209712972),
(911, 1, 0.1137147951646584),
(912, 2, 0.3915751692529397),
(913, 3, 0.1652521974614951),
(914, 4, 0.17609102008829974),
(915, 4, 0.17609102008829974),
(916, 1, 0.002488790333337376),
(917, 2, 0.39640943060174144),
(918, 3, 0.15889634371297606),
(919, 4, 0),
(920, 4, 0.16200373848123575),
(921, 1, 0.06268715077641762),
(922, 2, 0.43024926004335357),
(923, 3, 0.1800825228747062),
(924, 4, 0),
(925, 4, 0.38740024419425945),
(926, 1, 0.04164109424348869),
(927, 2, 0.44958630543856043),
(928, 3, 0.19279423037174429),
(929, 4, 0.17609102008829974),
(930, 4, 0.38740024419425945),
(931, 1, 1.0998637289974007),
(932, 2, 0.439917782740957),
(933, 3, 1.8220114079087921),
(934, 4, 0),
(935, 4, 0),
(936, 1, 0.11817288550457793),
(937, 2, 0.39640943060174144),
(938, 3, 0.19067561245557127),
(939, 4, 0),
(940, 4, 0.005282730602648993),
(941, 1, 0.015612991510990274),
(942, 2, 0.386740907904138),
(943, 3, 0.17796390495853318),
(944, 4, 0),
(945, 4, 0.28174563214127957),
(946, 1, 0.972158419273509),
(947, 2, 0.3625696011601294),
(948, 3, 0.16101496162914908),
(949, 4, 0),
(950, 4, 0.11445916305739484),
(951, 1, 0.07876009217556654),
(952, 2, 0.3915751692529397),
(953, 3, 0.17160805121001416),
(954, 4, 0.26413653013244964),
(955, 4, 0.014087281607063979),
(956, 1, 0.2349316855924869),
(957, 2, 0.386740907904138),
(958, 3, 0.15677772579680305),
(959, 4, 0.26413653013244964),
(960, 4, 0.014087281607063979),
(961, 1, 0.13014646770635177),
(962, 2, 0.35773533981132766),
(963, 3, 0.16101496162914908),
(964, 4, 0),
(965, 4, 0.01937001220971297),
(966, 1, 0.24036475061442553),
(967, 2, 0.39640943060174144),
(968, 3, 0.17160805121001416),
(969, 4, 0.26413653013244964),
(970, 4, 0.007924095903973489),
(971, 1, 0.05797005952860294),
(972, 2, 0.40607795329934493),
(973, 3, 0.17584528704236016),
(974, 4, 0),
(975, 4, 0.0019370012209712973),
(976, 1, 0.0183801333947667),
(977, 2, 0.4254149986945518),
(978, 3, 0.17160805121001416),
(979, 4, 0),
(980, 4, 0.04226184482119194);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_topsis`
--

CREATE TABLE `nilai_topsis` (
  `id_nilai` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_topsis`
--

INSERT INTO `nilai_topsis` (`id_nilai`, `id_kriteria`, `id_produk`, `nilai`) VALUES
(1, 1, 5, 41718),
(2, 1, 6, 76395),
(3, 1, 7, 1672),
(4, 1, 8, 42114),
(5, 1, 9, 27975),
(6, 1, 10, 97946),
(7, 1, 11, 678934),
(8, 1, 12, 105784),
(9, 1, 13, 69229),
(10, 1, 14, 79618),
(11, 1, 15, 738902),
(12, 1, 16, 79390),
(13, 1, 17, 10489),
(14, 1, 18, 653108),
(15, 1, 19, 52912),
(16, 1, 20, 157830),
(17, 1, 22, 87434),
(18, 1, 23, 161480),
(19, 1, 24, 38945),
(20, 1, 25, 12348),
(21, 1, 26, 367835),
(22, 1, 27, 45956),
(23, 1, 28, 345905),
(24, 1, 29, 56757),
(25, 2, 5, 80),
(26, 2, 6, 81),
(27, 2, 7, 82),
(28, 2, 8, 89),
(29, 2, 9, 93),
(30, 2, 10, 86),
(31, 2, 11, 85),
(32, 2, 12, 95),
(33, 2, 13, 88),
(34, 2, 14, 87),
(35, 2, 15, 91),
(36, 2, 16, 82),
(37, 2, 17, 80),
(38, 2, 18, 75),
(39, 2, 19, 81),
(40, 2, 20, 80),
(41, 2, 22, 74),
(42, 2, 23, 82),
(43, 2, 24, 84),
(44, 2, 25, 88),
(45, 2, 26, 88),
(46, 2, 27, 80),
(47, 2, 28, 83),
(48, 2, 29, 89),
(49, 3, 5, 81),
(50, 3, 6, 78),
(51, 3, 7, 75),
(52, 3, 8, 85),
(53, 3, 9, 91),
(54, 3, 10, 81),
(55, 3, 11, 76),
(56, 3, 12, 87),
(57, 3, 13, 79),
(58, 3, 14, 84),
(59, 3, 15, 860),
(60, 3, 16, 90),
(61, 3, 17, 84),
(62, 3, 18, 76),
(63, 3, 19, 81),
(64, 3, 20, 74),
(65, 3, 22, 76),
(66, 3, 23, 81),
(67, 3, 24, 83),
(68, 3, 25, 81),
(69, 3, 26, 81),
(70, 3, 27, 74),
(71, 3, 28, 81),
(72, 3, 29, 85),
(73, 4, 5, 10000),
(74, 4, 6, 10000),
(75, 4, 7, 0),
(76, 4, 8, 0),
(77, 4, 9, 10000),
(78, 4, 10, 0),
(79, 4, 11, 0),
(80, 4, 12, 10000),
(81, 4, 13, 0),
(82, 4, 14, 10000),
(83, 4, 15, 0),
(84, 4, 16, 0),
(85, 4, 17, 0),
(86, 4, 18, 0),
(87, 4, 19, 15000),
(88, 4, 20, 15000),
(89, 4, 22, 0),
(90, 4, 23, 15000),
(91, 4, 24, 0),
(92, 4, 25, 0),
(93, 4, 26, 0),
(94, 4, 27, 0),
(95, 4, 28, 0),
(96, 4, 29, 10000),
(97, 4, 5, 11000),
(98, 4, 6, 10000),
(99, 4, 7, 9200),
(100, 4, 8, 22000),
(101, 4, 9, 22000),
(102, 4, 10, 50000),
(103, 4, 11, 23000),
(104, 4, 12, 22000),
(105, 4, 13, 79000),
(106, 4, 14, 16000),
(107, 4, 15, 0),
(108, 4, 16, 300),
(109, 4, 17, 16000),
(110, 4, 18, 6500),
(111, 4, 19, 800),
(112, 4, 20, 800),
(113, 4, 22, 1100),
(114, 4, 23, 450),
(115, 4, 24, 110),
(116, 4, 25, 2400),
(117, 4, 26, 2100),
(118, 4, 27, 1600),
(119, 4, 28, 5200),
(120, 4, 29, 650);

-- --------------------------------------------------------

--
-- Table structure for table `produk_topsis`
--

CREATE TABLE `produk_topsis` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(20) NOT NULL,
  `detail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_topsis`
--

INSERT INTO `produk_topsis` (`id_produk`, `nama_produk`, `detail`) VALUES
(1, 'Galaxy', 'Jakarta'),
(2, 'Iphone', 'Bandung'),
(3, 'BB', 'Kudus'),
(4, 'Lumia', 'Demak');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL,
  `wisata_id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `komentar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`komentar_id`, `wisata_id`, `nama`, `komentar`, `created_at`) VALUES
(1, 5, 'ajos', 'isi komentar', '2019-08-05 13:13:38'),
(2, 5, 'Ajos', 'ajos komentar', '2019-08-05 13:22:43'),
(3, 8, 'Ristin', 'Coba komentar', '2019-08-05 14:40:23'),
(4, 8, 'Ivana', 'Ciba komentar 2', '2019-08-05 14:40:50'),
(5, 6, 'Aldi', 'Ini komentar Andi', '2019-08-05 14:43:33'),
(6, 9, 'Ajos', 'Teskomentar', '2019-08-06 06:02:12'),
(7, 9, 'Anonymous', 'test komentar lagi', '2019-08-06 06:04:14'),
(8, 9, 'Anonymous', 'abc', '2019-08-06 06:09:09'),
(9, 9, 'Anonymous', 'test lagi', '2019-08-06 06:09:25'),
(10, 9, 'Anonymous', 'halo ini ajos', '2019-08-06 06:10:56'),
(11, 9, 'Anonymous', 'Teskomentar', '2019-08-06 06:12:41'),
(12, 9, 'Anggi', 'komentar dari anggi', '2019-08-06 06:13:02'),
(13, 7, 'Gejrot', 'pasar lembang', '2019-08-06 06:16:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manage_daerah_wisata`
--

CREATE TABLE `tbl_manage_daerah_wisata` (
  `manage_daerah_id` int(11) NOT NULL,
  `nama_daerah` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manage_daerah_wisata`
--

INSERT INTO `tbl_manage_daerah_wisata` (`manage_daerah_id`, `nama_daerah`, `created_at`, `updated_at`, `is_active`) VALUES
(5, 'AGAM', '2019-07-31 09:52:06', '2019-07-31 02:52:06', 1),
(6, 'BUKITTINGGI', '2019-08-06 06:51:44', '2019-08-06 13:51:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manage_kategori_wisata`
--

CREATE TABLE `tbl_manage_kategori_wisata` (
  `manage_kategori_wisata_id` int(11) NOT NULL,
  `nama_kategori_wisata` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manage_kategori_wisata`
--

INSERT INTO `tbl_manage_kategori_wisata` (`manage_kategori_wisata_id`, `nama_kategori_wisata`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 'OBJEK-WISATA-BUATAN', '2019-08-05 03:18:02', '2019-07-31 02:38:59', 1),
(3, 'OBJEK-WISATA-ALAM', '2019-08-05 03:18:10', '2019-07-31 09:52:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wisata`
--

CREATE TABLE `tbl_wisata` (
  `wisata_id` int(11) NOT NULL,
  `daerah_wisata` varchar(256) DEFAULT NULL,
  `kategori_wisata` varchar(256) DEFAULT NULL,
  `nama_wisata` varchar(256) DEFAULT NULL,
  `pengunjung_wisata` int(11) DEFAULT NULL,
  `fasilitas_wisata` int(11) DEFAULT NULL,
  `pelayanan_wisata` int(11) DEFAULT NULL,
  `jarak_wisata` int(11) DEFAULT NULL,
  `harga_tiket_wisata` int(11) DEFAULT NULL,
  `deskripsi_wisata` text NOT NULL,
  `foto_wisata` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` int(1) NOT NULL DEFAULT 1,
  `score` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_wisata`
--

INSERT INTO `tbl_wisata` (`wisata_id`, `daerah_wisata`, `kategori_wisata`, `nama_wisata`, `pengunjung_wisata`, `fasilitas_wisata`, `pelayanan_wisata`, `jarak_wisata`, `harga_tiket_wisata`, `deskripsi_wisata`, `foto_wisata`, `created_at`, `updated_at`, `is_active`, `score`) VALUES
(5, 'AGAM', 'OBJEK-WISATA-BUATAN', 'Green House Lezatta', 41718, 80, 81, 11000, 10000, 'Kawasan ini merupakan wisata buatan yang memanfaatkan lahan pembibitan tanaman. Luas lahan kawasan ini pun hanya sekitar 2600 meter kubik. Walaupun, sudah menjadi objek wisata yang dikunjungi banyak wisatawan. Kawasan ini tetap mempertahankan pembudidayaan tanaman sayuran, buah, Tapak Dara, Vinca, dan juga anggrek.', '19 Green_House_Lezatta.jpg', '2019-08-06 07:13:42', '2019-07-18 14:24:55', 1, 0),
(6, 'AGAM', 'OBJEK-WISATA-BUATAN', 'Banto Royo', 76395, 81, 78, 10000, 10000, 'Banto Royo Agam ini berada di lokasi Jorong Kaluang Tapi, Nagari Koto Tengah, Kecamatan Tilatang Kamang, Kabupaten Agam, Sumatera Barat. Wisata ini baru diresmikan sejak tanggal 28 Oktober 2018 lalu oleh tokoh nasional asal Kapau yang menjadi inisiator, yakni Andi Sahrandi.', '18 Banto_Royo.jpg', '2019-08-06 07:14:52', '2019-07-31 09:53:17', 1, 0),
(7, 'AGAM', 'OBJEK-WISATA-BUATAN', 'Sajuta Janjang', 1672, 82, 75, 9200, 0, 'Objek wisata baru yang kini viral diberbagai media sosial, Sejuta Janjang dan plataran Pinus Lereng Singgalang yang berada di kanagarian Pakan Sinayan, Kecamatan Banuhampu, Kabupaten Agam (Sumbar) menjanjikan indahnya pesona alam.', '17 Sajuta_Janjang.jpg', '2019-08-06 07:05:59', '2019-08-05 03:48:52', 1, 0),
(8, 'AGAM', 'OBJEK-WISATA-BUATAN', 'Ambun Tanai', 42114, 89, 85, 22000, 0, 'Untuk melihat panorama Danau Maninjau dari ketinggian ternyata tidak hanya di Puncak Lawang saja, ternyata Kabupaten Agam masih memiliki obyek wisata lainnya dengan pemandangan yang serupa yaitu Ambun Tanai.', '16 Ambun_Tanai.jpg', '2019-08-06 07:01:45', '2019-08-05 03:49:31', 1, 0),
(9, 'AGAM', 'OBJEK-WISATA-BUATAN', 'Lawang Adventure Park', 27975, 93, 91, 22000, 10000, 'Lawang Adventure Park Agam atau bisa disebut Lawang Park merupakan taman wisata dataran tinggi di Sumatera Barat. Tempat wisata ini bisa menjadi salah satu list liburan untuk menikmati alam. Disuguhkan dengan Danau Maninjau dapat melengkapi kesan keindahan liburan di Sumatera Barat.', '15 Lawang_Adventure_Park.jpg', '2019-08-06 06:57:05', '2019-08-06 05:54:16', 1, 0),
(10, 'AGAM', 'OBJEK-WISATA-ALAM', 'Danau Maninjau', 97946, 86, 81, 50000, 0, 'DeskripsiDanau Maninjau adalah sebuah danau di kecamatan Tanjung Raya, Kabupaten Agam, provinsi Sumatra Barat, Indonesia. Danau ini terletak sekitar 140 kilometer sebelah utara Kota Padang, ibu kota Sumatra Barat, 36 kilometer dari Bukittinggi, 27 kilometer dari Lubuk Basung, ibu kota Kabupaten Agam.', '20 Danau_Maninjau.jpg', '2019-08-06 07:17:07', '2019-08-06 14:17:07', 1, 0),
(11, 'AGAM', 'OBJEK-WISATA-ALAM', 'Kelok 44', 678934, 85, 76, 23000, 0, 'Kelok 44 adalah kelokan yang terdapat di Kabupaten Agam, Sumatra Barat. Kelok 44 merupakan daerah perbukitan berada di di atas Danau Maninjau yang dilingkari jalan yang berkelok dilerengnya. Kelok 44 merupakan tikungan berjumlah 44 belokan. Itu sebabnya rute ini dinamakan Kelok Ampek Puluh Ampek.', '21 Kelok_44.jpg', '2019-08-06 07:20:11', '2019-08-06 14:20:11', 1, 0),
(12, 'AGAM', 'OBJEK-WISATA-ALAM', 'Puncak Lawang', 105784, 95, 87, 22000, 10000, 'Puncak Lawang merupakan nama suatu puncak dataran tinggi di Kabupaten Agam Sumatra Barat. Dari tempat ini, kita bisa meihat birunya Danau Maninjau. Puncak Lawang terletak di Kecamatan Matur, Kabupaten Agam, Sumatra Barat. Ini daerah puncak menuju Danau Maninjau.', '22 Puncak_Lawang.jpg', '2019-08-06 07:22:14', '2019-08-06 14:22:14', 1, 0),
(13, 'AGAM', 'OBJEK-WISATA-ALAM', 'Pantai Tiku', 69229, 88, 79, 79000, 0, 'Pantai Tiku dengan dua pulau di hadapanya ini, masih terlihat asri dengan pantai berpasir halus. detikTravel berkunjung ke sini saat liburan panjang Imlek kemarin. Setelah menempah 2 jam perjalanan dari Bukittinggi via Kelok 44, sampailah saya di Pantai Tiku pada pagi hari.', '23 Pantai_Tiku.jpg', '2019-08-06 07:25:52', '2019-08-06 14:25:52', 1, 0),
(14, 'AGAM', 'OBJEK-WISATA-ALAM', 'Tarusan Kamang', 79618, 87, 84, 16000, 10000, 'Tarusan Kamang terletak di Jorong Babukik dan Jorong Halalang, Nagari Kamang Mudiak, Kecamatan Kamang Magek, Kabupaten Agam, Sumatra Barat.[1] Danau ini terbilang unik karena hanya berisi air pada musim-musim tertentu.', '24 Tarusan_Kamang.jpg', '2019-08-06 07:43:12', '2019-08-06 14:35:34', 1, 0),
(15, 'BUKITTINGGI', 'OBJEK-WISATA-BUATAN', 'Jam Gadang', 738902, 91, 860, 0, 0, 'Jam Gadang adalah nama untuk menara jam yang terletak di pusat kota Bukittinggi, Sumatra Barat, Indonesia. Menara jam ini memiliki jam dengan ukuran besar di empat sisinya sehingga dinamakan Jam Gadang, sebutan bahasa Minangkabau yang berarti \"jam besar\".', '1 Jam_Gadang.jpg', '2019-08-06 07:51:53', '2019-08-06 14:51:53', 1, 0),
(16, 'BUKITTINGGI', 'OBJEK-WISATA-BUATAN', 'Istana Bung Hatta', 79390, 82, 90, 300, 0, 'Bangunan Cagar Budaya Istana Bung Hatta berciri gaya arsitektur kolonial, namun atap bangunan terbuat dari sirap. Ruangan yang terdapat di istana ini terdiri atas taman yang terdapat pada bagian halaman, ruang utama, ruang tamu, ruang rapat, dan kamar-kamar yang luas berjumlah 8, namun ada penambahan sehingga kamarnya berjumlah 12.', '2 Istana_Bung_Hatta.jpg', '2019-08-06 07:54:50', '2019-08-06 14:54:50', 1, 0),
(17, 'BUKITTINGGI', 'OBJEK-WISATA-BUATAN', 'Museum Rumah Kelahiran Bung Hatta', 10489, 80, 84, 16000, 0, 'Rumah Kelahiran Bung Hatta adalah rumah yang dibangun sebagai upaya mengenang dan memperoleh gambaran tempat Bung Hatta dilahirkan dan menghabiskan masa kecilnya sampi berusia 11 tahun. Selanjutnya Bung Hatta melanjutkan pendidikan menengahnya di Meer Uitgebred Lager Onderwijs (MULO) atau sekolah menengah di kota Padang.', '3 Museum_Rumah_Kelahiran_Bung_Hatta.jpg', '2019-08-06 07:57:20', '2019-08-06 14:57:20', 1, 0),
(18, 'BUKITTINGGI', 'OBJEK-WISATA-BUATAN', 'Janjang 1000', 653108, 75, 76, 6500, 0, 'Salah satu objek wisata alam yang terdapat ngarai ini adalah Janjang Saribu atau Tangga 1000. Janjang dalam bahasa Padang artinya adalah tangga. Saribu artinya seribu. Jadi Janjang Saribu berarti tangga yang jumlahnya seribu. Itu makna dari segi bahasa.', '4 Janjang_Saribu.jpg', '2019-08-06 10:41:09', '2019-08-06 15:09:42', 1, 0),
(19, 'BUKITTINGGI', 'OBJEK-WISATA-BUATAN', 'Benteng Fort de Kock', 52912, 81, 81, 800, 15000, 'Fort de Kock adalah benteng peninggalan Belanda yang berdiri di Kota Bukittinggi, Sumatra Barat, Indonesia. Benteng ini didirikan oleh Kapten Bouer pada tahun 1825 pada masa Hendrik Merkus de Kock sewaktu menjadi komandan Der Troepen dan Wakil Gubernur Jenderal Hindia Belanda, karena itulah benteng ini terkenal dengan nama Benteng Fort De Kock.', '5 Benteng_Fort_De_Kock.jpg', '2019-08-06 09:34:36', '2019-08-06 16:34:36', 1, 0),
(20, 'BUKITTINGGI', 'OBJEK-WISATA-BUATAN', 'Jembatan Limpapeh', 157830, 80, 74, 800, 15000, 'Jembatan Limpapeh adalah jembatan gantung di atas Jalan Ahmad Yani, Bukittinggi yang menghubungkan Taman Margasatwa dan Budaya Kinantan dengan Benteng Fort de Kock. Bentangan jembatan memiliki panjang 90 meter dan lebar 3,8 meter.', '6 Jembatan_Limpapeh.jpg', '2019-08-06 09:39:02', '2019-08-06 16:39:02', 1, 0),
(22, 'BUKITTINGGI', 'OBJEK-WISATA-BUATAN', 'Great Wall', 87434, 74, 76, 1100, 0, 'Janjang Koto Gadang di Kota Bukittinggi, Sumatera Barat disebut sebut menyerupai Great Wall di China, hanya saja ukurannya lebih kecil.\r\n\r\nPanjang tembok besar Janjang Koto Gadang hanya sekira satu kilometer, sementara The Great Wall panjangnya mencapai 21,196,18 kilometer. Jadi, bisa dibilang Janjang Koto Gadang ini miniature The Great Wall of China.', '7 Great_Wall.jpg', '2019-08-06 09:42:02', '2019-08-06 16:42:02', 1, 0),
(23, 'BUKITTINGGI', 'OBJEK-WISATA-BUATAN', 'Taman Margasatwa & Rumah Gadang Taman Kinantan Zoo', 161480, 82, 81, 450, 15000, 'Taman Margasatwa dan Budaya Kinantan atau lebih dikenal dengan nama Kebun Binatang Bukittinggi adalah salah satu kebun binatang di pulau Sumatra, yang terletak di atas Bukit Cubadak Bungkuak, Bukittinggi, Sumatra Barat, Indonesia.', '8 Taman_Margasatwa_dan_Rumah_Gadang_Taman_Kinantan_Zoo.jpg', '2019-08-06 09:46:08', '2019-08-06 16:46:08', 1, 0),
(24, 'BUKITTINGGI', 'OBJEK-WISATA-BUATAN', 'Taman Monumen Bung Hatta', 38945, 84, 83, 110, 0, 'Taman yang berada di samping gedung Istana Bung Hatta ini, didirikan pada tahun 2003. Pembuatan taman ini bertujuan untuk mengenang 100 tahun lahirnya Muhammad Hatta atau Bung Hatta. Pahlawan yang dikenal sebagai salah satu Tokoh Proklamator Indonesia ini lahir di Fort de Kock (sekarang Bukittinggi) pada 12 Agustus 1902.', '9 Taman_Monumen_Bung_Hatta.jpg', '2019-08-06 09:51:08', '2019-08-06 16:51:08', 1, 0),
(25, 'BUKITTINGGI', 'OBJEK-WISATA-BUATAN', 'Balai Kota Bukittinggi', 12348, 88, 81, 2400, 0, 'Bangunan Balai Kota Bukit Tinggi bukanlah bangunan termegah namun langgam arsitekturnya sangat menarik perhatian bagi para penikmat keindahan dan terutama para fotografer. Terletak di atas Bukit Gulai Bancah, dari jauh bangunan pusat pemerintahan di Bandar Bukit Tinggi sudah tampak. Bangunan ini berhadapan langsung dengan Gunuang Marapi dan Singgalang, dari halaman samping gedung ini kita dapat memandang lepas ke arah kedua gunung dua sejoli itu.', '10 Balai_Kota_Bukittinggi.jpg', '2019-08-06 10:04:39', '2019-08-06 16:56:14', 1, 0),
(26, 'BUKITTINGGI', 'OBJEK-WISATA-ALAM', 'Ngari Sianok', 367835, 88, 81, 2100, 0, 'Ngarai Sianok adalah sebuah lembah curam (jurang) yang terletak di perbatasan kota Bukittinggi, di kecamatan IV Koto, Kabupaten Agam, Sumatra Barat. Lembah ini memanjang dan berkelok sebagai garis batas kota dari selatan ngarai Koto Gadang sampai ke nagari Sianok Anam Suku, dan berakhir di kecamatan Palupuh. Ngarai Sianok memiliki pemandangan yang sangat indah dan juga menjadi salah satu objek wisata andalan provinsi.', '11 Ngarai_Sianok.jpg', '2019-08-06 10:03:31', '2019-08-06 17:03:31', 1, 0),
(27, 'BUKITTINGGI', 'OBJEK-WISATA-ALAM', 'Taman Ngarai Maaram', 45956, 80, 74, 1600, 0, 'Jembatan taman Ngarai Maaram yang terletak di kelurahan Kayu Kubu, Kecamatan Guguak Panjang, kota Bukittinggi, Sumatera Barat (Sumbar) kini hadir dengan tampilan baru usai dilakukan perbaikan oleh dinas Lingkungan Hidup setempat.', '12 Taman_Ngarai_Maaram.jpg', '2019-08-06 10:24:50', '2019-08-06 17:24:50', 1, 0),
(28, 'BUKITTINGGI', 'OBJEK-WISATA-ALAM', 'Taman Panorama Baru', 345905, 83, 81, 5200, 0, 'Taman Panorama Ngarai Sianok di Bukittinggi merupakan salah satu obyek wisata yang bisa dikatakan “wajib” dikunjungi saat liburan di kota kelahiran Bung Hatta ini.', '13 Taman_Panorama_Baru.jpg', '2019-08-06 10:30:28', '2019-08-06 17:30:28', 1, 0),
(29, 'BUKITTINGGI', 'OBJEK-WISATA-ALAM', 'Taman Panorama & Lobang Jepang', 56757, 89, 85, 650, 10000, 'Taman Panorama dan Lobang Jepang Bukittinggi berada di Jl. Panorama Bukittinggi, Sumatera Barat, hanya beberapa meter dari Pical Sikai, tempat kami sebelumnya berkunjung untuk sarapan pagi. Ada seorang pemandu wisata yang menemani kami berkeliling di Taman Panorama ini untuk melihat panorama Ngarai Sianok, yang ditulis di artikel terpisah, dan lalu turun ke Lobang Jepang.', '14 Taman_Panorama_Lobang_Jepang.jpg', '2019-08-07 10:06:28', '2019-08-06 17:33:41', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kriteria_topsis`
--
ALTER TABLE `kriteria_topsis`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `max_min_topsis`
--
ALTER TABLE `max_min_topsis`
  ADD PRIMARY KEY (`id_max_min`);

--
-- Indexes for table `nilai_topsis`
--
ALTER TABLE `nilai_topsis`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `produk_topsis`
--
ALTER TABLE `produk_topsis`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komentar_id`);

--
-- Indexes for table `tbl_manage_daerah_wisata`
--
ALTER TABLE `tbl_manage_daerah_wisata`
  ADD PRIMARY KEY (`manage_daerah_id`);

--
-- Indexes for table `tbl_manage_kategori_wisata`
--
ALTER TABLE `tbl_manage_kategori_wisata`
  ADD PRIMARY KEY (`manage_kategori_wisata_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  ADD PRIMARY KEY (`wisata_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kriteria_topsis`
--
ALTER TABLE `kriteria_topsis`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `max_min_topsis`
--
ALTER TABLE `max_min_topsis`
  MODIFY `id_max_min` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=981;

--
-- AUTO_INCREMENT for table `nilai_topsis`
--
ALTER TABLE `nilai_topsis`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `produk_topsis`
--
ALTER TABLE `produk_topsis`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_manage_daerah_wisata`
--
ALTER TABLE `tbl_manage_daerah_wisata`
  MODIFY `manage_daerah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_manage_kategori_wisata`
--
ALTER TABLE `tbl_manage_kategori_wisata`
  MODIFY `manage_kategori_wisata_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  MODIFY `wisata_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
