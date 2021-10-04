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
        $category=$FCategory->load($categoryId);
        $products = $FCategory->loadCategoryProducts($categoryId);
        $vCategory= new VCategory();
        $vCategory->viewProducts($products, $category);
 }

    function index(){
        $vcategory= new VCategory();
        $vcategory->viewCategories();

    }
    function getCategoryImage($categoryId){
        $FCategory = new FCategory();
        $category = $FCategory->getById($categoryId);

    }
}