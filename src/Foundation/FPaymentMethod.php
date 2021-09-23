<?php

namespace App\Foundation;

use App\Models\Cash;
use App\Models\CreditCard;

class FPaymentMethod {
//load della carta di credito
        public function load($id){
        $pdo = FConnection::connect();
        $query = 'select cp.id, cp.cardNumber, cp.expirationDate, cp.cvv, cp.cardHolder from customers_paymentmethods as cp where cp.id='.$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $payment=$stmt->fetch();
            $c=new CreditCard();
            $c->setId($payment[0]);
            $c->setNumber($payment[1]);
            $c->setExpirationDate($payment[2]);
            $c->setCvv($payment[3]);
            $c->setCardHolder($payment[4]);
        return $c;
    }

    function delete($id) {
            $pdo = FConnection::connect();
            $query = 'delete from paymentMethods where id = ' . $id . ';';
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            //$stmt->debugDumpParams();
    }

    function getAll() {
        $pdo = FConnection::connect();
        $query = "select * from paymentMethods;";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $payments = $stmt->fetchAll();
        $pay = [];
        foreach ($payments as $payment) {
            array_push($pay, $payment);
        }
        print_r($pay);
        return $pay;
    }

    function loadFromCustomerId($id){
        $pdo = FConnection::connect();
        $query = 'select cp.id, cp.cardNumber, cp.expirationDate, cp.cvv, cp.cardHolder from customers_paymentmethods as cp where cp.customerId='.$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $payments=$stmt->fetchAll();
        $cards=[];
        foreach($payments as $payment){
                $c=new CreditCard();
                $c->setId($payment[0]);
                $c->setNumber($payment[1]);
                $c->setExpirationDate($payment[2]);
                $c->setCvv($payment[3]);
                $c->setCardHolder($payment[4]);
                array_push($cards, $c);
        }
        //$stmt->debugDumpParams();
        return $cards;
}
}