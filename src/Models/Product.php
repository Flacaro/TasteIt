<?php


namespace App\Models;


class Product {

    private $productId;
    public $name;
    public $description;
    public $price;
    public $categoryId;

    public function __construct() {
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getProductId()
    {
        return $this->productId;
    }
//penso vada eliminato
    public function setProductId($productId): void
    {
        $this->productId = $productId;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }


    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function setCategoryId($categoryId): void
    {
        $this->categoryId = $categoryId;
    }




}