<?php

class Numero {

    protected $valor;
    public function __construct($valor) {
        $this->valor = $valor;
    }

    public function operacionNumeros() {
        // Este método debería ser implementado en las clases hijas
        return null;
    }

}

class NumeroBinario extends Numero {

    public function operacionNumeros() {
        // Convertir el número a binario
        return decbin($this->valor);
    }

}

class NumeroOctal extends Numero {

    public function operacionNumeros() {
        // Convertir el número a octal
        return decoct($this->valor);
    }

}

class NumeroDecimal extends Numero {

    public function operacionNumeros() {
        // Convertir el número a decimal (sin necesidad de conversión)
        return $this->valor;
    }

}
?>

