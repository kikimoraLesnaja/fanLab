<?
session_start();
include('../configurator.php');
$sel="UPDATE ".DB_PREFIX."_users SET online=0 WHERE id=".$_SESSION['sid'];
$db->query($sel);

$sel2="UPDATE ".DB_PREFIX."_pole SET date_end=NOW() WHERE id0=".$_SESSION['sid'];
$db->query($sel2);

session_unset();
session_destroy();
header("Location:../index.php");
?>