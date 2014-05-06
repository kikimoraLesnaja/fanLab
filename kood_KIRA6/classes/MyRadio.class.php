<?php 

class MyRadio extends MyTag{
var $value;var $label;
var $checked;
function addValue($lab, $val=null, $ch=null){$this->label=$lab;
	$this->value=$val;	$this->checked=$ch;	
		$t=$this->view;	$pos=strpos($t, '>');	//echo " $pos, ";	$t=substr($t, 0, $pos);		$t.=" type='radio' ";			if($val!=null)   $t.=" value='$val'";			if($this->checked!=null)   $t.=' checked';		$t.='>';	//echo "t - $t, ";	$t.=" $lab ";		$this->view=$t;
	
	}		function getRadio($make=1){				return $this->view;	   	}
}

?>
