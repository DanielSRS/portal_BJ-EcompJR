<?php
    require_once "../../../database/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    UserController::verifyLogin();
?>

<html>
    <form action="/EcompJrP/portal_BJ-EcompJR/member/store" method="post">
        <input name="name" plceholder="name">
        <input name="position" plceholder="position">
        <input name="id" value="<?php echo $_GET['id']?>" style="display: none;">
        <button type="submit">Cadastrar </button>
    </form>
</html>