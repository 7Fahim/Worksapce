-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2022 at 06:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `created_by_id` int(11) NOT NULL,
  `contact_info` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `name`, `description`, `created_by_id`, `contact_info`) VALUES
(1, 'Item04', 'adasdasdasdasd  ', 4, 'asdasdasd'),
(2, 'Item02', 'lololol', 4, 'heheheh'),
(3, 'Item06', 'NA asdas ', 4, '+8801534837693'),
(4, 'New One', 'Ded desadasd ', 4, '1234564896');

-- --------------------------------------------------------

--
-- Table structure for table `invalid_attempt_count`
--

CREATE TABLE `invalid_attempt_count` (
  `id` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `a_count` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ip_lock`
--

CREATE TABLE `ip_lock` (
  `id` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `locked_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`firstname`, `surname`, `email`, `password`, `id`) VALUES
('asdasdasd', 'asdasdasdasd', 'asdasdasdas@adsasdasd.com', 'dasdasdasdasd', 1),
('asdasdasd', 'asdasdasdasd', 'asdasdasdas@adsasdasd.com', 'dasdasdasdasd', 2),
('asdasdasdasdad', 'dasdsadasd', 'asdasdasdas@adsasdasd.com', 'sadasdas', 3),
('rifat', 'alam', 'rifat@rifat.com', '1234', 4),
('Fahim', 'Ahmed', 'fahim579507@gmail.com', '12345678', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invalid_attempt_count`
--
ALTER TABLE `invalid_attempt_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ip_lock`
--
ALTER TABLE `ip_lock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `invalid_attempt_count`
--
ALTER TABLE `invalid_attempt_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ip_lock`
--
ALTER TABLE `ip_lock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
