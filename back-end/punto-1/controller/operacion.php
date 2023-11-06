<?php

    $resultado = 0;
    if(isset($_GET['primerNumero']) and ($_GET['segundoNumero']) and ($_GET['operacion'])){
        $primerNumero = $_GET['primerNumero'];
        $segundoNumero = $_GET['segundoNumero'];
        $operacion = $_GET['operacion'];


        

        switch($operacion){
            case "suma": 
                $resultado = $primerNumero + $segundoNumero;
                break;
            case "resta":
                $resultado = $primerNumero - $segundoNumero;
                break;
            case "multiplicacion":
                $resultado = $primerNumero * $segundoNumero;
                break;
            case "division":
                $resultado = $primerNumero / $segundoNumero;
                break;
            default:
                echo "ingrese bien los numeros";
        }

        
    }
?>

<div> 
    <h1>resultado</h1>

    <h3><?php echo $resultado;?> </h3>
</div>