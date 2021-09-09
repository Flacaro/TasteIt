<?php


namespace App\Models;


use App\Foundation\FCategory;

class Product {

    private $id;
    private $name;
    private $description;
    private $price;
    private $category;
    private $imagePath;
    private $timesOrdered;

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

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category): void
    {
        $this->category = $category;
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