<?php


namespace App\Foundation;


use App\Foundation\admin\FCoupon;
use App\Models\Customer;
use App\Models\Order;
use PDO;

class FCustomer extends FConnection {
    function __construct()
    {
        parent::__construct('customers', 'Customer');
    }

    public function getUserFromReview($reviewId){
        //select
    }
    public function authentication($email, $password){
        $pdo = FConnection::connect();
        $query = "SELECT * FROM customers WHERE email='".$email. "' AND password='".$password."'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch();
        if($row==NULL) {
            return false;
        }
        else{
            return true;
        }
    }

    public function getByEmail($email){
        $pdo = FConnection::connect();
        $query = "SELECT * FROM customers WHERE email= '".$email."'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $cus=$stmt->fetch();
        $customer= new Customer;
        $customer->setId($cus[0]);
        $customer->setName($cus[1]);
        $customer->setSurname($cus[2]);
        $customer->setEmail($cus[3]);
        $customer->setPassword($cus[4]);
        $stmt->debugDumpParams();
        return $customer;
    }

    public function exist($email) {
        $pdo = FConnection::connect();
        $query = "SELECT email FROM customers WHERE email='".$email . "'" . " UNION (select email from restaurant where email ='" . $email . "')";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch();
        if($row==NULL) {
            return false;
        }
        else{
            return true;
        }
    }

    //serve per visualizzare la lista degli ordini dell'utente (per vedere i prodotti richiamiamo una funzione a parte quando clicchi sull'ordine specifico)
    public function getCustomerOrders($id){
        $pdo = FConnection::connect();
        $query= "select * from orders where customerId=".$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $orders = $stmt->fetchAll();
        $o=[];
        $fcoupon=new FCoupon();
        $fpayment=new FPaymentMethod();
        $faddress=new FAddress();
        foreach ($orders as $order){
            $ord=new Order;
            $ord->setId($order[0]);
            $ord->setCreationDate($order[1]);
            $ord->setTotal($order[2]);
            $ord->setArrivalTime($order[3]);
            $ord->setCoupon($fcoupon->load($order[4]));
            $ord->setCustomerId($order[5]);
            $ord->setPayment($fpayment->load($order[6]));
            $ord->setState($order[7]);
            $ord->setAddress($faddress->load($order[8]));
            array_push($o, $ord);
        }
        print_r($o);
        return $o;
    }

    public function loadNameSurname($id){
        $pdo = FConnection::connect();
        $query = 'select name, surname from customers where id='.$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $cus = $stmt->fetch();
        $customer=new Customer;
        $customer->setId($id);
        $customer->setName($cus[0]);
        $customer->setSurname($cus[1]);
        return $customer;
    }
}