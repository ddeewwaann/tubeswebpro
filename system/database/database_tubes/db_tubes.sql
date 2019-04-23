-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 05:50 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`id`, `password`) VALUES
('dewan', 'dewan');

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

CREATE TABLE `competition` (
  `id` int(10) NOT NULL,
  `nama_game` varchar(500) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`id`, `nama_game`, `judul`, `keterangan`, `waktu`) VALUES
(2, 'LostSaga', 'adwadwdawawdawddwa', 'dawwwwwwwwwwwwwdwaawdf', '2019-04-22 12:12:44');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(10) NOT NULL,
  `nama_game` varchar(500) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `nama_game`, `judul`, `keterangan`, `waktu`) VALUES
(1, 'LostSaga', 'a', 'a', '2019-04-21 21:37:04'),
(2, 'LostSaga', 'awdwadwad', 'awdwadwadawd', '2019-04-22 12:12:33');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `nama_game` varchar(500) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `nama_game`, `judul`, `keterangan`, `waktu`) VALUES
(2, 'LostSaga', 'a', 'a', '2019-04-21 21:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(10) NOT NULL,
  `nama_game` varchar(500) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `nama_game`, `judul`, `keterangan`, `waktu`) VALUES
(1, 'LostSaga', 'awdawdadwadw', 'dwawaddaw', '2019-04-22 12:12:14');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `id` int(10) NOT NULL,
  `nama_game` varchar(500) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`id`, `nama_game`, `judul`, `keterangan`, `waktu`) VALUES
(1, 'LostSaga', 'awdawdda', 'awdwaddawwad', '2019-04-22 12:12:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hint` varchar(100) NOT NULL,
  `hint_answer` varchar(100) NOT NULL,
  `no_hp` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `password`, `email`, `hint`, `hint_answer`, `no_hp`) VALUES
('dewan', 'dewan', 'dewan.satriakamal@yahoo.com', 'Apa warna kesukaan kamu ?', 'kuning', 2147483647),
('dewan', 'dewan', 'dewaaan@gmail.com', 'Apa nama hewan peliharaan anda ?', 'koceng', 2147483647),
('dewan', 'd', 'dewan.satriakamal@yahoo.com', 'Apa nama hewan peliharaan anda ?', 'd', 2147483647),
('dewan', 'dew', 'dewan.satriakamal@yahoo.com', 'Apa nama hewan peliharaan anda ?', 'dwa', 0),
('dewan', 'awdawd', 'dewan.satriakamal@yahoo.com', 'Apa nama hewan peliharaan anda ?', 'dwadwa', 0),
('dewan', 'c4b18d587eec4e923367fbe8788608f0', 'dewan.satriakamal@yahoo.com', 'Apa warna kesukaan kamu ?', 'dwadwad', 0),
('a', '0cc175b9c0f1b6a831c399e269772661', 'dewan.satriakamal@yahoo.com', 'Apa nama hewan peliharaan anda ?', 'dwadwa', 2147483647),
('aa', '0cc175b9c0f1b6a831c399e269772661', 'dewaaan@gmail.com', 'Apa warna kesukaan kamu ?', 'koceng', 2147483647),
('aaaa', '0cc175b9c0f1b6a831c399e269772661', 'satriakamal@gmail.comb', 'Apa warna kesukaan kamu ?', 'dwa', 2147483647),
('b', '92eb5ffee6ae2fec3ad71c777531578f', 'dewan.satriakamal@yahoo.com', 'Apa nama hewan peliharaan anda ?', 'b', 2147483647),
('v', 'd41d8cd98f00b204e9800998ecf8427e', 'dewan.satriakamal@yahoo.com', 'Siapakah nama ibu kandung anda ?', 'v', 9),
('vv', '9e3669d19b675bd57058fd4664205d2a', 'dewaaan@gmail.com', 'Apa warna kesukaan kamu ?', 'v', 2147483647),
('dewann', 'd41d8cd98f00b204e9800998ecf8427e', 'dewan.satriakamal@yahoo.com', 'Apa nama hewan peliharaan anda ?', 'a', 2147483647),
('dewannn', '4124bc0a9335c27f086f24ba207a4912', 'dewan.satriakamal@yahoo.com', 'Apa nama hewan peliharaan anda ?', 'a', 2147483647),
('g', '73c18c59a39b18382081ec00bb456d43', 'dewan.satriakamal@yahoo.com', 'Apa nama hewan peliharaan anda ?', 'g', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `competition`
--
ALTER TABLE `competition`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
