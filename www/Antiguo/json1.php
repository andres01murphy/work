<?php
    $aDatos = array();
    $aDatos[] = array( 'nombre' => 'Pedro', 'apellido1' => 'Manrique', 'apellido2' => 'Sosa', 'fnac' => '15/02/1970', 'cuota' => 20 );
    $aDatos[] = array( 'nombre' => 'Raquel', 'apellido1' => 'Vera', 'apellido2' => 'Déniz', 'fnac' => '15/07/1972', 'cuota' => 22 );
    $aDatos[] = array( 'nombre' => 'Antonio', 'apellido1' => 'Ronda', 'apellido2' => 'Cuadrado', 'fnac' => '20/11/1974', 'cuota' => 30 );
    // Utilizamos la función de PHP 'json_encode()' para convertir el array a formato JSON antes de devolverlo
     echo json_encode($aDatos);
?>
