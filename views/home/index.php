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
        <link rel="stylesheet" href="index.css">
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
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="kk"></div>
                    <div class="card zz" style="width: 18rem;">
                        <div class="card-body zze">
                        <h5 class="card-title">Formar empreendedores comprometidos e capazes de transformar o Brasil e capazes de transformar o Brasil</h5>
                        <p class="card-text">Nosso compromisso, nossa razão de existir, a marca que queremos deixar no mundo</p>
                        <!---<a href="#" class="btn btn-primary">Go somewhere</a> ----->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="kk"></div>
                    <div class="card zz" style="width: 18rem;">
                        <div class="card-body zze">
                        <h5 class="card-title">O QUE NOS TORNA ÚNICOS</h5>
                        <p class="card-text">"Representar e potencializar o Movimento Empresa Júnior brasileiro 
                                            como agente de formação de empreendedores comprometidos e capazes 
                                            de transformar o país"</p>
                        <!---<a href="#" class="btn btn-primary">Go somewhere</a> ----->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                <div class="kk"></div>
                    <div class="card zz" style="width: 18rem;">
                        <div class="card-body zze">
                        <h5 class="card-title">BRASIL EMPREENDEDOR</h5>
                        <p class="card-text">Nosso primeiro compromisso é com nosso país. 
                                             Acreditamos na construção de um país mais empreendedor</p>
                        <!---<a href="#" class="btn btn-primary">Go somewhere</a> ----->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="kk"></div>
                    <div class="card zz" style="width: 18rem;">
                        <div class="card-body zze">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <!---<a href="#" class="btn btn-primary">Go somewhere</a> ----->
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <script src="../../vendor/jquery/jquery-3.5.0.min.js"></script>
        <script src="../../vendor/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript">
            $('.carousel').carousel({
                interval: 3000
            })
        </script>
    </body>
</html>