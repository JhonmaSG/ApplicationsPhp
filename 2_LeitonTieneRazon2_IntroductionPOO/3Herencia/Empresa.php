<?php

class Empresa {

    public $nombreEmp;
    public $nitEmp;

    public function __construct($nombre, $nit) {
        $this->nombreEmp = $nombre;
        $this->nitEmp = $nit;
    }

}

?>
