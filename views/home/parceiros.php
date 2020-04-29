<?php
    require_once "../../database/Connection.php";
    require_once "../../models/User.php";
    require_once "../../controllers/UserController.php";
    $logged = UserController::verifyLogin();
    //echo "Olá {$_SESSION['user']}";
?>

<html>
    <head>
        <link rel="stylesheet" href="../../vendor/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="parceiros.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!---<link rel="stylesheet" href="../admin/dashboard.css"> --->
    </head>
    <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/portal_BJ-EcompJR/">Portal Brasil JR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/portal_BJ-EcompJR/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">MEJ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/portal_BJ-EcompJR/views/home/contact.php">Contato <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/portal_BJ-EcompJR/views/home/parceiros.php">Parceiros</a>
                </li>
                </ul>
                <span class="nav-item">
                <a class="nav-link" href="/portal_BJ-EcompJR/views/admin/dashboard.php">Dashboard</a>
                </span>
                <?php
                    if(!$logged){
                ?>
                <a class="nav-link" href="/portal_BJ-EcompJR/home/login">Login</a>
                <?php
                    }else{
                ?>
                <a class="nav-link" href="/portal_BJ-EcompJR/user/logout">Sair</a>
                <?php
                    }
                ?>
            </div>
        </nav>
        <section id="team" class="pb-5">
            <div class="container">
                <h5 class="section-title h1">Parceiros</h5>
                <div class="row">
                    <!-- Team member -->
                    <div class="box">
                        <div class="container">
                            <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="box-part text-center">
                                            <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                                            <div class="title">
                                                <h4>Instagram</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="box-part text-center">
                                            <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
                                            <div class="title">
                                                <h4>Twitter</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="box-part text-center">
                                            <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
                                            <div class="title">
                                                <h4>Facebook</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="box-part text-center">
                                            <i class="fa fa-pinterest-p fa-3x" aria-hidden="true"></i>
                                            <div class="title">
                                                <h4>Pinterest</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="box-part text-center">
                                            <i class="fa fa-google-plus fa-3x" aria-hidden="true"></i>
                                            <div class="title">
                                                <h4>Google</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="box-part text-center">
                                            <i class="fa fa-github fa-3x" aria-hidden="true"></i>
                                            <div class="title">
                                                <h4>Github</h4>
                                            </div>
                                        </div>
                                    </div>
                            </div>		
                        </div>
                    </div>
                    <!-- ./Team member -->

                </div>
            </div>
        </section>
        <script src="../../vendor/jquery/jquery-3.5.0.min.js"></script>
        <script src="../../vendor/bootstrap/bootstrap.min.js"></script>
    </body>
</html>