<?php

/*
echo "<h1>Hola mundo</h1>";

$a = 1;
$b = 3.1416;
$boleana = false;
$c = "Hola Mundo";
$d = array(1,2,3,4);
$e = array("nombre" => "Juan", "apellido" => "Perez");
$f = null;
$g = new DateTime();
$h = new stdClass();
$h->nombre = "Juan";
$h->apellido = "Perez";
$h->edad = 20;
$h->altura = 1.75;
$h->casado = false;
$h->hijos = array();
$h->hijos[] = new stdClass();
$h->hijos[0]->nombre ="Juan";


echo $a. "<br>";
echo $b. "<br>";


for ($i=0; $i < 10; $i--) { 

    echo "Numero: ". $i. "<br>";
}

/*
session_start();
$_SESSION["nombre"] = "Juan";
session_abort();
session_destroy();
*/

/*
suma resta multiplicacion division modulo
%
autoincremente ++ 
autodecremente --
*/

/*
//igualdad
if ($a==$b){}
//identico => compara si son del mismo tipo y si son iguales
if ($a===$b){}
//Distinto
if($a!=$b){}
//No identico
if($a!==$b){}
//mayor que
if($a>$b){}
//menor que
if($a<$b){}

//mayor o igual que
if($a>=$b){}

//menor o igual que 
if($a<=$b){}

//operador ternario
$a>$b ? $c = "si" : $c = "no";



// if dentro de una sola linea
echo "Diego aun no tiene" .$hijos. "hijos" . $hijos>2? "Tienes dos hijos":"no tienes hijos";
*/

/*
//operador Y
if($a=2 && $b=3){}
if($a=2 and $b=3){}
// operador O
if($a=2 or $b=3){}
if($a=2 || $b=3){}


//operador no
if(!$a=2){} 
if($a!=2){}

//switch
$op = $_GET["op"];



$a=1;
switch ($op) {
    case 1:
        echo "a es igual a 1";
        break;
    case 2:
        echo "a es igual a 2";
        break;
    default:
        echo "a no es igual a 1 ni a 2";
        break;
}


// while
while($a<10){
    echo "a es menor que 10";
    $a++;
}   

// do while

do{
    echo "a es menor que 10";
    $a++;
}while($a<10);  

// Manejo de string

$cadena = "Hola Mundo"; // contar caracteres
echo strlen($cadena); // contar caracteres
echo str_word_count($cadena); // contar palabras
echo strrev($cadena); // invertir cadena
echo strpos($cadena, "Mundo"); // buscar palabra
echo str_replace("Hola", "Adios", $cadena); // reemplazar palabra
echo substr($cadena, 0, 5); // obtener subcadena
echo str_repeat($cadena, 3); // repetir cadena
echo str_pad($cadena, 10, "0", STR_PAD_LEFT); // agregar ceros a la izquierda
echo str_pad($cadena, 10, "0", STR_PAD_RIGHT); // agregar ceros a la derecha
echo str_pad($cadena, 10, "0", STR_PAD_BOTH); // agregar ceros a ambos lados
echo strtoupper($cadena); // convertir a mayusculas)

//split 
$cadena = "Hola Mundo";
$array = explode(" ", $cadena);
print_r($array);
//substring
$cadena = "Hola Mundo";
echo substr($cadena, 0, 5);
//concatenar
$cadena1 = "Hola ";
$cadena2 = "Mundo";
echo $cadena1.$cadena2;
//reemplazar
$cadena = "Hola Mundo";

echo str_replace("Mundo", "Juan", $cadena);
//convertir a maysuculas 
$cadena = "hola mundo";

echo strtoupper($cadena);
// convertir a minusculas
$cadena = "HOLA MUNDO";

echo strtolower($cadena);

//strops

$cadena = "Hola Mundo";

echo str_replace(" ", "", $cadena);


//array

$a= array(1,2,3,4,5);

//string con indices
$comida["Harinas"] ="pizza";
$comida["Harinas"] ="pan";
$comida["Riobamba"]="Ornado picante";
$comida["Guayas"]="caldo de salchica";
$comida["Sierra"]="caldo de pollo";
$comida["Quito"]="corvina";
$comida["Cuenca"]="caldo de pollo";

//constante

define("PI", 3.1416);

//protected 
//private


//verificar tipos de datos

//gettype(arg);
is_int((1));
is_double((3.2));
//is_resource(fopen("hola.txt","r"));
*/


//funciones 

function suma($a, $b){
    return $a+$b;
}

echo suma(2,3);


function encabezado(){
   

?>
<nav>
<ul>
    <li><a href="index.php">Inicio</a></li>

</ul>

</nav>
<?php

}

function pie_de_pagina(){
    ?>
    <footer>
        <p>Todos los derechos reservados</p>
    </footer>
    <?php
}






?>