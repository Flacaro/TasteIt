<?php

namespace App\Views;

class VHomePage
{
    public function viewHomePageIfLogged($favId, $cartId, $categories, $bestSellers, $bestRateds, $bestReviews, $products, $productsC) {
        return view('home', [
            'favId' => $favId,
            'cartId' => $cartId,
            'categories'=> $categories,
            'bestSellers'=> $bestSellers,
            'bestRateds'=> $bestRateds,
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