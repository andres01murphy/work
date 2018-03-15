
var mybuttonJSON = document.getElementById('loadbuttonJSON');
mybuttonJSON.onclick = function(){
    var request;
if (window.XMLHttpRequest) {
	request = new XMLHttpRequest();
} else {
	request = new ActiveXObject("Microsoft.XMLHTTP");
}
request.open('GET', 'alumnos.json');
request.onreadystatechange = function() {
	if ((request.readyState===4) && (request.status===200)) {
		var items = JSON.parse(request.responseText);
        console.log(request.responseText);


        var output = '<table  border="1" class="table">';
       output +=     "<thead>";
            output +=         "<tr>";
            output +=             "<th>Nombre</th>";
            output +=             "<th>calle</th>";
            output +=         "</tr>";
            output +=     "</thead>";

		for (var key in items) {
			output += "<tr>";
            output += '<td>' + items[key].nombre + '</td>';

            output += '<td>' + items[key].calle + '</td>';
         output += "</tr>";
		}

		output += '</table>';
        console.log(output);
		document.getElementById('updateJSON').innerHTML = output;
	}
}
request.send();
}
