-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 05:46 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbelibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` int(5) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `kategori_id` int(5) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `file_gambar` varchar(255) DEFAULT NULL,
  `tgl_insert` date NOT NULL,
  `tgl_update` date NOT NULL,
  `stok` int(5) NOT NULL,
  `stok_tersedia` int(5) NOT NULL,
  `sinopsis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id`, `isbn`, `judul`, `kategori_id`, `pengarang`, `penerbit`, `file_gambar`, `tgl_insert`, `tgl_update`, `stok`, `stok_tersedia`, `sinopsis`) VALUES
(13, '6521', 'Keajaiban Toko Kelontong', 2, 'Keigo Higashino', 'Won', 'keajaiban-toko-kelontong.jpg', '2023-01-04', '2023-04-16', 10, 3, 'Novel ini dimulai dengan kisah tiga pemuda berandal bernama Kohei, Shota, dan Atsuya yang hendak lari dari kejaran dan pencarian polisi.'),
(14, '2345', 'Siapa yang Datang ke Pemakaman', 2, 'Kim Sang Hyun', 'DK', 'Siapa-yang-Datang-ke-Pemakamanku-Saat-Aku-Mati-Nanti.jpg', '2022-06-07', '2023-04-15', 10, 7, 'Di dalam buku ini, terdapat berbagai macam topik yang membahas tentang kehidupan sehari-hari seorang manusia. '),
(15, '2365', 'Nyaman Tanpa Beban', 1, 'Kim Su Hyun', 'Cheol', 'Nyaman-Tanpa-Beban.jpg', '2023-03-09', '2023-04-16', 2, 0, 'Buku yang satu ini mengajarkan kepada para pembacanya untuk tetap hidup sebagai diri kita seutuhnya tanpa perlu terlalu memaksakan diri.'),
(16, '9664', 'Critical Eleven', 3, 'Ika Natassa', 'Gyu', 'Critical-Eleven.jpg', '2023-03-27', '2023-04-23', 7, 3, 'Istilah critical eleven, sebelas menit paling kritis di dalam pesawat—tiga menit setelah take off dan delapan menit sebelum landing.'),
(17, '8761', 'Percy Jackson : The Chalice Of', 1, 'Rick Riordan', 'Boo', 'percy-jackson-the-chalice-of-the-god.jpg', '2023-02-09', '2023-04-23', 5, 2, 'Setelah menyelamatkan dunia berkali-kali, Percy Jackson berharap bisa menjalani tahun senior yang normal. '),
(18, '0987', 'Bumi', 1, 'Tereliye', 'Han', 'bumi.jpg', '2023-01-10', '2023-04-30', 10, 9, 'Novel ini mengisahkan tentang petualangan 3 remaja yang berusia 15 tahun bernama Raib, Ali dan Seli yang memiliki kekuatan khusus.'),
(19, '7362', 'Sherlock Holmes', 3, 'Sir Arthur Conan', 'Joshua', 'sherlock-holmes.jpg', '2022-05-05', '2023-04-30', 4, 2, 'Sherlock Holmes adalah orang yang sangat pintar yang memakai fakta-fakta kecil untuk menyelesaikan misteri-misteri besar.'),
(20, '8762', 'Jingga dan Senja', 3, 'Esti Kinasih', 'Hosh', 'jingga_dan_senja.jpg', '2022-07-13', '2023-04-29', 5, 0, 'Jingga dan Senja diterbitkan pertama kali pada tahun 2010, menceritakan kehidupan remaja SMA bernama Tari dan Ari.'),
(21, '3292', 'The Song of Achilles', 1, 'Madeline Miller', 'Vernon', 'The_Song_of_Achilles.jpg', '2023-01-15', '2023-04-30', 3, 2, 'Patroclus, seorang pangeran muda yang kikuk, diasingkan ke istana Raja Peleus dan putranya yang sempurna, Achilles.');

-- --------------------------------------------------------

--
-- Table structure for table `buku_audio`
--

CREATE TABLE `buku_audio` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `sample` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku_audio`
--

INSERT INTO `buku_audio` (`id`, `judul`, `penulis`, `sinopsis`, `gambar`, `sample`) VALUES
(1, 'Never Split the Difference: Negotiating As If Your Life Depended On It', 'Chris Voss and Tahl Raz', 'Seorang mantan negosiator sandera internasional untuk FBI menawarkan pendekatan baru yang telah teruji lapangan untuk negosiasi berisiko tinggi—baik di ruang rapat maupun di rumah.', 'never-split-the-different.jpeg', 'Never-split-the-difference-by-Chris-Voss.mp3'),
(2, 'Building a StoryBrand: Clarify Your Message So Customers Will Listen', 'By Donald Miller', 'Proses StoryBrand Donald Miller adalah solusi yang terbukti untuk perjuangan yang dihadapi para pemimpin bisnis ketika berbicara tentang bisnis mereka. Metode revolusioner untuk terhubung dengan pelanggan ini memberi pembaca keunggulan kompetitif tertingg', 'Building-a-StoryBrand.png', 'Building-a-StoryBrand-by-Donald-Miller.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`) VALUES
(1, 'Fantasi'),
(2, 'Horror'),
(3, 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(5) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idbuku` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_batas_kembali` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `total_denda` int(10) DEFAULT NULL,
  `bukti_trf` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `iduser`, `idbuku`, `tgl_pinjam`, `tgl_batas_kembali`, `tgl_kembali`, `total_denda`, `bukti_trf`) VALUES
(114, 9, 18, '2023-05-04', '2023-05-11', '2023-05-04', 0, NULL),
(115, 9, 17, '2023-05-04', '2023-05-11', '2023-05-04', 0, NULL),
(116, 9, 14, '2023-05-04', '2023-05-11', '2023-05-04', 0, NULL),
(117, 9, 15, '2023-05-04', '2023-05-11', '2023-05-04', 0, NULL),
(118, 9, 17, '2023-05-04', '2023-05-02', '2023-05-05', 2000, '840675739_home.png'),
(119, 9, 13, '2023-05-04', '2023-05-11', '2023-05-06', 0, NULL),
(120, 9, 14, '2023-05-04', '2023-05-11', '2023-05-06', 0, NULL),
(121, 9, 16, '2023-05-04', '2023-05-01', '2023-05-06', NULL, NULL),
(122, 9, 18, '2023-05-04', '2023-05-11', '2023-05-04', 0, NULL),
(123, 9, 18, '2023-05-04', '2023-05-11', '2023-05-04', 0, NULL),
(124, 9, 18, '2023-05-04', '2023-05-11', '2023-05-04', 0, NULL),
(125, 9, 18, '2023-05-04', '2023-05-11', '2023-05-04', 0, NULL),
(126, 9, 18, '2023-05-04', '2023-05-11', '2023-05-04', 0, NULL),
(127, 9, 15, '2023-05-04', '2023-05-11', '2023-05-05', 0, NULL),
(128, 14, 19, '2023-04-27', '2023-05-01', '2023-05-06', NULL, NULL),
(129, 14, 17, '2023-04-04', '2023-05-11', '2023-05-06', NULL, NULL),
(130, 14, 13, '2023-05-04', '2023-05-11', '2023-05-05', 0, NULL),
(131, 14, 18, '2023-05-04', '2023-05-11', '2023-05-06', NULL, NULL),
(132, 14, 14, '2023-05-04', '2023-05-11', '2023-05-06', NULL, NULL),
(133, 9, 15, '2023-05-06', '2023-05-13', '2023-05-06', 0, NULL),
(135, 9, 14, '2023-04-21', '2023-04-28', '2023-05-08', 10000, '302260096_home.png'),
(136, 9, 19, '2023-05-06', '2023-05-13', '2023-05-06', 0, NULL),
(137, 9, 20, '2023-05-06', '2023-05-13', '2023-05-06', NULL, NULL),
(138, 11, 13, '2023-05-06', '2023-05-13', NULL, NULL, NULL),
(139, 11, 16, '2023-05-06', '2023-05-13', NULL, NULL, NULL),
(140, 11, 19, '2023-05-06', '2023-05-13', NULL, NULL, NULL),
(141, 15, 19, '2023-05-06', '2023-05-13', NULL, NULL, NULL),
(142, 15, 20, '2023-05-06', '2023-05-13', NULL, NULL, NULL),
(143, 14, 20, '2023-05-06', '2023-05-13', NULL, NULL, NULL),
(144, 14, 21, '2023-05-06', '2023-05-13', NULL, NULL, NULL),
(145, 8, 16, '2023-05-06', '2023-05-13', NULL, NULL, NULL),
(146, 8, 14, '2023-05-06', '2023-05-13', NULL, NULL, NULL),
(147, 8, 13, '2023-05-06', '2023-05-13', NULL, NULL, NULL),
(148, 13, 20, '2023-05-06', '2023-05-13', '2023-05-07', 0, NULL),
(149, 12, 20, '2023-05-06', '2023-05-13', NULL, NULL, NULL),
(150, 17, 20, '2023-05-06', '2023-05-13', NULL, NULL, NULL),
(151, 9, 14, '2023-05-06', '2023-05-13', '2023-05-06', 0, NULL),
(153, 13, 15, '2023-05-07', '2023-05-14', '2023-05-07', 0, NULL),
(154, 13, 20, '2023-05-07', '2023-05-14', NULL, NULL, NULL),
(155, 9, 15, '2023-05-08', '2023-05-15', '2023-05-08', 0, NULL),
(163, 19, 17, '2023-07-02', '2023-07-09', '2023-07-02', 0, NULL),
(164, 19, 14, '2023-07-02', '2023-07-09', '2023-07-02', 0, NULL),
(165, 19, 19, '2023-07-02', '2023-07-09', '2023-07-03', 0, NULL),
(166, 19, 16, '2023-05-29', '2023-06-06', '2023-07-05', 29, NULL),
(167, 19, 15, '2023-07-03', '2023-07-10', '2023-07-03', 0, NULL),
(168, 20, 15, '2023-07-03', '2023-07-10', '2023-07-03', 0, NULL),
(169, 20, 17, '2023-06-01', '2023-06-07', NULL, 26, NULL),
(171, 20, 14, '2023-07-03', '2023-07-10', '2023-07-03', 0, NULL),
(172, 20, 19, '2023-07-03', '2023-07-10', NULL, NULL, NULL),
(173, 19, 15, '2023-07-04', '2023-07-11', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `idpetugas` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`idpetugas`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `email`) VALUES
(8, 'anggi', 'anggi', 'anggi', 'anggi@gmail.com'),
(9, 'valen', 'valen', 'valen', 'valen@gmail.com'),
(11, 'cia', 'cia', 'cia', 'cia@gmail.com'),
(12, 'chan', 'chan', 'chan', 'chan@gmail.com'),
(13, 'joan', 'joan', 'joan', 'joan@gmail.com'),
(14, 'joni', 'joni123', 'joni', 'joni@gmail.com'),
(15, 'yuna', 'yuna', 'yuna', 'yuna@gmail.com'),
(17, 'juni', 'jn123', 'jun', 'jun@gmail.com'),
(18, 'lalisa', 'lalisa', 'lisa', 'lisa@gmail.com'),
(19, 'bbh', '$2y$10$Zfi5CZj6Ra/9YWpAhlDO6O2XZXhzl6Hhrg0QZXbGUAhoFsOnyyZxW', 'baekhyun', 'bbh@bh.bh'),
(20, 'valen', '$2y$10$0M.yDKFLjAf/gva80XTpi.HPN49c3qFcOFoM5Acrnc6izzahykahO', 'valen', 'margaretavalencia16@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Buku_Kategori` (`kategori_id`);

--
-- Indexes for table `buku_audio`
--
ALTER TABLE `buku_audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Peminjaman_User` (`iduser`),
  ADD KEY `FK_Peminjaman_Buku` (`idbuku`) USING BTREE;

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`idpetugas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `idpetugas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bukus`
--
ALTER TABLE `bukus`
  ADD CONSTRAINT `FK_Buku_Kategori` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `FK_Peminjaman_Buku` FOREIGN KEY (`idbuku`) REFERENCES `bukus` (`id`),
  ADD CONSTRAINT `FK_Peminjaman_User` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
