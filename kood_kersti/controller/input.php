<?
include ('../configurator.php');


$error=1;
controlData();
controlNickEmail($_GET['user'], $_GET['email']);

if($error!=1){
header("Location:../index.php?page=register&error=$error");
exit();
}
else{

addToBase($_GET['user'], $_GET['email'], $_GET['pass1']);
header("Location:../index.php?page=gotovo");
}



function controlNickEmail($nick, $email){
global $db, $error;
$n=0; $e=0;
$sel="SELECT nick, email FROM ".DB_PREFIX."_users WHERE nick='$nick' OR email='$email'";
$res = $db->ind_array($db->query($sel));
if($db->num_rows()==0)
	return;

foreach($res as $v){
	if($n==0 && $v[0]==$_GET['user'])
		$n=1;
	if($e==0 && $v[1]==$_GET['email'])
		$e=1;
}
	if($n==1) $error+=128;
	if($e==1) $error+=256;
}

function addToBase($nick, $email, $pass){
global $db;
//echo "INSERT INTO my_users (date_reg, nick, email, pass, name, lastname, kredit, ammo) VALUES ('10-10-1010','".$_GET['user']."', '".$_GET['email']."''".$_GET['pass1']."','ewert','re',20,20) ";
$sel="INSERT INTO ".DB_PREFIX."_users (date_reg, nick, email, pass,  kredit, ammo) VALUES (now(),'".$_GET['user']."', '".$_GET['email']."','".$_GET['pass1']."',20,1) ";
$db->query($sel);
}

function controlData(){
	global $error;
if(isset($_GET['user']))
	$user=trim($_GET['user']);//6-50
if(isset($_GET['email']))
	$email=trim($_GET['email']);
if(isset($_GET['pass1']))
	$pass1=trim($_GET['pass1']);
if(isset($_GET['pass2']))
	$pass2=trim($_GET['pass2']);
if(empty($user)||empty($email)||empty($pass1)||empty($pass2)){
	$error+=2;
	}
if(strlen($user)>50||strlen($user)<6||strlen($email)<8||strlen($pass1)>20||strlen($pass1)<6||strlen($pass2)>20||strlen($pass2)<6){
	$error+=4;
	
	//echo 'length doesent match<br>';
}
if($pass1!=$pass2){
	$error+=8;
	//echo 'not equal passes<br>';
}
if(preg_match("/^[a-z0-9_-]*$/i", $pass)==false){
	$error+=16;
	//echo ' wrong pass format<br>';
}
if(preg_match('|^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is', $email)==false){
	$error+=32;
	//	echo ' email not valid<br>';
	}
if(preg_match("/^[a-z0-9_-]*$/i", $user)==false){
	$error+=64;
	//	echo 'login not valid<br>';
	}
	//echo $error;
	//return $error;
}

