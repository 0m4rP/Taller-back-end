<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/primerPunto.css">
    <title>Cuarto Punto</title>
</head>
<body>
    <form method="get">
        <h1>Edad en la actualidad</h1>

        <p>Ingrese su fecha de nacimiento</p>
        <input type="date" name="nacimiento">

        <button class="btn" type="submit">Enviar</button>

        <?php
            include "./controller/fecha.php"
        ?>

<a class="btn" href="../../index.html">Volver</a>
    </form>
</body>
</html>