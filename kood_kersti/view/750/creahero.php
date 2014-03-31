<div id="field"> 
 <script src="../../js/createHero.js"></script>
 <form name = "createhero" action="#" method="post">
	<div id="createHero">
        <DIV style="width:720px; text-align:left; padding-left:5px;height:50px"><p>Welcome to Fantasy Quest, create your character here:</p>
	<div style="width:715px; text-align:center; padding-top:10px; height:600px; background-color:#F5E44A;">
	<div id="gender">
		<p>Name your hero:<p>
		<input type="text" name="heroName" id="heroname" style="width:200px;">
		<p>Choose your hero's gender:<p>
		<input type="radio" name="heroSex" value="Male" checked> Male &nbsp;&nbsp; 
         	<input type="radio" name="heroSex" value="Female"> Female
		<p><input type=button 
		value="Continue"
		onClick=buttonClicked()>
	</div>
	<div id="type"; style="display: none">
		<p>Choose a class:</p>
              	<p><input type="radio" name="heroType" value="Peasant" checked> Peasant
              	<p><input type="radio" name="heroType" value="Warrior"> Warrior
              	<p><input type="radio" name="heroType" value="Magician"> Magician
		<br><p>Choose an avatar:</p>
		<p><input type="radio" name="heroAvatar" value = "1" checked><img id ="avatar1" class="heroImg"  alt="avatar" ></p>
		<p><input type="radio" name="heroAvatar" value = "2"><img id ="avatar2" class="heroImg"  alt="avatar"></p>
		<p><input type=button 
		value="Continue"
		onClick=button2Clicked()>
       	</div>
	<div id="weapon"; style="display: none">
		<p id = "weapontext"></p>
              	<p><input type="radio" name="weapon" value = "sword" checked><img src="view/img/arms/Warrior/sword.png" class="heroImg"  alt="avatar"></p>
		<p><input type="radio" name="weapon" value = "axe"><img src="view/img/arms/Warrior/axe.png" class="heroImg"  alt="avatar" ></p>
		<p><input type=button 
		value="Continue"
		onClick=button3Clicked()>
       	</div>
	<div id="done"; style="display: none">
		<p id = "congrats"></p>
		<p><a href="index.php">Start playing!</a>
	</div>
	</div>
	</div>
        </DIV>
