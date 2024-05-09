<?php
class Transportadora {
    private $envios = [];

    public function agregarEnvio($envio) {
        $this->envios[] = $envio;
    }

    public function obtenerEnvios() {
        return $this->envios;
    }

    public function calcularTotalesEnvios() {
        $valorNormales = 0;
        $valorExtras = 0;
        $valorUrgentes = 0;
        $cantidadExtras = 0;
        $cantidadUrgentes = 0;
        $cantidadExtrasUrgentes = 0;

        foreach ($this->envios as $envio) {
            switch ($envio->getTipoEnvio()) {
                case 'Normal':
                    $valorNormales += $envio->calcularValor();
                    break;
                case 'Extra':
                    $valorExtras += $envio->calcularValor();
                    $cantidadExtras++;
                    $cantidadExtrasUrgentes++;
                    break;
                case 'Urgente':
                    $valorUrgentes += $envio->calcularValor();
                    $cantidadUrgentes++;
                    $cantidadExtrasUrgentes++;
                    break;
            }
        }

        return [
            'valorNormales' => $valorNormales,
            'valorExtras' => $valorExtras,
            'valorUrgentes' => $valorUrgentes,
            'cantidadExtras' => $cantidadExtras,
            'cantidadUrgentes' => $cantidadUrgentes,
            'cantidadExtrasUrgentes' => $cantidadExtrasUrgentes
        ];
    }
}
?>
