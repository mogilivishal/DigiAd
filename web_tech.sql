-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 08:28 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slot_info`
--

CREATE TABLE `slot_info` (
  `sid` int(11) NOT NULL,
  `time` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slot_info`
--

INSERT INTO `slot_info` (`sid`, `time`, `date`, `place`) VALUES
(6, '16:00 to 17:00', '2nd November 2019', 'NYC '),
(7, '17:00 to 18:00', '2nd nov 2019', 'Hyderabad'),
(8, '14:00 to 18:00', '23rd November 2019', 'Area 51 Highway'),
(10, '18:00 to 20:00', '2nd November 2019', 'HYD to VJA Highway'),
(11, '12:00 to 14:00', '3rd November 2019', 'HYD to MUMBAI Highway'),
(12, '12:00 to 14:00', '3rd November 2019', 'HYD to MUMBAI Highway'),
(13, '12:00 to 18:00', '4th November 2019', 'NYC TimeSquare');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `sec_ques` varchar(200) NOT NULL,
  `sec_ans` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `num` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`username`, `password`, `firstname`, `lastname`, `sec_ques`, `sec_ans`, `dob`, `email`, `num`) VALUES
('Administrator', 'admin', 'Administrator', 'Administrator', 'What is your favourite place?', 'Hyderabad', '2000-01-04', NULL, NULL),
('aswdfg', 'vita', 'sadfgh', 'aswdfg', 'What is your favourite number?', '9', '2018-02-02', 'yada.kushal@vitap.ac.in', '9874563210'),
('Girish ', 'vitap', 'Jambhapuram', 'Girish ', 'What is your favourite number?', '7', '1999-09-13', 'girishkumar.jambhapuram@vitap.ac.in', '8328284222'),
('Goud', 'vishal', 'Vishal Goud', 'Goud', 'What is your favourite number?', '8', '2000-01-04', 'vishal.goud@vitap.ac.in', '1234567689'),
('Karthikeyan', 'vishal', 'Samithan', 'Karthikeyan', 'What is your favourite number?', '8', '2005-10-03', 'balukarupakuli@gmail.com', '9874561230'),
('Kushal', 'vitap', 'Yada', 'Kushal', 'What is your favourite number?', '8', '2016-02-02', 'yada.kushal@vitap.ac.in', '9874563210'),
('POTNURU', '123456', 'JHANSI KUMAR', 'POTNURU', 'What is your favourite number?', '7', '2019-09-18', NULL, NULL),
('Saikiran', 'saikiran', 'Gudepu', 'Saikiran', 'What is your favourite number?', '7', '2000-01-02', 'g.saikiran@vitap.ac.in', '9398544915'),
('SDFGH', 'vitv', 'ASDFGB', 'SDFGH', 'What is your favourite number?', '3', '2020-02-03', 'balukarupakuli@gmail.com', '9874563210'),
('Start', 'jarvis', 'Tony', 'Start', 'What is your favourite number?', '4', '1996-03-03', 'tonystark.jarvis@gmail.com', '7894561230'),
('Yaswanth', 'yash', 'Balija', 'Yaswanth', 'What is your favourite number?', '7', '1999-02-06', 'yash705coc@gmail.com', '9100281340');

-- --------------------------------------------------------

--
-- Table structure for table `video_details`
--

CREATE TABLE `video_details` (
  `vid_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `file_extension` varchar(10) NOT NULL,
  `vid_desc` varchar(300) NOT NULL,
  `approval` int(1) NOT NULL DEFAULT 0,
  `s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_details`
--

INSERT INTO `video_details` (`vid_id`, `username`, `filename`, `file_extension`, `vid_desc`, `approval`, `s_id`) VALUES
(26, 'Goud', '2', 'mp4', 'Hello', 0, 7),
(27, 'Karthikeyan', '3', 'mp4', 'rabbit', 0, 6),
(28, 'Karthikeyan', '4', 'mp4', 'How are you my friend', 1, 7),
(29, 'Goud', '5', 'mp4', 'Hi this is iz juice video', 0, 8),
(30, 'Yaswanth', '6', 'mp4', 'Hi this is ad hey', 0, 10),
(31, 'Goud', '7', 'mp4', 'hiiiii', 1, 8),
(32, 'Goud', '8', 'mp4', 'Hi this is cadbury video', 1, 10),
(33, 'Girish', '9', 'mp4', 'Hi this is a izjuice', 1, 12),
(34, 'Goud', '10', 'mp4', 'hi this is izjuice', 0, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `slot_info`
--
ALTER TABLE `slot_info`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `video_details`
--
ALTER TABLE `video_details`
  ADD PRIMARY KEY (`vid_id`),
  ADD KEY `user_fk` (`username`),
  ADD KEY `sid_fk` (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slot_info`
--
ALTER TABLE `slot_info`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `video_details`
--
ALTER TABLE `video_details`
  MODIFY `vid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `video_details`
--
ALTER TABLE `video_details`
  ADD CONSTRAINT `sid_fk` FOREIGN KEY (`s_id`) REFERENCES `slot_info` (`sid`),
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`username`) REFERENCES `user_details` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
