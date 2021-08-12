<?php
namespace App\Models;

class Category{
    private $categoryId;
    public $categoryName;
    //è composizione, va rivisto
    public $categoryProducts = [];
    //serve anche restaurant?

    public function getId(){
        return $this->categoryId;
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
}
