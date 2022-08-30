-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 01:09 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practicumdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bu_user`
--

CREATE TABLE `bu_user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(1) UNSIGNED NOT NULL,
  `reset_password` varchar(50) NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `change_date` datetime NOT NULL,
  `action` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bu_user`
--

INSERT INTO `bu_user` (`user_id`, `username`, `password`, `role`, `reset_password`, `date_modified`, `change_date`, `action`) VALUES
(1, 'teacher1', 'teacher', 2, 'teacher', '2020-06-12 08:08:19', '0000-00-00 00:00:00', ''),
(2, 'teacher2', 'teacher', 2, 'teacher', NULL, '0000-00-00 00:00:00', ''),
(3, 'teacher3', 'teacher3', 2, 'teacher', NULL, '0000-00-00 00:00:00', ''),
(4, 'teacher4', 'teacher4', 2, 'teacher', NULL, '0000-00-00 00:00:00', ''),
(5, 'administer', 'administrator', 1, 'admin3', '2020-06-18 07:57:36', '0000-00-00 00:00:00', ''),
(6, 'ley', 'Stud@123', 3, '2000-01-01', NULL, '0000-00-00 00:00:00', ''),
(7, '2000', '2000-01-01', 3, '2000-01-01', '2020-06-15 10:12:17', '0000-00-00 00:00:00', ''),
(8, '2000-00023', 'Stud@123', 3, '2000-01-01', NULL, '0000-00-00 00:00:00', ''),
(9, 'teacherFive', 'teaching', 2, ' Teach@123', '2020-06-15 10:13:42', '0000-00-00 00:00:00', ''),
(10, 'teacherSix', ' Teach@123', 2, 'Teach@123', NULL, '0000-00-00 00:00:00', ''),
(11, 'admina', 'admina', 1, 'admin', '2020-06-18 05:52:19', '0000-00-00 00:00:00', ''),
(13, 'teacherSeven', 'Teach@123', 2, 'Teach@123', '2020-06-15 10:00:11', '0000-00-00 00:00:00', ''),
(14, 'admin21', ' admin', 1, 'admin', NULL, '0000-00-00 00:00:00', ''),
(15, '2018-01234', 'Stud@123', 3, '2000-01-01', NULL, '0000-00-00 00:00:00', ''),
(16, '2005-00022', ' Stud@123', 3, '1999-09-09', NULL, '0000-00-00 00:00:00', ''),
(17, 'Ferdinand', 'Teach@123', 2, 'Teach@123', NULL, '0000-00-00 00:00:00', ''),
(18, 'Nancy', 'Teach@123', 2, 'Teach@123', NULL, '0000-00-00 00:00:00', ''),
(19, '2018-54321', 'Stud@123', 3, '1999-09-09', NULL, '0000-00-00 00:00:00', ''),
(20, '2018-54322', 'Stud@123', 3, '1999-04-04', NULL, '0000-00-00 00:00:00', ''),
(21, '2018-54323', 'Stud@123', 3, '1999-04-04', NULL, '0000-00-00 00:00:00', ''),
(22, '2018-20188', '2000-01-01', 3, '2000-01-01', '2020-06-18 08:01:46', '0000-00-00 00:00:00', ''),
(23, '2018-20189', 'Stud@123', 3, '2000-01-01', NULL, '0000-00-00 00:00:00', ''),
(24, 'nikola', 'Teach@123', 2, 'Teach@123', NULL, '2020-06-20 17:02:40', 'insert');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `c_id` int(4) UNSIGNED NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_telno` varchar(15) DEFAULT NULL,
  `c_contactno` varchar(11) DEFAULT NULL,
  `c_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`c_id`, `c_name`, `c_address`, `c_email`, `c_telno`, `c_contactno`, `c_description`) VALUES
(1, 'Davao City Police Station', 'davao', 'dvps@gmail.com', '(123) 123-4562', '09090909091', 'hires it and blis practicumer'),
(2, 'davao light aboitiz Company', 'bajada Davao City', 'dl@gmail.com', '(123) 123-1234', '09196688865', 'hires IT and BSCS practicumer'),
(3, 'CIty Gate GMALL', 'address 3', 'city@gmail.com', '(123) 123-1234', '12345678910', 'hires Data Analyst'),
(4, 'segworxz technologies', 'bajada davao city', 'segx@gmail.com', '(123) 123-1234', '09198888222', 'hires web developer intern'),
(5, 'Sta ana police station', 'sta ana', 'staana@gmail.com', '(123) 123-1234', '09198888222', 'looking for blis and it intern applicant');

--
-- Triggers `company`
--
DELIMITER $$
CREATE TRIGGER `after_company_insert` AFTER INSERT ON `company` FOR EACH ROW INSERT INTO new_company VALUES (NEW.c_id,NEW.c_name,NEW.c_address,NEW.c_email,NEW.c_telno,NEW.c_contactno,NEW.c_description,NOW(),'insert')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `comp_drop`
-- (See below for the actual view)
--
CREATE TABLE `comp_drop` (
`c_id` int(4) unsigned
,`c_name` varchar(50)
,`c_address` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(2) UNSIGNED NOT NULL,
  `course` varchar(100) NOT NULL,
  `major` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course`, `major`) VALUES
(1, 'BSCS-Bachelor of Science in Computer Science', 'Data Science'),
(2, 'BSIT-Bachelor of Science and Information Technology', 'Information Security'),
(3, 'BSIT-Bachelor of Science and Information Technology', 'Business Technology Management'),
(4, 'BLIS-Bachelor of Library and Information Systems', 'N/A'),
(5, 'N/A', 'N/A'),
(6, 'N/ A', 'N/A');

-- --------------------------------------------------------

--
-- Stand-in structure for view `course_section`
-- (See below for the actual view)
--
CREATE TABLE `course_section` (
`course_id` int(2) unsigned
,`course` varchar(100)
,`major` varchar(30)
,`section_id` int(2) unsigned
,`section` varchar(15)
);

-- --------------------------------------------------------

--
-- Table structure for table `inssection`
--

CREATE TABLE `inssection` (
  `inssection_id` int(10) UNSIGNED NOT NULL,
  `i_id` varchar(10) NOT NULL,
  `section_id` int(2) UNSIGNED NOT NULL,
  `SY` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inssection`
--

INSERT INTO `inssection` (`inssection_id`, `i_id`, `section_id`, `SY`) VALUES
(1, '1', 2, '2021-2022'),
(2, '2', 3, '2020-2021'),
(3, '3', 1, '2020-2021'),
(4, '4', 4, '2020-2021'),
(6, '3', 1, '2021-2023'),
(7, '1', 1, '1999-2001'),
(8, '4321', 1, '2006-2007'),
(9, '1234', 1, '2022-2023');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `i_id` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`i_id`, `user_id`, `fullname`, `gender`, `email`) VALUES
('1', 1, 'IS Instructor', 'm', 'ISt@gmail.com'),
('1234', 17, 'Ferdinand Marcosz', 'm', 'marcox@gmail.com'),
('2', 2, 'BMT Instructor', 'm', 'BMT@gmail.com'),
('2000-12345', 24, ' nikola tesla', 'm', ' nikola@gmail.com'),
('3', 4, 'DATA SCIENCE Instructor', 'f', 'DS@gmail.com'),
('4', 3, 'BLIS Instructor', 'f', 'BLIS@gmail.com'),
('4321', 18, 'Nancy Mozo', 'f', 'nancymozo@yahoo.com'),
('5', 9, ' teacherFive', 'm', ' t@gmail.com'),
('6', 10, 'teacherSixx', 'f', 't@gmail.com'),
('7', 13, 'teacherSeven', 'm', 't1@gmail.com');

-- --------------------------------------------------------

--
-- Stand-in structure for view `ins_csdetails`
-- (See below for the actual view)
--
CREATE TABLE `ins_csdetails` (
`inssection_id` int(10) unsigned
,`course_id` int(2) unsigned
,`course` varchar(100)
,`major` varchar(30)
,`section_id` int(2) unsigned
,`section` varchar(15)
,`user_id` int(11)
,`i_id` varchar(10)
,`fullname` varchar(100)
,`SY` varchar(10)
,`gender` varchar(1)
,`email` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ins_drop`
-- (See below for the actual view)
--
CREATE TABLE `ins_drop` (
`i_id` varchar(10)
,`fullname` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ins_section`
-- (See below for the actual view)
--
CREATE TABLE `ins_section` (
`inssection_id` int(10) unsigned
,`user_id` int(11)
,`i_id` varchar(10)
,`fullname` varchar(100)
,`section_id` int(2) unsigned
,`section` varchar(15)
,`SY` varchar(10)
,`gender` varchar(1)
,`email` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `new_company`
--

CREATE TABLE `new_company` (
  `c_id` int(4) UNSIGNED NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_telno` varchar(15) DEFAULT NULL,
  `c_contactno` varchar(11) DEFAULT NULL,
  `c_description` varchar(500) NOT NULL,
  `change_date` datetime NOT NULL,
  `action` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_company`
--

INSERT INTO `new_company` (`c_id`, `c_name`, `c_address`, `c_email`, `c_telno`, `c_contactno`, `c_description`, `change_date`, `action`) VALUES
(1, 'Davao City Police Station', 'davao', 'dvps@gmail.com', '(123) 123-4562', '09090909091', 'hires it and blis practicumer', '0000-00-00 00:00:00', ''),
(2, 'davao light aboitiz Company', 'bajada Davao City', 'dl@gmail.com', '(123) 123-1234', '09196688865', 'hires IT and BSCS practicumer', '0000-00-00 00:00:00', ''),
(3, 'CIty Gate', 'address 3', 'city@gmail.com', '(123) 123-1234', '12345678910', 'hires Data Analyst', '0000-00-00 00:00:00', ''),
(4, 'segworxz technologies', 'bajada davao city', 'segx@gmail.com', '(123) 123-1234', '09198888222', 'hires web developer intern', '2020-06-20 17:04:48', 'insert'),
(5, 'Sta ana police station', 'sta ana', 'staana@gmail.com', '(123) 123-1234', '09198888222', 'looking for blis and it intern applicant', '2020-06-20 17:43:07', 'insert');

-- --------------------------------------------------------

--
-- Stand-in structure for view `practicum`
-- (See below for the actual view)
--
CREATE TABLE `practicum` (
`r_id` int(10) unsigned
,`s_id` varchar(10)
,`Name` varchar(152)
,`sem` varchar(20)
,`SY` varchar(23)
,`start_date` date
,`end_date` date
,`c_name` varchar(50)
,`fullname` varchar(100)
,`filename` varchar(50)
,`sub_date` datetime
,`report_status` varchar(15)
);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `r_id` int(10) UNSIGNED NOT NULL,
  `s_id` varchar(10) NOT NULL,
  `sem` varchar(20) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `c_id` int(4) UNSIGNED DEFAULT NULL,
  `i_id` varchar(10) DEFAULT NULL,
  `filename` varchar(50) DEFAULT NULL,
  `sub_date` datetime DEFAULT NULL,
  `report_status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`r_id`, `s_id`, `sem`, `start_date`, `end_date`, `c_id`, `i_id`, `filename`, `sub_date`, `report_status`) VALUES
(1, '2000-00001', '2nd Semester', '2020-02-02', '2021-02-02', 5, '3', '1-PhysicalDesign1.pdf', '2020-04-25 11:54:13', 'checked'),
(2, '2000-00022', '1st Semester', '2020-01-01', '2021-01-01', 2, '3', '2-IT227 - Documentation Format.pdf', '2020-06-20 11:51:19', NULL),
(3, '2000-00023', 'SUMMER', '2020-01-03', '2021-01-03', 2, '4', NULL, NULL, NULL),
(16, '2018-01233', 'SUMMER', '2018-02-02', '2019-02-02', 1, '1', NULL, NULL, 'unchecked'),
(17, '2005-00022', '2nd Semester', '2018-02-02', '0000-00-00', 1, '5', NULL, NULL, NULL),
(18, '2018-54321', 'SUMMER', '2020-08-03', '2021-01-29', 1, '1', NULL, NULL, NULL),
(19, '2018-54322', '1st Semester', '2020-08-03', '2021-01-29', 1, '1', NULL, NULL, NULL),
(20, '2018-54323', '2nd Semester', '2020-08-03', '0000-00-00', 1, '1', NULL, NULL, NULL),
(21, '2018-20188', '2nd Semester', '2020-08-18', '0000-00-00', 2, '1', NULL, NULL, NULL),
(22, '2018-20189', '1st Semester', '2020-08-18', '0000-00-00', 2, '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(2) UNSIGNED NOT NULL,
  `section` varchar(15) NOT NULL,
  `course_id` int(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section`, `course_id`) VALUES
(1, 'BSCS-3A', 1),
(2, 'BSIT-3IS', 2),
(3, 'BSIT-3BMT', 3),
(4, 'BLIS-3A', 4);

-- --------------------------------------------------------

--
-- Stand-in structure for view `section_drop`
-- (See below for the actual view)
--
CREATE TABLE `section_drop` (
`section_id` int(2) unsigned
,`section` varchar(15)
);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `birthdate` date NOT NULL,
  `i_id` varchar(10) DEFAULT NULL,
  `section_id` int(2) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactno` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `user_id`, `fname`, `mname`, `lname`, `gender`, `birthdate`, `i_id`, `section_id`, `email`, `contactno`) VALUES
('2000-00001', 6, 'leah', 'B.', 'Suarez', 'f', '2000-01-01', '3', 1, 'la@gmail.com', '09196687588'),
('2000-00022', 7, 'papa', 'A.', 'papa', 'm', '2000-01-01', '3', 1, 'la@gmail.com', '09196687510'),
('2000-00023', 8, ' mama', '  c.', ' mama', 'f', '2000-01-01', '4', 4, ' lj@gmail.com', '09196687510'),
('2005-00022', 16, ' zz', '  z.', ' ww', 'm', '1999-09-09', '5', 4, ' la@gmail.com', '09196687510'),
('2018-01233', 15, ' aa', '  B.', ' cc', 'm', '2000-01-01', '1', 2, ' la@gmail.com', '09196687510'),
('2018-20188', 22, ' Yeoj', '  A.', ' Adrian', 'm', '2000-01-01', '1', 1, ' adrian@gmail.com', '09196687510'),
('2018-20189', 23, ' Aldren', '  J.', ' Joyce', 'm', '2000-01-01', '1', 2, ' joy@gmail.com', '09196687510'),
('2018-54321', 19, ' Shane', '  S.', ' Roberto', 'f', '1999-09-09', '1', 1, ' shane@gmail.com', '09196687510'),
('2018-54322', 20, ' aimee', '  G.', ' Grasya', 'f', '1999-04-04', '1', 1, ' grace@gmail.com', '09196687510'),
('2018-54323', 21, ' shekinah', '  V.', ' Antalan', 'f', '1999-04-04', '1', 1, ' antalan@gmail.com', '09196687510');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(1) UNSIGNED NOT NULL,
  `reset_password` varchar(50) NOT NULL,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `role`, `reset_password`, `date_modified`) VALUES
(1, 'teacherIS', 'teacher', 2, 'teacher', '2020-06-12 08:08:19'),
(2, 'teacher2', 'teacher', 2, 'teacher', NULL),
(3, 'teacher3', 'teacher3', 2, 'teacher', NULL),
(4, 'teacher4', 'teacher4', 2, 'teacher', NULL),
(5, 'administer', 'administrator', 1, 'admin3', '2020-06-18 07:57:36'),
(6, 'leyyy', '2000-01-01', 3, '2000-01-01', '2020-06-20 11:19:59'),
(7, '2000-0101', '2000-0101', 3, '2000-01-01', '2020-06-15 10:12:17'),
(8, '2000-00023', 'Stud@123', 3, '2000-01-01', NULL),
(9, 'teacherFive', 'teaching', 2, ' Teach@123', '2020-06-15 10:13:42'),
(10, 'teacherSix', ' Teach@123', 2, 'Teach@123', NULL),
(11, 'admina', 'admina', 1, 'admin', '2020-06-20 11:53:33'),
(13, 'teacherSeven', 'Teach@123', 2, 'Teach@123', '2020-06-15 10:00:11'),
(14, 'admin21', ' admin', 1, 'admin', NULL),
(15, '2018-01234', 'Stud@123', 3, '2000-01-01', NULL),
(16, '2005-00022', ' Stud@123', 3, '1999-09-09', NULL),
(17, 'Ferdinand', 'Teach@123', 2, 'Teach@123', NULL),
(18, 'Nancy', 'Teach@123', 2, 'Teach@123', NULL),
(19, '2018-54321', 'Stud@123', 3, '1999-09-09', NULL),
(20, '2018-54322', 'Stud@123', 3, '1999-04-04', NULL),
(21, '2018-54323', 'Stud@123', 3, '1999-04-04', NULL),
(22, '2018-20188', '2000-01-01', 3, '2000-01-01', '2020-06-18 08:01:46'),
(23, '2018-20189', 'Stud@123', 3, '2000-01-01', NULL),
(24, 'nikola', 'Teach@123', 2, 'Teach@123', NULL);

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `after_user_insert` AFTER INSERT ON `user` FOR EACH ROW INSERT INTO bu_user VALUES (NEW.user_id,NEW.username,NEW.password,NEW.role,NEW.reset_password,NEW.date_modified,NOW(),'insert')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_detail`
-- (See below for the actual view)
--
CREATE TABLE `user_detail` (
`user_id` int(10)
,`username` varchar(30)
,`password` varchar(20)
,`role` int(1) unsigned
,`reset_password` varchar(50)
,`date_modified` datetime
,`Name` varchar(151)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_detaili`
-- (See below for the actual view)
--
CREATE TABLE `user_detaili` (
`user_id` int(10)
,`username` varchar(30)
,`password` varchar(20)
,`role` int(1) unsigned
,`reset_password` varchar(50)
,`date_modified` datetime
,`Name` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_ins`
-- (See below for the actual view)
--
CREATE TABLE `user_ins` (
`user_id` int(10)
,`username` varchar(30)
,`password` varchar(20)
,`i_id` varchar(10)
,`fullname` varchar(100)
,`gender` varchar(1)
,`email` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_is`
-- (See below for the actual view)
--
CREATE TABLE `user_is` (
`user_id` int(11)
,`username` varchar(30)
,`password` varchar(20)
,`role` int(10) unsigned
,`reset_password` varchar(50)
,`date_modified` datetime
,`Name` varchar(151)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_student`
-- (See below for the actual view)
--
CREATE TABLE `user_student` (
`user_id` int(10)
,`username` varchar(30)
,`password` varchar(20)
,`role` int(1) unsigned
,`s_id` varchar(10)
,`Name` varchar(152)
,`fname` varchar(50)
,`mname` varchar(50)
,`lname` varchar(50)
,`gender` varchar(1)
,`birthdate` date
,`i_id` varchar(10)
,`fullname` varchar(100)
,`section_id` int(2) unsigned
,`section` varchar(15)
,`email` varchar(100)
,`contactno` varchar(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_student_records`
-- (See below for the actual view)
--
CREATE TABLE `user_student_records` (
`user_id` int(10)
,`username` varchar(30)
,`password` varchar(20)
,`role` int(1) unsigned
,`s_id` varchar(10)
,`Name` varchar(152)
,`fname` varchar(50)
,`mname` varchar(50)
,`lname` varchar(50)
,`gender` varchar(1)
,`birthdate` date
,`i_id` varchar(10)
,`fullname` varchar(100)
,`section_id` int(2) unsigned
,`section` varchar(15)
,`email` varchar(100)
,`contactno` varchar(11)
,`r_id` int(10) unsigned
,`sem` varchar(20)
,`start_date` date
,`end_date` date
,`c_id` int(4) unsigned
,`c_name` varchar(50)
,`filename` varchar(50)
,`sub_date` datetime
,`report_status` varchar(15)
);

-- --------------------------------------------------------

--
-- Structure for view `comp_drop`
--
DROP TABLE IF EXISTS `comp_drop`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `comp_drop`  AS  select `company`.`c_id` AS `c_id`,`company`.`c_name` AS `c_name`,`company`.`c_address` AS `c_address` from `company` ;

-- --------------------------------------------------------

--
-- Structure for view `course_section`
--
DROP TABLE IF EXISTS `course_section`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `course_section`  AS  select `course`.`course_id` AS `course_id`,`course`.`course` AS `course`,`course`.`major` AS `major`,`section`.`section_id` AS `section_id`,`section`.`section` AS `section` from (`course` join `section` on(`course`.`course_id` = `section`.`course_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `ins_csdetails`
--
DROP TABLE IF EXISTS `ins_csdetails`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ins_csdetails`  AS  select `ins_section`.`inssection_id` AS `inssection_id`,`course_section`.`course_id` AS `course_id`,`course_section`.`course` AS `course`,`course_section`.`major` AS `major`,`ins_section`.`section_id` AS `section_id`,`ins_section`.`section` AS `section`,`ins_section`.`user_id` AS `user_id`,`ins_section`.`i_id` AS `i_id`,`ins_section`.`fullname` AS `fullname`,`ins_section`.`SY` AS `SY`,`ins_section`.`gender` AS `gender`,`ins_section`.`email` AS `email` from (`course_section` join `ins_section` on(`course_section`.`section_id` = `ins_section`.`section_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `ins_drop`
--
DROP TABLE IF EXISTS `ins_drop`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ins_drop`  AS  select `instructor`.`i_id` AS `i_id`,`instructor`.`fullname` AS `fullname` from `instructor` ;

-- --------------------------------------------------------

--
-- Structure for view `ins_section`
--
DROP TABLE IF EXISTS `ins_section`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ins_section`  AS  select `inssection`.`inssection_id` AS `inssection_id`,`instructor`.`user_id` AS `user_id`,`instructor`.`i_id` AS `i_id`,`instructor`.`fullname` AS `fullname`,`section`.`section_id` AS `section_id`,`section`.`section` AS `section`,`inssection`.`SY` AS `SY`,`instructor`.`gender` AS `gender`,`instructor`.`email` AS `email` from ((`inssection` join `instructor` on(`instructor`.`i_id` = `inssection`.`i_id`)) join `section` on(`inssection`.`section_id` = `section`.`section_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `practicum`
--
DROP TABLE IF EXISTS `practicum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `practicum`  AS  select `records`.`r_id` AS `r_id`,`records`.`s_id` AS `s_id`,concat(`student`.`lname`,',',`student`.`fname`,' ',`student`.`mname`) AS `Name`,`records`.`sem` AS `sem`,concat(`records`.`start_date`,' - ',`records`.`end_date`) AS `SY`,`records`.`start_date` AS `start_date`,`records`.`end_date` AS `end_date`,`company`.`c_name` AS `c_name`,`instructor`.`fullname` AS `fullname`,`records`.`filename` AS `filename`,`records`.`sub_date` AS `sub_date`,`records`.`report_status` AS `report_status` from (((`records` join `student` on(`student`.`s_id` = `records`.`s_id`)) join `company` on(`company`.`c_id` = `records`.`c_id`)) join `instructor` on(`instructor`.`i_id` = `records`.`i_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `section_drop`
--
DROP TABLE IF EXISTS `section_drop`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `section_drop`  AS  select `section`.`section_id` AS `section_id`,`section`.`section` AS `section` from `section` ;

-- --------------------------------------------------------

--
-- Structure for view `user_detail`
--
DROP TABLE IF EXISTS `user_detail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_detail`  AS  select `user`.`user_id` AS `user_id`,`user`.`username` AS `username`,`user`.`password` AS `password`,`user`.`role` AS `role`,`user`.`reset_password` AS `reset_password`,`user`.`date_modified` AS `date_modified`,concat(`student`.`lname`,',',`student`.`fname`,`student`.`mname`) AS `Name` from (`user` join `student` on(`user`.`user_id` = `student`.`user_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `user_detaili`
--
DROP TABLE IF EXISTS `user_detaili`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_detaili`  AS  select `user`.`user_id` AS `user_id`,`user`.`username` AS `username`,`user`.`password` AS `password`,`user`.`role` AS `role`,`user`.`reset_password` AS `reset_password`,`user`.`date_modified` AS `date_modified`,`instructor`.`fullname` AS `Name` from (`user` join `instructor` on(`user`.`user_id` = `instructor`.`user_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `user_ins`
--
DROP TABLE IF EXISTS `user_ins`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_ins`  AS  select `user`.`user_id` AS `user_id`,`user`.`username` AS `username`,`user`.`password` AS `password`,`instructor`.`i_id` AS `i_id`,`instructor`.`fullname` AS `fullname`,`instructor`.`gender` AS `gender`,`instructor`.`email` AS `email` from (`instructor` join `user` on(`instructor`.`user_id` = `user`.`user_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `user_is`
--
DROP TABLE IF EXISTS `user_is`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_is`  AS  select `user_detail`.`user_id` AS `user_id`,`user_detail`.`username` AS `username`,`user_detail`.`password` AS `password`,`user_detail`.`role` AS `role`,`user_detail`.`reset_password` AS `reset_password`,`user_detail`.`date_modified` AS `date_modified`,`user_detail`.`Name` AS `Name` from `user_detail` union all select `user_detaili`.`user_id` AS `user_id`,`user_detaili`.`username` AS `username`,`user_detaili`.`password` AS `password`,`user_detaili`.`role` AS `role`,`user_detaili`.`reset_password` AS `reset_password`,`user_detaili`.`date_modified` AS `date_modified`,`user_detaili`.`Name` AS `Name` from `user_detaili` ;

-- --------------------------------------------------------

--
-- Structure for view `user_student`
--
DROP TABLE IF EXISTS `user_student`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_student`  AS  select `user`.`user_id` AS `user_id`,`user`.`username` AS `username`,`user`.`password` AS `password`,`user`.`role` AS `role`,`student`.`s_id` AS `s_id`,concat(`student`.`fname`,' ',`student`.`mname`,' ',`student`.`lname`) AS `Name`,`student`.`fname` AS `fname`,`student`.`mname` AS `mname`,`student`.`lname` AS `lname`,`student`.`gender` AS `gender`,`student`.`birthdate` AS `birthdate`,`instructor`.`i_id` AS `i_id`,`instructor`.`fullname` AS `fullname`,`section`.`section_id` AS `section_id`,`section`.`section` AS `section`,`student`.`email` AS `email`,`student`.`contactno` AS `contactno` from (((`student` join `user` on(`student`.`user_id` = `user`.`user_id`)) join `instructor` on(`instructor`.`i_id` = `student`.`i_id`)) join `section` on(`section`.`section_id` = `student`.`section_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `user_student_records`
--
DROP TABLE IF EXISTS `user_student_records`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_student_records`  AS  select `user_student`.`user_id` AS `user_id`,`user_student`.`username` AS `username`,`user_student`.`password` AS `password`,`user_student`.`role` AS `role`,`user_student`.`s_id` AS `s_id`,`user_student`.`Name` AS `Name`,`user_student`.`fname` AS `fname`,`user_student`.`mname` AS `mname`,`user_student`.`lname` AS `lname`,`user_student`.`gender` AS `gender`,`user_student`.`birthdate` AS `birthdate`,`user_student`.`i_id` AS `i_id`,`user_student`.`fullname` AS `fullname`,`user_student`.`section_id` AS `section_id`,`user_student`.`section` AS `section`,`user_student`.`email` AS `email`,`user_student`.`contactno` AS `contactno`,`records`.`r_id` AS `r_id`,`records`.`sem` AS `sem`,`records`.`start_date` AS `start_date`,`records`.`end_date` AS `end_date`,`company`.`c_id` AS `c_id`,`company`.`c_name` AS `c_name`,`records`.`filename` AS `filename`,`records`.`sub_date` AS `sub_date`,`records`.`report_status` AS `report_status` from ((`records` join `user_student` on(`records`.`s_id` = `user_student`.`s_id`)) join `company` on(`company`.`c_id` = `records`.`c_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bu_user`
--
ALTER TABLE `bu_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `inssection`
--
ALTER TABLE `inssection`
  ADD PRIMARY KEY (`inssection_id`),
  ADD KEY `i_id` (`i_id`),
  ADD KEY `section_id` (`section_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`i_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `new_company`
--
ALTER TABLE `new_company`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `records_ibfk_3` (`s_id`),
  ADD KEY `i_id` (`i_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `i_id` (`i_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `section_id` (`section_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bu_user`
--
ALTER TABLE `bu_user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `c_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inssection`
--
ALTER TABLE `inssection`
  MODIFY `inssection_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `new_company`
--
ALTER TABLE `new_company`
  MODIFY `c_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `r_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inssection`
--
ALTER TABLE `inssection`
  ADD CONSTRAINT `inssection_ibfk_1` FOREIGN KEY (`i_id`) REFERENCES `instructor` (`i_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `inssection_ibfk_2` FOREIGN KEY (`section_id`) REFERENCES `section` (`section_id`) ON UPDATE CASCADE;

--
-- Constraints for table `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `instructor_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `records`
--
ALTER TABLE `records`
  ADD CONSTRAINT `records_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `company` (`c_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `records_ibfk_3` FOREIGN KEY (`s_id`) REFERENCES `student` (`s_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `records_ibfk_4` FOREIGN KEY (`i_id`) REFERENCES `instructor` (`i_id`) ON UPDATE CASCADE;

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`section_id`) REFERENCES `section` (`section_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_4` FOREIGN KEY (`i_id`) REFERENCES `instructor` (`i_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
