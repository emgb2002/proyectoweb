<?php
namespace Src;
use App\Config;

class Request{

    private $url, $controller, $method, $arg;// declaramos variables privadas
    public $config;
    public function __construct($url){
        $this->config = new Config();
        if($url != ""){
            $this->url = explode('/',$url);
            $this->controller = array_shift($this->url);
            $this->method = array_shift($this->url);
            $this->arg = $this->url;

        }else{
            //configuramos en la app los datos por defecto
            $this->controller = $this->config->getControllerDefault();
            $this->method = $this->config->getMethodDefault();
            $this->arg = array();
        }
    }
    public function getController():string{
        return $this->controller;
    }
    public function getMethod():string{
        return $this->method  ?: $this->config->getMethodDefault();
    }
    public function getArg():array{
        return $this->arg ?: array();
    }

}
