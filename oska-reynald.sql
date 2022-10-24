-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 05:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.29

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

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `title`, `tag`, `author`, `link`, `image`) VALUES
(1, 'Upacara HUT RI Sekolah Cinta K', 'Event', 'Rebecca', 'https://smk.cintakasihtzuchi.sch.id/upacara-hut-ri-smk-tzu-chi-2022/', 'artikel63521b39c8292.jpg'),
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
(1, 'Kesenian', 'Membuat poster', '1'),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
