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
        header('Location: /portal_BJ-EcompJR/');
    }

    public function verifyLogin($login=false){
        session_start();
        if(isset($_SESSION['user'])){
            return true;
            //header('Location: /portal_BJ-EcompJR/home/login');
        }
     //   else if($login & isset($_SESSION['user'])){
     //       header('Location: /portal_BJ-EcompJR/views/admin/dashboard.php');
     //   }
        return false;
    }
}