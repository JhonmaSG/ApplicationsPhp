<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    
    <body style="background-image: linear-gradient(rgba(0, 0, 255, 0.5), rgba(255, 255, 0, 0.5)),url('../../media/examples/lizard.png');">
     
    <center>
        <h1>Inicio de sesion</h1>
        <fieldset>
        <form method="post">
            <table cellspacing="10" border=0>
                <tr>
                    <td>Usuario:</td><td><input type="text" name="usuario" autofocus required placeholder="Juan Lucas"></td>
                </tr>
                <tr>
                    <td>Clave:</td><td><input type="password" name="clave"  required placeholder="**************"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" class="boton" value="Login"></td>
                </tr>
            </table>
        </form>
            </fieldset>
    </center>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            session_start();
            $usuario = $_POST['usuario'];
            $clave = $_POST['clave'];
            if($usuario =="pepe" and $clave =='1234'){
                $_SESSION['usuario'] = $usuario;
                header("Location:../index.php");
            }else{
                session_destroy();
                echo "<center><h2 style='color: red'>Usuario y/o Clave Incorrectos</h2>";
            }
        }
        
    ?>
</body>
</html>
