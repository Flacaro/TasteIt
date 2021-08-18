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
     $PController = new ProductController();
     $categories = $FCategory->getAll();
     $bestsellers = $FProduct->getBestSellers();
     //foreach
     //$image= $FCategory->getImageFromId($category->getImageId());
     //è orribile lo so non mi crocifiggete
     $products = $FProduct->getAll();
     $ratings=array();
     foreach($products as $product){
         $rating=$PController->getAverageRating($product->getId());
         if ($rating>4){
             $ratings[$rating] = $product;
         }
     }
     $bestRated=array_values($ratings);

     return view('home', [
         'categories'=> $categories,
         'bestsellers'=> $bestsellers,
         'bestrateds'=> $bestRated
     ]);
 }
}
