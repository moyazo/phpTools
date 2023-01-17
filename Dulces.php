<?php 

class Dulce { // Parent class 
    public string $nombre;
    protected int $numero;
    private float $precio;

    const IVA = 0.21;
    function __construct(
        string $nombre,
        int $numero,
        float $precio){

        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->precio = $precio;
 
    }

    public function muestraResumen(){
        echo 'Dulce con nombre ' . $this->nombre .
            '/' . $this->numero .
            ' vale ' . $this->precio . '€';

    }
}

?>