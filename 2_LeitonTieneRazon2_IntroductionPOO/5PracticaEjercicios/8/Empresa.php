<?php

require_once 'producto.php';

class Empresa {

    protected $productos;

    public function __construct($productos) {
        $this->productos = $productos;
    }

    public function calcularComision($cantidadProductos) {
        $comision = 0;
        foreach ($this->productos as $producto) {
            $comision += $producto->calcularComision($cantidadProductos);
        }
        return $comision;
    }

}

class EmpresaConfecciones extends Empresa {
    // Lógica específica para la empresa de confecciones, si es necesario
}

// Otras subclases de Empresa para diferentes tipos de productos, si es necesario
?>
