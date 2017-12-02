-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 10:32 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `managemen_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `kode_guru` varchar(100) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `asal` text NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `jumlah_jam` int(100) NOT NULL,
  `tanggal_mulai_mengajar` date NOT NULL,
  `username_guru` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`kode_guru`, `nama_guru`, `asal`, `telepon`, `pendidikan_terakhir`, `mapel`, `jumlah_jam`, `tanggal_mulai_mengajar`, `username_guru`, `password`, `foto`) VALUES
('', 'Muhammad Rezki Ananda', 'Kediri', '085608845319', 'D3', 'Pemograman Web', 2, '0000-00-00', 'rezkiew', '123', ''),
('1213123213', 'sdfds', 'sdf', '324', 'dsf', 'dsf', 42, '2222-02-22', 'rezkisad', 'dsf', ''),
('1213123213324234234', 'sdfds', 'sdf', '324', 'dsf', 'dsf', 42, '2222-02-22', 'rezkisad', 'dsfsd', ''),
('123123123', 'efdsdfsdf', 'dsfsdfs', '245345', 'fvcxv', 'cxvcx', 3423, '0000-00-00', 'rezki', '1234', ''),
('123456', 'Muhammad Rezki Ananda', 'Kediri', '085608845319', 'SMA', 'Pemweb', 432, '0000-00-00', 'nanda123', 'nanda123', 'Foto(613).jpg'),
('13', 'Muhammad Rezki Ananda', 'asdsa', '23423', 'ewr', 'ewr', 34234, '2017-05-22', 'ewrew', 'ewr', ''),
('133242', 'Muhammad Rezki Ananda', 'asdsa', '23423', 'ewr', 'ewr', 34234, '2017-05-22', 'ewrew', 'werew', ''),
('213', 'sdf', 'dsf', '3423', 'ewr', 'ewr', 32, '0222-02-22', 'rezki', 'wqe', ''),
('213123', 'Muhammad Rezki Ananda', 'Malang', '085608845319', 'S3', 'Pemograman Web', 2, '0000-00-00', '123', '123', ''),
('22', 'Muhammad Rezki Ananda', 'Kediri ', '085608845319', 'SMA', 'Pemweb', 1, '0000-00-00', 'rezki', '123', ''),
('2231', 'sjdji', 'ikcj', '78', 'hiuhui', 'guyg', 89798, '2017-05-27', 'rezki123', '123123', ''),
('225', 'Muhammad Rezki Ananda', 'Kediri', '085608845319', 'S3', 'Web Desain', 3, '2000-11-27', 'admin', 'admin', 'IMG_20151222_135146.jpg'),
('23', 'EWR', 'EW', '234', 'DSF', 'DSF', 324, '2222-02-22', 'REWREWewr', 'ewr', ''),
('2312', 'sad', 'sad', '343', 'sad', 'df', 213, '1312-02-12', 'erere', '34234', ''),
('2324234', 'sdfds', 'sdf', '324', 'dsf', 'dsf', 42, '2222-02-22', 'rezki', 'ewr', ''),
('2324234324', 'sdfds', 'sdf', '324', 'dsf', 'dsf', 42, '2222-02-22', 'rezki', 'ewrsdf', ''),
('233', 'EWR', 'EW', '234', 'DSF', 'DSF', 324, '2222-02-22', 'REWREWewr', 'ewr', ''),
('233324', 'EWR', 'EW', '234', 'DSF', 'DSF', 324, '2222-02-22', 'REWREWewr', 'sfd', ''),
('234', 'dsf', 'dsf', '342', 'sdf', 'sdf', 32, '2017-05-04', 'fwrwerds', 'dsf', ''),
('234234234', 'sdf', 'dsf', '3423', 'ewr', 'ewr', 32, '0222-02-22', 'rezki', '123', ''),
('234234234324', 'sdf', 'dsf', '3423', 'ewr', 'ewr', 32, '0222-02-22', 'rezki', 'sdf', ''),
('2342342343243423', 'sdf', 'dsf', '3423', 'ewr', 'ewr', 32, '0222-02-22', 'rezki', 'fd', ''),
('24324', 'sdfds', 'sdf', '324', 'dsf', 'dsf', 42, '2222-02-22', 'wfsd', 'dsf', ''),
('273', 'hiqqiudwh', 'hiuqwhxiu', '123', 'ajshih', 'idshci', 9323, '2017-05-26', 'rezki', 'yhyh', ''),
('32132', 'dsfds', 'dsfds', '234234', 'sdf', 'dsf', 213, '2017-05-22', 'ewr', 'ew', ''),
('324', 'ewr', 'wer', '324', 'df32', 'ewr', 3, '2017-05-26', 'rwer', 'ewr', ''),
('32423', 'sdfds', 'sdf', '324', 'dsf', 'dsf', 42, '2222-02-22', '324234', 'erewr', ''),
('32423234234', 'dsfdsf', 'dsfsd', '2131232', 'dsfd', 'dsf', 324, '2017-05-12', 'rerere', '123', 'DSC00141.jpg'),
('324234', 'DSFSDF', 'DSFSDF', '3423', 'XFDS', 'DSFSD', 3432, '2017-05-22', 'EWRSDFDSFSD', 'SAD', ''),
('34234', 'efdsdfsdf', 'dsfsdfs', '245345', 'fvcxv', 'cxvcx', 3423, '0000-00-00', 'rezki', 'sdfsdf', ''),
('342342342343', 'fsd', 'dsf', '234', 'dsf', 'dsf', 2, '2017-05-23', 'rere', '123', 'bendera.jpg'),
('3423434234', 'dsfs', 'dfsdf', '3424', 'dfds', 'eewr', 34, '2000-11-27', 'xcvcxvew', 'rt', ''),
('3423434234324234235', 'dsfs', 'dfsdf', '3424', 'dfds', 'eewr', 3423423, '2000-11-27', 'f345r24esd', '12', ''),
('4234', 'sdfsdf', 'sdfdsf', '321', 'sdf', 'sdfsdf', 32423, '2222-02-22', 'QWERTY', 'QWERTY', 'bg_index.jpg'),
('43', 'dsfgsd', 'dsfsd', '3424', 'sdfsdf', 'dsf', 342, '2017-05-05', 'dsf', 'ewrwe', ''),
('432', 'sdf', 'sdfs', '32423', 'fdgfd', 'ewrew', 23423, '2017-05-03', 'ewr', 'ewr', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`kode_guru`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
