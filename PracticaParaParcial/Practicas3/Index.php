<?php
require_once 'CentroEducativo.php';
require_once 'Estudiante.php';

session_start();

if (!isset($_SESSION['centro_educativo'])) {
    $_SESSION['centro_educativo'] = new CentroEducativo();
}

$centro_educativo = $_SESSION['centro_educativo'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST["codigo"];
    $nombre = $_POST["nombre"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    $estudiante = new Estudiante($codigo, $nombre, $nota1, $nota2, $nota3);

    $centro_educativo->agregarEstudiante($estudiante);
}

$estudiantes = $centro_educativo->obtenerEstudiantes();
$estadisticas = $centro_educativo->calcularEstadisticas();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Notas de Estudiantes - Centro Educativo Geniecitos</title>
    </head>
    <body>
        <h2>Ingreso de Notas de Estudiantes</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Código del Estudiante: <input type="text" name="codigo"><br><br>
            Nombre del Estudiante: <input type="text" name="nombre"><br><br>
            Nota 1 (30%): <input type="number" name="nota1" min="0" max="100"><br><br>
            Nota 2 (25%): <input type="number" name="nota2" min="0" max="100"><br><br>
            Nota 3 (45%): <input type="number" name="nota3" min="0" max="100"><br><br>
            <input type="submit" value="Agregar Nota">
        </form>
        <a href="?reset=1">Reiniciar</a>
        <h2>Notas de Estudiantes</h2>
        <table border="1">
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>30%</th>
                <th>25%</th>
                <th>45%</th>
                <th>100%</th>
            </tr>
            <?php
            foreach ($estudiantes as $estudiante) {
                echo "<tr>";
                echo "<td>" . $estudiante->getCodigo() . "</td>";
                echo "<td>" . $estudiante->getNombre() . "</td>";
                echo "<td>" . $estudiante->getNota1() . "</td>";
                echo "<td>" . $estudiante->getNota2() . "</td>";
                echo "<td>" . $estudiante->getNota3() . "</td>";
                echo "<td>" . $estudiante->calcularNotaFinal() . "</td>";
                echo "</tr>";
            }
            ?>
        </table>

        <h2>Estadísticas</h2>
        <p>Cantidad de estudiantes con nota final menor que 30:
            <?php echo '<input type="number" value="'.$estadisticas['menor30'].'">' ?></p>
        <p>Cantidad de estudiantes con nota final entre 30 y 80:
            <?php echo '<input type="number" value="'.$estadisticas['entre30y80'].'">' ?></p>
        <p>Cantidad de estudiantes con nota final mayor que 80:
            <?php echo '<input type="number" value="'.$estadisticas['mayor80'].'">' ?></p>
        <p>Cantidad de estudiantes con nota final entre 25 y 60:
            <?php echo '<input type="number" value="'.$estadisticas['entre25y60'].'">' ?></p>
        <p>Promedio de nota final del curso:
            <?php echo '<input type="number" value="'.$estadisticas['promedioNotaFinal'].'">' ?></p>
        <?php
        if (isset($_GET['reset'])) {
            session_destroy();
            header("Location: index.php");
            exit();
        }
        ?>
    </body>
</html>
