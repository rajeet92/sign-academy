-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 15, 2020 at 10:41 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u573225106_signacademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `addassignment`
--

CREATE TABLE `addassignment` (
  `assign_id` int(200) NOT NULL,
  `assign_class` varchar(200) NOT NULL,
  `upload_assignment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addassignment`
--

INSERT INTO `addassignment` (`assign_id`, `assign_class`, `upload_assignment`) VALUES
(1, 'IIT / JEE / NEET', 'Sample_Assignment.pdf'),
(2, 'VIII Foundation', 'sample-file.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `addfaculty`
--

CREATE TABLE `addfaculty` (
  `fid` int(200) NOT NULL,
  `faculty_name` varchar(200) NOT NULL,
  `faculty_spec` varchar(300) NOT NULL,
  `faculty_qual` varchar(200) NOT NULL,
  `faculty_teach` varchar(300) NOT NULL,
  `faculty_loc` varchar(200) NOT NULL,
  `faculty_pic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addfaculty`
--

INSERT INTO `addfaculty` (`fid`, `faculty_name`, `faculty_spec`, `faculty_qual`, `faculty_teach`, `faculty_loc`, `faculty_pic`) VALUES
(4, 'Lokesh Kumar', 'Mathematics & Chemistry', 'B.Tech(Electrical Engineering)', 'Mathematics and Chemistry', 'NIT, Jalandhar', '1592567832profile.jpg'),
(5, 'Ajeet Kumar rai', 'Physics', 'B.Tech(Mechanical Engineering)', 'Physics', 'NIT, Jalandhar', '1592568780profile1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `addnotes`
--

CREATE TABLE `addnotes` (
  `notes_id` int(200) NOT NULL,
  `notes_class` varchar(200) NOT NULL,
  `notes_topic` varchar(200) NOT NULL,
  `upload_notes` varchar(500) NOT NULL,
  `currdt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addnotes`
--

INSERT INTO `addnotes` (`notes_id`, `notes_class`, `notes_topic`, `upload_notes`, `currdt`) VALUES
(3, 'VIII Foundation', 'Algebra', 'Sample Notes.docx', '2020-07-15'),
(4, 'VIII Foundation', 'Trignometric', 'sample-file.pdf', '2020-07-10'),
(5, 'IX Foundation', 'Sample', 'sample-file.pdf', '2020-07-23'),
(6, 'IX Foundation', 'Test', 'Sample Notes.docx', '2020-07-23'),
(11, 'IX Foundation', 'Test ', 'iimjobs_Siddhesh_Chourasia (1).pdf', '2020-08-14'),
(12, 'IX Foundation', 'Test ', 'iimjobs_Siddhesh_Chourasia (1).pdf', '2020-08-14');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `adname` varchar(200) NOT NULL,
  `admail` varchar(300) NOT NULL,
  `adpswd` varchar(300) NOT NULL,
  `usrtype` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`adname`, `admail`, `adpswd`, `usrtype`) VALUES
('rajeet', 'rajeet92@gmail.com', 'january92', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `reg_id` int(200) NOT NULL,
  `reg_name` varchar(200) NOT NULL,
  `reg_mail` varchar(300) NOT NULL,
  `reg_parent` varchar(200) NOT NULL,
  `reg_date` date NOT NULL,
  `reg_gender` varchar(100) NOT NULL,
  `reg_school` varchar(200) NOT NULL,
  `reg_course` varchar(300) NOT NULL,
  `reg_board` varchar(300) NOT NULL,
  `reg_address` varchar(400) NOT NULL,
  `reg_state` varchar(300) NOT NULL,
  `reg_city` varchar(200) NOT NULL,
  `reg_contact` varchar(200) NOT NULL,
  `reg_profile` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `reg_name`, `reg_mail`, `reg_parent`, `reg_date`, `reg_gender`, `reg_school`, `reg_course`, `reg_board`, `reg_address`, `reg_state`, `reg_city`, `reg_contact`, `reg_profile`) VALUES
(1, 'Ashfa sadaf', 'ashfas05@gmail.com', 'Md Rehan Khan', '2020-06-18', 'on', 'Punjab Technical university', 'MCA', 'PTU', 'Patparganj, Delhi', 'Delhi', 'Delhi', '3467090012', 'avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addassignment`
--
ALTER TABLE `addassignment`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `addfaculty`
--
ALTER TABLE `addfaculty`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `addnotes`
--
ALTER TABLE `addnotes`
  ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`admail`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addassignment`
--
ALTER TABLE `addassignment`
  MODIFY `assign_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `addfaculty`
--
ALTER TABLE `addfaculty`
  MODIFY `fid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `addnotes`
--
ALTER TABLE `addnotes`
  MODIFY `notes_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `reg_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
