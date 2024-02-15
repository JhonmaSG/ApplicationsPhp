<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Estructura While - Php</title>
    </head>
    <body>
        <h2>Ejemplo estructura While - php</h2><br/>
        imprimir el producto de dos números 
        <h3>
            <form method="POST">
                <fieldset>
                    <legend>Valores</legend>
                    Digite el primer numero :<input type="text" autofocus name="valor1"><br/>
                    Digite el primer segundo :<input type="text" autofocus name="valor2"><br/>
                    <input type="submit" name="enviar" value="Ejecutar">
                </fieldset>
            </form>


            <?php
            if (isset($_POST['enviar'])) {
                $resp = 0;
                $mdor = (int) $_POST["valor1"];
                $mdo = (int) $_POST["valor2"];
                echo "<fieldset><legend>Resultados</legend>";
                echo "<br/>Multiplicación de " . $mdor . " * " . $mdo . " = ";
                while ($mdor >= 1) {
                    if (($mdor % 2) != 0) {
                        $resp = $resp + $mdo;
                    }
                    $mdor = (int) ($mdor / 2);
                    $mdo = $mdo * 2;
                }
                echo $resp . "<br/>";
                echo "</fieldsed>";
            }
            ?>
        </h3>
    </body>
</html>
