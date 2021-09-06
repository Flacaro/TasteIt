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
    public function customers($customers) {
        return view("admin/customers", [
           "customers" => $customers
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

    public function showEditProduct($categoryId,$productId,$product){
        return view("admin/product-edit", [
            "categoryId"=>$categoryId,
            "productId"=>$productId,
            "product"=>$product
    ]);
    }

    public function showCreateProduct($categoryId){
        return view("admin/product-add", [
            "categoryId"=>$categoryId
        ]);
    }

    public function showAddCategory(){
        return view("admin/categories-add", [
    ]);
    }
}