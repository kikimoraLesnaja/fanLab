<?php 
class Bomber extends Thing{
var $playerId;// gamer's ID in Date Base
var $playerNick;// users nickname
var $infoView;// view for gamer's Info Panel
var $bombs;// array of objects of Bomb class type !!! change
var $visiter;// 0-> owner, 1,2,3->visiter
var $idp;// field id from base



	function __construct($id, $y=0, $x=0, $w=50, $h=50, $disp=true, $amount=100, $b=2){
		Thing::__construct($id, $y, $x, $w, $h, $disp, $amount);
		$this->bombs=$b;
		$this->makeView();
		$this->makeInfoView();
	}
	
	function setPlayerId($i){
		//echo "i=$i";
		$this->playerId=$i;
	}
	function setPlayerNick($n){
		//echo "i=$i";
		$this->playerNick=$n;
	}
	function setIdp($i){
		//echo "i=$i";
		$this->idp=$i;
	}

	function addBombs($b){
 		if($this->bombs==null) $this->bombs=0;
		$this->bombs+=$b;
	}

	function makeInfoView(){
		//$this->tagId=$this->name. '_' .$this->y . '_' . $this->x;
		//echo "1";
		$iv=new MyTag('div', 'player'.$this->playerId, '', $this->name);
		$this->infoView=$iv->view;

		$n=new MyTag('div', 'playerNick'.$this->playerId, '', 'nickname', '', '', $this->playerNick);
		$this->infoView.=$n->view;

		$l=new MyTag('div', 'live'.$this->ownerId, '', 'live', '', '', $this->amount);
		$this->infoView.=$l->view;

		$b=new MyTag('div', 'bombs'.$this->ownerId, '', 'bombs', '', '', $this->bombs);
		$this->infoView.=$b->view;
//<div id="live3" class='live'>l</div>
//				<div id="bombs3" class='bombs'>b</div>
	}

function showInfo(){
		if($this->infoView!=null)
			echo $this->infoView;
	}
function getInfoView(){
//echo ", 2";
		$this->makeInfoView();
		return $this->infoView;	   

	}

}


?>
