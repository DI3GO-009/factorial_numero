<?php

//llamamos a la clase operaciones
include_once('operaciones.php');

// creamos una variable para utilzar la clase operaciones_aritmeticas

$opreaciones = new Operaciones_Aritmeticas;

//ahora llamamos a la funcion suma de operaciones aritmeticas
echo $opreaciones -> suma(2,3);

echo "<h1" . $opreaciones ->suma(2,3) ."</h1>";



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto 2 POO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<h1 id="encabezado">Operaciones matematicas</h1>

<input type="text" name="num1" id="num1" value="<?php echo $opreaciones -> suma(2,3) ?>">

<input type="text" name="num1" id="num1" value="<?php echo $opreaciones -> resta(2,3) ?>">

<input type="text" name="num1" id="num1" value="<?php echo $opreaciones -> multiplicacion(2,3) ?>">

<input type="text" name="num1" id="num1" value="<?php echo $opreaciones -> division(2,3) ?>">

    
</body>


</html>