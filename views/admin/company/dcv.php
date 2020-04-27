<?php
    require_once "../../database/Connection.php";
    require_once "../../models/User.php";
    require_once "../../controllers/UserController.php";
    require_once "../../models/Company.php";
    require_once "../../controllers/CompanyController.php";
?>

<?php

class dcv{
    public static function comp(){
        ?>
        <section id="team" class="pb-5">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
                <a href="/portal_BJ-EcompJR/views/admin/dashboard.php?vv=add">
                    <button type="button" id="ADD" class="btn btn-info">
                        <span>+ adicionar empresa</span>
                    </button>
                </a>
                <div class="container">
                    <h5 class="section-title h1">Empresas</h5>
                    <div class="row">
                        <!-- Team member -->
                        <?php
                            if($_GET){
                                if($_GET['vv'] == "add"){
                                    self::add();
                                }
                            }
                            $companys = CompanyController::all();
                            if($companys){
                            foreach($companys as $company){
                        ?>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image-flip" >
                                <div class="mainflip flip-0">
                                    <div class="frontside">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <p><img class=" img-fluid" src="../../assets/company-icon.png" alt="card image"></p>
                                                <h4 class="card-title"><?php echo $company->getName() ?></h4>
                                                <p class="card-text"><?php echo $company->getFederation() ?></p>
                                                <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm hide"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="backside">
                                        <div class="card">
                                            <div class="card-body text-center mt-4">
                                                <h4 class="card-title">Editar ou excluir</h4>
                                                <p class="card-text hide">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                                <form class="form-container" action="/portal_BJ-EcompJR/company/update" method="post">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Nome</label>
                                                        <input name="name" value="<?php echo $company->getName()?>" type="text" class="form-control" aria-describedby="emailHelp">
                                                        <small id="emailHelp" class="form-text text-muted">_____________________________________________</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Federação</label>
                                                        <input name="federation" value="<?php echo $company->getFederation()?>" type="text" class="form-control">
                                                        <input name="id" value="<?php echo $company->getId()?>" style="display: none;">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Atualizar</button>
                                                    <a href="/portal_BJ-EcompJR/company/delete/<?php echo $company->getId()?>">
                                                        <button type="button" class="btn btn-secondary">Excluir</button>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                                $txt = '';
                            }
                            else{
                                $txt = "Não há empresas ";
                            }
                        ?>
                        <!-- ./Team member -->

                    </div>
                </div>
            </section>
        <?php
    }

    public static function no() {
        ?>
        <h1>No companies</h1>

    <?php
    }

    public static function add(){
        ?>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="image-flip" >
                <div class="mainflip flip-0">
                    <div class="frontside">
                        <div class="card">
                            <div class="card-body text-center">
                                <form class="form-container" action="/portal_BJ-EcompJR/company/store" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nome</label>
                                        <input name="name" value="O nome da nova empresa" type="text" class="form-control" aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted">_____________________________________________</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Federação</label>
                                        <input name="federation" value="Qual a federação?" type="text" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Adicionar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="backside">
                        <div class="card">
                            <div class="card-body text-center mt-4">
                                <h4 class="card-title">Adicionar Empresa</h4>
                                <p class="card-text hide">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                <form class="form-container" action="/portal_BJ-EcompJR/company/store" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nome</label>
                                        <input name="name" value="O nome da nova empresa" type="text" class="form-control" aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted">_____________________________________________</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Federação</label>
                                        <input name="federation" value="Qual a federação?" type="text" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Adicionar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}

?>