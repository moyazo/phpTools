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

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getNumero()
        {
            return $this->numero;
        }
    public function muestraResumen(){
        echo '<strong>NOMBRE</strong>: '. $this->nombre .'<br>';
        echo '<strong>NÚMERO</strong>: '. $this->numero .'<br>';
        echo '<strong>PRECIO</strong>: '. $this->precio .'<br>';
    } 
}

?>