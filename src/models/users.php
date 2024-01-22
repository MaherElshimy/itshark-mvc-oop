<?php

namespace Itshark\Mvc\models;
use Itrax\DbWrapper\dbwrapper;




class users extends dbwrapper
{
    public function getAllUser(){
        return $this->select("users","*")->get();
    }

    public function addNewUser($data){
        return $this->insert("users",$data)->execute();
    }

}

?>