<?php

class HomeController{

    public function index(){
        echo "HomeController index";
    }

    public function login(){
        header('Location: /portal_BJ-EcompJR/views/login.php');
    }
}