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
        $r= $stmt->fetch();
        $rest=new Restaurant;
        $rest->setId($r[0]);
        $rest->setName($r[1]);
        $rest->setEmail($r[2]);
        $faddress=new FAddress;
        $rest->setAddresses([$faddress->load($r[4])]);
        $rest->setPhone($r[5]);
        return $rest;
        //print_r($res);
    }


}