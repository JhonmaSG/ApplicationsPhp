<!doctype html>
<!-- Diseñar una clase llamada Instrumento, con un método llamado tocar.
Se deben implementar tres clases (Guitarra, Saxofon, Violin).
Se debe poder seleccionar por medio de botón el instrumento a tocar.
Al pulsar el respectivo botón se deberá imprimir el mensaje 
“Esta tocando el instrumento XXXX”.   -->
<!doctype html>
<html>
    <head>
        <title>Ejercicio #3 - Instrumentos</title>
    </head>
    <body>

        <form method="POST">
            <fieldset>
                <legend>INSTRUMENTOS</legend>
                <input type="submit" name="instrumento" value="Guitarra">
                <input type="submit" name="instrumento" value="Saxofon">
                <input type="submit" name="instrumento" value="Violin">
            </fieldset>
        </form>

        <?php
        include("Instrumento.php");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['instrumento'])) {
                $instrumento = $_POST['instrumento'];
                $objetoInstrumento = null;
                switch ($instrumento) {
                    case 'Guitarra':
                        $objetoInstrumento = new Guitarra();
                        break;
                    case 'Saxofon':
                        $objetoInstrumento = new Saxofon();
                        break;
                    case 'Violin':
                        $objetoInstrumento = new Violin();
                        break;
                }
                if ($objetoInstrumento !== null) {
                    echo "<p>" . $objetoInstrumento->tocar() . "</p>";
                }
            }
        }
        ?>

    </body>
</html>