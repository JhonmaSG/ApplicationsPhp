<?php
class Hotel {
    private $reservas = [];

    public function agregarReserva($reserva) {
        $this->reservas[] = $reserva;
    }

    public function obtenerReservas() {
        return $this->reservas;
    }

    public function calcularTotales() {
        $totalEstandar = 0;
        $totalSenior = 0;
        $totalKing = 0;
        $totalPersonas = 0;

        foreach ($this->reservas as $reserva) {
            $totalPersonas += $reserva->getCantidadPersonas();
            switch ($reserva->getTipoHabitacion()) {
                case 'estandar':
                    $totalEstandar += $reserva->calcularCosto();
                    break;
                case 'senior':
                    $totalSenior += $reserva->calcularCosto();
                    break;
                case 'king':
                    $totalKing += $reserva->calcularCosto();
                    break;
            }
        }

        return [
            'totalEstandar' => $totalEstandar,
            'totalSenior' => $totalSenior,
            'totalKing' => $totalKing,
            'totalPersonas' => $totalPersonas
        ];
    }
}
?>
