<?php

class Instrumento {
    
    function tocar () {
        return "Esta tocando el instrumento ";
    }
}
// parent::tocar() : es una referencia a la clase padre 
// en la jerarquía de herencia
class Guitarra extends Instrumento {
    function tocar () {
        return parent::tocar() . "Guitarra";
    }
}

class Saxofon extends Instrumento {
    function tocar () {
        return parent::tocar() . "Saxofon";
    }
}

class Violin extends Instrumento {
    function tocar () {
        return parent::tocar() . "Violin";
    }
}
?>
