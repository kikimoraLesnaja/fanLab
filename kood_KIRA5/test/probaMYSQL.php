<?

//include('conf.php');

$dbHost='ats.cs.ut.ee';

$dbUser='kira77';

$dbPass='f4nl4bKIRA351';

$dbName='kira77_fanlab';



$link = mysql_connect($dbHost, $dbUser, $dbPass) or die('SEREVER');
        //mysql_select_db($db_name, $res);
        mysql_select_db($dbName) or die(mysql_error());
		
		  mysql_set_charset('utf8');
		  
		$sel="CREATE TABLE  `fan_arms` (
  `ida` int(11) NOT NULL AUTO_INCREMENT,
  `ee` varchar(255) NOT NULL,
  `en` varchar(255) NOT NULL,
  `ru` varchar(255) NOT NULL,
  `descee` text,
  `descen` text,
  `descru` text,
  `power` int(11) NOT NULL,
  PRIMARY KEY (`ida`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";


//****************************************************************************//
/*
$a[]="CREATE TABLE IF NOT EXISTS `fan_artefacts` (
  `idar` int(11) NOT NULL AUTO_INCREMENT,
  `ee` varchar(255) NOT NULL,
  `en` varchar(255) NOT NULL,
  `ru` varchar(255) NOT NULL,
  `descee` text NOT NULL,
  `descen` text NOT NULL,
  `descru` text NOT NULL,
  `amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`idar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ";

$a[]="CREATE TABLE IF NOT EXISTS `fan_enemies` (
  `ide` int(11) NOT NULL AUTO_INCREMENT,
  `ee` varchar(255) NOT NULL,
  `en` varchar(255) NOT NULL,
  `ru` varchar(255) NOT NULL,
  `descee` text NOT NULL,
  `descen` text NOT NULL,
  `descru` text NOT NULL,
  `power` int(11) NOT NULL,
  PRIMARY KEY (`ide`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ";



$a[]="CREATE TABLE IF NOT EXISTS `fan_heroes` (
  `idh` int(11) NOT NULL AUTO_INCREMENT,
  `ee` varchar(255) NOT NULL,
  `en` varchar(255) NOT NULL,
  `ru` varchar(255) NOT NULL,
  `descee` text,
  `descen` text,
  `descru` text,
  `live` int(11) NOT NULL,
  PRIMARY KEY (`idh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ";



$a[]="CREATE TABLE IF NOT EXISTS `fan_persons` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `idh` int(11) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `health` int(11) NOT NULL,
  `end_date` datetime NOT NULL,
  `field` text NOT NULL,
  PRIMARY KEY (`idp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ";



$a[]="CREATE TABLE IF NOT EXISTS `fan_person_arm` (
  `idp` int(11) NOT NULL,
  `ida` int(11) NOT NULL,
  `power` int(11) NOT NULL,
  PRIMARY KEY (`idp`,`ida`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";



$a[]="CREATE TABLE IF NOT EXISTS `fan_person_artefact` (
  `idp` int(11) NOT NULL,
  `idar` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`idp`,`idar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";


$a[]="CREATE TABLE IF NOT EXISTS `fan_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `date_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1" ;



$a[]="CREATE TABLE IF NOT EXISTS `fan_words` (
  `kw` varchar(255) NOT NULL,
  `ee` varchar(255) NOT NULL,
  `en` varchar(255) NOT NULL,
  `ru` varchar(255) NOT NULL,
  PRIMARY KEY (`kw`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";



$a[]="INSERT INTO `fan_words` (`kw`, `ee`, `en`, `ru`) VALUES
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
('user', 'Kasutaja', 'User', 'Имя пользов.')";
$sel="SHOW TABLES";
$a[]="DROP TABLE fan_users";



$a[]="CREATE TABLE IF NOT EXISTS `fan_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
   `nick` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `date_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1" ;
*/
$a[]="DELETE FROM fan_words";
$a[]="INSERT INTO `fan_words` (`kw`, `ee`, `en`, `ru`) VALUES
('about', 'Mängust', 'About', 'О игре'),
('allhero', 'K&otilde;ik kangelased', 'All heroes', 'Все герои'),
('creahero', 'Moodusta kangelast', 'Create hero', 'Создать героя'),
('email', 'E-post', 'E-mail', 'Эл. почта'),
('heroes', 'Kangelased', 'Heroes', 'Герои'),
('loginok', 'Autentifikatsioon on &otilde;nnelik', 'Login is OK', 'Вы вошли в игру'),
('nick', 'Kasutaja', 'Nickname', 'Пользователь'),
('nickname', 'Kasutaja nimi', 'Nickname', 'Имя пользов.'),
('pass', 'Pass', 'Password', 'Пароль'),
('reg', 'Registratsioon', 'Registration', 'Регистрация'),
('regok', 'Registratsioon on &otilde;nnelik', 'Registration complete', 'Регистрация удалась'),
('repeat_pass', 'Pass veel kord', 'Repeat Password', 'Пароль ещё раз'),
('user', 'Kasutaja', 'User', 'Имя пользов.') ";
//************************************************************//

foreach($a as $sel ){ echo "sel - $sel-<br>";
$res=mysql_query($sel, $link) or die($sel);
}
/*

echo "n=".mysql_num_rows($res);
while($b=mysql_fetch_row($res)){
	foreach($b as $s ){ echo "$s ; ";
		echo "<br>";
}*/
?>