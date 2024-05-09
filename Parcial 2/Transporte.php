<?php
//CLASE PADRE
class Transporte {
    private $mercancia = [];
    protected $codigoEnvio;
    protected $ciudadDestino;

    
    public function agregarMercancia($mercancia) {
        $this->mercancia[] = $mercancia;
    }

    public function obtenerMercancia() {
        return $this->mercancia;
    }

    public function calcularTotalesMercancia() {
        $valorNormales = 0;
        $valorExtras = 0;
        $valorUrgentes = 0;
        $cantidadExtras = 0;
        $cantidadUrgentes = 0;
        $cantidadExtrasUrgentes = 0;

        foreach ($this->mercancia as $mercancias) {
            switch ($mercancias->getTipoEnvio()) {
                case 'Normal':
                    $valorNormales += $mercancias->calcularValor();
                    break;
                case 'Extra':
                    $valorExtras += $mercancias->calcularValor();
                    $cantidadExtras++;
                    $cantidadExtrasUrgentes++;
                    break;
                case 'Urgente':
                    $valorUrgentes += $mercancias->calcularValor();
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
