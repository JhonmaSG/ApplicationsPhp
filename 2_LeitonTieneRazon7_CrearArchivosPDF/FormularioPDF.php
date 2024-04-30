<!doctype html> 
<html> 
    <head> 
        <title>Formulario para generar un archivo PDF</title> 
        <meta charset="utf-8" /> 
    </head> 
    <body> 
        <h3 align=center>REGISTRO DE INFORMACIÓN</h3> 
        <form name="formulario" action="CrearPDF.php" method="post">  
            <table align="center" border=1> 
                <tr> 
                    <td align="left" width="80">Dígite sus Nombres: </td> 
                    <td align="left"><input type="text" size="50" autofocus required name="nombres"></td> 
                    <td align="left" width="30">Género:</td>     
                    <td>Hombre: <input type=radio name="genero" value="M">    
                        Mujer: <input type=radio name="genero" value="F">    
                    </td> 
                </tr>   
                <tr><td align="left" width="150">Que aficiones le gustan:</td>  
                    <td>     
                        <input type="checkbox" name="aficion[]" value="Cine">Cine<br> 
                        <input type="checkbox" name="aficion[]" value="Futbol">Futbol<br> 
                        <input type="checkbox" name="aficion[]" value="VideoJuegos">VideoJuegos<br> 
                        <input type="checkbox" name="aficion[]" value="Lectura">Lectura<br> 
                        <input type="checkbox" name="aficion[]" value="Ninguna">Ninguna<br> 
                    </td> 
                    <td>Nivel de estudios:</td><td> 
                        <select name="estudios" size="1"> 
                            <option selected>Primaria</option> 
                            <option >Bachillerato</option> 
                            <option >Pregrado</option> 
                            <option >Posgrado</option> 
                        </select> 
                    </td></tr> 
                <tr><td>Idioma secundario que domine:</td> 
                    <td><input type="text" name="idioma" list="idiomas"> 
                        <datalist id="idiomas"> 
                            <option value="Ingles"> 
                            <option value="Frances"> 
                            <option value="Japones"> 
                            <option value="Italiano"> 
                            <option value="Ninguno"> 
                        </datalist> 
                    </td> 
                    <td>Nivel de Ingles (Min=1, Max=10)</td> 
                    <td><input type="number" name="numero" min="1" max="10" value="1" /> 
                    </td></tr>  
                <tr> 
                    <td>Fecha de nacimiento:</td> 
                    <td><input type="date" name="fecha" /></td> 
                    <td>Ciudad de nacimiento:</td> 
                    <td><input type="text" name="ciudad" /></td> 
                </tr> 
                <tr><td >Escriba sus comentarios:</td> 
                    <td colspan="3"> 
                        <textarea rows="4" cols="100" name="comentarios"></textarea> 
                    </td></tr> 
                <tr><td colspan="4" align="center"> 
                        <input type="submit" name="enviar" value="Enviar"> 
                        <input type="reset" name="cancelar" value="Reestablecer"> 
                    </td></tr> 
            </table> 
        </form>    
    </body> 
</html> 