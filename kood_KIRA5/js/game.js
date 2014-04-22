//var creaIdh=0, creaImg='', creaLife=0, creaArm=0, creaArmDet='', creaSex=0, creaName='';
var lang='ee';
var curRow=0, curCol=0;
var  creaLife=0;

$(document).ready(function() {
	
	$('.sand').bind('click', stepControl);
	$('.water').bind('click', stepControl);
	$('.wood').bind('click', stepControl);
	$('.stone').bind('click', stepControl );	
	$('.grass').bind('click', stepControl );
	
	$('.avatar').bind('click', stepControl );
	curLife=$('#curHealth').attr('width')/2;
	
	//alert(curLife);
});


var stepControl=function(event){

var id=$(this).attr('id');

var a=id.substr(2).split("_");
var row=eval(a[0]);
var col=eval(a[1]);

//alert(row + ' , '+col);
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
	
}
