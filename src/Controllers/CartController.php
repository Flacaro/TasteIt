<?php

namespace App\Controllers;

use App\Foundation\FCart;
use App\Foundation\FOrder;
use App\Foundation\FProduct;
use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Product;
use PDO;

class CartController {

 public function getProductsOfCart($id) {
     $FCart = new FCart();
     //$cart dovrà andare a chiamare la funzione dentro $FCart
     $products=$FCart->getProductsOfCart($id);
    return view ("cart/cart", [
         //nome che useremo nel template
         "products" => $products,
         "cartId" => $id
     ]);
 }

 public function create() {
     $FCart = new FCart();
     $cart = new Cart();
     $cart->setId(NULL);
     $FCart->create($cart);
 }

 public function updateQuantity($cartId, $productId){
    $Fcart = new Fcart();
    $quantity = $Fcart->getQuantityOfProduct($cartId, $productId);
    if( $_POST['option'] == 'plus') {
        $Fcart->incrementQuantity($cartId, $productId, $quantity);
        redirect(url('productsOfCarts', ['id' => $cartId]));
    }
    else {
        $Fcart->decrementQuantity($cartId, $productId, $quantity);
        redirect(url('productsOfCarts', ['id' => $cartId]));
    }
 }

    public function addToCart($cartId, $productId) {
        $FCart = new FCart();
        $i = 0;
        $products = $FCart->getProductsOfCart($cartId);
        $quantity = $FCart->getQuantityOfProduct($cartId, $productId);
        foreach ($products as $product) {
            if($productId == $product->getId()) {
                $FCart->incrementQuantity($cartId,$productId,$quantity);
                $i = 1;
                redirect(url('products'));
            }
        }
            if($i == 0) {
                $FCart->addToCart($cartId, $productId);
                redirect(url('products'));
        }
    }

    public function destroy($cartId, $productId)
    {
        $FCart = new FCart();
        if ($_POST['option'] == 'delete') {
            $FCart->deleteFromCart($cartId, $productId);
            redirect(url('productsOfCarts', ['id' => $cartId]));
        }
    }

    public function getCoupon($couponId) {
     $coupon = new FCart();
     $priceCut = $coupon->getCoupon($couponId);
     return view('cart/cart', [
         "priceCut" => $priceCut,
         "couponId" => $couponId
     ]);
    }


}





