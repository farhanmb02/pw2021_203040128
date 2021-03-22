-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 02:56 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `gambar` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `no_pegawai` int(11) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `bidang` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`gambar`, `nama`, `no_pegawai`, `email`, `bidang`) VALUES
('gambar1.jpg', 'Aldo', 102001, 'A@gmail.com', 'Marketing'),
('gambar2.jpg', 'Wiwin', 102002, 'W@gmail.com', 'Frontend'),
('gambar3.jpg', 'Wulan', 102003, 'Wu@gmail.com', 'Backend'),
('gambar4.jpg', 'Sukardi', 102004, 'S@gmail.com', 'Finance'),
('gambar5.jpg', 'Meimei', 102005, 'M@gmail.com', 'Produksi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`no_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
