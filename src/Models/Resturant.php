<?php
namespace App\Models;

class Resturant{
    public $resturantName;
    public $address;
    public $coupon;
    public $category;



    public function getResturantName(){
        return $this->resturantName;
    }
    public function setResturantName($resturantName){
        $this->resturantName=$resturantName;
    }


    public function getAddress(){
        return $this->address;
    }
    public function setAddress($address){
        $this->address=$address;
    }


    public function getCoupon()
    {
        return $this->coupon;
    }

    public function setCoupon($coupon){
        $this->coupon=$coupon;
    }
    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category){
        $this->category=$category;
    }





}