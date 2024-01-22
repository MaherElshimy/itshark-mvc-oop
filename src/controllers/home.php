<?php

namespace Itshark\Mvc\controllers;
use Itshark\Mvc\models\users;


class home extends Controller{

    public function index() {
        $user = new users();
        $all_users = $user->getAllUser();
        return view('home/index', ['users'=>$all_users]);
    }

    public function name() {
        echo "welcome ";
    }

}


?>