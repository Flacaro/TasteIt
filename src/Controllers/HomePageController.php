<?php

namespace App\Controllers;

use App\Foundation\FCategory;
use App\Foundation\FProduct;

class HomePageController
{
    //servirà a caricare tutti i dati nella home: categorie, best sellers ecc
 public function homeData($categories, $bestSellers){

 }
 public function visualizeHome(){
     $FCategory = new FCategory();
     $FProduct = new FProduct();
     $categories = $FCategory->getAll();
     $bestsellers = $FProduct->getBestSellers();
     $bestreviews = $FProduct->getBestReviews();
     //$var=[
         //"pizza"=>[

        // ]
     //];
     $products = $FProduct->getAll();
     $var=$FProduct->getBestRated();
     $bestRated=array();
     foreach($var as $best){
         array_push($bestRated, $FProduct->getById($best[1]));
     }

     return view('home', [
         'categories'=> $categories,
         'bestsellers'=> $bestsellers,
         'bestrateds'=> $bestRated,
         'bestreviews'=> $bestreviews
     ]);
 }
    public function About(){
        return view('aboutUs', [

        ]);
    }
}

