-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 06:54 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oska`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `divisi` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `words` varchar(100) NOT NULL,
  `akhirjabatan` date DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `name`, `divisi`, `dob`, `words`, `akhirjabatan`, `image`) VALUES
(1, 'Vincent Sutanto', 'Ketua Osis', '2022-11-04', 'tes', '2022-10-21', 'members63521664805db.png'),
(2, 'Stefanny', 'Wakil Ketua Osis', '2022-10-21', 'tes', '2022-10-21', 'members6352169c92997.png'),
(3, 'Marsela', 'Sekretaris ', '2022-10-21', 'tes', '2022-10-21', 'members635216ceb63de.png'),
(4, 'Evangeline Audrey', 'Bendahara ', '2022-10-21', 'tes', '2022-10-21', 'members6352170918048.png'),
(5, 'Shela Tifa Pramono', 'Humas', '2022-10-21', 'tes', '2022-10-21', 'members6352173eac090.png'),
(6, 'Lorencia M. P.', 'Kesenian', '2022-10-21', 'test', '2022-10-21', 'members6352179b65980.png'),
(7, 'Hayyallah F R', 'Kesenian', '2022-10-21', 'tes', '2022-10-21', 'members635218590515c.png'),
(8, 'Jessica Siemen', 'KWU ', '2022-10-21', 'tes', '2022-10-21', 'members635218f3104d1.png'),
(9, 'Ronald Ramlian', 'BIBEKA (IGSTS) ', '2022-10-21', 'tes', '2022-10-21', 'members63521923da869.png'),
(10, 'Michelle V L', 'BIBEKA ', '2022-10-21', 'tes', '2022-10-21', 'members635219572535f.png'),
(11, 'Vinca Oktavia', 'Bendahara ', '2022-10-21', 'tes', '2022-10-21', 'members635219bfa30b5.png'),
(12, 'Dinda', 'Humas', '2022-10-21', 'tes', '2022-10-21', 'members63521a0c712e6.png'),
(13, 'Neesya', 'Jurnalistik ', '2022-10-21', 'tes', '2022-10-21', 'members63521b4e3e8d0.png'),
(14, 'Jea altika ', 'Kesenian', '2022-10-21', 'tes', '2022-10-21', 'members63521bbf180ab.png'),
(15, 'Novi', 'KWU', '2022-10-21', 'tes', '2022-10-21', 'members63521bfe63eec.png'),
(16, 'Anggrelio', 'BIBEKA', '2022-10-21', 'tes', '2022-10-21', 'members63521c45efed2.png'),
(17, 'Sintia', 'Kesenian', '2022-10-21', 'tes', '2022-10-21', 'members63521c72ddd27.png'),
(18, 'Edward', 'Jurnalistik', '2022-10-21', 'tes', '2022-10-21', 'members63521cab134fa.png'),
(19, 'Rebeca', 'Jurnalistik', '2022-10-21', 'tes', '2022-10-21', 'members63521cd055c9c.png'),
(20, 'Kenneth', 'Humas', '2022-10-21', 'tes', '2022-10-21', 'members63521cf756b2c.png'),
(21, 'ferdi', 'Kesenian', '2022-10-21', 'tes', '2022-10-21', 'members63522004af99c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `title` varchar(65) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `title`, `tag`, `author`, `link`, `image`) VALUES
(1, 'Upacara HUT RI Sekolah Cinta K', 'Event', 'Rebecca', 'https://smk.cintakasihtzuchi.sch.id/upacara-hut-ri-smk-tzu-chi-2022/', 'artikel63513163bc60a.png'),
(2, 'Lomba 17 Agustus-An SMK Cinta ', 'Event', 'Rebecca', 'https://smk.cintakasihtzuchi.sch.id/lomba-17-agustus-smk-tzu-chi-2022/', 'artikel63521b6f2b34b.jpg'),
(3, 'Hari Pendidikan Nasional SMK C', 'Event', 'Vinsen Susanto', 'https://smk.cintakasihtzuchi.sch.id/hardiknas-smk-cinta-kasih-tzu-chi-2022/', 'artikel63521b9a2c2fb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `shortdesc` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id`, `name`, `shortdesc`, `image`) VALUES
(1, 'Kesenian', 'Membuat poster', 'divisi635613e64f42a.png'),
(2, 'Humas', 'Mengatur Konten Instagram', '1'),
(3, 'Bendahara', 'Mengatur Keuangan', '1'),
(4, 'Sekretaris', 'Membuat Recap Kerja Osis', '1'),
(5, 'Sesi Agama', 'Mengatur keagamaan di SMK', '1'),
(6, 'KWU', 'Mengatur dan mempromosikan penjualan snack  vegetarian', '1'),
(7, 'Jurnalistik', 'Membuat artikel kegiatan yang ada di smk', '1'),
(8, 'BIBEKA &amp; IGSTS', 'Mengatur konten', '1'),
(9, 'Dokumentasi', 'Mendokumentasikan setiap kegiatan', '1');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `titile` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemilu`
--

CREATE TABLE `pemilu` (
  `nik` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `timestamps` datetime NOT NULL,
  `vote` enum('1','2','3') NOT NULL,
  `changecount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemilu`
--

INSERT INTO `pemilu` (`nik`, `name`, `timestamps`, `vote`, `changecount`) VALUES
(2147483647, 'Vincent Sutanto', '2022-10-27 09:20:17', '3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `redirect` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`id`, `name`, `detail`, `redirect`, `image`) VALUES
(1, 'Bibeka', 'Program podcast OSKA yang membahas mengenai topik yang fun dan insightfull.', 'https://www.youtube.com/watch?v=IR5CWtknn_s&amp;list=PL4kZZK9BleOD5q2EhhUVmQWhGSmnnGDym', 'programkerja63521747801cb.png'),
(2, 'IGSTS', 'Program sharing pengalaman siswa/i SMK Cinta Kasih Tzu Chi, untuk bisa saling bercerita &amp; memotivasi.', 'https://www.instagram.com/osis_smktzuchi/reels/?hl=id', 'programkerja635218ccd22c1.png'),
(3, 'KWU OSKA', 'Penjualan snack vegetarian yang murah meriah.', 'https://www.instagram.com/stories/highlights/18074856229288907/?hl=id', 'programkerja6352193ab9132.png'),
(4, 'Instagram', 'Berbagi informasi, poster hari besar &amp; keagamaan, serta birthday reminder.', 'https://www.instagram.com/osis_smktzuchi/?hl=ids', 'programkerja63521976d1a6d.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'tes', '$2y$10$cl.BSJ5DUg0aSFms1EEoS.p2MhV7lt7ZCmXWWyjaIbGyFZNUSI5mS'),
(2, 'halo', '$2y$10$XoqppkduwkkjDpxHKtZK3OWVlIkEksTb0bp5umWiZaSshQQewrXUS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemilu`
--
ALTER TABLE `pemilu`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
