<?php


namespace App\Models;


use App\Foundation\FCategory;

class Product {

    private $id;
    public $name;
    public $description;
    public $price;
    public $categoryId;
    public $quantity;
    public $imagePath;
    public $timesOrdered;

    public function __construct() {
    }

    public function getImagePath()
    {
        return $this->imagePath;
    }

    public function setImagePath($imagePath): void
    {
        $this->imagePath = $imagePath;
    }

    public function getTimesOrdered()
    {
        return $this->timesOrdered;
    }

    public function setTimesOrdered($timesOrdered): void
    {
        $this->timesOrdered = $timesOrdered;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }
//penso vada eliminato
    public function setId($id): void
    {
        $this->id = $id;
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

    public function getCategory(){
        $FCategory= new FCategory;
        return $FCategory->getbyId($this->getCategoryId());
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }



}