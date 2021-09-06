<?php

namespace App\Views;

class VAdmin{
    public function visualizeAdminPanel()
    {
        return view("admin/adminPanel", [
        ]);
    }

    public function categoriesAdmin()
    {
        return view("admin/categories", [
        ]);
    }
    public function productsBestSellers()
    {
        return view("admin/productsBestSellers", [
        ]);
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
}