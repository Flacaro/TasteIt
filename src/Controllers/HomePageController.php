<?php

namespace App\Controllers;

use App\Foundation\FCategory;
use App\Foundation\FProduct;
use App\Views\VHomePage;

class HomePageController
{
    //servirà a caricare tutti i dati nella home: categorie, best sellers ecc
 public function homeData($categories, $bestSellers){

 }
 public function visualizeHome(){
     $FCategory = new FCategory();
     $FProduct = new FProduct();
     $categories = $FCategory->getAll();
     $bestSellers = $FProduct->getBestSellers();
     $bestReviews = $FProduct->getBestReviews();
     $products = $FProduct->getAll();
     $b = $FProduct->getBestRated();
     //print_r($bestReviews);
;     $bestRated=array();
     foreach($b as $best){
         array_push($bestRated, $FProduct->load($best[1]));
     }
     //print_r($bestSellers);
     $vHome= new VHomePage();
     $vHome->viewHomePage($categories, $bestSellers, $bestRated, $bestReviews);
 }


    public function About(){
        return view('aboutUs', [

        ]);
    }
}

