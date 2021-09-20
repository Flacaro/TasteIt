<?php

namespace App\Views;

class VOrder {
//$ orders array di array dove ogni elemento è composto così [ordine, cliente, pagamento]
    public function getOrders($orders) {
        return view('admin/order/orders', [
            'orders' => $orders
        ]);
    }
    public function checkout($cart, $addresses, $cards, $coupon) {
        return view('order/order', [
            'cart'=>$cart,
            'addresses'=>$addresses,
            'cards'=>$cards,
            'coupon'=>$coupon
        ]);
    }
}