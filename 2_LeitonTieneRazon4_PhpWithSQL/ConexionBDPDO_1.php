<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        try {
            //mysql:host=127.0.0.1:3307
            $conexion = new PDO("mysql:host=127.0.0.1:3307;dbname=Comercial_1", "root", "");
            $conexion->setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);
            //echo ("Se ha conectado a MySQL (PDO)....</br>");
        } catch (PDOException $e) {
            //echo ("No se ha conectado a MySQL (POO): " . $e->getMessage());
        }
       // $conexion = null;
        ?>
    </body>
</html>
