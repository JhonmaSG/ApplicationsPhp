<?php
class Reserva {
    private $codigo;
    private $nombreHuesped;
    private $cantidadPersonas;
    private $diasHospedaje;
    private $tipoHabitacion;

    public function __construct($codigo, $nombreHuesped, $cantidadPersonas, $diasHospedaje) {
        $this->codigo = $codigo;
        $this->nombreHuesped = $nombreHuesped;
        $this->cantidadPersonas = $cantidadPersonas;
        $this->diasHospedaje = $diasHospedaje;
        $this->tipoHabitacion = $this->calcularTipoHabitacion();
    }

    private function calcularTipoHabitacion() {
        if ($this->cantidadPersonas >= 1 && $this->cantidadPersonas <= 3) {
            return 'estandar';
        } elseif ($this->cantidadPersonas >= 4 && $this->cantidadPersonas <= 6) {
            return 'senior';
        } else {
            return 'king';
        }
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getNombreHuesped() {
        return $this->nombreHuesped;
    }

    public function getCantidadPersonas() {
        return $this->cantidadPersonas;
    }

    public function getDiasHospedaje() {
        return $this->diasHospedaje;
    }

    public function getTipoHabitacion() {
        return $this->tipoHabitacion;
    }

    public function calcularCosto() {
        $precioHabitacion = 0;

        switch ($this->tipoHabitacion) {
            case 'estandar':
                $precioHabitacion = 155000;
                break;
            case 'senior':
                $precioHabitacion = 100000;
                break;
            case 'king':
                $precioHabitacion = 80000;
                break;
        }

        return $precioHabitacion * $this->cantidadPersonas * $this->diasHospedaje;
    }
}
?>
