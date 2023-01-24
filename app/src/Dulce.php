<?php
use Monolog\Logger;
use utils\LogFactory;
include_once('Resumible.php');
include_once('../utils/LogFactory.php');
// Una clase abstracta es una clase base 
// para otras clases llamadas “clases concretas” o clases reales. 
// La finalidad de esta clase consiste en ocultar 
// lo complicado de nuestro código y ofrecernos funciones de alto nivel, sencillas de utilizar para interactuar con nuestra aplicación sin conocer cómo funciona por dentro.


abstract class Dulce implements Resumible { // Parent class 
    public string $nombre;
    protected int $numero;
    private float $precio;
    private Logger $log;
    const IVA = 0.21;
    function __construct(
        string $nombre,
        int $numero,
        float $precio){

        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->precio = $precio;
        $this->log = LogFactory::getLogger();
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
        $this->log->info('Mostrando resumen de dulces');
    } 
}

?>