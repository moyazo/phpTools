<?php
include_once('Dulce.php');
// include_once('Bollo.php');
// include_once('Chocolate.php');
// include_once('Tarta.php');
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

                foreach ($this->clientes as $cliente) {
                       if($cliente->getNumero() != $numeroCliente){
                                echo 'El cliente o número de dulce no se encuentra en 
                                 nuestra pastelería porfavor incluyalo';
                       }else{
                                foreach ($this->productos as $producto) {
                                        if($producto->getNumero() == $numeroDulce){
                                                $cliente->comprar($producto);
                                                echo 'El cliente ' . $cliente->getName() . ' ha comprado ' . $producto->getNombre() . '<br>';
                                                return;
                                        }
                                }
                       }
                }
        }
}

?>