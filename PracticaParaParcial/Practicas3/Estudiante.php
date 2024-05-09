<?php

class Estudiante {

    private $codigo;
    private $nombre;
    private $nota1;
    private $nota2;
    private $nota3;

    public function __construct($codigo, $nombre, $nota1, $nota2, $nota3) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getNota1() {
        return $this->nota1;
    }

    public function getNota2() {
        return $this->nota2;
    }

    public function getNota3() {
        return $this->nota3;
    }

    public function calcularNotaFinal() {
        // Calcular la nota final como la suma ponderada de las notas
        return ($this->nota1 * 0.3) + ($this->nota2 * 0.25) + ($this->nota3 * 0.45);
    }

}

?>