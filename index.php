<?php
require_once 'Classe/Carro.php';

use Classe\Carro;

$carro = new Carro('Branco', 1994, 'Voyage', 'Volksvagen');
#$carro->cor = 'Grafite';
#$carro->fabricante = 'Volksvagen';
#$carro->ano = '1994';
#$carro->modelo = 'Voyage';

echo $carro->constroiCarro();