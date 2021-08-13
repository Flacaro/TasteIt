<?php
namespace App\Models;

class Restaurant{
    public $restaurantName;
    private $restaurantId;
    public $address;
    public $email;
    public $password;


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

    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function getRestaurantId()
    {
        return $this->restaurantId;
    }

    public function setRestaurantId($restaurantId): void
    {
        $this->restaurantId = $restaurantId;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }





}