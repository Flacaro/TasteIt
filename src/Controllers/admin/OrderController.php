<?php

namespace App\Controllers\admin;

use App\Foundation\FCustomer;
use App\Foundation\FOrder;
use App\Views\admin\VOrder;

class OrderController {

    public function acceptOrders() {
        $vadmin= new VOrder();
        $vadmin->acceptOrders();
    }
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
}