<?php

namespace App\Models;

class Favourites{
    private $listid;

    private $user;
    private $products = array();

    public function getListid()
    {
        return $this->listid;
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