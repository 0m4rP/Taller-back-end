<?php

    $server = 'localhost';
    $root = 'root';
    $pass = '';
    $db = 'mi_proyecto';

    $conexion = new mysqli($server, $root, $pass, $db);

    if($conexion->connect_errno) {
        echo "fallo en la conexion";
        exit();
    }

?>