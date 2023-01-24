<?php
use Monolog\Logger;
use utils\LogFactory;
include_once('Resumible.php');
include_once('../utils/LogFactory.php');
// Una clase abstracta es una clase base 
// para otras clases llamadas “clases concretas” o clases reales. 
// La finalidad de esta clase consiste en ocultar 
// lo complicado de nuestro código y ofrecernos funciones de alto nivel, sencillas de utilizar para interactuar con nuestra aplicación sin conocer cómo funciona por dentro.


/**
 * Dulce
 */
abstract class Dulce implements Resumible { // Parent class 
    public string $nombre;
    protected int $numero;
    private float $precio;
    private Logger $log;
    const IVA = 0.21;    
    /**
     * __construct
     *
     * @return void
     */
    function __construct(
        string $nombre,
        int $numero,
        float $precio)
        {

        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->precio = $precio;
        $this->log = LogFactory::getLogger();
    }
    
    /**
     * getNombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
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
     * muestraResumen
     *
     * @return void
     */
    public function muestraResumen(){
        echo '<strong>RESUMEN DULCE:</strong><br>';
        echo '<strong>NOMBRE</strong>: '. $this->nombre .'<br>';
        echo '<strong>NÚMERO</strong>: '. $this->numero .'<br>';
        echo '<strong>PRECIO</strong>: '. $this->precio .'<br> ----------------------------';
        $this->log->info('Mostrando resumen de dulces');
    } 
}

?>