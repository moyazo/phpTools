<?php

include 'Dulce.php';

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
                if(in_array($producto,$this->productos)){
                        echo 'El producto ' . $producto->nombre . 'ya estaba incluido';
                }else{
                        array_push($this->productos, $producto->numero);
                        echo 'El producto ' . $producto->nombre . 'ha sido incluido';
                }
        }
        public function incluirTarta(Dulce $tarta){
                $this->incluirProducto($tarta);
        }

        public function incluirBollo(Dulce $bollo){
                $this->incluirProducto($bollo);
        }

        public function incluirChocolate(Dulce $chocolate){
                $this->incluirProducto($chocolate);
        }
        
        public function incluirCliente(Cliente $cliente){
                if(in_array($cliente,$this->clientes)){
                        echo 'El cliente ' . $cliente . 'ya estaba incluido';
                }else{
                        array_push($this->clientes, $cliente);
                        echo 'El cliente ' . $cliente . 'ha sido incluido';
                }
        }
        public function listarProductos(){
                foreach ($this->productos as $producto) {
                        print('<ul>');
                        echo "<li>$producto</li>";
                        print('</ul>');
                }
        }
        public function listarClientes(){
                foreach ($this->clientes as $cliente) {
                        print('<ul>');
                        echo "<li>$cliente</li>";
                        print('</ul>');
                }
        }

        public function comprarClienteProducto($numeroCliente,$numeroDulce){
                if(!in_array($this->clientes,$numeroCliente) || !in_array($this->productos,$numeroDulce))
                {
                        echo 'El cliente o número de dulce no se encuentra en 
                        nuestra pastelería porfavor incluyalo';
                }else{
                        foreach ($this->clientes as $cliente) {
                                if($cliente->numero == $numeroCliente){
                                        $cliente->numPedidosEfectuados++;
                                       foreach ($this->productos as $producto) {
                                                if($producto->numero == $numeroDulce){
                                                        array_push($cliente->dulcesComprados, $producto);
                                                }
                                       }
                                        break;
                                }
                        }
                }
        }
}

?>