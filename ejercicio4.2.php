<?php

/* Ejercicio 3 ( Ejercicio de comparación multiple: Escribe un programa que solicite al usuario que ingrese un numero del 1 al 7. 
Luego, el rpograma debe imprimir el dia  de la semana correspondiente al número ingresado. Por ejemplo, si el usuario ingresa "1",
el rpograma debe imprimir "Lunes". Si el número ingreado no está en el rango válido, el programa debe imprimir "Número inválido".) */

$cliente =  2;
$dias = ["lunes", "martes", "miercoles","jueves","viernes", "sabado", "domingo"];
$numerodias = [1,2,3,4,5,6,7];

if($numerodias[0] == $cliente){
    echo $dias [0];
}

elseif($numerodias [1] == $cliente){
    echo $dias [1];
}
elseif($numerodias [2] == $cliente){
    echo $dias [2];
}
elseif($numerodias [3] == $cliente){
    echo $dias [3];
}
elseif($numerodias [4] == $cliente){
    echo $dias [4];
}
elseif($numerodias [5] == $cliente){
    echo $dias [5];
}
elseif($numerodias [5] == $cliente){
    echo $dias [5];
}
elseif($numerodias [5] == $cliente){
    echo $dias [5];
}
elseif($numerodias [6] == $cliente){
    echo $dias [6];
}

?>