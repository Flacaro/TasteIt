<?php
namespace App\Models;

class Category{
    private $categoryId;
    public $categoryName;
    public $restaurantId;
    //è composizione, va rivisto
    public $categoryProducts = [];

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function setCategoryId($categoryId): void
    {
        $this->categoryId = $categoryId;
    }


    public function getCategoryName(){
        return $this->categoryName;
    }

    public function setCategoryName($name){
        $this->categoryName=$name;
    }

    public function getCategoryProducts(){
        return $this->categoryProducts;
    }

    public function setCategoryProducts($products=array()){
        $this->categoryProducts=$products;
    }

    public function getRestaurantId()
    {
        return $this->restaurantId;
    }

    public function setRestaurantId($restaurantId): void
    {
        $this->restaurantId = $restaurantId;
    }

}
