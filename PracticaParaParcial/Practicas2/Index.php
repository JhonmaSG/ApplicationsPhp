<?php
require_once 'Transportadora.php';
require_once 'Envio.php';

session_start();

if (!isset($_SESSION['transportadora'])) {
    $_SESSION['transportadora'] = new Transportadora();
}

$transportadora = $_SESSION['transportadora'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigoEnvio = $_POST["codigo_envio"];
    $ciudadDestino = $_POST["ciudad_destino"];
    $tipoEnvio = $_POST["tipo_envio"];
    $tipo = $_POST["tipo"];
    $pesoKg = $_POST["peso_kg"];

    $envio = new Envio($codigoEnvio, $ciudadDestino, $tipoEnvio, $pesoKg, $tipo);

    $transportadora->agregarEnvio($envio);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Envíos de Transportadora</title>
    </head>
    <body>
        <h2>Envíos de Transportadora</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Código de envío: <input type="text" name="codigo_envio"><br><br>
            Ciudad de destino: <input type="text" name="ciudad_destino"><br><br>
            Tipo de envío:
            <select name="tipo_envio">
                <option value="Normal">Normal</option>
                <option value="Extra">Extra</option>
                <option value="Urgente">Urgente</option>
            </select><br><br>
            Objeto:
            <select name="tipo">
                <option value="Caja">Caja</option>
                <option value="Paquete">Paquete</option>
                <option value="Sobre">Sobre</option>
            </select><br><br>
            Peso (kg): <input type="number" name="peso_kg"><br><br>
            <input type="submit" value="Agregar envío">
        </form><br>
        <a href="?reset=1">Reiniciar</a>

        <h2>Envíos actuales</h2>
        <table border="1">
            <tr>
                <th>Código de envío</th>
                <th>Ciudad de destino</th>
                <th>Tipo de envío</th>
                <th>Peso (kg)</th>
                <th>Descripción</th>
                <th>Valor</th>
            </tr>
            <?php
            $envios = $transportadora->obtenerEnvios();
            foreach ($envios as $envio) {
                echo "<tr>";
                echo "<td>" . $envio->getCodigoEnvio() . "</td>";
                echo "<td>" . $envio->getCiudadDestino() . "</td>";
                echo "<td>" . $envio->getTipoEnvio() . "</td>";
                echo "<td>" . $envio->getPesoKg() . "</td>";
                echo "<td>" . $envio->getTipo() . "</td>";
                echo "<td>" . $envio->calcularValor() . "</td>";
                echo "</tr>";
            }
            ?>
        </table>

        <h2>Totales</h2>
        <?php
        $totalesEnvios = $transportadora->calcularTotalesEnvios();
        echo "Valor de envíos Normales: " . $totalesEnvios['valorNormales'] . "<br>";
        echo "Valor de envíos Extras: " . $totalesEnvios['valorExtras'] . "<br>";
        echo "Valor de envíos Urgentes: " . $totalesEnvios['valorUrgentes'] . "<br>";
        echo "Cantidad de envíos Extras - Urgentes: " . $totalesEnvios['cantidadExtrasUrgentes'];
        
        if (isset($_GET['reset'])) {
            session_destroy();
            header("Location: index.php");
            exit();
        }
        ?>
    </body>
</html>
