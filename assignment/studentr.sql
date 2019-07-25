-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2016 at 07:49 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studentr`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingtime`
--

CREATE TABLE IF NOT EXISTS `bookingtime` (
  `bkid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `btime` datetime DEFAULT NULL,
  `studentno` varchar(9) NOT NULL,
  `roomno` char(3) NOT NULL,
  PRIMARY KEY (`bkid`),
  KEY `fk_1` (`studentno`),
  KEY `fk_2` (`roomno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `bookingtime`
--

INSERT INTO `bookingtime` (`bkid`, `btime`, `studentno`, `roomno`) VALUES
(4, '0000-00-00 00:00:00', '150601139', 'A32'),
(6, '0000-00-00 00:00:00', '150601139', 'R32'),
(7, '0000-00-00 00:00:00', '150601139', 'r33'),
(9, '0000-00-00 00:00:00', '150601139', 'A30');

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE IF NOT EXISTS `librarian` (
  `libid` varchar(6) NOT NULL,
  `name` varchar(40) NOT NULL,
  `pw` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`libid`, `name`, `pw`) VALUES
('123456', 'wilson', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `roomno` char(3) NOT NULL DEFAULT '',
  `roomname` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `roomsize` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`roomno`),
  FULLTEXT KEY `status` (`status`),
  FULLTEXT KEY `status_2` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomno`, `roomname`, `status`, `roomsize`) VALUES
('A30', 'classr', 'avail', 'large'),
('A32', 'classr', 'avail', 'large'),
('R32', 'classr', 'avail', 'small'),
('r33', 'sdfkl', 'avail', 'small');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `studentno` char(9) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mobile` char(8) DEFAULT NULL,
  `fee` varchar(6) DEFAULT NULL,
  `login` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`studentno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentno`, `name`, `password`, `email`, `mobile`, `fee`, `login`) VALUES
('150000001', 'keith leung', '123456', 'k@email.com', '95595599', NULL, NULL),
('150246592', 'CASH YIP', 'beebee0528', '150246592@stu.vtc.edu.hk', '94585839', NULL, 'avail'),
('150601139', 'WILSON CHAU', 'a68713445', '150601139@stu.vtc.edu.hk', '96738888', NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookingtime`
--
ALTER TABLE `bookingtime`
  ADD CONSTRAINT `fk_1` FOREIGN KEY (`studentno`) REFERENCES `student` (`studentno`),
  ADD CONSTRAINT `fk_2` FOREIGN KEY (`roomno`) REFERENCES `room` (`roomno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
