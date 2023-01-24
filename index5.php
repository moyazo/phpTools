<?php

include_once('Pasteleria.php');
include_once('Cliente.php');
include_once('Bollo.php');
include_once('Chocolate.php');
include_once('Tarta.php');
include_once('Dulce.php');

// INSTANCIAMOS CLIENTES
$cliente1 = new Cliente('Mario', 1, 0);
$cliente2 = new Cliente('Jose', 2, 0);
$cliente3 = new Cliente('Javi', 3, 0);
// INSTANCIAMOS PRODUCTOS
$producto1 = new Bollo('Chocolate','Brownie',1,5.45);
$producto2 = new Tarta(['Chocolate','Gallete','Chocolate'],3,3,5,'Galleta de chocolate',2,7.5);
$producto3 = new Chocolate('Si',100,'Tableta de chocolate con leche',3,3.27);

$pasteleria = new Pasteleria('RufeCake', [], 0, [], 0);

$pasteleria->incluirCliente($cliente1);
$pasteleria->incluirCliente($cliente2);
$pasteleria->incluirCliente($cliente3);
echo $pasteleria->listarClientes();

$pasteleria->incluirBollo($producto1);
$pasteleria->incluirTarta($producto2);
$pasteleria->incluirChocolate($producto3);
echo $pasteleria->listarProductos();


$pasteleria->comprarClienteProducto(1,1);
$pasteleria->comprarClienteProducto(2,2);
$pasteleria->comprarClienteProducto(5,5);
// echo $cliente1->dulcesComprados[0];

?>