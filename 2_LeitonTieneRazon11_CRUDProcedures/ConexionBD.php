<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class ConexionBDPDO {

            private $host = "10.28.0.49:33153";
            private $bd = "comercial";
            private $usuario = "root";
            private $clave = "123456";

            function conectar() {
                try {
                    //mysql:host=
                    $conexion = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->bd . ";charset=utf8",
                            $this->usuario, $this->clave);
                    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    return $conexion;
                } catch (PDOException $error) {
                    echo 'Error conexion: ' . $error->getMessage();
                    exit;
                }
            }     
        }
        ?>
    </body>
</html>