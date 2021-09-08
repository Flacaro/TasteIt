<?php

namespace App\Foundation;


use PDO;

class FRestaurant extends Foundation {

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

    public function getFirstTenCustomerWhoSpentMore() {
        $query = "SELECT customers.name, customers.surname, customers.email, orders.total from orders join customers on customers.id = orders.customerId ORDER BY orders.total DESC limit 10;";
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Total");
        $stmt->execute();
        return $stmt->fetchAll();
    }


    public function sendCoupon($customerId, $couponId, $quantity) {
        $query = "insert into customers_coupons (userId, couponId, quantity) VALUES (" . $customerId . ", " . $couponId . ", " . $quantity . ");";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
    }

    public function createCoupon($priceCut) {
        $query = "INSERT INTO coupons (priceCut, restaurantId) VALUES = (" . $priceCut . ", 1);";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $this->connection->lastInsertId();
    }

    public function getTotal($customerId) {
        $query = "select total from orders join customers on customers.id = orders.customerId where customers.id = " . $customerId . ";";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getPriceCut($couponId) {
        $query = "SELECT priceCut FROM coupons where id = " . $couponId . ";";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }



}