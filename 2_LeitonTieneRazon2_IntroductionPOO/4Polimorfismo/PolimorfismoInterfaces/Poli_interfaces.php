<?php

interface Operaciones {

    function operacion();
}

class Sumar implements Operaciones {

    private $primero, $segundo;

    function __construct($primero, $segundo) {
        $this->primero = $primero;
        $this->segundo = $segundo;
    }

    function operacion() {
        return $this->primero + $this->segundo;
    }

}

class Restar implements Operaciones {

    private $primero, $segundo;

    function __construct($primero, $segundo) {
        $this->primero = $primero;
        $this->segundo = $segundo;
    }

    function operacion() {
        return $this->primero - $this->segundo;
    }

}

class Multiplicar implements Operaciones {

    private $primero, $segundo;

    function __construct($primero, $segundo) {
        $this->primero = $primero;
        $this->segundo = $segundo;
    }

    function operacion() {
        return $this->primero * $this->segundo;
    }

}

class Dividir implements Operaciones {

    private $primero, $segundo;

    function __construct($primero, $segundo) {
        $this->primero = $primero;
        $this->segundo = $segundo;
    }

    function operacion() {
        return $this->primero / $this->segundo;
    }

}

?>
