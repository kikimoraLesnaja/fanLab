var heroSex = document.querySelector('input[name = "heroSex"]:checked').value;
		var heroType = document.querySelector('input[name = "heroType"]:checked').value;
		var heroAvatar = document.querySelector('input[name = "heroAvatar"]:checked').value;
		var heroName = "Captain Placeholder";
		function makeInvisible(id) {
       			var e = document.getElementById(id);
          		e.style.display = 'none';
    		}
		function makeVisible(id) {
       			var e = document.getElementById(id);
          		e.style.display = 'block';
    		}
		function buttonClicked()
		{
			heroName = document.getElementById('heroname').value;
			if (heroName == "") {
				alert("Please enter name!");
				return;
			}
			heroSex = document.querySelector('input[name = "heroSex"]:checked').value;
			document.getElementById("avatar1").src = "../img/heroes/"+ heroSex + "/1.png";
			document.getElementById("avatar2").src = "../img/heroes/"+ heroSex + "/2.png";
			makeInvisible("gender");
			makeVisible("type");
		}
		function button2Clicked()
		{
			heroType = document.querySelector('input[name = "heroType"]:checked').value;
			heroAvatar = document.querySelector('input[name = "heroAvatar"]:checked').value;
			document.getElementById("weapontext").innerHTML = "Pick a weapon for your "+heroType+ ":";
			makeInvisible("type");
			makeVisible("weapon");
		}
		function button3Clicked()
		{
			makeInvisible("weapon");
			var imgsrc = "../img/heroes/"+ heroSex +"/" + heroAvatar +".png";
			document.getElementById("congrats").innerHTML = "<img src = " + imgsrc + "><br>Congratulations! You created " + heroName + " the " + heroSex + " " + heroType + "!";
			makeVisible("done");
		}