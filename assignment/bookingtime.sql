-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-07-04 16:34:39
-- 伺服器版本: 10.1.13-MariaDB
-- PHP 版本： 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `studentr`
--

-- --------------------------------------------------------

--
-- 資料表結構 `bookingtime`
--

CREATE TABLE `bookingtime` (
  `bkid` int(10) UNSIGNED NOT NULL,
  `btime` datetime DEFAULT NULL,
  `studentno` varchar(9) NOT NULL,
  `roomno` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `bookingtime`
--

INSERT INTO `bookingtime` (`bkid`, `btime`, `studentno`, `roomno`) VALUES
(4, '0000-00-00 00:00:00', '150601139', 'A32'),
(6, '0000-00-00 00:00:00', '150601139', 'R32'),
(7, '0000-00-00 00:00:00', '150601139', 'r33'),
(10, '0000-00-00 00:00:00', '150601139', 'b12'),
(20, '2016-07-04 11:30:00', '150601100', 'A30'),
(21, '2016-07-07 09:30:00', '150601100', 'b12'),
(24, '0000-00-00 00:00:00', '150601139', 'A30'),
(43, '2016-07-04 10:30:00', '150601100', 'r33');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `bookingtime`
--
ALTER TABLE `bookingtime`
  ADD PRIMARY KEY (`bkid`),
  ADD KEY `fk_1` (`studentno`),
  ADD KEY `fk_2` (`roomno`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `bookingtime`
--
ALTER TABLE `bookingtime`
  MODIFY `bkid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `bookingtime`
--
ALTER TABLE `bookingtime`
  ADD CONSTRAINT `fk_1` FOREIGN KEY (`studentno`) REFERENCES `student` (`studentno`),
  ADD CONSTRAINT `fk_2` FOREIGN KEY (`roomno`) REFERENCES `room` (`roomno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
