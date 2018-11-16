-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 11:41 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fisioterapis`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(8) NOT NULL,
  `nama` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `tinggi_badan` varchar(100) NOT NULL,
  `berat_badan` int(8) NOT NULL,
  `jenis_kelamin` int(8) NOT NULL,
  `lisensi_terapis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `password`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `status`, `agama`, `tinggi_badan`, `berat_badan`, `jenis_kelamin`, `lisensi_terapis`) VALUES
(1, 0, '<br /><b>Notice</b>:  Undefined variable: username in <b>C:xampphtdocsGustianTest1edit.php</b> on li', 'agusadmin', '12345', 'jln dakota sukaraja cicendo bandung', 'garut', '1997-12-09', 'menikah', 'islam', '162', 56, 0, 'baik'),
(2, 0, 'adminsaya', 'gustiannurhidayat9@gmail.com', '123123', 'jln dakota', 'bandung', '1018-11-20', 'lajang', 'islam', '162', 56, 0, 'baik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
