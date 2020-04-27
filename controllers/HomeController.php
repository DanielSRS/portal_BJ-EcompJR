<?php

class HomeController{

    public function index(){
        header('Location: /portal_BJ-EcompJR/views/home/index.php');
    }

    public function login(){
        header('Location: /portal_BJ-EcompJR/views/login.php');
    }
}