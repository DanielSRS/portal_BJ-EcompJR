<?php
    require_once "../../../database/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    require_once "../../../models/Member.php";
    require_once "../../../controllers/MemberController.php";
    UserController::verifyLogin();
    $member = Member::getById($_GET['id']);
    $companyId = $member->getCompanyId();
?>

<html>
    <form action="/portal_BJ-EcompJR/member/update/" method="post">
        <input name="name" value="<?php echo $member->getName()?>" plceholder="name">
        <input name="position" value="<?php echo $member->getPosition()?>" plceholder="federation">
        <input name="id" value="<?php echo $_GET['id']?>" style="display: none;">
        <input name="company_id" value="<?php echo $companyId?>" style="display: none;">
        <button type="submit" plceholder="email"> Salvar </button>
    </form>
</html>