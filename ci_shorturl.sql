-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 19, 2018 at 05:38 AM
-- Server version: 5.7.21
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_shorturl`
--

-- --------------------------------------------------------

--
-- Table structure for table `shorturl`
--

DROP TABLE IF EXISTS `shorturl`;
CREATE TABLE `shorturl` (
  `id` int(11) NOT NULL,
  `url` varchar(155) COLLATE utf8_unicode_ci NOT NULL,
  `shorturl` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `views` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `way` enum('WEB','API') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'WEB',
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('Active','Inactive','Delete') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `user_username` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `user_mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `user_website` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `user_last_password` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `user_registration_date` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `user_registration_info` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `user_last_login` text COLLATE utf8_unicode_ci NOT NULL,
  `user_last_login_info` text COLLATE utf8_unicode_ci NOT NULL,
  `user_status` enum('Active','Inactive','Delete') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shorturl`
--
ALTER TABLE `shorturl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shorturl`
--
ALTER TABLE `shorturl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
