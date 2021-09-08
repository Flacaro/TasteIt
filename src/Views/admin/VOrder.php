<?php

namespace App\Views\admin;

class VOrder {

    public function acceptOrders()
    {
        return view("admin/orders/orders", [
        ]);
    }
    public function getOrders($orders) {
        return view('admin/orders/orders', [
            'orders' => $orders
        ]);
    }
}