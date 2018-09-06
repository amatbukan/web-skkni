-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2018 at 02:21 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bukudb`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `buku_id` varchar(7) NOT NULL,
  `buku_kategori` varchar(30) NOT NULL,
  `buku_nama` varchar(100) NOT NULL,
  `buku_pengarang` varchar(100) NOT NULL,
  `buku_harga` varchar(10) NOT NULL,
  `buku_stok` varchar(4) NOT NULL,
  `penerbit_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`buku_id`, `buku_kategori`, `buku_nama`, `buku_pengarang`, `buku_harga`, `buku_stok`, `penerbit_id`) VALUES
('BK1001', '1', 'Kafka On The Shore', 'Haruki Murakami', '200000', '60', 'PN01'),
('BK1002', '1', 'Norwegian Wood', 'Haruki Murakami', '180000', '60', 'PN01'),
('BK1003', '1', 'The Wind-Up Bird Chronicle', 'Haruki Murakami', '225000', '25', 'PN01'),
('BK2001', '1', 'The Alchemist', 'Paulo Coelho', '200000', '40', 'PN02'),
('BK2002', '2', 'And The There Were None', 'Agatha Christie', '140000', '40', 'PN02'),
('BK2003', '2', 'Munder on the Orient Express', 'Agatha Christie', '150000', '35', 'PN02'),
('BK3001', '3', 'To Kill a Mockingbird', 'Harper Lee', '345000', '20', 'PN03'),
('BK3002', '3', 'A Tale of Two Cities', 'Charles Dickens', '170000', '15', 'PN04'),
('BK3003', '3', 'Animal Farm', 'George Dickens', '170000', '15', 'PN04');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`) VALUES
(1, 'Cotemporary Fiction'),
(2, 'Crime Fiction'),
(3, 'Classic');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE IF NOT EXISTS `penerbit` (
  `penerbit_id` varchar(5) NOT NULL,
  `penerbit_nama` varchar(100) NOT NULL,
  `penerbit_negara` varchar(50) NOT NULL,
  `penerbit_kota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`penerbit_id`, `penerbit_nama`, `penerbit_negara`, `penerbit_kota`) VALUES
('PN01', 'Vintage Publishing', 'United Kingdom', 'London'),
('PN02', 'HarperCollins Publisher Inc', 'United States', 'New York'),
('PN03', 'Cornerstone', 'United Kingdom', 'London'),
('PN04', 'Penguin Books Ltd', 'United Kingdom', 'London');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
 ADD PRIMARY KEY (`buku_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
 ADD PRIMARY KEY (`penerbit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
