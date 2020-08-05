-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2020 at 03:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` varchar(20) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Password`) VALUES
('soham@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cexam`
--

CREATE TABLE `cexam` (
  `qid` varchar(10) NOT NULL,
  `ans` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cexam`
--

INSERT INTO `cexam` (`qid`, `ans`) VALUES
('question1', 'f2'),
('question2', 'f2'),
('question3', 'f3'),
('question4', 'f4'),
('question5', 'f1'),
('question6', 'f2'),
('question7', 'f3'),
('question8', 'f3'),
('question9', 'f1'),
('question10', 'f2'),
('question11', 'f4'),
('question12', 'f1'),
('question13', 'f3'),
('question14', 'f4'),
('question15', 'f1');

-- --------------------------------------------------------

--
-- Table structure for table `dmexam`
--

CREATE TABLE `dmexam` (
  `qid` varchar(10) NOT NULL,
  `ans` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dmexam`
--

INSERT INTO `dmexam` (`qid`, `ans`) VALUES
('question1', 'f1'),
('question2', 'f2'),
('question3', 'f3'),
('question4', 'f2'),
('question5', 'f1'),
('question6', 'f4'),
('question7', 'f3'),
('question8', 'f2'),
('question9', 'f2'),
('question10', 'f4'),
('question11', 'f2'),
('question12', 'f2'),
('question13', 'f1'),
('question14', 'f2'),
('question15', 'f1');

-- --------------------------------------------------------

--
-- Table structure for table `pexam`
--

CREATE TABLE `pexam` (
  `qid` varchar(10) NOT NULL,
  `ans` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pexam`
--

INSERT INTO `pexam` (`qid`, `ans`) VALUES
('question1', 'f1'),
('question2', 'f2'),
('question3', 'f3'),
('question4', 'f4'),
('question5', 'f1'),
('question6', 'f2'),
('question7', 'f3'),
('question8', 'f4'),
('question9', 'f1'),
('question10', 'f2'),
('question11', 'f3'),
('question12', 'f4'),
('question13', 'f1'),
('question14', 'f2'),
('question15', 'f3');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `r_id` int(5) NOT NULL,
  `s_id` varchar(20) NOT NULL,
  `score` int(2) NOT NULL,
  `S_code` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`r_id`, `s_id`, `score`, `S_code`, `status`) VALUES
(11, 'pank@gm.co', 12, 2, 'passed'),
(37, 'sid@gm.com', 0, 1, 'failed'),
(58, 'tejas@gm.com', 14, 2, 'passed'),
(61, 'soham@gm.co', 9, 3, 'passed'),
(62, 'mansi@gm.com', 5, 3, 'failed'),
(80, 'badu@gm.com', 10, 2, 'passed'),
(81, 'chandy@gm.com', 2, 1, 'failed'),
(90, 'xyz@gm.com', 5, 1, 'failed'),
(92, 'aniket@gm.com', 11, 1, 'passed'),
(96, 'yash@gm.com', 6, 1, 'failed');

-- --------------------------------------------------------

--
-- Table structure for table `semister`
--

CREATE TABLE `semister` (
  `Semister` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semister`
--

INSERT INTO `semister` (`Semister`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` varchar(20) NOT NULL,
  `s_name` varchar(20) NOT NULL,
  `l_name` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `Semister` int(1) NOT NULL,
  `sq` varchar(30) NOT NULL,
  `sa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `l_name`, `password`, `Semister`, `sq`, `sa`) VALUES
('aniket@gm.com', 'aniket', 'kudale', '1234', 1, 'What is your Pet Name?', 'mansi'),
('badu@gm.com', 'hrushikesh', 'karandikar', '1234', 2, 'What is your Birthdate?', '123'),
('chandy@gm.com', 'omkar', 'kulkarni', '1234', 1, 'What is your Pet Name?', 'pug'),
('mansi@gm.com', 'mansi', 'dhumal', '1234', 3, 'What is your Pet Name?', 'aniket'),
('pank@gm.co', 'pankaj', 'deokar', '1234', 2, 'What is your Pet Name?', 'asdf'),
('sid@gm.com', 'siddhesh', 'ladkat', '1234', 1, 'What is your Pet Name?', 'chandy'),
('sidd22051997@gmail.c', 'siddhesh', 'ladkat', '1234', 1, 'What is Your Phone Number?', '123'),
('soham@gm.co', 'soham', 'godbole', '1234', 3, 'What is Your Phone Number?', '123'),
('tejas@gm.com', 'tejas', 'gaikwad', '1234', 2, 'What is your Pet Name?', 'yash'),
('xyz@gm.com', 'abc', 'xyz', '1234', 1, 'What is your Pet Name?', 'ellie'),
('yash@gm.com', 'yash', 'sathe', '1234', 1, 'What is your Birthdate?', '2205');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `S_code` int(11) NOT NULL,
  `Subject_title` varchar(20) NOT NULL,
  `Semister` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`S_code`, `Subject_title`, `Semister`) VALUES
(1, 'C', 1),
(2, 'python', 2),
(3, 'data mining', 3);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `name` varchar(20) NOT NULL,
  `data` varchar(1222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`name`, `data`) VALUES
('project.sql', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `sscode` (`S_code`);

--
-- Indexes for table `semister`
--
ALTER TABLE `semister`
  ADD PRIMARY KEY (`Semister`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `sas` (`Semister`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`S_code`),
  ADD KEY `sas1` (`Semister`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `sscode` FOREIGN KEY (`S_code`) REFERENCES `subject` (`S_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `sas` FOREIGN KEY (`Semister`) REFERENCES `semister` (`Semister`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `sas1` FOREIGN KEY (`Semister`) REFERENCES `semister` (`Semister`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
