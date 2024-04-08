<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro de Ventas</title>
    </head>
    <body>
        <h3>Registro de Ventas</h3>
        <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
            Nombre de la Empresa: <input type="text" name="nombreemp" required><br/>
            NIT de la Empresa: <input type="text" name="nitemp" required><br/>
            Seleccione Producto:
            <select name="producto">
                <option value="Vasos">Vasos</option>
                <option value="Ollas">Ollas</option>
                <option value="Cafeteras">Cafeteras</option>
                <option value="Licuadoras">Licuadoras</option>
                <option value="Arroceras">Arroceras</option>
                <option value="Hornos">Hornos</option>
            </select><br/>
            Cantidad Vendida:<input type="number" name="cantidad" min="1" required><br/>
            Precio:<input type="number" name="precio" min="0.01" step="0.01" required><br/>
            <input type="submit" value="Registrar Venta">
            <a href="?reset=1">Reiniciar Sesión</a><br/>
        </form>
        
        <?php
        include 'Productos.php';
        session_start();
        if (!isset($_SESSION['productos'])) {
            $_SESSION['productos'] = [];
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $producto = new Productos($_POST['nombreemp'], $_POST['nitemp'], $_POST['producto'],
                    $_POST['cantidad'], $_POST['precio']);
            $_SESSION['productos'][] = $producto;
        }
        if (count($_SESSION['productos']) > 0) {
            $sumatoria = 0;
            $productos_vendidos = Productos::agregarProductosVendidos($_SESSION['productos']);
            echo "<h3>Productos Vendidos</h3>";
            echo "<table border=1>";
            echo "<tr><th>Empresa</th><th>Nit</th><th>Producto</th><th>Cantidad</th><th>Precio</th><th>Subtotal</th></tr>";
            foreach ($productos_vendidos as $prod_vendido) {
                echo "<tr>";
                echo "<td>{$prod_vendido['nombre']}</td>";
                echo "<td>{$prod_vendido['nit']}</td>";
                echo "<td>{$prod_vendido['nombreProducto']}</td>";
                echo "<td>{$prod_vendido['cantidad']}</td>";
                echo "<td>{$prod_vendido['precio']}</td>";
                $subtotal = floatval($prod_vendido['cantidad'] * $prod_vendido['precio']);
                echo "<td>{$subtotal}</td>";
                $sumatoria += $subtotal;
                echo "</tr>";
            }
            echo "</table>";
            echo "<p>El total de venta es: <b>" . $sumatoria . "<b/></p>";
        }
        if (isset($_GET['reset'])) {
            session_destroy();
            header("Location: VentaProductosHerencia.php");
            exit();
        }
        ?>
    </body>
</html>