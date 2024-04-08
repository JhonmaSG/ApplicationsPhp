<?php

abstract class Figuras {

    public $base, $altura;

    function __construct($mibase, $mialtura) {
        $this->base = $mibase;
        $this->altura = $mialtura;
    }

    abstract function area();
}

class Triangulo extends Figuras {

    function __construct($base, $altura) {
        parent::__construct($base, $altura);
    }

    function area() {
        return ($this->base * $this->altura) / 2;
    }

}

class Rectangulo extends Figuras {

    function __construct($base, $altura) {
        parent::__construct($base, $altura);
    }

    function area() {
        return $this->base * $this->altura;
    }

}

?>
