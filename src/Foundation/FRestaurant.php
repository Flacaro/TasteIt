<?php

namespace App\Foundation;


use PDO;

class FRestaurant extends FConnection {

    function __construct()
    {
        parent::__construct('restaurant', 'Restaurant');
    }

    public function authentication($email, $password){
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

    public function getOrdersStates() {
        $query = "select state from orderstates  join orders ON orderstates.id = orders.stateId;";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }


    public function getTotal($customerId) {
        $query = "select total from orders join customers on customers.id = orders.customerId where customers.id = " . $customerId . ";";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }


}