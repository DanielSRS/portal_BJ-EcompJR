<?php

class UserController{

    public function check(){
        $user = User::find($_POST['email'], $_POST['password']);
        session_start();
        if($user){
            $_SESSION['user'] = $user->getName();
            header('Location: /EcompJrP/portal_BJ-EcompJR/views/admin/dashboard.php');
        }
        else{
            $_SESSION['failed'] = True;
            header('Location: /EcompJrP/portal_BJ-EcompJR/views/login.php');
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        header('Location: /EcompJrP/portal_BJ-EcompJR/home/login');
    }

    public function verifyLogin(){
        if(!$_SESSION['user']){
            header('Location: /EcompJrP/portal_BJ-EcompJR/home/login');
        }
    }
}