<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/primerPunto.css">
    <title>Tercer Punto</title>
</head>
<body>
    <form action="./controller/datos.php" method="get">
        <h1>Datos personales</h1>

        <p>Ingrese su nombre</p>
        <input type="text" name="nombre">

        <p>Ingrese su apellido</p>
        <input type="text" name="apellido">

        <p>Ingrese su cedula</p>
        <input type="text" name="cedula">

        <button class="btn" type="submit">Enviar</button>

        <?php

        include "./controller/datos.php";
        ?>

<a class="btn" href="../../index.html">Volver</a>
    </form>
</body>
</html>