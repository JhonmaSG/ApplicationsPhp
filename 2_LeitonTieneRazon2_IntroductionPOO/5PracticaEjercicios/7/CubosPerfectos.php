<!doctype html>
<!-- Escriba un programa utilizando herencia que dado un numero entero, 
diga si es o no es, un cubo perfecto. Los números astromg o cubos perfectos, 
son aquellos que sumados los cubos de sus dígitos nos dan el mismo número. 
Por ejemplo 153 es un cubo perfecto, 
pues (1) elevado a 3 + (5) elevado a 3 + (3) elevado a 3 es igual a 153.  -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Verificación de Cubos Perfectos</title>
    </head>
    <body>
        <h1>Verificación de Cubos Perfectos</h1>
        <form method="post">
            <label for="numero">Ingrese un número:</label>
            <input type="text" id="numero" name="numero">
            <br>
            <input type="submit" value="Verificar">
        </form>

        <?php
        require_once 'Numero.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST['numero'];

            $cuboPerfecto = new CuboPerfecto($numero);

            if ($cuboPerfecto->esCuboPerfecto()) {
                echo "<p>El número $numero es un cubo perfecto.</p>";
            } else {
                echo "<p>El número $numero no es un cubo perfecto.</p>";
            }
        }
        ?>
    </body>
</html>
