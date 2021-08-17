<?php

namespace App\Models;

class Favourites
{
    private $id;
    private $products = array();

    public function getProducts(): array
    {
        return $this->products;
    }


    public function setProducts(array $products): void
    {
        $this->products = $products;
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