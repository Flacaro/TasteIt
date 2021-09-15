<?php

namespace App\Foundation;

use App\Models\Cash;
use App\Models\CreditCard;

class FPaymentMethod
{
    public function load($id){
        $pdo = FConnection::connect();
        $query = 'select cp.id, cp.cardNumber, cp.expirationDate, cp.cvv, cp.cardHolder, p.method from customers_paymentmethods as cp, paymentmethods as p where cp.id='.$id.' and cp.paymentId=p.id';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $payment=$stmt->fetch();
        if ($payment[5]=="credit card"){
            $c=new CreditCard();
            $c->setId($payment[0]);
            $c->setNumber($payment[1]);
            $c->setExpirationDate($payment[2]);
            $c->setCvv($payment[3]);
            $c->setCardHolder($payment[4]);
        }
        else{
            $c=new Cash;
        }
        return $c;
    }

}