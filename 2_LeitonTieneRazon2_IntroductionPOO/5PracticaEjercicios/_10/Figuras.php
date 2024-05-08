<?php

class Figura {

    protected $longitud;
    protected $ancho;

    public function __construct($longitud = 1, $ancho = 1) {
        $this->longitud = $this->validarDimension($longitud);
        $this->ancho = $this->validarDimension($ancho);
    }

    protected function validarDimension($dimension) {
        if (!is_float($dimension) || $dimension < 0.0 || $dimension > 20.0) {
            return 1; // Si la dimensión no es válida, se establece en 1 por defecto
        }
        return $dimension;
    }

    public function calcularPerimetro() {
        return 2 * ($this->longitud + $this->ancho);
    }

    public function calcularArea() {
        return $this->longitud * $this->ancho;
    }

}

class Rectangulo extends Figura {

    // ya que la clase Figura contiene todo lo necesario para el rectángulo.
}

?>
