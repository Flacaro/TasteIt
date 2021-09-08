<?php

namespace App\Foundation\admin;

use App\Foundation\Foundation;

class FCoupon extends Foundation {

    public function __construct() {
        parent::__construct('coupons', 'Coupon');
    }

}