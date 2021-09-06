<?php

namespace App\Views;

class VAdmin{
    public function visualizeStatistics($revenues, $numorders)
    {
        return view("admin/statistics", [
            "revenues"=>$revenues,
            "numorders"=>$numorders
        ]);
    }

    public function categoriesAdmin($categories)
    {
        return view("admin/categories", [
            "categories"=>$categories
        ]);
    }
    public function productsBestSellers()
    {
        return view("admin/productsBestSellers", [
        ]);
    }

    public function productsInCategory($products, $category){
        return view("admin/products-admin", [
            "products"=>$products,
            "category"=>$category
        ]);
    }
}