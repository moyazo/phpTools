<?php

include './Dulces.php';

class Tarta extends Dulce{
    private $rellenos = [];
    private int $numPisos;
    private int $minNumComensales;
    private int $maxNumComensales;
    function __construct(
        array $rellenos,
        int $numPisos,
        int $minNumComensales,
        int $maxNumComensales,
        string $nombre,
        int $numero,
        float $precio){

        $this->rellenos = $rellenos;
        $this->numPisos = $numPisos;
        $this->minNumComensales = $minNumComensales;
        $this->maxNumComensales = $maxNumComensales;
        parent::__construct($nombre, $numero, $precio);
 
    } 

    public function muestraComensalesPosibles(){
        if($this->minNumComensales == 1 && $this->maxNumComensales == 1){
            return "para ".$this->minNumComensales." comensal";
        }else if($this->minNumComensales == 1 && $this->maxNumComensales > 1){
            return "para " .  $this->maxNumComensales . " comensales";
        }else if ($this->minNumComensales > 1 && $this->maxNumComensales > 1){
            return "de " .  $this->minNumComensales . " comensales a " . $this->maxNumComensales ." comensales";
        }
    }

    public function muestraResumen()
    {
        parent::muestraResumen();
        echo 'Es un tarta' . $this->muestraComensalesPosibles();
    } 
}

?>