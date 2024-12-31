-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2024 at 06:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seleratanahair`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(15) NOT NULL,
  `role` enum('admin','user','','') NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `role`, `username`, `password`) VALUES
(1, 'admin', 'aghisna', 'aghisna1234');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id_recipes` int(15) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `recipes` text NOT NULL,
  `cooking_steps` text NOT NULL,
  `province` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id_recipes`, `menu`, `recipes`, `cooking_steps`, `province`, `image`) VALUES
(13, 'Rendang', '<h5 class=\"\">Bahan-Bahan</h5><ul><li><span style=\"font-weight: normal;\">1 kg daging sapi has dalam</span></li><li><span style=\"font-weight: normal;\">1 lembar daun kunyit, sobek-sobek</span></li><li><span style=\"font-weight: normal;\">4 lembar daun jeruk</span></li><li><span style=\"font-weight: normal;\">2 lembar daun salam</span></li><li><span style=\"font-weight: normal;\">1 buah bunga lawang</span></li><li><span style=\"font-weight: normal;\">2 batang serai, geprek</span></li><li><span style=\"font-weight: normal;\">1/2 buah pala, tumbuk</span></li><li><span style=\"font-weight: normal;\">1/2 sdt ketumbar</span></li><li><span style=\"font-weight: normal;\">2 sdt garam</span></li><li><span style=\"font-weight: normal;\">2 liter santan kelapa</span></li></ul><h5 class=\"\">Bumbu Halus</h5><ul><li><span style=\"font-weight: normal;\">17 butir bawang merah</span></li><li><span style=\"font-weight: normal;\">10 siung bawang putih</span></li><li><span style=\"font-weight: normal;\">1 ruas jahe</span></li><li><span style=\"font-weight: normal;\">1 ruas lengkuas</span></li><li><span style=\"font-weight: normal;\">2 ruas kunyit</span></li><li><span style=\"font-weight: normal;\">100 gram cabai keriting<br></span></li></ul><p></p> ', '<h5 class=\"\">Cara Membuat</h5><ol><li><span style=\"font-weight: normal;\">Tumis bumbu halus. Tambahkan santan kelapa.</span></li><li><span style=\"font-weight: normal;\">Tambahkan daun kunyit, daun jeruk, daun salam, serai, pala, dan ketumbar. Aduk-aduk hingga mendidih.</span></li><li><span style=\"font-weight: normal;\">Masukkan daging. Masak sambil terus diaduk-aduk dengan api kecil sampai kelihatan berminyak.</span></li><li><span style=\"font-weight: normal;\">Masak hingga air menyusut dan keluar minyak sambil sesekali diaduk. Matikan api. Angkat dan sajikan rendang daging sapi.<br></span></li></ol> ', 'Sumatera Barat', 'uploads/img_67606550371806.46707880.png');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id_website` int(11) NOT NULL,
  `rekomendasi` text DEFAULT NULL,
  `resep` text DEFAULT NULL,
  `nama_user` varchar(100) NOT NULL,
  `review` text DEFAULT NULL,
  `galeri` text DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id_recipes`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id_website`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id_recipes` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id_website` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `website`
--
ALTER TABLE `website`
  ADD CONSTRAINT `website_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
