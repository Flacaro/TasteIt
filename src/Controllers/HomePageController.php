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
     $FProduct = new FProduct();
     $PController = new ProductController();
     $bestsellers = $FProduct->getBestSellers();
     $bestreviews = $FProduct->getBestReviews();
     //$var=[
         //"pizza"=>[

        // ]
     //];
     //è orribile lo so non mi crocifiggete (devo fare in modo che prende solo i 4 con il rating più alto ma all'array associativo
     // non piacciono gli oggetti come chiavi e dovrei fa mille chiamate a db che no thx)
     $products = $FProduct->getAll();
     $bestRated=array();
     foreach($products as $product){
         $rating=$PController->getAverageRating($product->getId());
         if ($rating>4){
             array_push($bestRated, $product);
         }
     }

     return view('home', [
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

