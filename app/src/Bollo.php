<?php
use Monolog\Logger;
use utils\LogFactory;
include_once('Dulce.php');
include_once('../utils/LogFactory.php');

/**
 * Bollo
 */
class Bollo extends Dulce{
    private string $relleno;
    private Logger $log;    
    /**
     * __construct
     *
     * @return void
     */
    function __construct(
        string $relleno,
        string $nombre,
        int $numero,
        float $precio){

        $this->relleno = $relleno;
        $this->log = LogFactory::getLogger();
        parent::__construct($nombre, $numero, $precio);
 
    } 

        public function getNombre()
        {
                return $this->nombre;
        }
        
    /**
     * muestraResumen
     *
     * @return void
     */
    public function muestraResumen(){
        parent::muestraResumen();
         if($this->relleno == 'Sin relleno'){
            $this->log->info('Es un bollo sin relleno');
            echo '<br><br> Es un bollo sin relleno';
         }else{
            $this->log->info('Es un bollo relleno de ' . $this->relleno);
            echo '<br><br> Es un bollo relleno de ' . $this->relleno;
         }
         echo '<br> ----------------------------';
    }     
}

?>