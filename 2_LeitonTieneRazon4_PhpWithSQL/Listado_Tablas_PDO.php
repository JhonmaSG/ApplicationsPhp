<?php
try {
    echo "<h3 style='text-align: center'>Tablas base de datos Comercial</h3>";
    require("ConexionBDPDO_1.php");
    
    $mostrar_tablas = "SHOW TABLES";
    $resultado = $conexion->prepare($mostrar_tablas);
    $resultado->execute();
    $tablas=$resultado->fetchAll(PDO::FETCH_NUM);
    
    foreach($tablas as $tabla){
        $obtener_tabla = "DESCRIBE ".$tabla[0];
        $describe_tabla = $conexion->prepare($obtener_tabla);
        $describe_tabla->execute();
        $campos_tabla = $describe_tabla->fetchAll(PDO::FETCH_ASSOC);
        echo '<table style="border:1px solid; margin:0 auto">';
        echo '<tr><th colspan=4 style="border:1px solid;">Tabla:'.$tabla[0].'</th></tr>';
        echo '<tr><th>CAMPO</th><th>TIPO</th><th>NULO</th><th>LLAVE</th></tr>';
        
        foreach($campos_tabla as $campos){
            echo '<tr>';
            echo '<td style="border:1px solid; width: 80px">'.$campos['Field'].'</td>';
            echo '<td style="border:1px solid; width: 80px">'.$campos['Type'].'</td>';
            echo '<td style="border:1px solid; width: 80px">'.$campos['Null'].'</td>';
            echo '<td style="border:1px solid; width: 80px">'.$campos['Key'].'</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    
} catch (PDOException $e) {
    echo "Error al listar alguna de las tablas<br/>".$e->getMessage();
}
?>

