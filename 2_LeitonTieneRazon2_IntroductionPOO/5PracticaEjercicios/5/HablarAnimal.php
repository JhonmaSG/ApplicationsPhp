<!doctype html>
<!-- Escribir una clase llamada Animal, con un método 
llamado hablar (). Se deben crear tres clases (Caballo, Pájaro, Gato), 
cada clase deberá retornar el mensaje 
“Este animal: ?????” (relincha, silva, maúlla).   -->
<html>
    <head>
        <title>Ejercicio 5 - Animales</title>
    </head>
    <body>

        <form method="POST">
            <fieldset>
                <legend>¿LOS ANIMALES HABLAN?</legend>
                <input type="submit" name="animal" value="Caballo">
                <input type="submit" name="animal" value="Pajaro">
                <input type="submit" name="animal" value="Gato">
            </fieldset>
        </form>

        <?php
        include("Animal.php");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['animal'])) {
                $Animal = $_POST['animal'];
                $objetoAnimal = null;
                switch ($Animal) {
                    case 'Caballo':
                        $objetoAnimal = new Caballo();
                        break;
                    case 'Pajaro':
                        $objetoAnimal = new Pajaro();
                        break;
                    case 'Gato':
                        $objetoAnimal = new Gato();
                        break;
                }
                if ($objetoAnimal !== null) {
                    echo "<p>" . $objetoAnimal->hablar() . "</p>";
                }
            }
        }
        ?>

    </body>
</html>