<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios para la pre fiesta Parcial 1</title>
    </head>
    <body>
        <h3>Capturar y Mostrar Número</h3>
        <form method="post">
            <label for="numero">Ingrese un número</label>
            <input type="text" name="numero" required>
            <button type="submit" name="enviar">Agregar</button>
            <a href="?reset=1">Reiniciar</a>
        </form>
        <?php
        session_start();
        $numeros = [];
        if (isset($_POST['enviar'])) {
            $numero = $_POST['numero'];
            if (is_numeric($numero)) {
                $_SESSION['numeros'][] = $numero;
//$numeros[] = $numero;
            } else {
                echo "<p>Por favor, Ingrese un número válido.</p>";
                
            }
        }
        $numeroCapturado = isset($_SESSION['numeros'])? $_SESSION['numeros'] : array();
        if (!empty($numeroCapturado)) {
            echo "<h2>Números capturados</h2>";
            echo "<table border='1'><thead><tr>";
            echo "<th>Número</th></tr></thead><tbody>";
            foreach ($numeroCapturado as $valor) {
                echo "<tr><td>" . $valor . "</td></tr>";
            }
            echo"</tbody></table>";
        }
        
        if(isset($_GET['reset'])){
            session_destroy();
            header("Location: index.php");
            exit();
        }
        
        ?>

    </body>
</html>
