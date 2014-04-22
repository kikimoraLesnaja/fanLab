-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2014 at 02:45 AM
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
  `idh` int(11) NOT NULL,
  `ee` varchar(255) NOT NULL,
  `en` varchar(255) NOT NULL,
  `ru` varchar(255) NOT NULL,
  `descee` text,
  `descen` text,
  `descru` text,
  `power` int(11) NOT NULL,
  PRIMARY KEY (`ida`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `fan_arms`
--

INSERT INTO `fan_arms` (`ida`, `idh`, `ee`, `en`, `ru`, `descee`, `descen`, `descru`, `power`) VALUES
(1, 1, 'Kepp', 'Stick', 'Палка', NULL, NULL, NULL, 10),
(2, 1, 'Vikat', 'Plait', 'Коса', NULL, NULL, NULL, 20),
(3, 1, 'Kirves', 'Axe', 'Топор', NULL, NULL, NULL, 30),
(4, 2, 'Piik', 'Peak', 'Пика', NULL, NULL, NULL, 20),
(5, 2, 'Vibu', 'Bow', 'Лук', NULL, NULL, NULL, 40),
(6, 2, 'M&otilde;&otilde;k', 'Sword', 'Меч', NULL, NULL, NULL, 50),
(7, 4, 'V&otilde;luleheke', 'Magician leaf', 'Волшебный листик', NULL, NULL, NULL, 5),
(8, 4, 'Oksake', 'Branch', 'Веточка', NULL, NULL, NULL, 10),
(9, 4, 'M&uuml;rgiseen', 'Poisonous Mushroom', 'Ядовитый гриб', NULL, NULL, NULL, 20),
(10, 3, 'V&otilde;lukepike', 'Magician stick', 'Вошебная палочка', NULL, NULL, NULL, 30),
(11, 3, 'S&otilde;rmus', 'Ring', 'Перстень', NULL, NULL, NULL, 50),
(12, 3, 'Raamat', 'Book', 'Книга', NULL, NULL, NULL, 100);

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
  `life` int(11) NOT NULL,
  PRIMARY KEY (`idh`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fan_heroes`
--

INSERT INTO `fan_heroes` (`idh`, `ee`, `en`, `ru`, `descee`, `descen`, `descru`, `life`) VALUES
(1, 'Maamees', 'Peisan', 'Крестьянин', NULL, NULL, NULL, 100),
(2, 'Sõjamees', 'Warrior', 'Воин', NULL, NULL, NULL, 75),
(3, 'Maag', 'Mag', 'Маг', NULL, NULL, NULL, 50),
(4, 'Siil udus', 'Hedgehog in fog', 'Ёжик в тумане', NULL, NULL, NULL, 125);

-- --------------------------------------------------------

--
-- Table structure for table `fan_persons`
--

CREATE TABLE IF NOT EXISTS `fan_persons` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `idh` int(11) NOT NULL,
  `sex` int(1) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `health` int(11) NOT NULL,
  `end_date` datetime NOT NULL,
  `field` text NOT NULL,
  `ida` int(11) NOT NULL,
  `power` int(11) NOT NULL,
  PRIMARY KEY (`idp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `fan_persons`
--

INSERT INTO `fan_persons` (`idp`, `id`, `name`, `idh`, `sex`, `avatar`, `start_date`, `health`, `end_date`, `field`, `ida`, `power`) VALUES
(25, 20, 'zz', 4, 0, 'view/img/heroes/4_2_0.png', '2014-04-21 22:13:55', 125, '0000-00-00 00:00:00', '0;3;3;4;2;2;4;3;0;3;0;4;3;2;1#3;3;0;1;0;0;1;1;1;2;0;0;1;4;0#2;0;2;1;4;4;1;1;4;4;0;1;3;4;2#3;4;1;1;4;0;4;0;1;3;0;2;4;4;3#3;2;3;1;4;0;0;1;0;1;3;1;0;1;0#0;1;2;3;0;2;0;3;0;4;2;0;1;2;0#3;3;2;2;3;3;1;2;0;0;4;4;2;0;3#3;1;3;4;2;0;1;4;2;0;2;2;1;1;4#0;3;2;0;4;3;3;3;2;0;4;1;2;3;0#1;2;2;2;3;2;4;2;4;4;2;2;1;4;1#1;3;3;3;0;3;2;1;2;4;2;1;3;4;4#4;3;4;4;3;1;0;4;4;3;3;4;3;3;2#1;3;1;0;1;0;2;4;3;1;0;2;2;3;2#3;0;2;0;4;2;0;1;4;0;0;3;0;4;1#4;1;2;2;0;3;2;4;3;1;4;3;3;2;0', 8, 10),
(26, 20, 'ASDAS', 4, 0, 'view/img/heroes/4_2_0.png', '2014-04-21 22:15:39', 125, '0000-00-00 00:00:00', '0;3;4;0;4;3;1;2;4;4;2;1;2;4;3#3;2;4;4;0;4;3;1;1;1;2;4;0;3;4#2;0;4;1;4;4;3;1;2;3;4;1;4;3;2#2;4;4;0;4;3;4;4;2;0;2;2;0;4;1#4;0;2;0;2;3;1;3;4;3;1;3;1;1;3#4;3;0;1;4;0;3;3;2;1;2;2;2;0;3#1;1;1;0;3;0;3;0;0;1;2;4;1;3;4#1;3;4;2;3;1;4;2;2;0;4;0;0;1;1#4;1;0;1;0;0;0;4;1;1;0;3;1;0;3#2;0;1;0;3;2;0;2;2;0;0;4;1;1;3#2;0;1;2;0;0;1;4;0;3;0;1;3;0;3#0;2;0;2;0;0;2;4;1;0;1;1;3;0;3#3;0;4;3;4;3;3;4;4;2;2;1;1;0;2#1;1;0;3;3;1;3;1;1;3;2;0;3;3;4#3;3;2;2;3;0;4;4;3;2;4;0;0;3;0', 8, 10),
(27, 10, 'tutyu', 2, 0, 'view/img/heroes/2_3_0.png', '2014-04-21 23:04:15', 75, '0000-00-00 00:00:00', '0;1;0;3;0;0;4;4;2;1;4;4;3;2;1#2;2;0;2;3;2;2;2;4;2;1;1;3;2;0#0;0;1;1;3;2;2;2;1;4;4;1;4;3;3#1;0;0;2;3;4;4;1;1;3;3;3;4;2;0#0;2;0;1;4;3;4;1;1;0;1;1;1;1;4#0;2;0;1;4;3;0;4;0;1;2;4;4;2;1#0;2;4;0;3;3;4;2;0;1;3;2;2;0;3#1;0;1;1;2;1;0;2;0;1;4;3;0;4;0#2;4;2;1;0;0;0;0;3;0;1;2;2;3;2#1;0;2;3;2;0;4;2;2;0;4;2;3;4;1#3;1;1;0;3;2;1;3;2;0;4;4;2;1;3#4;3;3;2;1;0;2;1;3;0;1;2;2;4;2#4;2;4;0;3;2;3;4;1;1;4;0;0;1;2#3;0;0;2;3;2;2;0;3;1;0;4;3;3;3#1;2;1;0;3;4;3;1;3;4;3;3;0;3;0', 4, 20),
(28, 20, 'MED', 3, 0, 'view/img/heroes/3_3_0.png', '2014-04-22 00:10:39', 50, '0000-00-00 00:00:00', '0;0;4;2;3;1;1;1;0;3;2;1;1;3;1#1;1;1;0;4;4;1;3;4;4;2;1;4;1;2#0;4;2;2;0;1;4;0;1;0;4;3;0;2;3#4;0;4;3;4;4;3;1;2;1;2;4;0;2;1#3;4;2;2;0;3;3;0;2;3;3;3;0;3;4#3;1;3;1;2;3;3;0;1;0;3;1;0;2;2#0;1;2;1;2;0;1;3;2;3;2;1;1;0;3#2;0;4;2;2;4;4;4;0;3;4;1;3;3;2#1;3;0;1;4;2;3;1;3;3;4;0;3;3;2#1;3;0;3;4;4;0;3;1;2;2;3;1;4;2#2;3;2;3;1;1;2;2;1;3;2;2;2;2;2#0;4;3;0;3;3;3;3;3;0;2;2;4;0;2#3;1;3;4;0;3;0;4;2;2;1;3;2;1;2#3;2;1;3;3;4;0;0;1;4;0;3;2;4;4#3;3;4;4;0;4;4;3;0;3;4;1;2;3;0', 11, 50);

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
  `nick` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `date_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tel` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `fan_users`
--

INSERT INTO `fan_users` (`id`, `name`, `lastname`, `nick`, `email`, `pass`, `date_reg`, `tel`) VALUES
(8, '', '', 'ABRACADABRA', 'abra@bbb.ee', 'e10adc3949ba59abbe56e057f20f883e', '2014-03-23 22:05:55', 0),
(11, '', '', 'KIKIKIKI', 'ki@mi.ru', 'e10adc3949ba59abbe56e057f20f883e', '2014-03-29 10:34:56', 0),
(12, 'Kira', 'Lulu', 'KIRALURICH', 'kira@ki.ee', '96e79218965eb72c92a549dd5a330112', '2014-03-30 09:17:03', 123456),
(13, '', '', 'mumumu', 'Эл. почта', '9aee390f19345028f03bb16c588550e1', '2014-03-30 14:41:42', 0),
(14, '', '', 'kukuku', 'Эл. почта', '1a100d2c0dab19c4430e7d73762b3423', '2014-03-30 14:47:20', 0),
(15, '', '', 'kukuku2', 'ku@ku.ee', '1a100d2c0dab19c4430e7d73762b3423', '2014-03-30 14:53:38', 0),
(16, '', '', 'mimimi', 'mi@mi.ru', '372b92179ff1e7351a11db02b2deaaba', '2014-03-30 14:57:25', 0),
(17, '', '', 'NININI', 'ni@ni.ee', '1a100d2c0dab19c4430e7d73762b3423', '2014-03-30 15:03:31', 0),
(18, '', '', 'jijiji', 'ji@ji.uu', '73882ab1fa529d7273da0db6b49cc4f3', '2014-03-30 15:06:33', 0),
(19, '', '', 'pupupu', 'pu@pu.ny', 'd06da2f85605b53b0a8d6083c821a285', '2014-03-30 15:24:13', 0),
(20, 'WWW', 'QQQ', 'KIKIMORA', 'kira@peegel.ee', 'e10adc3949ba59abbe56e057f20f883e', '2014-03-30 17:13:53', 7654321),
(21, '', '', 'aaaaaaa', 'aaa@aaa.ee', 'e10adc3949ba59abbe56e057f20f883e', '2014-03-30 17:14:36', 0),
(22, '', '', 'KIKIMORA123', 'KIKIMORA@UT.EE', 'e10adc3949ba59abbe56e057f20f883e', '2014-04-18 20:38:27', 0),
(23, '', '', 'HIHIHI', 'HI@HI.EE', 'f2a67e7e2e83887577cdf22df599c1f2', '2014-04-21 12:20:03', 0);

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
('arm', 'Relv', 'Arm', 'Оружие'),
('chpass', 'Vaheta passi', 'Change password', 'Сменить пароль'),
('creahero', 'Uus kangelane', 'Create hero', 'Создать героя'),
('curr_hero_prop', 'Kangelase omadused', 'Current Hero''s properties', 'Свойства героя'),
('email', 'E-post', 'E-mail', 'Эл. почта'),
('firstname', 'Eesnimi', 'Firstname', 'Имя'),
('heroes', 'Kangelased', 'Heroes', 'Герои'),
('hero_arm_power', 'Relv (v&otilde;imsus)', 'Hero''s Arm (power)', 'Оружие (мощность)'),
('hero_avatar', 'Kangelase n&auml;gu', 'Hero''s avatar', 'Внешность'),
('hero_name', 'Kangelase Nimi', 'Hero name', 'Имя героя'),
('hero_type_life', 'Kangelase liik (elu)', 'Hero''s type (life)', 'Тип героя (жизнь)'),
('lastname', 'Perenimi', 'Lastname', 'Фамилия'),
('life', 'Elu', 'Life', 'Жизнь'),
('loginok', 'Autentifikatsioon on &otilde;nnelik', 'Login is OK', 'Вы вошли в игру'),
('name', 'Nimi', 'Name', 'Имя'),
('nick', 'Kasutaja', 'Nickname', 'Пользователь'),
('nickname', 'Kasutaja nimi', 'Nickname', 'Имя пользов.'),
('pass', 'Pass', 'Password', 'Пароль'),
('reg', 'Registratsioon', 'Registration', 'Регистрация'),
('regok', 'Registratsioon on &otilde;nnelik', 'Registration complete', 'Регистрация удалась'),
('reg_descr', 'K&otilde;ik väljud peab olla täidetud. Kasutajanimi peab olla min 6 tähte. Pass min 6 tähte.', 'All fileds must be filled. Username must be min 6 characters. Password must be min 6 characters.', 'Все поля должны быть заполнены. Имя пользователя и пароль - мин. 6 символов.'),
('repeat_pass', 'Pass veel kord', 'Repeat Password', 'Пароль ещё раз'),
('tel', 'Telefon', 'Phone', 'Телефон'),
('updateok', 'Uuendamine oli &otilde;nnelik', 'Update was sucsesfully', 'Обновление было успешным'),
('user', 'Kasutaja', 'User', 'Имя пользов.'),
('user_profil', 'Kasutaja andmed', 'Users''s Profil', 'Даннные пользователя');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
