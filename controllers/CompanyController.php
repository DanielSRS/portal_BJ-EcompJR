<?php

class CompanyController{

    public function create(){
        header('Location: /EcompJrP/portal_BJ-EcompJR/views/admin/company/create.php');
    }

    public function edit($id){
        header('Location: /EcompJrP/portal_BJ-EcompJR/views/admin/company/edit.php?id='.$id);
    }

    public function index(){
        header('Location: /EcompJrP/portal_BJ-EcompJR/views/admin/company/index.php');
    }

    public function store(){
        $company = Company::create($_POST['name'], $_POST['federation']);
        header('Location: /EcompJrP/portal_BJ-EcompJR/views/admin/company/index.php');
    }

    public static function all(){
        return Company::all();
    }

    public function update(){
        $company = Company::update($_POST['id'], $_POST['name'], $_POST['federation']);
        header('Location: /EcompJrP/portal_BJ-EcompJR/views/admin/company/index.php');
    }

    public function delete($id){
        $company = Company::delete($id);
        header('Location: /EcompJrP/portal_BJ-EcompJR/views/admin/company/index.php');
    }
}