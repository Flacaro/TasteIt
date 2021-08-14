<?php

namespace App\Controllers;

use App\Foundation\FCart;
use App\Models\Cart;
use PDO;

class CartController {

 public function getProductsOfCart($id,$productId) {

 }

 public function create()
 {
     $fcarts = new FCart();
     $cart = new Cart();
     $cart->setId(NULL);
     $fcarts->create($cart);


 }
}