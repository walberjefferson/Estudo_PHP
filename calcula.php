<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculos</title>
</head>
<body>


<?php
/**
 * Created by PhpStorm.
 * User: walberjefferson
 * Date: 19/08/15
 * Time: 17:01
 */

require_once "Classe/Calculo.php";

use Classe\Calculo;

$x = 10;
$y = 20;

$calc = new Calculo();
echo 'Resultado da soma: ' . $calc->soma($x,$y);
echo '<br>';
echo 'Resultado da subtração: ' . $calc->subtracao($y,$x);
echo '<br>';
echo 'Resultado da multiplicação: ' . $calc->multiplicacao($x, $y);
echo '<br>';
echo 'Resultado da divisão: ' . $calc->divisao($y, $x);

?>

</body>
</html>