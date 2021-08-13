<?php

namespace App\Models;

class Cart {
    private $cartId;
    //public $products = [];

    public function getCartId()
    {
        return $this->cartId;
    }

    public function setCartId($cartId)
    {
        $this->$cartId = $cartId;
    }

   /* public function getProducts()
    {
        return $this->products;
    }

    public function setProducts($productsArray=array())
    {
        $this->products = $productsArray;
    }*/



}