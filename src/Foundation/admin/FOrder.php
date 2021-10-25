<?php

namespace App\Foundation\admin;

use App\Foundation\FAddress;
use App\Foundation\FConnection;
use App\Foundation\FPaymentMethod;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductWithQuantity;

class FOrder {

    public function getAll(){
        $pdo = FConnection::connect();
        $query= "SELECT orders.id, orders.creationDate, orders.total, orders.orderState, orders_products.name ,orders_products.price , orders_products.quantity FROM orders join orders_products on orders_products.orderId = orders.id order by creationDate DESC";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $ords = $stmt->fetchAll();
        //print_r($ords);
        $orders = [];
        $products = [];
        //print_r($ords);
        foreach ($ords as $ord) {
            $o = new Order();
            $p = new ProductWithQuantity();
            $o->setId($ord[0]);
            $o->setCreationDate($ord[1]);
            $o->setTotal($ord[2]);
            $o->setState($ord[3]);
            $p->setName($ord[4]);
            $p->setPrice($ord[5]);
            $p->setQuantity($ord[6]);
            array_push($products, $p);
            $o->setProducts($products);
            array_push($orders, $o);
        }
        //print_r($orders);
        return $orders;
    }

    public function updateState($id, $order){
        $pdo = FConnection::connect();
        $query= "update orders set orderState=" . $order->getState() . " where id=" . $id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        //$stmt->debugDumpParams();
    }

    //per fare il grafico degli ordini
    public function getOrdersPerMonth(){
        $pdo = FConnection::connect();
        //select count(*), extract(Month from creationDate)  from orders group by extract(Month from creationDate) order by extract(Month from creationDate)
        $query="select count(*) as numorders, extract(Month from creationDate) from orders where extract(Year from creationDate)=20".date("y") ." group by extract(Month from creationDate) order by extract(Month from creationDate)";
        $stmt = $pdo->prepare($query);
        //$stmt->debugDumpParams();
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getMonthlyOrdersQuantity(){
        $pdo = FConnection::connect();
        //select count(*) from orders where extract(Month from creationDate)=date("m") and state=Completed;
        $query ="select count(*) from orders where extract(Month from creationDate)=".date("m")." and extract(Year from creationDate)=20".date("y");
        $stmt = $pdo->prepare($query);
        //$stmt->debugDumpParams();
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getMonthlyRevenues(){
        $pdo = FConnection::connect();
        //select sum(total) from orders where extract(Month from creationDate)=date("m") and state=Completed;
        $query ='select sum(total) from orders where orderState="Completed" or orderState="Accepted" and extract(Month from creationDate) = '. date("m").' and extract(Year from creationDate) = 20' . date("y");
        //print_r($query);
        $stmt = $pdo->prepare($query);
        //$stmt->debugDumpParams();
        $stmt->execute();
        $sum=$stmt->fetch()[0];
        return round($sum, 2);
    }

    public function getOrdersStates() {
        $pdo = FConnection::connect();
        $query = "select id, creationDate, total, customerId, paymentId, orderState, addressId  from orders;";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $orders = $stmt->fetchAll();
        //print_r($orders);
        $oStates = [];
        foreach ($orders as $order) {
            $o = new Order();
            $payment = new FPaymentMethod();
            $address = new FAddress();
            $o->setId($order[0]);
            $o->setCreationDate($order[1]);
            $o->setTotal($order[2]);
            $o->setCustomerId($order[3]);
            $o->setPayment($payment->load($order[4]));
            $o->setState($order[5]);
            $o->setAddress($address->load($order[6]));
            array_push($oStates, $o);
        }
        //print_r($oStates);
        return $oStates;
    }

    public function getTotal($customerId) {
        $pdo = FConnection::connect();
        $query = "select total from orders join customers on customers.id = orders.customerId where customers.id = " . $customerId . ";";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }


}