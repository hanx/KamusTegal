-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 29, 2011 at 02:05 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kamustegal`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'Administrator'),
(2, 'Contributor');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `firstname`, `lastname`, `email`, `telephone`) VALUES
(1, 'admin', '12345', 1, 'User', 'Administrator', 'admin@none.com', '12345678'),
(2, 'user1', '123', 2, 'User', 'Kontributor', 'contributor@none.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE IF NOT EXISTS `words` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tegal` varchar(200) DEFAULT NULL,
  `indonesia` varchar(200) DEFAULT NULL,
  `inggris` varchar(200) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`id`, `tegal`, `indonesia`, `inggris`, `user_id`, `created`, `modified`) VALUES
(1, 'mangan', 'makan', 'eat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),

(2, 'nginung', 'minum', 'drink', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),

(3, 'turu', 'tidur', 'sleep', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),

(4, 'ngilang', 'menghilang', 'disappear, vanish', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),

(5, 'adus', 'mandi', 'bath (take a bath)', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),

(6, 'turu', 'tidur', 'sleep', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),

(7, 'atis', 'dingin', 'cool', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),

(8, 'mlayu', 'lari', 'run', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),

(9, 'mabur', 'terbang', 'fly', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),

(10, 'tangi', 'bangun', 'wake up', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),

(11, 'andon', 'tumpang, menumpang', 'join with others', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),

(12, 'anjog', 'sampai', 'arrive', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),

(13, 'alon - alon', 'pelan - pelan', 'slow', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),

(15, 'abang', 'merah', 'red', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');


