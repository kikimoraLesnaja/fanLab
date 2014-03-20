<?
session_start();
if(!isset($_SESSION['sid']) || !isset($_SESSION['snick']) ){
	header("Location:../index.php");
	exit();
	}

if(isset($_SESSION['sowner']) || isset($owner)){
	header("Location:../index.php?page=game");
	exit();
	}

include('../configurator.php');


$owner=new Bomber(1000, 0,0  );
//echo $b1->getView();

$owner->setPlayerId($_SESSION['sid']);
$owner->setPlayerNick($_SESSION['snick']);
$owner->visiter=0;

$f=Field::generatorField($owner,  $_SESSION['snick']);
$idp=$f->idp;
$owner->setIdp($idp);
$_SESSION['sowner']=serialize($owner);
header("Location:../index.php?page=game&show=pole&idp=$idp");
//echo 'idp='.$f->idp . ', date='. $f->date_reg;
?>
