<!doctype html>
<html>
    <head>
        <title>POO</title>
    </head>
    <body>

        <form method="post">
            <fieldset>
                <legend>Informacion</legend>
                Digite su Usuario: <input type="text" name="usuario" 
                                          autofocus placeholder="Digite su usuario" 
                                          required>
                <br/>
                
                Tipo de Usuario: <input type="text" list="tipousuario" 
                                        required name="tipo"><br/>
                <datalist id="tipousuario">
                    <option value="Administrador">
                    <option value="Gerente">
                    <option value="Empleado">
                    <option value="Visitante">
                </datalist>

                <input type="submit" name="enviar" value="Enviar"><br/>

            </fieldset>
        </form>

        <?php
        include("Usuario.php");
        if (isset($_POST['enviar'])) {
            $nombreUsuario = new Usuario();
            $tipoUsuario = new Usuario();
            $nombreUsuario -> set_nombreUsuario($_POST['usuario']);
            $tipoUsuario -> set_tipoUsuario($_POST['tipo']);
            
            echo "<h3> <fieldset><legend>Informacion recibida</legend>";
            echo $nombreUsuario -> get_nombreUsuario() . "<br/>";
            echo $tipoUsuario -> get_tipoUsuario() . "<br/>";
            echo "</fieldset> </h3>";
        }
        ?>

    </body>
</html>


