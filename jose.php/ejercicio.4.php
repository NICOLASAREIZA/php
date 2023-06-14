<form action="#" method="post">
    <input type="text" name="nombre" placeholder="Ingresa tu nombre">
    <input type="number" name="numero2" placeholder="Ingresa numero 2">
    <button type="submit">Enviar</button>
</form>

<?php
$nombre = $_POST['nombre'];
$numero2 = $_POST['numero2'];
$descuento = $numero2 * 0.15 ;
$total = $descuento + $numero2;


echo "Bienvenido  ".$nombre."  "."su saldo es de: ".$numero2."  "." y con el aumento del 15% tu saldo seria de:  ".$total;

?>

