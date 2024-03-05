<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios 2 para la pre fiesta Parcial 1</title>
    </head>
    <body>
        <h3>Capturar Producto y Precio</h3>
        <form method="post">
            Nombre del producto: <input type="text" name="producto" required placeholder="Ingrese el nombre"><br/>
            Precio del Producto:  <input type="number" name="precio" required placeholder="Ingrese el precio"><br/>
            <button type="submit" name="Adicionar Producto">Agregar</button>
            <a href="?reset=1">Reiniciar</a>
        </form>
        <?php
        session_start();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombreProducto = $_POST['producto'];
            $PrecioProducto = $_POST['precio'];
            if (!is_numeric($PrecioProducto) || ($PrecioProducto <= 0)) {
                echo "<p>Por favor Ingrese un precio válido para el producto.</p>";
            } else {
                //Agregar los datos del producto al arreglo del productos en al sesión
                $_SESSION['productos'][] = array('nombre' => $nombreProducto,
                    'precio' => $PrecioProducto);
                echo "<p>Por favor, Ingrese un número válido.</p>";
            }
        }
        //Si existe los productos asignelo, sino vaciar
        $productos_capturados = isset($_SESSION['productos']) ? $_SESSION['productos'] : array();
        //$sumatoria = 0;
        $sumatoria = array_sum(array_column($productos_capturados, 'precio'));
        if (!empty($productos_capturados)) {
            echo "<h2>Productos y Precio</h2>";
            echo "<table border='1'>";
            echo "<tr><th>Producto</th><th>Precio</th></tr>";
            foreach ($productos_capturados as $producto) {
                echo "<tr>";
                echo "<td>{$producto['nombre']}</td>";
                echo "<td>{$producto['precio']}</td>";
                echo "</tr>";
                //$sumatoria += $producto['precio'];
            }
            echo "<td><b><i>La suma de los precios es</td></b></i>";
            echo "<td>".$sumatoria."</td>";
            
            echo"</table>";
            //echo "<b>La suma de los precio es:<input type=text value=".$sumatoria."></b>";
            
        }
        
        if(isset($_GET['reset'])){
            session_destroy();
            header("Location: ProductoPrecio.php");
            exit();
        }
        ?>

    </body>
</html>
