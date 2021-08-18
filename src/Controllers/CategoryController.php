<?php

namespace App\Controllers;

use App\Foundation\FCategory;
use App\Foundation\FProduct;

class categoryController
{
    function getCategoryProducts($categoryId) {
        $FProduct = new FProduct();
        $products = $FProduct->getProductsByCategoryId($categoryId);
        return view('product/products', [
            'products' =>  $products
        ]);
 }

    function index(){
        $FCategory = new FCategory();
        $categories = $FCategory->getAll();
        return view('category/category', [
            'categories' => $categories
        ]);

    }
    function getCategoryImage($categoryId){
        $FCategory = new FCategory();
        $category= $FCategory->getById($categoryId);
        $imagePath = $FCategory->getImageFromId($category->getImageId());
        return view('category/category', [
            'images' => $imagePath
        ]);

    }
}