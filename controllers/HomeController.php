<?php

class HomeController{

    public function index(){
        echo "HomeController index";
    }

    public function login(){
        header('Location: /EcompJrP/portal_BJ-EcompJR/views/login.php');
    }
}