<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/primerPunto.css">
    <title>Segundo punto</title>
</head>
<body>
    <form method="get">
        <h1>Mayor o menor de edad</h1>

        <p>Ingrese su nombre</p>
        <input type="text" name="nombre">

        <p>Ingrese su edad</p>
        <input type="number" name="edad">

        <button name="enviar" class="btn">Enviar</button>

    <?php
        include "./controller/mayor.php";
    ?>

    <a class="btn" href="../../index.html">Volver</a>
    </form>


</body>
</html>