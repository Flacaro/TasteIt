<?php

namespace App\Controllers;

use App\Foundation\FOrder;
use App\Models\Order;
use Pecee\SimpleRouter\SimpleRouter;

class OrderController {

    //verrebbe richiamata quando si va all'admin panel (mancano anche quella per vedere i clienti più fedeli etc)
    public function visualizeOrders() {
        $FOrder = new FOrder();
        $orders = $FOrder->getAll();
        $smarty = $GLOBALS['smarty'];
        $smarty->assign('orders', $orders);
        return view('order', [
            'orders' => $orders
        ]);
    }
    public function visualizeOrderDetails($orderId) {

    }
    public function orderAgain($orderId) {

    }

}