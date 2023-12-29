-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2023 at 01:36 PM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `password`, `status`) VALUES
('admin', 'admin12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsId` varchar(20) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `news` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsId`, `date`, `time`, `news`, `status`) VALUES
('NEW6457a04c9fbab', '07/05/23', '06:27:48', 'Dream Way Software solutions.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `userId` varchar(30) NOT NULL,
  `postId` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `post` varchar(200) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `feedback` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `saleId` int(100) NOT NULL,
  `userId` varchar(20) NOT NULL,
  `ventureName` varchar(30) NOT NULL,
  `area` varchar(20) NOT NULL,
  `plotNo` varchar(15) NOT NULL,
  `price` varchar(10) NOT NULL,
  `note` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`date`, `time`, `saleId`, `userId`, `ventureName`, `area`, `plotNo`, `price`, `note`) VALUES
('28/05/23', '11:13:11', 1, 'ADITYA00003', 'new', '10', '1-12', '10025', 'ok'),
('28/05/23', '09:27:23', 2, 'ADITYA00001', 'some', '10', '1-12', '100', ''),
('28/05/23', '09:27:31', 3, 'ADITYA00001', 'some', '10', '1-12', '100', ''),
('28/05/23', '10:23:55', 7, 'ADITYA00001', 'new', '10', '1-12', '1235', ''),
('28/05/23', '10:24:27', 8, 'ADITYA00001', 'new', '10', '1-12', '1235', ''),
('28/05/23', '10:25:10', 9, 'ADITYA00001', 'new', '10', '1-12', '1235', ''),
('28/05/23', '11:16:47', 10, 'ADITYA00001', 'new', '10', '1-12', '12', 'ok'),
('28/05/23', '11:37:38', 11, 'ADITYA00001', 'new', '10', '1-12', '253', 'ok'),
('28/05/23', '11:38:13', 12, 'ADITYA00001', 'new', '10', '1-12', '253', 'ok'),
('28/05/23', '11:39:45', 13, 'ADITYA00003', 'kkd', '10', '1-12', '253', 'ok'),
('29/05/23', '06:03:14', 14, 'ADITYA00003', 'kkd', '10', '1-12', '123', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sl_no` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `referId` varchar(30) NOT NULL,
  `userId` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `adhar` varchar(20) NOT NULL,
  `userName` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pasword` varchar(12) NOT NULL,
  `earning` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sl_no`, `date`, `time`, `referId`, `userId`, `level`, `adhar`, `userName`, `gender`, `phone`, `pincode`, `email`, `pasword`, `earning`) VALUES
(1, '11/05/23', '07:03:10', 'ADMIN', 'ADITYA00001', '1_Senior_Marketing_Director', '123412341259', 'ADMIN ', '', '9878987891', '1_Kakinada', '12@com', '1234', 50),
(2, '27/05/23', '12:32:26', 'ADITYA00001', 'ADITYA00002', '2_Marketing_Director', '123412341287', 'Naga shankar', '', '9898989893', '533001', '', '1234', 100),
(3, '27/05/23', '12:35:58', 'ADITYA00002', 'ADITYA00003', '3_Assistant_Marketing_Director', '123412341276', 'shankar', '', '9898989893', '533001', '', '1234', 1000),
(4, '27/05/23', '04:31:46', 'ADITYA00001', 'ADITYA00004', '1_Senior_Marketing_Director', '123412341255', 'Naga shankar', '', '9898989893', '533001', '', '1234', 0),
(5, '28/05/23', '07:48:04', 'ADITYA00001', 'ADITYA00005', '4_Senior_General_Manager', '123412341239', 'Naga shankar', 'Male', '9989263636', '1_Kakinada', '', '1234', 0),
(6, '28/05/23', '11:13:59', 'ADITYA00001', 'ADITYA00006', '1_Senior_Marketing_Director', '123412347655', 'naga shankar', 'Male', '9898989896', '3_Rajahmundry', 'hi@com', '1234', 0),
(7, '28/05/23', '11:14:30', 'ADITYA00001', 'ADITYA00007', '5_General_Manager', '123412342534', 'asd', 'Female', '9898989893', '1_Kakinada', 'asd@com', '1234', 0),
(8, '28/05/23', '11:15:17', 'ADITYA00005', 'ADITYA00008', '1_Senior_Marketing_Director', '123412343652', 'Naga shankar1235', 'Female', '9898989891', '1_Kakinada', 'hi@com', '1234', 0),
(9, '28/05/23', '11:15:46', 'ADITYA00001', 'ADITYA00009', '1_Senior_Marketing_Director', '123412342156', 'shankar', 'Male', '9989263636', '1_Kakinada', 'b@com', '1234', 0),
(10, '28/05/23', '11:16:10', 'ADITYA00001', 'ADITYA000010', '1_Senior_Marketing_Director', '123412341256', 'rajesh', 'Female', '9898989896', '1_Kakinada', '', '1234', 0),
(11, '29/05/23', '06:03:56', 'ADITYA00003', 'ADITYA00011', '4_Senior_General_Manager', '123412346753', 'rajesh', 'Male', '9898989896', '1_Kakinada', 'asd@com', '1234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `venture`
--

CREATE TABLE `venture` (
  `ventureId` varchar(10) NOT NULL,
  `ventureName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `venture`
--

INSERT INTO `venture` (`ventureId`, `ventureName`) VALUES
('1', 'new'),
('2', 'new'),
('3', 'kkd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsId`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD UNIQUE KEY `title` (`postId`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`saleId`),
  ADD UNIQUE KEY `saleId` (`saleId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sl_no`),
  ADD UNIQUE KEY `userId` (`userId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
