<?php

namespace Itshark\Mvc\controllers;
use Itshark\Mvc\models\users;
use Itshark\Mvc\core\validation;

class user extends controller 
{

    public function index() { 
        $user = new users() ; 
        $users = $user->getAllUser();
        return view ('users/index', ["users" => $users]);
    }

    // retuen form view 
    public function create() { 
        return view('users/create');
    }
    
    public function store() { 
        $validation = new validation ; 

        $validation->input("firstname")->required()->min(2);
        $validation->input("email")->required()->email();
        $validation->input("password")->required()->min(5);

        if ( !$validation->is_error() ) {
            $users = new users() ; 
            $result = $users->addNewUser($_POST) ; 

            if ($result == 1 ) {
                redirect("index");
            }
        } else {
            $validation->showErorr();
        }
    }

    public function delete($id) { 

    }

    public function edit($id) { 

    }

    public function update() { 

    }

    
    

}


?>