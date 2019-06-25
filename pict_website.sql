-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 02:08 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pict_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news` text NOT NULL,
  `url` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`, `url`, `date`) VALUES
(1, 'safdafddfs', 'https://www.pictoreal.in', '2019-06-12'),
(6, 'sadfsafsafas', 'sfasfasfasdf', '2019-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `scrolling_news`
--

CREATE TABLE `scrolling_news` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `url` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scrolling_news`
--

INSERT INTO `scrolling_news` (`id`, `content`, `url`, `date`) VALUES
(1, 'this is test message onethis is test message onethis is test message onethis is test message onethis is test message onethis is test message onethis is test message onethis is test message one', 'https://www.google.com', '2019-06-04'),
(2, 'test message 2', '', '2019-06-19'),
(3, 'ajdsfkasjhfklajdhfklajhklfjhkj', 'www.google.con', '2019-06-28'),
(6, 'wersdfdfsfd', 'sdfsdffd', '2019-06-13'),
(7, 'wersdfdfsfd', 'sdfsdffd', '2019-06-13'),
(8, 'sadfasdfas', 'safdasfdfasfaf', '2019-06-08'),
(9, 'hello pict', 'qwe', '2019-06-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scrolling_news`
--
ALTER TABLE `scrolling_news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `scrolling_news`
--
ALTER TABLE `scrolling_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
