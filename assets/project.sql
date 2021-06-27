-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 04:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `email` varchar(120) NOT NULL,
  `jobid` varchar(20) NOT NULL,
  `status` varchar(35) NOT NULL DEFAULT 'Pending',
  `certf` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `app_type`
--

CREATE TABLE `app_type` (
  `email` varchar(120) NOT NULL,
  `skills` varchar(150) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_type`
--

INSERT INTO `app_type` (`email`, `skills`, `id`) VALUES
('samboimmanuel@yahoo.com', 'Network Engineer', 11),
('admin@admin.com', 'Video Editor,Database Administrator', 12),
('myye1997@gmail.com', 'Graphics Design,Programmer,', 13),
('pkisika1@gmail.com', 'Graphics Design,Programmer,', 14),
('pkisika1@gmail.com', 'Graphics Design,Programmer,Video Editor,Database A', 15);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobid` varchar(20) NOT NULL,
  `jobName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobid`, `jobName`) VALUES
('DAJP21', 'Database Administrator Job Post'),
('GDJP21', 'Graphics Design Job Post'),
('NEJP21', 'Network Engineer Job Post'),
('PJP21', 'Programmer Job Post'),
('VEJP21', 'Video editor Job Post');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(120) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `pwd`, `id`) VALUES
('samboimmanuel@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 16),
('admin@admin.com', '81dc9bdb52d04dc20036dbd8313ed055', 17),
('myye1997@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 18),
('pkisika1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 19);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(35) NOT NULL,
  `lname` varchar(35) NOT NULL,
  `email` varchar(120) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `file` longblob NOT NULL,
  `phone` int(11) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `email`, `gender`, `dob`, `file`, `phone`, `country`) VALUES
('qdcvzfd', 'qwdecf', 'admin@admin.com', 'Male', '2021-06-22', 0x43415354524f2e706466, 756376653, 'Austria'),
('Immanuel', 'Kweka', 'myye1997@gmail.com', 'Male', '1996-12-22', 0x63617374726f6f696c2e706466, 756376653, 'Tanzania, United Republic of'),
('Poul', 'Mahagera', 'pkisika1@gmail.com', 'Male', '2021-06-25', 0x63617374726f6f696c2e706466, 756376653, 'Tanzania, United Republic of'),
('Immanuel', 'Micky', 'samboimmanuel@yahoo.com', 'Male', '2021-06-22', 0x326e64205965617220726573756c74732e706466, 694337725, 'Tanzania, United Republic of');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `email` varchar(120) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'Normal'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `email`, `usertype`) VALUES
(1, 'samboimmanuel@yahoo.com', 'normal'),
(2, 'myye1997@gmail.com', 'Admin'),
(3, 'pkisika1@gmail.com', 'Normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `jobId` (`jobid`);

--
-- Indexes for table `app_type`
--
ALTER TABLE `app_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `app_type`
--
ALTER TABLE `app_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicants`
--
ALTER TABLE `applicants`
  ADD CONSTRAINT `applicants_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicants_ibfk_2` FOREIGN KEY (`jobId`) REFERENCES `jobs` (`jobid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `app_type`
--
ALTER TABLE `app_type`
  ADD CONSTRAINT `app_type_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_type`
--
ALTER TABLE `user_type`
  ADD CONSTRAINT `user_type_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
