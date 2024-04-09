<?php
if(!isset($_SESSION))
    session_start ();
echo "<div style='height:7%'>";
echo "<div style='float: left'>";
echo "<ul>";
echo "<li><a href='Inicio.php' >Inicio</a></li>";
echo "<li><a href='Clientes.php' >Clientes</a></li>";
echo "<li><a href='Proveedores.php' >Proveedores</a></li>";
echo "<li><a href='Salir.php' >Salir</a></li>";
echo "</ul>";
echo '</div>';
echo '<div style="text-aling:right;float:right">';
echo "<b style='color: blue'> Welcome {$_SESSION['usuario']}</b>";
echo '</div>';
echo '</div>';