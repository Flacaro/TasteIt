<?php

namespace App\Foundation\admin;

use App\Foundation\FConnection;
use App\Models\Customer;
use PDO;

class FCustomer extends FConnection {

    public function __construct()
    {
        parent::__construct("customers", "Customer");
    }

    public function topTenCustomersByTotal($previousMonth) {
        $pdo = FConnection::connect();
        $query = "SELECT customers.id, customers.name, customers.surname, customers.email, sum(orders.total) as total from orders join customers on customers.id = orders.customerId where year(creationDate) = year(current_date()) and orders.orderState='Completed' and month(creationDate) =" . $previousMonth . " group by customers.id order by total DESC limit 10";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $cus = $stmt->fetchAll();
        $customers=[];
        foreach ($cus as $customer) {
            $c=new Customer;
            $c->setId($customer[0]);
            $c->setName($customer[1]);
            $c->setSurname($customer[2]);
            $c->setEmail($customer[3]);
            $c1=[$c, $customer[4]];
            array_push($customers, $c1);
        }
        $stmt->debugDumpParams();
        return $customers;
    }


    public function sendCouponToTopTen($couponId, $customerIds) {
        $pdo = FConnection::connect();
        // devi controllare se l'utente ha gia' il coupon, se si devi incrementare la quantita' di 1 (come prodotto nel carrello)
        $query = "insert into customers_coupons(couponId, customerId) values ";
        $values = [];
        foreach($customerIds as $id) {
            array_push($values, "(" . $couponId . ',' . $id . ')');
        }

        $query = $query . join(',', $values);
        $stmt = $pdo->prepare($query);
        $stmt->execute();

    }

//senza carrello e preferiti
    public function getAll(){
        $pdo = FConnection::connect();
        $query = "select * from customers";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $c=$stmt->fetchAll();
        $customers=[];
        foreach($c as $customer){
            $cus=new Customer;
            $cus->setId($customer[0]);
            $cus->setName($customer[1]);
            $cus->setSurname($customer[2]);
            $cus->setEmail($customer[3]);
            $cus->setPassword($customer[4]);
            array_push($customers, $cus);
        }
        return $customers;
    }
}