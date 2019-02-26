-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 04:30 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `authorname` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `bookid`, `authorname`) VALUES
(1, 5, 'Thomas H.Cormen'),
(2, 8, 'Wille Wagnar'),
(3, 6, 'Hertbert Schildt'),
(4, 7, 'hertbert schildt'),
(5, 9, 'James Weaver'),
(6, 9, 'Stephen Chin');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `price` int(11) NOT NULL,
  `availabe` int(11) NOT NULL,
  `publisherid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `price`, `availabe`, `publisherid`) VALUES
(5, 'Introduction to Algorithm', 500, 0, 1),
(6, 'Java The Complete Reference', 400, 11, 1),
(7, 'The Art of C++', 450, 4, 3),
(8, 'Computer graphics for Java programmers', 300, 2, 4),
(9, 'Raspberry Pi with Java: Programming the Internet of Things (IoT) ', 600, 3, 2),
(10, 'dskljfsadklfjsdkl;fjdskl', 500, 6, 3),
(11, 'abc', 55, 6, 4);

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `userid` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `borrowdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `returndate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`userid`, `bookid`, `borrowdate`, `returndate`) VALUES
(1, 6, '2017-12-05 17:36:18', '2017-12-05 17:36:18'),
(2, 6, '2017-12-05 16:20:25', '2017-12-05 16:20:25'),
(2, 7, '2017-11-25 18:39:54', '0000-00-00 00:00:00'),
(2, 8, '2017-11-25 18:39:54', '2017-12-03 18:00:00'),
(2, 9, '2017-12-05 16:35:36', '2017-12-05 16:35:36'),
(3, 5, '2017-12-05 16:40:54', '0000-00-00 00:00:00'),
(3, 7, '2017-12-05 16:42:51', '0000-00-00 00:00:00'),
(3, 9, '2017-12-05 16:42:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `Address` longtext NOT NULL,
  `city` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`id`, `name`, `Address`, `city`) VALUES
(1, 'The MIT Press', 'MA', 'USA'),
(2, 'The Oracle Press', 'McGraw Hill', 'America'),
(3, 'The wildgood ', '75,E road', 'Osborne'),
(4, 'The Fantom Giss', 'Raian Lane Road', 'Paris'),
(5, 'BRAC', 'Mohakhali', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `userid` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`userid`, `bookid`, `rating`) VALUES
(1, 5, 10),
(1, 6, 10),
(1, 7, 10),
(1, 8, 9),
(1, 9, 1),
(2, 5, 9),
(2, 6, 10),
(2, 7, 8),
(2, 8, 2),
(2, 9, 3),
(3, 5, 5),
(3, 6, 6),
(3, 7, 7),
(3, 8, 9),
(3, 9, 8),
(13, 6, 10),
(13, 8, 0),
(14, 6, 9),
(14, 9, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `email` longtext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'ssa', 'ssakash6611@gmail.com', '123'),
(2, 'nahian', 'nahian@gmail.com', '123'),
(3, 'himel', 'himel@gmail.com', '123'),
(13, 'asdfas', 'asdf@gmail.com', '123'),
(14, 'najeefa', 'najeefa@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookid` (`bookid`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publisherid` (`publisherid`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`userid`,`bookid`),
  ADD KEY `bookid` (`bookid`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`userid`,`bookid`),
  ADD KEY `bookid` (`bookid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `author`
--
ALTER TABLE `author`
  ADD CONSTRAINT `author_ibfk_1` FOREIGN KEY (`bookid`) REFERENCES `book` (`id`);

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`publisherid`) REFERENCES `publisher` (`id`);

--
-- Constraints for table `borrow`
--
ALTER TABLE `borrow`
  ADD CONSTRAINT `borrow_ibfk_1` FOREIGN KEY (`bookid`) REFERENCES `book` (`id`),
  ADD CONSTRAINT `borrow_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Constraints for table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`bookid`) REFERENCES `book` (`id`),
  ADD CONSTRAINT `rate_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
