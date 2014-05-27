<?


$heroes=tr('heroes');
$allhero=tr('allhero');
$creahero=tr('creahero');

$heroAva= "view/img/heroes/0.png";
$armImg= "view/img/arms/0.png";


$new=tr('new');
$all=tr('all');
$sex=tr('sex');

$dt=getdate();
//echo  "hours - ". $dt['hours'];
if($dt['hours']>23 || $dt['hours']<6) $fonPic='night.jpg';
if($dt['hours']>=6 && $dt['hours']<9) $fonPic='sunup.jpg';
if($dt['hours']>=9 && $dt['hours']<=21) $fonPic='lug.jpg';
if($dt['hours']>21 && $dt['hours']<=23) $fonPic='sunset.jpg';

$fon="body{background-image:url('view/img/$fonPic');}";