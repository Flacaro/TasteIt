<?php

namespace App\Views;

class VHomePage
{
    public function viewHomePageIfLogged($favId, $cartId, $categories, $bestSellers, $bestRated, $bestReviews, $products, $productsC) {
        return view('home', [
            'favId' => $favId,
            'cartId' => $cartId,
            'categories'=> $categories,
            'bestSellers'=> $bestSellers,
            'bestRateds'=> $bestRated,
            'bestReviews'=> $bestReviews,
            'products' => $products,
            'productsC' => $productsC
        ]);
    }

    public function About(){
        return view('aboutUs', [

        ]);
    }
}