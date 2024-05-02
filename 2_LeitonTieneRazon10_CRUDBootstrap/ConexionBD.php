<?php

class ConexionBDPDO {
    //En casa:127.0.0.1:3307
    //En la U:10.28.0.49:33152
    private $host = "127.0.0.1:3307";
    private $bd = "comercial";
    private $usuario = "root";
    private $clave = "";
    //Contra U:12346
    //Contra Casa: ""

    function Conectar() {
        try {
            $conexion = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->bd . ";charset=utf8",
                    $this->usuario, $this->clave);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo ("Conexion Exitosa");
            return $conexion;
        } catch (PDOException $error) {
            echo 'Error conexion: ' . $error->getMessage();
            exit;
        }
    }

}
