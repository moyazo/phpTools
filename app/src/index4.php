<?php 
require '../vendor/autoload.php';
include_once('Cliente.php');
include_once('Tarta.php');


$dulce1 = new Tarta(['Chocolate con leche','Chocolate blanco','Chocolate negro'],3,
3, 4, 'Tres chocolates',4,5.5);

$cliente1 = new Cliente('Elrufo', 1, 0);

echo 'RESUMEN DE DULCES<br>';
$dulce1->muestraResumen();
$cliente1->muestraResumen();

?>