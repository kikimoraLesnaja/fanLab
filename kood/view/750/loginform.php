<form action="" method="post"><span class="errorS"><? echo $errorLogin ?></span > &nbsp; 
	<?  echo $user ?> <input type="text" class="klient" name="clientName" value="<? echo $clientName ?>">&nbsp;&nbsp;&nbsp;<?  echo $pass ?> 
	
    <input type="password" class="klient" name="clientPass">&nbsp;&nbsp;&nbsp;
	 <input type="hidden"  name="lang" value="<? echo $lang ?>">
	<input type="submit" value="Go" name="loginButton">
	<div class="fb-login-button" data-max-rows="1" data-size="small" data-show-faces="false" data-auto-logout-link="false" style="float: right"></div>
	</form>