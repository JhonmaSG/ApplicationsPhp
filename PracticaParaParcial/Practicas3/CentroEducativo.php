<?php
class CentroEducativo {
    private $estudiantes = [];

    public function agregarEstudiante($estudiante) {
        $this->estudiantes[] = $estudiante;
    }

    public function obtenerEstudiantes() {
        return $this->estudiantes;
    }

    public function calcularEstadisticas() {
        $menor30 = 0;
        $entre30y80 = 0;
        $mayor80 = 0;
        $entre25y60 = 0;
        $totalNotasFinales = 0;
        $cantidadEstudiantes = count($this->estudiantes);
        

        foreach ($this->estudiantes as $estudiante) {
            $notaFinal = $estudiante->calcularNotaFinal();
            $totalNotasFinales += $notaFinal;

            if ($notaFinal < 30) {
                $menor30++;
            } elseif ($notaFinal >= 30 && $notaFinal <= 80) {
                $entre30y80++;
            } else {
                $mayor80++;
            }

            if ($notaFinal >= 25 && $notaFinal <= 60) {
                $entre25y60++;
            }
        }
        if ($cantidadEstudiantes > 0){
            $promedioNotaFinal = ($totalNotasFinales / $cantidadEstudiantes);
        }

        return [
            'menor30' => $menor30,
            'entre30y80' => $entre30y80,
            'mayor80' => $mayor80,
            'entre25y60' => $entre25y60,
            'promedioNotaFinal' => $promedioNotaFinal
        ];
    }
}
?>