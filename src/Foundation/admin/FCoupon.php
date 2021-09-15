<?php

namespace App\Foundation\admin;

use App\Foundation\FConnection;

class FCoupon extends FConnection {

    public function __construct() {
        parent::__construct('coupons', 'Coupon');
    }

}