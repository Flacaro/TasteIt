<?php

namespace App\Controllers;

use App\Foundation\FOrder;
use App\Models\Order;
use App\Foundation\FRestaurant;
use App\Models\Restaurant;
use Pecee\SimpleRouter\SimpleRouter;

class RestaurantController {

    public function acceptOrder() {


    }

    public function addOrder(){
        $FOrder = new FOrder();
        $order = new Order();
        $order->setId(NULL);
        $order->setCreationDate(date('Y-m-d'));
        $order->setTotal(110.5);
        $order->setArrivalTime(time());
        $order->setPayment(1);
        $order->setCoupon(1);
        $order->setUser(1);
        $FOrder->create($order);
    }
    public function addCategory($categoryId, $categories) {

    }
    public function addCoupon($couponId){

    }
    public function addProduct($name, $description, $price, $category) {

    }
    public function makeOffer($product, $start, $end, $discountPrice) {

    }
    public function createCoupon($discount, $start, $end, $users) {

    }
    public function sendCoupon($userId){

    }
    public function getAdminPanel(){

    }


}