<!doctype html>
<!-- Elaborar una clase llamada Rectangulo que contenga los 
atributos longitud y ancho, cada uno de los cuales debe ser inicializado con 1. 
debe contener métodos para calcular el perímetro y el área del rectángulo, 
los métodos deben verificar que la longitud y la altura sean números 
flotantes entre 0.0 y 20.0. Se deberá utilizar herencia.  -->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Perímetro y Área</title>
</head>
<body>
    <h1>Calculadora de Perímetro y Área de Rectángulo</h1>
    <form method="post">
        <label for="longitud">Longitud del rectángulo (entre 0.0 y 20.0):</label>
        <input type="number" id="longitud" name="longitud" step="0.1" min="0.0" max="20.0" value="1.0">
        <br>
        <label for="ancho">Ancho del rectángulo (entre 0.0 y 20.0):</label>
        <input type="number" id="ancho" name="ancho" step="0.1" min="0.0" max="20.0" value="1.0">
        <br>
        <input type="submit" value="Calcular Perímetro y Área">
    </form>

    <?php
    require_once 'Figuras.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $longitud = $_POST['longitud'];
        $ancho = $_POST['ancho'];

        $rectangulo = new Rectangulo($longitud, $ancho);
        $perimetro = $rectangulo->calcularPerimetro();
        $area = $rectangulo->calcularArea();

        echo "<p>El perímetro del rectángulo es: $perimetro</p>";
        echo "<p>El área del rectángulo es: $area</p>";
    }
    ?>
</body>
</html>
