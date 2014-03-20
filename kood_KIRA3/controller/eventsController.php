<?
$years=tr('years');
$date=tr('date');
$naming=tr('naming');
$kind=tr('kind');
$place=tr('place');

//******************************  ALL YEARS  ********************************
$sqy="SELECT DISTINCT YEAR(date_reg) FROM ".DB_PREFIX."events WHERE online=1 ORDER BY date_reg DESC";
$db->query($sqy);
$res=$db->ind_array();

for($i=0; $i<count($res); $i++){
	$ay[]=$res[$i][0];
	$ayLinks[]="?page=events&lang=$lang&year=".$res[$i][0];
	}

$ul=new MyList('ul', 'yearUl');
$ul->addLis($ay, $ayLinks);
//echo $allYears;
$allYears=$ul->getView();


//******************************  CURRENT YEAR  ********************************
if($year=='')
$currentYear=tr('all years');
else $currentYear=$year;
//implode('<br>', $ay);

//******************************* TABLE BODY **************************
$eventsBody=Event::getToYear($year);
?>
