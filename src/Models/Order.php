<?php
namespace App\Models;

class Order{
    private $id;
    public $creationDate;
    public $total;
    public $arrivalTime;
    public $paymentId;
    public $couponId;
    public $customerId;
    public $restaurantId;
    public $state;
    //public $products=array();

    public function getState()
    {
        return $this->state;
    }

    public function setState($state): void
    {
        $this->state = $state;
    }

    public function __construct() {
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id=$id;
    }

    public function getCreationDate()
    {
        return $this->creationDate;
    }

    public function setCreationDate($date){
        $this->creationDate=$date;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total){
        $this->total=$total;
    }

    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    public function setArrivalTime($time){
        $this->arrivalTime=$time;
    }

    public function getPaymentId()
    {
        return $this->paymentId;
    }

    public function setPaymentId($transaction){
        $this->paymentId=$transaction;
    }

    public function getCouponId()
    {
        return $this->couponId;
    }

    public function setCouponId($couponId){
        $this->couponId=$couponId;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function setCustomerId($customerId){
        $this->customerId=$customerId;
    }

    public function getRestaurantId()
    {
        return $this->restaurantId;
    }

    public function setRestaurantId($restaurantId): void
    {
        $this->restaurantId = $restaurantId;
    }

}