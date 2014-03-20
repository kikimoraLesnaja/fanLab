<?
include('../conf.php');
/*
$years=tr('years');
$date=$word[$lang]['date'];
$naming=$word[$lang]['naming'];
$kind=$word[$lang]['kind'];
$place=$word[$lang]['place'];*/

//******************************  PROTOCOL'S NAME, DATA AND TEXT  ********************************


$sqy="SELECT idp, date_reg, name_$lang as name, $lang as opis FROM ".DB_PREFIX."protocols WHERE online=1 AND ide=$ide ORDER BY date_reg";
$db->query($sqy);
$res=$db->assoc_array();

$protoText=convert($res[0]['opis']);
$protoName=convert($res[0]['name']);
$protoDate=$res[0]['date_reg'];

function convert($cont){
$cont=str_replace("«", "&lt;&lt;", htmlspecialchars($cont));
$cont=str_replace("»", "&gt;&gt;", $cont);
$cont=str_replace("\n", "<br>", $cont);
return $cont;
}