<?

class Event extends Record{

var $eventType;// STRING 

var $place;// INTEGER - id of place
var $fullAddress;// STRING 

var $protoYes;
var $protocol; // one object of Protocol's type
var $protoArray;// array of object of Protocol's type


function save($admin=0){
	global $db, $lang;
	
	$dt=array($this->date, $this->time);
	$d=dateTimeToStr($dt);
	
	$se="INSERT INTO events (name_$lang, date_reg,  $lang, idt, idpl) VALUES
	 ('".$this->name."', '$d', '".$this->text."', ".$this->type.", ".$this->place.")";
//echo "se-$se, idp=$idp";
	$db->query($se);
	
	if($this->protocol != null) {
		$nre=$db->insert_id();
		$this->protocol->owner=$nre;
		$this->protocol->save();
		}

	}

function update($admin=0){
 global $db, $lang;
 	
	$dt=array($this->date, $this->time);
	$d=dateTimeToStr($dt);
 
  $se="UPDATE events SET name_$lang='".$this->name."', date_reg='$d',  $lang='".$this->text."', 
  idt=".$this->type.", idpl=".$this->place." WHERE ide=".$this->id;
//echo $se;
$db->query($se);

 $sen="SELECT COUNT(idp) FROM protocols WHERE ide=".$this->id;
 $db->query($sen);
$ren=$db->ind_array();

$this->protocol->owner=$this->id;

	if($ren[0][0]==0) 
			$this->protocol->save();
		else $this->protocol->update();

	}


function getToId($ide, $admin=0){
	global $db, $lang;

if($this != null) $this->admin=$admin;
	
  $sqe="SELECT  date_reg, e.name_$lang as name, e.$lang as opis, (SELECT COUNT(idp) FROM protocols WHERE  ide=$ide) AS protoYes,  
  p.$lang as address, p.idtwn as tw, (SELECT $lang FROM towns WHERE idtwn=tw ) as town, t.$lang as type, e.idt as idt, e.idpl as idpl 
    FROM ".DB_PREFIX."events as e, 
  event_types as t, places as p  WHERE  e.idt=t.idt AND e.idpl=p.idpl AND e.ide=$ide";
 
// echo  $sqe;
 $db->query($sqe);
$rese=$db->assoc_array();

$eventText=convertFromBase($rese[0]['opis'], $admin);
$eventName=convertFromBase($rese[0]['name'], $admin);

$adt=strToDateTime($rese[0]['date_reg']);

$eventDate=$adt[0];
$eventTime=$adt[1];
$idt=$rese[0]['idt'];
//echo "idt-$idt";

//************************************  EVENT'S TYPE, AND PLASE  *********************************

//$eventType=$rese[0]['type'];
//$eventPlace=$rese[0]['address'].', '.$rese[0]['town'];

$e=new Event($ide, $lang, $eventName, $eventText, $idt, $eventDate, $eventTime);

$e->eventType=$rese[0]['type'];
$e->fullAddress=$rese[0]['address'].', '.$rese[0]['town'];
$e->place=$rese[0]['idpl'];

$e->protoYes=$rese[0]['protoYes'];
if( $e->protoYes ){
   $pro=Protocol::getToOwner($ide, $admin);
   $e->protocol=$pro;
	}

return $e;
	
}

//*************************************** GET TO YEAR ********************************************
function getToYear($year, $admin=0){
	global $db, $lang;
$eventsBody='';
if(!$admin) {
	$online='AND e.online=1 '; 
	$blank=" target='_blank' ";
}
else {
	$online='';
	$blank='';
}
$selBody="SELECT ide, e.date_reg, e.name_$lang as name, e.$lang as opis, t.$lang as tip, p.$lang as address, p.idtwn as tw, 
 (SELECT $lang FROM towns WHERE idtwn=tw ) as town , e.online  
FROM events as e, places as p, event_types as t WHERE e.idt=t.idt $online AND e.idpl=p.idpl  AND YEAR(date_reg)=$year ORDER BY date_reg DESC";
//echo $selBody;
$db->query($selBody);

$resb=$db->assoc_array();

for($i=0; $i<count($resb); $i++){
	$dateTime=strToDateTime($resb[$i]['date_reg']);
	$do=new MyTag('div', '', '', 'eventsRow1', '', '', implode(' ', $dateTime));
	$d=$do->getView(0);
	$eventsBody.=$d;
	
 $co="<a href='view/oneEvent.php?ide=".$resb[$i]['ide']."&lang=$lang' $blank>".$resb[$i]["name"].'</a>';
 
	$no=new MyTag('div', '', '', 'eventsRow2', '', '', $co);
	$eventsBody.=$no->getView(0);

	$to=new MyTag('div', '', '', 'eventsRow3', '', '', $resb[$i]["tip"]);
	$eventsBody.=$to->getView(0);

	$po=new MyTag('div', '', '', 'eventsRow4', '', '', $resb[$i]["address"].', '. $resb[$i]["town"]);
	$eventsBody.=$po->getView(0);
	//$ayLinks[]="index.php?page=events&lang=$lang&year=".$res[$i][0];
	 if($admin){
		$online=$resb[$i]["online"];
		$no=new MyTag('div', 'onlineEvent'.$resb[$i]['ide']."_$year"."_$online", '', 'eventsRow5', '', '', $online);
		$eventsBody.=$no->getView(0);
		
		$de=new MyTag('div', 'delEvent'.$resb[$i]['ide']."_$year", '', 'eventsRow6', '', '', 'X');
		$eventsBody.=$de->getView(0);
		}

	}

if($admin) $eventsBody.="<script>
$('.eventsRow6').click(delEvent);
	
	$('.eventsRow5').click(onlineEvent);
</script>
";
  return $eventsBody;
	}

function typeSelect(){
global $db, $lang;
$selTag=new MySelect('select', '', 'idtF');

$selt="SELECT idt, $lang FROM ".DB_PREFIX."event_types ORDER BY $lang";
$db->query($selt);
$rest=$db->ind_array();

//$types[0]='------';
//$typeNrs[0]=0;

for($i=0; $i<count($rest); $i++){
	$types[]=$rest[$i][1];
	$typeNrs[]=$rest[$i][0];
	}

if($this != null) $type=$this->type;

$select=$selTag->addOps($types, $typeNrs, $type);
$select=$selTag->getView();
return $select;
}

function placeSelect(){
global $db, $lang;
$selTag=new MySelect('select', '', 'idplF');

$selt="SELECT idpl, $lang as address, idtwn as t, (SELECT $lang FROM towns WHERE idtwn=t) as town FROM ".DB_PREFIX."places ORDER BY idpl";
$db->query($selt);
$rest=$db->ind_array();

//$types[0]='------';
//$typeNrs[0]=0;

for($i=0; $i<count($rest); $i++){
	$places[]=$rest[$i][1].', '.$rest[$i][3];
	$placeNrs[]=$rest[$i][0];
	}

///echo "fron event idpl=".$this->place;
if($this != null) $place=$this->place;

$select=$selTag->addOps($places, $placeNrs, $place);
$select=$selTag->getView();
return $select;
}


function makeView(){

	}
}