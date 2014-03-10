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
	
		
//$screenWidth=750;		
$_SESSION['saveWidth']=$screenWidth;

//echo session_encode();

?>


