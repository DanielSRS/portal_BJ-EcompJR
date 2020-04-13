<?php

class Company{
    private $id;
    private $name;
    private $federation;

    public function __construct($id, $name, $federation){
        $this->id = $id;
        $this->name = $name;
        $this->federation = $federation;
    }

    public static function create($name, $federation){
        $conection = Connection::getConnection();
        $query = "insert into companys (name, federation) values('{$name}', '{$federation}')";
        $result = mysqli_query($conection, $query);
    }

    public static function getById($id){
        $conection = Connection::getConnection();
        $query = "select * from companys where id = '{$id}'";
        $result = mysqli_query($conection, $query);
        if(mysqli_num_rows($result) == 1){
            $company = mysqli_fetch_assoc($result);
            return new Company($company['id'], $company['name'], $company['federation']);
        }
        else{
            return false;
        }
    }

    public static function all(){
        $connection = Connection::getConnection();
        $query = "select * from companys";
        $result = mysqli_query($connection, $query);
        $companys = false;
        for($i = 0; $i < mysqli_num_rows($result); $i++){
            $company = mysqli_fetch_assoc($result);
            $companys[$i] = new Company($company['id'], $company['name'], $company['federation']);
        }
        return $companys;
    }

    public static function update($id, $name, $federation){
        $conection = Connection::getConnection();
        $query = "update companys set name = '{$name}', federation = '{$federation}' where id = '{$id}'";
        $result = mysqli_query($conection, $query);
    }

    public static function delete($id){
        $conection = Connection::getConnection();
        $query = "delete from companys where id = '{$id}'";
        $result = mysqli_query($conection, $query);
    }

    public function getId(){
        return $this->id;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getFederation(){
        return $this->federation;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setFederation($federation){
        $this->federarion = $federation;
    }
}