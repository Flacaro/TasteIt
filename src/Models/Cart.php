<?php

namespace App\Models;

class Cart {
    private $cartId;
    public $user;
    public $products = array();

    public function getId()
    {
        return $this->cartId;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($customer)
    {
        $this->user = $customer;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function setProducts($productsArray=array())
    {
        $this->products = $productsArray;
    }


    public function getCartId()
    {
        return $this->cartId;
    }


    public function setCartId($cartId): void
    {
        $this->cartId = $cartId;
    }


}