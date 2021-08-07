<?php

namespace App\Models;

class ShoppingCart{
    private $scartid;
    //dobbiamo dichiararlo che è della classe utente?
    private $user;
    private $products = array();

    public function getId()
    {
        return $this->scartid;
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

    public function setProducts($productsarray=array())
    {
        $this->products = $productsarray;
    }
}