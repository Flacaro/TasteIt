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

 public function create()
 {
     $FCart = new FCart();
     $cart = new Cart();
     $cart->setId(NULL);
     $FCart->create($cart);

 }

 public function updateQuantity($cartId, $productId){
    $Fcart = new Fcart();
    $quantity = $Fcart->getQuantityOfProduct($cartId, $productId);
    if( $_POST['option'] == 'plus') {
        $Fcart->incrementQuantity($productId, $quantity);
        header("Location: /carts/{$cartId}/products");
    }
    elseif ($_POST['option'] == 'minus') {
        $Fcart->decrementQuantity($productId, $quantity);
        header("Location: /carts/{$cartId}/products");
    }
    return view('cart/cart', [
        "productId" => $productId,
        "cartId" => $cartId,
        "quantity" => $quantity
    ]);
 }

    public function destroy($cartId, $productId)
    {
        $FCart = new FCart();
        if ($_POST['option'] == 'delete') {
            $FCart->deleteFromCart($cartId, $productId);
            header("Location: /carts/{$cartId}/products");
        }
        return view('cart/cart', [
            "cartId" => $cartId,
            "productId" => $productId
        ]);
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





