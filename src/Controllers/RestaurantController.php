<?php

namespace App\Controllers;

use App\Foundation\FOrder;
use App\Models\Order;
use App\Foundation\FRestaurant;
use App\Models\Restaurant;
use App\Views\VOrder;
use App\Views\VRestaurant;
use Pecee\SimpleRouter\SimpleRouter;

class RestaurantController {

    //questa gia sta in orderController dell'admin(?)
/*    public function acceptOrder($orderId) {
        $FOrder = new FOrder();
        $oldOrder=$FOrder->load($orderId);
        //superglobal, come parametro ci va passato il nome dell'input a cui fare riferimento
        $state = $_POST['state'];
        $arrivalTime = $_POST['arrivalTime'];
        $order = new Order();
        $order->setStateId($state);
        $order->setArrivalTime($arrivalTime);
        $order->setCreationDate($oldOrder->getCreationDate());
        $order->setRestaurantId($oldOrder->getRestaurantId());
        $order->setCouponId($oldOrder->getCouponId());
        $order->setPaymentId($oldOrder->getPaymentId());
        $order->setTotal($oldOrder->getTotal());
        $order->setCustomerId($oldOrder->getUserId());
        $FOrder->update($orderId, $order);

    }*/

    //?
 /*   public function addOrder(){
        $FOrder = new FOrder();
        $order = new Order();
        $order->setId(NULL);
        $order->setCreationDate(date('Y-m-d'));
        $order->setTotal(110.5);
        $order->setArrivalTime(time());
        $order->setPaymentId(1);
        $order->setCouponId(1);
        $order->setRestaurantId(1);
        $order->setCustomerId(3);
        $FOrder->create($order);
    }*/

    public function visualizeContactPage(){
        $FRestaurant = new FRestaurant();
        $restaurant = $FRestaurant->getByEmail("tasteit@gmail.com");
        $vRestaurant = new VRestaurant();
        $vRestaurant->getContactPage($restaurant);
    }


    public function getAdminPanel(){

    }

}