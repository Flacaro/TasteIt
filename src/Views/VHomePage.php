<?php

namespace App\Views;

class VHomePage
{
    public function viewHomePage($categories, $bestsellers, $bestRated, $bestreviews){
        return view('home', [
            'categories'=> $categories,
            'bestsellers'=> $bestsellers,
            'bestrateds'=> $bestRated,
            'bestreviews'=> $bestreviews
        ]);
    }
}