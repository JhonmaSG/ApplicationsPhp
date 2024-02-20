<!doctype html>

<html>
    <head>
        <title>Separar letras</title>
    </head>
    <body>
        <form method="post">
            Digite una oracion: <input type="text" name="oracion" size="50"/> <br><br>
            <input type="submit" name="enviar" value="Procesar"><br><br> 
            Letras de la oracion<br><br>
        </form>
        
        <?php 
        if (isset($_POST['enviar'])) {
            $cadena = $_POST['oracion'];
            f_generica($cadena);
            
        }
        
        function f_generica($cadena){
            $longitud= strlen($cadena);
            $letras= "";
            
        for($i=0 ; $i<$longitud; $i++){
            $letras = $letras.$cadena[$i]."\n";
        }
        echo "<textarea cols='30' rows='8' name='resultado'>".$letras."</textarea>";
        echo "<br>letras: ".$letras;
        }
        
        
        ?>
        
    </body>
</html>
