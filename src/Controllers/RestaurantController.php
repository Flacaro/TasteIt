<?php

namespace App\Controllers;

use App\Foundation\FOrder;
use App\Models\Order;
use App\Foundation\FRestaurant;
use App\Models\Restaurant;
use Pecee\SimpleRouter\SimpleRouter;

class RestaurantController {

    public function acceptOrder($orderId) {
        $FOrder = new FOrder();
        $oldOrder=$FOrder->getById($orderId);
        //superglobal, come parametro ci va passato il nome dell'input a cui fare riferimento
        $state = $_POST['state'];
        $arrivalTime = $_POST['arrivalTime'];
        $order = new Order();
        $order->setState($state);
        $order->setArrivalTime($arrivalTime);
        $order->setCreationDate($oldOrder->getCreationDate());
        $order->setRestaurantId($oldOrder->getRestaurantId());
        $order->setCouponId($oldOrder->getCouponId());
        $order->setPaymentId($oldOrder->getPaymentId());
        $order->setTotal($oldOrder->getTotal());
        $order->setUserId($oldOrder->getUserId());
        $FOrder->update($orderId, $order);

    }

    public function edit($id) {
        $FOrder = new FOrder();
        $order = $FOrder->getById($id);
        return view('order-accept.tpl', [
            'id' => $id,
            'creationDate' =>$order->getCreationDate(),
            'total'=> $order->getTotal(),
            'id' => $order->getPaymentId(),
            'arrivalTime' => $order->getArrivalTime(),
            'couponId' => $order->getCouponId(),
            'userId' => $order->getUserId(),
            'id' => $order->getRestaurantId(),
        ]);
    }

    public function addOrder(){
        $FOrder = new FOrder();
        $order = new Order();
        $order->setId(NULL);
        $order->setCreationDate(date('Y-m-d'));
        $order->setTotal(110.5);
        $order->setArrivalTime(time());
        $order->setPaymentId(1);
        $order->setCouponId(1);
        $order->setRestaurantId(1);
        $order->setUserId(3);
        $FOrder->create($order);
    }
    public function addCategory($categoryId, $categories) {

    }
    public function addCoupon($couponId){

    }
    public function addProduct($name, $description, $price, $category) {

    }
    public function createCoupon($discount, $start, $end, $users) {

    }
    public function sendCoupon($userId){

    }
    public function getAdminPanel(){

    }
    public function visualizeContactPage(){
        $FRestaurant = new FRestaurant();
        $restaurant=$FRestaurant->getById(1);
        return view('contact-us', [
            'restaurant'=> $restaurant
        ]);
    }

}