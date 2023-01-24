<?php
use Monolog\Logger;
use utils\LogFactory;
include_once('Dulce.php');
include_once('../utils/LogFactory.php');

/**
 * Tarta
 */
class Tarta extends Dulce{
    private $rellenos = [];
    private int $numPisos;
    private int $minNumComensales = 2;
    private int $maxNumComensales;
    private Logger $log;    
    /**
     * __construct
     *
     * @return void
     */
    function __construct(
        array $rellenos,
        int $numPisos,
        int $minNumComensales,
        int $maxNumComensales,
        string $nombre,
        int $numero,
        float $precio)
        {

        $this->rellenos = $rellenos;
        $this->numPisos = $numPisos;
        $this->minNumComensales = $minNumComensales;
        $this->maxNumComensales = $maxNumComensales;
        $this->log = LogFactory::getLogger();
        parent::__construct($nombre, $numero, $precio);
 
    } 
    
    /**
     * muestraComensalesPosibles
     *
     * @return
     */
    public function muestraComensalesPosibles(){
        if($this->minNumComensales == 1 && $this->maxNumComensales == 1){
            return "para mínimo ".$this->minNumComensales."(es) comensal";
        }else if ($this->minNumComensales > 1 && $this->maxNumComensales > 1){
            return " para " .  $this->minNumComensales . " comensal(es) o " . $this->maxNumComensales ." comensales";
        }
    }
    
    
    /**
     * muestraResumen
     *
     * @return void
     */
    public function muestraResumen()
    {
        parent::muestraResumen();
        $this->log->info('<br>Es un tarta' . $this->muestraComensalesPosibles() .'con relleno de <br>');
        echo '<br>Es un tarta' . $this->muestraComensalesPosibles() .'con relleno de <br>';

        foreach ($this->rellenos as $relleno) {
            $this->log->info('<br>&nbsp&nbsp&nbsp- '. $relleno . '<br>');
            echo '<br>&nbsp&nbsp&nbsp- '. $relleno . '<br>';
        }

        echo '<br> ----------------------------';
    } 
}

?>