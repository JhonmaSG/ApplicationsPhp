<?php

class Animal {
    
    function hablar () {
        return "Este animal: ";
    }
    
}

class Caballo extends Animal{
    function hablar (){
        return parent::hablar() . 'Relincha';
    }
}

class Pajaro extends Animal{
    function hablar (){
        return parent::hablar() . 'Silva';
    }
}

class Gato extends Animal{
    function hablar (){
        return parent::hablar() . 'Maúlla';
    }
}
?>

