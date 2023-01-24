<?php

include_once('Dulce.php');


class Tarta extends Dulce{
    private $rellenos = [];
    private int $numPisos;
    private int $minNumComensales = 2;
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
            return "para mínimo ".$this->minNumComensales."(es) comensal";
        }else if ($this->minNumComensales > 1 && $this->maxNumComensales > 1){
            return " para " .  $this->minNumComensales . " comensal(es) o " . $this->maxNumComensales ." comensales";
        }
    }
    

    public function muestraResumen()
    {
        parent::muestraResumen();
        echo '<br>Es un tarta' . $this->muestraComensalesPosibles() .'con relleno de <br>';

        foreach ($this->rellenos as $relleno) {
            echo '<br>&nbsp&nbsp&nbsp- '. $relleno . '<br>';
        }
    } 
}

?>