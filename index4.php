<?php 
include './Cliente.php';
include './Tarta.php';


$dulce1 = new Tarta(['Chocolate con leche','Chocolate blanco','Chocolate negro'],3,
3, 4, 'Tres chocolates',4,5.5);

$cliente1 = new Cliente('Elrufo', 1, 0);

echo 'RESUMEN DE DULCES<br>';
$dulce1->muestraResumen();
$cliente1->muestraResumen();

?>