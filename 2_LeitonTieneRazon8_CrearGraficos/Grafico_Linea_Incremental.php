<?php

require_once '../phplot-6.2.0/phplot.php';
$datos = array(
    array('', 1800, 5), array('', 1810, 7), array('', 1820, 10),
    array('', 1830, 13), array('', 1840, 17), array('', 1850, 23),
    array('', 1860, 31), array('', 1870, 39), array('', 1880, 50),
    array('', 1890, 63), array('', 1900, 76), array('', 1910, 92),
    array('', 1920, 106), array('', 1930, 123), array('', 1940, 132),
    array('', 1950, 151), array('', 1960, 179), array('', 1970, 203),
    array('', 1980, 227), array('', 1990, 249), array('', 2000, 281),
);
$grafica = new PHPlot(800, 600);
$grafica->SetImageBorderType('plain');
$grafica->SetDataColors('red');
$grafica->SetPlotType('lines'); //el tipo de gráfica será de lineas
$grafica->SetDataType('data-data');
$grafica->SetDataValues($datos);
$grafica->SetTitle('Grafica de velocidades de 1800 a 2000');
$grafica->DrawGraph();
?>