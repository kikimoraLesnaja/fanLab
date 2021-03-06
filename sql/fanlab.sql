-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2014 at 11:20 AM
-- Server version: 5.5.25
-- PHP Version: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fanlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `fan_arms`
--

CREATE TABLE IF NOT EXISTS `fan_arms` (
  `ida` int(11) NOT NULL AUTO_INCREMENT,
  `ee` varchar(255) NOT NULL,
  `en` varchar(255) NOT NULL,
  `ru` varchar(255) NOT NULL,
  `descee` text,
  `descen` text,
  `descru` text,
  `power` int(11) NOT NULL,
  PRIMARY KEY (`ida`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fan_artefacts`
--

CREATE TABLE IF NOT EXISTS `fan_artefacts` (
  `idar` int(11) NOT NULL AUTO_INCREMENT,
  `ee` varchar(255) NOT NULL,
  `en` varchar(255) NOT NULL,
  `ru` varchar(255) NOT NULL,
  `descee` text NOT NULL,
  `descen` text NOT NULL,
  `descru` text NOT NULL,
  `amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`idar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fan_enemies`
--

CREATE TABLE IF NOT EXISTS `fan_enemies` (
  `ide` int(11) NOT NULL AUTO_INCREMENT,
  `ee` varchar(255) NOT NULL,
  `en` varchar(255) NOT NULL,
  `ru` varchar(255) NOT NULL,
  `descee` text NOT NULL,
  `descen` text NOT NULL,
  `descru` text NOT NULL,
  `power` int(11) NOT NULL,
  PRIMARY KEY (`ide`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fan_heroes`
--

CREATE TABLE IF NOT EXISTS `fan_heroes` (
  `idh` int(11) NOT NULL AUTO_INCREMENT,
  `ee` varchar(255) NOT NULL,
  `en` varchar(255) NOT NULL,
  `ru` varchar(255) NOT NULL,
  `descee` text,
  `descen` text,
  `descru` text,
  `live` int(11) NOT NULL,
  PRIMARY KEY (`idh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fan_persons`
--

CREATE TABLE IF NOT EXISTS `fan_persons` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `idh` int(11) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `health` int(11) NOT NULL,
  `end_date` datetime NOT NULL,
  `field` text NOT NULL,
  PRIMARY KEY (`idp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fan_person_arm`
--

CREATE TABLE IF NOT EXISTS `fan_person_arm` (
  `idp` int(11) NOT NULL,
  `ida` int(11) NOT NULL,
  `power` int(11) NOT NULL,
  PRIMARY KEY (`idp`,`ida`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fan_person_artefact`
--

CREATE TABLE IF NOT EXISTS `fan_person_artefact` (
  `idp` int(11) NOT NULL,
  `idar` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`idp`,`idar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fan_users`
--

CREATE TABLE IF NOT EXISTS `fan_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `date_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fan_words`
--

CREATE TABLE IF NOT EXISTS `fan_words` (
  `kw` varchar(255) NOT NULL,
  `ee` varchar(255) NOT NULL,
  `en` varchar(255) NOT NULL,
  `ru` varchar(255) NOT NULL,
  PRIMARY KEY (`kw`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fan_words`
--

INSERT INTO `fan_words` (`kw`, `ee`, `en`, `ru`) VALUES
('about', 'Mängust', 'About', 'О игре'),
('allhero', 'K&otilde;ik kangelased', 'All heroes', 'Все герои'),
('creahero', 'Moodusta kangelast', 'Create hero', 'Создать героя'),
('email', 'E-post', 'E-mail', 'Эл. почта'),
('heroes', 'Kangelased', 'Heroes', 'Герои'),
('nick', 'Kasutaja', 'Nickname', 'Пользователь'),
('nickname', 'Kasutaja nimi', 'Nickname', 'Имя пользов.'),
('pass', 'Pass', 'Password', 'Пароль'),
('reg', 'Registration', 'Registratioon', 'Регистрация'),
('repeat_pass', 'Pass veel kord', 'Repeat Password', 'Пароль ещё раз'),
('user', 'Kasutaja', 'User', 'Имя пользов.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
