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
        $data=$forder->getOrdersPerMonth();
        $data1=[];
        $data2=[];
        //print_r($data);
        for($i=1; $i<=12; $i++){
            $data1[$i]=0;
        }
        foreach ($data as $element){
            $data1[$element[1]]=$element[0];
        }
        //print_r($data1);
        $vadmin= new VAdmin();
        //perchè array??
        $vadmin->visualizeStatistics($monthly[0],$ordersquantity[0], json_encode(array_values($data1)));
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

    public function showEditProduct($productId) {
        $vadmin= new VAdmin();
        $fproduct=new Fproduct();
        $product=$fproduct->getById($productId);
        $vadmin->showEditProduct($productId,$product);
    }
}