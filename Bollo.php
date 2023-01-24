<?php

include_once('Dulce.php');

class Bollo extends Dulce{
    private string $relleno;
    function __construct(
        string $relleno,
        string $nombre,
        int $numero,
        float $precio){

        $this->relleno = $relleno;
        parent::__construct($nombre, $numero, $precio);
 
    } 

        public function getNombre()
        {
                return $this->nombre;
        }

    public function muestraResumen(){
        parent::muestraResumen();
         if($this->relleno == 'Sin relleno'){
            echo '<br><br> Es un bollo sin relleno';
         }else{
            echo '<br><br> Es un bollo relleno de ' . $this->relleno;
         }
    }

        
}

?>