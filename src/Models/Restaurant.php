<?php
namespace App\Models;

class Restaurant{
    public $restaurantName;
    public $address;
    public $coupon;
    public $category;


    public function getRestaurantName()
    {
        return $this->restaurantName;
    }


    public function setRestaurantName($restaurantName): void
    {
        $this->restaurantName = $restaurantName;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address): void
    {
        $this->address = $address;
    }

    public function getCoupon()
    {
        return $this->coupon;
    }

    public function setCoupon($coupon): void
    {
        $this->coupon = $coupon;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category): void
    {
        $this->category = $category;
    }









}