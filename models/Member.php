<?php

class Member{
    private $id;
    private $name;
    private $position;
    private $companyId;

    public function __construct($id, $name, $position, $companyId){
        $this->id = $id;
        $this->name = $name;
        $this->position = $position;
        $this->companyId = $companyId;
    }

    public static function create($name, $position, $companyId){
        $conection = Connection::getConnection();
        $query = "insert into members (name, position, company_id) values('{$name}', '{$position}', '{$companyId}')";
        $result = mysqli_query($conection, $query);
    }

    public static function getById($id){
        $conection = Connection::getConnection();
        $query = "select * from members where id = '{$id}'";
        $result = mysqli_query($conection, $query);
        if(mysqli_num_rows($result) == 1){
            $member = mysqli_fetch_assoc($result);
            return new Member($member['id'], $member['name'], $member['position'], $member['company_id']);
        }
        else{
            return false;
        }
    }

    public static function getByCompanyId($id){
        $conection = Connection::getConnection();
        $query = "select * from members where icompany_id = '{$id}'";
        $result = mysqli_query($conection, $query);
        if(mysqli_num_rows($result) == 1){
            $member = mysqli_fetch_assoc($result);
            return new Member($member['id'], $member['name'], $member['position'], $member['company_id']);
        }
        else{
            return false;
        }
    }

    public static function allInCompany($id){
        $connection = Connection::getConnection();
        $query = "select * from members where company_id ={$id} ";
        $result = mysqli_query($connection, $query);
        $members = FALSE;
        for($i = 0; $i < mysqli_num_rows($result); $i++){
            $member = mysqli_fetch_assoc($result);
            $members[$i] = new Member($member['id'], $member['name'], $member['position'], $member['company_id']);
        }
        return $members;
    }

    public static function update($id, $name, $position){
        $conection = Connection::getConnection();
        $query = "update members set name = '{$name}' where id = '{$id}'";
        $query2 = "update members set position = '{$position}' where id = '{$id}'";
        $result = mysqli_query($conection, $query);
        $result2 = mysqli_query($conection, $query2);
    }

    public static function delete($id){
        $conection = Connection::getConnection();
        $query = "delete from members where id = '{$id}'";
        $result = mysqli_query($conection, $query);
    }

    public function getId(){
        return $this->id;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getPosition(){
        return $this->position;
    }

    public function getCompanyId(){
        return $this->companyId;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setCompanyId($companyId){
        $this->companyId = $companyId;
    }
}