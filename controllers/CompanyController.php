<?php

class CompanyController{

    public function create(){
        header('Location: /portal_BJ-EcompJR/views/admin/dashboard.php?vv=add');
    }

    public function edit($id){
        header('Location: /portal_BJ-EcompJR/views/admin/company/edit.php?id='.$id);
    }

    public function index(){
        header('Location: /portal_BJ-EcompJR/views/admin/dashboard.php');
    }

    public function store(){
        $company = Company::create($_POST['name'], $_POST['federation']);
        header('Location: /portal_BJ-EcompJR/views/admin/dashboard.php');
    }

    public static function all(){
        return Company::all();
    }

    public function update(){
        $company = Company::update($_POST['id'], $_POST['name'], $_POST['federation']);
        header('Location: /portal_BJ-EcompJR/views/admin/dashboard.php');
    }

    public function delete($id){
        $company = Company::delete($id);
        header('Location: /portal_BJ-EcompJR/views/admin/dashboard.php');
    }
}