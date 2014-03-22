<div id ="menu">
	<script type="text/javascript" src="../../js/fblogin.js"></script>
	<div id="menuLeft">
		<a href="?page=about&lang=<? echo $lang ?>"><?  echo $about ?></a>&nbsp;&nbsp;&nbsp;
		<a href="?page=reg&lang=<? echo $lang ?>"><?  echo $reg ?></a>
	</div>
	<div id="menuRight"><?  echo $user ?> 
		<input type="text" class="klient">&nbsp;&nbsp;<?  echo $pass ?> 
		<input type="password" class="klient"> <input type="button" value="Go" id="go">
		<div class="fb-login-button" data-max-rows="1" data-size="small" data-show-faces="false" data-auto-logout-link="true"></div>
	</div>
        <div class="bu"></div>
</div>