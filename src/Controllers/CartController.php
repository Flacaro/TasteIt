<?php

namespace App\Controllers;

use App\Foundation\FCart;
use App\Models\Cart;

class CartController {

 public function getProductsOfCart($cartId,$productId) {

 }
 public function create(){
     $fcarts = new FCart();
     $cart = new Cart();
     $cart->setCartId(NULL);
     $fcarts->create($cart);
 }
}