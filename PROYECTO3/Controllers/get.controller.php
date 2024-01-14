<?php

error_reporting((0));

require_once('../Models/operaciones.model.php');
$operaciones = new Operaciones_Aritmeticas();

/**
 * 
 * Asi es como capturamos los valores de suma para la operacion aritmetica enviado la url
 * localhost/sexto/proyecto3/views*index.view.php?operacion=suma &numero1=6 &numero2=5
 * 
 *      
 *  * localhost/sexto/proyecto3/views*index.view.php?operacion=suma&numero1=6&numero2=5
 */

 // el formato json puede leer javascript


 $numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
    $operacion = $_GET['operacion'];
    if($operacion == '1'){
       echo json_encode($operaciones->suma($numero1, $numero2));
    }
    if($operacion == '2'){
        echo json_encode( $operaciones->resta($numero1, $numero2));
    }
    if($operacion == '3'){
        echo json_encode( $operaciones->multiplicacion($numero1, $numero2));
    }
    if($operacion == '4'){
        echo json_encode( $operaciones->division($numero1, $numero2));
    }


?>