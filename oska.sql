-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 08:34 AM
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
(8, 'BIBEKA', 'Mengatur konten', '1'),
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
  `timestamps` datetime DEFAULT NULL,
  `vote` enum('1','2','3') DEFAULT NULL,
  `changecount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemilu`
--

INSERT INTO `pemilu` (`nik`, `name`, `timestamps`, `vote`, `changecount`) VALUES
(1239, 'Ariel Susantio', NULL, NULL, NULL),
(1270, 'Alvin Predinata', NULL, NULL, NULL),
(1271, 'Angelanda', NULL, NULL, NULL),
(1272, 'Annisa Safitri', NULL, NULL, NULL),
(1273, 'Arnold Rafael Tanamal', NULL, NULL, NULL),
(1274, 'Bella Tanara', NULL, NULL, NULL),
(1275, 'Caren Vidia Estevan', NULL, NULL, NULL),
(1276, 'Caroline Homan', NULL, NULL, NULL),
(1277, 'Dennis Aaron', NULL, NULL, NULL),
(1278, 'Dian Natasha', NULL, NULL, NULL),
(1279, 'Dimas Wiguna Saputra', NULL, NULL, NULL),
(1280, 'Elysa Ummul Azizah', NULL, NULL, NULL),
(1282, 'Friska Aurelia', NULL, NULL, NULL),
(1283, 'Friskila Abelia Sitompul', NULL, NULL, NULL),
(1284, 'Hayyallah Fajarrani Ramora', NULL, NULL, NULL),
(1286, 'Jessica Siemen', NULL, NULL, NULL),
(1287, 'Jesslyn Ariella', NULL, NULL, NULL),
(1288, 'Kerin Trivena', NULL, NULL, NULL),
(1289, 'Kevin Leo Dhammiko Saputra', NULL, NULL, NULL),
(1290, 'Kezia Juliana Devinca', NULL, NULL, NULL),
(1291, 'Khessia Arteja', NULL, NULL, NULL),
(1292, 'Lorencia Meiliana Putra', NULL, NULL, NULL),
(1293, 'Marcellino', NULL, NULL, NULL),
(1294, 'Marsela', NULL, NULL, NULL),
(1295, 'Marvin Luckianto', NULL, NULL, NULL),
(1296, 'Nadia Aprilia', NULL, NULL, NULL),
(1297, 'Nancy Angelina', NULL, NULL, NULL),
(1298, 'Riska Amelia', NULL, NULL, NULL),
(1299, 'Ronald Ramlian', NULL, NULL, NULL),
(1300, 'Sri Kusnaeni', NULL, NULL, NULL),
(1301, 'Stefanny', NULL, NULL, NULL),
(1302, 'Styven Edricsen', NULL, NULL, NULL),
(1303, 'Tan Meyli', NULL, NULL, NULL),
(1304, 'Vinson Afin Herzavian', NULL, NULL, NULL),
(1305, 'Alexa Vega Aurellya', NULL, NULL, NULL),
(1306, 'Amanda Yuliarti', NULL, NULL, NULL),
(1307, 'Amelia Putri Renita', NULL, NULL, NULL),
(1308, 'Bismillah Haidari', NULL, NULL, NULL),
(1309, 'Cherika Permata Avi', NULL, NULL, NULL),
(1310, 'Della Safitri', NULL, NULL, NULL),
(1311, 'Devano Randhy Wijaya', NULL, NULL, NULL),
(1312, 'Devi Lestari', NULL, NULL, NULL),
(1313, 'Dewi Sartika', NULL, NULL, NULL),
(1314, 'Endin Fahrudin', NULL, NULL, NULL),
(1315, 'Firman Nurzaman', NULL, NULL, NULL),
(1316, 'Gibran Ramadan', NULL, NULL, NULL),
(1318, 'Indra Wijaya', NULL, NULL, NULL),
(1319, 'Innayahtun', NULL, NULL, NULL),
(1320, 'Islami Jibril Khadafi Alfath', NULL, NULL, NULL),
(1321, 'Makbul Riyadi', NULL, NULL, NULL),
(1322, 'Maria Angelia', NULL, NULL, NULL),
(1323, 'Mohammad Saiful Anwar', NULL, NULL, NULL),
(1324, 'Muammar Khadafi', NULL, NULL, NULL),
(1325, 'Muhamad Nazar', NULL, NULL, NULL),
(1326, 'Muhammad Kevin Al Ichsan', NULL, NULL, NULL),
(1327, 'Nasya Fatimatuz Zahra', NULL, NULL, NULL),
(1328, 'Pingkan Osellita Putri', NULL, NULL, NULL),
(1329, 'Pradeas Amelia Vega', NULL, NULL, NULL),
(1330, 'Putri Salma', NULL, NULL, NULL),
(1331, 'Renanda Deva Fadillah', NULL, NULL, NULL),
(1332, 'Rendhi Ardiansyah', NULL, NULL, NULL),
(1333, 'Sari Patika', NULL, NULL, NULL),
(1334, 'Selvie Dwiyanti', NULL, NULL, NULL),
(1335, 'Sherly Novie Liana', NULL, NULL, NULL),
(1336, 'Siti Amelia', NULL, NULL, NULL),
(1337, 'Siti Mardhiyah', NULL, NULL, NULL),
(1338, 'Tria Ananta', NULL, NULL, NULL),
(1339, 'Zecika Fitriyani', NULL, NULL, NULL),
(1340, 'Andi Hiangkidinata Mongkareng', NULL, NULL, NULL),
(1341, 'Ardelia Jocelyn', NULL, NULL, NULL),
(1342, 'Cecilya', NULL, NULL, NULL),
(1343, 'Charisse Evania Tansir', NULL, NULL, NULL),
(1344, 'David Garcia Saragih', NULL, NULL, NULL),
(1345, 'Ellisyia Stevanie', NULL, NULL, NULL),
(1346, 'Evangeline Audrey Kartawahyudi', NULL, NULL, NULL),
(1347, 'Felicia Natasha Pratama', NULL, NULL, NULL),
(1348, 'Ferdinan', NULL, NULL, NULL),
(1349, 'Hendy Tandika', NULL, NULL, NULL),
(1350, 'James Wilson Lie', NULL, NULL, NULL),
(1351, 'Janssen Addison', NULL, NULL, NULL),
(1352, 'Jap Zavier Juvenilh', NULL, NULL, NULL),
(1353, 'Jessica Christianti', NULL, NULL, NULL),
(1354, 'Jonathan Benaya Suwilis', NULL, NULL, NULL),
(1355, 'Keila Marie Setiawan', NULL, NULL, NULL),
(1356, 'Leonardo Setiawan', NULL, NULL, NULL),
(1357, 'Michelle Vanezya Lim', NULL, NULL, NULL),
(1358, 'Neisha Falensya', NULL, NULL, NULL),
(1359, 'Nico Andreas', NULL, NULL, NULL),
(1360, 'Reynald Fedhericco', NULL, NULL, NULL),
(1361, 'Richard Lee', NULL, NULL, NULL),
(1362, 'Richie Chuandrawinata', NULL, NULL, NULL),
(1363, 'Salim Raihan', NULL, NULL, NULL),
(1364, 'Shela Tifa Pramono', NULL, NULL, NULL),
(1365, 'Steaven', NULL, NULL, NULL),
(1366, 'Steven Sebastian', NULL, NULL, NULL),
(1367, 'Timotius Avaro Andrelo Putra', NULL, NULL, NULL),
(1368, 'Vincent Sutanto', NULL, NULL, NULL),
(1369, 'William', NULL, NULL, NULL),
(1370, 'Yehezkiel Natanael', NULL, NULL, NULL),
(1371, 'Yoga Hose Tambunan', NULL, NULL, NULL),
(1372, 'Andrew', NULL, NULL, NULL),
(1373, 'Arbian Kamil', NULL, NULL, NULL),
(1374, 'Audrey Valencia Wijaya', NULL, NULL, NULL),
(1375, 'Ayu Sutira', NULL, NULL, NULL),
(1376, 'Azerrin Putri Patricia', NULL, NULL, NULL),
(1378, 'Chandra Wijaya', NULL, NULL, NULL),
(1380, 'Danniel', NULL, NULL, NULL),
(1381, 'Devon Audric Sutrisna', NULL, NULL, NULL),
(1382, 'Dicky Wibiansyah', NULL, NULL, NULL),
(1383, 'Evelyn Amanda', NULL, NULL, NULL),
(1385, 'Hanson Villeneuve', NULL, NULL, NULL),
(1386, 'Henry Salim', NULL, NULL, NULL),
(1387, 'Ivan Kenedy', NULL, NULL, NULL),
(1388, 'Iyan Rosyadi', NULL, NULL, NULL),
(1389, 'Jessica Wijaya', NULL, NULL, NULL),
(1390, 'Jhezarie Polanda Damanis', NULL, NULL, NULL),
(1391, 'Jonathan Antonius', NULL, NULL, NULL),
(1392, 'Julius Ferdinand', NULL, NULL, NULL),
(1393, 'Koeserah Esmild', NULL, NULL, NULL),
(1394, 'Lucky Jhonnathan Kawihardja', NULL, NULL, NULL),
(1395, 'Maharani Aprilia', NULL, NULL, NULL),
(1396, 'Michael Pohan', NULL, NULL, NULL),
(1397, 'Nicholas Susanto', NULL, NULL, NULL),
(1398, 'Ryu Nathan Nicholas', NULL, NULL, NULL),
(1399, 'Steven Widjaja', NULL, NULL, NULL),
(1401, 'Tommy Yogia', NULL, NULL, NULL),
(1402, 'Yuliana', NULL, NULL, NULL),
(1403, 'Agriandra Saputra Halim', NULL, NULL, NULL),
(1404, 'Andi Gautama', NULL, NULL, NULL),
(1405, 'Andreas Tulus Prasaja', NULL, NULL, NULL),
(1406, 'Anggrelieo Alexander Gehral', NULL, NULL, NULL),
(1407, 'Ashley Laurent', NULL, NULL, NULL),
(1408, 'Cindy Vilencia', NULL, NULL, NULL),
(1409, 'Daniel Kevin Antonio', NULL, NULL, NULL),
(1410, 'Deni Davidsen', NULL, NULL, NULL),
(1411, 'Dzakiy Achmadhani', NULL, NULL, NULL),
(1412, 'Fabio Francisco', NULL, NULL, NULL),
(1413, 'Ferdinand', NULL, NULL, NULL),
(1414, 'Gabriel Malvin Pazia', NULL, NULL, NULL),
(1415, 'Jansen Fourrantine', NULL, NULL, NULL),
(1416, 'Jessica Hansen', NULL, NULL, NULL),
(1417, 'Joseph Joshua Anggita', NULL, NULL, NULL),
(1418, 'Josevan', NULL, NULL, NULL),
(1419, 'Kenneth Davis', NULL, NULL, NULL),
(1420, 'Lim Vanya Helen', NULL, NULL, NULL),
(1421, 'Louis Alvin Sim', NULL, NULL, NULL),
(1423, 'Melvin Timothy', NULL, NULL, NULL),
(1424, 'Morgan Immanuel Nainggolan', NULL, NULL, NULL),
(1425, 'Nabila Apriyani', NULL, NULL, NULL),
(1426, 'Natalie Gunawan', NULL, NULL, NULL),
(1427, 'Naufal Rabbani', NULL, NULL, NULL),
(1428, 'Neo Jeremia Yandra Kesuma', NULL, NULL, NULL),
(1429, 'Okiy Tan', NULL, NULL, NULL),
(1430, 'Rebecca Jolynn Tanu', NULL, NULL, NULL),
(1431, 'Shinichi Wijaya', NULL, NULL, NULL),
(1432, 'Stanley Valencia', NULL, NULL, NULL),
(1433, 'Steven Luk', NULL, NULL, NULL),
(1434, 'Toppey Stepanus', NULL, NULL, NULL),
(1435, 'Vincent', NULL, NULL, NULL),
(1436, 'Vonilia Octavia', NULL, NULL, NULL),
(1437, 'Yehezkhiel Michael Mulyadi', NULL, NULL, NULL),
(1438, 'Yulio Ricardo', NULL, NULL, NULL),
(1439, 'Abimael Tritajaya', NULL, NULL, NULL),
(1440, 'Alexander William', NULL, NULL, NULL),
(1441, 'Alvin Sanjaya', NULL, NULL, NULL),
(1442, 'Angelin Aristania', NULL, NULL, NULL),
(1443, 'Anthony Yehezkiel Rusmin', NULL, NULL, NULL),
(1444, 'Calvin Johannes Hu', NULL, NULL, NULL),
(1445, 'Clara Imanuel', NULL, NULL, NULL),
(1446, 'Dinda Natalia', NULL, NULL, NULL),
(1447, 'Dionisius Farrell', NULL, NULL, NULL),
(1448, 'Edward Givian Hulbert', NULL, NULL, NULL),
(1449, 'Fahmi Ramadhan', NULL, NULL, NULL),
(1450, 'Fernando Ananda Eka Surya', NULL, NULL, NULL),
(1451, 'Gabriello Stevanus', NULL, NULL, NULL),
(1452, 'Hafidz Naufal A', NULL, NULL, NULL),
(1453, 'Jesen Saputra', NULL, NULL, NULL),
(1454, 'Jessica', NULL, NULL, NULL),
(1455, 'Jonathan Aurelius Sanjaya', NULL, NULL, NULL),
(1456, 'Jovian Limtanaya', NULL, NULL, NULL),
(1457, 'Katlina Ilieva Vinat', NULL, NULL, NULL),
(1458, 'Kelly Apriliyanoes', NULL, NULL, NULL),
(1459, 'Kiran Sevilen', NULL, NULL, NULL),
(1460, 'Marcell Bee', NULL, NULL, NULL),
(1461, 'Mario Benedict', NULL, NULL, NULL),
(1463, 'Moses Julian', NULL, NULL, NULL),
(1464, 'Nelson Manuel Pema', NULL, NULL, NULL),
(1465, 'Ravy Saksena Agus Murfiyan', NULL, NULL, NULL),
(1466, 'Ricardo Moreno Lanes', NULL, NULL, NULL),
(1467, 'Sarah Maycella Nabhania', NULL, NULL, NULL),
(1468, 'Sergio Futanto', NULL, NULL, NULL),
(1469, 'Stephen Wijaya', NULL, NULL, NULL),
(1470, 'Surya Lasman', NULL, NULL, NULL),
(1471, 'The Hebert Favian', NULL, NULL, NULL),
(1472, 'Wijaya Putra', NULL, NULL, NULL),
(1473, 'Willy Christian', NULL, NULL, NULL),
(1474, 'Zhachlorus Setiawan', NULL, NULL, NULL),
(1475, 'Aditya', NULL, NULL, NULL),
(1476, 'Aie Cu', NULL, NULL, NULL),
(1477, 'Angela Marhani', NULL, NULL, NULL),
(1478, 'Bella Haryoto Wijaya', NULL, NULL, NULL),
(1479, 'Callista Valencia', NULL, NULL, NULL),
(1480, 'Callysta Jomey Steven', NULL, NULL, NULL),
(1481, 'Casson Phang', NULL, NULL, NULL),
(1482, 'Chantika Purnama Sidharta', NULL, NULL, NULL),
(1483, 'Ciam, Julia Tanesha', NULL, NULL, NULL),
(1484, 'Fedelia Trixie Fernanda', NULL, NULL, NULL),
(1485, 'Felicia Trixie Fernanda', NULL, NULL, NULL),
(1486, 'Gebrie Jelya Wijaya', NULL, NULL, NULL),
(1487, 'Gladys Antonietta', NULL, NULL, NULL),
(1488, 'Gwendi Wijaya', NULL, NULL, NULL),
(1489, 'Jea Altika', NULL, NULL, NULL),
(1490, 'Jessica Angeline', NULL, NULL, NULL),
(1491, 'Jessika', NULL, NULL, NULL),
(1492, 'Joice Evellyn', NULL, NULL, NULL),
(1493, 'Kevin Aditya Santoso', NULL, NULL, NULL),
(1494, 'Lady Virginia Putri Tanaka', NULL, NULL, NULL),
(1495, 'Melody Natashia Sandiputri', NULL, NULL, NULL),
(1496, 'Michelle Rianata', NULL, NULL, NULL),
(1497, 'Michy Maysha Risaputra', NULL, NULL, NULL),
(1498, 'Nathania Devina Permana', NULL, NULL, NULL),
(1499, 'Neesya Abigael Tanumihardja', NULL, NULL, NULL),
(1500, 'Priskila Gladys Iskandar', NULL, NULL, NULL),
(1501, 'Rizqi Darmawan', NULL, NULL, NULL),
(1502, 'Sherine Litya Nixon Limsheldon', NULL, NULL, NULL),
(1503, 'Stellavia Isabellini Gani', NULL, NULL, NULL),
(1504, 'Stevani Jeslyn Wilberd', NULL, NULL, NULL),
(1505, 'Veren Eka Wijaya', NULL, NULL, NULL),
(1506, 'Vinca Oktavia', NULL, NULL, NULL),
(1507, 'Vincent Oktavio', NULL, NULL, NULL),
(1508, 'Wayan Rama Wijaya', NULL, NULL, NULL),
(1509, 'William Vincent', NULL, NULL, NULL),
(1510, 'Yoana Andini Supangat', NULL, NULL, NULL),
(1511, 'Aditia Eka Syaeputra', NULL, NULL, NULL),
(1512, 'Agus Hariyanto', NULL, NULL, NULL),
(1513, 'Airen Natalia', NULL, NULL, NULL),
(1514, 'Aprilla Dwi Cahyani', NULL, NULL, NULL),
(1515, 'Araya Muhammad Iqbal', NULL, NULL, NULL),
(1516, 'Audrelya Vananda', NULL, NULL, NULL),
(1517, 'Bayu Dwi Saputra', NULL, NULL, NULL),
(1519, 'Dhelyah Putri', NULL, NULL, NULL),
(1520, 'Dicky Pranata', NULL, NULL, NULL),
(1521, 'Didit Aditia', NULL, NULL, NULL),
(1522, 'Franco Baresi', NULL, NULL, NULL),
(1523, 'Gabriella Tannia', NULL, NULL, NULL),
(1524, 'Gressilia Eka Sari', NULL, NULL, NULL),
(1525, 'Heriyanto', NULL, NULL, NULL),
(1526, 'Jhovi Samsu', NULL, NULL, NULL),
(1527, 'Kasappa Lotandy', NULL, NULL, NULL),
(1528, 'Lani Aprilia', NULL, NULL, NULL),
(1529, 'Maribel', NULL, NULL, NULL),
(1530, 'Meishia', NULL, NULL, NULL),
(1531, 'Miguel Juventius Immanuel Wadu Lobo', NULL, NULL, NULL),
(1532, 'Mohamad Nurrohim', NULL, NULL, NULL),
(1533, 'Nasywa Putri Fauziyah', NULL, NULL, NULL),
(1534, 'Nicholas Wijaya', NULL, NULL, NULL),
(1535, 'Novi Windiani', NULL, NULL, NULL),
(1536, 'Rahma Zahra Washilah', NULL, NULL, NULL),
(1537, 'Satria Gatari Putra', NULL, NULL, NULL),
(1538, 'Silvi Nur Widya', NULL, NULL, NULL),
(1539, 'Sintia Putri Ramanda', NULL, NULL, NULL),
(1540, 'Theresia Indah Octavia', NULL, NULL, NULL),
(1541, 'Trisna', NULL, NULL, NULL),
(1542, 'Valencia Adeline Sonata', NULL, NULL, NULL),
(1543, 'Victor Caiyo Putra', NULL, NULL, NULL),
(1544, 'Vidya Tirta Lingga', NULL, NULL, NULL),
(1545, 'Wienli Kenkodinata Mongkareng', NULL, NULL, NULL),
(1546, 'Nur Alisah', NULL, NULL, NULL),
(1547, 'Aprila Jessica', NULL, NULL, NULL),
(1548, 'Candice Angela Suwilis', NULL, NULL, NULL),
(1549, 'Christian Novan', NULL, NULL, NULL),
(1550, 'Crystallia Clairine Varrencia Nathania Priscillivi', NULL, NULL, NULL),
(1551, 'Darren Aristo Shakeanu', NULL, NULL, NULL),
(1552, 'Darren Richie Natael', NULL, NULL, NULL),
(1553, 'Darren Wijaya', NULL, NULL, NULL),
(1554, 'Delbert Theo Sanomale', NULL, NULL, NULL),
(1555, 'Delvino Clarent Adiwinata', NULL, NULL, NULL),
(1556, 'Destiani Huang', NULL, NULL, NULL),
(1557, 'Egbert Angenius', NULL, NULL, NULL),
(1558, 'Fahmi Irfa Rizal', NULL, NULL, NULL),
(1559, 'Fisko Aritmatika Yuri', NULL, NULL, NULL),
(1560, 'Fyazquinn Faustanyfa Indrawan', NULL, NULL, NULL),
(1561, 'Geren Nicholas Wang', NULL, NULL, NULL),
(1562, 'Grestyn Aurier Winata', NULL, NULL, NULL),
(1563, 'I Wayan Pracdyana Tanesi', NULL, NULL, NULL),
(1564, 'Jevon Andrew Lousius', NULL, NULL, NULL),
(1565, 'Justin Liauw', NULL, NULL, NULL),
(1566, 'Kennard Ferguson Chen', NULL, NULL, NULL),
(1567, 'Lionel Salio Kho', NULL, NULL, NULL),
(1568, 'Liony', NULL, NULL, NULL),
(1569, 'Patricia Prayogo Setiawan', NULL, NULL, NULL),
(1570, 'Pavitta Accita Irawan', NULL, NULL, NULL),
(1571, 'Richmond Karuna Wijaya', NULL, NULL, NULL),
(1572, 'Ricky Kenneth Reginald', NULL, NULL, NULL),
(1573, 'Roger Christian Timothy', NULL, NULL, NULL),
(1574, 'Ryo Lee Yobihana', NULL, NULL, NULL),
(1575, 'Sri Wulan', NULL, NULL, NULL),
(1576, 'Thian Fat Shin', NULL, NULL, NULL),
(1577, 'Vanyno Phionger', NULL, NULL, NULL),
(1578, 'Vincent Van Gouw', NULL, NULL, NULL),
(1579, 'Viona Tham', NULL, NULL, NULL),
(1580, 'Wenshia Hefiel Valencia', NULL, NULL, NULL),
(1581, 'William Keane', NULL, NULL, NULL),
(1582, 'Zidane Zaheddin', NULL, NULL, NULL),
(1583, 'Afrizal Sulistyan', NULL, NULL, NULL),
(1584, 'Alvin Wijaya Hakim', NULL, NULL, NULL),
(1585, 'Augurius Damian Domingus', NULL, NULL, NULL),
(1586, 'Beli Sugito Putra', NULL, NULL, NULL),
(1587, 'Bodhidharma Viriyadhika', NULL, NULL, NULL),
(1588, 'Bryan Edward Widjaja', NULL, NULL, NULL),
(1589, 'Cadrick Egbert Tansir', NULL, NULL, NULL),
(1590, 'Camaro Xaverius Yusuf', NULL, NULL, NULL),
(1591, 'Caroline Hartono', NULL, NULL, NULL),
(1592, 'Carren Jolina', NULL, NULL, NULL),
(1593, 'Celine Monica Saragih', NULL, NULL, NULL),
(1594, 'Charles Raymond', NULL, NULL, NULL),
(1595, 'Clarissa Alverina', NULL, NULL, NULL),
(1596, 'Cristiano Giovanni', NULL, NULL, NULL),
(1597, 'Darryl Raditya Johny Trisno', NULL, NULL, NULL),
(1598, 'Dimas Ananda Pasha', NULL, NULL, NULL),
(1599, 'Engelbert Kusasih', NULL, NULL, NULL),
(1600, 'Eric Kosashi', NULL, NULL, NULL),
(1601, 'Fahrizal Adiansyah', NULL, NULL, NULL),
(1602, 'Galih Andrio Firdaus', NULL, NULL, NULL),
(1603, 'Ganendra Sudarso', NULL, NULL, NULL),
(1604, 'Glenn Andre', NULL, NULL, NULL),
(1605, 'Karina Intania Septiani', NULL, NULL, NULL),
(1606, 'Khalissta Arteja', NULL, NULL, NULL),
(1607, 'Khietsly Tristan', NULL, NULL, NULL),
(1608, 'Meytrin Siagian', NULL, NULL, NULL),
(1609, 'Mischell Lin', NULL, NULL, NULL),
(1610, 'Natasha Vallery Putri Yus', NULL, NULL, NULL),
(1611, 'Nicholas Shizuka', NULL, NULL, NULL),
(1612, 'Nico', NULL, NULL, NULL),
(1613, 'Ozorra Fahlefi', NULL, NULL, NULL),
(1614, 'Raine Olivia', NULL, NULL, NULL),
(1615, 'Randolf Tanvert', NULL, NULL, NULL),
(1616, 'Reven Rex Chen', NULL, NULL, NULL),
(1617, 'Reynard Liu', NULL, NULL, NULL),
(1618, 'Adrian Djong', NULL, NULL, NULL),
(1619, 'Amelia Soraya', NULL, NULL, NULL),
(1620, 'Angelina Said', NULL, NULL, NULL),
(1621, 'Aston Jermeni', NULL, NULL, NULL),
(1622, 'Aurelia Elvyra', NULL, NULL, NULL),
(1623, 'Billy Wijaya', NULL, NULL, NULL),
(1624, 'Carewen Jonata Lie', NULL, NULL, NULL),
(1625, 'Carla Aprila Ratna Sari Brodie', NULL, NULL, NULL),
(1626, 'Chastine Jesslyn', NULL, NULL, NULL),
(1627, 'Chiutie Eldisc', NULL, NULL, NULL),
(1628, 'Christin Oliviana Tanuwidjaya', NULL, NULL, NULL),
(1629, 'Dharius Leo Fandy', NULL, NULL, NULL),
(1630, 'Evangeline Clarice', NULL, NULL, NULL),
(1631, 'Felita Theresa Pratama', NULL, NULL, NULL),
(1632, 'Felix', NULL, NULL, NULL),
(1633, 'Glenlys Eldisc', NULL, NULL, NULL),
(1634, 'Gracia Roseline', NULL, NULL, NULL),
(1635, 'Hansen Cleon Ang', NULL, NULL, NULL),
(1636, 'Ivan Maulana', NULL, NULL, NULL),
(1637, 'Javier Theovelius Hatano', NULL, NULL, NULL),
(1638, 'Jennysa She', NULL, NULL, NULL),
(1639, 'Jesslyn Fourransya', NULL, NULL, NULL),
(1640, 'Jili Arianti', NULL, NULL, NULL),
(1641, 'Laurencia Trevina', NULL, NULL, NULL),
(1642, 'Meisya Olivia Sukandi', NULL, NULL, NULL),
(1643, 'Michelle Angel Saputro', NULL, NULL, NULL),
(1644, 'Nia Rahmawati', NULL, NULL, NULL),
(1645, 'Nicholas Than', NULL, NULL, NULL),
(1646, 'Pieter Salim', NULL, NULL, NULL),
(1647, 'Ravendfio', NULL, NULL, NULL),
(1648, 'Reynaldi Sebastian', NULL, NULL, NULL),
(1649, 'Selly Chou', NULL, NULL, NULL),
(1650, 'Valeska Faustina Chandra', NULL, NULL, NULL),
(1651, 'Verren Sthevanly', NULL, NULL, NULL),
(1652, 'Zahra Paulivia Prasetio', NULL, NULL, NULL),
(1653, 'Aditya Ariansyah', NULL, NULL, NULL),
(1654, 'Ahmad Aji Saputra', NULL, NULL, NULL),
(1655, 'Alviyah Nurnajmi Layla', NULL, NULL, NULL),
(1656, 'Ani Global Karuna Sunarja', NULL, NULL, NULL),
(1657, 'Cleony Jessica Tan', NULL, NULL, NULL),
(1658, 'Dwi Larasati', NULL, NULL, NULL),
(1659, 'Eli Trisnawati', NULL, NULL, NULL),
(1660, 'Elvina Vianney Hermanto', NULL, NULL, NULL),
(1661, 'Fachri Muhamad', NULL, NULL, NULL),
(1662, 'Fauzi Irwansyah', NULL, NULL, NULL),
(1663, 'Handi Hermawan', NULL, NULL, NULL),
(1664, 'Indri Novita Pratiwi', NULL, NULL, NULL),
(1665, 'Indri Wulandari', NULL, NULL, NULL),
(1666, 'Intan Alaysa Yahya', NULL, NULL, NULL),
(1667, 'Intan Nuraini', NULL, NULL, NULL),
(1668, 'Laurensia Shelly Gian', NULL, NULL, NULL),
(1669, 'Mahesa Rizky', NULL, NULL, NULL),
(1670, 'Maya Sukma Dewi', NULL, NULL, NULL),
(1671, 'Mohammad Arif', NULL, NULL, NULL),
(1672, 'Mona Aprilianti', NULL, NULL, NULL),
(1673, 'Muhammad Ikhwan Maulana', NULL, NULL, NULL),
(1674, 'Nabila Daffaauryla', NULL, NULL, NULL),
(1675, 'Nathania Ariella', NULL, NULL, NULL),
(1676, 'Nathasya Josephine', NULL, NULL, NULL),
(1677, 'Naufal Maulana Yustian', NULL, NULL, NULL),
(1678, 'Nursetia Ningrum', NULL, NULL, NULL),
(1679, 'Nurul Listiani', NULL, NULL, NULL),
(1680, 'Rangga Maulana', NULL, NULL, NULL),
(1681, 'Sani', NULL, NULL, NULL),
(1682, 'Shabila Alya Zahra', NULL, NULL, NULL),
(1683, 'Syahril Dwi Riswandi', NULL, NULL, NULL),
(1684, 'Vanessa Pricilla', NULL, NULL, NULL),
(1685, 'Viola Clarissa', NULL, NULL, NULL),
(1686, 'Widyadhana Novelia', NULL, NULL, NULL),
(1687, 'Wincellia Velice Gunawan', NULL, NULL, NULL),
(1688, 'Yogi Setiawan', NULL, NULL, NULL);

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
