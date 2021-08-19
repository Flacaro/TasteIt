<?php
namespace App\Models;

use App\Controllers\categoryController;
use App\Foundation\FCategory;
use App\Foundation\FImage;

class Category{
    private $id;
    public $categoryName;
    public $restaurantId;
    //è composizione, va rivisto
    private $categoryProducts = [];
    public $imagePath;

    public function getId()
    {

        return $this->id;
    }

    public function getImagePath()
    {
        return $this->imagePath;
    }

    public function setImagePath($imagePath): void
    {
        $this->imagePath = $imagePath;
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
