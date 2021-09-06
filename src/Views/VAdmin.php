<?php

namespace App\Views;

class VAdmin{
    public function visualizeStatistics($revenues, $numorders, $data)
    {
        return view("admin/statistics", [
            "revenues"=>$revenues,
            "numorders"=>$numorders,
            "data"=>$data
        ]);
    }

    public function categoriesAdmin($categories)
    {
        return view("admin/categories", [
            "categories"=>$categories
        ]);
    }
    public function productsBestSellers($data)
    {
        return view("admin/productsBestSellers", [
            "data"=>$data
        ]);
    }

    public function productsInCategory($products, $category){
        return view("admin/products-admin", [
            "products"=>$products,
            "category"=>$category]);
}
    public function customers()
    {
        return view("admin/customers", [
        ]);
    }

    public function acceptOrders()
    {
        return view("admin/orders", [
        ]);
    }
    public function sendCoupon()
    {
        return view("admin/coupon", [
        ]);
    }

    public function showEditProduct($productId,$product){
        return view("admin/product-edit", [
            "productId"=>$productId,
            "product"=>$product
    ]);
    }
}