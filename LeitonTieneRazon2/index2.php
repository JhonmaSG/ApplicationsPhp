<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Un segundo despues</title>
        <link rel="stylesheet" href="estilos.css" type="text/css"/>
    </head>
    <body>
        <h2>Un Segundo Despues</h2>

        <h3>
            <form name="formulario" method="POST">
                Digite horas :<input type="number" name="horas" autofocus/><br/>
                Digite minutos :<input type="number" name="minutos"/><br/>
                Digite segundos :<input type="number" name="segundos"/><br/>
                <input type="submit" name="enviar" value="Un segundo despues"/>
            </form>
            <?php
            if (isset($_POST['enviar'])) {
                $horas = $_POST['horas'];
                $minutos = $_POST['minutos'];
                $segundos = $_POST['segundos'];

                echo "los numeros digitados Horas: " . $horas . ", Minutos: " . $minutos . ", Segundos: " . $segundos . "<br>";

                /* Realizar un if general para que muestre reciba solo numeros */
                if (($horas == 23 && $minutos == 59 && $segundos == 59)) {
                    $horas = $minutos = $segundos = 0;
                } else if ($segundos == 59) {
                    $minutos += 1;  //REVISAR IF ELSE, logica
                    $segundos = 0;
                } else {
                    $segundos++;
                }

                if ($minutos == 59 and $segundos == 59) {
                    $horas += 1;
                    $minutos = 0;
                }

                if ($horas == 23 and $minutos == 59) {
                    $horas = 0;
                    $minutos = 0;
                    $segundos = 0;
                }
            }
            echo "Horas:<input type=text value=$horas" . "><br/>";
            echo "Minutos: <input type=text value=$minutos" . "><br/>";
            echo "Segundos: <input type=text value=$segundos" . "><br/>";
            ?>
        </h3>

    </body>
</html>
