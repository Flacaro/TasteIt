<?php

namespace App\Controllers\admin;

use App\Foundation\FCustomer;
use App\Foundation\FOrder;
use App\Foundation\FProduct;
use App\Foundation\FAddress;
use App\Models\Order;
use App\Views\admin\VOrder;


class OrderController {

    public function visualizeOrdersPending() {
        $FOrder = new FOrder();
        $orders=$FOrder->getOrders();
        $vorder = new VOrder();
        $vorder->getOrders($orders);
    }

    public function visualizeOrderDetails($id){
        $forder=new FOrder();
        $fcustomer=new FCustomer();
        $faddress=new FAddress();
        $order=$forder->getById($id);
        $products=$forder->getOrderProducts($id);
        $customer=$fcustomer->getById($order->getCustomer()->getId());
        $address=$faddress->getById($order->getAddress()->getId());
        $vorder = new VOrder();
        $vorder->getOrderDetails($order, $customer, $products, $address);
    }

    public function acceptOrder($id){
        $forder=new FOrder();
        $oldorder=$forder->getById($id);
        $order= new Order;
        $order->setState("Accepted");
        $forder->updateState($id, $order);
        //redirect(url("/admin/orders"));
    }
}