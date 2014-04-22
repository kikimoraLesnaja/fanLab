//var creaIdh=0, creaImg='', creaLife=0, creaArm=0, creaArmDet='', creaSex=0, creaName='';
var lang='ee';
var curRow=0, curCol=0;
var  curLife=0;

$(document).ready(function() {
	
	$('.sand').bind('click', stepControl);
	$('.water').bind('click', stepControl);
	$('.wood').bind('click', stepControl);
	$('.stone').bind('click', stepControl );	
	$('.grass').bind('click', stepControl );
		curLife=$('#curHealth').attr('width')/2;
	$('.avatar').bind('click', stepControl );

	
	//alert(curLife);
});


var stepControl=function(event){

if(curLife==0){
	var img=$('#gf' + curRow+'_'+ curCol).html();
	var pos=img.indexOf(".");
	var img=img.substr(0, pos)+"_0"+ img.substr(pos);
		
	$('#gf' + curRow+'_'+ curCol).html(img);
 alert('Sorry but this Hero is dead :(');
 return;
}

var id=$(this).attr('id');

var a=id.substr(2).split("_");
var row=eval(a[0]);
var col=eval(a[1]);

//alert(row + ' , '+col);

if(curRow==row && curCol==col){
 
 return;
}

if(Math.abs(row-curRow)>1 || Math.abs(col-curCol)>1){
 alert('Wrong step!');
 return;
}
var nextClass=$('#gf' + row+'_'+col).attr('class');
//alert(nextClass);

var curClass=$('#gf' + curRow+'_'+ curCol).attr('class');
//alert(curClass);

if(nextClass=='stone'){
 alert("Can't walk thru rock !");
 return;
}

var img=$('#gf' + curRow+'_'+ curCol).html();
$('#gf' + row+'_'+col).html(img);
$('#gf' + curRow+'_'+ curCol).html('');
curRow=row;
curCol=col;
	switch(nextClass){
		case 'sand': curLife-=1; break;
		case 'grass': curLife-=2; break;
		case 'wood': curLife-=3; break;
		case 'water': curLife-=4; break;
	}

	$('#curHealth').attr('width', curLife*2);
	if(curLife<=0) {
		
		//alert(img);
		var pos=img.indexOf(".");
		var img=img.substr(0, pos)+"_0"+ img.substr(pos);
		
		$('#gf' + curRow+'_'+ curCol).html(img);
		alert('Game Over !');
			$.get('controller/saveHero.php', {'curLife':curLife}, function(data){
			
			alert('Data was saved');
			
		});	
		//window.location="?page=game&lang="+lang;
	}
	
	if(curRow==14 && curCol==14) {
		
		alert('Congratulation !');
			$.get('controller/saveHero.php', {'curLife':curLife}, function(data){
			
			alert('Data was saved');
			
		});	
		//window.location="?page=game&lang="+lang;
	}
}
