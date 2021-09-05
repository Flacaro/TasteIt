<?php

namespace App\Views;

class VAuth
{
    public function visualizeLogin($message)
    {
        return view("auth/login", [
            "message" => $message
        ]);
    }

    public function visualizeSignUp($message)
    {
        return view("auth/sign-up", [
            "message" => $message
        ]);
    }

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