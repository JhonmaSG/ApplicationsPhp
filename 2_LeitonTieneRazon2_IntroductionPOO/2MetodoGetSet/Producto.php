<!-- Elaborar un programa Php llamado MetodosGetSet.php 
que permita capturar dos valores numéricos e imprimir 
el producto de estos, utilizando métodos get y set.
-->
<?php

class Producto {

    private $primero, $segundo;

    public function __construct() {
        $this->primero = 0;
        $this->segundo = 0;
    }

    public function getPrimero() {
        return $this->primero;
    }

    public function setPrimero($primero) {
        $this->primero = $primero;
    }

    public function getSegundo() {
        return $this->segundo;
    }

    public function setSegundo($segundo) {
        $this->segundo = $segundo;
    }

    public function producto() {
        return $this->primero * $this->segundo;
    }

}
?> 