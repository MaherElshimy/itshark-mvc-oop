<?php

namespace Itshark\Mvc\core;

class bootstrap 
{

    private $controller ; 
    private $method ; 
    private $params=[] ; 

    public function __construct() {
        $this->url();
        $this->run();
    }

    private function url() {
        $query_string = $_SERVER['QUERY_STRING'];
        $url_list = explode("/" , $query_string) ;
        $this->controller  = $url_list[0];
        $this->method = $url_list[1];
        unset($url_list[0]  , $url_list[1]);
        $this->params = $url_list;
    }


    private function run(){
        $controller = "Itshark\Mvc\controllers\\".$this->controller;
        $controller = new $controller ;
        call_user_func_array([$controller,$this->method],$this->params);
    }

}

?>