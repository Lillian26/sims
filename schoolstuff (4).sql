-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2018 at 07:10 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolstuff`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `session_id` varchar(45) DEFAULT NULL,
  `logIn_timestamp` varchar(45) DEFAULT NULL,
  `logOut_timestamp` varchar(45) DEFAULT NULL,
  `ipaddress` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `courseunit`
--

CREATE TABLE `courseunit` (
  `courseunitID` int(10) UNSIGNED NOT NULL,
  `courseunitCode` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `semesterOffered` varchar(45) DEFAULT NULL,
  `yearOffered` varchar(45) DEFAULT NULL,
  `isTraining` varchar(45) DEFAULT NULL,
  `creditUnits` varchar(45) DEFAULT NULL,
  `programme_programmeID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ethusiast`
--

CREATE TABLE `ethusiast` (
  `id` int(11) NOT NULL,
  `s_key` varchar(45) NOT NULL,
  `computer_name` varchar(45) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `s_status` varchar(2) NOT NULL,
  `validity` varchar(9) NOT NULL,
  `i_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ethusiast`
--

INSERT INTO `ethusiast` (`id`, `s_key`, `computer_name`, `ip_address`, `s_status`, `validity`, `i_date`) VALUES
(56, 'AE5F-37BE-D3F5-9A08', '', '', 'T', '30', 'SunSun/May'),
(57, 'ACE3-820E-0ECB-D2C1', '', '', 'T', '30', ''),
(58, '48E1-1364-821E-B26D', '', '', 'T', '30', '27/05/18'),
(59, 'D17B-2170-6478-8FCA', '', '', 'T', '30', '27/05/1818'),
(60, 'E92C-164F-6D7A-5CB8', '', '', 'T', '30', ''),
(61, 'FD3E-5903-18C6-D6BF', '', '', 'T', '30', '27/05/18'),
(62, '20DB-5367-0D6C-6109', '', '', 'A', '30', ''),
(63, 'BD65-0276-5DA2-6B32', '', '', 'T', '30', ''),
(64, 'CFE4-68DA-EF95-053D', '', '', 'A', '30', ''),
(65, '20DE-53C7-25DF-6724', '', '', 'A', '30', ''),
(66, '7E1D-CF8B-F296-869B', '', '', 'A', '30', ''),
(67, '92FA-D8C9-7B69-BD56', '', '', 'A', '60', ''),
(68, '5A1C-476C-5D04-32F6', '', '', 'A', '60', ''),
(69, 'C594-EF9A-C52E-D1CB', '', '', 'A', '60', ''),
(70, '1278-D715-3E29-F958', '', '', 'A', '60', ''),
(71, '683F-9CD4-147E-4621', '', '', 'A', '60', ''),
(72, 'B804-BC5E-9A40-F13E', '', '', 'A', '60', ''),
(73, 'EFBC-8E0F-01CD-C304', '', '', 'A', '60', ''),
(74, 'A4D6-729A-1D3C-36F7', '', '', 'A', '60', ''),
(75, '9CD8-50A2-D875-5C61', '', '', 'A', '60', ''),
(76, '9F18-3618-46EF-E374', '', '', 'A', '60', ''),
(77, '52B0-36A8-5879-D5B1', '', '', 'A', '60', ''),
(78, '04A3-20FC-21B3-526D', '', '', 'A', '120', ''),
(79, '1043-B60F-A1F9-AE59', '', '', 'A', '120', ''),
(80, '0C2A-CBA6-C8B3-48DE', '', '', 'A', '120', ''),
(81, '1486-A7CE-49D1-A9DF', '', '', 'A', '120', ''),
(82, '3106-1AC8-F45B-D0F3', '', '', 'A', '120', ''),
(83, '7615-D04C-86EF-E94F', '', '', 'A', '120', ''),
(84, 'D7A6-DC19-FE37-2034', '', '', 'A', '120', ''),
(85, '93D8-372B-C8D4-5BC1', '', '', 'A', '120', ''),
(86, '9BA8-D7F4-F4A3-B9D6', '', '', 'A', '120', ''),
(87, '2C16-3D47-8D56-1D42', '', '', 'A', '120', ''),
(88, '7D6E-86D5-59AC-3B04', '', '', 'A', '120', ''),
(89, '085A-E0B8-EA29-B671', '', '', 'A', '365', ''),
(90, 'F6E9-E104-586D-793E', '', '', 'A', '365', ''),
(91, 'A90B-7C2D-04BD-63BC', '', '', 'A', '365', ''),
(92, '81F0-71D8-9430-271B', '', '', 'A', '365', ''),
(93, '94FD-CD03-736E-963E', '', '', 'A', '365', ''),
(94, '8DE7-9BC1-830B-243C', '', '', 'A', '365', ''),
(95, 'FCE2-2180-9C42-F2BA', '', '', 'A', '365', ''),
(96, 'AC95-DA48-A0D6-E4B0', '', '', 'A', '365', ''),
(97, 'C13A-0193-20BD-83B7', '', '', 'A', '365', ''),
(98, 'BE80-FAD4-8135-5279', '', '', 'A', '365', ''),
(99, 'C0FB-15EA-1352-D19A', '', '', 'A', '365', '');

-- --------------------------------------------------------

--
-- Table structure for table `grading`
--

CREATE TABLE `grading` (
  `gradingID` int(10) UNSIGNED NOT NULL,
  `from` varchar(45) DEFAULT NULL,
  `to` varchar(45) DEFAULT NULL,
  `grade` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE `institute` (
  `id` int(10) UNSIGNED NOT NULL,
  `institute_name` varchar(45) DEFAULT NULL,
  `institute_no` varchar(10) NOT NULL,
  `poBox` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `telno1` varchar(45) DEFAULT NULL,
  `telno2` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `logo` varchar(45) DEFAULT NULL,
  `entryDate` datetime DEFAULT NULL,
  `updated_On` varchar(20) NOT NULL,
  `pro_key` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`id`, `institute_name`, `institute_no`, `poBox`, `address`, `telno1`, `telno2`, `email`, `type`, `logo`, `entryDate`, `updated_On`, `pro_key`) VALUES
(1, 'Team University', '3243', '444', 'Kampala, Kyebando, Kla', '+256700392854', '+256700392854', 'johnkalungi1@hotmail.com', 'University', 'a', NULL, '2018/05/23 13:12:03', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `login_attempts` varchar(45) DEFAULT NULL,
  `time` varchar(45) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `users_institute_instituteID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `login_attempts`, `time`, `users_id`, `users_institute_instituteID`) VALUES
(1, NULL, '1526276369', 1, 1),
(2, NULL, '1526276478', 1, 1),
(3, NULL, '1526284904', 1, 1),
(4, NULL, '1526284910', 1, 1),
(5, NULL, '1526284915', 1, 1),
(6, NULL, '1526286972', 1, 1),
(7, NULL, '1526377468', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `markID` int(10) UNSIGNED NOT NULL,
  `mark` varchar(45) DEFAULT NULL,
  `grade` varchar(45) DEFAULT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `semester` varchar(45) DEFAULT NULL,
  `otherRemarks` varchar(45) DEFAULT NULL,
  `yearOfOffering` varchar(45) DEFAULT NULL,
  `trainingHrs` varchar(45) DEFAULT NULL,
  `yearPart` varchar(45) DEFAULT NULL,
  `toMove` varchar(45) DEFAULT NULL,
  `yearEntered` varchar(45) DEFAULT NULL,
  `dateEntered` varchar(45) DEFAULT NULL,
  `examMonth` varchar(45) DEFAULT NULL,
  `enteredBy` varchar(45) DEFAULT NULL,
  `reasonForChange` varchar(45) DEFAULT NULL,
  `courseunit_courseunitID` int(10) UNSIGNED NOT NULL,
  `courseunit_programme_programmeID` int(10) UNSIGNED NOT NULL,
  `student_studentID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `parentID` int(10) UNSIGNED NOT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `telno1` varchar(45) DEFAULT NULL,
  `telno2` varchar(45) DEFAULT NULL,
  `alive` varchar(45) DEFAULT NULL,
  `career` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `studentID` int(10) UNSIGNED DEFAULT NULL,
  `student_studentID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `programmeID` int(10) UNSIGNED NOT NULL,
  `category` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `duration` varchar(45) DEFAULT NULL,
  `gradLoad` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `sponsorid` int(10) UNSIGNED NOT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `telno` varchar(45) DEFAULT NULL,
  `student_studentID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) UNSIGNED NOT NULL,
  `regNo` varchar(45) DEFAULT NULL,
  `studentNo` varchar(45) DEFAULT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `maritalStatus` varchar(45) DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `dob` varchar(45) DEFAULT NULL,
  `nationality` varchar(45) DEFAULT NULL,
  `hallOfResidence` varchar(45) DEFAULT NULL,
  `religion` varchar(45) DEFAULT NULL,
  `notes` varchar(45) DEFAULT NULL,
  `medicalProblem` varchar(45) DEFAULT NULL,
  `medicalInformation` varchar(45) DEFAULT NULL,
  `telNo` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `yearOfStudy` varchar(45) DEFAULT NULL,
  `placeOfResidence` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `yearOfAdmission` varchar(45) DEFAULT NULL,
  `dateOfAdmission` varchar(45) DEFAULT NULL,
  `yearOfCompletion` varchar(45) DEFAULT NULL,
  `dateofcompletion` varchar(45) DEFAULT NULL,
  `program` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `uceSchool` varchar(45) DEFAULT NULL,
  `uaceSchool` varchar(45) DEFAULT NULL,
  `uceAggregates` varchar(45) DEFAULT NULL,
  `uacePoints` varchar(45) DEFAULT NULL,
  `formerInstitution` varchar(45) DEFAULT NULL,
  `formerQualification` varchar(45) DEFAULT NULL,
  `promotionalStatus` varchar(45) DEFAULT NULL,
  `courseDuration` varchar(45) DEFAULT NULL,
  `reason` varchar(45) DEFAULT NULL,
  `uceIndex` varchar(45) DEFAULT NULL,
  `uaceIndex` varchar(45) DEFAULT NULL,
  `institutionReg` varchar(45) DEFAULT NULL,
  `yearOfCourse` varchar(45) DEFAULT NULL,
  `yearOfUace` varchar(45) DEFAULT NULL,
  `sponsorshipType` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `uace`
--

CREATE TABLE `uace` (
  `uaceID` int(10) UNSIGNED NOT NULL,
  `subject` varchar(45) DEFAULT NULL,
  `p1` varchar(45) DEFAULT NULL,
  `p2` varchar(45) DEFAULT NULL,
  `p3` varchar(45) DEFAULT NULL,
  `p4` varchar(45) DEFAULT NULL,
  `p5` varchar(45) DEFAULT NULL,
  `p6` varchar(45) DEFAULT NULL,
  `result` varchar(45) DEFAULT NULL,
  `parent_parentID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `uceresults`
--

CREATE TABLE `uceresults` (
  `uceresultsID` int(11) NOT NULL,
  `subject` varchar(45) DEFAULT NULL,
  `result` varchar(45) DEFAULT NULL,
  `student_studentID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `accNo` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `accountName` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `sname` varchar(45) DEFAULT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `designation` varchar(45) DEFAULT NULL,
  `dob` varchar(45) NOT NULL,
  `photoName` varchar(45) DEFAULT NULL,
  `dwp` varchar(300) DEFAULT NULL,
  `group` varchar(45) DEFAULT NULL,
  `accStatus` varchar(45) DEFAULT NULL,
  `entryDate` varchar(45) DEFAULT NULL,
  `updated_On` varchar(45) NOT NULL,
  `phone1` varchar(45) DEFAULT NULL,
  `phone2` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `accNo`, `username`, `accountName`, `gender`, `sname`, `fname`, `designation`, `dob`, `photoName`, `dwp`, `group`, `accStatus`, `entryDate`, `updated_On`, `phone1`, `phone2`, `email`, `institute_instituteID`) VALUES
(1, '3245a', 'johna', 'a', 'Female', 'Mubiru', 'John Baptist', 'Headteacher', '2018-05-02', 'a', '$2y$10$PMqeRW/3aBkioO18ksjF2OLGCcIHpaaZ.sglG2Q6LfVG21C7AWcgK', 'user', 'Activea', 'a', '2018/05/26 23:32:14', '+256700392854', '+256700392854', 'johnkalungi1@hotmail.com', 1),
(10, 'USR534', '', NULL, '', '', '', '', '', NULL, '', '', '--Select--', '', '', '', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courseunit`
--
ALTER TABLE `courseunit`
  ADD PRIMARY KEY (`courseunitID`,`programme_programmeID`),
  ADD KEY `fk_courseunit_programme1_idx` (`programme_programmeID`);

--
-- Indexes for table `ethusiast`
--
ALTER TABLE `ethusiast`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `s_key` (`s_key`);

--
-- Indexes for table `grading`
--
ALTER TABLE `grading`
  ADD PRIMARY KEY (`gradingID`);

--
-- Indexes for table `institute`
--
ALTER TABLE `institute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`,`users_id`,`users_institute_instituteID`),
  ADD KEY `fk_login_attempts_users1_idx` (`users_id`,`users_institute_instituteID`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`markID`,`courseunit_courseunitID`,`courseunit_programme_programmeID`,`student_studentID`),
  ADD KEY `fk_marks_courseunit1_idx` (`courseunit_courseunitID`,`courseunit_programme_programmeID`),
  ADD KEY `fk_marks_student1_idx` (`student_studentID`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`parentID`,`student_studentID`),
  ADD KEY `fk_parent_student1_idx` (`student_studentID`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`programmeID`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`sponsorid`,`student_studentID`),
  ADD KEY `fk_sponsor_student1_idx` (`student_studentID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `regNo` (`regNo`),
  ADD UNIQUE KEY `studentNo` (`studentNo`);

--
-- Indexes for table `uace`
--
ALTER TABLE `uace`
  ADD PRIMARY KEY (`uaceID`,`parent_parentID`),
  ADD KEY `fk_uace_parent1_idx` (`parent_parentID`);

--
-- Indexes for table `uceresults`
--
ALTER TABLE `uceresults`
  ADD PRIMARY KEY (`uceresultsID`,`student_studentID`),
  ADD KEY `fk_uceresults_student1_idx` (`student_studentID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`institute_instituteID`),
  ADD KEY `fk_users_institute1_idx` (`institute_instituteID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courseunit`
--
ALTER TABLE `courseunit`
  MODIFY `courseunitID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ethusiast`
--
ALTER TABLE `ethusiast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `grading`
--
ALTER TABLE `grading`
  MODIFY `gradingID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `institute`
--
ALTER TABLE `institute`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `markID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `parentID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programme`
--
ALTER TABLE `programme`
  MODIFY `programmeID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `sponsorid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uace`
--
ALTER TABLE `uace`
  MODIFY `uaceID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courseunit`
--
ALTER TABLE `courseunit`
  ADD CONSTRAINT `fk_courseunit_programme1` FOREIGN KEY (`programme_programmeID`) REFERENCES `programme` (`programmeID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD CONSTRAINT `fk_login_attempts_users1` FOREIGN KEY (`users_id`,`users_institute_instituteID`) REFERENCES `users` (`id`, `institute_instituteID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `fk_marks_courseunit1` FOREIGN KEY (`courseunit_courseunitID`,`courseunit_programme_programmeID`) REFERENCES `courseunit` (`courseunitID`, `programme_programmeID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_marks_student1` FOREIGN KEY (`student_studentID`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `fk_parent_student1` FOREIGN KEY (`student_studentID`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD CONSTRAINT `fk_sponsor_student1` FOREIGN KEY (`student_studentID`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `uace`
--
ALTER TABLE `uace`
  ADD CONSTRAINT `fk_uace_parent1` FOREIGN KEY (`parent_parentID`) REFERENCES `parent` (`parentID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `uceresults`
--
ALTER TABLE `uceresults`
  ADD CONSTRAINT `fk_uceresults_student1` FOREIGN KEY (`student_studentID`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_institute1` FOREIGN KEY (`institute_instituteID`) REFERENCES `institute` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
