-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2018 at 11:40 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `datakaryawan`
--

CREATE TABLE `datakaryawan` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` enum('staf','menejer','direktur') NOT NULL,
  `tgl lahir` date NOT NULL,
  `no hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datakaryawan`
--

INSERT INTO `datakaryawan` (`id`, `nama`, `jabatan`, `tgl lahir`, `no hp`) VALUES
('1', 'al', 'staf', '2018-05-01', '082211111111'),
('2', 'aliando', 'staf', '2018-05-02', '082222222222'),
('3', 'almanium', 'staf', '2018-05-03', '082233333333'),
('4', 'almarhum', 'staf', '2018-05-02', '082244444444'),
('5', 'alpanci', 'staf', '2018-05-02', '082255555555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datakaryawan`
--
ALTER TABLE `datakaryawan`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
