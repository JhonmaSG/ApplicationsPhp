<?php
require_once 'Transporte.php';
require_once 'Mercancia.php';

session_start();

if (!isset($_SESSION['transporte'])) {
    $_SESSION['transporte'] = new Transporte();
}
$transporte = $_SESSION['transporte'];
?>
<!DOCTYPE html>
<!--JHON MARIO SERRANO GORDILLO - 20221578016
----HEIDER SAIT LEYTON MONTIEL  - 20221578006
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Parcial 2 GRUPAL</title>
    </head>
    <body>
        <h2>Transporte GACELA</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Código de envío: <input type="text" name="codigo_envio"><br>
            Ciudad destino: <input type="text" name="ciudad_destino"><br>
            Tipo de envío:
            <select name="tipo_envio">
                <option value="Normal">Normal</option>
                <option value="Extra">Extra</option>
                <option value="Urgente">Urgente</option>
            </select><br>
            Peso en Kilogramos: <input type="number" name="peso_kg" min="0" step="0.1"><br>
            <input type="submit" value="Adicionar envio">
            <a href="?reset=1">Reiniciar Sesión</a>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $codigoEnvio = $_POST["codigo_envio"];
            $ciudadDestino = $_POST["ciudad_destino"];
            $tipoEnvio = $_POST["tipo_envio"];
            $pesoKg = $_POST["peso_kg"];

            $mercancia = new Mercancia($codigoEnvio, $ciudadDestino, $tipoEnvio, $pesoKg);

            $transporte->agregarMercancia($mercancia);
            ?>
            <h2>Listado de envios</h2>
            <table border="1">
                <tr>
                    <th>Código</th>
                    <th>Destino</th>
                    <th>Tipo</th>
                    <th>Peso (kg)</th>
                    <th>Descripción</th>
                    <th>Valor</th>
                </tr>
                <?php
                $mercancia = $transporte->obtenerMercancia();
                foreach ($mercancia as $mercancias) {
                    echo "<tr>";
                    echo "<td>" . $mercancias->getCodigoEnvio() . "</td>";
                    echo "<td>" . $mercancias->getCiudadDestino() . "</td>";
                    echo "<td>" . $mercancias->getTipoEnvio() . "</td>";
                    echo "<td>" . $mercancias->getPesoKg() . "</td>";
                    echo "<td>" . $mercancias->calcularDescripcion() . "</td>";
                    echo "<td>" . $mercancias->calcularValor() . "</td>";
                    echo "</tr>";
                }
                ?>
            </table><br>

            <?php
            $totalesMercancia = $transporte->calcularTotalesMercancia();
            echo "Valor envíos Normales: " . $totalesMercancia['valorNormales'] . "<br>";
            echo "Valor envíos Extras: " . $totalesMercancia['valorExtras'] . "<br>";
            echo "Valor envíos Urgentes: " . $totalesMercancia['valorUrgentes'] . "<br>";
            echo "Cantidad de envíos (Extras - Urgentes): " . $totalesMercancia['cantidadExtrasUrgentes'];
        }
        if (isset($_GET['reset'])) {
            session_destroy();
            header("Location: index.php");
            exit();
        }
        ?>

    </body>
</html>
