<?php

namespace App\Controllers;

use App\Views\VAdmin;

class AdminController{
    public function visualizeAdminPanel(){
        $vadmin= new VAdmin();
        $vadmin->visualizeAdminPanel();
    }

    public function categoriesAdmin(){
        $vadmin= new VAdmin();
        $vadmin->categoriesAdmin();
    }
    public function productsBestSellers(){
        $vadmin= new VAdmin();
        $vadmin->productsBestSellers();
    }

    public function getCustomersWhoSpentMore() {
        $vadmin= new VAdmin();
        $vadmin->customers();
    }
    public function acceptOrders() {
        $vadmin= new VAdmin();
        $vadmin->acceptOrders();
    }
    public function sendCoupon() {
        $vadmin= new VAdmin();
        $vadmin->sendCoupon();
    }
}