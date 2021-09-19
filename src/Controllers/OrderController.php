<?php

namespace App\Controllers;

use App\Foundation\FAddress;
use App\Foundation\FCart;
use App\Foundation\FCategory;
use App\Foundation\FCustomer;
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
    public function checkout(){
        //session_start();
        $faddress=new FAddress();
        $fcart=new FCart();
        $fpay=new FPaymentMethod();
        $session=Session::getInstance();
        if ($session->isUserLogged()){
            $cus=unserialize($_SESSION["customer"]);
            $cartId=$cus->getCart()->getId();
            $cart=$fcart->load($cartId);
            $cId=$cus->getId();
            $addresses = $faddress->loadFromCustomerId($cId);
            $cards= $fpay->loadFromCustomerId($cId);
            $vorder=new VOrder();
            $vorder->checkout($cart, $addresses, $cards);
        }
    }


    public function prova(){
        $customer = new FCategory();
        $customer->loadCategoryProducts(1);
        return view('prova', [
        ]);
    }

    public function prov(){
        $product = new \App\Foundation\admin\FOrder();
        $product->getAll();
        return view('prov', [
        ]);
    }
}