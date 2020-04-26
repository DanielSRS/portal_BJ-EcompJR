<html>
    <head>
    <link rel="stylesheet" href="../vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <section class="container-fluid">
            <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-3">
                    <form class="form-container" action="/portal_BJ-EcompJR/user/check" method="post">
                        <h4>Autenticação</h4>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Endereço de email</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </section>
            </section>
        </section>
    <script src="../vendor/jquery/jquery-3.5.0.min.js"></script>
    <script src="../vendor/bootstrap/bootstrap.min.js"></script>
    </body>
</html>