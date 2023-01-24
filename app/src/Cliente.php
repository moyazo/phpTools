<?php
include_once('Dulce.php');
class Cliente{
    public string $name;
    private int $numero;
    private $dulcesComprados = [];
    private int $numDulcesComprados = 0;
    private int $numPedidosEfectuados = 0;


    function __construct(
        string $nombre,
        int $numero,
        int $numPedidosEfectuados
    )
    {
        $this->name = $nombre;
        $this->numero = $numero;
        $this->numPedidosEfectuados = $numPedidosEfectuados;
    }

        public function getName()
        {
            return $this->name;
        }

        public function setName($name)
        {
            $this->name = $name;

            return $this;
        }
        
        public function getDulcesComprados()
        {
            return $this->dulcesComprados;
        }
        public function getNumero()
        {
                return $this->numero;
        }

        public function setNumero($numero)
        {
                $this->numero = $numero;

                return $this;
        }

        public function getNumPedidosEfectuados()
        {
                return $this->numPedidosEfectuados;
        }

        public function setNumPedidosEfectuados($numPedidosEfectuados)
        {
                $this->numPedidosEfectuados = $numPedidosEfectuados;

                return $this;
        }
        public function comprar(Dulce $d){
            array_push($this->dulcesComprados, $d);
            if($this->listaDeDulces($d)){
                echo $this->name . ' ha comprado ' . $d->nombre.'<br>';
                $this->numPedidosEfectuados++;
            }else{
                echo $d->nombre . ' no existe compre otro<br>';
            }
        }

        function valorar(Dulce $d,String $c){
            if($this->listaDeDulces($d)){
                echo $d->nombre . ' ya lo habías comprado';
            }else{
                echo $d->nombre . ' no lo habías comprado';
            }
        }
        public function listaDeDulces(Dulce $d){
            if(in_array($d, $this->dulcesComprados)){
                return true;
            }else{
                return false;
            }
        }

        public function listarPedidos(){
            echo $this->name . ' efecctado ' . $this->getNumPedidosEfectuados();
        }

        public function muestraResumen()
        {
            echo '<br>El cliente ' . $this->name . ' ha hecho ' .
                $this->getNumPedidosEfectuados() . ' pedidos.';
        } 

    
}

?>