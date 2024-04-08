<?php

if ($_POST['enviar']) {
    if ($_POST['clave'] == $_POST['oculto']) {
        echo "<h3>";
        echo "<fieldset> <legend> Informacion recibida </legend>";
        echo "Bienvenido al sistema ........ Usuario y clave correcta </br>";
        if ($_POST['area']) {
            echo "<br/> Sus comentarios son: <br>" . $_POST['area'];
        } else {
            echo "<br> No realizo comentarios";
        }
        echo "<h3>";
    } else {

        echo "</br> Contraseña incorrecta ......";
    }
    echo "</fieldset>";
    echo "<h4> <a href='ControlesFormulario.php'> Volver al formulario </a></h4>";
}
?>