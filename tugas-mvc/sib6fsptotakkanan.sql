-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 12:10 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sib6fsptotakkanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `whatsapp` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_daftar` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`id`, `nama`, `email`, `whatsapp`, `alamat`, `tanggal_daftar`) VALUES
(321321, 'rifqi', 'test@gmail.com', '2141321312', 'lorem ipsum', '2024-02-29 13:15:48'),
(321326, 'wadjawdjiwa', 'jiwjdaijdiwaj', '321302190', 'diwadjiawd\r\n', '2024-02-29 20:29:06');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nomor_whatsapp` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_input` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `email`, `nomor_whatsapp`, `alamat`, `tanggal_input`) VALUES
(1, '\r\n        dwadwa\r\n          ', '\r\n          dwadaw\r\n          ', '\r\n          21321\r\n          ', '\r\n          dwadwadwa\r\n          ', '2024-02-29 21:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `phpmvcblog`
--

CREATE TABLE `phpmvcblog` (
  `id` int(11) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tulisan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phpmvcblog`
--

INSERT INTO `phpmvcblog` (`id`, `penulis`, `judul`, `tulisan`) VALUES
(1, 'Rifqi', 'Belajar PHP MVC', 'Tutorial PHP MVC'),
(2, 'Rifqi', 'Belajar PHP OOP', 'Tutorial PHP OOP'),
(3, 'Rifqi', 'Belajar PHP Dasar', 'Tutorial PHP Dasar'),
(4, 'tes insert', 'tes inserttt', 'rifqi'),
(5, 'tes flash', 'tes flash', 'rifqi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phpmvcblog`
--
ALTER TABLE `phpmvcblog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321327;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `phpmvcblog`
--
ALTER TABLE `phpmvcblog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
