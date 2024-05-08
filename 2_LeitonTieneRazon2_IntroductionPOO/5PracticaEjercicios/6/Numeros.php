<?php

class Numero {
    public $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    public function obtenerDivisores() {
        $divisores = [];
        for ($i = 1; $i < $this->valor; $i++) {
            if ($this->valor % $i == 0) {
                $divisores[] = $i;
            }
        }
        return $divisores;
    }

    public function sumaDivisores() {
        return array_sum($this->obtenerDivisores());
    }
}

class Amigo extends Numero {
    public function sonAmigos($otroNumero) {
        return $this->sumaDivisores() == $otroNumero->valor;
    }
}

?>
