<?php
namespace App\Models;

class Order{
    private $id;
    private $creationDate;
    private $total;
    private $arrivalTime;
    private $paymentMethod;
    private $coupon;
    private $customer;
    private $restaurant;
    private $state;
    private $address;
    private $products=[];

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function setProducts(array $products): void
    {
        $this->products = $products;
    }

    public function getCreationDate()
    {
        return $this->creationDate;
    }

    public function setCreationDate($creationDate): void
    {
        $this->creationDate = $creationDate;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total): void
    {
        $this->total = $total;
    }

    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    public function setArrivalTime($arrivalTime): void
    {
        $this->arrivalTime = $arrivalTime;
    }

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod($paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function getCoupon()
    {
        return $this->coupon;
    }

    public function setCoupon($coupon): void
    {
        $this->coupon = $coupon;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function setCustomer($customer): void
    {
        $this->customer = $customer;
    }

    public function getRestaurant()
    {
        return $this->restaurant;
    }

    public function setRestaurant($restaurant): void
    {
        $this->restaurant = $restaurant;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state): void
    {
        $this->state = $state;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address): void
    {
        $this->address = $address;
    }
   // public $state;





}