<?php
require_once '../phplot-6.2.0/phplot.php';
$plot = new PHPlot(800, 600);
$datos = array(
    array('Manzana', 33),
    array('Banano', 54),
    array('Curuba', 78),
    array('Uva', 18),
    array('Melon', 29),
    array('Naranja', 63),
    array('Fresa', 77)
);
$plot->SetDataValues($datos);
$plot->SetDataColors('red');
$plot->SetTitle("Un gráfico simple utilizando PHPlot");
$plot->SetXTitle('Frutas');
$plot->SetYTitle('Cantidad');
$plot->DrawGraph();
?>