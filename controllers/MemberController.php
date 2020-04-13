<?php

class MemberController{

    public function create($id){
        header('Location: /portal_BJ-EcompJR/views/admin/member/create.php?id='.$id);
    }

    public function edit($id){
        header('Location: /portal_BJ-EcompJR/views/admin/member/edit.php?id='.$id);
    }

    public function index($id){
        header('Location: /portal_BJ-EcompJR/views/admin/member/index.php?id='.$id);
    }

    public static function allInCompany($id){
        return Member::allInCompany($id);
    }

    public function store(){
        $member = Member::create($_POST['name'], $_POST['position'], $_POST['id']);
        header('Location: /portal_BJ-EcompJR/views/admin/company/index.php');
    }

    public function delete($id){
        $member = Member::getById($id);
        $company_id = $member->getCompanyId();
        $member = Member::delete($id);
        header('Location: /portal_BJ-EcompJR/views/admin/member/index.php?id='.$company_id);
    }

    public function update(){
        $member = Member::update($_POST['id'], $_POST['name'], $_POST['position']);
        header('Location: /portal_BJ-EcompJR/views/admin/member/index.php?id='.$_POST['company_id']);
    }
}