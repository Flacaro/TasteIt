<?php

namespace App\Views;

class VHomePage
{
    public function viewHomePage($categories, $bestSellers, $bestRated, $bestReviews, $products){
        return view('home', [
            'categories'=> $categories,
            'bestSellers'=> $bestSellers,
            'bestRateds'=> $bestRated,
            'bestReviews'=> $bestReviews,
            'products' => $products
        ]);
    }
}