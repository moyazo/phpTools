<?php

include_once './Dulces.php';

class Chocolate extends Dulce{
    private string $cacao;
    private float $peso;
    function __construct(
        string $cacao,
        float $peso,
        string $nombre,
        int $numero,
        float $precio)
    {

        $this->cacao = $cacao;
        $this->peso = $peso;
        parent::__construct($nombre, $numero, $precio);
 
    }

    public function muestraResumen()
    {
        parent::muestraResumen();
        if($this->cacao == 'Si'){
            echo '<br> Es un dulce de chocolate con cacao que pesa ' . $this->peso .'g';
        }else{
            echo '<br> Es un dulce de chocolate sin cacao que pesa ' . $this->peso .'g';
        }
    }     
}

?>