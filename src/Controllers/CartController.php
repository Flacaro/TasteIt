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
          $cart = $FCart->load($cartId);
         //$products = $cart->getProducts();
         $products = $FCart->getProductsOfCart($cartId);
         $total = 0;
         foreach ($products as $p){
         $total = $total+$p[3]*$p[5];
     }
        //print_r($total);
        /* foreach ($products as $p) {
             printObject($p);
         }*/
         $vCart = new VCart();
         $vCart->getProducts($cart, $total, $products);
     }

 }

 public function create() {
     $FCart = new FCart();
     $cart = new Cart();
     $cart->setId(NULL);
     $FCart->store($cart);
 }

 public function updateQuantity(){
     $session = Session::getInstance();
     if ($session->isUserLogged()) {
         $fCart = new Fcart();
         $cus = $session->loadUser();
         $cartId = $cus->getCart()->getId();
         $productId = $_POST['productId'];
         $quantity = $fCart->getQuantity($cartId, $productId);
         //print_r($productId);
        if ($_POST['option'] == 'plus') {
             $fCart->incrementQuantity($cartId, $productId, $quantity[0]);
         } else {
             $fCart->decrementQuantity($cartId, $productId, $quantity[0]);
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

    public function destroy() {
        $session = Session::getInstance();
        if ($session->isUserLogged()) {
            $FCart = new FCart();
            $FProduct = new FProduct();
            $cus = $session->loadUser();
            $cartId = $cus->getCart()->getId();
            $cart = $FCart->load($cartId);
            $productId = $_POST['productId'];
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





