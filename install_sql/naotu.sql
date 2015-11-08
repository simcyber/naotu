-- phpMyAdmin SQL Dump
-- version 4.0.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `naotu`
--
CREATE DATABASE IF NOT EXISTS `naotu` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `naotu`;

-- --------------------------------------------------------

--
-- 表的结构 `naotu_data`
--

CREATE TABLE IF NOT EXISTS `naotu_data` (
  `nid` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `pub` int(1) DEFAULT '1',
  `tag` varchar(50) DEFAULT '默认',
  `email` varchar(50) DEFAULT NULL,
  `body` text,
  `imgs` blob,
  `datetime` datetime DEFAULT NULL,
  `hits` int(5) DEFAULT '1',
  `hots` float DEFAULT '0',
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `uid` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `is_admin` int(1) DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `userinfo`
--

INSERT INTO `userinfo` (`uid`, `email`, `password`, `is_admin`) VALUES
(1, 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
