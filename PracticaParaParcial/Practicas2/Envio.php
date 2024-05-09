<?php
class Envio {
    private $codigoEnvio;
    private $ciudadDestino;
    private $tipoEnvio;
    private $pesoKg;
    private $tipo;

    public function __construct($codigoEnvio, $ciudadDestino, $tipoEnvio, $pesoKg, $tipo) {
        $this->codigoEnvio = $codigoEnvio;
        $this->ciudadDestino = $ciudadDestino;
        $this->tipoEnvio = $tipoEnvio;
        $this->pesoKg = $pesoKg;
        $this->tipo = $tipo;
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
    
    public function getTipo() {
        return $this->tipo;
    }

    public function calcularDescripcion() {
        return 'Caja';
    }

    public function calcularValor() {
        $valorPorKg = 0;

        switch ($this->tipo) {
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
