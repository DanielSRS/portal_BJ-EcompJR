<?php

class UserController{

    public function check(){
        $user = User::find($_POST['email'], $_POST['password']);
        session_start();
        if($user){
            $_SESSION['user'] = $user->getName();
            header('Location: /portal_BJ-EcompJR/views/admin/dashboard.php');
        }
        else{
            $_SESSION['failed'] = True;
            header('Location: /portal_BJ-EcompJR/views/login.php');
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        header('Location: /portal_BJ-EcompJR/home/login');
    }

    public function verifyLogin(){
        session_start();
        if(!$_SESSION['user']){
            header('Location: /portal_BJ-EcompJR/home/login');
        }
    }
}