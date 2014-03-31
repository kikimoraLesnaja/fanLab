<div id ="menu">
	<div id="menuLeft">

<a href="?page=about&lang=<? echo $lang ?>"><?  echo $about ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="?page=reg&lang=<? echo $lang ?>"><?  echo $reg ?></a>
	</div>
	<div id="menuRight">
	
	<?
		if(isset($_SESSION['sid']) && isset($_SESSION['snick']))
			include("author.php");//$screenWidth/
			else include("loginform.php");
	
	?>
	</div>
     <div class="bu"></div>
</div>