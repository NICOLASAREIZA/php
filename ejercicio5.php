<?php
$entero = 10;

$a = 1;
$b = 2;
$c = 3;

$resultado = match ($entero){

    $a => "Bienvenido",
    $b => "Que tal",
    $c => "Good bye",
    default => "No es valido"

};
echo $resultado;

?>

