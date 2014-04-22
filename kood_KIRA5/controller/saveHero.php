<?
include('../config.php');


$sel="UPDATE ".DB_PREFIX. "persons SET health=0, end_date=NOW() WHERE idp=".$_SESSION['sidp']; 
	

$db->query($sel);



//echo ".......... SIDP".$db->insert_id();;
//echo serialArray($res, '^');
