<?php
    require_once "../../database/Connection.php";
    require_once "../../models/User.php";
    require_once "../../controllers/UserController.php";
    require_once "../../models/Company.php";
    require_once "../../controllers/CompanyController.php";
    require_once "../../models/Member.php";
    require_once "../../controllers/MemberController.php";
?>

<?php

class dmv{
    public static function memb($company_id, $new="none"){
        ?>
        <section id="team" class="pb-5">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
                <a href="/portal_BJ-EcompJR/views/admin/dashboard.php?vv=mem&member=<?php echo $company_id ?>&add=1">
                    <button type="button" id="ADD" class="btn btn-info">
                        <span>+ adicionar membro</span>
                    </button>
                </a>
                <div class="container">
                    <h5 class="section-title h1">Membros</h5>
                    <div class="row">
                        <!-- Team member -->
                        <?php
                            if($new){
                                if($new == "add"){
                                    self::add($company_id);
                                }
                            }
                            $members = MemberController::allInCompany($company_id);
                            if($members){
                            foreach($members as $member){
                        ?>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image-flip" >
                                <div class="mainflip flip-0">
                                    <div class="frontside">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <p><img class=" img-fluid" src="../../assets/company-icon.png" alt="card image"></p>
                                                <h4 class="card-title"><?php echo $member->getName() ?></h4>
                                                <p class="card-text"><?php echo $member->getPosition() ?></p>
                                                <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm hide"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="backside">
                                        <div class="card">
                                            <div class="card-body text-center mt-4">
                                                <h4 class="card-title">Editar ou excluir</h4>
                                                <p class="card-text hide">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                                <form class="form-container" action="/portal_BJ-EcompJR/member/update" method="post">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Nome</label>
                                                        <input name="name" value="<?php echo $member->getName()?>" type="text" class="form-control" aria-describedby="emailHelp">
                                                        <small id="emailHelp" class="form-text text-muted">_____________________________________________</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Cargo</label>
                                                        <input name="position" value="<?php echo $member->getPosition()?>" type="text" class="form-control">
                                                        <input name="id" value="<?php echo $member->getId()?>" style="display: none;">
                                                        <input name="company_id" value="<?php echo $member->getCompanyId()?>" style="display: none;">
                                                    </div>
                                                    <button type="submit" class="btn btn-succes">Atualizar</button>
                                                    <a href="/portal_BJ-EcompJR/member/delete/<?php echo $member->getId()?>">
                                                        <button type="button" class="btn btn-danger">Excluir</button>
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
                                $txt = "Não há membros ";
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

    public static function add($company_id){
        ?>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="image-flip" >
                <div class="mainflip flip-0">
                    <div class="frontside">
                        <div class="card">
                            <div class="card-body text-center">
                                <form class="form-container" action="/portal_BJ-EcompJR/member/store" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nome</label>
                                        <input name="name" value="O nome do novo membro" type="text" class="form-control" aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted">_____________________________________________</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Cargo</label>
                                        <input name="position" value="Qual o cargo?" type="text" class="form-control">
                                        <input name="id" value="<?php echo $company_id?>" style="display: none;">
                                    </div>
                                    <button type="submit" class="btn btn-succes">Adicionar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="backside">
                        <div class="card">
                            <div class="card-body text-center mt-4">
                                <h4 class="card-title">Adicionar membro</h4>
                                <p class="card-text hide">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                <form class="form-container" action="/portal_BJ-EcompJR/member/store" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nome</label>
                                        <input name="name" value="O nome do novo membro" type="text" class="form-control" aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted">_____________________________________________</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Cargo</label>
                                        <input name="position" value="Qual o cargo?" type="text" class="form-control">
                                        <input name="id" value="<?php echo $company_id?>" style="display: none;">
                                    </div>
                                    <button type="submit" class="btn btn-succes">Adicionar</button>
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