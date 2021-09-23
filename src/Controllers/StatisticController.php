<?php

namespace App\Controllers;


use App\Foundation\FRestaurant;
use App\Foundation\FCategory;
use App\Foundation\FOrder;
use App\Foundation\FProduct;
use App\Models\Coupon;
use App\Views\VStatistic;

class StatisticController{

    public function visualizeStatistics(){
        $fOrder=new FOrder();
        $monthly=$fOrder->getMonthlyRevenues();
        $ordersquantity=$fOrder->getMonthlyOrdersQuantity();
        $data=$fOrder->getOrdersPerMonth();
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
        $vadmin= new VStatistic();
        //perchè array??
        $vadmin->visualizeStatistics($monthly[0],$ordersquantity[0], json_encode(array_values($data1)));
    }

}