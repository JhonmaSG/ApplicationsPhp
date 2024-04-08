<?php

class VolumenCaja {

    private $alto;
    private $ancho;
    private $profundidad;

// Constructor con parámetros
    public function __construct($alto = 0, $ancho = 0, $profundidad = 0) {
        $this->alto = $alto;
        $this->ancho = $ancho;
        $this->profundidad = $profundidad;
    }

// Método para calcular el volumen
    public function calcularVolumen() {
        return $this->alto * $this->ancho * $this->profundidad;
    }

// Métodos setter
    public function setAlto($alto) {
        $this->alto = $alto;
    }

    public function setAncho($ancho) {
        $this->ancho = $ancho;
    }

    public function setProfundidad($profundidad) {
        $this->profundidad = $profundidad;
    }

}
?>
