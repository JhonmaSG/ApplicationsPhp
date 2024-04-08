<?php

include 'Empresa.php';

class Productos extends Empresa {

    public $nombreProducto;
    public $cantidad;
    public $precio;

    public function __construct($nombre, $nit, $producto, $cantidad, $precio) {
        parent::__construct($nombre, $nit);
        $this->nombreProducto = $producto;
        $this->cantidad = $cantidad;
        $this->precio = $precio;
    }

    //Funcion adicional
    public static function agregarProductosVendidos($productos_session) {
        $productos_vendidos = [];
        foreach ($productos_session as $p) {
            // Agregar cada producto al arreglo
            $productos_vendidos[] = [
                'nombre' => $p->nombreEmp,
                'nit' => $p->nitEmp,
                'nombreProducto' => $p->nombreProducto,
                'cantidad' => $p->cantidad,
                'precio' => $p->precio,
            ];
        }
        return $productos_vendidos;
    }
}
?>