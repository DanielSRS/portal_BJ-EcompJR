<?php
    require_once "../../database/Connection.php";
    require_once "../../models/User.php";
    require_once "../../controllers/UserController.php";
    UserController::verifyLogin();
    //echo "Olá {$_SESSION['user']}";
?>
<h3>Olá <?php echo $_SESSION['user']?></h3>
<a href="/portal_BJ-EcompJR/user/logout">Sair</a>

<br>
<br>

<div>
    <a href="/portal_BJ-EcompJR/company/index">Listar empresa</a>
    <a href="/portal_BJ-EcompJR/company/create">Cadastrar empresa</a>
</div>