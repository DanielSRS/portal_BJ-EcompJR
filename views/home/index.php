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
                    <a class="nav-link" href="#">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/portal_BJ-EcompJR/views/home/parceiros.php">Parceiros</a>
                </li>
                </ul>
                <span class="nav-item">
                <a class="nav-link" href="/portal_BJ-EcompJR/views/admin/dashboard.php">Dashboard</a>
                </span>
                <a class="nav-link" href="/portal_BJ-EcompJR/home/login">Login</a>
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
                    <img class="d-block w-100 kk" src="../../assets/internet.svg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Formar empreendedores comprometidos e capazes de transformar o Brasil</h4>
                        <h4>e capazes de transformar o Brasil</h4>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h5>Nosso compromisso, nossa razão de existir, a marca que queremos deixar no mundo</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 kk" src="../../assets/work.svg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>O QUE NOS TORNA ÚNICOS</h4>
                        <h4> </h4>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h5>"Representar e potencializar o Movimento Empresa Júnior brasileiro como agente de formação de empreendedores comprometidos e capazes de transformar o país"</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 kk" src="../../assets/email.svg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>BRASIL EMPREENDEDOR</h4>
                        <h4> </h4>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h5>Nosso primeiro compromisso é com nosso país. Acreditamos na construção de um país mais empreendedor</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 kk" src="../../assets/internet.svg" alt="First slide">
                    <div class="card zz" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
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