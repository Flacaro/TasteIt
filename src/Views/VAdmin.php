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
}