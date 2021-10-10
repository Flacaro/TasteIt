<?php


namespace App\Foundation;


use App\Foundation\admin\FCoupon;
use App\Models\Address;
use App\Models\Cash;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductWithQuantity;
use PDO;

class FOrder extends FConnection {

    function __construct()
    {
        parent::__construct('orders', 'Order');
    }

    public function loadUsersOrders($userId){
        $pdo = FConnection::connect();
        $query="SELECT id, creationDate, total, paymentId FROM orders where customerId=" . $userId . " order by creationDate DESC;";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $order= $stmt->fetchAll();
        $orders=[];
        foreach ($order as $ord){
        $o = new Order();
        $fpay= new FPaymentMethod();
        $o->setId($ord[0]);
        $o->setCreationDate($ord[1]);
        $o->setTotal($ord[2]);
        if ($ord[3]==1){
            $o->setPayment(new Cash);
        }
        else{
            $o->setPayment($fpay->load($ord[3]));
        }
        array_push($orders, $o);
        }
        return $orders;
    }

    //prendere prodotti, quantità e prezzi di prodotti nell'ordine di id=$id
    public function getOrderProducts($id){
        $pdo = FConnection::connect();
        //ma le immagini non servono?
        $query = "select name, quantity, price, imagePath from orders_products where orderId=".$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $products = $stmt->fetchAll();
        $prods = [];
        foreach($products as $p){
            //$prod = new Product;
            $prod = new ProductWithQuantity();
            $prod->setName($p[0]);
            $prod->setQuantity($p[1]);
            $prod->setPrice($p[2]);
            $prod->setImagePath($p[3]);
            //print_r($prod);
            array_push($prods,$prod);
        }
        return $prods;

    }

 /*   public function calculateOrderTotal($orderId){
        $pdo = FConnection::connect();
        $query= "select sum(price*quantity) as total from orders_products where orderId=".$orderId;
        $stmt = $pdo->prepare($query);
        //$stmt->debugDumpParams();
        $stmt->execute();
        return $stmt->fetch()["total"];
    }*/

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

    //le uniche cose a cui è permesso fare update sono lo stato e il tempo di arrivo
    public function update($order){
        $pdo = FConnection::connect();
        $query='UPDATE `orders` SET `arrivalTime`=\''.$order->getArrivalTime().'\', `orderState`=\''.$order->getState().'\' where id='.$order->getId();
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $stmt->debugDumpParams();
    }

    public function load($id){
        $fcoupon=new FCoupon;
        $fpay=new FPaymentMethod;
        $faddress=new FAddress;
        $pdo = FConnection::connect();
        $query = 'select * from orders where id='.$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $o=$stmt->fetch();
        $order=new Order;
        $order->setId($o[0]);
        $order->setCreationDate($o[1]);
        $order->setTotal($o[2]);
        $order->setArrivalTime($o[3]);
        if ($o[4]!=""){
            $order->setCoupon($fcoupon->load($o[4]));
        }
        else{
            $order->setCoupon(NULL);
        }
        $order->setCustomerId($o[5]);
        if ($o[6]==2){
        $order->setPayment($fpay->load($o[9]));
        }
        else{
            $order->setPayment(new Cash);
        }
        $order->setState($o[7]);
        $order->setAddress($faddress->load($o[8]));
        //print_r($o);
        return $order;
    }

    function store($order): string {
        $pdo = FConnection::connect();
        if ($order->getCoupon()!=NULL){
            $couponId=$order->getCoupon()->getId();
        }
        else {$couponId="NULL";}
        if (get_class($order->getPayment())=="App\Models\CreditCard") {
            $query = 'INSERT INTO orders(`creationDate`, `total`, `arrivalTime`, `couponId`, `customerId`, `paymentId`, `orderState`, `addressId`, `cardId`) VALUES (NOW(), ' . $order->getTotal() . ', NULL, ' . $couponId . ', ' . $order->getCustomerId() . ', 2, \'' . $order->getState() . '\', ' . $order->getAddress()->getId() . ', ' . $order->getPayment()->getId() . ')';
        }
        else {
            $query = 'INSERT INTO orders(`creationDate`, `total`, `arrivalTime`, `couponId`, `customerId`, `paymentId`, `orderState`, `addressId`, `cardId`) VALUES (NOW(), ' . $order->getTotal() . ', NULL, ' . $couponId . ', ' . $order->getCustomerId() . ', 1, \'' . $order->getState() . '\', ' . $order->getAddress()->getId() . ', NULL)';
        }
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $stmt->debugDumpParams();
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