<?php

namespace App\Foundation\admin;

use App\Foundation\FConnection;
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
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Total");
        $stmt->execute();
        return $stmt->fetchAll();
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
}