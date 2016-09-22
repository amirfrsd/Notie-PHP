-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 22, 2016 at 10:19 PM
-- Server version: 5.6.29
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amirfars_myDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `usersystem`
--

CREATE TABLE IF NOT EXISTS `usersystem` (
  `userid` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pastebin` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `usersystem`
--

INSERT INTO `usersystem` (`userid`, `username`, `password`, `email`, `pastebin`) VALUES
(1, 'amir', 'bee6246673ce54b849e1a1bb9f9a3e3d', 'amir.farsad@gmail.com', 'Khubi azizam. ? Che Khabarovsk ?  Assess ds s. D s s s s s s. '),
(21, 'amisr', 'bee6246673ce54b849e1a1bb9f9a3e3d', 'sdas', 'Simply remove this text and type whatever you want, then click on Bump Button');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
