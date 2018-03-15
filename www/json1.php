<?php
    $aDatos = array();
    $aDatos[] = array( 'nombre' => 'Pedro', 'calle' => 'Calle de Goya, Madrid');
    $aDatos[] = array( 'nombre' => 'Pedro', 'calle' => 'Calle de Goya, Madrid');
    $aDatos[] = array( 'nombre' => 'Pedro', 'calle' => 'Calle de Goya, Madrid');
    // Utilizamos la función de PHP 'json_encode()' para convertir el array a formato JSON antes de devolverlo
     echo json_encode($aDatos);
?>
