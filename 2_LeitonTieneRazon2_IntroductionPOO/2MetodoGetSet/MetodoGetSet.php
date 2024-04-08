<!-- Elaborar un programa Php llamado MetodosGetSet.php 
que permita capturar dos valores numéricos e imprimir 
el producto de estos, utilizando métodos get y set.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Calcular Volumen de Caja</title>
    </head>
    <body>
        <form method="post">
            Digite primer número: <input type="number" name="primero" required><br/>
            Digite segundo número: <input type="number" name="segundo"required><br/>
            <button type="submit" name="enviar">Producto</button>
        </form>
        <?php
        include("Producto.php");

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $producto = new Producto();
            $producto->setPrimero($_POST['primero']);
            $producto->setSegundo($_POST['segundo']);
            echo "<br/>Valores:" . $producto->getPrimero() . " ; " . $producto->getSegundo();
            echo "<br/><strong>El producto es:" . $producto->producto() . "</strong>";
        }
        ?>
    </body>
</html>

