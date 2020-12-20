-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 03:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `MAIL` varchar(30) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `PHONE` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`MAIL`, `NAME`, `PASSWORD`, `PHONE`) VALUES
('bhanuprakash.d111@gmail.com', 'Bhanuprakash', 'Bhanu.d111@', '9059950365');

-- --------------------------------------------------------

--
-- Table structure for table `cse`
--

CREATE TABLE `cse` (
  `SubjectName` varchar(30) NOT NULL,
  `CourseCode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse`
--

INSERT INTO `cse` (`SubjectName`, `CourseCode`) VALUES
('Advanced Calculus', '14MAT101'),
('BEEE', '14ECE101'),
('EngineeringPhysics', '14EEE101'),
('EVS', '14EEE102'),
('ENGLISH', '14ENG101'),
('PYTHON', '14CSU101');

-- --------------------------------------------------------

--
-- Table structure for table `csemarks`
--

CREATE TABLE `csemarks` (
  `ID` varchar(10) NOT NULL,
  `s1m1` int(11) NOT NULL DEFAULT 0,
  `s2m1` int(11) NOT NULL DEFAULT 0,
  `s3m1` int(11) NOT NULL DEFAULT 0,
  `s4m1` int(11) NOT NULL DEFAULT 0,
  `s5m1` int(11) NOT NULL DEFAULT 0,
  `s6m1` int(11) NOT NULL DEFAULT 0,
  `s1m2` int(11) NOT NULL DEFAULT 0,
  `s2m2` int(11) NOT NULL DEFAULT 0,
  `s3m2` int(11) NOT NULL DEFAULT 0,
  `s4m2` int(11) NOT NULL DEFAULT 0,
  `s5m2` int(11) NOT NULL DEFAULT 0,
  `s6m2` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `csemarks`
--

INSERT INTO `csemarks` (`ID`, `s1m1`, `s2m1`, `s3m1`, `s4m1`, `s5m1`, `s6m1`, `s1m2`, `s2m2`, `s3m2`, `s4m2`, `s5m2`, `s6m2`) VALUES
('17691a0514', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('17699a0555', 30, 27, 15, 15, 27, 12, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ecemarks`
--

CREATE TABLE `ecemarks` (
  `ID` varchar(10) NOT NULL,
  `s1m1` int(11) NOT NULL DEFAULT 0,
  `s2m1` int(11) NOT NULL DEFAULT 0,
  `s3m1` int(11) NOT NULL DEFAULT 0,
  `s4m1` int(11) NOT NULL DEFAULT 0,
  `s5m1` int(11) NOT NULL DEFAULT 0,
  `s1m2` int(11) NOT NULL DEFAULT 0,
  `s2m2` int(11) NOT NULL DEFAULT 0,
  `s3m2` int(11) NOT NULL DEFAULT 0,
  `s4m2` int(11) NOT NULL DEFAULT 0,
  `s5m2` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `facultydetails`
--

CREATE TABLE `facultydetails` (
  `NAME` varchar(30) NOT NULL,
  `ID` varchar(10) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `SubjectCode` varchar(10) NOT NULL,
  `Phone` char(10) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `SECTION` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facultydetails`
--

INSERT INTO `facultydetails` (`NAME`, `ID`, `Department`, `Subject`, `SubjectCode`, `Phone`, `Mail`, `SECTION`) VALUES
('bhanu', '17691a0515', 'cse', 'physics', '14csu111', '9059950365', 'bhanuprakash.d111@gmail.com', 'C'),
('madam', '123456', 'cse', 'maths', '14MAT101', '7780752508', 'madam@gmail.com', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `facultylogin`
--

CREATE TABLE `facultylogin` (
  `MAIL` varchar(30) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL DEFAULT 'Reset1998',
  `PHONE` char(10) NOT NULL,
  `ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facultylogin`
--

INSERT INTO `facultylogin` (`MAIL`, `NAME`, `PASSWORD`, `PHONE`, `ID`) VALUES
('madam@gmail.com', 'madam', 'Reset1998', '7780752508', '123456'),
('bhanuprakash.d111@gmail.com', 'bhanu', 'Reset1998', '9059950365', '17691a0515');

-- --------------------------------------------------------

--
-- Table structure for table `parentdetails`
--

CREATE TABLE `parentdetails` (
  `NAME` varchar(30) NOT NULL,
  `MAIL` varchar(30) NOT NULL,
  `CHILDNAME` varchar(30) NOT NULL,
  `CHILDROLLNO` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parentdetails`
--

INSERT INTO `parentdetails` (`NAME`, `MAIL`, `CHILDNAME`, `CHILDROLLNO`) VALUES
('shankara', 'shankar@mits.ac.in', 'Bhanu', '17699a0555'),
('shankara', 'lokesh@gmail.com', 'basavaraju', '17691a0514');

-- --------------------------------------------------------

--
-- Table structure for table `parentlogin`
--

CREATE TABLE `parentlogin` (
  `MAIL` varchar(30) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL,
  `PHONE` char(10) NOT NULL,
  `ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parentlogin`
--

INSERT INTO `parentlogin` (`MAIL`, `NAME`, `PASSWORD`, `PHONE`, `ID`) VALUES
('shankar@mits.ac.in', 'shankara', 'Parent@1234', '9440680352', '17699a0555'),
('lokesh@gmail.com', 'shankara', 'Parent@1234', '9440680352', '17691a0514');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `name` varchar(30) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `section` char(1) NOT NULL,
  `PHONE` char(10) NOT NULL,
  `id` char(10) NOT NULL,
  `parentname` varchar(30) NOT NULL,
  `parentphone` char(10) NOT NULL,
  `parentmail` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`name`, `branch`, `section`, `PHONE`, `id`, `parentname`, `parentphone`, `parentmail`, `mail`) VALUES
('basavaraju', 'cse', 'A', '9874563210', '17691a0514', 'shankara', '9440680352', 'lokesh@gmail.com', '17691a0514@mits.ac.in'),
('Bhanu', 'cse', 'c', '9059950365', '17699a0555', 'shankara', '9440680352', 'shankar@mits.ac.in', '17699a0555@mits.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `DEPARTMENT` varchar(30) NOT NULL,
  `MAIL` varchar(30) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL DEFAULT 'Mits@1234',
  `PHONE` char(10) NOT NULL,
  `ROLLNO` char(10) NOT NULL,
  `SECTION` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`DEPARTMENT`, `MAIL`, `NAME`, `PASSWORD`, `PHONE`, `ROLLNO`, `SECTION`) VALUES
('cse', '17691a0514@mits.ac.in', 'basavaraju', 'Mits@1234', '9874563210', '17691a0514', 'A'),
('cse', '17699a0555@mits.ac.in', 'Bhanu', 'Mits@1234', '9059950365', '17699a0555', 'c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `csemarks`
--
ALTER TABLE `csemarks`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ecemarks`
--
ALTER TABLE `ecemarks`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `facultylogin`
--
ALTER TABLE `facultylogin`
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `MAIL` (`MAIL`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `studentlogin`
--
ALTER TABLE `studentlogin`
  ADD UNIQUE KEY `MAIL` (`MAIL`,`PHONE`,`ROLLNO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
