<?php
require_once 'Hotel.php';
require_once 'Reserva.php';

session_start();

if (!isset($_SESSION['hotel'])) {
    $_SESSION['hotel'] = new Hotel();
}

$hotel = $_SESSION['hotel'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["limpiar"]) && $_POST["limpiar"] === "true") {
        // Limpiar las reservas guardadas en la sesión
        unset($_SESSION['hotel']);
        // Redirigir a la página actual para evitar el reenvío del formulario
        header("Location: {$_SERVER['PHP_SELF']}");
        exit;
    } else {
        $codigo = $_POST["codigo"];
        $nombreHuesped = $_POST["nombre"];
        $cantidadPersonas = $_POST["cantidad_personas"];
        $diasHospedaje = $_POST["dias_hospedaje"];

        $reserva = new Reserva($codigo, $nombreHuesped, $cantidadPersonas, $diasHospedaje);

        $hotel->agregarReserva($reserva);
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Reservas de Hotel</title>
    </head>
    <body>
        <h2>Reservas de Hotel</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Código de reserva: <input type="text" name="codigo"><br><br>
            Nombre del huésped principal: <input type="text" name="nombre"><br><br>
            Cantidad de personas a hospedarse: <input type="number" name="cantidad_personas"><br><br>
            Días de hospedaje: <input type="number" name="dias_hospedaje"><br><br>
            <input type="submit" value="Agregar reserva">
        </form>
        <a href="?reset=1">Reiniciar</a>

        <h2>Reservas actuales</h2>
        <table border="1">
            <tr>
                <th>Código de reserva</th>
                <th>Nombre del huésped</th>
                <th>Cantidad de personas</th>
                <th>Días de hospedaje</th>
                <th>Tipo de habitación</th>
                <th>Neto a pagar</th>
            </tr>
            <?php
            $reservas = $hotel->obtenerReservas();
            foreach ($reservas as $reserva) {
                echo "<tr>";
                echo "<td>" . $reserva->getCodigo() . "</td>";
                echo "<td>" . $reserva->getNombreHuesped() . "</td>";
                echo "<td>" . $reserva->getCantidadPersonas() . "</td>";
                echo "<td>" . $reserva->getDiasHospedaje() . "</td>";
                echo "<td>" . $reserva->getTipoHabitacion() . "</td>";
                echo "<td>" . $reserva->calcularCosto() . "</td>";
                echo "</tr>";
            }
            ?>
        </table>

        <h2>Totales</h2>
        <?php
        $totales = $hotel->calcularTotales();
        
        echo '<label for="totalEstandar">Total de habitaciones estándar:</label>';
        echo '<input type="number" value="' . $totales['totalEstandar'] . '"><br>';

        echo '<label for="totalSenior">Total de habitaciones senior:</label>';
        echo '<input type="number" value="' . $totales['totalSenior'] . '"><br>';

        echo '<label for="totalKing">Total de habitaciones king:</label>';
        echo '<input type="number" value="' . $totales['totalKing'] . '"><br>';

        echo '<label for="totalPersonas">Total de personas hospedadas (senior + king):</label>';
        echo '<input type="number" value="' . $totales['totalPersonas'] . '">';

        if (isset($_GET['reset'])) {
            session_destroy();
            header("Location: index.php");
            exit();
        }
        ?>
    </body>
</html>
