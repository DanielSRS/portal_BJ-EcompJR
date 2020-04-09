<?php

require_once "models/User.php";

class UserController{

    public function check(){
        $user = User::find($_POST['email'], $_POST['password']);
        if($user){
            $_SESSION['user'] = $user->getName();
            header('Location: /EcompJrP/portal_BJ-EcompJR/views/admin/dashboard.php');
        }
        else{
            $_SESSION['failed'] = True;
            header('Location: /EcompJrP/portal_BJ-EcompJR/views/login.php');
        }
    }
}