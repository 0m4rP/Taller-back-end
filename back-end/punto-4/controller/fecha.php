<?php

    $mensaje = "";

    if(isset($_GET['nacimiento'])){
        $fechaNacimiento = $_GET['nacimiento'];

        $fechaNacimientoTime = strtotime($fechaNacimiento);
        $edad = date('Y') - date('Y', $fechaNacimientoTime);

    // Verificar si es menor o mayor de edad
        if ($edad < 18) {
        $mensaje = "Su edad es $edad, por lo tanto: No es mayor de edad";
        } else {
        $mensaje = "Su edad es $edad, por lo tanto: Es mayor de edad";
        }
    }
?>

<div> 
    <h1>Resultado: </h1>

    <h3><?php echo $mensaje;?> </h3>
</div>