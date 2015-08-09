<?php

namespace Classe;

class Carro {

    public $cor;
    public $ano;
    public $modelo;
    public $fabricante;

    public function constroiCarro() {
        $texto = 'Meu carro foi fabricado por ' . $this->fabricante . ' e é do modelo '
                . $this->modelo . ' feito no ano de ' . $this->ano . ' na cor ' . $this->cor . '.';
        return $texto;
    }

}
