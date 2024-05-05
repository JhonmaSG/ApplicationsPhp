<?php

class Cilindro {

    var $altura;
    var $radio;

    function __construct($radio, $altura) {
        $this->radio = $radio;
        $this->altura = $altura;
    }

        function getAltura() {
            return $this->altura;
        }

        function getRadio() {
            return $this->radio;
        }

        function setAltura($altura) {
            $this->altura = $altura;
        }

        function setRadio($radio) {
            $this->radio = $radio;
        }
        
        function calcularVolumen(){
            $volumen = M_PI * pow($this->radio, 2)*$this->altura;
            return $volumen;
        }

    }

?>