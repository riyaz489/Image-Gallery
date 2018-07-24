-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 08:55 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(25) NOT NULL,
  `name` varchar(30) NOT NULL,
  `albumname` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `img_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `name`, `albumname`, `year`, `img_name`) VALUES
(2, 'riyaz489', 'goku', 'Jun 2018', 'photoshop.jpg'),
(4, 'kishan@123', 'goku_2', 'Jun 2018', 'photoshop.jpg'),
(5, 'riyaz489', 'goku', 'Jun 2018', 'batmobile_in_arkham_knight-192'),
(6, 'riyaz489', 'goku', 'Jun 2018', 'crysis_3_nanosuit-1920x1080.jp'),
(8, 'riyaz489', 'hemant', 'Jun 2018', '47_ronin_freak-2560x1440.jpg'),
(9, 'riyaz489', 'goku', 'Jun 2018', '2012_need_for_speed_most_wante'),
(10, 'riyaz489', 'goku', 'Jun 2018', '47_ronin_freak-2560x1440.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `userid`, `password`) VALUES
(1, 'Riyaz', 'Riyaz489', 'Riyaz@123'),
(2, 'abhi', 'abhi123', 'Abhi@123'),
(3, 'kishan', 'kishan@123', 'Kishan@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
