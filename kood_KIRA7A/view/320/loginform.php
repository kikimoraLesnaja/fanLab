
	<form action="" method="post" id="login"> 
	<DIV class="errorLOG" ><?  echo $errorString ?></div>
	<DIV class="regLabel"><?  echo $user ?> </DIV>
		
		<DIV class="regLabel"> <input type="text" class="klient" name="clientName" value="<? echo $clientName ?>"></DIV>
		
		<DIV class="regLabel">	<?  echo $pass ?> </DIV>
		
		<DIV class="regLabel"><input type="password" class="klient" name="clientPass"></DIV>
		
		 <input type="hidden"  name="lang" value="<? echo $lang ?>">
		<input type="submit" value="Go" name="loginButton"></DIV>
		
		</form>
		
		<div style="height:10px"></div>