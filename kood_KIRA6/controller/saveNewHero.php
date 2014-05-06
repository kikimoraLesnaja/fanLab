<?
include('../config.php');

$ar=genArray(15,15,4);
$ar[0][0]=0;
$ar[14][14]=0;
//clearAngles($ar);
$en=array(1001, 1002,1003);
arrayModification($ar, $en, 5 );

$fi=serialArray($ar);

$sel="INSERT INTO ".DB_PREFIX. "persons 
	(id, idh, name, sex, avatar,  ida, health,  power, field) VALUES
 ( ".$_SESSION['sid'].",  $creaIdh, '$creaName', $creaSex, '$creaImg',  $creaArm, (SELECT life FROM ".DB_PREFIX. "heroes WHERE idh=$creaIdh) , 
 (SELECT power FROM ".DB_PREFIX. "arms WHERE ida=$creaArm), '$fi')";

$db->query($sel);

$_SESSION['sidp']=$db->insert_id();

//echo ".......... SIDP".$db->insert_id();;
//echo serialArray($res, '^');
