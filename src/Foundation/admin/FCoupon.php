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

}