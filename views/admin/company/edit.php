<?php
    require_once "../../../database/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    require_once "../../../models/Company.php";
    require_once "../../../controllers/CompanyController.php";
    UserController::verifyLogin();
    $company = Company::getById($_GET['id']);
?>

<html>
    <form action="/EcompJrP/portal_BJ-EcompJR/company/update" method="post">
        <input name="name" value="<?php echo $company->getName()?>" plceholder="name">
        <input name="federation" value="<?php echo $company->getFederation()?>" plceholder="federation">
        <input name="id" value="<?php echo $_GET['id']?>" style="display: none;">
        <button type="submit" plceholder="email"> Salvar </button>
    </form>
</html>