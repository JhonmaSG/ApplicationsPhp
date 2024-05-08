<?php

class Numero {

    public $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    public function obtenerDigitos() {
        return str_split((string) $this->valor);
    }

}

class CuboPerfecto extends Numero {

    public function esCuboPerfecto() {
        $digitos = $this->obtenerDigitos();
        $suma_cubos = 0;
        foreach ($digitos as $digito) {
            $suma_cubos += pow($digito, 3);
        }
        return $suma_cubos == $this->valor;
    }

}

?>
