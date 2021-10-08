<?php

namespace App\Controllers;

use App\Foundation\admin\FCoupon;
use App\Foundation\FAddress;
use App\Foundation\FCart;
use App\Foundation\FCategory;
use App\Foundation\FCustomer;
use App\Foundation\FFavourites;
use App\Foundation\FOrder;
use App\Foundation\FPaymentMethod;
use App\Foundation\FProduct;
use App\Foundation\FRestaurant;
use App\Foundation\FReview;
use App\Foundation\FPersistentManager;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Views\VOrder;
use Pecee\SimpleRouter\SimpleRouter;

class OrderController {

    //verrebbe richiamata quando si va all'admin panel (mancano anche quella per vedere i clienti più fedeli etc)
    public function visualizeOrderDetails($orderId) {

    }
    public function orderAgain($orderId) {

    }
    public function checkout($valid=NULL){
        //session_start();
        $faddress=new FAddress();
        $fcart=new FCart();
        $fpay=new FPaymentMethod();
        $fcoupon=new FCoupon();
        $session=Session::getInstance();
        if ($session->isUserLogged()){
            $cus = $session->loadUser();
            $cartId=$cus->getCart()->getId();
            $cart=$fcart->load($cartId);
            $cId=$cus->getId();
            $addresses = $faddress->loadFromCustomerId($cId);
            $cards= $fpay->loadFromCustomerId($cId);
            $c="";
            if (isset($_POST['option']) and $_POST['option']!=""){
                $c=$fcoupon->load($_POST['option']);
            }
            $vorder=new VOrder();
            $vorder->checkout($cart, $addresses, $cards, $c, $valid);
        }
    }

    public function applyCoupon(){
        $fcoupon=new FCoupon();
        if ($fcoupon->exist($_POST['option']&!$fcoupon->isExpired($_POST['option']))){
            self::checkout();
        }
        else {
            $valid=false;
            self::checkout($valid);
        }

    }

    public function createOrder(){
        $session=Session::getInstance();
        $forder = new FOrder();
        $fcoupon = new FCoupon();
        $faddress = new FAddress();
        $fcart = new FCart();
        $fpay = new FPaymentMethod();
        if ($session->isUserLogged()) {
            $cus = $session->loadUser();
            $cartId = $cus->getCart()->getId();
            $cart = $fcart->load($cartId);
            $coupon = $_POST['option'];
            if ($_POST['option']!=""){


                if ($fcoupon->exist($coupon)){
                    $c = $fcoupon->load($_POST['option']);
                }
                else{
                   //ti deve rimandare alla stessa pagina ma con un messaggio che indica che il coupon non esiste
                    self::checkout(false);

                }
            }
            $address = $faddress->load($_POST['address']);
            $card = $fpay->load($_POST['payment']);
            $order = new Order;
            $order->setCreationDate(date("Y-m-d"));
            $subtotal=0;
            foreach ($cart->getProducts() as $product){
                $subtotal=$subtotal+$product[0]->getPrice()*$product[1];
            }
            if ($coupon!=""){
                $total=$subtotal-($subtotal*$c->getPriceCut()/100);
            }
            else{$total=$subtotal;}
            $order->setTotal($total);
            if($_POST['option']!=""){
                $order->setCoupon($c);
            }
            $order->setCustomerId($cus->getId());
            $order->setPayment($card);
            $order->setState("Pending");
            $order->setAddress($address);
            $id=$forder->store($order);
            $forder->storeOrdersProducts($id, $cart->getProducts());
            $vorder = new VOrder();
            $vorder->summary($cart, $address, $card, $c);
        }
    }

    public function prova(){
        $customer = new FCategory();
        $customer->loadCategoryProducts(1);
        return view('prova', [
        ]);
    }

    public function prov(){
        $product = new FProduct();
        $product->getAll();
        return view('prov', [
        ]);
    }
}