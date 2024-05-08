<!doctype html>
<!-- Diseñar un programa utilizando herencia que lea un número 
no mayor de 1000 e imprima ese número en letras.   -->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número a Palabras</title>
</head>
<body>
    <h1>Conversor de Números a Palabras</h1>
    <form method="post">
        <label for="numero">Ingrese un número no mayor de 1000:</label>
        <input type="number" id="numero" name="numero" min="0" max="1000">
        <br>
        <input type="submit" value="Convertir a Palabras">
    </form>

    <?php
    require_once 'Numero.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        $numeroEnPalabras = new NumeroEnPalabras($numero);
        $palabras = $numeroEnPalabras->convertirEnPalabras();

        echo "<p>El número $numero en palabras es: $palabras</p>";
    }
    ?>
</body>
</html>
