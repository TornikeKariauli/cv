-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2018 at 10:18 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `computer_languages`
--

CREATE TABLE `computer_languages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `knowledge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `computer_languages`
--

INSERT INTO `computer_languages` (`id`, `name`, `knowledge`) VALUES
(1, 'PHP', 90),
(2, 'JavaScript', 70),
(3, 'jQuery', 80),
(4, 'Angular', 60),
(5, 'HTML5', 90),
(6, 'CSS3 (SASS)', 80),
(7, 'C++', 20),
(8, 'Java', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computer_languages`
--
ALTER TABLE `computer_languages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computer_languages`
--
ALTER TABLE `computer_languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
