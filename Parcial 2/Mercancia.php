<?php
//CLASE HIJA
class Mercancia extends Transporte {

    private $tipoEnvio;
    private $pesoKg;
    private $descripcion;

    public function __construct($codigoEnvio, $ciudadDestino, $tipoEnvio, $pesoKg) {
        $this->codigoEnvio = $codigoEnvio;
        $this->ciudadDestino = $ciudadDestino;
        $this->tipoEnvio = $tipoEnvio;
        $this->pesoKg = $pesoKg;
    }

    public function getCodigoEnvio() {
        return $this->codigoEnvio;
    }

    public function getCiudadDestino() {
        return $this->ciudadDestino;
    }

    public function getTipoEnvio() {
        return $this->tipoEnvio;
    }

    public function getPesoKg() {
        return $this->pesoKg;
    }

    public function calcularDescripcion() {
        if ($this->pesoKg >= 0.1 && $this->pesoKg <= 2) {
            $this->descripcion = 'Sobre';
            return 'Sobre';
        } else if ($this->pesoKg > 2 && $this->pesoKg <= 8) {
            $this->descripcion = 'Paquete';
            return 'Paquete';
        }else {
            $this->descripcion = 'Caja';
            return 'Caja';
        }
    }

    public function calcularValor() {
        $valorPorKg = 0;
        switch ($this->descripcion) {
            case 'Sobre':
                $valorPorKg = 15000;
                break;
            case 'Paquete':
                $valorPorKg = 28000;
                break;
            case 'Caja':
                $valorPorKg = 40000;
                break;
        }

        return $valorPorKg * $this->pesoKg;
    }

}

?>
