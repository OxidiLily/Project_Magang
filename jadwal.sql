-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 10:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadwal`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `kegiatan` varchar(1000) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(1000) NOT NULL,
  `tanggung_jawab` varchar(1000) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `kegiatan`, `tanggal`, `waktu`, `tempat`, `tanggung_jawab`, `keterangan`) VALUES
(9, 'Kemah', '2022-09-27', '20:00:00', 'Semarang Barat', 'Tekad', 'Perkemahan Senin'),
(10, 'Makan', '2022-09-28', '07:00:00', 'Dinas Kependudukan', 'Daru', 'Makan bersama petinggi');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `id` int(11) NOT NULL,
  `asal` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `ktp` int(11) NOT NULL,
  `kartu_keluarga` int(11) NOT NULL,
  `surat_kematian` int(11) NOT NULL,
  `akta_kelahiran` int(11) NOT NULL,
  `kia` int(11) NOT NULL,
  `surat_pindah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`id`, `asal`, `tanggal`, `ktp`, `kartu_keluarga`, `surat_kematian`, `akta_kelahiran`, `kia`, `surat_pindah`) VALUES
(1, 'Semarang Timur', '2022-09-28', 12, 12, 0, 12, 12, 12),
(2, 'Semarang Selatan', '2022-09-29', 1, 6, 1, 4, 4, 7),
(3, 'Semarang Timur', '2022-09-30', 12, 15, 23, 14, 34, 33),
(4, 'Semarang Tengah', '2022-09-27', 3, 23, 22, 3, 12, 10),
(5, 'Semarang Barat', '2022-09-26', 12, 12, 23, 21, 3, 10),
(6, 'Semarang Timur', '2022-10-03', 12, 14, 14, 16, 10, 23),
(7, 'Semarang Selatan', '2022-10-04', 11, 25, 23, 32, 12, 12),
(8, 'Semarang Barat', '2022-10-05', 14, 4, 4, 3, 2, 32),
(9, 'Semarang Utara', '2022-10-06', 4, 2, 12, 15, 34, 21),
(10, 'Semarang Tengah', '2022-10-07', 9, 34, 35, 20, 20, 36);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', NULL),
(2, 'aziz', 'admin', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
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
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
