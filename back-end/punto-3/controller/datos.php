<?php

    if(isset($_GET['nombre']) and ($_GET['apellido']) and ($_GET['cedula'])) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $cedula = $_GET['cedula'];

        echo "Nombre: " . $nombre . "<br>";
        echo "Apellido: " . $apellido . "<br>";
        echo "Cedula: " . $cedula;
    }
?>