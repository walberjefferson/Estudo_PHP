<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cache</title>
</head>
<body>

<?php
date_default_timezone_set('America/Maceio');

if(!$resultado = apc_fetch('dataSuperAtual')){
    $data = new \DateTime("now");
    $resultado = $data->format('d/m/Y - H:i:s');
    apc_store('dataSuperAtual', $resultado);
}


echo 'Resultado do Cache: ' . $resultado;
?>

</body>
</html>
