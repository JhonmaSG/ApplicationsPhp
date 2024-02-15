<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Estructura for - Php</title>
    </head>
    <body>
        <h2>Ejemplo del bucle for - Php<br>
            Capturar un número e imprimir su tabla de multiplicar</h2><br/>
        <h3>
            <form method="POST">
                Digite número :<input type="text" autofocus placeholder="Digite un número" name="numero"><br/>
                <input type="submit" name="enviar" value="Enviar">
            </form>
        </h3>
        <?php
        if (isset($_POST['enviar'])) {
            echo "<h3>";
            $numerodigitado = $_POST['numero'];
            echo "El número digitado fue: ".$numerodigitado."<br/><br/>";
            echo "Su tabla de multiplicación es<br><br>";
            echo "<table border='1' >";
            
            for($i=1; $i <= 10; $i++){
                $total = $numerodigitado*$i;
                echo "<tr><td>".$numerodigitado."*".$i."=".$total."</td></tr>";
            }

            echo "</table>";
            echo '</h3>';
        }
        ?>
    </body>
</html>
