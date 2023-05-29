-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 12:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `npm` int(11) NOT NULL,
  `namaMhs` varchar(50) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `noHp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`npm`, `namaMhs`, `prodi`, `alamat`, `noHp`) VALUES
(1, 'Bumi', 'Tere Liye', '2014', '50.000'),
(2, 'Laskar Pelangi', 'Andrea Hirarta', '2004', '65.000'),
(3, 'Tanah Para Bandit', 'Tere Liye', '2023', '105.000'),
(4, 'Seperti Hujan Yang Jatuh ke Bumi', 'Boy Chandra', '2016', '85.000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `password`) VALUES
(11, 'firza', 'firzaajikarya10@gmail.com', '1d9c20bfcd316dbbae2dd977aad861c2'),
(15, 'KNTL', 'firzaajikarya@gmail.com', '1d9c20bfcd316dbbae2dd977aad861c2'),
(19, '', 'firzaajikarya10@gmail.com', '1d9c20bfcd316dbbae2dd977aad861c2'),
(20, 'Sayang', '.@gmail.com', '5058f1af8388633f609cadb75a75dc9d'),
(21, 'firzaa', 'firzaajikarya@gmail.com', '1d9c20bfcd316dbbae2dd977aad861c2'),
(22, 'firza', '.@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(23, 'pooo', 'firzaajikary@gmail.com', '1d9c20bfcd316dbbae2dd977aad861c2'),
(24, '1', 'firzaajikary10@gmail.com', '1d9c20bfcd316dbbae2dd977aad861c2'),
(25, '', 'firzaaji@gmail.com', '1d9c20bfcd316dbbae2dd977aad861c2'),
(26, 'uweuwe', 'firzaajika@gmail.com', '1d9c20bfcd316dbbae2dd977aad861c2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
