<?php


namespace App\Foundation;


use PDO;

class FOrder extends FConnection {

    function __construct()
    {
        parent::__construct('orders', 'Order');
    }

    public function getMonthlyRevenues(){
        //select sum(total) from orders where extract(Month from creationDate)=date("m") and state=Completed;
        $query ="select sum(total) from orders where extract(Month from creationDate)=".date("m")." and extract(Year from creationDate)=20".date("y");
        $stmt = $this->connection->prepare($query);
        //$stmt->debugDumpParams();
        $stmt->execute();

        return $stmt->fetch();
    }
    public function getMonthlyOrdersQuantity(){
        //select count(*) from orders where extract(Month from creationDate)=date("m") and state=Completed;
        $query ="select count(*) from orders where extract(Month from creationDate)=".date("m")." and extract(Year from creationDate)=20".date("y");
        $stmt = $this->connection->prepare($query);
        //$stmt->debugDumpParams();
        $stmt->execute();
        return $stmt->fetch();
    }
//per fare il grafico degli ordini
    public function getOrdersPerMonth(){
        //select count(*), extract(Month from creationDate)  from orders group by extract(Month from creationDate) order by extract(Month from creationDate)
        $query="select count(*) as numorders, extract(Month from creationDate) from orders where extract(Year from creationDate)=20".date("y") ." group by extract(Month from creationDate) order by extract(Month from creationDate)";
        $stmt = $this->connection->prepare($query);
        //$stmt->debugDumpParams();
        $stmt->execute();
        return $stmt->fetchAll();
    }

    //prendere prodotti, quantità e prezzi di prodotti nell'ordine di id=$id
    public function getOrderProducts($id){
        $query = "select name, quantity, price from orders_products where orderId=".$id;
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\ProductWithQuantity");
        //$stmt->debugDumpParams();
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function calculateOrderTotal($orderId){
        $query= "select sum(price*quantity) as total from orders_products where orderId=".$orderId;
        $stmt = $this->connection->prepare($query);
        //$stmt->debugDumpParams();
        $stmt->execute();
        return $stmt->fetch()["total"];
    }

    public function getOrders(){
        $query= "SELECT id, creationDate, total, orderState  FROM `orders`  order by stateId, creationDate DESC";
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Order");
        //$stmt->debugDumpParams();
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function updateState($id, $order){
        $query= "update orders set orderState=".$order->getState()." where id=".$id;
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
    }

}