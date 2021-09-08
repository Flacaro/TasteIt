<?php


namespace App\Foundation;


class FOrder extends Foundation {

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
}