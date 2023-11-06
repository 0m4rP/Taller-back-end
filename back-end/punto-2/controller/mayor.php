<?php
    $resultado = "";

    if(isset($_GET['nombre']) and ($_GET['edad'])){
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];


        if($edad >= 18) {
            $resultado = $nombre . " tiene " . $edad . " y es mayor de edad";
        } else {
            $resultado = $nombre . " tiene " . $edad . " y NO es mayor de edad";
        }
    }
?>
    
<div> 
    <h1>Resultado:</h1>
    <h3><?php echo $resultado; ?> </h3>
</div>