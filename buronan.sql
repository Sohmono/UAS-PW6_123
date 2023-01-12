-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 07:46 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buronan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buronan`
--

CREATE TABLE `buronan` (
  `ID` int(20) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `image` blob NOT NULL,
  `umur` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buronan`
--

INSERT INTO `buronan` (`ID`, `Nama`, `deskripsi`, `jenis_kelamin`, `image`, `umur`) VALUES
(7, 'Randy Mendomba', 'Tinggi sekitar 1.7 m, dengan ciri sesuai gambar. Target terakhir terlihat di sekitaran Malang. Mohon Kerjasama.', 'Laki - laki', 0x466b724264435a58454167537248512e6a7067, 46),
(8, 'Antony Akbar', 'Melarikan diri dari Singapura ke Indonesia melalui jalur laut. Belum ditemukan perahu yang ditumpangi. Dugaan disekitar perairan Aceh. Mohon Kerjasama.', 'Laki - laki', 0x4667686844642d57494145526431512e6a7067, 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buronan`
--
ALTER TABLE `buronan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buronan`
--
ALTER TABLE `buronan`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
