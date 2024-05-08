<?php

class Producto {

    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function calcularComision($cantidadProductos) {
        $comisionBase = 100;
        $cantidadMinimaComisionMayor = 50;

        if ($cantidadProductos > $cantidadMinimaComisionMayor) {
            return $comisionBase * 2;
        } else {
            return $comisionBase;
        }
    }

}

// Otras clases de productos para diferentes tipos de productos, si es necesario
?>
