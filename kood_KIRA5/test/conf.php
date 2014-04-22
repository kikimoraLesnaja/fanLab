<?
session_start();

// error_reporting(E_ALL);
// ini_set("display_errors", 1); 
 
if(isset($_GET['screenWidth'])){
		
		$screenWidth=$_GET['screenWidth'];
	
		}
	
	else {
	if(isset($_SESSION['saveWidth'])  )
			$screenWidth=$_SESSION['saveWidth'];
		else
			$screenWidth=750;
		}
	
			
$_SESSION['saveWidth']=$screenWidth;

//echo session_encode();

//***********  CONSTANTS DEFINITION *******************//

define(DB_PREFIX, 'fan_');

define(MY_ROOT,	'');

//define(MY_ROOT,	'/home/localhost/www/vr');
//echo "db prefix=".DB_PREFIX;


//****************  LIBRARY & CLASSES *******************//

include (MY_ROOT.'model/fun.php');

include (MY_ROOT.'classes/Db.php'); 

include (MY_ROOT.'classes/DbMS.php');

include (MY_ROOT.'classes/MyTag.class.php'); 

include (MY_ROOT.'classes/MyList.class.php'); 

include (MY_ROOT.'classes/MySelect.class.php'); 

//include (MY_ROOT.'/Classes/Thing.class.php'); 


//*********************  GET STRING ******************//

if(isset($_GET['lang'])) $lang=$_GET['lang'];

  else $lang='ee';

 
	if(isset($_GET['page'])) 	$page=$_GET['page']; else $page="about";

	if(isset($_GET['clientName'])) $clientName=$_GET['clientName'];  else $clientName='';
	if(isset($_GET['clientPass'])) $clientPass=$_GET['clientPass'];  else $clientPass='';

//*********************  POST STRING ******************//

if(isset($_POST['nickname'])) $nickname=$_POST['nickname'];   else $nickname='';
  
  if(isset($_POST['email'])) $e_mail=$_POST['email'];   else $e_mail='';
  
    if(isset($_POST['pass1'])) $email=$_POST['pass1'];   else $pass1='';
	  if(isset($_POST['pass2'])) $email=$_POST['pass2'];   else $pass2='';



//*************************  MODEL (DATA SOURCE )  ************************//

//  DATA BASE PARAMETERS
/*
$dbHost='';
$dbUser='';
$dbPass='';
*/

$dataSource='MYSQL';

$dbHost='localhost';

$dbUser='root';

$dbPass='';

$dbName='kira77_fanlab';


switch($dataSource){
// Data base object creation
case 'MYSQL': $db=new Db($dbHost,$dbUser,$dbPass,$dbName);break;
case 'MSSQL': $db=new DbMS($dbHost,$dbUser,$dbPass,$dbName);break;
case 'FILE': break;
default: $db=new Db($dbHost,$dbUser,$dbPass,$dbName);break;

}
//**************** ERRORS ARRAY for registration & login****************//

$errors[0]='not error';//1

$errors[1]='no data';//2

$errors[2]='wrong data length';//4

$errors[3]='passwords not equal';//8

$errors[4]='wrong password format';//16

$errors[5]='wrong email format';//32

$errors[6]='nick format invalid';//64

$errors[7]='nick allredy exists';//128

$errors[8]='mail allredy exists';//256

// for LOGIN

$errors[9]='Nick name not found';

$errors[10]='Password id wrong';


function getErrorString($noBr=1){
global $error, $errors;

$s="";
$d="".decbin($error);
$d--;
//echo " d=$d ".strlen($d);

for($i=1; $i<strlen($d); $i++){
		$n=substr($d, strlen($d)-$i-1, 1);
		//echo "n= $n,  ";
		if($n==1){
			$s.=$errors[$i];
			if($noBr) $s.= '<br>';
			}
	}
	
return $s;
}


  //************************ CONTROLLERS **********************

$kk=MY_ROOT.'controller/commonController.php';

//  echo "k- $kk";

  include($kk);

  $kkk=MY_ROOT.'controller/'.$page.'Controller.php';

//  echo "k- $kk";

  include($kkk);

  include (MY_ROOT.'controller/menuController.php'); 


?>


