-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2015 at 05:44 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlinecv`
--

-- --------------------------------------------------------

--
-- Table structure for table `privilage`
--

CREATE TABLE IF NOT EXISTS `privilage` (
`id` int(11) NOT NULL,
  `desc` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privilage`
--

INSERT INTO `privilage` (`id`, `desc`) VALUES
(1, 'Admin'),
(2, 'Owner');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bio`
--

CREATE TABLE IF NOT EXISTS `tb_bio` (
`id` int(11) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `tagline` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Phone` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bio`
--

INSERT INTO `tb_bio` (`id`, `owner_name`, `tagline`, `Alamat`, `Phone`) VALUES
(1, 'Ikhsan Faruqi', 'Freelance Undergraduate Programmer', 'Telkom University, Bandung, Indonesia', '+62 812 2222 5317');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE IF NOT EXISTS `tb_category` (
`id` int(11) NOT NULL,
  `category` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`id`, `category`) VALUES
(1, 'CV'),
(2, 'Portofolio');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cv`
--

CREATE TABLE IF NOT EXISTS `tb_cv` (
`ID` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `tanggalDibikin` date NOT NULL,
  `judulKonten` varchar(35) NOT NULL,
  `Konten` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cv`
--

INSERT INTO `tb_cv` (`ID`, `category`, `tanggalDibikin`, `judulKonten`, `Konten`, `published`) VALUES
(15, 1, '2015-11-26', 'SD', 'SDN 14 JAKARTA | 2001-2007', 1),
(16, 1, '2015-12-02', 'SMP', 'SMP N 1 Lubuk Basung', 1),
(17, 1, '2015-12-02', 'SMA', 'SMA N 2 Lubuk Basung', 1),
(18, 1, '2015-12-03', 'College', 'Telkom University Batch 13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_portofolio`
--

CREATE TABLE IF NOT EXISTS `tb_portofolio` (
  `IDport` int(11) NOT NULL,
  `categoryPort` int(11) NOT NULL,
  `tanggalDibikinport` date NOT NULL,
  `judulKontenPort` varchar(35) NOT NULL,
  `Konten` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_portofolio`
--

INSERT INTO `tb_portofolio` (`IDport`, `categoryPort`, `tanggalDibikinport`, `judulKontenPort`, `Konten`, `published`) VALUES
(0, 2, '2015-11-26', 'JOB 1', 'Bekerja sebagai junior programmer di google', 1),
(0, 2, '2015-12-03', 'Internship', 'Internship at PT.Telkom ', 1),
(0, 2, '2015-12-03', 'Geladi', 'Geladi di PT.INTI 2014', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privilage` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `privilage`) VALUES
(1, 'owner', 'owner', 2),
(2, 'admin', 'admin', 1),
(3, 'faruqi', 'faruqi', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `privilage`
--
ALTER TABLE `privilage`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `desc` (`desc`);

--
-- Indexes for table `tb_bio`
--
ALTER TABLE `tb_bio`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cv`
--
ALTER TABLE `tb_cv`
 ADD PRIMARY KEY (`ID`), ADD KEY `category` (`category`);

--
-- Indexes for table `tb_portofolio`
--
ALTER TABLE `tb_portofolio`
 ADD KEY `categoryPort` (`categoryPort`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD KEY `privilage` (`privilage`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `privilage`
--
ALTER TABLE `privilage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_bio`
--
ALTER TABLE `tb_bio`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_cv`
--
ALTER TABLE `tb_cv`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_cv`
--
ALTER TABLE `tb_cv`
ADD CONSTRAINT `tb_cv_ibfk_1` FOREIGN KEY (`category`) REFERENCES `tb_category` (`id`);

--
-- Constraints for table `tb_portofolio`
--
ALTER TABLE `tb_portofolio`
ADD CONSTRAINT `tb_portofolio_ibfk_1` FOREIGN KEY (`categoryPort`) REFERENCES `tb_category` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`privilage`) REFERENCES `privilage` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
