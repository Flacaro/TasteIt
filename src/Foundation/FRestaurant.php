<?php

namespace App\Foundation;


use App\Models\Order;
use App\Models\Restaurant;
use PDO;

class FRestaurant extends FConnection {

    function __construct()
    {
        parent::__construct('restaurant', 'Restaurant');
    }

    public function authentication($email, $password){
        $pdo = FConnection::connect();
        $query = "SELECT * FROM restaurant WHERE email='".$email."' AND password='".$password."'";
        $stmt = $pdo->prepare($query);
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
        $pdo = FConnection::connect();
        $query = "SELECT * FROM restaurant WHERE email='".$email."'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $res = $stmt->fetch();
        print_r($res);
    }


}