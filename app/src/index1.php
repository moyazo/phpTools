<?php
require '../../vendor/autoload.php';
include_once('Tarta.php');

$dulce1 = new Tarta(['Nata/Queso','Galleta'],1,1,3,'Tarta de Queso', 1, 3.45);

$dulce1->muestraResumen();

?>

