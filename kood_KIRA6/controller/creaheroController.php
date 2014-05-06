<?
include('controller/heroPropController.php');

$heroTypeLife=tr('hero_type_life');
$heroName=tr('hero_name');
$heroArmPower=tr('hero_arm_power');
$heroAvatar=tr('hero_avatar');


$sel="SELECT idh, $lang,  life FROM ".DB_PREFIX."heroes";

$db->query($sel);
$res=$db->ind_array();
//echo "res" . count($res);

$heroTypes='';
	for($i=0; $i<count($res); $i++){
		$radio=new MyRadio('input', 'ht'.$res[$i][0], 'heroType', 'heroType');
		if($i==0) $ch=1; else $ch=null;
		$label="<span id='htlab". $res[$i][0]."'>" . $res[$i][1].' ('. $res[$i][2] . ')' .'</span>';
		$radio->addValue($label , $res[$i][0]);
		$heroTypes.='<div class="heroTypeCont">'.$radio->getRadio().'</div>';
		
}


