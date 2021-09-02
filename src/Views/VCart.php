<?php

namespace App\Views;

class VCart
{
    public function getProducts($products, $cartId){
        return view ("cart/cart", [
            //nome che useremo nel template
            "products" => $products,
            "cartId" => $cartId
        ]);
    }

    public function viewCoupon($priceCut, $couponId){
        return view('cart/cart', [
            "priceCut" => $priceCut,
            "couponId" => $couponId
        ]);
    }
}