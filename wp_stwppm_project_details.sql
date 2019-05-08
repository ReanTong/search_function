-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 10:47 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wordpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_stwppm_project_details`
--

CREATE TABLE `wp_stwppm_project_details` (
  `id` int(11) NOT NULL,
  `pro_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `client_logo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pro_desc` varchar(255) CHARACTER SET utf8 NOT NULL,
  `priority` varchar(255) CHARACTER SET utf8 NOT NULL,
  `start_date` varchar(255) CHARACTER SET utf8 NOT NULL,
  `end_date` varchar(255) CHARACTER SET utf8 NOT NULL,
  `check1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `check2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `check3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `check4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `post_date` varchar(255) CHARACTER SET utf8 NOT NULL,
  `post_status` varchar(255) CHARACTER SET utf8 NOT NULL,
  `post_author` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_stwppm_project_details`
--

INSERT INTO `wp_stwppm_project_details` (`id`, `pro_title`, `name`, `client_logo`, `pro_desc`, `priority`, `start_date`, `end_date`, `check1`, `check2`, `check3`, `check4`, `post_date`, `post_status`, `post_author`, `pass`) VALUES
(1, 'sas', 'sad', '1555909034.', '', '', '2019-04-03', '2019-04-02', '', '', '', '', '04/22/2019 12:57:14 pm', '1', 'admin', '192d644078e7aa9e59b31a9bf376ae1b'),
(2, 'kolp', 'oputg', '', '', 'medium', '', '', '', '', '', '', '04/22/2019 01:49:50 pm', '1', 'admin', '5fb995a696f3a5308afa7abc2131d0a7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_stwppm_project_details`
--
ALTER TABLE `wp_stwppm_project_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_stwppm_project_details`
--
ALTER TABLE `wp_stwppm_project_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
