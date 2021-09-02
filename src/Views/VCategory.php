<?php

namespace App\Views;

class VCategory
{
    public function viewProducts($products){
        return view('product/products', [
            'products' =>  $products
        ]);
    }
    public function viewCategories($categories){
        return view('category/category', [
            'categories' => $categories
        ]);
    }

}