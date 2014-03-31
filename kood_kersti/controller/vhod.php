<?
session_start();
include ('../configurator.php');

$error=1;

vhodControl($_GET['user'], $_GET['pass']);
//echo  "error - $error";
if($error!=1){
header("Location:../index.php?page=login&error=$error&user=".$_GET['user']);
//echo "error - $error";
exit();
}
else{

setOnline($_GET['user']);
header("Location:../index.php?page=loginok");
//exit();

}



function vhodControl($nick, $pass){
global $db, $error;
$nick=trim($nick);
$pass=trim($pass);
$sel="SELECT  pass, id FROM ". DB_PREFIX."_users WHERE nick='$nick' ";
//echo "sel -$sel";
$db->query($sel);
$res=$db->ind_array();
//echo "num=".$db->num_rows();
if($db->num_rows()==0){
	$error=512;
	return;
}
	
//echo "pass -" .$res[0][0];
if($pass != $res[0][0]) {
		$error=1024;
		return;
		}
	

$_SESSION['sid']=$res[0][1];
$_SESSION['snick']=$nick;

}

function setOnline($nick){
global $db;

$sel="UPDATE ". DB_PREFIX."_users SET online=1 WHERE nick='$nick'";
//echo "sel -$sel";
$db->query($sel);
}
?>