<?php
    require_once "../../../database/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    if(!UserController::verifyLogin()){
        header('Location: /portal_BJ-EcompJR/home/login');
    }
?>

<html>
    <form action="/portal_BJ-EcompJR/company/store" method="post">
        <input name="name" plceholder="name">
        <input name="federation" plceholder="federation">
        <button type="submit">Cadastrar </button>
    </form>
</html>