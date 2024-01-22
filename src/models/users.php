<?php

namespace Itshark\Mvc\models;
use Itrax\DbWrapper\dbwrapper;




class users extends dbwrapper
{
    public function getAllUser(){
        return $this->select("users","*")->getAll();
    }
}

?>