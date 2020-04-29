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
        <link rel="stylesheet" href="contact.css">
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
        <div class="container contact-form">
                <h3>Redes Socias</h3>
               <div class="row">
                    <div class="box">
                        <div class="container">
                            <div class="row justify-content-center">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <div class="box-part text-center">
                                            <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                                            <h6>Instagram</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <div class="box-part text-center">
                                            <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
                                            <div class="title">
                                                <h6>Twitter</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <div class="box-part text-center">
                                            <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
                                            <div class="title">
                                                <h6>Facebook</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <div class="box-part text-center">
                                            <i class="fa fa-google-plus fa-3x" aria-hidden="true"></i>
                                            <div class="title">
                                                <h6>Google</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <div class="box-part text-center">
                                            <i class="fa fa-github fa-3x" aria-hidden="true"></i>
                                            <div class="title">
                                                <h6>Github</h6>
                                            </div>
                                        </div>
                                    </div>
                            </div>		
                        </div>
                    </div>
                </div>
        </div>
        <div class="container contact-form">
            <form method="post">
                <h3>Nos mande uma mensagem</h3>
               <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src="../../vendor/jquery/jquery-3.5.0.min.js"></script>
        <script src="../../vendor/bootstrap/bootstrap.min.js"></script>
    </body>
</html>