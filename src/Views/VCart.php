<?php

namespace App\Views;

class VCart
{
    public function getProducts($cart, $total){
        $data=[
            //nome che useremo nel template
            "cart" => $cart,
            "total"=>$total
        ];
        return setData("cart/cart",$data);
    }

    public function viewCoupon($priceCut, $couponId){
        return view('cart/cart', [
            "priceCut" => $priceCut,
            "couponId" => $couponId
        ]);
    }
}