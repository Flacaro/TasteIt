<?php

namespace App\Controllers;

use App\Foundation\FCategory;
use App\Foundation\FOrder;
use App\Foundation\FProduct;
use App\Views\VAdmin;

class AdminController{
    public function visualizeStatistics(){
        $forder=new FOrder();
        $monthly=$forder->getMonthlyRevenues();
        $ordersquantity=$forder->getMonthlyOrdersQuantity();
        $vadmin= new VAdmin();
        //perchè array??
        $vadmin->visualizeStatistics($monthly[0],$ordersquantity[0]);
    }

    public function categoriesAdmin(){
        $fcategories=new FCategory();
        $categories= $fcategories->getAll();
        $vadmin= new VAdmin();
        $vadmin->categoriesAdmin($categories);
    }
    public function productsBestSellers(){
        $vadmin= new VAdmin();
        $vadmin->productsBestSellers();
    }


    public function productsInCategory($id)
    {
        $fproduct = new FProduct();
        $fcategory = new FCategory();
        $category = $fcategory->getById($id);
        $products = $fproduct->getProductsByCategoryId($id);
        $vadmin = new VAdmin();
        $vadmin->productsInCategory($products, $category);
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