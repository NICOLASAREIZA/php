
<form action="#" method="post">
<input type="number" name="numero1" placeholder="Ingresa numero 1">
    <input type="number" name="numero2" placeholder="Ingresa numero 2">
    <button type="submit">Enviar</button>
</form>

<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$suma = $numero1 + $numero2;

$resta = $numero1 - $numero2;

$mul = $numero1 * $numero2;

echo "El resultado de la suma es: ".$suma."\n";

echo "el resultado de la resta es: ".$resta."\n";

echo "el resultado de la multiplicación es: ".$mul."\n";


?>