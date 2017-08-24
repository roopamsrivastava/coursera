-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2017 at 09:31 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coursera`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` varchar(100) NOT NULL COMMENT 'course_id',
  `name` varchar(500) NOT NULL COMMENT 'course_name',
  `type` varchar(500) NOT NULL COMMENT 'course_type'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `type`) VALUES
('0HiU7Oe4EeWTAQ4yevf_oQ', 'Dealing With Missing Data', 'v2.ondemand'),
('5zjIsJq-EeW_wArffOXkOw', 'Vital Signs: Understanding What the Body Is Telling Us', 'v2.ondemand'),
('69Bku0KoEeWZtA4u62x6lQ', 'Gamification', 'v2.ondemand'),
('KlAJ6oysEeW79RIwiAyGoQ', 'Successful Presentation', 'v2.ondemand');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
