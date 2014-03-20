<?
//include('../conf.php');
/*
$years=tr('years');
$date=$word[$lang]['date'];
$naming=$word[$lang]['naming'];
$kind=$word[$lang]['kind'];
$place=$word[$lang]['place'];*/
$protocol='';

$sqe="SELECT  date_reg, e.name_$lang as name, e.$lang as opis, (SELECT COUNT(idp) FROM protocols WHERE online=1 AND ide=$ide) AS protocolYes,  
  p.$lang as address, p.idtwn as tw, (SELECT $lang FROM towns WHERE idtwn=tw ) as town, t.$lang as type    FROM ".DB_PREFIX."events as e, event_types as t, places as p 
 WHERE  e.idt=t.idt AND e.idpl=p.idpl AND e.ide=$ide";
$db->query($sqe);
$rese=$db->assoc_array();


$eventText=convertP($rese[0]['opis']);
$eventName=convertP($rese[0]['name']);
$eventDate=$rese[0]['date_reg'];
$protocolYes=$rese[0]['protocolYes'];

//******************************  PEVENT'S TYPE, AND PLASE  ********************************

$eventType=$rese[0]['type'];
$eventPlace=$rese[0]['address'].', '.$rese[0]['town'];

$protocolYes=$rese[0]['protocolYes'];


//******************************  PROTOCOL'S NAME, DATA AND TEXT  ********************************
if($protocolYes)showProtocol($ide);

function showProtocol($ide){
global $protoText, $protoName, $protoDate, $db, $lang, $protocol;
$sqy="SELECT idp, p.date_reg, p.name_$lang as name, p.$lang as opis
 FROM ".DB_PREFIX."protocols AS p WHERE  p.ide=$ide ORDER BY p.date_reg";
$db->query($sqy);
$res=$db->assoc_array();

$protoNumber=$res[0]['idp'];

$protoText=convert($res[0]['opis']);
$protoName=convert($res[0]['name']);
$protoDate=$res[0]['date_reg'];
$protocol=tr('protocol');

}

function convert($cont){
$cont=str_replace("«", "&lt;&lt;", htmlspecialchars($cont));
$cont=str_replace("»", "&gt;&gt;", $cont);
$cont=str_replace("\n", "<br>", $cont);
return $cont;
}