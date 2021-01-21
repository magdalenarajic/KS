-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 06:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran_baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `rezervacija`
--

CREATE TABLE `rezervacija` (
  `id_rezervacija` int(11) NOT NULL,
  `ime` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `broj_telefona` int(50) NOT NULL,
  `broj_osoba` int(50) NOT NULL,
  `datum` date NOT NULL,
  `vrijeme` time(6) NOT NULL,
  `hrana` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `broj_stola` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rezervacija`
--

INSERT INTO `rezervacija` (`id_rezervacija`, `ime`, `email`, `broj_telefona`, `broj_osoba`, `datum`, `vrijeme`, `hrana`, `broj_stola`) VALUES
(38, 'Marija', 'magi.rajic12@gmail.com', 63545, 5, '0000-00-00', '05:07:00.000000', 'Pielca salata', 6),
(39, 'Iva', 'bvhjv@ht.rom', 63545, 3, '0000-00-00', '05:10:00.000000', 'Pielca salata', 6),
(40, 'Iva', 'bvhjv@ht.rom', 63545, 3, '0000-00-00', '05:10:00.000000', 'Pielca salata', 6),
(41, 'Marija', 'bvhjv@ht.rom', 63545, 6, '0000-00-00', '05:07:00.000000', 'Pielca salata', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD PRIMARY KEY (`id_rezervacija`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rezervacija`
--
ALTER TABLE `rezervacija`
  MODIFY `id_rezervacija` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
