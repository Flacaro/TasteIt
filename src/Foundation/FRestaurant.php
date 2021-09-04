<?php

namespace App\Foundation;


use PDO;

class FRestaurant extends Foundation {

    function __construct()
    {
        parent::__construct('restaurant', 'Restaurant');
    }

    public function exists($email, $password){
        $query = "SELECT * FROM restaurant WHERE email='".$email."' AND password='".$password."'";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        $rows = $stmt->fetch();
        if($rows==NULL){
            return false;
        }
        else{
            return true;
        }
    }

    public function getByEmail($email){
        $query = "SELECT * FROM restaurant WHERE email='".$email."'";
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Restaurant");
        $stmt->execute();
        return $stmt->fetch();
    }
}