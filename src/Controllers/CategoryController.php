<?php

namespace App\Controllers;

use App\Foundation\FCategory;
use App\Foundation\FProduct;
use App\Models\Category;
use App\Views\VCategory;

class CategoryController
{
    function getCategoryProducts($categoryId) {
        $FCategory = new FCategory();
        $products = $FCategory->loadCategoryProducts($categoryId);
        $vCategory= new VCategory();
        $vCategory->viewProducts($products);
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
}