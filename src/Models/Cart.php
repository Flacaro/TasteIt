<?php

namespace App\Models;

class Cart {
    private $cartId;
    public $products = [];

    public function getId()
    {
        return $this->cartId;
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