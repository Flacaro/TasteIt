<?php
namespace App\Models;

class ShippingAddress{

    public $id;
    public $city;
    public $cap;
    public $street;
    public $homeNumber;
    public $userId;



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

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($customer){
        $this->userId=$customer;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

}