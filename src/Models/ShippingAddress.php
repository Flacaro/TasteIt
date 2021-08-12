<?php
namespace App\Models;

class ShippingAddress{

    public $city;
    public $cap;
    public $street;
    public $homeNumber;
    public $user;



    public function getcity()
    {
        return $this->city;
    }

    public function setCity($city){
        $this->city=$city;
    }

    public function getCap()
    {
        return $this->cap;
    }

    public function setCap($cap){
        $this->cap=$cap;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($street){
        $this->street=$street;
    }

    public function getHomeNumber()
    {
        return $this->homeNumber;
    }

    public function setHomeNumber($streetNumber){
        $this->homeNumber=$streetNumber;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($customer){
        $this->user=$customer;
    }
}