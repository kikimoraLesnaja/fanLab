for (var i=0; i<15; i++)
{
	var row = document.createElement('div');
	row.id = i;
	row.className = 'gameFieldRow';
	for (var j=0; j<15; j++)
	{
		var square = document.createElement('div');
		square.id = i + ", j";
		square.className = 'gameFieldSquare';
		var image = document.createElement("img");
		image.src = '../view/img/sand.png';
		square.appendChild(image);
		row.appendChild(square);
	}
	document.getElementById('field').appendChild(row);
}