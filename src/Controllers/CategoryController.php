<?php

namespace App\Controllers;

use App\Foundation\FCategory;
use App\Foundation\FProduct;
use App\Models\Category;
use App\Views\VCategory;

class CategoryController
{
    function getCategoryProducts($categoryId) {
        $FProduct = new FProduct();
        $products = $FProduct->getProductsByCategoryId($categoryId);
        $vcategory= new VCategory();
        $vcategory->viewProducts($products);
 }

    function index(){
        $FCategory = new FCategory();
        $categories = $FCategory->getAll();
        $vcategory= new VCategory();
        $vcategory->viewCategories($categories);

    }
    function getCategoryImage($categoryId){
        $FCategory = new FCategory();
        $category = $FCategory->getById($categoryId);

    }
    function create(){
        $name = $_POST["name"];
        $fcategory = new FCategory();
        $category=new Category();
        $category->setCategoryName($name);
        $fcategory->create($category);
        redirect(url('/admin/categories'));
}
}