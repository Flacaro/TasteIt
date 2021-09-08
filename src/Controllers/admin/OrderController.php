<?php

namespace App\Controllers\admin;

use App\Views\admin\VOrder;

class OrderController {

    public function acceptOrders() {
        $vadmin= new VOrder();
        $vadmin->acceptOrders();
    }

}