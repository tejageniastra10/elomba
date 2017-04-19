-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2017 at 08:54 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdl`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `idjad` int(2) NOT NULL,
  `jam` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`idjad`, `jam`) VALUES
(1, '09.00'),
(2, '09.30'),
(3, '10.00'),
(4, '10.30'),
(5, '11.00'),
(6, '11.30'),
(7, '12.00'),
(8, '12.30'),
(9, '13.00'),
(10, '13.30'),
(11, '14.00'),
(12, '14.30'),
(13, '09.00'),
(14, '09.30'),
(15, '10.00'),
(16, '10.30'),
(17, '11.00'),
(18, '11.30'),
(19, '12.00'),
(20, '12.30'),
(21, '13.00'),
(22, '13.30'),
(23, '14.00'),
(24, '14.30'),
(0, '12.30'),
(0, '13.00'),
(0, '13.30'),
(0, '14.00'),
(0, '14.30'),
(0, '09.00'),
(0, '09.30'),
(0, '10.00'),
(0, '10.30'),
(0, '11.00'),
(0, '11.30'),
(0, '12.00'),
(0, '12.30'),
(0, '13.00'),
(0, '13.30'),
(0, '14.00'),
(0, '14.30');

-- --------------------------------------------------------

--
-- Table structure for table `pemain`
--

CREATE TABLE `pemain` (
  `idpemain` int(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `usia` int(2) NOT NULL,
  `noktp` varchar(20) NOT NULL,
  `fakultas` varchar(15) NOT NULL,
  `file` varchar(100) NOT NULL,
  `idtim` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemain`
--

INSERT INTO `pemain` (`idpemain`, `nama`, `usia`, `noktp`, `fakultas`, `file`, `idtim`) VALUES
(3, 'Dimas Anggarajaya', 23, '2345252555', 'TEKNIK', '', 3),
(5, 'ajus', 26, '124', 'KEDOKTERAN', '51926-1.jpg', 2),
(7, 'liligundi', 25, '123456789', 'MIPA', '', 4),
(9, 'Cok Agung Yudi', 12, '7777777777777777', 'MIPA', '22982-164968.jpg', 2),
(10, 'ecek', 22, '90909109109', 'MIPA', '', 2),
(11, 'del piero', 34, '3455678888', 'MIPA', '', 2),
(12, 'rooney', 30, '766777777778', 'MIPA', '', 2),
(13, 'Irfan Bachdim', 25, '999777765566', 'KEDOKTERAN', '', 9),
(14, 'ibrahimovic', 33, '7765277272', 'MIPA', '', 2),
(16, 'qqaaa', 12, '09090999', 'MIPA', '', 2),
(17, 'nmkiki', 66, '5544444', 'TEKNIK', '', 2),
(18, 'jhhgf', 54, 'h5555', 'TEKNIK', '', 2),
(19, 'kukukuku', 77, 'hghgh', 'FISIP', '', 2),
(20, 'asasasaa', 33, '7888888', 'FISIP', '', 2),
(21, 'wiendu', 23, '987776767', 'TEKNIK', '', 23),
(26, 'ffff', 77, '88787', 'MIPA', '8109-164969.jpg', 2),
(28, 'fdsf', 23, 'sdfds', 'TEKNIK', '71063-1488989570.png', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `namatim` varchar(15) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`namatim`, `alamat`, `telp`, `id`) VALUES
('Man utd', 'manchester', '999999', 5),
('coki', 'TABANAN', '89899', 8),
('Chelsea FC', 'LONDON', '2147483647', 11),
('sasa', 'aaaa', '111', 12),
('bbb', 'bbbbb', '2222', 13),
('cccc', 'wqwqw', '4444', 14),
('aston villa', 'rrrrr', '444444', 15),
('sssss', 'rrrrrrrr', '555555', 16),
('tttt', 'gggg', '55544', 17),
('hhhhh', 'nnnnn', '888888', 18),
('kolllooo', 'jjkkkj', '999990', 19),
('uiuiui', 'uiuiuiuiuiu', '2147483647', 20),
('babon', 'buleleng', '90099090', 23),
('sd', 'asdsa', 'sda', 25),
('asda', 'assd', 'asd', 28),
('adas', 'adsa', 'ad', 31);

-- --------------------------------------------------------

--
-- Table structure for table `undian`
--

CREATE TABLE `undian` (
  `nomor` int(2) NOT NULL,
  `idtim` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `undian`
--

INSERT INTO `undian` (`nomor`, `idtim`) VALUES
(1, 14),
(2, 12),
(3, 18),
(4, 15),
(5, 31),
(6, 8),
(7, 28),
(8, 16),
(9, 11),
(10, 5),
(11, 20),
(12, 13),
(13, 23),
(14, 19),
(15, 17),
(16, 25);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(5, 'chiko', 'chiko123'),
(8, 'coki', 'coki123'),
(11, 'hazard', 'hazard123'),
(12, 'aaa', 'aaa'),
(13, 'bbb', 'bbb'),
(14, 'cccc', 'cccc'),
(15, 'adampardew', 'rererere'),
(16, 'asasasa', 'fdfdfd'),
(17, 'yyyyyy', 'yyyy'),
(18, 'fffff', 'ddddd'),
(19, 'kkjjkkk', 'jkkkkjj'),
(20, 'uiuiuiu', 'uiuiuiu'),
(23, 'babon', 'babon'),
(25, 'asda', 'asda'),
(28, 'asdas', 'ad'),
(31, 'ad', 'ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemain`
--
ALTER TABLE `pemain`
  ADD PRIMARY KEY (`idpemain`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
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
-- AUTO_INCREMENT for table `pemain`
--
ALTER TABLE `pemain`
  MODIFY `idpemain` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
