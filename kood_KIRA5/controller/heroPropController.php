<?
$name=tr('name');
$life=tr('life');
$arm=tr('arm');

$currHeroProp=tr('curr_hero_prop');

$heroAva= "view/img/heroes/0.png";
$armImg= "view/img/arms/0.png";

if($page=='game'){

	//echo "sidp=".$_SESSION['sidp'];
	$idp=$_SESSION['sidp'];

	$myHero=new Hero($idp);
	$currHeroName=$myHero->name;
	$heroAva= $myHero->avatar;
	$armImg="view/img/arms/".$myHero->idh.'_'.$myHero->ida.'.png';
	$he=$myHero->health*2;
	$currHealth="<img src='view/img/rose.png' width=$he height=24 id='curHealth'>";
	
	$po=$myHero->power*2;
	$currPow="<img src='view/img/rose.png' width=$po height=24>";
}