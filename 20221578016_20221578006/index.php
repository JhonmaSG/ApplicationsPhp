<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Venta de Productos</title>
    </head>
    <body>
        <h2><b>Venta de Productos</b></h2>
        <form method="POST">

            Seleccione producto: 
            <select name='producto' required>
                <option value="Melones">Melones</option>
                <option value="Mandarinas">Mandarinas</option>
                <option value="Peras">Peras</option>
                <option value="Cerezas">Cerezas</option>
                <option value="Ciruelas">Ciruelas</option>
                <option value="Zapotes">Zapotes</option>
            </select><br>

            Digite cantidad:<input type="number" name="cantidad" required><br/>

            <button type="Submit" name="Adicionar Producto">Adicionar Producto</button>
            <button><a href="?reset=1">Reiniciar</a></button><br><br>
        </form>

        <?php
        session_start();
        if (!isset($_SESSION['productos'])) {
            $_SESSION['productos'] = [];
        }

        $preciosProductos = array(
            "Melones" => 1200,
            "Mandarinas" => 800,
            "Peras" => 1000,
            "Cerezas" => 1500,
            "Ciruelas" => 2000,
            "Zapotes" => 3000
        );
        $descuentoPorUnidad = 0;
        $cantidad = 0;
        $TotalIVA = 0;
        $totalconDescuento = 0;
        $totalProductoConDescuento = 0;
        $AcumuladorDescuentoVenta = 0;
        $totalOriginal = 0;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $producto = $_POST['producto'];
            $cantidad = $_POST['cantidad'];
            $valoUnitario = $preciosProductos[$producto];
            $subtotal = $valoUnitario * $cantidad;
            
            if ($cantidad >= 100) {
                $descuentoPorUnidad = $valoUnitario* 0.06;
            } else if ($cantidad >= 50 && $cantidad < 100) {
                $descuentoPorUnidad = $valoUnitario * 0.04;
            } else if ($cantidad >= 20 && $cantidad < 50) {
                $descuentoPorUnidad = $valoUnitario * 0.02;
            }
            $valorIVA = ($subtotal * 0.19);
            $totalProductoConDescuento = ($subtotal) - ($descuentoPorUnidad*$cantidad);
            
            $_SESSION['productos'][] = array(
                "producto" => $producto,
                "cantidad" => $cantidad,
                "Precio Unitario" => $valoUnitario,
                "Descuento * Unidad" => $descuentoPorUnidad,
                "Total con Descuento" => $totalProductoConDescuento,
                "IVA" => $valorIVA
            );
        }
        $productos_capturados = isset($_SESSION['productos']) ? $_SESSION['productos'] : array();

        if (!empty($preciosProductos)) {

            echo "<table border='1'><thead><tr>";
            echo "<th>Producto</th><th>Cantidad</th>";
            echo "<th>Precio Unitario</th><th>Descuento * Unidad</th>";
            echo "<th>Total con Descuento</th>";
            echo "</tr></thead><tbody>";

            foreach ($productos_capturados as $producto) {
                echo "<tr><td>" . $producto['producto'] . "</td>";
                echo "<td>" . $producto['cantidad'] . "</td>";
                echo "<td>" . $producto['Precio Unitario'] . "</td>";
                echo "<td>" . $producto['Descuento * Unidad'] . "</td>";
                echo "<td>" . $producto['Total con Descuento'] . "</td><tr>";
                $TotalIVA += $producto['IVA'];//Acumulacion de IVA
                $cantidadTotal = $producto['cantidad'];//Cantidad total x producto
                $precioTotal = $producto['Precio Unitario'];//Precios unitarios x producto
                $totalOriginal += $cantidadTotal*$precioTotal;//Acumulador Total sin descuentos
                $totalconDescuento += $producto['Total con Descuento'];//Acumulador Total con el descuento
            }
            $AcumuladorDescuentoVenta = $totalOriginal - $totalconDescuento;//Total sin descuento - con descuento
            $NetoAPagar = ($totalconDescuento + $TotalIVA)-$AcumuladorDescuentoVenta;//
            echo "</tbody></table>";

            echo "<div style='text-align:center'>";
            echo "<br><label>SubTotal: <input type=number value=$totalconDescuento></label><br/>";
            echo "<br><label>I.V.A: <input type=number value=$TotalIVA></label><br/>";
            echo "<br><label>Neto a Pagar: <input type=number value=$NetoAPagar></label><br/>";
            echo "<br><label>Total Descuento por venta: <input type=number value=$AcumuladorDescuentoVenta></label><br/>";
            echo "</div>";
        } else {
            echo "<p>No se han ingresado productos aún.</p>";
        }

        if (isset($_GET['reset'])) {
            session_destroy();
            header("Location: index.php");
            exit();
        }
        ?>
    </body>
</html>