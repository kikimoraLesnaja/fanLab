<?
if(isset($_GET['screenWidth'])){
		
		$screenWidth=$_GET['screenWidth'];
	
		}
	
	else {
	if(isset($_SESSION['saveWidth'])  )
			$screenWidth=$_SESSION['saveWidth'];
		else
			$screenWidth=750;
		}

if($screenWidth == '320'){
	header('Location: view/320/index.php');
}else if ($screenWidth == '1350'){
    	header('Location: view/1350/index.php');
}
else {
	header('Location: view/750/index.php') ;
}

?>