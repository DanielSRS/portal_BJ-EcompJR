<?php
    require_once "../../../database/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    require_once "../../../models/Company.php";
    require_once "../../../controllers/CompanyController.php";
    UserController::verifyLogin();
?>

<?php
    $companys = CompanyController::all();
    if($companys){
        foreach($companys as $company){
?>
            <a href="/portal_BJ-EcompJR/company/edit/<?php echo $company->getId()?>">
                <button>
                    Editar
                </button>
            </a>

            <a href="/portal_BJ-EcompJR/company/delete/<?php echo $company->getId()?>">
                <button>
                    Excluir
                </button>
            </a>

            <a href="/portal_BJ-EcompJR/member/index/<?php echo $company->getId()?>">
                <button>
                    Membros
                </button>
            </a>
<?php
            echo $company->getName();
            echo " | ";
            echo $company->getFederation();
            echo "<br>";
        }
        $txt = '';
    }
    else{
        $txt = "Não há empresas ";
    }
?>

<h1><?php echo $txt?></h1>

<br>
<br>

<a href="/portal_BJ-EcompJR/company/create/">
    <button>
        Adicionar empresa
    </button>
</a>

<a href="/portal_BJ-EcompJR/views/admin/dashboard.php">
    <button>
        Dashboard
    </button>
</a>
