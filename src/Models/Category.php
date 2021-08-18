<?php
namespace App\Models;

class Category{
    private $id;
    public $categoryName;
    public $restaurantId;
    public $imageId;
    //è composizione, va rivisto
    private $categoryProducts = [];

    public function getId()
    {

        return $this->id;
    }

    public function getImageId()
    {
        return $this->imageId;
    }

    public function setImageId($imageId): void
    {
        $this->imageId = $imageId;
    }

    public function setId($categoryId): void
    {
        $this->id = $categoryId;
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
