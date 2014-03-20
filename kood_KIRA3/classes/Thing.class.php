<?php 
class Thing{

var $id;  // Number type of object - index in pics array
var $name;//"Name" of object - also it is name of picture for displaying and css class name


var $x;// column's index in fields array 
var $y;// row's index in fields array 
var $w;//width
var $h;//height

var $tagId;
var $display; //if true - object displays , if false - not displays

var $amount;// for Bombers this is live!
var $view;// object of MyTag type 

	function __construct($id, $y=0, $x=0, $w=50, $h=50, $disp=true, $amount=0){
		global $pics;
		//echo "id - $id";
    
		$this->id=$id;
		$this->name=$pics[$id];
		$this->amount=$amount;

		$this->x=$x;
		$this->y=$y;
		$this->w=$w;
		$this->h=$h;
              
		$this->display=$disp;

		//$this->makeView();
	}
	function makeView(){
		$this->tagId=$this->name. '_' .$this->y . '_' . $this->x;
		$t=new MyTag('div', $this->tagId, '', $this->name);
		$this->view=$t->view;
		
		}
	function show(){
		if($this->view!=null)
			echo $this->view;
	}
	function getView(){
		$this->makeView();
		return $this->view;	   

	}
	function addAmount($a){
 		if($this->amount==null) $this->amount=0;
		$this->amount+=$a;
	}
}


?>
