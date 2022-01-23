-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2022 at 05:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teago`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `sn` int(11) NOT NULL,
  `id` text NOT NULL,
  `user` text NOT NULL,
  `post` text NOT NULL,
  `react` text NOT NULL,
  `dateposted` datetime NOT NULL,
  `title` text NOT NULL,
  `pix` text NOT NULL,
  `uspix` text NOT NULL,
  `articleurl` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`sn`, `id`, `user`, `post`, `react`, `dateposted`, `title`, `pix`, `uspix`, `articleurl`, `comment`) VALUES
(1, '', 'TeaGo COSE', 'Welcome to TeaGo COSE\r\n\r\nShedding Team Dynamism', '500', '2021-12-24 17:25:24', 'NEW HERE?', '', 'assets/images/log.png', 'NEW-HERE?', '0'),
(2, '', 'TeaGo Cose', 'The Number One Campus Online Social Environment for Nigerian Tertiary Institutions \r\n\r\n\r\nWe are unveiling!', '200', '2021-12-24 18:17:06', 'WATIMAGBO', '', 'assets/images/log.png', 'watimagbo', '0'),
(3, '', 'TeaGo COSE', 'Welcome to TeaGo COSE\r\n\r\nShedding Team Dynamism', '80', '2021-12-26 12:48:17', 'READ THIS FIRST!', '', 'assets/images/log.png', '', '0'),
(18, '89b9c689a57b82e59074c6ba09aa394d', 'Grtnxhor', 'bsbde', '0', '2022-01-16 08:51:26', 'dbd', '', 'assets/images/log.png', 'dbd', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sn` int(11) NOT NULL,
  `id` text NOT NULL,
  `fname` text NOT NULL,
  `email` text NOT NULL,
  `user` text NOT NULL,
  `pword` text NOT NULL,
  `dreg` date NOT NULL,
  `lstseen` datetime NOT NULL,
  `active` text NOT NULL,
  `activator` text NOT NULL,
  `pix` text NOT NULL,
  `cover` text NOT NULL,
  `verification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sn`, `id`, `fname`, `email`, `user`, `pword`, `dreg`, `lstseen`, `active`, `activator`, `pix`, `cover`, `verification`) VALUES
(11, '1', 'Abolade Greatness', 'greatnessabolade@gmail.com', 'Grtnxhor', '53c1df01e11ec01bcf9ced4ccae8c667', '2021-12-23', '2022-01-16 08:53:15', '1', '', '', '', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
