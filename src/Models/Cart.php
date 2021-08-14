<?php

namespace App\Models;

class Cart {
    private $id;
    private $products = [];

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->$id = $id;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function setProducts($productsArray=array())
    {
        $this->products = $productsArray;
    }




}