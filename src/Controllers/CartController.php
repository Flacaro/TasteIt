<?php

namespace App\Controllers;

use App\Foundation\FCart;
use App\Foundation\FOrder;
use App\Foundation\FProduct;
use App\Models\Cart;
use App\Models\Order;
use PDO;

class CartController {

 public function getProductsOfCart($id) {
     $FCart = new FCart();
     //$cart dovrà andare a chiamare la funzione dentro $FCart
     $products=$FCart->getProductsOfCart($id);
    return view ("cart", [
         //nome che useremo nel template
         "products"=>$products
     ]);




 }

 public function create()
 {
     $FCart = new FCart();
     $cart = new Cart();
     $cart->setId(NULL);
     $FCart->create($cart);

 }
}