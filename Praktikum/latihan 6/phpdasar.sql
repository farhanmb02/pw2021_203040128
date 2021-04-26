-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 06:49 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nrp` char(9) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nrp`, `nama`, `jurusan`, `email`, `gambar`) VALUES
(9, '203040124', 'jonatan', 'aktuaria', 'j@gmial.com', 'gambar4.jpg'),
(11, '203040125', 'IRZA FADIL TAOPIK', 'hukum', 'Irzafadil100@gmail.com', 'gambar5.jpg'),
(12, '21212121', 'Farhan Mohamad Bintang Atoilah', 'hukum', 'farhanmb02@gmail.com', 'gambar1.jpg'),
(13, '212121217', 'sumanto', 'pangan', 'bintang335522@gmail.com', 'gambar4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'farhanmb02', '$2y$10$cb5w7zvrDDZVZ6InRY6EOe42nnb6yLPt6EQXebeh/BhMVOKBu7xrK'),
(2, 'maman', '$2y$10$2Revpy3xWsrexOyslT6nyOOQnkoBQ29fPkd4kdES5TUNcdIB1/PeS'),
(3, 'jojo', '$2y$10$tPhxIA.Fjqq6wp0O7C3FxOP1il1qEuH/f0ZCo6H9DVllb.HJqBZFW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`no_pegawai`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
