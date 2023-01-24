<?php

use Pasteleria;
use PHPUNIT\Framework\TestCase;

class TestTarta extends TestCase
{
    public function testIncluirBollo(){
        $bollo = new Bollo('Chocolate', 'Brownie', 5, 3.5);
        $pasteleria = new Pasteleria('Trapicheo Brothers');
        $pasteleria->incluirBollo($bollo);
        $this->assertSame($pasteleria->getProductos()[0]->getNumero(),1);
    }
}

?>