-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 06, 2019 at 08:23 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nacoss`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `courseid` int(4) NOT NULL AUTO_INCREMENT,
  `course_title` varchar(50) NOT NULL,
  `course_code` varchar(15) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `course_type` enum('elective','core') NOT NULL,
  `level` enum('100','200','300','400','500') NOT NULL,
  `semister` varchar(11) NOT NULL,
  PRIMARY KEY (`courseid`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseid`, `course_title`, `course_code`, `unit`, `course_type`, `level`, `semister`) VALUES
(1, 'Computer Programming I', 'CSC201', '4', 'core', '200', '1'),
(3, 'Introduction to Computer', 'CSC203', '2', 'core', '200', '1'),
(4, 'Statistics for physical Sci & Engineering', 'STA203', '4', 'core', '200', '1'),
(5, 'Linear Algebra I', 'MTH204', '2', 'core', '200', '1'),
(6, 'Use of English', 'GST201', '2', 'core', '200', '1'),
(7, 'Entrepreneurship', 'GST202', '2', 'core', '200', '1'),
(8, 'Elementary Modern Physics', 'PHY201', '3', 'core', '200', '1'),
(9, 'Computer Programming II', 'CSC202', '3', 'core', '200', '2'),
(10, 'Introduction to file Processing', 'CSC204', '2', 'core', '200', '2'),
(11, 'Introduction to the Internet', 'INT201', '3', 'core', '200', '2'),
(12, 'Linear Algebra II', 'MTH205', '2', 'core', '200', '2'),
(13, 'Real Analysis', 'MTH207', '3', 'core', '200', '2'),
(14, 'Numerical Analysis', 'MTH209', '3', 'core', '200', '2'),
(15, 'Elementary Differentail Equations', 'MTH202', '3', 'core', '200', '2'),
(16, 'Electric Circuit & Electronics', 'PHY202', '3', 'core', '200', '2'),
(17, 'Nigerian Govt. and Politics/Peace Studies', 'GST203', '2', 'core', '200', '2'),
(18, 'Introduction to Digital Design', 'CSC301', '4', 'core', '300', '1'),
(19, 'Operating Systems I', 'CSC302', '2', 'core', '300', '1'),
(21, 'Computer Architecture I', 'CSC303', '2', 'core', '300', '1'),
(23, 'Communication Skills', 'GST301', '2', 'core', '300', '2'),
(24, 'Introduction to computer science', 'CSC101', '3', 'core', '100', '1');

-- --------------------------------------------------------

--
-- Table structure for table `head_line_tbl`
--

DROP TABLE IF EXISTS `head_line_tbl`;
CREATE TABLE IF NOT EXISTS `head_line_tbl` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `head_line` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `head_line_tbl`
--

INSERT INTO `head_line_tbl` (`id`, `head_line`) VALUES
(1, 'First Batch Admission list is out.'),
(2, 'ASUU Suspends its Strike.'),
(3, 'First Semister Exam is Out!'),
(4, 'Matriculation Day Coming Up on 26th Mar 2019.'),
(5, 'Seminar Presentation for 400 level Student on 03,july 2019.');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `news_head_line` varchar(50) NOT NULL,
  `date_added` datetime NOT NULL,
  `news_brief` text NOT NULL,
  `news_content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_head_line`, `date_added`, `news_brief`, `news_content`) VALUES
(1, 'First Semester result is out', '2019-07-01 07:03:40', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus qui rem fuga dicta consectetur necessitatibus numquam, amet magnam consequuntur explicabo.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo quaerat quasi, est laboriosam facere in sit quia accusantium. Fuga, officiis? Laboriosam minima ratione quibusdam debitis ipsam culpa rem repellat a, nesciunt, inventore facere iste aperiam. Reprehenderit quos sapiente corporis, repellat facilis explicabo repudiandae illum error eligendi numquam neque! Minima, beatae!'),
(2, 'First Semester Result is Out', '2019-07-01 07:03:40', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus qui rem fuga dicta consectetur necessitatibus numquam, amet magnam consequuntur explicabo.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo quaerat quasi, est laboriosam facere in sit quia accusantium. Fuga, officiis? Laboriosam minima ratione quibusdam debitis ipsam culpa rem repellat a, nesciunt, inventore facere iste aperiam. Reprehenderit quos sapiente corporis, repellat facilis explicabo repudiandae illum error eligendi numquam neque! Minima, beatae!'),
(4, 'Collection of siwes Certificates', '2019-07-15 10:45:17', 'Collection of siwes Certificates nears End', 'All student are Advice to make their payment at any Eco Bank branch, and take the teller to the siwes Unit. ');

-- --------------------------------------------------------

--
-- Table structure for table `our_staff`
--

DROP TABLE IF EXISTS `our_staff`;
CREATE TABLE IF NOT EXISTS `our_staff` (
  `staff_id` int(5) NOT NULL AUTO_INCREMENT,
  `staff_name` varchar(50) NOT NULL,
  `category` enum('contract','tenure','visiting') NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_staff`
--

INSERT INTO `our_staff` (`staff_id`, `staff_name`, `category`) VALUES
(1, 'Dr Ibrahim Suleiman', 'contract'),
(2, 'Dr Muhammad Garba', 'tenure');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `pro_id` int(5) NOT NULL AUTO_INCREMENT,
  `userid` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `admission_num` varchar(15) NOT NULL,
  `level` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `passport` varchar(200) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`pro_id`, `userid`, `firstname`, `lastname`, `gender`, `admission_num`, `level`, `email`, `phone`, `address`, `passport`, `date_added`) VALUES
(1, 2, 'Muhammad', 'Abubakar', 'male', '1710207001', '100', 'abu@gmail.com', '08167369433', 'sasdadwsa', '', '2019-07-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `staffprofile`
--

DROP TABLE IF EXISTS `staffprofile`;
CREATE TABLE IF NOT EXISTS `staffprofile` (
  `staff_id` int(5) NOT NULL AUTO_INCREMENT,
  `userid` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `sp_num` varchar(15) NOT NULL,
  `category` enum('academic','administrative','technical') NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffprofile`
--

INSERT INTO `staffprofile` (`staff_id`, `userid`, `firstname`, `lastname`, `gender`, `sp_num`, `category`, `email`, `phone`, `address`, `date_added`) VALUES
(1, 5, 'Akeem ', 'Bakare', 'male', 'SP001', 'academic', 'akeemb@yahoo.com', '08167369433', 'GRA Birnin Kebbi', '2019-07-28 00:00:00'),
(2, 7, 'Dalhatu', 'Muhammed', 'male', 'SP002', 'academic', 'dalhatu@yahoo.com', '09030377174', 'Birnin kebbi', '2019-07-31 00:00:00'),
(3, 9, 'Anas', 'Muhammad', 'male', 'SP003', 'academic', 'anasm@yahoo.com', '08023005502', 'Gulumbe, Aliero', '2019-07-31 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student_result`
--

DROP TABLE IF EXISTS `student_result`;
CREATE TABLE IF NOT EXISTS `student_result` (
  `result_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `admin_no` varchar(15) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `course_title` varchar(200) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `ca` varchar(10) NOT NULL,
  `exam` varchar(10) NOT NULL,
  `total` varchar(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `semester` varchar(20) NOT NULL,
  PRIMARY KEY (`result_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_result`
--

INSERT INTO `student_result` (`result_id`, `name`, `admin_no`, `course_code`, `course_title`, `unit`, `ca`, `exam`, `total`, `grade`, `semester`) VALUES
(1, 'Muhammad Abubakar', '1710207001', 'CSC201', 'Introduction to Programming', '4', '21', '45', '66', 'B', '1'),
(2, 'Anas Sani', '1710207002', 'INT201', 'Introduction to Internet', '3', '18', '55', '73', 'A', '2'),
(3, 'shamsudden Abubakar', '1710207003', 'CSC201', 'Introduction to Programming', '4', '17', '34', '51', 'C', '1'),
(4, 'Abdulmajid Abubakr', '1710207004', 'INT201', 'Introduction to Internet', '3', '22', '56', '78', 'A', '2'),
(5, 'mustapha Salisu', '1710207005', 'INT201', 'Introduction to Internet', '3', '12', '67', '79', 'A', '2'),
(6, 'shaharu muhammad', '1710207006', 'INT201', 'Introduction to Internet', '3', '28', '54', '82', 'A', '2'),
(7, 'Mudassir Sani', '1710207007', 'CSC201', 'Introduction to Internet', '4', '15', '32', '47', 'D', '1'),
(8, 'faisal Muhammad', '1710207008', 'INT201', 'Introduction to Internet', '3', '12', '56', '68', 'B', '2'),
(9, 'Aisha Muhammad', '1710207009', 'INT201', 'Introduction to Internet', '3', '23', '43', '66', 'B', '2'),
(10, 'Aliyu Umar', '1710207010', 'CSC201', 'Introduction to Programming', '4', '25', '45', '70', 'A', '1'),
(11, 'Alawee Umar', '1710207011', 'CSC201', 'Introduction to Programming', '4', '22', '23', '45', 'D', '1'),
(12, 'Nura Sani', '1710207012', 'INT201', 'Introduction to Internet', '3', '13', '33', '46', 'D', '2'),
(13, 'Kabiru Aliyu', '1710207013', 'CSC201', 'Introduction to Programming', '4', '4', '45', '49', 'D', '1'),
(14, 'Abubakar Umar', '1710207014', 'INT201', 'Introduction to Internet', '3', '22', '65', '87', 'A', '2'),
(15, 'Sani Ahmad', '1710207015', 'CSC201', 'Introduction to Programming', '4', '29', '69', '98', 'A', '1');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

DROP TABLE IF EXISTS `userlog`;
CREATE TABLE IF NOT EXISTS `userlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` datetime DEFAULT NULL,
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `user_id`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(15, '1', 'admin', 0x3a3a3100000000000000000000000000, '2019-07-28 06:57:53', '2019-07-28 06:58:08', 1),
(16, '1', 'admin', 0x3a3a3100000000000000000000000000, '2019-07-28 06:58:59', '2019-07-28 09:54:50', 1),
(17, '1', 'admin', 0x3a3a3100000000000000000000000000, '2019-07-28 10:11:37', '2019-07-28 11:57:13', 1),
(18, '2', '1710207001', 0x3a3a3100000000000000000000000000, '2019-07-28 10:21:46', '2019-07-28 10:25:27', 1),
(28, '5', 'SP001', 0x3a3a3100000000000000000000000000, '2019-07-28 11:20:14', '2019-07-28 11:23:40', 1),
(29, '5', 'SP001', 0x3a3a3100000000000000000000000000, '2019-07-28 11:23:54', '2019-07-28 11:25:00', 1),
(32, '2', '1710207001', 0x3a3a3100000000000000000000000000, '2019-07-28 11:57:39', NULL, 1),
(33, '2', '1710207001', 0x3a3a3100000000000000000000000000, '2019-07-29 12:00:20', NULL, 1),
(34, '2', '1710207001', 0x3a3a3100000000000000000000000000, '2019-07-29 12:07:58', NULL, 1),
(35, '2', '1710207001', 0x3a3a3100000000000000000000000000, '2019-07-30 06:35:39', NULL, 1),
(36, '2', '1710207001', 0x3a3a3100000000000000000000000000, '2019-07-30 06:39:46', NULL, 1),
(37, '2', '1710207001', 0x3a3a3100000000000000000000000000, '2019-07-30 06:43:17', NULL, 1),
(38, '2', '1710207001', 0x3a3a3100000000000000000000000000, '2019-07-30 06:45:01', NULL, 1),
(39, '2', '1710207001', 0x3a3a3100000000000000000000000000, '2019-07-30 06:51:43', '2019-07-30 09:24:21', 1),
(40, '2', '1710207001', 0x3a3a3100000000000000000000000000, '2019-07-30 09:24:41', '2019-07-30 09:30:33', 1),
(41, '1', 'admin', 0x3a3a3100000000000000000000000000, '2019-07-30 09:30:50', NULL, 1),
(42, '1', 'admin', 0x3a3a3100000000000000000000000000, '2019-07-30 09:39:13', '2019-07-30 09:39:15', 1),
(43, '1', 'admin', 0x3a3a3100000000000000000000000000, '2019-07-30 09:40:07', '2019-07-30 09:40:47', 1),
(44, '1', 'admin', 0x3a3a3100000000000000000000000000, '2019-07-30 10:52:34', '2019-07-30 10:54:11', 1),
(45, '1', 'admin', 0x3a3a3100000000000000000000000000, '2019-07-30 10:54:30', '2019-07-30 10:54:41', 1),
(46, '2', '1710207001', 0x3a3a3100000000000000000000000000, '2019-07-30 10:54:56', NULL, 1),
(47, '2', '1710207001', 0x3a3a3100000000000000000000000000, '2019-07-30 11:04:17', '2019-07-30 11:04:28', 1),
(48, '2', '1710207001', 0x3a3a3100000000000000000000000000, '2019-07-30 11:06:38', '2019-07-30 11:06:50', 1),
(49, '5', 'SP001', 0x3a3a3100000000000000000000000000, '2019-07-30 11:08:01', '2019-07-30 11:08:38', 1),
(50, '1', 'admin', 0x3a3a3100000000000000000000000000, '2019-07-31 01:01:39', '2019-07-31 01:10:05', 1),
(51, '6', 'sadmin', 0x3a3a3100000000000000000000000000, '2019-07-31 01:11:33', '2019-07-31 08:56:35', 1),
(52, '6', 'sadmin', 0x3a3a3100000000000000000000000000, '2019-07-31 08:56:53', '2019-07-31 09:00:50', 1),
(53, '2', '1710207001', 0x3a3a3100000000000000000000000000, '2019-07-31 09:01:21', '2019-07-31 09:02:06', 1),
(54, '6', 'sadmin', 0x3a3a3100000000000000000000000000, '2019-07-31 11:09:37', '2019-07-31 11:13:19', 1),
(55, '1', 'admin', 0x3a3a3100000000000000000000000000, '2019-07-31 11:13:29', '2019-07-31 11:13:36', 1),
(56, '2', '1710207001', 0x3a3a3100000000000000000000000000, '2019-07-31 11:13:47', '2019-07-31 11:13:52', 1),
(57, '5', 'SP001', 0x3a3a3100000000000000000000000000, '2019-07-31 11:14:07', '2019-07-31 11:15:50', 1),
(58, '5', 'SP001', 0x3a3a3100000000000000000000000000, '2019-07-31 11:20:09', '2019-07-31 11:20:36', 1),
(59, '1', 'admin', 0x3a3a3100000000000000000000000000, '2019-07-31 11:21:17', '2019-07-31 11:22:50', 1),
(60, '7', 'SP002', 0x3a3a3100000000000000000000000000, '2019-07-31 11:23:11', '2019-07-31 11:23:46', 1),
(61, '7', 'SP002', 0x3a3a3100000000000000000000000000, '2019-07-31 11:24:05', '2019-07-31 11:24:07', 1),
(62, '7', 'SP002', 0x3a3a3100000000000000000000000000, '2019-07-31 11:24:36', '2019-07-31 11:25:39', 1),
(63, '1', 'admin', 0x3a3a3100000000000000000000000000, '2019-07-31 11:25:55', '2019-07-31 11:44:55', 1),
(64, '2', '1710207001', 0x3a3a3100000000000000000000000000, '2019-07-31 11:47:05', '2019-07-31 11:50:51', 1),
(65, '1', 'admin', 0x3a3a3100000000000000000000000000, '2019-07-31 11:51:18', '2019-07-31 11:58:42', 1),
(66, '2', '1710207001', 0x3a3a3100000000000000000000000000, '2019-07-31 11:59:00', '2019-07-31 11:59:10', 1),
(67, '2', '1710207001', 0x3a3a3100000000000000000000000000, '2019-07-31 11:59:47', '2019-07-31 11:59:53', 1),
(68, '1', 'admin', 0x3a3a3100000000000000000000000000, '2019-07-31 12:00:15', '2019-07-31 12:03:19', 1),
(69, '2', '1710207001', 0x3a3a3100000000000000000000000000, '2019-07-31 12:03:38', '2019-07-31 12:05:32', 1),
(70, '6', 'sadmin', 0x3a3a3100000000000000000000000000, '2019-07-31 12:05:53', '2019-07-31 12:06:19', 1),
(71, '1', 'admin', 0x3a3a3100000000000000000000000000, '2019-07-31 12:06:35', '2019-07-31 12:13:46', 1),
(72, '5', 'SP001', 0x3a3a3100000000000000000000000000, '2019-07-31 09:44:20', '2019-07-31 09:50:41', 1),
(73, '2', '1710207001', 0x3a3a3100000000000000000000000000, '2019-07-31 09:50:53', '2019-07-31 10:02:31', 1),
(74, '1', 'admin', 0x3a3a3100000000000000000000000000, '2019-07-31 10:02:58', '2019-08-01 09:05:28', 1),
(75, '1', 'admin', 0x3a3a3100000000000000000000000000, '2019-08-01 09:05:39', '2019-08-01 12:49:59', 1),
(76, '1', 'admin', 0x3a3a3100000000000000000000000000, '2019-08-01 03:56:21', '2019-08-01 03:57:52', 1),
(77, '6', 'sadmin', 0x3a3a3100000000000000000000000000, '2019-08-01 03:58:12', '2019-08-01 04:06:37', 1),
(78, '2', '1710207001', 0x3a3a3100000000000000000000000000, '2019-08-01 04:06:53', '2019-08-01 04:08:11', 1),
(79, '1', 'admin', 0x3a3a3100000000000000000000000000, '2019-08-01 05:05:25', '2019-08-01 05:56:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role` enum('1','2','3','4') NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`, `date_added`) VALUES
(1, 'admin', 'admin', '1', '2019-07-10 11:18:03'),
(2, '1710207001', '12345', '2', '2019-07-10 11:18:30'),
(7, 'SP002', '12345', '3', '2019-07-31 11:22:41'),
(6, 'sadmin', 'admin', '4', '2019-07-31 01:04:58'),
(5, 'SP001', '12345', '3', '2019-07-28 22:40:22'),
(34, 'user', '12345', '4', '2019-08-01 08:46:11'),
(9, 'SP003', 'SP003', '3', '2019-07-31 11:38:07'),
(37, 'SP002', 'SP002', '3', '2019-08-01 12:43:32');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
