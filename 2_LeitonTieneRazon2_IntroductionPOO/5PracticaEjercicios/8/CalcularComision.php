<!doctype html>
<!-- Hacer un programa que permita calcular la comisión de los 
vendedores de una empresa de confecciones. Se debe tener en cuenta 
que existen 10 productos en la empresa y que de acuerdo a un criterio 
de cantidad la comisión puede ser mayor o menor. Se debe utilizar herencia.  -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Comisiones</title>
</head>
<body>
    <h1>Calculadora de Comisiones para Vendedores</h1>
    <form method="post">
        <label for="tipoEmpresa">Seleccione el tipo de empresa:</label>
        <select id="tipoEmpresa" name="tipoEmpresa">
            <option value="confecciones">Confecciones</option>
            <!-- Otras opciones de empresas -->
        </select>
        <br>
        <label for="cantidadProductos">Ingrese la cantidad de productos vendidos:</label>
        <input type="number" id="cantidadProductos" name="cantidadProductos" min="0">
        <br>
        <input type="submit" value="Calcular Comisión">
    </form>

    <?php
    require_once 'empresa.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tipoEmpresa = $_POST['tipoEmpresa'];
        $cantidadProductos = $_POST['cantidadProductos'];

        // Crear una lista de productos para la empresa de confecciones
        $productosConfecciones = [
            new Producto("Camisas"),
            new Producto("Pantalones"),
            // Agrega más productos si es necesario
        ];

        // Instanciar la empresa de confecciones
        $empresaConfecciones = new EmpresaConfecciones($productosConfecciones);

        // Calcular la comisión para la cantidad de productos vendidos
        $comision = $empresaConfecciones->calcularComision($cantidadProductos);

        // Mostrar el resultado
        echo "<p>La comisión del vendedor por vender $cantidadProductos productos es: $comision</p>";
    }
    ?>
</body>
</html>

