<html lang="en">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

       <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/miclase.css" >
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
    <link rel="icon" href="../../../../favicon.ico">
    <nav class="navbar navbar-inverse testnav" style="margin-top:16px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">Fine Parking</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="iniciouser.html">Home</a></li>


    </ul>

  </div>
</nav>
     <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fine Parking</title>

  </head>
  <body>
        <section class="jumbotron text-center">
        <div class="container">
            <img class="logo" width="250" height="auto" SRC="https://cdn3.iconfinder.com/data/icons/hotel-services-facilities/256/Parking-256.png">
          <h1 class="jumbotron-heading">Busca parking en Madrid</h1>


            </div></section>
       <script type="text/javascript">
    $(document).ready(function(){
    var request;
if (window.XMLHttpRequest) {
	request = new XMLHttpRequest();
} else {
	request = new ActiveXObject("Microsoft.XMLHTTP");
}
request.open('GET', 'usuario.json');
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
})
      </script>

<div id="updateJSON"></div>
<script src="script_alumnos.js"></script>
      <script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>


  </body>
</html>
