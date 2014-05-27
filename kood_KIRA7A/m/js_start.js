$(document).ready(function() {
	
	$('#raz').bind('click', stepControl);
	
	/**/
});

var stepControl=function(event){
	alert('aaaa');
/*	$.get('jas.php', {'id':10}, function(data){
			
			alert('Data was saved');
			$('#bot').html(data);
			//$.getJASON(data);
			//var obj = $.parseJSON(data);
			//var obj = jQuery.parseJSON('{"name":"John"}');
		//alert(obj.name);
			
		});	
		
		
		 $.getJSON('jas.php', {'id':10},dates());*/
		 $.getJSON( "jas.php", function( data ) {
			//alert(data);
					var items = [];
					$.each( data, function( key, val ) {
					alert( key + " - "+val);
					items.push( "<li id='" + key + "'>" + val + "</li>" );
					});
					/*$( "<ul/>", {
					"class": "my-new-list",
					html: items.join( "" )
					}).appendTo( "body" );*/
				});

}

function dates(datos)
{
alert('asas');
 $("#bot").html(datos.name +" ,,");
}