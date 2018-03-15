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
      <li class="active"><a href="#">Home</a></li>
        <li class="active"><a href="#">Favoritos</a></li>

    </ul>

  </div>
</nav>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Album example for Bootstrap</title>

    <script type="text/javascript">

        $(document).ready(function()
        {
            // Dar el foco al recuadro del código
            $("#codigo").focus();
            // -----------------------------
            // Al hacer clic en el botón para buscar
            $("#cargar").click(function()
            {
                // Enviar la petición mediante POST
                 $.ajax({
                         async: true,
                         type: "POST",
                         dataType: "json",
                         contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                         url: "json1.php",
                         beforeSend: antesEnvio,
                         success: mostrarDatos,
                         timeout: 4000,
                         error: errorEnvio
                 });
                return false;
            });
        });
        // -----------------------------
        // Antes de enviar los datos
         function antesEnvio() {
            $("#log").text("Se procesa la función 'antesEnvio()' antes de enviarse los datos...");
        }
        // -----------------------------
        // En caso de error
         function errorEnvio() {
            $("#log").text("Ha ocurrido un error!");
        }
        // -----------------------------
        // Carga los datos recibidos en los cuadros de texto
         function mostrarDatos( aDatos )
        {
            var html;
            html = "<p>Se encontraron [" + aDatos.length + "] registro(s)</p>";
            html += "<table border='1'>";
            html +=     "<thead>";
            html +=         "<tr>";
            html +=             "<th>Nombre</th>";
            html +=             "<th>Calle 1º</th>";

            html +=         "</tr>";
            html +=     "</thead>";
            for( var contador=0; contador < aDatos.length; contador++ )
            {
                html += "<tr>";
                html += "<td>" + aDatos[contador].nombre    + "</td>";
                html += "<td>" + aDatos[contador].calle + "</td>";

                html += "</tr>";
            }
            html += "</table>";
            $("#resultado").html( html );
        }
    </script>
  </head>
  <body>
        <section class="jumbotron text-center">
        <div class="container">
            <img class="logo" width="250" height="auto" SRC="https://cdn3.iconfinder.com/data/icons/hotel-services-facilities/256/Parking-256.png">
          <h1 class="jumbotron-heading">Busca parking en Madrid</h1>


        </div>
    <div id="log"> </div>
    <input type="button" name="cargar" id="cargar" value="Cargar datos" />
    <div id="resultado"> </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
      <script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

  </body>
</html>
