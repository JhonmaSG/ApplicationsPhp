<?php

class Numero {
    protected $numero;

    public function __construct($numero) {
        $this->numero = $numero;
    }

    public function convertirEnPalabras() {
        return "No se puede convertir";
    }
}

class NumeroEnPalabras extends Numero {
    public function convertirEnPalabras() {
        // Array con los nombres de los números del 0 al 19
        $unidades = ['', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve', 'diez', 'once', 'doce', 'trece', 'catorce', 'quince', 'dieciséis', 'diecisiete', 'dieciocho', 'diecinueve'];
        
        // Array con los nombres de las decenas
        $decenas = ['', '', 'veinte', 'treinta', 'cuarenta', 'cincuenta', 'sesenta', 'setenta', 'ochenta', 'noventa'];
        
        // Array con los nombres de los números del 20 al 99
        $decenas_completas = ['', 'dieci', 'veinti', 'treinta y ', 'cuarenta y ', 'cincuenta y ', 'sesenta y ', 'setenta y ', 'ochenta y ', 'noventa y '];

        // Array con los nombres de los números del 100 al 999
        $centenas = ['', 'ciento', 'doscientos', 'trescientos', 'cuatrocientos', 'quinientos', 'seiscientos', 'setecientos', 'ochocientos', 'novecientos'];

        // Verificar si el número es 0
        if ($this->numero == 0) {
            return 'cero';
        }

        $palabras = '';

        // Centenas
        $centena = floor($this->numero / 100);
        $resto = $this->numero % 100;

        if ($centena > 0) {
            if ($centena == 1 && $resto == 0) {
                $palabras .= 'cien';
            } else {
                $palabras .= $centenas[$centena];
            }
        }

        // Decenas y unidades
        if ($resto > 0) {
            if ($resto < 20) {
                $palabras .= ' ' . $unidades[$resto];
            } else {
                $decena = floor($resto / 10);
                $unidad = $resto % 10;
                $palabras .= ' ' . $decenas_completas[$decena];
                if ($unidad > 0) {
                    $palabras .= $unidades[$unidad];
                }
            }
        }

        return trim($palabras);
    }
}

?>
