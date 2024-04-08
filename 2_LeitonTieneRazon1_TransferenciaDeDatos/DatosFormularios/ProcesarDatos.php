<?php

echo "<fieldset><legend>Informacion recibida</legend>";
echo "Bienvenido: <b/>$_GET[nombres]</b> a los formularios con php <br/>";
echo "Fecha de nacimiento: <b>" . $fecha = $_GET['fecha'] . "</b><br/>";
echo "Nivel de ingles de 1 a 10 es: <b>$_GET[ingles]</b><br/>";
echo "Contraseña asignada: <b>" . $_GET['clave'] . "</b><br/>";
echo "</fieldset>";
echo "<h4> <a href='DatosFormulario.php'> Volver al formulario </a></h4>";
?>

