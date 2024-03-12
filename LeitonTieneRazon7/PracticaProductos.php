<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica para parcial 1</title>
    </head>

    <body>
        <h2>DistriDrogas - El Alivio de Jhon</h2>
        <form method="POST">
            Seleccione el producto: 
            <select name='producto' required>
                <option value="Dolex">Dolex</option>
                <option value="Acetaminofem">Acetaminofem</option>
                <option value="VitaC">VitaC</option>
                <option value="Aspirina">Aspirina</option>
                <option value="Suero">Suero</option>
                <option value="Tramadol">Tramadol</option>
            </select><br><br>
            Digite cantidad:<input type="number" name="cantidad" required><br/><br>
            <button type="Submit" name="Adicionar Producto">Adicionar Producto</button>
            <button><a href="?reset=1">Reiniciar</a></button><br><br>
        </form>

        <?php
        session_start();
        if (!isset($_SESSION['productos'])) {
            $_SESSION['productos'] = [];
        }
        // Lista de productos y sus precios
        $productos_precios = array(
            "Dolex" => 2500,
            "Acetaminofem" => 800,
            "VitaC" => 1500,
            "Aspirina" => 3800,
            "Suero" => 6000,
            "Tramadol" => 4500
        );

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $producto = $_POST['producto'];
            $cantidad = $_POST['cantidad'];
            $valor_unitario = $productos_precios[$producto];
            $subtotal = $valor_unitario * $cantidad;
            $_SESSION['productos'][] = array(
                "producto" => $producto,
                "cantidad" => $cantidad,
                "valor_unitario" => $valor_unitario,
                "subtotal" => $subtotal
            );
        }
        $productos_capturados = isset($_SESSION['productos']) ? $_SESSION['productos'] : array();

        if (!empty($productos_capturados)) {
            $totalSubtotales = 0;
            $descuento = 0;
            $totalPagar = 0;
            echo "<table border='1'><thead><tr>";
            echo "<th>Producto</th><th>Cantidad</th>";
            echo "<th>Valor unitario</th><th>Vr Total Producto   </th>";
            echo "</tr></thead><tbody>";

            foreach ($productos_capturados as $producto) {
                echo "<tr><td>" . $producto['producto'] . "</td>";
                echo "<td>" . $producto['cantidad'] . "</td>";
                echo "<td>" . $producto['valor_unitario'] . "</td>";
                echo "<td>" . $producto['subtotal'] . "</td><tr>";
                $totalSubtotales += $producto['subtotal'];
                
                if( $producto['subtotal'] >= 100000 && $producto['subtotal'] < 200000){
                    $descuento += $producto['subtotal']*0.025;
                }else if( $producto['subtotal'] >= 200000 && $producto['subtotal'] < 300000 ){
                    $descuento += $producto['subtotal']*0.048;
                }else if( $producto['subtotal'] >= 300000 ){
                    $descuento += $producto['subtotal']*0.085;
                }
            }
            echo "</tbody></table>";
            $iva = ($totalSubtotales*0.19);
            $totalPagar = ($totalSubtotales+$iva)-$descuento;
            echo "<div style='text-align:center'>";
            echo "<br><label>SubTotal: <input type=number value=$totalSubtotales></label><br/>";
            echo "<br><label>I.V.A: <input type=number value=$iva></label><br/>";
            echo "<br><label>Descuento: <input type=number value=-$descuento></label><br/>";
            echo "<br><label>Total a Pagar: <input type=number value=$totalPagar></label><br/>";
            echo "</div>";
        } else {
            echo "<p>No se han ingresado productos aún.</p>";
        }

        if (isset($_GET['reset'])) {
            session_destroy();
            header("Location: PracticaPRoductos.php");
            exit();
        }
        ?>

    </body>
</html>


