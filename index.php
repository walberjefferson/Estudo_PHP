<?php
#error_reporting(E_ALL);
#ini_set("display_errors", 1);

require_once 'Classe/Carro.php';
require_once 'Classe/Calculo.php';

use Classe\Calculo;
use Classe\Carro;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estudo PHP</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <hr>
            <?php

            $carro = new Carro('Grafite', 1994, 'Voyage', 'Volksvagen');
            echo '<p class="text-center">' . $carro->constroiCarro() . '</p>';

            $transporte = new ArrayIterator(array(
                'carro',
                'moto',
                'bicicleta',
                'cavalo',
                'jegue'
            ));

            foreach (new LimitIterator($transporte, 1) as $k => $trans) {
                echo $k . ' - ' . strtoupper($trans) . '<br>';

            }

            ?>

            <hr>

            <?php
            $calculo = new Calculo;

            try {
                echo $calculo->soma(10, 'oi');
            } catch (Exception $e) {
                echo 'Houve um erro durante o calculo: ' . $e->getMessage();
            }

            ?>

            <hr>

            <?php
            function dirToArray($dir)
            {

                $result = array();

                $cdir = scandir($dir);
                foreach ($cdir as $key => $value) {
                    #echo $dir . '<br>';
                    if (!in_array($value, array(".", "..", ".git", ".idea"))) {
                        if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
                            $result[$value] = '<a href=' . $value . '>' . $value . '</a>';
                        }
                    }
                }

                return $result;
            }

            $resultado = dirToArray(__DIR__);

            foreach ($resultado as $r):
                echo $r . '<br>';
            endforeach;

            ?>
        </div>
    </div>
</div>
</body>
</html>