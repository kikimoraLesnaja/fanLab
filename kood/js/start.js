
var height=0;var width=750;
	if (self.screen) {
	width = screen.width;
	height = screen.height;
	}
///////alert("width="+width+", height="+height);

if(width >=1366) width=1350;
else{
if(width>320 && width <1366) width=750;
}
if(width <=320) width=320;


var ti=document.title;
var ar=ti.split(" ");
//alert("title="+ti+", eval= " + ar[0]  );
//+ eval(ti)
//alert("width 2="+width+", ar0= " + ar[0]  );

/////////////if(width != ar[0]) window.location='index.php?screenWidth='+width;


function chboxik(t){
//alert(t.checked)
if(t.checked) document.getElementById('passBox').style.display='block';
 else document.getElementById('passBox').style.display='none';
}