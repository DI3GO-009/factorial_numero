<?php
function factorial ($numero)
{
if ($numero == 0 || $numero ==1) 
{
    return 1;
}
else
{

    for ($i=1; $i < $numero ; $i++)
    {

       $numero = $numero * $i; 

    }
//Respuesta
return $numero;


}




}

echo factorial(5);







?>
