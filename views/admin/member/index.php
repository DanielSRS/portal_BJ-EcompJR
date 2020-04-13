<?php
    require_once "../../../database/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    require_once "../../../models/Company.php";
    require_once "../../../controllers/CompanyController.php";
    require_once "../../../models/Member.php";
    require_once "../../../controllers/MemberController.php";
    UserController::verifyLogin();

?>

<?php
    $members = MemberController::allInCompany($_GET['id']);
    if($members){
        foreach($members as $member){
?>
            <a href="/portal_BJ-EcompJR/member/edit/<?php echo $member->getId()?>">
                <button>
                    Editar
                </button>
            </a>

            <a href="/portal_BJ-EcompJR/member/delete/<?php echo $member->getId()?>">
                <button>
                    Excluir
                </button>
            </a>

<?php
            echo $member->getName();
            echo " | ";
            echo $member->getPosition();
            echo "<br>";
        }
    $txt = '';
    }
    else{
        $txt = "Não há membros ";
    }
?>

<h1><?php echo $txt?></h1>

<br>
<br>

<a href="/portal_BJ-EcompJR/member/create/<?php echo $_GET['id']?>">
    <button>
        Adicionar novo membro
    </button>
</a>

<a href="/portal_BJ-EcompJR/views/admin/dashboard.php">
    <button>
        Dashboard
    </button>
</a>
