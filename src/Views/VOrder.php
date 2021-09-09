<?php

namespace App\Views;

class VOrder {
//$ orders array di array dove ogni elemento è composto così [ordine, cliente, pagamento]
    public function getOrders($orders) {
        return view('admin/orders/orders', [
            'orders' => $orders
        ]);
    }
    public function checkout($id, $cart) {
        return view('orders/order', [
            'id' => $id,
            'cart'=>$cart
        ]);
    }
}