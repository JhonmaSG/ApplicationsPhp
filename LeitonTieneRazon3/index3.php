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
        <h2 align="center">Ejemplo estructura do While - php <br/>
        imprimir el factorial de un número
        </h2><br/>
        <h3>
            <form method="POST">
                <fieldset>
                    <legend>informacion</legend>
                    Digite el numero :<input type="text" autofocus name="valor"><br/>
                    <input type="submit" name="enviar" value="Ejecutar">
                </fieldset>
            </form>


            <?php
            if (isset($_POST['enviar'])) {
                $factorial = 1;
                $numero = (int) $_POST["valor"];
                $contador = 1;
                echo "<fieldset><legend>Resultados</legend>";
                echo "<br/>El factorial de " . $numero . " es : ";
                do{
                    $factorial = $factorial*$contador;
                    $contador+=1;
                    
                }while($contador<=$numero);
                echo $factorial . "<br/>";
                echo "</fieldsed>";
            }
            ?>
        </h3>
    </body>
</html>
