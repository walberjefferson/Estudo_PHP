<?php

namespace Classe;

class Carro {

    public function __construct($cor, $ano, $modelo, $fabricante) {
        $this->fabricante = $fabricante;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
    }

    public function constroiCarro() {
        $texto = 'Meu carro foi fabricado pela <b>' . $this->fabricante . '</b> e é do modelo <b>'
                . $this->modelo . '</b> feito no ano de <b>' . $this->ano . '</b> na cor <b>' . $this->cor . '</b>.';
        return $texto;
    }

}
