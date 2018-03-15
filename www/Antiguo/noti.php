<?php
include "noticia.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Pagina Inicial</title>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity=	"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

<div class="w3-container">
	<form method="POST" class="w3-container">
		<label class="w3-label"style="color:rgb(63,81,181)">Titular</label>
		<input id="Titular" name="Titular"class="w3-input w3-border" type="text">

		<label class="w3-label"style="color:rgb(63,81,181)">Descripcion</label>
		<input id="Descr" name="Descr" class="w3-input w3-border" type="text">

		<label class="w3-label"style="color:rgb(63,81,181)">Tipo de notcia</label>
		<input id="Tiponoticia" name="Tiponoticia"class="w3-input w3-border" type="text">

        	<label class="w3-label"style="color:rgb(63,81,181)">Fecha</label>
		<input id="Fecha" name="Fecha"class="w3-input w3-border" type="text">

		<br><button type="submit" name="submit" value="submit" class="btn btn-default w3-border w3-hover-white" style="background-color:rgb(63,81,181);color:white">Añadir noticia</button>
        	<br><button type="mostrar" name="mostrar" value="submit" class="btn btn-default w3-border w3-hover-white" style="background-color:rgb(63,81,181);color:white">Mostrar noticia</button>
	</form>
</div>
<?php


@$Titular = $_POST["Titular"];
@$Descr = $_POST["Descr"];
@$Tiponoticia = $_POST["Tiponoticia"];
@$Fecha = $_POST["Fecha"];

$link = mysqli_connect("localhost", "root","");
mysqli_select_db($link,"noticias");

  if(@$_POST['submit'])
{



mysqli_query($link,"INSERT INTO noticias(Titular,Descr,Tiponoticia,Fecha)VALUES ('$Titular','$Descr','$Tiponoticia','$Fecha')");}


    if(@$_POST['mostrar'])
{
$query = "SELECT * FROM `noticias`" ;

	$result = mysqli_query($connection, $query);

	if ($result) {
		// Success
		// redirect_to("somepage.php");
		echo "Success!";
	} else {
		// Failure
		// $message = "Subject creation failed";
		die("Database query failed. " . mysqli_error($connection));
	}
	echo "<BR>";
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Titular: " . $row["Titular"]. " " . $row["Descr"]. " " . $row["Tiponoticia"].  " " . $row["Fecha"]."<br>";
    }
} else {
    echo "0 results";
}

 echo "<br><br>";
   /* $Titular = "aaa";


	$query = "SELECT Titular,Descr,Tiponoticia,Fecha FROM `snoticias` WHERE `noticias`.`Titular`  = $Titular";
	echo $query;

	$result = mysqli_query($connection, $query);

	if ($result) {
		// Success
		// redirect_to("somepage.php");
		echo "Success!";
	} else {
		// Failure
		// $message = "Subject creation failed";
		die("Database query failed. " . mysqli_error($connection));
	}
	echo "<BR>";
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Titular: " . $row["Titular"]. " " . $row["Descr"]. " " . $row["Tiponoticia"].  " " . $row["Fecha"]."<br>";
    }
} else {
    echo "0 results";
}

 echo "<br><br>";*/
}
?>


</body>
</html>
