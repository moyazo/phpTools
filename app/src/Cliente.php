<?php
include_once('Dulce.php');
/**
 * Cliente
 */
class Cliente{
    public string $name;
    private int $numero;
    private $dulcesComprados = [];
    private int $numDulcesComprados = 0;
    private int $numPedidosEfectuados = 0;
    /**
     * __construct
     *
     * @return void
     */
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
        /**
         * getName
         *
         * @return string
         */
        public function getName()
        {
            return $this->name;
        }
        
        /**
         * setName
         *
         * @param  mixed $name
         * @return Cliente
         */
        public function setName($name)
        {
            $this->name = $name;

            return $this;
        }
                
        /**
         * getDulcesComprados
         *
         * @return array
         */
        public function getDulcesComprados()
        {
            return $this->dulcesComprados;
        }        
        /**
         * getNumero
         *
         * @return int
         */
        public function getNumero()
        {
            return $this->numero;
        }
        
        /**
         * setNumero
         *
         * @param  mixed $numero
         * @return Cliente
         */
        public function setNumero($numero)
        {
                $this->numero = $numero;

                return $this;
        }
        
        /**
         * getNumPedidosEfectuados
         *
         * @return int
         */
        public function getNumPedidosEfectuados()
        {
                return $this->numPedidosEfectuados;
        }
        
        /**
         * setNumPedidosEfectuados
         *
         * @param  mixed $numPedidosEfectuados
         * @return Cliente
         */
        public function setNumPedidosEfectuados($numPedidosEfectuados)
        {
                $this->numPedidosEfectuados = $numPedidosEfectuados;

                return $this;
        }        
        /**
         * comprar
         *
         * @param  mixed $d
         * @return void
         */
        public function comprar(Dulce $d)
        {
            array_push($this->dulcesComprados, $d);
            if($this->listaDeDulces($d)){
                echo $this->name . ' ha comprado ' . $d->nombre.'<br>';
                $this->numPedidosEfectuados++;
            }else{
                echo $d->nombre . ' no existe compre otro<br>';
            }
        }
        
        /**
         * valorar
         *
         * @param  mixed $d
         * @param  mixed $c
         * @return void
         */
        function valorar(Dulce $d,String $c){
            if($this->listaDeDulces($d)){
                echo $d->nombre . ' ya lo habías comprado';
            }else{
                echo $d->nombre . ' no lo habías comprado';
            }
        }        
        /**
         * listaDeDulces
         *
         * @param  mixed $d
         * @return boolean
         */
        public function listaDeDulces(Dulce $d){
            if(in_array($d, $this->dulcesComprados)){
                return true;
            }else{
                return false;
            }
        }
        
        /**
         * listarPedidos
         *
         * @return void
         */
        public function listarPedidos(){
            echo $this->name . ' efecctado ' . $this->getNumPedidosEfectuados();
        }
        
        /**
         * muestraResumen
         *
         * @return void
         */
        public function muestraResumen()
        {
            echo '<br>El cliente ' . $this->name . ' ha hecho ' .
                $this->getNumPedidosEfectuados() . ' pedidos.';
        } 
}

?>