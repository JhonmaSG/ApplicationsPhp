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
            Digite Precio:  <input type="number" name="precio" required placeholder="Ingrese el precio"><br/>
            <button type="submit" name="Adicionar Producto">Adicionar Producto</button>
            <a href="?reset=1">Reiniciar</a><br>
        </form>
        <?php
        session_start();
        if (!isset($_SESSION['productos'])) {
            $_SESSION['productos'] = [];
        }
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $producto = $_POST['producto'];
            $cantidad = $_POST['cantidad'];
            $precio = $_POST['precio'];
            $subtotal = $precio * $cantidad;
            if (!is_numeric($cantidad) || ($cantidad <= 0)) {
                echo "<p>La cantidad debe ser un número positivo.</p>";
            } else {
                //Agregar los datos del producto al arreglo del productos en al sesión
                $_SESSION['productos'][] = array('producto' => $producto,
                    'cantidad' => $cantidad, 'precio' => $precio, 'subtotal' => $subtotal);
                //echo "<p>Por favor, Ingrese un número válido.</p>";
            }
        }
        //Si existe los productos asignelo, sino vaciar
        $productos_capturados = isset($_SESSION['productos']) ? $_SESSION['productos'] : array();
        //$sumatoria = 0;
        $sumatoria = array_sum(array_column($_SESSION['productos'], 'subtotal'));
        if (!empty($productos_capturados)) {
            echo "<h2>Productos Registrados</h2>";
            echo "<table border='1'><thead><tr>";
            echo "<th>Producto</th><th>Cantidad</th>";
            echo "<th>Precio</th><th>Subtotal</th>";
            echo "</tr></thead><tbody>";
            foreach ($productos_capturados as $producto) {
                echo "<tr><td>".$producto['producto']."</td>";
                echo "<td>".$producto['cantidad']."</td>";
                echo "<td>".$producto['precio']."</td>";
                echo "<td>".$producto['subtotal']."</td>"."</tr>";
            }
            echo "</tbody></table>";
            echo "<p>La sumatoria del subtotal es: ".$sumatoria."</p>";
            //echo "<b>La suma de los precio es:<input type=text value=".$sumatoria."></b>";
        }
        
        if(isset($_GET['reset'])){
            session_destroy();
            header("Location: RegistroProductos.php");
            exit();
        }
        ?>

    </body>
</html>
