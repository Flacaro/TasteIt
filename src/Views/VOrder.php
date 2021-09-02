<?php

namespace App\Views;

class VOrder {

    public function getOrders($orders) {
        return view('order', [
            'orders' => $orders
        ]);
    }
}