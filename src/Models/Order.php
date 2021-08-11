<?php
namespace App\Models;

class Order{
    private $id;
    public $creationDate;
    public $total;
    public $arrivalTime;
    public $payment;
    public $coupon;
    public $user;

    public function __construct() {
    }

    public function getId()
    {
        return $this->id;
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

    public function getPayment()
    {
        return $this->payment;
    }

    public function setPayment($transaction){
        $this->payment=$transaction;
    }

    public function getCoupon()
    {
        return $this->coupon;
    }

    public function setCoupon($coupon){
        $this->coupon=$coupon;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($customer){
        $this->user=$customer;
    }
}