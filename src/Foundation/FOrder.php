<?php


namespace App\Foundation;


use App\Models\Order;
use App\Models\Product;
use App\Models\ProductWithQuantity;
use PDO;

class FOrder extends FConnection {

    function __construct()
    {
        parent::__construct('orders', 'Order');
    }

    //prendere prodotti, quantità e prezzi di prodotti nell'ordine di id=$id
    public function getOrderProducts($id){
        $pdo = FConnection::connect();
        //ma le immagini non servono?
        $query = "select name, quantity, price from orders_products where orderId=".$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $products = $stmt->fetchAll();
        //$stmt->debugDumpParams();
        $prods = [];
        foreach($products as $p){
            //$prod = new Product;
            $prod = new ProductWithQuantity();
            $prod->setName($p[0]);
            $prod->setQuantity($p[1]);
            $prod->setPrice($p[2]);
            //print_r($prod);
            array_push($prods,$prod);
        }
        return $prods;

    }

    public function calculateOrderTotal($orderId){
        $pdo = FConnection::connect();
        $query= "select sum(price*quantity) as total from orders_products where orderId=".$orderId;
        $stmt = $pdo->prepare($query);
        //$stmt->debugDumpParams();
        $stmt->execute();
        return $stmt->fetch()["total"];
    }

    public function getAll(){
        $pdo = FConnection::connect();
        $query= "SELECT id, creationDate, total, orderState FROM orders order by creationDate DESC";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $ords = $stmt->fetchAll();
        //$stmt->debugDumpParams();
        $orders = [];
       //print_r($ords);
        foreach ($ords as $ord) {
            $o = new Order();
            $o->setId($ord[0]);
            $o->setCreationDate($ord[1]);
            $o->setTotal($ord[2]);
            $o->setState($ord[3]);
            array_push($orders, $o);
        }
        //print_r($orders);
        return $orders;
    }


    function store($order): string {
        $pdo = FConnection::connect();
        if (get_class($order->getPayment())=="App\Models\CreditCard") {
            $query = 'INSERT INTO orders(`creationDate`, `total`, `arrivalTime`, `couponId`, `customerId`, `paymentId`, `orderState`, `addressId`, `cardId`) VALUES (NOW(), ' . $order->getTotal() . ', NULL, ' . $order->getCoupon()->getId() . ', ' . $order->getCustomerId() . ', 2, \'' . $order->getState() . '\', ' . $order->getAddress()->getId() . ', ' . $order->getPayment()->getId() . ')';
        }
        else {
            $query = 'INSERT INTO orders(`creationDate`, `total`, `arrivalTime`, `couponId`, `customerId`, `paymentId`, `orderState`, `addressId`, `cardId`) VALUES (NOW(), ' . $order->getTotal() . ', NULL, ' . $order->getCoupon()->getId() . ', ' . $order->getCustomerId() . ', 1, \'' . $order->getState() . '\', ' . $order->getAddress()->getId() . ', NULL)';
        }
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        //$stmt->debugDumpParams();
        return $pdo->lastInsertId();

    }

    function storeOrdersProducts($orderid, $prodWithQuantity){
        $pdo = FConnection::connect();
        foreach ($prodWithQuantity as $product){
        $query='insert into orders_products (`orderId`, `quantity`, `name`, `description`, `price`) VALUES (\''.$orderid.'\',\''.$product[1].'\',\''.$product[0]->getName().'\',\''.$product[0]->getDescription().'\',\''.$product[0]->getPrice().'\')';
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            //$stmt->debugDumpParams();
        }

    }

}