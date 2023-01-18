<?php 

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
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }
        public function getProductos()
        {
                return $this->productos;
        }
        public function setProductos($productos)
        {
                $this->productos = $productos;

                return $this;
        }
        public function getNumProductos()
        {
                return $this->numProductos;
        }
        public function setNumProductos($numProductos)
        {
                $this->numProductos = $numProductos;
                return $this;
        }
        public function getClientes()
        {
                return $this->clientes;
        }
        public function setClientes($clientes)
        {
                $this->clientes = $clientes;

                return $this;
        }
        public function getNumClientes()
        {
            return $this->numClientes;
        }
        public function setNumClientes($numClientes)
        {
                $this->numClientes = $numClientes;

                return $this;
        }
}

?>