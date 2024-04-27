-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2024 at 03:22 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minigame`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblquestion`
--

CREATE TABLE `tblquestion` (
  `idquestion` int(11) NOT NULL,
  `question` text NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `option_1` text NOT NULL,
  `option_2` text NOT NULL,
  `option_3` text NOT NULL,
  `option_4` text NOT NULL,
  `answer` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblquestion`
--

INSERT INTO `tblquestion` (`idquestion`, `question`, `images`, `option_1`, `option_2`, `option_3`, `option_4`, `answer`) VALUES
(5, 'Apa kepanjangan dari PUPR ?', NULL, 'Pusat Umum Pembangunan Rakyat', 'Pekerjaan Umum dan Perencanaan Rakyat', 'Pembangunan Umum dan Pendidikan Rakyat', 'Pekerjaan Umum dan Perumahan Rakyat', 'option_4'),
(6, 'Siapa Menteri PUPR Indonesia saat ini ?', NULL, 'Joko Widodo', 'Basuki Hadimuljono', 'Susi Pudjiastuti', 'Sri Mulyani', 'option_2'),
(7, 'Apa peran utama BPSDM dalam Kementerian PUPR?', NULL, 'Pengelolaan infrastruktur jalan', 'Pembangunan perumahan subsidi', 'Pengembangan sumber daya manusia di sektor pekerjaan umum dan perumahan', 'Penyediaan air bersih', 'option_3'),
(8, 'Jika Kementerian PUPR menjadi hewan, hewan apa yang paling mencerminkan tugas mereka?', NULL, 'Semut - kerja keras membangun infrastruktur', 'Lebah - kolaboratif dalam memperbaiki rumah', 'Burung Merpati - membawa pesan tentang pembangunan', 'Kuda - membawa transportasi yang kuat dan cepat', 'option_1'),
(9, 'Jika Kementerian PUPR menjadi karakter dalam game video, senjata apa yang mereka bawa untuk menghadapi tantangan?', NULL, 'Helm Keamanan InfrastrukturJawaban', 'Palu Raksasa Pembangunan', 'Sabit Tajam Rapi', 'Tongkat Ajaib Perbaikan', 'option_2'),
(10, 'Jika Kementerian PUPR menjadi karakter dalam film, peran apa yang paling sesuai dengan kepribadian mereka?', NULL, 'Peneliti yang tekun dalam mencari teknologi terbaru untuk pembangunan', 'Insinyur kreatif yang selalu menemukan solusi yang unik', 'Kontraktor tangguh yang tidak takut menghadapi tantangan', 'Arsitek jenius yang selalu memiliki rencana ajaib', 'option_3'),
(11, 'Apa yang dimaksud dengan \"Program Satu Juta Rumah\" yang dikelola oleh Kementerian PUPR?', NULL, 'Program pemberian beasiswa pendidikan untuk satu juta anak', 'Program pemberian bantuan uang kepada satu juta keluarga miskin', 'Program pembangunan satu juta rumah mewah untuk kaum elit', 'Program pembangunan rumah subsidi untuk satu juta keluarga berpenghasilan rendah', 'option_4'),
(12, 'Apa nama aula di bapekom 6 surabaya ?', '662b1e1b59b98.png', 'Aula A', 'Aula B', 'Aula C', 'Aula D', 'option_1'),
(13, 'update', '662b21d7084a5.png', 'update', 'update', 'update', 'update', 'option_4');

-- --------------------------------------------------------

--
-- Table structure for table `tblranking`
--

CREATE TABLE `tblranking` (
  `idrank` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblranking`
--

INSERT INTO `tblranking` (`idrank`, `username`, `score`) VALUES
(18, 'Samuel', 20),
(19, 'ffe', 10),
(20, 'Halo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `iduser` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('superadmin','admin') NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`iduser`, `username`, `password`, `role`) VALUES
(1, 'admin', '$2a$12$ao6q.PuNnvOwW5UjcXOzb.Vw1o.CMo/ER/kXoTWgb19QnfRnrzd/C', 'superadmin'),
(2, 'okkyboy', '$2y$10$iM/h9hChNDwPAt3pR9PJu.uOD0YekaoGfcIAssi3xKVfu6Yq8Kuuy', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblquestion`
--
ALTER TABLE `tblquestion`
  ADD PRIMARY KEY (`idquestion`);

--
-- Indexes for table `tblranking`
--
ALTER TABLE `tblranking`
  ADD PRIMARY KEY (`idrank`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblquestion`
--
ALTER TABLE `tblquestion`
  MODIFY `idquestion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblranking`
--
ALTER TABLE `tblranking`
  MODIFY `idrank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
