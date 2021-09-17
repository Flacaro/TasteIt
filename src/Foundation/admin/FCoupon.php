<?php

namespace App\Foundation\admin;

use App\Foundation\FConnection;
use App\Models\Coupon;

class FCoupon extends FConnection {

    public function __construct() {
        parent::__construct('coupons', 'Coupon');
    }

    public function load($id){
        $pdo = FConnection::connect();
        $query = 'select * from coupons where id='.$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $coupon=$stmt->fetch();
        $c=new Coupon;
        $c->setId($coupon[0]);
        $c->setPriceCut($coupon[1]);
        $c->setExpirationDate($coupon[2]);
        return $c;
    }

    public function exist($id){
        $pdo = FConnection::connect();
        $query="select * from coupons where id=".$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $coupon=$stmt->fetch();
        if ($coupon!=NULL){
            return true;
        }
        else{
            return false;
        }
    }
    public function store($coupon){
        $pdo = FConnection::connect();
        $query="insert into coupons values ('".$coupon->getId()."', '".$coupon->getPriceCut()."', '".$coupon->getExpirationDate()."')";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }
    //non diamo la possibilità di fare update al coupon, quindi niente update

    public function delete($id){
        $pdo = FConnection::connect();
        $query="delete from coupons where id=".$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }

}