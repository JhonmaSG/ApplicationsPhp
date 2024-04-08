<!DOCTYPE html>
<html>
    <head>
        <title>Calcular Volumen de Caja</title>
    </head>
    <body>
        <form method="post">
            Alto: <input type="number" name="alto" step="0.01" required><br>
            Ancho: <input type="number" name="ancho" step="0.01" required><br>
            Profundidad: <input type="number" name="profundidad" step="0.01" required><br>
            
            <button type="submit" name="cp">Constructor con parámetros</button>
            <button type="submit" name="sp">Constructor sin parámetros</button>

        </form>  <?php
        include("VolumenCaja.php"); // Verificar si se ha enviado el formulario
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Obtener los valores del formulario
            $alto = isset($_POST['alto']) ? floatval($_POST['alto']) : 0;
            $ancho = isset($_POST['ancho']) ? floatval($_POST['ancho']) : 0;
            $profundidad = isset($_POST['profundidad']) ? floatval($_POST['profundidad']) : 0;
            echo "<br/>Valores: " . $alto . " ; " . $ancho . " ; " . $profundidad;
            echo "<br>";
            if (isset($_POST['cp'])) {
                $cajaCP = new VolumenCaja($alto, $ancho, $profundidad);
// Imprimir el volumen con constructor con parámetros
                echo "<br/>El volumen de la caja con constructor con "
                . "parámetros es: " . $cajaCP->calcularVolumen();
            }
            
            if (isset($_POST['sp'])) {
                $cajaSP = new VolumenCaja();
                $cajaSP->setAlto($alto);
                $cajaSP->setAncho($ancho);
                $cajaSP->setProfundidad($profundidad);
                echo "<br/>El volumen de la caja con constructor "
                . "sin parámetros es: " . $cajaSP->calcularVolumen();
            }
        }
        ?>
    </body>
</html>

