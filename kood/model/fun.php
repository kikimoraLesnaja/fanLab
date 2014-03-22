<?php

function tr($key, $case=0){

global $db, $lang, $dataSource;

if($dataSource=='FILE') return ftr($key, $case);

$sel="SELECT $lang FROM ".DB_PREFIX."words WHERE kw='$key'";

$db->query($sel);

$res=$db->ind_array();

$word=$res[0][0];

if($case==1) $word=strtoupper($word);

return $word;

}

function ftr($key, $case=0){

global  $lang;
$fp=fopen('model/words.txt', 'r');


$la=strtoupper($lang);
$a=fgetcsv($fp, 1000, '#');

for($i=0; $i<count($a); $i++){
	if($a[$i]==$la) {
				$langPos=$i;
				break;
			}
	}
	
while($a=fgetcsv($fp, 1000, '#')){
		for($i=0; $i<count($a); $i++){
			if($a[$i]==$key){
				return $a[$langPos];
			}
		}
	}
	return '...';
}

function convertToBase($cont, $admin=0){

$cont=htmlspecialchars($cont, ENT_QUOTES);

return $cont;

}



function convertFromBase($cont, $admin=0){

$cont=html_entity_decode($cont, ENT_QUOTES);

if(!$admin) $cont=str_replace("\n", "<br>", $cont);

return $cont;

}





function strToDateTime($s){


$aDate=explode(' ', $s);

$d=preg_replace("|\b(\d+)\-(\d+)\-(\d+)\b|", "\\3-\\2-\\1", $aDate[0]);

$out=array($d, $aDate[1]);



return $out;

}





function dateTimeToStr($a){



if(is_array($a)){

$a[0]=trim($a[0]);

$a[1]=trim($a[1]);

$a[0]=preg_replace("|\b(\d+)\-(\d+)\-(\d+)\b|", "\\3-\\2-\\1", $a[0]);

$out=implode(' ', $a);

}

else $out=preg_replace("|\b(\d+)\-(\d+)\-(\d+)\b|", "\\3-\\2-\\1", $a);



//echo "out - $out , ";



return $out;

}



function getImg($folder, $imgNr ){

$types=array('jpg', 'jpeg', 'png', 'gif', 'bmp');

foreach($types as $t){

 $src="$folder/$imgNr.$t";


 //echo "src- $src, ";

  if(file_exists($src)){
   

	if($imgNr==0) $al= "align='texttop' "; else $al='';
	

  	$img="<img src='$src' $al>";

	  return $img;

	}

  else $img='';

	}

	return '';



}



?>