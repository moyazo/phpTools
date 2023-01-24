<?php
require '../../vendor/autoload.php';
include_once('Chocolate.php');

$dulce1 = new Chocolate('Si',3.5,'Cuña de chocolate', 3, 4.35);

echo 'RESUMEN DE DULCES<br>';
$dulce1->muestraResumen();

?>

