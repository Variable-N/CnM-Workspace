-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 03:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bucc`
--

-- --------------------------------------------------------

--
-- Table structure for table `captions`
--

CREATE TABLE `captions` (
  `Username` varchar(50) NOT NULL,
  `Event_ID` varchar(10) NOT NULL,
  `Submitted_Caption` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `captions`
--

INSERT INTO `captions` (`Username`, `Event_ID`, `Submitted_Caption`) VALUES
('niloy', '2022010501', ' ASDF');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Event_ID` varchar(10) NOT NULL,
  `Event_Name` varchar(100) NOT NULL,
  `Event_Date` date NOT NULL,
  `Hosted_by` varchar(100) NOT NULL,
  `Chosen_caption` text DEFAULT NULL,
  `Caption_writer` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Event_ID`, `Event_Name`, `Event_Date`, `Hosted_by`, `Chosen_caption`, `Caption_writer`) VALUES
('2022010501', 'BUCC Project Presentation', '2022-02-06', 'Brac University Computer Club', NULL, NULL),
('2022022801', 'Conquer Logical Reasoning with Kaykobad Sir', '2022-02-28', 'Mohammad Kaykobad', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `Username` varchar(50) NOT NULL,
  `Task_ID` int(10) NOT NULL,
  `Task_Description` text DEFAULT NULL,
  `deadline` date NOT NULL,
  `Given_By` varchar(50) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `Event_ID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`Username`, `Task_ID`, `Task_Description`, `deadline`, `Given_By`, `Status`, `Event_ID`) VALUES
('Anika', 1839053080, ' Need Caption for Webinar \" Conquer Logical Reasoning with Kaykobad Sir\"\r\n Date: 2022-02-28', '2022-02-23', 'Aditi', 'Not Done', 2022022801),
('Habiba', 1031924129, ' Need Caption for Webinar \" Conquer Logical Reasoning with Kaykobad Sir\"\r\n Date: 2022-02-28', '2022-02-23', 'Aditi', 'Not Done', 2022022801),
('ishrat', 1000000001, 'Caption needed for a webinar on “Conquer Logical Reasoning with Kaykobad Sir”.\r\nThe webinar is related to analytical skills. You can take help from google and previous posts.\r\nCaption submission deadline : 6pm', '2022-02-25', 'admin', 'Not Done', 2022022801),
('ishrat', 1918028223, ' Need Caption for Webinar \" Conquer Logical Reasoning with Kaykobad Sir\"\r\n Date: 2022-02-28', '2022-02-23', 'Aditi', 'Not Done', 2022022801),
('ishrat', 2000000004, 'Anchoring Practice for “Conquer Logical Reasoning with Kaykobad Sir” at 8 PM', '2022-02-04', 'admin', 'Not Done', 2022010501),
('Mahinoor', 1453708432, ' Need Caption for Webinar \" Conquer Logical Reasoning with Kaykobad Sir\"\r\n Date: 2022-02-28', '2022-02-23', 'Aditi', 'Not Done', 2022022801),
('Maisha', 1643041871, ' Need Caption for Webinar \" Conquer Logical Reasoning with Kaykobad Sir\"\r\n Date: 2022-02-28', '2022-02-23', 'Aditi', 'Not Done', 2022022801),
('Moyuri', 1206673653, ' Need Caption for Webinar \" Conquer Logical Reasoning with Kaykobad Sir\"\r\n Date: 2022-02-28', '2022-02-23', 'Aditi', 'Not Done', 2022022801),
('Nahid', 1179124249, ' Need Caption for Webinar \" Conquer Logical Reasoning with Kaykobad Sir\"\r\n Date: 2022-02-28', '2022-02-23', 'Aditi', 'Not Done', 2022022801),
('niloy', 1000000002, 'Caption needed for a webinar on “Conquer Logical Reasoning with Kaykobad Sir”.\r\nThe webinar is related to analytical skills. You can take help from google and previous posts.\r\nCaption submission deadline : 6pm', '2022-02-25', 'admin1', 'Not Done', 2022022801),
('niloy', 1000000003, 'Caption needed for a webinar on “BUCC PROJECT PRESENTATION”.\r\n', '2022-02-04', 'admin', 'Done', 2022010501),
('niloy', 1811098378, ' Need Caption for Webinar \" Conquer Logical Reasoning with Kaykobad Sir\"\r\n Date: 2022-02-28', '2022-02-23', 'Aditi', 'Not Done', 2022022801),
('Nodi', 1466792984, ' Need Caption for Webinar \" Conquer Logical Reasoning with Kaykobad Sir\"\r\n Date: 2022-02-28', '2022-02-23', 'Aditi', 'Not Done', 2022022801),
('Sajid', 1463847685, ' Need Caption for Webinar \" Conquer Logical Reasoning with Kaykobad Sir\"\r\n Date: 2022-02-28', '2022-02-23', 'Aditi', 'Not Done', 2022022801),
('Sarwer', 1998421674, ' Need Caption for Webinar \" Conquer Logical Reasoning with Kaykobad Sir\"\r\n Date: 2022-02-28', '2022-02-23', 'Aditi', 'Not Done', 2022022801),
('Wasfi', 1499300376, ' Need Caption for Webinar \" Conquer Logical Reasoning with Kaykobad Sir\"\r\n Date: 2022-02-28', '2022-02-23', 'Aditi', 'Not Done', 2022022801),
('Zaid', 1424345213, ' Need Caption for Webinar \" Conquer Logical Reasoning with Kaykobad Sir\"\r\n Date: 2022-02-28', '2022-02-23', 'Aditi', 'Not Done', 2022022801);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `Username` varchar(50) NOT NULL,
  `ID` int(8) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Designation` varchar(32) NOT NULL,
  `Task_Completed` varchar(32) DEFAULT NULL,
  `Phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`Username`, `ID`, `Full_Name`, `Date_of_Birth`, `Email`, `Password`, `Designation`, `Task_Completed`, `Phone`) VALUES
('Aditi', 20104444, 'Aditi Saha', '1999-04-20', 'aditi.saha@g.bracu.ac.bd', '123', 'Senior Executive', '15', '0130000070'),
('admin', 12345678, 'Admin Bhaia', '1997-05-12', 'admin@gmail.com', '123', 'President', '10', '0'),
('admin1', 12345679, 'Admin Apu', '1997-05-12', 'admin2@gmail.com', '123', 'Vice-President', '8', '0'),
('Anika', 20006745, 'Anika Hasan', '1999-09-14', 'anika.hasan@g.bracu.ac.bd', '123', 'General Member', '7', '01312345678'),
('Arnab', 18123111, 'Arnab Saha Authro', '1997-09-12', 'arnab.saha.authro@g.bracu.ac.bd', '123', 'Assistant Director', '20', '01712345670'),
('Habiba', 20980075, 'Habiba Mahrin', '1999-09-14', 'habiba.mahrin@g.bracu.ac.bd', '123', 'Executive', '10', '01312345678'),
('hridy', 18101112, 'Fahmida Ahmed Hridy', '1997-10-04', 'fahmida.ahmed.hridy@g.bracu.ac.bd', ' 123 ', 'Director', '20', '01312345670'),
('ishrat', 20301031, 'Ishrat Tasnim Awishi', '2000-02-10', 'ishrat.tasnim.awishi@g.bracu.ac.bd', '123', 'Executive', '7', '0'),
('Jobayda', 20234560, 'Jobayda Khanam', '1999-09-14', 'jobayda.khanam@g.bracu.ac.bd', '123', 'Senior Executive', '15', '01312345678'),
('Mahinoor', 20321155, 'Mahinoor Rahman', '1999-09-14', 'mahinoor.rahman@g.bracu.ac.bd', '123', 'General Member', '7', '01312345678'),
('Maisha', 2035856, 'Maisha Jarin', '1999-09-14', 'maisha.jarin@g.bracu.ac.bd', '123', 'Executive', '10', '01312345678'),
('mitu', 18101111, 'Ishrat Jahan Mitu', '1997-10-05', 'ishrat.jahan.mitu@g.bracu.ac.bd', '123', 'Director', '20', '01745678901'),
('Moyuri', 20009786, 'Moyuri Saha', '1999-09-14', 'moyuri.saha@g.bracu.ac.bd', '123', 'General Member', '7', '01312345678'),
('Nahid', 2003568, 'Abdullah Al Nahid', '1999-09-14', 'abdullah.al.nahid@g.bracu.ac.bd', '123', 'Executive', '10', '01312345678'),
('niloy', 20101118, 'Niloy Farhan', '1999-12-16', 'niloy.farhan@g.bracu.ac.bd', '123', 'Executive', '4', '0'),
('Nodi', 20007748, 'Naima Tahsin Nodi', '1999-09-14', 'naima.tahsin.nodi@g.bracu.ac.bd', '123', 'General Member', '7', '01312345678'),
('Rifat', 20302035, 'Raihan Rifat', '1999-09-14', 'raihan.rifat@g.bracu.ac.bd', '123', 'Senior Executive', '15', '01312345678'),
('Rontu', 20008635, 'Rontu Das', '1999-09-14', 'rontu.das@g.bracu.ac.bd', '123', 'Senior Executive', '10', '01312345678'),
('Rubi', 20240056, 'MST Rubi', '1999-09-14', 'raihan.rifat@g.bracu.ac.bd', '123', 'Senior Executive', '15', '01312345678'),
('Sadia', 20300568, 'Sadia Tasnim', '0000-00-00', 'sadia.tasnim@g.bracu.ac.bd', '123', 'Senior Executive', '15', '01712345678'),
('Sajid', 20235346, 'Sajid Sohan', '1999-09-14', 'sajid.sohan@g.bracu.ac.bd', '123', 'Executive', '10', '01312345678'),
('Sarwer', 20336699, 'Sarwer Alam', '1999-09-14', 'sarwer.alam@g.bracu.ac.bd', '123', 'General Member', '7', '01312345678'),
('Wasfi', 20306750, 'Wasfi Hasan', '1999-09-14', 'wasfi.hasan@g.bracu.ac.bd', '123', 'Executive', '15', '01312345678'),
('Zaid', 20346700, 'Zaid Rahman', '1999-09-14', 'Zaid.rahman@g.bracu.ac.bd', '123', 'General Member', '7', '01312345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `captions`
--
ALTER TABLE `captions`
  ADD PRIMARY KEY (`Username`,`Event_ID`),
  ADD KEY `Event_ID` (`Event_ID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Event_ID`),
  ADD KEY `Caption_writer` (`Caption_writer`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`Username`,`Task_ID`),
  ADD KEY `Given_By` (`Given_By`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`Username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `captions`
--
ALTER TABLE `captions`
  ADD CONSTRAINT `captions_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `user_info` (`Username`),
  ADD CONSTRAINT `captions_ibfk_2` FOREIGN KEY (`Event_ID`) REFERENCES `event` (`Event_ID`);

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`Caption_writer`) REFERENCES `user_info` (`Username`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `user_info` (`Username`),
  ADD CONSTRAINT `task_ibfk_2` FOREIGN KEY (`Given_By`) REFERENCES `user_info` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
