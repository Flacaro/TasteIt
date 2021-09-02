<?php

namespace App\Controllers;

use App\Foundation\FOrder;
use App\Models\Order;
use App\Views\VOrder;
use Pecee\SimpleRouter\SimpleRouter;

class OrderController {

    //verrebbe richiamata quando si va all'admin panel (mancano anche quella per vedere i clienti più fedeli etc)
    public function visualizeOrders() {
        $FOrder = new FOrder();
        $orders = $FOrder->getAll();
        $vorder = new VOrder();
        $vorder->getOrders($orders);
    }
    public function visualizeOrderDetails($orderId) {

    }
    public function orderAgain($orderId) {

    }

}