<?php

namespace App\Controllers;

use App\Foundation\FCart;
use App\Foundation\FOrder;
use App\Foundation\FProduct;
use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Product;
use App\Views\VCart;
use PDO;

class CartController {

 public function getProductsOfCart() {
     $session = Session::getInstance();
     $FCart = new FCart();
     if ($session->isUserLogged()) {
         $cus = $session->loadUser();
         $cartId = $cus->getCart()->getId();
         //$products = $cart->getProducts();
         $products = $FCart->getProductsOfCart($cartId);
        /* foreach ($products as $p) {
             printObject($p[1]);
         }*/
         $vCart = new VCart();
         $vCart->getProducts($products, $cartId);
     }
 }

 public function create() {
     $FCart = new FCart();
     $cart = new Cart();
     $cart->setId(NULL);
     $FCart->store($cart);
 }

 public function updateQuantity($productId){
     $session = Session::getInstance();
     if ($session->isUserLogged()) {
         $fCart = new Fcart();
         $cus = $session->loadUser();
         $cartId = $cus->getCart()->getId();
         $plus = (int)$_POST['option'];
         $quantity = $fCart->getQuantity($cartId, $productId);
         if ($plus == 'plus') {
             $fCart->incrementQuantity($cartId, $productId, $quantity);
         } else {
             $fCart->decrementQuantity($cartId, $productId, $quantity);
         }
         redirect(url('productsOfCarts', ['cartId' => $cartId]));
     }
 }

    public function addToCart($productId) {
        $session = Session::getInstance();
        if ($session->isUserLogged()) {
            $FCart = new FCart();
            $cart = new Cart();
            $cus = $session->loadUser();
            $cartId = $cus->getCart()->getId();
            $products = $cart->getProducts();
            $i = 0;
            //$products = $FCart->getProductsOfCart($cartId);
            $quantity = $FCart->getQuantity($cartId, $productId);
            foreach ($products as $product) {
                if($productId === $product->getId()) {
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
    }

    public function destroy($productId) {
        $session = Session::getInstance();
        if ($session->isUserLogged()) {
            $FCart = new FCart();
            $FProduct = new FProduct();
            $cus = $session->loadUser();
            $cartId = $cus->getCart()->getId();
            $cart = $FCart->load($cartId);
            $product = $FProduct->load($productId);
            if ($_POST['option'] == 'delete') {
                $FCart->deleteFromCart($cart, $product);
                redirect(url('productsOfCarts', ['cartId' => $cartId]));
            }
        }
    }

    public function getCoupon($couponId) {
     $coupon = new FCart();
     $priceCut = $coupon->getCoupon($couponId);
     $vcart = new VCart();
     $vcart->viewCoupon($priceCut, $couponId);
    }


}





