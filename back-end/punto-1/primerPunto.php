<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/primerPunto.css">
    <title>Punto 1 Operación</title>
</head>
<body>
    <form method="get">
        <h1>Operación</h1>
        <p>Ingrese el primer numero</p>
        <input type="number" name="primerNumero">
    
        <p>Ingrese el segundo numero</p>
        <input type="number" name="segundoNumero">
        
        <label for="">Seleccione la operación que desea realizar</label>
        <select name="operacion" id="operacion">
            <option value="">Seleccione</option>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
            <option value="division">Division</option>
        </select>

        <button name="calcular" class="btn">Calcular</button>
    <?php

        include "./controller/operacion.php";

    ?>
    <a class="btn" href="../../index.html">Volver</a>
    </form>




</body>
</html>