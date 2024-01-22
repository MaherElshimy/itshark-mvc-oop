<?php

namespace Itshark\Mvc\controllers ; 

class controller 
{
    public function __call($name , $arg) {
        echo 'this: --'.$name.'-- not access'; 
    }
}

?>