<?php

class Relaciones {
    private $numeroA;
    private $numeroB;
    
function __construct($numA, $numB) {
    $this->numeroA = $numA;
    $this->numeroB = $numB;
}
    
    function esmayor(){
        if ($this->numeroA > $this->numeroB) {
            return "El numero A ($this->numeroA) es mayor que B ($this->numeroB).";
        } else if ($this->numeroA < $this->numeroB) {
            return "El numero B ($this->numeroB) es mayor que A ($this->numeroA).";
        } else {
            return "Ambos números son iguales.";
        }
    }
    
    function esigual(){
        if ($this->numeroA == $this->numeroB) {
            return "Ambos números son iguales.";
        } else {
            return "Los números son diferentes.";
        }
    }
    
    function esmenor(){
        if ($this->numeroA < $this->numeroB) {
            return "El numero A ($this->numeroA) es menor que B ($this->numeroB).";
        } else if ($this->numeroA > $this->numeroB) {
            return "El numero B ($this->numeroB) es menor que A ($this->numeroA).";
        } else {
            return "Ambos números son iguales.";
        }
    }
    
}

?>