-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2016 at 06:08 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobeet`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `app_id` int(11) NOT NULL,
  `job_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `message` text,
  `app_created` datetime DEFAULT NULL,
  `app_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`app_id`, `job_id`, `user_id`, `message`, `app_created`, `app_modified`) VALUES
(1, 3, 1, NULL, '2016-05-05 11:31:07', '2016-07-14 11:31:11'),
(2, 2, 4, NULL, '2016-05-12 11:31:15', '2016-07-12 11:31:21'),
(3, 7, 9, NULL, '2016-06-09 11:31:24', '2016-07-12 11:31:28'),
(4, 6, 5, NULL, '2016-03-08 11:31:31', '2016-07-04 11:31:37'),
(5, 5, 4, NULL, '2016-06-07 11:31:39', '2016-07-17 11:31:43'),
(6, 8, 3, NULL, '2016-06-02 11:31:47', '2016-07-04 11:31:51'),
(7, 9, 1, NULL, '2016-04-02 11:31:53', '2016-07-03 11:32:00'),
(8, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) DEFAULT NULL,
  `cat_created` datetime DEFAULT NULL,
  `cat_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_created`, `cat_modified`) VALUES
(1, 'Teacher', '2013-05-15 15:59:17', '2016-05-05 15:59:32'),
(2, 'IT Software', '2010-06-10 16:00:02', '2016-02-03 16:00:13'),
(3, 'Financial/Banking', '2013-06-12 16:00:35', '2016-07-06 16:00:49'),
(4, 'Protecter', '2011-05-10 16:01:10', '2016-06-10 16:01:23'),
(5, 'Infrashstructure', '2012-02-10 16:01:36', '2016-06-09 16:01:48'),
(6, 'Sale', '2014-06-05 10:49:01', '2016-06-02 10:49:11'),
(7, 'Interpreter/Translator', '2016-03-02 10:49:21', '2016-06-03 10:49:30'),
(8, 'Accounting', '2011-03-03 10:49:57', '2016-06-01 10:50:17'),
(9, 'Management/PM', '2016-05-01 10:51:20', '2016-06-01 10:51:28'),
(10, 'Consultant', '2016-03-01 10:51:48', '2016-06-03 10:51:58'),
(11, 'IT Hardware/Networking', '2016-05-01 15:31:05', '2016-06-04 15:31:12'),
(12, 'Airlines/Tourism', '2012-02-03 08:47:39', '2016-06-03 08:47:55'),
(13, 'Audit', '2013-03-01 08:49:34', '2012-03-02 08:49:48'),
(14, 'Export/Import', '2016-05-12 13:30:06', '2016-07-08 13:30:13'),
(15, 'Fashion/Style', '2011-02-10 13:30:33', '2016-06-10 13:30:46'),
(16, 'Human Resources', '2012-03-01 13:31:19', '2016-03-04 13:31:29'),
(17, 'Marine', '2012-03-01 13:32:08', '2016-02-04 13:32:25'),
(19, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `job_creator` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `is_public` tinyint(1) DEFAULT NULL,
  `job_created` datetime DEFAULT NULL,
  `job_modified` datetime DEFAULT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `cat_id`, `job_creator`, `title`, `description`, `is_public`, `job_created`, `job_modified`, `location_id`) VALUES
(1, 2, 1, 'chuyen vien phat trien web', NULL, 1, '2016-03-17 15:51:56', '2016-07-05 15:52:04', 1),
(2, 8, 4, 'ke toan tong hop', NULL, 1, '2016-04-09 15:52:09', '2016-07-04 15:52:16', 3),
(3, 2, 1, 'ky su cau noi', NULL, 1, '2016-04-06 11:23:52', '2016-07-02 11:23:58', 2),
(4, 2, 1, 'phien dich tieng nhat', NULL, 1, '2016-05-05 11:24:02', '2016-07-12 11:24:13', 1),
(5, 1, 2, 'giao vien tieng anh', NULL, 1, '2016-07-08 11:24:18', '2016-07-21 11:24:38', 4),
(6, 5, 5, 'ky su xay dung', NULL, 1, '2016-06-09 11:24:43', '2016-07-14 11:24:48', 2),
(7, 9, 9, 'quan ly du an', NULL, 1, '2016-05-06 11:24:55', '2016-07-08 11:25:01', 1),
(8, 9, 3, 'giam doc ngan hang', NULL, 1, '2016-05-04 11:25:06', '2016-07-05 11:25:11', 1),
(9, 9, 5, 'project manager', NULL, 1, '2016-05-01 11:25:15', '2016-07-03 11:25:21', 2),
(10, 1, 2, 'giao vien tieng Nhat', NULL, 1, '2016-04-09 15:48:14', '2016-07-02 15:48:23', 2),
(11, 5, 5, 'kien truc su xay dung', NULL, 1, '2016-04-10 15:48:27', '2016-09-01 15:48:34', 3),
(16, 2, 8, 'java developer senior', NULL, 1, '2016-05-01 15:52:23', '2016-07-03 15:52:27', 1),
(17, 2, 9, 'Back-end Senior specialist', NULL, 1, '2016-01-02 15:52:39', '2016-07-03 15:52:45', 4);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`) VALUES
(1, 'Ha Noi'),
(2, 'Hai Phong'),
(3, 'Da Nang');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(511) DEFAULT NULL,
  `skills` varchar(1506) DEFAULT NULL,
  `user_created` datetime DEFAULT NULL,
  `user_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `skills`, `user_created`, `user_modified`) VALUES
(1, 'Mai Ngọc Thiện', 'r13r', 'thienmn@gmai.com', 'play tennis', NULL, NULL),
(2, 'Phạm Thị Hải', 'njmnj', 'haipt@gmail.com', 'teach the maths,sing a song', '2016-01-05 16:26:48', '2016-06-03 16:26:58'),
(3, 'Mai Ha Van', 'fajldf;ja', 'vanmth@gmail.com', 'play soccer,programming java,running fast,thinking fast', '2016-06-09 15:46:15', '2016-07-07 15:46:36'),
(4, 'Nguyễn Thanh Hiền', 'fqewrqow', 'hiennt2611@gmail.com', 'learning english fastly,speaking french fluently,play pingpong very well', '2016-07-06 15:47:46', '2016-07-19 15:47:52'),
(5, 'Mai Ngọc Toàn', 'r1erqwe', 'toanmn@gmail.com', 'draw very well,play pingpong great,sing so great', '2016-05-07 15:48:56', '2016-07-05 15:49:07'),
(7, 'Phạm Huy Khang', '4132413', 'khang@gmail.com', 'teach english, play soccer, read books fast', '2016-01-06 10:57:31', '2016-06-08 10:57:38'),
(8, 'Mai Ngọc Lam', '134132', 'lam@gmail.com', 'play guitar,learning bad fastly,smoking good,make a cake tasty', '2016-02-04 10:58:53', '2016-07-06 10:59:00'),
(9, 'Ngô Ngọc An', '4132r13413', 'an@gmail.com', 'play football,sing a song', '2007-01-26 10:59:38', '2015-11-07 10:59:49'),
(10, 'Mai Nhật Quang', '14132454132', 'quangnt@gmail.com', 'reading books fastly, eat pizza alots, save money', '2016-06-09 11:01:27', '2016-07-02 11:01:33'),
(11, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `job_id` (`job_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `jobs_ibfk_2` (`job_creator`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`),
  ADD CONSTRAINT `applications_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`),
  ADD CONSTRAINT `jobs_ibfk_2` FOREIGN KEY (`job_creator`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
