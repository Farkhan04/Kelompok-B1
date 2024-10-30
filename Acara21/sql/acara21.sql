-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2024 at 06:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acara21`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `konten`, `gambar`, `tanggal`) VALUES
(1, 'Ba', 'uwdghiuegufgo', '../imgcode.png', '2024-10-30 03:51:16'),
(2, 'Ba', 'uwdghiuegufgo', '../imgcode.png', '2024-10-30 03:51:21'),
(3, 'Ba', 'uwdghiuegufgo', '../imgcode.png', '2024-10-30 03:53:18'),
(4, 'Ba', 'uwdghiuegufgo', '../imgcode.png', '2024-10-30 03:53:43');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(5) NOT NULL,
  `Username` varchar(40) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(9) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Username`, `Password`, `Role`) VALUES
(1, 'Farkhan', 'c4ca4238a0b923820dcc509a6f75849b', ''),
(2, '1', 'c4ca4238a0b923820dcc509a6f75849b', ''),
(3, '12', 'c20ad4d76fe97759aa27a0c99bff6710', ''),
(4, '243254', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'user'),
(5, '0', 'cfcd208495d565ef66e7dff9f98764da', 'user'),
(6, '123', '202cb962ac59075b964b07152d234b70', 'admin'),
(7, '4', '$2y$10$8UN9eLyb16ClmOV6RNtdyu7.fxryQlWWxFRFBoxE2FJ', 'user'),
(8, 'aku', '$2y$10$w5IWwKsaN7t5tlY9rxhCN.LPNZfK2lV5Tj42R/3t91r', 'user'),
(9, '5', 'e4da3b7fbbce2345d7772b0674a318d5', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
