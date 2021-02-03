-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 02:48 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `datum` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vrijeme` time NOT NULL,
  `hrana` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `broj_stola` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rezervacija`
--

INSERT INTO `rezervacija` (`id_rezervacija`, `ime`, `email`, `broj_telefona`, `broj_osoba`, `datum`, `vrijeme`, `hrana`, `broj_stola`) VALUES
(38, 'Marija', 'magi.rajic12@gmail.com', 63545, 5, '0000-00-00', '05:07:00', 'Pielca salata', 6),
(39, 'Iva', 'bvhjv@ht.rom', 63545, 3, '0000-00-00', '05:10:00', 'Pielca salata', 6),
(40, 'Iva', 'bvhjv@ht.rom', 63545, 3, '0000-00-00', '05:10:00', 'Pielca salata', 6),
(41, 'Marija', 'bvhjv@ht.rom', 63545, 6, '0000-00-00', '05:07:00', 'Pielca salata', 2),
(42, 'helena', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '07:08:00', 'kjgkj', 11),
(43, 'helenaz', 'helenazeko24@gmail.com', 89687, 8, '0000-00-00', '07:26:00', '', 4),
(44, 'lkk', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '07:28:00', 'kjgkj', 6),
(45, 'helenazeko@live.com', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '05:14:00', '', 6),
(46, 'helena', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '08:37:00', 'kjgkj', 6),
(47, 'helena', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '08:37:00', 'kjgkj', 6),
(48, 'tomo', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '05:14:00', 'kjgkj', 4),
(49, 'ttt', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '07:29:00', 'kjgkj', 6),
(50, 'helena', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '08:37:00', 'kjgkj', 11),
(51, 'helena', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '08:37:00', 'kjgkj', 11),
(52, 'helena', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '08:37:00', 'kjgkj', 11),
(53, 'helena', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '08:37:00', 'kjgkj', 11),
(54, 'helenaze', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '07:26:00', 'kjgkj', 4),
(55, 'helena', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '08:37:00', 'kjgkj', 11),
(56, 'helenaz', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '08:37:00', 'kjgkj', 11),
(57, 'tomo', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '07:28:00', 'kjgkj', 4),
(58, 'tomo', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '07:28:00', 'kjgkj', 4),
(59, 'hele', 'helenazeko24@gmail.com', 23333, 3, '0000-00-00', '05:00:00', 'palacinke', 5),
(60, 'hele', 'helenazeko24@gmail.com', 23333, 3, '0000-00-00', '05:00:00', 'palacinke', 5),
(61, 'helena', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '07:08:00', '', 5),
(62, 'helena', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '07:08:00', '', 5),
(63, 'helena', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '07:29:00', '', 5),
(64, 'helena', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '07:29:00', '', 5),
(65, 'tomo', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '08:37:00', 'kjgkj', 1),
(66, 'tomo', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '08:37:00', 'kjgkj', 1),
(67, 'helenazeko@live.com', 'helenazeko24@gmail.com', 89687, 8, '0000-00-00', '08:37:00', 'kjgkj', 1),
(68, 'helenazeko@live.com', 'helenazeko24@gmail.com', 89687, 8, '0000-00-00', '08:37:00', 'kjgkj', 1),
(69, 'helenaz', 'helenazeko24@gmail.com', 23333, 9, '0000-00-00', '07:28:00', '9', 1),
(70, 'helenaz', 'helenazeko24@gmail.com', 23333, 9, '0000-00-00', '07:28:00', '9', 1),
(71, 'ss', 'helenazeko24@gmail.com', 4353, 3, '0000-00-00', '07:28:00', 'Pršut', 2),
(72, 'ss', 'helenazeko24@gmail.com', 4353, 3, '0000-00-00', '07:28:00', 'Pršut', 2),
(73, 'helena', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '07:26:00', 'Pileća salata', 6),
(74, 'helena', 'helenazeko24@gmail.com', 89687, 9, '0000-00-00', '07:26:00', 'Pileća salata', 6),
(75, 'helena', 'helenazeko24@gmail.com', 89687, 3, '03.02.2021', '07:28:00', 'Ovčji sir', 8),
(76, 'helena', 'helenazeko24@gmail.com', 89687, 3, '03.02.2021', '07:28:00', 'Ovčji sir', 8);

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
  MODIFY `id_rezervacija` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
