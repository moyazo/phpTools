<?php

namespace utils;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Psr\Log\LoggerInterface;

class LogFactory {

    public static function getLogger(String $canal = "miApp") : LoggerInterface{
    $log = new Logger($canal);
    $log->pushHandler(new StreamHandler("../log.log", Logger::DEBUG));
        
    return $log;
    }
}
?>