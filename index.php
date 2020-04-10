<?php

    require_once "Router.php";
    require_once "database/Connection.php";
    require_once "models/User.php";
    require_once "models/Company.php";
    require_once "controllers/UserController.php";
    require_once "controllers/HomeController.php";
    require_once "controllers/MemberController.php";
    require_once "controllers/CompanyController.php";

    $router = new Router();
    $router->start($_GET);