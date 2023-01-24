<?php
use Monolog\Logger;
use utils\LogFactory;
include_once('../utils/LogFactory.php');
include_once('Dulce.php');

class Chocolate extends Dulce{
    private string $cacao;
    private float $peso;
    private Logger $log;
    function __construct(
        string $cacao,
        float $peso,
        string $nombre,
        int $numero,
        float $precio)
    {

        $this->cacao = $cacao;
        $this->peso = $peso;
        $this->log = LogFactory::getLogger();
        parent::__construct($nombre, $numero, $precio);
 
    }

    public function muestraResumen()
    {
        parent::muestraResumen();
        if($this->cacao == 'Si'){
            $this->log->info('Es un dulce de chocolate con cacao que pesa ' . $this->peso .'g');
            echo '<br> Es un dulce de chocolate con cacao que pesa ' . $this->peso .'g';
        }else{
            $this->log->info('<br> Es un dulce de chocolate sin cacao que pesa ' . $this->peso .'g');
            echo '<br> Es un dulce de chocolate sin cacao que pesa ' . $this->peso .'g';
        }
    }     
}

?>