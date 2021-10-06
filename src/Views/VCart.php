<?php

namespace App\Views;

class VCart
{
    public function getProducts($products, $cartId){
            $data=[
            "products" => $products,
            "cartId" => $cartId
            ];
        return setData("cart/cart", $data);
    }

    public function viewCoupon($priceCut, $couponId){
        return view('cart/cart', [
            "priceCut" => $priceCut,
            "couponId" => $couponId
        ]);
    }
}