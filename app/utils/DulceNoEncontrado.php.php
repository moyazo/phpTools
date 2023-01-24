<?php
include_once('pasteleriaException.php');
class DulceNoEncontrado extends pasteleriaException{
    function __construct(
            String $message = "",
            int $code = 0,
            Exception $previous = null
        ){
            parent::__construct($message, $code, $previous);
    }


    public function getExceptionMessage(){
            return $this->message;
    }
    }
?>