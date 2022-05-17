-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2022 at 01:44 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventid` int(11) NOT NULL,
  `eventname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `eventdetails` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `eventdate` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `eventlocation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `upcoming` int(2) NOT NULL,
  `image` varchar(400) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventid`, `eventname`, `eventdetails`, `eventdate`, `eventlocation`, `upcoming`, `image`) VALUES
(1, 'Game Night', 'Join Us at \"aztec student union - legacy suite\" for a game night!<br>\r\nDon\'t miss out the three competitve tournaments:<br>\r\n1. FIFA 22 - PS5<br>\r\n2. Baloot &nbsp;&nbsp;&emsp;&emsp;<br>\r\n3. Chess &emsp;&emsp;&emsp;<br>\r\nThere will be valuable prizes for the winners of each tournament!!<br>', '02/19/2022', 'Aztec Student Union', 1, 'images/upcoming.png'),
(2, 'Paintball', 'A day filled with action!<br>\r\nRuthless, intense, and competitve atmosphere is the key to enjoy paintball.<br>\r\nand that exactly how we felt during this unforgettable event!', '04/14/2019', 'Giant Paintball Park', 0, ''),
(3, 'Eid Al-Adha', 'Good vibes, great food, and awesome people!<br>\r\nSince Eid Al-Adha is one of the two main holidays in Saudi Arabia.<br>\r\nWe had a blast celeberating this sensational occasion with our students at SDSU.', '09/01/2017', 'Town and Country Resort', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `userevents`
--

CREATE TABLE `userevents` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `eventid` int(11) NOT NULL,
  `upcoming` int(11) NOT NULL,
  `registered` int(2) NOT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userevents`
--

INSERT INTO `userevents` (`id`, `userid`, `eventid`, `upcoming`, `registered`, `rating`) VALUES
(2, 15, 2, 0, 1, 4),
(4, 16, 3, 0, 0, 10),
(5, 17, 3, 1, 1, 8),
(8, 18, 2, 0, 1, 6),
(9, 18, 3, 0, 1, 2),
(10, 14, 2, 0, 1, 10),
(11, 14, 3, 0, 1, 3),
(12, 19, 2, 0, 1, 5),
(13, 20, 1, 1, 0, NULL),
(14, 20, 2, 0, 1, NULL),
(15, 20, 3, 0, 1, NULL),
(16, 21, 1, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'a', 'a', 'a@yahoo.com', 'a'),
(3, 'f', 'f', 'f@yahoo.com', 'f'),
(4, 'First', 'Last', 'fake@yahoo.com', '123'),
(5, 'John', 'Doe', 'jd@yahoo.com', '123'),
(6, 'Jane', 'Doe', 'jda@yahoo.com', '123'),
(7, '1', '1', '1@yahoo.com', '1'),
(8, '2', '2', '2@yahoo.com', '2'),
(9, '4', '4', '4@yahoo.com', '4'),
(10, 'u', 'u', 'u@yahoo.com', 'u'),
(11, 'y', 'y', 'y@yahoo.com', 'y'),
(12, 'x', 'x', 'x@yahoo.com', 'x'),
(13, 'q', 'q', 'q@yahoo.com', 'q'),
(14, 'g', 'g', 'g@yahoo.com', 'g'),
(15, 'zz', 'zz', 'zz@yahoo.com', 'z'),
(16, 'qw', 'qw', 'qw@yahoo.com', 'qw'),
(17, 'xyz', 'xyz', 'xyz@yahoo.com', 'xyz'),
(18, 'ha', 'ha', 'ha@yahoo.com', 'ha'),
(19, 'julia', 'q', 'julia@yahoo.com', 'julia'),
(20, 'George', 'Doe', 'gd@yahoo.com', 'gd'),
(21, 'John', 'Doe', 'johndoe@yahoo.com', 'jd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventid`),
  ADD KEY `upcoming` (`upcoming`);

--
-- Indexes for table `userevents`
--
ALTER TABLE `userevents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `eventid` (`eventid`),
  ADD KEY `upcoming` (`upcoming`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userevents`
--
ALTER TABLE `userevents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `userevents`
--
ALTER TABLE `userevents`
  ADD CONSTRAINT `userevents_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `userevents_ibfk_2` FOREIGN KEY (`eventid`) REFERENCES `events` (`eventid`),
  ADD CONSTRAINT `userevents_ibfk_3` FOREIGN KEY (`upcoming`) REFERENCES `events` (`upcoming`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
