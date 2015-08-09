<?php

require_once 'Classe/Carro.php';

use Classe\Carro;

$carro = new Carro('Branco', 1994, 'Voyage', 'Volksvagen');
echo $carro->constroiCarro();
