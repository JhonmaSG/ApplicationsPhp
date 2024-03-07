<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios 3 pre parcial Registro de Producto</title>
    </head>
    <body>
        <h3>Registro de Producto</h3>
        <form method="post">
            Seleccion el producto:
            <select name="producto" required>
                <option value="Ollas">Ollas</option>
                <option value="Licuadoras">Licuadoras</option>
                <option value="Batidoras">Batidoras</option>
                <option value="Calentadores">Calentadores</option>
                <option value="Planchas">Planchas</option>
                <option value="Cacerolas">Cacerolas</option>
            </select><br/>
            Digite Cantidad: <input type="number" name="cantidad" required placeholder="Ingrese la catidad"><br/>
            <button type="submit" name="Adicionar Producto">Adicionar Producto</button>
            <a href="?reset=1">Reiniciar</a><br>
        </form>
        <?php
        session_start();
        if (!isset($_SESSION['productos'])) {
            $_SESSION['productos'] = [];
        }
        // Lista de productos y sus precios
        $productos_precios = array(
            "Ollas" => 12000,
            "Licuadoras" => 15000,
            "Batidoras" => 20000,
            "Calentadores" => 8000,
            "Planchas" => 14000,
            "Cacerolas" => 9000
        );

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $producto = $_POST['producto'];
            $cantidad = $_POST['cantidad'];
            $precio = $productos_precios[$producto];
            $subtotal = $precio * $cantidad;
            $_SESSION['productos'][] = array(
                "producto" => $producto,
                "cantidad" => $cantidad,
                "precio" => $precio,
                "subtotal" => $subtotal
            );
        }
        
        //Si existe los productos asignelo, sino vaciar
        
        //$sumatoria = 0;
        //$sumatoria = array_sum(array_column($_SESSION['productos'], 'subtotal'));
        /*
        if (!is_numeric($cantidad) || ($cantidad <= 0)) {
            echo "<p>La cantidad debe ser un número positivo.</p>";
        } else {
            //Agregar los datos del producto al arreglo del productos en al sesión
            $_SESSION['productos'][] = array('producto' => $producto,
                'cantidad' => $cantidad, 'precio' => $precio, 'subtotal' => $subtotal);
            //echo "<p>Por favor, Ingrese un número válido.</p>";
        }
        */
        
        $productos_capturados = isset($_SESSION['productos']) ? $_SESSION['productos'] : array();

        if (!empty($productos_capturados)) {
            //Variable para calcular el promedio de los subtotales
            $totalSubtotales = 0;
            // Mostrar cada producto
            echo "<h2>Productos Registrados</h2>";
            echo "<table border='1'><thead><tr>";
            echo "<th>Producto</th><th>Cantidad</th>";
            echo "<th>Precio</th><th>Subtotal</th>";
            echo "</tr></thead><tbody>";

            foreach ($productos_capturados as $producto) {
                echo "<tr><td>" . $producto['producto'] . "</td>";
                echo "<td>" . $producto['cantidad'] . "</td>";
                echo "<td>" . $producto['precio'] . "</td>";
                echo "<td>" . $producto['subtotal'] . "</td>" . "</tr>";
                $totalSubtotales += $producto['subtotal'];
            }
            echo "</tbody></table>";
            $promedio = count($productos_capturados) > 0 ?
                    $totalSubtotales / count($productos_capturados) : 0;
            echo "<p>Promedio de Subtotales: $promedio</p>";
        } else {
            echo "<p>No se han ingresado productos aún.</p>";
        }

        if (isset($_GET['reset'])) {
            session_destroy();
            header("Location: RegistroProductos2.php");
            exit();
        }
        ?>

    </body>
</html>
