<?php
/**
 * *SUMMARY*, 'Pasteleria.php' CODE.
 * 
 * *DESCRIPTION*, WE WILL IMPLEMENT ALL THE METHODS THAT INVOLED ALL OUR CLASSSES. IT WILL CONTROL WITH MONOLOG AND EXCEPTIONS.
 */
use Monolog\Logger;
use utils\LogFactory;
include_once('Dulce.php');
include_once('../utils/pasteleriaException.php');
include_once('../utils/DulceNoEncontrado.php.php');
include_once('../utils/DulceNoComprado.php');
include_once('../utils/ClienteNoEncontrado.php');
include_once('../utils/LogFactory.php');

/**
 * Pasteleria
 */
class Pasteleria
{
        private string $nombre;
        private $productos = [];
        private int $numProductos;
        private $clientes = [];
        private int $numClientes;
        private Logger $log;        
        /**
         * __construct
         *
         * @return void
         */
        function __construct(
                string $nombre,
        )
        {
                $this->nombre = $nombre;
                $this->log = LogFactory::getLogger();
        }
        
        
        /**
         * getNombre
         *
         * @return void
         */
        public function getNombre()
        {
                $this->nombre;
        }
                
        /**
         * getProductos
         *
         * @return void
         */
        public function getProductos()
        {
                $this->productos;
        }
                
        /**
         * getNumProductos
         *
         * @return void
         */
        public function getNumProductos()
        {
                $this->numProductos;
        }        
        /**
         * getNumClientes
         *
         * @return void
         */
        public function getNumClientes()
        {
                $this->numClientes;
        }
        
        /**
         * incluirProducto
         *
         * @param  mixed $producto
         * @return void
         */
        private function incluirProducto(Dulce $producto)
        {
                // echo in_array($producto, $this->productos);
                if (in_array($producto, $this->productos)) {
                        $this->log->error("EL CLIENTE NO HA SIDO ENCONTRADO");
                        echo 'El producto ' . $producto->nombre . ' ya estaba incluido<br>';
                } else {
                        array_push($this->productos, $producto);
                        $this->log->info('El producto ' . $producto->nombre . ' ha sido incluido<br>');
                        echo 'El producto ' . $producto->nombre . ' ha sido incluido<br>';
                }
        }        
        /**
         * incluirTarta
         *
         * @param  mixed $tarta
         * @return void
         */
        public function incluirTarta(Tarta $tarta)
        {
                $this->incluirProducto($tarta);
        }
        
        /**
         * incluirBollo
         *
         * @param  mixed $bollo
         * @return void
         */
        public function incluirBollo(Bollo $bollo)
        {
                $this->incluirProducto($bollo);
        }
        
        /**
         * incluirChocolate
         *
         * @param  mixed $chocolate
         * @return void
         */
        public function incluirChocolate(Chocolate $chocolate)
        {
                $this->incluirProducto($chocolate);
        }
        
        /**
         * incluirCliente
         *
         * @param  mixed $cliente
         * @return void
         */
        public function incluirCliente(Cliente $cliente)
        {
                if (in_array($cliente, $this->clientes)) {
                        $this->log->info('El cliente ' . $cliente->getName() . ' ya estaba incluido<br>');
                        echo 'El cliente ' . $cliente->getName() . ' ya estaba incluido<br>';
                } else {
                        array_push($this->clientes, $cliente);
                        $this->log->info('El cliente ' . $cliente->getName() . ' ha sido incluido<br>');
                        echo 'El cliente ' . $cliente->getName() . ' ha sido incluido<br>';
                }
        }        
        /**
         * listarProductos
         *
         * @return void
         */
        public function listarProductos()
        {
                foreach ($this->productos as $producto) {
                        print('<ul>');
                        echo '<li>Producto número' . $producto->getNumero() . '</li>';
                        print('</ul>');
                }
        }        
        /**
         * listarClientes
         *
         * @return void
         */
        public function listarClientes()
        {
                foreach ($this->clientes as $cliente) {
                        print('<ul>');
                        echo '<li>Cliente número' . $cliente->getNumero() . '</li>';
                        print('</ul>');
                }
        }
        
        /**
         * comprarClienteProducto
         *
         * @param  mixed $numeroCliente
         * @param  mixed $numeroDulce
         * @return void
         */
        public function comprarClienteProducto($numeroCliente, $numeroDulce)
        {

                $clienteC = null;
                $productoC = null;

                foreach ($this->clientes as $cliente) {
                        if ($cliente->getNumero() == $numeroCliente)
                                $clienteC = $cliente;
                }

                if ($clienteC == null) {
                        $this->log->error("EL CLIENTE NO HA SIDO ENCONTRADO");
                        throw new ClienteNoEncontrado('EL CLIENTE NO HA SIDO ENCONTRADO');
                } else {
                        foreach ($this->productos as $producto) {
                                if ($producto->getNumero() == $numeroDulce)
                                        $productoC = $producto;
                        }
                        if ($productoC == null) {
                                $this->log->error("EL PRODUCTO NO HA SIDO ENCONTRADO");
                                throw new DulceNoEncontrado('EL PRODUCTO NO HA SIDO ENCONTRADO');
                        } else
                                $clienteC->comprar($productoC);
                }

        }
} 

?>