-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2024 at 12:46 AM
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
-- Database: `mydts`
--

-- --------------------------------------------------------

--
-- Table structure for table `diri`
--

CREATE TABLE `diri` (
  `id` tinyint(3) NOT NULL,
  `nama` varchar(40) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `lahir` date NOT NULL,
  `email` varchar(40) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `telpon` varchar(12) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `alamat` varchar(60) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `kelamin` varchar(6) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diri`
--

INSERT INTO `diri` (`id`, `nama`, `lahir`, `email`, `telpon`, `alamat`, `kelamin`) VALUES
(2, 'Farkhan', '2024-10-30', 'E41230747@student.polije.ac.id', '0390943590', 'Ngannnn', 'Pria'),
(3, 'LLLL', '2024-10-15', 'LLLL123@gmail.com', '038404840', 'Nganjuk', 'Pria');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diri`
--
ALTER TABLE `diri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diri`
--
ALTER TABLE `diri`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
