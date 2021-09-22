<?php

namespace App\Views;

use App\Foundation\FProduct;

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

    public function summary($cart, $address, $card, $coupon){
        return view('order/order-summary', [
        'cart'=>$cart,
        'address'=>$address,
        'card'=>$card,
        'coupon'=>$coupon
        ]);
    }

}