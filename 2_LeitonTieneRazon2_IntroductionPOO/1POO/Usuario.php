<?php

class Usuario {

    var $nombreUsuario;
    var $tipoUsuario;

    function set_nombreUsuario($entrada) {
        $this->nombreUsuario = $entrada;
    }

    function get_nombreUsuario() {
        return "Su nombre de usuario es: " . $this->nombreUsuario;
    }

    function set_tipoUsuario($entradaTipo) {
        $this->tipoUsuario = $entradaTipo;
    }

    function get_tipoUsuario() {
        return "El tipo de usuario es: " . $this->tipoUsuario;
    }

}

?>