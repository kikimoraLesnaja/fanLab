<div id="hero">
	<div id="heroProp">
    <img src="view/img/heroes/ez.png" id="heroImg" alt="avatar" >
    Current Hero's properties ... 
    
    </div>
	<div id="heroAllTop">
		<div class="heroAllDet"><a href="?page=allhero&lang=<? echo $lang ?>"><?  echo $allhero ?></a></div>
		<div class="heroAllDet"><a href="?page=creahero&lang=<? echo $lang ?>"><?  echo $creahero ?></a></div>
        <div class="bu">
        </div>
	
	</div>

</div>
<div id="field"><?  include("view/$screenWidth/$page.php"); ?></div>

</div>
</body>
</html>
