<?php

namespace App\Controllers\admin;

use App\Foundation\FCustomer;
use App\Foundation\FOrder;
use App\Foundation\FProduct;
use App\Foundation\FShippingAddress;
use App\Views\admin\VOrder;


class OrderController {

    public function acceptOrders() {
        $vadmin= new VOrder();
        $vadmin->acceptOrders();
    }
    public function visualizeOrdersPending() {
        $FOrder = new FOrder();
        $orders=$FOrder->getOrdersWithState();
        $vorder = new VOrder();
        $vorder->getOrders($orders);
    }

    public function visualizeOrderDetails($id){
        $forder=new FOrder();
        $fcustomer=new FCustomer();
        $faddress=new FShippingAddress();
        $order=$forder->getById($id);
        $products=$forder->getOrderProducts($id);
        $customer=$fcustomer->getById($order->getCustomerId());
        $address=$faddress->getById($order->getAddressId());
        $vorder = new VOrder();
        $vorder->getOrderDetails($order, $customer, $products, $address);
    }

    public function acceptOrder($id){
        redirect(url("/admin/orders"));
    }
}