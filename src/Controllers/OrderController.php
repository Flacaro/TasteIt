<?php

namespace App\Controllers;

use App\Foundation\FCustomer;
use App\Foundation\FOrder;
use App\Models\Order;
use App\Views\VOrder;
use Pecee\SimpleRouter\SimpleRouter;

class OrderController {

    //verrebbe richiamata quando si va all'admin panel (mancano anche quella per vedere i clienti più fedeli etc)
    public function visualizeOrdersPending() {
        $FOrder = new FOrder();
        $FCustomer = new FCustomer();
        $orders = $FOrder->getAll();
        $orderDetails=[];
        foreach ($orders as $order){
            $customer=$FCustomer->getById($order->getCustomerId());
            array_push($orderDetails, array($order, $customer));
        }
        print_r($orderDetails);
        $vorder = new VOrder();
        $vorder->getOrders($orderDetails);
    }
    public function visualizeOrderDetails($orderId) {

    }
    public function orderAgain($orderId) {

    }

}