<?php

namespace App\Controllers;

class RestaurantController {

    public function acceptOrder() {


    }

    public function addOrder($total, $arrivalTime, $payment, $couponid, $userid){
        $FOrder = new FOrder();
        $order = new Order();
        $order->setId(NULL);
        $order->setCreationDate(date("h:i:sa"));
        $order->setTotal($total);
        $order->setArrivalTime($arrivalTime);
        $order->setPayment($payment);
        $order->setCoupon($couponid);
        $order->setUser($userid);
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