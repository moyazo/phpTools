<?php
include_once('Dulce.php');
include_once('../utils/pasteleriaException.php');
include_once('../utils/DulceNoEncontrado.php.php');
include_once('../utils/DulceNoComprado.php');
include_once('../utils/ClienteNoEncontrado.php');
class Pasteleria{
    private string $nombre;
    private $productos = [];
    private int $numProductos;
    private $clientes = [];
    private int $numClientes;

    function __construct(
        string $nombre,
        array $productos,
        int $numProductos,
        array $clientes,
        int $numClientes,
    )
    {
        $this->nombre = $nombre;
        $this->productos = $productos;
        $this->numProductos = $numProductos;
        $this->clientes = $clientes;
        $this->numClientes = $numClientes;
    }

        public function getNombre()
        {
                return $this->nombre;
        }
        public function getNumProductos()
        {
                return $this->numProductos;
        }
        public function getNumClientes()
        {
            return $this->numClientes;
        }

        private function incluirProducto(Dulce $producto){
                // echo in_array($producto, $this->productos);
                if(in_array($producto,$this->productos)){
                        echo 'El producto ' . $producto->nombre . ' ya estaba incluido<br>';
                }else{
                        array_push($this->productos, $producto);
                        echo 'El producto ' . $producto->nombre . ' ha sido incluido<br>';
                }
        }
        public function incluirTarta(Tarta $tarta){
                $this->incluirProducto($tarta);
        }

        public function incluirBollo(Bollo $bollo){
                $this->incluirProducto($bollo);
        }

        public function incluirChocolate(Chocolate $chocolate){
                $this->incluirProducto($chocolate);
        }
        
        public function incluirCliente(Cliente $cliente){
                if(in_array($cliente,$this->clientes)){
                        echo 'El cliente ' . $cliente->getName() . ' ya estaba incluido<br>';
                }else{
                        array_push($this->clientes, $cliente);
                        echo 'El cliente ' . $cliente->getName() . ' ha sido incluido<br>';
                }
        }
        public function listarProductos(){
                foreach ($this->productos as $producto) {
                        print('<ul>');
                        echo '<li>Producto número'. $producto->getNumero() .'</li>';
                        print('</ul>');
                }
        }
        public function listarClientes(){
                foreach ($this->clientes as $cliente) {
                        print('<ul>');
                        echo '<li>Cliente número'. $cliente->getNumero() .'</li>';
                        print('</ul>');
                }
        }

        public function comprarClienteProducto($numeroCliente,$numeroDulce){

                $clienteC = null;
                $productoC = null;
        
                foreach ($this->clientes as $cliente) {
                    if($cliente->getNumero() == $numeroCliente)
                        $clienteC = $cliente;
                }
                
                if ($clienteC == null) 
                        throw new ClienteNoEncontrado('EL CLIENTE NO HA SIDO ENCONTRADO');
                 else {
                    foreach ($this->productos as $producto) {
                        if($producto->getNumero() == $numeroDulce)
                            $productoC = $producto;
                    }
                    if ($productoC == null) 
                        throw new DulceNoEncontrado('EL PRODUCTO NO HA SIDO ENCONTRADO');
                     else 
                        $clienteC->comprar($productoC);
                }
        
        }
}

?>