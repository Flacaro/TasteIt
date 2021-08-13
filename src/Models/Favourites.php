<?php

namespace App\Models;

class Favourites{
    private $favId;
    private $products = array();

    public function getListid()
    {
        return $this->listid;
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