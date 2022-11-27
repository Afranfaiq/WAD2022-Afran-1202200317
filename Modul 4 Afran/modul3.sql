-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 02:38 PM
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
-- Database: `modul3`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_afran_table`
--

CREATE TABLE `showroom_afran_table` (
  `ID_Mobil` int(11) NOT NULL,
  `Nama_Mobil` varchar(255) NOT NULL,
  `Nama_Pemilik` varchar(255) NOT NULL,
  `Merk_Mobil` varchar(255) NOT NULL,
  `Tanggal_Beli` date NOT NULL,
  `Deskripsi` text NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Status_Pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showroom_afran_table`
--

INSERT INTO `showroom_afran_table` (`ID_Mobil`, `Nama_Mobil`, `Nama_Pemilik`, `Merk_Mobil`, `Tanggal_Beli`, `Deskripsi`, `Foto`, `Status_Pembayaran`) VALUES
(501519765, 'Honda Brio', 'awik', 'Honda', '2022-11-07', 'sdadsad', 'Honda Civic.png', ''),
(984382414, 'Honda Brio', 'awik', 'Honda', '2022-11-11', 'Awikwokkkkkkkk', 'Honda Brio.png', ''),
(1047329408, '', '', '', '2022-11-07', 'dsadadas', 'Mazda 3.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_afran_table`
--
ALTER TABLE `showroom_afran_table`
  ADD PRIMARY KEY (`ID_Mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_afran_table`
--
ALTER TABLE `showroom_afran_table`
  MODIFY `ID_Mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1047329409;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
