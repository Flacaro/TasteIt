<?php

namespace App\Foundation\admin;

use App\Foundation\Foundation;
use PDO;

class FCustomer extends Foundation {

    public function __construct()
    {
        parent::__construct("customers", "Customer");
    }

    public function topTenCustomersByTotal() {
        $query = "SELECT customers.id, customers.name, customers.surname, customers.email, orders.total from orders join customers on customers.id = orders.customerId ORDER BY orders.total DESC limit 10;";
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Total");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function sendCouponToTopTen($couponId, $customerIds) {
        // devi controllare se l'utente ha gia' il coupon, se si devi incrementare la quantita' di 1 (come prodotto nel carrello)
        $query = "insert into customers_coupons(couponId, customerId) values ";
        $values = [];

        foreach($customerIds as $id) {
            array_push($values, "(" . $couponId . ',' . $id . ')');
        }

        $query = $query . join(',', $values);
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

    }
}