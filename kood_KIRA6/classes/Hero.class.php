<?
class Hero{

var $idh;
var $idp;
var $name;
var $health;
var $avatar;	// Avatar img
var $ida; 		// Arm number
var $power; 	// Arm rest power

var $atributes; //Array of objects
var $field;
var $row;
var $col;// Hero's position - row & column

function __construct($idp){		
		$this->idp=$idp;
		$this->makeField();
}	

function makeField(){
global $db;
$sel="SELECT idh, name, health,  avatar, ida,  field, power  FROM ".DB_PREFIX."persons WHERE idp=".$this->idp;

$db->query($sel);
$res=$db->assoc_array();
$this->name=$res[0]['name'];
$this->avatar=$res[0]['avatar'];

$this->ida=$res[0]['ida'];
$this->idh=$res[0]['idh'];
$this->health=$res[0]['health'];
$this->power=$res[0]['power'];
$this->row=0;
$this->col=0;

$fieldStr=$res[0]['field'];

//echo "name : *".$this->name ;
//echo "fieldStr $fieldStr ";

$a=unserialArray($fieldStr);

$this->field='';
$fi=array('sand', 'grass', 'wood', 'water', 'stone');
$fi[1001]='wolf';
$fi[1002]='witch';
$fi[1003]='dragon';

for($i=0; $i<count($a); $i++){
	for($k=0; $k<count($a[0]); $k++){
			$z=$a[$i][$k];
			//if($z<1000){
				$c=$fi[$z];
				
				//echo " $c, ";
				$d=new MyTag('div', 'gf'.$i.'_'.$k, '', $c);//($tagName, $id='', $name='', $class=''
				if($i==$this->row && $k==$this->col){
				$img=new MyTag('img', 'gf'.$i.'_'.$k, '', 'avatar', '', $this->avatar);	
				$d->addContent($img->view);
				}
				
					//echo $s;
				/*	}
					else{
					$d=new MyTag('img', 'gf'.$i.'_'.$k, '', 'avatar', '', $this->avatar);
					
					}*/
				$s=$d->getView(0);
				
				$this->field.=$s;
			}
		}

	}
	


}


