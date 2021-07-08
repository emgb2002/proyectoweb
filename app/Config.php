<?php
namespace App;

class Config{
    private $_controller, $_method;
    public function __construct(){
        //controlador por defecto
        //metodo por defecto
        //argumentos vacios

        $this->_controller = "index";
        $this->_method = "index";
    }

    public function getControllerDefault(){
        return $this->_controller;
    }

    public function getMethodDefault(){
        return $this->_method;
    }
    public static function getPath(){
        return realpath($_SERVER['DOCUMENT_ROOT']);
    }
}